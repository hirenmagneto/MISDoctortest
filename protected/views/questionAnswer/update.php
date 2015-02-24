<?php
/* @var $this QuestionAnswerController */
/* @var $model QuestionAnswer */

$this->breadcrumbs=array(
	'Question Answers'=>array('index'),
	$model->ans_id=>array('view','id'=>$model->ans_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuestionAnswer', 'url'=>array('index')),
	array('label'=>'Create QuestionAnswer', 'url'=>array('create')),
	array('label'=>'View QuestionAnswer', 'url'=>array('view', 'id'=>$model->ans_id)),
	array('label'=>'Manage QuestionAnswer', 'url'=>array('admin')),
);
?>

<h1>Update QuestionAnswer <?php echo $model->ans_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>