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
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Show Today\'s arrivals');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Show Today\'s departures');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Show booking enquiries');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Show other enquiries');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Quick reservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','List live bookings');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Show profiles');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Languages');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','General Configuration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Discounts Configuration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Pitchs/campsite Configuration');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Campsite Configuration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Rates Configuration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Back');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Back to Mos Residents List bookings');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Configuration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Load Sample Data');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Yes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','No');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','New');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','New pitch');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','New pitch feature');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','New pitch/campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','New campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','New campsite feature');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','New camper');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Save');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Arrival');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Departure');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Assign user admin functions');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','User name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Currently authorised');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Default campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Change this');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Access level');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','User modified');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Change campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Change access level');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Reception');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Campsite manager');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','All bookings');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','New bookings');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Edit Booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Arr/Dep');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Camper');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Pitch');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Payment');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','First Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Surname');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','The camper is due today. Click this button if they\'ve arrived');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Notes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Special requirements');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Please note that some special requirements may incur extra charges.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Adults');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Children');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Cancel booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Website userid');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','The house number or name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Street');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Town');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Landline number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobile number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email address');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Preferences');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Car registration number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Customer cancelled');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Campsite cancelled');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Select cancellation reason');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Days til arrival');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Cancellation charges due</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Cannot cancel this booking as the camper is already booked in');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Deposit paid, no more monies due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Deposit not paid, deposit due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Deposit paid, 50% of contract total due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Deposit not paid, 50% of contract total due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Deposit paid, 100% of contract total due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Deposit not paid, 100% of contract total due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Remainder due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Deposit not paid');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Confirm cancellation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Booking cancelled');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Days to arrival');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Booking type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Black');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Reception');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Pitch name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Pitch');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Floor');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Disabled access available?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max people');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Pitch/Campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Pitch/campsite type description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Pitch features list');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&pound;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','£');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Rates rules');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Deposit paid');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Enter deposit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total to pay');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Deposit ref');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Payment ref');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Deposit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Deposit saved');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Warning...</FONT></h1><BR><B>You need to chmod your language file to 766 in order for the language to be updated</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Quick Res select pitch/campsite types');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Checkbox');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Number of adults');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Number of children');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Cot required?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternatively');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Enter EITHER the nights the camper will be staying, or the departure date');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Number of nights');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Please select the pitch/campsite type required, the arrival date of the camper and either the number of nights the camper is staying or their departure date. Finally, enter the number of adults & children in the contingent.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Our pitchs');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Floor');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Disabled access?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max people');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Pitch/campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Sorry, but our available pitchs cannot service this many campers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Sorry, the campsite can not offer accommodation for this period. Please return to the calendars and review the availability displayed there.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Please select from the drop down list');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Select this camper');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Customer list');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">ERROR: There was an error in your choice of dates.<br>Press the back button & re-enter your data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">ERROR: You need at least one camper to make up a booking.<br>Press the back button & re-enter your data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">ERROR: The date ranges selected are incorrect.<br>Press the back button & re-enter your data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">ERROR: You did not select any pitch/campsite types.<br>Press the back button & re-enter your data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">ERROR: Booking date is in the past or today.<br>Press the back button & re-enter your data.</font>');

// Display camper form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Enter camper details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Confirm camper details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edit camper details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','First name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Surname');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','House');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Street');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Town');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postcode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Landline');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Registration number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Credit Card no.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Card issued');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Card expires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Issue number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Name on card');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Make your choice');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Select');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Rate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Rate Desc');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Min days');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Max days');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min people');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max people');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Nights');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Daily rate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Number of campers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Deposit');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','At least one of the days selected falls on a public holiday.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Sorry, no rates were found that fit the criteria specified. Do not despair however, it may well be that we need to tweak your requirements slightly. Please try again, modifying the number of days you wish to stay, or alternatively ring the campsite and book a pitch over the phone.');

