<?php //Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php //Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/frontdata/ddslick.js'); ?>

<div class="inner-content">
    <div class="innerBanner">
    	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/fabric-sample-request.jpg" alt=""/>
    </div>
    <h1>Product Registration</h1>
    <form id="product-registration-form" method="POST" action="<?php echo Yii::app()->baseUrl; ?>/front/prod">
    <p style="color: green;"><?php echo (isset($_REQUEST['success']))?'Thank you for Registration. Someone from our side will contact you soon.':''; ?></p>
    <div class="row fabric-sample-request">
    					<div class="col-md-6">
                         <div class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">First Name <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Re-enter Email <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Re-enter Email" name="re_email" id="re_email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Phone" name="phone" >
                            </div>
                          </div>
                        	
                          
                         
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="City" name="city" id="city">
                            </div>
                          </div>
                          
                          <!--inline start-->
                          <div class="form-group stateZip">
                            <label class="col-sm-3 control-label">State <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
								<div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="col-sm-12">
                                          <input type="text" class="form-control" placeholder="State" id="state" name="state">
                                        </div>
                                      </div>
                                  	</div>
                                  <div class="col-md-6">
                                      <div class="form-group Zipcode">
                                        <label class="col-sm-5 control-label">Zip Code <span style="color: red;">*</span></label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" placeholder="Zip Code" id="zip_code" name="zip_code">
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!--inline end-->
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Country <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Country" id="country" name="country">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Model Number<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="model_number" id="model_number" placeholder="Model Number">
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
                            <label class="col-sm-3 control-label">Lot Number<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Lot Number" name="serial_number" id="serial_number">
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
                            <label class="col-sm-3 control-label">Date of Purchase<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control date-picker" name="date_of_purchase" placeholder="Date of Purchase" id="date_of_purchase" readonly="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Address 1 <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Address 1" id="address_1" name="address_1">
                            </div>
                          </div>
                        	<div class="form-group">
                            <label class="col-sm-3 control-label">Address 2 <span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Address 2" id="address_2" name="address_2">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                          <button class="btn btn-default pull-right"  type="submit" name="submit">Submit</button>
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>	
                    </form>
    </div>
     <script>
var $ = jQuery.noConflict();

</script>    


 <!-- Product step js -->
    
    <script type="text/javascript">
    $(document).ready(function(){
          $(".btn").click(function(){
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
           if($.trim($('#city').val()) == ''){
              alert('Please Enter Yor City');
              err = 1;
              $( "#city" ).focus();
              return false;
           }
            if($.trim($('#state').val()) == ''){
              alert('Please Enter Yor State');
              err = 1;
              $( "#state" ).focus();
              return false;
           }
           if($.trim($('#zip_code').val()) == ''){
              alert('Please enter your Zip Code');
              err = 1;
              $( "#zip_code" ).focus();
              return false;
           }
           if($.trim($('#country').val()) == ''){
              alert('Please Enter Yor Country');
              err = 1;
              $( "#country" ).focus();
              return false;
           }
           if($.trim($('#model_number').val()) == ''){
             alert('Please enter your Model Code');
             err = 1;
             $( "#model_number" ).focus();
             return false;
          }
          if($.trim($('#serial_number').val()) == ''){
             alert('Please enter your Lot Number');
             err = 1;
             $( "#serial_number" ).focus();
             return false;
          }
          if($.trim($('#date_of_purchase').val()) == ''){
             alert('Please enter your Date of Purchase');
             err = 1;
             $( "#date_of_purchase" ).focus();
             return false;
          }
          if($.trim($('#address_1').val()) == ''){
              alert('Address can not be left blank');
              err = 1;
              $( "#address_1" ).focus();
              return false;
           }
            if($.trim($('#address_2').val()) == ''){
              alert('Please Enter Your Address');
              err = 1;
              $( "#address_2" ).focus();
              return false;
           }

           });	  
	});
    
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
		</script>