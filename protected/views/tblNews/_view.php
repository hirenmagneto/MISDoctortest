<?php
/* @var $this TblNewsController */
/* @var $data TblNews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->news_id), array('view', 'id'=>$data->news_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_title')); ?>:</b>
	<?php echo CHtml::encode($data->news_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_title_slug')); ?>:</b>
	<?php echo CHtml::encode($data->news_title_slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_content')); ?>:</b>
	<?php echo CHtml::encode($data->news_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_date')); ?>:</b>
	<?php echo CHtml::encode($data->news_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />


</div>