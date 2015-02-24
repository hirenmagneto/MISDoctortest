<?php
/* @var $this TblContentController */
/* @var $model TblContent */

$this->breadcrumbs=array(
	'Tbl Contents'=>array('index'),
	$model->content_id=>array('view','id'=>$model->content_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblContent', 'url'=>array('index')),
	array('label'=>'Create TblContent', 'url'=>array('create')),
	array('label'=>'View TblContent', 'url'=>array('view', 'id'=>$model->content_id)),
	array('label'=>'Manage TblContent', 'url'=>array('admin')),
);
?>

<h1>Update TblContent <?php echo $model->content_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>