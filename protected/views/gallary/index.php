<?php
/* @var $this GallaryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallaries',
);

$this->menu=array(
	array('label'=>'Create Gallary', 'url'=>array('create')),
	array('label'=>'Manage Gallary', 'url'=>array('admin')),
);
?>

<h1>Gallaries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
