<?php
/*
Plugin Name: Ninja Forms Add Datepicker Options
Plugin URI: http://wpninjas.net
Description: This plugin allows you to add File Upload links automatically to post creations
Version: 1.0
Author: WPN Zach
Author URI: http://wpninjas.net
*/

function nf_datepicker_modify_script( $args ){
	$args['minDate'] = "0";
	$args['changeMonth'] = 1;
	$args['changeYear'] = 1;
	return $args;
}

add_filter( 'ninja_forms_forms_display_datepicker_args', 'nf_datepicker_modify_script' );
