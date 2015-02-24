<?php
/* @var $this TblNewsController */
/* @var $model TblNews */

$this->breadcrumbs=array(
	'Tbl News'=>array('index'),
	$model->news_id,
);

$this->menu=array(
	array('label'=>'List TblNews', 'url'=>array('index')),
	array('label'=>'Create TblNews', 'url'=>array('create')),
	array('label'=>'Update TblNews', 'url'=>array('update', 'id'=>$model->news_id)),
	array('label'=>'Delete TblNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->news_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblNews', 'url'=>array('admin')),
);
?>

<h1>View TblNews #<?php echo $model->news_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'news_id',
		'news_title',
		'news_title_slug',
		'news_content',
		'news_date',
		'created_on',
		'isactive',
	),
)); ?>
