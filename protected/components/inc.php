<?php	
	class inc
	{
		public $controller;
		public $yii;
		
		public function __construct()
		{
			$this->yii = Yii::app();
			$this->controller = $this->yii->controller;
		}
		
		public static  function root_url($plus = "")
		{
			$inc = new inc;
			
			$link = "/".$inc->controller->id.$plus;
			$hasil = $inc->yii->createUrl($link);
			return $hasil;
		}
		
		public static function enkrip($param)
		{
			return md5(md5(md5("apprestorezakikiw".$param)));
		}
	}