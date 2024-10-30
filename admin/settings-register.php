<?php //informvisitors Plugin register settings

// exit if file is called directly
if (!defined('ABSPATH')) {

	exit;
}

// register plugin settings
function informvisitors_register_settings()
{



	register_setting(
		'informvisitors_options',
		'informvisitors_options',
		'informvisitors_callback_validate_options'
	);

	//adds plugin settings section 
	add_settings_section(
		'informvisitors_section_admin',
		'Enter informvisitors Username',
		'informvisitors_callback_section_admin',
		'informvisitors'
	);

	// adds an input text field to input the informvisitors username
	add_settings_field(
		'informvisitors_username',
		'Informvisitors username',
		'informvisitors_callback_field_text',
		'informvisitors',
		'informvisitors_section_admin',
		['id' => 'informvisitors_username', 'label' => 'Informvisitors username']
	);


	// adds an input text field to input whether own service worker file is present
	add_settings_field(
		'informvisitors_hasServiceWorker',
		'Has Own Service-Worker',
		'informvisitors_callback_field_checkbox',
		'informvisitors',
		'informvisitors_section_admin',
		['id' => 'informvisitors_hasServiceWorker', 'label' => 'Has Own Service-Worker']
	);


	// adds an input text field to input whether service-worker.js file should be inserted in root folder of website
	add_settings_field(
		'informvisitors_createServiceWorker',
		'Insert service-worker.js in root folder',
		'informvisitors_callback_field_checkbox',
		'informvisitors',
		'informvisitors_section_admin',
		['id' => 'informvisitors_createServiceWorker', 'label' => 'Insert service-worker.js in root folder']
	);


	// adds an input text field to input whether own manifest.json file is present
	add_settings_field(
		'informvisitors_hasManifestJson',
		'Has Own manifest.json',
		'informvisitors_callback_field_checkbox',
		'informvisitors',
		'informvisitors_section_admin',
		['id' => 'informvisitors_hasManifestJson', 'label' => 'Has Own manifest.json']
	);


	// adds an input text field to input whether manifest.json file should be inserted in root folder of website
	add_settings_field(
		'informvisitors_createManifestJson',
		'Insert manifest.json in root folder',
		'informvisitors_callback_field_checkbox',
		'informvisitors',
		'informvisitors_section_admin',
		['id' => 'informvisitors_createManifestJson', 'label' => 'Insert manifest.json in root folder']
	);
}
//Calling action hook to register settings for plugin
add_action('admin_init', 'informvisitors_register_settings');
