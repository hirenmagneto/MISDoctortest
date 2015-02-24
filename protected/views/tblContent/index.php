<?php
/* @var $this TblContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Contents',
);

$this->menu=array(
	array('label'=>'Create TblContent', 'url'=>array('create')),
	array('label'=>'Manage TblContent', 'url'=>array('admin')),
);
?>

<h1>Tbl Contents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
