<?php //informvisitors Admin Menu

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// It will create a sublevel menu for informvisitors plugin under settings
function informvisitors_add_sublevel_menu() {
	
	
	add_submenu_page(
		'options-general.php',
		'Informvisitors',
		'Informvisitors',
		'manage_options',
		'informvisitors',
		'informvisitors_display_settings_page'
	);
	
}

// gets triggered when the client is on the admin page of the wordpress website
add_action( 'admin_menu', 'informvisitors_add_sublevel_menu' );
