<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/Don/google-code-prettify/prettify.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/Don/google-code-prettify/sunburst.css" />
	<script type="text/javascript" src="<?php echo home_url(); ?>/wp-content/themes/Don/google-code-prettify/prettify.js"></script>
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49866314-1', 'supergrubby.com');
  ga('send', 'pageview');

</script>
</head>

<body class="<?php sandbox_body_class() ?>" onload="prettyPrint()">

<div id="wrapper" class="hfeed">
		<div id="header">
			<h1 id="blog-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
			<div id="blog-description"><?php bloginfo('description') ?></div>
			<div id="head-pic" class="avator"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/04/avatar.jpg" alt="supergrubby" class="size64"></div>
			<?php sandbox_globalnav() ?>
			<div id="menu">
				<ul>
					<li class="page_item page-item-53"><a href="http://supergrubby.com/archives">Archives</a></li>
					<li class="page_item page-item-30194"><a href="http://supergrubby.com/life">Life</a></li>
					<li class="page_item page-item-30196"><a href="http://supergrubby.com/work">Work</a></li>
					<li class="page_item page-item-30276"><a href="http://supergrubby.com/links">Links</a></li>
				</ul>
			</div>
		</div>
</div>
