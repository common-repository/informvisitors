<?php //informvisitors Validate Setting




// exit if file is called directly
if (!defined('ABSPATH')) {

	exit;
}



// callback: validate options
function informvisitors_callback_validate_options($input)
{


	// sanitise informvisitors username
	if (isset($input['informvisitors_username'])) {

		$input['informvisitors_username'] = sanitize_text_field($input['informvisitors_username']);
	} else {
		$input['informvisitors_username'] = '';
	}

	// sanitise informvisitors hasServiceWorker
	if (isset($input['informvisitors_hasServiceWorker'])  && $input['informvisitors_hasServiceWorker'] == '1') {

		$input['informvisitors_hasServiceWorker'] = '1';
	} else {
		$input['informvisitors_hasServiceWorker'] = '-1';
	}


	// sanitise informvisitors createServiceWorker
	if (isset($input['informvisitors_createServiceWorker'])  && $input['informvisitors_createServiceWorker'] == '1') {

		$input['informvisitors_createServiceWorker'] = '1';
	} else {
		$input['informvisitors_createServiceWorker'] = '-1';
	}

	// sanitise informvisitors hasManifestJson
	if (isset($input['informvisitors_hasManifestJson'])  && $input['informvisitors_hasManifestJson'] == '1') {

		$input['informvisitors_hasManifestJson'] = '1';
	} else {
		$input['informvisitors_hasManifestJson'] = '-1';
	}

	// sanitise informvisitors createManifestJson
	if (isset($input['informvisitors_createManifestJson'])  && $input['informvisitors_createManifestJson'] == '1') {

		$input['informvisitors_createManifestJson'] = '1';
	} else {
		$input['informvisitors_createManifestJson'] = '-1';
	}




	return $input;
}
