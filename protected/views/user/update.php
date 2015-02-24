<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage User', 'url'=>array('index')),
	array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<h1><?php echo (isset($_GET['adm'])) ? 'Update Admin' : 'Update User' ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>