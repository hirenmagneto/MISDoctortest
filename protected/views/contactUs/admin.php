<?php
/* @var $this ContactUsController */
/* @var $model ContactUs */

$this->breadcrumbs=array(
	'Contact Uses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ContactUs', 'url'=>array('index')),
	array('label'=>'Create ContactUs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contact-us-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contact Uses</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contact-us-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'table_id',
        'enquiry_type',
		'first_name',
		'last_name',
		'email_address',
		'phone',
        'country',
        'state',
		//'address_1',
		/*
		'address_2',
		'zip_code',
		'city',
		'series',
		'operation',
		'size',
		'model_number',
		'series_number',
		'date_of_purchase',
		'store_of_purchare',
		'subject',
		'comment',
		'upload_file',
		'fabric_color_1',
		'fabric_color_2',
		'ip_address',
		'country_name',
		'created_on',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'label'=>'view',
                    'imageUrl'=>Yii::app()->baseUrl.'/images/view.png',  // make sure you have an image
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
