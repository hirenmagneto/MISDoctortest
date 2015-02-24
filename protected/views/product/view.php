<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->product_id,
);

$this->menu=array(
	//array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->product_id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->product_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->product_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'product_id',
		//'prod_category_id',
		//'product_name',
		'product_desc',
		'series_name',
		'operation_type',
		'features',
		'prod_width',
		'prod_projection',
		'frame_colour',
		'cassette_size',
		'leg_screw',
		'mandatory_bolt',
		'torsion_bar',
		'adjustable_pitch',
		'roller_tube',
		'arm_cables',
		'springs',
		'front_bar',
		'arm',
		'wall_bracket',
		'soffit_bracket',
		'worm_gear',
		'motor_remote',
		'manual_motor',
		'power_cord_plug',
		'fabric',
		'mildew_resistant',
		'water_repellent',
		'meta_title',
		'meta_key',
		'meta_description',
		'isactive',
	),
)); ?>
