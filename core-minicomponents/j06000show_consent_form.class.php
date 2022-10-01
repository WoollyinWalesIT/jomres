<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06000show_consent_form
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'show_consent_form',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM'
				);

			return;
		}
		
		$output_now = true;
		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool) $componentArgs[ 'output_now' ];
		}

		$output[ '_JOMRES_GDPR_CONSENT_FORM_INTRO' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_INTRO', '_JOMRES_GDPR_CONSENT_FORM_INTRO', false);
		$output[ '_JOMRES_COM_MR_YES' ] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false);
		$output[ '_JOMRES_COM_MR_NO' ] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false, false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_DETAIL' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_DETAIL', '_JOMRES_GDPR_CONSENT_FORM_DETAIL', false, false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_COOKIE' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_COOKIE', '_JOMRES_GDPR_CONSENT_FORM_COOKIE', false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', false, false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', false);
		$output[ '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3' ] = jr_gettext('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', false);
		
		if (isset($_REQUEST['return_url'])) {
			if (isset($_REQUEST['url_already_forwarded'])) {
				$output['RETURN_URL'] = $_REQUEST['return_url'];
			} else {
				$output['RETURN_URL'] = jr_base64url_encode($_REQUEST['return_url']);
			}
		} else {
			$output['RETURN_URL'] = jr_base64url_encode(getCurrentUrl());
		}
		
		$output['CONSENTED'] = jr_gettext('_JOMRES_GDPR_CONSENT_OPTED_IN', '_JOMRES_GDPR_CONSENT_OPTED_IN', false);
		
		if (!isset($_COOKIE['jomres_gdpr_consent_form_processed'])) {
			$output['CONSENTED'] = jr_gettext('_JOMRES_GDPR_CONSENT_NOT_SET', '_JOMRES_GDPR_CONSENT_NOT_SET', false);
		} elseif ((int)$_COOKIE['jomres_gdpr_consent_form_processed'] == 0) {
			$output['CONSENTED'] = jr_gettext('_JOMRES_GDPR_CONSENT_OPTED_OUT', '_JOMRES_GDPR_CONSENT_OPTED_OUT', false);
		}
		

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('show_gdpr_consent_form.html');
		$this->retVals = $tmpl->getParsedTemplate();
		
		if ($output_now) {
			echo $this->retVals;
		}
	}



	public function getRetVals()
	{
		return $this->retVals;
	}
}
