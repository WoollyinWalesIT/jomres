<?php
/**
#
 * Handles the ajax calls from the booking form
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * Receives 2 calls from the booking form, processes them and returns stuff
 * Call 1: Notes the changed details. Sanitises and changes the booking's parameters to reflect the change
 * Call 2: Rebuilds the room list  (or simply outputs "We have bookings" in the case of SRPs) and returns the room list. This is parsed by the booking form as plain text in the room details field. Needs to be plain text as the overlib data returned will update javascript
 * Call 3: Calculates new room prices and constructs any warnings. Sets background colours of the messages field and returns the calculated prices, the messages when are in turn parsed by javascript in the booking form and displayed
#
 */
header('Content-type: text/html; utf-8');

global $mrConfig,$jomressession,$property_uid;
global $tmpBookingHandler;
$bookingDeets=gettempBookingdata();
$pid=$bookingDeets['property_uid'];

$mrConfig=getPropertySpecificSettings($pid);
//$tariffClass=$mrConfig['tariffClasses'];
$showDeposit=$mrConfig['chargeDepositYesNo'];
$tariffChargesStoredWeeklyYesNo=$mrConfig['tariffChargesStoredWeeklyYesNo'];
$showExtras=$mrConfig['showExtras'];
$euroTaxYesNo=$mrConfig['euroTaxYesNo'];
$roomTaxYesNo=$mrConfig['roomTaxYesNo'];
$fixedPeriodBookings=$mrConfig['fixedPeriodBookings'];

$messagesClass='; document.getElementById("messages").className="messages";';
$errorClass='; document.getElementById("messages").className="ERROR";';
$oktobookClass='; document.getElementById("messages").className="oktobook";';

$field= jomresGetParam( $_GET, 'field', '','string' );
$field=getEscaped( $field );
$value= jomresGetParam( $_GET, 'value', '','string' );
$value= getEscaped( $value );
$typeid= jomresGetParam( $_GET, 'typeid', '','string' );
$typeid= getEscaped( $typeid );
$lastfield= jomresGetParam( $_GET, 'lastfield', '','string' );
$lastfield= getEscaped( $lastfield );
$retText="";

