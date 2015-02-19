<?php
/*
Plugin Name: Ninja Forms Add Datepicker Options
Plugin URI: http://wpninjas.net
Description: This plugin allows you to add jQuery UI options to the datepicker using Ninja Forms
Version: 1.0
Author: WPN Zach
Author URI: http://wpninjas.net
*/

function nf_datepicker_modify_script( $args ){
	//for a list of arguments which can be used here, see the options here http://api.jqueryui.com/datepicker/
	$args['minDate'] = "0";
	$args['changeMonth'] = 1;
	$args['changeYear'] = 1;
	return $args;
}

add_filter( 'ninja_forms_forms_display_datepicker_args', 'nf_datepicker_modify_script' );
