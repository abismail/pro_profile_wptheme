<?php

// create entry function for child theme
function gutenify_hustle_child_theme_enqueue_styles(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri(), '/style.css' );
}

// add entry hook
add_action( 'wp_enqueue_scripts', 'gutenify_hustle_child_theme_enqueue_styles' );