// Pitchs tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','View pitchs & campsite config');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Pitchs');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Rm features');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Rm types');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Prop feats');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Pitch');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Floor');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Disabled access?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max people');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Features');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Pitch added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Pitch updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Click the pitch uid link to edit the item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edit item');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Rm features');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Feature description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Click the pitch features link to edit the item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Pitch feature added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Pitch feature updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Edit item');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Pitch types');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Pitch/campsite type abbreviation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Pitch/campsite type description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Click the pitch class uid link to edit the item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Pitch/campsite type added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Pitch/campsite type updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edit item');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Street');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Town');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Country');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postcode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Features');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Click the campsite uid link to edit the item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Campsite added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Campsite updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Edit item');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Campsite Features');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Campsite feature abbv.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Campsite feature full description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Click the campsite feature uid link to edit the item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Campsite feature added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Campsite feature updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Edit item');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Rates');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Rate title');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Valid from');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Valid to');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Rate per night');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min days');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max days');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min people');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max people');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Pitch/campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignore PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Allow public holidays');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Allow weekends');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Click the edit text link to edit the rate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Rate added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Rate updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edit item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Clone item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Delete Rate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Rate deleted');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edit rate');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Public holidays');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','The end date of the public holiday period should be the last night that you intend to bill the campers at public holiday rates.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Edit Public holiday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Start');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','End');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','New public holiday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Click the edit text link to edit the public holiday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Public holiday added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Public holiday updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Edit item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Clone item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Delete public holiday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Public holiday deleted');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Booking saved');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Please ensure that the form is filled in correctly.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Only registered users can book online');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Please register');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Bookings offline');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','My details');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','My bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Administer');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Book a pitch');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Book a camper in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Book camper out');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','List bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NEW bookings');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Camper admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Campsite admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Rate admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Discount admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Public holiday admin');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Please select the pitch/campsite type required, your arrival date and the number of nights you will be staying. Finally, enter the number of adults & children in the contingent.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Please enter your details. You only need to do this once, as the system will remember you for future visits.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Please select the pitch that you require.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Please enter your details');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Check availability');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','I want this pitch');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Select camper');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirm your details');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Choose my deal');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Select pitch/campsite types');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','First name');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Surname');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','House no.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Street');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Town');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Landline number');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobile number');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax number');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','There are no pitchs available able to satisfy the parameters specified');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Enter your details');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Confirm your details');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Thank you for making your booking with us and we hope that you enjoy your stay.<br><br> <b>Please note that this is only a preliminary booking, and will not be confirmed until you receive your confirmation letter from us.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Booking made for campsite: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Booking made for pitch: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Number of adults: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Number of children: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Arrival: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Departure: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Nights staying: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Camper Uid: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Name: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Landline: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobile: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Rate: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','The value of the contract is: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Deposit required: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Sorry, but we need you to update your details before we can process a booking. Please click on the link "My Details" above first and complete your address details. Thank you.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Thank you, your details have been saved.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Welcome stranger. Before you can book a pitch, you need to update your details under the "My Details" link.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Welcome back ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Book in camper ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Select camper ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Camper booked in ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','No campers are due to arrive today');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Book out camper ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Camper booked out ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Confirm camper book out');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','No campers are due to depart today');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Campers due in today');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Campers depart today');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Pitchs occupied');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','New bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','View pitch usage from:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Supplements');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Rates & Currency');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Discounting');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Cancellation policy.  NOT IMPLEMENTED');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','File uploads');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Current Setting');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Explanation');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Bookings offline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Take bookings offline if you dont wish to take bookings.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Discount scheme available?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','The discount scheme is for those who wish to offer people discounts depending on the number of campers in a party. Because it operates on the numbers in a party, it is not recommended that you use it if you do not charge on a per-person-per-night basis.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Level 1 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Level 2 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Level 3 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Level 4 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Level 1 discount value');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Level 2 discount value');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Level 3 discount value');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Level 4 discount value');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Single person suppliments');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Make sure this is set to Yes if you want to charge single person suppliments');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Single person suppliment charge');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Cot suppliments.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Make sure this is set to Yes if you want to charge charge for supplying a cot');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Cot suppliment charge');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Deposit required is percentage?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Is the deposit required to be a percentage of the total booking? If No, then the deposit applied with be a flat value');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Deposit required value');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Per person, per night');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Select Yes if you want to charge per-person-per-night. If no, then costs will be calculated on a per-pitch-per-night basis');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Forfeit can be redeemed?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Set this to Yes if you want to money forfeited after booking cancellations for use in the future by the customer. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','File exists');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','File types');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Specify here which file types are allowed to upload. Use comma separated lowercase lists without spaces. Example: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','File size');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. Image Filesize in Kilobyte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Click for week pitch usage starting today');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Click on a booked pitch to view the booking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','or select the date you are interested in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Pitchs booked');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Free');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Pitchs with a blue background are booked, however<br> if a pitch has red text, then no deposit has been paid.<br> Where a pitch has a star against "Booked" then the camper is expected to arrive on this day.<br> If a pitch has yellow text, then the camper is currently occupying the pitch.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Confirmation letter');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Dear ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cost per night - per pitch ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reservation details');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Thank you for booking at the');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Below is a summary of your reservation details. Please check that we have all of your details correct & contact us if there is an error.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Your pitch will be held until your arrival, and check in is after 2pm.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','We shall look forward to greeting you on the ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','We hope that you have a pleasant stay.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Now we must bring your attention to the small print.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','No allowance can be made for meals not taken or for pitchs not occupied for the full period of the booking. With this in mind we strongly recommend that you use a holiday insurance facility.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Cancellation and curtailment charges</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 days or more');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Deposit only.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 to 30 days');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% of total contract.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Arrival date to 14 days');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% of total contract.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','VAT@ 17.5% is included in all rates. Any increase or alterations will be charged.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Print confirmation letter');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Invoice printout');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Dear ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Cost per night - per pitch ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Number of nights: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contract initially agreed: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cost per night: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Grand total');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Invoice details');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Thank you your custom at the');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','We hope that we will see you again.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','VAT@ 17.5% is included in all rates. Any increase or alterations will be charged.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Print invoice');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Add service to bill');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Service description');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Service value');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Add to bill');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Other billed items');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Other billed items, total value: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item added to bill');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Default campsite not found</h1><br>Cannot continue. Contact your site administrator.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Select image file to attach');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Upload image');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Upload');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','File Upload');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Your file can be of type - max. size');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Submit a new File for Upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','You are only allowed to upload types of type:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Please select a file before uploading');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','The file must only contain alphanumeric characters and no spaces please.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','The file size exceeds the maximum the Administrator has set.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','A file with the specified filename already exists. Please give it another name before uploading.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Your File(s) have been uploaded.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','File NOT uploaded.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Your File has been uploaded.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Opt into jomres network?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','If you choose to opt this campsite into the jomres network, then it will be listed at jomres.net. Please note, it will be assumed that this is a live campsite. Jomres.net cannot be held responsible for your campsite. You must ensure that your details are correct.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Calendar language file');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Choose the language file that should be used in the Javascript calendar. Please note that some of the calendars may be faulty, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS Calendar CSS file');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Choose the CSS file that should be used in the Javascript calendar');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Check for public holidays?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','If you set this option to Yes, then you must ensure that you have seperate rates/rates for public holidays and normal dates. Set it to No if you charge the same rates for public holidays and normal dates.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Misc.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Delete this image');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','File(s) deleted');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Show departure input field');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Set this to Yes if you want to show the departure field. It has been noted that there may be some browsers that fail to handle the javascript calendar properly. Personally I leave it switched off because I think having the field there is ugly');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Choose the campsite you want pitch availability information on');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Any');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Pitch');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Campsite');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Show sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Set this to on to see the SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Show sql results');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Set this to on to see the SQL data returned and var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Choose your template pack');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','Top buttons css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Table headers css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Templates');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Delete');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Unable to remove this pitch, there are bookings against it. Cancel those bookings then retry.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Pitch deleted');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Delete pitch feature');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Unable to remove this pitch feature, it is assigned to some pitchs. Remove the feature from those pitchs and retry.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Pitch feature deleted');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Delete campsite feature');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Unable to remove this campsite feature, it is assigned to a campsite. Remove the feature from this campsite and retry.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Campsite feature deleted');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Delete pitch/campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Unable to remove this pitch/campsite type, it is assigned to a pitch. Try re-assigning the pitch to another pitch/campsite type then try again.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Unable to remove this pitch/campsite type, it is assigned to a rate. Try re-assigning the rate to another pitch/campsite type then try again.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Pitch/campsite type deleted');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Delete campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Unable to remove this campsite, it has data in table: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Campsite deleted');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','You do not have rights to delete this campsite.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Choose this campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Which campsite will your pitch be associated with?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Select a campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','You must select a campsite');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Tiny thumbnail image width');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Medium thumbnail image width');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Fullsize image width');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Click for a map');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Campsite description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check in times');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Area activities');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Driving directions');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Airports');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Other transport');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Policies & disclaimers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Your Jomres.net campsite key');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','When you are ready to put your website up on the web, visit <a href="http://www.jomres.net" target="_blank">Jomres.net</a> for your campsite key. With that jomres can register your campsite on the Jomres Network, ensuring that your reach the widest possible audience for your business.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Our campsites');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Address');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Visitors can book online');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Set this to Yes to ensure that visitors can book pitchs online.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Bookings are for a fixed period');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined arrival day" isn\'t set to Yes (unless you specifically want to force people to arrive on a certain day) otherwise you will not get many links in the availability calendar.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Booking period: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Booking pitchs');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Booking table border');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Change the colour of the booking table border');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Booking table background');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Change the colour of the booking table background');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Booking table width');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximum periods, eg 3x 7 booking periods = 21 days');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Number of campers required?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Set this to Yes to show the camper numbers fields in the booking form');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Is this an apartment/cottage/villa?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','EG you are renting out a campsite, rather than pitchs in that campsite. If this is the case, then you must make sure that you only have the one pitch registered against each campsite.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Maximum number of adults');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Set the maximum number of adults in the booking form');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Maximum number of children');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Set the maximum number of children in the booking form. If this is set to zero then children headers and numbers, dropdown boxes etc will not be shown at all.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Proceed');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Review booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirm booking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Discounts');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Warning...</FONT></h1><BR><B>You need to chmod your /components/com_jomres/site_config.php file to 777 in order to make it possible to modify your configuration</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Monday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Tuesday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Wednesday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Thursday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Friday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Saturday');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Sunday');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Mo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Tu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','We');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Th');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Su');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Availability cal.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Font face for all text');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Font size for all text');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Cell height');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Cell width');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Font colour for the current date');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Font colour for days in the display month ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Font colour for days not in the display month');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cell bgcolour for days when campsite/pitch is available');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cell bgcolour for days not in display month');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cell bgcolour for occupied days');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cell bgcolour for provisionally booked pitchs (bookings for which a deposit has not been taken)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cell bgcolour for dates in the past');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Colour key:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Occupied/Not available');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Available for bookings');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Provisional bookings');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Pre-defined arrival day');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Only for sites offering fixed period bookings. Choose the day that arrivals must begin on.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fixed arrival day');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Stay period (days)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Show availability calendars?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Set this to yes to show the availability calendars');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Confirm your selection');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Availability');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Things you need to do: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Review your chosen dates ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Review your camper numbers ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Provide your personal details');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Make your choice');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Review your chosen pitch');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Review your order. When you are satisfied, please confirm your booking');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Click on a free date to view the booking form.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Black bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','No black bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','New Black booking');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Black book these pitchs');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Delete camper');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Camper deleted');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Unable to delete this camper as they have bookings open against them. Cancel the bookings & try again.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Admin panel shows tape view');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Set this to Yes if you want to use the weekly tape view, as opposed to the monthly calendar view for availability.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Actual pitch cost: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Email is not valid ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','This is an email received from');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hello');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Thank you for making your booking with');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','A summary of the booking follows:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','If you have any questions regarding this booking or any other service, then please do not hesitate to contact us.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Our telephone number is');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Alternatively you can contact us by email at');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Smoking');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Any");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Calendar output format');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','This allows the user to change the output format of dates within Jomres');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Calendar input format');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','This allows the user to change the input format of dates within Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Fixed period bookings allow short breaks');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Length of short break');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Published');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Settings');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Use paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Use the Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Requires a PayPal Developer Account');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Your paypal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Note: To use paypal you must goto your paypal account & enable Autoreturn. (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookapitch&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Error, the paypal email hasn not been set');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','No audit trail');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Date');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Time');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','User (username)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operation');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Campsite rights');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','View details');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Any</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter on date');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter on username');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter on operation');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Arrival Pending');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Arrive today');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Current Resident');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Departs today');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Departure overdue');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Has not arrived');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filter');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Unknown user');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Created pitch');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Updated pitch');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Deleted pitch');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Created rm feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Updated rm feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Deleted rm feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Inserted rm type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Updated rm type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Deleted rm type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Created campsite');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Updated campsite');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Deleted campsite');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Created prop. feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Updated prop. feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Deleted prop. feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Edited prop. settings');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Published prop.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Created rate');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Updated rate');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Deleted rate');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Created pub. hol.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Updated pub. hol.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Deleted pub. hol.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Added svc. charge');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Cancelled booking');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Booked camper in');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Booked camper out');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Updated cc details');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Entered deposit');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Created camper');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Updated camper');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Deleted camper');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Uploaded new prop image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Uploaded diff. prop image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Deleted image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Uploaded new rm image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Uploaded diff rm image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Uploaded new rsrc image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Uploaded diff. rsrc image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Booked a pitch');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Created an extra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Updated an extra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Deleted an extra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Published extra.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Entered black booking.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Deleted black booking.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Edit extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Price');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','New extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Click the edit text link to edit the extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Extra added');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra updated');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edit item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Clone item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Delete extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Extra deleted');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Extras admin');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Show extras at booking time?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Set this to yes to show any extras that you may wish to offer to the camper');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optional extras.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Select this campsite');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Invert selection/check all');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Black booking start date');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Service resumes date');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Black bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','One or more of the pitchs checked are already booked. If you wish to Black Book these pitchs you first need to cancel the bookings against them.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','There was an error attempting to book these pitchs, one or more of the pitchs you selected is not free.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Pitchs included in black booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Delete black booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','View blackbooking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','No black bookings to list');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Number of stars');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Show smoking option?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Set this to yes to show the smoking option.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Reset');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Your payment status from paypal is set to Pending. Once the campsite can confirm receipt of payment then the booking will be changed to confirmed.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Booking cancelled');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Search here for:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Search ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Show paypal debugging info?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Show pitch names?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Set this to Yes to show pitch names?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Show pitch/campsite types?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Set this to Yes to show pitch/campsite types?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Default smoking option');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Be aware: If your default option is Yes and all your pitchs are No smoking, then no pitchs will show up in the bookings page listing.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Currency symbol');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Eg &amp;pound&#59; Please note that you should use the HTML entities code for the required symbol. For a list of these entities please visit <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Currency code');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Eg GBP. This is used in the email to the customer confirming their booking.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','More info');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Warning...You are logged in as a manager with privileges for all properties. Be aware that this may cause problems when performing some functions within Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limit advance bookings?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Days advanced bookings limited to:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTE: It is not recommended that you set both of the following options to Yes, you should use only one of the two tax calculations available to you. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Tax');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Pitch tax');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Designed for the American market. These are the pitch tax amounts that will be charged to the camper. You can charge a combination and/or of fixed and percentage figures. Note that these taxes are only applied to the cost of the pitch.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Tax fixed amount');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Tax percentage');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Tax');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','For any market that applies a blanket rate, eg. Value Added Tax in the UK. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Tax percentage');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Archive all records');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' records archived');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer archived audit records');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Our Rates');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Rate name');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Rate description');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Pitch/campsite type');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Valid from');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Valid til');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Per person per night');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Per night');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Not including weekends');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum days');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum days');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min people');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max people');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Preview');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Editing on?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Current text');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','New text');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Updated custom text.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Edit Language');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Number of unarchived records: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','There are more than 200 records in the active audit trail, therefore it is not possible to display the SQL activities performed. If you wish to view the SQL, you will need to analyse the audit table directly. If you want to check the SQL regularly, it is recommended that you archive regularly');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','List campsite types');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Edit campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Campsite type description');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Campsite type saved');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Unable to delete campsite type. Campsite type is assigned to one or more properties, please re-assign them before trying to delete');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Campsite type(s) deleted');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Error, campsite has no pitchs.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Error, campsite has no rates.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Error, campsite has no pitch/campsite types.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Change campsite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Remainder to pay');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Your paypal transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at www.paypal.com to view details of this transaction. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','No extra services to add to bill');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Deposit');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Full amount');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Amount charged at booking time');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Use this option to decide what should be charged at booking time. Choose deposit if the deposit should be charged, or Full amount if the full amount should be charged.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Cal months to show');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','In the pitch availability, How many months of the calendar should be shown?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Signed on behalf of ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Cancel');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Please choose the pitch(s) you wish to take out of service, and the relevant dates. <br>If a pitch does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/> When you have selected the appropriate dates, click the blue "apply" button to re-check pitch availability. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>You have been logged out for inactivity</b> Please log in and try again.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Reason');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Use payment gateways?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Set this to yes if you want to use online payment gateways. <b>Note:</b>This does not switch off the deposit calculation showed during the booking process. To disable this you can edit the templates that show pitchs and wrap the elements that refer to deposits inside a class whos font and bg colour are the same.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Please choose your payment method.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway enabled?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modified plugin setting');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Inserted plugin setting');
/**
* @ignore
*/
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK','External link');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Encryption');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Use mCrypt encryption?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Set this to yes IF you have mCrypt compiled into PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Encryption key');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Encryption mode');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Encryption algorithm');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Viewed credit card');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Updated credit card');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Edit credit card');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Edit icon size');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Measured in pixels square.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch campsite image upload');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Images already in directory');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Show link to slideshows?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Show slideshow inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Set this to yes if you want to show the slideshow inline with the campsite details.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Slideshow full height');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail target height');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sorry, no images available for this campsite. Please upload some images using the batch upload feature if you wish to use the slideshow feature.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Popup window width');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Popup window height');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Image location');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Only change this if you have a particular need for the jomres images to be elsewhere. Default if unset is \'/images/stories/jomres/\' in relation to the system root.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Show link to rates?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Popups allowed?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','If set to no, then links that normally would have opened in a pop will open inline instead.');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow images');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Use this form to upload multiple images of this campsite.<br/><b>Note</b> that any images with the same name will be overwritten. Also note that this form does not upload pitch specific images or the campsite header image, you will need to upload them from the Campsite Admin section.<br/><b>Note</b> Images uploaded here will be written to the /images/stories/jomres/*campsite_uid* folder. If this folder does not exist, it will be created, unless of course an alternative directory has been specified in the configuration.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Misc');
/**
* @ignore
*/
define('_JOMRES_A','Site configuration');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Use global campsite features');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Set this to Yes if you want to force all properties to use only the campsite features defined by the webmaster.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','To assign an image to this feature you first need to upload your campsite feature images to the /images/stories/jomres/pfeatures/ folder. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Icon');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Select the search plugin that you want to use.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Sorry, your search did not return any results. Please modify your search and try again.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Are you sure you wish to do this?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Book a pitch');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Book now');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Security number');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Show rates inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Address');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailed information');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Click for Pitchs and availability');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Show rates information');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Show Address information below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Show detailed campsite info below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Show pitchs and availability below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Show rate information below this link');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flat rate rates');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Averages');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Select the rates model you want to use');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"You have two choices of rate calculation methods. The first, the 'flat rate' method allows you to offer a number of different rates to the camper and the rate for the stay is the same for the entire time. This is useful if you want to offer several different rates for the same date, eg Bed and Breakfast rate and B&B and Evening meal rate. Choose the 'averages' rate if you want to adjust your prices dependant on the date in question. Jomres will find all of the rates for each day in the booking, add them together then return the average rate across the period");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Use Jomres portal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Set this to Yes if Jomres is going to be used in conjunction with the Jomres portal software');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Show departure date input?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the depareture date in bookings will always be set to the day after the arrival date.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Description limit');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"This limits the number of characters shown in the campsite listing when drawing from the campsite description.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Daily rate multiplier');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"This allows the user to append a multiplier to the daily rate that is returned to booking form during the booking process (useful if you want to show a properties rate by the week for example)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Slideshow popup width');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Slideshow popup height');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Update');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Click the update button to check availability');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Used date() format style?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Publish');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Unpublish');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Please complete the following fields: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Thank you.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Use global pitch/campsite types');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Set this to Yes if you want to force all properties to use only the pitch/campsite types defined by the webmaster. You need to set this to Yes if you intend to allow searching via pitch/campsite types.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','To assign an image to this pitch/campsite type you first need to upload your pitch/campsite type images to the /images/stories/jomres/rmtypes/ folder. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Input error border colour');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input error background colour');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Default country in booking form');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Use site help?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Set this to Yes if you want Jomres to show the site help text above the search bar.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Edit your sitehelp booking text here.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Items marked with a red star are required.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Users can register their properties?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Set this to Yes if you want users to be able to register their own properties without admin intervention.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Please provide the country and region of your campsite.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Please complete your campsite details.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Items highlighted are required.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Created campsite');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Sorry, you can't create a campsite on this system. You must be a logged in, registered user before you can proceed.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Created campsite: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','For user: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Chargeable daily?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Per day');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Show calendar from beginning of year?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','The availability calendar shows from the beginning of the current year.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Show detailed pitch information?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','If you set this to No, then Jomres will not attempt to show all the during bookings, instead it will simply advise that availability exists.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Number of pitchs available');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Please select the number of pitchs you require, of the type you require.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Number required');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Back to campsite details');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Pitch/campsite types');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Use Jomres metadata?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','If you set this to Yes, then Jomres will use text that is repeated from campsite description & Campsite Listings pages to generate Metadata. Seperate words with a space.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stop words');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"These are stop words, IE words that you <i>don't</i> want to appear in the meta data.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Other elements to remove');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','The are elements that should be stripped from the meta data. An example could be less than symbols, quotatin marks etc.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Frequency');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','The number of times a word must be repeated before it can be included in the meta data.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Random search limit');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Show currency conversion links in rate listing?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Convert rate');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Allow users to edit using html editors?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Use this form to place your booking. Modify your booking particulars like arrival and departure dates & camper numbers, then select the pitch(s) you require from the list of those available. Click any available pitchs to add them to your booking. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Use this form to place your booking. Modify your booking particulars like arrival and departure dates & camper numbers. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Booking particulars');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Select the details of your booking requirements');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Availability ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Select the pitchs that you require');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Look here to see if the campsite is available at this time.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Enhance Your Stay');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Select any optional extras you want to include in the booking');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Per night');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Your Details');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Please enter your details. Note that all fields are required except your mobile number');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Available pitchs');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Selected pitchs');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>The earliest possible arrival date is: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Per night:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Accommodation');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extras:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Tax:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Discount:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Grand Total:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Campers');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Click now to add this pitch to your selection');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Click now to remove this pitch from your selection');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Camper types');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','The type of customer, eg Children age 5-10, or Student ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Notes');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Notes that you may want to make regarding this customer type');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','The maximum number of this customer type that can be selected in the booking form');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Is percentage');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','The figure calculated is a percentage of the Base figure calculated for the pitch. If this is set to no then the figure you specify is simply added or subtracted from the base pitch value.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Add variance?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','The figure calculated is added to or removed from the Base figure calculated for the pitch. Set this to No if you want this to be a discount from the base figure. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Variance');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','The amount of the variance');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modified customer type order');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Published customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Deleted customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Created customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Updated customer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Updated customer type');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Show availability calendar in campsite details page?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Show link to availability calendar in campsite details page?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Show <b>only</b> Availability calendar/Pitchs list?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Switch this to Yes to disable display of the campsite header and details, so that only the pitchs list/availability calendar is viewable in the campsite details section. Only really intended for users renting out single pitch properties (eg apartments, cottages etc).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS Style to use on site');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Dep minimum interval');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','The mimimum interval in the booking form between the arrival date and the departure date.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Booking form pitch list show pitch number');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Booking form pitch list show pitch name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Booking form pitch list show rate title');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Booking form overlib show title');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Booking form overlib show description');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Booking form overlib show rate/rate');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Booking form overlib show starts');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Booking form overlib show ends');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Booking form overlib show minimum days');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Booking form overlib show maximum days');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Booking form overlib show minimum people');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Booking form overlib show maximum people');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Booking form overlib show pitch number');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Booking form overlib show pitch name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Booking form overlib show pitch/campsite type');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Booking form overlib show pitch smoking');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Booking form overlib show pitch disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Booking form overlib show pitch floor');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Booking form overlib show pitch maximum people');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Booking form overlib show pitch features');

