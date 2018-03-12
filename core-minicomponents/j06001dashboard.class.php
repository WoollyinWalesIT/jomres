<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta2.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001dashboard
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                    'task' => 'dashboard',
                    'arguments' => array(),
                    'info' => '_JOMRES_SHORTCODES_06001DASHBOARD',
                );

            return;
        }
		
		$this->retVals = '';

        $ePointFilepath = get_showtime('ePointFilepath');

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = $componentArgs[ 'property_uid' ];
        } else {
            $property_uid = getDefaultProperty();
        }
		
		if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
            return;
        }

        $mrConfig = getPropertySpecificSettings($property_uid);
        if ($mrConfig[ 'is_real_estate_listing' ] == 1 || get_showtime('is_jintour_property')) {
            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $output = array();
        $pageoutput = array();

        jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'moment/min/', 'moment.min.js');
        jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'fullcalendar/dist/', 'fullcalendar.min.js');
        jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'fullcalendar/dist/', 'lang-all.js');
        jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'fullcalendar-scheduler/dist/', 'scheduler.min.js');
        jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'blockui-npm/', 'jquery.blockUI.js');
        jomres_cmsspecific_addheaddata('css', JOMRES_NODE_MODULES_RELPATH.'fullcalendar/dist/', 'fullcalendar.min.css');
        jomres_cmsspecific_addheaddata('css', JOMRES_NODE_MODULES_RELPATH.'fullcalendar-scheduler/dist/', 'scheduler.min.css');
        //jomres_cmsspecific_addheaddata("css",JOMRES_NODE_MODULES_RELPATH.'fullcalendar/','fullcalendar.print.css');

        $output['PAGETITLE'] = jr_gettext('_JOMRES_INTERVAL', '_JOMRES_INTERVAL', false);
        $output['HROOMS'] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false);
        $output['HDRAG_TRASH'] = jr_gettext('_JOMRES_DASHBOARD_DRAG_TRASH', '_JOMRES_DASHBOARD_DRAG_TRASH', false);

        //buttons
        $output['NEXT'] = jr_gettext('COMMON_NEXT', 'COMMON_NEXT', false);
        $output['PREV'] = jr_gettext('COMMON_PREV', 'COMMON_PREV', false);
        $output['TODAY'] = jr_gettext('_JOMRES_DASHBOARD_TODAY', '_JOMRES_DASHBOARD_TODAY', false);
        $output['MONTH'] = jr_gettext('_JOMRES_DASHBOARD_MONTH', '_JOMRES_DASHBOARD_MONTH', false);
        $output['WEEK'] = jr_gettext('_JOMRES_DASHBOARD_WEEK', '_JOMRES_DASHBOARD_WEEK', false);
        $output['TWOWEEKS'] = jr_gettext('_JOMRES_HTWO_WEEKS', '_JOMRES_HTWO_WEEKS', false);
        $output['DAY'] = jr_gettext('_JOMRES_DASHBOARD_DAY', '_JOMRES_DASHBOARD_DAY', false);
        $output['YEAR'] = jr_gettext('_JOMRES_DASHBOARD_YEAR', '_JOMRES_DASHBOARD_YEAR', false);
        $output['HNEW_BOOKING'] = jr_gettext('_JOMRES_HNEW_BOOKING', '_JOMRES_HNEW_BOOKING', false);
        $output['NEW_BOOKING_URL'] = get_booking_url($property_uid);
        $output['HBLACK_BOOKINGS'] = jr_gettext('_JOMRES_FRONT_BLACKBOOKING', '_JOMRES_FRONT_BLACKBOOKING', false);
        $output['BLACK_BOOKINGS_URL'] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=list_black_bookings');

        //legend
        $output['HLEGEND'] = jr_gettext('_JOMRES_HLEGEND', '_JOMRES_HLEGEND', false);
        $output[ 'TEXT_PENDING' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING');
        $output[ 'TEXT_ARRIVETODAY' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY');
        $output[ 'TEXT_RESIDENT' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT');
        $output[ 'TEXT_LATE' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', '_JOMRES_COM_MR_VIEWBOOKINGS_LATE');
        $output[ 'TEXT_DEPARTTODAY' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY');
        $output[ 'TEXT_STILLHERE' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE');
        $output[ 'TEXT_BOOKEDOUT' ] = jr_gettext('_JOMRES_STATUS_CHECKEDOUT', '_JOMRES_STATUS_CHECKEDOUT', false);
        $output['HBLACKBOOKING'] = jr_gettext('_JOMRES_COM_AVLCAL_BLACK_KEY', '_JOMRES_COM_AVLCAL_BLACK_KEY', false);

        //warnings
        $output['CANCELLATION_WARNING'] = jr_gettext('_JOMRES_BOOKING_CANCELLATION_WARNING', '_JOMRES_BOOKING_CANCELLATION_WARNING', false);
        $output['AMEND_WARNING'] = jr_gettext('_JOMRES_BOOKING_AMEND_WARNING', '_JOMRES_BOOKING_AMEND_WARNING', false);

        $output['WHOLEDAY_BOOKINGS'] = $mrConfig[ 'wholeday_booking' ];

        $output['AJAXURL_RESOURCES'] = JOMRES_SITEPAGE_URL_AJAX.'&task=dashboard_resources_ajax&property_uid='.$property_uid;
        $output['AJAXURL_EVENTS'] = JOMRES_SITEPAGE_URL_AJAX.'&task=dashboard_events_ajax&property_uid='.$property_uid;
        $output['PROPERTY_UID'] = $property_uid;

        if ($jrConfig['calendarstartofweekday'] == '1') {
            $output['FIRST_DAY_OF_WEEK'] = '0';
        } else {
            $output['FIRST_DAY_OF_WEEK'] = '1';
        }

        $rows = array(
			'0' => array('VIEW' => 'timelineDay', 'ACTIVE' => '', 'VIEW_NAME' => $output['DAY']),
			'1' => array('VIEW' => 'timelineWeek', 'ACTIVE' => '', 'VIEW_NAME' => $output['WEEK']),
			'2' => array('VIEW' => 'timelineTwoWeeks', 'ACTIVE' => 'active', 'VIEW_NAME' => $output['TWOWEEKS']),
			'3' => array('VIEW' => 'timelineMonth', 'ACTIVE' => '', 'VIEW_NAME' => $output['MONTH']),
			'4' => array('VIEW' => 'timelineYear', 'ACTIVE' => '', 'VIEW_NAME' => $output['YEAR'])
		);

        //guest modal form
        $output[ 'HQUICK_BOOKING' ] = jr_gettext('_JOMRES_HQUICK_BOOKING', '_JOMRES_HQUICK_BOOKING', false);
        $output[ 'HSELECTED_ROOM' ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', false);
        $output[ 'HSELECTED_DATES' ] = jr_gettext('_JOMRES_HFROM', '_JOMRES_HFROM', false).'/'.jr_gettext('_JOMRES_HTO', '_JOMRES_HTO', false);
        $output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', false);
        $output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME', false);
        $output[ 'HHOUSE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE', false);
        $output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET', false);
        $output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN', false);
        $output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
        $output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
        $output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE', false);
        $output[ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE', false);
        $output[ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE', false);
        $output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX', false);
        $output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false);
        $output[ 'HCONTRACT_TOTAL' ] = jr_gettext('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', false);
        $output[ 'HDEPOSIT_REQUIRED' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', false);
        $output[ 'HDEPOSIT_PAID' ] = jr_gettext('_JOMCOMP_AMEND_DEPOSITPAID', '_JOMCOMP_AMEND_DEPOSITPAID', false);
        $output[ 'HBOOKED_IN' ] = jr_gettext('_JOMRES_ACTION_CHECKIN', '_JOMRES_ACTION_CHECKIN', false);

        $output[ 'COUNTRY' ] = createSimpleCountriesDropdown();
        $output[ 'REGION' ] = setupRegions('', '', true);

        $output[ '_JRPORTAL_MONTHS_LONG_0' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_0', '_JRPORTAL_MONTHS_LONG_0', false);
        $output[ '_JRPORTAL_MONTHS_LONG_1' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_1', '_JRPORTAL_MONTHS_LONG_1', false);
        $output[ '_JRPORTAL_MONTHS_LONG_2' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_2', '_JRPORTAL_MONTHS_LONG_2', false);
        $output[ '_JRPORTAL_MONTHS_LONG_3' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_3', '_JRPORTAL_MONTHS_LONG_3', false);
        $output[ '_JRPORTAL_MONTHS_LONG_4' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_4', '_JRPORTAL_MONTHS_LONG_4', false);
        $output[ '_JRPORTAL_MONTHS_LONG_5' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_5', '_JRPORTAL_MONTHS_LONG_5', false);
        $output[ '_JRPORTAL_MONTHS_LONG_6' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_6', '_JRPORTAL_MONTHS_LONG_6', false);
        $output[ '_JRPORTAL_MONTHS_LONG_7' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_7', '_JRPORTAL_MONTHS_LONG_7', false);
        $output[ '_JRPORTAL_MONTHS_LONG_8' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_8', '_JRPORTAL_MONTHS_LONG_8', false);
        $output[ '_JRPORTAL_MONTHS_LONG_9' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_9', '_JRPORTAL_MONTHS_LONG_9', false);
        $output[ '_JRPORTAL_MONTHS_LONG_10' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_10', '_JRPORTAL_MONTHS_LONG_10', false);
        $output[ '_JRPORTAL_MONTHS_LONG_11' ] = jr_gettext('_JRPORTAL_MONTHS_LONG_11', '_JRPORTAL_MONTHS_LONG_11', false);

        $output[ '_JRPORTAL_MONTHS_SHORT_0' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_0', '_JRPORTAL_MONTHS_SHORT_0', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_1' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_1', '_JRPORTAL_MONTHS_SHORT_1', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_2' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_2', '_JRPORTAL_MONTHS_SHORT_2', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_3' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_3', '_JRPORTAL_MONTHS_SHORT_3', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_4' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_4', '_JRPORTAL_MONTHS_SHORT_4', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_5' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_5', '_JRPORTAL_MONTHS_SHORT_5', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_6' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_6', '_JRPORTAL_MONTHS_SHORT_6', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_7' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_7', '_JRPORTAL_MONTHS_SHORT_7', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_8' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_8', '_JRPORTAL_MONTHS_SHORT_8', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_9' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_9', '_JRPORTAL_MONTHS_SHORT_9', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_10' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_10', '_JRPORTAL_MONTHS_SHORT_10', false);
        $output[ '_JRPORTAL_MONTHS_SHORT_11' ] = jr_gettext('_JRPORTAL_MONTHS_SHORT_11', '_JRPORTAL_MONTHS_SHORT_11', false);

        $output[ '_JOMRES_COM_MR_WEEKDAYS_MONDAY' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY', '_JOMRES_COM_MR_WEEKDAYS_MONDAY', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_TUESDAY' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_THURSDAY' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_FRIDAY' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_SATURDAY' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_SUNDAY' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false);

        $output[ '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', false);
        $output[ '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR' ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', false);

        $options = array();
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
        $output['DEPOSIT_PAID'] = jomresHTML::selectList($options, 'deposit_paid', 'class="inputbox span12" size="1"', 'value', 'text', '2');
        $output['BOOKED_IN'] = jomresHTML::selectList($options, 'booked_in', 'class="inputbox span12" size="1"', 'value', 'text', '2');

        //get the currency code
        if (!isset($mrConfig[ 'property_currencycode' ])) { // for v4.5 converting the old currencyCode value to property_currencycode
            $mrConfig[ 'property_currencycode' ] = $mrConfig[ 'currencyCode' ];
        }
        if ($mrConfig[ 'property_currencycode' ] == '') {
            $mrConfig[ 'property_currencycode' ] = 'GBP';
        }
        $currencycode = $mrConfig[ 'property_currencycode' ];

        if ($jrConfig[ 'useGlobalCurrency' ] == '1') {
            $currencycode = $jrConfig[ 'globalCurrencyCode' ];
        }

        $output['CURRENCY_CODE'] = $currencycode;
		
		//check if site is RTL
		if (jomres_cmsspecific_isRtl()) {
			$output['IS_RTL'] = 'true';
		} else {
			$output['IS_RTL'] = 'false';
		}

        //existing guests dropdown
        $output['HEXISTING_GUESTS_DROPDOWN'] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', false);
        $output['EXISTING_GUESTS_DROPDOWN'] = $this->getExistingGuestsDropdown($property_uid);

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->readTemplatesFromInput('dashboard.html');
        if ($output_now) {
			$tmpl->displayParsedTemplate();
		} else {
			$this->retVals = $tmpl->getParsedTemplate();
		}
    }

    public function getExistingGuestsDropdown($property_uid = 0)
    {
        if ($property_uid == 0) {
            return '';
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        $dropDownList = '';

        $query = 'SELECT 
						`guests_uid`,
						`surname`,
						`firstname`  
					FROM #__jomres_guests 
					WHERE `property_uid` IN (' .jomres_implode($thisJRUser->authorisedProperties).')  
					ORDER BY surname';
        $existingCustomers = doSelectSql($query);

        $ec = array();
        if (!empty($existingCustomers)) {
            $ec[] = jomresHTML::makeOption('0', '&nbsp;');
            foreach ($existingCustomers as $customer) {
                $ec[] = jomresHTML::makeOption($customer->guests_uid, stripslashes($customer->surname).' '.stripslashes($customer->firstname));
            }
            $dropDownList = jomresHTML::selectList($ec, 'existingGuests', ' size="1" class="input-medium"', 'value', 'text', '0', false);
        }

        return $dropDownList;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
