<?php
/* @var $this ContactUsController */
/* @var $model ContactUs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-us-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<?php echo $form->textField($model,'email_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_1'); ?>
		<?php echo $form->textField($model,'address_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_2'); ?>
		<?php echo $form->textField($model,'address_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model,'zip_code',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'series'); ?>
		<?php echo $form->textField($model,'series',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'series'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operation'); ?>
		<?php echo $form->textField($model,'operation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'operation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model_number'); ?>
		<?php echo $form->textField($model,'model_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'model_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'series_number'); ?>
		<?php echo $form->textField($model,'series_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'series_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_purchase'); ?>
		<?php echo $form->textField($model,'date_of_purchase',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'date_of_purchase'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_of_purchare'); ?>
		<?php echo $form->textField($model,'store_of_purchare',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'store_of_purchare'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upload_file'); ?>
		<?php echo $form->textField($model,'upload_file',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'upload_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fabric_color_1'); ?>
		<?php echo $form->textField($model,'fabric_color_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fabric_color_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fabric_color_2'); ?>
		<?php echo $form->textField($model,'fabric_color_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fabric_color_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enquiry_type'); ?>
		<?php echo $form->textField($model,'enquiry_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'enquiry_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip_address'); ?>
		<?php echo $form->textField($model,'ip_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ip_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_name'); ?>
		<?php echo $form->textField($model,'country_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'country_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->