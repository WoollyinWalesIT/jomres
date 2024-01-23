<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06005muaddtofavourites
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
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if (!$jomres_gdpr_optin_consent->user_consents_to_storage()) {
			return;
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if ($thisJRUser->userIsRegistered) {
			$property_uid = jomresGetParam($_REQUEST, 'property_uid', 0);
			$pageoutput = array();
			$output = array();
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid = '".(int) $property_uid."'";
			$props = doSelectSql($query);
			if (!empty($props)) {
				$query = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int) $property_uid."' AND `my_id` = '".(int) $thisJRUser->id."'";
				$propys = doSelectSql($query);
				if (empty($propys)) {
					$query = "INSERT INTO #__jomcomp_mufavourites (`my_id`,`property_uid`) VALUES ('".(int) $thisJRUser->id."','".(int) $property_uid."')";
					if (!doInsertSql($query, '')) {
						$a = 0;
						// There was an error, trigger the error script
					}
				}
			}
			$webhook_notification						   		= new stdClass();
			$webhook_notification->webhook_event				= 'property_favourited';
			$webhook_notification->webhook_event_description	= 'Logs when a property is favourited';
			$webhook_notification->data					 		= new stdClass();
			$webhook_notification->data->property_uid	   		= $property_uid;
			add_webhook_notification($webhook_notification);

			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=muviewfavourites'), '');
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
