<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2020 Vince Wooll
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

class j16000ajax_list_properties_approve
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
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$property_uid = (int) jomresGetParam($_REQUEST, 'property_uid', 0);
		$approved = (int) jomresGetParam($_REQUEST, 'approved', 0);
		
		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
		$jomres_properties->propertys_uid = $property_uid;
		$jomres_properties->setApproved($approved);

		if ($approved == 0) {
			$jomres_properties->setPublished(0);
		}

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		$jomresConfig_mailfrom = get_showtime('mailfrom');
		$jomresConfig_fromname = get_showtime('fromname');

		$link = get_property_details_url($property_uid,'nosef');

		switch ($approved) {
			case 1:
				if (!jomresMailer($jomresConfig_mailfrom, $jomresConfig_fromname, $current_property_details->property_email, jr_gettext('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', false), jr_gettext('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', '_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', false).$link, $mode = 1)) {
					error_logging('Failure in sending approval email to hotel. Target address: '.$current_property_details->property_email.' Subject '.jr_gettext('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', false));
				}
				break;
			case 0:
				if (!jomresMailer($jomresConfig_mailfrom, $jomresConfig_fromname, $current_property_details->property_email, jr_gettext('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', false), jr_gettext('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', '_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', false).$link, $mode = 1)) {
					error_logging('Failure in sending unapproval email to hotel. Target address: '.$current_property_details->property_email.' Subject '.jr_gettext('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', false));
				}
				break;
			default:
				break;
			}

		echo 'Approval status changed to '.$approved;
		exit;
	}


	public function getRetVals()
	{
		return null;
	}
}
