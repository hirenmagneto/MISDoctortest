<?php
/* @var $this QuestionAnswerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Question Answers',
);

$this->menu=array(
	array('label'=>'Create QuestionAnswer', 'url'=>array('create')),
	array('label'=>'Manage QuestionAnswer', 'url'=>array('admin')),
);
?>

<h1>Question Answers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
