<?php

function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/styles.css', 
        array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs(){
    wp_register_scripts('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_scripts('customjs');
}
add_action('wp_enqueue', 'loadjs');