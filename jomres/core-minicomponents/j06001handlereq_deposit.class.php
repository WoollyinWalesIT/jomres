<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
class j06001handlereq_deposit
	{
	/**
	#
	 * Constructor: Let's gather the data we want.
	#
	 */	
	function j06001handlereq_deposit()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager)
			return;
		$property_uid = get_showtime('property_uid');
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$inputName						= "overdeposit";

		// A la handlereq, we'll create a new jomres booking object
		$bkg 							= $MiniComponents->triggerEvent('05000'); // Create the new booking object
		
		// Now we can do stuff to the booking parameters. 
		$deposit 		= jomresGetParam( $_GET, $inputName, "",'string' );
		if ($deposit != "")
			{
			if ( !isset($tmpBookingHandler->tmpbooking["override_contract_deposit"]) )
				$tmpBookingHandler->addNewBookingField("override_contract_deposit");
			$tmpBookingHandler->updateBookingField("override_contract_deposit",$deposit);
			$tmpBookingHandler->saveBookingData();
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#	
	 */		
	function getRetVals()
		{
		return $this->returnValue;
		}
	}	
?>