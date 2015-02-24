<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_id), array('view', 'id'=>$data->product_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series_name')); ?>:</b>
	<?php echo CHtml::encode($data->series_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operation_type')); ?>:</b>
	<?php echo CHtml::encode($data->operation_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('features')); ?>:</b>
	<?php echo CHtml::encode($data->features); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_width')); ?>:</b>
	<?php echo CHtml::encode($data->prod_width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_projection')); ?>:</b>
	<?php echo CHtml::encode($data->prod_projection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frame_colour')); ?>:</b>
	<?php echo CHtml::encode($data->frame_colour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cassette_size')); ?>:</b>
	<?php echo CHtml::encode($data->cassette_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leg_screw')); ?>:</b>
	<?php echo CHtml::encode($data->leg_screw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mandatory_bolt')); ?>:</b>
	<?php echo CHtml::encode($data->mandatory_bolt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('torsion_bar')); ?>:</b>
	<?php echo CHtml::encode($data->torsion_bar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjustable_pitch')); ?>:</b>
	<?php echo CHtml::encode($data->adjustable_pitch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roller_tube')); ?>:</b>
	<?php echo CHtml::encode($data->roller_tube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arm_cables')); ?>:</b>
	<?php echo CHtml::encode($data->arm_cables); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('springs')); ?>:</b>
	<?php echo CHtml::encode($data->springs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('front_bar')); ?>:</b>
	<?php echo CHtml::encode($data->front_bar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arm')); ?>:</b>
	<?php echo CHtml::encode($data->arm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wall_bracket')); ?>:</b>
	<?php echo CHtml::encode($data->wall_bracket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soffit_bracket')); ?>:</b>
	<?php echo CHtml::encode($data->soffit_bracket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('worm_gear')); ?>:</b>
	<?php echo CHtml::encode($data->worm_gear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motor_remote')); ?>:</b>
	<?php echo CHtml::encode($data->motor_remote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manual_motor')); ?>:</b>
	<?php echo CHtml::encode($data->manual_motor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('power_cord_plug')); ?>:</b>
	<?php echo CHtml::encode($data->power_cord_plug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabric')); ?>:</b>
	<?php echo CHtml::encode($data->fabric); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mildew_resistant')); ?>:</b>
	<?php echo CHtml::encode($data->mildew_resistant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('water_repellent')); ?>:</b>
	<?php echo CHtml::encode($data->water_repellent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
	<?php echo CHtml::encode($data->meta_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_key')); ?>:</b>
	<?php echo CHtml::encode($data->meta_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
	<?php echo CHtml::encode($data->meta_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_on')); ?>:</b>
	<?php echo CHtml::encode($data->updated_on); ?>
	<br />

	*/ ?>

</div>