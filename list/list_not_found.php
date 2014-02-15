<?php 
/**
 * 未找到页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>	
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section _404 grids">
			<aside class="grid-3">
				<div class="wrap">
					<h1 class="section-title big"><span>Not found</span></h1>
					<section class="cf left">
						<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php" class="form-1 cf" />
							<input type="text" class="search-field" name="keyword" value="" />
							<button class="search-btn">search</button>
						</form>
					</section>
					<h3>未找到</h3>
					<p>抱歉，没有符合您查询条件的结果。</p>
				</div>
			</aside>
			<div class="grid-9">
				
				<img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/404.png" />
			</div> <!-- end grid-9 -->
		</div>
		<!-- END SECTION -->
				
		<!-- END MAIN SECTIONS -->