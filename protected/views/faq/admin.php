<?php
/* @var $this FaqController */
/* @var $model Faq */

$this->breadcrumbs=array(
	'Faqs'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Faq', 'url'=>array('index')),
	array('label'=>'Create FAQ', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#faq-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage FAQs</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'faq-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'faq_id',
		'faq_question',
		//'faq_answer',
		//'created_on',
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
