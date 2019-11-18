<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link	   https://www.jomres.net
 * @since	  9.9.19
 *
 * @package	Jomres
 * @subpackage Jomres/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version.
 *
 * @package	Jomres
 * @subpackage Jomres/admin
 * @author	 Vince Wooll <support@jomres.net>
 */
class Jomres_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since	9.9.19
	 * @access   private
	 * @var	  string	$plugin_name	The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since	9.9.19
	 * @access   private
	 * @var	  string	$version	The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since	9.9.19
	 * @param	  string	$plugin_name	   The name of this plugin.
	 * @param	  string	$version	The version of this plugin.
	 */
	public function __construct( $plugin_name, $version, $loader ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
	
	/**
	 * Register the Jomres admin area menu.
	 *
	 * @since	9.9.19
	 */
	public function register_jomres_admin_menu() {
		
		add_menu_page( 'Jomres admin', 'Jomres', 'manage_options', 'jomres/jomres.php', '', '', 6 );
	
	}
	
	/**
	 * Trigger Jomres admin cpanel.
	 *
	 * @since	9.9.19
	 */
	public function admin_trigger_jomres() {
	
		$wp_jomres = WP_Jomres::getInstance();
		
		if ( $wp_jomres->get_content() == '' ) {
			//check if we are on the jomres admin page
			if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'jomres/jomres.php' ) {
				ob_start();

				trigger_jomres();

				add_action('admin_enqueue_scripts', array($wp_jomres, 'add_jomres_js_css'), 9999);

				$wp_jomres->set_content( ob_get_contents() );

				ob_end_clean();
			}
		}

		return true;

	}
	
	
	/**
	 * 
	 *
	 *
	 */

	public function jomres_wp_ajax() {
	
		trigger_jomres();

		die();  // Required for a proper Wordpress AJAX result
	
	}

}
