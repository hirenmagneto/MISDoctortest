<?php

class LayoutController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
	public function init(){
		if(!isset(Yii::app()->user->user_id))
			$this->redirect(array('admin/login')); 
	}

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
		$model=new Layout;
        
        
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        //echo '<pre>';print_r(Yii::app()->session->get('file_names'));exit;
		if(isset($_POST['Layout']))
		{
			$model->attributes=$_POST['Layout'];
            $model->created_on = new CDbExpression('NOW()');
            $model->created_by = 'Admin';
			if($model->save()){
			    $id = $model->getPrimaryKey();
                $dir = Yii::app()->basePath . '/../images/album/layout/' .$id;
                $thumb = Yii::app()->basePath . '/../images/album/layout/' .$id.'/thumbs/';                
                if (!is_dir($dir)) {
                    mkdir($dir);
                    mkdir($thumb);                    
                }
                $images_move = Yii::app()->session->get('file_names');
                //echo '<pre>';print_r($images_move);exit;
                $i = 1;
                if(is_array($images_move)){
                    foreach($images_move as $i_m){
                    
                        $File = basename($i_m).PHP_EOL;
                        $File = trim($File);
                        
                        //$album->setIsNewRecord(true);
                        $album = new Album;
                        $album->album_order_id = $i;
                        $album->image_name = $File;
                        $album->image_path = '/images/album/layout/'.$id.'/'.$File;
                        $album->image_type = 1;
                        $album->image_type_id = $id;
                        $album->created_on = new CDbExpression('NOW()');
                        $album->created_by = 'Admin';
                        if($album->save() == false){
                            print_r($album->getErrors());exit;
                        }
                        rename(Yii::app()->basePath."/../images/album/temp/" .$File,$dir.'/'.$File);
                        $i++;
                    }
                }
                $this->createThumbs($dir.'/',$thumb,165,100);
                $this->createThumbs($dir.'/',$dir.'/',800,430);
                unset(Yii::app()->session['file_names']);
                $this->redirect(array('admin','id'=>$model->layout_id));
			}
		}
                                
        $images_delete = Yii::app()->session->get('file_names');
        //echo '<pre>';print_r($images_delete);exit;
        if(is_array($images_delete))
        foreach($images_delete as $d_i){
            unlink($d_i);
        }
        unset(Yii::app()->session['file_names']);
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $dir = Yii::app()->basePath . '/../images/album/layout/' .$id;
        $model->updated_on = new CDbExpression('NOW()');
        $model->updated_by = 'Update Admin';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Layout']))
		{
			$model->attributes=$_POST['Layout'];
			if($model->save()){
                
                $images_move = Yii::app()->session->get('file_names');
                //echo '<pre>';print_r($images_move);exit;
                $i = 1;
                if(is_array($images_move)){
                    foreach($images_move as $i_m){
                    
                        $File = basename($i_m).PHP_EOL;
                        $File = trim($File);
                        
                        //$album->setIsNewRecord(true);
                        $album = new Album;
                        $album->album_order_id = $i;
                        $album->image_name = $File;
                        $album->image_path = '/images/album/layout/'.$id.'/'.$File;
                        $album->image_type = 1;
                        $album->image_type_id = $id;
                        $album->created_on = new CDbExpression('NOW()');
                        $album->created_by = 'Admin';
                        if($album->save() == false){
                            print_r($album->getErrors());exit;
                        }
                        rename(Yii::app()->basePath."/../images/album/temp/" .$File,$dir.'/'.$File);
                        $i++;
                    }
                }
                $this->createThumbs($dir.'/',$dir.'/thumbs/',165,100);
                $this->createThumbs($dir.'/',$dir.'/',800,430);
                unset(Yii::app()->session['file_names']);
                $this->redirect(array('admin','id'=>$model->layout_id));
			}
				
		}
        $images_delete = Yii::app()->session->get('file_names');
        //echo '<pre>';print_r($images_delete);exit;
        if(is_array($images_delete))
        foreach($images_delete as $d_i){
            unlink($d_i);
        }
        unset(Yii::app()->session['file_names']);
        
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
        $dir = Yii::app()->basePath . '/../images/album/layout/' .$id;
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
        Album::model()->deleteAll("image_type_id = $id");
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
		$dataProvider=new CActiveDataProvider('Layout');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Layout('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Layout']))
			$model->attributes=$_GET['Layout'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Layout the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Layout::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Layout $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='layout-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
