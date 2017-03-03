<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=0.3, minimum-scale=0.3, maximum-scale=1.0, user-scalable=yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();?>
	<?php
if (is_home() || is_category() || is_page() || is_tag()) {
    wp_enqueue_style('indexcss', get_template_directory_uri() . '/css/index.css', array(), '20160809');
}
if (is_single()) {
    wp_enqueue_style('detailcss', get_template_directory_uri() . '/css/detail.css', array(), '20160809');
}
if (is_category() || is_page()) {
    wp_enqueue_style('commoncss', get_template_directory_uri() . '/css/common.css', array(), '20160809');
}

?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
</head>
	<body>
		<nav class="navbar navbar-default <?php if (is_home() || is_category() || is_page()) {?>navbar-fixed-top<?php }?> <?php if (is_single()) {?>nav-gray-bg<?php }?> ">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right nav-ul">
						<li <?php if (is_home()) {?> class="active"<?php }?>><a href="/">首页</a></li>
						<li><a href="/chatroom/live">诵经直播</a></li>
						<li class="<?php echo is_category('songjinghuodong') ? 'active' : ''; ?>"><a href="/?cat=54">诵经活动</a></li>
						<li class="<?php echo is_category('dianzijingwen') ? 'active' : ''; ?>"><a href="/?cat=53">电子经文</a></li>
						<li class="<?php echo is_category('songjingxinde') ? 'active' : ''; ?>"><a href="/?cat=50">诵经心得</a></li>
						<li class="<?php echo is_page('2473') ? 'active' : ''; ?>"><a href="/?page_id=2473">活动相册</a></li>
					</ul>
				</div>
			</div>
		</nav>
