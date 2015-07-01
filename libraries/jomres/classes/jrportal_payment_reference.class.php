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

	function get_invoice_details_for_reference ( $id )
		{
		$this->payment_reference = (int)$id;
		$query = "SELECT `invoice_id` FROM #__jomres_invoice_payment_ref  WHERE id = ".(int)$id . " LIMIT 1";
		$invoice_id = doSelectSql($query,1);
		if ($invoice_id != false )
			{
			return $this->get_invoice_data($invoice_id);
			}
		else
			{
			return false;
			}
		}
	
	function get_invoice_data($invoice_id)
		{
		$gateway_active = false;
		$query = "SELECT `id`,`invoice_id`,`gateway` FROM #__jomres_invoice_payment_ref  WHERE invoice_id = ".(int)$invoice_id . " LIMIT 1";
		$payment_details = doSelectSql($query,2);
		
		
		
		$invoice = jomres_singleton_abstract::getInstance( 'basic_invoice_details' );
		$invoice->gatherData($invoice_id);
		$settings = array();
		if ( $invoice->subscription || $invoice->subscription ) // We need to check that the site manager has created gateway settings
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();

			$prefix = "gateway_setting_".$payment_details['gateway']."_";
			if (isset($jrConfig [ $prefix."active" ]))
				{
				$this->payment_reference = (int)$id;

				if ($jrConfig [ $prefix."active" ] == "1")
					{
					$gateway_active = true;
					
					foreach ($jrConfig as $key=>$val)
						{
						if ( substr($key , 0 , strlen ( $prefix )  ) == $prefix )
							{
							$key =  substr($key , strlen ( $prefix ) , strlen ( $key )  ) ;
							$settings [$key] = $val;
							}
						}
					}
				}
			}
		else
			{
			$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$invoice->property_uid."' AND plugin = '".$payment_details['gateway']."' ";
			$settingsList=doSelectSql($query);
			foreach ($settingsList as $set)
				{
				$settings[$set->setting]=$set->value;
				}
			if ( $settings['active'] == "1")
				{
				$gateway_active = true;
				}
			}

			
		if ( $gateway_active )
			{
			$invoice_data = array();
			$invoice_data['invoice_number']		= $payment_details['invoice_id'];
			$invoice_data['currencycode']		= $invoice->currencycode;
			$invoice_data['balance']			= $invoice->balance;
			$invoice_data['line_items']			= $invoice->lineitems;
			
			$this->gateway_settings = $settings;
			$this->invoice_data = $invoice_data;
			
			$this->gateway = $payment_details['gateway'];
			$this->invoice_id =$payment_details['invoice_id'];
			
			return array ( 'gateway' => $this->gateway , 'invoice_data' => $invoice_data , 'gateway_settings' => $this->gateway_settings , 'invoice_id' => $this->invoice_id , 'payment_reference' =>$payment_details['id']  );
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