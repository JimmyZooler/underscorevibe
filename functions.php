<?php
/**
 * Vibey Underscores functions and definitions
 *
 * @package Vibey Underscores
 */

if ( ! function_exists( 'underscorevibe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underscorevibe_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Vibey Underscores, use a find and replace
	 * to change 'underscorevibe' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'underscorevibe', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
        add_image_size('large-thumb', 1060, 650, true);
        add_image_size('index-thumb', 300, 300, true);
        set_post_thumbnail_size('large-thumb', 1060, 650, true);
        set_post_thumbnail_size('index-thumb', 300, 300, true);
        

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'underscorevibe' ),
                'social' => esc_html__( 'Social Menu', 'underscorevibe' ),
                'login' => esc_html__('Log In', 'underscorevibe'),
                'signup' => esc_html__('Sign Up', 'underscorevibe')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'underscorevibe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // underscorevibe_setup
add_action( 'after_setup_theme', 'underscorevibe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscorevibe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underscorevibe_content_width', 640 );
}
add_action( 'after_setup_theme', 'underscorevibe_content_width', 0 );

/**
 * Create Custom Excerpt Length
 */

    remove_filter('get_the_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_excerpt', 'custom_trim_excerpt');

    function custom_trim_excerpt($text) { // Fakes an excerpt if needed
    global $post;
    if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text);
    $excerpt_length = 24;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
    array_pop($words);
    array_push($words, '...');
    $text = implode(' ', $words);
    }
    }
    return $text;
    }


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function underscorevibe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'underscorevibe' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
        	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'underscorevibe' ),
                'description'   => __( 'Footer widgets area appears in the footer of the site.', 'underscorevibe'),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'underscorevibe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscorevibe_scripts() {
	wp_enqueue_style( 'underscorevibe-foundation', get_template_directory_uri() . '/css/foundation.css');
    
        wp_enqueue_style( 'underscorevibe-style', get_stylesheet_uri() );
        
        wp_enqueue_style('underscorevibe-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css');
        
        wp_enqueue_style('underscorevibe-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|PT+Serif:400,400italic,700,700italic');
            
        wp_enqueue_style('underscorevibe-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');      
        
        wp_enqueue_script( 'my-simone-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150706', true );
                
        wp_enqueue_script( 'my-simone-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('my-simone-superfish'), '20150707', true );
                
	wp_enqueue_script( 'underscorevibe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'underscorevibe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
        
        wp_enqueue_script( 'underscorevibe-jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', array(), '20150909', true );
        
        wp_enqueue_script( 'underscorevibe-soundcloud.player.api', get_template_directory_uri() . '/js/soundcloud.player.api.js', array(), '20150909', true );
        
        wp_enqueue_script( 'underscorevibe-sc-player', get_template_directory_uri() . '/js/sc-player.js', array(), '20150909', true );
                           
        wp_enqueue_script( 'underscorevibe-soundcloud-sdk', '//connect.soundcloud.com/sdk.js', array(), '20150910', true );
        
        wp_enqueue_script( 'my-simone-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20140401', true );
   
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscorevibe_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
