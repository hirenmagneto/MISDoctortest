<?php
/* @var $this LayoutController */
/* @var $data Layout */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('layout_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->layout_id), array('view', 'id'=>$data->layout_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('layout_name')); ?>:</b>
	<?php echo CHtml::encode($data->layout_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />
    
</div>