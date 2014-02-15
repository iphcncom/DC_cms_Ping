<?php 
/**
 * 首页文章列表部分_portfolio-1-col-alt
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<?php if (!empty($logs)):?>
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section portfolio-1-alt grids">
<?php left_menu()?>
			<div class="grid-9">
<?php doAction('index_loglist_top'); ?>
				<div class="porfolio-wrapper">
					<div class="extended-portfolio has-filter">
<?php
	$sqlSegment = '';
    $sqlSegment = "and sortid in (" . implode(',',  _g('Photo_Sort_id')) . ")";
    $sqlSegment .= " order by date desc";
	$lognum = $Log_Model->getLogNum('n', $sqlSegment);
    $logs = $Log_Model->getLogsForHome($sqlSegment, $page, $index_lognum);
	$page_url = pagination($lognum, $index_lognum, $page, $pageurl);
foreach($logs as $key=>$value):
?>
						<article data-id="id-<?php echo $value['sortid']?>" data-type="filter-<?php echo $value['sortid']?>">
							<a class="thumb left" href="<?php thumb_src($value)?>">
							<img id="tb300x300" alt="<?php echo $value['log_title']; ?>" src="<?php thumb_src($value)?>" width="300" height="300" /></a>
							<div class="wrap">
								<h3 class="line"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h3>
								<p><?php echo extractHtmlData(nohtml($value['log_description']),200);?></p>
								<h5 class="line">Informations</h5>
								<ul class="info-list">
									<li>Author: <span><?php blog_author($value['author']); ?></span></li>
									<li>Date: <?php echo gmdate('Y-n-j  l', $value['date']); ?></li>
									<li>Tag: <?php if(blog_tag($value['logid'])):
									              echo blog_tag($value['logid']); 
									              else:
												  echo 'No Tag';
												  endif;?></li>
									<li>Category: <span><?php blog_sort($value['logid']); ?></span></li>
									<p>URL: <a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_url']; ?></a></p>
								</ul>
								<a href="<?php echo $value['log_url']; ?>" class="button-1 right">view detail</a>
							</div>
						</article>
<?php 
endforeach;
?>
					</div>
				</div>
				<ul class="page-nav">
<?php 
$page_loglist = my_page($lognum, $index_lognum, $page, $pageurl);
echo $page_loglist;
?>
				</ul>
			</div>
		</div>
		<!-- END SECTION -->
		
		<!-- END MAIN SECTIONS -->
<?php else:
include View::getView('list/list_not_found');
endif;
?>
    </div>