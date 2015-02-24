<?php

class FabricController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('upload'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
                'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
    
    protected function checkimagesize($image,$h,$w){
        $imagevariables = getimagesize($image->tempName);
        if($imagevariables == false){
            return 2;
        }
        list($width, $height) = $imagevariables;
        if($width < $w || $height < $h){
            return 1;
        }else{
            return 0;
        }
    }
    
    protected function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth, $thumbHeight )
    {
      // open the directory
      $dir = opendir( $pathToImages );
    
      // loop through it, looking for any/all JPG files:
      $images = glob($pathToImages . "*.jpg");
      //while (false !== ($fname = readdir( $dir ))) {
      foreach ($images as $image) {
        // parse path for the extension
        $info = pathinfo($pathToImages . $image);
        // continue only if this is a JPEG image
        if($info['extension'])
        if ( strtolower($info['extension']) == 'jpg' )
        {
          //echo "Creating thumbnail for {$image} <br />";
          
          // load image and get image size
          $img = imagecreatefromjpeg( "$image" );
          $width = imagesx( $img );
          $height = imagesy( $img );
    
          // calculate thumbnail size
          $new_width = $thumbWidth;
          $new_height = $thumbHeight;
          
          // create a new temporary image
          $tmp_img = imagecreatetruecolor( $new_width, $new_height );
    
          // copy and resize old image into new image
          imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
    
          // save thumbnail into a file
          $thumb = trim(basename($image).PHP_EOL);
          imagejpeg( $tmp_img, "{$pathToThumbs}{$thumb}" );
        }
      }
      // close the directory
      closedir( $dir );
    }
    
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Fabric;
        
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        
		if(isset($_POST['Fabric']))
		{
			$model->attributes=$_POST['Fabric'];
            
            $fabric_thumb = CUploadedFile::getInstance($model,'fabric_thumb');
            $fabric_big = CUploadedFile::getInstance($model,'fabric_big');
            $house_1 = CUploadedFile::getInstance($model,'house_1');
            $house_2 = CUploadedFile::getInstance($model,'house_2');
            
            $size_small = false;
            
            $f_thumb = $this->checkimagesize($fabric_thumb,30,30);            
            if($f_thumb != 0){
                if($f_thumb == 1)
                 $model->addError('fabric_thumb','Small image') ;
               
               if($f_thumb == 2)
                $model->addError('fabric_thumb','Not a image') ;
               
               $size_small = true;
            }
            $f_big = $this->checkimagesize($fabric_big,400,800);            
            if($f_big != 0){
                if($f_big == 1)
                 $model->addError('fabric_big','Small image') ;
               
               if($f_big == 2)
                $model->addError('fabric_big','Not a image') ;
               
               $size_small = true;
            }
            $h_1 = $this->checkimagesize($house_1,400,800);            
            if($h_1 != 0){
                if($h_1 == 1)
                 $model->addError('house_1','Small image') ;
               
               if($h_1 == 2)
                $model->addError('house_1','Not a image') ;
               
               $size_small = true;
            }
            $h_2 = $this->checkimagesize($house_2,400,800);            
            if($h_2 != 0){
                if($h_2 == 1)
                 $model->addError('house_2','Small image') ;
               
               if($h_2 == 2)
                $model->addError('house_2','Not a image') ;
               
               $size_small = true;
            }
            
            if($size_small == true){
                $this->render('create',array('model'=>$model));
                exit;
            }
            
            $model->created_on = new CDbExpression('NOW()');
            $model->created_by = 'Admin';
            $model->product_ids = implode(',',$model->product_ids);
            
            $model->fabric_thumb = uniqid().'-'.$fabric_thumb;
            $model->fabric_big = uniqid().'-'.$fabric_big;
            $model->house_1 = uniqid().'-'.$house_1;
            $model->house_2 = uniqid().'-'.$house_2;
            
			if($model->save()){
			     $id = $model->getPrimaryKey();
                 if (!is_dir(Yii::app()->basePath . '/../images/album/fabric/' .$id)) {
                    mkdir(Yii::app()->basePath . '/../images/album/fabric/' .$id);
                    mkdir(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/thumbs/');
                 }
			     $fabric_thumb->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$model->fabric_thumb); 
                 $fabric_big->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$model->fabric_big);
                 $house_1->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$model->house_1);
                 $house_2->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$model->house_2);
                 
                 $this->createThumbs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/',Yii::app()->basePath . '/../images/album/fabric/' .$id.'/thumbs/',165,100);
                 
                 $this->redirect(array('admin','id'=>$model->fabric_id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    public function actionUpload( ) {
        //unset(Yii::app()->session['file_names']);
		$this->render('upload',array());
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $model->product_ids = explode(',',$model->product_ids);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        
		if(isset($_POST['Fabric']))
		{
            $fabric_thumb = CUploadedFile::getInstance($model,'fabric_thumb');
            $fabric_big = CUploadedFile::getInstance($model,'fabric_big');
            $house_1 = CUploadedFile::getInstance($model,'house_1');
            $house_2 = CUploadedFile::getInstance($model,'house_2');
                        
            $_POST['Fabric']['fabric_thumb'] = ($fabric_thumb == '')?$model->fabric_thumb:uniqid().'-'.$fabric_thumb;
            $_POST['Fabric']['fabric_big'] = ($fabric_big == '')?$model->fabric_big:uniqid().'-'.$fabric_big;
            $_POST['Fabric']['house_1'] = ($house_1 == '')?$model->house_1:uniqid().'-'.$house_1;
            $_POST['Fabric']['house_2'] = ($house_2 == '')?$model->house_2:uniqid().'-'.$house_2;

            if(!empty($fabric_thumb))  // check if uploaded file is set or not
            {   
                $f_thumb = $this->checkimagesize($fabric_thumb,50,50);            
                if($f_thumb != 0){
                    if($f_thumb == 1)
                     $model->addError('fabric_thumb','Small image') ;
                   
                   if($f_thumb == 2)
                    $model->addError('fabric_thumb','Not a image') ;
                   
                   $this->render('update',array('model'=>$model));
                    exit;
                }
                unlink(Yii::app()->basePath . '/../images/album/fabric/'.$id.'/'.$model->fabric_thumb);
                $fabric_thumb->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$_POST['Fabric']['fabric_thumb']);
                $model->fabric_thumb = $_POST['Fabric']['fabric_thumb'];
            }
            if(!empty($fabric_big))  // check if uploaded file is set or not
            {   
                $f_big = $this->checkimagesize($fabric_big,500,500);            
                if($f_big != 0){
                    if($f_big == 1)
                     $model->addError('fabric_big','Small image') ;
                   
                   if($f_big == 2)
                    $model->addError('fabric_big','Not a image') ;
                   
                   $this->render('update',array('model'=>$model));
                    exit;
                }
                unlink(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$model->fabric_big);
                $fabric_big->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$_POST['Fabric']['fabric_big']);
                $model->fabric_big = $_POST['Fabric']['fabric_big'];
            }
            if(!empty($house_1))  // check if uploaded file is set or not
            {
                $h_1 = $this->checkimagesize($house_1,500,500);            
                if($h_1 != 0){
                    if($h_1 == 1)
                     $model->addError('house_1','Small image') ;
                   
                   if($h_1 == 2)
                    $model->addError('house_1','Not a image') ;
                   
                   $this->render('update',array('model'=>$model));
                    exit;
                }
                unlink(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$model->house_1);
                $house_1->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$_POST['Fabric']['house_1']);
                $model->house_1 = $_POST['Fabric']['house_1'];
            }
            if(!empty($house_2))  // check if uploaded file is set or not
            {
                $h_2 = $this->checkimagesize($house_2,500,500);            
                if($h_2 != 0){
                    if($h_2 == 1)
                     $model->addError('house_2','Small image') ;
                   
                   if($h_2 == 2)
                    $model->addError('house_2','Not a image') ;
                   
                   $this->render('update',array('model'=>$model));
                    exit;
                }
                unlink(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$model->house_2);
                $house_2->saveAs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/'.$_POST['Fabric']['house_2']);
                $model->house_2 = $_POST['Fabric']['house_2'];
            }
            
            $model->updated_on = new CDbExpression('NOW()');
            $model->updated_by = 'update Admin';
            $model->attributes=$_POST['Fabric'];
            $model->product_ids=implode(',',$model->product_ids);
            
            $files = glob(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/thumbs/*'); // get all file names
            foreach($files as $file){ // iterate files
              if(is_file($file))
                unlink($file); // delete file
            }
            $this->createThumbs(Yii::app()->basePath . '/../images/album/fabric/' .$id.'/',Yii::app()->basePath . '/../images/album/fabric/' .$id.'/thumbs/',165,100);
            //echo '<pre>';print_r($model);exit;        
			if($model->save())
				$this->redirect(array('admin','id'=>$model->fabric_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
	    $dir = Yii::app()->basePath . '/../images/album/fabric/' .$id;
        function recursiveRemoveDirectory($dir)
        {
            foreach(glob("{$dir}/*") as $file)
            {
                if(is_dir($file)) { 
                    recursiveRemoveDirectory($file);
                } else {
                    unlink($file);
                }
            }
            rmdir($dir);
        }
        recursiveRemoveDirectory($dir);
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Fabric');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Fabric('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Fabric']))
			$model->attributes=$_GET['Fabric'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Fabric the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Fabric::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Fabric $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fabric-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
