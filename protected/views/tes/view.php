<?php
/* @var $this TesController */
/* @var $model Tes */

$this->breadcrumbs=array(
	'Tes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tes', 'url'=>array('index')),
	array('label'=>'Create Tes', 'url'=>array('create')),
	array('label'=>'Update Tes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tes', 'url'=>array('admin')),
);
?>

<h1>View Tes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tes',
	),
)); ?>
