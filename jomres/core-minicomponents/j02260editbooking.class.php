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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Constructs the javascript tab booking details page
 #
* @package Jomres
#
 */
class j02260editbooking {
	/**
	#
	 * Constructor: Constructs the javascript tab booking details page
	#
	 */
	function j02260editbooking()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$defaultProperty=getDefaultProperty();
		
		$contract_uid	=	jomresGetParam( $_REQUEST, 'contract_uid', 0 );
		if ($contract_uid == 0)
			return;
		$query="SELECT * FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
		$bookingData  = doSelectSql($query);
		foreach($bookingData as $booking)
			{
			$guest_uid=$booking->guest_uid;
			$contract_uid=$booking->contract_uid;
			$bookersUsername=$booking->username;
			}
		$query="SELECT * FROM #__jomres_extraServices WHERE contract_uid = '".(int)$contract_uid."'";
		$extraBillingData  = doSelectSql($query);
		$query="SELECT * FROM #__jomres_guests WHERE guests_uid = '".(int)$guest_uid."'";
		$guestData  = doSelectSql($query);
		$query="SELECT * FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$contract_uid."'";
		$roomBookingData  = doSelectSql($query);
		$room_uid=array();
		$roomInfo=array();
		$room_classes_uid=array();
		$room_features_uids=array();
		foreach($roomBookingData as $roomBooking)
			{$room_uid[]=$roomBooking->room_uid;}
		if (count($room_uid)>1)
			{
			$room_uid=array_unique($room_uid);
			sort($room_uid);
			}
		$room_uidOr=genericOr($room_uid,'room_uid');
		$query="SELECT * FROM #__jomres_rooms WHERE $room_uidOr";
		$roomInfo = doSelectSql($query);
		$rFeatures ="";
		foreach($roomInfo as $room)
			{
			$room_classes_uid[]=$room->room_classes_uid;
			$room_features_uids=$room->room_features_uid;
			if (!empty($room->room_features_uid) )
				{
				$featuresArray=explode(",",$room->room_features_uid);
				if (count($featuresArray)>0)
					{
					$room_features_uidOr=genericOr($featuresArray,'room_features_uid');
					$query= "SELECT * FROM #__jomres_room_features WHERE $room_features_uidOr";
					$rFeatures = doSelectSql($query);
					$numberOfRoomFeatures=count($rFeatures);
					}
				}
			}

		$room_classes_uidOr=genericOr($room_classes_uid,'room_classes_uid');
		$query="SELECT * FROM #__jomres_room_classes WHERE  $room_classes_uidOr";
		$rClass  = doSelectSql($query);

