<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
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

class j06005expire_tokens
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

		$client_id			= jomresGetParam($_REQUEST, 'client_id', "");

		if ($client_id == "") {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL . "&task=oauth"), "");
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$query = "SELECT client_id FROM #__jomres_oauth_clients WHERE client_id = '".$client_id."' AND `user_id` = ".(int)$thisJRUser->id . ' ';
		$result = doSelectSql($query);

		if (count($result)==1) {
			$expires = date('Y-m-d H:i:s', strtotime('now'));
			$query = "UPDATE #__jomres_oauth_access_tokens SET `expires` = '".$expires."'
				WHERE `client_id`= '".$client_id."' AND `user_id` = ".(int)$thisJRUser->id."";
			doInsertSql($query);
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL . "&task=oauth_edit_client&client_id=".$client_id), "");
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
