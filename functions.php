<?php 

	function theme_resources(){
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css'); 
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css'); 
		wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/js/bootstrap.js', array('jquery')); 
	}

	add_action( 'wp_enqueue_scripts', 'theme_resources'); 


?>