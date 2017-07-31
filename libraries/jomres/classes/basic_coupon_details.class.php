<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class basic_coupon_details
{
    private static $configInstance;

    public function __construct()
    {
        $this->coupons = array();
		
		$this->id = 0; // coupon_id
		$this->property_uid = 0;
		$this->coupon_code = '';
		$this->valid_from = date("Y-m-d");
		$this->valid_to = date("Y-m-d");
		$this->booking_valid_from = date("Y-m-d");
		$this->booking_valid_to = date("Y-m-d");
		$this->amount = 0.00;
		$this->is_percentage = 1;
		$this->rooms_only = 0;
		$this->guest_uid = 0;
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    //Get all coupons details for one or more property uids
    public function get_all_coupons($property_uids = array())
    {
		if (empty($property_uids)) {
			throw new Exception('Error: Property uids not set.');
		}

        // First we need to extract those uids that are not already in the $this->coupons var, this (may) reduce the number of properties we need to query
        $temp_array = array();
        foreach ($property_uids as $id) {
            if (!isset($this->coupons[$id])) {
				$this->coupons[$id] = array();
                $temp_array[] = (int)$id;
            }
        }
        $property_uids = $temp_array;
        unset($temp_array);

		if (empty($property_uids)) {
			return true; //we already have the data for all property uids passed
		}

        $query = "SELECT
					`coupon_id`,
					`property_uid`,
					`coupon_code`,
					`valid_from`,
					`valid_to`,
					`amount`, 
					`is_percentage`,
					`rooms_only`,					
					`booking_valid_from`,
					`booking_valid_to`,
					`guest_uid` 
				FROM #__jomres_coupons  
				WHERE `property_uid` IN (".jomres_implode($property_uids).")";
        $result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $r) {
				$this->coupons[$r->property_uid][$r->coupon_id]['id'] = (int)$r->coupon_id;
				$this->coupons[$r->property_uid][$r->coupon_id]['property_uid'] = (int)$r->property_uid;
				$this->coupons[$r->property_uid][$r->coupon_id]['coupon_code'] = $r->coupon_code;
				$this->coupons[$r->property_uid][$r->coupon_id]['valid_from'] = $r->valid_from;
				$this->coupons[$r->property_uid][$r->coupon_id]['valid_to'] = $r->valid_to;
				$this->coupons[$r->property_uid][$r->coupon_id]['amount'] = $r->amount;
				$this->coupons[$r->property_uid][$r->coupon_id]['is_percentage'] = (int) $r->is_percentage;
				$this->coupons[$r->property_uid][$r->coupon_id]['rooms_only'] = (int) $r->rooms_only;
				$this->coupons[$r->property_uid][$r->coupon_id]['booking_valid_from'] = $r->booking_valid_from;
				$this->coupons[$r->property_uid][$r->coupon_id]['booking_valid_to'] = $r->booking_valid_to;
				$this->coupons[$r->property_uid][$r->coupon_id]['guest_uid'] = (int) $r->guest_uid;
			}
		}

        return true;
    }
}
