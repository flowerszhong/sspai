<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sspai
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class('katana-box katana-article katana-article-index'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'sspai' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
				<div class="site-branding">
					<div id="logo">
						<a href="">
							
						</a>
					</div>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sspai' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="clearfix"></div>
			</header><!-- #masthead -->
		</div>
		

	<div id="content" class="clearfix wrap_container">

    <?php 
    if(is_home() or is_front_page()){
    	get_template_part( 'home','slide' );
    	get_template_part( 'home','tag' );
    }

     ?>

	<div class="col-full-index">
