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

class j06001save_guest
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
		$id = (int)jomresGetParam($_REQUEST, 'id', 0);
		$defaultProperty = getDefaultProperty();
		
		jr_import('jrportal_guests');
		$jrportal_guests = new jrportal_guests();
		$jrportal_guests->id = $id;
		$jrportal_guests->property_uid = $defaultProperty;
		
		if ($id > 0) {
			$jrportal_guests->get_guest(); // if we don't get_guest then the mos_id ( cms_id) will get reset when the guest is saved
		}
		
		
		$jrportal_guests->firstname = jomresGetParam($_REQUEST, 'firstname', '');
		$jrportal_guests->surname = jomresGetParam($_REQUEST, 'surname', '');
		$jrportal_guests->house = jomresGetParam($_REQUEST, 'house', '');
		$jrportal_guests->street = jomresGetParam($_REQUEST, 'street', '');
		$jrportal_guests->town = jomresGetParam($_REQUEST, 'town', '');
		$jrportal_guests->region = jomresGetParam($_REQUEST, 'region', '');
		$jrportal_guests->country = jomresGetParam($_REQUEST, 'guest_country', '');
		$jrportal_guests->postcode = jomresGetParam($_REQUEST, 'postcode', '');
		$jrportal_guests->tel_landline = jomresGetParam($_REQUEST, 'landline', '');
		$jrportal_guests->tel_mobile = jomresGetParam($_REQUEST, 'mobile', '');
		$jrportal_guests->email = jomresGetParam($_REQUEST, 'email', '');
		$jrportal_guests->vat_number = jomresGetParam($_REQUEST, 'vat_number', '');
		$jrportal_guests->discount = (int) jomresGetParam($_REQUEST, 'discount', 0);
		$jrportal_guests->blacklisted = (int) jomresGetParam($_REQUEST, 'blacklisted', 0);

		if ($id > 0) {
			$jrportal_guests->commit_update_guest();
		} else {
			$jrportal_guests->commit_new_guest();
		}
			
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL."&task=list_guests"), 'Guest saved');
	}


	public function getRetVals()
	{
		return null;
	}
}
