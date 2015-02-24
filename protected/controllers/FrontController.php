<?php

class FrontController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
    
    public $layout='//layouts/front/column';
    
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        $model=Gallary::model()->findAll(array("condition" => "gallary_type = 'Home Page Banner' and isactive = 1",'order' => 'gallary_order',));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',array(
            'model'=>$model,
        ));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionProduct($series,$type)
	{
	   $ser = strtoupper($series).' Series';
	   $cat=ProductCategory::model()->findAll(array("condition" => "category_name LIKE '%$ser%'"));
       $cat_id = $cat[0]['prod_category_id'];
       
       $typ = ucfirst($type);
	   $product=Product::model()->findAll(array("condition" => "prod_category_id = $cat_id and operation_type like '%$typ%' and isactive = 1"));
       $product = $product[0];
       
       $prod_id = $product['product_id'];
       $fabric=Fabric::model()->findAll(array("condition" => "product_ids like '%$prod_id%' and isactive = 1"));
       
       $side=Content::model()->findAll(array("condition" => "content_title_slug = 'product-side-bar' and isactive = 1"));
       
	   $this->render('product',array(
		'product'=>$product,
        'fabric'=>$fabric,
        'name'=>$ser.' '.$typ,
        'series'=>$ser,
        'type'=>$typ,
        'side'=>$side,
	   ));
        
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
    
    public function actionCms($c)
	{
        $cms=Content::model()->findAll(array("condition" => "content_title_slug = '$c' and isactive = 1"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('cms',array(
            'cms'=>$cms,
        ));
	}
    
    public function actionAboutus(){
        $aboutusimages=Content::model()->findAll(array("condition" => "content_title_slug = 'about-us-images' and isactive = 1"));
        $aboutus=Content::model()->findAll(array("condition" => "content_title_slug = 'about-us' and isactive = 1"));
        $aboutusside=Content::model()->findAll(array("condition" => "content_title_slug = 'side-about-us' and isactive = 1"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('about',array(
            'aboutus'=>$aboutus,
            'aboutusside'=>$aboutusside,
            'aboutusimages'=>$aboutusimages,
        ));
    }
    
    public function actionFaq()
	{
        $faq=Faq::model()->findAll(array("condition" => "isactive = 1"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('faq',array(
            'faq'=>$faq,
        ));
	}
    
    public function actionVisualizer()
	{
        //$faq=Faq::model()->findAll(array("condition" => "isactive = 1"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('visualizer',array(
            //'faq'=>$faq,
        ));
	}
    
    public function actionGuide()
	{
        $guide=Gallary::model()->findAll(array("condition" => "isactive = 1 and gallary_type = 'Measuring Guide Video'","order"=>"gallary_order"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('guide',array(
            'guide'=>$guide,
        ));
	}
    
    public function actionInstallation()
	{
        $install=Gallary::model()->findAll(array("condition" => "isactive = 1 and gallary_type = 'Installation Video'","order"=>"gallary_order"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('install',array(
            'install'=>$install,
        ));
	}
    
    public function actionContactus()
	{
        //$install=Gallary::model()->findAll(array("condition" => "isactive = 1 and gallary_type = 'Installation Video'","order"=>"gallary_order"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('contactus',array(
            //'success'=>$success,
        ));
	}
    
    public function actionCreate()
	{
		$model=new ContactUs;
        
        //echo '<pre>';print_r($_POST);exit;
        
		if(isset($_POST['contactus']))
		{
		  $ip = $_SERVER['REMOTE_ADDR'];
          $date = new CDbExpression('NOW()');
            //upload
            $target_dir = Yii::app()->basePath."/../images/front/";
            $filename = basename($_FILES["upload"]["name"]);
            $target_file = $target_dir . basename($_FILES["upload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["upload"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    //echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check file size
            if ($_FILES["upload"]["size"] > 500000) {
                //echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $this->redirect(array('front/contactus','fail'=>'filenosupport'));
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
                } else {
                    $this->redirect(array('front/contactus','fail'=>'filenoupload'));
                }
            }
            //upload end
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
            :size,
            :model_number,
            :series_number,
            :date_of_purchase,
            :store_of_purchare,
            :subject,
            :comment,
            '$filename',
            '',
            '',
            'Contact Us',
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
            $command->bindParam(":size",$_POST['size'],PDO::PARAM_STR);
            $command->bindParam(":model_number",$_POST['model_number'],PDO::PARAM_STR);
            $command->bindParam(":series_number",$_POST['serial_number'],PDO::PARAM_STR);
            $command->bindParam(":date_of_purchase",$_POST['date_of_purchase'],PDO::PARAM_STR);
            $command->bindParam(":store_of_purchare",$_POST['store'],PDO::PARAM_STR);
            $command->bindParam(":subject",$_POST['subject'],PDO::PARAM_STR);
            $command->bindParam(":comment",$_POST['comment'],PDO::PARAM_STR);
            //$command->bindParam(":upload_file",$_POST['upload'],PDO::PARAM_STR);
            //$command->bindParam(":enquiry_type",'Contact',PDO::PARAM_STR);
            //$command->bindParam(":ip_address",$_SERVER['REMOTE_ADDR'],PDO::PARAM_STR);
            $command->bindParam(":country_name",$_POST['country'],PDO::PARAM_STR);
            //$command->bindParam(":created_on",new CDbExpression('NOW()'),PDO::PARAM_STR);
            
            $command->execute();
            
            $this->redirect(array('front/contactus','success'=>'done'));
		}
	}
    
    public function actionRequest()
	{
        //$install=Gallary::model()->findAll(array("condition" => "isactive = 1 and gallary_type = 'Installation Video'","order"=>"gallary_order"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('request',array(
          //  'install'=>$install,
        ));
	}
    
    public function actionRegistration()
	{
        //$install=Gallary::model()->findAll(array("condition" => "isactive = 1 and gallary_type = 'Installation Video'","order"=>"gallary_order"));
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('registration',array(
           // 'install'=>$install,
        ));
	}
    
    public function actionprod()
	{
		$model=new ContactUs;
        
        //echo '<pre>';print_r($_POST);exit;
        
		if(isset($_POST['submit']))
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
            '',
            '',
            '',
            :model_number,
            :series_number,
            :date_of_purchase,
            '',
            '',
            '',
            '',
            '',
            '',
            'Product Registration',
            '$ip',
            '',
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
            $command->bindParam(":model_number",$_POST['model_number'],PDO::PARAM_STR);
            $command->bindParam(":series_number",$_POST['serial_number'],PDO::PARAM_STR);
            $command->bindParam(":date_of_purchase",$_POST['date_of_purchase'],PDO::PARAM_STR);
           
            //$command->bindParam(":upload_file",$_POST['upload'],PDO::PARAM_STR);
          //  $command->bindParam(":enquiry_type",'Product',PDO::PARAM_STR);
            //$command->bindParam(":ip_address",$_SERVER['REMOTE_ADDR'],PDO::PARAM_STR);
          //  $command->bindParam(":country_name",$_POST['country'],PDO::PARAM_STR);
            //$command->bindParam(":created_on",new CDbExpression('NOW()'),PDO::PARAM_STR);
            
            $command->execute();
            
            $this->redirect(array('front/registration','success'=>'done'));
		}
	}
    
    public function actionReq()
	{
		$model=new ContactUs;
        
        //echo '<pre>';print_r($_POST);exit;
        
		if(isset($_POST['submit']))
		{
		  $ip = $_SERVER['REMOTE_ADDR'];
          $date = new CDbExpression('NOW()');
          
          if($_POST['series'][0]=='C Series'){
            $fabric_color_1 = $_POST['fabric_color_1c'];
          }else{
            $fabric_color_1 = $_POST['fabric_color_1l'];
          }
          
          if($_POST['series'][1]=='C Series'){
            $fabric_color_2 = $_POST['fabric_color_2c'];
          }else{
            $fabric_color_2 = $_POST['fabric_color_2l'];
          }
          
          $series = implode(',',$_POST['series']);
            
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
            '$series',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '$fabric_color_1',
            '$fabric_color_2',
            'Fabric sample request',
            '$ip',
            '',
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
                        
            $command->execute();
            
            $this->redirect(array('front/request','success'=>'done'));
		}
	}
}