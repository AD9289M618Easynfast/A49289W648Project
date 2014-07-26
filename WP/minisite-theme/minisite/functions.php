<?php

/**
 * *********************************************
 * Methods Summary: Setup Minisite Theme
 * *********************************************
 */
function minisite_setup() {
    load_theme_textdomain('Minisite', get_template_directory() . '/languages');

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu('primary', __('Primary Menu', 'EasynFast'));

    global $imagePath;
    $imagePath = get_template_directory_uri() . '/images/';
}

add_action('after_setup_theme', 'minisite_setup');

/**
 * *********************************************
 * Methods Summary: Set Javascript & Stylesheet for Theme
 * *********************************************
 */
function setup_Js_Styling() {
    
    wp_deregister_style('open-sans-css');

    /*
     * Set up Stylesheet.
     */
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/style.css', false, null, 'all');
}

add_action('wp_enqueue_scripts', 'setup_Js_Styling');


