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
		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		
		$thisJRUser=jomres_getSingleton('jr_user');
		$mrConfig=getPropertySpecificSettings();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$amend_contract  = $tmpBookingHandler->getBookingFieldVal("amend_contract");
		
		$booking_parts=array();
		if ( !isset($tmpBookingHandler->tmpbooking["confirmationSeen"]) )
			$tmpBookingHandler->addNewBookingField("confirmationSeen");
		$tmpBookingHandler->updateBookingField("confirmationSeen",true);

		// if (isset($_REQUEST['override_room_total']) && $thisJRUser->userIsManager && !$amend_contract)
			// $tmpBookingHandler->updateBookingField("room_total",(float)$_REQUEST['override_room_total']  );
		// if (isset($_REQUEST['override_deposit']) && $thisJRUser->userIsManager && !$amend_contract)
			// $tmpBookingHandler->updateBookingField("deposit_required",(float)$_REQUEST['override_deposit']  );
		
		$tmpBookingHandler->saveBookingData();
		if ( !isset($tmpBookingHandler->tmpbooking["bookersUsername"]) )
			$tmpBookingHandler->addNewBookingField("bookersUsername");
		$tmpBookingHandler->updateBookingField("bookersUsername",$thisJRUser->username);

		$tmpBookingHandler->updateGuestField('firstname', jomresGetParam($_POST,'firstname','') );
		$tmpBookingHandler->updateGuestField('surname', jomresGetParam($_POST,'surname','') );
		$tmpBookingHandler->updateGuestField('house', jomresGetParam($_POST,'house','') );
		$tmpBookingHandler->updateGuestField('street', jomresGetParam($_POST,'street','') );
		$tmpBookingHandler->updateGuestField('town', jomresGetParam($_POST,'town','') );
		$tmpBookingHandler->updateGuestField('region', jomresGetParam($_POST,'region','') );
		$tmpBookingHandler->updateGuestField('country', jomresGetParam($_POST,'country','') );
		$tmpBookingHandler->updateGuestField('postcode', jomresGetParam($_POST,'postcode','') );
		$tmpBookingHandler->updateGuestField('tel_mobile', jomresGetParam($_POST,'tel_mobile','') );
		$tmpBookingHandler->updateGuestField('tel_landline', jomresGetParam($_POST,'tel_landline','') );
		$tmpBookingHandler->updateGuestField('email', jomresGetParam($_POST,'eemail','') );
		
		

		$currfmt = jomres_getSingleton('jomres_currency_format');

		// Trigger point
		$MiniComponents->triggerEvent('03000');

		$userIsManager	=	checkUserIsManager();

		$bookingDeets	=	gettempBookingdata();
		$tag			=	$bookingDeets['tag'];
		$property_uid	=	$bookingDeets['property_uid'];
		$mrConfig		=	getPropertySpecificSettings($property_uid);
		
		if ($amend_contract)
			{
			$amend_contractuid  = $tmpBookingHandler->getBookingFieldVal("amend_contractuid");
			$query = "SELECT special_reqs FROM #__jomres_contracts WHERE contract_uid = ".(int)$amend_contractuid." AND property_uid = ".(int)$property_uid;
			$booking_parts['SPECIALREQS']= doSelectSql($query,1);
			}

		property_header($property_uid);

		if (!$bookingDeets['ok_to_book'])
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&selectedProperty=".$bookingDeets['property_uid']), '' );

		$this->accommodation_tax_rate = 0.0;
		if (isset($mrConfig['accommodation_tax_code']) && (int)$mrConfig['accommodation_tax_code'] >0)
			{
			$taxrates = taxrates_getalltaxrates();
			$cfgcode = $mrConfig['accommodation_tax_code'];
			$taxrate = $taxrates[$cfgcode];
			$this->accommodation_tax_rate=(float)$taxrate['rate'];
			}
		$accommodation_tax_output = "";
		if ($this->accommodation_tax_rate > 0)
			$accommodation_tax_output = " (".$this->accommodation_tax_rate."%)";

		jr_import('jomres_custom_field_handler');
		$custom_fields = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();
		$customFields = array();
		if (count($allCustomFields)>0)
			{
			
			foreach ($allCustomFields as $f)
				{
				$required = $f['required'];
				$fieldname = $f['fieldname'];
				$formfieldname = $f['fieldname']."_".$f['uid'];
				$tmpBookingHandler->saveCustomFields($allCustomFields);
				
				$fielddata = array();
				$fielddata['DESCRIPTION']		= jr_gettext(JOMRES_CUSTOMTEXT.$f['uid'],$f['description']);
				$fielddata['VALUE']				=jomresGetParam( $_POST, $formfieldname, '' );
				
				if ($required == "1" && strlen($_POST[$formfieldname])== 0)
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&selectedProperty=".$bookingDeets['property_uid']), '' );
				
				$customFields[]=$fielddata;
				}
			}
		$tmpBookingHandler->saveBookingData();
		

		$booking_parts['PROPERTYNAME'] = getPropertyName($bookingDeets['property_uid']);

		$booking_parts['PROPERTY']		=	$bookingDeets['property_uid'];

		$booking_parts['HTOTAL']		=	jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL);
		$booking_parts['HGRANDTOTAL']	=	jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL);
		$booking_parts['HROOMSBOOKED']	=	jr_gettext('_JOMRES_FRONT_MR_BOOKED',_JOMRES_FRONT_MR_BOOKED);

		$booking_parts['TOTAL']			=	output_price($bookingDeets['contract_total']);

		$booking_parts['HDEPOSIT']		=	jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
		$booking_parts['DEPOSIT']		=	output_price($bookingDeets['deposit_required']);

		$booking_parts['EDITBOOKING']	=	jr_gettext('_JOMRES_COM_MR_EDITBOOKINGTITLE',_JOMRES_COM_MR_EDITBOOKINGTITLE);
		$booking_parts['ARRIVAL']		=	outputDate($bookingDeets['arrivalDate']);
		$booking_parts['DEPARTURE']		=	outputDate($bookingDeets['departureDate']);
		$booking_parts['DAYSSTAYING']	= 	$bookingDeets['stayDays'];
		if ($mrConfig['roomTaxYesNo']=="1" || $mrConfig['euroTaxYesNo']=="1")
			$booking_parts['TAX']		=	output_price($bookingDeets['tax']);
		else
			$booking_parts['TAX']		=	"";

		if ((float)$bookingDeets['coupon_discount_value'] > 0.0)
			{
			$booking_parts['HCOUPON_DISCOUNTVALUE']	=	jr_gettext('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE',_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE);
			$booking_parts['COUPON_DISCOUNT_VALUE']		=	output_price($bookingDeets['coupon_discount_value']);
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
						$fulldesc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$room_classes_uid,stripslashes($class->room_class_full_desc),false,false);
					}
				else
					{
					$query		=	"SELECT room_class_full_desc FROM #__jomres_room_classes WHERE property_uid = 0 and room_classes_uid = '$room_classes_uid'";
					$roomclass	=	doSelectSql($query);
					if (count($roomclass)>0)
						{
						foreach ($roomclass as $class)
							$fulldesc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$room_classes_uid,stripslashes($class->room_class_full_desc),false,false);
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
		
		if ($mrConfig['singleRoomProperty']!="1")
			$booking_parts['ALLOCATION']	= $bookingDeets['booking_notes']['suppliment_note'];
		
		$room_total = $bookingDeets['room_total'];
		$taxrates = taxrates_getalltaxrates();
		if (isset($mrConfig['accommodation_tax_code']) && (int)$mrConfig['accommodation_tax_code'] >0)
			{
			$cfgcode = $mrConfig['accommodation_tax_code'];
			$taxrate = $taxrates[$cfgcode];
			$rate=(float)$taxrate['rate'];
			$percentageToAdd=$room_total*($rate/100);
			$room_total=$room_total+$percentageToAdd;
			}

		$booking_parts['ROOMTOTAL']	=	output_price($room_total);

		

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

					$query			=	"SELECT price, name,tax_rate FROM #__jomres_extras WHERE uid = '$extra'";
					$thisPrice 		=	doSelectSql($query,2);
					$query			=	"SELECT `model`,`params` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '$extra'";
					$model			=	doSelectSql($query,2);
					switch ($model['model'])
						{
						case '1': // Per week
							$numberOfWeeks	=	ceil($bookingDeets['stayDays']/7);
							$calc			=	$numberOfWeeks*$thisPrice['price'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK);
						break;
						case '2': // per days
							$calc			=	$bookingDeets['stayDays']*$thisPrice['price'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS);
						break;
						case '3': // per booking
							$calc			=	$thisPrice['price'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING);
						break;
						case '4': // per person per booking
							$calc			=	$bookingDeets['total_in_party']*$thisPrice['price'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING);
						break;
						case '5': // per person per day
							$calc			=	$bookingDeets['total_in_party']*$bookingDeets['stayDays']*$thisPrice['price'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY);
						break;
						case '6': // per person per week
							$numberOfWeeks	=	ceil($bookingDeets['stayDays']/7);
							$calc			=	$bookingDeets['total_in_party']*$numberOfWeeks*$thisPrice['price'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK);
						break;
						case '7': // per person per days min days
							$mindays		=	$model['params'];
							if ($bookingDeets['total_in_party'] < $mindays)
								$days		=	$mindays;
							else
								$days		=	$bookingDeets['stayDays'];

							$calc			=	$days*$thisPrice['price'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS);
						break;
						case '8': // per days per room
							$calc=($bookingDeets['stayDays']*$thisPrice['price'])*(int)$booking_parts['NUMROOMS'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM);
						break;
						case '9': // per room
							$calc=$thisPrice['price']*(int)$booking_parts['NUMROOMS'];
							$model_text=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING);
						break;
						}
					
					$price = $calc;
					$tax_rate_id = (int)$thisPrice['tax_rate'];
					$rate = (float)$taxrates[$tax_rate_id]['rate'];
					if ($mrConfig['prices_inclusive'] == 1)
						{
						$divisor	= ($rate/100)+1;
						$nett_price=$price/$divisor;
						$price = $nett_price;
						}
					
					$tax = ($price/100)*$rate;
					$inc_price = $price+$tax;
					
					$extra_tax_output = "";
					if ($rate > 0)
						$extra_tax_output = " (".$rate."%)";
					
					$extra_name = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$extra , htmlspecialchars(trim(stripslashes($thisPrice['name'])), ENT_QUOTES) )." ( ".$model_text." )";
					
					$extra_parts['NAME'] 		= 	$extra_name." X ".$extrasquantities[$extra].$extra_tax_output;
					$extra_parts['PRICE'] 		= 	output_price($inc_price*$extrasquantities[$extra]);
					$booking_extras[]			=	$extra_parts;
					}
				}
			}
			
		$third_party_extras				= unserialize($tmpBookingHandler->getBookingFieldVal("third_party_extras"));
		if (count($third_party_extras)>0)
			{
			foreach ($third_party_extras as $plugin)
				{
				foreach ($plugin as $tpextra)
					{
					$extra_parts = array();
					$tmpTotal = (float)$tpextra['untaxed_grand_total'];
					if ((int)$tpextra['tax_code_id'] >0)
						{
						$tax_rate_id = $tpextra['tax_code_id'];
						$rate = (float)$taxrates[$tax_rate_id]['rate'];
						$thisTax = ($tmpTotal/100)*$rate;
						$tmpTotal = $tmpTotal + $thisTax;
						}
					$extra_parts['NAME'] 		= 	$tpextra['description'];
					$extra_parts['PRICE'] 		= 	output_price($tmpTotal);
					$booking_extras[]			=	$extra_parts;
					}
				}
			}
		
		if ($mrConfig['showExtras'])
			{
			$extratext	=	array();
			$extra_text['AJAXFORM_EXTRAS']		=	jr_gettext('_JOMRES_AJAXFORM_EXTRAS',_JOMRES_AJAXFORM_EXTRAS);
			$extra_text['EXTRASTOTAL']			=	output_price($bookingDeets['extrasvalue']);
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
		$booking_parts['ACCOMMODATION_TOTAL']	=	jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL).$accommodation_tax_output;
		$booking_parts['ACCOMMODATION_NIGHTS']	=	jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS);
		$booking_parts['ACCOMMODATION_PERROOM']	=	jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM);
		$booking_parts['PRICE_SUMMARY']			=	jr_gettext('_JOMRES_AJAXFORM_PRICE_SUMMARY',_JOMRES_AJAXFORM_PRICE_SUMMARY);
		$booking_parts['HTOTALINPARTY']			=	jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY);
		$booking_parts['TOTALINPARTY']			=	$bookingDeets['total_in_party'];
		
		if ((int)$bookingDeets['single_person_suppliment'] > 0)
			{
			$booking_parts['HSINGLEPERSON_COST']	=	jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST);
			$booking_parts['SINGLEPERSON_COST']		=	output_price($bookingDeets['single_person_suppliment']);
			}
			
		$booking_parts['LIVESITE']				=	get_showtime('live_site');
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
		
		if ($mrConfig['wholeday_booking'] == "1")
			{
			$booking_parts['HARRIVAL']			=	jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY);
			$booking_parts['HDEPARTURE']		=	jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY);
			}
		else
			{
			$booking_parts['HARRIVAL']			=	jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
			$booking_parts['HDEPARTURE']		=	jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
			}
			
		$booking_parts['HDAYSSTAYING']		=	jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS);
		$booking_parts['BOOKINGSPECIALREQ']	=	jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ);
		$booking_parts['DISCLAIMER']		=	jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER);
		
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		if (!$userIsManager&& isset($MiniComponents->registeredClasses['06000show_cart']) )
			{
			
			if ($paypal_settings->paypalConfigOptions['override'] == "1" && $jrConfig['useshoppingcart'] == "1")
				{
				
				$booking_parts['_JOMRES_CART_OR']			=jr_gettext('_JOMRES_CART_OR',_JOMRES_CART_OR);
				$booking_parts['_JOMRES_SAVEFORLATER']		='<input class="fg-button ui-state-default ui-corner-all" type="submit" id="send" name="send" value="'.jr_gettext('_JOMRES_SAVEFORLATER',_JOMRES_CART_SAVEFORLATER,false,false).'" class="button" onclick="return confirmation_validate(true);" />';
				}
			}

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

		$booking_parts['TERMS']				=	makePopupLink(JOMRES_SITEPAGE_URL."&task=terms&popup=1&tmpl=component&property_uid=$property_uid",jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS), TRUE,750,500);
		$booking_parts['TERMSPRETEXT']		=	jr_gettext('_JOMRES_CONFIRMATION_TERMS_PRETEXT',_JOMRES_CONFIRMATION_TERMS_PRETEXT);
		$booking_parts['TERMSTEXT']			=	jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS,false);
		$booking_parts['ALERT']				=	jr_gettext('_JOMRES_CONFIRMATION_ALERT',_JOMRES_CONFIRMATION_ALERT,false);

		
		if ($paypal_settings->paypalConfigOptions['override'] != "1")
			{
			if (!$userIsManager && $mrConfig['useOnlinepayment'] !="0" )
				{
				$gatewaylist 	= 	array();
				$gatewaydir		=	get_showtime('live_site')."/administrator/jomres/plugins/gateways/";
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
							$gatewaydir			=	str_replace(JOMRESCONFIG_ABSOLUTE_PATH,get_showtime('live_site'),$tmpgatewaydir);
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
			}
		$booking_parts['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
		$booking_parts['PROCESSURL']=JOMRES_SITEPAGE_URL.'&task=processpayment';
		$booking_parts['PROCESSURL_SAVETOCART']=JOMRES_SITEPAGE_URL.'&task=save_booking_to_cart';
		$booking_parts['BOOKINGFORMURL']=JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.$bookingDeets['property_uid'].'';
		
		
		// v 4.5.7 stripping out the room specific stuff into a new array.
		
		if (get_showtime('include_room_booking_functionality'))
			{
			$booking_room_specific = array();
			$booking_room_specific_info = array();
			$booking_room_specific['AJAXFORM_PARTICULARS']= $booking_parts['AJAXFORM_PARTICULARS'];
			$booking_room_specific['HARRIVAL']= $booking_parts['HARRIVAL'];
			$booking_room_specific['ARRIVAL']= $booking_parts['ARRIVAL'];
			$booking_room_specific['HDEPARTURE']= $booking_parts['HDEPARTURE'];
			$booking_room_specific['DEPARTURE']= $booking_parts['DEPARTURE'];
			$booking_room_specific['HDAYSSTAYING']= $booking_parts['HDAYSSTAYING'];
			$booking_room_specific['DAYSSTAYING']= $booking_parts['DAYSSTAYING'];
			$booking_room_specific['HTOTALINPARTY']= $booking_parts['HTOTALINPARTY'];
			$booking_room_specific['TOTALINPARTY']= $booking_parts['TOTALINPARTY'];
			$booking_room_specific['BILLING_ROOMTOTAL']= $booking_parts['BILLING_ROOMTOTAL'];
			$booking_room_specific['PROPERTYNAME']= $booking_parts['PROPERTYNAME'];
			$booking_room_specific['HROOMSBOOKED']= $booking_parts['HROOMSBOOKED'];
			$booking_room_specific['NUMROOMS']= $booking_parts['NUMROOMS'];
			$booking_room_specific['FULLDESC']= $booking_parts['FULLDESC'];
			$booking_room_specific['ALLOCATION']= $booking_parts['ALLOCATION'];
			$booking_room_specific['DISCOUNT']= $booking_parts['DISCOUNT'];
			$booking_room_specific['HSINGLEPERSON_COST']= $booking_parts['HSINGLEPERSON_COST'];
			$booking_room_specific['SINGLEPERSON_COST']= $booking_parts['SINGLEPERSON_COST'];
			$booking_room_specific['ACCOMMODATION_TOTAL']= $booking_parts['ACCOMMODATION_TOTAL'];
			$booking_room_specific['ROOMTOTAL']= $booking_parts['ROOMTOTAL'];
			$booking_room_specific_info[]=$booking_room_specific;
			}
			
			
		$booking_particulars[]	=	$booking_parts;
		$tmpl = new patTemplate();
		$tmpl->addRows( 'customfields',$customFields);
		$tmpl->addRows( 'booking_room_specific_info', $booking_room_specific_info );
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
		$output[]		=jr_gettext('_JOMRES_CART_SAVEFORLATER',_JOMRES_CART_SAVEFORLATER);
		
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