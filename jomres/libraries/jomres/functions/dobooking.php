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
 * Get some basic data before beginning construction of the booking form
#
 */

$property_uid = get_showtime('property_uid');

$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	

$MiniComponents->triggerEvent('00100'); // Pre-dobooking. Optional
$userIsManager=checkUserIsManager();

if ($userIsManager && in_array(intval($_REQUEST['selectedProperty']),$thisJRUser->authorisedProperties) && (int) $_REQUEST['selectedProperty'] > 0 && $thisJRUser->currentproperty != (int) $_REQUEST['selectedProperty'] )
	{
	$thisJRUser->set_currentproperty((int) $_REQUEST['selectedProperty']);
	jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."task=dobooking&selectedProperty=$selectedProperty"), "" );
	}
	
$selectedProperty  =$property_uid;

$remus  = jomresGetParam( $_REQUEST, "remus", '' );

$thisdate=false;

$today = date("Y/m/d");
$date_elements  	= explode("/",$today);
$unixTodaysDate		= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

if (!isset($_REQUEST['arrivalDate']) )
	{
	//if (!isset($_COOKIE['jomsearch_availability']))
	if ($tmpBookingHandler->tmpsearch_data['jomsearch_availability']=="")
		{
		$arrivalDate=JSCalmakeInputDates(date("Y/m/d",$unixTodaysDate),$siteCal=true);
		$thisdate	=JSCalConvertInputDates($arrivalDate,$siteCal=true);
		}
	else
		$thisdate	=$tmpBookingHandler->tmpsearch_data['jomsearch_availability'];
		//$thisdate	=jomresGetParam( $_COOKIE,'jomsearch_availability', '' );
	}
else
	{
	if (isset($tmpBookingHandler->tmpbooking["confirmationSeen"]) )
		$tmpBookingHandler->tmpbooking["confirmationSeen"]=null;
	if (!isset($_REQUEST['pdetails_cal']))
		$thisdate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ));
	else
		{
		$bang = explode("/",$_REQUEST['arrivalDate']);
		$thisdate = (int)$bang[0]."/".(int)$bang[1]."/".(int)$bang[2];
		
		}
	//var_dump($thisdate);exit;
	}

$thisdate=str_replace("-","/",$thisdate);

$MiniComponents->triggerEvent('00101'); // Pre-form generation. Optional
$query="SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid = '".(int)$selectedProperty."'";

$result=doSelectSql($query);
if (count($result)>0 )
	{
	if ($selectedProperty > 0 )
		dobooking($selectedProperty,$thisdate,$remus);
	else
		echo "Property uid incorrect";
	}
else
	echo "Incorrect property uid selected";
// End run here.


/**
#
 * Construct the booking form
#
 */
