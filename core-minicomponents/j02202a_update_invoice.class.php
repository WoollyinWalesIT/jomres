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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		$MiniComponents =jomres_getSingleton('mcHandler');
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
					'init_price'=>"-"number_format($deposit_required,2, '.', ''),
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
