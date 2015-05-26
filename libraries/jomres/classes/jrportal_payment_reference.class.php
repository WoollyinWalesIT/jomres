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

// When sending invoice payments to gateways, some gateways will not let you send more than one return element in the url when passing back to ( for example ) Jomres.
// This class is used to create a payment reference between an invoice id & a gateway so that gateway process, receiving payment confirmation, can then query this table for the invoice number etc

class jrportal_payment_reference
	{
	function __construct( $gateway  , $invoice_id)
		{
		$this->gateway = filter_var(  $gateway , FILTER_SANITIZE_SPECIAL_CHARS ) ;
		$this->invoice_id = (int) $invoice_id;
		}
	
	function set_payment_refence()
		{
		$query = "INSERT INTO #__jomres_invoice_payment_ref ( `invoice_id` , `gateway` ) VALUES ( '".$this->invoice_id."' , '".$this->gateway."' ) ";
		try
			{
			$this->payment_reference = doInsertSql($query);
			return $payment_reference;
			}
		catch (Exception $e) 
			{
			output_fatal_error( $e );
			}
		}

	function get_payment_details_for_reference ( $id )
		{
		$query = "SELECT `invoice_id` , `gateway` FROM #__jomres_invoice_payment_ref  WHERE id = ".(int)$id . " LIMIT 1";
		$this->payment_reference = doSelectSql($query,2);
		}
	
	function mark_payment_reference_paid()
		{
		if (isset($this->payment_reference))
			{
			$query = "UPDATE #__jomres_invoice_payment_ref SET `paid` = 1 WHERE id = ".(int)$this->payment_reference;
			try
				{
				 doInsertSql($query);
				}
			catch (Exception $e) 
				{
				output_fatal_error( $e );
				}
			}
		}
	}