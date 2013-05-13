<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC','Quick reservation');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Show profiles');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Campsite Configuration');
jr_define('_JOMRES_COM_MR_BACK','Back');
jr_define('_JOMRES_COM_MR_YES','Yes');
jr_define('_JOMRES_COM_MR_NO','No');
jr_define('_JOMRES_COM_MR_NEWTARIFF','New');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','New campsite');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','New campsite feature');
jr_define('_JOMRES_COM_MR_NEWGUEST','New guest');
jr_define('_JOMRES_COM_MR_SAVE','Save');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Name');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Arrival');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Departure');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Assign user admin functions');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Name');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','User name');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Currently authorised (click to de-authorise the user)');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Default campsite');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Change this');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Access level');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','User modified');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Reception');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Campsite manager');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','All bookings');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','New bookings');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Edit Booking');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Arr/Dep');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Guest');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Pitch');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Payment');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','First Name');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Surname');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Special requirements');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Please note that some special requirements may incur extra charges.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Cancel booking');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','The house number or name');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Street');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Town');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Landline number');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobile number');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email address');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Cannot cancel this booking as the guest is already booked in');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Deposit not paid');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Confirm cancellation');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Booking cancelled');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Days to arrival');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Booking type');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Black');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Reception');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Pitch name');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Pitch');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Floor');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Disabled access available?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max people');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Pitch/Campsite type');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Pitch/campsite type description');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Pitch features list');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Deposit paid');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Enter deposit');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total to pay');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Deposit ref');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Booking');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Deposit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Deposit saved');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Our pitches');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Campsite');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Pitch/campsite type');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edit guest details');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','First name');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Surname');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','House');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Street');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Town');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postcode');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Landline');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobile');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Credit Card no.');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Card issued');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Card expires');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Issue number');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Name on card');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Make your choice');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Nights');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Number of guests');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','View pitches & campsite config');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Pitches');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Rm features');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Rm types');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Campsite');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Prop feats');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Pitch');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Type');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Name');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Number');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Floor');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Disabled access?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max people');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Features');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Pitch added');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edit item');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Rm features');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Feature description');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Pitch feature added');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Pitch feature updated');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Pitch type');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Pitch/campsite type abbreviation');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Pitch/campsite type description');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Pitch/campsite type added');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Pitch/campsite type updated');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edit item');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Name');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Street');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Town');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Country');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postcode');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Features');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Campsite added');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Campsite updated');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Campsite Features');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Campsite feature abbv.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Campsite feature full description');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Campsite feature added');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Campsite feature updated');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tariffs');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tariff title');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Description');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Valid from');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Valid to');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Rate per night');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min days');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max days');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min people');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max people');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Pitch/campsite type');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignore PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Allow weekends');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tariff added');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tariff updated');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edit item');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Clone item');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tariff deleted');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edit tariff');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Public holidays');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Booking saved');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Book a guest in');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Book guest out');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','List bookings');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NEW bookings');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Guest admin');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Campsite admin');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Check availability');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirm your details');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','First name');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Surname');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','House no.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Street');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Town');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Landline number');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobile number');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','There are no pitches available able to satisfy the parameters specified');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Thank you for making your booking with us and we hope that you enjoy your stay.<br><br> <b>Please note that this is only a preliminary booking, and will not be confirmed until you receive your confirmation letter from us.</center>');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Booking made for campsite: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Booking made for pitch: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Arrival: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Departure: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Name: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Landline: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobile: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','The value of the contract is: ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Book in guest ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Select guest ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Guest booked in ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','No guests are due to arrive today');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Book out guest ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','No guests are due to depart today');
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Supplements');
jr_define('_JOMRES_COM_A_TARIFFS','Tariffs & Currency');
jr_define('_JOMRES_COM_A_DISCOUNTS','Discounting');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','File uploads');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','Current Setting');
jr_define('_JOMRES_COM_A_EXPLANATION','Explanation');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Single person supplements');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Make sure this is set to Yes if you want to charge single person supplements');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Single person supplement');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Deposit required is percentage?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Is the deposit required to be a percentage of the total booking? If No, then the deposit applied with be a flat value');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','Deposit required value');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Per person, per night');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','Select Yes if you want to charge per-person-per-night. If no, then costs will be calculated on a per-pitch-per-night basis');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','File size');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. Image Filesize in Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED','Pitches booked');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','Confirmation letter');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Dear ');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cost per night - per pitch ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reservation details');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Thank you for booking at the');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Below is a summary of your reservation details. Please check that we have all of your details correct & contact us if there is an error.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Your pitch will be held until your arrival, and check in is after 2pm.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','We shall look forward to greeting you on the ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','We hope that you have a pleasant stay.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Now we must bring your attention to the small print.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','No allowance can be made for meals not taken or for pitches not occupied for the full period of the booking. With this in mind we strongly recommend that you use a holiday insurance facility.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Cancellation and curtailment charges</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 days or more');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Deposit only.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 to 30 days');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% of total contract.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Arrival date to 14 days');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% of total contract.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','VAT@ 17.5% is included in all tariffs. Any increase or alterations will be charged.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Print confirmation letter');
jr_define('_JOMRES_COM_INVOICE_TITLE','Invoice printout');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Number of nights: ');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contract initially agreed: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cost per night: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Grand total');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Thank you your custom at the');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','We hope that we will see you again.');
jr_define('_JOMRES_COM_INVOICE_PRINT','Print invoice');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Add service to bill');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Service description');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','Service value');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Other billed items');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Other billed items, total value: ');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item added to bill');
jr_define('_JOMRES_UPLOAD_IMAGE','Upload image');
jr_define('_JOMRES_FILE_UPLOAD','File Upload');
jr_define('_JOMRES_FILE_ERROR_TYPE','You are only allowed to upload types of type:\n');
jr_define('_JOMRES_FILE_ERROR_EMPTY','Please select a file before uploading');
jr_define('_JOMRES_FILE_ERROR_NAME','The file must only contain alphanumeric characters and no spaces please.');
jr_define('_JOMRES_FILE_ERROR_SIZE','The file size exceeds the maximum the Administrator has set.');
jr_define('_JOMRES_FILE_NOT_UPLOADED','File NOT uploaded.');
jr_define('_JOMRES_FILE_UPDATED','Your File has been uploaded.');
jr_define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Calendar language file');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Choose the language file that should be used in the Javascript calendar. Please note that some of the calendars may be faulty, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information');
jr_define('_JOMRES_COM_A_CALENDARCSS','JS Calendar CSS file');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','Choose the CSS file that should be used in the Javascript calendar');
jr_define('_JOMRES_COM_A_ODDS','Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE','Delete this image');
jr_define('_JOMRES_FILE_DELETED','File(s) deleted');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Delete');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Unable to remove this pitch, there are bookings against it. Cancel those bookings then retry.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Pitch deleted');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Delete pitch feature');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Unable to remove this pitch feature, it is assigned to a pitch or pitches. Remove the feature from those pitches and retry.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Pitch feature deleted');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Delete campsite feature');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Unable to remove this campsite feature, it is assigned to a campsite. Remove the feature from this campsite and retry.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Campsite feature deleted');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Delete pitch/campsite type');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Unable to remove this pitch/campsite type, it is assigned to a pitch. Try re-assigning the pitch to another pitch/campsite type then try again.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Unable to remove this pitch/campsite type, it is assigned to a tariff. Try re-assigning the tariff to another pitch/campsite type then try again.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Pitch/campsite type deleted');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Delete campsite');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','Campsite deleted');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','You do not have rights to delete this campsite.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Image width after Jomres resizes uploaded images');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Map');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Campsite description');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check in times');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Area activities');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Driving directions');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Airports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Other transport');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Policies & disclaimers');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Address');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Visitors can book online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Set this to Yes to ensure that visitors can book pitches online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Bookings are for a fixed period');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined arrival day" isn\'t set to Yes (unless you specifically want to force people to arrive on a certain day) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','Booking period: ');
jr_define('_JOMRES_COM_A_BOOKING','Booking pitches');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximum periods, eg 3x 7 booking periods = 21 days');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Is this an apartment/cottage/villa?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','EG you are renting out a campsite, rather than pitches in that campsite. If this is the case, then you must make sure that you only have the one pitch registered against each campsite.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Review booking');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirm booking');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Monday');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Tuesday');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Wednesday');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Thursday');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Friday');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Saturday');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Sunday');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Mo');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Tu');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','We');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Th');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Su');
jr_define('_JOMRES_COM_A_AVLCAL','Availability cal.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Font colour for the current date');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','Font colour for days in the display month ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Font colour for days not in the display month');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cell bgcolour for days when campsite/pitch is available');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cell bgcolour for days not in display month');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cell bgcolour for occupied days');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cell bgcolour for provisionally booked pitches (bookings for which a deposit has not been taken)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cell bgcolour for dates in the past');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Occupied/Not available');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Available for bookings');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Provisional bookings');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Pre-defined arrival day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Only for sites offering fixed period bookings. Choose the day that arrivals must begin on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fixed arrival day');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Stay period (days)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Show availability calendar inline?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Set this to yes to show the availability calendars');
jr_define('_JOMRES_FRONT_AVAILABILITY','Availability');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Click on a free date to view the booking form.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Black bookings');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','New Black booking');
jr_define('_JOMRES_FRONT_DELETEGUEST','Delete guest');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Guest deleted');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Unable to delete this guest as they have bookings open against them with another campsite.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Actual pitch cost: ');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hello');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Thank you for making your booking with');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','A summary of the booking follows:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','If you have any questions regarding this booking or any other service, then please do not hesitate to contact us.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Our telephone number is');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Alternatively you can contact us by email at');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Smoking');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Any");
jr_define('_JOMRES_COM_CALENDAROUTPUT','Calendar output format');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC','This allows the user to change the output format of dates within Jomres');
jr_define('_JOMRES_COM_CALENDARINPUT','Calendar input format');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','This allows the user to change the input format of dates within Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Fixed period bookings allow short breaks');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Length of short break');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Published');
jr_define('_JOMRES_COM_A_PAYPAL','Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Date');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','Time');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','User (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operation');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','View details');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter on date');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter on username');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter on operation');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Arrival Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Arrive today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Current Resident');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Departs today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Departure overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Has not arrived');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Unknown user');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','Created pitch');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Updated pitch');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','Deleted pitch');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Created pitchfeature');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Updated pitchfeature');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Deleted pitchfeature');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Inserted pitchtype');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Updated pitchtype');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Deleted pitchtype');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Created campsite');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Updated campsite');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Deleted campsite');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Created prop. feature');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Updated prop. feature');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Deleted prop. feature');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Edited prop. settings');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Published prop.');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Created tariff');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Updated tariff');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Deleted tariff');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Added svc. charge');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Booked guest in');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Booked guest out');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Entered deposit');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','Created guest');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Updated guest');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST','Deleted guest');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Booked a pitch');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Created an extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Updated an extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Deleted an extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Published extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Entered black booking.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Deleted black booking.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Description');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Name');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Price');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra updated');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edit item');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','Extra deleted');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Extras admin');
jr_define('_JOMRES_COM_A_EXTRAS','Show extras at booking time?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','Set this to yes to show any extras that you may wish to offer to the guest');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optional extras.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Black booking start date');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Service resumes date');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Black bookings');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','There was an error attempting to book these pitches, one or more of the pitches you selected is not free.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Pitches included in black booking');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','View blackbooking');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','No black bookings to list');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Number of stars');
jr_define('_JOMRES_COM_A_SMOKING','Show smoking option?');
jr_define('_JOMRES_COM_A_SMOKING_DESC','Set this to yes to show the smoking option.');
jr_define('_JOMRES_COM_A_RESET','Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','Booking cancelled');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE','Search here for:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','Default smoking option');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Currency symbol');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Eg &amp;pound&#59; Please note that you should use the HTML entities code for the required symbol. For a list of these entities please visit <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE','Currency code');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','Eg GBP. This is used in the email to the customer confirming their booking.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Read more');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limit advance bookings?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Days advanced bookings limited to:');
jr_define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTE: It is not recommended that you set both of the following options to Yes, you should use only one of the two tax calculations available to you. </FONT>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Tax');
jr_define('_JOMRES_COM_A_ROOMTAX','Pitch tax');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC','Designed for the American market. These are the pitch tax amounts that will be charged to the guest. You can charge a combination and/or of fixed and percentage figures. Note that these taxes are only applied to the cost of the pitch.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','Tax fixed amount');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Tax percentage');
jr_define('_JOMRES_COM_A_EUROTAX','Tax');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Tax percentage');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Archive all records');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' records archived');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer archived audit records');
jr_define('_JOMRES_FRONT_TARIFFS','Our Tariffs');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Tariff name');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Tariff description');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Pitch/campsite type');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Valid from');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','Valid til');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Per person per night');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Per night');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Not including weekends');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum days');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum days');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min people');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max people');
jr_define('_JOMRES_FRONT_PREVIEW','Preview');
jr_define('_JOMRES_COM_A_EDITINGMODEON','Editing on?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Current text');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','New text');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Updated custom text.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Edit Language');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','Number of unarchived records: ');
jr_define('_JOMRES_FRONT_PTYPE','Campsite type');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','List campsite types');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Edit campsite type');
jr_define('_JOMRES_COM_PTYPES_PTYPE','Campsite type');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','Campsite type description');
jr_define('_JOMRES_COM_PTYPES_SAVED','Campsite type saved');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Unable to delete campsite type. Campsite type is assigned to one or more campsites, please re-assign them before trying to delete');
jr_define('_JOMRES_COM_PTYPES_DELETED','Campsite type(s) deleted');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Remainder to pay');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','No extra services to add to bill');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Deposit');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','Full amount');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Amount charged at booking time');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','Use this option to decide what should be charged at booking time. Choose deposit if the deposit should be charged, or Full amount if the full amount should be charged.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','Cal months to show');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','In the pitch availability, How many months of the calendar should be shown?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Signed on behalf of ');
jr_define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
jr_define('_JOMRES_COM_A_CANCEL','Cancel');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','Select the dates that you want to apply the black bookings for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
Choose the pitch(s) you wish to take out of service. <br>If a pitch does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/> ');
jr_define('_JOMRES_JR_NOTLOGGEDIN','<center><b>You have been logged out for inactivity</b> Please log in and try again.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Reason');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Use payment gateways?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Set this to yes if you want to use online payment gateways. <b>Note:</b>This does not switch off the deposit calculation showed during the booking process. To disable this you can edit the templates that show pitches and wrap the elements that refer to deposits inside a class whos font and bg colour are the same.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Please choose your payment method.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway enabled?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modified plugin setting');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Inserted plugin setting');
jr_define('_JOMRES_FRONT_GALLERYLINK','View this campsite\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK','External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Viewed credit card');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Updated credit card');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Edit credit card');
jr_define('_JOMRES_COM_A_EDITICON','Edit icon size');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch campsite image upload');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Images already in directory');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Show link to slideshows?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Show slideshow inline?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail target width');
jr_define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sorry, no images available for this campsite. Please upload some images using the batch upload feature if you wish to use the slideshow feature.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Show link to tariffs?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','Popups allowed?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','If set to no, then links that normally would have opened in a pop will open inline instead.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow images');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Use this form to upload multiple images of this campsite.<br/><b>Note</b> that any images with the same name will be overwritten. Also note that this form does not upload pitch specific images or the campsite header image, you will need to upload them from the Campsite Admin section.<br/><b>Note</b> Images uploaded here will be written to the /jomres/uploadedimages/*campsite_uid* folder. If this folder does not exist, it will be created, unless of course an alternative directory has been specified in the configuration.');
jr_define('_JOMRES_A_TABS_MISC','Misc');
jr_define('_JOMRES_A','Site configuration');
jr_define('_JOMRES_A_GLOBALPFEATURES','Use global campsite features');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','Set this to Yes if you want to force all campsites to use only the campsite features defined by the webmaster.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO','To assign an image to this feature you first need to upload your campsite feature images to the /jomres/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON','Icon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Select the search plugin that you want to use.');
jr_define('_JOMRES_FRONT_NORESULTS','<b>Sorry, your search did not return any results. Please modify your search and try again.</b>');
jr_define('_JOMRES_AREYOUSURE','Are you sure you wish to do this?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Book a pitch');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Book now!');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','Security number');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Show tariffs inline?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Address');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailed information');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Click for Pitches and availability');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Show tariffs information');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Show Address information below this link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Show detailed campsite info below this link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Show pitches and availability below this link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Show tariff information below this link');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flat rate tariffs');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Averages');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Select the tariffs model you want to use');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"You have two choices of tariff calculation methods. The first, the 'flat rate' method allows you to offer a number of different tariffs to the guest and the rate for the stay is the same for the entire time. This is useful if you want to offer several different tariffs for the same date, eg Bed and Breakfast tariff and B&B and Evening meal tariff. Choose the 'averages' tariff if you want to adjust your prices dependant on the date in question. Jomres will find all of the tariffs for each day in the booking, add them together then return the average rate across the period");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Show departure date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the departure date in bookings will always be set to the day after the arrival date.");
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Description limit');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"This limits the number of characters shown in the campsite listing when drawing from the campsite description.");
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','Used date() format style?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Publish');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Unpublish');
jr_define('_JOMRES_A_GLOBALROOMTYPES','Use global pitch/campsite types');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC','Set this to Yes if you want to force all campsites to use only the pitch/campsite types defined by the webmaster. You need to set this to Yes if you intend to allow searching via pitch/campsite types.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO','To assign an image to this pitch/campsite type you first need to upload your pitch/campsite type images to the /images/stories/jomres/rmtypes/ folder. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input error background colour');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','Default country in booking form');
jr_define('_JOMRES_JAVASCRIPT_','Items marked with a red star are required.');
jr_define('_JOMRES_COM_SELFREGISTRATION','Users can register their campsites?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','Set this to Yes if you want users to be able to register their own campsites without admin intervention.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Please provide the country and region of your campsite.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Please complete your campsite details.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Items highlighted are required.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Created campsite');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED',"Sorry, you can't create a campsite on this system. You must be a logged in, registered user before you can proceed.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Created campsite: ');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','For user: ');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','Show calendar from beginning of year?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','The availability calendar shows from the beginning of the current year.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Number of pitches available');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Back to campsite details');
jr_define('_JOMRES_FRONT_ROOMTYPES','Pitch/campsite types');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Random search limit');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Show currency conversion links in tariff listing?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','Convert rate');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR','Allow users to edit using html editors?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','Use this form to place your booking. Modify your booking particulars like arrival and departure dates & guest numbers, then select the pitch(s) you require from the list of those available. Click any available pitches to add them to your booking. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Use this form to place your booking. Modify your booking particulars like arrival and departure dates & guest numbers. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','Booking particulars');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Select the details of your booking requirements');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Availability ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Select the pitches that you require');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Look here to see if the campsite is available at this time.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Services');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','Services');
jr_define('_JOMRES_COM_PERDAY','Per night');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Your Details');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','Please enter your details. Note that all fields with a red star are required.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Available pitches');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Selected pitches');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','The earliest possible arrival date is: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Per night:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Accommodation');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extras:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','Tax:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Discount:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Grand Total (inc tax):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Guests');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Add to your selection');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Remove from your selection');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Guest types');
jr_define('_JOMRES_VARIANCES_TYPE','Type');
jr_define('_JOMRES_VARIANCES_TYPE_TT','The type of customer, eg Children age 5-10, or Student ');
jr_define('_JOMRES_VARIANCES_NOTES','Notes');
jr_define('_JOMRES_VARIANCES_NOTES_TT','Notes that you may want to make regarding this customer type');
jr_define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','The maximum number of this customer type that can be selected in the booking form');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','Is percentage');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','The figure calculated is a percentage of the Base figure calculated for the pitch. If this is set to no then the figure you specify is simply added or subtracted from the base pitch value.');
jr_define('_JOMRES_VARIANCES_POSNEG','Add variance?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','The figure calculated is added to or removed from the Base figure calculated for the pitch. Set this to No if you want this to be a discount from the base figure. ');
jr_define('_JOMRES_VARIANCES_VARIANCE','Variance');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','The amount of the variance');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modified customer type order');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Published customer type');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Deleted customer type');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Created customer type');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Updated customer type');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Updated customer type');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Show link to pitches list page in campsite details page?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','Show <b>only</b> Availability calendar?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Switch this to Yes to disable display of the campsite header and details, so that only the availability calendar is viewable in the campsite details section. Only really intended for users renting out single pitch campsites (eg apartments, cottages etc).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Dep minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','The mimimum interval in the booking form between the arrival date and the departure date.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Booking form pitch list show pitch number');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Booking form pitch list show pitch name');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Booking form pitch list show tariff title');
jr_define('_JOMRES_ORDER','Order');
jr_define('_JOMRES_REQUIREDFIELDS','Required');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Days before arrival');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','The minimum number of days that must elapse, from "today", before the arrival date.');
jr_define('_JOMRES_DTV','Date type variations');
jr_define('_JOMRES_DTV_DOW','Day of week');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Guest type default');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Default number of first the first Guest type. If you use guest types, then this is the default number that the first guest type in the booking form will be set to.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Registered users only can book online?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sorry, you must be a registered user to book online. Click here to register on this site. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Font colour for links to current bookings');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend borders');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Pitch is booked');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','Black booking');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Round deposit up to nearest integer?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Charge deposits?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tariff charges stored as weekly figures?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','You have the option of storing tariff charges in either daily or weekly values. If storing them as weekly, you MUST set this option to Yes.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','per week');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fixed arrival dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Smoking option invalid');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Arrival date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Departure date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','The booking is too short. There needs to be at least this many days between arrival and departure dates:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Your interval is');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Guesttype variant incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Select your guest numbers/type');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','You have too many in the party for the available tariffs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','You have chosen more pitches than you have guests, click on a pitch name to remove it from your selection');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Too many guests for the available beds');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','You need to choose more pitches');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Select a pitch');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','First name is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Surname is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','House no/name is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Street is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Town is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postcode is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Country is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Landline number is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Cellphone number is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email address is required');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email address is not valid');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Unable to validate email domain');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','<b>We have vacancies!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','No pitches selected yet');
jr_define('_JOMRES_BOOKING_NUMBER','Booking no.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok to book, message box background');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump template vars?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Figure is percentage');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Set this to Yes if the single person calculation figure is a percentage. If no then it will be applied as a flat sum.');
jr_define('_JOMRES_COM_LIMITROOMSLIST','Available pitches/tariff limit');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Use this input to limit the number of available pitches & tariffs that are listed in the booking form. Set it to zero if you do not want limiting enabled. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','No vacancies at this time!');
jr_define('_JOMRES_BOOKITNOW','');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL campsites in the system for the constant you are editing.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Use global currency?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Set this to yes to force all campsites to use the same currency (e.g. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Campsite Manager');
jr_define('_JOMRES_COM_WEEKENDONLY','Weekends only');
jr_define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the pitches list.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any campsite information');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your campsite changes before uploading a campsite image');
jr_define('_JOMRES_TARIFFSFROM','Prices from ');
jr_define('_JOMRES_SEARCH_ALL','All');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
jr_define('_JOMRES_SEARCH_BUTTON','Search');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
jr_define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find campsites that have accommodation available on your chosen dates.');
jr_define('_JOMRES_SEARCH_PTYPES','List all campsites by campsite type.');
jr_define('_JOMRES_SEARCH_RTYPES','List all campsites by pitch/campsite type.');
jr_define('_JOMRES_SORTORDER_DEFAULT','Default');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','Campsite Name');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','Campsite Region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','Campsite Town');
jr_define('_JOMRES_SORTORDER_STARS','Stars');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','Campsite list');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','Campsite details ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking pitch availability<br/>(Pitch selection will be reset)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your pitch selection');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Pitch image');
jr_define('_JOMRES_CURRENCYFORMAT','Currency format');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
jr_define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries recorded yet.');
jr_define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each pitch type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each pitch/campsite type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference pitches and tariffs to pitch/campsite types and allows you to configure pitches and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a pitch and associate it with a pitch type. You then create a tariff and associate THAT with a pitch type. Using this method it is possible to \"layer\" tariffs over each other, for example a pitch type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a pitch or tariff from a pitch/campsite type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of pitches and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show pitches list in campsite details page?');
jr_define('JOMRES_PROPERTYTYPE','Campsite type');
jr_define('JOMRES_COM_A_SRPONLY','SRP only');
jr_define('JOMRES_MAXPEOPLEINROOM','Max people per pitch');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','My options');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','List my Bookings');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','Campsite type');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Campsites on site');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your pitch prices dynamically.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most campsites will recalculate pitch prices based on the number of pitches of a required type that are available on a given date. This allows them to offer discounts on a pitch/campsite type that isn\'t busy during a given period with the aim of attracting campsite that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of pitches of a selected type are available in the campsite on a given day.<br/> The days threshold defines the number of days that the arrival date must be within before pitch prices are adjusted by this feature, then the percentages options allow you to configure the percentage of pitches that can be available before a given discount is applied. Note however, if multiple pitches are booked then the current level of discount will be applied to all pitches and will not reduce as more pitches are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','Threshold (number of days between arrival date and today)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage pitches occupied 10% or less');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage pitches occupied 25% or less');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage pitches occupied 50% or less');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage pitches occupied 75% or less');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
jr_define('_JOMCOMP_WISEPRICE_TO',' to ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Wiseprice discount not applied ');
jr_define('JOMRES_COM_A_MAPSKEY','Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Campsite Details page.');
jr_define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
jr_define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID','% discount if you book to arrive before ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE','% or more discount may be available if the arrival date is before ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the campsite details/tariff popup');
jr_define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
jr_define('_JOMCOMP_AMEND','Amend Booking - Campsite Selection');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Campsite');
jr_define('_JOMCOMP_AMEND_HEADER','Original Contract:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL','Cancel');
jr_define('_JRPORTAL_CPANEL','JRPortal Control Panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a campsite in the event that another commission rate is not otherwise set.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
jr_define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
jr_define('_JRPORTAL_CRATE_TITLE','Title');
jr_define('_JRPORTAL_CRATE_TYPE','Type');
jr_define('_JRPORTAL_CRATE_VALUE','Comission rate');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Campsites');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Campsite name');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Campsite address');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','Campsites who\'s background colour is red have not yet had a commission rate applied to them.');
jr_define('_JRPORTAL_STATS_PATETITLE','Statistics');
jr_define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Campsites - Clicks');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Campsite view');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Campsite id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to nBill');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated campsite (if applicable)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have campsite type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this campsite type so pitches become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this campsite as it is the only campsite that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one campsite only limit) then you should create a new campsite first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');
jr_define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
jr_define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
jr_define('_JOMRES_COM_ISTHISANMRP',"Is this campsite a hotel/bed and breakfast/guest house/pension? ");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out pitches in a campsite, or the campsite itself. Select MRP if you are offering pitches, select SRP if you are offering the entire campsite. ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per pitch ");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Services Total (inc tax)");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
jr_define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
jr_define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
jr_define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
jr_define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
if (!defined('_PN_OF'))
	jr_define('_PN_OF','of');
