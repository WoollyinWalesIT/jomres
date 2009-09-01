<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * 
 #
* @package Jomres
#
 */
class j03100sms_clickatell {
	/**
	#
	 * Constructor: 
	#
	 */
	function j03100sms_clickatell($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		jr_import('jrportal_sms_clickatell_settings');
		$sms_clickatell_settings = new jrportal_sms_clickatell_settings();
		$sms_clickatell_settings->get_sms_clickatell_settings();
		if ($sms_clickatell_settings->sms_clickatellConfigOptions['active'] == "0")
			return;
		
		
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
		$property_uid=(int)$componentArgs['property_uid'];
		$specialReqs=$componentArgs['specialReqs'];
		$deposit_required=$componentArgs['deposit_required'];
		if ( !isset( $componentArgs['email_when_done'] ) )
			$email_when_done=true;
		else
			$email_when_done=$componentArgs['email_when_done']; // Optional. We'll set email_when_done by default to true, otherwise we'll set it in the componentArgs variable. This allows us to call this script independantly which in turn allows us to view the email as it's contructed, rather than when sent.
		
		
		$clientIP=$_SERVER['REMOTE_ADDR'];
		global $my,$database;
		$mrConfig=getPropertySpecificSettings();
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
		foreach ($roomList as $room)
			{
			$property=$room->propertys_uid;
			$roomNumber.=$room->room_number;
			$room_name.=$room->room_name;
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
				$rateOutput.=$rTitle.' '.$rDesc.' '.$rRate;
				}
			}

		$query="SELECT email FROM #__jomres_guests WHERE guests_uid = '".(int)$guests_uid."' LIMIT 1";
		if ($mrConfig['errorCheckingShowSQL']) echo $query."<br>";
		$userEmail =doSelectSql($query);
		foreach ($userEmail as $email)
			{
			$useremail=stripslashes($email->email);
			}
		$subject=_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE.stripslashes($propertyName);

		$output=array();
		if (strlen($specialReqs)>0)
			{
			$output['HSPECIAL_REQUIREMENTS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ',_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ,FALSE,FALSE);
			$output['SPECIAL_REQUIREMENTS']=quote_smart($specialReqs);
			}
		$output['IMAGE']=getImageForProperty("property",$property_uid,$property_uid);
		$output['MOSCONFIGLIVESITE']=get_showtime('live_site');
		$output['HROOM']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM',_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM,FALSE,FALSE);
		$output['ROOM']=$roomNumber." ".$room_name;
		$output['HBOOKINGNO']=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,FALSE,FALSE);
		$output['BOOKINGNO']=$cartnumber;
		$output['HARRIVAL']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL',_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL,FALSE,FALSE);
		$output['ARRIVAL']=outputDate($arrivalDate);
		$output['HDEPARTURE']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE',_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE,FALSE,FALSE);
		$output['DEPARTURE']=outputDate($departureDate);
		$output['HNAME']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME',_JOMRES_FRONT_MR_EMAIL_TEXT_NAME,FALSE,FALSE);
		$output['FIRSTNAME']=stripslashes($firstname);
		$output['SURNAME']=stripslashes($surname);
		$output['HLANDLINE']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE',_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE,FALSE,FALSE);
		$output['LANDLINE']=$landline;
		$output['HMOBILE']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE',_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE,FALSE,FALSE);
		$output['MOBILE']=$mobile;
		$output['HTOTAL']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL',_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL,FALSE,FALSE);
		$output['TOTAL']=$currency.number_format($contract_total, 2, '.', '');
		$output['HTARIFFTITLE']=jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE,FALSE,FALSE);
		$output['TARIFFINFO']=$rateOutput;
		$output['LINKTOBOOKING']="<a href=\"".get_showtime('live_site')."/index.php?option=com_jomres&task=editBooking&Itemid=".$Itemid."&contract_uid=".$componentArgs['contract_uid']."\">".jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING',_JOMCOMP_MYUSER_VIEWBOOKING,FALSE,FALSE)."</a>";
		$output['CLIENTIP']=$clientIP;

		$output['HDEPOSIT']		=	jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
		$output['DEPOSIT']		=	$mrConfig['currency'].$currfmt->get_formatted($deposit_required);

		jr_import('jrportal_user_functions');
		$userFunctions = new jrportal_user_functions();
		$usersArray=$userFunctions->getManagerIdsForProperty($property_uid);
		if (count($usersArray) >0)
			{
			foreach ($usersArray as $u)
				{
				// First we need to find the manager's uid
				$jos_id = $u['manager_id'];
				$userDeets = $userFunctions->getJoomlaUserDetailsForJoomlaId($jos_id);
				// Now we need to find the mobile number that was recorded for this property_uid
				$mobile_number=$this->get_property_config_field($property_uid,'sms_clickatell_notification_number');
				if (strlen($mobile_number)==0)
					return false;
					
				jr_import('jrportal_sms_clickatell_message');
				$message_record = new jrportal_sms_clickatell_message();
				$message_record->username			= $userDeets['username'];
				$message_record->number				= $mobile_number;
				$message_record->message			= $subject;
				$message_record->property_uid		= $property_uid;
				$message_record->commitNewMessage();
				$message_record->getMessage(); // We'll do this so that the send time isn't reset when we commit update
				jr_import('jrportal_sms_clickatellhandler');
				$handler = new jrportal_sms_clickatellhandler();
				$handler->addField("to",$message_record->number);
				$handler->addField("text",$message_record->message);
				$handler->sendQuery();
				if (count($handler->errorText) == 0)
					{
					$message_record->apiMsgid=$handler->getResponse();
					$message_record->commitUpdateMessage();
					if (!strstr  ($message_record->apiMsgid, "001" ) )
						return true;
					else
						return false;
					exit;
					}
				else
					{
					foreach ($handler->errorText as $error)
						{
						error_logging( "Error message ".$error." for Message id ".$message_record->id);
						}
					error_logging( "Didn't get a meaningful message back from clickatell. Message id ".$message_record->id);
					
					}
				 
				}
			}
		else
			{
			error_logging( "Couldn't send sms for property as no users registered. Property uid ".$property_uid);
			return;
			}
		}

	function get_property_config_field($property_uid,$field)
		{
		if ($property_uid > 0 && strlen($property_uid) > 0)
			{
			$query = "SELECT value FROM #__jomres_settings WHERE property_uid = ".(int)$property_uid. " AND akey = '".$field."' LIMIT 1";
			return doSelectSql($query,1);
			}
		else
			return null;
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