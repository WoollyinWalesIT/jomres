<?php
/**
#
 * Mini-component core file: Saves a booking cancellation
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$contract_uid = jomresGetParam( $_POST, 'contract_uid', 0 );
		$reason = jomresGetParam( $_POST, 'reason', "" );
		if ($contract_uid != 0 )
			{
			$defaultProperty=getDefaultProperty();
			$cache = new jomres_cache();
			$cache->trashCacheForProperty($defaultProperty);
			$today = date("Y/m/d");
			$saveMessage=jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLED',_JOMRES_COM_MR_EB_GUEST_CANCELLED,FALSE);
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
			
			global $thisJomresPropertyDetails;

			$query="SELECT email,firstname,surname FROM #__jomres_guests WHERE guests_uid = ".$guest_uid." LIMIT 1";
			$guestData =doSelectSql($query,2);
			$text=$tag.' - '.$saveMessage;
			if (!jomresMailer( $guestData['email'], $thisJomresPropertyDetails['property_name'].' - '.$thisJomresPropertyDetails['property_town'], $thisJomresPropertyDetails['property_email'], $saveMessage, $text,$mode=1))
				error_logging('Failure in sending cancellation email to hotel. Target address: '.$hotelemail.' Subject'.$subject);
			if (!jomresMailer( $thisJomresPropertyDetails['property_email'], $thisJomresPropertyDetails['property_name'].' - '.$thisJomresPropertyDetails['property_town'], $guestData['email'], $saveMessage, $text,$mode=1))
				error_logging('Failure in sending cancellation email to guest. Target address: '.$hotelemail.' Subject'.$subject);
				
			$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".$saveMessage."','".date( 'Y-m-d H:i:s' )."','".(int)$defaultProperty."')";
			doInsertSql($query,"");
			
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