<?php
/*********************
Enqueue the proper CSS
if you use vanilla CSS.
*********************/
function reverie_css_style()
{	
	// normalize stylesheet
	wp_register_style( 'reverie-normalize-stylesheet', get_template_directory_uri() . '/css/normalize.css', array(), '' );
	
	// foundation stylesheet
	wp_register_style( 'reverie-foundation-stylesheet', get_template_directory_uri() . '/css/foundation.css', array(), '' );	

	wp_register_style( 'socio-stylesheet', get_stylesheet_directory_uri() . '/custom.css', array(), '', 'all' );
	// Register the main style under root directory
	wp_register_style( 'reverie-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );

	wp_register_style( 'socio-buttons', get_template_directory_uri() . '/css/buttons.css', array(), '' );	

	
	wp_enqueue_style( 'reverie-normalize-stylesheet' );
	wp_enqueue_style( 'reverie-foundation-stylesheet' );
	wp_enqueue_style( 'reverie-stylesheet' );
	wp_enqueue_style( 'socio-stylesheet' );
	wp_enqueue_style( 'socio-buttons' );
	
}
add_action( 'wp_enqueue_scripts', 'reverie_css_style' );
?>