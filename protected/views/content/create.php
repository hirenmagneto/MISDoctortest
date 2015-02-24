<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
	'Contents',
	'Create',
);

$this->menu=array(
	//array('label'=>'List Content', 'url'=>array('index')),
	array('label'=>'Manage Content', 'url'=>array('admin')),
);
?>

<h1>Create Content</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'layout_data'=>$layout_data)); ?>