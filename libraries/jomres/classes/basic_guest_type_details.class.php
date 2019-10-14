<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class basic_guest_type_details
{
	public function __construct()
	{
		$this->guest_types = false;
		$this->property_uid = 0;
	}

	//Get all guest type details
	public function get_all_guest_types($property_uid = 0)
	{
		if ($property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		if (is_array($this->guest_types)) { //already executed but the property doesn`t have any guest types created yet, so the array is empty
			return true;
		} else {
			$this->guest_types = array();
		}

		$this->property_uid = $property_uid;

		$query = 'SELECT
					`id`,
					`type`,
					`notes`,
					`maximum`,
					`is_percentage`,
					`posneg`,
					`variance`,
					`published`,
					`property_uid`,
					`order`,
					`is_child` 
				FROM `#__jomres_customertypes` 
				WHERE `property_uid` = '.(int) $this->property_uid.' 
				ORDER BY `order`, `type` ';
		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			$this->guest_types[$r->id]['id'] = (int) $r->id;
			$this->guest_types[$r->id]['type'] = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$r->id, stripslashes($r->type));
			$this->guest_types[$r->id]['notes'] = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTNOTES'.$r->id, stripslashes($r->notes));
			$this->guest_types[$r->id]['maximum'] = (int) $r->maximum;
			$this->guest_types[$r->id]['is_percentage'] = (int) $r->is_percentage;
			$this->guest_types[$r->id]['posneg'] = (int) $r->posneg;
			$this->guest_types[$r->id]['variance'] = (float) $r->variance;
			$this->guest_types[$r->id]['published'] = (int) $r->published;
			$this->guest_types[$r->id]['property_uid'] = (int) $r->property_uid;
			$this->guest_types[$r->id]['order'] = (int) $r->order;
			$this->guest_types[$r->id]['is_child'] = (int) $r->is_child;
		}

		return true;
	}
}
