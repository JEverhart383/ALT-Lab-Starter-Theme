<?php 

	function theme_styles(){
		wp_enqueue_styles('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css'); 
		wp_enquequ_styles('main_css', get_template_directory_uri() . '/style.css'); 
	}

	add_action( 'wp_enqueue_scripts', 'theme_styles'); 
?>