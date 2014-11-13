<?php
/* @var $this TesController */
/* @var $model Tes */

$this->breadcrumbs=array(
	'Tes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tes', 'url'=>array('index')),
	array('label'=>'Create Tes', 'url'=>array('create')),
	array('label'=>'View Tes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tes', 'url'=>array('admin')),
);
?>

<h1>Update Tes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>