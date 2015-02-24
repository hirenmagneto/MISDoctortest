<?php
/* @var $this FabricController */
/* @var $model Fabric */

$this->breadcrumbs=array(
	'Fabrics',
	'Create',
);

$this->menu=array(
	//array('label'=>'List Fabric', 'url'=>array('index')),
	array('label'=>'Manage Fabric', 'url'=>array('admin')),
);
?>

<h1>Create Fabric</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>