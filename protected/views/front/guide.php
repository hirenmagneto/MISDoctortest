<div class="inner-content">
<div class="innerBanner">
	<hr>
</div>
<h1>Measuring Guide</h1>
<?php foreach($guide as $gui) { ?>
    <div class="row measuringGuide">
    	<div class="col-md-5">
	    	<!--<video id="my-video" width="100%" height="" controls="" poster="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/videoPoster.jpg">-->
            <video id="my-video" width="100%" height="" controls="" poster="">
              <source src="<?php echo Yii::app()->baseUrl; ?>/images/gallary/<?php echo $gui->gallary_path; ?>" type="video/mp4">
            </video>
        </div>
        <div class="col-md-7">
         <?php echo $gui->gallary_desc; ?>
    	</div>
    </div>
    <hr />
<?php } ?>
</div>