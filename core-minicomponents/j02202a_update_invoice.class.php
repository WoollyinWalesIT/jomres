<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * Saves deposit data
 #
* @package Jomres
#
 */
class j02202a_update_invoice {
	/**
	#
	 * Constructor: Saves deposit data
	#
	 */
	function j02202a_update_invoice()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$defaultProperty=getDefaultProperty();
		$contractUid        = intval(jomresGetParam( $_POST, 'contractUid', 0 ) );
		if ($contractUid>0)
			{
			// This is a security check because we don't have a property uid associated with invoices
			$query="SELECT contract_uid,deposit_required FROM #__jomres_contracts WHERE contract_uid = ".$contractUid." AND property_uid = ".$defaultProperty;
			$result=doSelectSql($query);
			if (count($result)==1)
				{
				foreach ($result as $r)
					{
					$deposit_required=$r->deposit_required;
					}
				$query="SELECT id FROM #__jomresportal_invoices WHERE contract_id = ".$contractUid;
				$invoice_id=doSelectSql($query,1);
				jr_import('invoicehandler');
				$invoice_handler = new invoicehandler();
				$invoice_handler->id=$invoice_id;
				$invoice_handler->getInvoice();
				$line_items= array();
				$line_item_data = array (
					'tax_code_id'=>0,
					'name'=>jr_gettext('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT',_JOMRES_MR_AUDIT_ENTEREDDEPOSIT,false,false),
					'description'=>'',
					'init_price'=>"-".number_format($deposit_required,2, '.', ''),
					'init_qty'=>"1",
					'init_discount'=>"0",
					'recur_price'=>"0.00",
					'recur_qty'=>"0",
					'recur_discount'=>"0.00"
					);
				$invoice_handler->add_line_item($line_item_data);
				$invoice_handler->commitUpdateInvoice();
				}
			else
				error_logging("Couldn't corrolate contract uid with user's current property.");
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
		return null;
		}
	}

?>