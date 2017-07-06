<?php

if ( ! function_exists( 'sidebar_widgets' ) ) :

	function sidebar_widgets() {

		register_sidebar(array(
			'id' => 'sidebar-widgets',
			'name' => __( 'Sidebar widgets', 'the-creative-hut' ),
			'description' => __( 'Drag widgets to this sidebar container.', 'the-creative-hut' ),
			'before_widget' => '<article id="%1$s" class="widget %2$s">',
			'after_widget' => '</article>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		));

		register_sidebar(array(
			'id' => 'footer-widgets',
			'name' => __( 'Footer widgets', 'the-creative-hut' ),
			'description' => __( 'Drag widgets to this footer container', 'the-creative-hut' ),
			'before_widget' => '<article id="%1$s" class="col-3 widget %2$s">',
			'after_widget' => '</article>',
			'before_title' => '<h6>',
			'after_title' => '</h6>',
		));

	}

endif;

add_action( 'widgets_init', 'sidebar_widgets' );