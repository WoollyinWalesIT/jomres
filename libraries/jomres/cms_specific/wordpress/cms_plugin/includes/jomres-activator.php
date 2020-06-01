<?php

/**
 * Fired during plugin activation
 *
 * @link	   https://www.jomres.net
 * @since	  9.9.19
 *
 * @package Jomres\Core\CMS_Specific
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since	  9.9.19
 *
 * @author	 Vince Wooll <support@jomres.net>
 */
class Jomres_Activator {

	/**
	 * Performs Jomres installation/update.
	 *
	 * Download Jomres, unzip files, move files to /jomres dir and execute the Jomres installer.
	 *
	 * @since	9.9.19
	 */
	public static function activate() {
		if ( version_compare( PHP_VERSION, '7.1', '<' ) )
		{
			exit( sprintf( 'Jomres requires PHP 7.1 or higher. You’re still on %s.', PHP_VERSION ) );
		}

		if ( !is_dir(ABSPATH.'jomres') ) {
			if (!mkdir(ABSPATH.'jomres' )) {
				exit( sprintf( 'Unable to create the directory '.ABSPATH.'jomres'.' automatically. <br/> 
					Please FTP into your site and create it, then activate the plugin.') );
			}
		}
		self::maybe_install_or_update_jomres();
		self::maybe_add_default_jomres_page();
	
	}
	
	/**
	 * Install or update Jomres.
	 *
	 * This installs or updates Jomres on Jomres WP plugin activation.
	 *
	 * @since	9.9.19
	 */
	private static function maybe_install_or_update_jomres() {
		
		return jomres_is_installed_and_updated();
		
	}
	
	/**
	 * Creates the Jomres default Page.
	 *
	 * Default Jomres Page includes the Jomres shortcode formatted like [jomres:xx-XX].
	 * xx-XX is the language code, for example: en-GB.
	 *
	 * @since	9.9.19
	 */
	private static function maybe_add_default_jomres_page() {
		
		global $wpdb;

		$currentBlogLang = str_replace( '_', '-', get_locale() );
		$keyword = '[jomres:' . $currentBlogLang . ']';

		$result = $wpdb->get_results( "SELECT `ID` FROM {$wpdb->posts} WHERE LOWER( `post_content` ) LIKE '%" . strtolower( $keyword ) . "%' AND `post_status` = 'publish' AND `post_type` = 'page' LIMIT 1", OBJECT );

		if ( empty( $result ) ) {
			$postarr = array(
				'comment_status' => 'closed',
				'ping_status' => 'closed',
				'post_title' => 'Bookings',
				'post_content' => $keyword,
				'post_status' => 'publish',
				'post_type' => 'page',
				);

			wp_insert_post( $postarr );
		}
		
		return true;
	
	}

}
