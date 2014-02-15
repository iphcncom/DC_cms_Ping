<?php 
/**
 * 出错页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<div id="content">
		
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section _404 grids">
			<aside class="grid-3">
				<div class="wrap">
					<h1 class="section-title big"><span>Error</span></h1>
					<section class="cf left">
						<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php" class="form-1 cf" />
							<input type="text" class="search-field" name="keyword" value="" />
							<button class="search-btn">search</button>
						</form>
					</section>
					<h3>模版设置错误</h3>
					<p>模版设置错啦，请进入后台重新设置模板。</p>
				</div>
			</aside>
			<div class="grid-9">
				
				<img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/error_big.png" />
			</div> <!-- end grid-9 -->
		</div>
		<!-- END SECTION -->
				
		<!-- END MAIN SECTIONS -->
</div>