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

class j06000invoice_payment_send
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
		
		$invoice_number		= intval(  jomresGetParam( $_REQUEST, 'invoice_id', 0 ) );
		$gateway			= jomresGetParam( $_REQUEST, 'gateway', '' );
		
		if ($invoice_number == "" || $gateway == "")
			return;
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$prefix = "gateway_setting_".$gateway."_";
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
				$invoice->gatherData($invoice_number);
				
				$invoice_data = array();
				$invoice_data['invoice_number']		= $invoice_number;
				$invoice_data['currencycode']		= $invoice->currencycode;
				$invoice_data['balance']			= $invoice->balance;
				
				jr_import("jrportal_payment_reference");
				$obj       = new jrportal_payment_reference();
				$obj->gateway_settings = $settings;
				$obj->invoice_data = $invoice_data;
				
				$obj->gateway = $gateway;
				$obj->invoice_id = $invoice_number;
				$obj->set_payment_refence();
				
				$event = "10510".$gateway;
				$path_to_classfile = $MiniComponents->registeredClasses[$event]['filepath'];
				require_once($path_to_classfile."invoice_payment_send.class.php");
				
				try
					{
					$send = new invoice_payment_send($obj);
					}
				catch (Exception $e) 
					{
					output_fatal_error( $e );
					}
				}
			}
		else
			{
			// gateway not available
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>