<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Vibey Underscores
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

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscorevibe' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
                             
                <?php if ( get_header_image() && ('blank' == get_header_textcolor()) ) : ?>
                <div class="header-image"
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                    </a>
                </div>
                <?php endif; // End header image check. ?>
            
		<?php 
                    if ( get_header_image() && !('blank' == get_header_textcolor()) ) { 
                        echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">'; 
                    } else {
                        echo '<div class="site-branding">';
                    }
                    ?>                  
                    <div class="title-box">
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
                    </div>
		</div><!-- .site-branding -->
                
	</header><!-- #masthead -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
                        
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                    <div class="top-nav-container">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        <div class="nav-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img class="nav-logo-icon" src="http://localhost/wordpress/wp-content/uploads/2015/09/Viber-B8B8B8-Transparent.png">
                                <img class="nav-logo-text" src="http://localhost/wordpress/wp-content/uploads/2015/09/Vibe-related_block_logo_c6c6c6.png">
                            </a>
                        </div>
                    </div>
                        
        </nav><!-- #site-navigation -->
        
	<div id="content" class="site-content">
<!--        <div id="hero-container">
                <div id="hero">
                    <img src="http://vibe-related.com/wp-content/uploads/2014/03/artists-picture-.jpg">
                    <div id="hero-title">
                        <h1>Hooty and Roy Explore Detroit</h1> 
                        <button id="hero-button">
                            Read More
                        </button>
                            
                    </div>  hero-title 
                </div>  hero 
                <div id="hero-title">
                    <h1> 
                </div>  hero-title 
            </div>  hero-container -->
