<?php //My Plugin Settings 

// exit if file is called directly
if (!defined('ABSPATH')) {

	exit;
}


// Function to insert service-worker.js and manifest.json files
function informvisitors_insert_delete_sw_files()
{

	$options = get_option('informvisitors_options', informvisitors_options_default()); //gets informvisitors_options info from database

	$username = "";
	if (isset($options['informvisitors_username'])) //checks if informvisitors_username exits in options
	{
		$username = $options['informvisitors_username'];
	}

	$hasServiceWorker = "-1";
	if (isset($options['informvisitors_hasServiceWorker'])) //checks if informvisitors_username exits in options
	{
		$hasServiceWorker = $options['informvisitors_hasServiceWorker'];
	}


	$createServiceWorker = "-1";
	if (isset($options['informvisitors_createServiceWorker'])) //checks if informvisitors_username exits in options
	{
		$createServiceWorker = $options['informvisitors_createServiceWorker'];
	}

	$hasManifestJson = "-1";
	if (isset($options['informvisitors_hasManifestJson'])) //checks if informvisitors_username exits in options
	{
		$hasManifestJson = $options['informvisitors_hasManifestJson'];
	}

	$createManifestJson = "-1";
	if (isset($options['informvisitors_createManifestJson'])) //checks if informvisitors_username exits in options
	{
		$createManifestJson = $options['informvisitors_createManifestJson'];
	}



	$script = 'importScripts("https://' . $username . '.informvisitors.com/service-worker.js");';
	$manifest = '{
		"name": "Informvisitors Notifications",
		"short_name": "Informvisitors Notifications",
		"gcm_sender_id": "103953800507",
		"gcm_user_visible_only": true,
		"start_url": "/",
		"display": "standalone"
	  }';

	$root = plugin_dir_path(__FILE__) . "../../../../";
	$service_worker_root = $root . "service-worker.js";
	$manifest_root = $root . "manifest.json";

	$manifest_insert = '{
	"gcm_sender_id": "103953800507",
	"gcm_user_visible_only": true
    }';

	if (trim($username) == '') {
		echo "<br><b>NOTE : </b>Informvisitors Username is empty.";
		return;
	}

	if ($hasServiceWorker == '1') {
		echo "<br><b>NOTE : </b>Your website already has a service worker.";
?>
		<span>Please Copy & Paste the following code in your service worker file.</span>
		<br>
		<div class="infv_code_snippet">
			<?php echo $script; ?>
		</div>

		<?php
	} else if ($createServiceWorker == '1') {
		if (file_put_contents($service_worker_root, $script)) {
			echo "<br>Successfully created/updated service-worker.js file in your root folder with following content";
		?>
			<br>
			<div class="infv_code_snippet">
				<?php echo $script; ?>
			</div>

		<?php
		} else {
			echo "<br>Failed to create service-worker.js file in your root folder. May be an issue with file creation permission";
		}
	} else {
		echo "<br>Please check <b>Insert service-worker.js in root folder</b> to create the service-worker.js in root folder";
	}


	if ($hasManifestJson == "1") {
		echo "<br><b>NOTE : </b>Your website already has manifest.json";
		?>
		<span>Please Copy & Paste the following key-value pairs in your manifest.json file.</span>
		<br>
		<div class="infv_code_snippet">
			<?php echo $manifest_insert; ?>
		</div>

		<?php
	} else if ($createManifestJson == "1") {

		if (file_put_contents($manifest_root, $manifest)) {
			echo "<br>Successfully created/updated manifest.json file in your root folder with the following json";
		?>
			<br>
			<div class="infv_code_snippet">
				<?php echo $manifest; ?>
			</div>

	<?php
		} else {
			echo "<br>Failed to create manifest.json file in your root folder. May be an issue with file creation permission";
		}
	} else {
		echo "<br>Please check <b>Insert manifest.json in root folder</b> to create the manifest.json in root folder";
	}
}


// display the plugin settings page
function informvisitors_display_settings_page()
{

	// check if user is allowed access to manage options
	if (!current_user_can('manage_options')) return;

	?>
	<style>
		.infv_code_snippet {
			background-color: #d8e4e8;
			margin-top: 10px;
			margin-left: 40px;
			margin-right: 40px;
			padding: 20px;
			border-radius: 15px;
			border: 2px solid #273c42;
		}
	</style>

	<div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
		<form action="options.php" method="post">

			<?php

			// output security fields
			settings_fields('informvisitors_options');

			// output setting sections
			do_settings_sections('informvisitors');

			//Echoes Submit button to wordpress admin page
			submit_button();
			?>

		</form>
	</div>

	<?php

	informvisitors_insert_delete_sw_files();

	?>
	<p>
		<b>Note : </b> For the rest of the configurations to active push notification services on wordpress please visit <a href="https://www.informvisitors.com/getCode.php" target="_blank"> Informvisitors Dashboard </a>
	</p>
	<br><br>
<?php
}
