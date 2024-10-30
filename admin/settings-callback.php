<?php //informvisitors PLugin callback settings

// exit if file is called directly
if (!defined('ABSPATH')) {

	exit;
}



// callback: text field
function informvisitors_callback_field_text($args)
{

	$options = get_option('informvisitors_options', informvisitors_options_default());
	//id and label exists in args,then they assigned,else empty string is assigned
	$id    = isset($args['id'])    ? $args['id']    : '';
	$label = isset($args['label']) ? $args['label'] : '';
	//if value id exists in options,it is santized(blank spaces,tabs,whitespaces are removed,tags are stripped)
	$value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';

	echo '<input id="informvisitors_options_' . $id . '" name="informvisitors_options[' . $id . ']" type="text" size="40" value="' . $value . '"><br />';
	echo '<label for="informvisitors_options_' . $id . '">' . $label . '</label>';
}


// callback: text field
function informvisitors_callback_field_checkbox($args)
{

	$options = get_option('informvisitors_options', informvisitors_options_default());
	//id and label exists in args,then they assigned,else empty string is assigned
	$id    = isset($args['id'])    ? $args['id']    : '';
	$label = isset($args['label']) ? $args['label'] : '';

	//if value id exists in options,it is santized(blank spaces,tabs,whitespaces are removed,tags are stripped)
	if (isset($options[$id]) && $options[$id] == '1') {
		$value = '1';
	} else {
		$value = '-1';
	}


	echo '<input id="informvisitors_options_' . $id . '" name="informvisitors_options[' . $id . ']" type="checkbox" value="1" ' . checked(1, $value, false) . ' ><br />';
	echo '<label for="informvisitors_options_' . $id . '">' . $label . '</label>';
}






// callback: admin section
function informvisitors_callback_section_admin()
{
	echo '<p>You need to have a <a href="https://www.informvisitors.com/" target="_blank"> Informvisitors </a> account in order to use this plugin. This plugin inserts the neccessary code into your Wordpress site automatically. In order to use the plugin, you need to enter your informvisitors username/hotsname as mentioned in dashboard. You will get a username/hostname, once you register at informvisitors. </p>. Click <a href="https://www.informvisitors.com/" target="_blank"> HERE </a> to register';
}
