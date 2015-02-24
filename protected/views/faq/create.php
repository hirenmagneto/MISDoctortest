<?php
/* @var $this FaqController */
/* @var $model Faq */

$this->breadcrumbs=array(
	'Faqs'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Faq', 'url'=>array('index')),
	array('label'=>'Manage FAQ', 'url'=>array('admin')),
);
?>

<h1>Create FAQ</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>