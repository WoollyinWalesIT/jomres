<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_cart
	{
	function jomres_cart()
		{
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		if (!isset($tmpBookingHandler->cart_data))
			$tmpBookingHandler->cart_data = array();
		$this->contract_total = 0.00;
		$this->deposit_required = 0.00;
		$this->calc_totals();
		}
	
	function calc_totals()
		{
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		if ( count($tmpBookingHandler->cart_data) > 0)
			{
			foreach ($tmpBookingHandler->cart_data as $data)
				{
				$this->contract_total = $this->contract_total + (float)$data['contract_total'];
				$this->deposit_required = $this->deposit_required + (float)$data['deposit_required'];
				}
			}
		}
	
	function move_from_temp_booking_to_cart_array()
		{
		$random_identifier = generateJomresRandomString(20);
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		if (!isset($tmpBookingHandler->cart_data))
			$tmpBookingHandler->cart_data = array();
		$tmpBookingHandler->cart_data[$random_identifier] = $tmpBookingHandler->tmpbooking;
		$tmpBookingHandler->resetTempBookingData();
		$tmpBookingHandler->saveAllData();
		// Have to do this here, because the redirect will exit the script from running before we get to the end of jomres.php, and the latter "close session" functionality will not be triggered
		$tmpBookingHandler->close_jomres_session();
		$this->calc_totals();
		}
	
	function remove_from_cart($identifier)
		{
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		if (isset($tmpBookingHandler->cart_data[$identifier]))
			{
			unset($tmpBookingHandler->cart_data[$identifier]);
			}
		$tmpBookingHandler->saveAllData();
		// Have to do this here, because the redirect will exit the script from running before we get to the end of jomres.php, and the latter "close session" functionality will not be triggered
		$tmpBookingHandler->close_jomres_session();
		$this->calc_totals();
		}
		
	function build_booking_form_data_for_payment_gateways()
		{
		$this->calc_totals();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$tmpBookingHandler->resetTempBookingData();
		$tmpBookingHandler->updateBookingField('contract_total',$this->contract_total);
		$tmpBookingHandler->updateBookingField('deposit_required',$this->deposit_required);
		$tmpBookingHandler->updateBookingField('cart_payment',true);
		$tmpBookingHandler->saveAllData();
		$tmpBookingHandler->close_jomres_session();
		return array ("contract_total"=>$this->contract_total,"deposit_required"=>$this->deposit_required);
		}
	}
?>