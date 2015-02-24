<?php
/* @var $this GallaryController */
/* @var $model Gallary */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'gallary_id'); ?>
		<?php echo $form->textField($model,'gallary_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallary_order'); ?>
		<?php echo $form->textField($model,'gallary_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallary_name'); ?>
		<?php echo $form->textField($model,'gallary_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallary_path'); ?>
		<?php echo $form->textField($model,'gallary_path',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallary_type'); ?>
		<?php echo $form->textField($model,'gallary_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallary_desc'); ?>
		<?php echo $form->textArea($model,'gallary_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isactive'); ?>
		<?php echo $form->textField($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->