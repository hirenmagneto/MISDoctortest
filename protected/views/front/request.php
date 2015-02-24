<div class="inner-content">
    <div class="innerBanner">
    	<hr>
    </div>
    <div class="row ImageShadow">
    	<div class="col-md-4 col-sm-4">
	    	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/contact-img1.jpg" alt=""/>
         </div>
        <div class="col-md-4 col-sm-4">
        	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/contact-img2.jpg" alt=""/>	
        </div>
		<div class="col-md-4 col-sm-4">
        	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/contact-img3.jpg" alt=""/>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-12">
        	<div role="tabpanel" class="contactTab">
				<div class="contathead">Fabric sample request</div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="navli1 active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Contact Information</a></li>
                <li role="presentation" class="navli2"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Fabric Selection</a></li>
              </ul>
            <form id="contact-us-form" method="POST" action="<?php echo Yii::app()->baseUrl; ?>/front/req">
              <!-- Tab panes -->
              <div class="tab-content">
              <p style="color: green;"><?php echo (isset($_REQUEST['success']))?'Thank you for Sample Request. Someone from our side will contact you soon.':''; ?></p>
                <div role="tabpanel" class="tab-pane active" id="home">
                	<div class="page-header">Step 1</div>
                     <h2>Enter your contact information.</h2>
                    <div class="row">
    					<div class="col-md-6">
                         <div class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">First Name<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" tabindex="1">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" tabindex="2">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="email" id="email" placeholder="Email" tabindex="3">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Re-enter Email<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="re-email" id="re_email" placeholder="Re-enter Email" tabindex="4">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" tabindex="5">
                            </div>
                          </div>
                          
                         
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-horizontal">
                        	<div class="form-group">
                            <label class="col-sm-3 control-label">Address 1<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="address_1" id="address_1" placeholder="Address 1" tabindex="6">
                            </div>
                          </div>
                        	<div class="form-group">
                            <label class="col-sm-3 control-label">Address 2<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="address_2" id="address_2" placeholder="Address 2" tabindex="7">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">City<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="city" id="city" placeholder="City"  tabindex="8">
                            </div>
                          </div>
                          
                          <!--inline start-->
                          <div class="form-group stateZip">
                            <label class="col-sm-3 control-label">State<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
								<div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="col-sm-12">
                                          <input type="text" class="form-control" placeholder="State" name="state" id="state" tabindex="9">
                                        </div>
                                      </div>
                                  	</div>
                                  <div class="col-md-6">
                                      <div class="form-group Zipcode">
                                        <label class="col-sm-5 control-label">Zip Code<span style="color: red;">*</span></label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Zip Code"  tabindex="10">
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!--inline end-->
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Country<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="country" id="country" placeholder="Country" tabindex="11">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                          <a href="#profile" class="btn btn-default pull-right step1" aria-controls="profile" role="tab" data-toggle="tab"  tabindex="12">
                          <i class="fa fa-chevron-circle-right"></i> Next Step</a>
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                	<div class="page-header">Step 2</div>
                    <h2>Enter your fabric selection</h2>
                    <div class="row">
                        <div class="col-md-6">
                         <div class="form-horizontal productinfo  fabric-sample-request">     
                          <div class="form-group">
                          <label class="col-sm-3 control-label">Series 1</label>
                          <div class="col-sm-9" id="fabric-selector">
                          <div class="">
                              <!--<a data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" tabindex="13">
                                Select
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>C Series</li>
                                <li>L Series</li>
                              </ul>-->
                              <select name="series[]" id="series-select-1">
                                <option  value="C Series">C Series</option>
                                <option  value="L Series">L Series</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Fabric 1</label>
                          <div class="col-sm-9" id="fabric-selector">
                            <div class="">
                              <!--<a data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" tabindex="14">
                                Select
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A208.jpg"></span>A208</li>
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A222.jpg"></span>A222</li>
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A225.jpg"></span>A225</li>
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A230.jpg"></span>A230</li>
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A332.jpg"></span>A332</li>
                              </ul>-->
                              <select name="fabric_color_1c" id="fabric-select-1c" style="display: none;">
                                <option  value="A208" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A208.jpg" data-description=" " >A208</option>
                                <option  value="A222" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A222.jpg" data-description=" " >A222</option>
                                <option  value="A225" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A225.jpg" data-description=" " >A225</option>
                                <option value="A230" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A230.jpg" data-description=" " >A230</option>
                                <option value="A332" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A332.jpg" data-description=" " >A332</option>
                              </select>
                              <select name="fabric_color_1l" id="fabric-select-1l" style="display: none;">
                                <option value="R423" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R423.jpg" data-description=" " >R423</option>
                                <option value="R430" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R430.jpg" data-description=" " >R430</option>
                                <option value="R447" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R447.jpg" data-description=" " >R447</option>
                                <option value="R808" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R808.jpg" data-description=" " >R808</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Series 2</label>
                          <div class="col-sm-9" id="fabric-selector">
                          <div class="">
                              <!--<a data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" tabindex="13">
                                Select
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>C Series</li>
                                <li>L Series</li>
                              </ul>-->
                              <select name="series[]" id="series-select-2">
                                <option  value="C Series">C Series</option>
                                <option  value="L Series">L Series</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Fabric 2</label>
                          <div class="col-sm-9" id="fabric-selector">
                          <div class="">
                              <!--<a data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" tabindex="15">
                                Select
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R430.jpg"></span>R430</li>
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R447.jpg"></span>R447</li>
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R423.jpg"></span>R423</li>
                                <li><span class="icon"><img alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R808.jpg"></span>R808</li>
                              </ul>-->
                              <select name="fabric_color_2c" id="fabric-select-c" style="display: none;">
                                <option  value="A208" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A208.jpg" data-description=" " >A208</option>
                                <option  value="A222" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A222.jpg" data-description=" " >A222</option>
                                <option  value="A225" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A225.jpg" data-description=" " >A225</option>
                                <option value="A230" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A230.jpg" data-description=" " >A230</option>
                                <option value="A332" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A332.jpg" data-description=" " >A332</option>
                              </select>
                              <select name="fabric_color_2l" id="fabric-select-l" style="display: none;">
                                <option value="R423" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R423.jpg" data-description=" " >R423</option>
                                <option value="R430" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R430.jpg" data-description=" " >R430</option>
                                <option value="R447" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R447.jpg" data-description=" " >R447</option>
                                <option value="R808" data-imagesrc="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R808.jpg" data-description=" " >R808</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"></label>
                          <div class="col-sm-9 fabric-seleced">
                          	<img id="image-thumb-1" alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-A222.jpg">
                            <img id="image-thumb-2" alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-R430.jpg">
                          </div>
                        </div>
                             
                          </div>
                 		</div>
                        <div class="col-md-6">
                        	<div class="form-horizontal fabric-sample-request"> 
                        	<div class="row">
                            	<div class="col-md-6">
                        			<img class="img-thumbnail" id="image1" alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/A222-house1.jpg">
                            	</div>
                                <div class="col-md-6">
                                	<img class="img-thumbnail" id="image2" alt="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/R430-house2.jpg">
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-md-12 fabric-selection">
                                          <button class="btn btn-default pull-right" type="submit" tabindex="16" name="submit" value="Submit">Submit</button>
                                          <a data-toggle="tab" role="tab" aria-controls="home" class="btn btn-default pull-right prev1" href="#home"> Previous <i class="fa fa-chevron-circle-left"></i></a>
                                       
                                   
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
                              <input type="text" class="form-control" placeholder="Subject">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Comment</label>
                            <div class="col-sm-9">
                              <textarea rows="6" class="form-control" placeholder="Comment"></textarea>
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
                              <input type="file" class="filestyle" value="Choose File">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                            
                              <button type="submit" class="btn btn-default pull-right">Submit</button>
                              <a href="#profile" class="btn btn-default pull-right prev2" aria-controls="profile" role="tab" data-toggle="tab"> <i class="fa fa-chevron-circle-left"></i> Previous</a>
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
           if($.trim($('#address_1').val()) == ''){
              alert('Address 1 can not be left blank');
              err = 1;
              $( "#address_1" ).focus();
              return false;
           }
            if($.trim($('#address_2').val()) == ''){
              alert('Address 2 can not be left blank');
              err = 1;
              $( "#address_2" ).focus();
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
    
		
        $(document).ready(function() {
            
            function changeimage1(image){
                $('#image-thumb-1').attr('src', '<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-'+image.selectedData.value+'.jpg');
                $('#image1').attr('src', '<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/'+image.selectedData.value+'-house1.jpg');
            }
            function changeimage2(image){
                $('#image-thumb-2').attr('src', '<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/thumb-'+image.selectedData.value+'.jpg');
                $('#image2').attr('src', '<?php echo Yii::app()->baseUrl; ?>/frontdata/images/lightbox/'+image.selectedData.value+'-house1.jpg');
            }
            
            function changefabric1(data){
                if (data.selectedData) {
                    if(data.selectedData.value == 'L Series'){
                        $('#fabric-select-1c').ddslick('destroy');
                        $('#fabric-select-1c').hide();
                        $('#fabric-select-1l').ddslick({
                            onSelected: function(image){
                            changeimage1(image);
                            }
                        });
                    }else if(data.selectedData.value == 'C Series'){
                        $('#fabric-select-1l').ddslick('destroy');
                        $('#fabric-select-1l').hide();
                        $('#fabric-select-1c').ddslick({
                            onSelected: function(image){
                            changeimage1(image);
                            }
                        });   
                    }
                }
            }
            function changefabric2(data){
                if (data.selectedData) {
                    if(data.selectedData.value == 'L Series'){
                        $('#fabric-select-c').ddslick('destroy');
                        $('#fabric-select-c').hide();
                        $('#fabric-select-l').ddslick({
                            onSelected: function(image){
                            changeimage2(image);
                            }
                        });
                    }else if(data.selectedData.value == 'C Series'){
                        $('#fabric-select-l').ddslick('destroy');
                        $('#fabric-select-l').hide();
                        $('#fabric-select-c').ddslick({
                            onSelected: function(image){
                            changeimage2(image);
                            }
                        });   
                    }
                }
            }
            $('#series-select-1').ddslick({
                onSelected: function(data){
                    changefabric1(data);
                }
            });
            $('#series-select-2').ddslick({
                onSelected: function(data){
                    changefabric2(data);
                }
            });
        });
		</script>