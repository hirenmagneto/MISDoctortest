    <!-- CONTENT PART
    ================================================== -->
    
    <!-- Carousel -->
    <div id="myCarousel" class="carousel fade" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
                <?php $i=0; 
        foreach($model as $image){ ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0)?'active':''; ?>""></li>
        <?php 
        $i++;
        } ?>
        <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>-->
      </ol>
      <div class="carousel-inner">
        <?php $i=0; 
        foreach($model as $image){ ?>
            <div class="item <?php echo ($i==0)?'active':''; ?>">
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/gallary/<?php echo $image->gallary_path; ?>" alt=""/>
            </div>    
        <?php 
        $i++;
        } ?>
        <!--<div class="item active">
          <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/slider01.jpg" alt=""/>
        </div>
        <div class="item">
          <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/slider02.jpg" alt=""/>
        </div>
        <div class="item">
          <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/slider03.jpg" alt=""/>
        </div>-->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/left.png" alt=""/></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/right.png" alt=""/></a>
      <!--<div class="banner-shadow"><img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/banner-shadow.png" alt=""/></div>-->
    </div>  
    <!-- /.carousel -->
        
        <!-- Three columns of text below the carousel -->
    <div class="row bottomPart">
      <div class="col-md-4 col-sm-4">
        <section class="borderbox">
      <div class="banner-wrap banner-home">
      <figure class="featured-thumbnail"><a title="" href="<?php echo Yii::app()->baseUrl; ?>/front/visualizer"><img alt="" title="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/home-awning.jpg"></a>

      </figure>
      <h4>Awning Visualizer</h4>
      <p>Design your Advaning awning with different fabrics and your selection of exterior wall texture.<br>
<a class="btn-link" href="<?php echo Yii::app()->baseUrl; ?>/front/visualizer">Read more...</a></p>
      </div> 
      </section>
      </div><!-- /.col-lg-4 -->
      <div class="col-md-4 col-sm-4">
         <section class="borderbox">
      <div class="banner-wrap banner-home">
      <figure class="featured-thumbnail"><a title="" href="<?php echo Yii::app()->baseUrl; ?>/front/guide"><img alt="" title="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/howtomeasure.jpg"></a></figure>
      <h4>Measuring Guide</h4>
      <p>Learn how to choose the right size of Advaning awning with this helpful guide.<br>
<a class="btn-link" href="<?php echo Yii::app()->baseUrl; ?>/front/guide">Read more...</a></p>
      </div> 
      </section>
      </div><!-- /.col-lg-4 -->
      <div class="col-md-4 col-sm-4">
         <section class="borderbox">
      <div class="banner-wrap banner-home">
      <figure class="featured-thumbnail"><a title="" href="<?php echo Yii::app()->baseUrl; ?>/front/installation"><img alt="" title="" src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/video.jpg"></a>

      </figure>
      <h4>Installation Video</h4>
      <p>From measuring to installing Advaning awning, this video will show you the step-by-step instructions.<br>
<a class="btn-link" href="<?php echo Yii::app()->baseUrl; ?>/front/installation">Read more...</a></p>
      </div> 
      </section>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->