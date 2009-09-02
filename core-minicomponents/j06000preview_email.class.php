<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
if (!defined('JPATH_BASE'))
	defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
else
	{
	if (file_exists(JPATH_BASE .'/includes/defines.php') )
		defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );
	else
		defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
	}
// ################################################################


class j06000preview_email {
	function j06000preview_email()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$componentArgs=array();
		$componentArgs['cartnumber']=$cartnumber;
		$componentArgs['tempBookingDataList']=$tempBookingDataList;
		$componentArgs['guestDetails']=$guestDetails;
		$componentArgs['guests_uid']=$guests_uid;
		$componentArgs['property_uid']=$property_uid;
		$componentArgs['arrivalDate']=$arrivalDate;
		$componentArgs['departureDate']=$departureDate;
		$componentArgs['contract_total']=$contract_total;
		$componentArgs['extrasValue']=$extrasValue;
		$componentArgs['room_total']=$room_total;
		$componentArgs['rates_uids']=$rates_uids;
		$componentArgs['requestedRoom']=$roomsRequested;
		$componentArgs['contract_uid']=$contract_uid;
		$componentArgs['specialReqs']=$specialReqs;
		$componentArgs['extras']=$extras;
		$componentArgs['deposit_required']=$deposit_required;
	
		$componentArgs['email_when_done']=false;
	
		//$MiniComponents->triggerEvent('03100',$componentArgs); // Generate hotel confirmation email
		$MiniComponents->triggerEvent('03110',$componentArgs); // Generate guest confirmation email
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>