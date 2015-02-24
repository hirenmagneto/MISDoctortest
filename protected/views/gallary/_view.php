<?php
/* @var $this GallaryController */
/* @var $data Gallary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallary_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gallary_id), array('view', 'id'=>$data->gallary_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallary_order')); ?>:</b>
	<?php echo CHtml::encode($data->gallary_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallary_name')); ?>:</b>
	<?php echo CHtml::encode($data->gallary_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallary_path')); ?>:</b>
	<?php echo CHtml::encode($data->gallary_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallary_type')); ?>:</b>
	<?php echo CHtml::encode($data->gallary_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallary_desc')); ?>:</b>
	<?php echo CHtml::encode($data->gallary_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />


</div>