<?php
/* @var $this TesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tes',
);

$this->menu=array(
	array('label'=>'Create Tes', 'url'=>array('create')),
	array('label'=>'Manage Tes', 'url'=>array('admin')),
);
?>

<h1>Tes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
