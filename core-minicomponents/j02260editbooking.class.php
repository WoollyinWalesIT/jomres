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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
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

		$this->editBooking_html($contract_uid,$bookingData,$extraBillingData,$guestData,$roomBookingData,$roomInfo,$rClass,$rFeatures,$bookersUsername );
		}

		function editBooking_html($contract_uid,$bookingData,$extraBillingData,$guestData,$roomBookingData,$roomInfo,$roomClass,$roomFeatures,$bookersUsername)
			{
			$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
			$mrConfig=getPropertySpecificSettings();
			$popup-get_showtime('popup');
			
			$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
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
			$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			if (!$popup)
				{
				$output['HAMENDBOOKING']=jr_gettext('_JOMRES_CONFIRMATION_AMEND',_JOMRES_CONFIRMATION_AMEND,$editable=false,$isLink=true) ;
				$link=JOMRES_SITEPAGE_URL.'&task=amendBooking&no_html=1&contractUid='.$booking_contract_uid;
				$targetTask='amendBooking';
				$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/HotelReservationEdit.png';
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					{
					$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['HAMENDBOOKING'],$submitOnClick=false,$submitTask="",$image);
					add_menu_option ( '&task=amendBooking&no_html=1&contractUid='.$booking_contract_uid,null,$output['HAMENDBOOKING'],null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
					}
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					{
					if (!$bookedin)
						{
						$output['HBOOKGUESTIN']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN,$editable=false,$isLink=true) ;
						$link=JOMRES_SITEPAGE_URL.'&task=bookGuestIn&contract_uid='.$booking_contract_uid;
						$targetTask='bookGuestIn';
						$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/BookGuestIn.png';
						$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['HBOOKGUESTIN'],$submitOnClick=false,$submitTask="",$image);
						add_menu_option ( '&task=bookGuestIn&contract_uid='.$booking_contract_uid,null, jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
						$jrtb .= $jrtbar->toolbarItem('cancelbooking',jomresURL(JOMRES_SITEPAGE_URL."&task=cancelBooking&contract_uid=$booking_contract_uid"),'');
						add_menu_option ( '&task=cancelBooking&contract_uid='.$booking_contract_uid,null, jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING',_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
						}
					else
						{
						$output['HBOOKGUESTOUT']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT,$editable=false,$isLink=true) ;
						$link=JOMRES_SITEPAGE_URL.'&task=bookGuestOut&dueDepart='.$booking_contract_uid;
						$targetTask='bookGuestOut';
						$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/BookGuestOut.png';
						$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['HBOOKGUESTOUT'],$submitOnClick=false,$submitTask="",$image);
						add_menu_option ( '&task=bookGuestOut&dueDepart='.$booking_contract_uid,null, jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
						}
					}
				if (!$booking_deposit_paid && $bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					{
					$jrtb .= $jrtbar->toolbarItem('enterdeposit',jomresURL(JOMRES_SITEPAGE_URL."&task=editDeposit&contractUid=$booking_contract_uid"),'');
					add_menu_option ("&task=editDeposit&contractUid=$booking_contract_uid",null, jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
					}
				$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=yes,menubar=yes,resizable=yes,width=710,height=500,directories=no,location=no';
				$link = JOMRES_SITEPAGE_URL.'&task=confirmationForm&popup=1&tmpl=component&contract_uid='.$booking_contract_uid;
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					{
					$jrtb .= $jrtbar->toolbarItem('addservice',jomresURL(JOMRES_SITEPAGE_URL."&task=addServiceToBill&contract_uid=$booking_contract_uid"),jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE,$editable=false,$isLink=false));
					add_menu_option ("&task=addServiceToBill&contract_uid=$booking_contract_uid",null, jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
					}
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					{
					$jrtb .= $jrtbar->toolbarItem('printer','javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');',jr_gettext('_JOMRES_COM_CONFIRMATION_PRINT',_JOMRES_COM_CONFIRMATION_PRINT,$editable=false,$isLink=false));
					add_menu_option ('javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');',null, jr_gettext('_JOMRES_COM_CONFIRMATION_PRINT',_JOMRES_COM_CONFIRMATION_PRINT,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
					}
				$link = JOMRES_SITEPAGE_URL.'&task=confirmationForm&no_html=1&contract_uid='.$booking_contract_uid.'&sendemail=1';
				if ($bookingData[0]->bookedout != "1" && $bookingData[0]->cancelled != "1")
					{
					$jrtb .= $jrtbar->toolbarItem('emailsend','javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');',jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL,$editable=false,$isLink=false));
					add_menu_option ('javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');',null, jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
					}

				$query = "SELECT id FROM #__jomresportal_invoices WHERE contract_id = ".$booking_contract_uid;
				$invoice_number = doSelectSql($query,1);
				if ($invoice_number >0)
					{
					$output['SHOWINVOICE']=jr_gettext('_JOMRES_MANAGER_SHOWINVOICE',_JOMRES_MANAGER_SHOWINVOICE,$editable=false,$isLink=true) ;
					$link=JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$invoice_number;
					$targetTask='view_invoice';
					$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/Invoice.png';
					$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$output['SHOWINVOICE'],$submitOnClick=false,$submitTask="",$image);
					add_menu_option ('&task=view_invoice&id='.$invoice_number,null, $output['SHOWINVOICE'],null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
					}
					
				$notesLink=JOMRES_SITEPAGE_URL.'&task=addnote&contract_uid='.$booking_contract_uid;
				$jrtb .= $jrtbar->toolbarItem('note',$notesLink,jr_gettext('_JOMCOMP_BOOKINGNOTES_ADD',_JOMCOMP_BOOKINGNOTES_ADD,$editable=false,$isLink=false));
				add_menu_option ($notesLink,null, jr_gettext('_JOMCOMP_BOOKINGNOTES_ADD',_JOMCOMP_BOOKINGNOTES_ADD,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
				}
			else
				{
				
				$jrtb .= $jrtbar->toolbarItem('cancelbooking',jomresURL(JOMRES_SITEPAGE_URL_NOHTML."&task=cancelBooking&popup=1&contract_uid=$booking_contract_uid"),'');
				add_menu_option ("&task=cancelBooking&popup=1&contract_uid=$booking_contract_uid",null, jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING',_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING,$editable=false,$isLink=true),null, _JOMRES_COM_MR_EDITBOOKINGTITLE);
				}
			$jrtb .= $jrtbar->endTable();
			
			$output=array();
			$pageoutput=array();
			
			$output['_JOMRES_BOOKING_NUMBER']=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,$editable=true,$isLink=false);
			$output['BOOKING_NUMBER']=$booking_tag;
			$output['GUEST_FIRSTNAME']=$guest_firstname;
			$output['GUEST_SURNAME']=$guest_surname;
			$output['TOOLBAR']=$jrtb;
			
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'edit_booking_header.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			echo $tmpl->getParsedTemplate();
			}

		$output=array();
		$pageoutput=array();
		
		if ($mrConfig['wholeday_booking'] == "1")
			{
			$arrivalText = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY);
			$departureText = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY);
			}
		else
			{
			$arrivalText = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
			$departureText = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
			}
		
		$output['_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL',_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL);
		$output['GUEST_FIRSTNAME']=$guest_firstname;
		
		$output['_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL',_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL);
		$output['GUEST_SURNAME']=$guest_surname;
		
		$output['ARRIVALTEXT']=$arrivalText;
		$output['BOOKING_ARRIVAL']=outputDate($booking_arrival);
		
		$output['DEPARTURETEXT']=$departureText;
		$output['BOOKING_DEPARTURE']=outputDate($booking_departure);
		
		$output['_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);
		$output['EMAIL_LINK']='mailto:'.$guest_email.'?subject='.jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,FALSE).' '.$booking_tag.' @ '.$property_name.'&body='.jr_gettext('_JOMRES_COM_CONFIRMATION_DEAR',_JOMRES_COM_CONFIRMATION_DEAR,false).ucfirst($guest_firstname).' '.ucfirst($guest_surname).' RE '.jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,FALSE).' '.$booking_tag;
		$output['EMAIL_ADDRESS']=$guest_email;
		
		$output['_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ);
		$output['SPECIALREQS']=$booking_special_reqs;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_booking_tabcontents_arrdep.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$arrdep_template = $tmpl->getParsedTemplate();
		
		$output=array();
		$pageoutput=array();
		
		$output['_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL);
		$output['GUEST_HOUSE']=$guest_house;
		$output['_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL);
		$output['GUEST_STREET']=$guest_street;
		$output['_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL);
		$output['GUEST_TOWN']=$guest_town;
		$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output['GUEST_REGION']=$guest_region;
		$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['GUEST_COUNTRY']=$guest_country;
		$output['_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL);
		$output['GUEST_POSTCODE']=$guest_postcode;
		$output['_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL);
		$output['GUEST_TEL_LANDLINE']=$guest_tel_landline;
		$output['_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL);
		$output['GUEST_TEL_MOBILE']=$guest_tel_mobile;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_booking_tabcontents_guest.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$guest_template = $tmpl->getParsedTemplate();
		
		$output=array();
		$pageoutput=array();
		
		
		
		if ($roomBooking_black_booking=="1")
			$bookingType=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK);
		else if ($roomBooking_reception_booking=="1")
				$bookingType=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION);
			else
				$bookingType=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET);
		
		$output['_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL',_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL);
		$output['BOOKINGTYPE']=$bookingType;
		$output['_JOMRES_COM_MR_ASSIGNUSER_USERNAME']=jr_gettext('_JOMRES_COM_MR_ASSIGNUSER_USERNAME',_JOMRES_COM_MR_ASSIGNUSER_USERNAME);
		$output['BOOKERSUSERNAME']=$bookersUsername;
		
		$rows=array();
		foreach ($rmInfo as $ri)
			{
			$r=array();
			if ($ri['rInfo_room_disabled_access']=="1")
				$disabledAccess=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
			else
				$disabledAccess=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);
			
			$rit=$ri['rInfo_type'];
			$query="SELECT room_class_abbv FROM #__jomres_room_classes WHERE room_classes_uid = '".(int)$rit."'";
			$type=doSelectSql($query,1);
			
			$r['_JOMRES_COM_MR_EB_ROOM_NAME']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_NAME',_JOMRES_COM_MR_EB_ROOM_NAME);
			$r['RINFO_NAME']=$ri['rInfo_name'];
			$r['_JOMRES_COM_MR_LISTTARIFF_RATETITLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE',_JOMRES_COM_MR_LISTTARIFF_RATETITLE);
			$r['RINFO_TARIFF']=$ri['rInfo_tariff'];
		
			$r['_JOMRES_COM_MR_EB_ROOM_NUMBER']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_NUMBER',_JOMRES_COM_MR_EB_ROOM_NUMBER);
			$r['RINFO_NUMBER']=$ri['rInfo_number'];
			$r['_JOMRES_COM_MR_EB_ROOM_FLOOR']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_FLOOR',_JOMRES_COM_MR_EB_ROOM_FLOOR);
			$r['RINFO_ROOM_FLOOR']=$ri['rInfo_room_floor'];

			$r['_JOMRES_COM_MR_EB_ROOM_DISABLED']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_DISABLED',_JOMRES_COM_MR_EB_ROOM_DISABLED);
			$r['DISABLEDACCESS']=$disabledAccess;
			$r['_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE',_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE);
			$r['RINFO_MAX_PEOPLE']=$ri['rInfo_max_people'];

			$r['_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV',_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV);
			$r['TYPE']=$type;
			$rows[]=$r;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_booking_tabcontents_room.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$room_template = $tmpl->getParsedTemplate();
		
		
		$output=array();
		$pageoutput=array();

		$nights = $mrConfig['wholeday_booking'] == "1" ? jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY,false,false): jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', _JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS,false,false);
		
		$guest_type_rows  = array();
		foreach ($guesttypeOutput as $type)
			{
			$r=array();
			$r['GUEST_TYPE_TITLE']=$type['title'];
			$r['GUEST_TYPE_QTY']=$type['qty'];
			$guest_type_rows[]=$r;
			}
		
		$extras_rows = array();
		$taxrates = taxrates_getalltaxrates();
		$extraOptionsArray=explode(",",$extraOptionsList);

		foreach ($extraOptionsArray as $extraUid)
			{
			$query="SELECT name,price,tax_rate FROM #__jomres_extras WHERE uid = '".(int)$extraUid."' ORDER BY name";
			$extrasList= doSelectSql($query);
			foreach ($extrasList as $theExtras)
				{
				
				$r=array();
				$quantity = $extrasquantities[$extraUid];
				$price = $theExtras->price;
				if ($mrConfig['prices_inclusive'] =="0")
					{
					$tax_rate_id = (int)$theExtras->tax_rate;
					$rate = (float)$taxrates[$tax_rate_id]['rate'];
					$tax = ($price/100)*$rate;
					
					$inc_price = $price+$tax;
					}
				else
					$inc_price = $price;
				$extra_tax_output = "";
				if ($rate > 0)
					$extra_tax_output = $rate;
				$r['EXTRA_NAME']=$theExtras->name;
				$r['EXTRA_INCLUSIVE_PRICE']=output_price($inc_price);
				$r['EXTRA_TAX']=$extra_tax_output;
				$r['EXTRA_QUANTITY']=$quantity;
				$extras_rows[]=$r;
				}
			}
		
		$other_services_rows = array();
		$otherServiceTotal=0.00;
		if (count($extraBillingData) > 0 )
			{
			foreach($extraBillingData as $extras)
				{
				$service_description=$extras->service_description;
				$service_value=$extras->service_value;
				$xs_tax = ($extras->service_value/100)*(float)$extras->tax_rate_val;
				$otherServiceTotal=$otherServiceTotal+($service_value+$xs_tax);
				
				$r=array();
				$r['OTHER_SERVICE']=$service_description.' '.output_price($service_value+$xs_tax);
				$other_services_rows[]=$r;
				}
			}
			
		$query = "SELECT invoice_uid FROM #__jomres_contracts WHERE contract_uid = ".$booking_contract_uid. " LIMIT 1 ";
		$invoice_uid = (int)doSelectSql($query,1);
		if ($invoice_uid > 0 )
			{
			jr_import("invoicehandler");
			$invoice = new invoicehandler();
			$invoice->id = $invoice_uid;
			$invoice->getInvoice();
			$remaindertopay=$invoice->get_line_items_balance();
			}
		else
			{
			if ($booking_deposit_paid=="1")
				$remaindertopay=($otherServiceTotal+$booking_contract_total)-$booking_deposit_required;
			else
				$remaindertopay=$otherServiceTotal+$booking_contract_total;
			}

		$output['_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID']= jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID) ;
		$output['DEPOSITPAID']= $depositPaid ;
		$output['_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED']= jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED) ;
		$output['BOOKING_DEPOSIT_REQUIRED']= output_price($booking_deposit_required) ;
		$output['_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL']= jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL) ;
		$output['BOOKING_CONTRACT_TOTAL']= output_price($booking_contract_total) ;
		$output['HNIGHTS']= $nights ;
		$output['NUM_NIGHTS']= count(explode(",",$booking_date_range_string) ) ;
		$output['_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF']= jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF) ;
		$output['BOOKING_DEPOSIT_REF']= $booking_deposit_ref ;
		$output['_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON']= jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON) ;
		$output['SINGLE_PERSON_SUPPLIMENT']= output_price($single_person_suppliment) ;
		$output['_JOMRES_COM_FRONT_ROOMTAX']= jr_gettext('_JOMRES_COM_FRONT_ROOMTAX',_JOMRES_COM_FRONT_ROOMTAX) ;
		$output['TAX']= output_price($tax) ;
		$output['_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES']= jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES) ;
		$output['_JOMRES_COM_MR_EXTRA_TITLE']= jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE) ;
		$output['_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE']= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE',_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE) ;
		$output['EXTRASOPTIONSVALUE']= output_price($extrasOptionsValue) ;
		$output['_JOMRES_COM_ADDSERVICE_BOOKINGDESC']= jr_gettext('_JOMRES_COM_ADDSERVICE_BOOKINGDESC',_JOMRES_COM_ADDSERVICE_BOOKINGDESC) ;
		$output['_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL']= jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL',_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL) ;
		$output['GRAND_TOTAL']= output_price($otherServiceTotal+$booking_contract_total) ;
		$output['_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY']= jr_gettext('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY',_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY) ;
		$output['REMAINDER_TO_PAY']= output_price($remaindertopay) ;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_booking_tabcontents_payment.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'extras_rows',$extras_rows);
		$tmpl->addRows( 'guest_type_rows',$guest_type_rows);
		$tmpl->addRows( 'other_services_rows',$other_services_rows);
		$payment_template = $tmpl->getParsedTemplate();

		$componentArgs = array("booking_contract_uid"=>$booking_contract_uid);
		$notes=$MiniComponents->triggerEvent('02265',$componentArgs);
		
		
		jr_import('jomres_content_tabs');
		$contentPanel = new jomres_content_tabs();
		$contentPanel->startTabs();
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL',_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL,FALSE));
		$contentPanel->setcontent($arrdep_template);
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST',_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST,FALSE));
		$contentPanel->setcontent($guest_template);
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM',_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM,FALSE));
		$contentPanel->setcontent($room_template);
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT',_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT,FALSE,false));
		$contentPanel->setcontent($payment_template);
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		
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