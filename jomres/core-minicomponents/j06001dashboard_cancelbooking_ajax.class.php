<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06001dashboard_cancelbooking_ajax 
	{
	function j06001dashboard_cancelbooking_ajax()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$property_uid = getDefaultProperty();
		$cancellationSuccessful = false;
		
		jr_import( 'jomres_generic_booking_cancel' );
		$bkg = new jomres_generic_booking_cancel();

		$contract_uid = (int)jomresGetParam($_GET,'contract_uid','0');

		//Let`s check that we have a contract_uid, otherwise stop here
		if ($contract_uid == 0)
			{
			$insertMessage="Error: Contract uid not set. Exitting.";
			echo json_encode(array("insertStatus"=>0,"insertMessage"=>$insertMessage));
			exit;
			}
		
		//OK, let`s move on and set the booking details
		$bkg->property_uid 		= $property_uid;
		$bkg->contract_uid 		= $contract_uid;
		$bkg->reason	 		= "";
		$bkg->note				= jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', _JOMRES_COM_MR_EB_GUEST_CANCELLED, false );

		//Finally let`s cancel the booking
		$cancellationSuccessful = $bkg->cancel_booking();

		if ($cancellationSuccessful === true)
			{
			$insertMessage = "Booking cancelled.";
			echo json_encode(array("insertStatus"=>1,"insertMessage"=>$insertMessage));
			exit;
			}
		else
			{
			$insertMessage = $cancellationSuccessful;
			echo json_encode(array("insertStatus"=>0,"insertMessage"=>$insertMessage));
			exit;
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>