<?php
/**
#
 * Mini-component core file: Saves booking out data
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$contract_uid         = jomresGetParam( $_REQUEST, 'contract_uid', 0 );
		$items="";
		$saveMessage= jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT',_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT,FALSE);
		$today = date("Y/m/d");
		$query="SELECT guest_uid FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
		$contractData =doSelectSql($query);
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

		jomresRedirect(jomresURL("index.php?option=com_jomres&task=listLiveBookings&Itemid=$Itemid"), $saveMessage );
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