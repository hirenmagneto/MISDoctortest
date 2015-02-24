<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'series_name'); ?>
		<?php echo $form->textField($model,'series_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operation_type'); ?>
		<?php echo $form->textField($model,'operation_type',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'features'); ?>
		<?php echo $form->textField($model,'features',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prod_width'); ?>
		<?php echo $form->textField($model,'prod_width',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prod_projection'); ?>
		<?php echo $form->textField($model,'prod_projection',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frame_colour'); ?>
		<?php echo $form->textField($model,'frame_colour',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cassette_size'); ?>
		<?php echo $form->textField($model,'cassette_size',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leg_screw'); ?>
		<?php echo $form->textField($model,'leg_screw',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mandatory_bolt'); ?>
		<?php echo $form->textField($model,'mandatory_bolt',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'torsion_bar'); ?>
		<?php echo $form->textField($model,'torsion_bar',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adjustable_pitch'); ?>
		<?php echo $form->textField($model,'adjustable_pitch',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roller_tube'); ?>
		<?php echo $form->textField($model,'roller_tube',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arm_cables'); ?>
		<?php echo $form->textField($model,'arm_cables',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'springs'); ?>
		<?php echo $form->textField($model,'springs',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'front_bar'); ?>
		<?php echo $form->textField($model,'front_bar',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arm'); ?>
		<?php echo $form->textField($model,'arm',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wall_bracket'); ?>
		<?php echo $form->textField($model,'wall_bracket',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soffit_bracket'); ?>
		<?php echo $form->textField($model,'soffit_bracket',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'worm_gear'); ?>
		<?php echo $form->textField($model,'worm_gear',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motor_remote'); ?>
		<?php echo $form->textField($model,'motor_remote',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manual_motor'); ?>
		<?php echo $form->textField($model,'manual_motor',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'power_cord_plug'); ?>
		<?php echo $form->textField($model,'power_cord_plug',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fabric'); ?>
		<?php echo $form->textField($model,'fabric',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mildew_resistant'); ?>
		<?php echo $form->textField($model,'mildew_resistant',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'water_repellent'); ?>
		<?php echo $form->textField($model,'water_repellent',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_key'); ?>
		<?php echo $form->textField($model,'meta_key',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>6, 'cols'=>50)); ?>
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