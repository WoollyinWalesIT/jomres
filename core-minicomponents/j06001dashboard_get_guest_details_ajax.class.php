<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001dashboard_get_guest_details_ajax
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();

		$property_uid = jomresGetParam($_GET, 'property_uid', 0);
		if ($property_uid == 0) {
			$property_uid = getDefaultProperty();
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
			return;
		}

		$existing_id = (int) jomresGetParam($_GET, 'existing_id', 0);

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$guestDeets = array();

		if ($existing_id == 0) {
			echo json_encode($guestDeets);
			exit;
		}

		$query = 'SELECT 
						`guests_uid` AS existing_id,
						`mos_userid`,
						`enc_surname`,
						`enc_firstname`,
						`enc_house`,
						`enc_street`,
						`enc_town`,
						`enc_county`,
						`enc_country`,
						`enc_postcode`,
						`enc_tel_landline`,
						`enc_tel_mobile`,
						`enc_email`
					FROM #__jomres_guests 
					WHERE `property_uid` IN (' .jomres_implode($thisJRUser->authorisedProperties).') 
						AND `guests_uid` = '.(int) $existing_id.'  
					LIMIT 1 ';
		$guestDeets = doSelectSql($query, 2);

		foreach ($guestDeets as $key=>$val ) {
			if ( substr($key, 0, 4) == "enc_" ) {
				$newkey = substr($key, 4 );
				$guestDeets[$newkey] = $jomres_encryption->decrypt($val);
				unset($guestDeets[$key]);
			}
			
		}

		echo json_encode($guestDeets);
		exit;
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
