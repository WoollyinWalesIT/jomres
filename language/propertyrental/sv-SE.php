<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Snabb reservation');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Visa profiler');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Företagskonfiguration');
jr_define('_JOMRES_COM_MR_BACK', 'Tillbaka');
jr_define('_JOMRES_COM_MR_YES', 'Ja');
jr_define('_JOMRES_COM_MR_NO', 'Nej');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Ny avgift');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nya affärer');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Ny verksamhet har');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Ny gäst');
jr_define('_JOMRES_COM_MR_SAVE', 'Spara');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Efternamn');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Incheckning');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Utcheckning');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Tilldela administratörsfunktioner');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID', 'id');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Namn');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Användarnamn');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'För närvarande godkänd (klicka för att spärra användaren)');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Standard verksamhet');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Ändra den här');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Åtkomstnivå');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Ändrad av användare');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'Ej tillämplig');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Reception');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Verksamhetsadministratör');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Alla bokningar');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Nya bokningar');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Redigera bokning');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Incheckning/utcheckning');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gäst');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Resurs');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Betalning');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Förnamn');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Efternamn');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Särskilda krav');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Observera att vissa speciella krav kan medföra extra avgifter.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Avbryt bokning');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Husnummer eller namn');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Gata');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Stad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postnummer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Fast nummer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilnummer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-postadress');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Kan inte avbryta denna bokning eftersom gäst redan är bokad');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depositionen är inte betalad');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Bekräfta avbokning');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Bokning avbruten');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dagar till incheckning');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Bokningstyp');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Obokningsbar inkvartering');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Reception');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Inkvarteringens namn');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'inkvartering');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Våning');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Avaktiverad tillgång tillgänglig?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max antal personer');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Inkvartering/Verksamhetstyp');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Beskrivning av inkvartering/Verksamhetstyp');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Lista över inkvarteringens egenskaper');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Deposition betald');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Ange deposition');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Totalt att betala');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Depositionens referens');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Bokningsnummer');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Deposition krävs');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Deposition sparad');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Våra inkvarteringar');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Verksamhet');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Våra inkvarteringar/verksamhetstyper');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Redigera gästuppgifter');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Förnamn');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Efternamn');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Nummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Gata');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Stad');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Postnummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Fast telefon');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobilnummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Kreditkort nej.');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Kort utfärdat');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Kort förfaller');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Utfärdandenummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Namn på kort');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Gör ditt val');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Nätter');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Antal gäster');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Totalt');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Visa inkvarteringar och verksamhetskonfigurationen');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Inkvartering');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Inkvarteringens egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Inkvarteringstyper');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Inkvartering');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Typ');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Namn');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Antal');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Våning');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Handikappvänligt?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max antal personer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Inkvartering tillagd');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Redigera post');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Inkvarteringens egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Inkvarteringens egenskapsbeskrivning');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Inkvarteringens egenskap tillagd');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Inkvarteringens egenskap uppdaterad');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Inkvarteringstyp');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Förkortning för inkvartering/verksamhetstyp');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Beskrivning av inkvartering/verksamhetstyp');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Inkvartering/verksamhetstyp tillagd');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Inkvartering/verksamhetstyp uppdaterad');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Redigera post');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Namn');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Gata');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Stad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Land');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Postnummer');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telefon');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Epost');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Webbplats');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Verksamhet tillagd');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Verksamhet uppdaterad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Verksamhetsegenskaper');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Verksamhetsförkortning');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Fullständig beskrivning för verksamhetsegenskaper');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Verksamhetsegenskap har lagts till');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Verksamhetsegenskap uppdaterad');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Avgifter');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Avgiftens titel');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Avgiftens beskrivning');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Giltig från');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Giltig till');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'per natt');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Dagar minimum');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Dagarna maximum');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Minsta antal personer');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max antal personer');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Inkvartering/verksamhetstyp');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorera per person och natt');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Tillåt helger');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Avgiften tillagd');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Avgiften uppdaterad');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Redigera post');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Kopiera posten');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Avgiften utgår');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Redigera avgiften');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Helgdagar');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Bokning sparad');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Boka en gäst i');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Avboka en gäst i');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Lista bokningar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Nya bokningar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Panel');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Gästadministration');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Verksamhetsadministration');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Kontrollera tillgänglighet');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Bekräfta dina uppgifter');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Förnamn');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Efternamn');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Gata');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Stad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postnummer');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Fast nummer');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilnummer');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Det finns inga tillgängliga inkvarteringar som kan tillgodose de parametrar som anges');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Tack för Din bokning hos oss och vi hoppas att du njuta av din vistelse.<br><br><b>Observera att detta endast är en preliminär bokning som är bekräftad först då Du får ett bekräftelsebrev från oss.</center>');

jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Boka gäst');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Välj gäst');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gäst bokas i');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Inga gäster kommer att anlända idag');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Avboka gäster');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Inga gäster kommer att avresa idag');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Tillägg');
jr_define('_JOMRES_COM_A_TARIFFS', 'Avgift & valuta');
jr_define('_JOMRES_COM_A_DISCOUNTS', 'Rabattavdrag');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Filuppladdningar');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS', 'Nuvarande inställning');
jr_define('_JOMRES_COM_A_EXPLANATION', 'Förklaring');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Tillägg för enskild person');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Välj Ja om du vill ta betalt för tillägg av en enskild person');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Tillägg för enskild person');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Är deposition som krävs en procentsats?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Är depositionen som krävs en procentandel av den totala bokningen? Om Nej är depositionen ett fast belopp');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Värde på depositionen som krävs');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Per person och natt');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Välj Ja om du vill ta betalt per person och natt. Om nej kommer kostnaden att tas ut per inkvartering och natt');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Filstorlek');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max Bildfilstorlek i kilobyte.');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Bokade inkvarteringar');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Reservationsuppgifter');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Du påminns om att en bokning är ett juridiskt bindande avtal, så om du av någon anledning måste avbryta eller förkorta Din bokning så är Du fortfarande skyldig att betala hela beloppet.');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Avbokning och bokningsändringar</i> Om du avbokar måste den bekräftas skriftligen. Avbokningskostnaderna är följande:');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Mindre än 15 dagar till ankomstdagen');

jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Skriv ut bekräftelsebrev');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Fakturautskrift');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Antal nätter:');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Beställning överenskommen ursprungligen:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Kostnad per natt:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Slutsumma');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Tack ');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Vi hoppas att vi kommer att se dig igen.');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Skriv ut faktura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Lägg till service på fakturan');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Beskrivning av tjänsten');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Servicekostnad');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Andra debiterade poster');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Andra fakturerade poster, totalt värde:');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Poster tillagda på faktura');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Ladda upp bild');
jr_define('_JOMRES_FILE_UPLOAD', 'Ladda upp fil');
jr_define('_JOMRES_FILE_ERROR_TYPE', 'Du kan endast ladda filer av typ: \ n');
jr_define('_JOMRES_FILE_ERROR_EMPTY', 'Välj en fil innan uppladdning');
jr_define('_JOMRES_FILE_ERROR_NAME', 'Filen får endast innehålla alfanumeriska tecken och inga mellanslag.');
jr_define('_JOMRES_FILE_ERROR_SIZE', 'Filstorleken överskrider den gräns administratören har satt.');
jr_define('_JOMRES_FILE_NOT_UPLOADED', 'Filen kunde inte laddas upp.');
jr_define('_JOMRES_FILE_UPDATED', 'Din fil har överförts.');
jr_define('_JOMRES_COM_A_JSCALENDAR', 'JS Kalender');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE', 'JS Kalender språkfil');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Välj språkfil som ska användas i Javascriptkalendern. Observera att vissa av de kalendrarna kan vara defekta, se http://sourceforge.net/tracker/?group_id=75569&atid=544287 för mer information');
jr_define('_JOMRES_COM_A_CALENDARCSS', 'JS Kalender CSS-fil');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC', 'Välj CSS-fil som ska användas i Javascriptkalendern');
jr_define('_JOMRES_COM_A_ODDS', 'Blandat');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Lista över pluginsanrop');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Sätt detta till Ja för att se en logg över pluginsanrop längst ner på sidan efter Jomres har avslutats. Det inaktiverar också den interna omdirigeringsfunktionen. Detta är användbart om du försöker identifiera vilka plugins som utför vissa tjänster.');
jr_define('_JOMRES_FILE_DELETE', 'Radera denna bild');
jr_define('_JOMRES_FILE_DELETED', 'Fil(er) raderade');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Ta bort');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Kunde inte ta bort denna inkvartering då den ingår in en eller flera bokningar. Avbryt dessa bokningar och försöka igen.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Inkvartering raderad');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Ta bort inkvarteringsegenskap');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Kunde inte ta bort denna inkvarteringsegenskap då den delas med en eller flera inkvarteringar. Ta bort egenskapen från dessa inkvarteringar och försöka igen.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Inkvarteringsegenskapen raderas');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Ta bort verksamhetsegenskap');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Kunde inte ta bort verksamhetegenskapen då den delas med andra verksamheter. Ta bort egenskapen från dessa verksamheter och försök igen.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Verksamhetegenskapen raderas');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Ta bort inkvartering/verksamhets typ');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Kunde inte ta bort denna inkvartering/verksamhets typ då den ingår i en inkvartering. Ta bort typen från dessa inkvarteringar och försök igen.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Kunde inte ta bort denna inkvartering/verksamhets typ då den ingår i avgifter. Ta bort typen från dessa prislistor och försök igen.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Inkvartering/verksamhetstyp raderad');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Radera verksamhet');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Verksamhet raderad');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Du har inte behörighet att ta bort denna verksamhet.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Bildbredd efter att Jomres ändrat storleken på uppladdade bilder');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Karta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Verksamhetsbeskrivning');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Kontrollera i tider');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Områdesaktiviteter');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Köranvisningar');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Flygplatser');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Övrig transport');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Regler och friskrivningar');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adress');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Besökare kan boka online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Välj Ja för att besökarna kan boka inkvarteringar på nätet.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Bokningar gäller en viss tid');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Om du sätter till Ja görs bokningar för en bestämd tid. Om detta är inställt på Nej se till att \"Förutbestämd incheckningsdag\" inte är satt till Ja (om du inte vill tvinga folk att välja en specifik incheckningsdag) annars kommer du inte få många länkar i tillgänglighetskalendern.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Bokningsperiod:');
jr_define('_JOMRES_COM_A_BOOKING', 'Bokning av inkvartering');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Längsta, t.ex. 3 x 7 bokningsperioder = 21 dagar');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Är detta ett rum, en lägenhet/stuga/villa?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'T.ex. om du hyr ut en hel verksamhet snarare än inkvarteringar i verksamheten. Om så är fallet, måste du se till att du bara har en inkvartering registrerad i varje verksamhet.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Granska bokning');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Bekräfta bokning');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Måndag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Tisdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Onsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Torsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Fredag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Lördag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Söndag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Må');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Ti');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'On');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'To');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Fr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Lö');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Sö');
jr_define('_JOMRES_COM_A_AVLCAL', 'Beräknad tillgänglighet');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Teckenfärg för aktuellt datum');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Teckenfärg för datum i aktuell månad');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Teckenfärg för ej aktuella månader');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Cellens bakgrundsfärg för datum i aktuell månad när inkvartering/verksamhet är tillgänglig');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Cellens bakgrundsfärg för datum i ej aktuella månader');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Cellens bakgrundsfärg för bokade datum');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Cellens bakgrundsfärg för preliminärt bokade inkvarteringar (bokningar där en deposition inte har lagts)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Cellens bakgrundsfärg för förflutna datum');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Bokad/ej tillgänglig');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Tillgänglig för bokning');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Preliminär bokning');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Förutbestämd incheckningsdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Endast för webbplatser som erbjuder förutbestämd incheckningsdag. Välj den dag som ankomst måste börja på.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Förutbestämd incheckningsdag');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Bokning (dagar)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Visa infogad tillgänglighetskalender?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Välj Ja för att visa tillgängliga kalendrar');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Tillgänglighet');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Klicka på ett tillgängligt datum för att visa bokningsformuläret.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Obokningsbar inkvartering');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Ny obokningsbar inkvartering');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Radera gäster');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gäst raderad');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Kunde inte radera denna gäst eftersom den har öppna bokningar hos andra verksamheter.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Faktisk kostnad för inkvartering:');

jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Rökning');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Någon');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Kalendrarnas visningsformat');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC', 'Detta tillåter användaren att ändra visningsformatet för datum i Jomres');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Kalendrarnas inmatningsformat');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Detta tillåter användaren att ändra inmatningsformat för datum i Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Bokningar med bestämt datum tillåter korta pauser');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Längd på kort paus');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicerad');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Verifieringskedja');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME', 'Tid');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Användare (användarnamn)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Användning');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Visa information');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtrera på datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Filtrera på användarnamn');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Filtrera på användning');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Väntade incheckningsdatum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Incheckning idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Nuvarande ställföreträdare');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Utcheckningar idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Försenad utcheckning');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Har inte checkat in');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Okänd användare');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Lägg till inkvartering');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Uppdaterad inkvartering');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Raderad inkvartering');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Skapad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Uppdaterad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Raderad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Skapad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Uppdaterad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Raderad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Skapad verksamhet');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Uppdaterad verksamhet');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Raderad verksamhet');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Skapad verksamhetsegenskap.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Uppdaterad verksamhetsegenskap.');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Raderad verksamhetsegenskap.');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Redigerad verksamhetsinställning.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Publicera verksamhet');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Prislista skapad');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Prislista uppdaterad');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Prislista raderad');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Lade till serviceavgift.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Bokad gäst incheckning');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Bokad gäst utcheckning');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Angiven deposition');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Skapad gäst');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Uppdaterad gäst');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST', 'Raderad gäst');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Bokade en inkvartering');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Skapat en extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Uppdaterad extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Raderade en extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'År extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Angiven obokningsbar inkvartering.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Göra inkvartering bokningsbar.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Tillägg');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Beskrivning');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Namn');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Pris');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Tillägg uppdaterad');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Redigera post');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Radera tillägg');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Tillägg administratör');
jr_define('_JOMRES_COM_A_EXTRAS', 'Visa tillägg vid bokning?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Välj Ja för att visa något tillägg som du kanske vill erbjuda gästen');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Frivilliga tillägg.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Gör inkvartering obokningsbar från datum');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Service återupptas från datum');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Obokningsbara inkvarteringar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'När försök att göra inkvarteringar ej bokningsbara uppstod ett fel för en eller flera av dem inte lediga.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Egenskaper som ingår i en obokningsbar inkvartering');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Visa ej bokningsbara inkvarteringar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Inga ej bokningsbara inkvarteringar att visa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Antal stjärnor');
jr_define('_JOMRES_COM_A_SMOKING', 'Visa alternativ för rökning?');
jr_define('_JOMRES_COM_A_SMOKING_DESC', 'Välj Ja för att visa alternativ för rökning.');
jr_define('_JOMRES_COM_A_RESET', 'Återställ');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Bokning avbruten');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Sök här:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION', 'Standard aleternativ för rökning');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Valuta symbol');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'T.ex. &amp;pound&#59;. Observera att du bör använda HTML-entiteter för önskad symbol. För en lista över dessa enheter besök <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Valutakod');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC', 'T.ex. SEK. Detta används i e-postmeddelandet till kunden som bekräftar bokningen.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Läs mer');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Begränsa förbokning?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Sätt detta till Ja om du vill begränsa förbokningar (använd nästa fält för att sätta gränsen när det gäller dagar). Om du sätter detta till Ja och kunden försöker boka mer än dessa dagar i förväg kommer incheckningsdatumet att återställas till dagens datum');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Förhandsbokningar begränsade till antal dagar:');
jr_define('_JOMRES_COM_A_TAX_WARNING', '<font color=red>OBS! Du bör inte sätta båda av följande alternativ till Ja, använd bara en av de två skatteberäkningarna som är tillgängliga för dig. </font>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Skatt');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Skatt för inkvartering');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC', 'Avsedd för den amerikanska marknaden. Dessa är de skattebelopp för inkvarteringar som kommer att belasta gästen. Du kan använda en kombination av fasta och procentuella skattesatser. Observera att dessa skatter endast tillämpas på kostnaden för inkvarteringen.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fast skattebelopp');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Skatteprocent');
jr_define('_JOMRES_COM_A_EUROTAX', 'Skatt');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Skatteprocent');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arkivera alla poster');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', 'Poster arkiverade');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Revidera arkiverade revisionsposter');
jr_define('_JOMRES_FRONT_TARIFFS', 'Våra prislistor');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Namn på prislistan');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Beskrivning av prislistan');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Inkvartering/verksamhetstyp');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Giltig från');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Giltigt till');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Per person och natt');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Per natt');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Inte inklusive helger');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minsta antal dagar');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maximalt antal dagar');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Minsta antal personer');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Maximalt antal personer');
jr_define('_JOMRES_FRONT_PREVIEW', 'Förhandsgranska');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Redigering på?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Nuvarande text');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT', 'Ny text');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Uppdaterade egen text.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Redigera Språk');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING', 'Antal poster som inte sparats:');
jr_define('_JOMRES_FRONT_PTYPE', 'Verksamhetstyp');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Lista över verksamhetstyper');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Redigera verksamhetstyper');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Verksamhetstyp');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Beskrivning av verksamhetstyptyp');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Verksamhetstyp sparad');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Kan inte ta bort verksamhetstyp. En eller flera verksamheter har tilldelats den här verksamhetstyptyper, ta bort tilldelningen innan du försöker att ta bort den');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Verksamhetstyptyp(er) raderade');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Betalningspåminnelse');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Inga extra tjänster att lägga till fakturan');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Deposition');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Hela beloppet');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Belopp som debiteras vid bokningen');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Använd detta alternativ för att avgöra vad som ska debiteras vid bokningen. Välj Deposition om del av beloppet ska betalas vid bokning, eller Hela beloppet om bokingen ska betalas i sin helhet vid bokning.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Kalendermånader att visa');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Hur många månader av kalendern visas vid lediga inkvarteringar?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Undertecknad på uppdrag av');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Portaler');
jr_define('_JOMRES_COM_A_CANCEL', 'Avbryt');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Välj de datum då du vill ta inkvarteringen ur drift. När du har valt rätt datum, klicka på "Verkställ"-knappen för att åter kontrollera tillgängligheten.<br/>
<br/>
Välj den inkvartering som du vill ta ur drift. <br>Om en inkvartering inte är förbockad, kan den inte  göras ej bokningsbar tills alla utestående bokningar har slutförts/annullerats <br/>)');
jr_define('_JOMRES_JR_NOTLOGGEDIN', 'Du har loggats ut pga. inaktivitet, logga in och försök igen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Anledning');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Använd betalningsportal?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Välj Ja om du vill använda betalningsportal. <b>Obs!</b> Detta innebär inte beräkningen av depositionen visade som visas under bokningsprocessen tas bort. För att inaktivera den kan du redigera de mallar som visar inkvarteringarna och lägga de delar som avser depositioner inuti en klass där textfärg och bakgrundsfärg är samma.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Välj din betalningsmetod.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Betalningsportal aktiverad?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Ändrade plugin inställningen');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Sparade plugin inställningen');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Visa denna verksamhets hemsida');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Extern länk');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Sätt en länk till din hemsida.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Visade kreditkort');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Uppdaterad kreditkort');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Redigera kreditkort');
jr_define('_JOMRES_COM_A_EDITICON', 'Redigera ikonstorlek');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Ladda upp verksamhetsbild med hjälp av batchoperation');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Bild finns redan i katalogen');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Bildspel');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Visa länk till bildspel?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Visa bildspel inbäddat?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Bildspelsminiatyrens målbredd');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Bildspel');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br /> Tyvärr, inga bilder tillgängliga för denna verksamhet. Vänligen ladda upp några bilder med batchfunktionen om du vill använda bildspelet.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Visa länk till prislistor?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Tillåta popupfönster?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Om satt till nej så blir de länkar som normalt hade öppnats i ett popupfönster inbäddade istället.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Ladda bildspelsbilder');
jr_define('_JOMRES_A_TABS_MISC', 'Diverse');
jr_define('_JOMRES_A', 'Webbplatskonfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Använd globala verksamhetsegenskaper');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC', 'Välj Ja om du vill tvinga alla verksamheter att endast använda egenskaper för verksamheter som definierats av webbansvarig.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Välj den plugin för sökning som du vill använda.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Tyvärr gav din sökning gav inga resultat. Ändra din sökning och försök igen</b>');
jr_define('_JOMRES_AREYOUSURE', 'Är du säker på att du vill göra detta?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Boka en inkvartering');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Boka nu!');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV', 'Personnummer');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Visa prislistor inbäddat?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adress');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detaljerad information');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Klicka för att visa inkvarteringar och tillgänglighet');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Visa information om prislistor');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Visa adressinformation nedanför denna länk');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Visa detaljerad verksamhetsinformation nedanför denna länk');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Visa inkvarteringer och tillgänglighet nedanför den här länken');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Visa informtion om prislistor nedanför den här länken');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Schablonmässiga prislistor');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Medelvärden');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Välj prislistemodell du vill använda');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Du har två val av för beräkning av prislistor. Den första är ett schablonbelopp där du kan erbjuda ett antal olika prislistor till gästen och kostnaden för vistelsen är densamma för hela tiden. Detta är användbart om du vill erbjuda flera olika prislistor för samma datum, t.ex. en prislista för "bed and breakfast" och en för middag. Välj den genomsnittliga prislistan om du vill justera dina priser beroende på tidpunkten i fråga. Jomres kommer att hitta alla olika prislistor för varje dag i bokningen, addera dem och sedan beräkna det gemonsnittliga priset för perioden');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Visa inmatning av utcheckning?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Sätt denna till Nej om du inte vill visa rutan för inmatning av utcheckning. Använd endast om du vill att utcheckningsdatum i bokningar alltid ska sättas till dagen efter ankomst.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Teckenantal i beskrivning');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Detta begränsar antalet tecken som visas i verksamhetsuppgifterna vid utarbetandet av verksamhetsbeskrivning.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Används date()-formatet?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Välj Ja för att datumformatet ska visas som funktionen date() returnera (<a href="http://www.php.net/manual/en/function.date.php">Se här för mer information</a>). Välj Nej för att använda formatet som funktionen strftime() returnerar (<a href="http://www.php.net/manual/en/function.strftime.php">Se här för mer information</a> t.ex. %e %b %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publicera');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Avpublicera');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Använd globala inkvarterings/verksamhetstyper');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC', 'Välj Ja om du vill tvinga alla verksamheter att endast använda de inkvarterings/verksamhetstyper som definierats av webmaster. Du måste sätta detta till Ja om du tänker tillåta sökning av inkvarterings/verksamhetstyper.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Om du vill tilldela en bild till denna inkvarterings/verksamhetstyp måste du först ladda upp dina bilder till mappen /images/stories/jomres/rmtypes.');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Bakgrundsfärg vid inmatningsfel');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Standardland i bokningsformuläret');
jr_define('_JOMRES_JAVASCRIPT_', 'Poster markerade med en röd stjärna är obligatoriska.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Användare kan registrera sina verksamheter?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Välj Ja om du vill att användare ska kunna registrera sina egna verksamheter utan tillstånd av administratören.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Ange landet och regionen för din verksamhet.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Fyll i din verksamhetsinformation.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Markerade objekt är obligatoroiska.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Skapad verksamhet');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED', 'Tyvärr, du kan inte skapa en verksamhet på det här systemet. Du måste vara inloggad, registrerade användare innan du kan fortsätta.');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Skapad verksamhet:');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'För användare:');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Visa kalender från årets början?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kalendern över bokningsbara inkvarteringar visas från början av innevarande år.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Antal bokningsbara inkvarteringer');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Tillbaka till verksamhetsinformationen');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Inkvarterings/verksamhetstyper');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Gräns för slumpmässig sökning');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Visa länkar till valutakonvertering när prislistor visas?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Omvandla kurs');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Tillåt användare att redigera med hjälp av HTML-redigerare?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Använd detta formulär för att boka. Ändra dina bokningsuppgifter såsom in- och utcheckningsdatum och antal gäster, välj hur många inkvarteringar du behöver från listan över de som är tillgängliga. Klicka på någon av dessa inkvarteringer för att lägga till dem i din bokning. När du är klar kan du lägga till några frivilliga tillval du kan behöva och lämna dina adressuppgifter. När formuläret är tillräckligt ifyllt kommer en skicka-knapp att visas så att du kan bekräfta din bokning.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Använd detta formulär för att boka. Ändra dina bokningsuppgifter såsom in- och utcheckningsdatum och antal gäster. När du är klar kan du lägga till några frivilliga tillval du kan behöva och lämna dina adressuppgifter. När formuläret är tillräckligt ifyllt kommer en skicka-knapp att visas så att du kan bekräfta din bokning.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Bokningsuppgifter ');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Specificera dina bokningsönskemål');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Tillgänglighet');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Välj de inkvarteringer som du behöver');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Titta här för att se om verksamheten är tillgänglig just nu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Tjänster');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Tjänster');
jr_define('_JOMRES_COM_PERDAY', 'Per natt');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Dina uppgifter');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Fyll i dina uppgifter. Observera att alla fält med en röd stjärna är obligatoriska.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Tillgängliga inkvarteringer');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Valda inkvarteringar');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'Tidigaste möjliga incheckningsdatum är:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Per natt:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Boende');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Tillval:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Avgift:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Rabatt:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Totalsumma (inkl. moms):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gäster');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Lägg till ditt val');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Ta bort från ditt val');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Gästtyper');
jr_define('_JOMRES_VARIANCES_TYPE', 'Typ');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Vilken typ av kund, t.ex. barn i åldrarna 5-10 år eller Student');
jr_define('_JOMRES_VARIANCES_NOTES', 'Anteckningar');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Anteckningar som du kanske vill göra om denna Kundtyp');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Max');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Det maximala antalet av denna kundtyp som kan väljas i bokningsformuläret');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Är procentandel');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Den beräknade siffran är en procentandel av det beräknade bastalet för inkvarteringen. Om detta är satt till Nej så adderas eller subtraheras siffran du anger från basvärdet för inkvarteringen.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Lägg till avvikelse?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Den beräknade siffran läggs till eller tas bort från det beräknade bastalet för inkvarteringen. Sätt denna till Nej om du vill att detta skall vara en rabatt från bastalet.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Avvikelse');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Mängden avvikelse');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Ändrad ordningsföljd för kundtyp');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Publicerad kundtyp');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Raderad kundtyp');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Skapad kundtyp');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Uppdaterad kundtyp');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Uppdaterad kundtyp');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Visa länk till listan över inkvarteringer på sidan över verksamhetsinformation?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Visa <b>bara</b> Tillgänglighetskalender?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Sätt detta till Ja för att inaktivera visning av verksamhetens rubrik och information, så att endast Tillgänglighetskalender kan visas i avsnittet för verksamhetsinformationen. Egentligen bara avsedd för verksamheter som består av bara en inkvartering (t.ex. lägenheter, stugor osv).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'In- och utcheckningsintervall');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Det minsta intervallet i bokningsformuläret mellan in- och utcheckningsdatum .');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Inkvarteringslistan på bokningsformuläret visar inkvarteringens nummer');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Inkvarteringslistan på bokningsformuläret visar inkvarteringens namn');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Inkvarteringslistan på bokningsformuläret visar prislistans titel');
jr_define('_JOMRES_ORDER', 'Beställ');
jr_define('_JOMRES_REQUIREDFIELDS', 'Obligatorisk');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dagar före incheckningsdatum');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Det minsta antal dagar som måste förflyta från idag till incheckningsdatum.');
jr_define('_JOMRES_DTV', 'Variationer för datumtyp');
jr_define('_JOMRES_DTV_DOW', 'Veckodag');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Standard gäst typ');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Standardnummer första gästtypen. Om du använder gästtyper, så är detta det standard nummer som den första gästtypen i bokningsformuläret ställs in på.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Endast registrerade användare kan boka på online?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Tyvärr måste du vara en registrerad användare för att boka online. Klicka här för att registrera dig på denna webbplats.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Teckenfärg för länkar till aktuella bokningar');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Begränsningar för Weekend');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Inkvartering är bokad');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Göra inkvartering obokningsbar');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Avrunda deposition upp till närmaste heltal?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Kostnad för deposition?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Spara prislistekostnader veckovis?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Du har möjlighet att spara de prislistekostnaderna antingen dagligen eller varje vecka. För att spara veckovis måste du stätta detta alternativ till Ja.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Per vecka');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Återkommande fasta incheckningsdatum:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'När fasta incheckningsdatum väljs så är detta antalet dagar som kan visas i listrutan för datumen. Observera att listan med datum inte kommer att innehålla några datum om en bokning inte är möjligt på grund av tidigare bokningar och att listan faktiskt kommer vara dubbelt så lång som det valda numret eftersom det kommer att ha ett liknande antal historiska datum (om tillgängligt)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Alternativ om rökning är felkatigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Felaktigt incheckningsdatum');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Felaktigt utcheckningsdatum');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Bokningen är för kort. Det måste finnas minst så här många dagar mellan in- och utcheckningsdatum:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Din intervall är');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Gästtypen är felaktig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Välj gästerantal och -typ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Ni är för många i sällskapet för de befintliga prislistorna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Du har valt mer inkvarteringer än du har gäster, klicka på en inkvarterings namn för att ta bort den från ditt val');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'För många gäster till antalet tillgängliga sängar');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Du måste välja mer inkvarteringer');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Välj en inkvartering');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Förnamn krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Efternamn krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Gatunummer behövs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Adress krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Stad krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Region krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Postnummer krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Land krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Fast nummer krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Mobilnummer krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'E-postadress krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'E-postadress är inte giltig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Kunde inte bekräfta e-domän');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '<b>Vi har lediga inkvarteringar!!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Inga inkvarteringar valda än');
jr_define('_JOMRES_BOOKING_NUMBER', 'Boknings nr.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'OK för att boka, meddelanderutans bakgrund');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Minnesdump av mallens variabler?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Ställ in detta för att möjliggöra en DHTML dump av mallen variabler för varje Frontend mallfil som sidan visas. Användbart om du vill se om ett visst element finns tillgänglig i en given mall.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Siffran är en procentandel');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Välj Ja om en enskild persons beräkning sker med hjälp av siffran är en procentandel. Om Nej kommer den att användas som fast summa.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Begränsning för tillgängliga inkvarteringer/prislistor');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Använd denna inmatning för att begränsa antalet tillgängliga inkvarteringer och prislistor som anges i bokningsformuläret. Skriv 0 om du inte vill begränsa antalet.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Inga lediga inkvarteringar just nu!');
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Globalt redigeringsläge?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Var försiktig med denna funktion. Om du väljer Ja så kommer redigeringsläget att påverka den anpassade texten som du redigerar för ALLA verksamheter i systemet.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Använd global valutakurs?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Välj Ja för att tvinga alla verksamheter att använda samma valutakurs (t.ex. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Global valutasymbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponent inkapslade');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Välj Ja om komponenten är inkapslad så att modul och rubrik områden inte syns');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super verksamhetsadministratör');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Helger bara');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Weekenddagar');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Ange weekenddagar. Prislistor som tillåter weekends eller inte använder den här inställningen när inkvarteringslistan skapas.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Välj land innan du lägger all affärsinformation');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Spara din verksamhet förändras innan du laddar upp en verksamhet bild');
jr_define('_JOMRES_TARIFFSFROM', 'Priser från');
jr_define('_JOMRES_SEARCH_ALL', 'Alla');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Sök efter land');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Sök efter region');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Sök på stad');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Sök på egenskap.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Sök');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Ange ett sökord i rutan och klicka på knappen.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Sökord:');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Ange din avsedda in- och utcheckningsdatum och klicka på knappen för att hitta verksamheter som har boende tillgängligt på dina valda datum.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Lista alla företag efter verksamhetstyp.');
jr_define('_JOMRES_SEARCH_RTYPES', 'Lista alla företag efter inkvarterings/verksamhetstyp');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Standard');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Verksamhetens namn');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Verksamhetens region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Verksamhetens postort');
jr_define('_JOMRES_SORTORDER_STARS', 'Stjärnor');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST', 'Verksamhetslista');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Verksamhetsinformation');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Bokningsformulär');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Uppdatera dina adressuppgifter');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Upprepar kontroll av lediga inkvarteringar<br/>(Inkvarteringsurval kommer att återställas)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Upprepar kontroll av tillgänglighet');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Ändrar dina tillval');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Ändrar ditt val av inkvartering');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Uppdaterar dina adressuppgifter');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Tyvärr så är ett eller flera adressfält felaktiga.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Bild på inkvartering');
jr_define('_JOMRES_CURRENCYFORMAT', 'Valutaformat');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES', 'Visa administratörernas alternativ som bilder');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Sökalternativ');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Tillgängliga loggar');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES', 'Det finns Inga loggposter än.');
jr_define('JOMRES_COM_A_MESSAGE', 'Meddelande');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3','
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avancerad');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Detaljstyra');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Konfigurationsläge för prislistor');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Varning: Att växla mellan olika prislistetyper kan resultera i förlust av data. Se anmärkning nedan om detta.</b>
<br/><br/>
Du har tre alternativ för hur du kan konfigurera prislistor. <br/>
Normalläge:. Du kommer att ha en prislista för varje inkvarteringstyp som gäller för de kommande 10 åren <br/>
Detaljstyra: Du kan ändra priset för varje dag och för varje inkvarterings/verksamhetstyp. <br/>
Avancerat: Den "gamla" Jomres metoden att hantera prislistor. <br/>
<br/>
De olika prislistlägena gör att du kan välja metod för att konfigurera prislistor på det sätt som passar dig bäst.<br/>
Normalläge är den enklaste, men den är också den enklaste att förstå eftersom det görs en korsreferens mellan inkvarteringer och prislistor samt inkvarterings/verksamhetstyper och ger dig möjlighet att konfigurera inkvarteringer och priser på samma sida. <br/>
Detaljstyrning tillåter dig att variera priserna på en daglig basis utan att behöva hantera mängder av prislistor, det sker genom att det görs korsreferenser mellan massor av olika prislistor med varandra. Detta resulterar i att ett antal prislistor skapas för dig som omfattar en period, men du kan inte lägga prislistor över varandra.<br/>
Avancerat läge tillåter dig att skapa en inkvartering och koppla det till en inkvarteringstyp. Du skapar då en prislista och associerar den med en inkvarteringstyp. Med denna metod är det möjligt att lägga ett lager av prislistor på varandra, t.ex. inkvarteringstypen "Dubbelsäng" kan ha ett pris, "bed and breakfast" en annan och "bed and breakfast och kvällsmåltid" ytterligare en. Den avancerade metoden kräver lite mer kontroll på detaljerna eftersom det är möjligt att disassociera en inkvartering eller prislista från en inkvarterings/verksamhetstyp eller felaktigt ange giltiga från och till datum, men det ger dig konfigurationsalternativ som de andra lägena inte erbjuder.<br/>
<br/>
Eftersom Normal och Detaljstyrningslägena behöver en särskild uppsättning inkvarteringar och prislistor för att prislistläget ska fungera kan systemet behöva återställa vissa data för att göra de nuvarande prislistkonfigurationerna kompatibla med det nuvarande prislistredigeringsläget. <br/>
<br/>
Normal -> Avancerat. Ingen förändring. Befintliga prislistor behålls. <br/>
Normal -> Detaljstyra. Alla befintliga prislistor tas bort. <br/>
Avancerat -> Normal. Alla befintliga prislistor tas bort. <br/>
Avancerat -> Detaljstyra. Alla befintliga prislistor tas bort. <br/>
Detaljstyra -> Avancerat. Alla befintliga korshänvisningar mellan prislistorna tas bort, men prislistorna själva kommer att finnas kvar. <br/>
Detaljstyra -> Normal. Alla befintliga korshänvisningar och prislistor tas bort <br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Visa inkvarteringslista på verksamhetens informationssida?');
jr_define('JOMRES_PROPERTYTYPE', 'Verksamhetstyp');
jr_define('JOMRES_COM_A_SRPONLY', 'Enkelrumsegenskaper enbart');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max antal personer per inkvartering');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max antal personer i bokningen');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Lägg till anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Redigera anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Radera anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Visa anteckningar');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Lade till ny anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Redigerade anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Raderad anteckning');
jr_define('_JOMCOMP_MYUSER_MENUTITLE', 'Mina alternativ');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Lista mina bokningar');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Mina bokningar');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Visa bokning');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Visa favoriter');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Du har inte lagt till några favoriter ännu!');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Lägg till i favoriter');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Verksamhetstyp');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Verksamhet på plats');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Dynamiska priser');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktiv');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Med denna plugin kan du aktivera och konfigurera inkvarteringspriser dynamiskt.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'De flesta verksamheter beräknar inkvarteringspriserna baserat på antalet inkvarteringer av en önskad typ som är tillgängliga vid en viss tidpunkt. Det ger dem möjlighet att erbjuda rabatter på en inkvarterings/verksamhetstyp som inte är upptagen under en viss period i syfte att locka till sig verksamheter som annars skulle missats.<br/>Genom att aktivera och konfigurera denna plugin kan du erbjuda dynamisk prissättning baserad på antalet inkvarteringer av en vald typ som finns i verksamheten på en viss dag. <br/>Dagartröskeln definierar det antal dagar som incheckningsdatum måste vara inom innan inkvarteringspriserna justeras genom denna funktion, sen ger procentsatsalternativen dig möjligheten att konfigurera den procentandel av inkvarteringarna som kan vara tillgängliga innan en viss rabatt tillämpas. Notera dock om flera inkvarteringar bokas kommer den nuvarande rabatten att tillämpas på alla inkvarteringer och kommer inte att minska eftersom fler inkvarteringer väljs.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Tröskel (antal dagar mellan dagens datum och incheckningsdatum)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Andelen inkvarteringar som är upptagna är 10% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Andelen inkvarteringar som är upptagna är 25% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Andelen inkvarteringar som är upptagna är 50% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Andelen inkvarteringar som är upptagna är 75% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Rabatt i %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'har rabatterats från');
jr_define('_JOMCOMP_WISEPRICE_TO', 'till');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'Dynamisk prisrabatt tillämpas inte');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google Maps API-nyckel');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Du kan få en Google Maps API nyckel från <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. När du har matat in din kartnyckel här kommer Jomres att visa kartan i verksamhetens informationssida.');
jr_define('JOMRES_COM_A_USE_SSL', 'Använd SSL i bokningsformuläret?');
jr_define('JOMRES_COM_A_USE_SSL_DESC', 'Du måste se till att du har ett giltigt SSL-certifikat för');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Sista minuten');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktiv?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Välj Ja om du vill erbjuda sista minuten-erbjudanden.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Tröskel');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Om en bokning görs och incheckningsdagen bara är N dagar från bokningstillfället så tillämpas rabatten');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Rabatt');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'I procent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'En rabatt har tillämpats på denna bokning!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Kostnaden för vistelsen minskat med');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% rabatt om ditt incheckningsdatum är före');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Boka nu för att göra det mesta av detta erbjudande!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% eller mer rabatt kan vara tillgänglig om incheckningsdatum är före');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Utförlig prislisteinformation');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Välj Ja för att visa mer detaljerad prislisteinformation i popupfönstret för verksamhetsinformation/prislistor');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimera konfigurationsalternativ');
jr_define('_JOMCOMP_AMEND', 'Ändra bokning - Verksamhetsaurval');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Välj Ny verksamhet');
jr_define('_JOMCOMP_AMEND_HEADER', 'Ursprungliga avtalet:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Deposition betald');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Deposition ej betald');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Åsidosätt totalsumma');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Åsidosätt deposition');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5','
jr_define('_JRPORTAL_CANCEL', 'Avbryt');
jr_define('_JRPORTAL_CPANEL', 'JRPortal Kontrollpanel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Standard provision');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Välj standard provision som kommer att tillämpas på en verksamhet förutsatt att en annan provisionssats inte är angiven.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Provisionslista');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Provision');
jr_define('_JRPORTAL_CRATE_TITLE', 'Titel');
jr_define('_JRPORTAL_CRATE_TYPE', 'Typ');
jr_define('_JRPORTAL_CRATE_VALUE', 'Provisions');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Valutakod');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Verksamhetslista');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Verksamhetens namn');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Verksamhetens adress');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Verksamheter med röd bakgrundsfärg har ännu inte en angiven provision.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistik');
jr_define('_JRPORTAL_STATS_STATTYPE', 'Statistik för:');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Verksamheter - antal klick');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Antal visningar av verksamheten');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Antal bokningar');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Bokningsvärde');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Beräknad provision');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provision');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Bokningslista');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Verksamhets ID');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Gäst id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Dotterbolag id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Faktura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Bokningsvärde totalt');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Avtals id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Avtalsnummer');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Valutakod');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Skapad');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Arkiverad');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Arkiveringsdatum');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Lägg till post i nBill');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Fakturaadministratör');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Associerad verksamhet (om tillämpligt)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Värde');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Beskrivning');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', 'Lade framgångsrikt till faktureringspost i');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', 'Visa ordrar');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', 'Misslyckades med att lägg till faktureringspost i');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', 'Fel, du har inte angett ett fakturabelopp');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Du kan ha specifika språkfiler verksamhetstyper genom att ange namnet på en undermapp i beskrivningen, t.ex. "yachtbrokerage" och kopiera en språkfil till den undermappen. Du kan sedan ändra den språkfilen för denna verksamhetstyp så att inkvarteringar blir, till exempel, DVD, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Du kan inte radera denna verksamhet eftersom det är den enda verksamhet som du har tillgång till. Om du vill inaktivera den, använd avpublicerafunktionen i verktygsfältet.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Om detta är en demoinstallation och du tänker uppgradera till Jomres Solo (som bara kan hantera en verksamhet) så ska du skapa en ny verksamhet först, sedan ta bort den här innan du ändrar din licensnyckel till Solos licensnyckel som du kommer att tilldelas på köpet.');
jr_define('_JOMRES_COM_EMAILERRORS', 'Loggmeddelanden för epostfel ?');
jr_define('_JOMRES_COM_EMAILERRORS_DESC', 'Sätt till Ja om du vill kopiera jomres.net automatiskt när ett felloggmeddelande skapas. Detta tillåter oss att vara proaktiva i vårt sätt att hantera eventuella problem, förhoppningsvis lösa eventuella problem innan du är ens medveten om dem. Observera att denna funktion inaktiveras på "localhost".');
jr_define('_JOMRES_COM_ISTHISANMRP', 'Är denna verksamhet ett hotell/bed and breakfast/pensionat/vandrarhem?');
jr_define('_JOMRES_COM_ISTHISANMRP_DESC', 'Konfigurationsalternativ varierar beroende på om du hyr ut flera inkvarteringer i en verksamhet, eller enbart själva verksamheten. Välj MRP om du erbjuder flera inkvarteringer och SRP om du erbjuder hela verksamheten.');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK', 'Använd Jomres e-postadress kontroll?');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC', 'Upprätthåller en striktare kontroll av skickade e-postmeddelanden. Några säkra webbservrar kommer att ge ett ”500 internt fel ” om du försöker skicka e-post till en icke-befintlig e-postadress. Genom att slå på detta så tillåter du oss att använda checkdnsrr funktioner i PHP innan du försöker skicka e-post och förebygga dessa 500 fel.');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Boende Totalt');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Natt/nätter på');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'per inkvartering');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Tjänster Totalt (inkl. moms)');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Prisöversikt');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Läs och godkänn');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'En sammanfattning av din bokning visas nedan. <br />Klicka på Ändra bokning knappen för att ändringa.');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Klicka här om du behöver ändra någon av ovanstående uppgifter');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Ändra bokning');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Ange speciella önskemål i rutan nedan.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Jag bekräftar att ovanstående uppgifter är korrekta och godkänner');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'per person och natt');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE', 'Standard språkfil');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', 'Välj den standardspråkfil som Jomres bör använda om språket inte har fastställts av Joomfish.');
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'av');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Föregående');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Nästa');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Slut');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Resultat');
}

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Skriv meddelandet du vill skicka till ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontakta Hotell');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Verksamhetsförfrågan från');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Tack för din förfrågan, ditt meddelande har skickats till företagets e-postadress, en kopia skickas till din epostadress som verifiering. De kommer att återkommer till dig med ett svar så snart som möjligt.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' beträffande ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Skriv in de tecken du ser i rutan');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Jag kan inte läsa tecknen. Skapa en ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Skicka');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'ny bild');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Förfrågan');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Välj ditt önskade boende från listan nedan genom att klicka på inkvarteringen.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Minsta antalet inkvarteringar som redan valts');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minsta antal inkvarteringar i bokningen har redan valts innan kombination av prislista/inkvarteringstyp kan erbjudas. Gör det möjligt att ha rabatterade prislistor när mer än N inkvarteringar redan har valts.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Maximala antalet inkvarteringer som redan valts');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximala antalet inkvarteringer i bokningen som redan valts innan kombinationen av prislista/inkvarteringstyp inte längre erbjuds. Gör det möjligt att sluta erbjuda denna kombination av prislista/inkvarteringstyp när N inkvarteringar har valts.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Observera att tillägget för enskilda personer som väljs här inte kommer att användas om tillägget för enskilda personer är satta till Ja i den globala konfigurationen. Inställningarna här är ett alternativ till att ha tillägg som schablonbelopp för enskilda personer, inte ett tillägg till schablonbeloppet SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Tillgänglig');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Vissa bokningar');
jr_define('_JOMRES_AVLCAL_HALF', 'Bokad till hälften');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Mestadels bokad');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Fullbokad');
jr_define('_JOMRES_COM_SEF_URL_PREFIX', 'URL prefix');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Detta är den första posten som visas efter domänen - Byt till vad du behöver - Lämna den tom om du inte vill använda den');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Visa alias för verksamhetens uppdrag');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'Alias för dobooking uppgift');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Alias för sökuppdrag');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Lägg till land till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Lägg till region till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Lägg till ort till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Lägg till verksamhetstyp till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Lägg till verksamhet till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Lägg till verksamhetsid till namnet');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'Om verksamhetsnamnet är inställt på Nej kommer inte id att användas. Om satt till Ja kommer urlen att se ut som fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'URL Struktur för sökning- Lägg till land till URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'URL Struktur för sökning - Standardland');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Om alla dina verksamheter är i samma land kommer du inte att ha land som sökalternativ - ange ett standardland här om du vill visa ett land');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION', 'URL Struktur för sökning - Lägg till region till URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION', 'URL Struktur för sökning - Standardregion');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Om alla dina verksamheter är i samma region kommer du inte att ha region som sökalternativ - ange en standardregion här om du vill visa en region');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'URL Struktur för sökning - Lägg till stad till URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN', 'URL Struktur för sökning - Standardstad');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'URL Struktur för sökning - Verksamhetstyp');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE', 'URL Struktur för sökning - Standard verksamhetstyp');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Används i URL om sökning är för alla typer av verksamheter');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Automatisk identifiering av språket i Javascript kalender');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Aktivera automatisk identifiering av språk för Javascript Kalendrar? Om vi inte kan identifiera språket automatiskt kommer språket som anges nedan att användas');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per vecka');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per dag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per bokning');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per person och bokning');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per person och dag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'per person och vecka');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per dagar (minsta antal dagar)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per dagar X valda inkvarteringer');
jr_define('_JOMRES_REGISTRYREBUILD', 'Återskapa register för plugin');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Normalt återskapas registret för Jomres plugin när du visar plugin hanteraren och lägger till eller raderar en plugin, men det är möjligt att du inte kan använda dessa funktioner av någon anledning, därför kan du använda den här funktionen för att återuppbygga registret manuellt. Om du har tillgång till plugin hanteraren och uppgraderar så är det inte troligt att du kommer att behöva använda denna funktion. Du kommer att behöva återskapa pluginregistret när du lägger till en ny plugin och inte använder plugin hanteraren för att lägga till den.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registret framgångsrikt återskapat');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Det uppstod ett fel med ombyggnad registret för plugins. Du bör kontrollera Jomres felloggen för att se om det finns ett register över vad som utlöst felet.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Sök efter prisklass.');
jr_define('JOMRES_WORD_SAVING', 'Sparar ...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Använd mallen Composite Business details?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'I Jomres 3,3 introduceras Composite business details där all utdata från verksamhetsinformationen skickas till en mallfil (composite_business_details.html). Om du inte vill använda denna sätt den till Nej (endast befintliga användare förväntas ange Nej, nya användare vill förmodligen lämna det ställt till Ja)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS', 'Detta är en lista över alla användare i systemet. De som inte är verksamhetsansvariga har en gästikon, verksamhetsansvariga har en receptions/verksamhetsansvarigs/Superverksamhetsansvarigs ikon.<br/>När Jomres först installeras läggs "admin" automatiskt till som verksamhetsansvarig och anses vara en behörig användare.<br/>En icke Super verksamhetsadministratör måste tilldelas minst en verksamhet annars kommer de att se ett felmeddelande när de försöker logga in och använda Jomres.<br/>När en användare är auktoriserad kan du redigera deras profiler, koppla dem till verksamheter eller ge dem rättigheter som super verksamhetsadministratör.<br/>Klicka på det röda krysset bredvid namnet för att ge en användare behörighet. Klicka på den gröna bocken för att göra dem obehöriga.<br/>För att koppla användare till specifika verksamheter, eller ge dem rättigheter som super verksamhetsadministratör, ge dem behörighet och klicka sedan på Redigeraikonen (som endast är synlig när de har getts behörighet). Användare som själv registrerat sin verksamhet, eller verksamheter, kommer automatiskt att kopplas till dessa verksamheter. Super verksamhetsadministratörer har automatiskt behörighet till alla verksamheter, och kommer att se alla konfigurationsalternativ även om den minimerade konfigurationen är satt i konfigurationen.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Här kan du tilldela en verksamhetsadministratör till specifika verksamheter. Kontrollera att de har behörighet till minst en verksamhet, om de inte ska bli super affärschef, annars kommer de att se ett felmeddelande när de loggar in. För att ge en receptionist/verksamhetsadministratör behörighet till endast vissa verksamheter, se till att rullgardinslistan Super verksamhetsadministratör inte är satt till Ja.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Du har inte gjort några bokningar ännu!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Verksamhetstyp');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Redigera verksamhetstyp');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Välj verksamhetstyp');
jr_define('_JOMRES_COM_LOGGING', 'Jomres loggning');
jr_define('_JOMRES_COM_LOGGING_WARNING', 'Med dessa alternativ kan du aktivera/inaktivera loggning i Jomres. Felloggning är alltid aktiverad, men andra loggar som Bokning, Portaler, System och Begär loggar kan sättas på eller stängas av.<b>Var uppmärksam på att möjligheten till loggning tillhandahålls enbart som ett sätt att göra felsökning enklare, men det innebär en stor säkerhetsrisk</b> eftersom det är lätt för utomstående användare att se dina loggar utan att vara behöriga och rekommenderas att låta den vara den avstängd för det mesta. Om du har aktiverat loggning och sedan när du har inaktiverar den bör du också se till att <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> mappen inte innehåller några gamla loggfiler. Observera också att möjliggöra loggning signifikant kommer fördröja ditt system eftersom en hel del information samlas in.');
jr_define('_JOMRES_COM_LOGGING_BOOKING', 'Logg för Bokningsformulär (loggar för bokningssystemet)');
jr_define('_JOMRES_COM_LOGGING_GATEWAY', 'Logg för Portaler (t.ex. PayPal etc.)');
jr_define('_JOMRES_COM_LOGGING_REQUEST', 'Begär Logg (alla inkommande serverförfrågningar)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM', 'Blandad logg');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL', 'Logg för JR Portalen (främst för att spara provision etc.)');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Din förfrågan ...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Inkvarteringslistan för bokningsformuläret visar inkvarteringstypens bild');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Begränsning för verksamhetsista');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Antalet verksamheter som visas på en sida efter sökning');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrerad sökfunktion');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Med de integrerade sökfunktionerna i Jomres kan dina användare söka igenom Jomres verksamheter med en uppsättning funktioner. Om du redan har använt sökfunktionerna i Jomres i Joomla kommer du att känna igen dessa inställningar.<br/>Denna funktion gör att vi kan erbjuda sökhantering inom Jomres för de användare som vill använda Joomlas sökmoduler, eller för andra CMS-användare vars CMS inte har egna Jomres sökmoduler.<br/>Kom bara ihåg att om du väljer att söka efter något via en länk (d.v.s. inte via en rullgardinslista) kommer andra sökalternativ inte att genomföras, bara den del som motsvarar den länk som du klickade på.<br/>Observera att standardlayouten för denna integrerade sökning inte är särskilt snygg. Det beror på att mallfilen som ansvarar för layouten måste innehålla alla möjliga alternativ, av vilka några är inkompatibla. För att förbättra layouten och uppnå det utseende du önskar, måste du redigera <b>srch.html</b> i mappen <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b>');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktivera denna funktion?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Om denna funktion är aktiverad visas sökalternativen vid alla anrop till Jomres som visar verksamhetslistan.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Använd kolumner');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Varje sökalternativ som du har definierat som länktyp (där det är tillämpligt) visas som kolumner (d.v.s. taggen br läggs till i slutet på länken)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', 'Egenskapskolumner');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', 'Antalet egenskapsikoner som kan visas innan taggen br läggs till för att gå till nästa rad.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Sök efter region genom att välja kombirullista');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Visar en kombirullista för sökning för att filtrera länder/regioner/städer. Om du ska använda den här funktionen så är det bäst att inte använda region/stad sökning nedan.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Sök efter verksamhetsnamn');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Visa sök efter verksamhetsnamn.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Visa som rullgardinslista?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Välj Nej för att visa listan som länkar');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Sök efter stad/region');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Visa sök efter region');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Visa som rullgardinslista?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Välj Nej för att visa listan som länkar');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Sök efter verksamhetstyp');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Visa sökning efter verksamhetstyp');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Visa som rullgardinslista?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Välj Nej för att visa listan som länkar');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Sök efter inkvarteringstyp');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Visa sökning efter inkvarteringstyp');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Visa som rullgardinslista?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Välj Nej för att visa listan som länkar');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Sök efter egenskaper');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Visa sök efter egenskaper');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Visa som rullgardinslista?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Välj Nej för att visa listan som inforutebilder och kryssrutor');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Sök efter beskrivning');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Visa sök efter beskrivningen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Sök efter tillgänglighet');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Visa sök efter tillgänglighet');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Sök efter prisklasser');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Visa sök efter prisklasser');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Steg för prisintervall');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres kommer att titta på alla värden i prislistorna och sedan beräkna en serie prisintervall baserat på det steg du anger här.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Standardvärdet innebär att om ett företag inte är valt i Jomres kommer en sökning att genomföras. Om denna sökning inte utlöstes av en sökmodul så kommer resultatet att bli slumpmässigt (avsiktligt). Detta alternativ ger dig möjlighet att begränsa antalet sökträffar i en sådan slumpmässig sökning.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Periodiska uppdragsinställningar och loggar');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudo periodisk uppdragsinformation. Pseudo periodiska funktionaliteten krävs för hanteringen av fakturering och provision.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installerat periodisk plugin. För att köra ett enskilt periodiskt uppdrag använd länkarna nedan. Observera att pseudo periodiska uppdrag inte returnerar något så du kommer inte att se någon information på sidan. Istället, se uppdragsloggen nedan.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Metod');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Om du inte har tillgång till periodiska uppdrag, sätt detta på Plugin, skapa annars ett periodiskt uppdrag och kör den<br /> <i>curl -s'.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1&secret='.base64_encode(get_showtime('secret')).'> /dev/null</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Visa loggar i webbläsaren');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Fungerar bara om metoden är satt på Plugin.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Loggning aktiverat');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Sätt denna till Ja för att aktivera loggning. Resultaten av loggarna visas nedan.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Detaljerad loggning');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Massor av loggningsdata');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Mallredigering');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC', 'Denna funktionalitet gör det möjligt för oss att redigera Jomres webbplatsmallar på servern och spara resultaten i databasen. Det här är en avancerad funktion så vara försiktig med den.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Mallnamn');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Har mallen anpassats?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Anpassade fält');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Här kan du definiera enkla anpassade fält som ska visas i bokningsformuläret.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fältnamn (utan mellanslag)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Standardvärde');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Beskrivning');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Obligatorisk');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Max antal');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Om max antal är mer än 1 så erbjuds gästerna att välja det antal tillägg från en rullgardinslista som de behöver.');
jr_define('_JRPORTAL_INVOICES_ISSUE', 'Utfärda fakturor');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Skattesatser');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Skattekoder');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Betygsätt beskrivning');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Du kan inte ta bort denna skattesats.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Betygsätt');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Fakturor');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Obetald');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Betald');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Avbruten');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Väntar på betalning');
jr_define('_JRPORTAL_INVOICES_USER', 'Användare');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Skapad');
jr_define('_JRPORTAL_INVOICES_DUE', 'Förfallen till betalning');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Teckning');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Obetalt totalt');
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL', 'Återkommande totalt');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Återkommande frekvens');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Återkommande dag i månaden');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Valutakod');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Raddetaljer');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Namn');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Beskrivning');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Begynnelsepris');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Begynnelsekvantitet');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Begynnelserabatt');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Begynnelsesumma');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', 'Periodiskt pris');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', 'Periodiskt antal');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', 'Periodisk rabatt');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', 'Periodisk summa');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Skattekod');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Beskrivning av skatt');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Skattesats');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', 'Paypal inställningar');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', 'Valutakod (t.ex. EUR)');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', 'Använd sandbox?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', 'Din e-postadress hos Paypal');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', 'Om du vill använda Paypal måste du gå till ditt PayPal-konto och avaktivera "Autoreturn". (Profile/Website Payment Preferences) och sätt IPN (profile/Instant Payment Notification Preferences) till URL: <br/>&nbsp;'.JOMRES_SITEPAGE_URL_AJAX.'&task=completebk');
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', 'Denna faktura är förfallen till betalning. Klicka på knappen för att föras till paypal.');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Åsidosätt Jomres portalens standardinställningar?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', 'Om satt till Ja är paypal inställningarna åsidosatta och flera saker sker: den allmänna konfigurationen visar inte längre några portalinställningar och när en bokning görs används de inställningar som används här så att betalningen skickas till den adress som anges här, inte den som tidigare konfigurerats i allmänna konfigurationen.');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Visa mina fakturor');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Rabattkoder');
jr_define('_JRPORTAL_COUPONS_DESC', 'Rabattkoder kan skapas och skickas till gäster som en morot för att boka. Giltigt från och till datum avser mellan vilka datum som en bokning kan göras, inte datum för själva bokningen.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Rabattkod');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Giltig från');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Giltig till');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Rabattvärde');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Rabatt är en procentsats');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Endast på inkvartering');
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC', 'Om satt till Ja så kan rabatten endast utnyttjas på kostnaden för inkvarteringen. Om Nej, så kan rabatten utnyttjas på bokningens totalsumma.');
jr_define('_JRPORTAL_COUPONS_SQLERROR', 'SQL fel när du försöker ta bort/lägga till rabattkod');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Om du har en rabattkod skriv den i rutan och klicka på länken "Spara rabattkod" för att utnyttja rabatten din bokning.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Spara rabattkod');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Rabattkoden utnyttjas i din bokning');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Rabattkod finns ej');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Rabattkodens värde');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Bokning rabatterad. Rabattkod/rabatt värde/rabatt inställningar:');
jr_define('_JOMRES_COM_CACHING', 'Använda Jomres cachelagringsegenskap?');
jr_define('_JOMRES_COM_CACHING_DESC', 'Välj Nej för att inaktivera Jomres cachelagringsegenskap.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Välj språk');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Välj de språkalternativ som ska visas i språkväxlingens rullgardinsmeny.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Visa språkvalets rullgardinsmeny?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Fullbokade och inställda bokningar');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Bäste');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Tack för att du har registrerat dig');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Ditt användarnamn är:');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Ditt lösenord är:');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Logga in för att se dina bokningar');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Rabattkod sparad');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Rabattkod raderad');
jr_define('_JOMRES_COM_GROWL', 'Använd Jomres meddelanden');
jr_define('_JOMRES_COM_GROWL_DESC', 'Flera uppdateringar gjorda av en verksamhetsadministratör ger respons i form av ett JavaScript meddelande när sidan laddas om, det här alternativet aktiverar/inaktiverar den funktionen.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Användarnamn');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Lösenord');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'mobilnummer som ska aviseras');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'Använd formatet "landskod, mobilnummer". T.ex. skulle ett brittiskt mobilnummer anges som "447979123456". Lämna det här fältet tomt om du inte vill att några aviserings-SMS ska skickas till din mobiltelefon.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Självklart kan du inte använda/testa denna portal från localhost, måste du göra det på en 'live'-server.</b> 
<br/>
<br/>
För att kunna använda portalen Clickatell behöver du ett Clickatell konto och minst en registrerad anslutning (API sub-produkt instans) mellan din applikation och vår portal. Varje anslutnings
metod är känd som en sub-produkt. Så här gör du: <br/>
<br/>
<b>Steg 1 - Registrera dig ett Clickatell konto<br/>
Om du inte redan har ett Clickatell konto måste du registrera dig ett enligt nedan. Annars går du vidare till steg 2.<br/>
* Gå till http://www.clickatell.com/products/sms_gateway.php och välj lämplig API subproduct (anslutningsmetod) som du vill använda (Clickatell Central (API) )<br/>
* Klicka på registreringslänken.<br/>
* Fyll i registreringsformuläret. <br/>
Efter att du framgångsrikt har skickat formuläret loggas du automatiskt in på ditt nya konto och kommer till en sida där du kan lägga din valda API-anslutning.<br/>
<b>Steg 2 - lägg en registrerad API-anslutning (sub-produkt)</b><br/>
Om du inte redan är inloggad på ditt konto måste du göra det på http://www.clickatell.com/login.php<br/>
* Välj \"Hantera mina produkter\" från huvudmenyn.<br/>
* Välj API anslutningstyp du vill använda (HTTP API) från rullgardinsmenyn (Lägg till Connection). <br/>
* Fyll i formuläret. Se till att du anger den låsta IP (denna servers IP), välj HTTP POST som återkoppling. Du måste ställa in IP återkoppling till" .get_showtime('live_site').'/index.php?option=com_jomres&task=sms_clickatell_callback och en användar-ID och lösenord. <br/>
Om du registrerar fler än ett API anslutning måste namnet på varje beskrivning du anger vara unik - du kan inte ha flera API:s med samma namn<br/>.
Efter att formuläret har framgångrikt har skickats kommer din autentiseringsinformation att visas inklusive varje anslutnings unika API ID (api_id). Denna autentiseringsinformation krävs vid anslutning till Clickatell portalen för att skicka ett meddelande.<br/>
<br/>
Använd ditt användarnamn, lösenord och api_id för att fylla i fälten ovan. <br/>
<br/>
');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Inkvarteringslistan på bokningsformuläret visar avaktiverad tillgång');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Inkvarteringslistan på bokningsformuläret visar max antal personer');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Observera att visade inkvarteringspriser är uppskattade och det korrekta priset beräknas inte förrän du har lagt till inkvartering/inkvarteringar.');
jr_define('_JOMRES_LASTEDITED_DB', 'Databasmall senast ändrad');
jr_define('_JOMRES_LASTEDITED_DISK', 'Diskmall senast ändrad');
jr_define('_JOMRES_LASTEDITED_WARNINGICON', 'Varning: Databasmall');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Databasmall kan vara föråldrad');
jr_define('_JOMRES_LASTEDITED_WARNING', 'Jomres har upptäckt, om det finns en ikon mot en mall, att mallen som lagrats i databasen <strong>Kan</strong> vara äldre än den som är lagrad på hårddisken, i vilket fall som helst är det möjligt att mallen har uppdaterats i en nyare version av Jomres. Om så är fallet så är det möjligt att din mall inte kan dra nytta av nya funktioner i Jomres eller att befintliga funktioner inte fungerar längre som förväntat, och du bör jämföra filen på hårddisken till dina anpassningar så att du inte går miste om nya funktioner.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonnemangspaket');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Namn');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Beskrivning');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publicerad');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', 'Upprepning');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', 'Test tid');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', 'Testkostnad');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Hela beloppet');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', 'Inkvarteringsbegränsningar'); // Används förnärvarande inte men sparas till en regnig dag
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Verksamhetsbegränsning');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', 'Upprepning: M/Q/B/A Månad (Month)/Kvartalsvis (Quarterly)/Vartannat år (Bianually)/Varje år (Annually)');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', 'Test tid: Heltalsinmatning, 0 (noll) för att inte ange, 1 för en månad, 2 för två månader etc.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abonnera');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', 'Ange/uppdatera din abonnentinformation. Observera att alla fält är obligatoriska.');
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME', 'Förnamn');
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME', 'Efternamn');
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS', 'Adress');
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY', 'Land');
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE', 'Postnummer');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', 'Du behöver ett giltigt abonnemang för att skapa nya verksamheter. Vid denna tidpunkt har du köpt abonnemang för');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', '<i>publicerade</i> verksamhet(er).');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', 'Du kan öka antalet verksamheter som du kan skapa genom att <a href="'.JOMRES_SITEPAGE_URL.'&task=list_subscription_packages">köpa fler abonnemangspaket här.</a>');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', ' Du har utnyttjat ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', ' verksamhetsluckor.');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', 'En lista över dina aktuella verksamheter visas om du klickar <a href="'.JOMRES_SITEPAGE_URL.'&task=listyourbusinesses">här</a>.');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', 'En lista över tillgängliga, aktuella, abonnemangspaket visas om du klickar <a href="'.JOMRES_SITEPAGE_URL.'&task=list_subscription_packages">here</a>. ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', 'Tyvärr kan inte denna verksamhet publiceras eftersom du har fyllt alla tillgängliga verksamhetsluckor.');
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', 'Tack för att du tecknar en prenumeration så att du kan lista din verksamhet på vår server. När din faktura är markerad som betald (det kan ske en fördröjning på grund av Paypal), <a href="'.JOMRES_SITEPAGE_URL.'"&task=registerProp_step1>klicka här för att skapa fler verksamheter.</a>');
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', 'Vi är ledsna att du inte har valt att prenumerera på vår tjänst. Vänligen meddela oss om det finns något sätt som vi kan hjälpa dig');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Hantera din prenumeration');
jr_define('_JOMRES_COM_NEWUSER', 'Skapa ny användare för bokning');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Skapa nytt användarkonto för oregistrerad användares bokning. (endast Joomla)');
jr_define('_JOMRES_CLICKTOREGISTER', 'Klicka här för att registrera din verksamhet');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', 'Aktiva prenumerationer');
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', 'Prenumerations id för portal');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Tack för din bokning - nya användaruppgifter har sänts');
jr_define('_JOMRES_LATLONG_DESC', 'Sätt muspekaren där din verksamhet befinner sig för att ställa in latitud och longitud.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrollpanel');
jr_define('_JOMRES_COM_FAUXHEADERS', 'Mata ut Jomres javascriptrubriker i <body>-taggen?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC', 'Välj Ja om MooTools och Jomres jQuery hamnar i konflikt med varandra i IE. Detta tvingar Jomres att mata ut javascriptanrop i HTML-sidans <body>-tagg istället för dess <head>-tagg, vilket inte är giltig HTML-kod, men det verkar lösa konfliktproblem mellan jQuery och MooTools.');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Visa faktura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Visa fakturor');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Lägg till min verksamhet till denna webbplats');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Varning : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', 'Du kan få ett gratispaket om du vill genom att skapa ett paket och ställa både testbeloppet och det fulla beloppet till 0,00');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Tyvärr, men detta paket-ID inte känns igen.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Tyvärr prenumererar du redan på ett gratis paket, du kan inte prenumerera på samma paket igen.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', 'Status <b>0:</b> Väntar på att betalas <b>1:</b> Skapad <b>2:</b> Inställd <b>3:</b> Perioden är slut');
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', 'Mitt Konto');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Din verksamhetsinformation');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Verksamhetsnamn');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Momsregistrerings nr');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Anläggnings nr');
jr_define('_JOMRES_COM_A_TAX_WARNING2', '<font color=red>OBS! Följande skattesatser är avsedda att användas på den amerikanska marknaden. Om du vill använda ett schablonbelopp som skattesats (t.ex. moms) för ditt boende, välj en skattesats i alternativet ovan.');
jr_define('_JOMRES_INVOICE_NUMBER', 'Fakturanr:');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Välj de datum som du vill omöjliggöra bokning för inkvarteringen. När du har valt rätt datum, klicka på "Verkställ"-knappen för att åter kontrollera tillgängligheten. <br/>
<br/> 
Om verksamheten har en eller flera bokningar för den valda perioden, kommer du inte att kunna omöjliggöra bokning för inkvarteringen tills de andra bokningarna avbokats eller de inkvarteringar som det har omöjliggjorts bokning för har annullerats.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Tyvärr kan du inte göra omöjliggöra bokning för denna verksamhet för dessa datum.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Du kan göra omöjliggöra bokning för denna verksamhet för dessa datum.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Din verksamhet är konfigurerad för debitering per person och natt, men du har inte skapat eller publicerat några gästtyper så skapa och publicera en eller flera gästtyper.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Du har inte konfigurerat några prislistor ännu så du kan inte ta emot några bokningar i din verksamhet.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Redigering på');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Redigering av');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Debitera varierande depositioner?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Med varierande depositioner kan du bestämma om du vill att bokningen betalas i sin helhet om incheckningsdagen är inom n dagar från "idag", välj Ja för att aktivera egenskapen och ange antalet dagar nedan. Är den då satt till 60 och ankomstdagen är inom 60 dagar kommer depositionen att utgöra bokningens totalsumma, annars kommer beloppet att baseras på depositionsalternativet som konfigurerats ovan.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Antalet dagar inom vilken bokningens totalsumma kommer att debiteras som deposition.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN', 'Skicka e-post "Kontakta ägare" till alternativ adress?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Välj Ja om du vill att e-posten "Kontakta ägare" skickas till nedanstående angiven epostadress, välj Nej för att skicka e-post till den e-postadress som anges i verksamhetens konfigurationsområd.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternativ adress för e-post "Kontakta ägare".');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'E-postbekräftelse har skickats. Du kan stänga det här fönstret nu.');
jr_define('_JOMRES_REALESTATE_TITLE', 'Fastighetslista');
jr_define('_JOMRES_REALESTATE_YESNO', 'Är denna verksamhet markerad som till salu?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC', 'Välj Ja om du säljer verksamheten, välj Nej om det är en lista där du erbjuder korttids uthyrning och kommer att använda det här systemet för att ta emot bokningar.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontakta agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Markera fakturan som betald');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Faktura märkt som betalad');
jr_define('_JOMRES_APIKEY_REMAKE', 'Skapa ny API-nyckel');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE', 'Använd Google för inledande översättningar?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC', 'Den här funktionen är ny och experimentell, så använd den på egen risk. Syftet med funktionen är att söka på Googles översättningsverktyg för att automatiskt skapa översättningar för en given verksamhet. Observera att den här funktionen rensar all indata, så om du använder en HTML-editor för att formatera din verksamhetsinformation så förstörs formateringen.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Är detta en installation för en enda verksamhet?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Om detta alternativ är satt till Ja är Jomres webbplatsvy kraftigt förenklad för icke-auktoriserade användare. Standardanrop till Jomres från ett menyalternativ i stället för att få en lista med verksamheter tar gästen till bokningsformuläret för den första verksamheten i systemet. Verksamhetsadministratörer kommer inte heller att se förhandsgranskningsknappen för verksamhetinformationen eller knappen skapa nya verksamheter. Idealiskt om du bara vill visa och ta emot bokningar från en verksamhet<br/>');
jr_define('_JOMRES_HTMP_PURIFIER', 'Använd HTML rensning?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC', 'Välj På så att Jomres kan använda htmlrensningsbiblioteket (http://htmlpurifier.org/). Biblioteket används som en extra säkerhetsnivå när man hanterar in-och utdata och rekommendationen är att det är aktiverat, men det kommer att använda mer minne.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Slutbetalning');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Saldo');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Observera att redigeringsläget används med det globala redigeringsläget aktiverat. Detta är bra om du förstår vad globala redigeringsläget innebär, om inte kan det ge problem. Om du är osäker på om du ska använda Jomres på detta sätt <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> för mer information.');
jr_define('_JOMRES_SUPPORTKEY', 'Supportnyckel');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Din supportlicensnyckel (licensnummer). Du behöver en aktuell licens för att kunna ladda ned plugins till Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Personlig rabatt');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Begränsa verksamhetsregistrering till ett land?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Välj Ja och ange landet i den följande inställningen för att begränsa verksamhetregistrering till ett enda land.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Välj land där verksamheten finns:');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery tema');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Välj ett jQuery tema som ska användas på flikarna som innehåller verksamhetsinformationen .');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Tyvärr är inte verksamheten tillgänglig för närvarande.');
jr_define('_JOMRES_REVIEWS', 'Recensioner');
jr_define('_JOMRES_REVIEWS_TITLE', 'Recensionens titel');
jr_define('_JOMRES_REVIEWS_DATE', 'skickad på ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Det finns inga omdömen om denna verksamhet ännu.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Vill du vara först med att ge ett omdöme om den här verksamheten?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Jag håller med om det här omdömet');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Jag håller inte med om det här omdömet');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Genomsnittligt betyg:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Totalt antal röster:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Lägg till ett nytt omdöme.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Du måste vara inloggad för att skriva ett omdöme.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Berätta vad du tycker om denna verksamhet:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'den här recensenten berättade för oss:');
jr_define('_JOMRES_REVIEWS_PROS', 'Fördelar:');
jr_define('_JOMRES_REVIEWS_CONS', 'Nackdelar:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Uppladdad den:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Du har redan gett ett omdöme om denna verksamhet.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Tyvärr får du inte ge ett omdöme om denna webbplats.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Klicka för att visa omdömen');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' gäster tycker att omdömet stämmer.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' gäster tycker inte att omdömet stämmer.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' gäst tycker att omdömet stämmer.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', ' gäst tycker inte att omdömet stämmer.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Tack för att du delar din åsikt om detta omdöme .');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Tack, men du har redan delat din åsikt om detta omdöme.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Se till att alla fält är ifyllda.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Sammanfatta ditt omdöme genom att skriva en titel');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Skriv ett mer komplett omdöme i rutan Beskrivning');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Skriv in fördelarna med din upplevelse av att vara gäst i denna verksamhet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Skriv in allt som du upplever som negativt med din upplevelse');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Betygsätt hur du upplevde personalens gästfrihet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Betygsätt hur du upplevde verksamhetens lokaler');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Betygsätt hur du upplevde verksamhetens städning');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Betygsätt hur du upplevde boendet. Var det komfortabelt eller slitet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Betygsätt om du tyckte att det var prisvärt eller inte');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Betygsätt hur du upplevde servicen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Sammanfattning av omdömet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Din erfarenhet mer detaljerat');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Tack för att du överlämnar ditt omdöme.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Tack för att du överlämnar ditt omdöme. Den kommer att publiceras inom kort av en av våra hårt arbetande moderatorer.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Använd Jomres omdömesegenskap?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Publicera omdömen automatiskt?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Om satt till Nej måste du manuellt publicera omdömen');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Sätt recensioner till testläge?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalt kan inte verksamhetsadministratörer ge omdöme om verksamheter. Med testläge aktiverat kan de det. Naturligtvis är detta inte optimalt i en driftsmiljö.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Detta är en lista över alla verksamheter. Klicka på verksamheten om du vill se dess omdömen och få möjlighet att publicera eller radera ett omdöme.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Antal opublicerade omdömen');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Totalt antal omdömen');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicera/avpublicera omdöme');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Radera omdöme');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Rapportera omdöme');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Omdömesrapporter');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Ange din rapport');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Är något i detta omdöme stötande eller felaktigt? Rapportera det så ska vi undersöka det.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Skicka');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Rapport skapad av ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Rapporter skickas av användare som kanske inte håller med om ett omdöme. Det enda sättet att ta bort en rapport är att ta bort omdömet.');
jr_define('_JOMRES_REVIEWS_RATING', 'Betyg (1 = usel 10 = utmärkt)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Gästfrihet');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Lokal');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Städning');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Boende');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Valuta för pengarna');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Service');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Omdömet avgivet av:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Dölj omdömet');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Visa bokningsformuläret på sidan för verksamhetsinformation?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Välj Ja för att visa bokningsformuläret sidan för verksamhetsinformation annars så kommer en länk till bokningsformuläret att visas på sidan för verksamhetinformation istället .');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Pris inkl. moms?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Välj Ja om dina priser inkluderar moms. Om inte välj Nej');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Serviceavgift/skatt:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'I veckodagsfälten kan du ange en skatt/avgift för en viss dag i veckan, när du klickar på veckodagsknappen kommer detta belopp att tilldelas alla dagar i veckan.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Datumväljarena och beloppsinmatningen gör att du kan ange ett pris för ett datumintervall. Välj ett start-och slutdatum, mata in ett pris, och klicka på knappen med texten "Fastställ priser".');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start för intervall');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Slut på intervall');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Pris');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Fastställa priser');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define('_JOMRES_CALENDAR_TODAY', 'Idag');
jr_define('_JOMRES_CALENDAR_PREV', 'Tidigare');
jr_define('_JOMRES_CALENDAR_NEXT', 'Nästa');
jr_define('_JOMRES_CALENDAR_RTL', 'falsk');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Inkvartering ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'gäst(er). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Så här ser rumsfördelningen ut som vi har gjort. Om du vill ändra denna fördelning, måste du kontakta hotellet efter att bokningen. Extra avgifter kan tillkomma om du ändrar fördelningen.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Tänk på att din verksamhet inte är publicerad ännu, besökarna kan inte se den, bara du.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Standardsortering');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Ändra standardsorteringen för sökresultaten.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Visa alternativen för sorteringsordningen i en rullgardinslista');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Inkvarteringslistans format');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Med alternativt "Klassisk" presenteras enskilda inkvarteringar i listan på bokningsformuläret, med alternativet "Typ" presenteras inkvarteringstyper i listan, t.ex. dubbelrum i stället');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klassisk');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Typ');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'Kontrollerar tillgången');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Återskapar lista över lediga inkvarteringar');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Beräknar antal');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Formuläruppdatering klar');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Kalenderns startdag, söndag eller måndag');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Ska bara tidigare gäster kunna ge omdöme?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Välj Ja om du vill att endast de som varit gäst i den här verksamheten ska kunna ge ett omdöme.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'per inkvartering');

jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Gäster per inkvartering : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gäster per bokning : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Antal inkvarteringer');

jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Prislistans standardpris');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', 'Detta gäller endast nya prislistor');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW', 'Visa årtal');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', 'Definierar antalet år som ska visas när du redigerar en detaljstyrd prislista');

jr_define('_JRPORTAL_MONTHS_LONG_0', 'Januari');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Februari');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Mars');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Maj');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Juni');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Juli');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Augusti');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'September');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Oktober');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'November');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'December');

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS', 'Process för verksamhetsstyrning');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', 'Det finns olika styrprocesser beroende på hur du vill visa upp din verksamhet/verksamheter.');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', 'Uthyrning');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', 'Välj alternativet "Uthyrning" om du tillhandahåller bokningsbara inkvarteringer i en verksamhet (t.ex. hotell/B & B/hus/lägenhet)');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', 'Fastighet/enkel lista');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', 'Välj alternativet "Fastighet" om du inte tillhandahåller någon bokningsmöjlighet alls, (t.ex. en verksamhet eller ett objekt är till salu)');

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Välj Ja för att minska antalet alternativ för verksamhetsadministratören i avsnittet för den allmänna konfigurationen. Detta är användbart om du inte vill att verksamhetsadministratören ska ha för många alternativ att välja mellan, istället kan du i filen jomres_config.php ange standardalternativ för verksamheten.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Välj ett alternativ för din bokning');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Helskärmsvy');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normal vy');
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER', 'Visa tidszonsväxlare i verksamhetsadmininstratörens verktygsfält?');

