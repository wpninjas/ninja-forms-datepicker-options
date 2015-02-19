// Plugin Folder URL

// define( 'CUSTOM_NF_DATE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

function nf_datepicker_options( $form_id ) {	if ($form_id == 9) {
		wp_enqueue_script( 'nf-custom-datepicker-dates' , CUSTOM_NF_DATE_PLUGIN_URL . 'js/cal.js' , array( 'ninja-forms-display' ) ); 	}
}

add_action( 'ninja_forms_display_js' , 'nf_datepicker_options' );
