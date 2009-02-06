<?php
/**
#
 * Mini-component core file:
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

class j03200jrportal {
	function j03200jrportal($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$thisJRUser;
		if ($MiniComponents->eventFileExistsCheck('07005') )
			$propertys_uids=$MiniComponents->triggerEvent('07005' ); // Optional minicomponent trigger, eg for system cleanups or other pre-booking activity

		$booking 				= new jrportal_booking();
		$cartnumber				= $componentArgs['cartnumber'];
		$guests_uid				= $componentArgs['guests_uid'];
		$property_uid			= $componentArgs['property_uid'];
		$contract_total			= $componentArgs['contract_total'];
		$contract_uid			= $componentArgs['contract_uid'];
		$currency_code			= $mrConfig['currencyCode'];

		$booking->property_uid			= $property_uid;
		$booking->guest_id				= $guests_uid;
		$booking->affiliate_id			= '';
		$booking->invoice_id			= 0;
		$booking->booking_total			= $contract_total;
		$booking->contract_id			= $contract_uid;
		$booking->tag					= $cartnumber;
		$booking->currency_code			= $currency_code;
		$booking->created				= date("Y-m-d H-i-s");

		$tr= new jrportal_transaction();
		$booking->commitNewBooking($tr);

		$userFunctions = new jrportal_user_functions();
		$usersArray=$userFunctions->getManagerIdsForProperty($property_uid);
		$userObjsArray=array();
		if (count($usersArray) >0 && $booking->id > 0 )
			{
			foreach ($usersArray as $u)
				{
				$jos_id = $u['manager_id'];
				$userDeets = $userFunctions->getJoomlaUserDetailsForJoomlaId($jos_id);
				$manager_id = $userFunctions->getManagerIdForJosId($jos_id);
				$user = new jrportal_user();
				$user->manager_uid			= $manager_id;
				$user->jos_id				= $jos_id;
				$user->portal_booking_id	= $booking->id;
				$user->username				= $userDeets['username'];
				$user->email				= $userDeets['email'];
				$user->commitNewUser($tr);

				$userObjsArray[]=$user;
				}
			}

		$result=$tr->commit($tr);
		if ($MiniComponents->eventFileExistsCheck('07010') )
			{
			$property = new jrportal_property_functions();
			$propertyDeets=$property->getPropertyDetails(array($property_uid) );
			$p=$propertyDeets[$property_uid];
			$propertys_uids=$MiniComponents->triggerEvent('07010',array('bookingObj'=>$booking,'userObjsArray'=>$userObjsArray,'property_name'=>$p['property_name']) ); // Allows us to run post insertion functionality for importing into foreign systems
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>