<?php
function food_chain(){
	wp_enqueue_style('main',get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font',get_template_directory_uri().'/css/fontawesome.min.css');
	wp_enqueue_style('font',get_template_directory_uri().'//fonts.googleapis.com/css?family=Open+Sans|Roboto');
	wp_enqueue_script('mainJs',get_template_directory_uri().'/js/bootsrap.min.js');
	wp_enqueue_script('main',get_template_directory_uri().'/js/jquery-3.3.1.min.js');
}
add_action('wp_enqueue_scripts','food_chain');



