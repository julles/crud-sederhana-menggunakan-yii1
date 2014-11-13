<?php
/* @var $this TesController */
/* @var $model Tes */

$this->breadcrumbs=array(
	'Tes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tes', 'url'=>array('index')),
	array('label'=>'Manage Tes', 'url'=>array('admin')),
);
?>

<h1>Create Tes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>