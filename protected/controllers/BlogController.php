<?php

	class UserController extends Controller
	{
		public $layout = '//layouts/column1';
		
		
		public function filters()
		{
			return array(
				'accessControl', 
				'postOnly + delete',
			);
		}
		
		public function accessRules()
		{
			return array(
				
				array('allow', 
					'actions'=>array('create','update' , 'hapus','index'),
					'users'=>array('*'),
				),
				
				array('deny',  // deny all users
					'users'=>array('*'),
				),
			);
		}
		
		public function actionIndex()
		{
			$model=new MasBlog('search');
			$inc = new inc;
			$model->unsetAttributes();
			if(isset($_GET['MasBlog']))
				$model->attributes=$_GET['MasBlog'];

			$this->render('index',array(
				'model'=>$model,
				'inc' => $inc
			));
		}
		
		public function dataRole()
		{
			$all = MasRole::model()->findAll();
			$data = CHtml::listData($all , 'id' , 'role');
			return $data;
		}
		
		public function actionCreate()
		{
			$model = new MasBlog;
		
			if(isset($_POST['MasBlog']))
			{
				$model->attributes = $_POST['MasBlog'];
				if($model->save())
				{
					Yii::app()->user->setFlash('success' , 'Data telah disimpan!');
					$this->redirect(array('index'));
				}
			}
			$this->render('_form' , array(
				'model' => $model,
				'dataRole' => $this->dataRole(),
			));
		}
		
		public function actionUpdate($oid)
		{
			$model = $this->loadModel($oid);
			$model->password = '';
			if(isset($_POST['MasBlog']))
			{
				$model->attributes = $_POST['MasBlog'];
				if($model->save())
				{
					Yii::app()->user->setFlash('success' , 'Data telah diedit!');
					$this->redirect(array('index'));
				}
			}
			$this->render('_form' , array(
				'model' => $model,
				'dataRole' => $this->dataRole(),
			));
		}
		
		public function actionHapus($oid , $token)
		{
				$cek = inc::enkrip($oid); // enkrip id agar sama dengan token
				if($cek == $token)  //cek dulu sama apa engga token sama id
				{
					
					try								// kenapa di try dulu , soal nya pake foreign key , kalo ada id ini  yang terkait sama table lain ga bisa didelete , kalo ga di try dulu pasti error keluar nya :)
					{
						$model = $this->loadModel($oid);
						if($model->delete())
						{
							Yii::app()->user->setFlash('success' , 'Data telah dihapus!');
							$this->redirect(array('index'));
						}
					}catch (Exception $e){
							Yii::app()->user->setFlash('danger' , 'Data gagal dihapus! data ini masih digunakan dengan data lain');
							$this->redirect(array('index'));
					}
				}else{
					throw new CHttpException(404, 'Halaman tidak ditemukan!');
				}
		
		}
		
		public function loadModel($id)
		{
			$model=MasBlog::model()->findByPk($id);
			if($model===null)
				throw new CHttpException(404,'The requested page does not exist.');
			return $model;
		}
		
		protected function performAjaxValidation($model)
		{
			if(isset($_POST['ajax']) && $_POST['ajax']==='tes-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
		}
	}