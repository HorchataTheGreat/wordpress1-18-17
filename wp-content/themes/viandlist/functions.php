<?php

function viandlist_script_enqueue() {
    
    // wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '0.1.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true);
    
}

add_action('wp_enqueue_scripts', 'viandlist_script_enqueue');

function viandlist_theme_setup() {
    
    add_theme_support('menus');
    
    register_nav_menu('primary', 'primary header navigation');
    register_nav_menu('secondary', 'footer navigation');

}

add_action('init', 'viandlist_theme_setup');