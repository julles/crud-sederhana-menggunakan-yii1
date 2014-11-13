<?php
/* @var $this TesController */
/* @var $data Tes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tes')); ?>:</b>
	<?php echo CHtml::encode($data->tes); ?>
	<br />


</div>