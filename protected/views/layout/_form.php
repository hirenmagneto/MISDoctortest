<?php
/* @var $this LayoutController */
/* @var $model Layout */
/* @var $form CActiveForm */
?>

<div class="form">
<?php
Yii::app()->clientScript
        ->registerCoreScript('jquery');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/blockui.js');
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'layout-form',
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
		<?php echo $form->labelEx($model,'layout_name'); ?>
		<?php echo $form->textField($model,'layout_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'layout_name'); ?>
	</div>
    
    <div class="row">
        <label class="required" for="">Layout Images <span class="required">*</span></label>
        <?php $this->renderPartial('upload',array()); ?>
    </div>
    
    <div class="clear"></div>
    <style>
    .row .old_images li {
        display: block;
        float: left;
        margin: 10px;
        position: relative;
    }
    .del{
        position: absolute;
        right: -4px;
        top: -7px;
        z-index: 9;
        height: 20px;
        width: 20px;
        background-image: url(<?php echo Yii::app()->baseUrl; ?>/images/delete.png);  /* shows image */
        
    
        /* Hide the text. */
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
    }
    </style>
    <?php if($model->isNewRecord!='1'){ ?>
    <div class="row">
        <?php $list = CHtml::listData(Album::model()->findAll(array("condition"=>"image_type = 1 and image_type_id = $model->layout_id","order"=>"album_order_id")),'album_id','image_path');
              foreach($list as $image=>$path){ ?>
                <ol class="old_images">
                    <li id=<?php echo $image; ?> > 
                        <img src="<?php echo Yii::app()->request->baseUrl.$path; ?>" width='100' height="100"/>
                        <?php 
                            echo CHtml::ajaxLink(
                            	'D',          // the link body (it will NOT be HTML-encoded.)
                            	array('/album/delete/'.$image), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
                            	array(
                                    'type'=>'POST',
                            		'update'=>"#$image"
                            	),
                                array('confirm'=> 'Are you sure you want to delete?','class'=>'del')
                            );
                        ?>
                    </li>
                </ol>
              <?php }
              //echo '<pre>';print_r($imgs);exit; 
        //echo CHtml::image(Yii::app()->request->baseUrl.'/images/album/fabric/'.$model->fabric_id.'/thumbs/'.$model->house_2,"image",array("width"=>100,"height"=>100));   // Image shown here if page is update page ?>
    </div>
    <?php } ?>
    
    <div class="clear"></div>
    <br />
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