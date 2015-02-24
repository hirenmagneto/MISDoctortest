<ol class="breadcrumb">
      <li>Product</li>
      <li class="active"><?php echo $name; ?></li>
    </ol>
    <div class="row">
                        <div id="slideshow3" class="col-md-10"></div>

                        <div class="col-md-2 text-center">
                            <ul id="slideshow3_thumbs" class="desoslide-thumbs-vertical list-inline">
                                <?php $i=1;
                                foreach($fabric as $fab) {
                                    if($i>=5){ break;  }
                                    ?>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl.'/images/album/fabric/'.$fab->fabric_id.'/'.$fab->house_1 ?>">
                                            <img src="<?php echo Yii::app()->baseUrl.'/images/album/fabric/'.$fab->fabric_id.'/thumbs/'.$fab->house_1 ?>" alt=""/>
                                        </a>
                                    </li>
                                <?php $i++;
                                } ?>
                                <!--<li>
                                    <a href="images/large-A225.jpg">
                                        <img src="images/thumb-A225.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/large-A230.jpg">
                                        <img src="images/thumb-A230.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/large-A332.jpg">
                                        <img src="images/thumb-A332.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/large-A222.jpg">
                                        <img src="images/thumb-A222.jpg" alt="">
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>

    <div class="row heading">
        <div class="col-md-12"><h1><?php echo $name; ?></h1></div>
    </div>
    <?php //echo '<pre>';print_r($product);exit;?>
    <div class="row bottomPart">
 <div class="col-md-9">
    <div class="productSheet table-responsive">
        <table class="table table-bordered">
<thead>
<tr>
  <th scope="col" width="250">Series</th>
  <th scope="col" class="text-center"><?php echo $series; ?></th>
</tr>
</thead>
<tbody>
<tr>
  <th scope="row">Operation</th>
  <td><?php echo $product->operation_type; ?></td>
</tr>
<tr>
  <th scope="row">Feature</th>
  <td><?php echo $product->features; ?></td>
</tr>
<tr>
  <th scope="row">Width (ft)</th>
  <td><?php echo $product->prod_width; ?></td>
</tr>
<tr>
  <th scope="row">Projection (ft)</th>
  <td><?php echo $product->prod_projection; ?></td>
</tr>
<tr>
  <th scope="row">Frame Color</th>
  <td>
  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td>
            <div style="height: 30px; width: 50px; display: block; margin: auto; background-color: <?php echo $product->frame_colour ?>;">
                &nbsp;
            </div>
          </td>
        </tr>
        <tr>
          <td><strong><?php echo ucfirst($product->frame_colour); ?></strong></td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>
