<?php
/* @var $this LayoutController */
/* @var $model Layout */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'layout_id'); ?>
		<?php echo $form->textField($model,'layout_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'layout_name'); ?>
		<?php echo $form->textField($model,'layout_name',array('size'=>60,'maxlength'=>255)); ?>
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