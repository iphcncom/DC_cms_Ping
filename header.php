<?php
/*
Template Name:DC_Ping
Description:响应式图片媒体模板
Version:1.1
Author:Ping
Author Url:http://www.iphcn.com
Sidebar Amount:1
ForEmlog:5.2.1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
require_once View::getView('function');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<meta name="format-detection" content="telephone=no" />
<meta content="width=device-width, initial-scale=1" name="viewport" />

<!--[if lt IE 9]>
    <script src="<?php echo TEMPLATE_URL; ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />

<!-- FOR THEME -->
<link href="<?php echo TEMPLATE_URL; ?>/css/inuit.css" rel="stylesheet" type='text/css' />
<link href="<?php echo TEMPLATE_URL; ?>/css/prettyphoto.css" rel="stylesheet" type='text/css' />
<link href="<?php echo TEMPLATE_URL; ?>/css/style.css" rel="stylesheet" type='text/css' />

<!-- FOR INDIVIDUAL PAGE -->
<?php if (if_is_home()) :?>
<link rel='stylesheet' href='<?php echo TEMPLATE_URL; ?>/css/flexslider.css' type='text/css' media='all' />
<?php else :?>
<?php endif ;?>

<link href="<?php echo TEMPLATE_URL; ?>/images/theme/icon.png" rel="shortcut icon" />
<link href="<?php echo TEMPLATE_URL; ?>/images/theme/icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<?php doAction('index_head'); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
	<div class="wrapper">

        <!-- BEGIN HEADER -->
        <header id="header">
        
            <div class="grids">
            	<div class="grid-3 first-space"></div>
	            
	            <!-- BEGIN LOGO -->
	            <div id="logo" class="grid-3">
	            	<a href="<?php echo BLOG_URL; ?>"><img src="<?php echo TEMPLATE_URL; ?>images/theme/logo.png" width="228" height="49" alt="<?php echo $blogname; ?>" /></a>
	            </div>
	            <!-- END LOGO -->
	            
	            <!-- BEGIN MAIN MENU -->
	            <nav id="main-menu" class="grid-6">
	            	<div class="wrap">
		            	<div class="root" style="display:<?php echo _g('Css_root'); ?> ;">
						<?php if (ROLE == 'admin' || ROLE == 'writer'): ?>
                        <a href="<?php echo BLOG_URL; ?>admin/?action=logout">OUT</a>
                    <?php else: ?>
                        <a href="<?php echo BLOG_URL; ?>admin">SIGN</a>
<?php endif; ?>
				  </div>
<?php blog_navi(); ?>
		        	</div> <!-- end wrap -->
	            </nav>
	            <!-- END MAIN MENU -->
	            
            </div>

        </header>
        <!-- END HEADER -->