<?php
/* @var $this ContentController */
/* @var $data Content */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_title')); ?>:</b>
	<?php echo CHtml::encode($data->content_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_title_slug')); ?>:</b>
	<?php echo CHtml::encode($data->content_title_slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_desc')); ?>:</b>
	<?php echo CHtml::encode($data->content_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_key')); ?>:</b>
	<?php echo CHtml::encode($data->meta_key); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
	<?php echo CHtml::encode($data->meta_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
	<?php echo CHtml::encode($data->meta_description); ?>
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