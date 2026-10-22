<?php

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
} );

add_action( 'wp_enqueue_scripts', function () {
	$dir = get_template_directory();
	wp_enqueue_style( 'alma-buena', get_stylesheet_uri(), array(), filemtime( $dir . '/style.css' ) );
	wp_enqueue_script( 'alma-buena', get_template_directory_uri() . '/js/alma-buena.js', array(), filemtime( $dir . '/js/alma-buena.js' ), true );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
}, 20 );

add_action( 'wp_head', function () {
	echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/assets/favicon.png">';
} );
