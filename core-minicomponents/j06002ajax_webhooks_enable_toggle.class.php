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

class j06002ajax_webhooks_enable_toggle
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
	 
	function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$integration_id	 = (int) jomresGetParam($_REQUEST, 'integration_id', '');
		
		jr_import("webhooks");
		$webhooks = new webhooks($thisJRUser->id);
		$webhooks->get_all_webhooks();
		
		if (!isset($webhooks->webhooks[$integration_id])) {
			throw new Exception('Error: Invalid integration id sent, possible hack attempt');
		}

		if ($webhooks->webhooks[$integration_id]["enabled"] == true) {
			$webhooks->webhooks[$integration_id]["enabled"] = false;
			logging::log_message("Disabed webhook ".$integration_id, 'Webhooks', 'DEBUG');
		} else {
			$webhooks->webhooks[$integration_id]["enabled"] = true;
			logging::log_message("Enabled webhook ".$integration_id, 'Webhooks', 'DEBUG');
		}

		$webhooks->commit_integration($integration_id);
	}



	function getRetVals()
	{
		return null;
	}
}
