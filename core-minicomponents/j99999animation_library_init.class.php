<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j99999animation_library_init
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}


		if (AJAXCALL) {
			return;
		}

		if (defined('API_STARTED')) {
			return;
		}

		if (jomres_cmsspecific_areweinadminarea()) {
			return;
		}


		if (!defined('AOS_INITIALISED')) {
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			if (!isset($jrConfig['animation_library_enabled'])) {
				$jrConfig['animation_library_enabled'] = 1;
			}

			if ($jrConfig['animation_library_enabled'] != 1 ) {
				return;
			}

			jomres_cmsspecific_addheaddata('css', 'https://unpkg.com/aos@2.3.1/dist/','aos.css');
			jomres_cmsspecific_addheaddata('javascript', 'https://unpkg.com/aos@2.3.1/dist/', 'aos.js');
			jomres_cmsspecific_addheaddata('javascript', JOMRES_JS_RELPATH, 'AOS.js');
			define('AOS_INITIALISED',1);
		}
	}

	public function getRetVals()
	{
		return null;
	}
}
