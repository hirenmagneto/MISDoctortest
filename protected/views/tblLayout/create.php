<?php
/* @var $this TblLayoutController */
/* @var $model TblLayout */

$this->breadcrumbs=array(
	'Tbl Layouts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblLayout', 'url'=>array('index')),
	array('label'=>'Manage TblLayout', 'url'=>array('admin')),
);
?>

<h1>Create TblLayout</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>