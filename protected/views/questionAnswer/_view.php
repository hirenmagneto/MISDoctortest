<?php
/* @var $this QuestionAnswerController */
/* @var $data QuestionAnswer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ans_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ans_id), array('view', 'id'=>$data->ans_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_id')); ?>:</b>
	<?php echo CHtml::encode($data->question_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_option')); ?>:</b>
	<?php echo CHtml::encode($data->question_option); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('right_answer')); ?>:</b>
	<?php echo CHtml::encode($data->right_answer); ?>
	<br />


</div>