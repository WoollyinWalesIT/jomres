<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link	   https://www.jomres.net
 * @since	  9.9.19
 *
 * @package Jomres\Core\CMS_Specific
 */



// If uninstall not called from WordPress, then exit.
if (! defined('ABSPATH') || ! defined('WP_UNINSTALL_PLUGIN')) {
	die;
}

//check if user is admin
if (! current_user_can('activate_plugins')) {
	return;
}

//check admin referrer. This breaks ajax plugin uninstall
//check_admin_referer( 'bulk-plugins' );

//uninstall Jomres
if (! defined('_JOMRES_INITCHECK')) {
	define('_JOMRES_INITCHECK', 1);
}

if (file_exists(ABSPATH . 'jomres_root.php')) {
	require_once ABSPATH . 'jomres_root.php';
} else {
	if (!defined('JOMRES_ROOT_DIRECTORY')) {
		define('JOMRES_ROOT_DIRECTORY', 'jomres');
	}
}

// Important: Check if the file is the one
// that was registered during the uninstall hook.
if (WP_UNINSTALL_PLUGIN != 'jomres/jomres.php') {
	return;
}

if (! file_exists(ABSPATH . JOMRES_ROOT_DIRECTORY . '/integration.php')) {
	return;
}

if (! file_exists(ABSPATH . JOMRES_ROOT_DIRECTORY . '/libraries/jomres/classes/jomres_install.class.php')) {
	return;
}

try {
	require_once ABSPATH . JOMRES_ROOT_DIRECTORY . '/libraries/jomres/classes/jomres_install.class.php';

	$jomres_install = new jomres_install('uninstall');

	delete_option('jomres_wp_plugin_version');
} catch (Exception $e) {
	die('Something went wrong when uninstalling Jomres.');
	
	return false;
}
