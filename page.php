<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section blog grids">
<?php
 include View::getView(''._g('Side_type'));
?>
			<div class="grid-9">
				<div class="blog-list-1 detail">
				<article>
	<h1 class="title1"><a href="<?php echo Url::log($logid);?>"><?php echo $log_title; ?></a></h1>
	<div class="intro">
	<p><?php echo $log_content; ?></p>
	</div>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
				</div>
				
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- END MAIN SECTIONS -->
    </div>
<?php
 include View::getView('footer');
?>