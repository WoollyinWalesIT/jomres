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

class j06001list_bookings
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }

        $mrConfig = getPropertySpecificSettings();
        $defaultProperty = getDefaultProperty();

        $startDate = jomresGetParam($_POST, 'startDate', '');
        $endDate = jomresGetParam($_POST, 'endDate', '');
        if ($startDate == '%' || $startDate == '') {
            $startDate = date('Y/m/d', strtotime('-3 months'));
        } else {
            $startDate = JSCalConvertInputDates($startDate);
        }
        if ($endDate == '%' || $endDate == '') {
            $endDate = date('Y/m/d', strtotime('+2 years'));
        } else {
            $endDate = JSCalConvertInputDates($endDate);
        }

        $deposit_status = (int) jomresGetParam($_POST, 'deposit_status', '2');
        $resident_status = (int) jomresGetParam($_POST, 'resident_status', '2');
        $booking_status = (int) jomresGetParam($_POST, 'booking_status', '2');
        $show_all = (int) jomresGetParam($_POST, 'show_all', '0');
        $tag = (int) jomresGetParam($_POST, 'tag', '0');

        $output = array();
        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_STATUS_BOOKINGS', '_JOMRES_STATUS_BOOKINGS', false);

        $output[ 'TEXT_PENDING' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING');
        $output[ 'TEXT_ARRIVETODAY' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY');
        $output[ 'TEXT_RESIDENT' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT');
        $output[ 'TEXT_LATE' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', '_JOMRES_COM_MR_VIEWBOOKINGS_LATE');
        $output[ 'TEXT_DEPARTTODAY' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY');
        $output[ 'TEXT_STILLHERE' ] = $mrConfig[ 'wholeday_booking' ] == '1' ? jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY') : jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE');
        $output[ 'TEXT_BOOKEDOUT' ] = jr_gettext('_JOMRES_STATUS_CHECKEDOUT', '_JOMRES_STATUS_CHECKEDOUT', false);
        $output[ 'TEXT_CANCELLED' ] = jr_gettext('_JOMRES_STATUS_CANCELLED', '_JOMRES_STATUS_CANCELLED', false);

        $output[ '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', false);
        $output[ '_JOMRES_COM_MR_VIEWBOOKINGS_FIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', false);
        $output[ '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME', false);
        $output[ '_JOMRES_COM_MR_VIEWBOOKINGS_EMAIL' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', false);
        $output[ '_JOMRES_COM_MR_EDITBOOKINGTITLE' ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKINGTITLE', '_JOMRES_COM_MR_EDITBOOKINGTITLE', false);
        $output[ '_JOMRES_BOOKING_NUMBER' ] = jr_gettext('_JOMRES_BOOKING_NUMBER', '_JOMRES_BOOKING_NUMBER', true, false);
        $output[ 'HPROPERTY_NAME' ] = jr_gettext('_JRPORTAL_PROPERTIES_PROPERTYNAME', '_JRPORTAL_PROPERTIES_PROPERTYNAME', false, false);
        if ($mrConfig[ 'wholeday_booking' ] == '1') {
            $output[ 'ARRIVAL' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', false);
            $output[ 'DEPARTURE' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', false);
        } else {
            $output[ 'ARRIVAL' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', false);
            if ($mrConfig[ 'showdepartureinput' ] == '1') {
                $output[ 'DEPARTURE' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', false);
            } else {
                $output[ 'DEPARTURE' ] = '&nbsp;';
            }
        }
        $output[ 'HCONTRACT_TOTAL' ] = jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', false);
        $output[ 'HDEPOSIT_REQUIRED' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', false);
        $output[ 'HCONTRACT_UID' ] = 'Uid';
        $output[ 'HGUEST_LANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE', false);
        $output[ 'HGUEST_MOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE', false);
        $output[ 'HINVOICE_UID' ] = jr_gettext('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', false);
        $output[ 'HSPECIAL_REQS' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', false);
        $output[ 'HTIMESTAMP' ] = jr_gettext('_JOMRES_HDATE_OF_BOOKING', '_JOMRES_HDATE_OF_BOOKING', false);
        $output[ 'HAPPROVED' ] = jr_gettext('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', '_JOMRES_BOOKING_INQUIRY_HAPPROVAL', false);
        $output[ 'HLASTCHANGED' ] = jr_gettext('_JOMRES_HLASTCHANGED', '_JOMRES_HLASTCHANGED', false);
        $output[ 'HLEGEND' ] = jr_gettext('_JOMRES_HLEGEND', '_JOMRES_HLEGEND', false);

        if (get_showtime('task') == 'list_bookings') {
            $output[ 'TOUR_DIV_ID' ] = 'tour_target_listall_bookings';
        }

        //buttons
        $output['HNEW_BOOKING'] = jr_gettext('_JOMRES_HNEW_BOOKING', '_JOMRES_HNEW_BOOKING', false);
        $output['NEW_BOOKING_URL'] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.$defaultProperty);
        $output['HBLACK_BOOKINGS'] = jr_gettext('_JOMRES_FRONT_BLACKBOOKING', '_JOMRES_FRONT_BLACKBOOKING', false);
        $output['BLACK_BOOKINGS_URL'] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=listBlackBookings');
        $output['HSIMPLE_BOOKING'] = jr_gettext('_JOMRES_HQUICK_BOOKING', '_JOMRES_HQUICK_BOOKING', false);
        $output['SIMPLE_BOOKING_URL'] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=easy_blackbook');

        //filters
        $output['HFILTER'] = jr_gettext('_JOMRES_HFILTER', '_JOMRES_HFILTER', false);
        $output['HSTART'] = jr_gettext('_JOMRES_HFROM', '_JOMRES_HFROM', false);
        $output['HEND'] = jr_gettext('_JOMRES_HTO', '_JOMRES_HTO', false);
        $output['HDEPOSIT_STATUS'] = jr_gettext('_JOMRES_HSTATUS_DEPOSIT', '_JOMRES_HSTATUS_DEPOSIT', false);
        $output['HRESIDENT_STATUS'] = jr_gettext('_JOMRES_HSTATUS_GUEST', '_JOMRES_HSTATUS_GUEST', false);
        $output['HBOOKING_STATUS'] = jr_gettext('_JOMRES_HSTATUS_BOOKING', '_JOMRES_HSTATUS_BOOKING', false);
        $output['HSHOW_ALL'] = jr_gettext('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', '_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', false);

        $output[ 'START' ] = generateDateInput('startDate', $startDate, false, true, true);
        $output[ 'END' ] = generateDateInput('endDate', $endDate, false, true, true);

        $options = array();
        $options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_ANY', '_JOMRES_STATUS_ANY', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_PAID', '_JOMRES_STATUS_PAID', false));
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_STATUS_NOTPAID', '_JOMRES_STATUS_NOTPAID', false));
        $output['DEPOSIT_STATUS'] = jomresHTML::selectList($options, 'deposit_status', 'class="inputbox" size="1"', 'value', 'text', $deposit_status);

        $options = array();
        $options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_ANY', '_JOMRES_STATUS_ANY', false));
        $options[] = jomresHTML::makeOption('3', jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', false));
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_STATUS_CHECKEDOUT', '_JOMRES_STATUS_CHECKEDOUT', false));
        $output['RESIDENT_STATUS'] = jomresHTML::selectList($options, 'resident_status', 'class="inputbox" size="1"', 'value', 'text', $resident_status);

        $options = array();
        $options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_ANY', '_JOMRES_STATUS_ANY', false));
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_STATUS_ACTIVE', '_JOMRES_STATUS_ACTIVE', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_CANCELLED', '_JOMRES_STATUS_CANCELLED', false));
        $output['BOOKING_STATUS'] = jomresHTML::selectList($options, 'booking_status', 'class="inputbox" size="1"', 'value', 'text', $booking_status);

        $options = array();
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_HSTATUS_CURRENT', '_JOMRES_HSTATUS_CURRENT', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_ALL_PROPERTIES', '_JOMRES_STATUS_ALL_PROPERTIES', false));
        $output['SHOW_ALL'] = jomresHTML::selectList($options, 'show_all', 'class="inputbox" size="1"', 'value', 'text', $show_all);

        $output['AJAX_URL'] = JOMRES_SITEPAGE_URL_AJAX.'&task=list_bookings_ajax&startDate='.$startDate.'&endDate='.$endDate.'&deposit_status='.$deposit_status.'&resident_status='.$resident_status.'&booking_status='.$booking_status.'&show_all='.$show_all.'&tag='.$tag;

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->readTemplatesFromInput('list_property_bookings.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE');

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
