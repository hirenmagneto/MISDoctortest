<?php
/* @var $this QuestionAnswerController */
/* @var $model QuestionAnswer */

$this->breadcrumbs=array(
	'Question Answers'=>array('index'),
	$model->ans_id,
);

$this->menu=array(
	array('label'=>'List QuestionAnswer', 'url'=>array('index')),
	array('label'=>'Create QuestionAnswer', 'url'=>array('create')),
	array('label'=>'Update QuestionAnswer', 'url'=>array('update', 'id'=>$model->ans_id)),
	array('label'=>'Delete QuestionAnswer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ans_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuestionAnswer', 'url'=>array('admin')),
);
?>

<h1>View QuestionAnswer #<?php echo $model->ans_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ans_id',
		'question_id',
		'question_option',
		'right_answer',
	),
)); ?>