<tr>
  <th valign="middle" scope="row">Fabric Color</th>
  <td class="fabric-colors">
  	<div class="gallery" style="display:none;"></div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gallery">
        <tr>
        <?php 
        $a = 1;
        foreach($fabric as $fab) {
            ?>
        <td>
            <a class="example-image-link" href="<?php echo Yii::app()->baseUrl.'/images/album/fabric/'.$fab->fabric_id.'/'.$fab->fabric_big ?>" data-lightbox="example-set" rel="prettyPhoto[gallery<?php echo $a; ?>]" title="<?php echo $fab->fabric_code.' '.$fab->colour_name;?>">
                <img class="example-image" src="<?php echo Yii::app()->baseUrl.'/images/album/fabric/'.$fab->fabric_id.'/'.$fab->fabric_thumb ?>" alt=""/>
            </a>
            <a class="example-image-link" href="<?php echo Yii::app()->baseUrl.'/images/album/fabric/'.$fab->fabric_id.'/'.$fab->house_1 ?>" data-lightbox="example-set" rel="prettyPhoto[gallery<?php echo $a; ?>]" title="<?php echo $fab->fabric_code.' '.$fab->colour_name;?>" ></a>
            <a class="example-image-link" href="<?php echo Yii::app()->baseUrl.'/images/album/fabric/'.$fab->fabric_id.'/'.$fab->house_2 ?>" data-lightbox="example-set" rel="prettyPhoto[gallery<?php echo $a; ?>]" title="<?php echo $fab->fabric_code.' '.$fab->colour_name;?>" ></a>
        </td>
        <?php 
            $a++;
        } ?>
          <!--<td>
          <a class="example-image-link" href="images/lightbox/A225.jpg" data-lightbox="example-set1" rel="prettyPhoto[gallery2]" title="A225 Sunny Yellow with Silver Gray Stripe"><img class="example-image" src="images/lightbox/thumb-A225.jpg" alt=""/></a>
          <a class="example-image-link" href="images/lightbox/A225-house1.jpg" data-lightbox="example-set1" rel="prettyPhoto[gallery2]" title="A225 Sunny Yellow with Silver Gray Stripe"></a>
          <a class="example-image-link" href="images/lightbox/A225-house2.jpg" data-lightbox="example-set1" rel="prettyPhoto[gallery2]" title="A225 Sunny Yellow with Silver Gray Stripe"></a>
          </td>
          <td>
          <a class="example-image-link" href="images/lightbox/A230.jpg" data-lightbox="example-set2" rel="prettyPhoto[gallery3]" title="A230 Forest Green with Beige+Gray Stripe"><img class="example-image" src="images/lightbox/thumb-A230.jpg" alt=""/></a>
          <a class="example-image-link" href="images/lightbox/A230-house1.jpg" data-lightbox="example-set2" rel="prettyPhoto[gallery3]" title="A230 Forest Green with Beige+Gray Stripe"></a>
          <a class="example-image-link" href="images/lightbox/A230-house2.jpg" data-lightbox="example-set2" rel="prettyPhoto[gallery3]" title="A230 Forest Green with Beige+Gray Stripe"></a>
          </td>
          <td>
            <a class="example-image-link" href="images/lightbox/A332.jpg" data-lightbox="example-set3" rel="prettyPhoto[gallery4]" title="A332 Sand Beige with Brick Red Stripe"><img class="example-image" src="images/lightbox/thumb-A332.jpg" alt=""/></a>
            <a class="example-image-link" href="images/lightbox/A332-house1.jpg" data-lightbox="example-set3" rel="prettyPhoto[gallery4]" title="A332 Sand Beige with Brick Red Stripe"></a>
            <a class="example-image-link" href="images/lightbox/A332-house2.jpg" data-lightbox="example-set3" rel="prettyPhoto[gallery4]" title="A332 Sand Beige with Brick Red Stripe"></a>
          </td>
          <td>
            <a class="example-image-link" href="images/lightbox/A222.jpg" data-lightbox="example-set4" rel="prettyPhoto[gallery5]" title="A222 Forest Green with Sand Beige Stripe"><img class="example-image" src="images/lightbox/thumb-A222.jpg" alt=""/></a>
           <a class="example-image-link" href="images/lightbox/A222-house1.jpg" data-lightbox="example-set4" rel="prettyPhoto[gallery5]" title="A222 Forest Green with Sand Beige Stripe"></a>
           <a class="example-image-link" href="images/lightbox/A222-house2.jpg" data-lightbox="example-set4" rel="prettyPhoto[gallery5]" title="A222 Forest Green with Sand Beige Stripe"></a>
          </td>-->
        </tr>
        <tr>
            <?php foreach($fabric as $fab) { ?>
                <td><?php echo $fab->fabric_code ?></td>
            <?php } ?>
          <!--<td>A225</td>
          <td>A230</td>
          <td>A332</td>
          <td>A222</td>-->
        </tr>
    </table>
    
  </td>
</tr>
<tr>
  <th scope="row">Cassette Size</th>
  <td><?php echo $product->cassette_size; ?></td>
</tr>
<tr>
  <th scope="row">Screws - Lag Screws</th>
  <td><?php echo $product->leg_screw; ?></td>
</tr>
<tr>
  <th scope="row">Screws - Masonry Bolt</th>
  <td><?php echo $product->mandatory_bolt; ?></td>
</tr>

<tr>
  <th scope="row">Torsion Bar</th>
  <td><?php echo $product->torsion_bar; ?></td>
</tr>
<tr>
  <th scope="row">Adjustable Pitch</th>
  <td><span class="<?php echo ($product->adjustable_pitch == '1')?'glyphicon glyphicon-ok':'glyphicon glyphicon-remove'; ?>" aria-hidden="true"></span></td>
