<?php
/* @var $this AlbumController */
/* @var $model Album */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'album-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'album_order_id'); ?>
		<?php echo $form->textField($model,'album_order_id'); ?>
		<?php echo $form->error($model,'album_order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_name'); ?>
		<?php echo $form->textField($model,'image_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_path'); ?>
		<?php echo $form->textField($model,'image_path',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'image_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_type'); ?>
		<?php echo $form->textField($model,'image_type'); ?>
		<?php echo $form->error($model,'image_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_type_id'); ?>
		<?php echo $form->textField($model,'image_type_id'); ?>
		<?php echo $form->error($model,'image_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
		<?php echo $form->error($model,'updated_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->