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
 * @package Jomres\Core\Classes
* Methods for collecting and anonymising various sets of data for GDPR compliance
*
*/
class jomres_gdpr_personal_information_collections
{
	 private $cms_id = 0;
	 
	public function __construct()
	{
		$this->cms_id = 0;
	}

	/**
	*
	* Set the CMS user id. Without it most other methods will throw an error
	*
	*/
	public function set_id($cms_id = 0)
	{
		if ((int)$cms_id == 0) {
			throw new Exception('CMS id not set ');
		}
		
		$users = jomres_cmsspecific_getCMSUsers((int) $cms_id);
		if (empty($users)) {
			throw new Exception('CMS user does not exist ');
		}
		
		$this->cms_id = (int) $cms_id;
	}
		
	/**
	 *
	 *
	 *
	 */

	public function can_redact_this_cms_user()
	{
		if ((int)$this->cms_id == 0) {
			throw new Exception('CMS id not set ');
		}
		
		$result = array( "can_redact" => true , "reason" => "" , "response" => array( "main" => jr_gettext('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', false) , "note" => jr_gettext('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', false) )  );
		
		$jomres_users = jomres_singleton_abstract::getInstance('jomres_users');
		$jomres_users->get_users();
		
		if (isset($jomres_users->users[$this->cms_id])) {
			$result = array( "can_redact" => false , "reason" => jr_gettext('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', false) , "response" => null );
		} else {
			$contracts = array();
			$query = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int)$this->cms_id."' ";
			$guests_uids = doSelectSql($query);
			
			// Because a new record is made in the guests table for each new property the guest registers in, we need to find all the guest uids for this user
			if (!empty($guests_uids)) {
				foreach ($guests_uids as $g) {
					$allGuestUids[ ] = $g->guests_uid;
				}

				$query = 'SELECT contract_uid FROM #__jomres_contracts WHERE guest_uid IN ('.jomres_implode($allGuestUids).') AND booked_out = 0 AND cancelled = 0 AND departure >= CURDATE()';
				$contracts = doSelectSql($query);
			}
			
			if (!empty($contracts)) {
				$result = array( "can_redact" => false , "reason" => jr_gettext('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', false) , "response" => null );
			}
		}
		
		
		return $result;
	}
	
	/**
	*
	* Collect PII for each and every property & the user's profile table
	*
	*/
	public function collect_pii()
	{
		if ((int)$this->cms_id == 0) {
			throw new Exception('CMS id not set ');
		}
		
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
		
		$tables = array();

		$tables['jomres_guests'] = array( "index" => 'mos_userid' );
		$tables['jomres_guest_profile'] = array( "index" => 'cms_user_id' );
		
		$query = "SELECT guests_uid , property_uid FROM #__jomres_guests WHERE mos_userid = ".(int)$this->cms_id;
		$result = doSelectSql($query);
		$guest_data  ['description'] = jr_gettext('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', false);
		$profile_data  ['description'] = jr_gettext('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', false);
		
		if (!empty($result)) {
			jr_import('jrportal_guests');
			$jrportal_guests = new jrportal_guests();
			
			$propertysToShow = array();
			foreach ($result as $r) {
				$propertysToShow[] = (int)$r->property_uid;
			}
			
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data_multi($propertysToShow);
			
			
			foreach ($result as $r) {
				$jrportal_guests->init_guest();
				$jrportal_guests->id = $r->guests_uid;
				$jrportal_guests->property_uid = $r->property_uid;
				$jrportal_guests->get_guest();
				
				$property_name = $current_property_details->multi_query_result[ $r->property_uid ][ 'property_name' ];
				$guest_data ['description'] = jr_gettext('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', false);
				$guest_data ['guest_data'][$r->guests_uid] = array (
					"property_name" => $property_name,
					"guest_details" => array (
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', false),
							"field" => "firstname",
							"contents" => $jrportal_guests->firstname
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME', false),
							"field" => "surname",
							"contents" => $jrportal_guests->surname
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE', false),
							"field" => "house",
							"contents" => $jrportal_guests->house
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET', false),
							"field" => "street",
							"contents" => $jrportal_guests->street
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN', false),
							"field" => "town",
							"contents" => $jrportal_guests->town
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false),
							"field" => "region",
							"contents" => find_region_name($jrportal_guests->region)
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false),
							"field" => "country",
							"contents" => getSimpleCountry($jrportal_guests->country)
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE', false),
							"field" => "postcode",
							"contents" => $jrportal_guests->postcode
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE', false),
							"field" => "tel_landline",
							"contents" => $jrportal_guests->tel_landline
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE', false),
							"field" => "tel_mobile",
							"contents" => $jrportal_guests->tel_mobile
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false),
							"field" => "email",
							"contents" => $jrportal_guests->email
							),
						array (
							"label" => jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO', false),
							"field" => "vat_number",
							"contents" => $jrportal_guests->vat_number
							)
					),
				);
			}
		}

		// Profile table data
		$query = 'SELECT
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
					FROM #__jomres_guest_profile 
					WHERE `cms_user_id` = ' .(int) $this->cms_id.' 
					LIMIT 1 ';
		$result = doSelectSql($query);

		
		if (!empty($result)) {
			foreach ($result as $r) {
				$profile_data ['description'] = jr_gettext('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', false);
				$profile_data['profile_data'] = array (
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', false),
						"field" => "firstname",
						"contents" => $this->jomres_encryption->decrypt($r->enc_firstname)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME', false),
						"field" => "surname",
						"contents" => $this->jomres_encryption->decrypt($r->enc_surname)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE', false),
						"field" => "house",
						"contents" => $this->jomres_encryption->decrypt($r->enc_house)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET', false),
						"field" => "street",
						"contents" => $this->jomres_encryption->decrypt($r->enc_street)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN', false),
						"field" => "town",
						"contents" => $this->jomres_encryption->decrypt($r->enc_town)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false),
						"field" => "region",
						"contents" => find_region_name($this->jomres_encryption->decrypt($r->enc_county))
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false),
						"field" => "country",
						"contents" => getSimpleCountry($this->jomres_encryption->decrypt($r->enc_country))
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE', false),
						"field" => "postcode",
						"contents" => $this->jomres_encryption->decrypt($r->enc_postcode)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE', false),
						"field" => "tel_landline",
						"contents" => $this->jomres_encryption->decrypt($r->enc_tel_landline)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE', false),
						"field" => "tel_mobile",
						"contents" => $this->jomres_encryption->decrypt($r->enc_tel_mobile)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false),
						"field" => "email",
						"contents" => $this->jomres_encryption->decrypt($r->enc_email)
						),
					array (
						"label" => jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO', false),
						"field" => "vat_number",
						"contents" => $this->jomres_encryption->decrypt($r->enc_vat_number)
						)
				);
			}
		}
		return array("guest_data" => $guest_data , "profile_data" => $profile_data);
	}
		
	/**
	 *
	 *
	 *
	 */

	public function redact_pii()
	{
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
		$redacted_string = jr_gettext('_JOMRES_GDPR_REDACTION_STRING', '_JOMRES_GDPR_REDACTION_STRING', false);
		$encrypted_redacted_string = $this->jomres_encryption->encrypt(jr_gettext('_JOMRES_GDPR_REDACTION_STRING', '_JOMRES_GDPR_REDACTION_STRING', false));
		unset($this->jomres_encryption);
		
		if ((int)$this->cms_id == 0) {
			throw new Exception('CMS id not set ');
		}
		
		//profile image
		$abs_path = JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.$this->cms_id.JRDS;
		$rel_path = JOMRES_IMAGELOCATION_RELPATH.'userimages/'.$this->cms_id.'/';
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_site_images('userimages');

		if (isset($jomres_media_centre_images->site_images['userimages'] [$this->cms_id])) {
			foreach ($jomres_media_centre_images->site_images['userimages'][$this->cms_id] as $file) {
				$path = $file['large'];
				$arr = explode("/", $path);
				$file_name = end($arr);

				//delete image from disk and db
				$jomres_media_centre_images->delete_image(0, 'userimages', $this->cms_id, $file_name, $abs_path, true);
			}
		}
		
		$query = "UPDATE #__jomres_guest_profile SET 
			`enc_firstname`='$encrypted_redacted_string',
			`enc_surname`='$encrypted_redacted_string',
			`enc_house`='$encrypted_redacted_string',
			`enc_street`='$encrypted_redacted_string',
			`enc_town`='$encrypted_redacted_string',
			`enc_county`='$encrypted_redacted_string',
			`enc_country`='$encrypted_redacted_string',
			`enc_postcode`='$encrypted_redacted_string',
			`enc_tel_landline`='$encrypted_redacted_string',
			`enc_tel_mobile`='$encrypted_redacted_string',
			`enc_email`='$encrypted_redacted_string',
			`enc_vat_number`='$encrypted_redacted_string'
			WHERE `cms_user_id` = " .(int) $this->cms_id;
		$result = doInsertSql($query, '');

		$query = "SELECT guests_uid , property_uid FROM #__jomres_guests WHERE mos_userid = ".(int)$this->cms_id;
		$result = doSelectSql($query);
		$guest_data = array();
		if (!empty($result)) {
			jr_import('jrportal_guests');
			$jrportal_guests = new jrportal_guests();
			
			$propertysToShow = array();
			foreach ($result as $r) {
				$propertysToShow[] = (int)$r->property_uid;
			}
			
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data_multi($propertysToShow);
			
			
			foreach ($result as $r) {
				$jrportal_guests->init_guest();
				$jrportal_guests->id = $r->guests_uid;
				$jrportal_guests->property_uid = $r->property_uid;
				$jrportal_guests->get_guest();
				
				$jrportal_guests->firstname		= $redacted_string;
				$jrportal_guests->surname		= $redacted_string;
				$jrportal_guests->house			= $redacted_string;
				$jrportal_guests->street		= $redacted_string;
				$jrportal_guests->town			= $redacted_string;
				$jrportal_guests->region		= $redacted_string;
				$jrportal_guests->country		= $redacted_string;
				$jrportal_guests->postcode		= $redacted_string;
				$jrportal_guests->tel_landline	= $redacted_string;
				$jrportal_guests->tel_mobile	= $redacted_string;
				$jrportal_guests->email			= $redacted_string;
				$jrportal_guests->vat_number	= $redacted_string;
				$jrportal_guests->discount		= $redacted_string;
				$jrportal_guests->blacklisted	= $redacted_string;
				
				$jrportal_guests->commit_update_guest();
			}
		}
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$tmpBookingHandler->resetTempGuestData();
	}
	
	/**
	*
	* Allows admins to redact guests who were not logged in/registered when their booking was made
	*
	*/
	public function redact_non_registered_guest_pii($guest_id = 0, $property_uid = 0)
	{
		
		if ((int)$guest_id == 0) {
			throw new Exception('guest_id not set ');
		}
		
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
		$redacted_string = jr_gettext('_JOMRES_GDPR_REDACTION_STRING', '_JOMRES_GDPR_REDACTION_STRING', false);
		unset($this->jomres_encryption);
		
		jr_import('jrportal_guests');
		$jrportal_guests = new jrportal_guests();
		$jrportal_guests->init_guest();
		$jrportal_guests->id = $guest_id;
		$jrportal_guests->property_uid = $property_uid;
		$jrportal_guests->get_guest();
		
		$jrportal_guests->firstname		= $redacted_string;
		$jrportal_guests->surname		= $redacted_string;
		$jrportal_guests->house			= $redacted_string;
		$jrportal_guests->street		= $redacted_string;
		$jrportal_guests->town			= $redacted_string;
		$jrportal_guests->region		= $redacted_string;
		$jrportal_guests->country		= $redacted_string;
		$jrportal_guests->postcode		= $redacted_string;
		$jrportal_guests->tel_landline	= $redacted_string;
		$jrportal_guests->tel_mobile	= $redacted_string;
		$jrportal_guests->email			= $redacted_string;
		$jrportal_guests->vat_number	= $redacted_string;
		$jrportal_guests->discount		= $redacted_string;
		$jrportal_guests->blacklisted	= $redacted_string;
		
		$jrportal_guests->commit_update_guest();
	}
}
