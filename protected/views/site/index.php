<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i> Dashboard</h1>

<div class="span-23 showgrid" style="text-align: center;    display:block; height:300px;   vertical-align:middle;">
	<div class="dashboardIcons span-16" style="display:table-cell;    vertical-align:middle; ">
		<div class="dashIcon span-3">
			<a href="<?php echo Yii::app()->baseUrl; ?>/layout/admin/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-grid2.png" alt="Manage Layout" /></a>
			<div class="dashIconText "><a href="<?php echo Yii::app()->baseUrl; ?>/layout/admin/">Manage Layout</a></div>
		</div>
		
		<div class="dashIcon span-3">
			<a href="<?php echo Yii::app()->baseUrl; ?>/content/admin/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-list2.png" alt="Manage Content" /></a>
			<div class="dashIconText"><a href="<?php echo Yii::app()->baseUrl; ?>/content/admin/">Manage Content</a></div>
		</div>
		
		<div class="dashIcon span-3">
			<a href="<?php echo Yii::app()->baseUrl; ?>/fabric/admin/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-brush.png" alt="Manage Fabric" /></a>
			<div class="dashIconText"><a href="<?php echo Yii::app()->baseUrl; ?>/fabric/admin/">Manage Fabric</a></div>
		</div>
		
		<div class="dashIcon span-3">
			<a href="<?php echo Yii::app()->baseUrl; ?>/product/admin/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-barcode.png" alt="Manage Products" /></a>
			<div class="dashIconText"><a href="<?php echo Yii::app()->baseUrl; ?>/product/admin/">Manage Products</a></div>
		</div>
		
		<div class="dashIcon span-3">
			<a href="<?php echo Yii::app()->baseUrl; ?>/news/admin/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-wimax.png" alt="Manage News" /></a>
			<div class="dashIconText"><a href="<?php echo Yii::app()->baseUrl; ?>/news/admin/">Manage News</a></div>
		</div>
		
	</div><!-- END OF .dashIcons -->
</div>