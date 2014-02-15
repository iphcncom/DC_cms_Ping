<?php 
/**
 * 自定义404页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<?php
 include View::getView('header');
?>
<div id="content">
		
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section _404 grids">
			<aside class="grid-3">
				<div class="wrap">
					<h1 class="section-title big"><span>404</span></h1>
					<section class="cf left">
						<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php" class="form-1 cf" />
							<input type="text" class="search-field" name="keyword" value="" />
							<button class="search-btn">search</button>
						</form>
					</section>
					<h3>Oop! The page you are looking for seem not found.</h3>
					<p>Using above search box or main navigation bar to locate your expected contents.</p>
				</div>
			</aside>
			<div class="grid-9">
				
				<img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/404.png" />
			</div> <!-- end grid-9 -->
		</div>
		<!-- END SECTION -->
				
		<!-- END MAIN SECTIONS -->
</div>
<?php
 include View::getView('footer');
?>