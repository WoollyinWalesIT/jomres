<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Vis idags ankomster');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Vis idags afrejser');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Vis bookingforesprøgsler');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Vis andre foresprgøsler');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Hurtig reservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','List live bookinger');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Vis profiler');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Sprog');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Generel konfiguration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Rabatkonfiguration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Værelses-/ejendomskonfiguration');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Ejendomskonfiguration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Ratekonfiguration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Tilbage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Tilbage til Mos Residents List bookings');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Konfiguration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Indlæs eksempeldata');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Ja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Nej');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Ny');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Nyt værelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Ny værelsesfacilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Ny værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Ny ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Ny ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Ny gæst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Gem');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Navn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Ankomst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Afrejse');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Tildel admin funktioner til bruger');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Navn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Brugernavn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Aktuelt autoriseret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Standard ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Ændre dette');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Adgangsniveau');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Bruger modificeret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','I/T');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Skift ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Skift adgangsniveau');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Reception');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Ejendomme');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Alle bookinger');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nye bookinger');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Rediger booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Ank/afr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gæst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Værelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Betaling');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Fornavn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Efternavn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Gæsten ankommer idag. Klik på denne knap hvis de er ankommet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Noter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Specielle fornødenheder');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Læg venligst mærke til at nogle ekstra fornødenheder koster ekstra.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Voksne');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Børn');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Annuller booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Websted brugerid');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Husnummer eller navn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Gade');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','By');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tlf.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Indstillinger');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Bilregistreringsnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Kunde annulleret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Hotel annulleret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Vælg annulleringsgrund');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Dage til ankomst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Annulleringsomkostninger forfalden</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Kan ikke annullere denne booking da gæsten allerede er booket ind');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Depositum betalt, ikke flere betalinger');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Depositum ikke betalt, depositum er forfalden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Depositum betalt, 50% af den totale kontraktpris er forfalden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Depositum ikke betalt, 50% af den totale kontraktpris er forfalden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Depositum betalt, 100% af kontraktprisen er forfalden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Depositum ikke betalt, 100% af kontraktprisen er forfalden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Reminder forfalden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Depositum ikke betalt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Bekræft annullering');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Booking annulleret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dage til ankomst');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Bookingtype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Sort');
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
define('_JOMRES_COM_MR_EB_ROOM_NAME','Værelsesnavn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Værelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Handicapvenligt?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Maks personer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Beskrivelse af værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Facilitetsliste for værelse');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&pund;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','Â£');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Rateregler');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Depositum betalt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Indbetal depositum');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total til betaling');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Depositum ref');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Betalings ref');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Depositum');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Depositum gemt');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Advarsel...</FONT></h1><BR><B>Du skal chmode din sprogfil til 766 for at kunne opdatere sproget</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Hurtig res vælg værelsestyper');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Afkrydsningsboks');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Antal voksne');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Antal børn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Cot required?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternativt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Angiv ENTEN antal nætter gæsten bliver, eller afrejsesdatoen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Antal nætter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Vælg venligst den krævede værelsestype, ankomstdatoen for gæsten og enten antallet af nætter som gæsten bliver eller deres afrejsesdato. Til slut, angiv antallet af voksne & børn i gruppen.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Vore værelser');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Navn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Nummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Handicapvenligst?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Maks personer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Detaljer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Desværre, vore ledige værelser kan ikke rumme så mange gæster');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Desværre, der kan ikke tilbydes ophold i ejendommen i denne periode. Vend venligst tilbage til kalenderen og kontroller tilgængeligheden vist der.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Vælg venligst fra dropdown listen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Vælg denne gst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Beskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Kundeliste');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">FEJL: Der var en fejl i dit datovalg.<br>Tryk på Tilbageknappen og genindtast dine data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">FEJL: Du skal mindst have en gæst for at lave en booking.<br>Tryk på Tilbageknappen og genindtast dine data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">FEJL: Datoområderne er ikke korrekte.<br>Tryk på Tilbageknappen og genindtast dine data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">FEJL: Du har ikke valgt nogen værelsestyper.<br>Tryk på Tilbageknappen og genindtast dine data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">FEJL: Bookingdato er i fortiden eller i dag.<br>Tryk på Tilbageknappen og genindtast dine data.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Angiv gæstedetaljer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Bekrft gæstedetaljer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Rediger gæstedetaljer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Fornavn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Efternavn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Hus');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Gade');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','By');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Tlf.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobil');
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
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Registreringsnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Kreditkort nr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Kort udstedt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Kort udløber');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Udstedelsesnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Navn på kort');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Foretag dit valg');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Vælg');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Tarifbeskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Min dage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Maks dage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min personer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Maks personer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Antal dages ophold');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Daglig rate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Antal gæster');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Depositum');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Mindst en af de valgte dage falder på en offentlig feriedag.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Desværre, der blev ikke fundet nogen tariffer som passede til de angivne kriterier. Fortvivl ikke, det kan være at vi skal justere dine krav en smule. Prøv venligst igen, ændre antallet af dage du ønsker at overnatte, eller alternativt kan du ringe til hotellet og booke et værelse via telefonen.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Se værelses og ejendomskonfiguration');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Værelser');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Værelses faciliteter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Værelsestyper');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Ejendomsfaciliteter');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Værelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Navn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Handicapvenligt?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maks personer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Faciliteter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Værelse tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Værelse opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Klik på værelses uid link for at redigere elementet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Rediger element');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Værelsesfaciliteter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Facilitetsbeskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Klik på værelsesfacilitetslinket for at redigere elementet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Værelsesfacilitet tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Værelsesfacilitet opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Rediger element');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Forkortelse for værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Beskrevlse af værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Klik på værelsesklasse uid link for at redigere elementet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Værelsestype tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Værelsestype opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Rediger element');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Navn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Gade');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','By');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Land');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tlf.');
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
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Websted');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Facilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Klik på ejendoms uid linket for at redigere elementet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Ejendom tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Ejendom opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Rediger element');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Forkortelser for ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Fuld beskrivelse af ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Klik på ejendomsfacilitets uid linket for at redigere elementet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Ejendomsfacilitet tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Ejendomsfacilitet opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Rediger element');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tariffer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tariftitel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Beskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Gyldig fra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Gyldig til');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Rate pr nat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min dage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maks dage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min personer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maks personer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorer PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Tillad offentlige feriedage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Tillad weekender');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Klik på linket rediger tekst for at redigere tariffen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarif tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarif opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Rediger element');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Klon element');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Slet tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarif slettet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Rediger tarif');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Offentlige feriedage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Slutdatoen på den offentlige ferieperiode bør være den sidste nat som du vil kreditere gæsten for til offentlig ferietarrif.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Rediger offentlig ferie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Beskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Start');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Slut');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Ny offentlig ferie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Klik på linket rediger tekst for at redigere den offentlige ferie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Offentlig ferie tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Offentlig ferie opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Rediger element');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Klon element');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Slet offentlig ferie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Offentlig ferie slettet');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Booking gemt');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Vær venligst sikker på at formularen er udfyldt korrekt.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Kun registrerede brugere kan booke online');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Registrer venligst');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Booking offline');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Mine detaljer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Mine bookinger');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Administrer');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Book et værelse');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Book en gæst ind');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Book en gæst ud');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','List bookinger');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Nye bookinger');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Opslagstavle');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Gæster');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Ejendomme & værelser');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Tarif admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Rabat admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Offentlig ferie admin');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Vælg venligst den ønskede værelsestype, din ankomstdato og antalllet af nætter som du vil overnatte. Til slut, angiv antallet af voksne & børn i gruppen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Angiv venligst dine detaljer. Du skal kun gøre dette en gang, da systemet vil huske dig ved efterfølgende besg.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Vælg venligst værelset som du nsker.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Angiv venligst dine detaljer. Læg mærke til at alle felter er obligatoriske undtagen mobilnummer.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Kontroller tilgængelighed');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Jeg vil have dette værelse');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Vælg gæst');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Bekræft dine detaljer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Vælg min handel');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Vælg værelsestyper');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Fornavn');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Efternavn');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Hus nr.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Gade');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','By');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postnummer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tlf.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Der er ingen værelser tilgængelige som kan tilfredsstille de angivne parametre');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Angiv dine detaljer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Bekræft dine detaljer');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Tak for din booking hos os. Vi håber du vil nyde dit ophold.<br><br> <b>Husk venligst at dette kun er en forhåndsbookning, og at denne ikke vil blive bekræftet før du modtager dit bekrftelsesbrev fra os.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Booking foretaget for ejendom: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Booking foretaget for værelse: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Antal voksne: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Antal børn: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Ankomst: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Afrejse: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Overnatninger: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Gæst Uid: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Navn: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Tlf.: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobil: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Tarif: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Værdien af kontrakten er: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Depositum påkrvet: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Undskyld, men vi har brug for at du opdaterer dine detaljer inden vi kan gennemføre en bookning. Klik venligst på linket "Mine detaljer" ovenover først og udfyld dine adresseoplysninger. Tak.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Tak, dine detaljer er gemt.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Velkommen ukendte. Inden du kan booke et værelse, skal du opdatere dine detaljer under linket "Mine detaljer".');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Velkommen tilbage ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Book gæst ind ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Vælg gæst ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gæst booket ind ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Ingen gæster står til at ankomme idag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Book gæst ud ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Gæst booket ud ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Bekræft gæste udbookning');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Ingen gæster står til afrejse i dag');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Gæster der er forfalden i dag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Gæster der rejser i dag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Optagede værelser');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Nye bookinger');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Se værelsesbrug fra:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Tillæg');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tariffer & valuta');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Rabat');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Annulleringspolitik.  IKKE IMPLEMENTERET');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Fil uploads');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktuel indstilling');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Forklaring');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Booking offline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Sæt booking offline hvis du ikke ønsker at modtage bookninger.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Rabatskema tilgængeligt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Rabatskemaet er for de der ønsker at tilbyde folk rabatter afhængig af antallet af gæster i et selskab. Fordi det opererer på antallet af gæster i et selskab, er det ikke anbefalet at du bruger det hvis du ikke opkrver på pr-person-pr-nat basis.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Niveau 1 skillelinje');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Niveau 2 skillelinje');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Niveau 3 skillelinje');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Niveau 4 skillelinje');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Niveau 1 rabatværdi');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Niveau 2 rabatværdi');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Niveau 3 rabatværdi');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Niveau 4 rabatværdi');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Enkeltpersonstillæg');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Vær sikker på at dette er sat til ja hvis du vil opkræve for enkeltpersonstillæg');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Opkrævning af enkeltpersonstillægs');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Cot tillæg.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Vær sikker på at det er sat til ja hvis du vil opkræve for levering af en cot');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Cot tillægsopkrævning');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Ønsket depositum er procentsats?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Er det ønskede depositum en procentdel af den totale bookning? Hvis nej, vil det anvendte depositum være en flad værdi');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Ønsket depositumsværdi');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Pr person, pr nat');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Vælg ja hvis du ønsker at opkræve pr-person-pr-nat. Hvis nej, vil omkostningerne blive beregnet på en pr-værelse-pr-nat basis');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Forspildt kan blive indølst?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Sæt til ja hvis du ønsker at forspildte penge efter bookningsannullering kan bruges i fremtiden af kunden. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Fil eksisterer');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Filtyper');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Angiv her hvilke filtyper det er tilladt at uploade. Brug kommaseparerede liste med små bogstaver og uden mellemrum. Eksempel: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Filstørrelse');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maks. Billedefilstørrelse i kilobyte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Klik for uge værelsesbrug startende i dag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Klik på et booket værelse for at se bookningen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','eller vælg datoen som du er interesseret i');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Booket');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Ledig');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Værelser med en blå baggrund er optaget, men<br> hvis et værelse har en rød tekst, så er der ikke blevet betalt depositum.<br> Hvor et værelse har en stjerne ved "Booked" er gæsten forventet at ankomme på denne dag.<br> Hvis et værelse har en gul tekst, så optager gæsten værelset nu.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Bekræftelsesbrev');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Kære ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Pris pr nat - pr værelse ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reservationsdetaljer');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Tak for din bookning hos');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Nedenfor er et sammendrag af dine reservationsdetaljer. Kontroller venligst at detaljerne er korrekte & kontakt os hvis der er en fejl.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Dit værelse vil blive holdt indtil din ankomst, og tjek ind er efter kl. 14.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Vi ser frem til at hilse på dig på ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Vi håber at du/i får et behageligt ophold.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Nu skal vi henlede opmærksomheden til det der er skrevet med småt.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Du bliver mindet om at en bookning er en juridisk bindendene kontrakt, så hvis du af en eller anden grund skal annullere eller afkorte din bookning så skal du stadig betale det fulde beløb.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Intet tilgodehavende kan gives for ikke indtagede måltider eller for værelser der ikke er brugt i hele bookingperioden. Med dette in mende anbefaler vi på det kraftigste at du bruger en ferie rejseforsikring.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Annullerings- og forkortelsespriser</i> Hvis du annullerer din ferie skal annulleringen bekrfrætes skriftligt. Annulleringspriserne er som følger:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dage eller mere');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Kun depositum.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 til 30 dage');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% af den totale kontrakt.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Ankomstdato til 14 dage');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% af det totale beløb.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','MOMS@ 25% er inkluderet i alle tariffer. Enhver forøgelse eller ændring vil blive opkrævet.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Udskriv bekræftelsesbrev');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Fakturaudskrift');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Kære ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Pris pr nat - pr værelse ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Antal overnatninger: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Kontrakten er forhåndsbekræftet: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Pris pr nat: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Fakturadetaljer');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Tak for din handel ved');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Vi håber at se dig igen.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','MOMS@ 25% er inkluderet i alle tariffer. Enhver forøgelse eller ændring vil blive opkrævet.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Udskriv faktura');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Tilføj service til regning');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Servicebeskrivlese');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Serviceværdi');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Tilføj til regning');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Andre fakturerede elementer');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Andre fakturerede elementer, total værdi: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Element tilføjet til regning');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Standard hotel ikke fundet</h1><br>Kan ikke fortsætte. Kontakt din webstedsadministrator.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Vælg billedefil der skal vedhæftes');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Upload billede');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Upload');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Fil upload');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Din fil må maksimalt være - maks. størrelse');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Tilføj en ny fil til upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Du har kun tilladelse til at uploade filer af typen:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Vælg venligst en fil inden upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Filnavnet skal indeholde alfanumeriske karakterer og ingen mellemrum.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Filstørrelsen overskrider maksimum som administratoren har sat.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','En fil med det angivne filnavn eksisterer allerede. Giv den venligst et andet navn inden upload.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Dine filer er uploadet.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Fil IKKE uploadet.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Din fil er blevet uploadet.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Opt ind i jomres netværk?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Hvis du vælger at opt denne ejendom ind i jomres netværket, vil den blive listet på jomres.net. Læg venligst mærke til, det vil blive antaget at det er et rigtigt hotel. Jomres.net kan ikke holdes ansvarlig for din ejendom. Du skal sikre dig at dine detaljer er korrekte.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS kalender');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS kalender sprogfil');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Vælg sprogfilen der skal bruges i javascript kalenderen. Læg venligst mærke til at nogle af kalendrene kan være fejlbehæftede, Se http://sourceforge.net/tracker/?group_id=75569&atid=544287 for mere information');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS kalender CSS fil');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Vælg CSS filen der skal bruges i Javascript kalenderen');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Kontroller for offentlige ferier?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Hvis du sætter denne indstilling til Ja, skal du sikre dig at du har separate tariffer/rater for offentlige ferier og normale dage. Sæt den til Nej hvis du tager det samme beløb for offentlige ferier og normale datoer.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Diverse');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','List minikomponent kald');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Skift til Ja for at se en log over kald af minikomponenter på bunden af siden efter at Jomres har kørt. Dette deaktiverer også den interne omdirigeringsfunktion. Dette er brugbart hvis du prøver at identificere hvilke minikomponenter der udfører visse services.');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Slet dette billede');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Fil(er) slettet');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Vis afrejse inputfelt');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Sæt dette til Ja hvis du ønsker at vise afrejsefeltet. Det er registreret at der kan være nogle browsere som ikke kan behandle javascript kalenderen ordentligt. Personligt lader jeg det være deaktiveret fordi jeg mener at have feltet der er grimt');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Vælg ejendommen som du vil have ledighedsinformation omkring');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Ethvert');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Værelse');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Vis sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Sæt dette til on for at se SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Vis sql resultater');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Sæt dette til on for at se SQL data returneret og var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Vælg din skabelonpakke');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','Top knapper css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Tabelheadere css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Skabeloner');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Slet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Kan ikke fjerne dette værelse, der er bookninger på det. Annuller disse booking og forsøg igen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Værelse slettet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Slet værelsesfacilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Kunne ikke fjerne denne værelsesfacilitet, den er tildelt til nogle værelser. Fjern faciliteten fra disse værelser og forsøg igen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Værelsesfacilitet slettet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Slet ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Kunne ikke fjerne denne ejendomsfacilitet, den er tildelt til en ejendom. Fjern denne facilitet fra ejendommen og forsøg igen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Ejendomsfacilitet slettet');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Slet værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Kunne ikke fjerne denne værelsestype, den er tildelt et værelse. Prøv at gen-tildele værelset til en anden værelsestype og forsøg så igen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Kunne ikke fjerne denne værelsestype, den er tilknyttet til en tarif. Prv at gen-tildele tariffen til en anden værelsestype og forsøg så igen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Værelsestype slettet');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Slet ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Kunne ikke fjerne ejendom, der er data i tabellen: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Ejendom slettet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Du har ikke rettigheder til at slette denne ejendom.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Vælg denne ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Hvilken ejendom skal dit værelse være tilknyttet?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Vælg en ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Du skal vælge en ejendom');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Lille thumbnail billedebredde');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Medium thumbnail billedebredde');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Fuldstørrelse billedebredde');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Klik for et kort');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Ejendomsbeskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Indtjekningstider');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Områdeaktiviteter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Kørselsbeskrivelser');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Lufthavne');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Andre transportmidler');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Politik & betingelser');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Din Jomres.net ejendomsnøgle');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Når du er klar til at udgive dit websted på nettet, besøg <a href="http://www.jomres.net" target="_blank">Jomres.net</a> for at få din ejendomsnøgle. Med den kan jomres registrere din ejendom på Jomres Netværket, hvilket sikrer at du når den størst mulige kreds af kunder.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Vore ejendomme');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Besøgende kan booke online');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Sæt dette til Ja for at sikre at besøgende kan booke værelser online.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Bookninger er for en afgrænset periode');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Hvis du sætter dette til Ja, vil bookninger blive modtaget for en begrænset periode. Hvis dette er sat til Nej, så vær sikker på at "defineret ankomstdag" ikke er sat til Ja (medmindre du vil tvinge folk til at ankomme på en bestemt dag) ellers vil du ikke få mange links i tilgængelighedskalenderen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Booking periode: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Booking værelser');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Bookingtabelkant');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Skift farven på bookingtabelkanten');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Bookingtabelbaggrund');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Skift farven på bookingtabelbaggrunden');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Bookingtabelbredde');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maksimum perioder, f.eks 3x 7 booking perioder = 21 dage');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Antal gæster nødvendig?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Sæt dette til Ja for at vise feltet antal gæster i bookingformularen');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Er dette en lejlighed/hytte/villa?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','F.eks. hvis du lejer en ejendom ud, istedet for et værelse i denne ejendom. Hvis det er tilfldet, skal du være sikker på at du kun har et værelse registreret på hver ejendom.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Makimum antal voksne');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Sæt det maksimale antal voksne i bookingformularen');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Maksimum antal børn');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Sæt det maksimal antal børn i bookingformularen. Hvis dette er sat til nul så vil børne headere og tal, dropdown menuer etc ikke blive vist overhovedet.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Fortsæt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Gennemse booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Bekræft booking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Rabatter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Advarsel...</FONT></h1><BR><B>Du skal chmod din fil /components/com_jomres/site_config.php til 777 for at gøre det muligt at ændre din konfiguration</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Mandag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Tirsdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Onsdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Torsdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Fredag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Lørdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Søndag');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Ma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Ti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','On');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','To');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Lø');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Sø');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Tilgængelighed kalender');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Font for al tekst');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Fontstørrelse for al tekst');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Cellehøjde');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Cellebredde');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Fontfarve for den aktuelle dato');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Fontfarve for dage der er i månedsvisningen ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Fontfarve for dage der ikke er i månedsvisning');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cellebaggrundsfarve for dage hvor ejendom/værelse er ledig');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cellebaggrundsfarve for dage der ikke er i månedsvisning');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cellebaggrundsfarve for optagede dage');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cellebaggrundsfarve for provisorisk bookede værelser (bookinger der endnu ikke er betalt depositum for)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cellebaggrundsfarve for datoer i det forgangne');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Farvenøgle:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Optaget/Ikke tilgængelig');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Tilgængelig for bookninger');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Provisoriske bookninger');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Pre-defineret ankomstdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Kun for sider der tilbyder faste periodebookninger. Vælg dagen hvor ankomster skal starte p.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fast ankomstdag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Opholdsperiode (dage)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Vis tilgængelighedskalendre?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Sæt dette til ja for at vise tilgængelighedskalendre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Bekræft dit valg');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Tilgængelighed');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Ting som du skal gøre: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Gennemse dine valgte datoer ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Gennemse dit antal af gæster ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Levere dine personligve detaljer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Foretage dit valg');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Gennemse dit valgte værelse');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Gennemse din ordre. Når du er tilfreds, så bekræft venligst din bookning');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Klik på en ledig dato for at se bookingformularen.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Blokerede bookninger');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Ingen blokerede bookninger');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Ny bookningsblokering');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Bloker booking på disse værelser');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Slet gæst');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gæst slettet');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Kunne ikke slette denne gæst da den endnu har bookninger åbne. Annuller bookningerne og prøv igen.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Admin panel viser tape oversigt');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Sæt dette til Ja hvis du vil bruge den ugentlige tape visning, istedet for den månedlige kalendervisning for tilgængelighed.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Actual værelsespris: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Email er ikke gyldig ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Dette er en email modtaget fra');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hej');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Tak for at du har foretaget din booking hos');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Et sammendrag af bookningen følger:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Hvis du har nogen spørgsmål angende denne bookning eller andre services, så kontakt os gerne.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Vores telefonnummer er');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Alternativt kan du kontakte os via email på');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Rygning');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Ligegyldigt");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Kalender output format');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Dette tillader brugeren at skifte outputformat for datoer indeni Jomres');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Kalender input format');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Dette tillader brugeren at skifte inputformat for datoer indeni Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Faste periodebookinger tillader korte pauser');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Længde på kort pause');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publiceret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Indstillinger');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Brug paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Brug Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Kræver en PayPal Developer Account');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Din paypal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Bemærk: For at bruge paypal skal du gå til din paypal konto & aktivere Autoreturn. (Profile/Website Payment Preferences) Sæt Auto Return: On, St Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Fejl, paypal emailen er ikke sat');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Logfil');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Ingen logs');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Dato');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Tidspunkt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Bruger (brugernavn)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operation');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Ejendomsrettigheder');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Vis detaljer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Enhver</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtrer på dato');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtrer på brugernavn');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtrer på operation');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Ankomst afventer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Ankommer idag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Nuværende beboer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Afrejse idag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Afrejse overskredet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Er ikke ankommet');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filter');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Ukendt bruger');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Oprettet værelse');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Opdateret værelse');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Slettet værelse');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Oprettet værelsesfacilitet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Opdateret værelsesfacilitet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Slettet værelsesfacilitet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Indsat værelsestype');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Opdateret værelsestype');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Slettet værelsestype');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Oprettet ejendom');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Opdateret ejendom');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Slettet ejendom');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Oprettet ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Opdateret ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Slettet ejendomsfacilitet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Redigeret ejendomsindstillinger');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Publiceret ejendom.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Oprettet tarif');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Opdateret tarif');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Slettet tarif');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Oprettet offentlig ferie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Opdateret offentlig ferie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Slettet offentlig ferie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Tilføjet svc. opkrævning');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Annulleret booking');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Booket gæst ind');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Booket gæst ud');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Opdateret cc detaljer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Angivet depositum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Oprettet gæst');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Opdateret gæst');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Slettet gæst');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Uploadet nyt ejendomsbillede');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Uploadet andet ejendomsbillede');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Slettet billede');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Uploadet nyt værelsesbillede');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Uploadet andet værelsesbillede');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Uploadet nyt rsrc billede');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Uploadet andet rsrc billede');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Booket et værelse');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Oprettet en ekstra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Opdateret en ekstra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Slettet en ekstra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publiceret ekstra.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Angivet blokeret booking.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Slettet blokering af booking.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Ekstra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Rediger ekstra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Beskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Navn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Pris');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Ny ekstraydelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Klik på linket rediger tekst for at redigere ekstraydelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Ekstraydelse tilføjet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Ekstraydelse opdateret');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Rediger element');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Klon element');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Slet ekstraydelse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Ekstraydelse slettet');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Ekstraydelser');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Vis ekstraydelser ved bookingtidspunkt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Sæt til Ja for at vise de ekstraydelser som du ønsker at tilbyde gæsten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Valgfrie ekstraydelser.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Vælg denne ejendom');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Omvend valg/marker alle');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Startdato for blokering af booking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Dato for genoptagelse af service');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Blokerede bookinger');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Et eller flere af de markerede værelser er allerede booket. Hvis du ønsker at blokere booking af disse værelser skal du først annullere bookingerne på dem.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Der skete en fejl i forsget på at booke disse værelser, et eller flere af værelserne er ikke ledige.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Værelser inkluderet i blokeret booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Slet blokering af booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Vis blokerede bookinger');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Inge blokerede bookninger');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Antal stjerner');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Vis rygervalg?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Sæt dette til Ja for at vise rygervalget.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Nulstil');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Din betalingsstatus fra paypal er sat til afvendtende. Når hotellet kan bekræfte modtagelse af betalingen vil bookningen blive ændret til bekræftet.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Booking annulleret');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Søg her efter:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Søg ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Vis paypal fejlsøgningsinfo?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Vis værelsesnavne?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Sæt dette til Ja for at vise værelsesnavne?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Vis værelsestyper?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Sæt dette til Ja for at vise værelsestyper?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Standard rygerindstilling');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Vær klar over: Hvis din standardindstilling er Ja og alle dine værelser er ikke-ryger, så vil intet værelse vises på listen på booking siden.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Valutasymbol');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','F.eks. &amp;pund&#59; Læg venligst mærke til at du skal bruge HTML entities koden for det ønskede symbol. For en liste over disse entities besøg venligst <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Valutaformat');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Valotakode');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','F.eks. GBP. Dette bruges i emailen til kunden der bekræfter kundens booking.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Klik for mere information');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Advarsel...Du er logget på som en manager med tilladelser til alle ejendomme. Vær klar over at dette kan medføre problemer ved udførsel af nogle funktioner i Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Begræns forud bookninger?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Sæt dette til Ja hvis du vil brgrænse forud bookninger (brug tekstfeltet til at sætte grænsen i form af dage). Hvis du sætter dette til Ja så vil ankomstdatoen bliver sat til dags dato hvis en bruger forsøger at booke mere end n dage forud');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Grænse for booking antal dage forud:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>BEMÆRK: Det er ikke anbefalet at du sætter begge følgende indstillinger til Ja, du bør kun bruge en af de to tilgængelige momsberegningsmåder. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Moms');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Værelsesmoms');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Designet til det amerikanske marked. Dette er værelsesmomsbeløbende som gæsten vil blive opkrævet. Du kan opkræve en kombination og/eller en fast procentdel. Læg mærke til at denne moms kun bliver lagt til værelsesprisen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Moms fast beløb');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Moms procentsats');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Moms');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','For ethvert marked der anvender en blanket rate, f.eks. Værdi tilføjet moms i UK. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Momsprocentsats');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Arkiver alle poster');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' poster arkiveret');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer arkiveret audit poster');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Vore tariffer');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Tarifnavn');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Tarifbeskrivelse');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Værelsestype');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Gyldig fra');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Gyldig til');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Pr person pr nat');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Pr nat');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Ikke inklusiv weekender');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dage');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maxksmum dage');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min personer');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maks personer');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Forhåndsvis');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Redigering aktiveret?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktuel tekst');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Ny tekst');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Opdateret brugerdefineret tekst.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Rediger sprog');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Antal arkiverede poster: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Der er mere end 200 poster i den aktive audit trail, derfor er det ikke muligt at vise de udførte SQL aktiviteter. Hvis du vil se SQLen, skal du analysere audit tabellen direkte. Hvis du vil kontrollere SQLen jævnligt, er det anbefalet at du arkiverer jævnligt');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Ejendomstype');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','List ejendomstyper');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Rediger ejendomstype');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Ejendomstype');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Ejendomstypebeskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Ejendomstype gemt');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Kunne ikke slette ejendomstype. Ejendomstype er tildelt til en eller flere ejendomme, gen-tildel dem veligst inden du prøver at slette');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Ejendom type(r) slettet');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Fejl, ejendom har ingen værelser.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Fejl, ejendom har ingen tariffer.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Fejl, ejendom har ingen værelsestyper.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Skift ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Reminder om betaling');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Din paypal transaktion er gennemført, og der er emailet en kvittering for dit køb til dig. Du kan logge på din konto hos www.paypal.com for at se detaljer omkring transaktionen. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Ingen ekstra services der skal tilføjes til regningen');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Depositum');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Fuldt beløb');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Beløb opkrævet ved bookingtidspunkt');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Brug denne indstilling til at afgøre hvad der skal opkræves på bookingtidspunktet. Vælg depositum hvis depositum skal opkræves, eller fuldt beløb hvis det fulde beløb skal opkræves.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Kalendermåneder der skal vises');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Hvor mange måneder skal vises for værelsestilgængelighed?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Signeret på vegne af ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Annuller');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Vælg venligst værelset(erne) som du vil fjerne som service, og de relevante datoer. <br>Hvis et værelse ikke har en markering, kan det ikke blive inkluderet i den blokerede bookning indtil udestående bookninger er blevet gennemført/annulleret.<br/> Når du har valgt de passende datoer, så klik på den blå knap "anvend" for at gen-kontrollere tilgængelighed. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Du er blevet logget af på grund af inaktivitet</b> Log venligst på og prøv igen.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Grund');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Brug betalingsgateways?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Sæt dette til Ja hvis du vil bruge online betalingsgateways. <b>Bemærk:</b>Dette deaktiverer ikke depositumsberegningen der vises under bookingprocessen. For at deaktivere dette kan du rediger skabelonen der viser værelser og indeslutte elementerne der refererer til depositum i  en klasse hvis font og baggrundsfarve det det samme.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Vælg venligst din betalingsmetode.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway aktiveret?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modificeret plugin indstilling');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Indsat plugin indstilling');
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
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Kryptering');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Brug mCrypt kryptering?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Sæt dette til Ja HVIS du har mCrypt kompileret ind i PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Krypteringsnøgle');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Krypteringstilstand');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Krypteringsalgoritme');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Vist kreditkort');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Opdateret kreditkort');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Rediger kreditkort');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Rediger ikonstørrelse');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Målt i pixels square.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Upload af ejendomsbilleder');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Billeder allerede i mappen');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Vis link til slideshows?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Vis slideshow inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Sæt dette til Ja hvis du vil vise slideshowet inline med ejendomsdetaljerne.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Slideshow fuld højde');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail mål højde');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Desværre, ingen billeder tilgængelig for denne ejendom. Upload venligst nogle billeder ved at bruge masse upload funktionen hvis du vil bruge slideshow funktionen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Popup vinduesbredde');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Popup vindueshøjde');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Billedeplacering');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Skift kun dette hvis du har en speciel grund til at jomres billedet skal være et andet sted. Standard hvis ikke sat er \'/images/stories/jomres/\' relativt til systemroden.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Vis link til tariffer?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Popups tilladt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Hvis sat til Nej, så vil links der normalt ville åbne i et popup vindue istedet åbne inline. ESPERIMENTELT! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow billeder');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Brug denne formular til at uploade flere billeder af denne ejendom.<br/><b>Bemærk</b> at ethvert billede med det samme navn vil blive overskrevet. Bemærk også at denne formular ikke uploader værelsesspecifikke billeder eller ejendoms headerbilledet, du skal uploade disse via Ejendoms admin sektionen.<br/><b>Bemærk</b> Billeder der uploades her gemmes i mappen /images/stories/jomres/*property_uid*. Hvis denne mappe ikke eksisterer vil den blive oprettet, medmindre der er blevet angivet en alternativ mappe i konfigurationen.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Diverse');
/**
* @ignore
*/
define('_JOMRES_A','Webstedskonfiguration');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Brug globale ejendomsfunktioner');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Sæt dette til Ja hvis du vil tvinge alle ejendomme til kun at bruge ejendsomsfunktionerne som er angivet af webmasteren.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','For at tildele at billede til denne facilitet skal du først uploade dine ejendomsfacilitetsbilleder til mappen /images/stories/jomres/pfeatures/. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Ikon');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Vælg søge plugin som du ønsker at anvende.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Desværre, din søgning returnerede ikke nogen resultater. Ændre dine søgekriterier og prøv igen.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Er du sikker på at du vil gøre dette?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Book et værelse');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Book denne ejendom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Sikkerhednummer');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Vis tariffer inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detaljeret information');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Klik for værelser og tilgængelighed');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Vis tarifinformation');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Vis adresseinformation under dette link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Vis detaljeret ejendomsinfo under dette link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Vis værelser og tilgængelighed under dette link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Vis tarifinformation under dette link');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flatrate tariffer');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Gennemsnit');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Vælg tarifmodellen som du vil anvende');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Du har to muligheder for tarifberegningsmetode. Den første, 'flat rate' metoden giver dig mulighed for at tilbyde et antal forskellige tariffer til gæsten og raten for overnatning er den samme hele tiden. Dette er brugbart hvis du vil tilbyde flere forskellige tariffer for den samme dato, f.eks. Seng og morgenmadstarif og S&M og aftensmadstarif. Vælg 'gennemsnit' tarif hvis du ønsker at justere dine priser afhængig af den pågældende dato. Jomres finder alle tarifferne for hver dag i bookingen, lægger dem sammen og returnerer derefter den gennemsnitlige rate over perioden");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Brug Jomres portal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Sæt dette til Ja hvis Jomres skal bruges i sammenhæng med Jomres portal softwaren');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Vis afrejsedato input?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC','Sæt dette til Nej hvis du ikke vil vise inputboksen for afrejsedato. Brug kun dette hvis du ved hvad du gør, da afrejsedatoen i bookinger altid vil blive sat til dagen efter ankomstdatoen.');

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Beskrivelsesgrænse');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Dette begrænser antallet af karakterer der vises i ejendomslisten når den trækkes fra ejendomsbeskrivelsen.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Daglig rate multiplikator');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Dette giver brugeren mulighed for at tilføje en multiplikator til den daglige rate som returneres til bookingformularen under bokkingprocessen (brugbar hvis du foreksempel vil vise en ejendomsrate på ugebasis)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Slideshow popupbrede');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Slideshow popuphøjde');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Opdater');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Klik på kanppen opdater for at kontrollere tilgængelighed');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Brugt dato() format stil?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Sæt dette til Ja for at formatere outputdato i henhold til date() (Se <a href="http://www.php.net/manual/en/function.date.php">Her</a>). Sæt det til Nej for at bruge strftime() formatering (se <a href="http://www.php.net/manual/en/function.strftime.php">Her</a> f.eks. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Klik for at publicere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Klik for at afpublicere');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Udfyld venligst de følgende felter: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Tak.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Brug globale værelsestyper');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Sæt dette til Ja hvis du vil tvinge alle ejendomme til kun at bruge værelsestype angivet af webmasteren. Du skal sætte dette til Ja hvis du ønsker at tillade søgning på værelsestyper.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','For at tildele et billede til denne værelsestype skal du først uploade dit værelsestypebillede til mappen /images/stories/jomres/rmtypes/. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Input fejl kantfarve');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input fejl baggrundsfarve');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Standard land i bookingformular');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Brug webstedshjælp?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Sæt dette til Ja hvis du vil have Jomres til at vise webstedshjælpeteksten over søgelinjen.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Rediger din websteds bookinghjælpetekst her.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Elementer markeret med en rød stjerne skal udfyldes.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Brugere kan registrere deres ejendomme?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Sæt dette til Ja hvis du vil tillade at brugere registrerer deres egne ejendomme uden admin indblanding.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Angiv venligst land og region for din ejendom.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Udfyld venligst dine ejendomsdetaljer.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Elementer markeret med en rød stjerne skal udfyldes.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Oprettet ejendom');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Desværre, du kan ikke oprette en ejendom i dette system. Du skal være logget på, registreret bruger, og ikke allerede have oprettet en ejendom.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Oprettet ejendom: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','For bruger: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Opkrævning daglig?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Pr dag');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Vis kalender fra begyndelsen af året?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Tilgængelighedskalenderen vises fra begyndelsen af det aktuelle år.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Vis detaljeret værelsesinformation?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Hvis du sætter dette til Nej, så vil Jomres ikke forsøge at vise de aktuelle bookinger, istedet vil det simpelthen vise at der er noget tilgængeligt.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Antal værelser tilgængelige');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Vælg venligst antal værelser som du ønsker, af typen som du ønsker.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Ønsket antal');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Tilbage til ejendomsdetaljer');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Værelsestyper');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Brug Jomres metadata?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Hvis dette er sat til Ja, så vil Jomres bruge teksten som er gentaget fra ejendomsbeskrivelse & ejendomslistningssider til at generere metadata. Adskil ord med et mellemrum.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stopord');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Disse er stopord, altså ord som du <i>ikke</i> vil have med i metadata.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Andre elementer der skal fjernes');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Dette er elementer der skal fjernes fra metadataene. Et eksempel kunne være symboler, anførselstegn etc.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Frekvens');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Antal gange som et ord skal gentages inden det bliver taget med i metadata.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Tilfældig søgegrænse');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Vis link til google valutakonverter i tariflistning?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Konverter rate til :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Tillad at brugere redigerer ved brug af html editorer?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Brug denne formular til at fortage din booking. Hold musen over "i" billederne for at få mere information om kolonnen. Modificer dine bookingdetaljer såsom ankomst- og afrejsedatoarrival & antal gæster. Vælg derefter de(t) ønskede værelse(r) fra listen over tilgængelige værelser. Klik på et tilgængeligt værelse for at tilføje det til din booking. Når du er færdig, kan du tilføje valgfrie ekstraydelser som du ønsker og angive dine adressedetaljer. Når der er udfyldt nok i formularen vil der fremkomme en send-knap så du kan bekræfte din booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Brug denne formular til at foretage din booking. Hold musen over "i" billederne for at få mere information om kolonnen. Modificer dine bookingdetaljer såsom ankomst- og afrejsedatoarrival & antal gæster. Når du er færdig, kan du tilføje valgfrie ekstraydelser som du ønsker og angive dine adressedetaljer. Når der er udfyldt nok i formularen vil der fremkomme en send-knap så du kan bekræfte din booking.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Bookingdetaljer');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Vælg detaljerne for dine bookingønkser');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Tilgængelighed ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Vælg værelserne som du ønsker');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Se her om ejendommen er tilgængelig på dette tidspunkt.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Udvid dit ophold');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Vælg valgfrie ekstraydelser som du vil inkludere i din booking');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Pr nat');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Din adresse');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Angiv venligst dine detaljer. Bemærk at alle felter undtagen dit mobilnr. skal udfyldes');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Tilgængelige værelser');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Valgte værelser');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Den tidligst mulige ankomstdato er: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Pr nat:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Ekstrydelser:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Moms:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Rabat:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Samlet total:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gæster');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Klik nu for at tilføje dette værelse til dit udvalg');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Klik nu for at fjerne dette værelse fra dit udvalg');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Gæstetyper');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Kundetype, f.eks. børn i alderen 5-10, eller student ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Bemærkninger');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Bemærkninger som du vil notere om denne kundetype');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maksimum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksimum antal af denne kundetype som kan vælges i bookingformularen');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Er procentdel');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Tallet der beregnes er en procentdel af grundantallet for værelset. Hvis dette er sat til Nej så bliver tallet du angiver blot lagt til eller trukket fra grundantallet for værelset.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Tilføj variant?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Det beregnede tal bliver lagt til eller trukket fra grundantallet beregnet for værelset. Sæt dette til Nej hvis du vil at dette skal være en rabat fra grundantallet. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Variant');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Størrelsen af varianten');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modificeret kundetyperækkefølge');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Publiceret kundetype');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Slettet kundetype');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Oprettet kundetype');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Opdateret kundetype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Opdateret kundetype');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Vis tilgængelighedskalender på ejendomsdetaljesiden?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Vis link til værelsesliste på ejendomsdetaljesiden?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Vis <b>kun</b> tilgængelighedskalender/værelsesliste?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Skift dette til Ja for at deaktivere visning af ejendomsheadere og detaljer, så kun værelseslisten/tilgængelighedskalenderen er synlig i ejendomsdetaljesektionen. Kun for brugere der udlejere enkeltværelsesejendomme (f.ke.s lejligheder, hytter, sommerhuse etc).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS stil der skal anvendes på webstedet');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Ank-afr minimumsinterval');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Mimimumsintervallet i bookingformularen mellem ankomstdato og afrejsedato.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Værelsesbillede');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Bookingformular værelsesliste vis værelsesnummer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Bookingformular værelsesliste vis værelsesnavn');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Bookingformular værelsesliste vis tariftitel');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Bookingformular overlib vis titel');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Bookingformular overlib vis beskrivelse');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Bookingformular overlib vis rate/tarif');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Bookingformular overlib vis starte');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Bookingformular overlib vis slutninger');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Bookingformular overlib vis minimum dage');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Bookingformular overlib vis maksimum dage');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Bookingformular overlib vis minimum personer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Bookingformular overlib vis maksimum personer');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Bookingformular overlib vis værelsesnummer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Bookingformular overlib vis værelsesnavn');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Bookingformular overlib vis værelsestype');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Bookingformular overlib vis værelsesrygning');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Bookingformular overlib vis værelse handicapvenligt');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Bookingformular overlib vis værelsesetage');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Bookingformular overlib vis værelse maksimum personer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Bookingformular overlib vis værelsesfaciliteter');

