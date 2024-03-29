<?php 
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php
//widget：blogger
function widget_blogger($title){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$name = $user_cache[1]['mail'] != '' ? "<a href=\"mailto:".$user_cache[1]['mail']."\">".$user_cache[1]['name']."</a>" : $user_cache[1]['name'];?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="bloggerinfo">
	<div id="bloggerinfoimg">
	<?php if (!empty($user_cache[1]['photo']['src'])): ?>
	<img src="<?php echo BLOG_URL.$user_cache[1]['photo']['src']; ?>" width="<?php echo $user_cache[1]['photo']['width']; ?>" height="<?php echo $user_cache[1]['photo']['height']; ?>" alt="blogger" />
	<?php endif;?>
	</div>
	<p><b><?php echo $name; ?></b>
	<?php echo $user_cache[1]['des']; ?></p>
	</ul>
	</li>
<?php }?>
<!--<?php
//widget：日历
function widget_calendar($title){ ?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<div id="calendar">
	</div>
	<script>sendinfo('<?php echo Calendar::url(); ?>','calendar');</script>
	</li>
<?php }?>-->
<?php
//widget：标签
function widget_tag($title){
	global $CACHE;
	$tag_cache = $CACHE->readCache('tags');?>
	<section id="popular-tag">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="tag-cloud clear">
	<?php foreach($tag_cache as $value): ?>
							<li class="percent-<?php percent($value['usenum'])?>">
								<div class="num"><a href="<?php echo Url::tag($value['tagurl']); ?>"><?php echo $value['usenum']; ?></a></div>
								<div class="tag"><a href="<?php echo Url::tag($value['tagurl']); ?>"><?php echo $value['tagname']; ?></a></div>
							</li>
	<?php endforeach; ?>
	</ul>
	</section>
<?php }?>
<?php
//widget：分类
function widget_sort($title){
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort'); ?>
	<section id="category">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="list clear">
	<?php
	foreach($sort_cache as $value):
		if ($value['pid'] != 0) continue;
	?>
	<li>
	<a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?>(<?php echo $value['lognum'] ?>)</a>
	<?php if (!empty($value['children'])): ?>
		<ul>
		<?php
		$children = $value['children'];
		foreach ($children as $key):
			$value = $sort_cache[$key];
		?>
		<li>
			<a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?>(<?php echo $value['lognum'] ?>)</a>
		</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	<?php endforeach; ?>
	</ul>
	</section>
<?php }?>
<?php
//widget：最新微语
function widget_twitter($title){
	global $CACHE; 
	$newtws_cache = $CACHE->readCache('newtw');
	$istwitter = Option::get('istwitter');
	?>
	<section id="recent-post">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="recent-post-1 clear">
	<?php foreach($newtws_cache as $value): ?>
	<?php $img = empty($value['img']) ? "" : '<a title="查看图片" class="t_img" href="'.BLOG_URL.str_replace('thum-', '', $value['img']).'" target="_blank">&nbsp;</a>';?>
	<li><?php echo $value['t']; ?><?php echo $img;?><p><?php echo smartDate($value['date']); ?></p></li>
	<?php endforeach; ?>
    <?php if ($istwitter == 'y') :?>
	<p><a href="<?php echo BLOG_URL . 't/'; ?>">更多&raquo;</a></p>
	<?php endif;?>
	</ul>
	</section>
<?php }?>
<?php
//widget：最新评论
function widget_newcomm($title){
	global $CACHE; 
	$com_cache = $CACHE->readCache('comment');
	?>
	<section id="recent-post">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="recent-post-1 clear">
	<?php
	foreach($com_cache as $value):
	$url = Url::comment($value['gid'], $value['page'], $value['cid']);
	?>
	<li><?php echo $value['name']; ?>
	<br /><a href="<?php echo $url; ?>"><?php echo $value['content']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</section>
<?php }?>
<?php
//widget：最新文章
function widget_newlog($title){
	global $CACHE; 
	$newLogs_cache = $CACHE->readCache('newlog');
	?>
	<section id="recent-post">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="recent-post-1 clear">
	<?php foreach($newLogs_cache as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</section>
<?php }?>
<?php
//widget：热门文章
function widget_hotlog($title){
	$index_hotlognum = Option::get('index_hotlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getHotLog($index_hotlognum);?>
	<section id="recent-post">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="recent-post-1 clear">
	<?php foreach($randLogs as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</section>
<?php }?>
<?php
//widget：随机文章
function widget_random_log($title){
	$index_randlognum = Option::get('index_randlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getRandLog($index_randlognum);?>
	<section id="recent-post">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="recent-post-1 clear">
	<?php foreach($randLogs as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</section>
<?php }?>
<?php
//widget：搜索
function widget_search($title){ ?>
	<section id="search">
						<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php" class="form-1 cf" />
							<input type="text" class="search-field" name="keyword" value="" />
							<button class="search-btn">search</button>
						</form>
					</section>
<?php } ?>
<?php
//widget：归档
function widget_archive($title){
	global $CACHE; 
	$record_cache = $CACHE->readCache('record');
	?>
	<section id="archive" class="mb0">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="list clear">
	<?php foreach($record_cache as $value): ?>
	<li><a href="<?php echo Url::record($value['date']); ?>"><?php echo $value['record']; ?>(<?php echo $value['lognum']; ?>)</a></li>
	<?php endforeach; ?>
	</ul>
	</section>
<?php } ?>
<?php
//widget：自定义组件
function widget_custom_text($title, $content){ ?>
	<section id="recent-post">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="recent-post-1 clear">
	<?php echo $content; ?>
	</ul>
	</section>
<?php } ?>
<?php
//widget：链接
function widget_link($title){
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
	?>
	<section id="recent-post">
	<h1 class="section-title small"><?php echo $title; ?></h1>
	<ul class="recent-post-1 clear">
	<?php foreach($link_cache as $value): ?>
	<li><a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</section>
<?php }?>
<?php
//blog：导航
function blog_navi(){
	global $CACHE; 
	$navi_cache = $CACHE->readCache('navi');
	?>
	<ul class="menu sf-menu">
	<?php
	foreach($navi_cache as $value):
		if($value['url'] == 'admin'):
			continue;
		endif;
		$newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
                $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
                $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'has-child active' : 'has-child';
		?>
		<li class="<?php echo $current_tab;?>">
                <a href="<?php echo $value['url']; ?>" <?php echo $newtab;?>><?php echo $value['naviname']; ?></a>
                <?php if (!empty($value['children'])) :?>
                <ul>
                <?php foreach ($value['children'] as $row){
                        echo '<li><a href="'.Url::sort($row['sid']).'">'.$row['sortname'].'</a></li>';
                }?>
		</ul>
                <?php endif;?>
                </li>
	<?php endforeach; ?>
	</ul>
<?php }?>
<?php
//blog：置顶
function topflg($istop){
	$topflg = $istop == 'y' ? "<img src=\"".TEMPLATE_URL."/images/import.gif\" title=\"置顶文章\" /> " : '';
	echo $topflg;
}
?>
<?php
//blog：编辑
function editflg($logid,$author){
	$editflg = ROLE == 'admin' || $author == UID ? '<a href="'.BLOG_URL.'admin/write_log.php?action=edit&gid='.$logid.'" target="_blank">编辑</a>' : '';
	echo $editflg;
}
?>
<?php
//blog：分类
function blog_sort($blogid){
	global $CACHE; 
	$log_cache_sort = $CACHE->readCache('logsort');
	?>
	<?php if(!empty($log_cache_sort[$blogid])): ?>
	<a href="<?php echo Url::sort($log_cache_sort[$blogid]['id']); ?>"><?php echo $log_cache_sort[$blogid]['name']; ?></a>
	<?php endif;?>
<?php }?>
<?php
//blog：文章标签
function blog_tag($blogid){
	global $CACHE;
	$log_cache_tags = $CACHE->readCache('logtags');
	if (!empty($log_cache_tags[$blogid])){
		$tag = '标签:';
		foreach ($log_cache_tags[$blogid] as $value){
			$tag .= "	<a href=\"".Url::tag($value['tagurl'])."\">".$value['tagname'].'</a>';
		}
		echo $tag;
	}
}
?>
<?php
//blog：文章作者
function blog_author($uid){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$author = $user_cache[$uid]['name'];
	$mail = $user_cache[$uid]['mail'];
	$des = $user_cache[$uid]['des'];
	$title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
	echo '<a href="'.Url::author($uid)."\" $title>$author</a>";
}
?>
<?php
//blog：相邻文章
function neighbor_log($neighborLog){
	extract($neighborLog);?>
	<?php if($prevLog):?>
	<li class="prev">
	<div class="caption">previous post</div>
	<div class="title1"><a href="<?php echo Url::log($prevLog['gid']) ?>"><?php echo $prevLog['title'];?></a></div>
	</li>
	<?php endif;?>
	<?php if($nextLog && $prevLog):?>

	<?php endif;?>
	<?php if($nextLog):?>
	<li class="next">
	<div class="caption">next post</div>
	<div class="title1"><a href="<?php echo Url::log($nextLog['gid']) ?>"><?php echo $nextLog['title'];?></a></div>
	</li>
	<?php endif;?>
<?php }?>
<?php
//blog：引用通告
function blog_trackback($tb, $tb_url, $allow_tb){
    if($allow_tb == 'y' && Option::get('istrackback') == 'y'):?>
	<div id="trackback_address">
	<p>引用地址: <input type="text" style="width:350px" class="input" value="<?php echo $tb_url; ?>">
	<a name="tb"></a></p>
	</div>
	<?php endif; ?>
	<?php foreach($tb as $key=>$value):?>
		<ul id="trackback">
		<li><a href="<?php echo $value['url'];?>" target="_blank"><?php echo $value['title'];?></a></li>
		<li>BLOG: <?php echo $value['blog_name'];?></li><li><?php echo $value['date'];?></li>
		</ul>
	<?php endforeach; ?>
<?php }?>
<?php
//blog：评论列表
function blog_comments($comments){
    extract($comments);
    if($commentStacks): ?>
	<section class="discussion">
	<h2 class="line font2">评论：</h2>
    <?php endif; ?>
	<?php
	$isGravatar = Option::get('isgravatar');
	foreach($commentStacks as $cid):
    $comment = $comments[$cid];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
	   <article id="comment-<?php echo $comment['cid']; ?>">
          <?php if($isGravatar == 'y'): ?>
           <a class="avatar" href="">
	        <img alt="" src="<?php echo getGravatar($comment['mail']); ?>" width="73" height="73" />
		   </a>
          <?php endif; ?>
			<div class="wrap">
			  <div class="meta">
			  <strong><?php echo $comment['poster']; ?></strong> on <time pubdate="" datetime="<?php echo $comment['date']; ?>"><?php echo $comment['date']; ?></time>
			  </div>
			  <div class="tools">
			  <a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">Reply</a>
			  </div>
			  <div style="clear:both;"></div>
			   <div class="comment-content">
				<div class="arrow"></div>
				<p><?php echo $comment['content']; ?></p>
				</div>
                 <?php blog_comments_children($comments, $comment['children']); ?>
			</div>
		</article>
<?php endforeach; ?>
<?php echo $commentPageUrl;?>
	</section>
<?php }?>
<?php
//blog：子评论列表
function blog_comments_children($comments, $children){
	$isGravatar = Option::get('isgravatar');
	foreach($children as $child):
	$comment = $comments[$child];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
		<article id="comment-<?php echo $comment['cid']; ?>">
		<?php if($isGravatar == 'y'): ?>
		 <a class="avatar" href="#"><img alt="" src="<?php echo getGravatar($comment['mail']); ?>" width="73" height="73" /></a>
		 <?php endif; ?>
			<div class="wrap">
				<div class="meta"><a href="#"><strong><?php echo $comment['poster']; ?></strong></a> on <time pubdate="" datetime="<?php echo $comment['date']; ?>"><?php echo $comment['date']; ?></time></div>
				<?php if($comment['level'] < 8): ?>
					<div class="tools"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">Reply</a></div>
				<?php endif; ?>
				<div style="clear:both;"></div>
					<div class="comment-content">
						<div class="arrow"></div>
							<p><?php echo $comment['content']; ?></p>
					</div>
				
				<?php blog_comments_children($comments, $comment['children']);?>
			 </div>
		 </article>
	 <?php endforeach; ?>
<?php }?>
<?php
//blog：发表评论表单
function blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark){
	if($allow_remark == 'y'): ?>
	<div id="comment-place">
	<section id="comment-post">
	 <h2 class="line font2" >Leave a Comment</h2>
	 <div style="clear:both;"></div>
	 <div class="cancel-reply" id="cancel-reply" style="display:none"><a href="javascript:void(0);" onclick="cancelReply()">Cancel Reply</a></div>
		<form class="form-1 comment-form cf" method="post" name="commentform" action="<?php echo BLOG_URL; ?>index.php?action=addcom" id="commentform"/>
		<input type="hidden" name="gid" value="<?php echo $logid; ?>" />
			<?php if(ROLE == 'visitor'): ?>
			<label for="author">Name</label>
			<input type="text" class="text-field" name="comname" maxlength="49" value="<?php echo $ckname; ?>" size="22" tabindex="1" />
			<label for="email">Email</label>
			<input type="text" class="text-field" name="commail"  maxlength="128"  value="<?php echo $ckmail; ?>" size="22" tabindex="2" />
			<label for="url" class="is-optional">Address</label>
			<input type="text" class="text-field" name="comurl" maxlength="128"  value="<?php echo $ckurl; ?>" size="22" tabindex="3" />
			<span class="legend">are optional fields</span>
			<?php endif; ?>
			<label for="" class="text-area-label">Messages</label>
			<textarea class="text-area" name="comment" id="comment" rows="10" tabindex="4"></textarea>
			<div style="clear:both;"></div>
			<?php echo $verifyCode; ?>
			
			<input type="submit" id="comment_submit" value="SEND" tabindex="6" class="right">
			
			<input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1"/>
		</form>
	</section>
	</div>
	<?php endif; ?>
<?php }?>