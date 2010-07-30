<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Saves a cancellation
 #
* @package Jomres
#
 */
class j02162savecancellation {
	/**
	#
	 * Constructor: Saves a cancellation
	#
	 */
	function j02162savecancellation()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings();
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$contract_uid = jomresGetParam( $_POST, 'contract_uid', 0 );
		$reason = jomresGetParam( $_POST, 'reason', "" );
		if ($contract_uid != 0 )
			{
			$defaultProperty=getDefaultProperty();
			jr_import('jomres_cache');
			$cache = new jomres_cache();
			$cache->trashCacheForProperty($defaultProperty);
			$today = date("Y/m/d");
			$saveMessage=jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLED',_JOMRES_COM_MR_EB_GUEST_CANCELLED,FALSE);
			//$jomres_messaging = new jomres_messages();
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message($saveMessage);
			$forfeit_retained="0";
			if ($mrConfig['cancellationPolicyReserveDeposits']=="1")
				$forfeit_retained="1";
			$query="SELECT guest_uid,tag FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
			$contractData =doSelectSql($query);
			foreach ($contractData as $cancellation)
				{
				$guest_uid=$cancellation->guest_uid;
				$tag=$cancellation->tag;
				}
			
			$dateToDrop=$dateRangeArray[$i];
			$query="DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,""))
				trigger_error ("Unable to delete from room bookings table, mysql db failure", E_USER_ERROR);
			
			$query="UPDATE #__jomres_contracts SET `cancelled`='1', `cancelled_timestamp`='".date( 'Y-m-d H:i:s' )."', `cancelled_reason`='".$reason."' WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,""))
				trigger_error ("Unable to update cancellations data for contract". (int)$contract_uid.", mysql db failure", E_USER_ERROR);

			$query="SELECT email,firstname,surname FROM #__jomres_guests WHERE guests_uid = ".$guest_uid." LIMIT 1";
			$guestData =doSelectSql($query,2);
			$text=$tag.' - '.$saveMessage;
			
			$current_property_details =jomres_getSingleton('basic_property_details');
			$current_property_details->gather_data($defaultProperty);
		
			if (!jomresMailer( $guestData['email'], $current_property_details->property_name.' - '.$current_property_details->property_town, $current_property_details->property_email, $saveMessage, $text,$mode=1))
				error_logging('Failure in sending cancellation email to hotel. Target address: '.$hotelemail.' Subject'.$subject);
			if (!jomresMailer( $current_property_details->property_email, $current_property_details->property_name.' - '.$current_property_details->property_town, $guestData['email'], $saveMessage, $text,$mode=1))
				error_logging('Failure in sending cancellation email to guest. Target address: '.$hotelemail.' Subject'.$subject);
				
			$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".$saveMessage."','".date( 'Y-m-d H:i:s' )."','".(int)$defaultProperty."')";
			doInsertSql($query,"");
			
			$query = "SELECT id FROM #__jomresportal_invoices WHERE contract_id = ".(int)$contract_uid." LIMIT 1";
			$invoice_uid =doSelectSql($query,1);
			if ($invoice_uid > 0)
				{
				jr_import("invoicehandler");
				$invoice = new invoicehandler();
				$invoice->id = $invoice_uid;
				$invoice->getInvoice();
				$invoice->mark_invoice_cancelled();
				}
			
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listLiveBookings"), $saveMessage );
			}
		else
			{
			trigger_error ("Unable to save cancellation. (Hack attempt?)", E_USER_ERROR);
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>