<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jrportal_booking_manager
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->init();
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function init()
	{
		$this->contract_uid = 0; // contract_uid
		$this->property_uid = 0; // property_uid
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Guest checkin
	public function guest_checkin()
	{
		if ($this->contract_uid == 0) {
			throw new Exception('Error: Contract uid not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = "UPDATE #__jomres_contracts SET 
						`booked_in`= 1, 
						`true_arrival` = '".date("Y/m/d")."' 
					WHERE 
						`contract_uid` = ".(int)$this->contract_uid." 
					AND 
						`property_uid` = ".(int)$this->property_uid;
		
		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Guest checkin insert failed.');
		}
		
		addBookingNote($this->contract_uid,$this->property_uid,jr_gettext('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','_JOMRES_MR_AUDIT_BOOKEDGUESTIN',FALSE));
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_checkedin';
		$webhook_notification->webhook_event_description	= 'Logs when guests are checked in.';
		$webhook_notification->webhook_event_plugin		 = 'book_guest_in_out';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->contract_uid		   = $this->contract_uid;
		$webhook_notification->data->property_uid		   = $this->property_uid;
		add_webhook_notification($webhook_notification);

		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Undo guest checkin
	public function undo_guest_checkin()
	{
		if ($this->contract_uid == 0) {
			throw new Exception('Error: Contract uid not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = "UPDATE #__jomres_contracts SET 
						`booked_in`= 0, 
						`true_arrival` = '' 
					WHERE 
						`contract_uid` = ".(int)$this->contract_uid." 
					AND 
						`property_uid` = ".(int)$this->property_uid;
		
		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Undo guest checkin insert failed.');
		}
		
		addBookingNote($this->contract_uid,$this->property_uid,"Undone guest checkin");
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_checkedin_undone';
		$webhook_notification->webhook_event_description	= 'Logs when guests checked in is undone.';
		$webhook_notification->webhook_event_plugin		 = 'book_guest_in_out';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->contract_uid		   = $this->contract_uid;
		$webhook_notification->data->property_uid		   = $this->property_uid;
		add_webhook_notification($webhook_notification);

		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Guest checkout
	public function guest_checkout()
	{
		if ($this->contract_uid == 0) {
			throw new Exception('Error: Contract uid not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = "UPDATE #__jomres_contracts SET 
						`bookedout`= 1, 
						`bookedout_timestamp` = '".date("Y-m-d H:i:s")."' 
					WHERE 
						`contract_uid` = ".(int)$this->contract_uid." 
					AND 
						`property_uid` = ".(int)$this->property_uid;
		
		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Guest checkout insert failed.');
		}
		
		addBookingNote($this->contract_uid,$this->property_uid,jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT',FALSE));
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_checkedout';
		$webhook_notification->webhook_event_description	= 'Logs when guests are checked out.';
		$webhook_notification->webhook_event_plugin		 = 'book_guest_in_out';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->contract_uid		   = $this->contract_uid;
		$webhook_notification->data->property_uid		   = $this->property_uid;
		add_webhook_notification($webhook_notification);

		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Undo guest checkout
	public function undo_guest_checkout()
	{
		if ($this->contract_uid == 0) {
			throw new Exception('Error: Contract uid not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = "UPDATE #__jomres_contracts SET 
						`bookedout`= 0, 
						`bookedout_timestamp` = '1970-01-01 00:00:01' 
					WHERE 
						`contract_uid` = ".(int)$this->contract_uid." 
					AND 
						`property_uid` = ".(int)$this->property_uid;
		
		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Undo guest checkout insert failed.');
		}
		
		addBookingNote($this->contract_uid,$this->property_uid,"Undone guest checkout");
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_checkedout_undone';
		$webhook_notification->webhook_event_description	= 'Logs when guests checked out is undone.';
		$webhook_notification->webhook_event_plugin		 = 'book_guest_in_out';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->contract_uid		   = $this->contract_uid;
		$webhook_notification->data->property_uid		   = $this->property_uid;
		add_webhook_notification($webhook_notification);

		return true;
	}
}
