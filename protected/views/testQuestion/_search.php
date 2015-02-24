<?php
/* @var $this TestQuestionController */
/* @var $model TestQuestion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'question_id'); ?>
		<?php echo $form->textField($model,'question_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'test_category_id'); ?>
		<?php echo $form->textField($model,'test_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'test_id'); ?>
		<?php echo $form->textField($model,'test_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question_name'); ?>
		<?php echo $form->textField($model,'question_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	
	<div class="row">
		<?php echo $form->label($model,'single_multiple'); ?>
		<?php echo $form->textField($model,'single_multiple',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question_order'); ?>
		<?php echo $form->textField($model,'question_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isactive'); ?>
		<?php echo $form->textField($model,'isactive',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->