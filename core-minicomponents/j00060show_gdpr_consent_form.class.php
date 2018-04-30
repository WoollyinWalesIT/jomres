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

class j00060show_gdpr_consent_form
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            return;
        }
jr_import('jomres_gdpr_optin_consent');
		jr_import('jomres_gdpr_optin_consent');
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		var_dump($jomres_gdpr_optin_consent->get_consent_state() );exit;
		
        if(!isset($_COOKIE['jomres_gdpr_consent_form_processed']) && !AJAXCALL ){
			$consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form' , array ('output_now' => false) );
			echo $consent_form;
		}
    }


    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
