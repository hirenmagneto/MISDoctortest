<?php
/* @var $this TblLayoutController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Layouts',
);

$this->menu=array(
	array('label'=>'Create TblLayout', 'url'=>array('create')),
	array('label'=>'Manage TblLayout', 'url'=>array('admin')),
);
?>

<h1>Tbl Layouts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
