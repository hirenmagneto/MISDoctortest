<?php
/* @var $this TestController */
/* @var $model Test */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'test_id'); ?>
		<?php echo $form->textField($model,'test_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'test_category_id'); ?>
		<?php echo $form->textField($model,'test_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'test_name'); ?>
		<?php echo $form->textField($model,'test_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'test_time'); ?>
		<?php echo $form->textField($model,'test_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'test_question'); ?>
		<?php echo $form->textField($model,'test_question'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'negative_mark'); ?>
		<?php echo $form->textField($model,'negative_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'passing_mark'); ?>
		<?php echo $form->textField($model,'passing_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade_A'); ?>
		<?php echo $form->textField($model,'grade_A'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade_B'); ?>
		<?php echo $form->textField($model,'grade_B'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade_C'); ?>
		<?php echo $form->textField($model,'grade_C'); ?>
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