<?php //Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php //Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/frontdata/ddslick.js'); ?>
<div class="inner-content">
    <div class="innerBanner">
    	<hr>
    </div>
    <!--<div class="row ImageShadow">
    	<div class="col-md-4 col-sm-4">
	    	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/contact-img1.jpg" alt=""/>
         </div>
        <div class="col-md-4 col-sm-4">
        	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/contact-img2.jpg" alt=""/>	
        </div>
		<div class="col-md-4 col-sm-4">
        	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/contact-img3.jpg" alt=""/>
        </div>
    </div>-->
    <div class="row">
    	<div class="col-md-12">
        	<div role="tabpanel" class="contactTab">
				<div class="contathead">Contact Us</div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="navli1 active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Contact Information</a></li>
                <li role="presentation" class="navli2"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Product Information</a></li>
                <li role="presentation" class="navli3"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Comment</a></li>
              </ul>
            <form id="contact-us-form" method="POST" action="<?php echo Yii::app()->baseUrl; ?>/front/create" enctype="multipart/form-data">
              <!-- Tab panes -->
              <div class="tab-content">
              <p style="color: green;"><?php echo (isset($_REQUEST['success']))?'Thank you for contacting us.<br>Someone from our side will contact you soon.':''; ?></p>
                <div role="tabpanel" class="tab-pane active" id="home">
                	<div class="page-header">Step 1</div>
                     <h2>Enter your contact information.</h2>
                    <div class="row">
    					<div class="col-md-6">
                         <div class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">First Name <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" name="first_name" class="form-control" placeholder="First Name" id="first_name" >
                            </div> 
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" name="last_name" class="form-control" placeholder="Last Name" id="last_name" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="email" name="email" class="form-control" placeholder="Email" id="email" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Re-enter Email <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" name="re-email" class="form-control" placeholder="Re-enter Email" id="re_email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                              <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>
                          </div>
                          
                         
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-horizontal">
                        	<div class="form-group">
                            <label class="col-sm-3 control-label">Address 1</label>
                            <div class="col-sm-9">
                              <input type="text" name="address_1" class="form-control" placeholder="Address 1">
                            </div>
                          </div>
                        	<div class="form-group">
                            <label class="col-sm-3 control-label">Address 2</label>
                            <div class="col-sm-9">
                              <input type="text" name="address_2" class="form-control" placeholder="Address 2">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" name="city" class="form-control" placeholder="City">
                            </div>
                          </div>        
                          <!--inline start-->
                          <div class="form-group stateZip">
                            <label class="col-sm-3 control-label">State</label>
                            <div class="col-sm-9">
								<div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="col-sm-12">
                                          <input type="text" name="state" class="form-control" placeholder="State">
                                        </div>
                                      </div>
                                  	</div>
                                  <div class="col-md-6">
                                      <div class="form-group Zipcode">
                                        <label class="col-sm-5 control-label">Zip Code</label>
                                        <div class="col-sm-7">
                                          <input type="text" name="zip_code" class="form-control" placeholder="Zip Code">
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!--inline end-->
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Country</label>
                            <div class="col-sm-9">
                              <input type="text" name="country" class="form-control" placeholder="Country">
                            </div>
                          </div>                          
                          <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                          <a href="#profile" class="btn btn-default pull-right step1" aria-controls="profile" role="tab" data-toggle="tab">
                          <i class="fa fa-chevron-circle-right"></i> Next Step</a>
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                	<div class="page-header">Step 2</div>
                    <h2>Enter your product information.</h2>
                    <div class="row">
                        <div class="col-md-6">
                         <div class="form-horizontal productinfo">
                          <!--<div class="form-group">
                                <label class="col-sm-3 control-label">Product Type:</label>
                          </div> -->     
                             <div class="form-group">
                          <label class="col-sm-3 control-label">Series</label>
                          <div class="col-sm-9" id="fabric-selector">
                          <div class="">
                              <!--<a data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                Select
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>C Series</li>
                                <li>L Series</li>
                              </ul>-->
                              <?php $models = ProductCategory::model()->findAll(array("condition" => "isactive = 1",'order' => 'category_order_id'));
                                    $list = CHtml::listData($models,'category_name', 'category_name'); 
                                    //echo '<pre>';print_r($list);exit;
                                    ?>
                              <select name="series" id="series-select">
                                <option value="" >Select Series</option>
                                <?php foreach($list as $list) { ?>
                                    <option value="<?php echo $list; ?>" ><?php echo $list; ?></option>
                                <?php } ?>
                                <!--<option value="C Series">C Series</option>
                                <option value="L Series">L Series</option>-->
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Operation</label>
                          <div class="col-sm-9" id="fabric-selector">
                          <div class="">
                              <!--<a data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                Select
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>Manual</li>
                                <li>Electric</li>
                              </ul>-->
                              <select name="operation" id="operation-select">
                                <option value="">Select Operation</option>
                                <option value="Manual">Manual</option>
                                <option value="Electric">Electric</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Size</label>
                          <div class="col-sm-9" id="fabric-selector">
                          <div class="">
                              <!--<a data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                Select
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>8' x 7'</li>
                                <li>10' x 8'</li>
                                <li>12' x 10'</li>
                                <li>13' x 10'</li>
                                <li>16' x 10'</li>
                              </ul>-->
                               <select name="size" id="size">
                               <option value="">Select Size</option>
                                <option value="8*7">8' x 7'</option>
                                <option value="10*8">10' x 8'</option>
                                <option value="12*10">12' x 10'</option>
                                <option value="13*10">13' x 10'</option>
                                <option value="16*10">16' x 10'</option>
                              </select>
                            </div>
                          </div>
                        </div>
                             
                          </div>
                 		</div>
                        <div class="col-md-6">
                        	<div class="form-horizontal productinfo">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Model Number </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="model_number" placeholder="Model Number">
                              <!--model start here-->
                               <span><a href="#" data-toggle="modal" data-target="#myModal">Where is my Model Number?</a></span>
                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Model Number</h4>
                                        </div>
                                        <div class="modal-body">
                                        <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/model-number.jpg" width="558" height="300" alt=""/> </div>
                                        <div class="modal-footer">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              <!--model end here-->
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Lot Number </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Lot Number" name="serial_number">
                              <!--model start here-->
                               <span><a href="#" data-toggle="modal" data-target="#myModal1">Where is my Lot Number?</a></span>
                              <!-- Modal -->
                                  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Lot Number</h4>
                                        </div>
                                        <div class="modal-body">
                                          <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lot-number.jpg" width="558" height="300" alt=""/>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              <!--model end here-->
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Date of Purchase</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control date-picker" name="date_of_purchase" placeholder="Date of Purchase">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Store of Purchase</label>
                            <div class="col-sm-9">
                              <input type="text" name="store" class="form-control" placeholder="Store of Purchase">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                            
                            <a href="#messages" class="btn btn-default pull-right step2" aria-controls="messages" role="tab" data-toggle="tab">
                          <i class="fa fa-chevron-circle-right"></i> Next Step</a>
                          <a href="#home"  class="btn btn-default pull-right prev1" aria-controls="home" role="tab" data-toggle="tab"> Previous <i class="fa fa-chevron-circle-left"></i></a>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                	<div class="page-header">Step 3</div>
                    <h2>Enter your comment</h2>
                    <div class="row">
    					<div class="col-md-6">
                         <div class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Subject</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Comment</label>
                            <div class="col-sm-9">
                              <textarea rows="6" class="form-control" name="comment" placeholder="Comment"></textarea>
                            </div>
                          </div>
                         
                        </div>
                        </div>
                        <div class="col-md-6">
                         <div class="form-horizontal">
                          <div class="form-group">
                            <div class="col-sm-12">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/upload-house.jpg" class="img-thumbnail pull-right" alt=""/> 
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/upload-house2.jpg" class="img-thumbnail pull-right" alt=""/> 
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Upload File</label>
                            <div class="col-sm-9">
                              <input type="file" name="upload" class="filestyle" value="Choose File">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                            
                              <button type="submit" name="contactus" value="submit" class="btn btn-default pull-right">Submit</button>
                              <a href="#profile"  class="btn btn-default pull-right prev2" aria-controls="profile" role="tab" data-toggle="tab"> <i class="fa fa-chevron-circle-left"></i> Previous</a>
                            </div>
                          </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
              </div>
            </form>
            </div>	
    	</div>
    </div>
    
    <div class="row Contactinfo">
    	<div class="col-md-4">
        	<div class="border">
            	<div class="title">By Phone</div>
                <div class="phones">
            	<strong>Toll Free (US)</strong>: (855) 574-0158<br>
				<strong>Phone</strong>: (714) 622-2600<br>
				<strong>Fax</strong>: (877) 310-3832
                </div>
            </div>
        </div>
        <div class="col-md-4">
        	<div class="border">
            	<div class="title">By Email</div>
                <div class="emails">
            		<a href="mailto:techsupport@advaning.com">Sales &amp; Technical Questions</a><br>
				 	<a href="mailto:service@advaning.com">Warranty Claim</a>
                 </div>
            </div>
        </div>
		<div class="col-md-4">
        	<div class="border">
            	<div class="title">By Mail</div>
                    <div class="address">
                    12282 Knott Street,<br> Garden Grove, CA 92841<br> USA
                </div>
            </div>
        </div>
    </div>
    	
    </div>
