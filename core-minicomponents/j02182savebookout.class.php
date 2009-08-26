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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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