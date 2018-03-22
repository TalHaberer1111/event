<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Cagliostro|IBM+Plex+Mono:200,300,400,500,600,700|Libre+Franklin:100,200,300,400,500,700,800,900" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
<link href="<?php bloginfo('template_directory'); ?>/dist/animate.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/dist/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<img data-wow-duration="2s" data-wow-delay="1s" id"block-top" class="cornerBlock wow fadeInDown" src="<?php echo get_stylesheet_directory_uri(); ?>/images/block8.png" alt="">
	<a href="#main" class="sr-only sr-only-focusable skipnav"><?php _e('Skip to main content', 'basetheme'); ?></a>
	<header id="header" class="clearfix">
		<div class="container">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="Home" class="logo"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>

			<nav class="navbar navbar-default">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-container" aria-controls="main-nav-container" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="main-nav-container">
					<?php
					/*
						May need to remove the BootstrapNavMenuWalker and make menus a different way.
						This entire header/nav setup is from Bootstrap 3, haven't tested with Bootstrap 4 yet
					*/
					$args = array(
						'theme_location' => 'mainnav',
						'depth'		 => 0,
						'container'	 => false,
						'menu_class'	 => 'navbar-nav mr-auto',
						'menu_id' => 'main-nav',
						'walker'	 => new BootstrapNavMenuWalker()
					);
					wp_nav_menu($args);
				?>
				</div>
			</nav>
		</div>
	</header>
