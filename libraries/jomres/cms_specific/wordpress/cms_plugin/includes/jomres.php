<?php
	/**
	 * A class definition that includes attributes and functions used across both the
	 * public-facing side of the site and the admin area.
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 * @author	 Vince Wooll <support@jomres.net>
	 */
class WP_Jomres
{

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * Jomres.
	 *
	 * @since	9.9.19
	 * @access   protected
	 * @var	  Jomres_Loader	$loader	Maintains and registers all Jomres hooks.
	 */
	protected $loader;

	/**
	 * The Jomres plugin unique identifier.
	 *
	 * @since	9.9.19
	 * @access   protected
	 * @var	  string	$plugin_name	The string used to uniquely identify the Jomres plugin.
	 */
	protected $plugin_name;

	/**
	 * The current Jomres version.
	 *
	 * @since	9.9.19
	 * @access   protected
	 * @var	  string	$version	The current Jomres version.
	 */
	protected $version;

	/**
	 * The Jomres instance.
	 *
	 * @since	9.9.19
	 * @access   protected
	 * @var	  object	$configInstance	The Jomres instance.
	 */
	private static $configInstance;

	/**
	 * The Jomres javascript.
	 *
	 * @since	9.9.19
	 * @access   private
	 * @var	  array	$js	The Jomres javascript.
	 */
	private $js;

	/**
	 * The Jomres css.
	 *
	 * @since	9.9.19
	 * @access   private
	 * @var	  array	$css	The Jomres css.
	 */
	private $css;

	/**
	 * The Jomres custom meta.
	 *
	 * @since	9.9.19
	 * @access   private
	 * @var	  array	$custom_meta	The Jomres custom meta.
	 */
	private $custom_meta;

	/**
	 * The Jomres output.
	 *
	 * @since	9.9.19
	 * @access   private
	 * @var	  string	$content	The Jomres output.
	 */
	private $content;

	/**
	 * The Jomres page meta title.
	 *
	 * @since	9.9.19
	 * @access   private
	 * @var	  string	$meta_title	The Jomres page meta title.
	 */
	private $meta_title;

	/**
	 * Define the Jomres core functionality.
	 *
	 * Set the Jomres name and the Jomres version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since	9.9.19
	 */
	public function __construct()
	{

		if (defined('JOMRES_WP_PLUGIN_VERSION')) {
			$this->version = JOMRES_WP_PLUGIN_VERSION;
		} else {
			$this->version = '0';
		}

		$this->plugin_name = 'jomres';
		$this->js = array();
		$this->css = array();
		$this->custom_meta = array();
		$this->content = '';
		$this->meta_title = '';

		$this->load_dependencies();
		$this->define_common_hooks();
		$this->define_public_hooks();

		if (is_admin()) {
			$this->define_admin_hooks();
		}
	}

	/**
	 * Get Jomres instance.
	 *
	 * Description.
	 *
	 * @since	9.9.19
	 */
	public static function getInstance()
	{

		if (!self::$configInstance) {
			self::$configInstance = new self();
		}

		return self::$configInstance;
	}