jr_define('_JOMRES_PARTNER_DISCOUNT', 'Partnerrabatt');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Sök användare');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Skriv några tecken att för söka efter en användare.<br/> När du väljer en användare läggs den automatiskt till dem som partner och du fortsätter till nästa sida där du kan tilldela verksamheter och rabatter till användaren.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Befintliga partners');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Välj en partner för att fortsätta till sidan för partneradministration.');

jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Sök efter en verksamhet');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Skriv några bokstäver i verksamhetsnamnet och välj en verksamhet.<br/> När du väljer en verksamhet tilldelas den till partnern, men de kan inte utnyttja eventuella rabatter än då du måste ange dessa ange själv.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuella verksamheter');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Klicka på en verksamhet för att redigera partnerns rabatter för denna verksamhet.');

// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE', 'Spärrad? <br/>(klicka för att spärra en administratör, detta kommer att automatiskt avpublicera alla deras verksamheter)');
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', 'Klicka på Spärraikonen (ikonen med mannen och den gröna bocken) för att spärra en administratör. Detta innebär att administratören inte kommer att kunna utföra verksamhetsledande funktioner och alla deras verksamheter kommer att avpubliceras. En Super verksamhetsadministratör kan inte spärras.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Detta konto har spärrats, du kan inte för närvarande administrera dina egenskaper med detta konto.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Administratörskonto spärrat');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Administratörskonto återinfört');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Observera att ditt konto som verksamhetsadministratör har spärrats. Du kommer inte att kunna utföra några verksamhetsadministrativa funktioner förrän kontot har återställts.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Observera att ditt konto som verksamhetsadministratör är aktivt. Du kan fortsätta att utföra alla verksamhetsadministrativa funktioner. Logga in på ditt konto och se till att ändamålsenliga egenskaper har publicerats.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Ta bort favorit');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Arkiv över bokningsuppgifter');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Arkivet över bokningsuppgifter är oformaterad bokningsinformation som hämtas från minnet och som skapas efter ett klick på knappen Bekräfta bokning . För muspekaren över ett datum för att se den oformaterade informationen. Den lagras i tabellen XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Redigera konto');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', 'Sök användare');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of.');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Befintliga administratörer');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', 'Välj en administratör för att gå till sidan hantera administratörer.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sök gästantal');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Visa rullgardinslistan sök via gästantal');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Sök efter stjärnor');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Visa rullgardinslistan sök via Stjärnor');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Antal gäster');
jr_define('_JOMRES_SEARCH_STARS', 'Antal stjärnor');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE', 'Provisionsfakturor');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Antal verksamheter');

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Ladda Jomres jquery bibliotek?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Välj NEJ om du har en mall som använder jquery. Detta kan lösa konflikter med jquery på vissa mallar, men inte alla.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Minibilder skapas automatiskt för uppladdade bilder.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Minibilder maxbredd (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Små minibilder används i verksamhetslistan medan medelstora minibilder används i verksamhetens rubrik.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Små minibilder maxhöjd (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Mellanstora minibilder maxbredd (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Mellanstora minibilder max höjd (px).');

jr_define('_JOMRES_TOUCHTEMPLATES', 'Översättningsetikett');

jr_define('_JRPORTAL_ROI_TAB', 'Avkastning');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Använda provision?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Välj Ja för att visa verksamhetsadministratören provisionsfakturor som ställts ut.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Ska admininstratörsbokningar skapa provisionfakturor?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ska det skapas en fakturapost för provision om en admininstratör gör en bokning?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', 'En ny provisionsfaktura har ställts ut');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', 'En ny provisionsfaktura har ställts ut som du måste granska. Klicka på följande länk för att se fakturan (du kan behöva logga in först).');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Automatiskt avbryta admininstratör där fakturorna är markerade "i avvaktan på betalning"?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Tröskelvärde för automatisk spärr');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Det här tröskelvärdet är de antalet dagar en faktura måste betalas av administratören innan de spärras och deras verksamheter avpubliceras.');

//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Språksammanhang');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Om etiketten "Yacht Brokerage" (Mäklare för lustjakter) är i fokus kam etiketten hämtas från en annan språkfil. Jomres kommer först att söka i aktuell språkfil, sedan söka i en underkatalog som heter "yachtbrokerage". Om språkfilen finns för det aktuella språket så kommer den att användas. Om den inte finns så söker Jomres efter en engelsk språkfil i samma katalog. Om den inte finns kommer Jomres att använda språkfilen för det valda språket i mappen /'.JOMRES_ROOT_DIRECTORY.'/language. Observera att om du skapar en ny verksamhetstyp så skapas en kopia av den aktuella språkfilen görs i en underkatalog under /'.JOMRES_ROOT_DIRECTORY.'/language med samma namn som den nya verksamhetstypens beskrivning.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Avancerad webbplatskonfiguration');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Välj Ja för att använda de avancerade alternativen i webbplatskonfigurationen. Om du är ny i Jomres så är det rekommenderat välja Nej eftersom standardkonfigurationen är tillräcklig för att komma igång, istället bör du lägga Jomres till webbplatsens huvudmeny och logga in i frontend som administratör och börja konfigurera din verksamhet. Observera att många av de avancerade alternativen endast är tillämplig på Jomres Silver-versionen och Jomres Lite-användare kommer inte att kunna utnyttja dessa funktioner.');

jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Ladda Jomres jQuery biblioteket?');

jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Pris (högst först)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Pris (lägst först)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Ska totalpris och beräkningar prissättas enligt per natt/vecka/månad?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per natt');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per vecka');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per månad');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Per person');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'vecka(or) vid ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'månad(er) på ');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Hur ska sökalternativet för antal personer fungera?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Påverkar alla sökmoduler. När du söker efter antal gäster i verksamheter vars prislistor stödjer antal gäst upp till och lika med antalet som är valt, exakt lika med antalet valt eller antalet valda och högre?');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Vänta, din beställning behandlas och du kommer att omdirigeras till Paypals webbsida.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Om du inte automatiskt omdirigeras till Paypal inom 5 sekunder ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Klicka här');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Bokning gäller från');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Bokning giltig till');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Gästnamn');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Rabattkoder kan genereras och skickas till gäster som ett incitament för att göra bokningar.<br/>
Giltig från och till datum avser de datum som en bokning kan göras på, medan möjliga från- och tilldatum för bokning avser de datum som bokningen måste omfatta för att rabatten ska vara giltig. Om en bokning faller utanför denna period gäller normala priser.<br/>
Om du vill att bokningen ska vara tillgänglig för en specifik gäst välj den gästen i rullgardinslistan för att begränsa rabattkoden till den gästen.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Rabattkoden innebär att denna bokning erhållit fäljande rabatt ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' till ');

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Välj Nej för att stänga av laddning av både jQuery JavaScript och CSS-filer.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Ladda Jomres jQuery CSS biblioteket?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Välj Nej för att bara stänga jQuerys CSS-fil.');

