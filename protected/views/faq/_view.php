<?php
/* @var $this FaqController */
/* @var $data Faq */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('faq_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->faq_id), array('view', 'id'=>$data->faq_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faq_question')); ?>:</b>
	<?php echo CHtml::encode($data->faq_question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faq_answer')); ?>:</b>
	<?php echo CHtml::encode($data->faq_answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />


</div>