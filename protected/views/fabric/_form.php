<?php
/* @var $this FabricController */
/* @var $model Fabric */
/* @var $form CActiveForm */
?>

<div class="form">
<?php
Yii::app()->clientScript
        ->registerCoreScript('jquery');
//Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/blockui.js');
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fabric-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=> array('validateOnSubmit'=>true),
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fabric_code'); ?>
		<?php echo $form->textField($model,'fabric_code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fabric_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_name'); ?>
		<?php echo $form->textField($model,'colour_name',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'colour_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_ids'); ?>
        <?php $list = CHtml::listData(Product::model()->findAll(),'product_id','proname');
              echo $form->checkBoxList($model,'product_ids',$list,array('separator'=>' ', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'product_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fabric_thumb'); ?>
        <?php echo $form->fileField($model, 'fabric_thumb', array('maxlength' => 500)); ?>
		<?php echo $form->error($model,'fabric_thumb'); ?>
	</div>
    <?php if($model->isNewRecord!='1'){ ?>
    <div class="row">
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/album/fabric/'.$model->fabric_id.'/'.$model->fabric_thumb,"image",array("width"=>50,"height"=>50));   // Image shown here if page is update page ?>
    </div>
    <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fabric_big'); ?>
		<?php echo $form->fileField($model, 'fabric_big', array('maxlength' => 500)); ?>
		<?php echo $form->error($model,'fabric_big'); ?>
	</div>
    <?php if($model->isNewRecord!='1'){ ?>
    <div class="row">
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/album/fabric/'.$model->fabric_id.'/thumbs/'.$model->fabric_big,"image",array("width"=>100,"height"=>100));   // Image shown here if page is update page ?>
    </div>
    <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'house_1'); ?>
		<?php echo $form->fileField($model, 'house_1', array('maxlength' => 500)); ?>
		<?php echo $form->error($model,'house_1'); ?>
	</div>
    <?php if($model->isNewRecord!='1'){ ?>
    <div class="row">
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/album/fabric/'.$model->fabric_id.'/thumbs/'.$model->house_1,"image",array("width"=>100,"height"=>100));   // Image shown here if page is update page ?>
    </div>
    <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'house_2'); ?>
		<?php echo $form->fileField($model, 'house_2', array('maxlength' => 500)); ?>
		<?php echo $form->error($model,'house_2'); ?>
	</div>
    <?php if($model->isNewRecord!='1'){ ?>
    <div class="row">
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/album/fabric/'.$model->fabric_id.'/thumbs/'.$model->house_2,"image",array("width"=>100,"height"=>100));   // Image shown here if page is update page ?>
    </div>
    <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo $form->radioButtonList($model, 'isactive', array('1'=>'Yes', '2'=>'No'),array('separator'=>'', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit',array('id' => 'btSubmit')); ?>
        <?php echo CHtml::button('Cancel',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 12px;'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php /*<script>
$(document).ready(function() { 
    $('#btSubmit').click(function() { 
        $.blockUI({ 
            message: '<h1>Submitting!</h1>', 
            timeout: 2000 
        }); 
    }); 
});
</script> */ ?>