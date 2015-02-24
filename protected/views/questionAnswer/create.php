<?php
/* @var $this QuestionAnswerController */
/* @var $model QuestionAnswer */

$this->breadcrumbs=array(
	'Question Answers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuestionAnswer', 'url'=>array('index')),
	array('label'=>'Manage QuestionAnswer', 'url'=>array('admin')),
);
?>

<h1>Create QuestionAnswer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>