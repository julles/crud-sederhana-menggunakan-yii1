
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation' => true , 
	'clientOptions' => array(
		 'validateOnChange'=>true,
         'validateOnType'=>true,
         'validateOnSubmit'=>true
	)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'role_id'); ?>
		<?php echo $form->dropDownList($model,'role_id', $dataRole , array('empty' => '-')); ?>
		<?php echo $form->error($model,'role_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'verifikasi_password'); ?>
		<?php echo $form->passwordField($model,'verifikasi_password',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'verifikasi_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>