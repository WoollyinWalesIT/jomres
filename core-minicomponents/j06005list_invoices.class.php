<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005list_invoices
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

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

        //status values are as follows
        //0 unpaid
        //1 paid
        //2 cancelled
        //3 pending
        //4 any
        if (isset($_REQUEST['invoice_status'])) {
            $invoice_status = (int) jomresGetParam($_REQUEST, 'invoice_status', '4');
        } else {
            $invoice_status = (int) jomresGetParam($_POST, 'invoice_status', '4');
        }
        $invoice_type = (int) jomresGetParam($_POST, 'invoice_type', '0');
        $guest_id = (int) jomresGetParam($_REQUEST, 'guest_id', '0');
        $show_all = (int) jomresGetParam($_POST, 'show_all', '0');

        $output = array();
        $pageoutput = array();

        $output[ 'PAGETITLE' ] = jr_gettext('_JRPORTAL_INVOICES_TITLE', '_JRPORTAL_INVOICES_TITLE', false);
        $output[ 'HBOOKINGNO' ] = jr_gettext('_JOMRES_BOOKING_NUMBER', '_JOMRES_BOOKING_NUMBER', false);
        $output[ 'HPROPERTY_NAME' ] = jr_gettext('_JRPORTAL_PROPERTIES_PROPERTYNAME', '_JRPORTAL_PROPERTIES_PROPERTYNAME', false);
        $output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', false);
        $output[ 'HSURNAME' ] = jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', false);
        $output[ 'HSTATUS' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS', '_JRPORTAL_INVOICES_STATUS', false);
        $output[ 'HRAISED' ] = jr_gettext('_JRPORTAL_INVOICES_RAISED', '_JRPORTAL_INVOICES_RAISED', false);
        $output[ 'HDUE' ] = jr_gettext('_JRPORTAL_INVOICES_DUE', '_JRPORTAL_INVOICES_DUE', false);
        $output[ 'HPAID' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PAID', '_JRPORTAL_INVOICES_STATUS_PAID', false);
        $output[ 'HINITTOTAL' ] = jr_gettext('_JRPORTAL_INVOICES_INITTOTAL', '_JRPORTAL_INVOICES_INITTOTAL', false);
        $output[ 'HGRAND_TOTAL' ] = jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', false);
        $output[ 'HLINEITEMS' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS', '_JRPORTAL_INVOICES_LINEITEMS', false);
        $output[ 'HEDITLINK' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', false);
        $output[ 'HLEGEND' ] = jr_gettext('_JOMRES_HLEGEND', '_JOMRES_HLEGEND', false);
        $output[ 'HUNPAID' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_UNPAID', '_JRPORTAL_INVOICES_STATUS_UNPAID', false);
        $output[ 'HPAID' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PAID', '_JRPORTAL_INVOICES_STATUS_PAID', false);
        $output[ 'HCANCELLED' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_CANCELLED', '_JRPORTAL_INVOICES_STATUS_CANCELLED', false);
        $output[ 'HPENDING' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PENDING', '_JRPORTAL_INVOICES_STATUS_PENDING', false);
        $output[ '_JRPORTAL_INVOICES_LINEITEMS' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS', '_JRPORTAL_INVOICES_LINEITEMS', false);
        $output[ 'HPAYNOW' ] = jr_gettext('_JRPORTAL_INVOICES_PAYNOW', '_JRPORTAL_INVOICES_PAYNOW', false);

        if (!using_bootstrap()) {
            $output[ 'TASK_FILTER_ANY' ] = '<a href="'.JOMRES_SITEPAGE_URL.'&task=list_invoices">'.jr_gettext('_JOMRES_FRONT_ROOMSMOKING_EITHER', '_JOMRES_FRONT_ROOMSMOKING_EITHER', false).'</a>';
            $output[ 'TASK_FILTER_UNPAID' ] = '<a href="'.JOMRES_SITEPAGE_URL.'&task=list_invoices&invoice_status=0">'.$output[ 'HUNPAID' ].'</a>';
            $output[ 'TASK_FILTER_PAID' ] = '<a href="'.JOMRES_SITEPAGE_URL.'&task=list_invoices&invoice_status=1">'.$output[ 'HPAID' ].'</a>';
            $output[ 'TASK_FILTER_CANCELLED' ] = '<a href="'.JOMRES_SITEPAGE_URL.'&task=list_invoices&invoice_status=2">'.$output[ 'HCANCELLED' ].'</a>';
            $output[ 'TASK_FILTER_PENDING' ] = '<a href="'.JOMRES_SITEPAGE_URL.'&task=list_invoices&invoice_status=3">'.$output[ 'HPENDING' ].'</a>';
        }

        //filters
        $output['HFILTER'] = jr_gettext('_JOMRES_HFILTER', '_JOMRES_HFILTER', false);
        $output['HINVOICE_STATUS'] = jr_gettext('_JOMRES_HSTATUS_INVOICE', '_JOMRES_HSTATUS_INVOICE', false);
        $output['HINVOICE_TYPE'] = jr_gettext('_JOMRES_HSTATUS_INVOICE_TYPE', '_JOMRES_HSTATUS_INVOICE_TYPE', false);
        $output['HSTART'] = jr_gettext('_JOMRES_HFROM', '_JOMRES_HFROM', false);
        $output['HEND'] = jr_gettext('_JOMRES_HTO', '_JOMRES_HTO', false);

        $output[ 'START' ] = generateDateInput('startDate', $startDate, false, true, true);
        $output[ 'END' ] = generateDateInput('endDate', $endDate, false, true, true);

        $options = array();
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_FRONT_ROOMSMOKING_EITHER', '_JOMRES_FRONT_ROOMSMOKING_EITHER', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_BOOKINGS', '_JOMRES_STATUS_BOOKINGS', false));
        if ($thisJRUser->accesslevel > 50) { //higher than receptionist
            $options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_COMMISSIONS', '_JOMRES_STATUS_COMMISSIONS', false));
        }
        if ($thisJRUser->userIsRegistered && $thisJRUser->accesslevel != 50) { //user is registered but other than receptionist
            $options[] = jomresHTML::makeOption('3', jr_gettext('_JOMRES_STATUS_SUBSCRIPTIONS', '_JOMRES_STATUS_SUBSCRIPTIONS', false));
        }
        $output['INVOICE_TYPE'] = jomresHTML::selectList($options, 'invoice_type', 'class="inputbox" size="1"', 'value', 'text', $invoice_type);

        $options = array();
        $options[] = jomresHTML::makeOption('4', jr_gettext('_JOMRES_FRONT_ROOMSMOKING_EITHER', '_JOMRES_FRONT_ROOMSMOKING_EITHER', false));
        $options[] = jomresHTML::makeOption('0', $output[ 'HUNPAID' ]);
        $options[] = jomresHTML::makeOption('1', $output[ 'HPAID' ]);
        $options[] = jomresHTML::makeOption('2', $output[ 'HCANCELLED' ]);
        $options[] = jomresHTML::makeOption('3', $output[ 'HPENDING' ]);
        $output['INVOICE_STATUS'] = jomresHTML::selectList($options, 'invoice_status', 'class="inputbox" size="1"', 'value', 'text', $invoice_status);

        if ($thisJRUser->userIsManager || $thisJRUser->superPropertyManager) {
            $output[ 'HSHOW_ALL' ] = jr_gettext('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', '_JOMRES_HSTATUS_SHOW_INVOICES_FOR', false);
            $options = array();
            $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_HSTATUS_CURRENT', '_JOMRES_HSTATUS_CURRENT', false));
            $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_ALL_PROPERTIES', '_JOMRES_STATUS_ALL_PROPERTIES', false));
            $output['SHOW_ALL'] = jomresHTML::selectList($options, 'show_all', 'class="inputbox" size="1"', 'value', 'text', $show_all);
        }

        $output['GUEST_ID'] = $guest_id;

        $output['AJAX_URL'] = JOMRES_SITEPAGE_URL_AJAX.'&task=list_invoices_ajax&startDate='.$startDate.'&endDate='.$endDate.'&invoice_type='.$invoice_type.'&invoice_status='.$invoice_status.'&show_all='.$show_all.'&guest_id='.$guest_id;

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        $tmpl->readTemplatesFromInput('frontend_list_invoices.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
