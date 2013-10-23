<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />
				
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	
	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon.png" />
	
	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontello.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontello-ie7.css"><![endif]-->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<!-- Start the main container -->
	<div id="cont_container" class="container" role="document">
		
		<!-- Row for blog navigation -->
		<div class="roww" id="cont_top_part" >
			<div class="row">
				<header class="twelve columns" role="banner">
					<div class="reverie-header">
						<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><span class="red-highlight"><?php bloginfo('name'); ?></span></a></h1>
						<h4 class="subheader"><span class="black-highlight"><?php bloginfo('description'); ?></span></h4>
					</div>
					<nav role="navigation">
						<?php
						    wp_nav_menu( array(
							'theme_location' => 'primary_navigation',
							'container' =>false,
							'menu_class' => '',
							'echo' => true,
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'depth' => 0,
							'items_wrap' => '<ul class="nav-bar">%3$s</ul>',
							'walker' => new reverie_walker())
						); ?>
					</nav>
				</header>
			</div>
			<div class="row">
				<div class="breadcrumbs eight columns hide-for-small">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
				<div class="four columns " id="main_search">
						<?php get_search_form(); ?>
				</div>
			</div>
			<div class="row" id="contacts">
				<div class="twelve columns">
					<div itemscope itemtype="http://schema.org/Organization">
						<h2 itemprop="name">Кафедра социологии ОмГУ</h2>
						<h3>Контактная информация</h3>
						<ul>

							<li><a href="callto:+73812670506"><i class="icon-phone-1"></i><span itemprop="telephone">+7 (3812) 67-05-06</span></a></li>

							<li><a href="mailto:omsocio@gmail.com"><i class="icon-mail-1"></i></i><span itemprop="email">omsocio@gmail.com</span></a></li>

							<li><a href="http://go.2gis.ru/ma3c" target="_blank"><i class="icon-map"></i>Аудитория 204, 2 корпус ОмГУ, <span itemprop="streetAddress">проспект Мира, 55</span>, <span itemprop="addressLocality">Омск</span>, РФ, <span itemprop="postalCode">644077</span></a></li>
						</ul>
					</div>
			</div>
			</div>
		
		</div>
		
		<!-- Row for main content area -->
		<div id="main" class="row">

		<!-- Row for main content area -->


		
<?php get_footer(); ?>

