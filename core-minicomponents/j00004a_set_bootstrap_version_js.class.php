<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * The script makes sure that the jomres_bootstrap_version is set before any other scripts are called, due to changes how J4 calls web assets we need to prioritise that variable
	 * 
	 */

class j00004a_set_bootstrap_version_js
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		if (AJAXCALL == '1') {
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$ls = jomresGetDomain();
		$javascript_files = array();

		$live_scrolling_enabled = 'true';
		if ($jrConfig['live_scrolling_enabled'] == '0' || jomres_cmsspecific_areweinadminarea()) {
			$live_scrolling_enabled = 'false';
		}

		if (jomres_cmsspecific_areweinadminarea()) {
			$jomres_sitepage_url_ajax = JOMRES_SITEPAGE_URL_ADMIN_AJAX;
		} else {
			$jomres_sitepage_url_ajax = JOMRES_SITEPAGE_URL_AJAX;
		}

		$misc_url_defs = '';

		$template_dir = find_plugin_template_directory();
		if (jomres_cmsspecific_areweinadminarea() && $template_dir != 'jquery_ui') {
			if (_JOMRES_DETECTED_CMS != 'joomla5') {
				$template_dir = 'bootstrap';
			} else {
				$template_dir = 'bootstrap5';
			}
		}

		$misc_url_defs = '
			var jomres_template_version = "'.$template_dir.'";
			';

		if (!isset($_SERVER[ "SERVER_PORT" ])) { // CLI not isset variable fix
			$SERVER_PORT = '80';
		} else {
			$SERVER_PORT = $_SERVER[ "SERVER_PORT" ];
		}

		if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $SERVER_PORT == 443) {// We need to include some javascript which could normally be echo'd into the page, but due to the fact that it might be included by Jomres proper, as well as plugins, we'll instead create it's own .js file, and use the host CMS to insert it into the head.
			$temp_file = $ls.'_ssl_'.get_showtime('lang');
		} else {
			$temp_file = $ls.'_'.get_showtime('lang');
		}

		if (jomres_cmsspecific_areweinadminarea()) {
			$temp_file .= '_bootstrap_version_admin.js';
		} else {
			$temp_file .= '_bootstrap_version.js';
		}
		if (!file_exists(JOMRES_TEMP_ABSPATH.$temp_file)) {
			$result = file_put_contents(JOMRES_TEMP_ABSPATH.$temp_file, $misc_url_defs);
			if (!$result) {
				throw new Exception('Tried to write  '.JOMRES_TEMP_ABSPATH.$temp_file.' but was not succcessful');
			}
		}

		jomres_cmsspecific_addheaddata('javascript', JOMRES_ROOT_DIRECTORY.'/temp/', $temp_file);
	}


	public function getRetVals()
	{
		return null;
	}
}
