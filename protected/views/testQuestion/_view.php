<?php
/* @var $this TestQuestionController */
/* @var $data TestQuestion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->question_id), array('view', 'id'=>$data->question_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->test_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_id')); ?>:</b>
	<?php echo CHtml::encode($data->test_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_name')); ?>:</b>
	<?php echo CHtml::encode($data->question_name); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('option1')); ?>:</b>
	<?php echo CHtml::encode($data->option1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option2')); ?>:</b>
	<?php echo CHtml::encode($data->option2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option3')); ?>:</b>
	<?php echo CHtml::encode($data->option3); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('option4')); ?>:</b>
	<?php echo CHtml::encode($data->option4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option5')); ?>:</b>
	<?php echo CHtml::encode($data->option5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option6')); ?>:</b>
	<?php echo CHtml::encode($data->option6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option7')); ?>:</b>
	<?php echo CHtml::encode($data->option7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option8')); ?>:</b>
	<?php echo CHtml::encode($data->option8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('right_option')); ?>:</b>
	<?php echo CHtml::encode($data->right_option); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('single_multiple')); ?>:</b>
	<?php echo CHtml::encode($data->single_multiple); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_order')); ?>:</b>
	<?php echo CHtml::encode($data->question_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_on')); ?>:</b>
	<?php echo CHtml::encode($data->updated_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	*/ ?>

</div>