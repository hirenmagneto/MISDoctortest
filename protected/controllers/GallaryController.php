<?php

class GallaryController extends Controller
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
             	'actions'=>array('view','index'),
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
    
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Gallary;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Gallary']))
		{
			$model->attributes=$_POST['Gallary'];
            
            $gallary_path = CUploadedFile::getInstance($model,'gallary_path');
            
            $size_small = false;
            
            $g_path = $this->checkimagesize($gallary_path,430,1500);            
            if($g_path != 0){
                if($g_path == 1){
                 $model->addError('gallary_path','Small Image size') ;
                 $size_small = true;  
                }
                
               if($g_path == 2){
                $size_small = false;
               }
            }
            
            if($size_small == true){
                $this->render('create',array('model'=>$model));
                exit;
            }
            
            $model->gallary_path = $gallary_path;
            
			if($model->save()){
                $gallary_path->saveAs(Yii::app()->basePath . '/../images/gallary/'.$model->gallary_path);
                
                $this->redirect(array('admin')); 
			 
			}
				
		}

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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Gallary']))
		{
            $gallary_path = CUploadedFile::getInstance($model,'gallary_path');
                        
            $_POST['Gallary']['gallary_path'] = ($gallary_path == '')?$model->gallary_path:$gallary_path;
            
            if(!empty($gallary_path))  // check if uploaded file is set or not
            {   
                $g_path = $this->checkimagesize($gallary_path,430,1500);            
                if($g_path != 0){
                    if($g_path == 1){
                     $model->addError('gallary_path','Small image size');                   
                     $this->render('update',array('model'=>$model));
                     exit;   
                    }
                }
                
                unlink(Yii::app()->basePath . '/../images/gallary/'.$model->gallary_path);
                
                $gallary_path->saveAs(Yii::app()->basePath . '/../images/gallary/'.$_POST['Gallary']['gallary_path']);
               // $model->gallary_path = $_POST['Gallary']['gallary_path'];
            }
            
            
			$model->attributes=$_POST['Gallary'];
            $model->gallary_path = $_POST['Gallary']['gallary_path'];
            //echo '<pre>';print_r($model);exit;
			if($model->save()){
			 	$this->redirect(array('admin')); 
			}else{
			     
			}
			
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
		$delete = $this->loadModel($id);
        
        if(file_exists(Yii::app()->basePath . '/../images/gallary/'.$delete->gallary_path)){
            unlink(Yii::app()->basePath . '/../images/gallary/'.$delete->gallary_path);
        }
        
        $delete->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Gallary');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Gallary('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gallary']))
			$model->attributes=$_GET['Gallary'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Gallary the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Gallary::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Gallary $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gallary-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
