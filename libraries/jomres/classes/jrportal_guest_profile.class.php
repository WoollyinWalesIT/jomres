<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
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

class jrportal_guest_profile
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->jomres_encryption = new jomres_encryption();
		$this->init_guest_profile();
		
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init_guest_profile()
	{
		$this->id = 0; 
		$this->cms_user_id = 0; // the cms user id
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
		$this->drivers_license = '';
		$this->passport_number = '';
		$this->iban = '';
		$this->about_me = '';
		$this->image = JOMRES_IMAGES_RELPATH.'noimage.gif';
		
		$this->guest_reviews = array();
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Get guest details by id
	public function get_guest_profile()
	{
		if ($this->cms_user_id == 0) {
			throw new Exception('Error: Guest id not set.');
		}
		
		$query = "SELECT
					`id`,
					`cms_user_id`,
					`enc_firstname`,
					`enc_surname`,
					`enc_county`, 
					`enc_country`, 
					`enc_about_me`,
					`enc_house`,
					`enc_street`,
					`enc_town`,
					`enc_postcode`, 
					`enc_tel_landline`,
					`enc_tel_mobile`,
					`enc_email`,
					`enc_drivers_license`,
					`enc_passport_number`,
					`enc_iban`
				FROM `#__jomres_guest_profile` 
				WHERE `cms_user_id` = ".(int)$this->cms_user_id;
		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			$this->id								= (int) $r->id;
			$this->cms_user_id						= (int) $r->cms_user_id;
			$this->firstname						= $this->jomres_encryption->decrypt($r->enc_firstname);
			$this->surname							= $this->jomres_encryption->decrypt($r->enc_surname);
			$this->region							= $this->jomres_encryption->decrypt($r->enc_county);
			$this->country							= $this->jomres_encryption->decrypt($r->enc_country);
			$this->about_me							= $this->jomres_encryption->decrypt($r->enc_about_me);
			
			$this->house							= $this->jomres_encryption->decrypt($r->enc_house);
			$this->street							= $this->jomres_encryption->decrypt($r->enc_street);
			$this->town								= $this->jomres_encryption->decrypt($r->enc_town);
			$this->postcode							= $this->jomres_encryption->decrypt($r->enc_postcode);
			$this->tel_landline						= $this->jomres_encryption->decrypt($r->enc_tel_landline);
			$this->tel_mobile						= $this->jomres_encryption->decrypt($r->enc_tel_mobile);
			$this->email							= $this->jomres_encryption->decrypt($r->enc_email);
			$this->drivers_license					= $this->jomres_encryption->decrypt($r->enc_drivers_license);
			$this->passport_number					= $this->jomres_encryption->decrypt($r->enc_passport_number);
			$this->iban								= $this->jomres_encryption->decrypt($r->enc_iban);
			
			$images = scandir_getfiles(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.$this->cms_user_id.JRDS.'medium');
			if (isset($images[0])) {
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.$this->cms_user_id.JRDS.'medium'.JRDS.$images[0])) {
					$this->image = JOMRES_IMAGELOCATION_RELPATH.'userimages'.JRDS.$this->cms_user_id.JRDS.'medium'.JRDS.$images[0];
				} 
			}
		}

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_guest_reviews()
	{
		if ($this->cms_user_id == 0) {
			throw new Exception('Error: cms_user_id not set.');
		}
		
		$query = "SELECT id , cms_user_id , guests_uid , property_uid , review , last_changed FROM #__jomres_guest_reviews WHERE cms_user_id = ".(int)$this->cms_user_id." ORDER BY last_changed DESC";
		$guest_reviews = doSelectSql($query);
		if (!empty($guest_reviews)) {
			foreach ($guest_reviews as $review ) {
				$this->guest_reviews [ $review->property_uid ] = array ("id" =>$review->id , "cms_user_id" =>$review->cms_user_id ,  "guests_uid" =>$review->guests_uid , "property_uid" =>$review->property_uid , "review" =>$review->review , "last_changed" =>$review->last_changed  );
			}
			
		}
		return $this->guest_reviews;
	}
		
	/**
	 * 
	 *
	 *
	 */

	public function save_guest_review( $guests_id = 0 , $property_uid = 0 , $review = ''  )
	{
		if ($this->cms_user_id == 0) {
			throw new Exception('Error: cms_user_id not set.');
		}
	
		if ($guests_id == 0) {
			throw new Exception('Error: guests_id not set.');
		}
		
		if ($property_uid == 0) {
			throw new Exception('Error: property id not set.');
		}
		
		$query = "SELECT id FROM #__jomres_guest_reviews WHERE property_uid = ".(int)$property_uid." AND cms_user_id = ".(int)$this->cms_user_id;
		if (empty(doSelectSql($query))) {
			$query = "INSERT INTO #__jomres_guest_reviews 
				(
				`cms_user_id`,
				`guests_uid`,
				`property_uid`,
				`review`,
				`last_changed`
				)
				VALUES 
				(
				".(int)$this->cms_user_id.",
				".(int)$guests_id.",
				".(int)$property_uid.",
				'".$review."',
				'".date("Y-m-d H:i:s")."'
				)";
			} 
		else {
			$query = "UPDATE #__jomres_guest_reviews 
				SET
				`review` = '".$review."',
				`last_changed` = '".date("Y-m-d H:i:s")."'
				WHERE 
				`cms_user_id` = ".(int)$this->cms_user_id." AND
				`property_uid` = ".(int)$property_uid;
			}
		
		$result = doInsertSql($query);
	}

}
