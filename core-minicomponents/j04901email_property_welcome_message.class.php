<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Sends the new property welcome email
     *
	 */

class j04901email_property_welcome_message
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

			return;
		}
		$ePointFilepath = get_showtime('ePointFilepath');

		$property_uid = $componentArgs['property_uid'];

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		$pageoutput = array();
		$output = array();

		$output['_JOMRES_NEW_PROPERTY_WELCOME_TITLE'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', '_JOMRES_NEW_PROPERTY_WELCOME_TITLE', false, false).' '.$current_property_details->get_property_name($property_uid);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_1'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_1', '_JOMRES_NEW_PROPERTY_WELCOME_1', false, false).' '.get_showtime('sitename');
		$output['_JOMRES_NEW_PROPERTY_WELCOME_2'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_2', '_JOMRES_NEW_PROPERTY_WELCOME_2', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_3'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_3', '_JOMRES_NEW_PROPERTY_WELCOME_3', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_3_LINK'] = jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=cpanel&thisProperty='.$property_uid);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', '_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_4'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_4', '_JOMRES_NEW_PROPERTY_WELCOME_4', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_4_LINK'] = get_property_details_url($property_uid,'nosef');
		$output['_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', '_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_5'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_5', '_JOMRES_NEW_PROPERTY_WELCOME_5', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_6'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_6', '_JOMRES_NEW_PROPERTY_WELCOME_6', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_7'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_7', '_JOMRES_NEW_PROPERTY_WELCOME_7', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_7_LINK'] = jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=contactowner&property_uid=0');
		$output['_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', '_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_8'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_8', '_JOMRES_NEW_PROPERTY_WELCOME_8', false, false);
		$output['_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE'] = jr_gettext('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', '_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', false, false).' '.get_showtime('sitename');

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('email_hotel_newproperty.html');
		$text = $tmpl->getParsedTemplate();

		if (!jomresMailer(get_showtime('mailfrom'),
				$current_property_details->property_name,
				$current_property_details->property_email,
				$output['_JOMRES_NEW_PROPERTY_WELCOME_TITLE'],
				$text,
				$mode = 1)
			) {
			error_logging('Failure in sending new booking email to admin. Target address: '.$site_paypal_settings['paypalemail'].' Subject'.$booking_email_details->parsed_email['subject'].$booking_email_details->parsed_email['text']);
		}

		sendAdminEmail($current_property_details->property_name, $text);
	}

	public function getRetVals()
	{
		return null;
	}
}
