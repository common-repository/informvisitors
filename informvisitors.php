<?php
/*
Plugin Name:       informvisitors 
Plugin URI:        https://informvisitors.com/
Description:       informvisitors lets you send push notifications from your desktop or mobile website to your users. Simply enable the plugin and start collecting subscribers for your informvisitors account. Visit <a href="https://informvisitors.com/">informvisitors</a> for more details.
Author:            Buyhatke Internet Pvt Ltd
Author URI:        https://informvisitors.com
Tags:              Chrome Push Notifications, Firefox Push Notifications, Push Notifications, Service-workers, FCM
Version:           2.7
Stable tag:        2.7
Requires at least: 4.5 or Higher
Tested up to:      5.7.1
Text Domain:       informvisitors
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt  
informvisitorssc1.jpg
informvisitorssc2.jpg
informvisitorssc3.jpg
informvisitors.php

This relies on the actions being present in the themes header.php and footer.php
* header.php code before the closing </head> tag
*   wp_head();
*
*/





// exit if file is called directly
if (!defined('ABSPATH')) {

  exit;
}

//If in admin mode,go to specified directories and add them here
if (is_admin()) {
  require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-callback.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-validate.php';
}



// default plugin options
function informvisitors_options_default()
{

  return array(
    'informvisitors_username'             => '',
    'informvisitors_hasServiceWorker'     => '-1',
    'informvisitors_hasManifestJson'      => '-1',
    'informvisitors_createServiceWorker'  => '-1',
    'informvisitors_createManifestJson'   => '-1'
  );
}



//various action hooks called to add codes added by  call back function(second parameter is for callback functions)
add_action('wp_head', 'informvisitors_insert_javascript');
// add_action( 'admin_notices','informvisitors_warn_nosettings');



// default plugin options


//Inserts the  required informvisitors javascript  code
function informvisitors_insert_javascript()
{
  /* $informvisitors_header_script = '
  <!-- Start informvisitors Code -->
  <script type="text/javascript" id="infv_main" values="informvisitors_username" src="https://www.informvisitors.com/resources/scripts/3.0.0/js/iv.js" ></script>
  <!-- End informvisitors Code -->
  '; */

  $informvisitors_header_script = '
    <!-- Start informvisitors Code -->
    <script>
    const loadInfvScript = () => {
        if (window) {
        element = document.createElement("script");
        element.setAttribute("type", "text/javascript");
        element.setAttribute("values", "informvisitors_username");
        element.setAttribute("id", "infv_main");
        element.setAttribute("src", "https://www.informvisitors.com/resources/scripts/3.0.0/js/iv.js?rand=" + Math.floor(Math.random() * 100000));
        if (!document.getElementById("infv_main")) {
            document.getElementsByTagName("head")[0].appendChild(element);
            }
        }
    }
    loadInfvScript();
    </script>
    <!-- End informvisitors Code -->
    ';
  $options = get_option('informvisitors_options', informvisitors_options_default()); //gets informvisitors_options info from database
  $informvisitors_user_name = "";
  if (isset($options['informvisitors_username'])) //checks if informvisitors_username exits in options
  {
    $informvisitors_user_name = $options['informvisitors_username'];
  }
  $informvisitors_header_script = str_replace('informvisitors_username', $informvisitors_user_name, $informvisitors_header_script); //replaces values variable in informvisitors_header_script from default value to user via provided value
  echo $informvisitors_header_script;
}





//------------------------------------------------------------------------//
//---Page Output Functions------------------------------------------------//
//------------------------------------------------------------------------//
// options page


function informvisitors_warn_nosettings()
{
  if (!is_admin())
    return;

  $informvisitors_option = get_option("informvisitors_uname");
  if (!$informvisitors_option) {
    echo "<div class='updated fade'><p><strong>informvisitors is almost ready.</strong> You must <a target=\"_blank\" href=\"https://informvisitors.com\">enter your informvisitors username</a> for it to start working. Once you register at informvisitors, you can set your username at Setting tab of Wordpress</p></div>";
  }
}
