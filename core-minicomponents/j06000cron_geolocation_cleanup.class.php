<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-alpha1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000cron_geolocation_cleanup
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $jomresConfig_secret = get_showtime('secret');
        $secret = base64_decode(jomresGetParam($_REQUEST, 'secret', ''));
		
		$geolocation_dir = JOMRES_TEMP_ABSPATH.'geolocation'.JRDS;

        if ($secret == $jomresConfig_secret) {
            if (is_dir($geolocation_dir)) {
				emptyDir($geolocation_dir);
			}
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
