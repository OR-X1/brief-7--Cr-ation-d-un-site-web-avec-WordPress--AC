<?php

// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------

function renden_magazine_thinkup_child_frontscripts() {

	wp_enqueue_style( 'thinkup-style', get_template_directory_uri() . '/style.css', array( 'thinkup-bootstrap' ) );
	wp_enqueue_style( 'renden-magazine-thinkup-style', get_stylesheet_uri(), array( 'thinkup-style' ), wp_get_theme()->get('Version') );

	// Add theme scripts
	wp_enqueue_script( 'renden-magazine-thinkup-frontend', get_stylesheet_directory_uri() . '/lib/scripts/main-frontend.js', array( 'jquery', 'thinkup-frontend' ), wp_get_theme()->get('Version'), 'true' );

}
add_action( 'wp_enqueue_scripts', 'renden_magazine_thinkup_child_frontscripts' );


// ----------------------------------------------------------------------------------
//	Assign default layout options
// ----------------------------------------------------------------------------------

function renden_magazine_thinkup_reduxvariables() { 

	$GLOBALS['thinkup_blog_style']         = 'option2';
	$GLOBALS['thinkup_blog_style2layout']  = 'option2';

}
add_action( 'thinkup_hook_header', 'renden_magazine_thinkup_reduxvariables', 11 );


// ----------------------------------------------------------------------------------
//	Update Options Array With Child Theme Color Values
// ----------------------------------------------------------------------------------

// Add child theme color values to options array
function renden_magazine_thinkup_updateoption_child_settings() {

	// Set theme name combinations
	$name_theme_upper = 'Renden';
	$name_theme_lower = strtolower( $name_theme_upper );

	// Set possible options names
	$name_options_free  = 'thinkup_redux_variables';
	$name_child_color   = $name_theme_lower . '_thinkup_child_color_magazine';

	// Get options values (theme options)
	$options_free = get_option( $name_options_free );

	// Get child color values
	$options_child_settings = get_option( $name_child_color );

	if( ! empty( $options_free ) ) {

		// Only set child color values if not already set 
		if ( $options_child_settings != 1 ) {

			$options_free['thinkup_styles_skinswitch']  = '1';
			$options_free['thinkup_styles_skin']        = 'magazine';
			$options_free['thinkup_blog_style']         = 'option2';
			$options_free['thinkup_blog_style2layout']  = 'option2';

			// Add child color to theme options array
			update_option( $name_options_free, $options_free );

		}
	}

	// Set the child color flag
	update_option( $options_child_settings, 1 );

}
add_action( 'init', 'renden_magazine_thinkup_updateoption_child_settings', 999 );