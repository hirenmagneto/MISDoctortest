<?php
/* @var $this ContactUsController */
/* @var $data ContactUs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('table_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->table_id), array('view', 'id'=>$data->table_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_1')); ?>:</b>
	<?php echo CHtml::encode($data->address_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_2')); ?>:</b>
	<?php echo CHtml::encode($data->address_2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip_code')); ?>:</b>
	<?php echo CHtml::encode($data->zip_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series')); ?>:</b>
	<?php echo CHtml::encode($data->series); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operation')); ?>:</b>
	<?php echo CHtml::encode($data->operation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_number')); ?>:</b>
	<?php echo CHtml::encode($data->model_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series_number')); ?>:</b>
	<?php echo CHtml::encode($data->series_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_purchase')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_purchase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_of_purchare')); ?>:</b>
	<?php echo CHtml::encode($data->store_of_purchare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_file')); ?>:</b>
	<?php echo CHtml::encode($data->upload_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabric_color_1')); ?>:</b>
	<?php echo CHtml::encode($data->fabric_color_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabric_color_2')); ?>:</b>
	<?php echo CHtml::encode($data->fabric_color_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enquiry_type')); ?>:</b>
	<?php echo CHtml::encode($data->enquiry_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_name')); ?>:</b>
	<?php echo CHtml::encode($data->country_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	*/ ?>

</div>