		echo "<br>";
		$this->editBooking_html($contract_uid,$bookingData,$extraBillingData,$guestData,$roomBookingData,$roomInfo,$rClass,$rFeatures,$bookersUsername );
		}

		function editBooking_html($contract_uid,$bookingData,$extraBillingData,$guestData,$roomBookingData,$roomInfo,$roomClass,$roomFeatures,$bookersUsername)
			{
			$MiniComponents =jomres_getSingleton('mcHandler');
			$mrConfig=getPropertySpecificSettings();
			$popup-get_showtime('popup');
			
			$thisJRUser=jomres_getSingleton('jr_user');
			$defaultProperty=getDefaultProperty();
			if ($defaultProperty=="0")
				$defaultProperty="%";
			//var_dump($guestData);
			$guest_firstname="N/A";
			$guest_surname="N/A";
			$guest_uid="N/A";
			$guest_mos_userid="N/A";
			$guest_house="N/A";
			$guest_street="N/A";
			$guest_town="N/A";
			$guest_region="N/A";
			$guest_country="N/A";
			$guest_postcode="N/A";
			$guest_tel_landline="N/A";
			$guest_tel_mobile="N/A";
			$guest_tel_fax="N/A";
			$guest_email="N/A";
			$guest_preferences="N/A";

			foreach($guestData as $guest)
				{
				$guest_firstname=$guest->firstname;
				$guest_surname=$guest->surname;
				$guest_uid=$guest->guests_uid;
				$guest_mos_userid= $guest->mos_userid;
				$guest_house=$guest->house;
				$guest_street=$guest->street;
				$guest_town = $guest->town;
				$guest_region = $guest->county;
				$guest_country = $guest->country;
				$guest_postcode= $guest->postcode;
				$guest_tel_landline = $guest->tel_landline;
				$guest_tel_mobile = $guest->tel_mobile;
				$guest_tel_fax = $guest->tel_fax;
				$guest_email = $guest->email;
				$guest_preferences= $guest->preferences;
				$guest_car_regno = $guest->car_regno;
				$guest_ccard_no = $guest->ccard_no;
				$guest_ccard_issued= $guest->ccard_issued;
				$guest_ccard_expiry= $guest->ccard_expiry;
				$guest_ccard_iss_no = $guest->ccard_iss_no;
				$guest_ccard_name = $guest->ccard_name;
				}

			foreach($bookingData as $booking)
				{
				$booking_tag=$booking->tag;
				$booking_contract_uid=$booking->contract_uid;
				$booking_arrival=$booking->arrival;
				$booking_departure=$booking->departure;
				$booking_rates_uid=$booking->rates_uid;
				$booking_rate_rules=$booking->rate_rules;
				$rooms_tariffs=$booking->rooms_tariffs;
				$booking_deposit_paid=$booking->deposit_paid;
				$booking_contract_total=$booking->contract_total;
				$booking_deposit_required=$booking->deposit_required;
				$booking_deposit_required = str_replace(",", "", $booking_deposit_required);

				$booking_deposit_ref=$booking->deposit_ref;
				$booking_payment_ref=$booking->payment_ref;
				$booking_special_reqs=stripslashes($booking->special_reqs);
				//$booking_notes=$booking->notes;
				$booking_newsletters=$booking->newsletters;
				$booking_currency=$booking->currency;
				$booking_date_range_string=$booking->date_range_string;
				//$booking_cot_suppliment=$booking->cot_suppliment;
				$single_person_suppliment=$booking->single_person_suppliment;
				$extraOptionsList=$booking->extras;
				$extrasquantities=unserialize($booking->extrasquantities);
				$extrasOptionsValue=$booking->extrasvalue;
				$tax=$booking->tax;
				$bookedin=$booking->booked_in;
				$variances=$booking->rate_rules;
				}

			$tariffsInfo=array();
			$room_and_tariff_info = explode(",",$rooms_tariffs);
			foreach ($room_and_tariff_info as $e)
				{
				$rt=explode("^",$e);
				$room=$rt[0];
				$tariff=$rt[1];
				$tariff_title=$query="SELECT rate_title FROM #__jomres_rates WHERE rates_uid = ".$tariff;
				$tariff_name=doSelectSql($query,1);
				$tariffsInfo[$room]=$tariff_name;
				}

			$guesttypeOutput=array();
			$varianceArray=explode(",",$variances);
			foreach ($varianceArray as $v)
				{
				$vDeets=explode("_",$v);
				if ($vDeets[0]=="guesttype")
					{
					$vu=$vDeets[1];
					$vq=$vDeets[2];
					$vv=$vDeets[3];
					$query="SELECT `type` FROM #__jomres_customertypes where id = '".(int)$vu."' ";
					$vtitle=doSelectSql($query,1);
					$guesttypeOutput[]=array('title'=>$vtitle,'qty'=>$vq,'value'=>$vv);
					}
				}
			foreach($roomBookingData as $roomBooking)
				{
				$roomBooking_uid=$roomBooking->contract_uid;
				$roomBooking_black_booking=$roomBooking->black_booking;
				$roomBooking_reception_booking=$roomBooking->reception_booking;
				$roomBooking_internet_booking=$roomBooking->internet_booking;
				}
			$rmInfo=array();
			foreach($roomInfo as $rInfo)
				{
				$rInfo_uid=$rInfo->room_uid;
				//$rInfo_uid=$rInfo->room_classes_uid;
				//$rInfo_uid=$rInfo->propertys_uid;
				//$rInfo_uid=$rInfo->room_features_uid ;
				$rInfo_name=$rInfo->room_name ;
				$rInfo_number=$rInfo->room_number;
				$rInfo_room_floor=$rInfo->room_floor;
				$rInfo_room_disabled_access =$rInfo->room_disabled_access ;
				$rInfo_max_people=$rInfo->max_people;
				$rInfo_type=$rInfo->room_classes_uid;
				$rInfo_tariff=$tariffsInfo[$rInfo_uid];
				$rmInfo[]=array(
					"rInfo_name"=>$rInfo_name,
					"rInfo_number"=>$rInfo_number,
					"rInfo_room_floor"=>$rInfo_room_floor,
					"rInfo_room_disabled_access"=>$rInfo_room_disabled_access,
					"rInfo_max_people"=>$rInfo_max_people,
					"rInfo_type"=>$rInfo_type,
					"rInfo_tariff"=>$rInfo_tariff
					);
			}
		foreach($roomClass as $rClass)
			{
			$rClass_room_classes_uid=$rClass->room_classes_uid;
			$rClass_room_class_abbv=$rClass->room_class_abbv;
			$rClass_room_class_full_desc=$rClass->room_class_full_desc;
			}
			if ($booking_deposit_paid)
				$depositPaid=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
			else
				$depositPaid=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);

		if ($thisJRUser->userIsManager)
			{
			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			if (!$popup)
				{
				$output['HAMENDBOOKING']=jr_gettext('_JOMRES_CONFIRMATION_AMEND',_JOMRES_CONFIRMATION_AMEND,$editable=false,$isLink=true) ;
				$link=JOMRES_SITEPAGE_URL.'&task=amendBooking&contractUid='.$booking_contract_uid;
				$targetTask='amendBooking';
				$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/HotelReservationEdit.png';
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['HAMENDBOOKING'],$submitOnClick=false,$submitTask="",$image);
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					{
					if (!$bookedin)
						{
						$output['HBOOKGUESTIN']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN,$editable=false,$isLink=true) ;
						$link=JOMRES_SITEPAGE_URL.'&task=bookGuestIn&contract_uid='.$booking_contract_uid;
						$targetTask='bookGuestIn';
						$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/BookGuestIn.png';
						$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['HBOOKGUESTIN'],$submitOnClick=false,$submitTask="",$image);
						
						$jrtb .= $jrtbar->toolbarItem('cancelbooking',jomresURL(JOMRES_SITEPAGE_URL."&task=cancelBooking&contract_uid=$booking_contract_uid"),'');
						}
					else
						{
						$output['HBOOKGUESTOUT']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT,$editable=false,$isLink=true) ;
						$link=JOMRES_SITEPAGE_URL.'&task=bookGuestOut&dueDepart='.$booking_contract_uid;
						$targetTask='bookGuestOut';
						$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/BookGuestOut.png';
						$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['HBOOKGUESTOUT'],$submitOnClick=false,$submitTask="",$image);
						}
					}
				if (!$booking_deposit_paid && $bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					$jrtb .= $jrtbar->toolbarItem('enterdeposit',jomresURL(JOMRES_SITEPAGE_URL."&task=editDeposit&contractUid=$booking_contract_uid"),'');
				$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=yes,menubar=yes,resizable=yes,width=710,height=500,directories=no,location=no';
				$link = JOMRES_SITEPAGE_URL.'&task=confirmationForm&no_html=1&contract_uid='.$booking_contract_uid;
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					$jrtb .= $jrtbar->toolbarItem('addservice',jomresURL(JOMRES_SITEPAGE_URL."&task=addServiceToBill&contract_uid=$booking_contract_uid"),jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE,$editable=false,$isLink=false));
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					$jrtb .= $jrtbar->toolbarItem('printer','javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');',jr_gettext('_JOMRES_COM_CONFIRMATION_PRINT',_JOMRES_COM_CONFIRMATION_PRINT,$editable=false,$isLink=false));
				$link = JOMRES_SITEPAGE_URL.'&task=confirmationForm&no_html=1&contract_uid='.$booking_contract_uid.'&sendemail=1';
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					$jrtb .= $jrtbar->toolbarItem('emailsend','javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');',jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL,$editable=false,$isLink=false));

				$query = "SELECT id FROM #__jomresportal_invoices WHERE contract_id = ".$booking_contract_uid;
				$invoice_number = doSelectSql($query,1);
				if ($invoice_number >0)
					{
					$output['SHOWINVOICE']=jr_gettext('_JOMRES_MANAGER_SHOWINVOICE',_JOMRES_MANAGER_SHOWINVOICE,$editable=false,$isLink=true) ;
					$link=JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$invoice_number;
					$targetTask='view_invoice';
					$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/Invoice.png';
					$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['SHOWINVOICE'],$submitOnClick=false,$submitTask="",$image);
					}
					
				$notesLink=JOMRES_SITEPAGE_URL.'&task=addnote&popup=1&contract_uid='.$booking_contract_uid;
				$jrtb .= $jrtbar->toolbarItem('note','javascript:void window.open(\''.$notesLink.'\', \'win2\', \''.$status.'\');',jr_gettext('_JOMCOMP_BOOKINGNOTES_ADD',_JOMCOMP_BOOKINGNOTES_ADD,$editable=false,$isLink=false));
				}
			else
				{
				if (!$bookedin)
					echo "<div id='jomresmenu_hint' style=color:red; >&nbsp;</div>";
					$jrtb .= $jrtbar->toolbarItem('cancelbooking',jomresURL(JOMRES_SITEPAGE_URL_NOHTML."&task=cancelBooking&popup=1&contract_uid=$booking_contract_uid"),'');
				}
			$jrtb .= $jrtbar->endTable();
			echo $jrtb;
			echo '
			<table border="0" width="100%">
			<tr>
				<td>'.jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,$editable=true,$isLink=false).'&nbsp;<b>'.$booking_tag.'</b>&nbsp;'.$guest_firstname." ".$guest_surname.'</td>
			</tr>
			<tr>
				<td><a href="mailto:'.$guest_email.'?subject='.jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,FALSE).' '.$booking_tag.' @ '.$property_name.'&body='.jr_gettext('_JOMRES_COM_CONFIRMATION_DEAR',_JOMRES_COM_CONFIRMATION_DEAR,false).ucfirst($guest_firstname).' '.ucfirst($guest_surname).' RE '.jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,FALSE).' '.$booking_tag.'">'.$guest_email.'</a></td>
			</tr>

			</table>';
			}

		jr_import('jomres_content_tabs');
		$contentPanel = new jomres_content_tabs();
		$contentPanel->startTabs();
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL',_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL,FALSE));
		$contentPanel->setcontent('<table>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL',_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL).'</td>
				<td>'.ucfirst($guest_firstname).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL',_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL).'</td>
				<td>'. ucfirst($guest_surname).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL).'</td>
				<td>'.outputDate($booking_arrival).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE).'</td>
				<td>'.outputDate($booking_departure).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ).'</td>
				<td><b>'.ucfirst($booking_special_reqs).'</b></td>
			</tr>
		</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$current_property_details =jomres_getSingleton('basic_property_details');
		$current_property_details->gather_data($defaultProperty);
		$property_name = $current_property_details->property_name;

		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST',_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST,FALSE));
		$contentPanel->setcontent('<table>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL).'</td>
				<td>'.ucfirst($guest_house).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL) .'</td>
				<td>'.ucfirst($guest_street).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL) .'</td>
				<td>'.ucfirst($guest_town).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION) .'</td>
				<td>'.ucfirst($guest_region).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY) .'</td>
				<td>'.ucfirst($guest_country).'</td>
			</tr>

			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL).'</td>
				<td>'.strtoupper($guest_postcode).'</td>
			</tr>
			<tr>
			<td>'.jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL).'</td>
				<td>'.$guest_tel_landline.'</td>
			</tr>
				<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL).'</td>
				<td>'.$guest_tel_mobile.'</td>
			</tr>
		</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM',_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM,FALSE));
		$contentPanel->setcontent('<table>');
		if ($roomBooking_black_booking=="1")
			$bookingType=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK);
		else if ($roomBooking_reception_booking=="1")
				$bookingType=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION);
			else
				$bookingType=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET);
		$contentPanel->setcontent('
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL).'</td>
				<td>'.$bookingType.'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_ASSIGNUSER_USERNAME',_JOMRES_COM_MR_ASSIGNUSER_USERNAME).'</td>
				<td>'.$bookersUsername.'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>');
		foreach ($rmInfo as $ri)
			{
			if ($ri['rInfo_room_disabled_access']=="1")
				$disabledAccess=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
			else
				$disabledAccess=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);

			$contentPanel->setcontent('

			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_NAME',_JOMRES_COM_MR_EB_ROOM_NAME).'</td>
				<td>'.$ri['rInfo_name'].'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE',_JOMRES_COM_MR_LISTTARIFF_RATETITLE) .'</td>
				<td>'.$ri['rInfo_tariff'].'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_NUMBER',_JOMRES_COM_MR_EB_ROOM_NUMBER).'</td>
				<td>'.$ri['rInfo_number'].'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_FLOOR',_JOMRES_COM_MR_EB_ROOM_FLOOR).'</td>
				<td>'.$ri['rInfo_room_floor'].'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_DISABLED',_JOMRES_COM_MR_EB_ROOM_DISABLED).'</td>
				<td>'.$disabledAccess.'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE',_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE).'</td>
				<td>'.$ri['rInfo_max_people'].'</td>
			</tr>
			<tr>');
			$rit=$ri['rInfo_type'];
			$query="SELECT room_class_abbv FROM #__jomres_room_classes WHERE room_classes_uid = '".(int)$rit."'";
			$type=doSelectSql($query,1);
			$contentPanel->setcontent('
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV',_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV).'</td>
				<td>'.$type .'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>');
			}
		$contentPanel->setcontent('</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$otherServiceTotal=0.00;
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT',_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT,FALSE));
		$contentPanel->setcontent('<table>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID).'</td>
				<td>'.$depositPaid.'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED).'</td>
				<td>'.output_price($booking_deposit_required).'</td>
			</tr>
			<tr>
			<td>'.jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL).'</td>
				<td>'.output_price($booking_contract_total).'</td>
			</tr>
			<tr>
			<td>'.jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS).'</td>
				<td>'.count(explode(",",$booking_date_range_string) ).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF).'</td>
				<td>'.$booking_deposit_ref.'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON).'</td>
				<td>'.output_price($single_person_suppliment).'</td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_FRONT_ROOMTAX',_JOMRES_COM_FRONT_ROOMTAX).'</td>
				<td>'.output_price($tax).'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES).'</td>
				<td>&nbsp;</td>
			</tr>');
		foreach ($guesttypeOutput as $type)
			{
			$contentPanel->setcontent('<tr><td>'.$type['title'].'</td>');
			$contentPanel->setcontent('<td>'.$type['qty'].'&nbsp;'.'</td></tr>');
			}
		$contentPanel->setcontent('
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE).'</td>
				<td>&nbsp;</td>
			</tr>');
		$taxrates = taxrates_getalltaxrates();
		$extraOptionsArray=explode(",",$extraOptionsList);
		foreach ($extraOptionsArray as $extraUid)
			{
			$query="SELECT name,price,tax_rate FROM #__jomres_extras WHERE uid = '".(int)$extraUid."' ORDER BY name";
			$extrasList= doSelectSql($query);
			foreach ($extrasList as $theExtras)
				{
				$quantity = $extrasquantities[$extraUid];
				
				$price = $theExtras->price;
				$tax_rate_id = (int)$theExtras->tax_rate;
				$rate = (float)$taxrates[$tax_rate_id]['rate'];
				$tax = ($price/100)*$rate;
				$inc_price = $price+$tax;
					
				$extra_tax_output = "";
				if ($rate > 0)
					$extra_tax_output = " (".$rate."%)";
				$contentPanel->setcontent('
					<tr>
						<td>&nbsp;</td>
						<td>'.($theExtras->name)."  ".output_price($inc_price).' '.$extra_tax_output.' X '.$quantity.'</td>
					</tr>');
				}
			}
		$contentPanel->setcontent('
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE',_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE).'</td>
				<td>'.output_price($extrasOptionsValue).'</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_ADDSERVICE_BOOKINGDESC',_JOMRES_COM_ADDSERVICE_BOOKINGDESC).'</td>
				<td>');
		if (count($extraBillingData) > 0 )
			{
			foreach($extraBillingData as $extras)
				{
				$service_description=$extras->service_description;
				$service_value=$extras->service_value;
				$contentPanel->setcontent($service_description.' '.output_price($service_value).'<br>');
				$otherServiceTotal=$otherServiceTotal+$service_value;
				}
			}
			$contentPanel->setcontent('
				</td>
			</tr>
			<tr>
				<td><hr></td>
				<td><hr></td>
			</tr>
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL',_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL).'</td>
				<td>'.output_price($otherServiceTotal+$booking_contract_total).'</td>
			</tr>');
			$query = "SELECT invoice_uid FROM #__jomres_contracts WHERE contract_uid = ".$booking_contract_uid. " LIMIT 1 ";
			$invoice_uid = doSelectSql($query,1);
			if ($invoice_uid > 0 )
				{
				jr_import("jrportal_invoice");
				$invoice = new jrportal_invoice();
				$invoice->id = $invoice_uid;
				$remaindertopay=$invoice->get_invoice_balance();
				}
			else
				{
				if ($booking_deposit_paid=="1")
					$remaindertopay=($otherServiceTotal+$booking_contract_total)-$booking_deposit_required;
				else
					$remaindertopay=$otherServiceTotal+$booking_contract_total;
				}

			$contentPanel->setcontent('
			<tr>
				<td>'.jr_gettext('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY',_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY).'</td>
				<td><b>'.output_price($remaindertopay).'</b></td>
			</tr>
		</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$componentArgs = null;
		$notes=$MiniComponents->triggerEvent('02265',$componentArgs);
		
		$contentPanel->startPanel(jr_gettext('_JOMCOMP_BOOKINGNOTES_VIEW',_JOMCOMP_BOOKINGNOTES_VIEW,FALSE));
		$contentPanel->setcontent($notes);
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$contentPanel->endTabs();
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT);
		$output[]		=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL',_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL',_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL',_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST',_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM',_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
		$output[]		=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_NAME',_JOMRES_COM_MR_EB_ROOM_NAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_NUMBER',_JOMRES_COM_MR_EB_ROOM_NUMBER);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_FLOOR',_JOMRES_COM_MR_EB_ROOM_FLOOR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_DISABLED',_JOMRES_COM_MR_EB_ROOM_DISABLED);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE',_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV',_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF);
		$output[]		=jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON);
		$output[]		=jr_gettext('_JOMRES_COM_FRONT_ROOMTAX',_JOMRES_COM_FRONT_ROOMTAX);
		$output[]		=jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_BOOKINGDESC',_JOMRES_COM_ADDSERVICE_BOOKINGDESC);
		$output[]		=jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL',_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY',_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY);
		$output[]		=jr_gettext('_JOMCOMP_BOOKINGNOTES_VIEW',_JOMCOMP_BOOKINGNOTES_VIEW);
		$output[]		=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE',_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE);


		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
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