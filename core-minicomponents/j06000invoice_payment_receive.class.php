<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
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
		
		$payment_reference	= intval(  jomresGetParam( $_REQUEST, 'payment_reference', 0 ) );

		jr_import("jrportal_payment_reference");
		$jrportal_payment_reference = new jrportal_payment_reference();
		$jrportal_payment_reference->get_payment_details_for_reference ($payment_reference);

		$event = "10510".$jrportal_payment_reference->gateway;
		$path_to_classfile = $MiniComponents->registeredClasses[$event]['filepath'];
		require_once($path_to_classfile."invoice_payment_receive.class.php");
		$invoice_payment_receive = new invoice_payment_receive();
		
		if ($invoice_payment_receive->confirm_payment())
			{
			$jrportal_payment_reference->mark_payment_reference_paid();
			
			jr_import( 'jrportal_invoice' );
			$invoice = new jrportal_invoice();
			$invoice->id = $jrportal_payment_reference->invoice_id;
			$invoice->getInvoice();
			$invoice->mark_invoice_paid();
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>