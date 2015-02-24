<?php
/* @var $this TestQuestionController */
/* @var $model TestQuestion */

$this->breadcrumbs=array(
	'Test Questions'=>array('index'),
	$model->question_id=>array('view','id'=>$model->question_id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List TestQuestion', 'url'=>array('index')),
	array('label'=>'Create TestQuestion', 'url'=>array('create')),
	//array('label'=>'View TestQuestion', 'url'=>array('view', 'id'=>$model->question_id)),
	array('label'=>'Manage TestQuestion', 'url'=>array('admin')),
);
?>

<h1>Update TestQuestion <?php //echo $model->question_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>