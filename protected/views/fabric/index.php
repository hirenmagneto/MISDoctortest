<?php
/* @var $this FabricController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fabrics',
);

$this->menu=array(
	array('label'=>'Create Fabric', 'url'=>array('create')),
	array('label'=>'Manage Fabric', 'url'=>array('admin')),
);
?>

<h1>Fabrics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
