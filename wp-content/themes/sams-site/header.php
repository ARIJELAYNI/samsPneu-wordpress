<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sams-site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


 <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css" rel="stylesheet">
	
	
	
	
	
	
	
	
<?php wp_enqueue_script('jquery');?>
<?php wp_head(); ?>

<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/mousescroll.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/smoothscroll.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>
	
</head>







<header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
			

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right" id="collapse-menu">
                 <?php wp_nav_menu( array( 'menu_class'=>'nav navbar-nav','theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->




<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'sams-site' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sams-site' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
