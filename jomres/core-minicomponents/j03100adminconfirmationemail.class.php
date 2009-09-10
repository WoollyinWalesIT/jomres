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
 * Sends the hotel confirmation email
 #
* @package Jomres
#
 */
class j03100adminconfirmationemail {
	/**
	#
	 * Constructor: Sends the hotel confirmation email
	#
	 */
	function j03100adminconfirmationemail($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		$adminemail=$paypal_settings->paypalConfigOptions['email'];

		if ($paypal_settings->paypalConfigOptions['override'] != "1") // The property paypal settings aren't overridden, so we'll not bother sending this email
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

		$clientIP=$_SERVER['REMOTE_ADDR'];
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
		$output['ISO']=_ISO;
		$output['IMAGE']=getImageForProperty("property",$property_uid,$property_uid);

		$output['MOSCONFIGLIVESITE']=get_showtime('live_site');
		$output['HROOM']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM',_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM,FALSE);
		$output['ROOM']=$roomNumber." ".$room_name;
		$output['HBOOKINGNO']=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,FALSE);
		$output['BOOKINGNO']=$cartnumber;
		$output['HARRIVAL']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL',_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL,FALSE);
		$output['ARRIVAL']=outputDate($arrivalDate);
		$output['HDEPARTURE']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE',_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE,FALSE);
		$output['DEPARTURE']=outputDate($departureDate);
		$output['HNAME']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME',_JOMRES_FRONT_MR_EMAIL_TEXT_NAME,FALSE);
		$output['FIRSTNAME']=stripslashes($firstname);
		$output['SURNAME']=stripslashes($surname);
		$output['HLANDLINE']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE',_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE,FALSE);
		$output['LANDLINE']=$landline;
		$output['HMOBILE']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE',_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE,FALSE);
		$output['MOBILE']=$mobile;
		$output['HTOTAL']=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL',_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL,FALSE);
		$output['TOTAL']=$currency.number_format($contract_total, 2, '.', '');
		$output['HTARIFFTITLE']=jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE,FALSE);
		$output['TARIFFINFO']=$rateOutput;
		$output['LINKTOBOOKING']="<a href=\"".JOMRES_SITEPAGE_URL."&task=editBooking&Itemid=".$Itemid."&contract_uid=".$componentArgs['contract_uid']."\">".jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING',_JOMCOMP_MYUSER_VIEWBOOKING,FALSE)."</a>";
		$output['CLIENTIP']=$clientIP;

		$guestDetails = getGuestDetailsForContract($componentArgs['contract_uid']);
		$rows=array();
		if (count($guestDetails)>0)
			{
			$output['HNUMBEROFGUESTS']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS',_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS,FALSE);
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
			$invoice_template = $MiniComponents->specificEvent('06000','view_invoice',array('internal_call'=>true,'invoice_id'=>$invoice_id) );
			$output['INVOICE']	= $invoice_template;
			}
			
		$pageoutput[]=$output;

		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput( 'hotel_conf_email.html');
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);
		$text=$tmpl->getParsedTemplate();

		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		$adminemail=$paypal_settings->paypalConfigOptions['email'];

		if ($mrConfig['errorChecking'])  echo $text;
		$result=false;
		if (!jomresMailer( $useremail, $propertyName, $adminemail, $subject, $text,$mode=1))
			error_logging('Failure in sending confirmation email to hotel. Target address: '.$hotelemail.' Subject'.$subject);
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS',_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM',_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM);
		$output[]		=jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL',_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE',_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME',_JOMRES_FRONT_MR_EMAIL_TEXT_NAME);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE',_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE',_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL',_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL);
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