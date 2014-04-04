<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TGL
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script>
jQuery(document).ready(function($) {

	$("#menu-item-6").click(function(){$("#services").slideToggle(500)});
});
</script>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider(); ?>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		
			
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'TGL' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'TGL' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<div class="logo"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/04/Image-1.png" /></div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="line"></div>
	<div id="services">asdfg</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>