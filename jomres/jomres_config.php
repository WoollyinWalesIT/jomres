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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
 */

$mrConfig['version']='4.2.2';
$mrConfig['newTariffModels'] = "1";
$mrConfig['singlePersonSuppliment']='0';
$mrConfig['singlePersonSupplimentCost']='10';
$mrConfig['perPersonPerNight']='0';
$mrConfig['depositIsPercentage']='1';
$mrConfig['depositValue']='10';
//$mrConfig['checkPublicHolidays']='0';
//$mrConfig['cancellationPolicyReserveDeposits']='1';
//$mrConfig['jscalendarLangfile']='calendar-en.js';
//$mrConfig['jscalendarCSSfile']='calendar-blue.css';
$mrConfig['errorChecking']='0';
$mrConfig['errorCheckingShowSQL']='0';
//$mrConfig['errorCheckingShowSQLvardump']='0';
//$mrConfig['css_title']='title';
//$mrConfig['css_topbuttons']='pagenav';
//$mrConfig['css_tableheaders']='contentheading';
//$mrConfig['images_tiny']='100';
//$mrConfig['images_medium']='150';
//$mrConfig['images_large']='200';
$mrConfig['jomresdotnet']='www.jomres.net';
$mrConfig['visitorscanbookonline']='1';
$mrConfig['fixedPeriodBookings']='0';
$mrConfig['fixedPeriodBookingsNumberOfDays']='7';
$mrConfig['numberofFixedPeriods']='4';
$mrConfig['singleRoomProperty']='0';
//$mrConfig['bookingTableBackground']='#ffffff';
//$mrConfig['bookingTableBorder']='#d33d02';
//$mrConfig['bookingTableWidth']='100%';
$mrConfig['fixedArrivalDateYesNo']='0';
$mrConfig['fixedArrivalDay']='0';
$mrConfig['showAvailabilityCalendar']='1';
$mrConfig['avlcal_todaycolor']='#CC0000';
$mrConfig['avlcal_inmonthface']='#000000';
$mrConfig['avlcal_outmonface']='#666666';
$mrConfig['avlcal_inbgcolour']='#6AFB92';
$mrConfig['avlcal_outbgcolour']='#FFCCFF';
$mrConfig['avlcal_occupiedcolour']='#FF0000';
$mrConfig['avlcal_provisionalcolour']='#FFFC17';
$mrConfig['showRoomsListingLink']='1';
$mrConfig['cformat']='2';
$mrConfig['weekenddays']="5,6";

$mrConfig['avlcal_black']='#BEBEBE';
$mrConfig['avlcal_booking']='green';
$mrConfig['avlcal_pastcolour']='#BEBEBE';
$mrConfig['avlcal_weekendborder']='#BEBEBE';

//$mrConfig['showAdminTapeview']='0';
$mrConfig['cal_output']='jS M Y';
$mrConfig['cal_input']='%d/%m/%Y';
$mrConfig['fixedPeriodBookingsShortYesNo']="0";
$mrConfig['fixedPeriodBookingsShortNumberOfDays']="4";
$mrConfig['showExtras']="1";
$mrConfig['defaultSmokingOption']="2";
//$mrConfig['paypalDebugging']="0";
$mrConfig['currency']="&#163;";
$mrConfig['currencyCode']="GBP";
$mrConfig['showSmoking']="0";
$mrConfig['limitAdvanceBookingsYesNo']="0";
$mrConfig['advanceBookingsLimit']='90';
$mrConfig['roomTaxYesNo'] ="0";
$mrConfig['roomTaxFixed'] ="0";
$mrConfig['roomTaxPercentage'] ="0";
$mrConfig['euroTaxYesNo'] ="0";
$mrConfig['euroTaxPercentage'] ="0";
$mrConfig['editingOn']="0";
$mrConfig['depAmount']="0";
$mrConfig['CalendarMonthsToShow']="12";
//$mrConfig['galleryLink']="";
$mrConfig['encKey']="";
$mrConfig['editiconsize']="small";
$mrConfig['showTariffsLink']="1";
$mrConfig['useOnlinepayment']="0";
//$mrConfig['popupsAllowed']="1";
$mrConfig['showdepartureinput']="1";
$mrConfig['ratemultiplier']="1";