if (!defined('_PN_START'))
	jr_define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Prev');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Next');
if (!defined('_PN_END'))
	jr_define('_PN_END','End');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Results');
	
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Please enter the message you\'d like to send to ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Campsite enquiry from ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the campsite\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list below by clicking on the pitch.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min pitches already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of pitches already selected in booking before tariff/pitch type combo can be offered. Allows you to have discounted tariffs when more than N pitches are already selected. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max pitches already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of pitches already selected in booking before tariff/pitch combo is no longer offered. Allows you to stop offering this pitch type/tariff combination once N pitches have been selected in the booking form. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person supplements set here will not be used if Single Person Supplements are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
jr_define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
jr_define('_JOMRES_AVLCAL_HALF',"Half booked");
jr_define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");
jr_define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View campsite task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add campsite type to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add campsite name to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append campsite id to campsite name');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if campsite name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your campsites are in one country then you will not have country in the search - enter a default country here if you want to display a country');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your campsites are in one region then you will not have region in the search - enter a default region here if you want to display a region');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Campsite type');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default campsite type');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all campsite types');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED','Joomla 1.5 only. Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. <br/> Note, if you are also using Joomfish v2 you may need to ensure that GZIP is switched off in Global Configuration.');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X pitches selected');
jr_define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
jr_define('JOMRES_WORD_SAVING','Saving...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Campsite details?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite campsite details where all of the campsite details output is sent to one template file (composite_campsite_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-campsite managers will have a Guest icon, campsite managers will have Reception/Campsite Manager/Super campsite manager icons.<br/>When Jomres is first installed "admin" is automatically added as a campsite manager and is considered an authorised user.<br/>Non-super campsite managers must be assigned to at least one campsite otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to campsites or give them super campsite manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific campsites only, or give them super campsite manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their campsite(s) themselves will be automatically assigned to those campsites. Super campsite managers automatically have rights over all campsites, and will see all configuration options even if the minimised configuration option is set in Site Config.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain campsites. Ensure, if they\'re not going to be a super campsite manager, that they have rights to at least one campsite otherwise they will see an error when they log in. To give a receptionist/campsite manager rights over only certain campsites, ensure that the Super Campsite Manager dropdown is not set to Yes.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Campsite type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your campsite type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your campsite type');
jr_define('_JOMRES_COM_LOGGING','Jomres logging');
jr_define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','Misc ');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form pitch list show pitch type image');
jr_define('_JOMRES_COM_A_LISTLIMIT','Campsite List limit');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of campsites to show on a page after a search');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres campsites according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the campsite list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by campsite name");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by campsite name input.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by campsite type");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by campsite type input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by pitch type");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by pitch type input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a campsite is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD','Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
jr_define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
jr_define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
jr_define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
jr_define('_JRPORTAL_TAXRATES_CODE',"Tax code");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Rate");
jr_define('_JRPORTAL_INVOICES_TITLE',"Invoices");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
jr_define('_JRPORTAL_INVOICES_USER',"User");
jr_define('_JRPORTAL_INVOICES_STATUS',"Status");
jr_define('_JRPORTAL_INVOICES_RAISED',"Raised");
jr_define('_JRPORTAL_INVOICES_DUE',"Due");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
jr_define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
jr_define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
jr_define('_JRPORTAL_COUPONS_CODE',"Coupon code");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Pitch only");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the pitch. If No, then the discount is applied to the entire cost of the booking.");
jr_define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
jr_define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
jr_define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
jr_define('_JRPORTAL_NEWUSER_DEAR',"Dear");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
jr_define('_JOMRES_COM_GROWL','Use Jomres messaging');
jr_define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form pitch list show disabled access');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form pitch list show max people');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that pitch prices listed are estimates and the full price of the booking will not be calculated until you have added a pitch or pitches to your selection.");
jr_define('_JOMRES_LASTEDITED_DB','Database template Last edited');
jr_define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
jr_define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Pitches limit"); // Not currently used, saved for a rainy day
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Campsite limit");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new campsites. At this moment in time, you have purchased subscriptions for ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," <i>published</i> campsite(s). ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of campsites you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," campsite slots. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current campsites click <a href='".JOMRES_SITEPAGE_URL."&task=listyourcampsites'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this campsite as you have reached your maximum number of available campsite slots.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your campsite on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your campsite(s).</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
jr_define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of campsites that you can have published on this system at any one time. You can raise the number of campsites that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
jr_define('_JOMRES_COM_NEWUSER','Create new user on booking');
jr_define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking. (Joomla only)');
jr_define('_JOMRES_CLICKTOREGISTER','Click here to register your campsite');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
jr_define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
jr_define('_JOMRES_CONTROLPANEL','Control Panel');
jr_define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Add my campsite to this site');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
jr_define('_JOMRES_COM_YOURBUSINESS','Your campsite details');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','campsite name');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the campsite has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this campsite for those dates.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this campsite for those dates.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your campsite is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your campsite.');
jr_define('_JOMRES_EDITINGMODE_ON','Editing mode on');
jr_define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the campsite configuration area.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
jr_define('_JOMRES_REALESTATE_TITLE','Real estate listing');
jr_define('_JOMRES_REALESTATE_YESNO','Is this campsite a for sale listing?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the campsite, select No if it is a listing where you will be offering short term rentals and will be using this system for taking bookings.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
jr_define('_JOMRES_APIKEY_REMAKE','Make new API key');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given campsite. Note that this feature sanitizes all input, so if you use a html editor for formatting your campsite details, then this will break that formatting.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single campsite installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of campsites, just takes the guest to the booking form for the first campsite in the system. Campsite managers also will not see see the Campsite Details preview button or the Add new campsite button. Ideal if you only want to list one campsite and take bookings for it.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY','Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit campsite registration to one country?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that campsite registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Campsites are located in this country : ');
jr_define('_JOMRES_JQUERYTHEME','Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the campsite details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that campsite is not currently available.');
jr_define('_JOMRES_REVIEWS','Reviews');
jr_define('_JOMRES_REVIEWS_TITLE','Review title');
jr_define('_JOMRES_REVIEWS_DATE','posted on ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this campsite yet.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this campsite?');
jr_define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
jr_define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this campsite : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
jr_define('_JOMRES_REVIEWS_PROS','Pros: ');
jr_define('_JOMRES_REVIEWS_CONS','Cons: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this campsite, you can\'t post another review about it.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this campsite');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the campsite\s locale');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the campsite');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally campsite managers cannot review campsites. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all campsites. To see a campsite\'s reviews, click on that campsite. From there you will be able to publish or delete a review.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Submit');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
jr_define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
jr_define('_JOMRES_REVIEWS_RATING_2','Location ');
jr_define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
jr_define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
jr_define('_JOMRES_REVIEWS_RATING_5','Value for money ');
jr_define('_JOMRES_REVIEWS_RATING_6','Services ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in campsite details page?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the campsite details page. If you set it to No, then a link will appear in the campsite details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Prices are gross?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','If the prices you enter into the system include tax, then select Yes. If they are not (i.e. Nett), select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Services tax:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
jr_define('_JOMRES_PARTNERS_TITLE','Partners');
jr_define('_JOMRES_CALENDAR_TODAY','Today');
jr_define('_JOMRES_CALENDAR_PREV','Previous');
jr_define('_JOMRES_CALENDAR_NEXT','Next');
jr_define('_JOMRES_CALENDAR_RTL','false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Pitch ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their pitches. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your campsite is not yet published, only you can see the campsite, site visitors will not see it");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Pitches list style');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" pitches list style you offer individual pitches to guests. With the pitch type view, guests choose the number of pitches of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Pitch types');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available pitches list');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only campsite guests can review?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this campsite.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per pitch');

jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per pitch : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Number of pitches');

jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");

jr_define('_JRPORTAL_MONTHS_LONG_0','January');
jr_define('_JRPORTAL_MONTHS_LONG_1','February');
jr_define('_JRPORTAL_MONTHS_LONG_2','March');
jr_define('_JRPORTAL_MONTHS_LONG_3','April');
jr_define('_JRPORTAL_MONTHS_LONG_4','May');
jr_define('_JRPORTAL_MONTHS_LONG_5','June');
jr_define('_JRPORTAL_MONTHS_LONG_6','July');
jr_define('_JRPORTAL_MONTHS_LONG_7','August');
jr_define('_JRPORTAL_MONTHS_LONG_8','September');
jr_define('_JRPORTAL_MONTHS_LONG_9','October');
jr_define('_JRPORTAL_MONTHS_LONG_10','November');
jr_define('_JRPORTAL_MONTHS_LONG_11','December');

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Campsite management process");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your campsite/campsite.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out pitches in a campsite (eg. Hotel/B&B/Villa/Apartment)");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A campsite/item for sale)");

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to campsite managers in the General Configuration section. This is useful if you do not want campsite managers to play around with too many settings, instead you can edit jomres_config.php to define default campsite options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in campsite details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the campsite manager's toolbar?");