/**
* @ignore
*/
define('_JOMRES_ORDER','Order');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','You have configured Jomres as a single pitch campsite (eg an apartment, cottage, villa) however you have more than one pitch created. This may result in errors when using Jomres, so if you are going to continue using Jomres to manage a single pitch campsite you need to remove all but one of the pitchs. Please modify your configuration so that Single Pitch Campsite = No, then go to Campsite Admin and remove all pitchs except one, so that you only have one pitch against this campsite.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Required');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Days before arrival');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','The minimum number of days that must elapse, from "today", before the arrival date.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Per night:');

/**
* @ignore
*/
define('_JOMRES_DTV','Date type variations');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Day of week');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Date ranges');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Stay days');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Day of week');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','The day of the week');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Rate class component selection');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','This dropdown allows you to choose a custom rate class object that you may have created/downloaded and installed as a seperate component in system. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Camper type default');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Default number of first the first Camper type. If you use camper types, then this is the default number that the first camper type in the booking form will be set to.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Registered users only can book online?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sorry, you must be a registered user to book online. Click here to register on this site. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Font colour for links to current bookings');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend borders');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Which dashboard plugin to use');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','If you have installed any Jomres dashboard plugins you can choose an alternative to the default dashboard here.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Pitch is booked');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Black booking');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Round deposit up to nearest integer?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Charge deposits?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Rate charges stored as weekly figures?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','You have the option of storing rate charges in either daily or weekly values. If storing them as weekly, you MUST set this option to Yes.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','per week');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fixed arrival dates recurr: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available) ');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Smoking option invalid');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Arrival date incorrect');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Departure date incorrect');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','The booking is too short. There needs to be at least this many days between arrival and departure dates:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Your interval is');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Campertype variant incorrect');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Select your camper numbers/type');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','You have too many in the party for the available rates');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','You have chosen more pitchs than you have campers, click on a pitch name to remove it from your selection');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Too many campers for the available beds');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','You need to choose more pitchs');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Select a pitch');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','First name is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Surname is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','House no/name is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Street is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Town is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postcode is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Country is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Landline number is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Cellphone number is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email address is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email address is not valid');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Unable to validate email domain');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','We have vacancies!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','No pitchs selected yet');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Booking no.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok to book, message box background');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump template vars?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Figure is percentage');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Set this to Yes if the single person calculation figure is a percentage. If no then it will be applied as a flat sum.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Available pitchs/rate limit');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Use this input to limit the number of available pitchs & rates that are listed in the booking form. Set it to zero if you do not want limiting enabled. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','No vacancies at this time!');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Margin');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Profit margin, in percent.');


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Show Jomres admin options as icons?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Set this to no if you want all the admin links shown as text.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');

