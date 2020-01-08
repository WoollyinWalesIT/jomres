<?php

/**
 * The Jomres public-facing functionality.
 *
 * Defines the plugin name, version.
 *
 * @package Jomres\Core\CMS_Specific
 *
 * @author	 Vince Wooll <support@jomres.net>
 */
class Jomres_Public {

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
	 * @param	  string	$plugin_name	   The name of the plugin.
	 * @param	  string	$version	The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
	
	/**
	 * Trigger Jomres frontend.
	 *
	 * @since	9.9.19
	 */
	public function frontend_trigger_jomres() {
	
		global $post;
		
		$wp_jomres = WP_Jomres::getInstance();

		$language = str_replace( '_', '-', get_locale() );

		if ( $wp_jomres->get_content() == '' && is_object( $post ) ) {
			// Check if we are on a [jomres:xx-XX] post
			// Shortcode [jomres:xx-XX] xx-XX is the language code
			if ( strstr( strtolower( $post->post_content ), '[jomres:'.strtolower($language).']' ) ) {
				ob_start();

				// Disable the admin toolbar, if we are using jq ui then the menu at the top is the only position that works on a default WP installation.
				if ( isset( $_REQUEST[ 'tmpl' ] ) && $_REQUEST[ 'tmpl' ] == 'jomres' ) {
					add_filter( 'show_admin_bar', '__return_false' );
				}

				trigger_jomres();

				add_action('wp_enqueue_scripts', array($wp_jomres, 'add_jomres_js_css'), 9999);

				$wp_jomres->set_content( ob_get_contents() );

				ob_end_clean();
			}

		}

		return true;

	}
	
	/**
	 * Wraps Jomres output in the asamodule_search_results div.
	 *
	 * @since	9.9.19
	 */
	public function asamodule_search_results( $content ) {
		
		global $post;
		
		$wp_jomres = WP_Jomres::getInstance();

		$language = str_replace('_', '-', get_locale());

		if ( is_object( $post ) && strstr( strtolower( $post->post_content ), '[jomres:' . strtolower( $language ) . ']' ) ) {
			if ( $wp_jomres->get_content() != '' ) {
				$content = '<div id="asamodule_search_results">' . $wp_jomres->get_content() . '</div>';
			} else {
				$content = '<div id="asamodule_search_results">' . $content . '</div>';
			}
		} else {
			if ( ! strstr( $content, 'asamodule_search_results' ) ) {
				$content = '<div id="asamodule_search_results">' . $content . '</div>';
			}
		}

		return $content;
		
	}
	
	/**
	 * Disables all widgets.
	 *
	 * @since	9.9.19
	 */
	public function disable_all_widgets( $sidebars_widgets ) {
	
		foreach ( $sidebars_widgets as $k => $v ) {
			$sidebars_widgets[$k] = array( false );
		}

		return $sidebars_widgets;

	}
	
	/**
	 * Sets Jomres pages meta title.
	 *
	 * @since	9.9.19
	 */
	public function set_jomres_meta_title( $title, $id = null ) {
		
		$wp_jomres = WP_Jomres::getInstance();
		
		$meta_title = $wp_jomres->get_meta_title();

		if ( $meta_title != '' ) {
			$title = ucfirst( trim( $meta_title ) ) . ' ';
		}

		return $title;
		
	}
	
	/**
	 * Sets Jomres pages meta title.
	 *
	 * @since	9.9.19
	 */
	public function jomres_fullscreen_view( $template ) {
		
		$template = ABSPATH . JOMRES_ROOT_DIRECTORY . '/libraries/fullscreen_view/wp-fullscreen.php';

		return $template;
	
	}
	
	/**
	 * Prevents redirects to permalink urls.
	 *
	 * @since	9.9.19
	 */
	public function payments_redirect_canonical( $redirect_url, $requested_url ) {
		
		if (
			isset( $_REQUEST['task'] ) &&
			(
				$_REQUEST['task'] == 'completebk' ||
				$_REQUEST['task'] == 'processpayment' ||
				$_REQUEST['task'] == 'confirmbooking' ||
				$_REQUEST['task'] == 'invoice_payment_receive' ||
				$_REQUEST['task'] == 'stripe_connect_return'
			)
		) {
			return $requested_url;
		} else {
			return $redirect_url;
		}
	
	}

}
