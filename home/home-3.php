<?php 
/**
 * 首页部分_home-3
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
		<div class="page-section theme-features grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>Blog Hot</span></h1>
					<span class="more-text">
<?php blog_hot('0','5','views'); ?>
                    </span>
				</div>
			</aside>
			<div class="grid-9">
				<ul class="text-list four-cols">
<?php home_3_blog_new('0','4','date'); ?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section home-portfolio grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>portfolio</span></h1>
					<p>Lorem ipsum dolor sit  amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<ul class="list">
						<li><a href="#">Landscape</a></li>
						<li><a href="#">Animal</a></li>
						<li><a href="#">Fashion</a></li>
						<li><a href="#">Under Sea</a></li>
						<li><a href="#">Sport</a></li>
					</ul>
					<span class="more-text"><a href="#">→ view full gallery</a></span>
				</div>
			</aside>
			<div class="grid-9">
				<ul class="portfolio-list three-cols">
<?php home_3_photo_new('0','6','date');?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section partners grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>our partners</span></h1>
					<span class="more-text"><a href="#">→ view full list</a></span>
				</div>
			</aside>
			<div class="grid-9">
				<ul class="partner-list four-cols">
					<li><a href="#"><img id="tb173x94" alt="" src="<?php echo TEMPLATE_URL; ?>/images/demo/thumb-173x94-1.jpg" width="173" height="94" /></a></li>
					<li><a href="#"><img id="tb173x94" alt="" src="<?php echo TEMPLATE_URL; ?>/images/demo/thumb-173x94-2.jpg" width="173" height="94" /></a></li>
					<li><a href="#"><img id="tb173x94" alt="" src="<?php echo TEMPLATE_URL; ?>/images/demo/thumb-173x94-3.jpg" width="173" height="94" /></a></li>
					<li><a href="#"><img id="tb173x94" alt="" src="<?php echo TEMPLATE_URL; ?>/images/demo/thumb-173x94-4.jpg" width="173" height="94" /></a></li>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- END MAIN SECTIONS -->
    </div>