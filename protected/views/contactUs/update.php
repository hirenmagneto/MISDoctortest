<?php
/* @var $this ContactUsController */
/* @var $model ContactUs */

$this->breadcrumbs=array(
	'Contact Uses'=>array('index'),
	$model->table_id=>array('view','id'=>$model->table_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactUs', 'url'=>array('index')),
	array('label'=>'Create ContactUs', 'url'=>array('create')),
	array('label'=>'View ContactUs', 'url'=>array('view', 'id'=>$model->table_id)),
	array('label'=>'Manage ContactUs', 'url'=>array('admin')),
);
?>

<h1>Update ContactUs <?php echo $model->table_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>