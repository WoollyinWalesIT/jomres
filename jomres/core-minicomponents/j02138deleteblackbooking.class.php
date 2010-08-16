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
 * Deletes a black booking
 #
* @package Jomres
#
 */
class j02138deleteblackbooking {
	/**
	#
	 * Constructor: Deletes a black booking
	#
	 */
	function j02138deleteblackbooking()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$uid=jomresGetParam( $_REQUEST, 'contract_uid', 0 );
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE',_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE,FALSE));
		if ($uid != 0)
			{
			$query="DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,""))
				trigger_error ("Unable to delete from room bookings table, mysql db failure", E_USER_ERROR);
			$query="DELETE FROM #__jomres_contracts WHERE contract_uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE',_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE,FALSE)))
				trigger_error ("Unable to delete from contracts table, mysql db failure", E_USER_ERROR);
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listBlackBookings"),jr_gettext('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE',_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE,FALSE) );
			}
		else
			trigger_error ("Error: Uid for black booking not found (hack attempt?)", E_USER_ERROR);
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