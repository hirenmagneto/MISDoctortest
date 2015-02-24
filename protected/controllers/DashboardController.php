<?php

class DashboardController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('admin'),
			),
            array('deny',  // deny all users
                'actions'=>array('index'),
				'users'=>array('*'),
			),
		);
	}
    
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

}
