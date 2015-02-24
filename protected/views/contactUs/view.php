<?php
/* @var $this ContactUsController */
/* @var $model ContactUs */

$this->breadcrumbs=array(
	'Contact Uses'=>array('index'),
	$model->table_id,
);

$this->menu=array(
	array('label'=>'List ContactUs', 'url'=>array('index')),
	array('label'=>'Create ContactUs', 'url'=>array('create')),
	array('label'=>'Update ContactUs', 'url'=>array('update', 'id'=>$model->table_id)),
	array('label'=>'Delete ContactUs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->table_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactUs', 'url'=>array('admin')),
);
?>

<h1>View "<?php echo $model->enquiry_type; ?>" Details</h1>
<span style="float: right;"><?php echo CHtml::link('Back',array('contactUs/admin')); ?></span>
<?php 
if($model->enquiry_type == 'Contact Us'){
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'table_id',
        'enquiry_type',
		'first_name',
		'last_name',
		'email_address',
		'phone',
		'address_1',
		'address_2',
		'city',
		'state',
		'zip_code',
		'country',
		'series',
		'operation',
		'size',
		'model_number',
		'series_number',
		'date_of_purchase',
		'store_of_purchare',
		'subject',
		'comment',
		//'upload_file',
        array(
            'label'=>'upload_file',
            'type'=>'raw',
            'value'=>CHtml::image(Yii::app()->request->baseUrl.'/images/front/'.$model->upload_file,"image",array("width"=>100,"height"=>100)),
            /*'value'=>$this->widget('ext.lyiightbox.LyiightBox2', array(
                    'thumbnail' => Yii::app()->request->baseUrl.'/images/front/'.$model->upload_file,
                    'image' => Yii::app()->request->baseUrl.'/images/front/'.$model->upload_file,
                    'title' => $model->upload_file,
                )), */ 
        ),
		//'fabric_color_1',
		//'fabric_color_2',
		'ip_address',
		//'country_name',
		'created_on',
	),
)); 
}
if($model->enquiry_type == 'Product Registration'){
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'table_id',
        'enquiry_type',
		'first_name',
		'last_name',
		'email_address',
		'phone',
		'address_1',
		'address_2',
        'city',
		'state',
		'zip_code',
		'country',
		'model_number',
		'series_number',
		'date_of_purchase',
		'ip_address',
		'created_on',
	),
)); 
}
if($model->enquiry_type == 'Fabric sample request'){
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'table_id',
        'enquiry_type',
		'first_name',
		'last_name',
		'email_address',
		'phone',
		'address_1',
		'address_2',
        'city',
		'state',
		'zip_code',
		'country',
		'series',
        'fabric_color_1',
		'fabric_color_2',
		'ip_address',
		'created_on',
	),
)); 
}
?>