jr_define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign campsites and discounts to the user.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a campsite");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the campsite name and select a campsite.<br/> When you select the campsite you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current campsites");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a campsite to edit the partner's discount settings for that campsite.");

// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their campsites ) ");
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform campsite management functions and all of their campsites will be unpublished. Super campsite managers cannot be suspended.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your campsite manager account has been suspended. You will not be able to perform any campsite management functions until the account has been restored.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your campsite manager account is now active. You may continue to perform any campsite management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign campsites and access rights to the user.");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
jr_define('_JOMRES_SEARCH_STARS','Number of stars');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of campsites");

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the campsite list whereas medium sized thumbnails are used in the campsite header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');

jr_define('_JOMRES_TOUCHTEMPLATES','Label Translations');

jr_define('_JRPORTAL_ROI_TAB',"ROI");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their campsites unpublished.");

//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /jomres/language with a name that reflects the new property type\'s description.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

jr_define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

jr_define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugging');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Pitch tax:');

jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter pitches based on their features.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND','second');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minute');
jr_define('_JOMRES_DATEPERIOD_HOUR','hour');
jr_define('_JOMRES_DATEPERIOD_DAY','day');
jr_define('_JOMRES_DATEPERIOD_WEEK','week');
jr_define('_JOMRES_DATEPERIOD_MONTH','month');
jr_define('_JOMRES_DATEPERIOD_YEAR','year');
jr_define('_JOMRES_DATEPERIOD_DECADE','decade');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','from now');

