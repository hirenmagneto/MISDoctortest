<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);
if(isset($_GET['adm']))
	$this->menu=array(	
		array('label'=>'Manage Admin', 'url'=>array('admin')),
	);
else
	$this->menu=array(	
		array('label'=>'Manage User', 'url'=>array('index')),
	);
?>

<h1><?php echo (isset($_GET['adm'])) ? 'Create Admin' : 'Create User' ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>