    <div class="inner-content">
    <div class="innerBanner">
    	<hr>
    </div>
    <h1>Installation Video</h1>
    
    <?php 
    $i=0;
    foreach($install as $ins) { 
        $i++;
        ?>
    <div class="row installtion-video <?php echo ($i%2==0)?'odd':''; ?>">
    	
        <div class="col-md-4">
	       <video id="my-video" width="100%" height="" controls="" poster="">
              <source src="<?php echo Yii::app()->baseUrl; ?>/images/gallary/<?php echo $ins->gallary_path; ?>" type="video/mp4">
           </video>
        </div>
        
        <div class="col-md-8">
            <?php echo $ins->gallary_desc; ?>
    	</div>
    </div>
    <?php } ?>
    

    	
    </div>