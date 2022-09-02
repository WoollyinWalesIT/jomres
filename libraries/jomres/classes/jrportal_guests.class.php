<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
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

class jrportal_guests
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->jomres_encryption = new jomres_encryption();
		$this->init_guest();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init_guest()
	{
		$this->id = 0; // guest_uid
		$this->cms_user_id = 0; // mos_userid the cms user id
		$this->firstname = '';
		$this->surname = '';
		$this->house = '';
		$this->street = '';
		$this->town = '';
		$this->region = ''; //county
		$this->country = '';
		$this->postcode = '';
		$this->tel_landline = '';
		$this->tel_mobile = '';
		$this->property_uid = 0;
		$this->email = '';
		$this->discount = 0;
		$this->vat_number = '';
		$this->vat_number_validated = 0;
		$this->vat_number_validation_response = '';
		$this->blacklisted = 0;
		$this->partner_id = 0;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Get guest details by id
	public function get_guest()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest id not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = "SELECT
					`guests_uid`,
					`mos_userid`,
					`enc_firstname`,
					`enc_surname`,
					`enc_house`,
					`enc_street`,
					`enc_town`,
					`enc_county`, 
					`enc_country`, 
					`enc_postcode`, 
					`enc_tel_landline`,
					`enc_tel_mobile`,
					`property_uid`,
					`enc_email`,
					`discount`,
					`enc_preferences`,
					`enc_vat_number`,
					`vat_number_validated`,
					`vat_number_validation_response`,
					`partner_id`,
					`blacklisted`
				FROM `#__jomres_guests` 
				WHERE `guests_uid` = ".(int)$this->id." AND `property_uid` = ".(int)$this->property_uid;
		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			$this->id = (int) $r->guests_uid;
			$this->cms_user_id						= (int) $r->mos_userid;
			$this->firstname						= $this->jomres_encryption->decrypt($r->enc_firstname);
			$this->surname							= $this->jomres_encryption->decrypt($r->enc_surname);
			$this->house							= $this->jomres_encryption->decrypt($r->enc_house);
			$this->street							= $this->jomres_encryption->decrypt($r->enc_street);
			$this->town								= $this->jomres_encryption->decrypt($r->enc_town);
			$this->region							= $this->jomres_encryption->decrypt($r->enc_county);
			$this->country							= $this->jomres_encryption->decrypt($r->enc_country);
			$this->postcode							= $this->jomres_encryption->decrypt($r->enc_postcode);
			$this->tel_landline						= $this->jomres_encryption->decrypt($r->enc_tel_landline);
			$this->tel_mobile						= $this->jomres_encryption->decrypt($r->enc_tel_mobile);
			$this->property_uid						= (int) $r->property_uid;
			$this->email							= $this->jomres_encryption->decrypt($r->enc_email);
			$this->discount							= (int) $r->discount;
			$this->vat_number						= $this->jomres_encryption->decrypt($r->enc_vat_number);
			$this->vat_number_validated				= (int) $r->vat_number_validated;
			$this->vat_number_validation_response	= $r->vat_number_validation_response;
			$this->partner_id						= (int) $r->partner_id;
			$this->blacklisted						= (int) $r->blacklisted;
			
		}

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Save new guest
	public function commit_new_guest()
	{
		if ($this->id > 0) {
			throw new Exception('Error: Guest id already set. Are you sure you`re creating a new guest?');
		}

		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		// A little hacky :s 
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$original_guestDeets = $tmpBookingHandler->tmpguest;
		
		$tmpBookingHandler->tmpguest['firstname'] = $this->firstname;
		$tmpBookingHandler->tmpguest['surname'] = $this->surname;
		$tmpBookingHandler->tmpguest['email'] = $this->email;
		
		$this->cms_user_id = jomres_cmsspecific_createNewUser($this->email);
		$tmpBookingHandler->tmpguest = $original_guestDeets;
		
		//validate EU VAT info - not currencly needed anywhere but here for future use..
		if (trim($this->vat_number) != '') {
			jr_import('vat_number_validation');
			$validation = new vat_number_validation();
			$validation->vies_check($this->vat_number);
			
			$this->vat_number = $validation->validation_messages[ 'clean_vat_no' ];
			$this->vat_number_validated = (int)$validation->vat_number_validated;
			$this->vat_number_validation_response = htmlspecialchars($validation->validation_messages[ 'message' ], ENT_QUOTES);
		}

		$query = "INSERT INTO #__jomres_guests
							(
							`mos_userid`,
							`enc_firstname`,
							`enc_surname`,
							`enc_house`,
							`enc_street`,
							`enc_town`,
							`enc_county`, 
							`enc_country`, 
							`enc_postcode`, 
							`enc_tel_landline`,
							`enc_tel_mobile`,
							`property_uid`,
							`enc_email`,
							`discount`,
							`enc_vat_number`,
							`vat_number_validated`,
							`vat_number_validation_response`,
							`partner_id` 
							)
						VALUES 
							(
							".(int)$this->cms_user_id.",
							'".$this->jomres_encryption->encrypt($this->firstname)."',
							'".$this->jomres_encryption->encrypt($this->surname)."',
							'".$this->jomres_encryption->encrypt($this->house)."',
							'".$this->jomres_encryption->encrypt($this->street)."',
							'".$this->jomres_encryption->encrypt($this->town)."',
							'".$this->jomres_encryption->encrypt($this->region)."',
							'".$this->jomres_encryption->encrypt($this->country)."',
							'".$this->jomres_encryption->encrypt($this->postcode)."',
							'".$this->jomres_encryption->encrypt($this->tel_landline)."',
							'".$this->jomres_encryption->encrypt($this->tel_mobile)."',
							".(int)$this->property_uid.",
							'".$this->jomres_encryption->encrypt($this->email)."',
							".(int)$this->discount.",
							'".$this->jomres_encryption->encrypt(trim($this->vat_number))."',
							".(int)$this->vat_number_validated.",
							'".$this->vat_number_validation_response."',
							".(int)$this->partner_id." 
							)";
		$this->id = doInsertSql($query, '');

		if (!$this->id) {
			throw new Exception('Error: New guest insert failed.');
		}
		

		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_saved';
		$webhook_notification->webhook_event_description	= 'Logs when guest added.';
		$webhook_notification->webhook_event_plugin		 = 'core';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		$webhook_notification->data->guest_uid		 		= $this->id;
		add_webhook_notification($webhook_notification);

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Update existing guest
	public function commit_update_guest()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest id not set.');
		}

		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		//validate EU VAT info - not currently needed anywhere but here for future use..
		if (trim($this->vat_number) != '') {
			jr_import('vat_number_validation');
			$validation = new vat_number_validation();
			$validation->vies_check($this->vat_number);
			
			$this->vat_number = $validation->validation_messages[ 'clean_vat_no' ];
			$this->vat_number_validated = (int)$validation->vat_number_validated;
			$this->vat_number_validation_response = htmlspecialchars($validation->validation_messages[ 'message' ], ENT_QUOTES);
		}

		$query = "UPDATE #__jomres_guests 
					SET 
						`guests_uid` = ".(int)$this->id.",
						`mos_userid` = ".(int)$this->cms_user_id.",
						`enc_firstname` = '".$this->jomres_encryption->encrypt($this->firstname)."',
						`enc_surname` = '".$this->jomres_encryption->encrypt($this->surname)."',
						`enc_house` = '".$this->jomres_encryption->encrypt($this->house)."',
						`enc_street` = '".$this->jomres_encryption->encrypt($this->street)."',
						`enc_town` = '".$this->jomres_encryption->encrypt($this->town)."',
						`enc_county` = '".$this->jomres_encryption->encrypt($this->region)."', 
						`enc_country` = '".$this->jomres_encryption->encrypt($this->country)."', 
						`enc_postcode` = '".$this->jomres_encryption->encrypt($this->postcode)."', 
						`enc_tel_landline` = '".$this->jomres_encryption->encrypt($this->tel_landline)."',
						`enc_tel_mobile` = '".$this->jomres_encryption->encrypt($this->tel_mobile)."',
						`property_uid` = ".(int)$this->property_uid.",
						`enc_email` = '".$this->jomres_encryption->encrypt($this->email)."',
						`discount` = ".(int)$this->discount.",
						`enc_vat_number` = '".$this->jomres_encryption->encrypt($this->vat_number)."',
						`vat_number_validated` = ".(int)$this->vat_number_validated.",
						`vat_number_validation_response` = '".$this->vat_number_validation_response."',
						`partner_id` = ".(int)$this->partner_id.",
						`blacklisted` = ".(int)$this->blacklisted."  
					WHERE `guests_uid` = " .(int) $this->id." 
						AND `property_uid` = " .(int)$this->property_uid;

		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Guest update intert failed.');
		}
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_updated';
		$webhook_notification->webhook_event_description	= 'Logs when guest updated.';
		$webhook_notification->webhook_event_plugin		 = 'core';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		$webhook_notification->data->guest_uid		 		= $this->id;
		add_webhook_notification($webhook_notification);
		
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Delete guest
	public function delete_guest()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest id not set.');
		}

		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($this->get_guest() && $this->guest_can_be_deleted()) {
			$query = 'DELETE FROM #__jomres_guests WHERE `guests_uid` = '.(int) $this->id.' AND `property_uid` = '.(int)$this->property_uid;
			if (!doInsertSql($query, '')) {
				throw new Exception('Error: Delete guest failed.');
			}

			$webhook_notification							   = new stdClass();
			$webhook_notification->webhook_event				= 'guest_deleted';
			$webhook_notification->webhook_event_description	= 'Logs when guest deleted.';
			$webhook_notification->webhook_event_plugin		 = 'core';
			$webhook_notification->data						 = new stdClass();
			$webhook_notification->data->property_uid		   = $this->property_uid;
			$webhook_notification->data->guest_uid				= $this->id;
			add_webhook_notification($webhook_notification);
			
			return true;
		}
		
		return false;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//check if a guest can be deleted
	function guest_can_be_deleted()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest id not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		$query = "SELECT `contract_uid` FROM #__jomres_contracts WHERE `guest_uid` = ".(int)$this->id." AND ( `cancelled` != 1 AND `bookedout` != 1 ) " ;
		$result = doSelectSql($query);

		if (empty($result)) {
			return true;
		}
		
		return false;
	}
		
	/**
	 * 
	 *
	 *
	 */

	function get_guest_id_by_cms_id($cms_id)
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		$cms_id = (int)$cms_id;

		$query = "SELECT
					`guests_uid`
				FROM `#__jomres_guests` 
				WHERE `mos_userid` = ".(int)$cms_id." AND `property_uid` = ".(int)$this->property_uid;
		return doSelectSql($query, 1  ) ;
	}
}
