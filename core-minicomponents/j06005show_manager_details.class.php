<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005show_manager_details
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		$this->retVals = '';
		
        $manager_profile_id = $componentArgs[ 'manager_profile_id' ];

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!$thisJRUser->userIsRegistered) {
            return;
        }

        if ($manager_profile_id == 0) {
            return false;
        }

        if (!$thisJRUser->superPropertyManager && $thisJRUser->id != $manager_profile_id) { // The user's not a super property manager, and this invoice isn't for their user id
            return false;
        }

        $query = 'SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,email,vat_number FROM #__jomres_guest_profile WHERE cms_user_id = '.(int) $manager_profile_id.'';
        $managerData = doSelectSql($query);

        $numberOfReturns = count($managerData);
        $vat_output = array();
        if ($numberOfReturns > 0) {
            foreach ($managerData as $data) {
                $output[ 'FIRSTNAME' ] = $data->firstname;
                $output[ 'SURNAME' ] = $data->surname;
                $output[ 'HOUSE' ] = $data->house;
                $output[ 'STREET' ] = $data->street;
                $output[ 'TOWN' ] = $data->town;
                $output[ 'REGION' ] = find_region_name($data->county);
                $output[ 'COUNTRY' ] = getSimpleCountry($data->country);
                $output[ 'POSTCODE' ] = $data->postcode;
                $output[ 'LANDLINE' ] = $data->tel_landline;
                $output[ 'MOBILE' ] = $data->tel_mobile;
                $output[ 'EMAIL' ] = $data->email;
                $vat_output[0][ 'VAT_NUMBER' ] = $data->vat_number;
            }
        } else {
            return false;
        }
        $output[ 'TITLE' ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST');
        $output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME');
        $output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
        $output[ 'HHOUSE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE');
        $output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET');
        $output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');
        $output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
        $output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
        $output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE');
        $output[ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE');
        $output[ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE');
        $output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
        $vat_output[0][ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO');

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        $tmpl->readTemplatesFromInput('show_guest_details.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        if (trim($vat_output[0][ 'VAT_NUMBER' ]) != '') {
            $tmpl->addRows('vat_output', $vat_output);
        }
        $this->retVals = $tmpl->getParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
