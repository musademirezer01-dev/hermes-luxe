<?php
// Tema ayarları
function hermes_luxe_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus( array(
        'main-menu' => __( 'Main Menu', 'hermes-luxe' ),
    ));
}
add_action('after_setup_theme', 'hermes_luxe_setup');

// Stil dosyalarını ekle
function hermes_luxe_styles() {
    wp_enqueue_style('hermes-luxe-style', get_stylesheet_uri());
    // Minimalist bir font için Google Fonts (Inter ve Georgia)
    wp_enqueue_style('hermes-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Georgia:ital,wght@0,400;1,400&display=swap', false);
}
add_action('wp_enqueue_scripts', 'hermes_luxe_styles');
