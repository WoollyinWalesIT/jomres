<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		
		
		foreach ($line_items as $li)
			{
			
			$line_item_id = $li['id'];
			jr_import('jrportal_lineitem');
			$line_item = new jrportal_lineitem();
			$line_item->id = $line_item_id;
			$line_item->getLineItem();
			$li['tax_code_id'] = $line_item->tax_code;
			
			$invoice_handler->update_line_item($li);
			
			}
			
		$invoice_handler->status=$status;
		$invoice_handler->commitUpdateInvoice();
		
		if ($original_status != 1 && $status == 1)
			{
			$invoice_handler->paid=date( 'Y-m-d H:i:s' );
			$invoice_handler->status=1;
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