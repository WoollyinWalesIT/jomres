<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$output=array();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$mrConfig=getPropertySpecificSettings();
		$currfmt = jomres_getSingleton('jomres_currency_format');
		$tempBookingDataList=$componentArgs['tempBookingDataList'];
		$cartnumber=$componentArgs['cartnumber'];
		$guestDetails=$componentArgs['guestDetails'];
		$guests_uid=$componentArgs['guests_uid'];
		$property_uid=(int)$componentArgs['property_uid'];
		$arrivalDate=$componentArgs['arrivalDate'];
		$departureDate=$componentArgs['departureDate'];
		$contract_total=$componentArgs['contract_total'];
		$rates_uids=$componentArgs['rates_uids'];
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
			if ($room->room_name != "")
				$room_name.=$room->room_name;
			if ($counter < count($roomList) )
				{
				$roomNumber.=",";
				if ($room->room_name != "")
					$room_name.=",";
				}
			}
		
		$query="SELECT property_name,property_tel,property_email,property_policies_disclaimers FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property_uid."' LIMIT 1";
		$propertyEmail =doSelectSql($query);
		foreach ($propertyEmail as $email)
			{
			$propertyName=getPropertyName($property_uid);
			$propertyTel=stripslashes($email->property_tel);
			$hotelemail=stripslashes($email->property_email);
			$output['POLICIESDISCLAIMERS']=jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',trim(stripslashes($email->property_policies_disclaimers)),false,false);
			}
			
		$output['HPOLICIESDISCLAIMERS']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);
	
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
				$rTitle=jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFTITLE'.(int)$rate,$rate->rate_title,false,false);
				$rDesc=jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFDESC'.(int)$rate,$rate->rate_description,false,false);
				$rRate=$currfmt->get_formatted($rate->roomrateperday);
				$rateOutput.=$rTitle.' '.$rDesc.' '.$rRate.' ';
				}
			}

		$bookingDeets	=	gettempBookingdata();
		$extras 			= 	$bookingDeets['extras'];
		$extrasquantities	=	$bookingDeets['extrasquantities'];
		$extrasArray		=	explode(",",$extras);
		if (count($extrasArray)>0)
			{
			foreach ($extrasArray as $extraAll)
				{
				if (!empty($extraAll))
					{
					$extra 			= 	$extraAll;

					$query			=	"SELECT price, name FROM #__jomres_extras WHERE uid = '$extra'";
					$thisPrice 		=	doSelectSql($query,2);
					
					$extra_parts['NAME'] 		= 	jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$ex->uid, htmlspecialchars(trim(stripslashes($thisPrice['name'])), ENT_QUOTES) )." X ".$extrasquantities[$extra];
					$booking_extras[]			=	$extra_parts;
					}
				}
			$extratext	=	array();
			$extra_text['AJAXFORM_EXTRAS']		=	jr_gettext('_JOMRES_AJAXFORM_EXTRAS',_JOMRES_AJAXFORM_EXTRAS);
			$extra_text['EXTRASTOTAL']			=	output_price($bookingDeets['extrasvalue']);
			$extra_text['HEXTRASTOTAL']			=	jr_gettext('_JOMRES_AJAXFORM_EXTRAS_TOTAL',_JOMRES_AJAXFORM_EXTRAS_TOTAL);
			$extrastext[]	=	$extra_text;
			}
		
		$subject=jr_gettext('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS',_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS,FALSE,FALSE)." ".stripslashes($propertyName)." ".$cartnumber;
		

		//$fileLocation=checkForImage('property',$property_uid);

		if (strlen($specialReqs)>0)
			{
			$output['HSPECIAL_REQUIREMENTS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ,FALSE,FALSE);
			$output['SPECIAL_REQUIREMENTS']=quote_smart($specialReqs);
			}
			

		
		$output['MOSCONFIGLIVESITE']=get_showtime('live_site');

		$output['LINK']=JOMRES_SITEPAGE_URL_NOSEF. "&task=viewproperty&property_uid=".$property_uid;
		$output['LINKTOPROPERTY']="<a href=\"".JOMRES_SITEPAGE_URL_NOSEF. "&task=viewproperty&property_uid=".$property_uid."\">".jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE,FALSE,FALSE)."</a>";
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
		$output['DEPOSIT']		=	output_price($deposit_required);
		
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

		$invoice_id = $MiniComponents->miniComponentData['03025']['insertbooking_invoice']['invoice_id'];
		if ((int)$invoice_id > 0)
			{
			$invoice_template = $MiniComponents->specificEvent('06005','view_invoice',array('internal_call'=>true,'invoice_id'=>$invoice_id) );
			$output['INVOICE']	= $invoice_template;
			}

		$output['ALLOCATION_NOTE'] = $tmpBookingHandler->tmpbooking["booking_notes"]["suppliment_note"];
			
		$custom_field_output = array();
		jr_import('jomres_custom_field_handler');
		$custom_fields = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();
		if (count($allCustomFields)>0)
			{
			foreach ($allCustomFields as $f)
				{
				$formfieldname = $f['fieldname']."_".$f['uid'];
				$custom_field_output[]=array("DESCRIPTION"=>jr_gettext(JOMRES_CUSTOMTEXT.$f['uid'],$f['description']),"VALUE"=>$tmpBookingHandler->tmpbooking[$formfieldname]);
				}
			}
			
			

			
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput( 'guest_conf_email.html');
		$tmpl->addRows( 'custom_field_output', $custom_field_output );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);
		$tmpl->addRows( 'booking_extras', $booking_extras);
		$tmpl->addRows( 'booking_extratext', $extrastext);
		
		if ($email_when_done)
			{
			$text=$tmpl->getParsedTemplate();
			jomres_audit($text,_JOMRES_MR_AUDIT_BOOKED_ROOM);
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