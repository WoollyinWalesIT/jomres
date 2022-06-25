<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
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

class jrportal_invoice_pii_details
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->invoice_id = 0;
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
	
	}
	
	/**
	 * 
	 *
	 *
	 */

	// Retrieve the PII data for this invoice's buyer
	public function get_pii_buyer()
	{
		if ($this->invoice_id == 0) {
			throw new Exception('Error: Invoice id not set');
		}

		$query = "SELECT
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
					`enc_email`,
					`enc_vat_number`
				FROM `#__jomres_invoice_pii_buyers` WHERE invoice_id = ".(int)$this->invoice_id."
				";
		$user_details = doSelectSql($query , 2 );
		if (empty($user_details)){
			throw new Exception('Error: Buyer details could not be found');
		}
		
		return array (
			'firstname'		=> $this->jomres_encryption->decrypt($user_details['enc_firstname']),
			'surname'		=> $this->jomres_encryption->decrypt($user_details['enc_surname']),
			'house'			=> $this->jomres_encryption->decrypt($user_details['enc_house']),
			'street'		=> $this->jomres_encryption->decrypt($user_details['enc_street']),
			'town'			=> $this->jomres_encryption->decrypt($user_details['enc_town']),
			'county'		=> $this->jomres_encryption->decrypt($user_details['enc_county']),
			'country'		=> $this->jomres_encryption->decrypt($user_details['enc_country']),
			'postcode'		=> $this->jomres_encryption->decrypt($user_details['enc_postcode']),
			'tel_landline'	=> $this->jomres_encryption->decrypt($user_details['enc_tel_landline']),
			'tel_mobile'	=> $this->jomres_encryption->decrypt($user_details['enc_tel_mobile']),
			'email'			=> $this->jomres_encryption->decrypt($user_details['enc_email']),
			'vat_number'	=> $this->jomres_encryption->decrypt($user_details['enc_vat_number'])
		);
	}
	
	/**
	 * 
	 *
	 *
	 */

	// Retrieve the PII data for this invoice's buyer
	public function get_pii_seller()
	{
		if ($this->invoice_id == 0) {
			throw new Exception('Error: Invoice id not set');
		}

		$query = "SELECT
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
					`enc_email`,
					`enc_vat_number`
				FROM `#__jomres_invoice_pii_sellers` WHERE invoice_id = ".(int)$this->invoice_id."
				";

		$user_details = doSelectSql($query , 2 );

		if (empty($user_details)){
			throw new Exception('Error: Seller details could not be found');
		}

		$response = array (
			'firstname'		=> $this->jomres_encryption->decrypt($user_details['enc_firstname']),
			'surname'		=> $this->jomres_encryption->decrypt($user_details['enc_surname']),
			'house'			=> $this->jomres_encryption->decrypt($user_details['enc_house']),
			'street'		=> $this->jomres_encryption->decrypt($user_details['enc_street']),
			'town'		=> $this->jomres_encryption->decrypt($user_details['enc_town']),
			'county'		=> $this->jomres_encryption->decrypt($user_details['enc_county']),
			'country'		=> $this->jomres_encryption->decrypt($user_details['enc_country']),
			'postcode'		=> $this->jomres_encryption->decrypt($user_details['enc_postcode']),
			'tel_landline'	=> $this->jomres_encryption->decrypt($user_details['enc_tel_landline']),
			'tel_mobile'	=> $this->jomres_encryption->decrypt($user_details['enc_tel_mobile']),
			'email'			=> $this->jomres_encryption->decrypt($user_details['enc_email']),
			'vat_number'	=> $this->jomres_encryption->decrypt($user_details['enc_vat_number'])
		);
		return $response;
		
	}
}
