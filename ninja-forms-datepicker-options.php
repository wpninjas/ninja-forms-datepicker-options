<?php
/*
Plugin Name: Ninja Forms Add Datepicker Options
Plugin URI: http://wpninjas.net
Description: This plugin allows you to add File Upload links automatically to post creations
Version: 1.0
Author: WPN Zach
Author URI: http://wpninjas.net
*/

// Plugin Folder URL
//
// define( 'CUSTOM_NF_DATE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
//
// function nf_datepicker_options( $form_id ) {
// 	if ($form_id == 9) {
// 		wp_enqueue_script( 'nf-custom-datepicker-dates' , CUSTOM_NF_DATE_PLUGIN_URL . 'js/cal.js' , array( 'ninja-forms-display' ) );
// 	}
// }
//
// add_action( 'ninja_forms_display_js' , 'nf_datepicker_options' );

//clean_url('http://www.google.com');


function nf_datepicker_modify_script( $args ){
	$args['minDate'] = "0";
	$args['changeMonth'] = 1;
	$args['changeYear'] = 1;
	return $args;
}

add_filter( 'ninja_forms_forms_display_datepicker_args', 'nf_datepicker_modify_script' );