/**
* @ignore
*/
define('_JOMRES_ORDER','Bestil');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','Du har konfigureret Jomres som en enkeltværelsesejendom (f.eks. en lejlighed, hytte, sommerhus, villa) alligevel har du oprettet mere end et værelse. Dette kan medføre fejl når du bruger Jomres, så hvis du vil fortsæette med at bruge Jomres til at styre enkeltværelsesejendom skal du fjerne alle værelse på nær et. Modificer venligst din konfiguration så at enkeltværelsesejendom = Nej, og gå derefter til ejendomsadmin og fjern alle værelse på når et, så du kun har et værelse på denne ejendom.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Påkrævet');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dage inden ankomst');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimum antal dage der skal gå fra "idag", inden ankomstdato.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Pr nat:');

/**
* @ignore
*/
define('_JOMRES_DTV','Datotype variationer');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Dag i ugen');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Datoområder');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Opholdsdage');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Sidste minut');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Dag i ugen');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Dagen i ugen');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Tarifklasse komponentvalg');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Denne dropdown giver dig mulighed for at vælge standard tarifklasseobjekt som du har oprettet/downloaded pg installeret som en seperat komponent i dette system. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Gæstetype standard');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standard nummer for den første gæstetype. Hvis du bruger gæstetyper, så er dette standardnummeret som den første gæstetype i bookingformularen bliver sat til.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Kun registrerede brugere kan booke online?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Desværre, du skal være en registreret bruger for at booke online. Klik her for at registrere på dette websted. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Fontfarve på link til aktuelle bookinger');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend kanter');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Hvilket opslagstavleplugin skal anvendes');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Hvis du har installeret Jomres opslagstavleplugins kan du vælge et alternativt istedet for standard opslagstavlen her.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Værelse er booket');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Blokeret booking');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Afrund depositum op til nærmeste heltal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Opkræv depositum?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tarifopkrævninger gemmes som ugentlige tal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Du har muligheden for at gemme tarfiopkrævninger som enten daglige eller ugentlige værdier. Hvis du gemmer dem som ugentlige, SKAL du sætte denne indstilling til Ja.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','pr uge');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fast ankomstdato gentaget: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Når fast ankomstdato er valgt, antallet af datoer som kan vises i dato dropdown listen');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Rygningsvalg ugyldigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Ankomstdato forkert');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Afrejsedato forkert');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Bookingen er for kort. Der skal mindst være dette antal dage mellem ankomst- og afrejsedato:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Dit interval er');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Gæsttypevariant er forkert');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Vælg dine gæsteantal/typer');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Du har for mange i din gruppe til de tilgængelige tariffer');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Du har valgt flere værelse end du har gæster til, klik på et værelsesnavn for at fjerne det fra dit udvalg');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','For mange gæster til de tilgængelige senge');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Du skal vælge flere værelser');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Vælg et værelse');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Fornavn skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Efternavn skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Hus nr/navn skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Gade skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','By skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postnummer skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Land skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Telefonnummer skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Mobilnummer skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Emailadressen skal udfyldes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Emailadressen er ikke gyldig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Kunne ikke validere emaildomæne');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Vi har ledige ophold!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Ingen værelser valgt endnu');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Booking nr.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok at booke, beskedboksbaggrung');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump skabelon var?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Sæt dette for at muliggøre et DHTML dump af skabelonvariabler for hvert FRONTEND skabelonfil når siden vises. Brugbar hvis du vil se om et bestemt element er tilgængelig for brug i en given skabelon.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Tal er procentdel');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Sæt dette til Ja hvis beregningstallet for enkeltpersonstillæg er en procentdel. Hvis Nej så vil det blive tilføjet som et fladt tal.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Tilgængelige værelser/tarifgrænse');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Brug dette input til at begrænse antallet af værelser & tariffer som bliver listet i bookingformularen. Sæt det til nul hvis du ikke vil aktivere begrænsningen. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Intet ledigt på dette tidspunkt!');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Margen');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Profitmargen, i procent.');


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Vis Jomres admin indstillinger som ikoner?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Sæt dette til Nej hvis du vil have alle admin link vist som tekst.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Book det nu: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global redigeringstilstand?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Vær forsigtig med denne funktion. Hvis sat til Ja, så vil redigeringstilstanden påvirke den brugerdefinerede tekst for ALLE indstillinger i systemet for konstanten som du redigerer.');

/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Brug global valuta?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Sæt til Ja for at tvinge alle indstillinger til at bruge den samme valuta (f.kes. & # 8 3 6 4 ;)');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Globalt valutasymbol');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponent indlejret');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Sæt dette til Ja hvis komponenten er indlemmet så modul og header områder ikke ses');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Superejendomme');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Kun weekender');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tarif er kun gyldig hvis opholdsperioden inkludere en weekenddag (fredag eller lørdag) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Weekenddage');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Sæt dine weekenddage. Tariffer der tillader eller forbyder weekender vil tage denne indstilling i betragtning når der genereres værelseslister.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Vælg land inden du tilføjer nogen ejendomsinformation');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Gem dine ejendomsændringer inden du uploader et ejendomsbillede');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Priser fra - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','Alle');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Faciliteter');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Beskrivelse');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Tilgængelighed');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Søg efter land');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Søg efter region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Søg efter by');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Facilitetssøgning.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Søg');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Angiv et søgeord i boksen og tryk på knappen.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Søgeord: ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Angiv venligst dine formodede ankomsts- og afrejsedatoer og tryk på knappen for at finde ejendomme der er ledige på de valgte datoer.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','List alle ejendomme efter ejendomstype.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','List alle ejendomme efter værelsestype.');

/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Standard');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Ejendomsnavn');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Ejendomsregion');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Ejendomsby');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Stjerner');

