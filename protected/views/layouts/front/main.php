<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/favicon.ico">

    <title>Advaning</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/frontdata/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->baseUrl; ?>/frontdata/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/html5shiv.js"></script>
    <![endif]-->


<!-- Custom styles for this template -->
<link href="<?php echo Yii::app()->baseUrl; ?>/frontdata/css/style.css" rel="stylesheet">

<link href="<?php echo Yii::app()->baseUrl; ?>/frontdata/css/prettyPhoto.css" rel="stylesheet">
 
 
 <!--slider Gallery css-->
 <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontdata/assets/css/animate.min.css">
    <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/docs.min.js"></script>
    <?php if(Yii::app()->controller->action->id == 'contactUs'
    || Yii::app()->controller->action->id == 'request' ) { ?>
        <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/jquery.ddslick.min.js"></script>
    <?php } ?>
  </head>
  

  <body>
  
 	 <div class="container wrapper">
     
    <!-- HEADER
    ================================================== -->
    <div class="header">
    	<div class="navbar-wrapper  navbar-default">
        <div class="navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo Yii::app()->baseUrl; ?>/front/"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/logo.png" alt=""/></a>
              	<!--mobile social icon start here -->
                <div class="social-search-mobile">
              <form class="navbar-form navbar-left pull-right" role="search">
                <div class="searchBox">
                    <div class="search-icon"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/search-icon.png" alt=""/></div>
                    <div class="search-panel">
                    <div class="head">Search<span class="btn-close"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/closeBtn.png" alt=""/></span></div>
                     <input type="text" placeholder="Search" class="form-control" name="">
                     <button class="btn button button-type1" type="submit" name="subscribe"><i class="fa fa-search"></i></button>
                    </div>
                </div>
              </form>
              <div class="live-chat-icon"><a href="javascript:void(0)" title="Live chat"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/live-chat-icon.png" alt=""/></a></div>
              <div class="social-space">
                    <div class="share-icon"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/share-icon.png" alt=""/></div>
                    <ul class="social-icons">
                        <li class="head">Find Us<span class="btn-close"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/closeBtn.png" alt=""/></span></li>
                        <li><a href="#" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/facebook-icon.png" alt=""/><span>Facebook</span></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/twitter-icon.png" alt=""/><span>Twitter</span></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/linkedin-icon.png" alt=""/><span>LinkedIn</span></a></li>
                    </ul>
                </div>
                <div class="language-icon"><a href="javascript:void(0)" title="language"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/google-translate-icon.png" alt=""/></a></div>
              </div>
                <!--mobile social icon start here -->
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown productMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Products <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li> 
                    	<div class="col-md-6 col-sm-6">
							<div class="poductImg">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/submenu-img.jpg"  alt="" />
                            </div>
                            <h4>C Series (Classic)</h4>
                          <a href="<?php echo Yii::app()->baseUrl; ?>/front/product/series/c/type/manual">
                          <ul class="pull-left">
                              <li class="sub-head">Manual</li>
                              <li>8' x 7'</li>
                              <li>10' x 8'</li>
                              <li>12' x 10'</li>
                              <li>13' x 10'</li>
                              <li>16' x 10'</li>
                          </ul>
                          </a>
                          <a href="<?php echo Yii::app()->baseUrl; ?>/front/product/series/c/type/electric">
                          <ul class="pull-right">
                              <li class="sub-head">Electric</li>
                              <li>8' x 7'</li>
                              <li>10' x 8'</li>
                              <li>12' x 10'</li>
                              <li>13' x 10'</li>
                              <li>16' x 10'</li>
                          </ul>
                          </a>
                          <div class="clearfix"></div>
						</div>
                        <div class="col-md-6 col-sm-6">
							<div class="poductImg">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/submenu-img.jpg"  alt="" />
                            </div>
                            <h4>L Series (Luxury)</h4>
                          <a href="<?php echo Yii::app()->baseUrl; ?>/front/product/series/l/type/manual">
                          <ul class="pull-left">
                              <li class="sub-head">Manual</li>
                              <li>8' x 7'</li>
                              <li>10' x 8'</li>
                              <li>12' x 10'</li>
                              <li>13' x 10'</li>
                              <li>16' x 10'</li>
                          </ul>
                          </a>
                          <a href="<?php echo Yii::app()->baseUrl; ?>/front/product/series/l/type/electric">
                          <ul class="pull-right">
                              <li class="sub-head">Electric</li>
                              <li>8' x 7'</li>
                              <li>10' x 8'</li>
                              <li>12' x 10'</li>
                              <li>13' x 10'</li>
                              <li>16' x 10'</li>
                          </ul>
                          </a>
                          <div class="clearfix"></div>
						</div>
                    </li>
                  </ul>
                </li>
                <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/cms/c/shop/">Shop</a></li>
                <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Promotion <b class="caret"></b></a>
                	<ul class="dropdown-menu">
                    	<li><a href="<?php echo Yii::app()->baseUrl; ?>/front/cms/c/installation-rebate">Installation Rebate</a></li>
                    </ul>
                 </li>   
                <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Resources <b class="caret"></b></a>
                	<ul class="dropdown-menu">
                    	<li><a href="<?php echo Yii::app()->baseUrl; ?>/front/faq">FAQ</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/cms/c/troubleshooting">Troubleshooting</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/visualizer">Awning Visualizer</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/guide">Measuring Guide</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/installation">Installation Video</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/cms/c/users-manuals">User's Manuals</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/registration">Product Registration</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/request">Fabric Sample Request</a></li>
                    </ul>
                 </li>
                <li class="dropdown">
                <a href="contact-us.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Contact Us <b class="caret"></b></a>
                	<ul class="dropdown-menu">
                    	<li><a href="<?php echo Yii::app()->baseUrl; ?>/front/aboutus">About Us</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/front/contactus">Contact Us</a></li>
                    </ul>
                </li>
              </ul>
              <div class="social-search">
              
              <form class="navbar-form navbar-left pull-right" role="search">
                <div class="searchBox">
                    <div class="search-icon"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/search-icon.png" alt=""/></div>
                    <div class="search-panel">
                    <div class="head">Search<span class="btn-close"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/closeBtn.png" alt=""/></span></div>
                     <input type="text" placeholder="Search" class="form-control" name="">
                     <button class="btn button button-type1" type="submit" name="subscribe"><i class="fa fa-search"></i></button>
                    </div>
                </div>
              </form>
              <div class="live-chat-icon"><a href="javascript:void(0)" title="Live chat"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/live-chat-icon.png" alt=""/></a></div>
              <div class="social-space">
                    <div class="share-icon"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/share-icon.png" alt=""/></div>
                    <ul class="social-icons">
                        <li class="head">Find Us<span class="btn-close"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/closeBtn.png" alt=""/></span></li>
                        <li><a href="#" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/facebook-icon.png" alt=""/><span>Facebook</span></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/twitter-icon.png" alt=""/><span>Twitter</span></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/linkedin-icon.png" alt=""/><span>LinkedIn</span></a></li>
                    </ul>
                </div>
                <div class="language-icon"><a href="javascript:void(0)" title="language"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/google-translate-icon.png" alt=""/></a></div>
              </div>
            </div>
        </div>

      </div>
    </div>
    
    <?php echo $content; ?>
    
           <!-- FOOTER -->
     <footer>
        <div class="row">
            <div class="col-md-12 text-center">
            <a href="<?php echo Yii::app()->baseUrl; ?>/front/cms/c/trade-marks">Trade Marks</a>
            <a href="<?php echo Yii::app()->baseUrl; ?>/front/cms/c/term-conditions">Term &amp; Conditions</a>
            <a href="<?php echo Yii::app()->baseUrl; ?>/front/cms/c/privacy-policy">Privacy Policy</a>
            </div>
            <div class="col-md-12 text-center">
            <p class="copyright">&copy; 2015 ADVANING. All Copyrights Reserved.</p>
            </div>
         </div>  
  	</footer>

    </div><!-- /.container -->
 
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script>
		$(document).ready(function(){
		  $(".share-icon").click(function(){
			$(".social-icons").slideToggle();
			$(".search-panel").slideUp();
		  });
		  $(".btn-close").click(function(){
			$(".social-icons").slideUp();
		  });
		  		  			  
		   $(".search-icon").click(function(){
			$(".search-panel").slideToggle();
			$(".social-icons").slideUp();
		  });
		  $(".btn-close").click(function(){
			$(".search-panel").slideUp();
		  });
		  
		});
  	</script>
    
    <!-- dropdown hover -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/bootstrap-hover-dropdown.js"></script>
    <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>
  
<!--video control js-->   
<script type="text/javascript">
$(document).ready(function()
		{
			$("video").prop('muted', false);
		})

    $("#pause").click(function()
    {
        var v = document.getElementById("my-video");
        v.pause();
        
    });
	
	
    $("#play").click(function()
    {
        var v = document.getElementById("my-video");
        v.play(); 
        
    });
    
   
</script>
<!-- light box -->
  <script defer src="<?php echo Yii::app()->baseUrl; ?>/frontdata/js/prettyPhotoLightbox.js"></script> 
  <script type="text/javascript" charset="utf-8">
	  $(document).ready(function(){
		  $("area[rel^='prettyPhoto']").prettyPhoto();
		  
		  $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
		  $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
  
	  });
	</script>
    
<!-- Slider  Gallery js-->

  <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/assets/js/jquery.desoslide.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/frontdata/assets/js/demo.js"></script>

   
  </body>
</html>