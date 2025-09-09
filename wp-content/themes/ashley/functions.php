<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function mytheme_setup() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );

    // Add support for title tag
    add_theme_support( 'title-tag' );

    // Register navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mytheme' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );


/**
 * Enqueue CSS and JS
 */
function mytheme_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css', // style.css at theme root
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/style.css' )
    );

    // Custom JS file
    wp_enqueue_script(
        'mytheme-script',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        filemtime( get_stylesheet_directory() . '/assets/js/main.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );


/**
 * Register Sidebar
 */
function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'mytheme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );