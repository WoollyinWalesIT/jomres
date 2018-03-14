<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005save_my_account
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if ($thisJRUser->id == 0) {
            return false;
        }
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $firstname = (string) jomresGetParam($_REQUEST, 'firstname', '');
        $surname = (string) jomresGetParam($_REQUEST, 'surname', '');
        $house = (string) jomresGetParam($_REQUEST, 'house', '');
        $street = (string) jomresGetParam($_REQUEST, 'street', '');
        $town = (string) jomresGetParam($_REQUEST, 'town', '');
        $region = (string) jomresGetParam($_REQUEST, 'region', '');
        $country = (string) jomresGetParam($_REQUEST, 'guest_country', '');
        $postcode = (string) jomresGetParam($_REQUEST, 'postcode', '');
        $landline = (string) jomresGetParam($_REQUEST, 'landline', '');
        $mobile = (string) jomresGetParam($_REQUEST, 'mobile', '');
        $fax = (string) jomresGetParam($_REQUEST, 'fax', '');
        $email = (string) jomresGetParam($_REQUEST, 'email', '');
        $vat_number = trim(filter_var($_REQUEST[ 'vat_number' ], FILTER_SANITIZE_STRING));
        $return_url = (string) jomresGetParam($_REQUEST, 'return_url', '');
		$delete_image = (int)jomresGetParam($_REQUEST, 'delete', 0);

        $original_vat_number = $thisJRUser->vat_number;
        $original_vat_number_validated = (int) $thisJRUser->vat_number_validated;

        if (
			!$delete_image &&
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
				$query = "UPDATE #__jomres_guest_profile SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',`town`='$town',`county`='$region',`country`='$country',`postcode`='$postcode',`tel_landline`='$landline',`tel_mobile`='$mobile',`tel_fax`='$fax',`email`='$email',`vat_number`='$vat_number',`vat_number_validated`=$original_vat_number_validated WHERE cms_user_id = ".(int) $thisJRUser->id;
				if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST', '_JOMRES_MR_AUDIT_UPDATE_GUEST', false))) {
					trigger_error('Unable to update guest details, mysql db failure', E_USER_ERROR);
				}

				$query = "UPDATE #__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',`town`='$town',`county`='$region',`country`='$country',`postcode`='$postcode',`tel_landline`='$landline',`tel_mobile`='$mobile',`tel_fax`='$fax',`email`='$email',`vat_number`='$vat_number',`vat_number_validated`=$original_vat_number_validated WHERE mos_userid = ".(int) $thisJRUser->id;
				doInsertSql($query, '');
			} else {
				$query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`,`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`tel_fax`,`email`,`vat_number`,`vat_number_validated`) VALUES ('".(int) $thisJRUser->id."','$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$fax','$email','$vat_number',0)";
				if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST', '_JOMRES_MR_AUDIT_INSERT_GUEST', false))) {
					trigger_error('Unable to insert guest details, mysql db failure', E_USER_ERROR);
				}

				$query = "UPDATE #__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',`town`='$town',`county`='$region',`country`='$country',`postcode`='$postcode',`tel_landline`='$landline',`tel_mobile`='$mobile',`tel_fax`='$fax',`email`='$email',`vat_number`='$vat_number',`vat_number_validated`=$original_vat_number_validated WHERE mos_userid = ".(int) $thisJRUser->id;
				doInsertSql($query, '');
			}

			if ($original_vat_number != $vat_number || $vat_number == '') {
				jr_import('vat_number_validation');
				$validation = new vat_number_validation();
				$response = $validation->vies_check($vat_number);
				$validation->save_subject('guest_registered_byprofile_id', array('profile_id' => $thisJRUser->id));
			}
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

        if ($return_url != '') {
            $return_url = base64_decode($return_url);
            jomresRedirect($return_url, '');
        } else {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), '');
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