function dobooking($selectedProperty,$thisdate=false,$remus)
	{
	$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	$mrConfig=getPropertySpecificSettings();
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
	$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

	$referrer=$_SERVER['HTTP_REFERER'];
	$backWasClicked=false;
	if ($tmpBookingHandler->tmpbooking["confirmationSeen"] == true )
		$backWasClicked=true;
	elseif ($thisJRUser->userIsManager == true)
		$tmpBookingHandler->resetTempGuestData();  // We don't want managers coming back to the booking form with the old guest data still saved.
	$tmpBookingHandler->updateBookingField("lang",get_showtime('lang'));
	if ((int)$tmpBookingHandler->getBookingPropertyId() != (int)$selectedProperty)
		$tmpBookingHandler->resetTempBookingData();
	$tmpBookingHandler->tmpbooking["property_uid"]=(int)$selectedProperty;
	$tmpBookingHandler->tmpbooking["total_discount"]="";
	//$tmpBookingHandler->saveBookingData();
	$amend_contract =  $tmpBookingHandler->getBookingFieldVal("amend_contract");
	$tmpBookingHandler->tmpbooking["override_room_total"]=null;
	$tmpBookingHandler->tmpbooking["override_deposit"]=null;
	
	$today = date("Y/m/d");
	$date_elements  	= explode("/",$today);
	$unixTomorrowsDate	= mktime(0,0,0,$date_elements[1],$date_elements[2]+1,$date_elements[0]);
	$unixTodaysDate		= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

	$mrConfig=getPropertySpecificSettings($selectedProperty);
	if ($jrConfig['is_single_property_installation'] == "0" && !defined('DOBOOKING_IN_DETAILS') )
		property_header($selectedProperty);
	$MiniComponents->triggerEvent('00102'); // First-form generation
	$bkg =$MiniComponents->triggerEvent('05000'); // Create the booking object
	$bkg->room_feature_filter=array();
	if (!is_object($bkg) )
		{
		echo "Error creating booking object";
		return;
		}
	
	// if (!get_showtime('include_room_booking_functionality'))  // Disabled for 5.5.3 as Jintour has a new option that manages this
		// $bkg->cfg_showdepartureinput = "0";
		
	$text=$bkg->makeOutputText();
	$guest=$bkg->makeGuestData();

	$output=array_merge($text,$guest);
	
	if ($bkg->cfg_showdepartureinput == "0")
		$output['HDEPARTUREDATE'] = "";
	
	$requiredIcons=$bkg->makeRequiredIcons();
	$output=array_merge($output,$requiredIcons);
	$guestTypes=$bkg->makeCustomerTypes($selectedProperty);

	$output['UPDATEADDRESSBUTTON']					=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON',_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON,false,false));
	if ( $mrConfig['singleRoomProperty'] == "1")
		$output['BLOCKUI_RECHECKINGROOMAVAILABILITY']	=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP',_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP,false,false));
	else
		$output['BLOCKUI_RECHECKINGROOMAVAILABILITY']	=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY',_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY,false,false));
	
	
	$output['BLOCKUI_CHANGINGEXTRA']				=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA',_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA,false,false));
	$output['BLOCKUI_CHANGINGROOMSELECTION']		=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION',_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION,false,false));
	$output['BLOCKUI_UPDATINGADDRESS']				=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS',_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS,false,false));
	$output['BLOCKUI_ADDRESSINPUTERROR']			=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR',_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR,false,false));
	$output['NOROOMSSELECTEDYETMESSAGE']			=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET',_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET,false,false));
	
	if ($thisJRUser->userIsManager)
		$output['ISMANAGER']="true";
	else
		$output['ISMANAGER']="false";
	$output['PID']=$selectedProperty;
	$output['ITEMID']=$Itemid;
	
	$output['RELPATH']=get_showtime('live_site');
	$output['AJAXURL']=JOMRES_SITEPAGE_URL_NOHTML;
	$output['SUBMITURL']=JOMRES_SITEPAGE_URL;
	if (!$thisJRUser->userIsManager)
		$bkg->setBookerClass("000");
	else
		$bkg->setBookerClass("100");

	$bkg-> initCoupons();
	$coupons=array();
	$coupon_output = array();
	$coupon_output_totals = array();
	if ($bkg->use_coupons)
		{
		$coupon_output['COUPON_TITLE']=$bkg->sanitiseOutput(jr_gettext('_JRPORTAL_COUPONS_CODE',_JRPORTAL_COUPONS_CODE,false,false));
		$coupon_output['COUPON_BUTTON']=$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON',_JOMRES_AJAXFORM_COUPON_APPLYBUTTON,false,false));
		$coupon_output['COUPON_INSTRUCTIONS']=$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS',_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS));
		$coupon_output_totals['COUPON_DISCOUNT_VALUE']=$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE',_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE));
		
		$coupon_output['COUPON_CODE']="";
		if ($amend_contract && isset($_REQUEST['contractuid']) && $thisJRUser->userIsManager && in_array( (int)$selectedProperty,$thisJRUser->authorisedProperties) )
			{
			$query = "SELECT coupon_id FROM #__jomres_contracts WHERE contract_uid = ".(int)$_REQUEST['contractuid']."";
			$coupon_id = doSelectSql($query,1);
			if ($coupon_id>0)
				{
				$query="SELECT `coupon_code` FROM #__jomres_coupons WHERE coupon_id = ".(int)$coupon_id." AND property_uid = ".(int)$selectedProperty."";
				$coupon_code = doSelectSql($query,1);
				$bkg->saveCoupon($coupon_code);
				$coupon_output['COUPON_CODE']=$coupon_code;
				}
			}
		$coupons[] = $coupon_output;
		$coupons_totals[] = $coupon_output_totals;
		}
		
	if ($bkg->cfg_singleRoomProperty != "1")
		$output['SELECTROOMMESSAGE']=$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM',_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM,false,false));
	else
		$output['SELECTROOMMESSAGE']=$bkg->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE',_JOMRES_COM_MR_QUICKRES_STEP4_TITLE,false,false));
	if ((int)$mrConfig['minimuminterval']  == 0)
		$mrConfig['minimuminterval'] = 1;
	
	$output['MININTERVAL']=$mrConfig['minimuminterval'].' ; var selectroommessage = "'.$output['SELECTROOMMESSAGE'].'"';  //For backward compatability this selectroommessage has been tacked onto the end of the min interval var definition
	//if (!$bkg->ok_to_book || $bkg->cfg_singleRoomProperty == "1")
		$bkg->resetRequestedRoom();
	$bkg->initGuestDetails($bkg,$guest);
		
	if ($bkg->guest_specific_discount >0)
		$output['PERSONAL_DISCOUNT']			=$bkg->sanitiseOutput(jr_gettext('_JOMRES_PERSONAL_DISCOUNT',_JOMRES_PERSONAL_DISCOUNT));
	
	$overrideSessionArrivalDate=false;
	if ($thisdate != "")
		$overrideSessionArrivalDate=true;
		
	if ($backWasClicked)
		$overrideSessionArrivalDate=false;

	if ($bkg->arrivalDate != "" && !$overrideSessionArrivalDate)
		{
		$arrivalDate=$bkg->arrivalDate;
		$departureDate=$bkg->departureDate;
		}
	else
		{
		$arrivalDate=$defaultArrivalDate=$bkg->initArrivalDate();
		$bkg->setGuest_country($mrConfig['defaultcountry']);

		if ($thisdate && isset($_REQUEST['arrivalDate']) )
			{
			if ( $bkg->checkArrivalDate($thisdate) )
				{
				$bkg->setArrivalDate($thisdate);
				$arrivalDate=$thisdate;
				}
			else
				$arrivalDate=$defaultArrivalDate;
			}
		else if ($thisdate)
			{
			$arrivalDate=$thisdate;
			$bkg->setArrivalDate($arrivalDate);
			}
		if (!$bkg->checkArrivalDate($arrivalDate) )
			{
			$arrivalDate=$defaultArrivalDate;
			$bkg->setArrivalDate($arrivalDate);
			}
		$defaultdepartureDate=$bkg->initDepartureDate();
		if (!isset($_REQUEST['arrivalDate']) )
			{
			if ($tmpBookingHandler->tmpsearch_data['jomsearch_availability']=="")
				$departureDate	=$defaultdepartureDate;
			else
				$departureDate	=$tmpBookingHandler->tmpsearch_data['jomsearch_availability_departure'];
			}
		else
			$departureDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'departureDate', "" ));
		$value=$bkg->sanitiseInput("date",$departureDate);
		if (isset($value) && $bkg->checkDepartureDate($value) )
			{
			$bkg->setDepartureDate($value);
			$departureDate=$value;
			}
		else
			{
			$departureDate=$defaultdepartureDate;
			$bkg->setDepartureDate($departureDate);
			}

		$bkg->setStayDays();
		$bkg->setDateRangeString();
	}

	$output['EARLIESTPOSSIBLEARRIVALDATE']=$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE',_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE,false)).$bkg->JSCalmakeInputDates($arrivalDate);

	$explodedEarliest=explode("/",$today);
	
	$output['EARLIESTDAY']=$explodedEarliest[2]+$bkg->cfg_mindaysbeforearrival;
	$output['EARLIESTMON']=$explodedEarliest[1]-1;
	$output['EARLIESTYEAR']=$explodedEarliest[0];
	//if ($amend_contract && $arrivalDate < $today)
	//	$output['ARRIVALDATE']=outputDate($arrivalDate);
	//else
		$output['ARRIVALDATE']=$bkg->makeArrivalDateOutput($arrivalDate);
	$output['DEPARTUREDATE']=$bkg->makeDepartureDateOutput($departureDate);

	$smokingOpts = array();
	if ($mrConfig['showSmoking']=="1")
		{
		$smoking=$bkg->initSmoking();
		$smokingOptions = array();
		$smokingOptions['HSMOKINGTITLE']=$output['HSMOKINGTITLE'];
		$smokingOptions['SMOKING']=$bkg->makeSmokingOutput($smoking);
		$smokingOpts[]=$smokingOptions;
		}

	
		
	$counter=0;
	if (!$amend_contract)
		{
		foreach ($guestTypes as $gst)
			{
			$current=$bkg->getGuestVariantDetails($gst['ID']);
			if ($current==false)
				{
				if ($counter==0)
					$bkg->initGuestVariant($gst['ID'],$mrConfig['defaultNumberOfFirstGuesttype']);
				else
					$bkg->initGuestVariant($gst['ID'],0);
				}
			$counter++;
			}
		}
	if (count($guestTypes)==0)
		$output['BILLING_TOTALINPARTY']="";
	$ex=$bkg->makeExtras($selectedProperty);
	$extra_details=$ex['core_extras'];
	$third_party_extras=$ex['third_party_extras'];
	
	if (count($extra_details)>0 || count($third_party_extras)>0)
		{
		$output['EXTRAS_INFO']		='<img border="0" style="vertical-align:top;" src="'.get_showtime('live_site').'/components/com_jomres/images/info.png" />';
		//$output['EXTRAS_SPACES']		="";
		$output['AJAXFORM_EXTRAS']		=$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS',_JOMRES_AJAXFORM_EXTRAS));
		$output['AJAXFORM_EXTRAS_DESC']	=$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS_DESC',_JOMRES_AJAXFORM_EXTRAS_DESC,false));
		$output['EXTRAS_TOTAL']=$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS_TOTAL',_JOMRES_AJAXFORM_EXTRAS_TOTAL));
		$extrasHeader = array();
		$extrasH = array();
		$extrasH['EXTRAS_TOTAL']=$output['EXTRAS_TOTAL'];
		$extrasH ['EXTRAS_HEADER']=$output['AJAXFORM_EXTRAS_DESC'];
		$extrasHeader[]=$extrasH;

		$bkg->cfg_showExtras = true;
		$output['SHOWEXTRAS']="true";
		}
	else
		{
		$output['SHOWEXTRAS']="false";
		$bkg->cfg_showExtras = false;
		}
	
	$bkg->setStayDays();
	$bkg->setDateRangeString();
	$dateRangeIncludesWeekend=$bkg->dateRangeIncludesWeekends();
	$freeRoomsArray=$bkg->getAllRoomUidsForProperty();
	$freeRoomsArray=$bkg->removeRoomuidsAlreadyInThisBooking($freeRoomsArray);
	$freeRoomsArray=$bkg->findFreeRoomsInDateRange($freeRoomsArray);
	$freeRoomsArray=$bkg->checkPeopleNumbers($freeRoomsArray);
	$freeRoomsArray=$bkg->checkSmokingOption($freeRoomsArray);
	$roomAndTariffArray=$bkg->getTariffsForRoomUids($freeRoomsArray);
	// if (isset($remus) && !empty($remus) )
		// {
		// for ($i=0;$i<count($roomAndTariffArray);$i++)
			// {
			// $rmandtariff=$roomAndTariffArray[$i];
			// if ($rmandtariff[0]==$remus)
				// {
				// $tariff=$rmandtariff[1];
				// break;
				// }
			// }
		// $bkg->updateSelectedRoom($remus."^".$tariff);
		// $freeRoomsArray=$bkg->getAllRoomUidsForProperty();
		// $freeRoomsArray=$bkg->removeRoomuidsAlreadyInThisBooking($freeRoomsArray);
		// $freeRoomsArray=$bkg->findFreeRoomsInDateRange($freeRoomsArray);
		// $freeRoomsArray=$bkg->checkPeopleNumbers($freeRoomsArray);
		// $freeRoomsArray=$bkg->checkSmokingOption($freeRoomsArray);
		// $roomAndTariffArray=$bkg->getTariffsForRoomUids($freeRoomsArray);
		// }
	if ($mrConfig['singleRoomProperty'] == "0" )
		{
		if ($mrConfig['booking_form_rooms_list_style'] == "1")
			{
			$rm='<div><strong>'.$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS',_JOMRES_AJAXFORM_SELECTEDROOMS)).'</strong></div>';
			if ($bkg->numberOfCurrentlySelectedRooms()>0 )
				$rm.=$bkg->listCurrentlySelectedRooms();
			else
				$rm.='<div class="ui-state-error">'.$bkg->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET',_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET)).'</div>';
			$output['SELECTEDROOM']=$rm;

			$rm='<div><strong>'.$bkg->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS',_JOMRES_AJAXFORM_AVAILABLEROOMS)).'</strong></div>';
			//$rm.="<br>";
			$rm.=$bkg->generateRoomsList($roomAndTariffArray);
			}
		elseif ($mrConfig['booking_form_rooms_list_style'] == "2")
			{
			$bkg->generateRoomsList($roomAndTariffArray);
			}
		}
	else
		$rm=$bkg->generateRoomsList($roomAndTariffArray);
	//$rm=$bkg->generateRoomsList($roomAndTariffArray);
	if (get_showtime('include_room_booking_functionality'))
		{
		$output['AVAILABLEROOMS']=$rm;
		$output['ROOMSLIST']=$output['SELECTEDROOM'].'<br>'.$output['AVAILABLEROOMS'].'</div><div id="availRooms">';
		}
	$componentArgs=array();
	$componentArgs['output']=$output;
	$MiniComponents->triggerEvent('00103',$output); // End-form generation

	$bkg->storeBookingDetails();
	$toload=array();
	$load=array();
	//$bkg->writeToLogfile("STORED BOOKING");
	
	if (get_showtime('include_room_booking_functionality'))
		{
		if ( $mrConfig['singleRoomProperty'] == "1" && (isset($thisdate) && !empty($thisdate))  )
			{
			// As of 4.4 we've done away with the two ajax call process to run the booking form, however we still need to initialise the arrival date through ajax for SRPs
			$tmpsrptrigger="jomresJquery.get(ajaxurl+'&task=handlereq&property_uid_check=".(int)$selectedProperty."',{ field : 'arrivalDate', value: '".$bkg->JSCalmakeInputDates($bkg->arrivalDate)."', field : 'departureDate', value: '".$bkg->JSCalmakeInputDates($bkg->departureDate)."' },function(data){showRoomsList(data); show_log('');});";
			$load['ONLOAD']=$tmpsrptrigger;
			$toload[]=$load;
			}
		else
			{
			$load['ONLOAD']="jomresJquery.get(ajaxurl+'&task=handlereq&firstrun=1&property_uid_check=".(int)$selectedProperty."',{ field : 'arrivalDate', value: '".$bkg->JSCalmakeInputDates($bkg->arrivalDate)."', field : 'departureDate', value: '".$bkg->JSCalmakeInputDates($bkg->departureDate)."' },function(data){showRoomsList(data); show_log('');});";
			$toload[]=$load;
			}
		}

	$output['JOMRES_SITEPAGE_URL']=jomresValidateUrl(JOMRES_SITEPAGE_URL);

	if (get_showtime('include_room_booking_functionality'))
		$output['JOMRES_ROOMSLISTENABLED']="true";
	else
		$output['JOMRES_ROOMSLISTENABLED']="false";
	
	jr_import('jomres_custom_field_handler');
	$custom_fields = new jomres_custom_field_handler();
	$allCustomFields = $custom_fields->getAllCustomFields();
	if (count($allCustomFields)>0)
		{
		$icon="*";
		foreach ($allCustomFields as $f)
			{
			$tempHandlerFieldName = $f['fieldname']."_".$f['uid'];
			$fielddata = array();
			$fielddata['FIELDNAME'] 		= $f['fieldname']."_".$f['uid'];
			if (isset($tmpBookingHandler->tmpbooking[$tempHandlerFieldName]))
				$fielddata['DEFAULT_VALUE']	= $tmpBookingHandler->tmpbooking[$tempHandlerFieldName];
			else
				$fielddata['DEFAULT_VALUE']	= $f['default_value'];
			$fielddata['UID'] 				= $f['uid'];
			$fielddata['DESCRIPTION']		= jr_gettext(JOMRES_CUSTOMTEXT.$f['uid'],$f['description']);
			
			$fielddata['REQUIRED']			= "&nbsp;";
			if ($f['required'] =="1")
				$fielddata['REQUIRED']='<font color="red">'.$icon.'</font>';
			$fielddata['SIZE']				= 12;
			if (strlen($f['default_value'])>12)
				$fielddata['SIZE']			= strlen($f['default_value']);
			$customFields[] 				= $fielddata;
			}
		$output['CUSTOMFIELD_JAVASCRIPT']=generateCustomFieldsJavascript($customFields);
		}
	else
		$output['CUSTOMFIELD_JAVASCRIPT']="<script type=\"text/javascript\">function checkCustomFields(){return true}</script>";
	
	$booked_dates = $bkg->get_fullybooked_dates();
	$booked_dates_output = "var bookedDays = []";
	$number_of_booked_dates = count($booked_dates);
	if ($number_of_booked_dates>0)
		{
		$booked_dates_output = "var bookedDays = [";
		$counter = 1;
		foreach ($booked_dates as $date)
			{
			$booked_dates_output .='"'.$date.'"';
			$counter++;
			if ($counter <= $number_of_booked_dates)
				$booked_dates_output .=',';
			}
		$booked_dates_output .='];';
		//var bookedDays = ["2010-6-10","2010-6-12","2010-6-14"];
		}
		
	$output['TOTALS_PANEL_BG_PATH']=get_showtime('live_site').'/jomres/images/';
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'totals_panel_bg.jpg'))
		$output['TOTALS_PANEL_BG_PATH']='jomres/uploadedimages/';
	
	$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
	$output['PROPERTYNAME'] = $current_property_details->get_property_name($selectedProperty);

	$output['BOOKEDDATES']= $booked_dates_output;
	$output['MODAL']=''; // Needs to be here. If not, a javascript error will occur when the booking form is shown in the property details page.
	if (get_showtime('task') == "dobooking" && $jrConfig['booking_form_modal_popup'] == "1" && !isset($_REQUEST['is_wrapped']) && !isset($_REQUEST['tmpl']) )
		{
		$output['MODAL'] = 'jomresJquery( "#booking_form" ).dialog({width:1000,modal:true});';
		$output['HIDDENSTYLE']='style="display:none;"';
		$output['OPENBOOKINGOFRM_BUTTON']='<a href="javascript:open_booking_form();" class="fg-button ui-state-default ui-corner-all">'.$output['_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM'].'</a>';
		$output['BUTTON_BACK_TO_PROPERTY_DETAILS']='<a href="'.jomresURL( JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$selectedProperty).'" class="fg-button ui-state-default ui-corner-all">'.$output['_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS'].'</a>';
		
		}



	$output['PANELPOSITION']=(int)$jrConfig['booking_form_totalspanel_position'];
	$output['BOOKINGFORMWIDTH']=(int)$jrConfig['booking_form_width'];
	
	$output['DEPOSIT_CLASS'] = '';
	if (isset($output['DEPOSIT'])) // Need this to stop the booking form totals panel from showing a thick line if the deposit option is disabled
		{
		$output['DEPOSIT_CLASS'] = 'class="ui-widget-content ui-corner-all"';
		}
	// v4.5.5
	if (!isset($mrConfig['booking_form_rooms_list_style']))
		$mrConfig['booking_form_rooms_list_style'] = "1";

	if (get_showtime('include_room_booking_functionality'))
		{
		if ($mrConfig['booking_form_rooms_list_style'] == "1")
			{
			$classic_rooms_list = array();
			$classic_rooms_list_output = array();
			$classic_rooms_list['LIVESITE']=get_showtime('live_site');
			$classic_rooms_list['AJAXFORM_AVAILABLE_DESC'] = $output['AJAXFORM_AVAILABLE_DESC'];
			$classic_rooms_list['LOOKRIGHT'] = $output['LOOKRIGHT'];
			$classic_rooms_list['SELECTEDROOM'] = $output['SELECTEDROOM'];
			$classic_rooms_list['AVAILABLEROOMS'] = $output['AVAILABLEROOMS'];
			$classic_rooms_list['ESTIMATEWARNING'] = $output['ESTIMATEWARNING'];
			$classic_rooms_list['RELPATH'] = $output['RELPATH'];

			$classic_rooms_list_output[]=$classic_rooms_list;
			}
		if ($mrConfig['booking_form_rooms_list_style'] == "2") // Room type dropdown selection feature
			{
			$roomtype_dropdown_list = array();
			$roomtype_dropdown_list['LIVESITE']=get_showtime('live_site');
			if ($amend_contract) // If we're amending a booking, we will automatically switch back to the 'classic' rooms list selection so that the manager can assign a user to a new room. As that's the case, we'll need the 'selectedRooms' div back in the template.
				$roomtype_dropdown_list['AMENDBOOKING_SELECTEDROOMSDIV'] ='<div id="selectedRooms"></div>';
										
			$roomtype_dropdown_list_output = array();
			$roomtype_dropdown_list['AJAXFORM_AVAILABLE_DESC'] = $output['AJAXFORM_AVAILABLE_DESC'];
			$roomtype_dropdown_list['RELPATH'] = $output['RELPATH'];
			$roomtype_dropdown_list['ESTIMATEWARNING'] = $output['ESTIMATEWARNING'];
			$roomtype_dropdown_list_output[]=$roomtype_dropdown_list;
			}
		}
		
	$rooms_list_accommodation_panel_output = array();
	if (get_showtime('include_room_booking_functionality'))
		{
		$rooms_list_accommodation_panel = array();
		
		$rooms_list_accommodation_panel['BILLING_ROOMTOTAL']=$output['BILLING_ROOMTOTAL'];
		$rooms_list_accommodation_panel['ACCOMMODATION_NIGHTS']=$output['ACCOMMODATION_NIGHTS'];
		$rooms_list_accommodation_panel['ACCOMMODATION_PERROOM']=$output['ACCOMMODATION_PERROOM'];
		$rooms_list_accommodation_panel['BILLING_TOTALINPARTY']=$output['BILLING_TOTALINPARTY'];
		$rooms_list_accommodation_panel['ACCOMMODATION_TOTAL']=$output['ACCOMMODATION_TOTAL'];

		$rooms_list_accommodation_panel_output[] = $rooms_list_accommodation_panel;
		}
	
	$bkg->initRoomFeatureFiltering();
	if ($bkg->room_feature_filtering_enabled)
		{
		$roomfeaturesHeader = array();
		$roomfeatures = array();
		$roomfeaturesHeader[] = array("_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER"=>$output['_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER']);
		foreach ($bkg->room_feature_checkboxes as $feature)
			{
			$rf = array();
			$rf['INPUTBOX'] = $feature['INPUTBOX'];
			$rf['DESCRIPTION'] = $feature['DESCRIPTION'];
			$roomfeatures[] = $rf;
			}
		}

	if (get_showtime('mobile_browser'))
		$jrConfig['booking_form_totals_panel_as_slider'] = "0";
	
	if ($jrConfig['booking_form_totals_panel_as_slider'] == "1")
		$output['SLIDER_ENABLED'] = 'true';
	else
		$output['SLIDER_ENABLED'] = 'false';
	
	if (get_showtime('task') == "viewproperty" || get_showtime('task') == "preview")
		$output['SLIDER_ENABLED'] = 'false'; // Slider doesn't work well when included in tabs, so we'll disable it.

	if ($thisJRUser->userIsManager)
		{
		$manager_pricing[] = array('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL'=>jr_gettext('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL',_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL,false,false),'_JOMCOMP_AMEND_OVERRIDE_DEPOSIT'=>jr_gettext('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT',_JOMCOMP_AMEND_OVERRIDE_DEPOSIT,false,false),'_JOMCOMP_AMEND_OVERRIDE_SAVE'=>jr_gettext('_JOMCOMP_AMEND_OVERRIDE_SAVE',_JOMCOMP_AMEND_OVERRIDE_SAVE,false,false));
		}
	
	if ($jrConfig['show_tax_in_totals_summary'] == "1")
		{
		$tax_totals = array();
		$tt = array();
		$tt['ROOM_TOTAL_EX_TAX'] 		= $output['ROOM_TOTAL_EX_TAX'];
		$tt['ROOM_TOTAL_INC_TAX'] 		= $output['ROOM_TOTAL_INC_TAX'];
		$tt['ROOM_TOTAL_ACCOM_TAX'] 	= $output['ROOM_TOTAL_ACCOM_TAX'];
		$tt['EXTRAS_TAX'] 				= $output['EXTRAS_TAX'];
		$tax_totals[] = $tt;
		}
	
	$output['PROPERTYUID'] =$selectedProperty;
	
	$output['BOOTSTRAP_JS_VAR']='false';
	if (defined('JOMRES_BOOTSTRAP'))
		$output['BOOTSTRAP_JS_VAR']='true';
	
	
	$pageoutput[]=$output;
	$tmpl = new patTemplate();
	
	if ($mrConfig['booking_form_rooms_list_style'] == "1")
		$tmpl->addRows( 'classic_rooms_list',$classic_rooms_list_output);
	if ($mrConfig['booking_form_rooms_list_style'] == "2")
		$tmpl->addRows( 'roomtype_dropdown_list',$roomtype_dropdown_list_output);
		
	$tmpl->addRows( 'rooms_list_accommodation_panel_output',$rooms_list_accommodation_panel_output);
	$tmpl->addRows( 'coupons',$coupons);
	$tmpl->addRows( 'coupons_totals',$coupons_totals);
	$tmpl->addRows( 'smoking',$smokingOpts);
	$tmpl->addRows( 'customfields',$customFields);
 	$tmpl->addRows( 'pageoutput',$pageoutput);
	$tmpl->addRows( 'guesttypes',$guestTypes);
	$tmpl->addRows( 'extrasrow',$extrasHeader);
	$tmpl->addRows( 'roomfeaturesrowheader',$roomfeaturesHeader);
	$tmpl->addRows( 'roomfeaturesrow',$roomfeatures);
	$tmpl->addRows( 'manager_pricing',$manager_pricing);
	$tmpl->addRows( 'tax_totals',$tax_totals);
	$tmpl->addRows( 'onload',$toload);
	$MiniComponents->triggerEvent('05019');
	$mcOutput=$MiniComponents->getAllEventPointsData('05019');
	if (count($mcOutput)>0)
		{
		foreach ($mcOutput as $key=>$val)
			{
			$tmpl->addRows( 'customOutput_'.$key, array($val) );
			}
		}

	if (count($third_party_extras)>0)
		{
		$tmpl->addRows( 'third_party_extras', $third_party_extras );
		}
	if ($mrConfig['showExtras']=="1")
		{
		$tmpl->addRows( 'extras', $extra_details );
		}
	$componentArgs=array('tmpl'=>$tmpl);

	$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
	if (!get_showtime('include_room_booking_functionality'))
		$tmpl->readTemplatesFromInput( 'dobooking_norooms.html');
	else
		{
		if ( ($mrConfig['singleRoomProperty'] == "1" ) )
			$tmpl->readTemplatesFromInput( 'dobooking_srp.html');
		else
			$tmpl->readTemplatesFromInput( 'dobooking.html');
		}
	if (!defined('DOBOOKING_IN_DETAILS'))
		$tmpl->displayParsedTemplate();
	else
		{
		$booking_form = $tmpl->getParsedTemplate();
		define("BOOKING_FORM_FOR_PROPERTY_DETAILS",$booking_form);
		}

	if ($jrConfig['dumpTemplate']=="1")
		$tmpl->dump();
	}
	
	
function generateCustomFieldsJavascript($customFields)
	{
	$someRequired=false;
	foreach ($customFields as $c)
		{
		if ($c['REQUIRED'] != "&nbsp;")
			$someRequired = true;
		}
		
	if (!$someRequired)
		{
		$js.="<script>";
		$js.='function checkCustomFields()
			{
			return true;
			}';
		$js.="</script>";
		}
	else
		{
		$js="<script>";
		$js.='function checkCustomFields()
			{
			var pass			= true;
			';
		foreach ($customFields as $c)
			{
			if ($c['REQUIRED'] != "&nbsp;")
				{
				$js.='				var '.$c['FIELDNAME'].' 		=jQuery.trim(jQuery(\'#'.$c['FIELDNAME'].'\').val());
								setInputFillToOkColour(\'#'.$c['FIELDNAME'].'\');
								if ('.$c['FIELDNAME'].'.length == 0 )
									{
									setInputFillToErrorColour("#'.$c['FIELDNAME'].'");
									pass = false;
									}
				';
				}
			}
			
		$js.='
						return pass;
						}
						</script>
						';
		}
	return $js;
	}
?>