<?php
/**
#
 * Mini-component core file: Deletes black bookings
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$uid=jomresGetParam( $_REQUEST, 'contract_uid', 0 );
		if ($uid != 0)
			{
			$query="DELETE FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,""))
				trigger_error ("Unable to delete from room bookings table, mysql db failure", E_USER_ERROR);
			$query="DELETE FROM #__jomres_contracts WHERE contract_uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE',_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE,FALSE)))
				trigger_error ("Unable to delete from contracts table, mysql db failure", E_USER_ERROR);
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listBlackBookings&Itemid=".$Itemid),jr_gettext('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE',_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE,FALSE) );
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