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
	 * Version:		   10.6.0
	 * Author:			Vince Wooll <support@jomres.net>
	 * Author URI:		https://www.jomres.net
	 * License:		   GPL-2.0+
	 * License URI:	   http://www.gnu.org/licenses/gpl-2.0.txt
	 * Text Domain:	   jomres
	 * Domain Path:	   /languages
	 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
	die;
}

	/**
	 * Jomres plugin version.
	 */
if (! defined('JOMRES_WP_PLUGIN_VERSION')) {
	define('JOMRES_WP_PLUGIN_VERSION', '10.6.0');
}

	/**
	 * Jomres plugin base path.
	 */
if (! defined('JOMRES_WP_PLUGIN_PATH')) {
	define('JOMRES_WP_PLUGIN_PATH', plugin_dir_path(__FILE__));
}

	/**
	 * Jomres init check.
	 */
if (! defined('_JOMRES_INITCHECK')) {
	define('_JOMRES_INITCHECK', 1);
}

	/**
	 * Jomres admin init check.
	 */
if (is_admin() && ! defined('_JOMRES_INITCHECK_ADMIN')) {
	define('_JOMRES_INITCHECK_ADMIN', 1);
}

	/**
	 * Set path definitions.
	 *
	 *
	 * @since	9.23.6
	 */
if (!function_exists('define_jomres_sub_dir_in_plugins_dir_as_root')) {
	function define_jomres_sub_dir_in_plugins_dir_as_root()
	{
		$jr_root = str_replace(ABSPATH, '', JOMRES_WP_PLUGIN_PATH);
		define('JOMRES_ROOT_DIRECTORY', $jr_root.DIRECTORY_SEPARATOR.'jomres');
		define('JOMRESPATH_BASE', JOMRES_WP_PLUGIN_PATH.'jomres'.DIRECTORY_SEPARATOR);
		define('JRDS', DIRECTORY_SEPARATOR);
	}
}

	/**
	 * Set path definitions.
	 *
	 *
	 * @since	10.3.1
	 */
if (!function_exists('define_jomres_off_root_dir_as_root')) {
	function define_jomres_off_root_dir_as_root()
	{
		define('JOMRES_ROOT_DIRECTORY', 'jomres');
		define('JOMRESPATH_BASE', ABSPATH.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR);
		define('JRDS', DIRECTORY_SEPARATOR);
	}
}


	/**
	 * Runs Jomres installation or update routine.
	 *
	 * Donwloads Jomres, unzips and runs the jomres install or update
	 *
	 * @since	9.9.19
	 */
if (!function_exists('run_jomres_installer')) {
	function run_jomres_installer($method = 'install')
	{

		@ignore_user_abort(true);
		@set_time_limit(0);

		require_once(ABSPATH . 'wp-admin/includes/file.php');

		WP_Filesystem();

		global $wp_filesystem;

		//get the latest jomres version download url
		$url = 'http://updates.jomres4.net/getlatest.php?includebeta=true';
		$nightly_url = 'http://updates.jomres4.net/nightly/';

		$nightly = false;

		if (WP_DEBUG) {
			$nightly = true;
		} elseif (file_exists(ABSPATH . JOMRES_ROOT_DIRECTORY . '/configuration.php')) {
			include ABSPATH . JOMRES_ROOT_DIRECTORY . '/configuration.php';

			if ($jrConfig['development_production'] == 'development') {
				$nightly = true;
			}
		}

		//download jomres core
		$response = wp_remote_get($url);

		if (strlen($response['body']) == 0) {
			jomres_notice('There was an error getting the latest Jomres version number.');

			return false;
		}

		//set source and target
		$source = get_temp_dir() . 'jomres.zip';
		$target = ABSPATH . JOMRES_ROOT_DIRECTORY;

		//check if /jomres dir is writable
		if (!wp_is_writable($target)) {
			jomres_notice('Jomres dir ' . $target . ' can`t be created or it`s not writable. Using FTP, create the directory manually then re-run the installer, many times this will solve the problem.');

			return false;
		}

		//download Jomres
		$options = array(
			'timeout' => 300,
			'stream' => true,
			'filename' => $source
		);

		if (!$nightly) {
			$response = wp_remote_get($response['body'], $options);
		} else {
			$response = wp_remote_get($nightly_url, $options);
		}

		if (is_wp_error($response)) {
			jomres_notice('There was an error downloading jomres.zip.');

			return false;
		}

		//unzip jomres files
		$unzipfile = unzip_file($source, $target);

		if (is_wp_error($unzipfile)) {
			jomres_notice('There was an error unzipping the Jomres files. Tried to unzip from '.$source.' to '.$target.'');

			return false;
		}

		//delete downloaded zip
		if (file_exists($source)) {
			unlink($source);
		}

		//install Jomres
		try {
			require_once ABSPATH . JOMRES_ROOT_DIRECTORY . '/libraries/jomres/classes/jomres_install.class.php';

			$jomres_install = new jomres_install($method);

			$messages = $jomres_install->getMessages();

			//if there are no installation errors, update jomres_wp_plugin_version in db
			if (empty($messages)) {
				update_option('jomres_wp_plugin_version', JOMRES_WP_PLUGIN_VERSION);
			}
		} catch (Exception $e) {
			$messages = $jomres_install->getMessages();

			foreach ($messages as $m) {
				jomres_notice($m);
			}

			jomres_notice($e->getMessage());

			return false;
		}

		return true;
	}
}

	/**
	 * Jomres root directory.
	 */
if (! defined('JOMRES_ROOT_DIRECTORY')) {
	if (file_exists(ABSPATH . 'jomres_root.php')) {
		require_once ABSPATH . 'jomres_root.php';
	} elseif (file_exists(ABSPATH.'jomres'.DIRECTORY_SEPARATOR.'configuration.php')) {
			define_jomres_off_root_dir_as_root();
	} else {
		if (file_exists(JOMRES_WP_PLUGIN_PATH.DIRECTORY_SEPARATOR.'jomres'.DIRECTORY_SEPARATOR.'jomres.php')) {
			define_jomres_sub_dir_in_plugins_dir_as_root();
		} else {
			if (!is_dir(JOMRES_WP_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'jomres' . DIRECTORY_SEPARATOR)) { // Let's see if we can install Jomres in the jomres subdir of wp-content, instead of it's traditional location off root
				if (mkdir(JOMRES_WP_PLUGIN_PATH . DIRECTORY_SEPARATOR . 'jomres' . DIRECTORY_SEPARATOR)) {
					define_jomres_sub_dir_in_plugins_dir_as_root();
					run_jomres_installer();
				}
			} else { // fallback for updated installations
				define('JOMRES_ROOT_DIRECTORY', 'jomres');
			}
		}
	}
}

	/**
	 * The Jomres wp plugin functions.
	 */
	require_once plugin_dir_path(__FILE__) . 'includes/functions.php';

	/**
	 * Register the activate and deactivate callbacks.
	 */
	register_activation_hook(__FILE__, 'activate_jomres');
	register_deactivation_hook(__FILE__, 'deactivate_jomres');

	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	require_once plugin_dir_path(__FILE__) . 'includes/jomres.php';

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
