<?php

class ContactUsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';
	
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
				'actions'=>array('create','view','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
                'actions'=>array('create','update'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
    public function actionProd()
	{
		$model=new ContactUs;
        
        
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        
        //echo '<pre>';print_r($_POST);exit;

		if(isset($_POST['productreg']))
		{
		  $ip = $_SERVER['REMOTE_ADDR'];
          $date = new CDbExpression('NOW()');
          
            $connection=Yii::app()->db;
            $sql="INSERT INTO tbl_contact_us (
            first_name,
            last_name,
            email_address,
            phone,
            address_1,
            address_2,
            country,
            state,
            zip_code,
            city,
            series,
            operation,
            size,
            model_number,
            series_number,
            date_of_purchase,
            store_of_purchare,
            subject,
            comment,
            upload_file,
            fabric_color_1,
            fabric_color_2,
            enquiry_type,
            ip_address,
            country_name,
            created_on
            )            
            VALUES(
            :first_name,
            :last_name,
            :email_address,
            :phone,
            :address_1,
            :address_2,
            :country,
            :state,
            :zip_code,
            :city,
            :series,
            :operation,
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            :fabric_color_1,
            '',
            'Product Registration',
            '$ip',
            :country_name,
            $date
            )";
            $command=$connection->createCommand($sql);
            
            $command->bindParam(":first_name",$_POST['first_name'],PDO::PARAM_STR);
            $command->bindParam(":last_name",$_POST['last_name'],PDO::PARAM_STR);
            $command->bindParam(":email_address",$_POST['email'],PDO::PARAM_STR);
            $command->bindParam(":phone",$_POST['phone'],PDO::PARAM_STR);
            $command->bindParam(":address_1",$_POST['address_1'],PDO::PARAM_STR);
            $command->bindParam(":address_2",$_POST['address_2'],PDO::PARAM_STR);
            $command->bindParam(":country",$_POST['country'],PDO::PARAM_STR);
            $command->bindParam(":state",$_POST['state'],PDO::PARAM_STR);
            $command->bindParam(":zip_code",$_POST['zip_code'],PDO::PARAM_STR);
            $command->bindParam(":city",$_POST['city'],PDO::PARAM_STR);
            $command->bindParam(":series",$_POST['series'],PDO::PARAM_STR);
            $command->bindParam(":operation",$_POST['operation'],PDO::PARAM_STR);
            $command->bindParam(":fabric_color_1",$_POST['fabric_color'],PDO::PARAM_STR);
            //$command->bindParam(":ip_address",$_SERVER['REMOTE_ADDR'],PDO::PARAM_STR);
            $command->bindParam(":country_name",$_POST['country'],PDO::PARAM_STR);
            //$command->bindParam(":created_on",new CDbExpression('NOW()'),PDO::PARAM_STR);
            
            $command->execute();
            
            $this->redirect(array('front/registration','success'=>'done'));
            /*
            $model->first_name = $_POST['first_name'];
            $model->last_name = $_POST['last_name'];
            $model->email_address = $_POST['email'];
            $model->phone = $_POST['phone'];
            $model->address_1 = $_POST['address_1'];
            $model->address_2 = $_POST['address_2'];
            $model->country = $_POST['country'];
            $model->state = $_POST['state'];
            $model->zip_code = $_POST['zip_code'];
            $model->city = $_POST['city'];
            $model->series = $_POST['series'];
            $model->operation = $_POST['operation'];
            $model->size = $_POST['size'];
            $model->model_number = $_POST['model_number'];
            $model->series_number = $_POST['serial_number'];
            $model->date_of_purchase = $_POST['date_of_purchase'];
            $model->store_of_purchare = $_POST['store'];
            $model->subject = $_POST['subject'];
            $model->comment = $_POST['comment'];
            $model->upload_file = $_POST['upload'];
            $model->fabric_color_1 = $_POST[''];
            $model->fabric_color_2 = $_POST[''];
            $model->enquiry_type = $_POST['Contact'];
            $model->ip_address = $_SERVER['REMOTE_ADDR'];
            $model->country_name = $_POST['country'];
            $model->created_on = new CDbExpression('NOW()'); 
			
			if($model->save()){
				$this->redirect(array('view','id'=>$model->table_id));
            }else{
                print_r($model->getErrors());
            } */
            exit;
		}
        /*
		$this->render('create',array(
			'model'=>$model,
		));*/
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

		if(isset($_POST['ContactUs']))
		{
			$model->attributes=$_POST['ContactUs'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->table_id));
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
		$dataProvider=new CActiveDataProvider('ContactUs');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ContactUs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ContactUs']))
			$model->attributes=$_GET['ContactUs'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ContactUs the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ContactUs::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ContactUs $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='contact-us-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
