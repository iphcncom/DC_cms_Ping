<?php 
/**
 * 首页文章列表部分_portfolio-1-col-alt
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section portfolio-1-alt grids">
<?php left_menu()?>
			<div class="grid-9">
<?php doAction('index_loglist_top'); ?>
				<div class="porfolio-wrapper">
					<div class="extended-portfolio has-filter">

<?php 
if (!empty($logs)):
foreach($logs as $key=>$value): 
?>
						<article data-id="id-1" data-type="filter-<?php echo $value['sortid']?>">
							<a class="thumb left" href="<?php thumb_src($value)?>">
							<img id="thumb2" alt="<?php echo $value['log_title']; ?>" src="<?php thumb_src($value)?>" width="300" height="300" /></a>
							<div class="wrap">
								<h3 class="line"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h3>
								<p><?php echo extractHtmlData(nohtml($value['log_description']),200);?></p>
								<h5 class="line">更多信息</h5>
								<ul class="info-list">
									<li>Author: <span><?php blog_author($value['author']); ?></span></li>
									<li>Date: <?php echo gmdate('Y-n-j  l', $value['date']); ?></li>
									<li>Designer: <span>Huong Tinh Vu</span></li>
									<li>Tag: <?php if(blog_tag($value['logid'])):
									              echo blog_tag($value['logid']); 
									              else:
												  echo 'No Tag';
												  endif;?></li>
									<li>Category: <span><?php blog_sort($value['logid']); ?></span></li>
									<li>URL: <a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_url']; ?></a></li>
								</ul>
								<a class="button-1 right">view detail</a>
							</div>
						</article>
<?php 
endforeach;
else:
?>
	<h5 class="line">未找到</h5>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>
					</div>
				</div>
				<ul class="page-nav">
<?php echo $page_url;?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- END MAIN SECTIONS -->
    </div>
<?php
 include View::getView('footer');
?>