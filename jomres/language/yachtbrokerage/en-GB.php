<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define('_JOMRES_COM_MR_QUICKRESDESC','Quick reservation');
define('_JOMRES_COM_MR_SHOWPROFILES','Show profiles');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','General Configuration');
define('_JOMRES_COM_MR_BACK','Back');
define('_JOMRES_COM_MR_YES','Yes');
define('_JOMRES_COM_MR_NO','No');
define('_JOMRES_COM_MR_NEWTARIFF','New');
define('_JOMRES_COM_MR_NEWPROPERTY','New boat');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','New business feature');
define('_JOMRES_COM_MR_NEWGUEST','New guest');
define('_JOMRES_COM_MR_SAVE','Save');
// View bookings
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Name');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Arrival');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Departure');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Assign user admin functions');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Name');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','User name');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Currently authorised');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Default business');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Change this');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Access level');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','User modified');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Reception');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Business manager');
// Edit bookings
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','All bookings');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','New bookings');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Edit Booking');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Arr/Dep');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Client');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Yacht');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Payment');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','First Name');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Surname');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Special requirements');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Please note that some special requirements may incur extra charges.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Cancel booking');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','The house number or name');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Street');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Town');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Landline number');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobile number');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email address');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Cannot cancel this booking as the guest is already booked in');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Deposit not paid');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Confirm cancellation');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Booking cancelled');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Days to arrival');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Booking type');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Black');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Reception');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Yacht name');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Yacht');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Berth');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Disabled access available?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max people');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Yacht type');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Yacht type description');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Yacht features list');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Deposit paid');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Enter deposit');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total to pay');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Deposit ref');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Booking');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Deposit');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Deposit saved');
// Edit Language
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Our yachts');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Business');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Yacht type');
// Display guest form
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edit guest details');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','First name');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Surname');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','House');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Street');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Town');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postcode');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Landline');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobile');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Credit Card no.');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Card issued');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Card expires');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Issue number');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Name on card');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Make your choice');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Days staying');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Number of clients');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
// Yachts tab
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','View yachts & business config');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Yachts');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Yt features');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Yacht types');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Business');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Prop feats');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Yacht');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Type');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Name');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Number');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Berth');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Disabled access?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max people');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Features');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Yacht added');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edit item');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Yt features');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Feature description');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Yacht feature added');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Yacht feature updated');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Yacht type');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Yacht type abbreviation');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Yacht type description');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Yacht type added');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Yacht type updated');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edit item');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Boat/yacht Name');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Type (Sail or Motor)');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Town');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Country');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Engine');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Features');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Business added');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Business updated');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Business Features');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Business feature abbv.');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Business feature full description');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Business feature added');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Business feature updated');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tariffs');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tariff title');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Description');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Valid from');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Valid to');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Rate per night');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min days');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max days');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min people');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max people');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Yacht type');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignore PPPN');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Allow weekends');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tariff added');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tariff updated');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edit item');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Clone item');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tariff deleted');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edit tariff');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Public holidays');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Booking saved');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Book a guest in');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Book guest out');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','List bookings');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NEW bookings');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Client admin');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Business admin');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Check availability');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirm your details');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','First name');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Surname');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','House no.');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Street');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Town');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Landline number');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobile number');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','There are no yachts available able to satisfy the parameters specified');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Thank you for making your booking with us and we hope that you enjoy your stay.<br><br> <b>Please note that this is only a preliminary booking, and will not be confirmed until you receive your confirmation letter from us.</center>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Booking made for business: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Booking made for yacht: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Arrival: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Departure: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Name: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Landline: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobile: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','The value of the contract is: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Book in guest ');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Select guest ');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Client booked in ');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','No clients are due to arrive today');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Book out guest ');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','No clients are due to depart today');
// Config panel
define('_JOMRES_COM_A_SUPPLIMENTS','Supplements');
define('_JOMRES_COM_A_TARIFFS','Tariffs & Currency');
define('_JOMRES_COM_A_DISCOUNTS','Discounting');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','File uploads');
define('_JOMRES_COM_A_CURRENT_SETTINGS','Current Setting');
define('_JOMRES_COM_A_EXPLANATION','Explanation');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Single person suppliments');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Make sure this is set to Yes if you want to charge single person suppliments');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Single person suppliment charge');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Deposit required is percentage?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Is the deposit required to be a percentage of the total booking? If No, then the deposit applied with be a flat value');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Deposit required value');
define('_JOMRES_COM_A_TARIFFS_PER','Per person, per night');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Select Yes if you want to charge per-person-per-night. If no, then costs will be calculated on a per-yacht-per-night basis');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','File size');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. Image Filesize in Kilobyte');
define('_JOMRES_FRONT_MR_BOOKED','Booked');
define('_JOMRES_COM_CONFIRMATION_TITLE','Confirmation letter');
define('_JOMRES_COM_CONFIRMATION_DEAR','Dear ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cost per night - per yacht ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reservation details');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Thank you for booking at the');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Below is a summary of your reservation details. Please check that we have all of your details correct & contact us if there is an error.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Your yacht will be held until your arrival, and check in is after 2pm.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','We shall look forward to greeting you on the ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','We hope that you have a pleasant stay.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Now we must bring your attention to the small print.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','No allowance can be made for meals not taken or for yachts not occupied for the full period of the boking. With this in mind we strongly recommend that you use a holiday insurance facility.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Cancellation and curtailment charges</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 days or more');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Deposit only.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 to 30 days');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% of total contract.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Arrival date to 14 days');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% of total contract.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','VAT@ 17.5% is included in all tariffs. Any increase or alterations will be charged.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Print confirmation letter');
define('_JOMRES_COM_INVOICE_TITLE','Invoice printout');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Number of nights: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contract initially agreed: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cost per night: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Grand total');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Thank you your custom at the');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','We hope that we will see you again.');
define('_JOMRES_COM_INVOICE_PRINT','Print invoice');
define('_JOMRES_COM_ADDSERVICE_TITLE','Add service to bill');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Service description');
define('_JOMRES_COM_ADDSERVICE_VALUE','Service value');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Other billed items');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Other billed items, total value: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item added to bill');
define('_JOMRES_UPLOAD_IMAGE','Upload image');
define('_JOMRES_FILE_UPLOAD','File Upload');
define('_JOMRES_FILE_ERROR_TYPE','You are only allowed to upload types of type:\n');
define('_JOMRES_FILE_ERROR_EMPTY','Please select a file before uploading');
define('_JOMRES_FILE_ERROR_NAME','The file must only contain alphanumeric characters and no spaces please.');
define('_JOMRES_FILE_ERROR_SIZE','The file size exceeds the maximum the Administrator has set.');
define('_JOMRES_FILE_NOT_UPLOADED','File NOT uploaded.');
define('_JOMRES_FILE_UPDATED','Your File has been uploaded.');
define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Calendar language file');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Choose the language file that should be used in the Javascript calendar. Please note that some of the calendars may be faulty, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information');
define('_JOMRES_COM_A_CALENDARCSS','JS Calendar CSS file');
define('_JOMRES_COM_A_CALENDARCSS_DESC','Choose the CSS file that should be used in the Javascript calendar');
define('_JOMRES_COM_A_ODDS','Misc.');
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
define('_JOMRES_FILE_DELETE','Delete this image');
define('_JOMRES_FILE_DELETED','File deleted');
define('_JOMRES_COM_MR_ROOM_DELETE','Delete');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Unable to remove this yacht, there are bookings against it. Cancel those bookings then retry.');
define('_JOMRES_COM_MR_ROOM_DELETED','Yacht deleted');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Delete yacht feature');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Unable to remove this yacht feature, it is assigned to some yachts. Remove the feature from those yachts and retry.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Yacht feature deleted');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Delete business feature');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Unable to remove this business feature, it is assigned to a business. Remove the feature from this business and retry.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Business feature deleted');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Delete yacht type');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Unable to remove this yacht type, it is assigned to a yacht. Try re-assigning the yacht to another yacht type then try again.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Unable to remove this yacht type, it is assigned to a tariff. Try re-assigning the tariff to another yacht type then try again.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Yacht type deleted');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Delete business');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Business deleted');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','You do not have rights to delete this business.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Fullsize image width');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Offsite link (eg to manufacturer\'s information page)');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Boat/yacht description');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check in times');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Area activities');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Driving directions');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Airports');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Other transport');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Policies & disclaimers');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Address');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Visitors can book online');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Set this to Yes to ensure that visitors can book yachts online.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Bookings are for a fixed period');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined arrival day" isn\'t set to Yes (unless you specifically want to force people to arrive on a certain day) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_A_FIXEDPERIOD','Booking period: ');
define('_JOMRES_COM_A_BOOKING','Booking yachts');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximum periods, eg 3x 7 booking periods = 21 days');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Is this an apartment/cottage/villa?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','EG you are renting out a business, rather than yachts in that business. If this is the case, then you must make sure that you only have the one yacht registered against each business.');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Review booking');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirm booking');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Monday');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Tuesday');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Wednesday');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Thursday');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Friday');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Saturday');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Sunday');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Mo');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Tu');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','We');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Th');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sa');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Su');
define('_JOMRES_COM_A_AVLCAL','Availability cal.');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Font colour for the current date');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Font colour for days in the display month ');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Font colour for days not in the display month');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cell bgcolour for days when business/yacht is available');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cell bgcolour for days not in display month');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cell bgcolour for occupied days');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cell bgcolour for provisionally booked yachts (bookings for which a deposit has not been taken)');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cell bgcolour for dates in the past');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Occupied/Not available');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Available for bookings');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Provisional bookings');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Pre-defined arrival day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Only for sites offering fixed period bookings. Choose the day that arrivals must begin on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fixed arrival day');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Stay period (days)');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Show availability calendars?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Set this to yes to show the availability calendars');
define('_JOMRES_FRONT_AVAILABILITY','Availability');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Click on a free date to view the booking form.');
define('_JOMRES_FRONT_BLACKBOOKING','Black bookings');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','New Black booking');
define('_JOMRES_FRONT_DELETEGUEST','Delete guest');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Client deleted');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Unable to delete this guest as they have bookings open against them. Cancel the bookings & try again.');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Actual yacht cost: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hello');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Thank you for making your booking with');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','A summary of the booking follows:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','If you have any questions regarding this booking or any other service, then please do not hesitate to contact us.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Our telephone number is');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Alternatively you can contact us by email at');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Smoking');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Any");
define('_JOMRES_COM_CALENDAROUTPUT','Calendar output format');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','This allows the user to change the output format of dates within Jomres');
define('_JOMRES_COM_CALENDARINPUT','Calendar input format');
define('_JOMRES_COM_CALENDARINPUT_DESC','This allows the user to change the input format of dates within Jomres.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Fixed period bookings allow short breaks');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Length of short break');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Published');
define('_JOMRES_COM_A_PAYPAL','Paypal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Date');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Time');
define('_JOMRES_MR_AUDIT_LISTING_USER','User (username)');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operation');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','View details');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter on date');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter on username');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter on operation');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Arrival Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Arrive today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Current Resident');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Departs today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Departure overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Has not arrived');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Unknown user');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Created yacht');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Updated yacht');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Deleted yacht');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Created yacht feature');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Updated yacht feature');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Deleted yacht feature');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Inserted yacht type');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Updated yacht type');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Deleted yacht type');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Created business');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Updated business');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Deleted business');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Created prop. feature');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Updated prop. feature');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Deleted prop. feature');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Edited prop. settings');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Published prop.');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Created tariff');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Updated tariff');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Deleted tariff');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Added svc. charge');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Booked guest in');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Booked guest out');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Entered deposit');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Created guest');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Updated guest');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Deleted guest');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Booked a yacht');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Created an extra');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Updated an extra');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Deleted an extra');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Published extra.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Entered black booking.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Deleted black booking.');
define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
define('_JOMRES_COM_MR_EXTRA_DESC','Description');
define('_JOMRES_COM_MR_EXTRA_NAME','Name');
define('_JOMRES_COM_MR_EXTRA_PRICE','Price');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra updated');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edit item');
define('_JOMRES_COM_MR_EXTRA_DELETED','Extra deleted');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Extras admin');
define('_JOMRES_COM_A_EXTRAS','Show extras at booking time?');
define('_JOMRES_COM_A_EXTRAS_DESC','Set this to yes to show any extras that you may wish to offer to the guest');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optional extras.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Black booking start date');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Service resumes date');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Black bookings');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','There was an error attempting to book these yachts, one or more of the yachts you selected is not free.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Yachts included in black booking');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','View blackbooking');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','No black bookings to list');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Number of stars');
define('_JOMRES_COM_A_SMOKING','Show smoking option?');
define('_JOMRES_COM_A_SMOKING_DESC','Set this to yes to show the smoking option.');
define('_JOMRES_COM_A_RESET','Reset');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Booking cancelled');
define('_JOMRES_FRONT_MR_SEARCH_HERE','Search here for:');
define('_JOMRES_COM_A_SMOKING_OPTION','Default smoking option');
define('_JOMRES_COM_A_CURRENCYSYMBOL','Currency symbol');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Eg &amp;pound&#59; Please note that you should use the HTML entities code for the required symbol. For a list of these entities please visit <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
define('_JOMRES_COM_A_CURRENCYCODE','Currency code');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Eg GBP. This is used in the email to the customer confirming their booking.');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','More info');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limit advance bookings?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Days advanced bookings limited to:');
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTE: It is not recommended that you set both of the following options to Yes, you should use only one of the two tax calculations available to you. </FONT>');
define('_JOMRES_COM_FRONT_ROOMTAX','Tax');
define('_JOMRES_COM_A_ROOMTAX','Yacht tax');
define('_JOMRES_COM_A_ROOMTAX_DESC','Designed for the American market. These are the yacht tax amounts that will be charged to the guest. You can charge a combination and/or of fixed and percentage figures. Note that these taxes are only applied to the cost of the yacht.');
define('_JOMRES_COM_A_ROOMTAX_FIXED','Tax fixed amount');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Tax percentage');
define('_JOMRES_COM_A_EUROTAX','Tax');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Tax percentage');
define('_JOMRES_MR_AUDIT_ARCHIVE','Archive all records');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' records archived');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer archived audit records');
define('_JOMRES_FRONT_TARIFFS','Our Tariffs');
define('_JOMRES_FRONT_TARIFFS_TITLE','Tariff name');
define('_JOMRES_FRONT_TARIFFS_DESC','Tariff description');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Yacht type');
define('_JOMRES_FRONT_TARIFFS_STARTS','Valid from');
define('_JOMRES_FRONT_TARIFFS_ENDS','Valid til');
define('_JOMRES_FRONT_TARIFFS_PPPN','Per person per night');
define('_JOMRES_FRONT_TARIFFS_PN','Per night');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Not including weekends');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum days');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum days');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min people');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max people');
define('_JOMRES_FRONT_PREVIEW','Preview');
define('_JOMRES_COM_A_EDITINGMODEON','Editing on?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Current text');
define('_JOMRES_COM_A_EDITING_NEWTEXT','New text');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Updated custom text.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Edit Language');
define('_JOMRES_COM_A_AUDITING_SHOWING','Number of unarchived records: ');
define('_JOMRES_FRONT_PTYPE','Business type');
define('_JOMRES_COM_PTYPES_LIST_TITLE','List business types');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Edit business type');
define('_JOMRES_COM_PTYPES_PTYPE','Business type');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Business type description');
define('_JOMRES_COM_PTYPES_SAVED','Business type saved');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Unable to delete business type. Business type is assigned to one or more properties, please re-assign them before trying to delete');
define('_JOMRES_COM_PTYPES_DELETED','Business type(s) deleted');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Remainder to pay');
define('_JOMRES_EXTRAS_NOEXTRAS','No extra services to add to bill');
define('_JOMRES_COM_CHARGING_DEPOSIT','Deposit');
define('_JOMRES_COM_CHARGING_FULLAMT','Full amount');
define('_JOMRES_COM_CHARGING_CONFIG','Amount charged at booking time');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Use this option to decide what should be charged at booking time. Choose deposit if the deposit should be charged, or Full amount if the full amount should be charged.');
define('_JOMRES_COM_MONTHSTOSHOW','Cal months to show');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','In the yacht availability, How many months of the calendar should be shown?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Signed on behalf of ');
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
define('_JOMRES_COM_A_CANCEL','Cancel');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Please choose the yacht(s) you wish to take out of service, and the relevant dates. <br>If a yacht does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/> When you have selected the appropriate dates, click the blue "apply" button to re-check yacht availability. ');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>You have been logged out for inactivity</b> Please log in and try again.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Reason');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Use payment gateways?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Set this to yes if you want to use online payment gateways. <b>Note:</b>This does not switch off the deposit calculation showed during the booking process. To disable this you can edit the templates that show yachts and wrap the elements that refer to deposits inside a class whos font and bg colour are the same.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Please choose your payment method.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway enabled?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modified plugin setting');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Inserted plugin setting');
define('_JOMRES_FRONT_GALLERYLINK','View this brokerage\'s website');
define('_JOMRES_COM_A_GALLERYLINK','External link');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Viewed credit card');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Updated credit card');
define('_JOMRES_MR_CREDITCARD_EDIT','Edit credit card');
define('_JOMRES_COM_A_EDITICON','Edit icon size');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch business image upload');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Images already in directory');
define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Show link to slideshows?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Show slideshow inline?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail target height');
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sorry, no images available for this business. Please upload some images using the batch upload feature if you wish to use the slideshow feature.');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Show link to tariffs?');
define('_JOMRES_COM_A_POPUPSALLOWED','Popups allowed?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','If set to no, then links that normally would have opened in a pop will open inline instead. EXPERIMENTAL! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow images');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Use this form to upload multiple images of this business.<br/><b>Note</b> that any images with the same name will be overwritten. Also note that this form does not upload yacht specific images or the business header image, you will need to upload them from the Business Admin section.<br/><b>Note</b> Images uploaded here will be written to the /images/stories/jomres/*business_uid* folder. If this folder does not exist, it will be created, unless of course an alternative directory has been specified in the configuration.');
define('_JOMRES_A_TABS_MISC','Misc');
define('_JOMRES_A','Site configuration');
define('_JOMRES_A_GLOBALPFEATURES','Use global business features');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Set this to Yes if you want to force all properties to use only the business features defined by the webmaster.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','To assign an image to this feature you first need to upload your business feature images to the /images/stories/jomres/pfeatures/ folder. ');
define('_JOMRES_A_ICON','Icon');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Select the search plugin that you want to use.');
define('_JOMRES_FRONT_NORESULTS','<b>Sorry, your search did not return any results. Please modify your search and try again.</b>');
define('_JOMRES_AREYOUSURE','Are you sure you wish to do this?');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Book a yacht');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Book this business');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Security number');
//v1.4c
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Show tariffs inline?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Address');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailed information');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Click for Yachts and availability');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Show tariffs information');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Show Address information below this link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Show detailed business info below this link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Show yachts and availability below this link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Show tariff information below this link');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flat rate tariffs');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Averages');
define('_JOMRES_COM_A_TARIFFS_MODEL','Select the tariffs model you want to use');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"You have two choices of tariff calculation methods. The first, the 'flat rate' method allows you to offer a number of different tariffs to the guest and the rate for the stay is the same for the entire time. This is useful if you want to offer several different tariffs for the same date, eg Bed and Breakfast tariff and B&B and Evening meal tariff. Choose the 'averages' tariff if you want to adjust your prices dependant on the date in question. Jomres will find all of the tariffs for each day in the booking, add them together then return the average rate across the period");
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Show departure date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the depareture date in bookings will always be set to the day after the arrival date.");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','Description limit');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"This limits the number of characters shown in the business listing when drawing from the business description.");
// v1.4g+
define('_JOMRES_COM_A_DATEFORMATSTYLE','Used date() format style?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Click to publish');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Click to unpublish');
define('_JOMRES_A_GLOBALROOMTYPES','Use global yacht types');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Set this to Yes if you want to force all properties to use only the yacht types defined by the webmaster. You need to set this to Yes if you intend to allow searching via yacht types.');
define('_JOMRES_A_GLOBALROOMTYPES_INFO','To assign an image to this yacht type you first need to upload your yacht type images to the /images/stories/jomres/rmtypes/ folder. ');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input error background colour');
define('_JOMRES_COM_CONFIGCOUNTRIES','Default country in booking form');
define('_JOMRES_JAVASCRIPT_','Items marked with a red star are required.');
define('_JOMRES_COM_SELFREGISTRATION','Users can register their properties?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Set this to Yes if you want users to be able to register their own properties without admin intervention.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Please provide the country and region of your business.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Please complete your boat\'s details.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Items marked with a red star are required.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Created business');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Sorry, you can't create a boat on this system. You must be a logged in, registered user, and you must not have already created a business.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Created boat: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','For user: ');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Show calendar from beginning of year?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','The availability calendar shows from the beginning of the current year.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Number of yachts available');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Back to business details');
define('_JOMRES_FRONT_ROOMTYPES','Yacht types');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Random search limit');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Show google currency conversion links in tariff listing?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Convert rate to :');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Allow users to edit using html editors?');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Use this form to place your booking. Modify your booking particulars like arrival and departure dates & guest numbers, then select the yacht(s) you require from the list of those available. Click any available yachts to add them to your booking. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Use this form to place your booking. Modify your booking particulars like arrival and departure dates & guest numbers. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');
define('_JOMRES_AJAXFORM_PARTICULARS','Booking particulars');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Select the details of your booking requirements');
define('_JOMRES_AJAXFORM_AVAILABLE','Availability ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Select the yachts that you require');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Look here to see if the business is available at this time.');
define('_JOMRES_AJAXFORM_EXTRAS','Optional extras');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Services');
define('_JOMRES_COM_PERDAY','Per night');
define('_JOMRES_AJAXFORM_ADDRESS','Your address');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Please enter your details. Note that all fields are required except your mobile number');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Available yachts');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Selected yachts');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>The earliest possible arrival date is: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Per night:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extras:');
define('_JOMRES_AJAXFORM_BILLING_TAX','Tax:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Discount:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Grand Total:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Clients');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Click now to add this yacht to your selection');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Click now to remove this yacht from your selection');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Client types');
define('_JOMRES_VARIANCES_TYPE','Type');
define('_JOMRES_VARIANCES_TYPE_TT','The type of customer, eg Children age 5-10, or Student ');
define('_JOMRES_VARIANCES_NOTES','Notes');
define('_JOMRES_VARIANCES_NOTES_TT','Notes that you may want to make regarding this customer type');
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
define('_JOMRES_VARIANCES_MAXIMUM_TT','The maximum number of this customer type that can be selected in the booking form');
define('_JOMRES_VARIANCES_ISPERCENTAGE','Is percentage');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','The figure calculated is a percentage of the Base figure calculated for the yacht. If this is set to no then the figure you specify is simply added or subtracted from the base yacht value.');
define('_JOMRES_VARIANCES_POSNEG','Add variance?');
define('_JOMRES_VARIANCES_POSNEG_TT','The figure calculated is added to or removed from the Base figure calculated for the yacht. Set this to No if you want this to be a discount from the base figure. ');
define('_JOMRES_VARIANCES_VARIANCE','Variance');
define('_JOMRES_VARIANCES_VARIANCE_TT','The amount of the variance');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modified customer type order');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Published customer type');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Deleted customer type');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Created customer type');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Updated customer type');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Updated customer type');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Show link to yachts list in business details page?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Show <b>only</b> Availability calendar/Yachts list?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Switch this to Yes to disable display of the business header and details, so that only the yachts list/availability calendar is viewable in the business details section. Only really intended for users renting out single yacht properties (eg apartments, cottages etc).');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Dep minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','The mimimum interval in the booking form between the arrival date and the departure date.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Booking form yacht list show yacht number');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Booking form yacht list show yacht name');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Booking form yacht list show tariff title');
define('_JOMRES_ORDER','Order');
define('_JOMRES_REQUIREDFIELDS','Required');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Days before arrival');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','The minimum number of days that must elapse, from "today", before the arrival date.');
define('_JOMRES_DTV','Date type variations');
define('_JOMRES_DTV_DOW','Day of week');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Client type default');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Default number of first the first Client type. If you use guest types, then this is the default number that the first guest type in the booking form will be set to.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Registered users only can book online?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sorry, you must be a registered user to book online. Click here to register on this site. ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Font colour for links to current bookings');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend borders');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Yacht is booked');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Black booking');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Round deposit up to nearest integer?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Charge deposits?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tariff charges stored as weekly figures?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','You have the option of storing tariff charges in either daily or weekly values. If storing them as weekly, you MUST set this option to Yes.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Rate per week');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fixed arrival dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Smoking option invalid');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Arrival date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Departure date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','The booking is too short. There needs to be at least this many days between arrival and departure dates:');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Your interval is');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Clienttype variant incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Select your guest numbers/type');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','You have too many in the party for the available tariffs');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','You have chosen more yachts than you have clients, click on a yacht name to remove it from your selection');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Too many clients for the available beds');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','You need to choose more yachts');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Select a yacht');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','First name is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Surname is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','House no/name is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Street is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Town is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postcode is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Country is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Landline number is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Cellphone number is required');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email address is required');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email address is not valid');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Unable to validate email domain');
define('_JOMRES_SRP_WEHAVEVACANCIES','We have vacancies!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','No yachts selected yet');
define('_JOMRES_BOOKING_NUMBER','Booking no.');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok to book, message box background');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump template vars?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Figure is percentage');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Set this to Yes if the single person calculation figure is a percentage. If no then it will be applied as a flat sum.');
//v2rc2
define('_JOMRES_COM_LIMITROOMSLIST','Available yachts/tariff limit');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Use this input to limit the number of available yachts & tariffs that are listed in the booking form. Set it to zero if you do not want limiting enabled. ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','No vacancies at this time!');
// Introduced in v2.5
// v2.6
define('_JOMRES_BOOKITNOW','Book it now: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Use global currency?');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Set this to yes to force all properties to use the same currency (e.g. & # 8 3 6 4 ;)');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Brokerage Manager');
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the yachts list.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any brokerage information');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your brokerage changes before uploading a brokerage image');
define('_JOMRES_TARIFFSFROM','Prices from - ');
define('_JOMRES_SEARCH_ALL','All');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
define('_JOMRES_SEARCH_BUTTON','Search');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find properties that have accommodation available on your chosen dates.');
define('_JOMRES_SEARCH_PTYPES','List all properties by brokerage type.');
define('_JOMRES_SEARCH_RTYPES','List all properties by yacht type.');
define('_JOMRES_SORTORDER_DEFAULT','Default');
define('_JOMRES_SORTORDER_PROPERTYNAME','Brokerage Name');
define('_JOMRES_SORTORDER_PROPERTYREGION','Brokerage Region');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Brokerage Town');
define('_JOMRES_SORTORDER_STARS','Stars');
define('_JOMRES_PATHWAY_PROPERTYLIST','Boat list');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Boat details');
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking yacht availability<br/>(Yacht selection will be reset)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your yacht selection');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Boat image');
define('_JOMRES_CURRENCYFORMAT','Currency format');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each yacht type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each yacht/brokerage type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference yachts and tariffs to yacht/brokerage types and allows you to configure yachts and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a yacht and associate it with a yacht type. You then create a tariff and associate THAT with a yacht type. Using this method it is possible to \"layer\" tariffs over each other, for example a yacht type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a yacht or tariff from a yacht/brokerage type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of yachts and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show yachts list in brokerage details page?');
define('JOMRES_PROPERTYTYPE','Brokerage type');
define('JOMRES_COM_A_SRPONLY','SRP only');
define('JOMRES_MAXPEOPLEINROOM','Max people per yacht');
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Brokerage type');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Brokerages on site');
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your yacht prices dynamically.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate yacht prices based on the number of yachts of a required type that are available on a given date. This allows them to offer discounts on a yacht type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of yachts of a selected type are available in the brokerage on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before yacht prices are adjusted by this feature, then the percentages options allow you to configure the percentage of yachts that can be available before a given discount is applied.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage yachts occupied < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage yachts occupied < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage yachts occupied < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage yachts occupied < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
define('_JOMCOMP_WISEPRICE_TO',' to ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Yacht price not discounted ');
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Brokerage Details page.');
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This brokerage offers a last minute discount of  ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the brokerage details/tariff popup');
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
define('_JOMCOMP_AMEND','Amend Booking - Brokerage Selection');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Brokerage');
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Cancel');
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a brokerage in the event that another commission rate is not otherwise set.');
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
define('_JRPORTAL_CRATE_TITLE','Title');
define('_JRPORTAL_CRATE_TYPE','Type');
define('_JRPORTAL_CRATE_VALUE','Comission rate');
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Brokerages');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Brokerage name');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Brokerage address');
define('_JRPORTAL_PROPERTIES_LEGEND','Brokerages who\'s background colour is red have not yet had a commission rate applied to them.');
define('_JRPORTAL_STATS_PATETITLE','Statistics');
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Brokerages - Clicks');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Brokerage view');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Brokerage id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated brokerage (if applicable)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have brokerage type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this brokerage type so yachts become, for example, DVDs, etc.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this brokerage as it is the only brokerage that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one brokerage only limit) then you should create a new brokerage first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
define('_JOMRES_COM_ISTHISANMRP',"Are you renting out places on this boat? ");
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out boats from a brokerage, or the brokerage itself. Select MRP if you are offering boats, select SRP if you are offering the entire brokerage. ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per yacht ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Services Total (inc tax)");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','of');
if (!defined('_PN_START'))
	define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
if (!defined('_PN_END'))
	define('_PN_END','End');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Brokerage enquiry from ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the brokerage\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min yachts already selected');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of yachts already selected in booking before tariff/yacht type combo can be offered. Allows you to have discounted tariffs when more than N yachts are already selected. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max yachts already selected');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of yachts already selected in booking before tariff/yacht combo is no longer offered. Allows you to stop offering this yacht type/tariff combination once N yachts have been selected in the booking form. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
define('_JOMRES_AVLCAL_HALF',"Half booked");
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View brokerage task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add brokerage type to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add brokerage name to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append brokerage id to brokerage name');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if brokerage name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Brokerage type');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default brokerage type');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all brokerage types');
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X yachts selected');
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
define('JOMRES_WORD_SAVING','Saving...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Brokerage details?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite brokerage details where all of the brokerage details output is sent to one template file (composite_brokerage_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-brokerage managers will have a Guest icon, brokerage managers will have Reception/Brokerage Manager/Super brokerage manager icons.<br/>When Jomres is first installed "admin" is automatically added as a brokerage manager and is considered an authorised user.<br/>Non-super brokerage managers must be assigned to at least one brokerage otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to brokerages or give them super brokerage manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super brokerage manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their brokerage(s) themselves will be automatically assigned to those brokerages. Super brokerage managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain brokerages. Ensure, if they\'re not going to be a super brokerage manager, that they have rights to at least one brokerage otherwise they will see an error when they log in. To give a receptionist/brokerage manager rights over only certain brokerages, ensure that the Super Brokerage Manager dropdown is not set to Yes.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Brokerage type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your brokerage type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your brokerage type');
define('_JOMRES_COM_LOGGING','Jomres logging');
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form yacht list show yacht type image');
define('_JOMRES_COM_A_LISTLIMIT','Brokerage List limit');
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of brokerages to show on a page after a search');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres brokerages according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the brokerage list will mean that the search options are also shown.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by brokerage name");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by brokerage name input.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by brokerage type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by brokerage type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by yacht type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by yacht type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a brokerage is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Method');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
define('_JRPORTAL_TAXRATES_RATE',"Rate");
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
define('_JRPORTAL_INVOICES_USER',"User");
define('_JRPORTAL_INVOICES_STATUS',"Status");
define('_JRPORTAL_INVOICES_RAISED',"Raised");
define('_JRPORTAL_INVOICES_DUE',"Due");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
define('_JRPORTAL_COUPONS_ROOMONLY',"Yacht only");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the yacht. If No, then the discount is applied to the entire cost of the booking.");
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
// Not used yet
define('_JOMRES_COM_GROWL','Use Jomres messaging');
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form yacht list show disabled access');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form yacht list show max people');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that yacht prices listed are estimates and the full price of the booking will not be calculated until you have added a yacht or yachts to your selection.");
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Yachts limit"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Brokerage limit");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published brokerage(s). ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," brokerage slots. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this brokerage as you have reached your maximum number of available brokerage slots.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your brokerage on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your brokerage(s).</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
define('_JOMRES_COM_NEWUSER','Create new user on booking');
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
define('_JOMRES_CLICKTOREGISTER','Click here to register your brokerage');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Control Panel');
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
define('_JOMRES_USER_LISTMYPROPERTY','Add my brokerage to this site');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
define('_JOMRES_COM_YOURBUSINESS','Your business details');
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the brokerage has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this brokerage for those dates.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this brokerage for those dates.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your brokerage is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your brokerage.');
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the brokerage configuration area.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
define('_JOMRES_REALESTATE_TITLE','Real estate listing');
define('_JOMRES_REALESTATE_YESNO','Is this brokerage a boat for sale listing?');
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the boat, select No if it is a rental item and will be using this system for taking bookings.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
define('_JOMRES_APIKEY_REMAKE','Make new API key');
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given brokerage. Note that this feature sanitizes all input, so if you use a html editor for formatting your brokerage details, then this will break that formatting.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single brokerage installation?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of brokerages, just takes the guest to the booking form for the first brokerage in the system. Brokerage managers also will not see see the Brokerage Details preview button or the Add new brokerage button. Ideal if you only want to list one brokerage and take bookings for it.<br/>');
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
define('_JOMRES_SUPPORTKEY','Support key');
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit brokerage registration to one country?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that brokerage registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Brokerages are located in this country : ');
define('_JOMRES_JQUERYTHEME','Jquery theme');
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the brokerage details tabs.');
define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that brokerage is not currently available.');
define('_JOMRES_REVIEWS','Reviews');
define('_JOMRES_REVIEWS_TITLE','Review title');
define('_JOMRES_REVIEWS_DATE','posted on ');
define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this brokerage yet.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this brokerage?');
define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this brokerage : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
define('_JOMRES_REVIEWS_PROS','Pros: ');
define('_JOMRES_REVIEWS_CONS','Cons: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this brokerage, you can\'t post another review about it.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this brokerage');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the brokerage\s locale');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the brokerage');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally brokerage managers cannot review brokerages. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a brokerage\'s reviews, click on that brokerage. From there you will be able to publish or delete a review.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
define('_JOMRES_REVIEWS_SUBMIT','Submit');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
define('_JOMRES_REVIEWS_RATING_2','Location ');
define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
define('_JOMRES_REVIEWS_RATING_5','Value for money ');
define('_JOMRES_REVIEWS_RATING_6','Services ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in brokerage details page?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the brokerage details page. If you set it to No, then a link will appear in the brokerage details page instead pointing to the booking form.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Services tax:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
define('_JOMRES_PARTNERS_TITLE','Partners');
define('_JOMRES_CALENDAR_TODAY','Today');
define('_JOMRES_CALENDAR_PREV','Previous');
define('_JOMRES_CALENDAR_NEXT','Next');
define('_JOMRES_CALENDAR_RTL','false');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Yacht ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their yachts. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your brokerage is not yet published, only you can see the brokerage, site visitors will not see it");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
define('_JOMRES_ROOMMSLIST_STYLE','Yachts list style');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" yachts list style you offer individual yachts to guests. With the yacht type view, guests choose the number of yachts of type X (eg. 2 x doubles) instead');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Yacht types');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available yachts list');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only brokerage guests can review?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this brokerage.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per yacht');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per yacht : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
define('_JOMRES_NUMBER_OF_ROOMS','Number of yachts');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
define('_JRPORTAL_MONTHS_LONG_0','January');
define('_JRPORTAL_MONTHS_LONG_1','February');
define('_JRPORTAL_MONTHS_LONG_2','March');
define('_JRPORTAL_MONTHS_LONG_3','April');
define('_JRPORTAL_MONTHS_LONG_4','May');
define('_JRPORTAL_MONTHS_LONG_5','June');
define('_JRPORTAL_MONTHS_LONG_6','July');
define('_JRPORTAL_MONTHS_LONG_7','August');
define('_JRPORTAL_MONTHS_LONG_8','September');
define('_JRPORTAL_MONTHS_LONG_9','October');
define('_JRPORTAL_MONTHS_LONG_10','November');
define('_JRPORTAL_MONTHS_LONG_11','December');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Brokerage management process");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your brokerage/business.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out yachts in a brokerage (eg. Hotel/B&B/Villa/Apartment)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A brokerage/item for sale)");

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to brokerage managers in the General Configuration section. This is useful if you do not want brokerage managers to play around with too many settings, instead you can edit jomres_config.php to define default brokerage options.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in brokerage details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Brokerage management view");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the brokerage manager's toolbar?");

define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a brokerage");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the brokerage name and select a brokerage.<br/> When you select the brokerage you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a brokerage to edit the partner's discount settings for that brokerage.");


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform brokerage management functions and all of their properties will be unpublished. Super brokerage managers cannot be suspended.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your brokerage manager account has been suspended. You will not be able to perform any brokerage management functions until the account has been restored.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your brokerage manager account is now active. You may continue to perform any brokerage management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
define('_JOMRES_SEARCH_STARS','Number of stars');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");

// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the brokerage list whereas medium sized thumbnails are used in the brokerage header.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
define('_JOMRES_TOUCHTEMPLATES','Label Translations');

define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your brokerage(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');

// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
define('_JOMRES_DEBUGGING_TAB','Debugging');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');


define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
define('_JOMRES_DATEPERIOD_SECOND','second');
define('_JOMRES_DATEPERIOD_MINUTE','minute');
define('_JOMRES_DATEPERIOD_HOUR','hour');
define('_JOMRES_DATEPERIOD_DAY','day');
define('_JOMRES_DATEPERIOD_WEEK','week');
define('_JOMRES_DATEPERIOD_MONTH','month');
define('_JOMRES_DATEPERIOD_YEAR','year');
define('_JOMRES_DATEPERIOD_DECADE','decade');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','ago');
define('_JOMRES_DATEPERIOD_FROMNOW','from now');

define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

define('_JOMRES_EDIT_PROFILE','Edit Profile');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
define('_JOMRES_IMAGE','Image');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

define('_JOMRES_QUICK_INFO',"Quick Info");

define('_JOMRES_MENU_SHOW',"Show");
define('_JOMRES_MENU_HIDE',"Hide");
define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


define('_JOMRES_DEBUGGING_SUBJECT','Subject');
define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
define('_JOMRES_METATITLE','Meta title');
define('_JOMRES_METADESCRIPTION','Meta description');
define('_JOMRES_FOUNDPROPERTIES',"Properties found");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

define('_JOMRES_MYPROPERTIES','My businesses');


define('_JOMRES_CART_TITLE','My proposed bookings');
define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
define('_JOMRES_CART_OR',' or ');
define('_JOMRES_CART_SAVEFORLATER','Save for later');
define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
define('_JOMRES_CART_VIEWCART','View cart');

define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

define('_JOMRES_COMPARE',"Compare");
define('_JOMRES_REMOVE',"Remove");
define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
define('_JOMRES_COOKIEPOLICY_3',"Read more...");
define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

define('_JOMRES_SAFEMODE',"Enable safe mode?");
define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

define('_JOMRES_PRICE_ON_APPLICATION',"POA");

define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

define('COMMON_NEXT',"Next");
define('COMMON_CANCEL',"Cancel");
define('COMMON_SUBMIT',"Submit");
define('COMMON_SAVE',"Save");
define('COMMON_DELETE',"Delete");
define('COMMON_RETURN',"Return");
define('COMMON_CLOSE',"Close");
define('COMMON_BACK',"Back");

define('COMMON_HOME',"Home");

define('COMMON_NEW',"New");

define('COMMON_SEND',"Send");

define('RECAPTCHA_TITLE',"reCaptcha");
define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
define('RECAPTCHA_PUBLIC_KEY',"Public key");
define('RECAPTCHA_PRIVATE_KEY',"Private key");


define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

define('COMMON_ACTION',"Action");
define('COMMON_VIEW',"View");

define('BACKTOTOP',"Back to top");

define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

define('_JOMRES_INPUTFILTERING',"Input filtering");
define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

define('COMMON_PRINT',"Print");
