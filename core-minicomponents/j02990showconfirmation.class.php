<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Mini-component core file: Shows the confirmation form
 #
* @package Jomres
#
 */
class j02990showconfirmation {
	/**
	#
	 * Constructor: Shows the confirmation form
	#
	 */
	function j02990showconfirmation()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}

		global $mrConfig,$jomresConfig_live_site,$thisJRUser;
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$booking_parts=array();
		if ( !isset($tmpBookingHandler->tmpbooking["confirmationSeen"]) )
			$tmpBookingHandler->addNewBookingField("confirmationSeen");
		$tmpBookingHandler->updateBookingField("confirmationSeen",true);
		$tmpBookingHandler->saveBookingData();

		if ( !isset($tmpBookingHandler->tmpbooking["bookersUsername"]) )
			$tmpBookingHandler->addNewBookingField("bookersUsername");
		$tmpBookingHandler->updateBookingField("bookersUsername",$thisJRUser->username);

		
		$currfmt = jomres_getSingleton('jomres_currency_format');

		// Trigger point
		$MiniComponents->triggerEvent('03000');

		$userIsManager	=	checkUserIsManager();

		$bookingDeets	=	gettempBookingdata();
		$tag			=	$bookingDeets['tag'];
		$property_uid	=	$bookingDeets['property_uid'];
		$mrConfig		=	getPropertySpecificSettings($property_uid);
		property_header($property_uid);

		if (!$bookingDeets['ok_to_book'])
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&selectedProperty=".$bookingDeets['property_uid']), '' );

		jr_import('jomres_custom_field_handler');
		$custom_fields = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();
		if (count($allCustomFields)>0)
			{
			foreach ($allCustomFields as $f)
				{
				$required = $f['required'];
				$fieldname = $f['fieldname'];
				$formfieldname = $f['fieldname']."_".$f['uid'];
				$tmpBookingHandler->saveCustomFields($allCustomFields);
				if ($required == "1" && strlen($_POST[$formfieldname])== 0)
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&selectedProperty=".$bookingDeets['property_uid']), '' );
				}
			}
		$tmpBookingHandler->saveBookingData();
			
		$query			=	"SELECT property_name FROM #__jomres_propertys WHERE `propertys_uid` = '".(int)$property_uid."' LIMIT 1";
		$propertyList	=	doSelectSql($query);
		foreach ($propertyList as $property)
			$booking_parts['PROPERTYNAME'] 	= $property->property_name;;

		$booking_parts['PROPERTY']		=	$bookingDeets['property_uid'];

		$booking_parts['HTOTAL']		=	jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL);
		$booking_parts['HGRANDTOTAL']	=	jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL);
		$booking_parts['HROOMSBOOKED']	=	jr_gettext('_JOMRES_FRONT_MR_BOOKED',_JOMRES_FRONT_MR_BOOKED);

		$booking_parts['TOTAL']			=	$mrConfig['currency'].$currfmt->get_formatted($bookingDeets['contract_total']);

		$booking_parts['HDEPOSIT']		=	jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
		$booking_parts['DEPOSIT']		=	$mrConfig['currency'].$currfmt->get_formatted($bookingDeets['deposit_required']);

		$booking_parts['EDITBOOKING']	=	jr_gettext('_JOMRES_COM_MR_EDITBOOKINGTITLE',_JOMRES_COM_MR_EDITBOOKINGTITLE);
		$booking_parts['ARRIVAL']		=	outputDate($bookingDeets['arrivalDate']);
		$booking_parts['DEPARTURE']		=	outputDate($bookingDeets['departureDate']);
		$booking_parts['DAYSSTAYING']	= 	$bookingDeets['stayDays'];
		if ($mrConfig['roomTaxYesNo']=="1" || $mrConfig['euroTaxYesNo']=="1")
			$booking_parts['TAX']		=	$mrConfig['currency'].$currfmt->get_formatted($bookingDeets['tax']);
		else
			$booking_parts['TAX']		=	"";

		if ((float)$bookingDeets['coupon_discount_value'] > 0.0)
			{
			$booking_parts['HCOUPON_DISCOUNTVALUE']	=	jr_gettext('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE',_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE);
			$booking_parts['COUPON_DISCOUNT_VALUE']		=	$mrConfig['currency'].$currfmt->get_formatted($bookingDeets['coupon_discount_value']);
			}

		if ($bookingDeets['booking_discounted'] == true)
			{
			if ($mrConfig['singleRoomProperty'] == 1)
				{
				$booking_parts['DISCOUNT']	=	$bookingDeets['lastminutediscount'];
				$booking_parts['BGCOLOUR']	=	$mrConfig['inputBoxErrorBackground'];
				}
			else
				{
				$booking_parts['DISCOUNT']	=	$bookingDeets['wisepricediscount'];
				$booking_parts['BGCOLOUR']	=	$mrConfig['inputBoxErrorBackground'];
				}
			}

		$requestedrooms 			= 	$bookingDeets['requestedRoom'];
		$rooms						= 	explode(",",$requestedrooms);
		$booking_parts['NUMROOMS'] 	= 	count($rooms);

		foreach ($rooms as $r)
			{
			$rm			=	explode("^",$r);
			$rmids[]	=	$rm[0];
			}

		$gor			=	genericOr($rmids,'room_uid');
		$query			=	"SELECT room_number,room_name,room_classes_uid FROM #__jomres_rooms WHERE $gor ORDER BY room_classes_uid";
		$roomList		=	doSelectSql($query);
		$roomNumber		=	"";
		$room_name		=	"";
		$prevroomclass	=	0;

		foreach ($roomList as $room)
			{
			$roomtype 			=	array();
			if ($roomNumber	== "")
				$roomNumber		=	$room->room_number;
			else
				$roomNumber	   .=	', '.$room->room_number;
			$room_name		   .=	$room->room_name;
			$room_classes_uid	=	$room->room_classes_uid;

			if ($room_classes_uid != $prevroomclass)
				{
				if ($prevroomclass != 0)
					{
					//output previous room
					$roomtype['FULLDESC']	=	$roomadd." x ".$fulldesc;
					$booking_rooms[]		=	$roomtype;
					$prevroomclass			= 	$room_classes_uid;
					}
				else
					$prevroomclass			= 	$room_classes_uid;

				$roomadd				= 	1;
				$query="SELECT room_class_full_desc FROM #__jomres_room_classes WHERE property_uid = '$property_uid' and room_classes_uid = '$room_classes_uid'";
				$roomclass=doSelectSql($query);

				if (count($roomclass)>0)
					{
					foreach ($roomclass as $class)
						$fulldesc	= jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFNAME'.$room_classes_uid,stripslashes($class->room_class_full_desc) );
					}
				else
					{
					$query		=	"SELECT room_class_full_desc FROM #__jomres_room_classes WHERE property_uid = 0 and room_classes_uid = '$room_classes_uid'";
					$roomclass	=	doSelectSql($query);
					if (count($roomclass)>0)
						{
						foreach ($roomclass as $class)
							$fulldesc	= jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFNAME'.$room_classes_uid,stripslashes($class->room_class_full_desc) );;
						}
					}
				}
			else
				{
				$roomadd++;
				}
			}

		$roomtype['FULLDESC']		=	$roomadd." x ".$fulldesc;
		$booking_rooms[]			= 	$roomtype;
		$booking_parts['ROOMTOTAL']	=	$mrConfig['currency'].$currfmt->get_formatted($bookingDeets['room_total']);

		if ($mrConfig['showExtras']=="1")
			{
			$extras 			= 	$bookingDeets['extras'];
			$extrasquantities	=	$bookingDeets['extrasquantities'];
			$extrasArray		=	explode(",",$extras);
			foreach ($extrasArray as $extraAll)
				{
				if (!empty($extraAll))
					{
					$extra 			= 	$extraAll;

					$query			=	"SELECT price, name FROM #__jomres_extras WHERE uid = '$extra'";
					$thisPrice 		=	doSelectSql($query,2);
					$query			=	"SELECT `model`,`params` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '$extra'";
					$model			=	doSelectSql($query,2);
					switch ($model['model'])
						{
						case '1': // Per week
							$numberOfWeeks	=	ceil($bookingDeets['stayDays']/7);
							$calc			=	$numberOfWeeks*$thisPrice['price'];
						break;
						case '2': // per days
							$calc			=	$bookingDeets['stayDays']*$thisPrice['price'];
						break;
						case '3': // per booking
							$calc			=	$thisPrice['price'];
						break;
						case '4': // per person per booking
							$calc			=	$bookingDeets['total_in_party']*$thisPrice['price'];
						break;
						case '5': // per person per day
							$calc			=	$bookingDeets['total_in_party']*$this->stayDays*$thisPrice['price'];
						break;
						case '6': // per person per week
							$numberOfWeeks	=	ceil($this->stayDays/7);
							$calc			=	$bookingDeets['total_in_party']*$numberOfWeeks*$thisPrice['price'];
						break;
						case '7': // per person per days min days
							$mindays		=	$model['params'];
							if ($bookingDeets['total_in_party'] < $mindays)
								$days		=	$mindays;
							else
								$days		=	$bookingDeets['stayDays'];

							$calc			=	$days*$thisPrice['price'];
						break;
						}

					$extra_parts['NAME'] 		= 	$thisPrice['name']." X ".$extrasquantities[$extra];
					$extra_parts['PRICE'] 		= 	$mrConfig['currency'].$currfmt->get_formatted($thisPrice['price']);
					$booking_extras[]			=	$extra_parts;
					}
				}
			}

		if ($mrConfig['showExtras'])
			{
			$extratext	=	array();
			$extra_text['AJAXFORM_EXTRAS']		=	jr_gettext('_JOMRES_AJAXFORM_EXTRAS',_JOMRES_AJAXFORM_EXTRAS);
			$extra_text['EXTRASTOTAL']			=	$mrConfig['currency'].$currfmt->get_formatted($bookingDeets['extrasvalue']);
			$extra_text['HEXTRASTOTAL']			=	jr_gettext('_JOMRES_AJAXFORM_EXTRAS_TOTAL',_JOMRES_AJAXFORM_EXTRAS_TOTAL);
			$extrastext[]	=	$extra_text;
			}

		$booking_parts['HEADER']				=	jr_gettext('_JOMRES_CONFIRMATION_HEADER',_JOMRES_CONFIRMATION_HEADER);
		$booking_parts['AJAXFORM_PARTICULARS']	=	jr_gettext('_JOMRES_AJAXFORM_PARTICULARS',_JOMRES_AJAXFORM_PARTICULARS);
		$booking_parts['BILLING_ROOMTOTAL']		=	jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL);
		$booking_parts['AJAXFORM_ADDRESS']		=	jr_gettext('_JOMRES_AJAXFORM_ADDRESS',_JOMRES_AJAXFORM_ADDRESS);
		$booking_parts['AMENDTEXT']	   			=	jr_gettext('_JOMRES_CONFIRMATION_AMENDTEXT',_JOMRES_CONFIRMATION_AMENDTEXT);
		$booking_parts['AMEND']	   				=	jr_gettext('_JOMRES_CONFIRMATION_AMEND',_JOMRES_CONFIRMATION_AMEND,false);
		$booking_parts['SPECIALS']	   			=	jr_gettext('_JOMRES_CONFIRMATION_SPECIALS',_JOMRES_CONFIRMATION_SPECIALS);
		$booking_parts['ACCOMMODATION_TOTAL']	=	jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL);
		$booking_parts['ACCOMMODATION_NIGHTS']	=	jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS);
		$booking_parts['ACCOMMODATION_PERROOM']	=	jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM);
		$booking_parts['PRICE_SUMMARY']			=	jr_gettext('_JOMRES_AJAXFORM_PRICE_SUMMARY',_JOMRES_AJAXFORM_PRICE_SUMMARY);
		$booking_parts['HTOTALINPARTY']			=	jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY);
		$booking_parts['TOTALINPARTY']			=	$bookingDeets['total_in_party'];
		
		if ((int)$bookingDeets['single_person_suppliment'] > 0)
			{
			$booking_parts['HSINGLEPERSON_COST']	=	jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST);
			$booking_parts['SINGLEPERSON_COST']		=	$mrConfig['currency'].$currfmt->get_formatted($bookingDeets['single_person_suppliment']);
			}
			
		$booking_parts['LIVESITE']				=	$jomresConfig_live_site;
		if (isset($_POST['specialReqs']))
			{
			$booking_parts['HSPECIAL_REQUIREMENTS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ);
			$booking_parts['SPECIAL_REQUIREMENTS']=quote_smart(jomresGetParam( $_POST, 'specialReqs', "" ));
			}
		$guestList							=	$tmpBookingHandler->getGuestData();
		$booking_parts['FIRSTNAME']			=	stripslashes($guestList['firstname']);
		$booking_parts['SURNAME']			=	stripslashes($guestList['surname']);
		$booking_parts['HOUSENO']			=	stripslashes($guestList['house']);
		$booking_parts['STREET']			=	stripslashes($guestList['street']);
		$booking_parts['TOWN']				=	stripslashes($guestList['town']);
		$booking_parts['COUNTY']			=	stripslashes($guestList['region']);
		$booking_parts['COUNTRY']			=	getSimpleCountry($guestList['country']);
		$booking_parts['POSTCODE']			=	stripslashes($guestList['postcode']);
		$booking_parts['LANDLINE']			=	stripslashes($guestList['tel_landline']);
		$booking_parts['MOBILE']			=	stripslashes($guestList['tel_mobile']);
		$booking_parts['EMAIL']				=	stripslashes($guestList['email']);

		$booking_parts['HARRIVAL']			=	jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
		$booking_parts['HDEPARTURE']		=	jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
		$booking_parts['HDAYSSTAYING']		=	jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS);
		$booking_parts['BOOKINGSPECIALREQ']	=	jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ);
		$booking_parts['DISCLAIMER']		=	jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER);
		$booking_parts['THEBUTTON']			=	jr_gettext('_JOMRES_COM_MR_CONFIRMBOOKING',_JOMRES_COM_MR_CONFIRMBOOKING,false);

		$booking_parts['HFIRSTNAME']		=	jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME',_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME);
		$booking_parts['HSURNAME']			= 	jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME',_JOMRES_FRONT_MR_DISPGUEST_SURNAME);
		$booking_parts['HHOUSENO']			= 	jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL) ;
		$booking_parts['HSTREET']			=	jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL) ;
		$booking_parts['HTOWN']				= 	jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL);
		$booking_parts['HPOSTCODE']			=	jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL) ;
		$booking_parts['HREGION']			= 	jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$booking_parts['HCOUNTRY']			= 	jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$booking_parts['HTEL']				= 	jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL);
		$booking_parts['HMOBILE']			=	jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL);
		$booking_parts['HEMAIL']			= 	jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);
		if ($mrConfig['roomTaxYesNo']=="1" || $mrConfig['euroTaxYesNo']=="1")
			$booking_parts['HTAX']			=	jr_gettext('_JOMRES_COM_FRONT_ROOMTAX',_JOMRES_COM_FRONT_ROOMTAX);
		else
			$booking_parts['HTAX']			=	"";

		$booking_parts['TERMS']				=	makePopupLink(JOMRES_SITEPAGE_URL."&task=terms&popup=1&property_uid=$property_uid",jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS), TRUE,750,500);
		$booking_parts['TERMSPRETEXT']		=	jr_gettext('_JOMRES_CONFIRMATION_TERMS_PRETEXT',_JOMRES_CONFIRMATION_TERMS_PRETEXT);
		$booking_parts['TERMSTEXT']			=	jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS,false);
		$booking_parts['ALERT']				=	jr_gettext('_JOMRES_CONFIRMATION_ALERT',_JOMRES_CONFIRMATION_ALERT,false);

		if (!$userIsManager && $mrConfig['useOnlinepayment'] !="0" )
			{
			$gatewaylist 	= 	array();
			$gatewaydir		=	$jomresConfig_live_site."/administrator/jomres/plugins/gateways/";
			$query = "SELECT id,plugin FROM #__jomres_pluginsettings WHERE prid = '".(int)$property_uid."' AND setting = 'active' AND value = '1'";
			$gatewayDeets	=	doSelectSql($query);
			if (count($gatewayDeets)>0)
				{
				$gateways	=	array();
				if (count($gatewayDeets) >1)
					{
					$booking_parts['GATEWAYCHOICEINTRO']=jr_gettext('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE',_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE);
					$counter	=	1;
					foreach ($gatewayDeets as $gateway)
						{
						$checked	=	"";
						if ($counter==1)
							$checked="checked";
						$result		=	$MiniComponents->specificEvent('03108',$gateway->plugin,null);
						if (count($result)>1)
							{
							$gw['GWNAME']	=	$result['gatewayname'];
							$tmpgatewaydir	=	$result['filepath'];
							}
						else
							{
							$gw['GWNAME']	=	$gateway->plugin;
							$tmpgatewaydir	=	$result;
							}
						$gw['GWINPUT']		=	'<input type="radio" name="plugin" value="'.$gateway->plugin.'" class="inputbox" '.$checked.' />'.$gw['GWNAME'];
						$gatewaydir			=	str_replace(JOMRESCONFIG_ABSOLUTE_PATH,$jomresConfig_live_site,$tmpgatewaydir);
						$gw['GWIMAGE']		=	'<img src="'.$gatewaydir.'j00510'.$gateway->plugin.'.gif" border="0">';
						$gateways[]			=	$gw;
						$counter++;
						}
					}
				else
					{
					foreach ($gatewayDeets as $gateway)
						{
						$gw['GWINPUT']		=	'<input type="hidden" name="plugin" value="'.$gateway->plugin.'">';
						$gateways[]			=	$gw;
						}
					}
				}
			}

		$booking_parts['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
		$booking_parts['PROCESSURL']=JOMRES_SITEPAGE_URL.'&task=processpayment';
		$booking_parts['BOOKINGFORMURL']=JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.$bookingDeets['property_uid'].'';
		
		$booking_particulars[]	=	$booking_parts;
		$tmpl = new patTemplate();
		$tmpl->addRows( 'booking_particulars', $booking_particulars );
		$tmpl->addRows( 'booking_extras', $booking_extras);
		$tmpl->addRows( 'booking_extratext', $extrastext);
		$tmpl->addRows( 'booking_rooms', $booking_rooms);
		if (isset($gatewayDeets) && count($gatewayDeets)>0)
			{
			$tmpl->addRows( 'gateways', $gateways );
			}
		$componentArgs	=	array('tmpl'=>$tmpl);
		if ($mrConfig['singleRoomProperty'] == "0" && $MiniComponents->eventFileExistsCheck('00204'))
			{
			$MiniComponents->triggerEvent('00204',$componentArgs); //
			}
		elseif ($MiniComponents->eventFileExistsCheck('00206'))
			{
			$MiniComponents->triggerEvent('00206',$componentArgs); //
			}
		else
			{
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'bookings_showconfirmation.html');
			$tmpl->displayParsedTemplate();
			}

		$componentArgs	=	array('booking_parts'=>$booking_parts);
		// Trigger point. Not currently used, but available if somebody wants a trigger point after the confirm booking phase
		$MiniComponents->triggerEvent('03010',$componentArgs);
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKINGTITLE',_JOMRES_COM_MR_EDITBOOKINGTITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER);
		$output[]		=jr_gettext('_JOMRES_COM_MR_CONFIRMBOOKING',_JOMRES_COM_MR_CONFIRMBOOKING);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME',_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME',_JOMRES_FRONT_MR_DISPGUEST_SURNAME);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL) ;
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL) ;
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL) ;
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);
		$output[]		=jr_gettext('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE',_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY);
		$output[]		=jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_EXTRAS',_JOMRES_AJAXFORM_EXTRAS);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_EXTRAS_TOTAL',_JOMRES_AJAXFORM_EXTRAS_TOTAL);
		$output[]		=jr_gettext('_JOMRES_CONFIRMATION_HEADER',_JOMRES_CONFIRMATION_HEADER);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_PARTICULARS',_JOMRES_AJAXFORM_PARTICULARS);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_ADDRESS',_JOMRES_AJAXFORM_ADDRESS);
		$output[]		=jr_gettext('_JOMRES_CONFIRMATION_AMENDTEXT',_JOMRES_CONFIRMATION_AMENDTEXT);
		$output[]		=jr_gettext('_JOMRES_CONFIRMATION_AMEND',_JOMRES_CONFIRMATION_AMEND);
		$output[]		=jr_gettext('_JOMRES_CONFIRMATION_SPECIALS',_JOMRES_CONFIRMATION_SPECIALS);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_PRICE_SUMMARY',_JOMRES_AJAXFORM_PRICE_SUMMARY);
		$output[]		=jr_gettext('_JOMRES_CONFIRMATION_TERMS_PRETEXT',_JOMRES_CONFIRMATION_TERMS_PRETEXT);
		$output[]		=jr_gettext('_JOMRES_CONFIRMATION_ALERT',_JOMRES_CONFIRMATION_ALERT);
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