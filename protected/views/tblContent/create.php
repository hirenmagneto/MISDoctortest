<?php
/* @var $this TblContentController */
/* @var $model TblContent */

$this->breadcrumbs=array(
	'Tbl Contents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblContent', 'url'=>array('index')),
	array('label'=>'Manage TblContent', 'url'=>array('admin')),
);
?>

<h1>Create TblContent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>