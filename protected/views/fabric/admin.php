<?php
/* @var $this FabricController */
/* @var $model Fabric */

$this->breadcrumbs=array(
	'Fabrics',
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Fabric', 'url'=>array('index')),
	array('label'=>'Create Fabric', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fabric-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fabrics</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fabric-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'fabric_id',
		'fabric_code',
		'colour_name',
        //'isactive',
        array(
            'header' => 'Is Active',
            'name' => 'isactive',
            'value' => '($data->isactive == 1) ? "Yes" : "No"',
            'filter'=>array('1'=>'Yes','2'=>'No'),
        ),
		//'product_ids',
		//'fabric_thumb',
		/*
		'fabric_big',
		'house_1',
		'house_2',
		'created_on',
		'created_by',
		'updated_on',
		'updated_by',
		*/
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
