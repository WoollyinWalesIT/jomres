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

class j16000save_invoice {
	function j16000save_invoice()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$line_items = array();
		$invoice_data = array();
		
		$id		= intval(jomresGetParam( $_REQUEST, 'id', 0 ));
		
		$p_line_item 		= jomresGetParam( $_REQUEST, 'line_item', array() );
		$p_init_qty 		= jomresGetParam( $_REQUEST, 'init_qty', array() );
		$p_init_discount 	= jomresGetParam( $_REQUEST, 'init_discount', array() );
		$p_recur_qty 		= jomresGetParam( $_REQUEST, 'recur_qty', array() );
		$p_recur_discount 	= jomresGetParam( $_REQUEST, 'recur_discount', array() );
		
		$status				= jomresGetParam( $_REQUEST, 'status', 0 );
		$due_date			= jomresGetParam( $_REQUEST, 'due_date', "" );
		
		$invoice_data['id']=$id;
		$invoice_data['status']=$status;
		
		$invoice_data['due_date']=$due_date;

		foreach ($p_line_item as $li_id)
			{
			$line_items[] = array (
				'id'=>$li_id,
				'init_qty'=>(int)$p_init_qty[$li_id],
				'init_discount'=>(float)$p_init_discount[$li_id],
				'recur_qty'=>(int)$p_recur_qty[$li_id],
				'recur_discount'=>(float)$p_recur_discount[$li_id]
				);
			}
		
		jr_import('invoicehandler');
		$invoice_handler = new invoicehandler();
		$invoice_handler->id=$id;
		$invoice_handler->getInvoice();
		$original_status=$invoice_handler->status;
		
		if ($invoice_handler->subscription)
			{
			jr_import('jrportal_subscriptions');
			$subscription = new jrportal_subscriptions();
			$subscription->id= $invoice_handler->subscription_id;
			$subscription->getSubscription();
			$subscription->status=$status;
			$subscription->commitUpdateSubscription();
			}
										
										
		$invoice_handler->update_invoice($invoice_data,$line_items);
		if ($original_status != 1 && $status == 1)
			{
			$invoice_handler->paid=date( 'Y-m-d H:i:s' );
			$invoice_handler->commitUpdateInvoice();
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=list_invoices&status=paid"), "" );
			}
		
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=list_invoices"), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>