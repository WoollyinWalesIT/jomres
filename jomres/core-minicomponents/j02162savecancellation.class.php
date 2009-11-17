<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

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