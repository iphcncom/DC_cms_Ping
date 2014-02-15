<?php 
/**
 * 首页部分_home-1
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
		<div class="page-section projects grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>photo</span></h1>
					<span class="more-text">

                    </span>
				</div>
			</aside>
			<div class="grid-9 auto-scroll">
				<ul class="project-list three-cols scroll-content">
<?php home_1_photo_new('0','3','date');?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section home-blog grids">
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title"><span>blog hot</span></h1>

					<ul class="list">
<?php blog_hot('0','5','views'); ?>
					</ul>
				</div>
			</aside>
			<div class="grid-9">
				<ul class="post-list two-cols">
<?php home_1_blog_new('0','4','date');?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- END MAIN SECTIONS -->
    </div>