<?php
/* @var $this TblLayoutController */
/* @var $model TblLayout */

$this->breadcrumbs=array(
	'Tbl Layouts'=>array('index'),
	$model->layout_id=>array('view','id'=>$model->layout_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblLayout', 'url'=>array('index')),
	array('label'=>'Create TblLayout', 'url'=>array('create')),
	array('label'=>'View TblLayout', 'url'=>array('view', 'id'=>$model->layout_id)),
	array('label'=>'Manage TblLayout', 'url'=>array('admin')),
);
?>

<h1>Update TblLayout <?php echo $model->layout_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>