<?php
/* @var $this TblContentController */
/* @var $model TblContent */

$this->breadcrumbs=array(
	'Tbl Contents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblContent', 'url'=>array('index')),
	array('label'=>'Create TblContent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-content-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl Contents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-content-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'content_id',
		'layout_id',
		'menu_id',
		'album_id',
		'content_title',
		'content_title_slug',
		/*
		'content_desc',
		'meta_key',
		'meta_title',
		'meta_description',
		'isactive',
		'created_on',
		'created_by',
		'updated_on',
		'updated_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