//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Totalt inkl. moms');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Avpublicerad verksamhet');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Använda valutaomvandlare');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Detta kommer att ge en valutaomvandlare i form av en rullgardinslista där användare kommer att kunna välja en valuta som de vill omvandla priserna till. Priserna justeras för att visa det omvandlade priset följt av verksamhetens ordinarie pris inom parentes.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Vi har gjort vårt bästa för att få de mest exakta och aktuella växelkurser som går. Vår online valutaomvandlare är en tjänst som tillhandahåller omvandling av priser endast i informationssyfte och som är avsedd att visa en uppskattad omvandling och därför garanterar vi inte riktigheten av växelkurserna. När du använder den här funktionen anses du vara införstådd med att tillförlitligheten på de avgivna växelkurserna är låg och att användningen av valutaomvandlaren sker helt på eget ansvar.');
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE', 'Använd JavaScript cache?');
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC', 'Välj om du vill använda Jomres JavaScripts tillfälliga lagringsfunktion. Fungerar på de flesta servrar, men inte på alla. Om du har problem med javascriptfel som redovisas som "oavslutad stränglitteral" i (exempelvis) Firebug bör du ställa Välja Nej');

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW', 'Lista historiska och aktuella gäster');
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW', 'Aktuella gäster endast');

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'valutaomvandling/valutakoder');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'API-nyckel för IP-detektering');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'För att automatiskt välja standardvalutakod i rullgardinslistan kan Jomres använda en gratis tjänst som kallas IPinfoDB för att spåra besökarens land, men du måste registrera dig för att få en API nyckel hos <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> först.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Felsökning');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP', 'Visa bokningsformuläret i ett modalt popupfönster?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'Om alternativet för att visa bokningsformuläret i egenskapsdetaljerna är satt till Nej, då kan Jomres öppna bokningsformuläret i ett popupfönster som kräver en inmatning. Detta gör att du kan visa mycket mer information i bokningsformuläret utan att behöva ha för många element på skärmen (eftersom de är dolda bakom popupfönstret)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totaltpanelens plats');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'Totaltpanelen i bokningsformuläret behöver olika inställningar beroende på mallen. Till exempel på Jomres Joomla mall fungerar inställningen 712 bra, men på mallen Milkyway är cirka 1500 bättre, särskilt om du inte har det modala popupfönstret aktiverat. Du behöver nog experimentera med olika inställningar för att hitta något som fungerar bra i din valda mall.');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Boende exkl. moms');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Boende inkl. moms');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Moms på inkvartering:');

jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Öppna bokningsformuläret');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Tillbaka till verksamhetsdetaljerna');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Markeras automatiskt?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Saldo (efter att depositionen betalats)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrera inkvarteringer utifrån deras egenskaper.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Senaste bokningen');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'sekund');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minut');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'timme');
jr_define('_JOMRES_DATEPERIOD_DAY', 'dag(ar)');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'veck(or)');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'månad(er)');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'år');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'decennium');
jr_define('_JOMRES_DATEPERIOD_S', ''); /*	Jag lämnade den här etiketten tom för jag antar att det är plural ändelsen för datumperioderna ovan då det engelska språket har samma ändelse, ett "s", medan det är olika ändelser i svenska språket beroende på period. I left this label empty because I guess it's plural ending 	dates for the periods above since the English language has the 	same ending, an "s", while there are different endings in the Swedish language, depending on the period */
jr_define('_JOMRES_DATEPERIOD_AGO', 'sedan');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'från och med nu');

