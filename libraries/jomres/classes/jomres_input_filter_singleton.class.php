<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_input_filter_singleton
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->purifier_no_html = false;
		$this->purifier_allow_html = false;
		
		$this->init();
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function init()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		if (!isset($jrConfig[ 'html_purifier_allowed_tags' ])) {
			$jrConfig[ 'html_purifier_allowed_tags' ] = 'p,b,strong,a[href],i';
		}

		/* if (!class_exists('HTMLPurifier')) {
			require_once JOMRES_LIBRARIES_ABSPATH.'htmlpurifier'.JRDS.'htmlpurifier-4.4.0-standalone'.JRDS.'HTMLPurifier.standalone.php';
		} */

		$config = HTMLPurifier_Config::createDefault();
		$config->set('HTML.Allowed', $jrConfig[ 'html_purifier_allowed_tags' ]);
		$this->purifier_allow_html = new HTMLPurifier($config);

		$config = HTMLPurifier_Config::createDefault();
		$config->set('HTML.Allowed', '');
		$this->purifier_no_html = new HTMLPurifier($config);
		
		unset($config);
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function purify($dirty, $allow_html = false)
	{
		if (!$allow_html) {
			$clean = $this->purifier_no_html->purify($dirty);
		} else {
			$clean = $this->purifier_allow_html->purify($dirty);
		}

		return $clean;
	}
}
