<div class="inner-content">
    <div class="innerBanner">
    	<img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/inner-banner.jpg" alt=""/>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
        <h1>FAQ</h1>
        <?php //echo '<pre>';print_r($faq);?>
       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <?php $i = 0; 
  foreach($faq as $fa) { 
    $i++;
    ?>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="<?php echo ($i==1)?'true':'false'; ?>" aria-controls="collapse<?php echo $i; ?>">
              <?php echo 'Q.'.$i.' : '.$fa->faq_question;?>
            </a>
          </h4>
        </div>
        <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
          <div class="panel-body">
           <?php echo 'Answer : '.$fa->faq_answer;?>
          </div>
        </div>
      </div>
  <?php } ?>
</div>
    </div>
    	
    </div>	
    </div>