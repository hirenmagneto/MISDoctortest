<?php
/* @var $this GallaryController */
/* @var $model Gallary */

$this->breadcrumbs=array(
	'Gallaries'=>array('index'),
	$model->gallary_id,
);

$this->menu=array(
	//array('label'=>'List Gallary', 'url'=>array('index')),
	array('label'=>'Create Gallary', 'url'=>array('create')),
	array('label'=>'Update Gallary', 'url'=>array('update', 'id'=>$model->gallary_id)),
	array('label'=>'Delete Gallary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gallary_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gallary', 'url'=>array('admin')),
);
?>

<h1>View Gallary #<?php echo $model->gallary_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gallary_order',
		'gallary_name',
		'gallary_path',
		'gallary_type',
		'gallary_desc',
		'isactive',
	),
)); ?>
