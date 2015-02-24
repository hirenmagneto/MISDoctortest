<?php
/* @var $this TestController */
/* @var $data Test */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->test_id), array('view', 'id'=>$data->test_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->test_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_name')); ?>:</b>
	<?php echo CHtml::encode($data->test_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_time')); ?>:</b>
	<?php echo CHtml::encode($data->test_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_question')); ?>:</b>
	<?php echo CHtml::encode($data->test_question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negative_mark')); ?>:</b>
	<?php echo CHtml::encode($data->negative_mark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passing_mark')); ?>:</b>
	<?php echo CHtml::encode($data->passing_mark); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_A')); ?>:</b>
	<?php echo CHtml::encode($data->grade_A); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_B')); ?>:</b>
	<?php echo CHtml::encode($data->grade_B); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_C')); ?>:</b>
	<?php echo CHtml::encode($data->grade_C); ?>
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