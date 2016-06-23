<?php
/*
	Plugin Name: Jomres
Plugin URI: http://www.jomres.net
Description: The complete hotel booking system for Wordpress!
Author: Vince Wooll
Version: 9.8.4
Author URI: http://www.jomres.net/
*/
defined('WPINC') or die;

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
			$this->metatitle = '';
			
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

			add_action('wp', array($this,'frontend_trigger_jomres'), 1);
				
			if (is_admin() && isset($_REQUEST['page']) && $_REQUEST['page'] == "jomres/jomres.php" )
				{
				if (!defined('_JOMRES_INITCHECK_ADMIN'))
					define('_JOMRES_INITCHECK_ADMIN', 1 );

				add_action('init', array($this,'admin_trigger_jomres'), 1);
				}
				
			add_action('wp_logout',	array($this,'jomres_wp_end_session'));
			add_action('wp_login', array($this,'jomres_wp_end_session'));

			add_shortcode( 'jomres', array($this,'frontend_trigger_jomres') );
				
			add_filter('the_content', array($this,'asamodule_search_results') );
			add_filter('wp_title', array($this,'set_jomres_meta_title'), 10, 2);

			if (is_admin())
				{
				if (isset($_REQUEST['page']) && $_REQUEST['page'] == "jomres/jomres.php")
					{
					add_action( 'wp_ajax_nopriv_'.$_REQUEST['page'], array($this,'jomres_wp_ajax') );
					add_action( 'wp_ajax_'.$_REQUEST['page'], array($this,'jomres_wp_ajax') );
					}
				
				if (isset($_REQUEST['action']) && $_REQUEST['action'] == "jomres/trigger.php")
					{
					add_action( 'wp_ajax_nopriv_'.$_REQUEST['action'], array($this,'jomres_wp_ajax') );
					add_action( 'wp_ajax_'.$_REQUEST['action'], array($this,'jomres_wp_ajax') );
					}
				}
			
			add_filter('redirect_canonical', array($this,'payments_redirect_canonical'), 10, 2);
			
			// If &popup=1 is in $_REQUEST we'll disable all widgets, but leave the keys intact so that you don't get the "please activate a widget" message
			add_filter( 'sidebars_widgets', array(&$this,'disable_all_widgets') );
			
			//fullscreen view
			add_filter( 'template_include', array($this,'jomres_fullscreen_view') );
			
			//add_filter( 'wp_footer', array($this,'add_jomres_js_css') );
			}
			
		function asamodule_search_results($content) 
			{
			global $post;
			
			$language = str_replace("_","-",get_locale());

			if ( is_object($post) && strstr(strtolower($post->post_content), "[jomres:".strtolower($language)."]") )
				{
				if ($this->contents != '')
					$content = '<div id="asamodule_search_results">'.$this->contents.'</div>';
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
		
		function register_my_custom_menu_page()
			{
			add_menu_page( 'Jomres admin', 'Jomres', 'manage_options', 'jomres/jomres.php', '', '', 6 );
			}
		
		// Shortcode [jomres:xx-XX] xx-XX is the language code
		function frontend_trigger_jomres($content)
			{
			global $post;
			
			$language = str_replace("_","-",get_locale());

			if ($this->contents == '' && is_object($post) )
				{
				//check if we are on a [jomres:xx-XX] post
				if ( strstr(strtolower($post->post_content), "[jomres:".strtolower($language)."]") )
					{
					ob_start();
					
					// Disable the admin toolbar, if we are using jq ui then the menu at the top is the only position that works on a default WP installation.
					if( isset( $_REQUEST['tmpl']) && $_REQUEST['tmpl'] == 'jomres' )
						add_filter( 'show_admin_bar', '__return_false' );

					if (!function_exists('jr_wp_trigger_frontend'))
						require_once(plugin_dir_path( __FILE__ ) . "trigger.php");
					
					add_action('wp_enqueue_scripts', array($this,'add_jomres_js_css'), 9999);
			
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
				if (isset($_GET['page']) && $_GET['page'] == "jomres/jomres.php" )
					{
					ob_start();

					if (!function_exists('jr_wp_trigger_admin'))
						require_once(plugin_dir_path( __FILE__ ) . "trigger.php");
					
					add_action('admin_enqueue_scripts', array($this,'add_jomres_js_css'), 9999);
			
					$this->contents = ob_get_contents();
			
					ob_end_clean();
					}
				}
			}
			
		function jomres_wp_end_session() 
			{
			$_SESSION['jomres_wp_session'] = array();
			}
	
		function disable_all_widgets( $sidebars_widgets ) 
			{
			if ( isset($_REQUEST['popup']) && (int)$_REQUEST['popup'] == 1 )
				{
				foreach ( $sidebars_widgets as $key=>$widget)
					{
					$sidebars_widgets[$key] =array( false );
					}
				}
			return $sidebars_widgets;
			}
		
		function add_jomres_js_css()
			{
			if (count($this->js)>0)
				{
				foreach ($this->js as $js)
					{
					if (strpos($js['1'], 'jomres.js'))
						wp_register_script($js['0'], $js['1'], array("jquery"), $js['2']);
					else
						wp_register_script($js['0'], $js['1'], array("jquery"), $js['2'], true);
					wp_enqueue_script($js['0']);
					}
				$this->js = array();
				}
			
			if (count($this->css)>0)
				{
				foreach ($this->css as $css)
					{
					wp_register_style($css['0'], $css['1'], array(), $css['2']);
					wp_enqueue_style($css['0']);
					}
				$this->css = array();
				}
			}
		
		function set_jomres_meta_title($title, $id = null)
			{
			if ($this->metatitle != '')
				$title = ucfirst(trim($this->metatitle)).' ';
			
			return $title;
			}
		
		function jomres_fullscreen_view($template)
			{
			if( isset( $_GET['tmpl']) && $_GET['tmpl'] == 'jomres' )
				$template = ABSPATH . 'jomres/libraries/fullscreen_view/wp-fullscreen.php';

			return $template;
			}
		
		function jomres_wp_ajax()
			{
			if (!function_exists('jr_wp_trigger_admin'))
				require_once(plugin_dir_path( __FILE__ ) . "trigger.php");
			die();  // Required for a proper Wordpress AJAX result
			}
		
		function payments_redirect_canonical($redirect_url, $requested_url)
			{
			if (
				$_REQUEST['task']== "completebk" || 
				$_REQUEST['task']== "processpayment" || 
				$_REQUEST['task']== "confirmbooking"|| 
				$_REQUEST['task']== "invoice_payment_receive"
				) 
				{
				return $requested_url;
				} 
			else 
				{
				return $redirect_url;
				}
			}
		}
	}

$wp_jomres = wp_jomres::getInstance();

if (isset($_GET['page']) && $_GET['page'] == "jomres/jomres.php" )
	echo $wp_jomres->contents;
