<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
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

class j16000list_invoices
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$startDate = jomresGetParam($_POST, 'startDate', '');
		$endDate = jomresGetParam($_POST, 'endDate', '');
		if ($startDate == '%' || $startDate == '') {
			$startDate = date('Y/m/d', strtotime('-5 years'));
		} else {
			$startDate = JSCalConvertInputDates($startDate);
		}
		if ($endDate == '%' || $endDate == '') {
			$endDate = date('Y/m/d', strtotime('+5 years'));
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
		$cms_user_id = (int) jomresGetParam($_REQUEST, 'cms_user_id', '0');

		$output = array();
		$pageoutput = array();

		$output[ 'PAGETITLE' ] = jr_gettext('_JRPORTAL_INVOICES_TITLE', '_JRPORTAL_INVOICES_TITLE', false);
		$output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', false);
		$output[ 'HSURNAME' ] = jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', false);
		$output[ 'HSTATUS' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS', '_JRPORTAL_INVOICES_STATUS', false);
		$output[ 'HRAISED' ] = jr_gettext('_JRPORTAL_INVOICES_RAISED', '_JRPORTAL_INVOICES_RAISED', false);
		$output[ 'HDUE' ] = jr_gettext('_JRPORTAL_INVOICES_DUE', '_JRPORTAL_INVOICES_DUE', false);
		$output[ 'HPAID' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PAID', '_JRPORTAL_INVOICES_STATUS_PAID', false);
		$output[ 'HINITTOTAL' ] = jr_gettext('_JRPORTAL_INVOICES_INITTOTAL', '_JRPORTAL_INVOICES_INITTOTAL', false);
		$output[ 'HGRAND_TOTAL' ] = jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', false);
		$output[ 'HFREQ' ] = jr_gettext('_JRPORTAL_INVOICES_RECUR_FREQUENCY', '_JRPORTAL_INVOICES_RECUR_FREQUENCY', false);
		$output[ 'HDOM' ] = jr_gettext('_JRPORTAL_INVOICES_RECUR_DOMONTH', '_JRPORTAL_INVOICES_RECUR_DOMONTH', false);
		$output[ 'HLINEITEMS' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS', '_JRPORTAL_INVOICES_LINEITEMS', false);
		$output[ 'HEDITLINK' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS');
		$output[ 'HLEGEND' ] = jr_gettext('_JOMRES_HLEGEND', '_JOMRES_HLEGEND');
		$output[ 'HUNPAID' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_UNPAID', '_JRPORTAL_INVOICES_STATUS_UNPAID', false);
		$output[ 'HPAID' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PAID', '_JRPORTAL_INVOICES_STATUS_PAID', false);
		$output[ 'HCANCELLED' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_CANCELLED', '_JRPORTAL_INVOICES_STATUS_CANCELLED', false);
		$output[ 'HPENDING' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PENDING', '_JRPORTAL_INVOICES_STATUS_PENDING', false);
		$output[ '_JRPORTAL_INVOICES_LINEITEMS' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS', '_JRPORTAL_INVOICES_LINEITEMS', false);

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
		$options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_COMMISSIONS', '_JOMRES_STATUS_COMMISSIONS', false));
		$options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_SUBSCRIPTIONS', '_JOMRES_STATUS_SUBSCRIPTIONS', false));
		$options[] = jomresHTML::makeOption('3', jr_gettext('_JOMRES_STATUS_UNISSUED', '_JOMRES_STATUS_UNISSUED', false));
		$output['INVOICE_TYPE'] = jomresHTML::selectList($options, 'invoice_type', 'class="inputbox" size="1"', 'value', 'text', $invoice_type);

		$options = array();
		$options[] = jomresHTML::makeOption('4', jr_gettext('_JOMRES_FRONT_ROOMSMOKING_EITHER', '_JOMRES_FRONT_ROOMSMOKING_EITHER', false));
		$options[] = jomresHTML::makeOption('0', $output[ 'HUNPAID' ]);
		$options[] = jomresHTML::makeOption('1', $output[ 'HPAID' ]);
		$options[] = jomresHTML::makeOption('2', $output[ 'HCANCELLED' ]);
		$options[] = jomresHTML::makeOption('3', $output[ 'HPENDING' ]);
		$output['INVOICE_STATUS'] = jomresHTML::selectList($options, 'invoice_status', 'class="inputbox" size="1"', 'value', 'text', $invoice_status);

		$output['CMS_USER_ID'] = $cms_user_id;

		$output['AJAX_URL'] = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=list_invoices_ajax&startDate='.$startDate.'&endDate='.$endDate.'&invoice_type='.$invoice_type.'&invoice_status='.$invoice_status.'&cms_user_id='.$cms_user_id;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('list_invoices.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
