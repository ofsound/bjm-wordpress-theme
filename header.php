<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108446176-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-108446176-1');
	</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bjm2017' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<a href="<?php echo home_url(); ?>" class="header-home-link"></a>

		<nav id="site-navigation" class="main-navigation" role="navigation">

<!-- 			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bjm2017' ); ?></button>
 -->
			<?php 

				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); 
			?>
			
			<?php
			 // wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); 
			?>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">