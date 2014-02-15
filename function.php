<?php 
/**
 * 模板自定义函数
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php
//获取缩略图片
function imgage_excerpt($row){
    preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $row['excerpt'], $img);
	$imgsrc = !empty($img[1]) ? $img[1][0] : '';
	return $imgsrc;
}
function imgage_content($row){
	preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $row['content'], $img);
	$imgsrc = !empty($img[1]) ? $img[1][0] : '';
	return $imgsrc;
}
function thumb_src($row){
	if(imgage_excerpt($row)):
		{ echo imgage_excerpt($row);
	} elseif(imgage_content($row)):
		{ echo imgage_content($row);} 
	else:{ echo ''.thumb_images_src(rand(1,50)).'';
	} endif;
}
//判断是否是首页
function if_is_home(){
    if (BLOG_URL . trim(Dispatcher::setPath(), '/') == BLOG_URL){
        return true;
    } else {
        return FALSE;
    }
}
//预备缩略图
function thumb_images_src($thumb_num){
	if($thumb_num == '1'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821513025THX.jpg';
	}if($thumb_num == '2'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821513086THX.jpg';
	}if($thumb_num == '3'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821513390THX.jpg';
	}if($thumb_num == '4'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821513070THX.jpg';
	}if($thumb_num == '5'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821505022THX.jpg';
	}if($thumb_num == '6'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821505036THX.jpg';
	}if($thumb_num == '7'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821505159THX.jpg';
	}if($thumb_num == '8'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/65855331201302182150535THX.jpg';
	}if($thumb_num == '9'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821510176THX.jpg';
	}if($thumb_num == '10'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821505387THX.jpg';
	}if($thumb_num == '11'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821505820THX.jpg';
	}if($thumb_num == '12'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821485384THX.jpg';
	}if($thumb_num == '13'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821485470THX.jpg';
	}if($thumb_num == '14'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821485429THX.jpg';
	}if($thumb_num == '15'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/21/658553312013021821490180THX.jpg';
	}if($thumb_num == '16'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821490272THX.jpg';
	}if($thumb_num == '17'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821485586THX.jpg';
	}if($thumb_num == '18'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/21/658553312013021821490298THX.jpg';
	}if($thumb_num == '19'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130217/22/6585533120130217224417010.jpg';
	}if($thumb_num == '20'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130217/22/6585533120130217224015079.jpg';
	}if($thumb_num == '21'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823410098THX.jpg';
	}if($thumb_num == '22'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/65855331201302182341002THX.jpg';
	}if($thumb_num == '23'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/65855331201302182341216THX.jpg';
	}if($thumb_num == '24'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823412121THX.jpg';
	}if($thumb_num == '25'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823451562THX.jpg';
	}if($thumb_num == '26'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/65855331201302182345166THX.jpg';
	}if($thumb_num == '27'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823453270THX.jpg';
	}if($thumb_num == '28'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823453213THX.jpg';
	}if($thumb_num == '29'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/65855331201302182345491THX.jpg';
	}if($thumb_num == '30'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823454959THX.jpg';
	}if($thumb_num == '31'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823462275THX.jpg';
	}if($thumb_num == '32'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823463592THX.jpg';
	}if($thumb_num == '33'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823465077THX.jpg';
	}if($thumb_num == '34'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823470239THX.jpg';
	}if($thumb_num == '35'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823471762THX.jpg';
	}if($thumb_num == '36'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823482448THX.jpg';
	}if($thumb_num == '37'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823482413THX.jpg';
	}if($thumb_num == '38'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823483760THX.jpg';
	}if($thumb_num == '39'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823483788THX.jpg';
	}if($thumb_num == '40'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/65855331201302182348497THX.jpg';
	}if($thumb_num == '41'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823485059THX.jpg';
	}if($thumb_num == '42'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823490291THX.jpg';
	}if($thumb_num == '43'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823490156THX.jpg';
	}if($thumb_num == '44'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823491360THX.jpg';
	}if($thumb_num == '45'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823491596THX.jpg';
	}if($thumb_num == '46'){
		echo'http://img14.poco.cn/mypoco/myphoto/20130218/23/658553312013021823492478THX.jpg';
	}if($thumb_num == '47'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823495941THX.jpg';
	}if($thumb_num == '48'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130218/23/658553312013021823495981THX.jpg';
	}if($thumb_num == '49'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130219/22/65855331201302192215565THX.jpg';
	}if($thumb_num == '50'){
		echo'http://img13.poco.cn/mypoco/myphoto/20130219/22/658553312013021922184088THX.jpg';
	}
}
//去除html样式
function nohtml($content){
  $content = preg_replace("/<a[^>]*>/i",'', $content);   
  $content = preg_replace("/<\/a>/i", '', $content);    
  $content = preg_replace("/<div[^>]*>/i",'', $content);   
  $content = preg_replace("/<\/div>/i",'', $content);
  $content = preg_replace("/<font[^>]*>/i",'', $content);   
  $content = preg_replace("/<\/font>/i",'', $content);
  $content = preg_replace("/<p[^>]*>/i",'', $content);   
  $content = preg_replace("/<\/p>/i",'', $content);
  $content = preg_replace("/<span[^>]*>/i",'', $content);   
  $content = preg_replace("/<\/span>/i",'', $content);
  $content = preg_replace("/<\?xml[^>]*>/i",'', $content);
  $content = preg_replace("/<\/\?xml>/i",'', $content);
  $content = preg_replace("/<o:p[^>]*>/i",'', $content);
  $content = preg_replace("/<\/o:p>/i",'', $content);
  $content = preg_replace("/<u[^>]*>/i",'', $content);
  $content = preg_replace("/<\/u>/i",'', $content);
  $content = preg_replace("/<b[^>]*>/i",'', $content);
  $content = preg_replace("/<\/b>/i",'', $content); 
  $content = preg_replace("/<meta[^>]*>/i",'', $content);
  $content = preg_replace("/<\/meta>/i",'', $content);
  $content = preg_replace("/<!--[^>]*-->/i",'', $content);//注释内容  
  $content = preg_replace("/<p[^>]*-->/i",'', $content);//注释内容       
  $content = preg_replace("/style=.+?['|\"]/i",'',$content);//去除样式   
  $content = preg_replace("/class=.+?['|\"]/i",'',$content);//去除样式   
  $content = preg_replace("/id=.+?['|\"]/i",'',$content);//去除样式      
  $content = preg_replace("/lang=.+?['|\"]/i",'',$content);//去除样式       
  $content = preg_replace("/width=.+?['|\"]/i",'',$content);//去除样式    
  $content = preg_replace("/height=.+?['|\"]/i",'',$content);//去除样式    
  $content = preg_replace("/border=.+?['|\"]/i",'',$content);//去除样式    
  $content = preg_replace("/face=.+?['|\"]/i",'',$content);//去除样式 
  $content = preg_replace("/<img([^>]+?)>/i",'',$content);
  $content = preg_replace("/<embed([^>]+?)>/i",'',$content);
  $content = preg_replace("/face=.+?['|\"]/",'',$content);
  $content = str_replace('阅读全文&gt;&gt;', '', $content);
  $content = str_replace( "&nbsp;","",$content);
  return $content;
}
//图库左边导航
function left_menu(){
	?>
			<aside class="grid-3">
				<div class="wrap cf">
					<h1 class="section-title big"><span>Photo</span></h1>
					<span class="label">filter by:</span>
					<ul class="list" id="filter-options">
						<li class="active"><a href="#" class="all">ALL</a></li>
<?php {
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort');
	foreach($sort_cache as $value):
		if ($value['pid'] != 0) continue;
	if (!empty($value['children'])):
		$children = $value['children'];
		foreach ($children as $key):
			$value = $sort_cache[$key];?>
						<li>
						<a class="filter-<?php echo $value['sid']?>" href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?></a>
						</li>
						<?php endforeach; ?>
						<?php endif; ?>
	<?php endforeach; ?>
	<?php }?>
					</ul>
				</div>
			</aside>
<?php 
}
//echo_log 相关文章
function echo_log_log($sort,$num1,$num2,$order){
	$log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and views<500 and sortid='$sort' ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $row){
		$row['title'] = htmlspecialchars(trim($row['title']));
		$row['excerpt'] = nohtml($row['content']);?>
	<li class="entry">
			<article>
				<figure>
					<a href="<?php echo Url::log($row['gid']);?>">
					<img id="tb130x130" alt="<?php echo $row['title'];?>" src="<?php thumb_src($row);?>" width="130" height="130" /></a>
				</figure>
					<hgroup>
					<h4 class="title1"><a href="<?php echo Url::log($row['gid']);?>"><?php echo $row['title'];?></a></h4>
					</hgroup>
				<div class="entry-content">
					<p><?php echo extractHtmlData($row['excerpt'],50);?>
					<span class="more-text"><a href="<?php echo Url::log($row['gid']);?>">// read more</a></span></p>
				</div>
			</article>
	</li>
	<?php }
}
//列表页自定义分页函数
function my_page($count, $perlogs, $page, $url, $anchor = '') {
 $pnums = @ceil($count / $perlogs);
 $re = '';
 $urlHome = preg_replace("|[\?&/][^\./\?&=]*page[=/\-]|", "", $url);
 if($page > 1) {
  $i = $page - 1;
  $re = " <li class=\"ctrl-btn\"><a href=\"".$url.$i."\">← pre</a></li> " . $re;
 }
 for ($i = $page - 5; $i <= $page + 5 && $i <= $pnums; $i++) {
		if ($i > 0) {
			if ($i == $page) {
				$re .= " <li class=\"active\">$i</li> ";
			} elseif ($i == 1) {
				$re .= " <li><a href=\"$urlHome$anchor\">$i</a></li> ";
			} else {
				$re .= " <li><a href=\"$url$i$anchor\">$i</a></li> ";
			}
		}
	}
	if ($page > 6)
		$re = "<li><a href=\"{$urlHome}$anchor\" title=\"home\">&laquo;</a></li><li class=\"dots\">...</li>$re";
	if ($page + 5 < $pnums)
		$re .= "<li class=\"dots\">...</li> <li><a href=\"$url$pnums$anchor\" title=\"last\">last</a></li>";
	if ($pnums <= 1)
		$re = '';
 if($page < $pnums) {
  $i = $page + 1;
  $re .= " <li class=\"ctrl-btn\"><a href=\"".$url.$i."\">next →</a></li> ";
 }
 return $re;
}
//标签云百分比
function percent($num){
	if($num > 1 && $num < 21){
		echo '10';
	}if($num > 20 && $num < 41){
		echo '20';
	}if($num > 40 && $num < 61){
		echo '30';
	}if($num > 30 && $num < 81){
		echo '30';
	}if($num > 80 && $num < 101){
		echo '40';
	}if($num > 100 && $num < 121){
		echo '50';
	}if($num > 120 && $num < 141){
		echo '60';
	}if($num > 140 && $num < 161){
		echo '70';
	}if($num > 160 && $num < 181){
		echo '80';
	}if($num > 180){
		echo '90';
		}
}
//幻灯
function index_slides($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);
	?>
	<li>
	<img id="tb792x350" src="<?php thumb_src($row);?>" data-rel="<?php thumb_src($row);?>" alt="<?php echo $row['title'];?>" />
		        <div class="flex-caption">
				<h1><?php echo $row['title'];?></h1>
				<p><?php echo extractHtmlData($row['excerpt'],300);?></p>
				</div>
	</li>
<?php }
}
//博客分类最热
function blog_hot($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and sortid in (".implode(',', _g('Blog_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
	<li><a href="<?php echo Url::log($row['gid']);?>">→ <?php echo $row['title'];?></a></li>
	<?php }
}
//☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆ home-1 页面函数 ☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆
//home-1页面 图库分类最新
function home_1_photo_new($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top !='y' and sortid in (".implode(',', _g('Photo_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
	<li class="entry">
		<a data-rel="prettyPhoto[home-1]" title="<?php echo extractHtmlData($row['excerpt'],50);?>" href="<?php thumb_src($row);?>">
		<img id="tb234x130" src="<?php thumb_src($row);?>" width="234" height="130" alt="<?php echo $row['title'];?>" /></a>
	</li>
	<?php }
}
//home-1页面 博客分类最新
function home_1_blog_new($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top !='y' and sortid in (".implode(',', _g('Blog_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
					<li class="entry">
						<article>
							<figure>
								<a href="<?php echo Url::log($row['gid']);?>">
								<img id="tb130x130" alt="<?php echo $row['title'];?>" src="<?php thumb_src($row);?>" width="130" height="130" /></a>
							</figure>
							<hgroup>
								<h4 class="title"><a href="<?php echo Url::log($row['gid']);?>"><?php echo $row['title'];?></a></h4>
							</hgroup>
							<div class="entry-content">
								<p><?php echo extractHtmlData($row['excerpt'],50);?>
								<span class="more-text"><a href="<?php echo Url::log($row['gid']);?>">// read more</a></span></p>
							</div>
						</article>
					</li>
	<?php }
}
//☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆ home-2 页面函数 ☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆
//home-2页面 博客分类热点
function home_2_tops($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and (views>="._g('Views_down')." and views<="._g('Views_up').") and sortid in (".implode(',', _g('Blog_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
	<li class="entry">
		<article>
			<div class="top-box"><?php echo $key+1; ?></div>
				<figure>
					<a href="<?php thumb_src($row);?>">
					<img id="tb198x130" alt="" src="<?php thumb_src($row);?>" width="198" height="130" /></a>
				</figure>
					<hgroup>
					<h4 class="title"><a href="<?php echo Url::log($row['gid']);?>"><?php echo extractHtmlData($row['title'],15);?></a></h4>
					</hgroup>
					<div class="entry-content">
					<p><?php echo extractHtmlData($row['excerpt'],50);?></p>
					<span class="more-text"><a href="<?php echo Url::log($row['gid']);?>">// read more</a></span>
					</div>
		</article>
	</li>
	<?php }
}
//home-2页面 博客分类文章
function home_2_blog_new($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and sortid in (".implode(',', _g('Blog_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
     <article class="mb0">
		<a class="thumb left" href="<?php echo Url::log($row['gid']);?>"><img id="tb300x300" alt="" src="<?php thumb_src($row);?>" width="300" height="300" /></a>
			<div class="wrap">
				<h3 class="line"><a href="<?php echo Url::log($row['gid']);?>"><?php echo $row['title'];?></a></h3>
				<p><?php echo extractHtmlData($row['excerpt'],50);?></p>
				<h5 class="line">Informations</h5>
					<ul class="info-list">
						<li>Author: <span><?php blog_author($row['author']); ?></span></li>
						<li>Date: <?php echo gmdate('Y-n-j  l', $row['date']); ?></li>
						<li>Tag: <?php if(blog_tag($row['gid'])):
									     echo blog_tag($row['gid']); 
									   else:
										 echo 'No Tag';
									   endif;?></li>
									<li>Category: <span><?php blog_sort($row['gid']); ?></span></li>
									<p>URL: <a href="<?php echo Url::log($row['gid']);?>"><?php echo Url::log($row['gid']);?></a></p>
					</ul>
		<a href="<?php echo Url::log($row['gid']);?>" class="button-1 right">view detail</a>
			</div>
	</article>
	<?php }
}
//home-2页面 博客分类文章
function home_2_blog_new_ico($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and sortid in (".implode(',', _g('Blog_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
		$row['title'] = htmlspecialchars(trim($row['title']));?>
	<li><a href="<?php thumb_src($row);?>">
						<img id="tb70x70" alt="<?php echo $row['title'];?>" src="<?php thumb_src($row);?>" width="70" height="70" /></a></li>
	<?php }
}
//☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆ home-3 页面函数 ☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆
//home-3页面 图库分类最新
function home_3_photo_new($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and sortid in (".implode(',', _g('Photo_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
    <li>
       <a data-rel="prettyPhoto[home-3]" title="<?php echo extractHtmlData($row['excerpt'],150);?>" href="<?php thumb_src($row);?>">
	   <img id="tb234x165" src="<?php thumb_src($row);?>" width="234" height="165" alt="<?php echo $row['title'];?>" data-longdesc="<?php echo Url::log($row['gid']);?>" /></a>
	</li>
	<?php }
}
//home-3页面 博客分类最新
function home_3_blog_new($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and sortid in (".implode(',', _g('Blog_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
					<li>
						<h4 class="title"><a href="<?php echo Url::log($row['gid']);?>"><?php echo $row['title'];?></a></h4>
						<p><span class="dropcap-1"><?php echo $key+1 ;?></span>
						<?php echo extractHtmlData($row['excerpt'],50);?></p>
						<a href="<?php echo Url::log($row['gid']);?>" class="button-1">view detail</a>
					</li>
	<?php }
}
//home-3页面 博客分类最热
function home_3_blog_hot($num1,$num2,$order){
    $log_Model = new Log_Model;
	$logs = $log_Model->getLogsForHome("and top!='y' and (views>="._g('Views_down')." and views<="._g('Views_up').") and sortid in (".implode(',', _g('Blog_Sort_id')).") ORDER BY $order DESC", $num1, $num2);
	foreach($logs as $key=>$row){
	$row['title'] = htmlspecialchars(trim($row['title']));
	$row['excerpt'] = nohtml($row['content']);?>
	<p><a href="<?php echo Url::log($row['gid']);?>">→ <?php echo $row['title'];?></a></p>
	<?php }
}?>