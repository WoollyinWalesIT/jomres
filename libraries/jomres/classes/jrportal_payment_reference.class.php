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
	function __construct()
		{
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
		$this->payment_reference = (int)$id;
		$query = "SELECT `invoice_id` , `gateway` FROM #__jomres_invoice_payment_ref  WHERE id = ".(int)$id . " LIMIT 1";
		$payment_details = doSelectSql($query,2);
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$prefix = "gateway_setting_".$payment_details['gateway']."_";
		if (isset($jrConfig [ $prefix."active" ]))
			{
			if ($jrConfig [ $prefix."active" ] == "1")
				{
				$settings = array();
				foreach ($jrConfig as $key=>$val)
					{
					if ( substr($key , 0 , strlen ( $prefix )  ) == $prefix )
						{
						$key =  substr($key , strlen ( $prefix ) , strlen ( $key )  ) ;
						$settings [$key] = $val;
						}
					}
				
				$invoice = jomres_singleton_abstract::getInstance( 'basic_invoice_details' );
				$invoice->gatherData($payment_details['invoice_id']);
				
				$invoice_data = array();
				$invoice_data['invoice_number']		= $payment_details['invoice_id'];
				$invoice_data['currencycode']		= $invoice->currencycode;
				$invoice_data['balance']			= $invoice->balance;
				
				$this->gateway_settings = $settings;
				$this->invoice_data = $invoice_data;
				
				$this->gateway = $payment_details['gateway'];
				$this->invoice_id =$payment_details['invoice_id'];
				
				}
			else
				{
				return false;
				}
			}
		else
			{
			return false;
			}
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