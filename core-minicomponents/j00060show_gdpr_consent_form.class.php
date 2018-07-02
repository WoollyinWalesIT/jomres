<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
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
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
	
		if(!isset($_COOKIE['jomres_gdpr_consent_form_processed']) && !AJAXCALL && get_showtime("task") != "show_consent_form"){
			if ($jrConfig[ 'enable_gdpr_compliant_fucntionality' ] == "1" ) {
				$consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form' , array ('output_now' => false) );
				$output = array ("CONSENT_FORM" => $consent_form );
				$output['_JOMRES_GDPR_CONSENT_TRIGGER_FORM'] = jr_gettext('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', '_JOMRES_GDPR_CONSENT_TRIGGER_FORM' , false );

				$pageoutput[] = $output;
				$tmpl = new patTemplate();
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('consent_form_wrapper.html');
				echo $tmpl->getParsedTemplate();
			} else {
				$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
				$jomres_gdpr_optin_consent->optedin = true;
				$jomres_gdpr_optin_consent->set_user_id($thisJRUser->id);
				$jomres_gdpr_optin_consent->save_record();
			}
		}
    }


    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
