<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j06002preview_email {
	function j06002preview_email()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->superPropertyManager)
			{
			echo "Error, only super property managers can preview emails";
			return;
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