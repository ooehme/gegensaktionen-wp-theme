<?php
/*
 * Gegensanktionen Theme functions and definitions
 */

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Enqueue scripts and styles
function gegensanktionen_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    // Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Theme stylesheet
    wp_enqueue_style('gegensanktionen-style', get_stylesheet_uri());
    
    // jQuery (WordPress already includes jQuery, but we're adding it via CDN as requested)
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, true);
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    
    // Custom JS
    wp_enqueue_script('gegensanktionen-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gegensanktionen_scripts');

// Register navigation menus
function gegensanktionen_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'gegensanktionen'),
            'footer' => __('Footer Menu', 'gegensanktionen'),
        )
    );
}
add_action('init', 'gegensanktionen_menus');

// Add theme support
function gegensanktionen_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'gegensanktionen_setup');

// Register sidebar
function gegensanktionen_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'gegensanktionen'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'gegensanktionen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'gegensanktionen_widgets_init');