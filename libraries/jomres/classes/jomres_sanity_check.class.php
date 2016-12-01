<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_sanity_check
{
    public function __construct($autorun = true)
    {
        if (get_showtime('no_html') == 1 || get_showtime('popup') == 1 || AJAXCALL) {
            return;
        }
        if ($autorun) {
            $this->warnings = '';
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $this->jrConfig = $siteConfig->get();
            $this->mrConfig = getPropertySpecificSettings();
            $this->property_uid = getDefaultProperty();
            $this->warning_counter = 0;
        }
    }

    public function do_sanity_checks()
    {
        if (get_showtime('no_html') == 1 || get_showtime('popup') == 1 || AJAXCALL) {
            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if ($thisJRUser->userIsManager) {
            $this->warnings .= $this->check_editing_mode();
            $this->warnings .= $this->check_approved();
            $this->warnings .= $this->check_suspended();
            if (get_showtime('include_room_booking_functionality')) {
                if ($this->mrConfig[ 'singleRoomProperty' ] == 1) {
                    $this->warnings .= $this->check_srp_room_exists();
                    $this->warnings .= $this->check_srp_room_type_set();
                } else {
                    $this->warnings .= $this->check_mrp_rooms_exists();
                }
            }

            $this->warnings .= $this->checks_guest_types_pppn();
            if ($this->mrConfig[ 'is_real_estate_listing' ] == 0 && get_showtime('include_room_booking_functionality')) {
                $this->warnings .= $this->checks_tariffs_exist();
            }

            if (get_showtime('is_jintour_property')) {
                $this->warnings .= $this->check_tours_exist();
            }

            $this->warnings .= $this->check_address();
            $this->warnings .= $this->check_main_image();

            if (trim($this->warnings) == '') {
                $this->warnings .= $this->check_published();
            }

            return $this->warnings;
        }
    }

    public function construct_warning($message_array)
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if ($thisJRUser->userIsManager) {
            $button = '';
            ++$this->warning_counter;

            if (isset($message_array['LINK'])) {
                $pageoutput = array();
                $output = array();
                $output['LINK'] = $message_array['LINK'];
                $output['BUTTON_TEXT'] = $message_array['BUTTON_TEXT'];
                $pageoutput[ ] = $output;
                $tmpl = new patTemplate();
                $tmpl->addRows('pageoutput', $pageoutput);
                $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
                $tmpl->readTemplatesFromInput('sanity_checks_button.html');
                $button = $tmpl->getParsedTemplate();
            }

            $pageoutput = array();
            $output = array();

            if (!isset($message_array['LABEL'])) {
                $message_array['LABEL'] = 'warning';
            }

            $output['LABEL_CLASS'] = $message_array['LABEL'];

            $output['WARNING_WORD'] = jr_gettext('_JOMRES_WARNINGS_DANGERWILLROBINSON', '_JOMRES_WARNINGS_DANGERWILLROBINSON', false);
            $output['WARNING_MESSAGE'] = $message_array['MESSAGE'];
            $output['WARNING_COUNTER'] = $this->warning_counter;
            $output['ACTION_LINK'] = $button;

            $pageoutput[ ] = $output;

            $tmpl = new patTemplate();
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
            $tmpl->readTemplatesFromInput('sanity_check_pane.html');

            return $tmpl->getParsedTemplate();
        }
    }

    public function check_tours_exist()
    {
        if (get_showtime('task') != 'jintour') {
            $tours = jintour_get_all_tours($this->property_uid);
            $future_tours = array();
            $today = date('Y/m/d');
            foreach ($tours as $tour) {
                $tempArr = explode('-', $tour['tourdate']);
                $tourdate = date('Y/m/d', mktime(0, 0, 0, $tempArr[1], $tempArr[2], $tempArr[0]));
                if (strtotime($today) < strtotime($tourdate)) {
                    $future_tours[] = $tour;
                }
            }

            if (count($future_tours) == 0) {
                $message = jr_gettext('_JOMRES_JINTOUR_SANITY_CHECK', '_JOMRES_JINTOUR_SANITY_CHECK', false);
                $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=jintour');
                $button_text = jr_gettext('_JOMRES_JINTOUR_SANITY_CHECK_LINK', '_JOMRES_JINTOUR_SANITY_CHECK_LINK', false);

                return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
            }
        }
    }

    public function check_address()
    {
        if (get_showtime('task') != 'editProperty') {
            $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
            $current_property_details->gather_data($this->property_uid);
            if (
                $current_property_details->property_street == '' ||
                $current_property_details->property_town == '' ||
                $current_property_details->property_postcode == '' ||
                $current_property_details->property_region_id == '' ||
                $current_property_details->property_country_code == '' ||
                $current_property_details->property_tel == ''
                ) {
                $message = jr_gettext('_JOMRES_ADDRESS_SANITY_CHECK', '_JOMRES_ADDRESS_SANITY_CHECK', false);
                $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=editProperty');
                $button_text = jr_gettext('_JOMRES_ADDRESS_SANITY_CHECK_LINK', '_JOMRES_ADDRESS_SANITY_CHECK_LINK', false);

                return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
            }
        }
    }

    public function check_main_image()
    {
        if (get_showtime('task') != 'media_centre') {
            $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
            $current_property_details->gather_data($this->property_uid);
            $jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
            $jomres_media_centre_images->get_images($this->property_uid, array('property'));
            $noimage = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/noimage.gif';
            if (!isset($jomres_media_centre_images->images['property'][0][0]['large']) || $jomres_media_centre_images->images['property'][0][0]['large'] == $noimage) {
                $message = jr_gettext('_JOMRES_IMAGES_EXIST_SANITY_CHECK', '_JOMRES_IMAGES_EXIST_SANITY_CHECK', false);
                $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=media_centre&upload_context=properties');
                $button_text = jr_gettext('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', '_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', false);

                return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
            }
        }
    }

    public function check_approved()
    {
        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($this->property_uid);
        if (!$current_property_details->approved) {
            $message = jr_gettext('_JOMRES_APPROVALS_NOT_APPROVED_YET', '_JOMRES_APPROVALS_NOT_APPROVED_YET', false);

            return $this->construct_warning(array('MESSAGE' => $message));
        }
    }

    public function check_suspended()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if ($thisJRUser->userIsSuspended) {
            $message = jr_gettext('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', false);

            return $this->construct_warning(array('MESSAGE' => $message));
        }
    }

    public function checks_guest_types_pppn()
    {
        if ($this->mrConfig[ 'is_real_estate_listing' ] == '0') {
            $ignore_on_tasks = array('listCustomerTypes', 'editCustomerType', 'saveCustomerType', 'deleteCustomerType', 'saveCustomerTypeOrder');
            if (!in_array(get_showtime('task'), $ignore_on_tasks)) {
                $query = 'SELECT `id` FROM `#__jomres_customertypes` where property_uid = '.(int) $this->property_uid.' AND published = 1';
                $result = doSelectSql($query);
                if ((int) $this->mrConfig[ 'perPersonPerNight' ] == 1 && count($result) == 0) {
                    $message = jr_gettext('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', false);
                    $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=listCustomerTypes');
                    $button_text = jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', false);

                    return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
                }
            }
        }

        return '';
    }

    public function checks_tariffs_exist()
    {
        if ($this->mrConfig[ 'is_real_estate_listing' ] == '0') {
            if (!get_showtime('include_room_booking_functionality')) {
                return '';
            }
            $ignore_on_tasks = array('propertyadmin', 'editTariff', 'saveTariff', 'edit_tariff_micromanage', 'list_tariffs_micromanage', 'list_tariffs_advanced', 'edit_tariff_advanced', 'edit_tariffs_normal');
            if (!in_array(get_showtime('task'), $ignore_on_tasks)) {
                $query = 'SELECT `rates_uid` FROM `#__jomres_rates` where property_uid = '.(int) $this->property_uid.'';
                $result = doSelectSql($query);
                if (count($result) == 0) {
                    if ($this->mrConfig[ 'singleRoomProperty' ] == 0) {
                        $message = jr_gettext('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', false);
                    } else {
                        $message = jr_gettext('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', false);
                    }

                    $mrConfig = getPropertySpecificSettings($this->property_uid);

                    if ($mrConfig['tariffmode'] == '0') {
                        $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_tariffs_normal');
                        $button_text = jr_gettext('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', '_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', false, false);
                    } elseif ($mrConfig['tariffmode'] == '1') {
                        $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=list_tariffs_advanced');
                        $button_text = jr_gettext('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', '_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', false);
                    } else {
                        $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=list_tariffs_micromanage');
                        $button_text = jr_gettext('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', '_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', false);
                    }

                    return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
                }
            }
        }

        return '';
    }

    public function check_editing_mode()
    {
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if ($this->jrConfig[ 'editingModeAffectsAllProperties' ] == '1' && $tmpBookingHandler->user_settings[ 'editing_on' ] == true && $thisJRUser->superPropertyManager) {
            $message = jr_gettext('_JOMRES_WARNINGS_GLOBALEDITINGMODE', '_JOMRES_WARNINGS_GLOBALEDITINGMODE', false);

            return $this->construct_warning(array('MESSAGE' => $message, 'LABEL' => 'danger'));
        }
    }

    public function check_published()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($this->property_uid);

        if ($current_property_details->published != 1 && $thisJRUser->userIsManager) {
            $message = jr_gettext('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', false);
            $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty&property_uid='.$this->property_uid);
            $button_text = jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH', '_JOMRES_COM_MR_VRCT_PUBLISH', false);

            return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
        }
    }

    public function check_srp_room_exists()
    {
        if ($this->mrConfig[ 'is_real_estate_listing' ] == '0' && $this->mrConfig[ 'tariffmode' ] != '0') {
            if (get_showtime('task') != 'edit_resource') {
                $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
                $current_property_details->gather_data($this->property_uid);
                if (!isset($current_property_details->rooms)) {
                    $message = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', false);
                    $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource');
                    $button_text = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', false);

                    return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
                }
            }
        }
    }

    public function check_srp_room_type_set()
    {
        if ($this->mrConfig[ 'is_real_estate_listing' ] == '0' && $this->mrConfig[ 'tariffmode' ] != '0') {
            if (get_showtime('task') != 'edit_resource') {
                $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
                $current_property_details->gather_data($this->property_uid);
                foreach ($current_property_details->room_types as $rt) {
                    if (!isset($rt['abbv'])) {
                        $message = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', false);
                        $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource');
                        $button_text = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', false);

                        return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
                    }
                }
            }
        }
    }

    public function check_mrp_rooms_exists()
    {
        if ($this->mrConfig[ 'is_real_estate_listing' ] == '0') {
            if (get_showtime('task') != 'edit_resource') {
                $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
                $current_property_details->gather_data($this->property_uid);
                if (!isset($current_property_details->rooms) || count($current_property_details->rooms) == 0) {
                    $message = jr_gettext('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', '_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', false);
                    if ($this->mrConfig['tariffmode'] == 0) {
                        $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_tariffs_normal');
                    } else {
                        $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource');
                    }
                    $button_text = jr_gettext('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', '_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', false);

                    return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
                }
            }
        }
    }
}
