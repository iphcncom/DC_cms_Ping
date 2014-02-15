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
		
		<!-- BEGIN CALL TO ACTION -->
		<!--<div id="call-to-action" class="grids">
			<div class="grid-3 first-space"></div>
			<div class="grid-9">
				<div class="msg"><span style="color:#e07538;">YUKHIN 01</span> - Powerful site template
				designed in a <span style="color:#e07538;">clean</span> and <span style="color:#e07538;">minimal</span> style.</div>
				<a class="btn"></a>
			</div>
		</div>
		<!-- END CALL TO ACTION -->
		
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section services grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>services</span></h1>
					<p>Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia.</p>
					<p>Tollite fit manibus individuationis omnibus civitas. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</p>
					<span class="more-text"><a href="#">→ learn more about our services</a></span>
				</div>
			</aside>
			<div class="grid-9">
				<ul class="service-list three-cols">
<?php index_tops('0','3','date'); ?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section featured grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>featured</span></h1>
					<ul class="thumb-list-2-cols tab-nav">
						<li><a href="<?php thumb_images_src(rand(1,50));?>">
						<img id="tb70x70" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="70" height="70" /></a></li>
						<li><a href="<?php thumb_images_src(rand(1,50));?>">
						<img id="tb70x70" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="70" height="70" /></a></li>
						<li><a href="<?php thumb_images_src(rand(1,50));?>">
						<img id="tb70x70" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="70" height="70" /></a></li>
						<li><a href="<?php thumb_images_src(rand(1,50));?>">
						<img id="tb70x70" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="70" height="70" /></a></li>
					</ul>
					<span class="more-text"><a href="#">→ see more items</a></span>
				</div>
			</aside>
			<div class="grid-9">
				<div class="extended-portfolio tab-panels">
<?php index_blog_logs('0','4','date')?>
				</div>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- END MAIN SECTIONS -->
    </div>
<?php include View::getView('footer');?>