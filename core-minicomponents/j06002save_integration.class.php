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
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06002save_integration
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		jr_import("webhooks");
		$webhooks = new webhooks($thisJRUser->id);
		$all_webhooks = $webhooks->get_all_webhooks();

		$integration_id = (int)jomresGetParam($_POST, 'integration_id', 0);
		
		$webhook = $webhooks->get_webhook($integration_id);
		if ($webhook != false && $integration_id > 0) {
			if ($thisJRUser->id != $webhook['manager_id']) {
				return ;
			}
		}
		
		$settings = array();
		foreach ($_POST as $key => $val) {
			if ($key != "nohtml" && $key != "task" && $key != "integration_id" && $key != "jomres_csrf_token") {
				$val = jomresGetParam($_POST, $key, '');
				$key = filter_var($key, FILTER_SANITIZE_SPECIAL_CHARS); // Trust nobody
				$webhooks->set_setting($integration_id, $key, $val);
			}
		}
		
	   
		$webhooks->commit_integration($integration_id);
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL . "&task=webhooks_core"), "");
	}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */

	function getRetVals()
	{
		return null;
	}
}
