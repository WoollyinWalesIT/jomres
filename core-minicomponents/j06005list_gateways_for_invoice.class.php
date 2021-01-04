<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
 *
 * @copyright	2005-2021 Vince Wooll
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

class j06005list_gateways_for_invoice
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
	 
	public function __construct($invoice_id = null)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
			}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if (is_null($invoice_id)) {
			$this->invoice_id = intval(jomresGetParam($_REQUEST, 'invoice_id', 0));
		} else {
			$this->invoice_id = (int) $invoice_id;
			}

		if ($this->invoice_id == 0) {
			return;
			}

		$invoice = jomres_singleton_abstract::getInstance('basic_invoice_details');
		$invoice->gatherData($this->invoice_id);

		if (!$thisJRUser->superPropertyManager) {
			if ($thisJRUser->id != $invoice->cms_user_id) {
				throw new Exception('User '.$thisJRUser->username.' is not authorised to view invoice id '.$this->invoice_id);
				}
			}

		jr_import("gateway_plugin_settings");
		$plugin_settings = new gateway_plugin_settings();
		$plugin_settings->get_settings_for_property_uid( $invoice->property_uid );

		$output = array();
		$pageoutput = array();

		$rows = array();
		foreach ($plugin_settings->gateway_settings as $gateway_name => $settings) {
			if ( (bool)$settings ['balance_payments_supported'] == true ) {
				if (isset($settings['active']) && $settings['active'] == '1') {
					$r = array();
					$r['FRIENDLYNAME'] = jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAYNAME'.$gateway_name,$gateway_name,false,false);
					$r['IMAGE'] = $settings['config_links'] ['button'];
					$r['LINK'] = JOMRES_SITEPAGE_URL.'&task=invoice_payment_send&gateway='.$gateway_name.'&invoice_id='.$this->invoice_id;
					$r['PAYNOW'] = jr_gettext('_JRPORTAL_INVOICES_PAYNOW', '_JRPORTAL_INVOICES_PAYNOW', false);
					$rows[] = $r;
					}
				}
			}
		if (!empty($rows)) {
			$output['PAGETITLE'] = jr_gettext('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', false);

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('list_gateways_for_invoice.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$this->retVals = $tmpl->getParsedTemplate();

			if (isset($_REQUEST['invoice_id'])) {
				echo $this->retVals;
				}
			}
		else {
			echo "<p class='alert alert-danger'>Error, no gateways have been configured.</p>";
			}

	}


	public function getRetVals()
	{
		return null;
	}
}