jr_define('_JOMRES_WHOLEDAY_TITLE', 'Gäller bokningar hela dagar?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Som standard omfattar en bokning som ligger från den första januari'.date('Y', strtotime('next year')).' till andra januari '.date('Y', strtotime('next year')).' bara en natt. Väljer du Ja kommer en bokning på dessa dagar att täcka båda dagarna i stället så att kunden faktureras för två dagar.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per dag');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'per person och dag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Incheckning');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Utcheckning');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dag(ar) på');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Utcheckningsdatum felaktigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Bokningen är för kort. Det måste vara minst så här många dagar mellan in- och utcheckning:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Intervall mellan in- och utcheckning');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Det minsta intervallet i bokningsformuläret mellan in- och utcheckningsdatum. Ett intervall med värdet 1 betyder att in- och utcheckning kan ske på samma dag, hursomhelst är detta är fortfarande beroende av det minsta intervall som automatiskt räknas fram vid kontroller av de prislistor som gäller för bokningsperiod .');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Totalpris och uppskattningar bör prissättas per dag/vecka/månad?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per dag');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dagar före incheckningsdagen');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Det minsta antal dagar som måste förflyta från "idag" till incheckningsdatum.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Välj ja om du vill begränsa förbokning (använd nästa fält för att sätta gränsen när det gäller dagar). Om satt till ja och användaren försöker boka mer än n dagar i förväg kommer incheckningsdatum att sättas till dagens datum');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Visa inmatning för utcheckningsdatum?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Välj Nej om du inte vill visa rutan för utcheckningsdatum. Använd endast detta om du vill att utcheckningsdatumet i bokningar alltid ska sättas till dagen efter incheckningsdagen.');

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Välj Ja om bokningar ska göras för en bestämd period. Om det är ställt till Nej se till att "Förutbestämd incheckningsdag" inte är satt till Ja (om du inte specifikt vill tvinga människor att checka in en viss dag i veckan) annars kommer du inte få många länkar i tillgänglighetskalendern.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Förutbestämd incheckningsdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Endast för webbplatser bara bokningar på bestämda perioder. Välj veckodag som incheckningar skall göras på.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Bestämd incheckningsdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Återkommande bestämda incheckningsdagar:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Antal dagar som visas i rullgardinslistan för datum när Bestämd incheckningsdag är vald. Observera att listan med datum inte kommer att innehålla några datum om en bokning inte är möjlig på grund av tidigare bokningar och att listan faktiskt kommer att vara dubbelt så lång som det valda numret eftersom det kommer att ha ett liknande antal historiska datum (om tillgängligt) .');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person och dag');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Välj Ja om du vill ta betalt per person och dag. Väljs Nej kommer kostnaderna att beräknas per inkvartering och dag .');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Med varierande depositioner kan du bestämma om du vill att bokningen betalas i sin helhet om incheckningsdagen är inom n dagar från "idag", välj Ja för att aktivera egenskapen och ange antalet dagar nedan. Är den då satt till 60 och ankomstdagen är inom 60 dagar kommer depositionen att utgöra bokningens totalsumma, annars kommer beloppet att baseras på depositionsalternativet som konfigurerats ovan.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'De flesta verksamheter beräknar inkvarteringspriserna baserat på antalet inkvarteringer av en önskad typ som är tillgängliga vid en viss tidpunkt. Det ger dem möjlighet att erbjuda rabatter på en inkvarterings/verksamhetstyp som inte är upptagen under en viss period i syfte att locka till sig verksamheter som annars skulle missats.<br/>Genom att aktivera och konfigurera denna plugin kan du erbjuda dynamisk prissättning baserad på antalet inkvarteringer av en vald typ som finns i verksamheten på en viss dag. <br/>Dagartröskeln definierar det antal dagar som incheckningsdatum måste vara inom innan inkvarteringspriserna justeras genom denna funktion, sen ger procentsatsalternativen dig möjligheten att konfigurera den procentandel av inkvarteringarna som kan vara tillgängliga innan en viss rabatt tillämpas. Notera dock om flera inkvarteringar bokas kommer den nuvarande rabatten att tillämpas på alla inkvarteringer och kommer inte att minska eftersom fler inkvarteringer väljs.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Antal dagar mellan inchecknings- och dagens datum)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Avvaktar incheckning');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Incheckning idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Checkade in');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Utcheckningar idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Utcheckning försenad');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Har inte checkat ut');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Dagar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Markera en bokning som incheckad.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Markera en bokning som utcheckad.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Markera en bokning som incheckad.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Markera en bokning som utcheckad.');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Kostnad per dag: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Antal dagar: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Ersätt Boendesumman');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Spara ersättning');

jr_define('_JOMRES_BOOKINGFORMWIDTH', 'Bokningsformulärets bredd i px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED', 'Tillåt totalpanelen att glida ner bokningsformuläret?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'Totalpanelen kommer att glida ner i bokningsformuläret som användaren rullar ned. Du kan aktivera/inaktivera den här funktionen med denna knapp. Observera, om användaren besöker via en mobil enhet inaktiveras detta automatiskt.');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Skicka nya användares inloggningsuppgifter via epost?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Om Skapa ny användare är satt till Ja, kan du sätta detta alternativ till Nej för att deras inloggningsuppgifter inte skickas när användaren har skapats. Detta kan vara användbart om du automatiskt lägga till nya användare till en e-postlista, till exempel, och inte vill att användarna faktiskt ska kunna logga in');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Visa moms i bokningsformulärets totalsumma?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Välj Nej för att dölja momsfältet i totalsummeringen i bokningsformuläret.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Gräns för avbeställning');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Inloggade, registrerade, gäster kan avbryta sina bokningar. Här kan du ställa in gränsen, i dagar, där avbokning inte kan ske ett visst antal dagar före incheckningsdatum.');

jr_define('_JOMRES_EDIT_PROFILE', 'Redigera profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Verksamhetstypens relation');
jr_define('_JOMRES_IMAGE', 'Bild');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Verksamhetstyper som kan visa den här funktionen');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Klicka på en bokstav för att visa alla verksamheter som börjar med den bokstaven. När du har en lista med egenskaper kan tilldela provision till dessa egenskaper eller klicka på deras "redigera" ikon för att visa verksamhetens statistik.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Redigera momssats');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Redigera anpassade fält');

jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Licens serverlösenord');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Licens serveranvändarnamn');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Om du har ett användarnamn och lösenord på licensservern, ange dem här. Detta kommer att hjälpa dig att komma åt plugins som du har rätt till. Om du har angett en giltig Support nyckel i fältet ovan, så är det inte nödvändigt att ange användarnamn och lösenord här.');

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Jomres version: ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Senaste Jomres version');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'OBS! Det finns en ny version av Jomres tillgänglig, du bör uppgradera så snabbt som möjligt.');

jr_define('_JOMRES_PRODUCT_INFORMATION', 'Välkommen till Jomres, hoppas vi att du tycker om att använda Joomlas favoritbokningssystem. Om du vill köpa en Jomres Silver eller Jomres Gold licens kan du <a href="http://www.jomres.net/prices" target="_blank">besöka vår webbplats</a> för information om hur du kan uppgradera.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Detta system är idealiskt för alla situationer, från ett enkelt bokningsformulär för en enda verksamhet till en webbplats som har flera användare, på flera språk, med flera verksamheter. Kolla "Hjälp" till vänster och "Komma igång" sidan som guidar dig genom de första stegen.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktiv verksamhet');
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', 'Ändra din aktiva verksamhet');
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', 'Klicka på en bokstav så visas alla egendomar som börjar med den bokstaven, sen klickar du på den egendomens namn för att ändra det till din aktiva egendom.');

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Alternativa SMTP-inställningar');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Välj Ja för att använda de alternativa SMTP-inställningarna. Ett växande antal webbhotell tycks blockera PHP:s epostfunktioner så du kan välja att åsidosätta de epostinställningar som Jomres ärver från din CMS (normalt Joomla) och använda de inställningarna istället.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternativ värd');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Ändra detta till din SMTP-server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternativ port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Ändra detta till din SMTP-port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternativt protokoll');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', 'Beroende på SMTP-serverns inställningar måste du lämna det tomt, ange "SSL" eller "TLS". Fråga din SMTP-leverantör om du inte vet.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Använd autentisering');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Välj Ja om din SMTP-server kräver inloggning. Användarnamnet och lösenordet kommer sedan att användas.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternativt Användarnamn');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternativt lösenord');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');

jr_define('_JOMRES_WARNING_SYSTEM_CACHE', 'Varning: Vi har upptäckt att Joomlas systemplugin Cache är aktiverad. Vi rekommenderar dig att inaktivera denna plugin eftersom den kommer att tillfälligt lagra Ajax:s svar från bokningsformuläret vilket gör att systemet uppför sig oförutsägbart.');

jr_define('_JOMRES_QUICK_INFO', 'Snabbinfo');

jr_define('_JOMRES_MENU_SHOW', 'Visa');
jr_define('_JOMRES_MENU_HIDE', 'Dölj');
jr_define('_JOMRES_MENU_SHOW_TITLE', 'Använd den växlingsbara menylayouten?');
jr_define('_JOMRES_MENU_SHOW_DESC', 'Välj Ja för att använda menyvalet Växla på webbplatsen. När den är satt till Nej visas Jomres huvudmeny som ett dragspel till vänster på sidan, med en knapp för att förstora menyn. Om satt till Ja används den växlingsbara huvudmenyn vilket resulterar i en menyrad längst upp på sidan. Båda menyerna kommer att följa muspekaren. Dragspelsmenyn anses vara en bättre meny. Om ingen av dessa menyer passar dig behöver du ändra mainmenu_wrapper.html och mainmenu_options.html för att dina krav.');

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Standard');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Vem som helst');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registrerad');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Administratör');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super admininstratör');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Ingen');

jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Åtkomstkontroll');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Denna funktion gör att du kan styra vem som kommer att kunna se en plugin i huvudmenyn. Vanligtvis är användaralternativet 00009 visningsbar för antingen/eller oregistrerade webbplatsbesökare, 00010 avser i allmänhet aktiviteter av en typ som Receptionister använder på en daglig basis medan 00011 används för att upprätta och konfigurera en verksamhet, men används mindre ofta.');

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Full åtkomstkontroll');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Välj Ja för att aktivera full åtkomstkontroll, använd sedan Åtkomstkontroll under Systemunderhåll för att konfigurera åtkomstkontroller.');

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', 'Observera dock att dessa inställningar inte kontrollerar de underliggande skript som de ansluter till, så till exempel om du ställer in <i>00009user_option_03_search</i> till "Administratör" kan en användare fortfarande anropa j06000search.class.php genom att ange http://www.domain.com/index.php?option=com_jomres&task=search i webbläsarens adressfält. Detta är avsiktligt eftersom kontrollen för menyåtkomst bara kontrollerar vad som kan ses i huvudmenyn. Om du behöver strängare kontroll sätt alternativet Webbplats Konfiguration -> Full åtkomstkontroll till Ja och kolla alternativet Åtkomstkontroll för Meny');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Full åtkomstkontroll');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', '<strong>Denna egenskap är avsedd för avancerade användare. Om du inte vet vad det används till och inte har en särskild anledning att använda det gå tillbaka till Webbplatsens Konfiguration och sätt alternativet Full åtkomstkontroll till Nej</strong><br/>
	Denna egenskap gör att du kan styra vem som kan komma åt vilka plugins (utom vissa undantag är hopflätade med systemet). Om åtkomstnivå bredvid ett skriptnamn är satt till standard och Full Åtkomst Kontroll satt till Ja får <strong>vems som helst</strong> åtkomst till skript de inte borde kunna komma åt så därför MÅSTE du ställa in åtkomstkontrollen för varje plugin som listas här. Om du inte vet vilken funktion dessa plugins har rekommenderas du starkt att inte använda den här egenskapen alls.<br/>
	Jomres åtkomstnivåer är som en pyramid, Super administratör har högre behörighet än, >, Administratör > Receptionist > Registrerad användare> Oregistrerad användare. Så om en Registrerad användare har tillgång till en plugin så har också Receptionister, Administratörer och Super administratörer det.<br/>
	Observera att du inte kan kontrollera administratörernas plugins. Alla administratörer anses vara en pålitlig användare och ska ha tillgång alla skript (särskilt den här).
	');
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Varning! Du har Full åtkomstkontroll aktiverad, men vi har räknat åtkomstinställningarna och jämfört dem med det antal plugins som skall kontrolleras och de matchar inte, så du kan ha vissa skript som inte är kontrollerade. Detta kan vara ett säkerhetsproblem och du uppmanas att lösa detta på en gång genom att besöka funktionen Åtkomstkontroll och kontrollera att rätt nivåer tillämpas.');

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Användare med administratörs rättigheter till den här egenskapen');
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES', 'Lista alla användares fakturor');

jr_define('_JOMRES_DEBUGGING_SUBJECT', 'Ämne');
jr_define('_JOMRES_DEBUGGING_FULLNAME', 'Ditt fullständiga namn');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Din e-postadress');
jr_define('_JOMRES_DEBUGGING_ISSUE', 'Beskriv ditt problem');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Modell');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametrar');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Tvinga');
jr_define('_JOMRES_METATITLE', 'Meta titel');
jr_define('_JOMRES_METADESCRIPTION', 'Meta beskrivning');
jr_define('_JOMRES_FOUNDPROPERTIES', 'Verksamheter hittade');
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2', 'Lägg till din verksamhet: Steg 1 av 2');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Lägg till din verksamhet: Steg 2 av 2');

jr_define('_JOMRES_MYPROPERTIES', 'Min verksamhet');

jr_define('_JOMRES_CART_TITLE', 'Mina föreslagna bokningar');
jr_define('_JOMRES_CART_INFO', 'OBS! dessa bokningar har inte sparats än. Om du loggar ut eller sessionen upphör kommer de att gå förlorade. Kom ihåg att bekräfta din bokning!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Bekräfta bokning(ar)');
jr_define('_JOMRES_CART_OR', ' eller ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Spara till senare');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Du har inte några bokningar sparade ännu.');
jr_define('_JOMRES_CART_VIEWCART', 'Visa kundvagnen');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Språkfilens underkatalog');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Standard startpunkt, latitud ');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Standard startpunkt, longitud');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Vad ska de förinställda latitud/longitud startpunkterna, på verksamhetens redigeringssida, vara i Google kartor innan markören har flyttats?');

jr_define('_JOMRES_CLEARDATES', 'Jag har inte några datum ännu');

jr_define('_JOMRES_MOBILE_REDIRECT', 'Omdirigera till utan ram på mobila enheter?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres innehåller en funktion som omdirigerar användaren till en vy av Joomla som inte innehåller moduler och rubriker när den upptäcker att webbläsaren tillhör en mobil enhet. Om du har en Joomla mall som redan är optimerad för mobila enheter, kan du stänga av denna funktion genom att sätta detta alternativ till Nej');

jr_define('_JOMRES_SYSTEM_EMAILS', 'Från vilken adress ska epost skickas?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'Lämna det här alternativet tomt för att avaktivera det. Jomres kommer använda hotellets e-postadress (er) när du skickar e-post till gäster, men din eposttjänst kanske inte tillåter att epost skickas från godtyckliga adresser (dvs. de bara kan tillåta epost från en behörig ). Om så är fallet, kan du här ange en adress som kommer att ses som avsändare för all epost.');

jr_define('_JOMRES_CSS_CACHING_TITLE', 'Använda tillfällig lagring för CSS?');
jr_define('_JOMRES_CSS_CACHING_DESC', '');

jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX', 'Sökkalendrar visar kryssrutan "rensa datum"?');

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Listvy');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Foto vy');

jr_define('_JOMRES_COMPARE', 'Jämför');
jr_define('_JOMRES_REMOVE', 'Radera');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Tillbaka till sökresultaten');

jr_define('_JOMRES_ADDTOSHORTLIST', 'Lägg till som favorit');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Ta bort från kortlistan');
jr_define('_JOMRES_VIEWSHORTLIST', 'Visa din lista');

