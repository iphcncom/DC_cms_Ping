<?php 
/**
 * 博客文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<?php if (!empty($logs)):?>
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section blog grids">
<?php
 include View::getView(''._g('Side_type'));
?>
			<div class="grid-9">
<?php doAction('index_loglist_top'); ?>
				<div class="blog-list-1">
<?php 
	$sqlSegment = '';
    $sqlSegment = "and sortid in (" . implode(',',  _g('Blog_Sort_id')) . ")";
    $sqlSegment .= " order by date desc";
	$lognum = $Log_Model->getLogNum('n', $sqlSegment);
    $logs = $Log_Model->getLogsForHome($sqlSegment, $page, $index_lognum);
	$page_url = pagination($lognum, $index_lognum, $page, $pageurl);
foreach($logs as $key=>$value):
?>
	                <article>
						<a class="thumb" href="<?php echo $value['log_url']; ?>">
						<img id="tb300x300" alt="<?php echo $value['log_title']; ?>" src="<?php thumb_src($value)?>" width="300" height="300" />
						</a>
						<header>
							<div class="category"><?php blog_sort($value['logid']); ?></div>
							<h1 class="title"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h1>
							<div class="meta">By <?php blog_author($value['author']); ?> on <time pubdate="" datetime="<?php echo gmdate('Y-n-j  l', $value['date']); ?>"><?php echo gmdate('Y-n-j  l', $value['date']); ?></time></div>
						</header>
						
						<div class="intro">
							<p><?php echo extractHtmlData(nohtml($value['log_description']),100);?>
							<span class="more-text"><a href="<?php echo $value['log_url']; ?>">// continue</a></span></p>
							
						</div>
					</article>
<?php 
endforeach;
?>
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