/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Use global currency?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Set this to yes to force all properties to use the same currency (e.g. & # 8 3 6 4 ;)');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Campsite Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Rate only valid if stay period includes a weekend day (friday or saturday) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Rates that allow or disallow weekends will take this setting into account when generating the pitchs list.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any campsite information');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your campsite changes before uploading a campsite image');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Prices from - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','All');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Features');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Description');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Availability');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Search');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find properties that have accommodation available on your chosen dates.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','List all properties by campsite type.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','List all properties by pitch/campsite type.');

/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Default');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Campsite Name');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Campsite Region');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Campsite Town');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Stars');

/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Campsite list');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Campsite details - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking pitch availability<br/>(Pitch selection will be reset)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your pitch selection');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Pitch image');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Currency format');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Note! These options only affect the language format in modules. To adjust the javascript langauge format for a given campsite please edit that javascript calendar options within that campsite');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datetime');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Message');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Rate Configuration Mode');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different rate types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your rates.<br/>
Normal mode: You will have one rate for each pitch type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each pitch/campsite type. <br/>
Advanced: The \"old\" Jomres method of managing rates. <br/>
<br/>
The different rate modes allow you to choose the method of configuring rates that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference pitchs and rates to pitch/campsite types and allows you to configure pitchs and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of rates, it is done by cross referencing lots of different rates with each other. This results in a number of rates being created for you covering a period of time, but you can not layer rates over each other.<br/>
Advanced mode lets you create a pitch and associate it with a pitch type. You then create a rate and associate THAT with a pitch type. Using this method it is possible to \"layer\" rates over each other, for example a pitch type \"Double bed\" can have one rate for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a pitch or rate from a pitch/campsite type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of pitchs and rates for the rate mode to work the system may need to reset some data to make the current rate configurations compatible with the current rate editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing rates are retained.<br/>
Normal -> Micromanage. All existing rates are removed.<br/>
Advanced -> Normal. All existing rates are removed.<br/>
Advanced -> Micromanage. All existing rates are removed.<br/>
Micromanage -> Advanced. All existing cross references between rates are removed, but the rates themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and rates are removed.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show pitchs list in campsite details page?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Campsite type');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP only');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max people per pitch');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','You are not logged in. If you log in/register with this site then you will be able to view your bookings information.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','List Bookings, no deposit paid');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Campsite type');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your pitch prices dynamically.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate pitch prices based on the number of pitchs of a required type that are available on a given date. This allows them to offer discounts on a pitch/campsite type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of pitchs of a selected type are available in the campsite on a given day.<br/> The days threshold defines the number of days that the arrival date must be within before pitch prices are adjusted by this feature, then the percentages options allow you to configure the percentage of pitchs that can be available before a given discount is applied. Note however, if multiple pitchs are booked then the current level of discount will be applied to all pitchs and will not reduce as more pitchs are selected.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threshold (number of days between arrival date and today)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage pitchs occupied 10% or less');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage pitchs occupied 25% or less');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage pitchs occupied 50% or less');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage pitchs occupied 75% or less');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Pitch/Campsite type ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' to ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Pitch price not discounted ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Campsite Details page.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Max people that campsite can accommodate');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',' ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID','% discount if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE',' ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID','percent discount if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE','% or more discount may be available if the arrival date is before ');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose rate info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed rate information in the campsite details/rate popup');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to campsite managers in the General Configuration section. This is useful if you do not want campsite managers to play around with too many settings, instead you can edit jomres_config.php to define default campsite options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Amend Booking - Campsite Selection');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Campsite');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Cancel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configuration');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a campsite in the event that another commission rate is not otherwise set.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Title');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Type');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Comission rate');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Campsite name');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Campsite address');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','License number');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Your license number for the portal plugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistics');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Period: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Campsite view');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','January');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','February');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','March');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','April');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','May');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','June');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','July');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','August');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','September');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','October');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','November');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','December');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Pitch usage');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Campsite id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Camper id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Add campsite');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Source : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Is this a multipitch campsite?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Is this a campsite like a campsite/bed and breakfast/penzion? If so, select Yes. If it is a single pitch campsite like a villa/cottage then choose No.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to nBill');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated campsite (if applicable)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have campsite type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this campsite type so pitchs become, for example, DVDs, etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this campsite as it is the only campsite that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one campsite only limit) then you should create a new campsite first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Is this campsite a campsite/bed and breakfast/camper house/pension? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out pitchs in a campsite, or the campsite itself. Select MRP if you are offering pitchs, select SRP if you are offering the entire campsite. ");

// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per pitch ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Enhance Your Stay Total ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Hover over a thumbnail for a larger image");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Show slideshow above campsite details or below.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Top");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Bottom");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Both");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");

// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"The absolute path to the available logs. Remember, you will still need to enable logging by editing jomres.php manually. although error logging is automatic all other logs must be switched on by yourself.");
// Jomres 3.1.13
/**
* @ignore
*/
if (!defined('_PN_LT'))
	define('_PN_LT','&lt;');
/**
* @ignore
*/
if (!defined('_PN_RT'))
	define('_PN_RT','&gt;');
/**
* @ignore
*/
if (!defined('_PN_PAGE'))
	define('_PN_PAGE','Page');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','of');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','End');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Display #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
	
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact campsite');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Campsite enquiry from ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the campsite\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required pitches from the list on the right');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min pitches already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of pitches already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N pitches are already selected. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max pitches already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of pitches already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N pitches have been selected in the booking form. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"Half booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Saving...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Please wait, your order is being processed...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres logging');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
/**
* @ignore
*/
global $jomresConfig_secret;
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD','Method');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Rate");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"User");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Raised");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Due");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");


/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','This is your dashboard, here you can see a general overview of your property\'s availability. ');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Use Jomres messaging');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<br/>
<br/>
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index2.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>

<br/>
");
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Set this to Yes to tell Jomres that it must use subscription package handling.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Create new user on booking');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres will pass your address to Google to generate the map position in the property details. If for whatever reason Google cannot find your address based on the information found above, you can ienter latitude and longitude in the lat/long fields instead. If you choose to enter the latitude and longitude, please note that I have found the Google earth lat and long information to be inaccurate so you are advised instead to visit <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">the itouchmap site</a> and use their information to determine your latitude and longitude. When entering your lat and long, the format should be something like '51.754564622' and '-4.997314810'.");

/**
* @ignore
*/
define('_JOMRES_CONTROLPANEL','Control Panel');

/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');


// Jomres v4.2

/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
/**
* @ignore
*/
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS','Your business details');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
/**
* @ignore
*/
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');

/**
* @ignore
*/
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');

/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Print invoice');
