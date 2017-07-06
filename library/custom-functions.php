<?php

function dump($expression, $die = false){

	echo '<pre>';

		var_dump($expression);

	echo '</pre>';

	if ($die = true){
		die();
	}
}

function template_name(){

	$template = null;

	if (is_page_template()) {
		
		$template = get_page_template_slug();
		$template = str_replace('templates/', '', $template);
		$template = str_replace('.php', '', $template);
		$template = 'class="page-id-'. get_the_id() .' '. $template .'-template"';

	} else {

		$template = 'class="page-id-'. get_the_id() .'"';

	}

	return $template;
}