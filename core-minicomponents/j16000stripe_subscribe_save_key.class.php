<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################


class j16000stripe_subscribe_save_key
{
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$output = array();
		
		$key		= jomresGetParam($_REQUEST, 'license_key', '');

		if ($key == '' ) // Something went wrong
			return;
		
		saveSiteConfig( array("licensekey" => $key ) );
		
		if (file_exists( JOMRES_TEMP_ABSPATH.'key.php') ){
			unlink(JOMRES_TEMP_ABSPATH.'key.php');
		}
		if (file_exists( JOMRES_TEMP_ABSPATH.'license_key_check_cache.php') ){
			unlink(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php');
		}

		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=site_settings') , "License key saved");
		
	}

	public function getRetVals()
	{
		return null;
	}
}