	/**
	 * Load the required Jomres dependencies.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Jomres_Loader. Orchestrates the hooks of the plugin.
	 * - Jomres_i18n. Defines internationalization functionality.
	 * - Jomres_Admin. Defines all hooks for the admin area.
	 * - Jomres_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since	9.9.19
	 * @access   private
	 */
	private function load_dependencies()
	{

		/**
		 * The class responsible for orchestrating the Jomres actions and filters.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/jomres-loader.php';

		/**
		 * The class responsible for defining all Jomres actions that occur in the admin area.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'admin/jomres-admin.php';

		/**
		 * The class responsible for defining all Jomres actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'public/jomres-public.php';

		$this->loader = new Jomres_Loader();
	}

	/**
	 * Define the Jomres locale for internationalization.
	 *
	 * Uses the Jomres_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since	9.9.19
	 * @access   private
	 */
	private function set_locale()
	{

		$plugin_i18n = new Jomres_i18n();

		$this->loader->add_action('plugins_loaded', $plugin_i18n, 'load_plugin_textdomain');
	}

	/**
	 * Register all of the common hooks related to the Jomres admin area and public-facing functionality.
	 *
	 * @since	9.9.19
	 * @access   private
	 */
	private function define_common_hooks()
	{

		$this->loader->add_action('wp_login', $this, 'jomres_wp_end_session');
		$this->loader->add_action('wp_logout', $this, 'jomres_wp_end_session');
		$this->loader->add_action('wp_head', $this, 'jomres_add_custom_meta');
	}

	/**
	 * Register all of the hooks related to the Jomres admin area functionality.
	 *
	 * @since	9.9.19
	 * @access   private
	 */
	private function define_admin_hooks()
	{

		$jomres_admin = new Jomres_Admin($this->get_plugin_name(), $this->get_version(), $this->get_loader());

		$this->loader->add_action('admin_menu', $jomres_admin, 'register_jomres_admin_menu');

		if (isset($_REQUEST[ 'page' ]) && $_REQUEST[ 'page' ] == 'jomres/jomres.php') {
			if (! defined('_JOMRES_INITCHECK_ADMIN')) {
				define('_JOMRES_INITCHECK_ADMIN', 1);
			}

			$this->loader->add_action('init', $jomres_admin, 'admin_trigger_jomres', 1);
			$this->loader->add_action('wp_ajax_' . sanitize_text_field($_REQUEST[ 'page' ]), $jomres_admin, 'jomres_wp_ajax');
		}

		$this->loader->add_action('wp_ajax_jomres_ajax', $jomres_admin, 'jomres_wp_ajax');
		$this->loader->add_action('wp_ajax_nopriv_jomres_ajax', $jomres_admin, 'jomres_wp_ajax');
	}

	/**
	 * Register all of the hooks related to the Jomres public-facing functionality.
	 *
	 * @since	9.9.19
	 * @access   private
	 */
	private function define_public_hooks()
	{

		$jomres_public = new Jomres_Public($this->get_plugin_name(), $this->get_version(), $this->get_loader());

		$this->loader->add_action('wp', $jomres_public, 'frontend_trigger_jomres', 1);

		$this->loader->add_filter('the_content', $jomres_public, 'asamodule_search_results');
		$this->loader->add_filter('wp_title', $jomres_public, 'set_jomres_meta_title');
		$this->loader->add_filter('redirect_canonical', $jomres_public, 'payments_redirect_canonical', 10, 2);

		//if &popup=1 is in $_REQUEST we'll disable all widgets, but leave the keys intact so that you don't get the "please activate a widget" message
		if (isset($_REQUEST['popup']) && (int)$_REQUEST['popup'] == 1) {
			$this->loader->add_filter('sidebars_widgets', $jomres_public, 'disable_all_widgets');
		}

		//fullscreen view
		if (isset($_GET['tmpl']) && $_GET['tmpl'] == 'jomres') {
			$this->loader->add_filter('template_include', $jomres_public, 'jomres_fullscreen_view');
		}
	}

	/**
	 * Register all scripts and styles related to the Jomres andmin and public-facing functionality.
	 *
	 * @since	9.9.19
	 * @access   public
	 */
	public function add_jomres_js_css()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$arr = array('jquery' , 'bootstrap');
		if ($jrConfig["bootstrap_version"] == 0) {
			$arr = array('jquery');
		}

		if (! empty($this->js)) {
			foreach ($this->js as $js_filename => $js) {
				if (is_admin()) {
					if (strpos($js['0'], 'jomres.js')) {
						wp_register_script($js_filename, $js['0'], array('jquery' ), $js['1']);
					} else {
						wp_register_script($js_filename, $js['0'], array('jquery' ), $js['1'], true);
					}
				} else {
					if (strpos($js['0'], 'jomres.js')) {
						wp_register_script($js_filename, $js['0'], $arr, $js['1'], false);
					} else {
						wp_register_script($js_filename, $js['0'], $arr, $js['1'], false);
					}
				}


				wp_enqueue_script($js_filename);
			}

			$this->js = array();
		}

		if (! empty($this->css)) {
			foreach ($this->css as $css_filename => $css) {
				wp_register_style( $css_filename, $css['0']);
				wp_enqueue_style($css_filename);
			}

			$this->css = array();
		}
	}

