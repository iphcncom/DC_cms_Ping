<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<!-- BEGIN PRE FOOTER -->
	<div id="pre-footer" class="cf">
		<div id="footer-tweets">
			<ul>

	
            </ul>
		</div>
		<div id="tweets-tmp">
<?php {
	global $CACHE; 
	$newtws_cache = $CACHE->readCache('newtw');
	$istwitter = Option::get('istwitter');
	foreach($newtws_cache as $value):
	?>
	<span class="tweet"><a href=""><?php echo extractHtmlData($value['t'],40);?></a>
	<span class="tweet-time"> - <?php echo smartDate($value['date']); ?></span></span>
	<?php endforeach; ?>
<?php }?>
</div>
	</div>
<!-- END PRE FOOTER -->

<!-- BEGIN FOOTER -->
        <footer id="footer" class="cf">
        	<div class="grids">
	        	<div class="grid-3 col-1">
	        		<div class="cell-wrapper cf">
	        			<img alt="<?php echo $blogname; ?>" id="footer-logo" src="<?php echo TEMPLATE_URL; ?>/images/theme/logo2.png" width="172" height="39" />
	        			
	        			<div class="footer-section">
	        				<h1>STAY IN TOUCH</h1>
	        				<ul class="social-links">
	        					<li><a href="<?php echo _g('Sns_qq');?>"><img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/qqmb.gif" width="29" height="29" /></a></li>
	        					<li><a href="<?php echo _g('Sns_renren');?>"><img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/renren.gif" width="29" height="29" /></a></li>
	        					<li><a href="<?php echo _g('Sns_sina');?>"><img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/sinaminiblog.gif" width="29" height="29" /></a></li>
	        					<li><a href="<?php echo _g('Sns_kaixin');?>"><img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/kaixin001.gif" width="29" height="29" /></a></li>
	        					<li><a href="<?php echo _g('Sns_netease');?>"><img alt="" src="<?php echo TEMPLATE_URL; ?>/images/theme/neteasemb.gif" width="29" height="29" /></a></li>
	        				</ul>
	        			</div>
						<div class="company-info">
	        				Powered by <a href="http://www.emlog.net" title="emlog <?php echo Option::EMLOG_VERSION;?>">emlog</a> 
	                        <a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a> <?php echo $footer_info; ?>
	        			</div>
	        		</div>
	        	</div>
	    		<div class="grid-3 col-2">
	    			<div class="cell-wrapper cf">
	    				<div class="footer-section">
	    					<h1>GALLERY</h1>
							<ul class="gallery" id="flickr-gallery">
							<li>
<a data-rel="prettyPhoto[footer-gallery]" href="<?php thumb_images_src(rand(1,50));?>">
<img id="tb174x36" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="174" height="36" style="margin-top:-25%;" /></a>
</li>
<li>
<a data-rel="prettyPhoto[footer-gallery]" href="<?php thumb_images_src(rand(1,50));?>">
<img id="tb174x36" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="174" height="36" style="margin-top:-25%;" /></a>
</li>
<li>
<a data-rel="prettyPhoto[footer-gallery]" href="<?php thumb_images_src(rand(1,50));?>">
<img id="tb174x36" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="174" height="36" style="margin-top:-25%;" /></a>
</li>
<li>
<a data-rel="prettyPhoto[footer-gallery]" href="<?php thumb_images_src(rand(1,50));?>">
<img id="tb174x36" alt="" src="<?php thumb_images_src(rand(1,50));?>" width="174" height="36" style="margin-top:-25%;" /></a>
</li>
</ul>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="grid-3 col-3">
	    			<div class="cell-wrapper cf">
	    				<div class="footer-section">
	    					<h1>CONTACT</h1>
	    					<ul class="contact">
	    						<li class="cf">
	    							<span style="width: 100%;float: left;">
	    								<span style="color: #fff;"><strong>Link</strong></span><br />
<?php
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
	foreach($link_cache as $value):
	?>
<span><a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a></span>
	<?php endforeach; ?>
	    							</span>

	    						</li>
	    						<li class="mb0 cf">
<?php {
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$name = $user_cache[1]['mail'] != '' ? "<a href=\"mailto:".$user_cache[1]['mail']."\">".$user_cache[1]['name']."</a>" : $user_cache[1]['name'];?>
	    							<span style="width: 50%;margin-right: 15%;float: left;">
	    								<span style="color: #fff;"><strong>Author</strong></span><br />

	    								<?php echo $name; ?><br />
	    								<?php echo $user_cache[1]['des']; ?><br />
	    							</span>
	    							<span style="width: 35%;float: left;">
<?php if (!empty($user_cache[1]['photo']['src'])): ?>
<img id="tb70x70" src="<?php echo BLOG_URL.$user_cache[1]['photo']['src']; ?>" width="<?php echo $user_cache[1]['photo']['width']; ?>" height="<?php echo $user_cache[1]['photo']['height']; ?>" alt="blogger" />
	<?php endif;?>
	<br />
	    							</span>
<?php }?>
	    						</li>
	    					</ul>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="grid-3 col-4">
	    			<div class="cell-wrapper cf">
	    				<div class="footer-section">
	    					<h1>NEW COMMENT</h1>
	    					<ul class="testimonial">
<?php {
	global $CACHE; 
	$com_cache = $CACHE->readCache('comment');
	foreach($com_cache as $key=>$value):
	$url = Url::comment($value['gid'], $value['page'], $value['cid']);
	?>
	  <li class="<?php if(($key+1) == '3'){echo 'cf mb0';}else{echo 'cf';}?>">
	   <img id="#tb36x36" alt="<?php echo $value['name']; ?>" src="<?php echo getGravatar($value['mail']); ?>" width="36" height="36" />
	    <span class="testimonial-content">
	    	<a href="<?php echo $url; ?>"><?php echo $value['content']; ?></a>
	    		<span class="client-name">- <?php echo $value['name']; ?></span>
	    </span>
	  </li>
<?php endforeach; ?>
<?php }?>
	    					</ul>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
		</footer>
        <!-- END FOOTER -->
        
	</div>
	<!-- SCRIPTS -->
	<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>/js/jquery.js'></script>
	<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>/js/respond.min.js'></script>
	<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>/js/mobilemenu.js'></script>
	<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>/js/prettyPhoto.js'></script>
	<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>/js/theme.js"></script>
	<!-- PAGE'S SCRIPTS -->
		<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>/js/flexslider-min.js'></script>
		
	<script type="text/javascript">
		jQuery(window).load(function(){
			$('.flexslider').flexslider();
		});	
	</script>
<?php doAction('index_footer'); ?>
<script>prettyPrint();</script>
</body>
</html>