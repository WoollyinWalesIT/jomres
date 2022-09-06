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
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06005save_my_account
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
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if (!$jomres_gdpr_optin_consent->user_consents_to_storage()) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=opted_out&jr_redirect_url='.getCurrentUrl()), '');
		}

		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if ($thisJRUser->id == 0) {
			return false;
		}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$firstname = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'firstname', ''));
		$surname = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'surname', ''));
		$house = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'house', ''));
		$street = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'street', ''));
		$town = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'town', ''));
		$region = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'region', ''));
		$country = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'guest_country', ''));
		$postcode = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'postcode', ''));
		$landline = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'landline', ''));
		$mobile = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'mobile', ''));
		$fax = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'fax', ''));
		$email = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'email', ''));
		$preferences = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'preferences', ''));
		
		$drivers_license = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'drivers_license', ''));
		$passport_number = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'passport_number', ''));
		$iban = $this->jomres_encryption->encrypt((string) jomresGetParam($_REQUEST, 'iban', ''));

		$about_me = $this->convert_lessgreaterthans(jomresGetParam($_REQUEST, 'about_me', ''));
		$about_me = $this->jomres_encryption->encrypt(strip_tags($about_me, '<p><br>'));
		
		$vat_number = trim(filter_var($_REQUEST[ 'vat_number' ], FILTER_SANITIZE_STRING));
		$return_url = (string) jomresGetParam($_REQUEST, 'return_url', '');
		$delete_image = (int)jomresGetParam($_REQUEST, 'delete', 0);

		$original_vat_number = $thisJRUser->vat_number;
		$original_vat_number_validated = (int) $thisJRUser->vat_number_validated;

		if (!$delete_image &&
				(
				$firstname == '' ||
				$surname == '' ||
				$street == '' ||
				$town == '' ||
				$country == '' ||
				$email == ''
				)
			) { // Not going to mess about. If they've bypassed the javascript to get this far we're not going to waste time telling them they've missed something out. Just return.
			return;
		}

		if (!$delete_image) {
			$query = 'SELECT id FROM #__jomres_guest_profile WHERE cms_user_id = '.(int) $thisJRUser->id;
			$result = doSelectSql($query);

			// Whilst the profiles table might be empty, the guests table might not. We'll update the guests table as well as the profiles table, at the same time.
			if ($thisJRUser->profile_id > 0) {
				$query = "UPDATE #__jomres_guest_profile SET 
					`enc_firstname`='".$firstname."',
					`enc_surname`='".$surname."',
					`enc_house`='".$house."',
					`enc_street`='".$street."',
					`enc_town`='".$town."',
					`enc_county`='".$region."',
					`enc_country`='".$country."',
					`enc_postcode`='".$postcode."',
					`enc_tel_landline`='".$landline."',
					`enc_tel_mobile`='".$mobile."',
					`enc_email`='".$email."',
					`enc_drivers_license`='".$drivers_license."',
					`enc_passport_number`='".$passport_number."',
					`enc_iban`='".$iban."',
					`enc_about_me`='".$about_me."',
					`enc_vat_number`='".$this->jomres_encryption->encrypt($vat_number)."',
					`enc_preferences`='".$preferences."',
					`vat_number_validated`=$original_vat_number_validated 
					WHERE cms_user_id = ".(int) $thisJRUser->id;
					
				if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST', '_JOMRES_MR_AUDIT_UPDATE_GUEST', false))) {
					trigger_error('Unable to update guest details, mysql db failure', E_USER_ERROR);
				}

				$query = "UPDATE #__jomres_guests SET 
					`enc_firstname`='".$firstname."',
					`enc_surname`='".$surname."',
					`enc_house`='".$house."',
					`enc_street`='".$street."',
					`enc_town`='".$town."',
					`enc_county`='".$region."',
					`enc_country`='".$country."',
					`enc_postcode`='".$postcode."',
					`enc_tel_landline`='".$landline."',
					`enc_tel_mobile`='".$mobile."',
					`enc_email`='".$email."',
					`enc_vat_number`='".$this->jomres_encryption->encrypt($vat_number)."',
					`enc_preferences`='".$preferences."',
					`vat_number_validated`=$original_vat_number_validated 
				WHERE mos_userid = ".(int) $thisJRUser->id;
				
				doInsertSql($query, '');
			} else {
				$query = "INSERT INTO #__jomres_guest_profile (
					`cms_user_id`,
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
					`enc_drivers_license`,
					`enc_passport_number`,
					`enc_iban`,
					`enc_about_me`,
					`enc_vat_number`,
					`enc_preferences`,
					`vat_number_validated`) 
					VALUES (
					'".(int) $thisJRUser->id."',
					'$firstname',
					'$surname',
					'$house',
					'$street',
					'$town',
					'$region',
					'$country',
					'$postcode',
					'$landline',
					'$mobile',
					'$email',
					'$drivers_license',
					'$passport_number',
					'$iban',
					'$about_me',
					'".$this->jomres_encryption->encrypt($vat_number)."',
					'$preferences',
					0)";
				
				if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST', '_JOMRES_MR_AUDIT_INSERT_GUEST', false))) {
					trigger_error('Unable to insert guest details, mysql db failure', E_USER_ERROR);
				}

				$query = "UPDATE #__jomres_guests SET 
					`enc_firstname`='$firstname',
					`enc_surname`='$surname',
					`enc_house`='$house',
					`enc_street`='$street',
					`enc_town`='$town',
					`enc_county`='$region',
					`enc_country`='$country',
					`enc_postcode`='$postcode',
					`enc_tel_landline`='$landline',
					`enc_tel_mobile`='$mobile',
					`enc_email`='$email',
					`enc_vat_number`='".$this->jomres_encryption->encrypt($vat_number)."',
					`vat_number_validated`=$original_vat_number_validated 
					WHERE mos_userid = ".(int) $thisJRUser->id;
				doInsertSql($query, '');
			}

			if ($original_vat_number != $vat_number || $vat_number == '') {
				jr_import('vat_number_validation');
				$validation = new vat_number_validation();
				$response = $validation->vies_check($vat_number);
				$validation->save_subject('guest_registered_byprofile_id', array('profile_id' => $thisJRUser->id));
			}
		}
		
		if (!is_dir(JOMRES_IMAGELOCATION_ABSPATH.'userimages')) {
			mkdir(JOMRES_IMAGELOCATION_ABSPATH.'userimages');
		}

		if (!is_dir(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.$thisJRUser->id)) {
			mkdir(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.$thisJRUser->id);
		}

		//profile image
		$abs_path = JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.$thisJRUser->id.JRDS;
		$rel_path = JOMRES_IMAGELOCATION_RELPATH.'userimages/'.$thisJRUser->id.'/';


		if ($delete_image) {
			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');

			$file_name = (string)jomresGetParam($_REQUEST, 'file', '');
			if ($file_name == '') {
				jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), '');
			}
			
			//delete image from disk and db
			if (!$jomres_media_centre_images->delete_image(0, 'userimages', $thisJRUser->id, $file_name, $abs_path, true)) {
				jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), "Boo, we couldn't delete it. I'm going to have a little cry in the corner now.");
			} else {
				jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), "Yay, we'll deleted this sukka");
			}
		} else {
			if (!empty($_FILES) && count($_FILES) == 1) { //we won`t allow more than one file to be uploaded
				jr_import('jomres_media_centre_uploader');

				$script_url = JOMRES_SITEPAGE_URL.'&task=save_my_account&delete=1&resource_type=userimages&resource_id='.$thisJRUser->id;

				$upload_handler = new UploadHandler(array(
					//class params
					'accept_file_types' => '/\.(jpe?g|png)$/i',
					'script_url' => $script_url,
					'upload_dir' => $abs_path,
					'upload_url' => $rel_path,
					'image_versions' => array(
						// The empty image version key defines options for the original/large image:
						'' => array(
							'max_width' => (int)$jrConfig[ 'maxwidth' ],
							'max_height' => (int)$jrConfig[ 'maxwidth' ]
						),
						'medium' => array(
							'max_width' => (int)$jrConfig[ 'thumbnail_property_header_max_width' ],
							'max_height' => (int)$jrConfig[ 'thumbnail_property_header_max_height' ]
						),
						'thumbnail' => array(
							'max_width' => (int)$jrConfig[ 'thumbnail_property_list_max_width' ],
							'max_height' => (int)$jrConfig[ 'thumbnail_property_list_max_height' ]
						)
					),
					'print_response' => false,
					//jomres specific params, required for post upload processing
					'property_uid' => 0,
					'resource_type' => 'userimages',
					'resource_id' => $thisJRUser->id,
					'resource_id_required' => true
				));
			}
		}

		// Session update
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		
		$tmpBookingHandler->updateGuestField('firstname', $this->jomres_encryption->decrypt($firstname));
		$tmpBookingHandler->updateGuestField('surname', $this->jomres_encryption->decrypt($surname));
		$tmpBookingHandler->updateGuestField('house', $this->jomres_encryption->decrypt($house));
		$tmpBookingHandler->updateGuestField('street', $this->jomres_encryption->decrypt($street));
		$tmpBookingHandler->updateGuestField('town', $this->jomres_encryption->decrypt($town));
		$tmpBookingHandler->updateGuestField('region', $this->jomres_encryption->decrypt($region));
		$tmpBookingHandler->updateGuestField('country', $this->jomres_encryption->decrypt($country));
		$tmpBookingHandler->updateGuestField('postcode', $this->jomres_encryption->decrypt($postcode));
		$tmpBookingHandler->updateGuestField('tel_landline', $this->jomres_encryption->decrypt($landline));
		$tmpBookingHandler->updateGuestField('tel_mobile', $this->jomres_encryption->decrypt($mobile));
		$tmpBookingHandler->updateGuestField('email', $this->jomres_encryption->decrypt($email));
		
		if ($return_url != '') {
			$return_url = jr_base64url_decode($return_url);
			jomresRedirect($return_url, '');
		} else {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), '');
		}
	}

	public function convert_lessgreaterthans($string)
	{
		$string = str_replace('&#60;', '<', $string);
		$string = str_replace('&#62;', '>', $string);

		return $string;
	}
	

	public function getRetVals()
	{
		return null;
	}
}
