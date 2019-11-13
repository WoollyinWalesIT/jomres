<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * Core Minicomponent 
	 *
	 * 
	 */

class j16000view_invoice
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
	 

	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();

		$invoice_id = intval(jomresGetParam($_REQUEST, 'id', 0));
		$popup = intval(jomresGetParam($_REQUEST, 'popup', 0));
		$output = array();
		$pageoutput = array();
		$rows = array();
		$transaction_rows = array();

		if ($invoice_id == 0) { //no invoice id passed, so nothing to display
			return;
		}

		//gather the invoice data
		$invoice = jomres_singleton_abstract::getInstance('basic_invoice_details');
		$invoice->gatherData($invoice_id);

		//site business details
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$output[ 'SITE_BUSINESS_NAME' ] = $jrConfig[ 'business_name' ];
		$output[ 'SITE_BUSINESS_HOUSENO' ] = $jrConfig[ 'business_address' ];
		$output[ 'SITE_BUSINESS_STREET' ] = $jrConfig[ 'business_street' ];
		$output[ 'SITE_BUSINESS_TOWN' ] = $jrConfig[ 'business_town' ];
		$output[ 'SITE_BUSINESS_REGION' ] = find_region_name($jrConfig[ 'business_region' ]);
		$output[ 'SITE_BUSINESS_COUNTRY' ] = getSimpleCountry($jrConfig[ 'business_country' ]);
		$output[ 'SITE_BUSINESS_POSTCODE' ] = $jrConfig[ 'business_postcode' ];
		$output[ 'SITE_BUSINESS_TELEPHONE' ] = $jrConfig[ 'business_telephone' ];
		$output[ 'SITE_BUSINESS_EMAIL' ] = $jrConfig[ 'business_email' ];
		$output[ 'SITE_BUSINESS_VATNO' ] = $jrConfig[ 'business_vat_number' ];

		//manager/client business details
		$query = 'SELECT enc_firstname,enc_surname,enc_house,enc_street,enc_town,enc_county,enc_country,enc_postcode,enc_tel_landline,enc_tel_mobile,enc_email,enc_vat_number FROM #__jomres_guest_profile WHERE cms_user_id = '.(int) $invoice->cms_user_id.'';
		$managerData = doSelectSql($query);

		if (!empty($managerData)) {
			foreach ($managerData as $data) {
				$output[ 'FIRSTNAME' ] = $jomres_encryption->decrypt($data->enc_firstname);
				$output[ 'SURNAME' ] = $jomres_encryption->decrypt($data->enc_surname);
				$output[ 'HOUSE' ] = $jomres_encryption->decrypt($data->enc_house);
				$output[ 'STREET' ] = $jomres_encryption->decrypt($data->enc_street);
				$output[ 'TOWN' ] = $jomres_encryption->decrypt($data->enc_town);
				$output[ 'REGION' ] = find_region_name($jomres_encryption->decrypt($data->enc_county));
				$output[ 'COUNTRY' ] = getSimpleCountry($jomres_encryption->decrypt($data->enc_country));
				$output[ 'POSTCODE' ] = $jomres_encryption->decrypt($data->enc_postcode);
				$output[ 'LANDLINE' ] = $jomres_encryption->decrypt($data->enc_tel_landline);
				$output[ 'MOBILE' ] = $jomres_encryption->decrypt($data->enc_tel_mobile);
				$output[ 'EMAIL' ] = $jomres_encryption->decrypt($data->enc_email);
				$output[ 'VATNO' ] = $jomres_encryption->decrypt($data->enc_vat_number);
			}
		}

		//toolbar
		if ($popup != 1) {
			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();
			if ($invoice->status != 1 && $invoice->raised_date > '1970-01-01 00:00:01') {
				$jrtb .= $jrtbar->toolbarItem('save', jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=mark_invoice_paid&id='.$invoice->id), jr_gettext('_JOMRES_INVOICE_MARKASPAID', '_JOMRES_INVOICE_MARKASPAID', false));
			}
			//$jrtb .= $jrtbar->toolbarItem( 'printer', jomresUrl(JOMRES_SITEPAGE_URL_ADMIN . '&tmpl=' .get_showtime("tmplcomponent") . '&popup=1&task=view_invoice&id=' . $invoice->id), jr_gettext( '_JOMRES_COM_INVOICE_PRINT', _JOMRES_COM_INVOICE_PRINT, false) );
			$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices'), '');
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;
		} else {
			$output[ 'JOMRESTOOLBAR' ] = '';
		}

		$output[ 'HBUSINESSNAME' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_NAME', '_JOMRES_COM_YOURBUSINESS_NAME');
		$output[ 'TITLE' ] = jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST');
		$output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME');
		$output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
		$output[ 'HVATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO');
		$output[ 'HHOUSENO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESSADDRESS', '_JOMRES_COM_YOURBUSINESSADDRESS');
		$output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
		$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
		$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
		$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
		$output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');
		$output[ 'HTELEPHONE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE');
		$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
		$output[ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE');
		$output[ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE');
		$output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX');

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_INVOICE_TITLE', '_JOMRES_COM_INVOICE_TITLE');
		$output[ 'HINVOICE_TRANSACTIONS' ] = jr_gettext('_INVOICE_TRANSACTIONS', '_INVOICE_TRANSACTIONS');
		$output[ 'HUSER' ] = jr_gettext('_JRPORTAL_INVOICES_USER', '_JRPORTAL_INVOICES_USER');
		$output[ 'HSTATUS' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS', '_JRPORTAL_INVOICES_STATUS');
		$output[ 'HRAISED' ] = jr_gettext('_JRPORTAL_INVOICES_RAISED', '_JRPORTAL_INVOICES_RAISED');
		$output[ 'HDUE' ] = jr_gettext('_JRPORTAL_INVOICES_DUE', '_JRPORTAL_INVOICES_DUE');
		$output[ 'HSUBSCRIPTION' ] = jr_gettext('_JRPORTAL_INVOICES_SUBSCRIPTION', '_JRPORTAL_INVOICES_SUBSCRIPTION');
		$output[ 'HINITTOTAL' ] = jr_gettext('_JRPORTAL_INVOICES_INITTOTAL', '_JRPORTAL_INVOICES_INITTOTAL');
		$output[ 'HCURRENCYCODE' ] = jr_gettext('_JRPORTAL_INVOICES_CURRENCYCODE', '_JRPORTAL_INVOICES_CURRENCYCODE');
		$output[ 'HINVOICENO' ] = jr_gettext('_JOMRES_INVOICE_NUMBER', '_JOMRES_INVOICE_NUMBER');
		$output[ 'TRANSACTION_ID' ] = jr_gettext('TRANSACTION_IDS', 'TRANSACTION_IDS');
		$output[ 'PAYMENT_METHOD' ] = jr_gettext('PAYMENT_METHOD', 'PAYMENT_METHOD');

		$output[ 'ID' ] = $invoice->id;

		// Invoice status:
		// 0 unpaid
		// 1 paid
		// 2 cancelled
		// 3 pending
		switch ($invoice->status) {
			case 0:
				$output[ 'LABEL_CLASS' ] = 'label-red';
				$output[ 'STATUS' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_UNPAID', '_JRPORTAL_INVOICES_STATUS_UNPAID');
				break;
			case 1:
				$output[ 'LABEL_CLASS' ] = 'label-green';
				$output[ 'STATUS' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PAID', '_JRPORTAL_INVOICES_STATUS_PAID');
				break;
			case 2:
				$output[ 'LABEL_CLASS' ] = 'label-black';
				$output[ 'STATUS' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_CANCELLED', '_JRPORTAL_INVOICES_STATUS_CANCELLED');
				break;
			default:
				$output[ 'LABEL_CLASS' ] = 'label-orange';
				$output[ 'STATUS' ] = jr_gettext('_JRPORTAL_INVOICES_STATUS_PENDING', '_JRPORTAL_INVOICES_STATUS_PENDING', false);
		}

		$output[ 'USER' ] = jr_gettext('_JRPORTAL_INVOICES_USER', '_JRPORTAL_INVOICES_USER', false);
		
		if ($invoice->raised_date != '1970-01-01 00:00:01')
			$output[ 'RAISED' ] = $invoice->raised_date;
		else
			$output[ 'RAISED' ] = '';
		
		if ($invoice->due_date != '1970-01-01 00:00:01')
			$output[ 'DUE' ] = $invoice->due_date;
		else
			$output[ 'DUE' ] = '';

		// See note at the end of this line!
		$output[ 'INITTOTAL' ] = output_price($invoice->init_total, $invoice->currencycode, true, true); // This is now wrong. The init total is calculated when the invoice is generated, but recent VAT related changes mean that on older invoices which were created before the VAT changes were added, it's possible that this sum is incorrect. The newer GRAND_TOTAL_INC_TAX output variable is correct, as it's adjusted according to the VAT rules, so we'll replace INITTOTAL with GRAND_TOTAL_INC_TAX in invoice template files.

		$output[ 'CURRENCYCODE' ] = $invoice->currencycode;

		$output[ 'LIPAGETITLE' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS', '_JRPORTAL_INVOICES_LINEITEMS');
		$output[ 'HLI_NAME' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_NAME', '_JRPORTAL_INVOICES_LINEITEMS_NAME');
		$output[ 'HLI_DESCRIPTION' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION');
		$output[ 'HCURRENCYCODE' ] = jr_gettext('_JRPORTAL_INVOICES_CURRENCYCODE', '_JRPORTAL_INVOICES_CURRENCYCODE');
		$output[ 'HLI_INIT_PRICE' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE');
		$output[ 'HLI_INIT_QTY' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY');
		$output[ 'HLI_INIT_DISCOUNT' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT');
		$output[ 'HLI_INIT_TOTAL' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL');
		$output[ 'HLI_INIT_TOTAL_INCLUSIVE' ] = jr_gettext('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX');
		$output[ 'HLI_TAX_CODE' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', false);
		$output[ 'HLI_TAX_DESCRIPTION' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION');
		$output[ 'HLI_TAX_RATE' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE');
		$output[ 'HLI_TAX_AMOUNT' ] = jr_gettext('_JOMRES_COM_FRONT_ROOMTAX', '_JOMRES_COM_FRONT_ROOMTAX');

		if (!empty($invoice->lineitems)) {
			foreach ($invoice->lineitems as $li) {
				$r = array();
				$r[ 'ID' ] = $li[ 'id' ];
				$r[ 'LI_NAME' ] = jr_gettext($li[ 'name' ], $li[ 'name' ], false);
				$r[ 'LI_DESCRIPTION' ] = $li[ 'description' ];
				$r[ 'LI_INIT_PRICE' ] = output_price($li[ 'init_price' ], $invoice->currencycode, false, true);
				$r[ 'LI_INIT_QTY' ] = $li[ 'init_qty' ];
				$r[ 'LI_INIT_DISCOUNT' ] = output_price($li[ 'init_discount' ], $invoice->currencycode, false, true);
				$r[ 'LI_INIT_TOTAL' ] = output_price($li[ 'init_total' ], $invoice->currencycode, false, true);

				if ($invoice->vat_will_be_charged) {
					$r[ 'LI_INIT_TOTAL_INCLUSIVE' ] = output_price($li[ 'init_total_inclusive' ], $invoice->currencycode, false, true);
					$r[ 'LI_TAX_RATE' ] = $li[ 'tax_rate' ];
				} else {
					$r[ 'LI_INIT_TOTAL_INCLUSIVE' ] = output_price($li[ 'init_total' ], $invoice->currencycode, false, true);
					$r[ 'LI_TAX_RATE' ] = 0;
				}

				$r[ 'LI_TAX_CODE' ] = $li[ 'tax_code' ];
				$r[ 'LI_TAX_DESCRIPTION' ] = $li[ 'tax_description' ];
				$r[ 'LI_TAX_AMOUNT' ] = output_price($li[ 'tax_amount' ], $invoice->currencycode, false, true);
				$r[ 'LI_INV_ID' ] = $li[ 'inv_id' ];
				$r[ 'CURRENCYCODE' ] = $invoice->currencycode;
				$r[ 'TRANSACTION_ID' ] = $li[ 'transaction_id' ];
				$r[ 'PAYMENT_METHOD' ] = $li[ 'payment_method' ];

				if ((int) $li[ 'is_payment' ] == 0) {
					$rows[] = $r;
				} else {
					$transaction_rows[] = $r;
				}
			}
		}

		$output[ 'JOMRES_GRANDTOTAL_TOTAL_TAX' ] = jr_gettext('JOMRES_GRANDTOTAL_TOTAL_TAX', 'JOMRES_GRANDTOTAL_TOTAL_TAX');
		$output[ 'JOMRES_GRANDTOTAL_EX_TAX' ] = jr_gettext('JOMRES_GRANDTOTAL_EX_TAX', 'JOMRES_GRANDTOTAL_EX_TAX');
		$output[ 'JOMRES_GRANDTOTAL_INC_TAX' ] = jr_gettext('JOMRES_GRANDTOTAL_INC_TAX', 'JOMRES_GRANDTOTAL_INC_TAX');

		$output[ 'GRAND_TOTAL_INC_TAX' ] = output_price($invoice->grand_total_inc_tax, $invoice->currencycode, false, true);
		$output[ 'GRAND_TOTAL_EX_TAX' ] = output_price($invoice->grand_total_ex_tax, $invoice->currencycode, false, true);
		$output[ 'GRAND_TOTAL_TAX' ] = output_price($invoice->grand_total_tax, $invoice->currencycode, false, true);
		$output[ 'OUTSTANDING_TOTAL' ] = output_price($invoice->balance, $invoice->currencycode, false, true);
		
		//invoice logo
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_site_images('logo');
		
		$output[ 'LOGO' ] = $jomres_media_centre_images->multi_query_images [ 'noimage-small' ];

		if (isset($jomres_media_centre_images->site_images['logo'])) {
			foreach ($jomres_media_centre_images->site_images['logo'] as $image) {
				$output[ 'LOGO' ] = $image['small'];
			}
		}


		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);

		if ($popup == 1) {
			$tmpl->readTemplatesFromInput('admin_printable_invoice.html');
		} else {
			$tmpl->readTemplatesFromInput('admin_view_invoice.html');
		}

		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->addRows('transaction_rows', $transaction_rows);

		$tmpl->displayParsedTemplate();
	}
	
	/**
	 * 
	 *
	 *
	 */

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
