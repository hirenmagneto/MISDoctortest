<?php
/* @var $this TblContentController */
/* @var $model TblContent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-content-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'layout_id'); ?>
        <?php echo $form->dropDownList($model,'layout_id',array(1=>'Layout 1',2=>'Layout 2',3=>'Layout 3')); ?>
		<?php echo $form->error($model,'layout_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_id'); ?>
		<?php echo $form->dropDownList($model,'menu_id',array(1=>'Menu 1',2=>'Menu 2',3=>'Menu 3')); ?>
		<?php echo $form->error($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_title'); ?>
		<?php echo $form->textField($model,'content_title',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'content_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_title_slug'); ?>
		<?php echo $form->textField($model,'content_title_slug',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'content_title_slug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_desc'); ?>
		<?php echo $form->textArea($model,'content_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_key'); ?>
		<?php echo $form->textField($model,'meta_key',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?> 
        <?php echo  $form->radioButtonList($model,'isactive',array('1'=>'Is Active', '2'=>'Not Active'),array('separator'=>'')); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->