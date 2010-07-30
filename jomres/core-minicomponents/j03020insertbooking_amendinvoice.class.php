<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * 
 #
* @package Jomres
#
 */
class j03020insertbooking_amendinvoice {
	/**
	#
	 * Inserts the booking. Receives the jomressession and a flag to indicated if the deposit has been paid
	#
	 */
	function j03020insertbooking_amendinvoice($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$this->results=array();
		$contract_uid=$componentArgs['contract_uid'];
		$userIsManager=checkUserIsManager();
		$mrConfig=getPropertySpecificSettings();
		
		$line_items= array();
		
		if ( isset($tmpBookingHandler->tmpbooking["amend_contract"]) )
			{
			$amend_contract  = $tmpBookingHandler->getBookingFieldVal("amend_contract");
			$amend_contractuid  = $tmpBookingHandler->getBookingFieldVal("amend_contractuid");
			}
		else
			$amend_contract  = false;

		if ($amend_contract && $amend_contractuid != 0 && $userIsManager)
			{
			$query="SELECT id FROM #__jomresportal_invoices WHERE contract_id = ".$amend_contractuid;
			$invoice_id=doSelectSql($query,1);
			
			if ($invoice_id > 0)
				{
				$new_contract_total		= (float)$tmpBookingHandler->getBookingFieldVal("override_contract_total");
				$old_contract_total		= (float)$tmpBookingHandler->getBookingFieldVal("amend_contract_total");
				if ( $new_contract_total != $old_contract_total)
					{
					$line_item_data = array (
						'tax_code_id'=>(int)$mrConfig['accommodation_tax_code'],
						'name'=>jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL,false,false),
						'description'=>'',
						'init_price'=>number_format($new_contract_total,2, '.', ''),
						'init_qty'=>"1",
						'init_discount'=>"0",
						'recur_price'=>"0.00",
						'recur_qty'=>"0",
						'recur_discount'=>"0.00"
						);
					$line_items[]=$line_item_data;

					jr_import('invoicehandler');
					$invoice_handler = new invoicehandler();
					$invoice_handler->id=$invoice_id;
					$invoice_handler->getInvoice();
					
					$invoice_data= array();
					$invoice_data['id']			= $invoice_id;

					$invoice_handler->update_invoice($invoice_data,$line_items);
					$this->results=array("invoice_id"=>$invoice_handler->id);
					}

				}
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->results;
		}
	}
?>