<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
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

class j16000anonymise_guest
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

		$guest_id = (int)jomresGetParam($_REQUEST, 'guest_id', 0);
		$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		
		jr_import('jomres_gdpr_personal_information_collections');
		$jomres_gdpr_personal_information_collections = new jomres_gdpr_personal_information_collections();
		$jomres_gdpr_personal_information_collections->redact_non_registered_guest_pii( $guest_id , $property_uid );
		
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=list_guests" ), jr_gettext( "_JOMRES_GDPR_RTBF_GUEST_REDACTED", '_JOMRES_GDPR_RTBF_GUEST_REDACTED', false ) );
		
	}


	public function getRetVals()
	{
		return null;
	}
}