$doNotRebuildRoomsListOnTheseFieldsArray=array("addressstring","existingCustomers","firstname","surname","house","street","town","region","country","postcode","tel_landline","tel_mobile","email");
$MiniComponents = new mcHandler();
$bkg =$MiniComponents->triggerEvent('05000'); // Create the new booking object
$isSingleRoomProperty=$bkg->getSingleRoomPropertyStatus();
$bkg->rebuildIgnoreList=$doNotRebuildRoomsListOnTheseFieldsArray;
$bkg->currentField=$field;
ob_start();
switch ($field)
	{
	case "addressstring":
		$ajrq="ajrq:::addressstring";
		$addressString=explode("~",$value);
		$firstname=$addressString[0];
		$surname=$addressString[1];
		$house=$addressString[2];
		$street=$addressString[3];
		$town=$addressString[4];
		$region=$addressString[5];
		$postcode=$addressString[6];
		$country=$addressString[7];
		$landline=$addressString[8];
		$mobile=$addressString[9];
		$email=$addressString[10];

		$firstname=$bkg->sanitiseInput("string",$firstname);
		$bkg->setGuest_firstname($firstname);
		$surname=$bkg->sanitiseInput("string",$surname);
		$bkg->setGuest_surname($surname);
		$house=$bkg->sanitiseInput("string",$house);
		$bkg->setGuest_house($house);
		$street=$bkg->sanitiseInput("string",$street);
		$bkg->setGuest_street($street);
		$town=$bkg->sanitiseInput("string",$town);
		$bkg->setGuest_town($town);
		$region=$bkg->sanitiseInput("string",$region);
		$bkg->setGuest_region($region);
		$postcode=$bkg->sanitiseInput("string",$postcode);
		$bkg->setGuest_postcode($postcode);
		$country=$bkg->sanitiseInput("string",$country);
		$bkg->setGuest_country($country);
		$landline=$bkg->sanitiseInput("string",$landline);
		$bkg->setGuest_tel_landline($landline);
		$mobile=$bkg->sanitiseInput("string",$mobile);
		$bkg->setGuest_tel_mobile($mobile);
		$email=$bkg->sanitiseInput("string",$email);
		$bkg->setGuest_email($email);
	break;
	case "guesttype":
		$ajrq="ajrq:::guesttype";
		$bkg->setOkToBook(false);
		$typeid=$bkg->sanitiseInput("int",$typeid);
		$value=$bkg->sanitiseInput("int",$value);
		if (isset($typeid) && isset($value) )
			{
			$bkg->setGuestVariantDetails($typeid,$value);
			$bkg->resetRequestedRoom();
			}
	break;
	case "arrivalDate":
		$ajrq="ajrq:::arrivalDate";
		$bkg->setOkToBook(false);
		$value=$bkg->JSCalConvertInputDates($value);
		$value=$bkg->sanitiseInput("date",$value);
		if ( isset($value) )
			{
			$bkg->setArrivalDate($value);
			if ($fixedPeriodBookings != "1" )
				$bkg->setDepartureDateToNextDay($value);
			$bkg->JSCalmakeInputDates($bkg->getDepartureDate() );
			}
		$bkg->resetRequestedRoom();
	break;
	case "arrival_period":
		$ajrq="ajrq:::arrival_period";
		$bkg->setOkToBook(false);
		$value=$bkg->JSCalConvertInputDates($value);
		$value=$bkg->sanitiseInput("date",$value);
		if ( isset($value) )
			{
			$bkg->setArrivalDate($value);
			$departurePeriod=$bkg->getStayDays();
			$departureDate=$bkg->getFixedPeriodDepartureDate($departurePeriod);
			$bkg->setDepartureDate($departureDate);
			$bkg->JSCalmakeInputDates($bkg->getDepartureDate() );
			}
		$bkg->resetRequestedRoom();
	break;
	case "departureDate":
		$ajrq="ajrq:::departureDate";
		$bkg->setOkToBook(false);
		$value=$bkg->JSCalConvertInputDates($value);
		$value=$bkg->sanitiseInput("date",$value);
		if (isset($value) )
			{
			$bkg->setDepartureDate($value);
			}
		$bkg->resetRequestedRoom();
	break;
	case "departure_period":
		$ajrq="ajrq:::departure_period";
		$bkg->setOkToBook(false);
		$value=$bkg->sanitiseInput("int",$value);
		if (isset($value) )
			{
			$departureDate=$bkg->getFixedPeriodDepartureDate($value);
			$bkg->setDepartureDate($departureDate);
			}
		$bkg->resetRequestedRoom();
	break;
	case "smoking":
		$ajrq="ajrq:::smoking";
		$bkg->setOkToBook(false);
		$value=$bkg->sanitiseInput("int",$value);
		$bkg->setSmoking($value);
		$bkg->resetRequestedRoom();
	break;
	case "extras":
		$ajrq="ajrq:::extras";
		$bkg->setOkToBook(false);
		$value=$bkg->sanitiseInput("int",$value);
		$bkg->writeToLogfile("Starting extra input");
		if ( $bkg->extraAlreadySelected($value) )
			{
			$retText="Extra removed from booking";
			$bkg->removeExtra($value);
			echo 'jQuery(theId).attr("checked", false);';
			}
		else
			{
			$retText="Extra added to booking";
			$bkg->setExtras($value);
			echo 'jQuery(theId).attr("checked", true);';
			}
	break;
	case "existingCustomers":
		$ajrq="ajrq:::existingCustomers";
		$value=$bkg->sanitiseInput("int",$value);
		if ($value !="0")
			{
			$result=$bkg->getExistingCustomerData($value);
			if ($result)
				{
				$retText="Existing customer details selected";
				updateBookingFormAddressDetails($bkg);
				}
			else
				{
				$retText="User not authorised for this data";
				$messagesClass=$errorClass;
				}
			}
		else
			{
			$retText="Existing customer details reset";
			$bkg->resetExistingCustomer();
			echo '; document.ajaxform.firstname.value=""';
			echo '; document.ajaxform.surname.value=""';
			echo '; document.ajaxform.house.value=""';
			echo '; document.ajaxform.street.value=""';
			echo '; document.ajaxform.town.value=""';
			echo '; document.ajaxform.region.value=""';
			echo '; document.ajaxform.postcode.value=""';
			echo '; document.ajaxform.tel_landline.value=""';
			echo '; document.ajaxform.tel_mobile.value=""';
			echo '; document.ajaxform.eemail.value=""';
			}
	break;
	case 'requestedRoom':
		$ajrq=" -- Selected a room -- ";
		$bkg->setOkToBook(false);
		$value=$bkg->sanitiseInput("string",$value);
		$bkg->updateSelectedRoom($value);
	break;
	case 'show_log':
		$ajrq="show_log";
		
		$bkg->setErrorLog("handlereq::Generating billing data" );
		//
		$arrivalDate=$bkg->getArrivalDate();
		$departureDate=$bkg->getDepartureDate();
		if ($bkg->checkArrivalDate($arrivalDate) && $bkg->checkDepartureDate($departureDate) )
			{
			$bkg->setOkToBook(false);
			$bkg->writeToLogfile("Lastfield ".$lastfield);
			$bkg->setErrorLog("Lastfield ".$lastfield);
			$currfmt = new jomres_currency_format();
			if (!in_array($lastfield,$doNotRebuildRoomsListOnTheseFieldsArray) )
				{
				$bkg->resetTotals();
				$bkg->setErrorLog("handlereq:: Dates passed");
				$bkg->generateBilling();
				$bkg->setErrorLog("handlereq::Show deposit: ".$showDeposit );
				if ($bkg->getGuestVariantCount() > 0)
					echo '; document.getElementById("totalinparty").innerHTML = "'.$bkg->getTotalInParty().'" ; fadeIn("totalinparty",1000); ';
				echo '; document.getElementById("staydays").innerHTML = "'.$bkg->getStayDays().'" ; fadeIn("staydays",1000); ';
				if ($tariffChargesStoredWeeklyYesNo=="0")
					echo '; document.getElementById("roompernight").innerHTML = "'.$bkg->getCurrencySymbol().$currfmt->get_formatted($bkg->getRoompernight()).'" ; fadeIn("roompernight",1000);';
				echo '; document.getElementById("roomtotal").innerHTML = "'.$bkg->getCurrencySymbol().$currfmt->get_formatted($bkg->getRoomtotal()).'" ; fadeIn("roomtotal",1000);';
				if ($showExtras=="1")
					echo '; document.getElementById("extrastotal").innerHTML = "'.$bkg->getCurrencySymbol().$currfmt->get_formatted($bkg->getExtrasTotal()).'" ; fadeIn("extrastotal",1000);';
				if ($euroTaxYesNo =="1" || $roomTaxYesNo =="1" )
					echo '; document.getElementById("taxtotal").innerHTML = "'.$bkg->getCurrencySymbol().$currfmt->get_formatted($bkg->getTax()).'" ; fadeIn("taxtotal",1000);';
				echo '; document.getElementById("grandtotal").innerHTML = "'.$bkg->getCurrencySymbol().$currfmt->get_formatted($bkg->getGrandTotal()).'" ; fadeIn("grandtotal",1000);';
				if ($showDeposit=="1")
					echo '; document.getElementById("deposit").innerHTML = "'.$bkg->getCurrencySymbol().$currfmt->get_formatted($bkg->getDeposit()).'" ; fadeIn("deposit",1000);';
				if ($bkg->singlePersonSupplimentCalculated)
					echo '; document.getElementById("single_suppliment").innerHTML = "'.$bkg->getCurrencySymbol().$currfmt->get_formatted($bkg->getSinglePersonSuppliment()).'" ; fadeIn("deposit",1000);';
				}
			else
				$bkg->setErrorLog("handlereq:: Field ".$lastfield." exempt from pricing rebuild");
			}
		else
			$bkg->setErrorLog("handlereq:: bkg check of arrival or departure date failed");
			$bkg->monitorBookingStatus();
		if ($bkg->resetPricingOutput)
			$bkg->outputZeroPrices();
		if ( $bkg->getOkToBook() )
			{
			echo $oktobookClass;
			echo '; document.getElementById("messages").innerHTML = "'.$bkg->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_REVIEWBOOKING',_JOMRES_FRONT_MR_REVIEWBOOKING,false,false)).'"; checkSelectRoomMessage();';
			echo "; enableSubmitButton(document.ajaxform.confirmbooking); "; // Added timeout because if a user clicks on this button too soon they'll get taken to the review booking before oktobook has been saved, therefore getting themselves redirected back to here
			}
		else
			{
			$messagesClass=$errorClass;
			echo $messagesClass;
			echo '; document.getElementById("messages").innerHTML = "'.$bkg->sanitiseOutput($bkg->monitorGetFirstMessage() ).'"; fadeIn("messages",0);checkSelectRoomMessage();  ';
			echo '; disableSubmitButton(document.ajaxform.confirmbooking); ';
			}
		if ($bkg->getErrorLog()!="" && $bkg->errorChecking() )
			{
			$errorLog=$bkg->getErrorLog();
			//echo '; document.getElementById("errorLog").innerHTML = "'.$bkg->sanitiseOutput($errorLog).'"';
			}
	break;
	case "heartbeat":
		echo "&nbsp;";
	break;
	default:
		$ajrq="ajrq:::Invalid data sent";
		$retText="Invalid data sent";
		$messagesClass=$errorClass;
	break;
	}


