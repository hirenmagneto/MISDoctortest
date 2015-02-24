<?php
/* @var $this FabricController */
/* @var $model Fabric */

$this->breadcrumbs=array(
	'Fabrics',
	$model->fabric_id,
);

$this->menu=array(
	//array('label'=>'List Fabric', 'url'=>array('index')),
	array('label'=>'Create Fabric', 'url'=>array('create')),
	array('label'=>'Update Fabric', 'url'=>array('update', 'id'=>$model->fabric_id)),
	array('label'=>'Delete Fabric', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fabric_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fabric', 'url'=>array('admin')),
);
?>

<h1>View Fabric #<?php echo $model->fabric_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fabric_code',
		'colour_name',
		'isactive',
	),
)); ?>
