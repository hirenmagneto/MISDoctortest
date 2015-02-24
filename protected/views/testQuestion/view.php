<?php
/* @var $this TestQuestionController */
/* @var $model TestQuestion */

$this->breadcrumbs=array(
	'Test Questions'=>array('index'),
	$model->question_id,
);

$this->menu=array(
	array('label'=>'List TestQuestion', 'url'=>array('index')),
	array('label'=>'Create TestQuestion', 'url'=>array('create')),
	array('label'=>'Update TestQuestion', 'url'=>array('update', 'id'=>$model->question_id)),
	array('label'=>'Delete TestQuestion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->question_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TestQuestion', 'url'=>array('admin')),
);
?>

<h1>View TestQuestion #<?php echo $model->question_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'question_id',
		'test_category_id',
		'test_id',
		'question_name',
		'single_multiple',
		'question_order',
		'isactive',
		'created_on',
		'created_by',
		'updated_on',
		'updated_by',
	),
)); ?>
