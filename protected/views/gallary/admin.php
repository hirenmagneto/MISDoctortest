<?php
/* @var $this GallaryController */
/* @var $model Gallary */

$this->breadcrumbs=array(
	'Gallaries'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Gallary', 'url'=>array('index')),
	array('label'=>'Create Gallary', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gallary-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gallaries</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gallary-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'gallary_id',
		'gallary_type',
        //'gallary_order',
		'gallary_name',
		//'gallary_path',
		
		//'gallary_desc',
		//'isactive',
		array(
           'header' => 'Is Active',
           'name' => 'isactive',
           'value' => '($data->isactive == 1) ? "Yes" : "No"',
           'filter'=>array('1'=>'Yes','2'=>'No'),
        ),
		array(
			'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
            'buttons'=>array
            (
                'update' => array
                (
                    'label'=>'update',
                    'imageUrl'=>Yii::app()->baseUrl.'/images/edit.png',  // make sure you have an image
                    //'url'=>'Yii::app()->createUrl("mycontroller/status", array("id"=>$data->id))',
                    //'options' => array( 'ajax' => array('type' => 'get', 'url'=>'js:$(this).attr("href")', 'success' => 'js:function(data) { $.fn.yiiGridView.update("my-grid")}')),
                ),
                'delete' => array
                (
                    'label'=>'delete',
                    'imageUrl'=>Yii::app()->baseUrl.'/images/delete1.png',  // make sure you have an image
                    //'url'=>'Yii::app()->createUrl("mycontroller/status", array("id"=>$data->id))',
                    //'options' => array( 'ajax' => array('type' => 'get', 'url'=>'js:$(this).attr("href")', 'success' => 'js:function(data) { $.fn.yiiGridView.update("my-grid")}')),
                ),
            ),
		),
	),
)); ?>
