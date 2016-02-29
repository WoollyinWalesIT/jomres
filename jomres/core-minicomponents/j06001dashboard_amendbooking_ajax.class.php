<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06001dashboard_amendbooking_ajax 
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch){$this->template_touchable=false; return;}
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$property_uid = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings( $property_uid );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) 
			return;

		$amendSuccessful = false;
		
		jr_import( 'jomres_generic_booking_amend' );
		$bkg = new jomres_generic_booking_amend();
		
		$event_id		= jomresGetParam($_GET,'event_id','');
		$new_room_uid	= (int)jomresGetParam($_GET,'new_resource_id',0);
		$delta			= (int)jomresGetParam($_GET,'delta',0);
		
		//check if we have an event id, otherwise stop here
		if ( $event_id == '' )
			{
			$insertMessage="Error: Event id not set. Exitting.";
			echo json_encode(array("insertStatus"=>0,"insertMessage"=>$insertMessage));
			exit;
			}
		
		$bang = explode("_",$event_id);
		
		//check if we can get the contract uid and room uid from the event id
		if (count($bang) > 0)
			{
			$contract_uid = (int)$bang[0];
			$old_room_uid = (int)$bang[1];
			}
		else
			{
			$insertMessage="Error: Could not get contract uid and room uid from event_id. Exitting.";
			echo json_encode(array("insertStatus"=>0,"insertMessage"=>$insertMessage));
			exit;
			}
		
		//OK, let`s move on and set the booking details
		$bkg->property_uid 	= $property_uid;
		$bkg->contract_uid 	= $contract_uid;
		$bkg->room_uid 		= $old_room_uid;
		$bkg->new_room_uid 	= $new_room_uid;

		$bkg->note 			= 'Booking moved via drag drop to room uid '.$bkg->new_room_uid.' by '.$thisJRUser->username.'';

		$query = "SELECT `room_bookings_uid`,`date` FROM #__jomres_room_bookings WHERE `room_uid` = ".$old_room_uid." AND contract_uid = ".$contract_uid." ";
		$result = doSelectSql($query);

		$booking_dates = array();

		if ( count($result) > 0 )
			{
			foreach ($result as $r)
				{
				$d = strtotime ($r->date.' +'.$delta.' day');
				$new_date = date("Y/m/d",$d);
				$booking_dates[]= $new_date;
				}
			}

		$bkg->arrival 		= $booking_dates[0];
		if ((int)$mrConfig[ 'wholeday_booking' ] == 1)
			$bkg->departure 	= $booking_dates[ count($booking_dates) ];
		else
			$bkg->departure 	= $booking_dates[ count($booking_dates)-1 ];
		
 		//Finally let`s amend the booking
		$amendSuccessful = $bkg->amend_booking();
		
		$new_id = $contract_uid.'_'.$new_room_uid;

		if ($amendSuccessful === true)
			{
			$insertMessage = "Room changed successfully.";
			echo json_encode(array("insertStatus"=>1,"insertMessage"=>$insertMessage,"id"=>$new_id,));
			}
		else
			{
			$insertMessage = $amendSuccessful;
			echo json_encode(array("insertStatus"=>0,"insertMessage"=>$insertMessage));
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
