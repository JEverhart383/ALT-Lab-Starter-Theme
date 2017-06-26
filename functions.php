<?php 

	
	// Load all of the external CSS and JS
	function theme_resources(){
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css'); 
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css'); 
		wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/js/bootstrap.js', array('jquery')); 
	}

	add_action( 'wp_enqueue_scripts', 'theme_resources'); 

	

	function alt_lab_setup(){

		//Add support for custom-logo
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		add_theme_support('post-thumbnails'); 


	    // This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu')
		) );

	}

	add_action('after_setup_theme', 'alt_lab_setup'); 


?>