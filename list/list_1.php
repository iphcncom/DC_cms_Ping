<?php 
/**
 * 首页文章列表部分_portfolio-1-col
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<?php if (!empty($logs)):?>
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section portfolio-1 grids">
<?php left_menu()?>
			<div class="grid-9">
<?php doAction('index_loglist_top'); ?>
				<div class="one-col porfolio-wrapper">
					<ul class="simple-portfolio has-filter">
<?php
	$sqlSegment = '';
    $sqlSegment = "and sortid in (" . implode(',',  _g('Photo_Sort_id')) . ")";
    $sqlSegment .= " order by date desc";
	$lognum = $Log_Model->getLogNum('n', $sqlSegment);
    $logs = $Log_Model->getLogsForHome($sqlSegment, $page, $index_lognum);
	$page_url = pagination($lognum, $index_lognum, $page, $pageurl);
foreach($logs as $key=>$value):
?>
						<li data-id="id-<?php echo $value['sortid']?>" data-type="filter-<?php echo $value['sortid']?>">
							<article>
							<a href="<?php thumb_src($value)?>">
							<img id="#tb756x350" alt="<?php echo $value['log_title']; ?>" src="<?php thumb_src($value)?>" width="756" height="350" /></a>
							<h5 class="line"><?php echo $value['log_title']; ?></h5>
							</article>
						</li>
<?php 
endforeach;
?>
					</ul>
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