	/**
	 * Clear the Jomres session data.
	 *
	 * @since	9.9.19
	 * @access   private
	 */
	public function jomres_wp_end_session()
	{

		$_SESSION['jomres_wp_session'] = array();
	}

	/**
	 * Echoes the Jomres custom meta data.
	 *
	 * @since	9.9.19
	 * @access   private
	 */
	public function jomres_add_custom_meta()
	{

		if (empty($this->custom_meta)) {
			return true;
		}

		echo PHP_EOL;

		foreach ($this->custom_meta as $meta) {
			echo $meta . PHP_EOL;
		}

		return true;
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since	9.9.19
	 */
	public function run()
	{

		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since	 9.9.19
	 * @return	string	The name of the plugin.
	 */
	public function get_plugin_name()
	{

		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since	 9.9.19
	 * @return	Jomres_Loader	Orchestrates the hooks of the plugin.
	 */
	public function get_loader()
	{

		return $this->loader;
	}

	/**
	 * Retrieve the Jomres version number.
	 *
	 * @since	 9.9.19
	 * @return	string	The Jomres version number.
	 */
	public function get_version()
	{

		return $this->version;
	}

	/**
	 * Retrieve the Jomres js.
	 *
	 * @since	 9.9.19
	 * @return	array	The Jomres js.
	 */
	public function get_js()
	{

		return $this->js;
	}

	/**
	 * Retrieve the Jomres css.
	 *
	 * @since	 9.9.19
	 * @return	array	The Jomres css.
	 */
	public function get_css()
	{

		return $this->css;
	}

	/**
	 * Retrieve the Jomres custom meta.
	 *
	 * @since	 9.9.19
	 * @return	array	The Jomres custom meta.
	 */
	public function get_custom_meta()
	{

		return $this->custom_meta;
	}

	/**
	 * Retrieve the Jomres output.
	 *
	 * @since	 9.9.19
	 * @return	string	The Jomres output.
	 */
	public function get_content()
	{

		return $this->content;
	}

	/**
	 * Retrieve the Jomres page metta title.
	 *
	 * @since	 9.9.19
	 * @return	array	The Jomres page meta title.
	 */
	public function get_meta_title()
	{

		return $this->meta_title;
	}

	/**
	 * Retrieve the Jomres output.
	 *
	 * @since	 9.9.19
	 * @return	bool	true.
	 */
	public function set_content($content)
	{

		$this->content = $content;

		return true;
	}

	/**
	 * Adds javascript files to $js array.
	 *
	 * @since	 9.9.19
	 * @return	bool	true.
	 */
	public function add_js($filename, $js, $version)
	{

		$this->js[ $filename ] = array( $js, $version );

		return true;
	}

	/**
	 * Adds javascript files to $js array.
	 *
	 * @since	 9.9.19
	 * @return	bool	true.
	 */
	public function add_css($filename, $css, $version)
	{

		$this->css[ $filename ] = array( $css, $version );

		return true;
	}

	/**
	 * Adds custom meta data cu $custom_meta array.
	 *
	 * @since	 9.9.19
	 * @return	bool	true.
	 */
	public function add_custom_meta($meta)
	{

		$this->custom_meta[] = $meta;

		return true;
	}

	/**
	 * Sets the Jomres page meta title.
	 *
	 * @since	 9.9.19
	 * @return	bool	true.
	 */
	public function set_meta_title($title)
	{

		$this->meta_title = trim($title);

		return true;
	}
}
