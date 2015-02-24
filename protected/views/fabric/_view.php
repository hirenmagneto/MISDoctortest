<?php
/* @var $this FabricController */
/* @var $data Fabric */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabric_code')); ?>:</b>
	<?php echo CHtml::encode($data->fabric_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colour_name')); ?>:</b>
	<?php echo CHtml::encode($data->colour_name); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('house_1')); ?>:</b>
	<?php echo CHtml::encode($data->house_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_2')); ?>:</b>
	<?php echo CHtml::encode($data->house_2); ?>
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