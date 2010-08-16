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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * Saves booking out data
 #
* @package Jomres
#
 */
class j02182savebookout {
	/**
	#
	 * Constructor: Saves booking out data
	#
	 */
	function j02182savebookout()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		$contract_uid         = jomresGetParam( $_REQUEST, 'contract_uid', 0 );
		$items="";
		$saveMessage= jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT',_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT,FALSE);
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message($saveMessage);
		$query="SELECT guest_uid FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
		$contractData =doSelectSql($query);

		if (count($contractData)>0)
			{
			jr_import('jomres_cache');
			$cache = new jomres_cache();
			$cache->trashCacheForProperty($defaultProperty);

			$query="DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,""))
				trigger_error ("Unable to delete from room bookings table, mysql db failure", E_USER_ERROR);
			
			$query="UPDATE #__jomres_contracts SET `bookedout`='1', `bookedout_timestamp`='".date( 'Y-m-d H:i:s' )."' WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,""))
				trigger_error ("Unable to update booking out data for contract". (int)$contract_uid.", mysql db failure", E_USER_ERROR);
			
			$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".$saveMessage."','".date( 'Y-m-d H:i:s' )."','".(int)$defaultProperty."')";
			doInsertSql($query,"");
			
			}
		else
			trigger_error ("Error, cannot reconcile contract uid ".(int)$contract_uid." with property uid ".(int)$defaultProperty, E_USER_ERROR);

		
		// Depreciated in v4, replaced with changing the new bookedout out flag to true.
		/*
		foreach ($contractData as $cancellation)
			{
			$guest_uid=$cancellation->guest_uid;
			}
		$query="DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
		if (!doInsertSql($query,""))
			trigger_error ("Unable to delete from room bookings table, mysql db failure", E_USER_ERROR);

		$query="INSERT INTO #__jomres_bookedout (
		`guest_uid`,`paid_in_full`,`totalcharge`,`items`,
		`date_bookedout`,`contract_uid`,`reception_id`,`room_uid`
		)VALUES(
		'".(int)$guest_uid."','1','".(float)$contractTotal."','$items',
		'$today','".(int)$contractUid."','".(int)$id."','".(int)$room_uid."'
		)";
		if (!doInsertSql($query,"")) trigger_error ("Unable to insert into bookedout table, mysql db failure", E_USER_ERROR);

		$query="DELETE FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
		if (!doInsertSql($query,""))
			trigger_error ("Unable to delete from contracts table, mysql db failure", E_USER_ERROR);

		$query="DELETE FROM #__jomres_extraServices WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
		doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT',_JOMRES_MR_AUDIT_BOOKEDGUESTOUT,FALSE));
		*/
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL."&task=listLiveBookings"), $saveMessage );
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