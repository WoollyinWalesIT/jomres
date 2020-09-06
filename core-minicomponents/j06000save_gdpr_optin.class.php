<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
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

class j06000save_gdpr_optin
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
		$MiniComponents = jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$optin = (bool)jomresGetParam($_REQUEST, 'optin', 0);
		$return_url = jomresGetParam($_REQUEST, 'return_url', 0);
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		$jomres_gdpr_optin_consent->optedin = $optin;
		$jomres_gdpr_optin_consent->set_user_id($thisJRUser->id);
		$jomres_gdpr_optin_consent->save_record();
		
		

		jomresRedirect($return_url);
	}


	public function getRetVals()
	{
		return null;
	}
}