if (!in_array($field,$doNotRebuildRoomsListOnTheseFieldsArray) && isset($field) && !empty($field) && $field != "show_log" && $field != "extras" && $field != "heartbeat")
	{
	bookingformlistRooms($isSingleRoomProperty,$bkg);
	}

	
$bkg->setErrorLogFirst($ajrq);
$bkg->storeBookingDetails();

ob_end_flush();

// End run

function updateBookingFormAddressDetails(&$bkg)
	{
	global $tmpBookingHandler;
	$bkg->storeBookingDetails();
	$result=$tmpBookingHandler->getGuestData();
	echo '; document.ajaxform.firstname.value="'.$bkg->sanitiseOutput($result['firstname']).'"';
	echo '; document.ajaxform.surname.value="'.$bkg->sanitiseOutput($result['surname']).'"';
	echo '; document.ajaxform.house.value="'.$bkg->sanitiseOutput($result['house']).'"';
	echo '; document.ajaxform.street.value="'.$bkg->sanitiseOutput($result['street']).'"';
	echo '; document.ajaxform.town.value="'.$bkg->sanitiseOutput($result['town']).'"';
	echo '; document.ajaxform.region.value="'.$bkg->sanitiseOutput($result['region']).'"';
	echo '; document.ajaxform.country.value="'.$bkg->sanitiseOutput($result['country']).'"';
	echo '; document.ajaxform.postcode.value="'.$bkg->sanitiseOutput($result['postcode']).'"';
	echo '; document.ajaxform.tel_landline.value="'.$bkg->sanitiseOutput($result['tel_landline']).'"';
	echo '; document.ajaxform.tel_mobile.value="'.$bkg->sanitiseOutput($result['tel_mobile']).'"';
	if ( $bkg->checkEmail($result['email']) )
		echo '; document.ajaxform.eemail.value="'.$bkg->sanitiseOutput($result['email']).'"';
	}
	