<script>
var $ = jQuery.noConflict();

</script>    

  <!-- contact step js -->
  <script type="text/javascript">
    $(document).ready(function(){
          $(".step1, .navli2").click(function(){
           var err = 0; 
           if($.trim($('#first_name').val()) == ''){
              alert('First name can not be left blank');
              err = 1;
              $( "#first_name" ).focus();
              return false;
           }
           if($.trim($('#last_name').val()) == ''){
              alert('Last name can not be left blank');
              err = 1;
              $( "#last_name" ).focus();
              return false;
           }
           if($('#email').val() == ''){
              alert('Email can not be left blank');
              err = 1;
              $( "#email" ).focus();
              return false; 
           }else{
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!regex.test($('#email').val())){
               alert('Please enter valid email address');
               err = 1;
               $( "#email" ).focus();
              return false;
            }
           }
           if($('#re_email').val() == ''){
              alert('Re-enter Email can not be left blank');
              err = 1;
              $( "#re_email" ).focus();
              return false;
           }
           if($('#email').val() != $('#re_email').val()){
              alert('Please confirm email values');
              err = 1;
              $( "#re_email" ).focus();
              return false;
           }
           if(err == 0){
             $(".navli2").addClass("active");
			 $(".navli1").removeClass("active");
           }
           });
        
		  /* $(".step1").click(function(){
			$(".navli2").addClass("active");
			$(".navli1").removeClass("active");
		  }); */
		  $(".step2").click(function(){
			$(".navli3").addClass("active");
			$(".navli2").removeClass("active");
		  });
		  $(".prev1").click(function(){
			$(".navli1").addClass("active");
			$(".navli2").removeClass("active");
		  });
          $(".prev2").click(function(){
			$(".navli2").addClass("active");
			$(".navli3").removeClass("active");
		  }); 
                                        
		  
	});
    $('INPUT[type="file"]').change(function () {
        var ext = this.value.match(/\.(.+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'jpeg':
            case 'png':
                $('#uploadButton').attr('disabled', false);
                break;
            default:
                alert('This is not an allowed file type.');
                this.value = '';
        }
    });
    </script>
    
    <!--datepiker-->
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/bootstrap-filestyle.min.js"> </script>
    <script>
    	$(":file").filestyle({icon: false});
    </script>
    
   <!--datepiker-->
       <link href="<?php echo Yii::app()->baseUrl; ?>/frontdata/css/jquery-ui.css" rel="stylesheet">
	   <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/jquery-ui.min.js"> </script>
       <script>
		$(".date-picker").datepicker({
		  dateFormat: 'mm-dd-yy'
		});
                        
		
		$(".date-picker").on("change", function () {
			var id = $(this).attr("id");
			var val = $("label[for='" + id + "']").text();
			$("#msg").text(val + " changed");
		});
        $(document).ready(function() {
            $('#series-select').ddslick();
            $('#operation-select').ddslick();
            $('#size').ddslick();
        // validate the contact-us-form form when it is submitted
        //$("#contact-us-form").validate();
        });
		</script>
    