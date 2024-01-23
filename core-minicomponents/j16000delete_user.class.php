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

class j16000delete_user
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
	 
	function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}
		
		$cms_user_id = (int)jomresGetParam($_REQUEST, 'cms_user_id', 0);
		
		$jomres_users = jomres_singleton_abstract::getInstance('jomres_users');
		
		if ($cms_user_id > 0) {
			$jomres_users->delete_user($cms_user_id);
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN . "&task=list_users"), 'User deleted');
	}


	function getRetVals()
	{
		return null;
	}
}