$mrConfig['dateFormatStyle']="1";

$mrConfig['showSlideshowLink']="1";
$mrConfig['showSlideshowInline']="1";
$mrConfig['showTariffsInline']="1";
$mrConfig['inputBoxErrorBackground']="#fce31d";
$mrConfig['defaultcountry']="GB";
$mrConfig['calstartfrombeginningofyear']="0";
$mrConfig['showGoogleCurrencyLink']="1";
$mrConfig['currencyCodes']="USD";
$mrConfig['showRoomsInPropertyDetails']="1";
//$mrConfig['cssstyle']="Kalsey CSS tabs";
//$mrConfig['showOnlyAvailabilityCalendar']="0";
$mrConfig['minimuminterval']="1";
$mrConfig['mindaysbeforearrival'] ="1";
//$mrConfig['dashboardClasses']="com_jomres";
$mrConfig['defaultNumberOfFirstGuesttype']="2";
$mrConfig['registeredUsersOnlyCanBook']="0";
$mrConfig['roundupDepositYesNo']="0";
$mrConfig['chargeDepositYesNo']="1";
$mrConfig['tariffChargesStoredWeeklyYesNo']="0";
$mrConfig['fixedArrivalDatesRecurring']="12";
$mrConfig['inputBoxOktobookBackground']="#11ff22";
$mrConfig['supplimentChargeIsPercentage']="0";
//$mrConfig['dumpTemplate']="0";
$mrConfig['returnRoomsLimit']="1";
//$mrConfig['margin']="0.00";
$mrConfig['tariffmode']="0";
$mrConfig['roomslistinpropertydetails']="0";
$mrConfig['verbosetariffinfo']="0";

$mrConfig['bookingform_roomlist_showroomno']="1";
$mrConfig['bookingform_roomlist_showroomname']="0";
$mrConfig['bookingform_roomlist_showtarifftitle']="0";

$mrConfig['bookingform_overlib_tariff_title_show']="1";
$mrConfig['bookingform_overlib_tariff_desc_show']="1";
$mrConfig['bookingform_overlib_tariff_rate_show']="1";
$mrConfig['bookingform_overlib_tariff_starts_show']="0";
$mrConfig['bookingform_overlib_tariff_ends_show']="0";
$mrConfig['bookingform_overlib_tariff_mindays_show']="0";
$mrConfig['bookingform_overlib_tariff_maxdays_show']="0";
$mrConfig['bookingform_overlib_tariff_minpeeps_show']="0";
$mrConfig['bookingform_overlib_tariff_maxpeeps_show']="0";
$mrConfig['bookingform_overlib_room_number_show']="1";
$mrConfig['bookingform_overlib_room_name_show']="0";
$mrConfig['bookingform_overlib_room_type_show']="1";
$mrConfig['bookingform_overlib_room_smoking_show']="0";
$mrConfig['bookingform_overlib_room_disabledaccess_show']="1";
$mrConfig['bookingform_overlib_room_floor_show']="0";
$mrConfig['bookingform_overlib_room_maxpeople_show']="1";
$mrConfig['bookingform_overlib_room_features_show']="1";

$mrConfig['bookingform_requiredfields_name'] ="1";
$mrConfig['bookingform_requiredfields_surname'] ="1";
$mrConfig['bookingform_requiredfields_houseno'] ="1";
$mrConfig['bookingform_requiredfields_street'] ="1";
$mrConfig['bookingform_requiredfields_town'] ="1";
$mrConfig['bookingform_requiredfields_postcode'] ="1";
$mrConfig['bookingform_requiredfields_region'] ="1";
$mrConfig['bookingform_requiredfields_country'] ="1";
$mrConfig['bookingform_requiredfields_tel'] ="1";
$mrConfig['bookingform_requiredfields_mobile'] ="1";
$mrConfig['bookingform_requiredfields_email'] ="1";

$mrConfig['bookingform_roomlist_showdisabled'] ="1";
$mrConfig['bookingform_roomlist_showmaxpeople'] ="1";

$mrConfig['accommodation_tax_code'] ="1";

$mrConfig['use_variable_deposits'] ="1";
$mrConfig['variable_deposit_threashold'] ="60";

$mrConfig['is_real_estate_listing'] ="0";
?>