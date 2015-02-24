<?php
/* @var $this TblLayoutController */
/* @var $model TblLayout */

$this->breadcrumbs=array(
	'Tbl Layouts'=>array('index'),
	$model->layout_id,
);

$this->menu=array(
	array('label'=>'List TblLayout', 'url'=>array('index')),
	array('label'=>'Create TblLayout', 'url'=>array('create')),
	array('label'=>'Update TblLayout', 'url'=>array('update', 'id'=>$model->layout_id)),
	array('label'=>'Delete TblLayout', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->layout_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblLayout', 'url'=>array('admin')),
);
?>

<h1>View TblLayout #<?php echo $model->layout_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'layout_id',
		'layout_name',
		'isactive',
		'created_on',
		'created_by',
		'updated_on',
		'updated_by',
	),
)); ?>
