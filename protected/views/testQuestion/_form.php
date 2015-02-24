<?php
/* @var $this TestQuestionController */
/* @var $model TestQuestion */
/* @var $form CActiveForm */
?>

<div class="form">
<?php 
//echo  $model['question_id'];
//print_r($model);?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-question-form',
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
		<?php echo $form->labelEx($model,'test_id'); ?>
		<?php $model1=Test::model()->findAll();
			  $list = CHtml::listData($model1, 'test_id', 'test_name');
			  echo $form->dropDownList($model,'test_id', $list, array('prompt'=>'Select Test Name')); 
			  echo $form->error($model,'test_id');   
		?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'question_name'); ?>
		<?php echo $form->textField($model,'question_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'question_name'); ?>
	</div>
	<?php if(empty($model['question_id'])){ ?>
    <div class="div_option"> 
		<div class="row">
			<?php echo CHtml::label('option1',''); ?>
			<?php echo CHtml::textField('txt_option[0]','',array('id'=>'name','size'=>60, 'maxlength'=>200)); ?>
			<?php //echo CHtml::checkBox('chk_right_option1','',array('value'=>1,'uncheckValue' => null,'style'=>'margin-top:7px;')); ?>
			<?php //echo '<input type="checkBox" name="chk_right_option[]" value="1" uncheckValue="0">'; ?>
			<?php echo '<input type="checkBox" class="chk_right" name="chk_right_option_0" value="1" >'; ?>
			<?php echo '<input type="button" value="Remove" id="chk_right_delete_1" class="chk_right_delete">'; ?>
			
		</div>

		<div class="row">
			<?php echo CHtml::label('option2',''); ?>
			<?php echo CHtml::textField('txt_option[1]','',array('id'=>'name','size'=>60, 'maxlength'=>200)); ?>			
			<?php //echo CHtml::checkBox('chk_right_option2','',array('value'=>1,'uncheckValue' => null,'style'=>'margin-top:7px;')); ?>
			<?php //echo '<input type="checkBox" name="chk_right_option[]" value="1" uncheckValue="0">';?>
			<?php echo '<input type="checkBox" class="chk_right" name="chk_right_option_1" value="1" >';?>
			<?php echo '<input type="button" value="Remove" id="chk_right_delete_2" class="chk_right_delete">'; ?>
		</div>
		<?php echo CHtml::button('Add Option',array('id'=>'add_option'),array('style'=>'font-size: 12px;'));  ?>
		<?php //echo CHtml::button('Remove Option',array('id'=>'remove_option'),array('style'=>'font-size: 12px;'));  ?>
		
    </div> 
	<?php }else{
		echo '<div class="div_option_update">'; 
		
		// FIND record from the QuestionAnswer
		$sql1=QuestionAnswer::model()->findAllByAttributes(array('question_id'=>$model['question_id']));
		//print_r($sql1);
		$j=0;
		foreach ($sql1 as $key=>$value) {
	    echo '<div class="row">';
				$key++;
				$ans=$value['question_option'];
				//print_r($value);
				if($value['right_answer']==1){$checked='checked="checked"';}else{$checked='';}
				$value_answer=$value['right_answer'];
				echo CHtml::label("option$key",''); 
				echo CHtml::textField("txt_option[$j]",$ans,array('id'=>'name','size'=>60, 'maxlength'=>200)); ?>
				<input type="checkBox" class="chk_right" name="chk_right_option_<?php echo $key - 1?>" value="1" <?php if($value_answer==1){echo 'checked="checked"';} ?> >
				<input type="button" value="Remove" id="chk_right_delete_<?php echo $key;?>" class="chk_right_delete">
			</div>
		<?php
		$j++;
		}
			 echo CHtml::button('Add Option',array('id'=>'add_option_update'),array('style'=>'font-size: 12px;'));
			 //echo CHtml::button('Remove Option',array('id'=>'remove_option_update'),array('style'=>'font-size: 12px;')); 
	echo '</div>';	
	}?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'single_multiple'); ?>
		<?php // echo $form->textField($model,'single_multiple',array('size'=>1,'maxlength'=>1)); ?>
		<?php //echo $form->error($model,'single_multiple'); ?>
		<?php echo $form->radioButtonList($model,'single_multiple',array('1'=>'Single', '2'=>'Multiple'),array('separator'=>'', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'single_multiple'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'question_order'); ?>
		<?php echo $form->textField($model,'question_order'); ?>
		<?php echo $form->error($model,'question_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
        <?php echo $form->radioButtonList($model,'isactive',array('1'=>'Active', '0'=>'Not Active'),array('separator'=>'', 'labelOptions'=>array('style'=>'display:inline;margin-right: 10px;'))); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::button('Cancel',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 12px;'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script>
 $(document).ready(function(){
	<?php $i=2;  ?>
	var update_len=$(".div_option_update > .row").length;
	var create_len=$(".div_option > .row").length;
	
	/************************************ add and remove option create time ******************/ 
	 $("#add_option").click(function(){
		var len=$(".div_option > .row").length;
		var rowCount=create_len + 1;		
		$('#add_option').before('<div class="row"><label>option'+rowCount+'</label><input type="text" name="txt_option['+create_len+']" size="60" /> <input type="checkbox" class="chk_right" name="chk_right_option_'+create_len+'" value="1" style="margin-top:7px;"/> <input type="button" value="Remove" id="chk_right_delete_'+create_len+'" class="chk_right_delete"></div>');
		create_len++; 
	 });
	/* $("#remove_option").click(function(){
		var len=$(".div_option > .row").length;
		if(len > 1){
			$('.div_option > .row').last().remove();
		}else{
			alert('One option should be there');
		}
	 }); */
	/************************************ add and remove option update time ******************/ 
	$("#add_option_update").click(function(){		
		$('#add_option_update').before('<div class="row"><label>option'+update_len+'</label><input type="text" name="txt_option['+update_len+']" size="60" /> <input type="checkbox" class="chk_right" name="chk_right_option_'+update_len+'" value="1" style="margin-top:7px;"/> <input type="button" value="Remove" id="chk_right_delete_'+update_len+'" class="chk_right_delete"></div>');
		update_len++;
	});
	
	
	$(document).on("click",".chk_right",function(){
		var isSingle=$("#TestQuestion_single_multiple_0").prop("checked");
		var currentCheckbox=$(this).prop("checked");
		if(isSingle==true){
			$(".chk_right").removeAttr("checked");
		}
		if((currentCheckbox==true) && (isSingle==false)){
			$(this).prop("checked","checked");
		}
		else if((currentCheckbox==false) && (isSingle==false)){
			//$(this).removeAttr("checked");
			$(this).prop("checked","checked");
		}
		$(this).prop("checked","checked");
	}); 
	$(document).on("click","#TestQuestion_single_multiple_0",function(){
		$(".chk_right").removeAttr("checked");
		$(".chk_right:last").prop("checked","checked");
	});
 
    // to remove selected div
	$(document).on("click",".chk_right_delete",function(){
		var remId=this.id;
		$(this).parent().remove();
	});
	
	
});
 </script>