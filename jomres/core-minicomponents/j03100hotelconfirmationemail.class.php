<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Sends the hotel confirmation email
#
 *
 * @package Jomres
#
 */
class j03100hotelconfirmationemail
	{
	/**
	#
	 * Constructor: Sends the hotel confirmation email
	#
	 */
	function j03100hotelconfirmationemail( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$tmpBookingHandler   = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$currfmt             = jomres_singleton_abstract::getInstance( 'jomres_currency_format' );
		$tempBookingDataList = $componentArgs[ 'tempBookingDataList' ];
		$cartnumber          = $componentArgs[ 'cartnumber' ];
		$guests_uid          = $componentArgs[ 'guests_uid' ];
		$property_uid        = (int) $componentArgs[ 'property_uid' ];
		$arrivalDate         = $componentArgs[ 'arrivalDate' ];
		$departureDate       = $componentArgs[ 'departureDate' ];
		$contract_total      = $componentArgs[ 'contract_total' ];
		$rates_uids          = $componentArgs[ 'rates_uids' ];
		$property_uid        = (int) $componentArgs[ 'property_uid' ];
		$specialReqs         = $componentArgs[ 'specialReqs' ];
		$deposit_required    = $componentArgs[ 'deposit_required' ];
		if ( !isset( $componentArgs[ 'email_when_done' ] ) ) $email_when_done = true;
		else
		$email_when_done = $componentArgs[ 'email_when_done' ]; // Optional. We'll set email_when_done by default to true, otherwise we'll set it in the componentArgs variable. This allows us to call this script independantly which in turn allows us to view the email as it's contructed, rather than when sent.


		$clientIP      = $_SERVER[ 'REMOTE_ADDR' ];
		$mrConfig      = getPropertySpecificSettings();
		$rmids         = array ();
		$requestedRoom = $tempBookingDataList[ 0 ]->requestedRoom;
		$rooms         = explode( ",", $requestedRoom );
		foreach ( $rooms as $r )
			{
			$rm       = explode( "^", $r );
			$rmids[ ] = $rm[ 0 ];
			}
		$gor      = genericOr( $rmids, 'room_uid' );
		$query    = "SELECT propertys_uid,room_number,room_name FROM #__jomres_rooms WHERE $gor ";
		$roomList = doSelectSql( $query );

		$roomNumber = "";
		$room_name  = "";
		foreach ( $roomList as $room )
			{
			$property = $room->propertys_uid;
			$roomNumber .= $room->room_number;
			$room_name .= $room->room_name;
			}
		$query         = "SELECT property_name,property_tel,property_email FROM #__jomres_propertys WHERE propertys_uid = '" . (int) $property_uid . "' LIMIT 1";
		$propertyEmail = doSelectSql( $query );
		foreach ( $propertyEmail as $email )
			{
			$propertyName = getPropertyName( $property_uid );
			$propertyTel  = stripslashes( $email->property_tel );
			$hotelemail   = stripslashes( $email->property_email );
			}
		$query         = "SELECT firstname,surname,tel_landline,tel_mobile FROM #__jomres_guests WHERE guests_uid = '" . (int) $guests_uid . "'";
		$guestNameList = doSelectSql( $query );
		foreach ( $guestNameList as $guestName )
			{
			$firstname = stripslashes( $guestName->firstname );
			$surname   = stripslashes( $guestName->surname );
			$landline  = stripslashes( $guestName->tel_landline );
			$mobile    = stripslashes( $guestName->tel_mobile );
			}
		$rateOutput = "";
		$currency   = urldecode( $mrConfig[ 'currencyCode' ] );
		foreach ( $rates_uids as $rates_uid )
			{
			$query     = "SELECT rates_uid,rate_title,rate_description,roomrateperday FROM #__jomres_rates WHERE rates_uid = '" . (int) $rates_uid . "'";
			$ratesList = doSelectSql( $query );
			foreach ( $ratesList as $rate )
				{
				if ( $mrConfig[ 'tariffmode' ] == "2" )
					{
					$query          = "SELECT tarifftype_id FROM #__jomcomp_tarifftype_rate_xref WHERE tariff_id = '" . (int) $rate->rates_uid . "' LIMIT 1";
					$tariff_type_id = doSelectSql( $query, 1 );
					$rTitle         = jr_gettext( '_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID' . $tariff_type_id, $rate->rate_title, false, false );
					}
				else
				$rTitle = jr_gettext( '_JOMRES_CUSTOMTEXT_TARIFF_TITLE' . (int) $rate->rates_uid, $rate->rate_title, false, false );
				$rDesc = jr_gettext( '_JOMRES_CUSTOMTEXT_TARIFFDESC' . (int) $rate->rates_uid, $rate->rate_description, false, false );
				$rRate = $currfmt->get_formatted( $rate->roomrateperday );
				$rateOutput .= $rTitle . ' ' . $rDesc . ' ' . $rRate . ' ';
				}
			}

		$query = "SELECT email FROM #__jomres_guests WHERE guests_uid = '" . (int) $guests_uid . "' LIMIT 1";
		if ( $mrConfig[ 'errorCheckingShowSQL' ] ) echo $query . "<br>";
		$userEmail = doSelectSql( $query );
		foreach ( $userEmail as $email )
			{
			$useremail = stripslashes( $email->email );
			}
		$subject = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE', _JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE, false ) . stripslashes( $propertyName ) . " " . $cartnumber;

		$output = array ();
		if ( strlen( $specialReqs ) > 0 )
			{
			$output[ 'HSPECIAL_REQUIREMENTS' ] = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', _JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ, false, false );
			$output[ 'SPECIAL_REQUIREMENTS' ]  = getEscaped( $specialReqs );
			}
		$output[ 'ISO' ] = _ISO;

		$output[ 'IMAGE' ]             = getImageForProperty( "property", $property_uid, $property_uid );
		$output[ 'MOSCONFIGLIVESITE' ] = get_showtime( 'live_site' );
		$output[ 'HROOM' ]             = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM', _JOMRES_FRONT_MR_EMAIL_TEXT_ROOM, false, false );
		$output[ 'ROOM' ]              = $roomNumber . " " . $room_name;
		$output[ 'HBOOKINGNO' ]        = jr_gettext( '_JOMRES_BOOKING_NUMBER', _JOMRES_BOOKING_NUMBER, false, false );
		$output[ 'BOOKINGNO' ]         = $cartnumber;
		$output[ 'HARRIVAL' ]          = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL', _JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL, false, false );
		$output[ 'ARRIVAL' ]           = outputDate( $arrivalDate );
		if ( $mrConfig[ 'showdepartureinput' ] == "1" )
			{
			$output[ 'HDEPARTURE' ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE', _JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE, false, false );
			$output[ 'DEPARTURE' ]  = outputDate( $departureDate );
			}
		$output[ 'HNAME' ]         = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', _JOMRES_FRONT_MR_EMAIL_TEXT_NAME, false, false );
		$output[ 'FIRSTNAME' ]     = stripslashes( $firstname );
		$output[ 'SURNAME' ]       = stripslashes( $surname );
		$output[ 'HLANDLINE' ]     = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE', _JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE, false, false );
		$output[ 'LANDLINE' ]      = $landline;
		$output[ 'HMOBILE' ]       = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE', _JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE, false, false );
		$output[ 'MOBILE' ]        = $mobile;
		$output[ 'HTOTAL' ]        = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL', _JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL, false, false );
		$output[ 'TOTAL' ]         = output_price( $contract_total );
		$output[ 'HTARIFFTITLE' ]  = jr_gettext( '_JOMRES_FRONT_TARIFFS_TITLE', _JOMRES_FRONT_TARIFFS_TITLE, false, false );
		$output[ 'TARIFFINFO' ]    = $rateOutput;
		$output[ 'LINKTOBOOKING' ] = "<a href=\"" . JOMRES_SITEPAGE_URL_NOSEF . "&task=editBooking&contract_uid=" . $componentArgs[ 'contract_uid' ] . "\">" . jr_gettext( '_JOMCOMP_MYUSER_VIEWBOOKING', _JOMCOMP_MYUSER_VIEWBOOKING, false, false ) . "</a>";
		$output[ 'HEMAIL' ]        = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', _JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL, false, false );
		$output[ 'EMAIL' ]         = '<a href="mailto:' . $useremail . '">' . $useremail . '</a>';

		$output[ 'CLIENTIP' ]   = $clientIP;
		$output[ 'CSS_STYLES' ] = mailer_get_css();

		$output[ 'HDEPOSIT' ] = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', _JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED );
		$output[ 'DEPOSIT' ]  = output_price( $deposit_required );

		$guestObject = $componentArgs[ 'guestDetails' ];

		$output[ 'HOUSE' ]    = $guestObject->house;
		$output[ 'STREET' ]   = $guestObject->street;
		$output[ 'TOWN' ]     = $guestObject->town;
		$output[ 'REGION' ]   = $guestObject->region;
		$output[ 'COUNTRY' ]  = $guestObject->country;
		$output[ 'POSTCODE' ] = $guestObject->postcode;

		$guestDetails = getGuestDetailsForContract( $componentArgs[ 'contract_uid' ] );
		$rows         = array ();
		if ( count( $guestDetails ) > 0 )
			{
			$output[ 'HNUMBEROFGUESTS' ] = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', _JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS, false, false );
			foreach ( $guestDetails as $g )
				{
				$r               = array ();
				$r[ 'TITLE' ]    = $g[ 'title' ];
				$r[ 'QUANTITY' ] = $g[ 'qty' ];
				$rows[ ]         = $r;
				}
			}

		$invoice_id = $MiniComponents->miniComponentData[ '03025' ][ 'insertbooking_invoice' ][ 'invoice_id' ];
		if ( (int) $invoice_id > 0 )
			{
			$invoice_template    = $MiniComponents->specificEvent( '06005', 'view_invoice', array ( 'internal_call' => true, 'invoice_id' => $invoice_id, 'show_paypal_link' => false ) );
			$output[ 'INVOICE' ] = $invoice_template;
			}

		$output[ 'ALLOCATION_NOTE' ] = $tmpBookingHandler->tmpbooking[ "booking_notes" ][ "suppliment_note" ];

		$custom_field_output = array ();
		jr_import( 'jomres_custom_field_handler' );
		$custom_fields   = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();
		if ( count( $allCustomFields ) > 0 )
			{
			foreach ( $allCustomFields as $f )
				{
				$formfieldname          = $f[ 'fieldname' ] . "_" . $f[ 'uid' ];
				$custom_field_output[ ] = array ( "DESCRIPTION" => jr_gettext( 'JOMRES_CUSTOMTEXT' . $f[ 'uid' ], $f[ 'description' ] ), "VALUE" => $tmpBookingHandler->tmpbooking[ $formfieldname ] );
				}
			}

		$pageoutput[ ] = $output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'hotel_conf_email.html' );
		$tmpl->addRows( 'custom_field_output', $custom_field_output );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->addRows( 'booking_extras', $booking_extras );
		$tmpl->addRows( 'booking_extratext', $extrastext );
		if ( $email_when_done )
			{
			$text = $tmpl->getParsedTemplate();
			if ( $mrConfig[ 'errorChecking' ] ) echo $text;
			$result = false;
			if ( !jomresMailer( $useremail, $output[ 'FIRSTNAME' ] . ' ' . $output[ 'SURNAME' ], $hotelemail, $subject, $text, $mode = 1 ) ) error_logging( 'Failure in sending confirmation email to hotel. Target address: ' . $hotelemail . ' Subject' . $subject );
			}
		else
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output    = array ();
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', _JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM', _JOMRES_FRONT_MR_EMAIL_TEXT_ROOM );
		$output[ ] = jr_gettext( '_JOMRES_BOOKING_NUMBER', _JOMRES_BOOKING_NUMBER );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL', _JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE', _JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', _JOMRES_FRONT_MR_EMAIL_TEXT_NAME );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE', _JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE', _JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL', _JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_TITLE', _JOMRES_FRONT_TARIFFS_TITLE );

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