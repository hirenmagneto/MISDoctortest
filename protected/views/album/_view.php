<?php
/* @var $this AlbumController */
/* @var $data Album */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->album_id), array('view', 'id'=>$data->album_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_order_id')); ?>:</b>
	<?php echo CHtml::encode($data->album_order_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_name')); ?>:</b>
	<?php echo CHtml::encode($data->image_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_path')); ?>:</b>
	<?php echo CHtml::encode($data->image_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_type')); ?>:</b>
	<?php echo CHtml::encode($data->image_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->image_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<?php /*
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