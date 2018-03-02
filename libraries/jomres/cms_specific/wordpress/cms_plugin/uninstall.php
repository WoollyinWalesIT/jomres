<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       https://www.jomres.net
 * @since      9.9.19
 *
 * @package    Jomres
 */

// If uninstall not called from WordPress, then exit.
if (!defined('ABSPATH') || !defined('WP_UNINSTALL_PLUGIN')) {
	die;
}

//check if user is admin
if ( ! current_user_can( 'activate_plugins' ) ) {
	return;
}

//check admin referrer. This breaks ajax plugin uninstall
//check_admin_referer( 'bulk-plugins' );

// Important: Check if the file is the one
// that was registered during the uninstall hook.
if ( __FILE__ != WP_UNINSTALL_PLUGIN ) {
	return;
}

//uninstall Jomres
define( '_JOMRES_INITCHECK', 1 );

if (file_exists(ABSPATH.'jomres_root.php')) {
	require_once ABSPATH.'jomres_root.php';
} else {
	return;
}

if (file_exists(ABSPATH.JOMRES_ROOT_DIRECTORY.'/integration.php')) {
	require_once ABSPATH.JOMRES_ROOT_DIRECTORY.'/integration.php';
} else {
	return;
}

jr_import('jomres_install');

$jomres_install = new jomres_install('uninstall');
