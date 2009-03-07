<?php
/**
#
 * Mini-component core file: Saves Optional Extra details
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000save_invoice {
	function j16000save_invoice()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
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
		
		$invoice_handler = new invoicehandler();
		$invoice_handler->id=$id;
		$invoice_handler->getInvoice();
		$original_status=$invoice_handler->status;
		
		if ($invoice_handler->subscription)
			{
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