function bookingformlistRooms($isSingleRoomProperty,&$bkg)
	{
	//global $bkg;
	$bkg->writeToLogfile("Listing rooms");
	$arrivalDate=$bkg->getArrivalDate();
	$departureDate=$bkg->getDepartureDate();
	//if ($bkg->checkArrivalDate($arrivalDate) && $bkg->checkDepartureDate($departureDate) )
	//	{
		if ($isSingleRoomProperty)
			$bkg->requestedRoom=array();
		//$bkg->setErrorLog("handlereq-bookingformlistRooms:: Building rooms list");
		$bkg->setStayDays();
		$bkg->setDateRangeString();
		$roomAndTariffArray=array();
		$freeRoomsArray=array();
		$dateRangeIncludesWeekend=$bkg->dateRangeIncludesWeekends();
		$freeRoomsArray=$bkg->getAllRoomUidsForProperty();
		if (count($freeRoomsArray) > 0 )
			$freeRoomsArray=$bkg->findFreeRoomsInDateRange($freeRoomsArray);
		$bkg->setErrorLog("handlereq-bookingformlistRooms:: Number of free rooms ".count($freeRoomsArray));
		if (count($freeRoomsArray) > 0 ) // This must be before the rest of these functions
			$freeRoomsArray=$bkg->checkPeopleNumbers($freeRoomsArray);
		$bkg->setErrorLog("handlereq-bookingformlistRooms:: Number of free rooms ".count($freeRoomsArray));
		if (count($freeRoomsArray) > 0 )
			$freeRoomsArray=$bkg->checkSmokingOption($freeRoomsArray);
		$bkg->setErrorLog("handlereq-bookingformlistRooms:: Number of free rooms ".count($freeRoomsArray));
		// Added to enable the room to remain in the selected rooms list if it's still available after a particular (date, guest numbers etc) has been changed
		$selectedRoomUids=array();
		foreach ($bkg->requestedRoom as $rt)
			{
			$rtArray=explode("^",$rt);
			$r[$rtArray[0]]=$rt;
			$selectedRoomUids[]=$r;
			}
		foreach ($selectedRoomUids as $room_uid_holder)
			{
			foreach ($room_uid_holder as $key=>$room_uid)
				{
				//var_dump($freeRoomsArray);echo "<br>";var_dump($key);echo "<br>";
				if (is_array($freeRoomsArray) )
					{
					if (!in_array($key,$freeRoomsArray))
						$bkg->removeFromSelectedRooms($room_uid);
					}
				}
			}
		// End 2.6 addition for room updating
		$bkg->setErrorLog("handlereq-bookingformlistRooms:: Number of free rooms ".count($freeRoomsArray));
		if (count($freeRoomsArray) > 0 )
			$freeRoomsArray=$bkg->removeRoomuidsAlreadyInThisBooking($freeRoomsArray);
		$bkg->setErrorLog("handlereq-bookingformlistRooms:: Number of free rooms ".count($freeRoomsArray));
		if (count($freeRoomsArray) > 0 )
			$roomAndTariffArray=$bkg->getTariffsForRoomUids($freeRoomsArray);
		$bkg->setErrorLog("handlereq-bookingformlistRooms:: Room and Tariff array count = ".count($roomAndTariffArray));
		$output="";
		//echo '; document.getElementById("totalinparty").innerHTML = "'.$bkg->getTotalInParty().'" ; fadeIn("totalinparty",1000); ';

		if (!$isSingleRoomProperty)
			{
			$output.='<div class="roomslist_availabletext">'.jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS',_JOMRES_AJAXFORM_SELECTEDROOMS,false,false).'</div>';
			//echo "<br>";
			if ($bkg->numberOfCurrentlySelectedRooms()>0 )
				$output.=$bkg->listCurrentlySelectedRooms();
			else
				$output.='<div class="roomslist_noroomsselected">'.jr_gettext('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET',_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET,false,false).'</div>';

			$output.="~";
			$output.='<div class="roomslist_availabletext">'.jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS',_JOMRES_AJAXFORM_AVAILABLEROOMS,false,false).'</div>';
			//$output.="<br>";

			//$bkg->writeToLogfile($output);
			echo $output;
			}
		else
			{
			$output.='<div class="selectedRooms"></div>';
			$output.='<div class="roomslist_availabletext"></div>';
			}
		$output=$bkg->generateRoomsList($roomAndTariffArray);

		echo $output;
	//	}
	//	else
	//		$bkg->writeToLogfile("handlereq-bookingformlistRooms:: bkg check of arrival or departure date failed");
	}

?>