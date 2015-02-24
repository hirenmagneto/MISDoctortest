<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	$model->test_id,
);

$this->menu=array(
	array('label'=>'List Test', 'url'=>array('index')),
	array('label'=>'Create Test', 'url'=>array('create')),
	array('label'=>'Update Test', 'url'=>array('update', 'id'=>$model->test_id)),
	array('label'=>'Delete Test', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->test_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Test', 'url'=>array('admin')),
);
?>

<h1>View Test #<?php echo $model->test_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'test_id',
		'test_category_id',
		'test_name',
		'test_time',
		'test_question',
		'negative_mark',
		'passing_mark',
		'grade_A',
		'grade_B',
		'grade_C',
		'created_on',
		'created_by',
		'updated_on',
		'updated_by',
	),
)); ?>
