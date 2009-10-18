<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

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
						'tax_code_id'=>0,
						'name'=>jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL,false,false),
						'description'=>'',
						'init_price'=>"-".number_format($old_contract_total,2, '.', ''),
						'init_qty'=>"1",
						'init_discount'=>"0",
						'recur_price'=>"0.00",
						'recur_qty'=>"0",
						'recur_discount'=>"0.00"
						);
					$line_items[]=$line_item_data;
					
					$line_item_data = array (
						'tax_code_id'=>0,
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
					}
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