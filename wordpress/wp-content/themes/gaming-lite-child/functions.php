<?php

// Enqueue parent and child theme stylesheets
function gaminglitechild_enqueue_styles() {

    // Enqueue parent stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue child stylesheet
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );

}
add_action( 'wp_enqueue_scripts', 'gaminglitechild_enqueue_styles' );

// Add any other PHP code below

?>