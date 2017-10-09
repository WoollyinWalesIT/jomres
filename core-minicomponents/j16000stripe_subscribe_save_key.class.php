<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.13
 *
 * @copyright	2005-2017 Vince Wooll
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


		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
		$jrConfig['licensekey'] = $key;
		
       

		$key_validation = new jomres_check_support_key('');
		$key_validation->check_license_key(true , $key );

		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins') , "License key saved");
		
    }

    public function getRetVals()
    {
        return null;
    }
}
