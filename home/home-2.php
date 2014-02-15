<?php 
/**
 * 首页部分_index
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content" role="main">
	
		<!-- BEGIN SLIDER -->
		<div id="main-slider" class="cf">
		  <div class="flexslider yk1">
		    <ul class="slides">
<?php index_slides('0','3','date'); ?>
		    </ul>
		  </div>
		</div>
		<!-- END SLIDER -->
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section services grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>hot</span></h1>
					
					<span class="more-text">
<?php blog_hot('3','8','views'); ?>
                    </span>
				</div>
			</aside>
			<div class="grid-9">
				<ul class="service-list three-cols">
<?php home_2_tops('0','3','views'); ?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section featured grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>new</span></h1>
					<ul class="thumb-list-2-cols tab-nav">
<?php home_2_blog_new_ico('0','4','date')?>
					</ul>
					<span class="more-text"><a href="#">→ see more items</a></span>
				</div>
			</aside>
			<div class="grid-9">
				<div class="extended-portfolio tab-panels">
<?php home_2_blog_new('0','4','date')?>
				</div>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- END MAIN SECTIONS -->
    </div>