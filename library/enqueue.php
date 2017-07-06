<?php

function the_creative_hut_enqueue_style() {

	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', true );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );

    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/theme.css', false, null );
}
add_action( 'wp_enqueue_scripts', 'the_creative_hut_enqueue_style' );