<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products',
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'product_id',
		//'prod_category_id',
		//'product_name',
		//'product_desc',
		'series_name',
		'operation_type',
        //'isactive',
        array(
            'header' => 'Is Active',
            'name' => 'isactive',
            'value' => '($data->isactive == 1) ? "Yes" : "No"',
            'filter'=>array('1'=>'Yes','2'=>'No'),
        ),
		/*
		'features',
		'prod_width',
		'prod_projection',
		'frame_colour',
		'cassette_size',
		'leg_screw',
		'mandatory_bolt',
		'torsion_bar',
		'adjustable_pitch',
		'roller_tube',
		'arm_cables',
		'springs',
		'front_bar',
		'arm',
		'wall_bracket',
		'soffit_bracket',
		'worm_gear',
		'motor_remote',
		'manual_motor',
		'power_cord_plug',
		'fabric',
		'mildew_resistant',
		'water_repellent',
		'meta_title',
		'meta_key',
		'meta_description',
		'isactive',
		'created_by',
		'created_on',
		'updated_by',
		'updated_on',
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
