<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000gdpr_my_data
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'gdpr_my_data',
				'info' => '_JOMRES_GDPR_MY_DATA',
				'arguments' => array()
				);

			return;
		}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		jr_import('jomres_gdpr_personal_information_collections');
		
		if (!$thisJRUser->userIsRegistered) {
			$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
			$opted_in = $jomres_gdpr_optin_consent->user_consents_to_storage();
			
			if ($opted_in) {
					$result = array( "can_redact" => false , "reason" => jr_gettext('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', false) );
			} else {
				$result = array( "can_redact" => false , "reason" => jr_gettext('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', false) );
			}
		} else {
				$jomres_gdpr_personal_information_collections = new jomres_gdpr_personal_information_collections();
				$jomres_gdpr_personal_information_collections->set_id($thisJRUser->id);
				$result = $jomres_gdpr_personal_information_collections->can_redact_this_cms_user();
			}
		
		$pageoutput = array();
		
		if ($result['can_redact'] == true) {
			$output = array ( 
				"MESSAGE" =>$result['response']['main'] ,  
				"NOTE" =>$result['response']['note'] ,  
				"_JOMRES_GDPR_MY_RTBF_FORGET_ME" => jr_gettext('_JOMRES_GDPR_MY_RTBF_FORGET_ME', '_JOMRES_GDPR_MY_RTBF_FORGET_ME', false) ,
				"_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING" => jr_gettext('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', false)
			);
			
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('gdpr_my_data_can_redact.html');
			$message = $tmpl->getParsedTemplate();

		} else {
			$output = array ( 
				"MESSAGE" =>$result['reason']);
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('gdpr_my_data_cannot_redact.html');
			$message = $tmpl->getParsedTemplate();
		}
		
		
		$output = array();
		$pageoutput = array();
		
		$output['_JOMRES_GDPR_MY_DATA'] = jr_gettext('_JOMRES_GDPR_MY_DATA', '_JOMRES_GDPR_MY_DATA', false);
		$output['_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE'] = jr_gettext('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', false);
		$output['_JOMRES_GDPR_MY_DATA_LEAD'] = jr_gettext('_JOMRES_GDPR_MY_DATA_LEAD', '_JOMRES_GDPR_MY_DATA_LEAD', false);
		$output['_JOMRES_GDPR_MY_DATA_INTRO'] = jr_gettext('_JOMRES_GDPR_MY_DATA_INTRO', '_JOMRES_GDPR_MY_DATA_INTRO', false);
		$output['_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT'] = jr_gettext('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', false);
		$output['_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON'] = jr_gettext('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', false);
		$output['_JOMRES_GDPR_MY_RTBF_LEAD'] = jr_gettext('_JOMRES_GDPR_MY_RTBF_LEAD', '_JOMRES_GDPR_MY_RTBF_LEAD', false);
		$output['_JOMRES_GDPR_MY_RTBF_INTRO'] = jr_gettext('_JOMRES_GDPR_MY_RTBF_INTRO', '_JOMRES_GDPR_MY_RTBF_INTRO', false);
		$output['MESSAGE'] = $message;

		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('gdpr_my_data.html');
		$tmpl->displayParsedTemplate();
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