jr_define('_JOMRES_COOKIEPOLICY_TITLE', 'Kakor');
jr_define('_JOMRES_COOKIEPOLICY_DESC', 'EU: s lagstiftning kräver att alla webbplatser som använder kakor begära tillstånd från besökarna för att lagra kakor.
<br/>
Jomres använder värdsystemets kakor för att skapa den egna sessionsfilen där information om användarens sökresultat och andra aktiviteter kan sparas för att göra användarens besök trevligare. Då vi tror att den normala Jomres funktionaliteten troligen omfattas av bestämmelser i den lagstiftning som finns. <br/>
Jomres visar en länk där användarna kan välja att ha en kaka som lagras för att använda på detta sätt. Om de inte väljer att ha kakor kan Jomres endast visa dem några grundläggande sidor (som verksamhetsdetaljer, visa kortlistor, sökresultat osv).
<br/>
Välj Ja för att anta denna policy.');

jr_define('_JOMRES_COOKIEPOLICY_1', 'Viktigt: Policy för kakor');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Vi använder kakor för att hålla vår webbplats uppdaterad och användarvänlig.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Läs mer ...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU: s lagstiftning kräver att alla webbplatser tydligt anger om kakor används och deras syfte.');
jr_define('_JOMRES_COOKIEPOLICY_5', 'Sökningen och denna webbplats bokningsmotor måste kunna komma ihåg dina valda alternativ för att fungera som bäst. För att göra detta måste information lagras i liten fil som kallas en kaka som identifierar din webbläsare och för att vi ska kunna göra det måste du tillåta det. Om du inte accepterar den här policyn för kakar kommer din användning av denna webbplats att starkt begränsas.');
jr_define('_JOMRES_COOKIEPOLICY_6', 'Ja, jag accepterar användning av kakor på detta sätt.');

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Kostnaden för den första natten är depositionen som krävs?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Priserna beräknas per natt. Vill du depositionen utgör natts kostnad? Om så är fallet, kan du ignorera följande alternativ.');

jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Du har inte lagt till några objekt i din lista.');

jr_define('_JOMRES_MOBILE_SETTINGS', 'Enhetsinställningar för mobil');
jr_define('_JOMRES_SIMULATE_MOBILE', 'Simulera mobilläge');
jr_define('_JOMRES_SIMULATE_MOBILE_DESC', 'Välj Ja för att tvinga Jomres att alltid växla till mobil vy. Användbart om du utvecklar mallar som är för mobila enheter. OBS! Du behöver ha en plugin för mobilmall installerad');
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION', 'IP-Simulering');
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', 'Du kan konfigurera inställningen att endast träda i kraft om användarens IP = xxx.xxx.xxx.xxx, om du till exempel utvecklar på localhost, skulle du ställa in IP-nummer till 127.0.0.1.');

jr_define('_JOMRES_SAFEMODE', 'Aktivera felsäkert läge?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Välj Ja för att aktivera felsäkert läge. Detta kommer att inaktivera alla plugins så att Jomres endast använder sina kärnfunktioner.');

jr_define('_JOMRES_PRICE_ON_APPLICATION', 'Kontakta oss för prisuppgift');

jr_define('_JOMRES_USE_JOMRESEDITOR', 'Använd Jomres WYSIWYG redigerare? (rekommenderat)');
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC', 'Om du har aktiverat WYSIWYG redigerare kan du välja att använda HTML-redigeraren som är tillgängliga för din CMS eller den som medföljer Jomres. Den är optimerad för användning av verksamhetsadministratörer och det rekommenderas att du väljer att använda den.');

jr_define('COMMON_NEXT', 'Nästa');
jr_define('COMMON_CANCEL', 'Avbryt');
jr_define('COMMON_SUBMIT', 'Skicka');
jr_define('COMMON_SAVE', 'Spara');
jr_define('COMMON_DELETE', 'Radera');
jr_define('COMMON_RETURN', 'Återgå');
jr_define('COMMON_CLOSE', 'Stäng');
jr_define('COMMON_BACK', 'Tillbaka');

jr_define('COMMON_HOME', 'Hem');

jr_define('COMMON_NEW', 'Ny');

jr_define('COMMON_SEND', 'Skicka');

jr_define('RECAPTCHA_TITLE', 'Robotfiltret reCaptcha');
jr_define('RECAPTCHA_INFO', 'Robotfilter används för att säkerställa att användaren av ett webbformulär är en fysisk person och används för att hindra verksamhetsadmininstratörer från bli utsatta för massutskick av robotar på Internet. Om du vill använda formuläret Kontakta oss i Jomres måste du registrera dig på <a href="http://www.google.com/recaptcha" target="_blank">Google reCaptchas</a> hemsida och ange din domän för att få publika och privata nycklar. När du har fått dessa nycklar, ange dem nedan. reCapcha tjänsten är en kostnadsfri tjänst som tillhandahålls av Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Offentlig nyckel');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Privat nyckel');

jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Tidgräns för låsfil');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'För att förhindra dubbelbokning av rum använder Jomres en låsfil för att förhindra at ett rum från läggas listan över tillgängliga rum i bokningsformuläret om någon annan redan har lagt till rummet till deras lista samma dag. Som standard kommer är tidgränsen 3600 sekunder, eller en timme. Du kan ändra tidgränsen genom att ändra denna siffra.');

jr_define('_JOMRES_BOOTSTRAPSWITCH', 'Aktivera Jomres Bootstrap mallar och funktionalitet?');
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC', 'Välj Ja om du kör en Bootstrap aktiverad mall på webbplatsen.');

jr_define('COMMON_ACTION', 'Åtgärd');
jr_define('COMMON_VIEW', 'Visa');

jr_define('BACKTOTOP', 'Tillbaka till början');

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Svag');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Stark');

jr_define('_JOMRES_INPUTFILTERING', 'Inmatningsfiltrering');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Nivå på inmatningsfiltrering');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', 'Den största delen av informationen som skickas till systemet rensas genom att först ta bort alla HTML-taggar och sedan används PHP:s funktioner för att filtrera variabler för att göra informationen säker innan den förs in i databasen. Du kanske vill tillåta viss information (t.ex. textingångar i verksamhetens detaljsida) för att inkludera HTML. Det finns två nivåer av filtrering du kan använda för att filtrera denna inmatning, antingen Svag eller Stark. Du bör endast använda den svaga inställningen om användarna, som matar in uppgifterna, är betrodda av dig, t.ex. andra systemadministratörer, annars ska du lämna den satt till Stark. När inställningen är satt till Stark (rekommenderas) kan du fortfarande ange vilka taggar som ska tillåtas genom att redigera nästa inställning "Taggar som ska tillåtas av HTML-rensningen".');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Taggar som ska tillåtas av HTML-rensningen');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', 'Du kan redigera taggar som HTML-rensningen tillåter. Standardinställningen är "p, b, strong, a [href], i (dvs. stycke, fetstil, kraftigare fetstil, länkar och kursiv stil). För mer information om tillåtna taggar, läs mer om HTML-rensningen i dokumentationen <a href="http://htmlpurifier.org" target="_blank">htmlpurifier.org</a>. Även om du kan ändra denna inställning bör du lämna den satt till standardvärdet.');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Tillåten inmatning');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', 'Här kan du ange vilken formulärinmatning som tillåter inmatning av HTML kod genom att redigera det här alternativet, varje tillägg till denna lista kommer att analyseras via HTML Purifier istället all HTML kod rensas. Standard är "property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers". Lägg till fler egenskaper genom att lägga deras namn, separerade med ett mellanslag.');

jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Verksamhetsinformation i flikar?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Sätt detta alternativ för att visa detaljer i flikar. Välj Nej för att visa dem utan flikar.');

jr_define('COMMON_PRINT', 'Skriv ut');

jr_define('COMMON_EDIT', 'Redigera');
jr_define('COMMON_COPY', 'Kopiera');

jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 innehåller Twitters Bootstrap ramverk som standard och Jomres har mallar och funktioner som kommer att använda dessa mallar. Som standard, om du kör Jomres på Joomla 3 dessa växlar är inställd på Ja men du kan ställa dem till Nej om så önskas (rekommenderas inte). Om du kör en version av Joomla är lägre än Joomla 3 kan du fortfarande välja att använda Jomres bootstrap mallar och funktioner, men som standard dessa alternativ är inställda på No');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Använd Jomres Bootstrap mallar på webbplatsen?');
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', 'Använd Jomres bootstrap mallar i administratörsdelen?');

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Här är några alternativ som du kanske vill överväga.');

jr_define('_JOMRES_BEEZ_WARNING', 'Observera att din webbplatsmall för närvarande är Beez3. Observera att våra mallar inte är kompatibla med Beez3 och vi rekommenderar att du byter din webbplatsmall till en Bootstrap mall som Protostar.');

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Autodetektera gästens land?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'Systemet kommer att försöka att automatiskt detektera gästens land om de inte har bokat tidigare. Sätt detta alternativ till Ingen och definiera det land du föredrar att visas i bokningsformuläret i nästa val.');

jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Om Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'hjälp');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN', '1 huvud');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Komma igång');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE', 'systemunderhåll');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Åtkomstkontroll');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Utvecklarverktyg');
jr_define('_JOMRES_CUSTOMCODE_ASAMODULE', 'ASAModule');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'språk');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'generera inkomster');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING', 'redovisning');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS', 'bokningar');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'webbplatsens struktur');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT', 'användarhantering');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Mitt konto (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS', 'schemalagda aktiviteter');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portalens funktionalitet');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin hanterare');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'rapporter / statistik');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES', 'skatter');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_TICKETS', 'Biljetter (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'hjälp');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Uppgraderingar');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'betalningsmetoder');

jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Standarprislista');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Detta gäller endast nya priser');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Visa år');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Anger antalet år att visa när du redigerar en prislisttyp');

jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'fakturor');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'kontouppgifter');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Logga in');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logga ut');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'sök');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'instrumentbräda');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reservera');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS', 'administration');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Inställningar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'diverse');
jr_define('_JOMRES_PROPERTYCONFIG_SRPS', 'Verksamheten består av en enda enhet');

jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Redigera land');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Land id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Landskod');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Landets namn');

jr_define('_JOMRES_EDIT_REGION_TITLE', 'Redigera region');
jr_define('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Landskod');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Regionens namn');

jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Lista länder');
jr_define('_JOMRES_COM_LISTREGIONS', 'Lista regioner');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Exportera definitioner');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Denna funktion låter dig exportera översättningar som har byggts upp med hjälp av funktionen Språköversättning. Det skapas ett textfält med alla de uppgifter som krävs för att bygga en ny språkfil, allt du behöver göra kopiera och klistra in detta i en ny språkfil som du kan sätta på en ny Jomres server, eller om du vill bidra med en översättning av Jomres.');

jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Översätta språkversion');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Översätta språkfils strängar');
jr_define('_JOMRES_COM_NOTAMANAGER', 'Fel, du är inte inloggad som en super administratör inom Jomres, du kommer inte att kunna använda den här funktionen tills du ändrat till BÅDE administratör och Super administratör i funktionen Visa Profil. Detta är en säkerhetsfunktion.');

jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Standardlayout för egenskapslistan');

jr_define('_JOMRES_LASTEDITED_WARNING_72', 'Jomres använder mallar för att organisera utdata. Om du är en designer gör detta det lätt att ändra utseendet och känslan av Jomres, du behöver bara redigera mallens kod, inte programkoden. Med denna Redigera Mall funktion kan du skapa dina egna anpassade versioner av Jomres mallar. <br/>
<br/>
När du anpassar en mall har du möjlighet att göra en anpassning specifik för alla egenskapstyper, eller en viss typ av egenskaper. Till exempel använder pluginen NGM Random basic_module_output.html för att skapa layouten. Som ett resultat kan du skapa olika anpassningar av basic_module_output.html för olika enhetstyper.<br/>
<br/>
Om en mall inte har redigerats tidigare, då kan du skapa en ny anpassning av mallen genom att välja alternativet Ny bredvid den. När du klickar på Nytt omdirigeras du till en ny sida där du kan redigera mallen. Den initiala layouten tas från mallen och lagras i webbplatsens mapp /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend, dina anpassningar sparas till databasen när du klickar på Spara och när Jomres använder mallen kommer att använda den kod som lagrats i databasen, inte markeringen som lagrats i mappen /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. Detta säkerställer att anpassningar inte skrivs över när du uppgraderar Jomres installationen.<br/>
<br/>
När en mall har anpassats har du har fler val. Du kan skapa en ny kopia av den ursprungliga mallen (som ovan), du kan kopiera en anpassning till en ny mallanpassning, så till exempel om du redan har anpasste basic_module_output.html för hotell, kan du kopiera den anpassningen till en ny anpassning för en ny verksamhetstyp, som bilar. Du kan redigera en befintlig anpassning, eller så kan du ta bort den. När du tar bort en anpassning, förutsatt att det inte finns en annan anpassning av den mallen, så kommer Jomres att använda mallen i /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. Detta är användbart om du redigerat en mall men inte gillar som de ändringar som du har gjort. Du kan ta bort anpassningar och starta igen med den ursprungliga mallen.<br/>
<br/>
Jomres utvecklas ständigt och grundläggande mallar uppdateras eller ändras ofta. Om du använder funktionen Redigera Mall kommer dessa uppdaterade mallar inte att skriva över dina anpassningar, men detta innebär också att dina anpassningar inte använder nya funktioner i dessa centrala mallar. Eftersom vi inte har någon möjlighet att analysera dina anpassningar kan du inte kan dra nytta av dessa förändringar. Redigera Mallen funktionen kommer att titta på senaste ändrignsdatum för filerna i mappen /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend och om den upptäcker en mallfil är nyare än den mall du har lagrat i databasen får du en varning av Jomres. Det behöver inte nädvändigtvis betyda att du måste uppdatera din mallanpassning, det är upp till dig att avgöra om de tär nödvändigt');

jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Stanna i minst');
jr_define('_JOMRES_NIGHTSFOR', ' nätter för');

jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS', 'Visar verksamhetsbilden som en GIF om bildspel är tillgängliga.');
jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY', 'Visa som GIF endast om verksamheten är presenterad.');

jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Agentuppgifter');
jr_define('_JOMRES_AGENT_LISTINGS', 'Agentens listor');

jr_define('_JOMRES_PROPERTY_LANG', 'Verksamhetsspråk');
jr_define('_JOMRES_PROPERTY_LANG_DESC', 'Standardspråket för den här verksamheten.');

jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatiskt godkänna nya verksamheter');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Om ställt till Ingen måste du manuellt godkänna nya verksamheter. Tills en verksamhet har godkänts kan den inte publiceras av en administratör eller Super administratör.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Godkännanden');
jr_define('_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL', 'Verksamheter väntar på godkännande');
jr_define('_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL', 'Inga verksamheter väntar på godkännande');
jr_define('_JOMRES_APPROVALS_APPROVE', 'Godkänn verksamhet');
jr_define('_JOMRES_APPROVALS_REVIEW', 'Granska verksamhet');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Denna verksamhet inte godkänts ännu. När den har blivit godkänd kommer du att kunna publicera den.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Tyvärr, du kan inte publicera den här verksamheten eftersom den inte har godkänts ännu.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'En ny verksamhet kräver godkännande');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'En verksamhet lagts till i systemet som kräver ditt godkännande. Klicka på länken för att visa en list över verksamheter som väntar på godkännande : ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Din verksamhet har godkänts');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Grattis, din verksamhet har godkänts, vänligen klicka på följande länk för att visa verksamhetens kontrollpanel : ');

jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Regionnamn kan översättas');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'Om du inte har en mycket snabb server du uppmanas att lämna inställd på Nej. På grund av det stora antalet regionnamn tar översättningen upp mycket minne som kan bromsa ner dina sökresultat.');

jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Gäst avbokad.');

jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Tyvärr, e-postadressen används redan. Om detta är din e-postadress, se till att du har loggat in innan du försöker boka.');

jr_define('JOMRES_TAPTOCALL', 'Tap to call');

jr_define('JOMRES_NEWREVIEW_SUBJECT', 'New review for ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'A new review has been left for ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'A review has been reported for ');

jr_define('JOMRES_NON_REGISTERED_USER', 'Non registered user');

jr_define('JOMRES_JQUERY18_2', 'Use Jquery 2.x?');
jr_define('JOMRES_JQUERY18_2_DESC', "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No. ");

jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_SUPERIOR_S', '(S)');

jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Grand total (ex tax) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Grand total (inc tax) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total tax : ');

jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Type the two words: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Enter what you hear: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Download the track in MP3 format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio mode');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refresh');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, that was incorrect. Please try again.');

jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAPS_INFO', 'These layer options are mainly specific to maps in property lists and the property details page. If enabled, only the Weather layer will be shown in the extended maps plugin as including too many options on a larger map makes it extremely slow.');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Use weather layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD', 'Fahrenheit or Celcius? ');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');

jr_define('JOMRES_GOOGLE_MAP_OPTION_PANORAMIO', 'Use Panoramio layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRAFFIC', 'Use traffic layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_BICYCLING', 'Use bicycling layer?');

jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');

jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');

jr_define('_JOMRES_PLEASE_PRINT', 'Please print this email and present it on your arrival.');
jr_define('_JOMRES_OFFICE_USE_ONLY', 'Office use only');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan this code into your phone to get directions to us.');

jr_define('_JOMRES_VAT_FEATURE_ENABLE', 'Use the built in VIES VAT validation feature?');
jr_define('_JOMRES_VAT_FEATURE_ENABLE', 'New in Jomres 7.3 is a feature which allows business owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers.');

jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED', "VAT number wasn't entered.");
jr_define('_JOMRES_TAX_RULES_LIST', 'List tax rules');
jr_define('_JOMRES_TAX_RULE', 'Tax rule');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the "edit my account" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edit tax rule');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business details entered here will be used on commission and subscriptions invoices.');

jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further.");

jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');

//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Centre');
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY', 'Property image upload service');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Add images');

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Room images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Property main image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Clear list');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', 'The maximum file size for uploads is '.jomres_formatBytes($jrConfig[ 'fileSize' ]).'. Only JPG and PNG images are allowed.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'If you upload multiple images as the "Main property image" these will be used in the Property List . Slideshow images will be shown on the property details page.');

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'View your image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Delete image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Upload image');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES', 'Feature and Room type images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Room types icons');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property feature icons');

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Upload all files');

$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

jr_define('END_TOUR', 'Close');

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE', 'Welcome to your Property');
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT', 'Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Properties, then Preview.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE', 'This is your property name');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT', "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously.");

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE', 'This is the timezone dropdown selector.');
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT', "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync.");

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE', 'This is the language selector.');
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT', 'You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B.');

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE', 'This is the Editing Mode selector.');
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT', 'You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste.');

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE', 'This is content area.');
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT', 'In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day.');

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE', 'Active property switch page.');
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT', "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage.");

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE', 'This is where your property names will show.');
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT', "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE', 'This is your property header.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT', 'This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address.');

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE', 'Your photo gallery.');
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT', 'This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE', 'Main buttons.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT', 'Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration.');

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE', 'Inline Calendar.');
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT', 'Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar.');

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE', 'Rooms list tab');
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT', 'Here you can see all rooms, and the availability of each room if you click on the availability button.');

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE', 'Reviews list.');
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT', 'Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property.');

