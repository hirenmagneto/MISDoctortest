<?php
/* @var $this ContentController */
/* @var $model Content */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'clientOptions'=> array('validateOnSubmit'=>true),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'layout_id'); ?>
        <?php 
            foreach($layout_data as $layout_id=>$images){
                
                echo $form->radioButton($model,'layout_id',array('value'=>$layout_id,'uncheckValue'=>null));
                echo '&nbsp;&nbsp;';
                $url = Yii::app()->request->baseUrl.'/images/album/layout/'.$layout_id.'/'.$images[0];
                $this->widget('ext.lyiightbox.LyiightBox2', array(
                    'thumbnail' => $url,
                    'image' => $url,
                    'title' => 'Layout : '.$layout_id,
                    'group' => $layout_id
                ));
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                foreach(array_slice($images,1) as $image){ 
                    //echo CHtml::image(Yii::app()->request->baseUrl.'/images/album/layout/'.$image);
                    $url = Yii::app()->request->baseUrl.'/images/album/layout/'.$layout_id.'/'.$image;
                    $this->widget('ext.lyiightbox.LyiightBox2', array(
                    'thumbnail' => $url,
                    'image' => $url,
                    'title' => 'Layout : '.$layout_id,
                    'visible' => false,
                    'group' => $layout_id
                    ));
                } 
            }
		?>
		<?php echo $form->error($model,'layout_id',array(),false,false); ?>
	</div>
<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'menu_id'); ?>
        <?php
			$models = Menu::model()->findAll(array("condition" => "isactive = 1"));		
			$list = CHtml::listData($models,'menu_id', 'menu_name');		
			//echo CHtml::dropDownList('Content[menu_id]','', $list,array('empty' => 'Select Menu'));
            echo $form->dropDownList($model,'menu_id', $list, array('prompt'=>'Select Menu')); 
		?>
		<?php echo $form->error($model,'menu_id',array(),false); ?>
	</div>
*/ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'content_title'); ?>
		<?php echo $form->textField($model,'content_title',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'content_title',array(),false); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_title_slug'); ?>
		<?php echo $form->textField($model,'content_title_slug',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'content_title_slug'); ?>
	</div>
 <script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
	<div class="row">
		<?php echo $form->labelEx($model,'content_desc'); ?>
		<?php echo $form->textArea($model,'content_desc',array('rows'=>6, 'cols'=>50, 'id'=>'content_desc')); ?>
		<?php echo $form->error($model,'content_desc',array(),false,false); ?>
	</div>
    <div class="row">
<script type="text/javascript">
    CKEDITOR.replace( 'content_desc', {
         filebrowserBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=files',
         filebrowserImageBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=images',
         filebrowserFlashBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=flash',
         filebrowserUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=files',
         filebrowserImageUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=images',
         filebrowserFlashUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=flash'
    });
</script>
    <?php echo $form->error($model,'content_desc',array(),false); ?>
    </div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'meta_key'); ?>
		<?php echo $form->textField($model,'meta_key',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_key',array(),false); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_title',array(),false); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_description',array(),false); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
        <?php echo $form->radioButtonList($model, 'isactive', array('1'=>'Yes', '2'=>'No'),array('separator'=>'', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'isactive',array(),false); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit'); ?>
        <?php echo CHtml::button('Cancel',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 12px;'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script> 
function slugify(text)
{
  return text.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
}
$('#Content_content_title').bind('keyup', function(){
    var title = $(this).value;
    var slug = slugify(title);
    jQuery('#Content_content_title_slug').val(slug);
    
});
$('#Content_content_title_slug').bind('blur', function(){
    var title = $(this).value;
    var slug = slugify(title);
    jQuery('#Content_content_title_slug').val(slug);
});
</script>