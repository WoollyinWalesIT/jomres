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
 * Deletes a guest
 #
* @package Jomres
#
 */
class j02226deleteguest {
	/**
	#
	 * Constructor: Deletes a guest
	#
	 */
	function j02226deleteguest()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$guestUid=jomresGetParam( $_REQUEST, 'guestUid', 0 );
		$defaultProperty=getDefaultProperty();
		$saveMessage=jr_gettext('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED',_JOMRES_FRONT_DELETEGUEST_GUESTDELETED,FALSE);
		$query="SELECT guest_uid,contract_uid FROM #__jomres_contracts WHERE guest_uid = '".(int)$guestUid."' AND property_uid = '".(int)$defaultProperty."' AND cancelled != 1";
		$bookingCountThisProperty =doSelectSql($query);
		$query="SELECT guest_uid FROM #__jomres_contracts WHERE guest_uid = '".(int)$guestUid."' AND cancelled != 1";
		$bookingCountAllPropertys=doSelectSql($query);
		if (count($bookingCountThisProperty)==count($bookingCountAllPropertys))
			{
			if (count($bookingCountThisProperty) > 0)
				{
				foreach ($bookingCountThisProperty as $contract_uid)
					{
					echo "Deleting room bookings";
					
					$query="DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$contract_uid->contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
					echo $query;echo "<br>";
					if (!doInsertSql($query,""))
						trigger_error ("Unable to delete from room bookings table, mysql db failure", E_USER_ERROR);
					
					$query="UPDATE #__jomres_contracts SET `cancelled`='1', `cancelled_timestamp`='".date( 'Y-m-d H:i:s' )."', `cancelled_reason`='Guest deleted' WHERE contract_uid = '".(int)$contract_uid->contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
					echo $query;echo "<br>";
					if (!doInsertSql($query,""))
						trigger_error ("Unable to update cancellations data for contract". (int)$contract_uid->contract_uid.", mysql db failure", E_USER_ERROR);
					}
				}
			else
				echo "No bookings to delete";
			$query="DELETE FROM #__jomres_guests WHERE guests_uid = '".(int)$guestUid."' AND property_uid = '".(int)$defaultProperty."'";
			echo $query;
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_GUEST',_JOMRES_MR_AUDIT_DELETE_GUEST,FALSE))) trigger_error (_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST, E_USER_ERROR);
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listguests"), $saveMessage );
			}
		else
			{
			
			echo jr_gettext('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST',_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST,FALSE);
			
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