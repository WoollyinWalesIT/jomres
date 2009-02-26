<?php
/**
#
 * Mini-component core file: Sends the guest's confirmation email
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

/**
#
 * Sends the guest's confirmation email
 #
* @package Jomres
#
 */
class j03110guestconfirmationemail {

	/**
	#
	 * Constructor: Sends the guest's confirmation email
	#
	 */
	function j03110guestconfirmationemail($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents,$jomresConfig_live_site;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$jomresConfig_live_site;
		$currfmt = new jomres_currency_format();
		$tempBookingDataList=$componentArgs['tempBookingDataList'];
		$cartnumber=$componentArgs['cartnumber'];
		$guestDetails=$componentArgs['guestDetails'];
		$guests_uid=$componentArgs['guests_uid'];
		$property_uid=(int)$componentArgs['property_uid'];
		$arrivalDate=$componentArgs['arrivalDate'];
		$departureDate=$componentArgs['departureDate'];
		$contract_total=$componentArgs['contract_total'];
		$rates_uids=$componentArgs['rates_uids'];
		$property_uid=(int)$componentArgs['property_uid'];
		$specialReqs=$componentArgs['specialReqs'];
		$deposit_required=$componentArgs['deposit_required'];
		if ( !isset( $componentArgs['email_when_done'] ) )
			$email_when_done=true;
		else
			$email_when_done=$componentArgs['email_when_done']; // Optional. We'll set email_when_done by default to true, otherwise we'll set it in the componentArgs variable. This allows us to call this script independantly which in turn allows us to view the email as it's contructed, rather than when sent.
			
			
			
		$clientIP=$_SERVER['REMOTE_ADDR'];

		$rmids=array();
		$requestedRoom =$tempBookingDataList[0]->requestedRoom;
		$rooms=explode(",",$requestedRoom);
		foreach ($rooms as $r)
			{
			$rm=explode("^",$r);
			$rmids[]=$rm[0];
			}
		$gor=genericOr($rmids,'room_uid');
		$query="SELECT propertys_uid,room_number,room_name FROM #__jomres_rooms WHERE $gor ";
		$roomList =doSelectSql($query);
		$roomNumber="";
		$room_name="";
		$counter=0;
		foreach ($roomList as $room)
			{
			$property=$room->propertys_uid;
			$roomNumber.=$room->room_number;
			$room_name.=$room->room_name;
			if ($counter < count($roomList) )
				{
				$roomNumber.=",";
				$room_name.=",";
				}
			}
		$query="SELECT property_name,property_tel,property_email FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property_uid."' LIMIT 1";
		$propertyEmail =doSelectSql($query);
		foreach ($propertyEmail as $email)
			{
			$propertyName=stripslashes($email->property_name);
			$propertyTel=stripslashes($email->property_tel);
			$hotelemail=stripslashes($email->property_email);
			}
		$query="SELECT firstname,surname,tel_landline,tel_mobile FROM #__jomres_guests WHERE guests_uid = '".(int)$guests_uid."'";
		$guestNameList =doSelectSql($query);
		foreach ($guestNameList as $guestName)
			{
			$firstname=stripslashes($guestName->firstname);
			$surname=stripslashes($guestName->surname);
			$landline=stripslashes($guestName->tel_landline);
			$mobile=stripslashes($guestName->tel_mobile);
			}
		$rateOutput="";
		$currency=urldecode($mrConfig['currencyCode']);
		foreach ($rates_uids as $rate)
			{
			$query="SELECT rate_title,rate_description,roomrateperday FROM #__jomres_rates WHERE rates_uid = '".(int)$rate."'";
			$ratesList =doSelectSql($query);
			foreach ($ratesList as $rate)
				{
				$rTitle=stripslashes($rate->rate_title);
				$rDesc=stripslashes($rate->rate_description);
				$rRate=$currfmt->get_formatted($rate->roomrateperday);
				$rateOutput.=$rTitle.' '.$rDesc.' '.$rRate.' ';
				}
			}
		/*
			$text="";
			$subject=_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS." ".stripslashes($propertyName);
			$text .= _JOMRES_BOOKING_NUMBER.' '.$cartnumber." \t\n";
			$text .= _JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO." ".stripslashes($firstname)." ".stripslashes($surname)." \t\n";
			$text .= _JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS." ".$propertyName." \t\n";
			$text .= _JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY." \t\n";
			$text .= _JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL.$currency.$currfmt->get_formatted($contract_total)." \t\n";
			if ($mrConfig['singleRoomProperty'] != "1")
				$text .= _JOMRES_FRONT_MR_EMAIL_TEXT_ROOM.$roomNumber." ".stripslashes($room_name)." \t\n";
			$text .= _JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL.outputDate($arrivalDate)." \t\n";
			$text .= _JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE.outputDate($departureDate)." \t\n";
			$text .= _JOMRES_FRONT_TARIFFS_TITLE." ".$mrConfig['currencyCode'].$rateOutput." \t\n";
			$text .= _JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS." \t\n";
			$text .= _JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE." ".$propertyTel." \t\n";
			$text .= _JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL." ".$hotelemail." \t\n";
			$text .= _JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ." ".stripslashes($specialReqs)." \t\n";
			$text .= $clientIP;
		*/
		$subject=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS',_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS,FALSE,FALSE)." ".stripslashes($propertyName);
		$output=array();

		//$fileLocation=checkForImage('property',$property_uid);

		$output=array();
		if (strlen($specialReqs)>0)
			{
			$output['HSPECIAL_REQUIREMENTS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ,FALSE,FALSE);
			$output['SPECIAL_REQUIREMENTS']=quote_smart($specialReqs);
			}
		$output['ISO']=_ISO;

//		$output['IMAGE']=$jomresConfig_live_site."/jomres/images/jrlogo.png";
//		if ($fileLocation)
//			$output['IMAGE']=$jomresConfig_live_site.$fileLocation;
		$output['IMAGE']=getImageForProperty("property",$property_uid,$property_uid);
		$output['MOSCONFIGLIVESITE']=$jomresConfig_live_site;

		$output['LINKTOPROPERTY']="<a href=\"".JOMRES_SITEPAGE_URL. "&task=viewproperty&property_uid=".$property_uid."\">".jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE,FALSE,FALSE)."</a>";
		if ($mrConfig['singleRoomProperty'] != "1")
			{
			$output['HROOM']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM',_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM,FALSE,FALSE);
			$output['ROOM']=$roomNumber." ".$room_name;
			}

		$output['THANKS']=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS',_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS,FALSE,FALSE)." ".stripslashes($propertyName);
		$output['HELLO']=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO',_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO,FALSE,FALSE);
		$output['GUESTNAME']=stripslashes($firstname)." ".stripslashes($surname);
		$output['QUESTIONS']=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS',_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS,FALSE,FALSE);
		$output['TELEPHONE']=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE',_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE,FALSE,FALSE)." ".$propertyTel;
		$output['EMAIL']=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL',_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL,FALSE,FALSE)." <a href=\"mailto:$hotelemail?subject="._JOMRES_BOOKING_NUMBER." ".$cartnumber." \">".$hotelemail."</a>";
		$output['SUMMARY']=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY',_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY,FALSE,FALSE);

		$output['HBOOKINGNO']=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,FALSE,FALSE);
		$output['BOOKINGNO']=$cartnumber;
		$output['HARRIVAL']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL',_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL,FALSE,FALSE);
		$output['ARRIVAL']=outputDate($arrivalDate);
		$output['HDEPARTURE']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE',_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE,FALSE,FALSE);
		$output['DEPARTURE']=outputDate($departureDate);
		$output['HNAME']=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO',_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO,FALSE,FALSE);
		$output['FIRSTNAME']=stripslashes($firstname);
		$output['SURNAME']=stripslashes($surname);
		$output['HTOTAL']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL',_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL,FALSE,FALSE);
		$output['TOTAL']=$currency.$currfmt->get_formatted($contract_total, 2, '.', '');
		$output['HTARIFFTITLE']=jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE,FALSE,FALSE);
		$output['TARIFFINFO']=$rateOutput;

		$output['HDEPOSIT']		=	jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
		$output['DEPOSIT']		=	$mrConfig['currency'].$currfmt->get_formatted($deposit_required);
		
		$guestDetails = getGuestDetailsForContract($componentArgs['contract_uid']);
		$rows=array();
		if (count($guestDetails)>0)
			{
			$output['HNUMBEROFGUESTS']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS',_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS,FALSE,FALSE);
			foreach ( $guestDetails as $g)
				{
				$r=array();
				$r['TITLE']=$g['title'];
				$r['QUANTITY']=$g['qty'];
				$rows[]=$r;
				}
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput( 'guest_conf_email.html');
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);

		if ($email_when_done)
			{
			$text=$tmpl->getParsedTemplate();
			audit($text,_JOMRES_MR_AUDIT_BOOKED_ROOM);
			$query="SELECT email FROM #__jomres_guests WHERE guests_uid = '".(int)$guests_uid."' LIMIT 1";
			if ($mrConfig['errorCheckingShowSQL']) echo $query."<br>";
			$userEmail =doSelectSql($query);
			foreach ($userEmail as $email)
				{
				$useremail=stripslashes($email->email);
				}
			$result=false;

			if (count($useremail)>0 )
				{
				if(!jomresMailer( $hotelemail, $propertyName, $useremail, $subject, $text,$mode=1))
					error_logging('Failure in sending confirmation email to guest. Target address: '.$useremail.' Subject '.$subject);
				}
			}
		else
			$tmpl->displayParsedTemplate();

		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS',_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM',_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM);
		$output[]		=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO',_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO);
		$output[]		=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS',_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS);
		$output[]		=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE',_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE);
		$output[]		=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL',_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL);
		$output[]		=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER);
		$output[]		=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY',_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY);
		$output[]		=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL',_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE',_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE);
		$output[]		=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO',_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL',_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS',_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE);

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