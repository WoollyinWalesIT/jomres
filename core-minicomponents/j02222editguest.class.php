<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j02222editguest
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }
        $guestUid = intval(jomresGetParam($_REQUEST, 'guestUid', 0));
        $defaultProperty = getDefaultProperty();

        $vat_validation = array();
        $output = array();

        if ($guestUid != 0) {
            $status = 'status=no,toolbar=20,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no';
            $link = makePopupLink(JOMRES_SITEPAGE_URL_AJAX."&task=editCreditcard&popup=1&guestUid=$guestUid", jr_gettext('_JOMRES_MR_CREDITCARD_EDIT', '_JOMRES_MR_CREDITCARD_EDIT', false));
            //$link="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"\">".jr_gettext('_JOMRES_MR_CREDITCARD_EDIT','_JOMRES_MR_CREDITCARD_EDIT')."</a>";
            $output[ 'CREDITCARDLINK' ] = $link;
            $query = "SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,tel_fax,ccard_no,ccard_issued,ccard_expiry,ccard_iss_no,ccard_name,email,discount,vat_number,vat_number_validated,vat_number_validation_response FROM #__jomres_guests WHERE guests_uid = '".(int) $guestUid."'  AND property_uid = '".(int) $defaultProperty."'";
            $guestData = doSelectSql($query);
            $numberOfReturns = count($guestData);
            if ($numberOfReturns > 0) {
                foreach ($guestData as $data) {
                    $output[ 'FIRSTNAME' ] = $data->firstname;
                    $output[ 'SURNAME' ] = $data->surname;
                    $output[ 'HOUSE' ] = $data->house;
                    $output[ 'STREET' ] = $data->street;
                    $output[ 'TOWN' ] = $data->town;
                    $output[ 'REGION' ] = setupRegions($data->country, $data->county);
                    $output[ 'COUNTRY' ] = createSimpleCountriesDropdown($data->country);
                    $output[ 'POSTCODE' ] = $data->postcode;
                    $output[ 'LANDLINE' ] = $data->tel_landline;
                    $output[ 'MOBILE' ] = $data->tel_mobile;
                    $output[ 'FAX' ] = $data->tel_fax;
                    $output[ 'EMAIL' ] = $data->email;
                    $output[ 'DISCOUNT' ] = jomresHTML::integerSelectList(0, 100, 1, 'discount', 'class="inputbox" size="1"', $data->discount);

                    jr_import('vat_number_validation');
                    $validation = new vat_number_validation();
                    $validation->get_subject('guest_registered_byguest_id', array('property_uid' => $defaultProperty, 'guest_id' => $guestUid));

                    $output[ 'VAT_NUMBER' ] = $validation->vat_number;
                    $output[ 'VAT_NUMBER_VALIDATED' ] = $validation->vat_number_validated;

                    $validation_success = $validation->vat_number_validation_response;
                    if (strlen($validation_success) > 0) {
                        $vat_validation[0][ 'VAT_NUMBER_VALIDATION_STATUS'] = $validation_success;
                        if ($validation->vat_number_validated) {
                            if (using_bootstrap()) {
                                $vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-success';
                            } else {
                                $vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-highlight';
                            }
                        } else {
                            if (using_bootstrap()) {
                                $vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-error';
                            } else {
                                $vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-error ';
                            }
                        }
                    }
                }
            } else {
                $guestUid = 0;
            }
        } else {
            $output[ 'REGION' ] = setupRegions('GB');
            $output[ 'COUNTRY' ] = createSimpleCountriesDropdown('GB');
            $output[ 'DISCOUNT' ] = jomresHTML::integerSelectList(0, 100, 1, 'discount', 'class="inputbox" size="1"', 0);
        }

        $output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME');
        $output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
        $output[ 'HHOUSE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE');
        $output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET');
        $output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');
        $output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
        $output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
        $output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE');
        $output[ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE');
        $output[ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE');
        $output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX');
        $output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
        $output[ 'HDISCOUNT' ] = jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT', '_JOMRES_AJAXFORM_BILLING_DISCOUNT');
        $output[ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO', false);

        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();

        $jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=listguests'), '');
        $jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'saveGuest');
        if ($guestUid != 0) {
            $jrtb .= $jrtbar->toolbarItem('delete', jomresURL(JOMRES_SITEPAGE_URL.'&task=deleteGuest'."&guestUid=$guestUid&no_html=1"), '');
        }
        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS');
        $output[ 'GUESTUID' ] = $guestUid;

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->readTemplatesFromInput('edit_guest.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('validation', $vat_validation);
        $tmpl->displayParsedTemplate();
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_MR_CREDITCARD_EDIT', '_JOMRES_MR_CREDITCARD_EDIT');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
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
