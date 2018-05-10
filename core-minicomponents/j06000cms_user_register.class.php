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

class j06000cms_user_register
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if ( !$jomres_gdpr_optin_consent->user_consents_to_storage() ) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=opted_out&jr_redirect_url='.getCurrentUrl()), '');
		}

			
		$registration_url = jomres_cmsspecific_getregistrationlink();
		
		//simply redirect to the cms user registraation page
		jomresRedirect($registration_url, '');
        
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
