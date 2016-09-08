<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j02990showconfirmation
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$paypal_settings = jomres_singleton_abstract::getInstance( 'jrportal_paypal_settings' );
		$paypal_settings->get_paypal_settings();

		$thisJRUser        = jomres_singleton_abstract::getInstance( 'jr_user' );
		$mrConfig          = getPropertySpecificSettings();
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		
		$secret_key_payment = false;
		if (isset($_REQUEST['sk']))
			{
			$secret_key = jomresGetParam( $_REQUEST, 'sk', '' );
			jr_import('jomres_contract_secret_key');
			$jomres_contract_secret_key = new jomres_contract_secret_key();
			
			if ( $jomres_contract_secret_key->validate_secret_key($secret_key) )
				{
				if (!$jomres_contract_secret_key->check_secret_key_used($secret_key))
					{
					$contract_uid = $jomres_contract_secret_key->get_contract_id_for_secret_key($secret_key);
					$query = "SELECT data FROM #__jomres_booking_data_archive WHERE contract_uid = ".$contract_uid;
					$data = unserialize(doSelectSql( $query , 1 ));
					
					$tmpBookingHandler->tmpbooking		= $data['tmpbooking'];
					$tmpBookingHandler->tmpguest		= $data['tmpguest'];
	
					$secret_key_payment = true;
					$tmpBookingHandler->tmpbooking['approval_contract_uid']=$contract_uid;
					}
				else
					jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL), '' );
				}
			else
				{
				throw new Exception("Could not validate secret key ".$secret_key);
				}
			}
		
		$tmpBookingHandler->tmpbooking['secret_key_payment']=$secret_key_payment;

		$amend_contract    = $tmpBookingHandler->getBookingFieldVal( "amend_contract" );

		$booking_parts = array ();
		if ( !isset( $tmpBookingHandler->tmpbooking[ "confirmationSeen" ] ) ) 
			{
			$tmpBookingHandler->addNewBookingField( "confirmationSeen" );
			}
		$tmpBookingHandler->updateBookingField( "confirmationSeen", true );

		$tmpBookingHandler->saveBookingData();
		
		/* if ( !isset($_REQUEST['sk']))
			{
			$tmpBookingHandler->updateGuestField( 'firstname', jomresGetParam( $_POST, 'firstname', '' ) );
			$tmpBookingHandler->updateGuestField( 'surname', jomresGetParam( $_POST, 'surname', '' ) );
			$tmpBookingHandler->updateGuestField( 'house', jomresGetParam( $_POST, 'house', '' ) );
			$tmpBookingHandler->updateGuestField( 'street', jomresGetParam( $_POST, 'street', '' ) );
			$tmpBookingHandler->updateGuestField( 'town', jomresGetParam( $_POST, 'town', '' ) );
			$tmpBookingHandler->updateGuestField( 'region', jomresGetParam( $_POST, 'region', '' ) );
			$tmpBookingHandler->updateGuestField( 'country', jomresGetParam( $_POST, 'country', '' ) );
			$tmpBookingHandler->updateGuestField( 'postcode', jomresGetParam( $_POST, 'postcode', '' ) );
			$tmpBookingHandler->updateGuestField( 'tel_mobile', jomresGetParam( $_POST, 'tel_mobile', '' ) );
			$tmpBookingHandler->updateGuestField( 'tel_landline', jomresGetParam( $_POST, 'tel_landline', '' ) );
			if ( !$thisJRUser->userIsRegistered ) 
				$tmpBookingHandler->updateGuestField( 'email', jomresGetParam( $_POST, 'eemail', '' ) );
			} */

		$currfmt = jomres_singleton_abstract::getInstance( 'jomres_currency_format' );

		// Trigger point
		$MiniComponents->triggerEvent( '03000' );

		$userIsManager = checkUserIsManager();

		$bookingDeets = gettempBookingdata();
		$tag          = $bookingDeets[ 'tag' ];
		$property_uid = (int)$bookingDeets[ 'property_uid' ];
		
		if ( $property_uid == 0 ) 
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=search" ), '' );
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($property_uid);

		if ( $amend_contract )
			{
			$amend_contractuid              = $tmpBookingHandler->getBookingFieldVal( "amend_contractuid" );
			$query                          = "SELECT special_reqs FROM #__jomres_contracts WHERE contract_uid = " . (int) $amend_contractuid . " AND property_uid = " . (int) $property_uid;
			$booking_parts[ 'SPECIALREQS' ] = doSelectSql( $query, 1 );
			}

		property_header( $property_uid );

		if ( !$bookingDeets[ 'ok_to_book' ] ) 
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=dobooking&selectedProperty=" . $bookingDeets[ 'property_uid' ] ), '' );

		$this->accommodation_tax_rate = 0.0;
		
		if ( isset( $mrConfig[ 'accommodation_tax_code' ] ) && (int) $mrConfig[ 'accommodation_tax_code' ] > 0 )
			{
			$jrportal_taxrate = jomres_singleton_abstract::getInstance( 'jrportal_taxrate' );
			$taxrate_id = (int)$mrConfig[ 'accommodation_tax_code' ];
			$jrportal_taxrate->gather_data($taxrate_id);
			$this->accommodation_tax_rate = $jrportal_taxrate->rate;
			}
		$accommodation_tax_output = "";
		if ( $this->accommodation_tax_rate > 0 ) $accommodation_tax_output = " (" . $this->accommodation_tax_rate . "%)";

		$ptype_id = $current_property_details->ptype_id;
		
		$jomres_custom_field_handler = jomres_singleton_abstract::getInstance('jomres_custom_field_handler');
		$allCustomFields = $jomres_custom_field_handler->getAllCustomFieldsByPtypeId($ptype_id);
	
		$customFields    = array ();
		if ( count( $allCustomFields ) > 0 && !$secret_key_payment)
			{

			foreach ( $allCustomFields as $f )
				{
				$required      = $f[ 'required' ];
				$fieldname     = $f[ 'fieldname' ];
				$formfieldname = $f[ 'fieldname' ] . "_" . $f[ 'uid' ];
				$tmpBookingHandler->saveCustomFields( $allCustomFields );

				$fielddata                  = array ();
				$fielddata[ 'DESCRIPTION' ] = jr_gettext( 'JOMRES_CUSTOMTEXT' . $f[ 'uid' ], $f[ 'description' ] );
				$fielddata[ 'VALUE' ]       = jomresGetParam( $_POST, $formfieldname, '' );

				if ( $required == "1" && strlen( $_POST[ $formfieldname ] ) == 0 ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=dobooking&selectedProperty=" . $bookingDeets[ 'property_uid' ] ), '' );

				$customFields[ ] = $fielddata;
				}
			}
		$tmpBookingHandler->saveBookingData();

		$booking_parts[ 'PROPERTYNAME' ] = getPropertyName( $bookingDeets[ 'property_uid' ] );

		$booking_parts[ 'PROPERTY' ] = $bookingDeets[ 'property_uid' ];

		$booking_parts[ 'HTOTAL' ]       = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL' );
		$booking_parts[ 'HGRANDTOTAL' ]  = jr_gettext( '_JOMRES_AJAXFORM_BILLING_TOTAL', '_JOMRES_AJAXFORM_BILLING_TOTAL' );
		$booking_parts[ 'HROOMSBOOKED' ] = jr_gettext( '_JOMRES_FRONT_MR_BOOKED', '_JOMRES_FRONT_MR_BOOKED' );

		$booking_parts[ 'TOTAL' ] = output_price( $bookingDeets[ 'contract_total' ] );

		$booking_parts[ 'HDEPOSIT' ] = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED' );
		$booking_parts[ 'DEPOSIT' ]  = output_price( $bookingDeets[ 'deposit_required' ] );

		$booking_parts[ 'EDITBOOKING' ] = jr_gettext( '_JOMRES_COM_MR_EDITBOOKINGTITLE', '_JOMRES_COM_MR_EDITBOOKINGTITLE' );
		$booking_parts[ 'ARRIVAL' ]     = outputDate( $bookingDeets[ 'arrivalDate' ] );
		
		if ( $mrConfig[ 'showdepartureinput' ] == "1" ) 
			$booking_parts[ 'DEPARTURE' ] = outputDate( $bookingDeets[ 'departureDate' ] );
		
		$booking_parts[ 'DAYSSTAYING' ] = $bookingDeets[ 'stayDays' ];
		
		if ( $mrConfig[ 'roomTaxYesNo' ] == "1" || $mrConfig[ 'euroTaxYesNo' ] == "1" ) 
			$booking_parts[ 'TAX' ] = output_price( $bookingDeets[ 'tax' ] );
		else
			$booking_parts[ 'TAX' ] = "";

		if ( (float) $bookingDeets[ 'coupon_discount_value' ] > 0.0 )
			{
			$booking_parts[ 'HCOUPON_DISCOUNTVALUE' ] = jr_gettext( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE' );
			$booking_parts[ 'COUPON_DISCOUNT_VALUE' ] = output_price( $bookingDeets[ 'coupon_discount_value' ] );
			}

		$booking_parts[ 'DISCOUNT' ] = '';
		$booking_parts[ 'BGCOLOUR' ] = '';
		if ( $bookingDeets[ 'booking_discounted' ] == true )
			{
			if ( $mrConfig[ 'singleRoomProperty' ] == 1 )
				{
				$booking_parts[ 'DISCOUNT' ] = $bookingDeets[ 'lastminutediscount' ];
				$booking_parts[ 'BGCOLOUR' ] = $mrConfig[ 'inputBoxErrorBackground' ];
				}
			else
				{
				$booking_parts[ 'DISCOUNT' ] = $bookingDeets[ 'wisepricediscount' ];
				$booking_parts[ 'BGCOLOUR' ] = $mrConfig[ 'inputBoxErrorBackground' ];
				}
			}

		$requestedrooms              = $bookingDeets[ 'requestedRoom' ];
		$rooms                       = explode( ",", $requestedrooms );
		$booking_parts[ 'NUMROOMS' ] = count( $rooms );

		foreach ( $rooms as $r )
			{
			$rm       = explode( "^", $r );
			if ($rm[ 0 ] != '')
				$rmids[ ] = $rm[ 0 ];
			}

		
		if ( $mrConfig[ 'singleRoomProperty' ] == 0 )
			{
			$mrp_room_details = array();
			$mrp_room_details[0][ 'HROOMSBOOKED' ]         = $booking_parts[ 'HROOMSBOOKED' ];
			$mrp_room_details[0][ 'PROPERTYNAME' ]         = $booking_parts[ 'PROPERTYNAME' ];
			$mrp_room_details[0][ 'NUMROOMS' ]             = $booking_parts[ 'NUMROOMS' ];

		
			if (count($rmids) > 0)
				{
				$query         = "SELECT room_number,room_name,room_classes_uid FROM #__jomres_rooms WHERE room_uid IN (".jomres_implode($rmids).") ORDER BY room_classes_uid";
				$roomList      = doSelectSql( $query );
				$roomNumber    = "";
				$room_name     = "";
				$prevroomclass = 0;
		
				$room_info = array ();
				foreach ( $roomList as $room )
					{
					$roomtype = array ();
					if ( $roomNumber == "" ) $roomNumber = $room->room_number;
					else
					$roomNumber .= ', ' . $room->room_number;
					$room_name        = $room->room_name;
					$room_classes_uid = $room->room_classes_uid;
		
					$room_info[ ] = array ( "ROOM_NAME" => $room_name, "ROOM_NUMBER" => $room->room_number, "HROOM_NAME" => jr_gettext( "_JOMRES_COM_MR_EB_ROOM_NAME","_JOMRES_COM_MR_EB_ROOM_NAME",false ), "HROOM_NUMBER" => jr_gettext( "_JOMRES_COM_MR_EB_ROOM_NUMBER" , "_JOMRES_COM_MR_EB_ROOM_NUMBER" ) );
					

								
					if ( $room_classes_uid != $prevroomclass )
						{
						if ( $prevroomclass != 0 )
							{
							//output previous room
							$roomtype[ 'FULLDESC' ] = $roomadd . " x " . $fulldesc;
							$booking_rooms[ ]       = $roomtype;
							$prevroomclass          = $room_classes_uid;
							}
						else
							$prevroomclass = $room_classes_uid;
		
						$roomadd   = 1;
						$query     = "SELECT room_class_full_desc FROM #__jomres_room_classes WHERE property_uid = '" . (int) $property_uid . "' and room_classes_uid = '" . (int) $room_classes_uid . "' ";
						$roomclass = doSelectSql( $query );
		
						if ( count( $roomclass ) > 0 )
							{
							foreach ( $roomclass as $class ) $fulldesc = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC' . (int) $room_classes_uid, stripslashes( $class->room_class_full_desc ), false, false );
							}
						else
							{
							$query     = "SELECT room_class_abbv FROM #__jomres_room_classes WHERE property_uid = 0 and room_classes_uid = '$room_classes_uid'";
							$roomclass = doSelectSql( $query );
							if ( count( $roomclass ) > 0 )
								{
								foreach ( $roomclass as $class ) $fulldesc = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV' . $room_classes_uid, stripslashes( $class->room_class_abbv ), false, false );
								}
							}
						}
					else
						{
						$roomadd++;
						}
					}
		
				$roomtype[ 'FULLDESC' ] = $roomadd . " x " . $fulldesc;
				$booking_rooms[ ]       = $roomtype;
				}
			}
		
		$booking_parts[ 'ALLOCATION' ] = '';
		if ( $mrConfig[ 'singleRoomProperty' ] != "1" )
			{
			if (!isset($bookingDeets[ 'booking_notes' ][ 'suppliment_note' ]))
				$bookingDeets[ 'booking_notes' ][ 'suppliment_note' ] = '';
			
			$booking_parts[ 'ALLOCATION' ] = $bookingDeets[ 'booking_notes' ][ 'suppliment_note' ];
			}
		$room_total = $bookingDeets[ 'room_total' ];
		
		$jrportal_taxrate = jomres_singleton_abstract::getInstance( 'jrportal_taxrate' );
		
		if ( isset( $mrConfig[ 'accommodation_tax_code' ] ) && (int) $mrConfig[ 'accommodation_tax_code' ] > 0 )
			{
			$cfgcode         = $mrConfig[ 'accommodation_tax_code' ];
			$rate            = (float) $jrportal_taxrate->taxrates[ $cfgcode ][ 'rate' ];
			$percentageToAdd = $room_total * ( $rate / 100 );
			$room_total      = $room_total + $percentageToAdd;
			}

		$booking_parts[ 'ROOMTOTAL' ] = output_price( $room_total );

		$booking_extras = array();
		if ( $mrConfig[ 'showExtras' ] == "1" )
			{
			$extras           = $bookingDeets[ 'extras' ];
			$extrasquantities = $bookingDeets[ 'extrasquantities' ];
			$extrasArray      = explode( ",", $extras );
			foreach ( $extrasArray as $extraAll )
				{
				if ( !empty( $extraAll ) )
					{
					$extra = $extraAll;

					$query     = "SELECT price, name,tax_rate FROM #__jomres_extras WHERE uid = '$extra'";
					$thisPrice = doSelectSql( $query, 2 );
					$query     = "SELECT `model`,`params` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '$extra'";
					$model     = doSelectSql( $query, 2 );
					switch ( $model[ 'model' ] )
					{
						case '1': // Per week
							$numberOfWeeks = ceil( $bookingDeets[ 'stayDays' ] / 7 );
							$calc          = $numberOfWeeks * $thisPrice[ 'price' ];
							$model_text    = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK' );
							break;
						case '2': // per days
							$calc       = $bookingDeets[ 'stayDays' ] * $thisPrice[ 'price' ];
							$model_text = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS' );
							break;
						case '3': // per booking
							$calc       = $thisPrice[ 'price' ];
							$model_text = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING' );
							break;
						case '4': // per person per booking
							$calc       = $bookingDeets[ 'total_in_party' ] * $thisPrice[ 'price' ];
							$model_text = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING' );
							break;
						case '5': // per person per day
							$calc       = $bookingDeets[ 'total_in_party' ] * $bookingDeets[ 'stayDays' ] * $thisPrice[ 'price' ];
							$model_text = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY' );
							break;
						case '6': // per person per week
							$numberOfWeeks = ceil( $bookingDeets[ 'stayDays' ] / 7 );
							$calc          = $bookingDeets[ 'total_in_party' ] * $numberOfWeeks * $thisPrice[ 'price' ];
							$model_text    = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK' );
							break;
						case '7': // per person per days min days
							$mindays = $model[ 'params' ];
							if ( $bookingDeets[ 'total_in_party' ] < $mindays ) $days = $mindays;
							else
							$days = $bookingDeets[ 'stayDays' ];

							$calc       = $days * $thisPrice[ 'price' ];
							$model_text = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS' );
							break;
						case '8': // per days per room
							$calc       = ( $bookingDeets[ 'stayDays' ] * $thisPrice[ 'price' ] ) * (int) $booking_parts[ 'NUMROOMS' ];
							$model_text = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM' );
							break;
						case '9': // per room
							$calc       = $thisPrice[ 'price' ] * (int) $booking_parts[ 'NUMROOMS' ];
							$model_text = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING' );
							break;
						case '100': // commission
							$calc       = ($room_total/100)*$thisPrice[ 'price' ];
							$model_text = jr_gettext( '_JOMRES_COMMISSION', '_JOMRES_COMMISSION' );
							break;
					}

					$price       = $calc;
					$tax_rate_id = (int) $thisPrice[ 'tax_rate' ];
					$rate        = (float) $jrportal_taxrate->taxrates[ $tax_rate_id ][ 'rate' ];
					if ( $mrConfig[ 'prices_inclusive' ] == 1 )
						{
						$divisor    = ( $rate / 100 ) + 1;
						$nett_price = $price / $divisor;
						$price      = $nett_price;
						}

					$tax       = ( $price / 100 ) * $rate;
					$inc_price = $price + $tax;

					$extra_tax_output = "";
					if ( $rate > 0 ) $extra_tax_output = " (" . $rate . "%)";

					$extra_name = jr_gettext( '_JOMRES_CUSTOMTEXT_EXTRANAME' . $extra, htmlspecialchars( trim( stripslashes( $thisPrice[ 'name' ] ) ), ENT_QUOTES ) ) . " ( " . $model_text . " )";

					$extra_parts[ 'NAME' ]  = $extra_name . " X " . $extrasquantities[ $extra ] . $extra_tax_output;
					$extra_parts[ 'PRICE' ] = output_price( $inc_price * $extrasquantities[ $extra ] );
					$booking_extras[ ]      = $extra_parts;
					}
				}
			}

		$third_party_extras = unserialize( $tmpBookingHandler->getBookingFieldVal( "third_party_extras" ) );
		if ( count( $third_party_extras ) > 0 && $third_party_extras !== false )
			{
			foreach ( $third_party_extras as $plugin )
				{
				foreach ( $plugin as $tpextra )
					{
					$extra_parts = array ();
					$tmpTotal    = (float) $tpextra[ 'untaxed_grand_total' ];
					/* if ( (int) $tpextra[ 'tax_code_id' ] > 0 )
						{
						$tax_rate_id = $tpextra[ 'tax_code_id' ];
						$rate        = (float) $jrportal_taxrate->taxrates[ $tax_rate_id ][ 'rate' ];
						
						if ( $mrConfig['prices_inclusive'] == 0 && $rate > 0 )
							{
							$thisTax     = ( $tmpTotal / 100 ) * $rate;
							$tmpTotal    = $tmpTotal + $thisTax;
							}
						} */
					$extra_parts[ 'NAME' ]  = $tpextra[ 'description' ];
					$extra_parts[ 'PRICE' ] = output_price( $tmpTotal );
					$booking_extras[ ]      = $extra_parts;
					}
				}
			}

		if ( $mrConfig[ 'showExtras' ] )
			{
			$extratext                       = array ();
			$extra_text[ 'AJAXFORM_EXTRAS' ] = jr_gettext( '_JOMRES_AJAXFORM_EXTRAS', '_JOMRES_AJAXFORM_EXTRAS' );
			$extra_text[ 'EXTRASTOTAL' ]     = output_price( $bookingDeets[ 'extrasvalue' ] );
			$extra_text[ 'HEXTRASTOTAL' ]    = jr_gettext( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', '_JOMRES_AJAXFORM_EXTRAS_TOTAL' );
			$extrastext[ ]                   = $extra_text;
			}

		$booking_parts[ 'HEADER' ]                = jr_gettext( '_JOMRES_CONFIRMATION_HEADER', '_JOMRES_CONFIRMATION_HEADER' );
		$booking_parts[ 'AJAXFORM_PARTICULARS' ]  = jr_gettext( '_JOMRES_AJAXFORM_PARTICULARS', '_JOMRES_AJAXFORM_PARTICULARS' );
		$booking_parts[ 'BILLING_ROOMTOTAL' ]     = jr_gettext( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL' );
		$booking_parts[ 'AJAXFORM_ADDRESS' ]      = jr_gettext( '_JOMRES_AJAXFORM_ADDRESS', '_JOMRES_AJAXFORM_ADDRESS' );
		$booking_parts[ 'AMENDTEXT' ]             = jr_gettext( '_JOMRES_CONFIRMATION_AMENDTEXT', '_JOMRES_CONFIRMATION_AMENDTEXT' );
		
		if ($mrConfig[ 'requireApproval' ] == "1" && !$thisJRUser->userIsManager && !$secret_key_payment)
			$booking_parts[ 'AMEND' ]             = jr_gettext( '_JOMRES_BOOKING_ENQUIRY_AMEND', '_JOMRES_BOOKING_ENQUIRY_AMEND', false );
		else
			$booking_parts[ 'AMEND' ]             = jr_gettext( '_JOMRES_CONFIRMATION_AMEND', '_JOMRES_CONFIRMATION_AMEND', false );

		$booking_parts[ 'SPECIALS' ]              = jr_gettext( '_JOMRES_CONFIRMATION_SPECIALS', '_JOMRES_CONFIRMATION_SPECIALS' );
		$booking_parts[ 'ACCOMMODATION_TOTAL' ]   = jr_gettext( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL' ) . $accommodation_tax_output;
		$booking_parts[ 'ACCOMMODATION_NIGHTS' ]  = jr_gettext( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS' );
		$booking_parts[ 'ACCOMMODATION_PERROOM' ] = jr_gettext( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM' );
		$booking_parts[ 'PRICE_SUMMARY' ]         = jr_gettext( '_JOMRES_AJAXFORM_PRICE_SUMMARY', '_JOMRES_AJAXFORM_PRICE_SUMMARY' );
		if ( get_showtime( 'include_room_booking_functionality' ) )
			{
			$booking_parts[ 'HTOTALINPARTY' ] = jr_gettext( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY' );
			}
		$booking_parts[ 'TOTALINPARTY' ] = $bookingDeets[ 'total_in_party' ];

		if ( (int) $bookingDeets[ 'single_person_suppliment' ] > 0 )
			{
			$booking_parts[ 'HSINGLEPERSON_COST' ] = jr_gettext( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST' );
			$booking_parts[ 'SINGLEPERSON_COST' ]  = output_price( $bookingDeets[ 'single_person_suppliment' ] );
			}

		$booking_parts[ 'LIVESITE' ] = get_showtime( 'live_site' );
		if ( isset( $_POST[ 'specialReqs' ] ) )
			{
			$booking_parts[ 'HSPECIAL_REQUIREMENTS' ] = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ' );
			$booking_parts[ 'SPECIAL_REQUIREMENTS' ]  = getEscaped( jomresGetParam( $_POST, 'specialReqs', "" ) );
			}
		$guestList                    = $tmpBookingHandler->getGuestData();
		$booking_parts[ 'FIRSTNAME' ] = $guestList[ 'firstname' ];
		$booking_parts[ 'SURNAME' ]   = $guestList[ 'surname' ];
		$booking_parts[ 'HOUSENO' ]   = $guestList[ 'house' ];
		$booking_parts[ 'STREET' ]    = $guestList[ 'street' ];
		$booking_parts[ 'TOWN' ]      = $guestList[ 'town' ];
		$booking_parts[ 'COUNTY' ]    = find_region_name( $guestList[ 'region' ] );
		$booking_parts[ 'COUNTRY' ]   = getSimpleCountry( $guestList[ 'country' ] );
		$booking_parts[ 'POSTCODE' ]  = $guestList[ 'postcode' ];
		$booking_parts[ 'LANDLINE' ]  = $guestList[ 'tel_landline' ];
		$booking_parts[ 'MOBILE' ]    = $guestList[ 'tel_mobile' ];
		$booking_parts[ 'EMAIL' ]     = $guestList[ 'email' ];

		if ( $mrConfig[ 'wholeday_booking' ] == "1" )
			{
			$booking_parts[ 'HARRIVAL' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY' );
			if ( $mrConfig[ 'showdepartureinput' ] == "1" ) $booking_parts[ 'HDEPARTURE' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY' );
			}
		else
			{
			$booking_parts[ 'HARRIVAL' ]   = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL' );
			$booking_parts[ 'HDEPARTURE' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE' );
			}

		$booking_parts[ 'HDAYSSTAYING' ]      = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS' );
		$booking_parts[ 'BOOKINGSPECIALREQ' ] = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ' );
		$booking_parts[ 'DISCLAIMER' ]        = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER');

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		if ($mrConfig[ 'requireApproval' ] == "1" && !$thisJRUser->userIsManager && !$secret_key_payment)
			$booking_parts[ 'THEBUTTON' ] = jr_gettext( '_JOMRES_BOOKING_ENQUIRY_CONFIRM', '_JOMRES_BOOKING_ENQUIRY_CONFIRM', false );
		else
			$booking_parts[ 'THEBUTTON' ] = jr_gettext( '_JOMRES_COM_MR_CONFIRMBOOKING', '_JOMRES_COM_MR_CONFIRMBOOKING', false );

		$booking_parts[ 'HFIRSTNAME' ] = jr_gettext( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME' );
		$booking_parts[ 'HSURNAME' ]   = jr_gettext( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '_JOMRES_FRONT_MR_DISPGUEST_SURNAME' );
		$booking_parts[ 'HHOUSENO' ]   = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL' );
		$booking_parts[ 'HSTREET' ]    = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL' );
		$booking_parts[ 'HTOWN' ]      = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL' );
		$booking_parts[ 'HPOSTCODE' ]  = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL' );
		$booking_parts[ 'HREGION' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
		$booking_parts[ 'HCOUNTRY' ]   = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
		$booking_parts[ 'HTEL' ]       = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL' );
		$booking_parts[ 'HMOBILE' ]    = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL' );
		$booking_parts[ 'HEMAIL' ]     = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL' );
		if ( $mrConfig[ 'roomTaxYesNo' ] == "1" || $mrConfig[ 'euroTaxYesNo' ] == "1" ) $booking_parts[ 'HTAX' ] = jr_gettext( '_JOMRES_COM_FRONT_ROOMTAX', '_JOMRES_COM_FRONT_ROOMTAX' );
		else
		$booking_parts[ 'HTAX' ] = "";

		$booking_parts[ 'TERMS' ]        = makePopupLink( JOMRES_SITEPAGE_URL . "&task=terms&popup=1&tmpl=".get_showtime("tmplcomponent")."&property_uid=$property_uid", jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS' ), true, 750, 500 );
		$booking_parts[ 'TERMS_NO_POPUP' ]        = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS' , false, false );
		$booking_parts[ 'TERMSPRETEXT' ] = jr_gettext( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', '_JOMRES_CONFIRMATION_TERMS_PRETEXT' );
		$booking_parts[ 'TERMSTEXT' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', false );
		$booking_parts[ 'ALERT' ]        = jr_gettext( '_JOMRES_CONFIRMATION_ALERT', '_JOMRES_CONFIRMATION_ALERT', false );

		$site_paypal_settings = get_plugin_settings("paypal",0);
		$gatewayDeets = array();
		if ((int)$mrConfig['requireApproval'] == 0 || $secret_key_payment )
			{
			if ( !$userIsManager )
				{
				$gateway_output = array();
				$gwo = array();
				
				if ( !isset( $site_paypal_settings['override']))
					 $site_paypal_settings['override'] = "0";
				
				if ( $site_paypal_settings['override'] == "1" && count($MiniComponents->registeredClasses['00509paypal']) > 0 )
					{
					$gateways = array ();
					$gw = array();
					$gw[ 'GWNAME' ] = "Paypal";
					$gw[ 'GWINPUT' ] = '<input type="radio" name="plugin" value="paypal" checked /> Paypal ';
					$gw[ 'GWIMAGE' ] = '<img src="' .get_showtime( 'live_site' ). '/'.JOMRES_ROOT_DIRECTORY.'/core-plugins/core_gateway_paypal/j00510paypal.gif" border="0">';
					$gatewayDeets = array (1); // Further down we'll check that $gatewayDeets is set to decide if we show the output
					$gateways[ ]     = $gw;
					}
				else
					{
					$gatewaylist  = array ();
					$query        = "SELECT id,plugin FROM #__jomres_pluginsettings WHERE prid = '" . (int) $property_uid . "' AND setting = 'active' AND value = '1'";
					$gatewayDeets = doSelectSql( $query );
					$gateways = array ();
					if ( count( $gatewayDeets ) == 0 )
						{
						$query        = "SELECT id,plugin FROM #__jomres_pluginsettings WHERE prid = 0 AND setting = 'active' AND value = '1'";
						$gatewayDeets = doSelectSql( $query );
						}
					
					if ( count( $gatewayDeets ) > 0 )
						{
						
						$counter                               = 1;
						foreach ( $gatewayDeets as $gateway )
							{
							$gateway_existance_minicomponent = '00509'.$gateway->plugin;
							
							if ( isset( $MiniComponents->registeredClasses[ $gateway_existance_minicomponent ] ) )
								{
								$gw = array();
								$checked = "";
								if ( $counter == 1 ) $checked = "checked";
								$result = $MiniComponents->specificEvent( '03108', $gateway->plugin, null );
								
								if ( count( $result ) > 1 )
									{
									$gw[ 'GWNAME' ] = $result[ 'gatewayname' ];
									$tmpgatewaydir  = $result[ 'filepath' ];
									}
								else
									{
									$gw[ 'GWNAME' ] = $gateway->plugin;
									$tmpgatewaydir  = $result;
									}
								$gw[ 'GWINPUT' ] = '<input type="radio" name="plugin" value="' . $gateway->plugin . '" ' . $checked . ' /> ' . $gw[ 'GWNAME' ];
								$gatewaydir      = str_replace( JOMRESCONFIG_ABSOLUTE_PATH, get_showtime( 'live_site' ).'/', $tmpgatewaydir );
								$gatewaydir      = str_replace( '\\', '/', $gatewaydir );
								$gw[ 'GWIMAGE' ] = '<img src="' . $gatewaydir . 'j00510' . $gateway->plugin . '.gif" border="0">';
								
								$gw_configuration_script = '00509'.$gateway->plugin;
								if (count($MiniComponents->registeredClasses[$gw_configuration_script]) > 0) // Let's check that the site manager hasn't uninstalled the plugin. If count == 0, then they have, we don't want to attempt to show this gateway
									{
									$gateways[ ]     = $gw;
									}
								$counter++;
								}
							}
						}
					}
				if ( count($gateways)>0)
					{
					$gwo[ 'GATEWAYCHOICEINTRO' ] = jr_gettext( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE' );
					$gateway_output[]=$gwo;
					}
				}
			}

		$booking_parts[ 'PROCESSURL' ]            = jomresURL( JOMRES_SITEPAGE_URL_NOSEF . "&task=processpayment" );
		$booking_parts[ 'PROCESSURL_SAVETOCART' ] = jomresURL( JOMRES_SITEPAGE_URL_NOSEF . "&task=save_booking_to_cart" );
		
		if ($amend_contract)
			{
			$amend_contractuid              = $tmpBookingHandler->getBookingFieldVal( "amend_contractuid" );
			$booking_parts[ 'BOOKINGFORMURL' ]        =jomresURL(JOMRES_SITEPAGE_URL_NOSEF . '&task=amendBooking&no_html=1&contractUid=' . $amend_contractuid);
			}
		else
			$booking_parts[ 'BOOKINGFORMURL' ]        = jomresURL( JOMRES_SITEPAGE_URL_NOSEF . "&task=dobooking&selectedProperty=" . $bookingDeets[ 'property_uid' ] );

		$cartoutput = array ();
		if ( isset( $MiniComponents->registeredClasses[ '06000show_cart' ] ) )
			{

			if ( ( $site_paypal_settings['override'] == "1" && $jrConfig[ 'useshoppingcart' ] == "1" ) || count( $gatewayDeets ) == 0 )
				{
				$booking_parts[ '_JOMRES_CART_OR' ]      = jr_gettext( '_JOMRES_CART_OR', '_JOMRES_CART_OR' );
				$booking_parts[ '_JOMRES_SAVEFORLATER' ] = '<input class="fg-button ui-state-default ui-corner-all" type="submit" id="send" name="send" value="' . jr_gettext( '_JOMRES_CART_SAVEFORLATER', '_JOMRES_CART_SAVEFORLATER', false, false ) . '" class="button" onclick="return confirmation_validate(true);" />';
				$cartoutput[ ]                           = array ( "_JOMRES_SAVEFORLATER" => jr_gettext( '_JOMRES_CART_SAVEFORLATER', '_JOMRES_CART_SAVEFORLATER', false, false ), "_JOMRES_CART_OR" => $booking_parts[ '_JOMRES_CART_OR' ] );

				}
			}
		// v 4.5.7 stripping out the room specific stuff into a new array.

		if ( get_showtime( 'include_room_booking_functionality' ) )
			{
			if (!isset($booking_parts[ 'FULLDESC' ]))
				$booking_parts[ 'FULLDESC' ] = '';
			if (!isset($booking_parts[ 'HSINGLEPERSON_COST' ]))
				$booking_parts[ 'HSINGLEPERSON_COST' ] = '';
			if (!isset($booking_parts[ 'SINGLEPERSON_COST' ]))
				$booking_parts[ 'SINGLEPERSON_COST' ] = '';
			
			$booking_room_specific                           = array ();
			$booking_room_specific_info                      = array ();
			$booking_room_specific[ 'AJAXFORM_PARTICULARS' ] = $booking_parts[ 'AJAXFORM_PARTICULARS' ];
			$booking_room_specific[ 'HARRIVAL' ]             = $booking_parts[ 'HARRIVAL' ];
			$booking_room_specific[ 'ARRIVAL' ]              = $booking_parts[ 'ARRIVAL' ];
			$booking_room_specific[ 'HDEPARTURE' ]           = $booking_parts[ 'HDEPARTURE' ];
			$booking_room_specific[ 'DEPARTURE' ]            = $booking_parts[ 'DEPARTURE' ];
			$booking_room_specific[ 'HDAYSSTAYING' ]         = $booking_parts[ 'HDAYSSTAYING' ];
			$booking_room_specific[ 'DAYSSTAYING' ]          = $booking_parts[ 'DAYSSTAYING' ];
			$booking_room_specific[ 'HTOTALINPARTY' ]        = $booking_parts[ 'HTOTALINPARTY' ];
			$booking_room_specific[ 'TOTALINPARTY' ]         = $booking_parts[ 'TOTALINPARTY' ];
			$booking_room_specific[ 'BILLING_ROOMTOTAL' ]    = $booking_parts[ 'BILLING_ROOMTOTAL' ];

			
			$booking_room_specific[ 'FULLDESC' ]             = $booking_parts[ 'FULLDESC' ];
			$booking_room_specific[ 'ALLOCATION' ]           = $booking_parts[ 'ALLOCATION' ];
			$booking_room_specific[ 'DISCOUNT' ]             = $booking_parts[ 'DISCOUNT' ];
			$booking_room_specific[ 'HSINGLEPERSON_COST' ]   = $booking_parts[ 'HSINGLEPERSON_COST' ];
			$booking_room_specific[ 'SINGLEPERSON_COST' ]    = $booking_parts[ 'SINGLEPERSON_COST' ];
			$booking_room_specific[ 'ACCOMMODATION_TOTAL' ]  = $booking_parts[ 'ACCOMMODATION_TOTAL' ];
			$booking_room_specific[ 'ROOMTOTAL' ]            = $booking_parts[ 'ROOMTOTAL' ];
			$booking_room_specific_info[ ]                   = $booking_room_specific;
			}

		$booking_parts['TERMS_MODAL_CONTENTS'] = $MiniComponents->specificEvent( '06000', 'terms' , array( "return_template" => true ) );

		$booking_particulars[ ] = $booking_parts;
		$tmpl                   = new patTemplate();
		
		if (get_showtime( 'include_room_booking_functionality' ))
			{
			if ($mrConfig[ 'singleRoomProperty' ] == 0)
				{
				$tmpl->addRows( 'mrp_room_details', $mrp_room_details );
				$tmpl->addRows( 'room_info', $room_info );
				$tmpl->addRows( 'booking_rooms', $booking_rooms );
				}
			$tmpl->addRows( 'booking_room_specific_info', $booking_room_specific_info );
			}
		
		$tmpl->addRows( 'customfields', $customFields );
		$tmpl->addRows( 'booking_particulars', $booking_particulars );
		$tmpl->addRows( 'booking_extras', $booking_extras );
		$tmpl->addRows( 'booking_extratext', $extrastext );
		
		$tmpl->addRows( 'cartoutput', $cartoutput );
		if ( isset( $gatewayDeets ) && count( $gatewayDeets ) > 0 )
			{
			$tmpl->addRows( 'gateway_output', $gateway_output );
			$tmpl->addRows( 'gateways', $gateways );
			}
		$componentArgs = array ( 'tmpl' => $tmpl );
		if ( $mrConfig[ 'singleRoomProperty' ] == "0" && $MiniComponents->eventFileExistsCheck( '00204' ) )
			{
			$MiniComponents->triggerEvent( '00204', $componentArgs ); //
			}
		elseif ( $MiniComponents->eventFileExistsCheck( '00206' ) )
			{
			$MiniComponents->triggerEvent( '00206', $componentArgs ); //
			}
		else
			{
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			if ( get_showtime( 'include_room_booking_functionality' ) )
				$tmpl->readTemplatesFromInput( 'bookings_showconfirmation.html' );
			else
				$tmpl->readTemplatesFromInput( 'bookings_showconfirmation_norooms.html' );
			$tmpl->displayParsedTemplate();
			}

		$componentArgs = array ( 'booking_parts' => $booking_parts );
		// Trigger point. Not currently used, but available if somebody wants a trigger point after the confirm booking phase
		$MiniComponents->triggerEvent( '03010', $componentArgs );
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EDITBOOKINGTITLE', '_JOMRES_COM_MR_EDITBOOKINGTITLE' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_CONFIRMBOOKING', '_JOMRES_COM_MR_CONFIRMBOOKING' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '_JOMRES_FRONT_MR_DISPGUEST_SURNAME' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL' );
		$output[ ] = jr_gettext( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY' );
		$output[ ] = jr_gettext( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_EXTRAS', '_JOMRES_AJAXFORM_EXTRAS' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', '_JOMRES_AJAXFORM_EXTRAS_TOTAL' );
		$output[ ] = jr_gettext( '_JOMRES_CONFIRMATION_HEADER', '_JOMRES_CONFIRMATION_HEADER' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_PARTICULARS', '_JOMRES_AJAXFORM_PARTICULARS' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_ADDRESS', '_JOMRES_AJAXFORM_ADDRESS' );
		$output[ ] = jr_gettext( '_JOMRES_CONFIRMATION_AMENDTEXT', '_JOMRES_CONFIRMATION_AMENDTEXT' );
		$output[ ] = jr_gettext( '_JOMRES_CONFIRMATION_AMEND', '_JOMRES_CONFIRMATION_AMEND' );
		$output[ ] = jr_gettext( '_JOMRES_CONFIRMATION_SPECIALS', '_JOMRES_CONFIRMATION_SPECIALS' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM' );
		$output[ ] = jr_gettext( '_JOMRES_AJAXFORM_PRICE_SUMMARY', '_JOMRES_AJAXFORM_PRICE_SUMMARY' );
		$output[ ] = jr_gettext( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', '_JOMRES_CONFIRMATION_TERMS_PRETEXT' );
		$output[ ] = jr_gettext( '_JOMRES_CONFIRMATION_ALERT', '_JOMRES_CONFIRMATION_ALERT' );
		$output[ ] = jr_gettext( '_JOMRES_CART_SAVEFORLATER', '_JOMRES_CART_SAVEFORLATER' );

		foreach ( $output as $o )
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