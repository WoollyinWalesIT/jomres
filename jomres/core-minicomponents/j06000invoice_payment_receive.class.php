<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000invoice_payment_receive
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		request_log();
		$payment_reference	= intval(  jomresGetParam( $_REQUEST, 'payment_reference', 0 ) );

		jr_import("jrportal_payment_reference");
		$jrportal_payment_reference = new jrportal_payment_reference();
		$invoice_data = $jrportal_payment_reference->get_invoice_details_for_reference ($payment_reference);

		$event = "10510".$jrportal_payment_reference->gateway;
		$path_to_classfile = $MiniComponents->registeredClasses[$event]['filepath'];
		require_once($path_to_classfile."invoice_payment_receive.class.php");
		$invoice_payment_receive = new invoice_payment_receive($invoice_data);
		
		if ($invoice_payment_receive->confirm_payment())
			{
			$jrportal_payment_reference->mark_payment_reference_paid();
			
			jr_import( 'jrportal_invoice' );
			$invoice = new jrportal_invoice();
			$invoice->id = $jrportal_payment_reference->invoice_id;
			$invoice->getInvoice();

			if ( $invoice->subscription == "1" )
				{
				jr_import( 'jrportal_subscriptions' );
				$subscription = new jrportal_subscriptions();
				$subscription->subscription['id'] = $invoice->subscription_id;
				$subscription->getSubscription();
				$subscription->subscription['status'] = 1;
				$subscription->commitUpdateSubscription();
				}
			
			$invoice->mark_invoice_paid();
			}
		if ( $invoice->subscription == "1" )
			jomresRedirect( JOMRES_SITEPAGE_URL_NOSEF.'&task=my_subscriptions' );
		else
			jomresRedirect( JOMRES_SITEPAGE_URL_NOSEF.'&task=list_invoices' );
		}
	

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>