<?php
/* @var $this LayoutController */
/* @var $model Layout */

$this->breadcrumbs=array(
	'Layouts',
	'Create',
);

$this->menu=array(
	//array('label'=>'List Layout', 'url'=>array('index')),
	array('label'=>'Manage Layout', 'url'=>array('admin')),
);
?>

<h1>Create Layout</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>