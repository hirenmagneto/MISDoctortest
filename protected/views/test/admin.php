<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Test', 'url'=>array('index')),
	array('label'=>'Create Test', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#test-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tests</h1>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); // uncomment this for advance search ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'test-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'test_id',
		//'test_category_id',
		array(
            'name'=>'test_category_id',
            'value'=>'$data->categoryName->category_name' 
        ),
		'test_name',
		'test_time',
		'test_question',
		'negative_mark',
		
		'passing_mark',
		//'grade_A',
		//'grade_B',
		//'grade_C',
		//*'created_on',
		//'created_by',
		//'updated_on',
		//'updated_by',
		//*/
		
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
