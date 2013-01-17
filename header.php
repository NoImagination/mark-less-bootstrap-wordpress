<!DOCTYPE html>

<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo('charset'); ?>">

		<!--[if IE]><![endif]-->

		<title>

			<?php bloginfo('name'); ?>

			<?php wp_title( '-', true, '' ); ?>

		</title>

		<meta name="author" content="Joel Cipriano">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="html5, css3, less, jquery, bootstrap, wordpress, framework">
		<meta name="generator" content="Sublime Text 2">

		<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
		<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" media="screen">
		<!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css" media="screen"> -->

		<link href="<?php bloginfo('template_url'); ?>/css/mark.less" media="screen" rel="stylesheet/less">
		<script src="<?php bloginfo('template_url'); ?>/js/less.js"></script>
		<script>

			less.env = "development";
			less.watch();

		</script>

		<!--link href="<?php bloginfo('template_url'); ?>/css/mark.css" media="screen" rel="stylesheet"-->
		<link href="<?php bloginfo('template_url'); ?>/css/print.css" media="print" rel="stylesheet">

		<!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5-tags.js"></script><![endif]-->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

		<link href="<?php bloginfo('template_url'); ?>/img/icon-16x16.ico" rel="shortcut icon">
		<link href="<?php bloginfo('template_url'); ?>/img/icon-114x114.png" rel="apple-touch-icon">

		<link href="<?php bloginfo('pingback_url') ?>" rel="pingback">
		<link href="<?php bloginfo_rss('atom_url') ?>" rel="alternate" title="Atom" type="application/rss+xml">
		<link href="<?php bloginfo_rss('rss_url') ?>" rel="alternate" title="RSS" type="application/rss+xml">
		<link href="<?php bloginfo_rss('rss2_url') ?>" rel="alternate" title="RSS 2" type="application/rss+xml">

		<!--?php if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?-->

		<?php wp_head(); ?>

	</head>

	<body <?php body_class($class); ?>>

		<div class="container">

			<div class="row">

				<div class="span12">

					<a href="<?php bloginfo('url'); ?>" title="Home">

						<h1><?php bloginfo('name'); ?></h1>

					</a>

					<h2><?php bloginfo('description'); ?></h2>

					<?php wp_nav_menu(); ?>

					<?php get_search_form(); ?>

				</div>

			</div>

		</div>