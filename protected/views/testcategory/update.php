<?php
/* @var $this TestcategoryController */
/* @var $model Testcategory */

$this->breadcrumbs=array(
	'Testcategories'=>array('index'),
	$model->category_id=>array('view','id'=>$model->category_id),
	'Update',
);

$this->menu=array(	
	array('label'=>'Create Test Category', 'url'=>array('create')),	
	array('label'=>'Manage Test Category', 'url'=>array('admin')),
);
?>

<h1>Update Testcategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>