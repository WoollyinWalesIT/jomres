<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
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

class j06002editinplace
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
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager) {
			return;
		}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$property_uid = (int) getDefaultProperty();

		if ($jrConfig[ 'allowHTMLeditor' ] == '1') {
			$customText = jomresGetParam($_POST, 'value', '');
		} else {
			$customText = jomresGetParam($_POST, 'value', '');
		}

		$theConstant = filter_var($_POST[ 'pk' ], FILTER_SANITIZE_SPECIAL_CHARS);

		$jomres_target_language = get_showtime('lang');
		if (isset($_POST[ 'jomres_target_language' ])) {
			$jomres_target_language = jomresGetParam($_POST, 'jomres_target_language', '');
		}
		$theConstant = filter_var($_POST[ 'pk' ], FILTER_SANITIZE_SPECIAL_CHARS);

		$result = updateCustomText($theConstant, $customText, true, $property_uid, 0, $jomres_target_language);
		//$result = false;
		if ($result) {
			header('Status: 200');
			echo jomres_decode($customText);
		} else {
			header('Status: 500');
			echo 'Something burped';
		}

		$webhook_notification						   	= new stdClass();
		$webhook_notification->webhook_event			= 'property_state_change';
		$webhook_notification->webhook_event_description= 'A catchall webhook notification which notes that the property state has changed. Primarily designed for caching features to remove/refresh cache elements';
		$webhook_notification->data					 	= new stdClass();
		$webhook_notification->data->property_uid	   	=  $property_uid;
		add_webhook_notification($webhook_notification);

	}


	public function getRetVals()
	{
		return null;
	}
}
