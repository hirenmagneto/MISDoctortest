<?php
/* @var $this GallaryController */
/* @var $model Gallary */

$this->breadcrumbs=array(
	'Gallaries'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Gallary', 'url'=>array('index')),
	array('label'=>'Manage Gallary', 'url'=>array('admin')),
);
?>

<h1>Create Gallary</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>