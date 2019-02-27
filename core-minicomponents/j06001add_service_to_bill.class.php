<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001add_service_to_bill
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
		$saveMessage = jr_gettext('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE');
		$contract_uid = jomresGetParam($_REQUEST, 'contract_uid', 0);

		$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

		if (!isset($_POST[ 'service_description' ])) {
			$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE', '_JOMRES_COM_ADDSERVICE_TITLE');
			$output[ 'HSERVICEDESCRIPTION' ] = jr_gettext('_JOMRES_COM_ADDSERVICE_DESCRIPTION', '_JOMRES_COM_ADDSERVICE_DESCRIPTION');
			$output[ 'HSERVICEVALUE' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE');
			$output[ 'HTAXRATE' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE');
			$output[ 'HQTY' ] = jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY');

			$output[ 'CONTRACTUID' ] = $contract_uid;

			$output[ 'TAXRATEDROPDOWN' ] = $jrportal_taxrate->makeTaxratesDropdown(1);

			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL."&task=edit_booking&contract_uid=$contract_uid"), '');
			$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'add_service_to_bill');
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->readTemplatesFromInput('add_service_to_bill.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->displayParsedTemplate();
		} else {
			$contract_uid = jomresGetParam($_POST, 'contract_uid', 0);
			$service_description = ucfirst(jomresGetParam($_POST, 'service_description', ''));
			
			$sv = str_replace( "&#45;" , "-"  , jomresGetParam($_POST, 'service_value', 0.00) );
			$service_value = convert_entered_price_into_safe_float($sv);

			$taxrate = jomresGetParam($_POST, 'taxrate', 0);
			$service_qty = jomresGetParam($_POST, 'service_qty', 1.00);

			$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');
			$jrportal_taxrate->gather_data($taxrate);
			$tax_value = $jrportal_taxrate->rate;

			//if prices are set to gross, we need to convert $service_value to the nett amount, so it can be used as initial price in the invoice
			if ($mrConfig['prices_inclusive'] == '1') {
				$divisor = ($tax_value / 100) + 1;
				$service_value = $service_value / $divisor;
			}

			if ($contract_uid && $service_description) {
				$query = "INSERT INTO #__jomres_extraservices (`service_description`,`service_value`,`contract_uid`,`tax_rate_val`,`tax_code`, `service_qty`) VALUES ('$service_description','".$service_value."','".(int) $contract_uid."',".$tax_value.','.$taxrate.','.$service_qty.')';
				if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_ADDSERVICE', '_JOMRES_MR_AUDIT_ADDSERVICE', false))) {
					trigger_error('Unable to insert into extraservices table, mysql db failure', E_USER_ERROR);
				} else {
					jr_import('jrportal_invoice');
					$invoice = new jrportal_invoice();
					$invoice->id = $invoice->get_invoice_id_by_contract_uid($contract_uid);

					$line_item = array('tax_code_id' => $taxrate,
										 'name' => $service_description,
										 'description' => '',
										 'init_price' => $service_value,
										 'init_qty' => number_format($service_qty, 2, '.', ''),
										 'init_discount' => 0,
										 );

					if ($invoice->getInvoice()) {
						$invoice->add_line_item($line_item);
						$invoice->commitUpdateInvoice();

						if ($invoice->status == 1 && $service_value > 0) {
							$invoice->mark_invoice_pending();
						}
					} else {
						echo 'Error adding line item to invoice';

						return;
					}
					jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL."&task=edit_booking&contract_uid=$contract_uid"), $saveMessage);
				}
			} else {
				echo 'Ooops, no description or value entered. ';
				trigger_error('Adding service to bill, description not entered', E_USER_ERROR);
			}
		}
	}

	public function touch_template_language()
	{
		$output = array();
		$output[ ] = jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE', '_JOMRES_COM_ADDSERVICE_TITLE');
		$output[ ] = jr_gettext('_JOMRES_COM_ADDSERVICE_DESCRIPTION', '_JOMRES_COM_ADDSERVICE_DESCRIPTION');
		$output[ ] = jr_gettext('_JOMRES_COM_ADDSERVICE_VALUE', '_JOMRES_COM_ADDSERVICE_VALUE');
		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
