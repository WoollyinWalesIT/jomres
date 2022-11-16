<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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

class j06001dashboard_email_check_ajax
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

		$email_address_to_test = jomresGetParam($_GET, 'guest_email_address', '');
		
		$guest_email_already_in_system = true;
		
		$guest_uids = search_property_guests_by_string($email_address_to_test, 0, 0, 0);

		if (empty($guest_uids['matches'])) {
			$guest_email_already_in_system = false;
		}
		//set ajax response
		$response = array(
			'email_already_in_system' => $guest_email_already_in_system
		);

		echo json_encode($response);
		exit;
	}

	public function getRetVals()
	{
		return null;
	}
}
