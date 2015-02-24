<?php
/* @var $this GallaryController */
/* @var $model Gallary */

$this->breadcrumbs=array(
	'Gallaries'=>array('index'),
	$model->gallary_id=>array('view','id'=>$model->gallary_id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Gallary', 'url'=>array('index')),
	array('label'=>'Create Gallary', 'url'=>array('create')),
	//array('label'=>'View Gallary', 'url'=>array('view', 'id'=>$model->gallary_id)),
	array('label'=>'Manage Gallary', 'url'=>array('admin')),
);
?>

<h1>Update Gallary <?php //echo $model->gallary_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>