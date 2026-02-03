<?php

function sl_luxury_tours_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'sl-luxury-tours'),
        )
    );
}
add_action('after_setup_theme', 'sl_luxury_tours_setup');

function sl_luxury_tours_assets() {
    wp_enqueue_style('sl-luxury-tours-style', get_stylesheet_uri(), array(), '1.2');
    wp_enqueue_style(
        'sl-luxury-tours-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
    wp_enqueue_script(
        'sl-luxury-tours-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        '1.2',
        true
    );
}
add_action('wp_enqueue_scripts', 'sl_luxury_tours_assets');

function sl_luxury_tours_body_class($classes) {
    $classes[] = 'theme-sl-luxury-tours';
    return $classes;
}
add_filter('body_class', 'sl_luxury_tours_body_class');
