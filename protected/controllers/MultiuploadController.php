<?php

class MultiuploadController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
	public function init() {
        
        
    }	

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('upload','delete','generateRandomString'),
				'users'=>array('*'),
			),			
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	
	
	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpload()
	{
		/*
			Error Codes:
			1 = Sorry, your file is too large.
			2 = Sorry, only JPG, JPEG, PNG & GIF files are allowed.
			3 = Sorry, your file was not uploaded.
			4 = Sorry, there was an error uploading your file.
			5 = Sorry, file already exists.
		*/
		
		$random_str 	= $this->generateRandomString();
		$target_dir 	= Yii::app()->basePath."/../images/album/temp/";
		$tmp_var 		= $target_dir . basename($_FILES["file"]["name"]);	
		$imageFileType 	= strtolower(pathinfo($tmp_var,PATHINFO_EXTENSION));
		$file_name		= $random_str . '.'.$imageFileType;
		$target_file 	= $target_dir . $file_name;
		
		$uploadOk = 0;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["file"]["tmp_name"]);
			//if($check !== false) {
			//	echo "File is an image - " . $check["mime"] . ".";
			//	$uploadOk = 1;
			//} else {
			//	echo "File is not an image.";
			//	$uploadOk = 0;
			//}
		}
		
		// Check if file already exists
		if (file_exists($target_file)) {			
			$uploadOk = 5;
		}
		
		// Check file size
		if ($_FILES["file"]["size"] > 1048576 && $uploadOk == 0) {
			$uploadOk = 1;
		}
		
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"  && $uploadOk == 0) {
			$uploadOk = 2;
		}
		
		// Check if $uploadOk is set to 0 by an error
		/*if ($uploadOk == 0) {
			$uploadOk = 3;
		// if everything is ok, try to upload file
		} else */
        if($uploadOk == 0)
		{
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                
                if(is_array(Yii::app()->session->get('file_names'))){
                    $images = Yii::app()->session->get('file_names');
                    array_push($images,$target_file);
                    Yii::app()->session['file_names'] = $images;
                }else{
                    Yii::app()->session['file_names'] = array($target_file);
                }
                
				$uploadOk = $file_name;
			} else {
				$uploadOk = 4;				
			}
		}
        
		echo $uploadOk;
		exit;
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionDelete(){
		
		$image_name 	= end(explode('_',$_POST['img_id']));	
		$target_dir 	= Yii::app()->basePath."/../images/album/temp/";
		$file_path 		= $target_dir.$image_name;
		$flag			= false;
		
		
		//unlink($target_dir.$image_name);
		//unset(Yii::app()->session['file_names']);
		//$flag = $_POST['img_id'];
        
        $images = Yii::app()->session->get('file_names');
		foreach($images as $key => $val){
			if($val == $file_path){
				unlink($target_dir.$image_name);
				unset($images[$key]);
				$flag = $_POST['img_id'];
				break;
			}
		}
        $images = array_values($images);
		Yii::app()->session['file_names'] = $images;
        
		echo $flag;	
		exit;
	}



	


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Product the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Product $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function  generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
		    $randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}
