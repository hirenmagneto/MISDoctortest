<?php
/* @var $this GallaryController */
/* @var $model Gallary */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/ckeditor/ckeditor.js'); ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gallary-form',
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
		<?php echo $form->labelEx($model,'gallary_type'); ?>
		<?php //echo $form->textField($model,'gallary_type',array('size'=>50,'maxlength'=>50)); 
              echo $form->dropDownList($model,'gallary_type', array('Home Page Banner'=>'Home Page Banner','Test Demo Video'=>'Test Demo Video'), array('prompt'=>'Select Gallary Type'));        
        ?>
		<?php echo $form->error($model,'gallary_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gallary_name'); ?>
		<?php echo $form->textField($model,'gallary_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gallary_name'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'gallary_order'); ?>
		<?php echo $form->textField($model,'gallary_order'); ?>
		<?php echo $form->error($model,'gallary_order'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'gallary_path'); ?>
        <?php echo $form->fileField($model, 'gallary_path', array('maxlength' => 500)); ?>
		<?php //echo $form->textField($model,'gallary_path',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'gallary_path'); ?>
	</div>
    <?php /* <p><b>-- OR --</b></p>
   	<label for="Gallary_gallary_url">Video external URL</label>
    <input id="Gallary_gallary_url" type="text" name="Gallary[gallary_url]" size="60" />
    */ ?>
    
    <div class="row">
    <?php  
    if($model->isNewRecord!='1'){ 
        if(exif_imagetype(Yii::app()->basePath . '/../images/gallary/'.$model->gallary_path) != null){
            echo CHtml::image(Yii::app()->request->baseUrl.'/images/gallary/'.$model->gallary_path,"image",array("width"=>750,"height"=>250));
        }else{
            echo '<b>Current Video : </b>'.basename(Yii::app()->request->baseUrl.'/images/gallary/'.$model->gallary_path);
        }   
     } 
     ?>
    </div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'gallary_desc'); ?>
		<?php echo $form->textArea($model,'gallary_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'gallary_desc'); ?>
	</div>
<script type="text/javascript">
    CKEDITOR.replace('Gallary_gallary_desc', {
         filebrowserBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=files',
         filebrowserImageBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=images',
         filebrowserFlashBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=flash',
         filebrowserUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=files',
         filebrowserImageUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=images',
         filebrowserFlashUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=flash'
    });
</script>
	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php //echo $form->textField($model,'isactive'); ?>
        <?php echo $form->radioButtonList($model,'isactive',array('1'=>'Active', '2'=>'Not Active'),array('separator'=>'', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit'); ?>
        <?php echo CHtml::button('Cancel',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 12px;'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->