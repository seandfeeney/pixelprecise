<?php
/*
Theme Name: Pixel Precise
Theme URI: http://PixelPreciseDesigns.com
Author: Pixel Precise LLC
Author URI: http://PixelPreciseDesigns.com
Description: A Custom team for Pixel Precise LLC
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: purple, silver, responsive
Text Domain: pixelprecise
*/
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!-- Conditional class for older versions of IE -->
<!--[if lt IE 9 & !IEMobile]><html class="ie" lang="en"><![endif]-->
<!--[if gt IE 8 | IEMobile]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<meta name="wot-verification" content="4ac4d13c43098293bc51"/>
<!-- Start of Async Drift Code for sean@pixelprecise.co-->
<script>!function(t){function e(r){if(o[r])return o[r].exports;var n=o[r]={exports:{},id:r,loaded:!1};return t[r].call(n.exports,n,n.exports,e),n.loaded=!0,n.exports}var o={};return e.m=t,e.c=o,e.p="",e(0)}([function(t,e){!function(){var t;return t=window.driftt=window.drift=window.driftt||[],t.init?void 0:t.invoked?void(window.console&&console.error&&console.error("Driftt snippet included twice.")):(t.invoked=!0,t.methods=["identify","track","reset","debug","show","ping","page","hide","off","on"],t.factory=function(e){return function(){var o;return o=Array.prototype.slice.call(arguments),o.unshift(e),t.push(o),t}},t.methods.forEach(function(e){t[e]=t.factory(e)}),t.load=function(){var t,e,o,r;t=3e5,r=Math.ceil(new Date/t)*t,o=document.createElement("script"),o.type="text/javascript",o.async=!0,o.crossorigin="anonymous",o.src="https://js.driftt.com/include/"+r+"/33zwgug5zncg.js",e=document.getElementsByTagName("script")[0],e.parentNode.insertBefore(o,e)},t.SNIPPET_VERSION="0.1.0",t.load())}()}]);
//# sourceMappingURL=browser-snippet.js.map
</script>
<!-- End of Async Drift Code for sean@pixelprecise.co -->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/iphone-icon.png" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
	

	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

<!--[if lte IE 8]>
	<link href="<?php bloginfo('stylesheet_directory'); ?>/ie8.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8" />
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<!-- Old Browser Warning -->
<!-- If you're supporting IE 6-7, remove this -->
<!--[if lt IE 8]>
  <section class="container">
    Did you know that your web browser is a bit old? Some of the content on this site might not work right as a result. <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, better, and safer web experience.
  </section>
<![endif]-->

<div class="wrapper">	
<link rel="image_src" href="<?php bloginfo('stylesheet_directory'); ?>/images/PP-icon.png" />
<link rel="image_src" href="<?php bloginfo('stylesheet_directory'); ?>/images/PP-logo-1.png" />	
<!-- START HOME-PAGE HEADER-->

<?php if ( is_page('home-page') ) { ?>

	<div id="darkpurplewrap">
	<header id="fronthead" role="banner">
			<hgroup id="pinned">
				<div id="logowrap">
					<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/PP-logo-slogan.svg"></a>
				</div>
				<nav id="access" role="navigation">
					<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
					<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
					<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
					<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
					<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #access -->			
			</hgroup>
	</header><!-- #frontbranding -->
		<!-- END HOME-PAGE HEADER -->	   
   
   
<?php } else { ?>

<!-- START OTHER PAGE HEADER -->	

	<div id="darkpurplewrap">
	<!--<div class="inner">-->
	<header id="branding" role="banner">
<hgroup>
				<div id="logowrap">
					<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/PP-logo-slogan.png"></a>
				</div>
				<nav id="access" role="navigation">
					<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
					<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
					<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
					<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
					<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					
				</nav><!-- #access -->			
			</hgroup>	</header><!-- #branding -->
	<!-- END OTHER PAGE HEADER -->	

<?php } ?>