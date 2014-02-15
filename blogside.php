<?php 
/**
 * 博客边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title big"><span>
					<?php if(in_array($sortid, _g('Photo_Sort_id'))){echo 'Photo';}else{'Blog';}?></span></h1>
					<section id="search">
						<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php" class="form-1 cf" />
							<input type="text" class="search-field" name="keyword" value="" />
							<button class="search-btn">search</button>
						</form>
					</section>
					<section id="category">
						<h1 class="section-title small"><a href="#">CATEGORIES</a></h1>
						<ul class="list clear">
<?php {
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort'); 
	foreach($sort_cache as $value):
		if ($value['pid'] != 0) continue;?>
							<li><a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?></a></li>
		<?php endforeach; ?>
<?php }?>
						</ul>
					</section>
					<section id="recent-post">
						<h1 class="section-title small"><a href="#">RECENT POSTS</a></h1>
						<ul class="recent-post-1 clear">
<?php 
{
	$log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' ORDER BY date DESC", 0,5);
	foreach($logs as $row){
		$row['title'] = htmlspecialchars(trim($row['title']));?>
	<li>
	<a class="thumb" href="<?php echo Url::log($row['gid']);?>">
	<img id="tb70x70" alt="<?php echo $row['title'];?>" src="<?php thumb_src($row);?>" width="70" height="70" /></a>
	<h1><a class="title1" href="<?php echo Url::log($row['gid']);?>"><?php echo $row['title'];?></a></h1>
	</li>
	<?php }
} ?>
						</ul>
					</section>
					<section id="popular-tag">
						<h1 class="section-title small"><a href="#">POPULAR TAGS</a></h1>
						<ul class="tag-cloud clear">
<?php {
	global $CACHE;
	$tag_cache = $CACHE->readCache('tags');
	foreach($tag_cache as $value):
		if($value['usenum']>2):?>
							<li class="percent-<?php percent($value['usenum'])?>">
								<div class="num"><a href="<?php echo Url::tag($value['tagurl']); ?>"><?php echo $value['usenum']; ?></a></div>
								<div class="tag"><a href="<?php echo Url::tag($value['tagurl']); ?>"><?php echo $value['tagname']; ?></a></div>
							</li>
		<?php endif;?>
	<?php endforeach; ?>
<?php }?>

						</ul>
					</section>
					<section id="archive" class="mb0">
						<h1 class="section-title small"><a href="#">ARCHIVES</a></h1>
						<ul class="list clear">
<?php {
	global $CACHE; 
	$record_cache = $CACHE->readCache('record');
	foreach($record_cache as $value):
	?>
							<li><a href="<?php echo Url::record($value['date']); ?>"><?php echo $value['record']; ?> (<?php echo $value['lognum']; ?>)</a></li>
<?php endforeach; ?>
<?php }?>
						</ul>
					</section>
				</div>
			</aside>