jr_define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC','By default the system bookings pitches out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-pitch-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most campsites will recalculate pitch prices based on the number of pitches of a required type that are available on a given date. This allows them to offer discounts on a pitch/campsite type that isn\'t busy during a given period with the aim of attracting campsite that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of pitches of a selected type are available in the campsite on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before pitch prices are adjusted by this feature, then the percentages options allow you to configure the percentage of pitches that can be available before a given discount is applied. Note however, if multiple pitches are booked then the current level of discount will be applied to all pitches and will not reduce as more pitches are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

jr_define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

jr_define('_JOMRES_EDIT_PROFILE','Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
jr_define('_JOMRES_IMAGE','Image');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Campsite types that can show this feature');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all campsites with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the campsite\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

jr_define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

jr_define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

jr_define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

jr_define('_JOMRES_QUICK_INFO',"Quick Info");

jr_define('_JOMRES_MENU_SHOW',"Show");
jr_define('_JOMRES_MENU_HIDE',"Hide");
jr_define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
jr_define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");

jr_define('_JOMRES_DEBUGGING_SUBJECT','Subject');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
jr_define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
jr_define('_JOMRES_METATITLE','Meta title');
jr_define('_JOMRES_METADESCRIPTION','Meta description');
jr_define('_JOMRES_FOUNDPROPERTIES',"Properties found");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

jr_define('_JOMRES_MYPROPERTIES','My campsites');

jr_define('_JOMRES_CART_TITLE','My proposed bookings');
jr_define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
jr_define('_JOMRES_CART_OR',' or ');
jr_define('_JOMRES_CART_SAVEFORLATER','Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART','View cart');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

jr_define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

jr_define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

jr_define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

jr_define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
jr_define('_JOMRES_CSS_CACHING_DESC',"");


jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

jr_define('_JOMRES_COMPARE',"Compare");
jr_define('_JOMRES_REMOVE',"Remove");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

jr_define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
jr_define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

jr_define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

jr_define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Read more...");
jr_define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
jr_define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

jr_define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

jr_define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
jr_define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

jr_define('_JOMRES_SAFEMODE',"Enable safe mode?");
jr_define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

jr_define('_JOMRES_PRICE_ON_APPLICATION',"POA");

jr_define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

jr_define('COMMON_NEXT',"Next");
jr_define('COMMON_CANCEL',"Cancel");
jr_define('COMMON_SUBMIT',"Submit");
jr_define('COMMON_SAVE',"Save");
jr_define('COMMON_DELETE',"Delete");
jr_define('COMMON_RETURN',"Return");
jr_define('COMMON_CLOSE',"Close");
jr_define('COMMON_BACK',"Back");

jr_define('COMMON_HOME',"Home");

jr_define('COMMON_NEW',"New");

jr_define('COMMON_SEND',"Send");

jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Public key");
jr_define('RECAPTCHA_PRIVATE_KEY',"Private key");


jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


jr_define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

jr_define('COMMON_ACTION',"Action");
jr_define('COMMON_VIEW',"View");

jr_define('BACKTOTOP',"Back to top");

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

jr_define('_JOMRES_INPUTFILTERING',"Input filtering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

jr_define('COMMON_PRINT',"Print");

jr_define('COMMON_EDIT',"Edit");
jr_define('COMMON_COPY',"Copy");


jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Use Jomres Bootstrap templates in the frontend?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Use Jomres Bootstrap templates in the administrator area?");

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Here are some alternatives you might want to consider.");

jr_define('_JOMRES_BEEZ_WARNING',"Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.");

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES" , "About Jomres");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN" , "1 main");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Getting started");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE" , "system maintenance");
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL" , "Access Control");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS" , "developer tools");
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE" , "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES" , "languages");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION" , "income generation");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING" , "accounting");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS" , "bookings");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE" , "site structure");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT" , "user management");
jr_define( "_JOMRES_CUSTOMCODE_MANUAL" , "Manual (online)");
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE" , "My Account (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS" , "scheduled tasks");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL" , "portal functionality");
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER" , "Plugin manager");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION" , "integration");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS" , "reports/statistics");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES" , "taxes");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS" , "Tickets (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES" , "Upgrades");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS" , "payment methods");

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT" , "Tariff default");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC" , "This only applies to new tariffs");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW" , "Years to show");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC" , "Defines the number of years to show when editing a tariff type");

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Login");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Logout");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "dashboard");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK" , "reserve");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS" , "management");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS" , "settings");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC" , "misc");
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS" , "SRPs");

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE" , "Edit country");
jr_define( "_JOMRES_EDIT_COUNTRY_ID" , "Country id");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME" , "Country name");