</tr>
<tr>
  <th scope="row">Roller Tube</th>
  <td><?php echo $product->roller_tube; ?></td>
</tr>
<tr>
  <th scope="row">Arm cables</th>
  <td><?php echo $product->arm_cables; ?></td>
</tr>
<tr>
  <th scope="row">Springs</th>
  <td><?php echo $product->springs; ?></td>
</tr>
<tr>
  <th scope="row">Front Bar</th>
  <td><?php echo $product->front_bar; ?></td>
</tr>
<tr>
  <th scope="row">Arm</th>
  <td><?php echo $product->arm; ?></td>
</tr>
<tr>
  <th scope="row">Wall Mounting Bracket</th>
  <td><span class="<?php echo ($product->wall_bracket == '1')?'glyphicon glyphicon-ok':'glyphicon glyphicon-remove'; ?>" aria-hidden="true"></span></td>
</tr>
<tr>
  <th scope="row">Soffit Mounting Bracket</th>
  <td><span class="<?php echo ($product->soffit_bracket == '1')?'glyphicon glyphicon-ok':'glyphicon glyphicon-remove'; ?>" aria-hidden="true"></span></td>
</tr>
<tr>
  <th scope="row">Worm Gear</th>
  <td><?php echo $product->worm_gear; ?></td>
</tr>
<tr>
  <th scope="row">Motor with Remote</th>
  <td><span  aria-hidden="true"><?php echo $product->motor_remote; ?></span></td>
</tr>
<tr>
  <th scope="row">Manual Override Motor</th>
  <td><span  aria-hidden="true"><?php echo $product->manual_motor; ?></span></td>
</tr>
<tr>
  <th scope="row">Power Cord &amp; Power Plug</th>
  <td><span  aria-hidden="true"><?php echo $product->power_cord_plug; ?></span></td>
</tr>
<tr>
  <th scope="row">Fabric</th>
  <td><?php echo $product->fabric; ?></td>
</tr>
<tr>
  <th scope="row">UV, Fade, Mildew Resistant</th>
  <td><span class="<?php echo ($product->mildew_resistant == '1')?'glyphicon glyphicon-ok':'glyphicon glyphicon-remove'; ?>" aria-hidden="true"></span></td>
</tr>
<tr>
  <th scope="row">Water Repellant</th>
  <td><span class="<?php echo ($product->water_repellent == '1')?'glyphicon glyphicon-ok':'glyphicon glyphicon-remove'; ?>" aria-hidden="true"></span></td>
</tr>
</tbody>
</table>

    </div>
 </div>
<!-- <div class="col-md-3">
    <div class="rightside">
    <div class="thumbnail">
     <a href="#"> <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/easy-pitch-e-series.jpg" alt="" /></a>
      <div class="caption">
        <h3><a href="#">Easy Pitch</a></h3>
        <p>1-Step pitch adjustment for perfect shade coverage</p>
      </div>
    </div>
    <div class="thumbnail">
     <a href="#"> <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/no-image.jpg" alt="" /></a>
      <div class="caption">
        <h3><a href="#">Aluminum 6063-T5 Arms</a></h3>
        <p>Excellent strength and corrosion resistance</p>
      </div>
    </div>
    <div class="thumbnail">
     <a href="#"> <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/no-image.jpg" alt="" /></a>
      <div class="caption">
        <h3><a href="#">Stainless Steel 304 Screws</a></h3>
        <p>Excellent corrosion resistance</p>
      </div>
    </div>
    <div class="thumbnail">
     <a href="#"> <img src="<?php echo Yii::app()->baseUrl; ?>/frontdata/images/no-image.jpg" alt="" /></a>
      <div class="caption">
        <h3><a href="#">Aluminum Semi-Cassette Closure</a></h3>
        <p>All-in-one aluminum cassette for fabric and motor protection</p>
      </div>
    </div>
    </div>
 </div>-->
  <div class="col-md-3">
    <div class="rightside">
 <?php echo $side[0]->content_desc; ?>
     </div>
 </div>
</div>