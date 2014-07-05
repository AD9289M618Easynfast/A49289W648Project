<?php

/**
 * *********************************************
 * Methods Summary: Setup EasynFast Theme
 * *********************************************
 */
function puamax_setup() {
    load_theme_textdomain('Puamax', get_template_directory() . '/languages');

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu('primary', __('Primary Menu', 'Puamax'));
    register_nav_menu('footer', __('Footer Menu', 'Puamax'));

    global $imagePath;
    $imagePath = get_template_directory_uri() . '/images/';
}

add_action('after_setup_theme', 'puamax_setup');
/**
 * *********************************************
 * Methods Summary: Set Javascript & Stylesheet for Theme
 * *********************************************
 */
function setup_Js_Styling() {
	 /*
     * Set up Stylesheet.
     */
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/style.css', false, null, 'all');
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.css', false, null, 'all');
}
add_action('wp_enqueue_scripts', 'setup_Js_Styling');
?>