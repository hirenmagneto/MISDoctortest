<?php
/* @var $this TblLayoutController */
/* @var $data TblLayout */
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


</div>