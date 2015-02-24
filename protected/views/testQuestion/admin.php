<?php
/* @var $this TestQuestionController */
/* @var $model TestQuestion */

$this->breadcrumbs=array(
	'Test Questions'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List TestQuestion', 'url'=>array('index')),
	array('label'=>'Create TestQuestion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#test-question-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Test Questions</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));  // uncomment this for advance search?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'test-question-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'question_id',
		array(
            'name'=>'test_category_id',
            'value'=>'$data->categoryName->category_name' 
        ),
		array(
			'name'=>'test_id',
			'value'=>'$data->testName->test_name'
		),
		'question_name',
		//'option1',
		//'option2',
		/*
		'option3',
		'option4',
		'option5',
		'option6',
		'option7',
		'option8', */
		//'right_option',
		//'single_multiple',
		array(
           'header' => 'Is Single',
           'name' => 'single_multiple',
           'value' => '($data->single_multiple == 1) ? "Single" : "Multiple"',
           'filter'=>array('1'=>'Single','2'=>'Multiple'),
        ),
		'question_order',
		//'isactive',
		array(
           'header' => 'Is Active',
           'name' => 'isactive',
           'value' => '($data->isactive == 1) ? "Yes" : "No"',
           'filter'=>array('1'=>'Yes','0'=>'No'),
        ),
		/*'created_on',
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
                    
                ),
                'delete' => array
                (
                    'label'=>'delete',
                    'imageUrl'=>Yii::app()->baseUrl.'/images/delete1.png',  // make sure you have an image
                   
                ),
            ),
		),
	),
)); ?>
