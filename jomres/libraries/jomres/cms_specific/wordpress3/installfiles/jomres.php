<?php
/**
 * @package Jomres
 * @version 8
 */
/*
Plugin Name: Jomres
Plugin URI: http://www.jomres.net
Description: The best Joomla hotel booking system comes to Wordpress!
Author: Vince Wooll
Version: 8
Author URI: http://www.jomres.net/
*/

if ( ! class_exists( 'wp_jomres' ) ) 
	{
	class wp_jomres
		{
		private static $configInstance = false;
		
		public function __construct()
			{
			$this->js = array ();
			$this->css = array ();
			$this->contents = '';
			
			$this->_init();
			}
	
		public static function getInstance()
			{
			if ( !self::$configInstance )
				{
				self::$configInstance = new wp_jomres();
				}
	
			return self::$configInstance;
			}
		
		function _init()
			{
			add_action( 'admin_menu', array($this,'register_my_custom_menu_page') );
			
			add_action('init', array($this,'jomres_wp_init_session'), 1);
			add_action('wp', array($this,'frontend_trigger_jomres'), 1);
				
			if ($_GET['page'] == "jomres/jomres.php" )
				{
				add_action('init', array($this,'admin_trigger_jomres'), 1);
				}
				
			add_action('wp_logout',	array($this,'jomres_wp_end_session'));
			add_action('wp_login', array($this,'jomres_wp_end_session'));

			add_shortcode( 'jomres', array($this,'frontend_trigger_jomres') );
				
			add_filter('the_content', array($this,'asamodule_search_results') );
				
			//wp_deregister_script( 'jquery' );
			add_action('wp_enqueue_scripts', array($this,'add_jomres_js_css'));
		
			if ($_GET['page'] == "jomres/jomres.php" )
				{
				add_action('admin_enqueue_scripts', array($this,'add_jomres_js_css'));
				}

			// Disable the admin toolbar, if we are using jq ui then the menu at the top is the only position that works on a default WP installation.
			add_filter( 'show_admin_bar', '__return_false' );

			add_action( 'wp_ajax_nopriv_'.$_REQUEST['action'], array($this,'jomres_wp_ajax') );
			add_action( 'wp_ajax_'.$_REQUEST['action'], array($this,'jomres_wp_ajax') );
			add_action( 'wp_ajax_nopriv_'.$_REQUEST['page'], array($this,'jomres_wp_ajax') );
			add_action( 'wp_ajax_'.$_REQUEST['page'], array($this,'jomres_wp_ajax') );
			
			// If popup is in $_REQUEST we'll disable all widgets, but leave the keys intact so that you don't get the "please activate a widget" message
			add_filter( 'sidebars_widgets', array(&$this,'disable_all_widgets') );
			}
		

			
		function asamodule_search_results($content) 
			{
			global $post;

			if ( strstr(strtolower($post->post_content), "[jomres]") )
				{
				if ($this->contents != '')
					$content = $this->contents;
				else
					$content = '<div id="asamodule_search_results">'.$content.'</div>';
				}
			else
				{
				if (!strstr($content , "asamodule_search_results"))
					$content = '<div id="asamodule_search_results">'.$content.'</div>';
				}
		
			return $content;    
			}
		
		function register_my_custom_menu_page(){
			add_menu_page( 'Jomres admin', 'Jomres', 'manage_options', 'jomres/jomres.php', '', '', 6 );
		}
		

		function jomres_wp_init_session()
			{
			if ( isset( $_COOKIE['jomres_wp_session_cookie'] ) ) 
				{
				$session_id = $_COOKIE['jomres_wp_session_cookie'];
				} 
			else 
				{
				$session_id = $this->jomres_wp_generate_random_string();
				setcookie ('jomres_wp_session_cookie', $session_id, time()+60*60);
				}
			}
		
		function jomres_wp_generate_random_string($length = 50)
			{
			$str = "";
			// define possible characters
			$possible = "abcdfghijklmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYZ";
			// set up a counter
			$i = 0;
			// add random characters to $str until $length is reached
			while ( $i < $length )
				{
				// pick a random character from the possible ones
				$char = substr( $possible, mt_rand( 0, strlen( $possible ) - 1 ), 1 );
				$str .= $char;
				$i++;
				}
		
			return $str;
			}
		
		// Shortcode [jomres]
		function frontend_trigger_jomres($content)
			{
			global $post;

			if ($this->contents == '')
				{
				//check if we are on a [jomres] post
				if ( strstr(strtolower($post->post_content), "[jomres]") )
					{
					ob_start();
					$path = plugin_dir_path( __FILE__ );
					if (!function_exists('jr_wp_trigger_frontend'))
						require_once($path . "trigger.php");
			
					$this->contents = ob_get_contents();
			
					ob_end_clean();
					}
				}

			return $content;
			}
		
		function admin_trigger_jomres()
			{
			//check if we are on the jomres admin page
			if ($this->contents == '')
				{
				if ($_GET['page'] == "jomres/jomres.php" )
					{
					ob_start();
					$path = plugin_dir_path( __FILE__ );
					if (!function_exists('jr_wp_trigger_admin'))
						require_once($path . "trigger.php");
			
					$this->contents = ob_get_contents();
			
					ob_end_clean();
					}
				}
			}
			
		function jomres_wp_end_session() 
			{
			setcookie ('jomres_wp_session_cookie', '', time()+60*60);
			}
	
		function disable_all_widgets( $sidebars_widgets ) 
			{
			if ( $_REQUEST['popup'] == "1" )
				{
				foreach (	$sidebars_widgets as $key=>$widget)
					{
					$sidebars_widgets[$key] =array( false );
					}
				}
			return $sidebars_widgets;
			}
		
		function add_head_script($filename, $path, $version)
			{
			$this->js[] = array($filename, $path, $version);
			}
		
		function add_head_style($filename, $path, $version)
			{
			$this->css[] = array($filename, $path, $version);
			}
		
		function add_jomres_js_css()
			{
			foreach ($this->js as $js)
				{
				wp_register_script($js['0'], $js['1'], array(), $js['2'], false);
				wp_enqueue_script($js['0']);
				}
			
			foreach ($this->css as $css)
				{
				wp_register_style($css['0'], $css['1'], array(), $css['2']);
				wp_enqueue_style($css['0']);
				}
			}
		
		function jomres_wp_ajax()
			{
			if (!function_exists('jr_wp_trigger_admin'))
				require_once(plugin_dir_path( __FILE__ ) . "trigger.php");
			die();  // Required for a proper Wordpress AJAX result
			}
		}
	}

$wp_jomres = wp_jomres::getInstance();

if ($_GET['page'] == "jomres/jomres.php" )
	echo $wp_jomres->contents;