jr_define('TOUR_ID_MAPTAB_TITLE', 'Map tab.');
jr_define('TOUR_ID_MAPTAB_CONTENT', 'Under this tab your guests can see your property in a zoomable map.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE', 'More Information tab.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT', 'Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE', 'Booking Form.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT', 'Your guests can either go to a separate page, or they can use the booking form in this tab.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE', 'Main Property Details.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT', "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE', 'All current and future tariffs');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT', 'This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option.');

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE', 'Local Events.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT', 'If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates.');

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE', 'Local Attractions.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT', 'If there are any attractions near to you, like museums or amusement parks they will be listed here.');

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE', 'Available Auctions.');
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT', 'If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods.');

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE', 'Booking configuration.');
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT', 'On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style.');

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE', 'Your Business details.');
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT', "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you.");

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE', 'External links.');
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT', 'You can add a link to another site here.');

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE', 'Gateways.');
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT', 'Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online.');

jr_define('TOUR_ID_TAB_MISC_TITLE', 'Miscellaneous .');
jr_define('TOUR_ID_TAB_MISC_CONTENT', "This tab is for settings that don't fit into any other tab.");

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE', 'Property details page settings.');
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT', "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page).");

jr_define('TOUR_ID_TAB_REQUIRED_TITLE', 'Required items in the booking form.');
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT', 'This tab allows you to set which items in the booking form that are required or optional.');

jr_define('TOUR_ID_TAB_SRPS_TITLE', 'Villa/Apartment specific settings.');
jr_define('TOUR_ID_TAB_SRPS_CONTENT', "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties.");

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE', 'Single Person Supplements.');
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT', 'Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual.');

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE', 'Tariffs');
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT', 'On this page you can configure how tariffs and deposits are calculated.');

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE', 'Tourist Tax.');
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT', 'If your country or city charges tourist taxes, you can configure them here.');

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE', 'Micromanage settings.');
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT', 'Micromange tariff editing mode specific settings.');

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE', 'Wise Price settings.');
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT', 'This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low.');

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', 'Your properties.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. ");

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE', 'The table.');
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT', "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents.");

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', 'Your properties.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. ");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE', 'Property creation, step 1.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT', "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE', 'Property country.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT', 'Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE', 'The property type.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT', "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast.");

if (isset($MiniComponents->registeredClasses['00001jintour_start'])) {
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'Management process.');
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you want to offer tours/finite resource booking (for example skis) that are booked on the same booking form, then you would still choose this option. If you're offering tours/finite resources only without rooms then choose the Tours option. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate.");
} else {
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'Management process.');
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', 'The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate.');
}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE', 'Property creation step 2.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT', "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE', 'MRP or SRP.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT', "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE', 'Property name & address.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT', 'Please enter the property name and address in the following fields.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE', 'Number of stars.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT', 'If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE', 'Mapping location.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT', "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE', 'Property features.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT', "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE', 'Information about your property.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT', 'You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE', 'Policies and Disclaimers.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT', "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window.");

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE', 'List all bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT', 'On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page.');

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE', 'List new bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT', "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page.");

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE', 'List old bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT', "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information.");

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE', 'List guests.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT', 'The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE', 'Overrides.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT', "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required.");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE', 'Coupons.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT', 'If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE', 'Particulars.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT', 'Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE', 'Room features filter.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT', "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms.");

if (isset($MiniComponents->registeredClasses['00001jintour_start'])) {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'Optional extras.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite resources. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date.");
} else {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'Optional extras.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer.");
}

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE', 'Existing guests.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT', "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time.");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE', 'Guest details.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT', "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab.");

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE', 'Black bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT', "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE', 'Information about your property.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT', 'The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE', 'Normal mode tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT', "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE', 'Normal mode tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT', "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE', 'Rooms and Tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT', "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want.");

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE', 'Rooms and Tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT', 'On this page you can edit your property type and your tariffs.');

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE', 'Guest types.');
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT', "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type.");

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE', 'Coupons.');
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT', "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied.");

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE', 'Optional extras.');
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT', "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option.");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE', 'Media Centre.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT', 'The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room.'.jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', false));

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE', 'Resource picker.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT', "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option.");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE', 'Existing images.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT', 'This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource.');

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE', 'Upload controls.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT', "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once.");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE', 'Selected images.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT', "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. ");

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE', 'Finished!');
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT', "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. ");

jr_define('PRODUCT_TOUR_PAGE_INFORMATION', 'HELP');

//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Today');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Month');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Week');
jr_define('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', 'New booking');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Deposit status');
jr_define('_JOMRES_HSTATUS_GUEST', 'Guest status');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Booking status');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Invoice status');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Invoice type');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Approved');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Current business');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Show bookings for');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Show invoices for');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Paid');
jr_define('_JOMRES_STATUS_NOTPAID', 'Not paid');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancelled');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Published');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Not published');
jr_define('_JOMRES_STATUS_PROVISIONAL', 'Provisional booking');
jr_define('_JOMRES_STATUS_CONFIRMED', 'Confirmed booking');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Guests with active bookings');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Guests with past bookings');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Bookings');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Commissions');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'All my businesses');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'properties');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'guests');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'Guests');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'List guests');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'List invoices');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Businesses');
jr_define('_JOMRES_HQUICK_BOOKING', 'Quick booking');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Date of booking');
jr_define('_JOMRES_HTWO_WEEKS', 'Two weeks');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');

jr_define('_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB', 'Navigation bar settings');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Booking number');

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');

jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fixed periods');
jr_define('_JOMRES_HDEPOSITS', 'Deposits');
jr_define('_JOMRES_HBOOKING_FORM', 'Booking form');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Required fields');

jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');

jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');

jr_define('_JOMRES_HRESOURCE_FEATURES', 'Resource features');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resource type');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Edit guest type');
jr_define('_JOMRES_HEDIT_COUPON', 'Edit coupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edit extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Create multiple resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generate resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'How many resources?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max guests per resource');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Delete all existing resources?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE', 'Booking configuration.');
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT', 'On this tab you can configure the look and feel of the booking form.');

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE', 'Bookings.');
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT', 'This tab allows you to modify how bookings are treated, plus various other settings.');

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE', 'Edit Guest.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT', "Here you can edit a guest's address details. Please note that any changes you make here will only be reflected in this record. If the guest has made bookings on other properties, these changes will not appear on those other properties.");

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE', 'VAT.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT', "If a VAT number is entered here then it will be shown on the guest's invoice.");

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE', 'Discount.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT', 'You can choose to give this guest an automatic discount which will be applied whenever they make a booking.');

jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');

jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Approval');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Reject booking inquiry');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Approve booking inquiry');
jr_define('_JOMRES_STATUS_APPROVED', 'Approved');
jr_define('_JOMRES_STATUS_REJECTED', 'Rejected');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bookings require approval or availability confirmation?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');

jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occured while trying to process this function. It has been reported for you and we will look into it.');

jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Message');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');

jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edit email template');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email subject');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email description');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email sent to property owner when a new booking is made');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email sent to guest when a new booking is made');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Guest Confirmation Letter');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Printable letter or email that can be sent manually by the property owner to confirm a booking');

jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');

jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');

jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");

jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');

jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'night');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY', 'Show price overlay');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'In the property list it is possible to show a cumulative price over the property image, use this setting to switch that display off. The cumulative price is calculated from the dates entered in the ajax search composite plugin.');

jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');

jr_define('_JOMRES_ONLINE_PARTNERS', 'Partners');

jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');

jr_define('DATATABLES_SEMPTYTABLE', 'Tabellen innehåller ingen data');
jr_define('DATATABLES_SINFO', 'Visar _START_ till _END_ av totalt _TOTAL_ rader');
jr_define('DATATABLES_SINFOEMPTY', 'Visar 0 till 0 av totalt 0 rader');
jr_define('DATATABLES_SINFOFILTERED', '(filtrerade från totalt _MAX_ rader)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ' ');
jr_define('DATATABLES_SLENGTHMENU', 'Visa _MENU_ rader');
jr_define('DATATABLES_SLOADINGRECORDS', 'Laddar...');
jr_define('DATATABLES_SPROCESSING', 'Bearbetar...');
jr_define('DATATABLES_SSEARCH', 'Sök:');
jr_define('DATATABLES_SZERORECORDS', 'Hittade inga matchande resultat');
jr_define('DATATABLES_SFIRST', 'Första');
jr_define('DATATABLES_SLAST', 'Sista');
jr_define('DATATABLES_SNEXT', 'Nästa');
jr_define('DATATABLES_SPREVIOUS', 'Föregående');
jr_define('DATATABLES_SSORTASCENDING', ': aktivera för att sortera kolumnen i stigande ordning');
jr_define('DATATABLES_SSORTDESCENDING', ': aktivera för att sortera kolumnen i fallande ordning');

jr_define('DATATABLES_SHOWHIDE', 'Change columns');

jr_define('_BOOKING_ONREQUEST', 'Booking on request');
jr_define('_BOOKING_INSTANT', 'Instant booking');

jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');

jr_define('_BOOKING_CALCQUOTE', 'Request booking');

jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');

jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');

jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');

jr_define('_JOMRES_WORD_CACHING', 'Caching');

jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Use patTemplates Caching?');

jr_define('_JOMRES_HLASTCHANGED', 'Last changed');

jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');

jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');

jr_define('_INVOICE_TRANSACTIONS', 'Transactions');

jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");

jr_define('_ASSIGN_COMMISSION_RATES', 'Assign commission rates');

jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');

jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');

jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');

jr_define('PROPERTY_STATS_SALES', 'Sales');
jr_define('PROPERTY_STATS_SALES_DESC', 'This is when bookings were taken');

jr_define('PROPERTY_STATS_BOOKINGS_DAYS', 'Bookings (days)');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'Booking dates start and number of days.');

jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS', 'Bookings (rooms x days)');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'Number of rooms booked out in a certain month.');

jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');

jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');

jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');

jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');

jr_define('DEFAULT_TERMS_AND_CONDITIONS', 'These Terms and Conditions clarify The Owner\'s obligations to The Renter, The Renter\'s obligations to The Owner, and in the very unlikely event of any disputes, will be used as the basis for any resolution. Please read them carefully before confirming your booking.

Check-In: From [Time] / Check-Out: By [Time] (High Season Weekly Rentals)

For Low Season Weekend and Mid-Week Rentals an earlier Check-In and later Check-out may be possible (usually In from [Time] and out by [Time])

Acceptance of these Terms & Conditions binds a contract between the following two parties:

The Rental Applicant (The Renter) and The Property Owner (The Owner)

 

 1. Party Members

All persons listed on the Rental Agreement or added subsequently by The Renter will be bound by the terms of this agreement. Occupancy of the property is restricted to those names listed on the Agreement or added subsequently by The Renter.   The Rental Applicant is considered to be the Lead Renter and will assume full responsibility for all members of the Rental Group throughout the rental period.   Information or instructions relating to this rental will be communicated to the Rental Applicant only and not to any third-party member of the Rental Group.

2. Payments

A Reservation will be confirmed by The Owner once the application has been approved and initial or full payment has been processed.   For reservations of one week or more, if the reservation is made 45 days or more before the rental commences, an initial rental deposit payment of [X%] of the rental fee will be due at the time of booking. If a reservation is made less than 45 days before the rental commences, or the reservation is less than a full week’s duration, the full rental fee must be paid at the time of booking. In the event of a reservation not being accepted by The Owner, all fees paid will be refunded immediately. Any booking made within 10 days of the start of the rental period must be paid in full by credit card via PayPal, certified check or money order at the time of booking. No reservation may commence without full payment being cleared.

Once a reservation is received and accepted by The Owner, The Renter is liable for payment of the balance of the rental fee 45 days before occupation of the property. Non-payment by the due date will be treated as a cancellation and the deposit will be forfeited.


3. Cancellation Policy & Changing a Booking

Once a reservation has been accepted and confirmed, a cancellation can only be made in accordance with the terms below:

- If the period of rental can be re-booked, a refund for the period re-rented or the part thereof, less a cancellation fee of [Amount]  will be issued.

- If any part of the rental period cannot be re-booked, the Renter will forfeit all monies paid for that period.

 4. Occupancy of the Property

Regardless of the published maximum number of persons a property can accomodate, the number of guests occupying the Property is strictly limited to those named on the Rental Agreement or any subsequent amendment notified in writing to The Owner. The stated and agreed occupancy figure includes all persons irrespective of age, day and overnight guests.

Exceeding the number of stated and agreed persons will result in immediate eviction without refund, or a $100 per guest per night charge at the discretion of The Owner.

 5. Condition of the Property

The Property will have been inspected prior to occupation and therefore The Renter undertakes to:

- Notify The Owner immediately with regard to any damage and/or maintenance issues that require attention.

- Keep the Property and all furniture, fixtures, fittings, chattels and effects in or about the Property in the same state of repair and condition as found at the commencement of the Rental.

 

- Where a cleaning service is provided; The Renter shall follow the departure instructions provided by The Owner.

- Where a cleaning service is not provided; The Renter shall leave the Property in the same state of cleanliness and general order in which it was found. Failure to do so to the satisfaction of The Owner will result in a damage/cleaning charge being levied.

6. Use of Telephone and Internet Services

Where a telephone is provided as part of the rental, The Renter must charge all long-distance telephone calls to either a credit/phone card or call collect, unless advised otherwise. Where internet services are provided, there may be download restrictions and a charge may be levied if these are exceeded. It is The Renter\'s responsibility to check for restrictions on an internet device before commencing any download.

 7. Pets

One dog is permitted [indicate any restrictions]. All evidence of pet occupation must be removed from the Property and grounds at the end of the rental period. Pets are not permitted on any item of furniture, including beds, and evidence of pet hair on furniture and bedding may incur additional cleaning charges.

OR

Pets are strictly prohibited at this property. Any evidence of pet occupation will result in a forfeit of the damage deposit in its entirety.

The Owner accepts no responsibility for any allergic reaction or other conditions arising from occupancy of the property. The designation of “No Pets” does not indicate there have not been pets at the property at some time.

8. Smoking

Smoking is not permitted in or around the immediate vicinity of the property.

9. Property  Access During Winter Months

The Property is  offered for rental during the winter months and has road access and receives a snow clearance service from [indicate municipal or private contractor]. However, Renters are advised that following any major snowfall, snow plough providers are contracted to clear local roads in a predetermined order. Consequently, plowing at a property may be delayed for several hours or, in severe storm conditions, days. In the unlikely event that a Renter is unable to leave a property on the planned departure date, the Renter will not be liable for any additional accommodation charges. Conversely, should a lack of snow clearance prevent a Renter from reaching a property, the Renter will receive a refund of the rental fee for the day(s) the property was inaccessible. However, The Owner will be held responsible for any losses, additional expenses or penalties incurred as a result of being unable to arrive at or leave a property on time due to a lack of snow clearance. Renters are also reminded to ensure that they and their vehicles are suitably prepared and equipped for driving in the wintry conditions likely to be encountered during their visit to the Property.

10.   Equipment and Facilities Provided

Equipment and facilities are provided at the discretion of The Owner and whilst every attempt is made to ensure that such equipment is in working order for the duration of the rental period, should a breakdown or some other situation occur that renders non-essential element unusable, the Owner does not take responsibility for replacing or refunding The Renter for the lack of use of these equipment or facilities. The equipment and facilities referred to include (but are not exclusive to) such items as watercraft, motors, televisions, VCRs/DVDs, hot tubs, saunas and Jacuzzis.

 

The Renter must report any inoperative or defective equipment to The Owner promptly! The Owner will make every reasonable effort to have repairs made as soon as possible; however, there are limited service contractors in [Your Area]. While every attempt will be made to ensure that all the advertised equipment and appliances are in working order at the commencement of a rental period, no reduction of rent; rebate; or refund will be issued for a mechanical failure of air conditioning, dishwasher, washer, dryer, TV or other appliances.

 11.   Refunds

If a breakdown should occur to fundamental elements such as water systems, plumbing and electrical systems, and major appliances such as stove or refrigerator, every effort will be made to repair or replace, or an appropriate refund will be made for the inconvenience caused. This does not apply to system breakdown caused by misuse, such as plumbing blockages caused by inappropriate use of sanitary facilities.

The Owner is not liable, nor will provide a refund, for any stoppage of electrical services caused by extreme weather or other circumstances beyond his control.   Similarly, there will be no refunds for inclement weather, changes in water levels, conditions at neighboring properties, or any nuisance afforded by the natural elements of the location such as flying insects or the animal population.

12. Other Conditions of Booking

The Renter shall abide by these Terms and Conditions of Rental and any other instructions contained in the individual Cottage Guide and any additional information and instructions as shall be supplied in the Property or by The Owner.

 

LIMITATIONS OF LIABILITY: The Renter represents, warrants, acknowledges and agrees with The Owner that he/she will use the Property and its facilities in accordance with The Terms and Conditions above and the Information provided and that he/she does so at his/her own risk and that he/she indemnifies and saves The Owner harmless from any personal injury, sickness or death, loss or damage, however caused, to person or property of The Renter, his/her family, or guests, before during or after the time of occupancy. Further, he/she accepts full responsibility for the use of the Property and any recreational equipment such as boats and motors, etc. and agree to pay for any damage of said equipment, other than for normal wear and tear. The Renter further acknowledges he/she is responsible for ensuring all Boating Regulations are observed, including having required safety equipment in the watercraft, as well as meeting current Operator Competency Requirements.

');

jr_define('_JOMRES_NUMBER_OF_BEDROOMS', 'Bedrooms');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');

jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'You must choose a sub-type before you can create tariffs for this property.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');

jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');

jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');

jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');

jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');

jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');

jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');

jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');

jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');

jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');

jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');

jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_NEITHER', 'Other (Tours/Realestate)');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');

jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');

jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');

jr_define('_JOMRES_MANAGER_HAS_NO_PROPERTIES', 'Error, this user is configured as a manager but has not been assigned to any properties');

jr_define('_JOMRES_CONTANT_US', 'Contact us');

jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');

jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");

jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');

jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebooking.com or anything else.');

jr_define('COMMON_DOWNLOAD', 'Download');

jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Property sub-type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Property sub-type');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Your license does not support plugin downloads.');

jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');

jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");

jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES', 'What management process will this room type be for?');
jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC', 'Is the room type for a hotel type property, or a villa type property?');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button above to create new Room Types.');

jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');

jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");

jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");

jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');

jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");

jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');

jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");

jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');

jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');

jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");

jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");

jr_define('_JOMRES_FAQ', 'Frequently asked questions');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');

jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");

jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");

jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');

jr_define('_JOMRES_SHORTCODES', 'Shortcodes');

jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");

jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');

jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');

jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');

jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');

jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");


jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');

jr_define('EDIT_CMS_USER', 'Edit CMS user');
