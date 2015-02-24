<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News',
	'Manage',
);

$this->menu=array(
	//array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'news_id',
		'news_title',
		'news_title_slug',
		//'news_content',
		//'news_date',
        array(
            'header' => 'News Date',            // display 'create_time' using an expression
            'name'=>'news_date',
            'value'=>'date("m-d-Y", strtotime($data->news_date))',
        ),
        //'isactive',
        array(
            'header' => 'Is Active',
            'name' => 'isactive',
            'value' => '($data->isactive == 1) ? "Yes" : "No"',
            'filter'=>array('1'=>'Yes','2'=>'No'),
        ),
		//'created_on',
		/*
		'meta_key',
		'meta_title',
		'meta_description',
		'isactive',
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
