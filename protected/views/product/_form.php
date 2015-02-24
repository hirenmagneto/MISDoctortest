<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=> array('validateOnSubmit'=>true),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prod_category_id'); ?>
		<?php 
        $models = ProductCategory::model()->findAll(array("condition" => "isactive = 1",'order' => 'category_order_id'));
        $list = CHtml::listData($models,'prod_category_id', 'category_name');
        echo $form->dropDownList($model,'prod_category_id', $list, array('prompt'=>'Select product category')); ?>
		<?php echo $form->error($model,'prod_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'series_name'); ?>
        <?php //echo $form->radioButtonList($model, 'series_name', array('C Series'=>'C Series', 'L Series'=>'L Series'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->textField($model,'series_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'series_name'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'product_desc'); ?>
		<?php echo $form->textArea($model,'product_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'product_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'series_name'); ?>
		<?php echo $form->textField($model,'series_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'series_name'); ?>
	</div>--!>

	<div class="row">
		<?php echo $form->labelEx($model,'operation_type'); ?>
        <?php echo $form->radioButtonList($model, 'operation_type', array('Manual'=>'Manual', 'Electric'=>'Electric'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php //echo $form->textField($model,'operation_type',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'operation_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'features'); ?>
		<?php echo $form->textField($model,'features',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'features'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prod_width'); ?>
		<?php echo $form->textField($model,'prod_width',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'prod_width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prod_projection'); ?>
		<?php echo $form->textField($model,'prod_projection',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'prod_projection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frame_colour'); ?>
		<?php /*
                $this->widget('ext.SMiniColors.SActiveColorPicker', array(
                'model' => $model,
                'attribute' => 'frame_colour',
                'hidden'=>false, // defaults to false - can be set to hide the textarea with the hex
                'options' => array('control'=>'wheel',), // jQuery plugin options
                'htmlOptions' => array(), // html attributes
                ));
            */
        
        echo $form->textField($model,'frame_colour',array('size'=>60,'maxlength'=>500)); ?>
        <div id="color" style="height: 30px; width: 30px;margin-right:430px; float: right; display: block;">&nbsp;</div>
		<?php echo $form->error($model,'frame_colour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cassette_size'); ?>
		<?php echo $form->textField($model,'cassette_size',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'cassette_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leg_screw'); ?>
		<?php echo $form->textField($model,'leg_screw',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'leg_screw'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mandatory_bolt'); ?>
		<?php echo $form->textField($model,'mandatory_bolt',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'mandatory_bolt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'torsion_bar'); ?>
		<?php echo $form->textField($model,'torsion_bar',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'torsion_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adjustable_pitch'); ?>
		<?php echo $form->radioButtonList($model, 'adjustable_pitch', array('1'=>'Yes', '2'=>'No'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'adjustable_pitch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roller_tube'); ?>
		<?php echo $form->textField($model,'roller_tube',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'roller_tube'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arm_cables'); ?>
		<?php echo $form->textField($model,'arm_cables',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'arm_cables'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'springs'); ?>
		<?php echo $form->textField($model,'springs',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'springs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'front_bar'); ?>
		<?php echo $form->textField($model,'front_bar',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'front_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arm'); ?>
		<?php echo $form->textField($model,'arm',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'arm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wall_bracket'); ?>
		<?php echo $form->radioButtonList($model, 'wall_bracket', array('1'=>'Yes', '2'=>'No'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'wall_bracket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soffit_bracket'); ?>
		<?php echo $form->radioButtonList($model, 'soffit_bracket', array('1'=>'Yes', '2'=>'No'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'soffit_bracket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'worm_gear'); ?>
		<?php echo $form->textField($model,'worm_gear',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'worm_gear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motor_remote'); ?>
		<?php echo $form->textField($model,'motor_remote',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'motor_remote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manual_motor'); ?>
		<?php echo $form->textField($model,'manual_motor',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'manual_motor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'power_cord_plug'); ?>
		<?php echo $form->textField($model,'power_cord_plug',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'power_cord_plug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fabric'); ?>
		<?php echo $form->textField($model,'fabric',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'fabric'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mildew_resistant'); ?>
		<?php echo $form->radioButtonList($model, 'mildew_resistant', array('1'=>'Yes', '2'=>'No'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'mildew_resistant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'water_repellent'); ?>
		<?php echo $form->radioButtonList($model, 'water_repellent', array('1'=>'Yes', '2'=>'No'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'water_repellent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_key'); ?>
		<?php echo $form->textField($model,'meta_key',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo $form->radioButtonList($model, 'isactive', array('1'=>'Yes', '2'=>'No'),array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit'); ?>
        <?php echo CHtml::button('Cancel',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 12px;'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
$(document).ready(function() {
    
    $('#Product_frame_colour').bind('keyup', function(){
        var title1 = document.getElementById("Product_frame_colour").value;
        jQuery('#color').css("background-color",title1);
    });
    var title1 = document.getElementById("Product_frame_colour").value;
    jQuery('#color').css("background-color",title1);
    /*$('#News_news_title_slug').bind('blur', function(){
        var title2 = document.getElementById("News_news_title_slug").value;
        var slug = slugify(title2);
        jQuery('#News_news_title_slug').val(slug);
    });*/
});
</script>