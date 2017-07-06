<?php

function cleanup_shortcode_fix($content) {   
	
	$array = array (
		'<p>[' 	=> '[', 
		']</p>' => ']', 
		']<br />' => ']',
		']<br>' => ']'
	);

	$content = strtr($content, $array);

	return $content;
}
add_filter('the_content', 'cleanup_shortcode_fix');

add_shortcode('box', 'box_func');
add_shortcode('column', 'col_func');
add_shortcode('column-row', 'col_row_func');

function box_func( $atts, $content ) {
	$content = do_shortcode($content);
	$box = '<div class="featured-content-box">'. $content .'</div>';
	return $box;
}

function col_func( $atts, $content ) {
	$content = do_shortcode($content);
	$col = '<div class="col">'. $content .'</div>';
	return $col;
}

function col_row_func( $atts, $content ) {
 	$content = do_shortcode($content);
 	$col_row = '<div class="col-row">'. $content .'</div>';
 	return $col_row;
}