/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Ejendomsliste');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Ejendomsdetaljer - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Bookingformular');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Opdater dine adressedetaljer');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Gen-kontroller værelsestilgængelighed<br/>(Værelsesvalg vil blive nulstillet)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Gen-kontroller tilgængelighed');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modificere dine valgfrie ekstraydelser');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Ændre dit værelsesvalg');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Opdatere dine adressedetaljer');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Desværre, et eller flere adressefelter er forkerte.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
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
define('JOMRES_COM_A_CALENDARNOTE','Note! These options only affect the language format in modules. To adjust the javascript langauge format for a given property please edit that javascript calendar options within that property');
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
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference rooms and tariffs to room/property types and allows you to configure rooms and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a room and associate it with a room type. You then create a tariff and associate THAT with a room type. Using this method it is possible to \"layer\" tariffs over each other, for example a room type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a room or tariff from a room/property type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of rooms and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP only');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max people per room');
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
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
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
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Room type ');
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
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
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
define('JOMRES_MAXPEOPLEINPROPERTY','Max people that property can accommodate');
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
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
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
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
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
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
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
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');

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
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Room usage');
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
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Property id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
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
define('_JRPORTAL_CPANEL_ADDPROPERTY','Add property');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Source : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Is this a multiroom property?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Is this a property like a hotel/bed and breakfast/penzion? If so, select Yes. If it is a single room property like a villa/cottage then choose No.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
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
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');

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
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
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
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per room ");
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
define('_JOMRES_SLIDESHOW_LOCATION',"Show slideshow above property details or below.");
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

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
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
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
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
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_TITLE','Real estate listing');

/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
/**
* @ignore
*/
define('_JOMRES_APIKEY_REMAKE','Make new API key');

/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');

/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
/**
* @ignore
*/
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
/**
* @ignore
*/
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/Editing_mode" target="_blank">the editing mode manual page</a> for more information on this subject.');

/**
* @ignore
*/
define('_JOMRES_SUPPORTKEY','Support key');
/**
* @ignore
*/
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download updates and plugins for Jomres.');
/**
* @ignore
*/
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');

/**
* @ignore
*/
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
/**
* @ignore
*/
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
/**
* @ignore
*/
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
/**
* @ignore
*/
define('_JOMRES_JQUERYTHEME','Jquery theme');
/**
* @ignore
*/
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');


