<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000save_gdpr_optin
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_getSingleton('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

		$optin = (bool)jomresGetParam($_REQUEST, 'optin', 0);
		$return_url = jomresGetParam($_REQUEST, 'return_url', 0);
		
		jr_import('jomres_gdpr_optin_consent');
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		$jomres_gdpr_optin_consent->optedin = $optin;
		$jomres_gdpr_optin_consent->save_record();
		
		

		jomresRedirect();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
