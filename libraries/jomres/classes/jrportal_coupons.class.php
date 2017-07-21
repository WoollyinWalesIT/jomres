<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.7
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_coupons
{
    public function __construct()
    {
        $this->init_coupon();
    }

    public function init_coupon()
    {
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
	
	//Get coupon details by id
    public function get_coupon()
    {
        if ($this->id == 0) {
            throw new Exception('Error: Coupon id not set.');
        }
		
		if ($this->property_uid == 0) {
            throw new Exception('Error: Property uid not set.');
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
				WHERE `coupon_id` = ".(int)$this->id." AND `property_uid` = ".(int)$this->property_uid;
        $result = doSelectSql($query);

        if (empty($result)) {
            return false;
        }

        foreach ($result as $r) {
            $this->id = (int)$r->coupon_id;
            $this->property_uid = (int)$r->property_uid;
            $this->coupon_code = $r->coupon_code;
            $this->valid_from = $r->valid_from;
            $this->valid_to = $r->valid_to;
			$this->amount = $r->amount;
            $this->is_percentage = (int)$r->is_percentage;
            $this->rooms_only = (int)$r->rooms_only;
            $this->booking_valid_from = $r->booking_valid_from;
			$this->booking_valid_to = $r->booking_valid_to;
            $this->guest_uid = (int)$r->guest_uid;
        }

        return true;
    }

    //Save new coupon
    public function commit_new_coupon()
    {
        if ($this->id > 0) {
            throw new Exception('Error: Coupon id already set. Are you sure you`re creating a new coupon?');
        }

        if ($this->property_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }
		
		$valid_from = str_replace('/','-',$this->valid_from);
		$valid_to = str_replace('/','-',$this->valid_to);
		$booking_valid_from = str_replace('/','-',$this->booking_valid_from);
		$booking_valid_to = str_replace('/','-',$this->booking_valid_to);

        $query = "INSERT INTO #__jomres_coupons
							(
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
							)
						VALUES 
							(
							".(int)$this->id.",
							".(int)$this->property_uid.",
							'".$this->coupon_code."',
							'".$valid_from."',
							'".$valid_to."',
							".$this->amount.",
							".(int)$this->is_percentage.",
							".(int)$this->rooms_only.",
							'".$booking_valid_from."',
							'".$booking_valid_to."',
							".(int)$this->guest_uid."
							)";
        $this->id = doInsertSql($query, '');
        
        if (!$this->id) {
            throw new Exception('Error: New coupon insert failed.');
        }
		
		$webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'coupon_saved';
        $webhook_notification->webhook_event_description    = 'Logs when coupon added.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $this->property_uid;
        $webhook_notification->data->coupon_id         		= $this->id;
        add_webhook_notification($webhook_notification);

        return true;
    }

    //Update existing coupon
    public function commit_update_coupon()
    {
        if ($this->id == 0) {
            throw new Exception('Error: Coupon id not set.');
        }

        if ($this->property_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }
		
		$valid_from = str_replace('/','-',$this->valid_from);
		$valid_to = str_replace('/','-',$this->valid_to);
		$booking_valid_from = str_replace('/','-',$this->booking_valid_from);
		$booking_valid_to = str_replace('/','-',$this->booking_valid_to);

        $query = "UPDATE #__jomres_coupons 
					SET 
						`coupon_id` = ".(int)$this->id.",
						`property_uid` = ".(int)$this->property_uid.",
						`coupon_code` = '".$this->coupon_code."',
						`valid_from` = '".$valid_from."',
						`valid_to` = '".$valid_to."',
						`amount` = ".$this->amount.",
						`is_percentage` = ".(int)$this->is_percentage.",
						`rooms_only` = ".(int)$this->rooms_only.", 
						`booking_valid_from` = '".$booking_valid_from."', 
						`booking_valid_to` = '".$booking_valid_to."', 
						`guest_uid` = ".(int)$this->guest_uid." 
					WHERE `coupon_id` = " .(int) $this->id." 
						AND `property_uid` = " .(int)$this->property_uid;

        if (!doInsertSql($query, '')) {
            throw new Exception('Error: Coupon update intert failed.');
        }
        
        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'coupon_updated';
        $webhook_notification->webhook_event_description    = 'Logs when coupon updated.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $this->property_uid;
        $webhook_notification->data->coupon_id         		= $this->id;
        add_webhook_notification($webhook_notification);
        
        return true;
    }

    //Delete coupon
    public function delete_coupon()
    {
        if ($this->id == 0) {
            throw new Exception('Error: Coupon id not set.');
        }

        if ($this->property_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }
		
		if ($this->get_coupon()) {
			$query = 'DELETE FROM #__jomres_coupons WHERE `coupon_id` = '.(int)$this->id.' AND `property_uid` = '.(int)$this->property_uid;
			if (!doInsertSql($query, '')) {
				throw new Exception('Error: Delete coupon failed.');
			}

			$webhook_notification                               = new stdClass();
			$webhook_notification->webhook_event                = 'coupon_deleted';
			$webhook_notification->webhook_event_description    = 'Logs when coupon deleted.';
			$webhook_notification->webhook_event_plugin         = 'core';
			$webhook_notification->data                         = new stdClass();
			$webhook_notification->data->property_uid           = $this->property_uid;
			$webhook_notification->data->coupon_id        		= $this->id;
			add_webhook_notification($webhook_notification);
			
			return true;
		}
		
		return false;
    }
}
