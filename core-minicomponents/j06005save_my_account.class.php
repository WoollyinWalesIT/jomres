<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2017 Vince Wooll
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

        $original_vat_number = $thisJRUser->vat_number;
        $original_vat_number_validated = (int) $thisJRUser->vat_number_validated;

        if ($firstname == '' || $surname == '' || $house == '' || $street == '' || $town == '' || $country == '' || $postcode == '' || $email == '') { // Not going to mess about. If they've bypassed the javascript to get this far we're not going to waste time telling them they've missed something out. Just return.
            return;
        }

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

        if (count($_FILES) == 1) {
            if (!is_dir(JOMRES_IMAGELOCATION_ABSPATH.'userimages')) {
                mkdir(JOMRES_IMAGELOCATION_ABSPATH.'userimages');
            }

            $uploadedImage = $_FILES[ 'image' ][ 'name' ];
            $filename = explode('.', $_FILES[ 'image' ][ 'name' ]);
            $numExtensions = (count($filename)) - 1;
            $fileExt = $filename[ $numExtensions ];
            $newFileName = 'userimage_'.(int) $thisJRUser->id.'.'.$fileExt;

            if ($uploadedImage) {
                $checkedImage = uploadImageFromPost('image', $newFileName, JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS);
            }
        }

        if ($return_url != '') {
            $return_url = base64_decode($return_url);
            jomresRedirect($return_url, '');
        } else {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), '');
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
