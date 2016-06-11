<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<style type="text/css">
  #portrait-bg { background:url(<?php bloginfo('stylesheet_directory'); ?>/images/bg-portrait<?php echo (rand()%9); ?>.jpg); }
</style>
<link rel="shortcut icon" href="http://mywebmastertips.com/wp-content/themes/grace_theme/blueggrace/images/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<meta name="mbl" content="02e2690189fcd3f842a071eb56ed5c3951fd3736" />
<meta name="verify-v1" content="6l3W/yUxl0zcjpKYGj7RQXvIcAciModLvPR1sLOR+sM=" />
<META name="y_key" content="e8305635866c8fff">
<meta name="msvalidate.01" content="4CE54CE377B30DFC1C040EE5F43582B0" />
<meta name="blogcatalog" content="9BC9469580" /> 
<?php if (is_page('about')) echo '<script type="text/javascript" src="http://mywebmastertips.com/wp-includes/js/main.js"></script>'; ?>
<script type="text/javascript">
	window.google_analytics_uacct = "UA-3173227-9";
</script>
</head>

<body>

<div id="wrap">

	<div id="menu">

		<ul>

			<li><a href="<?php echo get_settings('home'); ?>/" >Home</a></li>

			<?php wp_list_pages('sort_column=menu_order&hierarchical=0&title_li='); ?>

                        <li style="padding-left:80px">

<form action="http://mywebmastertips.com/google-search/" id="cse-search-box">

  <div>

    <input type="hidden" name="cx" value="partner-pub-0372492470050030:xqkpe1-7jyl" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Search" />

  </div>

</form>

<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>

</li> 

		</ul>

	</div>

	<div id="header">

		<span class="btitle"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></span>

		<p class="description">

			<a href="<?php 

			if (current_user_can('level_10')) 

				echo get_settings('home').'/wp-admin/">'; 

			else 

				echo get_settings('home').'/">'; 

			bloginfo('description'); ?> 

			</a>

		</p>

	</div>

	<div id="rss-big">

		<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to this site with RSS'); ?>"></a>

	</div>

	<div id="portrait-bg"></div>

	<div id="catmenu">

		<ul>

			<?php wp_list_categories('orderby=count&order=DESC&show_count=0&hierarchical=1&title_li=&depth=1'); ?>

		</ul>

	</div>
