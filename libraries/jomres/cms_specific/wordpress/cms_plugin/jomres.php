<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link			  https://www.jomres.net
 * @since			 9.9.19
 * @package Jomres\Core\CMS_Specific
 *
 * @wordpress-plugin
 * Plugin Name:	   Jomres
 * Plugin URI:		https://www.jomres.net
 * Description:	   The complete online booking and property management solution for WordPress.
 * Version:		   9.22.0
 * Author:			Vince Wooll <support@jomres.net>
 * Author URI:		https://www.jomres.net
 * License:		   GPL-2.0+
 * License URI:	   http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:	   jomres
 * Domain Path:	   /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Jomres plugin version.
 */
if ( ! defined( 'JOMRES_WP_PLUGIN_VERSION' ) ) {
	define( 'JOMRES_WP_PLUGIN_VERSION', '9.22.0' );
}

/**
 * Jomres plugin base path.
 */
if ( ! defined( 'JOMRES_WP_PLUGIN_PATH' ) ) {
	define( 'JOMRES_WP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

/**
 * Jomres init check.
 */
if ( ! defined( '_JOMRES_INITCHECK' ) ) {
	define( '_JOMRES_INITCHECK', 1 );
}

/**
 * Jomres admin init check.
 */
if ( is_admin() && ! defined( '_JOMRES_INITCHECK_ADMIN' ) ) {
	define( '_JOMRES_INITCHECK_ADMIN', 1 );
}


/**
 * Jomres root directory.
 */
if ( ! defined( 'JOMRES_ROOT_DIRECTORY' ) ) {
	if ( file_exists( ABSPATH . 'jomres_root.php' ) ) {
		require_once ABSPATH . 'jomres_root.php';
	} else {
		if ( file_exists(JOMRES_WP_PLUGIN_PATH.DIRECTORY_SEPARATOR.'jomres'.DIRECTORY_SEPARATOR.'jomres.php') ) {
			define_jomres_sub_dir_in_plugins_dir_as_root();
		} else {
			if ( !is_dir(JOMRES_WP_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'jomres' . DIRECTORY_SEPARATOR) ) { // Let's see if we can install Jomres in the jomres subdir of wp-content, instead of it's traditional location off root
				if (mkdir(JOMRES_WP_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'jomres' . DIRECTORY_SEPARATOR)) {
					define_jomres_sub_dir_in_plugins_dir_as_root();
					run_jomres_installer();
				}
			} else { // fallback for updated installations
				define( 'JOMRES_ROOT_DIRECTORY', 'jomres' );
			}
		}
	}
}

/**
 * Set path definitions.
 *
 *
 * @since	9.22.0
 */
if (!function_exists('define_jomres_sub_dir_in_plugins_dir_as_root')) {
	function define_jomres_sub_dir_in_plugins_dir_as_root()
	{
		$jr_root = str_replace( ABSPATH , '' ,  JOMRES_WP_PLUGIN_PATH );
		define( 'JOMRES_ROOT_DIRECTORY', $jr_root.DIRECTORY_SEPARATOR.'jomres' );
		define('JOMRESPATH_BASE', JOMRES_WP_PLUGIN_PATH.'jomres'.DIRECTORY_SEPARATOR);
		define('JRDS', DIRECTORY_SEPARATOR );
	}
}

/**
 * The Jomres wp plugin functions.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/functions.php';

/**
 * Register the activate and deactivate callbacks.
 */
register_activation_hook( __FILE__, 'activate_jomres' );
register_deactivation_hook( __FILE__, 'deactivate_jomres' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/jomres.php';

/**
 * Begins Jomres execution.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since	9.9.19
 */
run_jomres();
