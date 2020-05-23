<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.5
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
     * Redirects the user to the CMS's login page
	 * 
	 */

class j06000cms_user_login
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if ( !$jomres_gdpr_optin_consent->user_consents_to_storage()&& !isset($_REQUEST['skip_consent_form'])  ) {
			echo $consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form' , array ('output_now' => false) );
		} else {
			$login_url = get_showtime('live_site').'/'.jomres_cmsspecific_getlogin_task();
			
			//simply redirect to the cms user registraation page
			jomresRedirect($login_url, '');
		}

		

		
	}


	public function getRetVals()
	{
		return null;
	}
}
