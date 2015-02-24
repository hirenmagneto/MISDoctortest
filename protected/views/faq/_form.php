<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/ckeditor/ckeditor.js'); ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faq-form',
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
		<?php echo $form->labelEx($model,'faq_question'); ?>
		<?php //echo $form->textArea($model,'faq_question',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->textField($model,'faq_question',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'faq_question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faq_answer'); ?>
		<?php echo $form->textArea($model,'faq_answer',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'faq_answer'); ?>
	</div>
<script type="text/javascript">
    CKEDITOR.replace('Faq_faq_answer', {
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