jr_define( "_JOMRES_EDIT_REGION_TITLE" , "Edit region");
jr_define( "_JOMRES_EDIT_REGION_ID" , "Region id");
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME" , "Region name");


jr_define( "_JOMRES_COM_LISTCOUNTRIES" , "List countries");
jr_define( "_JOMRES_COM_LISTREGIONS" , "List regions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS" , "Export definitions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO" , "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.");

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS" , "Translate locales");
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES" , "Translate lang file strings");
jr_define( "_JOMRES_COM_NOTAMANAGER" , "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature.");

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT" , "Property list default layout");

jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that'); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF" , "Stay for a minimum of");
jr_define( "_JOMRES_NIGHTSFOR" , " nights for ");


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS" , "Property list images, show the property image as a gif if slideshow images are available.");
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY" , "Show as GIFs only if the property is a featured property.");

jr_define( "_JOMRES_AGENT" , "Agent");
jr_define( "_JOMRES_AGENT_DETAILS" , "Agent details");
jr_define( "_JOMRES_AGENT_LISTINGS" , "Agent's listings");

jr_define( "_JOMRES_PROPERTY_LANG" , "Property language");
jr_define( "_JOMRES_PROPERTY_LANG_DESC" , "The default language of this property.");


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE" , "Automatically approve new properties");
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC" , "If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.");
jr_define( "_JOMRES_APPROVALS_MENU_NAME" , "Approvals");
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL" , "Properties awaiting approval");
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL" , "No properties are awaiting approval");
jr_define( "_JOMRES_APPROVALS_APPROVE" , "Approve property");
jr_define( "_JOMRES_APPROVALS_REVIEW" , "Review property");
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET" , "This property has not been approved yet. Once it has been approved you will be able to publish it.");
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH" , "Sorry, you cannot publish this property as it has not been approved yet.");
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT" , "A new property requires approval");
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT" , "A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : ");
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT" , "Your property has been approved");
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT" , "Congratulations, your property has been approved, please click the following link to view the property's control panel : ");

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE" , "Region names are translatable");
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC" , "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down.");

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT" , "Guest booked out.");

jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE','Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.');

jr_define( "JOMRES_TAPTOCALL" , "Tap to call");

jr_define( "JOMRES_NEWREVIEW_SUBJECT" , "New review for ");
jr_define( "JOMRES_NEWREVIEW_MESSAGE" , "A new review has been left for ");
jr_define( "JOMRES_NEWREPORT_SUBJECT" , "New Report");
jr_define( "JOMRES_NEWREPORT_MESSAGE" , "A review has been reported for ");

jr_define( "JOMRES_NON_REGISTERED_USER" , "Non registered user");
