<?php
/* @var $this TblContentController */
/* @var $model TblContent */

$this->breadcrumbs=array(
	'Tbl Contents'=>array('index'),
	$model->content_id,
);

$this->menu=array(
	array('label'=>'List TblContent', 'url'=>array('index')),
	array('label'=>'Create TblContent', 'url'=>array('create')),
	array('label'=>'Update TblContent', 'url'=>array('update', 'id'=>$model->content_id)),
	array('label'=>'Delete TblContent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->content_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblContent', 'url'=>array('admin')),
);
?>

<h1>View TblContent #<?php echo $model->content_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'content_id',
		'layout_id',
		'menu_id',
		'album_id',
		'content_title',
		'content_title_slug',
		'content_desc',
		'meta_key',
		'meta_title',
		'meta_description',
		'isactive',
		'created_on',
		'created_by',
		'updated_on',
		'updated_by',
	),
)); ?>
