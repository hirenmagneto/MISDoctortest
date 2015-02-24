<?php
/* @var $this FabricController */
/* @var $model Fabric */

$this->breadcrumbs=array(
	'Fabrics',
	$model->fabric_id=>array('view','id'=>$model->fabric_id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Fabric', 'url'=>array('index')),
	array('label'=>'Create Fabric', 'url'=>array('create')),
	//array('label'=>'View Fabric', 'url'=>array('view', 'id'=>$model->fabric_id)),
	array('label'=>'Manage Fabric', 'url'=>array('admin')),
);
?>

<h1>Update Fabric <?php //echo $model->fabric_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>