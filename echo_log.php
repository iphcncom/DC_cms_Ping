<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
		
		<!-- BEGIN MAIN SECTIONS -->
		
		<!-- BEGIN SECTION -->
		<div class="page-section blog grids">
<?php
 include View::getView('blogside');
?>
			<div class="grid-9">
				<div class="blog-list-1 detail">
					<article>
						<div class="thumb" id="tb300x250">
						<?php echo _g('Ad_300x250');?>
						</div>
						<header class="cf">
							<div class="category"><?php blog_sort($logid); ?></div>
							<h1 class="title1"><a href="<?php echo Url::log($logid);?>"><?php echo $log_title; ?></a></h1>
							<div class="meta">By <?php blog_author($author); ?> on <time pubdate="" datetime="<?php echo gmdate('Y-n-j', $date); ?>"><?php echo gmdate('Y-n-j', $date); ?></time></div>
							<div class="post-tags">
<?php if(blog_tag($value['logid'])): echo blog_tag($value['logid']); else: echo 'No Tag'; endif;?>
                            </div>
							<ul class="sharing-list-1">
								<li><span class="caption">VIEWS</span><span class="num"><?php echo $views; ?></span></li>
								<li><span class="caption">COMMENT</span><span class="num"><?php echo $comnum; ?></span></li>
							</ul>
						</header>
						
						<div class="intro">
							<p><?php echo $log_content; ?></p>
							<?php doAction('log_related', $logData); ?>
						</div>
					</article>
					<section>
						<nav>
							<ul class="post-nav">
<?php neighbor_log($neighborLog); ?>
							</ul>
						</nav>
					</section>
					<section>
						<h2 class="line font2">Relate Posts</h2>
						<ul class="post-list two-cols">
<?php echo_log_log("$sortid","0","2","rand()"); ?>
						</ul>
					</section>
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