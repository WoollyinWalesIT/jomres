<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06001dashboard_insertbooking_ajax 
	{
	function j06001dashboard_insertbooking_ajax()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$property_uid = getDefaultProperty();
		$insertSuccessful = false;
		
		jr_import( 'jomres_generic_booking_insert' );
		$bkg = new jomres_generic_booking_insert();
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($property_uid);
		
		$mrConfig = getPropertySpecificSettings( $property_uid );

		// Let`s handle some passed variables first
		$room_uid				= (int)jomresGetParam($_GET,'room_uid','0');
		$startDate 				= jomresGetParam($_GET,'start','');
		$endDate 				= jomresGetParam($_GET,'end','');
		$arrivalDate 			= date("Y/m/d", strtotime($startDate));
		$departureDate			= date("Y/m/d", strtotime($endDate));
		if ($mrConfig[ 'wholeday_booking' ] == '0')
			$lastDay			= date("Y/m/d", strtotime($endDate."-1 day"));
		else
			$lastDay			= $departureDate;
		$dates_array			= findDateRangeForDates($arrivalDate,$lastDay);
		$deposit_paid			= (int)jomresGetParam($_GET,'deposit_paid','0');
		$booked_in 				= (int)jomresGetParam($_GET,'booked_in','0');
		$booking_number			= set_booking_number();
		$firstname				= jomresGetParam($_GET,'firstname','');
		$surname				= jomresGetParam($_GET,'surname','');
		$contract_total			= (float)jomresGetParam($_GET,'contract_total','0');
		$contract_total_nett	= $current_property_details->get_nett_accommodation_price($contract_total, $property_uid);
		$tax					= $contract_total - $contract_total_nett;
		
		if( $deposit_paid == 2 )
			$deposit_paid = 0;
		if( $booked_in == 2 )
			$booked_in = 0;

		//Let`s check that we have a room_uid and the room can be booked, otherwise stop here
		if ($room_uid == 0)
			{
			$insertMessage="Error: Room uid not set. Exitting.";
			echo json_encode(array("insertStatus"=>0,"insertMessage"=>$insertMessage));
			exit;
			}

		$gor = genericOr($dates_array,'date',false);
		$query="SELECT contract_uid FROM #__jomres_room_bookings WHERE `property_uid` = '".$property_uid."' AND `room_uid`='".$room_uid."' AND  ".$gor."";
		$bookingsList = doSelectSql($query);
		if (count($bookingsList)>0)
			{
			$insertMessage="Error: Room already booked. Exitting.";
			echo json_encode(array("insertStatus"=>0,"insertMessage"=>$insertMessage));
			exit;
			}
		
		//OK, let`s move on and set the new booking details
		$bkg->booking_details['property_uid'] 				= $property_uid;
		$bkg->booking_details['arrivalDate'] 				= $arrivalDate;
		$bkg->booking_details['departureDate'] 				= $departureDate;
		$bkg->booking_details['requestedRoom'] 				= $room_uid."^0"; //it needs to have the ^tariff_uid too
		$bkg->booking_details['dateRangeString'] 			= implode(',',$dates_array);
		$bkg->booking_details['contract_total'] 			= $contract_total;
		$bkg->booking_details['tax'] 						= $tax;
		$bkg->booking_details['deposit_required'] 			= (float)jomresGetParam($_GET,'deposit_required','0');
		$bkg->booking_details['room_total'] 				= $contract_total_nett; //has to be without tax
		$bkg->booking_details['depositpaidsuccessfully'] 	= (bool)$deposit_paid;
		$bkg->booking_details['property_currencycode']		= jomresGetParam($_GET,'currencyCode','GBP');
		$bkg->booking_details['booking_number']				= $booking_number;
		$bkg->booking_details['booked_in'] 					= (bool)$booked_in;
		$bkg->booking_details['sendGuestEmail'] 			= true;
		$bkg->booking_details['sendHotelEmail'] 			= true;
		
		//Now let`s set the new guest details
		$bkg->guest_details['firstname']	 	= $firstname;
		$bkg->guest_details['surname']		 	= $surname;
		$bkg->guest_details['house']		 	= jomresGetParam($_GET,'house','');
		$bkg->guest_details['street']		 	= jomresGetParam($_GET,'street','');
		$bkg->guest_details['town']			 	= jomresGetParam($_GET,'town','');
		$bkg->guest_details['region']		 	= jomresGetParam($_GET,'region','');
		$bkg->guest_details['country']		 	= jomresGetParam($_GET,'guest_country','');
		$bkg->guest_details['postcode']	 		= jomresGetParam($_GET,'postcode','');
		$bkg->guest_details['tel_landline']		= jomresGetParam($_GET,'landline','');
		$bkg->guest_details['tel_mobile']	 	= jomresGetParam($_GET,'mobile','');
		$bkg->guest_details['email']		 	= jomresGetParam($_GET,'email','');

		//Finally let`s insert the new booking
		$insertSuccessful = $bkg->create_booking();
		
		//Dsiplay the new booking on the dashboard
		if ($insertSuccessful === true)
			{
			$contract_uid = (string)$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ]['contract_uid'];
			$booking_number = (string)$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ]['cartnumber'];
			
			$url=jomresUrl(JOMRES_SITEPAGE_URL.'&task=editBooking&contract_uid='.$contract_uid);
			$description=jr_gettext( '_JOMRES_BOOKING_NUMBER', _JOMRES_BOOKING_NUMBER,false ) . ': ' . $booking_number . '<br/>';
			$description.=jr_gettext( '_JOMRES_HFROM', _JOMRES_HFROM,false ).': '.outputDate($startDate) . '<br/>';
			$description.=jr_gettext( '_JOMRES_HTO', _JOMRES_HTO,false ).': '.outputDate($endDate);
			
			$from=date("Y-m-d", strtotime($startDate))."T12:00:00";
			if ($mrConfig[ 'wholeday_booking' ] == '0')
				$to=date("Y-m-d", strtotime($endDate . "-1 day") )."T10:00:00";
			else
				$to=date("Y-m-d", strtotime($endDate) )."T10:00:00";

			$insertMessage="Booking saved successfully";
			
			$img_pending     = "label";
			$img_arrivetoday = "label label-warning";
			$img_resident    = "label label-success";
			$img_departtoday = "label label-info";
			$img_stillhere   = "label label-purple";
			$img_late        = "label label-important";
			
			$today = date( "Y/m/d" );
			$date_elements = explode( "/", $today );
			$unixToday     = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			$date_elements = explode( "/", $arrivalDate );
			$unixArrival   = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			$date_elements = explode( "/", $departureDate );
			$unixDeparture = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			
			$imgToShow = $img_pending;
			if ( $unixArrival == $unixToday && $booked_in != 1 ) $imgToShow = $img_arrivetoday;
			if ( $unixDeparture == $unixToday && $booked_in == 1 ) $imgToShow = $img_departtoday;
			if ( $unixArrival < $unixToday && $booked_in != 1 ) $imgToShow = $img_late;
			if ( $unixDeparture > $unixToday && $booked_in == 1 ) $imgToShow = $img_resident;
			if ( $unixDeparture < $unixToday && $booked_in == 1 ) $imgToShow = $img_stillhere;
				
			//the guest is still here even if the departure date has passed, so let`s adjust the event size. If it overlaps with other booking, it will be clearly visible in the dashboard. Receptionists can then amend bookings.
			if ($imgToShow == $img_stillhere)
				{
				if ($mrConfig[ 'wholeday_booking' ] == '0')
					$to=date("Y-m-d", strtotime($today . "-1 day") )."T10:00:00";
				else
					$to=date("Y-m-d", strtotime($today) )."T10:00:00";
				}
			
			$new_contract=array("insertStatus"=>1,
								"insertMessage"=>$insertMessage,
								"id"=>$contract_uid, 
								"start" => $from, 
								"end" => $to,
								"title" => $firstname . ' ' . $surname, 
								"url"=>$url, 
								"resource"=>(string)$room_uid, 
								"className"=>$imgToShow, 
								"description"=>$description,
								"allDay"=>true
								);
			
			//clean the buffer from any other output (other echos, for example if emails sending failed) and echo just the json
			ob_clean();
			echo json_encode($new_contract);
			exit;
			}
		else
			{
			$insertMessage = $insertSuccessful;
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