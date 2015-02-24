<?php
/* @var $this TestController */
/* @var $model Test */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'test_category_id'); ?>
		<?php $model1=Testcategory::model()->findAll();
			  $list = CHtml::listData($model1, 'category_id', 'category_name');
			  echo $form->dropDownList($model,'test_category_id', $list, array('prompt'=>'Select Category')); 
			  echo $form->error($model,'test_category_id');   
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'test_name'); ?>
		<?php echo $form->textField($model,'test_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'test_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'test_time'); ?>
		<?php echo $form->textField($model,'test_time'); ?>
		<?php echo $form->error($model,'test_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'test_question'); ?>
		<?php echo $form->textField($model,'test_question'); ?>
		<?php echo $form->error($model,'test_question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negative_mark'); ?>
		<?php echo $form->textField($model,'negative_mark'); ?>
		<?php echo $form->error($model,'negative_mark'); ?>
		<?php //echo Html::tag('span', 'tooltip', ['title'=>'This is a test tooltip','data-toggle'=>'tooltip','style'=>'text-decoration: underline; cursor:pointer;']);?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passing_mark'); ?>
		<?php echo $form->textField($model,'passing_mark'); ?>
		<?php echo $form->error($model,'passing_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade_A'); ?>
		<?php echo $form->textField($model,'grade_A'); ?>
		<?php echo $form->error($model,'grade_A'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade_B'); ?>
		<?php echo $form->textField($model,'grade_B'); ?>
		<?php echo $form->error($model,'grade_B'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade_C'); ?>
		<?php echo $form->textField($model,'grade_C'); ?>
		<?php echo $form->error($model,'grade_C'); ?>
	</div>
 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::button('Cancel',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 12px;'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->