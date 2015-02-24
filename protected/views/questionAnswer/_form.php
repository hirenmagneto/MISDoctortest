<?php
/* @var $this QuestionAnswerController */
/* @var $model QuestionAnswer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-answer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'question_id'); ?>
		<?php echo $form->textField($model,'question_id'); ?>
		<?php echo $form->error($model,'question_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'question_option'); ?>
		<?php echo $form->textField($model,'question_option',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'question_option'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'right_answer'); ?>
		<?php echo $form->textField($model,'right_answer',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'right_answer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->