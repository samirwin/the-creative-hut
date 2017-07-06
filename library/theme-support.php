<?php

if ( ! function_exists( 'theme_support' ) ) :

	function theme_support() {

		// Menu support
		add_theme_support( 'menus' );
		
		// Title Support
		add_theme_support( 'title-tag' );

		// Logo Support
		add_theme_support( 'custom-logo', array(
			'width'       => 975,
			'height'      => 660,
			'flex-height' => true,
		) );

		// Thumbnail Support
		add_theme_support( 'post-thumbnails' );

		// Post Format Support
		add_theme_support( 'post-formats', array(
			// 'aside',
			// 'image',
			// 'video',
			// 'quote',
			// 'link',
			// 'gallery',
			// 'status',
			// 'audio',
			// 'chat',
		) );

		// Enable shortcodes in text widgets
		add_filter('widget_text','do_shortcode');

		// Thumbnail Sizes
		// add_image_size('banner', 1920, 800, true);

		// Stop Contact Form 7 loading on every page
		// add_filter( 'wpcf7_load_js', '__return_false' );
		add_filter( 'wpcf7_load_css', '__return_false' );

	}

endif;

add_action( 'after_setup_theme', 'theme_support' );