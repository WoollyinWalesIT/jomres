<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Snabb reservation');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Visa profiler');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Företagskonfiguration');
jr_define('_JOMRES_COM_MR_BACK', 'Tillbaka');
jr_define('_JOMRES_COM_MR_YES', 'Ja');
jr_define('_JOMRES_COM_MR_NO', 'Nej');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Ny avgift');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nya affärer');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Ny gäst');
jr_define('_JOMRES_COM_MR_SAVE', 'Spara');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Efternamn');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Incheckning');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Utcheckning');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Användarnamn');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Åtkomstnivå');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Ändrad av användare');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Alla bokningar');
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
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Gör ditt val');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Nätter');
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
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max antal personer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Redigera post');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Inkvarteringens egenskaper');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Inkvarteringens egenskapsbeskrivning');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Inkvarteringens egenskap tillagd');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Inkvarteringens egenskap uppdaterad');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Inkvarteringstyp');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Förkortning för inkvartering/verksamhetstyp');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Beskrivning av inkvartering/verksamhetstyp');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Inkvartering/verksamhetstyp tillagd');
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
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Verksamhet uppdaterad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Verksamhetsegenskaper');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Verksamhetsförkortning');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Fullständig beskrivning för verksamhetsegenskaper');
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
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Redigera post');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Kopiera posten');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Avgiften utgår');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Redigera avgiften');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Bokning sparad');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Boka en gäst i');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Avboka en gäst i');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Lista bokningar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Panel');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Gästadministration');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Verksamhetsadministration');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Kontrollera tillgänglighet');
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
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gäst bokas i');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Avboka gäster');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Tillägg');
jr_define('_JOMRES_COM_A_TARIFFS', 'Avgift & valuta');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Filuppladdningar');
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
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Kostnad per natt:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Slutsumma');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Skriv ut faktura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Lägg till service på fakturan');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Beskrivning av tjänsten');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Servicekostnad');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Andra debiterade poster');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Poster tillagda på faktura');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Ladda upp bild');
jr_define('_JOMRES_FILE_UPLOAD', 'Ladda upp fil');
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
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Någon');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Kalendrarnas visningsformat');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Kalendrarnas inmatningsformat');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Detta tillåter användaren att ändra inmatningsformat för datum i Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Bokningar med bestämt datum tillåter korta pauser');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Längd på kort paus');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicerad');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Verifieringskedja');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Användare (användarnamn)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtrera på datum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Väntade incheckningsdatum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Incheckning idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Nuvarande ställföreträdare');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Utcheckningar idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Försenad utcheckning');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Har inte checkat in');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Lägg till inkvartering');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Uppdaterad inkvartering');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Raderad inkvartering');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Skapad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Uppdaterad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Raderad inkvarteringsegenskap');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Skapad verksamhet');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Uppdaterad verksamhet');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Raderad verksamhet');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Redigerad verksamhetsinställning.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Publicera verksamhet');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Prislista skapad');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Prislista uppdaterad');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Lade till serviceavgift.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Bokad gäst incheckning');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Angiven deposition');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Skapad gäst');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Uppdaterad gäst');
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
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Inga ej bokningsbara inkvarteringar att visa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Antal stjärnor');
jr_define('_JOMRES_COM_A_RESET', 'Återställ');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Bokning avbruten');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Sök här:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Valuta symbol');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Valutakod');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Läs mer');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Begränsa förbokning?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Sätt detta till Ja om du vill begränsa förbokningar (använd nästa fält för att sätta gränsen när det gäller dagar). Om du sätter detta till Ja och kunden försöker boka mer än dessa dagar i förväg kommer incheckningsdatumet att återställas till dagens datum');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Förhandsbokningar begränsade till antal dagar:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Skatt');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Skatt för inkvartering');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fast skattebelopp');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Skatteprocent');
jr_define('_JOMRES_COM_A_EUROTAX', 'Skatt');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Skatteprocent');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arkivera alla poster');
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
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Uppdaterade egen text.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Redigera Språk');
jr_define('_JOMRES_FRONT_PTYPE', 'Verksamhetstyp');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Lista över verksamhetstyper');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Redigera verksamhetstyper');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Verksamhetstyp');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Beskrivning av verksamhetstyptyp');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Verksamhetstyp sparad');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Verksamhetstyptyp(er) raderade');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Betalningspåminnelse');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Inga extra tjänster att lägga till fakturan');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Deposition');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Hela beloppet');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Belopp som debiteras vid bokningen');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Använd detta alternativ för att avgöra vad som ska debiteras vid bokningen. Välj Deposition om del av beloppet ska betalas vid bokning, eller Hela beloppet om bokingen ska betalas i sin helhet vid bokning.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Kalendermånader att visa');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Hur många månader av kalendern visas vid lediga inkvarteringar?');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Portaler');
jr_define('_JOMRES_COM_A_CANCEL', 'Avbryt');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Välj de datum då du vill ta inkvarteringen ur drift. När du har valt rätt datum, klicka på "Verkställ"-knappen för att åter kontrollera tillgängligheten.<br/>
<br/>
Välj den inkvartering som du vill ta ur drift. <br>Om en inkvartering inte är förbockad, kan den inte  göras ej bokningsbar tills alla utestående bokningar har slutförts/annullerats <br/>)');
jr_define('_JOMRES_JR_NOTLOGGEDIN', 'Du har loggats ut pga. inaktivitet, logga in och försök igen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Anledning');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Använd betalningsportal?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Välj din betalningsmetod.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Betalningsportal aktiverad?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Ändrade plugin inställningen');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Sparade plugin inställningen');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Visa denna verksamhets hemsida');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Extern länk');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Sätt en länk till din hemsida.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Redigera kreditkort');
jr_define('_JOMRES_COM_A_EDITICON', 'Redigera ikonstorlek');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Bildspel');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Visa länk till bildspel?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Visa bildspel inbäddat?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Bildspel');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Visa länk till prislistor?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Tillåta popupfönster?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Ladda bildspelsbilder');
jr_define('_JOMRES_A_TABS_MISC', 'Diverse');
jr_define('_JOMRES_A', 'Webbplatskonfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Använd globala verksamhetsegenskaper');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Välj den plugin för sökning som du vill använda.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Tyvärr gav din sökning gav inga resultat. Ändra din sökning och försök igen</b>');
jr_define('_JOMRES_AREYOUSURE', 'Är du säker på att du vill göra detta?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Boka en inkvartering');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Boka nu!');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Visa prislistor inbäddat?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adress');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detaljerad information');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Klicka för att visa inkvarteringar och tillgänglighet');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Visa adressinformation nedanför denna länk');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Visa detaljerad verksamhetsinformation nedanför denna länk');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Visa inkvarteringer och tillgänglighet nedanför den här länken');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Schablonmässiga prislistor');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Medelvärden');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Välj prislistemodell du vill använda');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Du har två val av för beräkning av prislistor. Den första är ett schablonbelopp där du kan erbjuda ett antal olika prislistor till gästen och kostnaden för vistelsen är densamma för hela tiden. Detta är användbart om du vill erbjuda flera olika prislistor för samma datum, t.ex. en prislista för "bed and breakfast" och en för middag. Välj den genomsnittliga prislistan om du vill justera dina priser beroende på tidpunkten i fråga. Jomres kommer att hitta alla olika prislistor för varje dag i bokningen, addera dem och sedan beräkna det gemonsnittliga priset för perioden');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Visa inmatning av utcheckning?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Sätt denna till Nej om du inte vill visa rutan för inmatning av utcheckning. Använd endast om du vill att utcheckningsdatum i bokningar alltid ska sättas till dagen efter ankomst.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Teckenantal i beskrivning');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Detta begränsar antalet tecken som visas i verksamhetsuppgifterna vid utarbetandet av verksamhetsbeskrivning.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Används date()-formatet?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publicera');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Avpublicera');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Använd globala inkvarterings/verksamhetstyper');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Om du vill tilldela en bild till denna inkvarterings/verksamhetstyp måste du först ladda upp dina bilder till mappen /images/stories/jomres/rmtypes.');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Bakgrundsfärg vid inmatningsfel');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Standardland i bokningsformuläret');
jr_define('_JOMRES_JAVASCRIPT_', 'Poster markerade med en röd stjärna är obligatoriska.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Användare kan registrera sina verksamheter?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Välj Ja om du vill att användare ska kunna registrera sina egna verksamheter utan tillstånd av administratören.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Markerade objekt är obligatoroiska.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Skapad verksamhet');
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
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Sökalternativ');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Tillgängliga loggar');
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
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max antal personer per inkvartering');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max antal personer i bokningen');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Lägg till anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Redigera anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Radera anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Visa anteckningar');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Lade till ny anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Redigerade anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Raderad anteckning');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Lista mina bokningar');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Mina bokningar');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Visa bokning');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Visa favoriter');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Du har inte lagt till några favoriter ännu!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Verksamhetstyp');
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
jr_define('_JRPORTAL_CPANEL', 'Kontrollpanel');
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
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provision');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Bokningslista');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Verksamhets ID');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Faktura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Bokningsvärde totalt');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Arkiveringsdatum');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Beskrivning');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Du kan ha specifika språkfiler verksamhetstyper genom att ange namnet på en undermapp i beskrivningen, t.ex. "yachtbrokerage" och kopiera en språkfil till den undermappen. Du kan sedan ändra den språkfilen för denna verksamhetstyp så att inkvarteringar blir, till exempel, DVD, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Du kan inte radera denna verksamhet eftersom det är den enda verksamhet som du har tillgång till. Om du vill inaktivera den, använd avpublicerafunktionen i verktygsfältet.');
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
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Du har inte gjort några bokningar ännu!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Redigera verksamhetstyp');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Välj verksamhetstyp');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Din förfrågan ...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Begränsning för verksamhetsista');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Antalet verksamheter som visas på en sida efter sökning');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrerad sökfunktion');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Med de integrerade sökfunktionerna i Jomres kan dina användare söka igenom Jomres verksamheter med en uppsättning funktioner. Om du redan har använt sökfunktionerna i Jomres i Joomla kommer du att känna igen dessa inställningar.<br/>Denna funktion gör att vi kan erbjuda sökhantering inom Jomres för de användare som vill använda Joomlas sökmoduler, eller för andra CMS-användare vars CMS inte har egna Jomres sökmoduler.<br/>Kom bara ihåg att om du väljer att söka efter något via en länk (d.v.s. inte via en rullgardinslista) kommer andra sökalternativ inte att genomföras, bara den del som motsvarar den länk som du klickade på.<br/>Observera att standardlayouten för denna integrerade sökning inte är särskilt snygg. Det beror på att mallfilen som ansvarar för layouten måste innehålla alla möjliga alternativ, av vilka några är inkompatibla.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktivera denna funktion?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Om denna funktion är aktiverad visas sökalternativen vid alla anrop till Jomres som visar verksamhetslistan.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Använd kolumner');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Varje sökalternativ som du har definierat som länktyp (där det är tillämpligt) visas som kolumner (d.v.s. taggen br läggs till i slutet på länken)');
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

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Metod');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Om du inte har tillgång till periodiska uppdrag, sätt detta på Plugin, skapa annars ett periodiskt uppdrag och kör den<br /> <i>curl -s'.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Visa loggar i webbläsaren');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Fungerar bara om metoden är satt på Plugin.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Loggning aktiverat');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Sätt denna till Ja för att aktivera loggning. Resultaten av loggarna visas nedan.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Detaljerad loggning');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Massor av loggningsdata');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Mallredigering');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Anpassade fält');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Här kan du definiera enkla anpassade fält som ska visas i bokningsformuläret.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fältnamn (utan mellanslag)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Standardvärde');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Beskrivning');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Obligatorisk');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Max antal');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Om max antal är mer än 1 så erbjuds gästerna att välja det antal tillägg från en rullgardinslista som de behöver.');
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
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Skattekod');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Beskrivning av skatt');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Skattesats');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Åsidosätt Jomres portalens standardinställningar?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Visa mina fakturor');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Rabattkoder');
jr_define('_JRPORTAL_COUPONS_DESC', 'Rabattkoder kan skapas och skickas till gäster som en morot för att boka. Giltigt från och till datum avser mellan vilka datum som en bokning kan göras, inte datum för själva bokningen.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Rabattkod');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Giltig från');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Giltig till');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Rabattvärde');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Rabatt är en procentsats');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Endast på inkvartering');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Om du har en rabattkod skriv den i rutan och klicka på länken "Spara rabattkod" för att utnyttja rabatten din bokning.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Spara rabattkod');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Rabattkoden utnyttjas i din bokning');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Rabattkod finns ej');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Rabattkodens värde');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Bokning rabatterad. Rabattkod/rabatt värde/rabatt inställningar:');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Välj språk');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Välj de språkalternativ som ska visas i språkväxlingens rullgardinsmeny.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Visa språkvalets rullgardinsmeny?');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Bäste');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Tack för att du har registrerat dig');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Ditt användarnamn är:');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Ditt lösenord är:');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Logga in för att se dina bokningar');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Rabattkod sparad');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Rabattkod raderad');
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
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonnemangspaket');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Namn');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Beskrivning');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publicerad');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Hela beloppet');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Verksamhetsbegränsning');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abonnera');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Hantera din prenumeration');
jr_define('_JOMRES_COM_NEWUSER', 'Skapa ny användare för bokning');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Skapa nytt användarkonto för oregistrerad användares bokning. (endast Joomla)');
jr_define('_JOMRES_CLICKTOREGISTER', 'Klicka här för att registrera din verksamhet');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Tack för din bokning - nya användaruppgifter har sänts');
jr_define('_JOMRES_LATLONG_DESC', 'Sätt muspekaren där din verksamhet befinner sig för att ställa in latitud och longitud.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrollpanel');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Visa faktura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Visa fakturor');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Lägg till min verksamhet till denna webbplats');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Varning : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Tyvärr, men detta paket-ID inte känns igen.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Tyvärr prenumererar du redan på ett gratis paket, du kan inte prenumerera på samma paket igen.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Din verksamhetsinformation');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Verksamhetsnamn');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Momsregistrerings nr');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Anläggnings nr');
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
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'E-postbekräftelse har skickats. Du kan stänga det här fönstret nu.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontakta agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Markera fakturan som betald');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Faktura märkt som betalad');
jr_define('_JOMRES_APIKEY_REMAKE', 'Skapa ny API-nyckel');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Är detta en installation för en enda verksamhet?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Om detta alternativ är satt till Ja är Jomres webbplatsvy kraftigt förenklad för icke-auktoriserade användare. Standardanrop till Jomres från ett menyalternativ i stället för att få en lista med verksamheter tar gästen till bokningsformuläret för den första verksamheten i systemet. Verksamhetsadministratörer kommer inte heller att se förhandsgranskningsknappen för verksamhetinformationen eller knappen skapa nya verksamheter. Idealiskt om du bara vill visa och ta emot bokningar från en verksamhet<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Slutbetalning');
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
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Kalenderns startdag, söndag eller måndag');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Ska bara tidigare gäster kunna ge omdöme?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Välj Ja om du vill att endast de som varit gäst i den här verksamheten ska kunna ge ett omdöme.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'per inkvartering');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Gäster per inkvartering : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gäster per bokning : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Antal inkvarteringer');
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
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Välj Ja för att minska antalet alternativ för verksamhetsadministratören i avsnittet för den allmänna konfigurationen. Detta är användbart om du inte vill att verksamhetsadministratören ska ha för många alternativ att välja mellan, istället kan du i filen jomres_config.php ange standardalternativ för verksamheten.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Välj ett alternativ för din bokning');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Helskärmsvy');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normal vy');
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
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Detta konto har spärrats, du kan inte för närvarande administrera dina egenskaper med detta konto.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Administratörskonto spärrat');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Administratörskonto återinfört');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Observera att ditt konto som verksamhetsadministratör har spärrats. Du kommer inte att kunna utföra några verksamhetsadministrativa funktioner förrän kontot har återställts.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Observera att ditt konto som verksamhetsadministratör är aktivt. Du kan fortsätta att utföra alla verksamhetsadministrativa funktioner. Logga in på ditt konto och se till att ändamålsenliga egenskaper har publicerats.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Ta bort favorit');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Arkiv över bokningsuppgifter');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Arkivet över bokningsuppgifter är oformaterad bokningsinformation som hämtas från minnet och som skapas efter ett klick på knappen Bekräfta bokning . För muspekaren över ett datum för att se den oformaterade informationen. Den lagras i tabellen XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Redigera konto');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Befintliga administratörer');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sök gästantal');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Visa rullgardinslistan sök via gästantal');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Sök efter stjärnor');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Visa rullgardinslistan sök via Stjärnor');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Antal gäster');
jr_define('_JOMRES_SEARCH_STARS', 'Antal stjärnor');
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
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Använda provision?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Välj Ja för att visa verksamhetsadministratören provisionsfakturor som ställts ut.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Ska admininstratörsbokningar skapa provisionfakturor?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ska det skapas en fakturapost för provision om en admininstratör gör en bokning?');
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
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'valutaomvandling/valutakoder');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'API-nyckel för IP-detektering');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'För att automatiskt välja standardvalutakod i rullgardinslistan kan Jomres använda en gratis tjänst som kallas IPinfoDB för att spåra besökarens land, men du måste registrera dig för att få en API nyckel hos <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> först.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Felsökning');
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
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Skicka nya användares inloggningsuppgifter via epost?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Om Skapa ny användare är satt till Ja, kan du sätta detta alternativ till Nej för att deras inloggningsuppgifter inte skickas när användaren har skapats. Detta kan vara användbart om du automatiskt lägga till nya användare till en e-postlista, till exempel, och inte vill att användarna faktiskt ska kunna logga in');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Visa moms i bokningsformulärets totalsumma?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Välj Nej för att dölja momsfältet i totalsummeringen i bokningsformuläret.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Gräns för avbeställning');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Inloggade, registrerade, gäster kan avbryta sina bokningar. Här kan du ställa in gränsen, i dagar, där avbokning inte kan ske ett visst antal dagar före incheckningsdatum.');
jr_define('_JOMRES_EDIT_PROFILE', 'Redigera profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Verksamhetstypens relation');
jr_define('_JOMRES_IMAGE', 'Bild');
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
jr_define('_JOMRES_QUICK_INFO', 'Snabbinfo');
jr_define('_JOMRES_MENU_SHOW', 'Visa');
jr_define('_JOMRES_MENU_HIDE', 'Dölj');
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
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Din e-postadress');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Modell');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametrar');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Tvinga');
jr_define('_JOMRES_METATITLE', 'Meta titel');
jr_define('_JOMRES_METADESCRIPTION', 'Meta beskrivning');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Lägg till din verksamhet: Steg 2 av 2');
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
jr_define('_JOMRES_SYSTEM_EMAILS', 'Från vilken adress ska epost skickas?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'Lämna det här alternativet tomt för att avaktivera det. Jomres kommer använda hotellets e-postadress (er) när du skickar e-post till gäster, men din eposttjänst kanske inte tillåter att epost skickas från godtyckliga adresser (dvs. de bara kan tillåta epost från en behörig ). Om så är fallet, kan du här ange en adress som kommer att ses som avsändare för all epost.');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Listvy');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Foto vy');
jr_define('_JOMRES_COMPARE', 'Jämför');
jr_define('_JOMRES_REMOVE', 'Radera');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Tillbaka till sökresultaten');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Lägg till som favorit');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Ta bort från kortlistan');
jr_define('_JOMRES_VIEWSHORTLIST', 'Visa din lista');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Viktigt: Policy för kakor');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Vi använder kakor för att hålla vår webbplats uppdaterad och användarvänlig.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Läs mer ...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU: s lagstiftning kräver att alla webbplatser tydligt anger om kakor används och deras syfte.');
jr_define('_JOMRES_COOKIEPOLICY_5', 'Sökningen och denna webbplats bokningsmotor måste kunna komma ihåg dina valda alternativ för att fungera som bäst. För att göra detta måste information lagras i liten fil som kallas en kaka som identifierar din webbläsare och för att vi ska kunna göra det måste du tillåta det. Om du inte accepterar den här policyn för kakar kommer din användning av denna webbplats att starkt begränsas.');
jr_define('_JOMRES_COOKIEPOLICY_6', 'Ja, jag accepterar användning av kakor på detta sätt.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Kostnaden för den första natten är depositionen som krävs?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Priserna beräknas per natt. Vill du depositionen utgör natts kostnad? Om så är fallet, kan du ignorera följande alternativ.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Du har inte lagt till några objekt i din lista.');
jr_define('_JOMRES_SAFEMODE', 'Aktivera felsäkert läge?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Välj Ja för att aktivera felsäkert läge. Detta kommer att inaktivera alla plugins så att Jomres endast använder sina kärnfunktioner.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'Kontakta oss för prisuppgift');
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
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Här är några alternativ som du kanske vill överväga.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Autodetektera gästens land?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'Systemet kommer att försöka att automatiskt detektera gästens land om de inte har bokat tidigare. Sätt detta alternativ till Ingen och definiera det land du föredrar att visas i bokningsformuläret i nästa val.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Om Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'hjälp');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Komma igång');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Åtkomstkontroll');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Utvecklarverktyg');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'språk');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'generera inkomster');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'webbplatsens struktur');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Mitt konto (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portalens funktionalitet');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin hanterare');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'rapporter / statistik');
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
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Inställningar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'diverse');
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
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Stanna i minst');
jr_define('_JOMRES_NIGHTSFOR', ' nätter för');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Agentuppgifter');
jr_define('_JOMRES_AGENT_LISTINGS', 'Agentens listor');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatiskt godkänna nya verksamheter');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Om ställt till Ingen måste du manuellt godkänna nya verksamheter. Tills en verksamhet har godkänts kan den inte publiceras av en administratör eller Super administratör.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Godkännanden');
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
jr_define('JOMRES_TAPTOCALL', 'Knacka för att ringa');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Ny recension för ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'En ny recension har lämnats för ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Ny rapport');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'En recension har rapporterats för ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Grundsumma (exkl. skatt) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Totalsumma (inkl. moms): ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total skatt: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Skriv de två orden: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Ange vad du hör: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Spela om ljudspåret ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Ladda ner spåret i MP3-format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visuellt läge');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Ljudläge');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Uppdatera');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Hjälp');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Tyvärr, det var felaktigt. Försök igen.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google kartalternativ');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Använda väderlager?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Använder du transitlager?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Aktivera Gmap-intressepunkter (inklusive möjligen dina konkurrenter)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta nyckelord');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Skanna in den här koden i din telefon för att få vägbeskrivningar till oss.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Momsnumret du angav verkar inte vara korrekt. Du bör ha något sånt här: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOVALIDATE', 'Ogiltigt VAT-nummer. Kontrollera giltigheten av ditt VAT-nummer med Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Grattis. Vi kunde validera ditt momsnummer.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Lista skatteregler');
jr_define('_JOMRES_TAX_RULE', 'Skatteregel');
jr_define('_JOMRES_TAX_RULE_INFO', 'Skatteregler används för att fastställa olika skatteregler för olika regioner. Dessa skatteregler påverkar personen som gör bokningen, om de är registrerade, inloggade och har redigerat sitt konto med hjälp av sidan "redigera mitt konto" Syftet med dessa regler är att ta emot bokare i de områden som är momsbefriade, du kanske upptäcker att du inte behöver skapa många regler, om några alls.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Importera skattesatser');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Vi kan importera skattesatser för EU åt dig, om du vill. Observera att om du använder den här funktionen kommer alla dina befintliga skattesatser att tas bort.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Redigera skatteregel');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Momsnummer för den här egenskapen.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Ange VAT-numret för denna fastighet.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT-nummer validerat.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Momsnummer ej validerat.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Företagsuppgifter som anges här kommer att användas på provisions- och prenumerationsfakturor.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Du verkar inte ha fyllt i dina kontouppgifter ännu. För att lista din egendom på webbplatsen måste du fylla i dina kontouppgifter innan vi kan gå vidare.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Produktion eller utveckling?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Om du ställer in det här alternativet till Utveckling kommer vi att aktivera felrapportering, annars kommer den att stängas av när den är inställd på Produktion. Om detta är en liveserver rekommenderar vi att du ställer in det här alternativet till "produktion".' );
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Produktion');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Utveckling');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resursdetaljer');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariffinformation');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Endast');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'vänster!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resursfunktion');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Det går inte att ta bort denna resursfunktion, den är tilldelad en resurs. Ta bort funktionen från den här resursen och försök igen.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Mediecenter');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Lägg till bilder');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Rumsbilder');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Egenskapens huvudbild');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Bildspelsbilder');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Rensa lista');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Dra och släpp filer här');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Välj den resurs du vill ladda upp bilder för. Om du kan ladda upp bilder för enskilda resurser (t.ex. rum) får du en andra rullgardinsmeny för att välja den specifika resursen. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Om du laddar upp flera bilder som "Huvudfastighetsbild" kommer dessa att användas i egenskapslistan . Bildspelsbilder kommer att visas på egenskapsinformationssidan.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Visa din bild');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Ta bort bild');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Ladda upp bild');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Rumstypsikoner');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Ikoner för egenskapsfunktioner');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Ladda upp alla filer');
//8.0
jr_define('COMMON_PREV', 'Föregående');
jr_define('COMMON_MORE', 'Mer');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Idag');
jr_define('_JOMRES_DASHBOARD_YEAR', 'År');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Månad');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Vecka');
jr_define('_JOMRES_DASHBOARD_DAY', 'Dag');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'Från');
jr_define('_JOMRES_HTO', 'Till');
jr_define('_JOMRES_HNEW_BOOKING', 'Ny bokning');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Insättningsstatus');
jr_define('_JOMRES_HSTATUS_GUEST', 'Gäststatus');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Bokningsstatus');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publiceringsstatus');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Fakturastatus');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Fakturatyp');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Godkänd');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Nuvarande verksamhet');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Visa bokningar för');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Visa fakturor för');
jr_define('_JOMRES_STATUS_ANY', 'Val som helst');
jr_define('_JOMRES_STATUS_PAID', 'Betalt');
jr_define('_JOMRES_STATUS_NOTPAID', 'Inte betald');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Utcheckad');
jr_define('_JOMRES_STATUS_ACTIVE', 'Aktiv');
jr_define('_JOMRES_STATUS_CANCELLED', 'Avbruten');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Publicerad');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Inte publicerad');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Gäster med aktiva bokningar');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Gäster med tidigare bokningar');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Bokning');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Prenumerationer');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Kommissioner');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Alla mina företag');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Ange som aktuell');
jr_define('_JOMRES_ACTION_CHECKIN', 'Checka in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Kolla ut');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bokningar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'properties');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'gäster');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'rapporter');
jr_define('_JOMRES_HLIST_GUESTS', 'Gäster');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Lista gäster');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Lista fakturor');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Egenskaper');
jr_define('_JOMRES_HQUICK_BOOKING', 'Snabbbokning');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Bokningsdatum');
jr_define('_JOMRES_HTWO_WEEKS', 'Två veckor');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Den här bokningen kommer att annulleras. Tryck på OK för att avbryta bokningen.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Incheckningar idag');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Idag utcheckningar');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Nuvarande invånare');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigationsfältets plats');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Standard (innehållsområde)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixat till toppen');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fast till botten');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverterat navigeringsfält (färgändring)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Bokningsnummer');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Visa gäster för');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres inkluderar sina egna malluppsättningar, en för varje version av Bootstrap som stöds. Joomla och Wordpress mallar/teman som är baserade på Bootstrap kommer att erbjuda en specifik version av Bootstrap så du måste se till att alternativet du väljer här är kompatibel med din mall/tema. Om ditt tema inte tillhandahåller någon Bootstrap-kod ställ in detta alternativ till No Bootstrap in Theme och då kommer Jomres automatiskt att inkludera Bootstrap 3-filer för eget bruk. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Visa gäster för');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fast perioder');
jr_define('_JOMRES_HDEPOSITS', 'Insättningar');
jr_define('_JOMRES_HBOOKING_FORM', 'Bokningsformulär');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Obligatoriska fält');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'Min gata');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Min stad');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Mitt hotell');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Utökad konfiguration');
jr_define('SIMPLE_CONFIGURATION', 'Enkel konfiguration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Resursfunktioner');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resurstyp');
jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Redigera gästtyp');
jr_define('_JOMRES_HEDIT_COUPON', 'Redigera kupong');
jr_define('_JOMRES_HEDIT_EXTRA', 'Redigera extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Skapa flera resurser');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generera resurser');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Hur många resurser?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resurstyp');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max gäster per resurs');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Ta bort alla befintliga resurser?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Observera att du för närvarande visar administratörsområdet med Advanced Site Config inställd på Nej. Om du vill se fler alternativ vänligen ställ in Site Config -> Misc -> Advanced Site Config till Ja.');
jr_define('DATATABLES_SINFO', 'Visar _START_ till _END_ av _TOTAL_ poster');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Godkännande');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Avvisa bokningsförfrågan');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Godkänn bokningsförfrågan');
jr_define('_JOMRES_STATUS_APPROVED', 'Godkänd');
jr_define('_JOMRES_STATUS_REJECTED', 'Rejected');
jr_define('_JOMRES_STATUS_INQUIRY', 'Förfrågan');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bokning kräver godkännande eller tillgänglighetsbekräftelse?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Om inställningen är ja, när en bokning görs, kommer den inte att dyka upp i tillgänglighetskalendrarna (och andra gäster kan fortfarande boka dessa dagar och resurs) förrän fastighetsförvaltaren accepterar/bekräftar tillgängligheten för bokningen När bokningen har bekräftats infogas den som preliminär (om den inte åsidosätter andra bokningar, andra gäster kan inte boka samma datum längre) och ett e-postmeddelande skickas till kunden för att göra betalningen.');
jr_define('_JOMRES_ERROR', 'Fel');
jr_define('_JOMRES_ERROR_MESSAGE', 'Tyvärr! Ett fel uppstod vid försök att bearbeta denna funktion. Det har rapporterats åt dig och vi kommer att undersöka det.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Meddelande');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Linje');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Spåra');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E-postmallar');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Redigera e-postmall');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'E-postämne');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'E-posttext');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'E-posttyp');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'E-postnamn');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'E-postbeskrivning');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Webbplatsadministratör Ny boknings-e-post');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E-post skickas till webbplatsens administratör när en ny bokning görs, om den globala Paypal-gatewayen är aktiverad');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotell ny boknings-e-post');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E-post skickas till fastighetsägaren när en ny bokning görs');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Gäst Ny boknings-e-post');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E-post skickas till gäst när en ny bokning görs');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Gästbekräftelsebrev');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Utskrivbart brev eller e-postmeddelande som kan skickas manuellt av fastighetsägaren för att bekräfta en bokning');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Denna bokning kan godkännas. Alla valda resurser är tillgängliga för de valda datumen.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Denna bokning kan inte godkännas eftersom vissa av resurserna redan är bokade för de valda datumen. Du måste ändra bokningen först.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Visa länken Powered by Jomres i Jomres sidfot.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Använder du budgetfunktionen?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Endast bootstrappade webbplatser! Budgetfunktionen är en funktion i fastighetslistan som en gäst kan använda för att lyfta fram för sina fastigheter vars pris per natt är under en viss siffra. Funktionen har vissa begränsningar genom att den kan inte lämpligt för vissa webbplatser som använder många olika valutor. Observera att om du använder detta och insticksprogrammet Featured Listings ändras din omslagsklass för utvalda listor automatiskt till 'panel-primär' när fastighetslistan visas.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Namn: ');
jr_define('_JOMRES_FOR', 'För');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'natt');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nätter');
jr_define('_JOMRES_LIVE_SCROLLING', 'Använda Live Scrolling/Infinate Scrolling i egenskapslistan?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'maj');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'juni');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'okt');
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
jr_define('DATATABLES_SHOWHIDE', 'Ändra kolumner');
jr_define('_BOOKING_ONREQUEST', 'Bokning på begäran');
jr_define('_BOOKING_INSTANT', 'Omedelbar bokning');
jr_define('_JOMRES_COM_FONTAWESOME', 'Inkludera Font Awesome-ikonuppsättning?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Sätt detta till Ja om din mall inte innehåller Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Begär bokning');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Kära ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Välj en webbplats');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Webbplats-id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU-land?');
jr_define('_JOMRES_HLASTCHANGED', 'Senast ändrad');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E-post för avbokning av hotellbokning');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E-post skickas till fastighetsägaren när en ny bokning avbokas');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'E-postmeddelande för avbokning av gästbokning');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E-post skickas till gäst när en ny bokning avbokas');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Skicka testmail');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Testa e-post');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Detta är ett testmeddelande från ditt bokningssystem.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testmejl skickat framgångsrikt');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Testmail skickades inte');
jr_define('_INVOICE_TRANSACTIONS', 'Transaktioner');
jr_define('_OPENEXCHANGE_API', 'Öppna Exchange Rates API-nyckel');
jr_define('_OPENEXCHANGE_API_DESC', 'För att konvertera priser mellan tjänster behöver du en Open Exchange Rates API-nyckel. Du MÅSTE ha en API-nyckel för att visa priser korrekt i Jomres, men du kan <a href="https://openexchangerates.org /signup/free" target="_blank">registrera dig för en gratisnyckel</a> (uppdateringar varje timme, 1000 förfrågningar/månad - ingen HTTPS, e-postsupport eller avancerade funktioner). Jomres laddar ner växelkurser en gång om dagen så länge som om du bara använder nyckeln på en handfull webbplatser är det osannolikt att du överskrider dessa gränser. Före Jomres 8.3 använde vi en äldre, odokumenterad Yahoo-funktion men vi har upptäckt att användningen av den här funktionen strider mot Yahoos villkor och Villkor. Som ett resultat av detta måste vi anta att funktionen kan försvinna någon gång i framtiden, därav övergången till att använda öppna växelkurser.');
jr_define('_JOMRES_COMMISSION', 'Kommission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Om du laddar upp flera bilder för individuella tillval, kommer endast den första bilden att användas.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Betala nu');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Denna faktura förfaller nu. Klicka på knappen för att välja betalningsmetod.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Här är en lista över några av de fantastiska sakerna du kan köpa när du gör en bokning på den här fastigheten. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'På den här sidan kan du konfigurera alla installerade gateways. Dessa alternativ låter dig ta emot betalningar för alla provisions- eller prenumerationsfakturor. Gränssnittsinställningar kan endast åsidosättas av Paypal, alla andra gateways måste konfigureras via Fastighetskonfiguration -> Fliken Gateways, men om en gateway visas i den här listan bör den kunna hantera både bokningsbetalningar och fakturabetalningar.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Visa i egenskapsinformationssidan?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Inställningar för sida med egenskapsinformation');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Fastighetsförvaltning i Jomres görs endast från webbplatsens frontend cpanel. På denna sida kommer du att kunna lista alla egenskaper i systemet, så att du kan tilldela provisionssatser och godkänna/avvisa dem (om dessa funktioner är aktiverade). För att skapa en ny egendom, redigera befintliga, hantera bokningar eller andra fastighets-/bokningsrelaterade uppgifter, måste du logga in på webbplatsens gränssnitt och gå till Jomres standardsida. Där ser du Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Rumsfunktionsikoner');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Egenskapsfunktionskategorier');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Redigera egenskapskategori');
jr_define('_JOMRES_HCATEGORY', 'Kategori');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Visa egenskapsfunktioner uppdelade i kategorier?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Sätt detta till YES för att dela upp egenskapsfunktionerna i kategorier. Det här alternativet påverkar endast egenskapsfunktionerna som visas på egenskapsinformationssidan. Alla andra sidor kommer att visa dem utan att dela upp dem i kategorier.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Ångra incheckning');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Ångra utcheckning');
jr_define('_JOMRES_STATUS_UNISSUED', 'Outfärdat');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Din nedladdnings- och supportnyckel är giltig, du kommer att kunna ladda ner plugins via pluginhanteraren.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Din nedladdnings- och supportnyckel är INTE giltig, du kommer INTE att kunna ladda ner plugins via pluginhanteraren.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-typ');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Du har ännu inte angett din egendomssubtyp. Det är här du definierar den som en villa med 5 sovrum eller en stuga med 4 sovrum och det hjälper gäster som söker att förfina sina sökningar.") ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Ge din egendom en undertyp');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E-postmallar');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Kontaktinställningar');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Härifrån kan du åsidosätta alla fastigheters kontaktuppgifter (e-post, telefon, fax) så att all kommunikation med gäster skickas till dig och inte till fastighetsägarna.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Åsidosätta kontaktuppgifter för listor?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Om det här alternativet är inställt på Ja kommer fastighetens e-postadresser och telefonnummer att ersättas med de som anges på den här fliken. Detta tvingar all kommunikation att skickas till din nominerade e-postadress för att säkerställa att gästen och fastigheten ägaren kan inte kringgå bokningsmotorn och de provisionsavgifter som kommer att resultera. Det betyder också att när en fastighets beskrivning ändras kommer egenskapen att ställas in på Ej godkänd (om godkännandefunktionen är aktiverad) och du måste kontrollera beskrivningen manuellt för att säkerställa att cheferna inte har angett telefon- eller e-postdetaljer i textfälten innan de godkänner det igen.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Ändringar som görs i uppgifterna i uppgifterna kräver verifiering av webbplatsadministratören. Om du sparar nya uppgifter kommer din information att opubliceras och väntar på godkännande från webbplatsadministratören innan den blir synlig igen för webbplatsbesökare. Du kommer inte att kunna ta emot online bokningar medan din annons är opublicerad och väntar på godkännande.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Granska bokningsbegäran');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Bekräfta bokningsbegäran');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Ändra bokningsbegäran');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Markera faktura som väntande');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Faktura markerad som väntande');
jr_define('_JOMRES_TRACKING_ENABLE', 'Skicka anonym spårningsdata?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Välj Ja för att skicka anonym spårningsdata till Jomres.net för att hjälpa oss att bättre förstå hur du använder systemet.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Se till att dina uppgifter har fyllts i på sidan Redigera mitt konto innan du försöker göra bokningar för dina kunders räkning.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Gästens kontaktuppgifter");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- Ny gäst -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Välj diagram...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Inkomst per år/månad');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, låt oss komma igång. Först måste du skapa några rum för den här egenskapen.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Skapa några rum nu');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Forskning har visat att fastigheter med massor av bilder av hög kvalitet genererar fler visningar. Ladda upp en huvudbild och några bildspelsbilder för att förbättra dina chanser att få bokningar.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Ladda upp en bild');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Skapa några tariffer');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Vad kommer gäster att boka?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Är den här egenskapstypen en fastighet av hotelltyp, där du hyr ut rum i fastigheten, eller en fastighet av villatyp, där du hyr ut hela fastigheten i en bokning? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rum i fastigheten');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Hela fastigheten');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Båda'); // Detta är en tillfällig inställning som ger bakåtkompatibilitet för befintliga användare som ännu inte har uppdaterat sina egenskapstyper. Det går inte att välja
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Vad kommer gäster att boka?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Du måste fylla i dina adressuppgifter så att dina gäster kan hitta dig när de kommer för att stanna.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Uppdatera din adress');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hoppsan, det verkar som att du kanske har glömt att fylla i alla fält.');
jr_define('_JOMRES_CONTANT_US', 'Kontakta oss');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Välkommen till din nya onlinelista för ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hej och välkommen till din nya egendom på ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "Du har nyligen lagt till en ny egenskap på vår webbplats och vi vill välkomna dig till familjen.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Du kan se din nya instrumentpanel ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' här ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "När du har konfigurerat din egendom kan du se hur den ser ut för webbplatsbesökare genom att besöka ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' din förstasida.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(den är inte publicerad, så webbplatsbesökare kan inte se den ännu).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "Överst på sidan ser du ett antal meddelanden. Knapparna bredvid dessa meddelanden leder dig till de sidor du behöver besöka för att konfigurera din egendom på vår sida. När du har utfört var och en av dessa uppgifter kommer det att vara mycket lättare för besökare på vår webbplats att hitta din fastighet och göra bokningar online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Om du har några frågor alls, vänligen ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontakta oss');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "och vi svarar gärna på alla dina frågor.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Allt bästa, vårt team på ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "Du verkar inte ha några turer att sälja. Skapa en turprofil och använd sedan knappen Generera för att skapa några turer.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Låt oss skapa några turer!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap valutasymbols plats');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Använd detta alternativ för att flytta valutasymbolen bakifrån, till framför prissiffran, eller vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Ange ditt facebooksida-id, till exempel "jomres". Lämna detta tomt för att inte visa något. Ange inte https://www.facebook.com eller något annat.');
jr_define('COMMON_DOWNLOAD', 'Ladda ner');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Närnäst måste du lägga till några tariffer. Dessa är dina grundpriser.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap är inte aktiverat!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Varning, du har inte Bootstrap aktiverat i Jomres Site Configuration -> Fliken Övrigt. För att tillhandahålla <i>vissa</i> funktioner använder Jomres för närvarande sina gamla, jQuery UI-baserade mallar, dessa har dock inte arbetats med på flera år. All aktuell utveckling och förbättringar av Jomres-mallar (layoutfiler) görs till dess Bootstrap 3-mallfiler. För att få ut det bästa av Jomres rekommenderar vi att du installerar en Bootstrap 3-baserad tema för Wordpress eller Joomla. När du har gjort det kan du aktivera Jomres\' Bootstrap-mallar i Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Din supportnyckel är giltig. Observera att denna licens inte tillåter nedladdning av plugin-program.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Dra bokningar till detta område för att avbryta dem');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Lång (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Se till att du har skapat en WordPress-sida som innehåller kortkoden [jomres:xx-XX] (där xx-XX är din webbplatsspråkkod, till exempel [jomres:en-GB] eller [ jomres:en-US] ) annars kommer du inte att kunna komma åt Jomres från frontend för att hantera dina fastigheter och bokningar. <br> Jomres är byggt på Bootstrap-ramverket, så du måste använda det på ett tema baserat på Bootstrap. Vi rekommenderar en baserad på Bootstrap 3. Om du inte har tillgång till ett tema rekommenderar vi att du använder Jomres Leohtian-temat för Wordpress som du kan <a href="https://www.jomres.net/download/free- downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">ladda ner härifrån.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Innan du kan skapa en rumstyp måste vi veta om det är för en fastighet av hotelltyp eller en villatyp.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Klicka för att lägga till nya rumstyper');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Varning, du har en eller flera fastighetstyper utan rumstyper. Fastigheter behöver rumstyper så att fastighetsförvaltare kan skapa tariffer.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Använd knappen Ny för att skapa nya rumstyper.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Turser');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Inga bokningar/fastigheter (enkel lista )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Loggfilens plats');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres loggar systemaktivitet som standard till platsen '.JOMRES_SYSTEMLOG_PATH.". Eftersom den här filen kan innehålla känslig information (api-nycklar, systemsökvägar, gatewayinformation, gästinformation) rekommenderar vi starkt att du ändrar denna sökväg till en ovanför din webbdokumentrot. Om du inte förstår vad detta betyder, fråga dina webbvärdar om råd eftersom de känner till ditt filsystem.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres loggar detaljerad information om ditt system, inklusive api-nycklar, systemsökvägar, gateway och gästinformation, som alla inte borde vara synliga för resten av internet. Din systemloggsökväg är inte inställd, så systemloggar sparas för närvarande i katalogen '.JOMRES_SYSTEMLOG_PATH.", vilket inte är idealiskt. Besök Webbplatskonfiguration -> Felsökning och ange en sökväg i ditt filsystem som ligger utanför webbroten. Om du är osäker, kontakta dina webbvärdar som de kommer att kunna ge dig råd.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Om ditt CMS är installerat i rotkatalogen på din webbplats, då skulle en lämplig plats vara ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Du har ingen Google Maps-nyckeluppsättning. På grund av de senaste ändringarna i Google Maps kommer alla nya webbplatser att behöva en API-nyckel för att kunna använda Google Maps funktioner. <a href='https://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>se vår manualsida om hur du skapar en API-nyckel< /a> och spara nyckeln i Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Googles kartfärgschema');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Okej, låt oss börja lägga till din egendom på webbplatsen. Vi måste samla in lite information om din egendom här. Detta kommer att tillåta oss att ställa in den blotta delen av din egendom. När det är gjort, då du kommer att guidas genom att lägga till rum, priser och bilder.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Fastighetstypen hjälper dig att definiera hur fastigheten ska bokas, till exempel med hotell som du "säljer" bara ett eller två rum åt gången, medan du med villor erbjuder hela fastigheten.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Observera att e-postadressen inte behöver vara densamma som den du använde när du registrerade ditt konto. Detta gör att du kan ha olika adresser för olika fastigheter.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minsta insättning');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Du kan konfigurera det lägsta insättningsbeloppet som ska debiteras. Om du gör det kan inställningarna "Insättning krävs är kostnaden för den första natten?" & "Insättning krävs är procentsats?" inställningarna i Fastighetskonfigurationen kan inte konfigureras , istället är alla insättningsvärden en procentsats och måste vara minst den siffra du definierar här.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Denna siffra kan inte vara mindre än ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog-värd');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog-port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Om du vill skicka systemloggningsmeddelanden till en syslog-server, kan du ställa in värdnamnet eller IP-adressen (t.ex. 192.168.0.2) och porten (t.ex. 514) här. Observera om webbplatsen är inställd på ' Utveckling' så skickas DEBUG-meddelanden. Om inställt på 'Produktion' kommer endast INFO-nivå och högre meddelanden att skickas. För att inaktivera loggning till fjärrservern, töm värd- och portfälten.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP har inte tillgång till PHP-funktionerna 'openlog' och 'syslog'. Detta är en inställning på serversidan, om du vill att Jomres ska skicka meddelanden till en syslog-server, kontakta dina värdar och bekräfta om PHP tillåts komma åt dessa funktioner. När det är aktiverat kommer du att kunna konfigurera din syslog-servers inställningar här.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Skicka ett e-postmeddelande till webbplatsadministratören när ett fel uppstår?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historiskt har problem som bör undersökas skickats till webbplatsägare. Detta kan vara bra för att hålla ett öga på driften av ditt system eftersom det har väldigt många rörliga delar och det är svårt att hålla reda på alla. Tyvärr kan spindlar och botar som genomsöker dina webbplatser (även vänliga sådana) oavsiktligt utlösa allvarliga fel och detta kan göra att antalet meddelanden du får blir överväldigande. Om så är fallet, ställ in det här alternativet till Nej. Jomres skickar loggning meddelanden till både en uppsättning loggfiler och till en syslog-server (om dina specifika PHP-inställningar tillåter, om de inte gör det, kontakta din värd). Du kan analysera filerna manuellt om du letar efter något specifikt (till exempel om du utvecklar en gateway och vill använda funktionsanropet gateway_log() men det är mycket information att trawla igenom så det är bättre att använda något som en syslog-filanalysator. Om du utvecklar på linux då det finns massor av verktyg tillgängliga för dig, om på Windows är ett enkelt verktyg du kan använda http://maxbelkov.github.io/visualsyslog/ På den här sidan ställ in 'Syslog-värden' till '127.0.0.1' och ' Port' till 514 för att se meddelanden som är inloggade i det verktyget. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Hantera egenskaper');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Du har ingen IP-detektions-API-nyckel inställd. Detta krävs för att systemet ska kunna upptäcka användarens plats automatiskt och ställa in deras valuta och land automatiskt. <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>se vår manual sida om hur man skapar en IP-detektions-API-nyckel</a> och sparar nyckeln i Jomres > Webbplatskonfiguration > Valutaomvandlingar / Valutakoder.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Du har inte en Open Exchange Rates API Key set. Detta krävs för att systemet ska kunna ladda ner och använda valutakurser automatiskt. Vänligen <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>se vår manualsida om hur du skapa en API-nyckel för IP-detektion</a> och spara nyckeln i Jomres > Webbplatskonfiguration > Valutaomvandlingar/valutakoder.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Tillståndsnummer');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Vissa länder lagar att du måste visa ett tillståndsnummer för din fastighet. Om du har ett sådant nummer, skriv in det här så kommer det att läggas till i rubriken för fastigheter.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot-plugin MÅSTE vara installerad och aktiverad för att dessa kortkoder ska fungera. Detta kan hittas i Jomres Plugin Manager. Om denna webbplats byggdes med en av Jomres Plugin Manager. Snabbstartar så är det förmodligen redan installerat.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Du måste se till att plugin-programmet <strong>'Jomres Shortcodes'</strong> är aktiverat. Detta kan hittas i Jomres Plugin Manager. Om den här webbplatsen byggdes med en av snabbstartarna är det förmodligen redan installerad.");
jr_define('SHORTCODE_TASK', 'Uppgift');
jr_define('SHORTCODE_DESCRIPTION', 'Beskrivning');
jr_define('SHORTCODE_ARGUMENTS', 'Argument');
jr_define('SHORTCODE_EXAMPLE', 'Exempel');
jr_define('INTEGRITY_CHECK', 'Filsystemintegritetskontroll');
jr_define('INTEGRITY_CHECK_DESC', 'Denna funktion låter dig kontrollera att filsystemet matchar det som tillhandahålls i den aktuella versionen av Jomres. Detta är användbart för att säkerställa att alla filer uppdaterades korrekt efter installation/uppgradering. Filer i rött saknas, filer i Orange finns men skiljer sig från de som tillhandahålls i den nuvarande versionen. Endast filer som är potentiella problem kommer att listas här.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filsystemintegritetskontroll');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Lokal hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Versionshash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Fantastiskt! Inga problem hittades.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps markör');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Läs mer');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Läs mindre');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Turistskatt');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Turistskattesats');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Ställ in turistskattesatsen. Turistskatten beräknas först efter att den första bokningen har skapats och läggs till på bokningsbekräftelsesidan i rutan för extratjänster.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Är procent?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Sätt detta till Ja om skatten är en procentsats eller Nej om det är en fast avgift.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Påverkar hela bokningsvärdet?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Sätt detta till Ja om skatten ska täcka hela värdet av bokningen, så det är en procentandel av både boendet plus eventuella tillägg, eller Nej om det bara beräknas utifrån värdet av boendesumman. Om alternativet 'Är procent' ovan är inställt på Nej, ignoreras detta alternativ.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Var medveten om att en turistskatt kommer att läggas till denna bokning. Du kommer att kunna se skatten på bokningssidan för recension.');
jr_define('NO_LICENSE_MESSAGE', "Du har inte sparat ett licensnummer i Site Configuration, därför kommer du inte att kunna ladda ner plugins. När du har sparat en giltig licensnyckel kommer du att kunna installera alla plugins som är listade som Kärnplugins.");
jr_define('INVALID_LICENSE_MESSAGE', "Du verkar använda ett licensnummer som är ogiltigt eller har löpt ut. När du har sparat en giltig licensnyckel kommer du att kunna installera alla plugins som är listade som Core-plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Grattis, du använder ett giltigt licensnummer och kan installera Core-plugins via Jomres plugin-hanterare.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Den här sidan låter dig ladda upp bilder för din egendom och de saker du erbjuder. Den har en huvudknapp och en andra knapp som låter dig välja specifika resurser att ladda upp bilder för. Så, huvudegenskapen bild och bildspelet kommer bara att visa en knapp men om du har skapat t.ex. tillval eller rum, kommer du att se en andra knapp där du kan ladda upp bilder för dessa specifika resurser.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Den här sidan låter dig ladda upp bilder för din egendom och de saker du erbjuder. Den har en huvudknapp och en andra knapp som låter dig välja specifika resurser att ladda upp bilder för. Så, huvudegenskapen bild och bildspelet kommer bara att visa en knapp men om du har skapat några tillval kommer du att se en andra knapp där du kan ladda upp bilder för de specifika resurserna.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Välj först den eller de bilder du vill ladda upp genom att klicka på Lägg till bild eller genom att dra och släppa. Dessa kommer att visas i kolumnen till höger.</li>
  <li>Ovanför detta område använder du knappen \"Välj resurs\" för att välja vilken resurs du vill ladda upp bilder för. Du kan erbjudas alternativet att välja en specifik resurs nedan. </li>
  <li> När du har valt en resurs kan du klicka på knappen Ladda upp bild under en bild för att associera den med den resursen. När en bild har laddats upp försvinner den från kolumnen på den högra sidan och visas till vänster.</li>
  <li>Använd papperskorgen bredvid befintliga bilder för att ta bort bilder som du inte längre vill ska visas.</li>
  <li>Du kan ändra ordningen som filerna visas i bildspelet genom att byta namn på dem innan du laddar upp dem, eftersom de visas på sidor i alfabetisk ordning.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Bredvid resursknappen kan du se en förhandsgranskningsknapp. Om du klickar på denna kommer du att se en popup som visar hur de för närvarande uppladdade bilderna kommer att se ut på en sida. Detta hjälper till att ge dig en idé om hur bilderna kommer att se ut för dina kunder.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Det finns ingen gräns för hur många bilder du kan ladda upp. Bilder ändras automatiskt när de laddas upp. Du kan bara ladda upp JPG- och PNG-filer.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Helst skulle alla bilder du laddar upp vara minst ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixlar breda, annars kan de se suddiga ut efter att de har laddats upp.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Alla bilder du laddar upp får inte vara fler än ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "i storlek.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Välj den resurs du vill ladda upp bilder för");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specifik resurs");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bilder som redan laddats upp för denna resurs");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Textformatering');
jr_define('_JOMRES_MARKDOWN_DESC', 'Du kan skriva in text här med enkel Markdown-formatering. Du behöver inte kunna någon HTML, använd bara knapparna för att få informationen att se ut som du vill, eller formatera text enligt dessa exempel.' );
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Betoning');
jr_define('_JOMRES_MARKDOWN_BOLD', 'fet');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'genomstrykning');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Rubriker");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Stor rubrik');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Liten rubrik');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'liten rubrik');
jr_define('_JOMRES_MARKDOWN_LISTS', "Listor");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Allmänt listobjekt');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numrerad listpost');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Länkar');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text att visa');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citat');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Detta är ett citat.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Det kan sträcka sig över flera rader!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Bilder');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabell');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Kolumn');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Visa egendomsbilder som bildspel i egenskapslistan?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Om inställt på ja, kommer ett bildspel med egendomshuvudbilder att visas. Om inställt på nej, kommer den första egenskapens huvudbild att visas.');
jr_define('EDIT_CMS_USER', 'Redigera CMS-användare');
jr_define('BOOKING_MADE_BY', 'Bokning gjord av');
jr_define('_JOMRES_ROUTER_FEATURES', 'Bekvämligheter');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Rumstyper');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Webbadress för extern bokningsformulär');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Här kan du ange en extern URL om du vill använda en tredje parts webbplats för att göra bokningar. Alla jomres bokningsknappar kommer att peka på denna URL. Lämna detta fält tomt om du vill använda Jomres bokningsformulär .');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (kort rumsbeskrivning/underrubrik)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Rumsbeskrivning');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Gäst svartlistad');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Om denna gäst är svartlistad kommer de inte längre att kunna göra bokningar i den här egenskapen.');
jr_define('_JOMRES_SESSION_HANDLER', 'Sessionshanterare');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Spara jomres sessionsfiler till disk eller databas. Rekommenderas: databas');
jr_define('_JOMRES_MAP_HEIGHT',"Karthöjd (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Kartzoomnivå ");
jr_define('_JOMRES_MAP_MAPTYPE',"Karttyp ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Mallpaket är plugins som kan tillhandahålla åsidosättande mallar för olika Jomres-mallfiler.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"Denna sida listar alla mallfiler som kan åsidosättas av ett mallpakets mallfiler. Om du vill åsidosätta en viss mallfil, klicka på redigera-knappen för den filen, på nästa sida kommer du att visas kunna välja vilken version du vill åsidosätta med. Notera att dessa åsidosättningar har prioritet över både Jomres Core och alla Wordpress- eller Joomla-tema/mallöverstyrningar. Du kan inaktivera en åsidosättning genom att ta bort den på sidan Listmallaröverstyrningar.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Mallnamn");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Aktuell sökväg");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Inte åsidosatt");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"Du kan välja vilken mallfil som ska åsidosätta Core-mallfilerna genom att ändra rullgardinsmenyn");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Procentandel av bokade rum");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Procentandel av bokade rum");
jr_define('_JOMRES_SELECT_WIDGETS',"Välj widgets");
jr_define('_JOMRES_INTERVAL',"Intervall");
jr_define('_JOMRES_TIMELINE',"Tidslinje");
jr_define('_JOMRES_CPANEL_GRID',"Kontrollpanelens hemlayout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Välj rutnätslayouten för din frontend-egendomshanteringskontrollpanels hemsida.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Stadsbilder");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Ändring av egenskapstyp raderar alla rum, tariffer, fastighetsinställningar och återställer tillgänglighet.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Observera att efter uppdatering måste du uppdatera alla Jomres-plugin-program som redan är installerade, genom Jomres-plugin-hanteraren. Om du har Core-plugin-program installerade, men inte har en giltig Jomres-licens, så <em>gör vi not</em>rekommenderar att du uppdaterar Jomres eftersom äldre plugins ofta kanske inte fungerar med nyare versioner av Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Observera att efter uppdatering måste du uppdatera alla Jomres-plugin-program som redan är installerade via Jomres plugin-hanteraren.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Om du vill uppdatera Jomres och dess plugins behöver du en förnyelselicens. Besök <a href='https://www.jomres.net/pricing' target='_blank'>vår webbplats</a> för mer information. I de flesta fall är dessa licenser 50 % av priset för en fullständig licens. Se till att du har loggat in i vår butik innan du försöker köpa en förnyelse.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Betalningsmetod: ");

jr_define('_JOMRES_PRICES',"Get Connected");

jr_define('_OAUTH_TITLE',"Appnyckelhantering");
jr_define('_OAUTH_APPS',"REST API-klientdetaljer");
jr_define('_OAUTH_IDENTIFIER',"Identifierare");
jr_define('_OAUTH_APIKEY',"Kund-ID");
jr_define('_OAUTH_SECRET',"Hemlig");
jr_define('_OAUTH_CREATED',"Skapad/Uppdaterad app");
jr_define('_OAUTH_CLIENT_ID_INFO',"Klient-ID och hemlighet skapas åt dig. Identifieraren är så att du enkelt kan identifiera detta nyckelpar.");
jr_define('_OAUTH_SCOPE_TITLE',"Behörigheter (vad klienten kan göra) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "Användarbehörigheter");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Egendomsbehörigheter");

jr_define('API_DOCUMENTATION_TITLE',"App REST API dokumentation");

jr_define('_OAUTH_CONFIG',"API Core-konfiguration");

jr_define('_OAUTH_CONFIG_SHOW',"Visa API-klientkonfigurationsalternativ i Jomres huvudmeny?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"Du kan välja att inte visa API-klientens konfigurationsalternativ i avsnittet 'Mitt konto' på Jomres huvudmeny. Du kan istället bestämma att du vill visa dem på andra sidor med Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Visar API-kärndokumentationssidan. API Core tillåter användare att skapa API-klienter, som sedan används för att komma åt API-funktionaliteten som beskrivs i API Core-dokumentationen." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Visar API-kärnadministrationssidan, där fastighetshanterare kan konfigurera API-klienter. Observera att detta endast är en funktion för registrerade användare, så användare måste vara registrerade och inloggade innan de kan se den här sidan." );

jr_define('API_METHODS_TITLE',"API-metoder");
jr_define('API_METHODS_DESCRIPTION',"Denna lista över metoder är baserad på dina installerade API-funktions-plugin-program och genereras automatiskt. Om du installerar eller tar bort ett API-funktions-plugin måste du besöka den här sidan för att bygga om listan med API-metoder som är tillgängliga på din webbplats. ");

jr_define('_OAUTH_REDIRECT_URI',"Omdirigera URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Ge mig ett namn som är meningsfullt för dig, såsom Min telefon");

jr_define('_OAUTH_GRANT_TYPES',"Det här systemet stöder två tilldelningstyper, klientuppgifter och implicita. Om du använder flödet <em>client_credentials</em> behöver du både klient-id och klienthemlighet. Om du använder <em >implicit</em> då skulle din app bara skicka klient-id och du skulle logga in på systemet för att uttryckligen auktorisera den appen.");

jr_define('_OAUTH_IMPLICIT_NOTES',"För att använda det <em>implicita</em> beviljande flödet måste du använda denna webbadress för att auktorisera dina appar. När den här webbadressen anropas och du har auktoriserat appen kommer systemet att utfärda en token som dina appar sedan använder för att anropa detta systems API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Auktoriserings-URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Visa Webhook-konfigurationsalternativ i Jomres huvudmeny?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"Du kan välja att inte visa Webhook-konfigurationsalternativen i avsnittet 'Mitt konto' på Jomres huvudmeny. Du kan istället bestämma att du vill visa dem på andra sidor med Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks dokumentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Visar API-kärndokumentationssidan. API Core tillåter användare att skapa API-klienter, som sedan används för att komma åt API-funktionaliteten som beskrivs i API Core-dokumentationen." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Visar API-kärnadministrationssidan, där fastighetshanterare kan konfigurera API-klienter. Observera att detta endast är en funktion för registrerade användare, så användare måste vara registrerade och inloggade innan de kan se denna sida." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Redigera integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integrations-ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL eller namn' );
jr_define( 'WEBHOOKS_ENABLED', 'Aktiverad' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Autentiseringsmetod/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Alla webhooks du skapar kommer inte att triggas eftersom du inte tilldelas några egenskaper. Superfastighetshanterare tilldelas vanligtvis inte enskilda egenskaper, så du kan behöva en ny användare för att skapa webhook.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Alla webhooks du skapar kommer att triggas mot följande egenskaper: ' );
jr_define( 'PORTAL_REVIEWS_LIMIT', 'Recensionsgräns' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Använd den här inställningen för att begränsa antalet recensioner som visas på sidan med fastighetsdetaljer.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Visa alla recensioner' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minsta insättningsvärde' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Om den beräknade insättningen är mindre än denna siffra, ställ in insättningen till detta värde istället. Denna siffra kan i sig åsidosättas om den inte uppfyller webbplatsens minsta insättningsinställning. Lämna den inställd på 0 till använd inte inställningen." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'För att öka din webbplatshastighet rekommenderar vi att du importerar information om den befintliga webbplatsen och egenskapersbilder till databasen.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importera befintliga bilderdetaljer till databasen');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimentell funktion. Om den är aktiverad, kommer bilder som laddas upp med mediacenterfunktionen också att kopieras till din Amazon S3-hink och visas från din Amazon S3-bucket-url. När du aktiverar detta första gången kommer du också att vara uppmanas att importera befintliga bilder till din S3-bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront-domän');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Ersätt din standard Amazon S3-domän med din CloudFront-domän');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Rekommenderas att aktiveras. Endast för Windows och Mac OSX, om libcurl inte byggdes med stöd för Schannel eller Secure Transport (de inbyggda SSL-biblioteken som ingår i Windows och Mac OS X), bör du ställa in detta till Nej.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Du har aktiverat Amazon S3-integrationen, så du måste kopiera alla befintliga bilder till din S3-bucket. Bilder visas nu till dina webbplatsbesökare från din Amazon S3-url, så du behöver att kopiera dem först till din S3-bucket, annars kommer de inte att vara synliga för dina webbplatsbesökare.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'När du klickar på den här knappen, vänligen avbryt inte processen och vänta på ett framgångs- eller felmeddelande. Beroende på serverns hastighet kan detta ta ett tag att slutföra.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopiera befintliga bilder till Amazon S3-bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Ofullständig' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Väntar på godkännande' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Fastighetsinformationskarta' );

jr_define( 'HAS_STARS_TITLE', 'Tillåter klassificering av stjärnor?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Tvinga återimport av bilddetaljer till databasen');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Tvinga återuppladdning av bilder till S3-bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Ta bort all Jomres-data vid avinstallation?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'Om inställt på ja, kommer Jomres att radera alla dess databastabeller när den avinstalleras. Detta kommer att radera alla Jomres-data från db och kan inte ångras.');

jr_define( 'TRANSACTION_IDS', 'Transaktions-id');
jr_define( 'PAYMENT_METHOD', 'Betalningsmetod');
jr_define( 'POA_DISPLAY_PRICE', 'POA-pris');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'När fastigheter visas i en lista kommer systemet att försöka hitta ett giltigt pris från konfigurerade tariffer baserat på antingen dagens datum eller om datum användes i en sökning, sedan baserat på dessa datum . Om den inte kan, kommer den att visa POA (Pris på ansökan), vilket betyder att gästen ska kontakta dig för att få ett pris. Om du vill kan du konfigurera ett pris här som kommer att visas istället för POA-texten. skulle vara ett "reservpris" att visa om inget annat pris kan fastställas.');

jr_define( 'PLUGINMANAGER_INSTALL', 'Du måste installera pluginhanteraren innan du kan installera Jomres plugins, skulle du vilja göra det nu?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'Du måste uppdatera pluginhanteraren innan du kan uppdatera några installerade plugins, skulle du vilja göra det nu?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Låt oss göra det här!");

jr_define( 'INCLUDEINFILTERS', 'Inkludera i filter?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Filter för egenskapsfunktioner i Ajax Composite Search kan bli väldigt långa, så du kan ställa in det här alternativet på Nej för att förhindra att den här funktionen visas i egenskapslistan.');

jr_define( 'REVIEW_REMINDER_PT1', "Du har ");
jr_define( 'REVIEW_REMINDER_PT2', "bokning(er) som du inte har lämnat en recension för ännu. Lämna en recension.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bokning som väntar på recensioner");
jr_define( 'REVIEW_NAG', "Tjata gäster för recensioner?");
jr_define( 'REVIEW_NAG_DESC', "När en gäst har blivit utbokad från en bokning kommer systemet att påminna dem om att skriva en recension för sin bokning. Ställ in det här alternativet på Nej för att inaktivera denna påminnelse.");
jr_define( 'HIDDEN_ADDRESS_SETTING', "Dölj adress?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "Om du ställer in det här alternativet till Ja, kommer endast gäster som redan har gjort en bokning på din fastighet att kunna se fastighetens gatuadress. Du kanske vill använda den här inställningen för att dölja fastighetens exakta plats om den till exempel rutinmässigt lämnas utan uppsikt.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimera bilder vid uppladdning?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'När den är aktiverad optimeras bilderna för webben (filstorleken kan vara upp till 75 % mindre). Beroende på uppladdad bildtyp måste din server ha ett eller flera av dessa bibliotek installerade av webbhotellet leverantör: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Databasintegritetskontroll');
jr_define( 'OBSOLETE_FILES_CHECK', 'Kontroll av föråldrade filer');
jr_define( 'DATATABLES_COLVIS', 'Kolumnsynlighet');

jr_define( 'API_TOKEN_LIFETIME', 'API-tokens livstid');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'Hur länge en API-token förblir giltig i sekunder. 86400 = 1 dag, 31536000 = 1 år');


jr_define( 'ENCRYPTION_TITLE', 'Kryptering' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Plats för krypteringsfilen' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Radera aldrig krypteringsfilen** <br/> Användardata lagras krypterad i tabeller för att säkerställa att "data i vila" skyddas säkert, i enlighet med GDPR-rekommendationer. Som standard krypteringsnyckeln lagras i filen "encryption_key.class.php" i roten av din Jomres-installation (vanligtvis /public_html/jomres). Du kan ändra var filen lagras här. Om du ändrar platsen måste du FLYTTA filen, vänta inte på att Jomres ska skapa en ny version annars kommer du inte att kunna avkoda dina gästers uppgifter.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Informationen du sparar här kommer att användas på fakturor som genereras för denna fastighet');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR-policyer' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Här kan du konfigurera hur lång tid efter att en bokning eller faktura har skapats den tas bort från systemet för att säkerställa att du är kompatibel med GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Retentionsperiod för bokning (i dagar)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Hur många dagar efter en boknings avresedatum ska bokningen raderas? När den raderas tas både bokningen och fakturan bort. En typisk lagringsperiod kan vara 365 dagar.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Fakturalagringsperiod (icke-bokning)' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Andra fakturor, såsom provisions- och prenumerationsfakturor, är inte bundna till bokningar. Som ett resultat av detta kommer de inte att raderas när bokningsfakturor och kontrakt raderas. Beroende på ditt land och din egen affärspraxis, du måste konfigurera en annan lagringsperiod. En typisk lagringsperiod kan vara 3653 dagar, vilket är 10 år.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Dina data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Vissa funktioner på denna webbplats behöver lagra information om ditt besök. Detta används endast för att tillhandahålla tjänster till dig, delas aldrig med någon annan och raderas när det inte längre behövs.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'GER DU OSS TILLSTÅND ATT LAGRA DENNA INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'I detalj' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Du måste samtycka till att vi lagrar dessa uppgifter för att du ska kunna göra bokningar på denna webbplats. Oavsett om du samtycker till att din data lagras eller inte, kommer vi att lagra en cookie på din dator för att berätta oss oavsett om du har valt in eller inte. Detta hjälper oss att säkerställa att vi inte ständigt frågar dig om du vill välja in eller inte, och det innehåller ingen personlig identifierbar information (PII). Om du ändrar dig kan besöka sidan "Appbehörigheter" när som helst för att välja in eller bort.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Informationen lagras under olika tidsperioder beroende på typen av ditt besök. Så om du bara tittar dig omkring kommer vi att lagra ungefärlig geografisk platsinformation (landsnivå). Om du gör sökningar, gör sökformulär mer användarvänliga vi lagrar de senaste sakerna du sökte på. Denna information lagras vanligtvis i högst 24 timmar och används endast för att göra ditt besök trevligare.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'När du gör en bokning hos oss lagras av nödvändighet mer information.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'De tekniska detaljerna i bokningsformuläret fångas upp och sparas i maximalt 60 dagar. Detta krävs för att On Request-bokningar ska kunna omvandlas till fullständiga bokningar när en bokning har godkänts och för analys av våra team om det finns ett problem med en bokning. Om du inte var inloggad när du gjorde en bokning kommer vi att skicka ett användarnamn och lösenord via e-post så att du kan se din bokningshistorik och utöva din Rätt att bli glömd (RTBF) om du vill göra det.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data som matas in i bokningsformuläret, till exempel namn, e-postadress, riktig adress lagras i maximalt 365 dagar efter bokningens avresedatum. Denna information lagras i krypterad form i vår databas så att endast behöriga personer kan se den. Om du gör en bokning måste vi enligt lag lagra din PII medan bokningen är giltig. När bokningen har slutförts, antingen för att den har avbrutits eller för att du har checkat ut, kommer du att kunna utöva din RTBF genom att logga in och besöka sidan "Dina data". Fakturainformation för genomförda bokningar kommer fortfarande att lagras säkert i vår databas för att säkerställa att vi följer relevanta skattelagar men du kommer att kunna ta bort alla andra PII efter att bokningen är klar.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'När du samtycker till att din information lagras enligt beskrivningen ovan är vi juridiskt skyldiga att lagra detta samtycke i vår databas. Denna information kommer att inkludera ditt IP-nummer och innehållet i anmälningsformuläret. Vi kommer att behåll detta samtyckesbesked på obestämd tid (detta är ett lagkrav).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'Du har ännu inte berättat för oss om vi kan samla in personligt identifierbar information om dig' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'Du har samtyckt till att vi samlar in nödvändig personlig identifierbar information för att ta emot bokningar' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Du har sagt till oss att inte samla in personligt identifierbar information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'Du har inte gett oss tillåtelse att samla in dina privata uppgifter' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'För att du ska kunna utföra vissa åtgärder på denna webbplats måste vi samla in personligt identifierbar information om dig, men du har inte gett oss tillåtelse att göra det.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Ändra dina behörigheter' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Fortsätt visa egenskaper' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'Appbehörigheter' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Gästdata' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Detta är uppgifterna som lagras åt dig av de olika fastigheterna. Olika hotell kan ha olika register, beroende på vad du angav när du gjorde bokningen.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Du har inga data lagrade på några hotell i detta system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profildata' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Detta är den huvudsakliga datamängden vi har åt dig, skild från de du har delat med olika egenskaper.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Du har inte sparat någon profilinformation' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Här är den personligt identifierbara informationen som vi lagrar på denna webbplats åt dig. Den är konstruerad i JSON-format (JavaScript Object Notation) som är ett lättviktsformat för datautbyte. Det är lätt för människor att läsa och skriv och det är lätt för maskiner att analysera och generera.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymiserad' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Dina data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Genom att acceptera dessa användarvillkor (detta "Avtal") godkänner du att:

<ul>
<li>
Du har rätt att boka hotell via denna webbplats;
</li>
<li>
Du är minst 18 år gammal;
</li>
<li>
Du har den juridiska behörigheten att skapa en bindande rättslig förpliktelse;
</li>
<li>
Du kommer att använda webbplatsen i enlighet med detta avtal;
</li>
<li>
Du kommer endast att använda webbplatsen för att göra legitima reservationer för dig själv eller för en annan person för vilken du är lagligt behörig att agera;
</li>
<li>
Du kommer att informera sådana andra personer om detta Avtal som gäller de reservationer jag har gjort för deras räkning, inklusive alla regler och begränsningar som är tillämpliga på dem;
</li>
<li>
All information som du själv tillhandahåller till webbplatsen är sann, korrekt, aktuell och fullständig; och
</li>
<li>
Du kommer att skydda din kontoinformation och kommer att övervaka och vara helt ansvarig för all användning av ditt konto av dig själv och någon annan än dig.
</li>
</ul>
');
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Säkerhet och transparens är viktigt för oss.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'Vi tar vårt ansvar angående lagring av dina data på största allvar. All personlig identifierbar information (PII) lagras krypterad i vår databas med hjälp av industristandardalgoritmer för att säkerställa att endast auktoriserade användare kan se denna information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Du kan ladda ner alla PII vi lagrar åt dig.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Ladda ner nu' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Rätten att bli glömd (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'Vi anser att du bör kunna <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">radera</a> din < a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personligt identifierbar information </a>om du vill och om det är praktiskt möjligt. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Du är inte registrerad på denna sida. Din allmänna plats (land) och IP-nummer kommer att lagras i maximalt 24 timmar och raderas sedan.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Du är inte registrerad på denna sida och du har valt bort datainsamling. Vi har inte lagrat din PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Du är registrerad på webbplatsen och har inga väntande eller aktiva bokningar. Vi kan anonymisera den mesta informationen vi för närvarande har åt dig. Vill du göra det? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Obs: Detta tar inte bort ditt konto, det anonymiserar helt enkelt våra register så att ditt konto inte kan kopplas till dig som person. Enligt lag måste vi fortsätta att lagra din PII för faktureringsändamål, men vi kommer att göra det. radera alla gästposter.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Du är registrerad på webbplatsen, men du har bokningar utestående och vi kan inte anonymisera dina uppgifter just nu. Dessa uppgifter kommer att sparas i högst ett år efter att bokningen har slutförts, sedan kommer den att raderas, om du inte väljer att ta bort det innan dess.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Eftersom du är fastighetsförvaltare på vår sida kan vi inte erbjuda dig möjligheten att få dina uppgifter raderade automatiskt. Kontakta oss istället direkt så att vi kan tilldela din/dina fastigheter till en annan förvaltare. När vi har gjort det och tagit bort din status som fastighetsförvaltare kan du automatiskt få dina uppgifter raderade.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Glöm mig!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Detta kan inte ångras!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Din data har raderats!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Tyvärr, du kan inte göra en bokning eftersom din e-postadress är ogiltig' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Den här sidan ger dig möjlighet att anonymisera alla gäster som har sin information lagrad i systemet. Detta gör att du kan följa GDPR, men du kan inte redigera någon annan information på den här sidan. För att göra det du måste logga in på frontend som fastighetsförvaltare. Antagandet är att en historisk gäst har kontaktat dig och begärt att du ska tillåta dem att utöva sin rätt att bli bortglömd. Om de inte kan logga in på sidans frontend (kanske en användare skapades inte för dem när de bokade) så kan du använda detta område för att anonymisera dem när du har bekräftat deras identitet.' );
jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymisera gäst' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'RADERAD EGENDOM' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Gästdata anonymiserad' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Kan inte anonymisera' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Vi behöver ditt tillstånd för att lagra din information innan du kan göra en bokning. KLICKA HÄR för att ge oss tillåtelse.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Aktivera GDPR-kompatibel funktionalitet?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'VI REKOMMENDERAR DU INTE ATT INAKTIVERA DEN GDPR-KOMPENLIGA FUNKTIONEN. Jomres har inbyggda funktioner som hjälper dig att säkerställa att Jomres-delen av din webbplats är kompatibel med GDPR. (och om du inaktiverar denna funktion. du bör inte göra det om du är i EU eller om du gör affärer med EU-medborgare) då kommer Jomres automatiskt att anta att varje besökare på sajten har gett sin tillåtelse att aktivera sina personuppgifter. Appbehörighet och Mina data-sidor kommer inte att vara visas och användare kommer inte att uppmanas att ge sitt tillstånd att få uppgifterna samlade.' );


jr_define( 'EMPTY_TEMP_DIR', 'Töm temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Tillfälliga filer raderade' );

jr_define( 'MACHINE_TRANSLATION', 'Maskinöversättningar' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Källspråk' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Det är möjligt att koppla in maskinöversättningsfunktioner. Detta låter dig ange strängar på ett språk och översättningar kan hämtas från fjärrtjänster. Tänk på att inte alla översättningstjänster stöder alla språk. Se dessa tjänster för mer detaljer.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Rumstyper' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Ny rumstyp' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Du kan skapa och redigera rumstyper på den här sidan. Dessa rumstyper kommer endast att vara specifika för den här egenskapen. När du konfigurerar din fastighet behöver du först några rumstyper. Du kan använda antingen de rumstyper som skapats av administratören, eller så kan du lägga till dina egna. När du har en eller flera rumstyper kan du sedan skapa rum av den rumstypen. När du har rum kan du sedan skapa tariffer (priser) för dessa rum eftersom tarifferna är kopplade till rumstyperna .' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Hanterare kan skapa rumstyper?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Använd det här alternativet för att konfigurera om chefer kan skapa sina egna rumstyper i gränssnittet eller inte. Vi rekommenderar starkt att du låter det här alternativet vara inställt på Nej när du först börjar använda Jomres, särskilt om du skapar en portal eftersom du ska skapa alla rumstyper i administratörsområdet Rumstyper som skapats av chefer kommer att visas i sökformulär, men eftersom dessa rumstyper är specifika för enskilda fastigheter kommer endast en egenskap att visas i sökresultaten om den rumstypen väljs under sökningar. Om du vill att endast Super Property Managers ska kunna skapa rumstyper, lämna det här alternativet inställt på Ja och använd Access Control-plugin för att endast supermanagers ska kunna se menyalternativet "Inställningar > Rumstyper". Endast fastigheter som hyrs ut. ut rum i fastigheten och använd Advanced eller Micromanage tariffredigeringslägen kan använda detta alternativ. Villa/lägenhetstyp egenskaper kommer inte att kunna använda det.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Rum/fastighetstyp uppdaterad');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Visa rumstyper i sökalternativ' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Om du väljer att tillåta fastighetsskötare att skapa sina egna rumstyper kan du välja om de skapade rumstyperna ska visas eller inte i sökalternativen där du har valt att visa rumstyper.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Du bör inte återanvända samma e-postadress för varje bokning.<br/>Om du har en unik domän (t.ex. inte en gmail-e-postadress) för ditt företag, använd gästens telefonnummer som deras e-postadress. E-postadressen skulle då se ut ungefär som 123456@mydomain.com<br/>Detta kommer att säkerställa att en ny gäst skapas när du skapar en bokning ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'E-postadress' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Lösenord' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"Vi är glada över att du vill boka hos oss igen. För att kunna hantera alla dina bokningar tillsammans är det nödvändigt att du loggar in så att bokningen kan läggas till ditt konto. Detta även säkerställer att du är behörig att använda den angivna e-postadressen." );
jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'Om du inte känner till ditt lösenord kan vi skicka ett e-postmeddelande om lösenordsåterställning. Följ instruktionerna i det e-postmeddelandet för att återställa ditt lösenord.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Har du glömt ditt lösenord?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymisera ditt namn?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Om du väljer att anonymisera ditt namn när du granskar kommer vi att använda dina initialer istället.');
jr_define('ANONYM', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' sa ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Svara på denna recension');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Skriv ditt svar på denna recension här.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Ditt svar');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Huvudrecension');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Recensionssvar sparat');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Innan du skickar ett recensionssvar måste du läsa följande. Genom att skicka ett svar bekräftar du att du godkänner dessa villkor.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Vilka är våra riktlinjer för ett granskningssvar?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Du svarar på recensionen av din egendom. Du <em>får inte</em> använda ditt svar som en kommersiell tvistprocess. Om du behöver rapportera en recension måste du använda "Rapport Granska"-knappen på listan, och inte denna recensionssvarssida.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'När du har lämnat ditt svar kommer du inte att kunna redigera det.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Tillåten och uppmuntrad');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li>Ett fullständigt svar på recensionen.</li>
    <li>Hövlighet och ärlighet.</li>
    <li>Förnuftiga svar på granskarens problem (kom ihåg att andra kan ha liknande problem men tog inte tillfället i akt att lägga upp en recension).</li>
    <li>Uppmuntra gästen att kontakta dig direkt för att lösa problem.
    <li>Kom alltid ihåg att framtida gäster kommer att se ditt svar. Se till att alltid vara professionell.</li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Inte tillåtet');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li>Kommersiella tvister.</li>
    <li>Frågor till granskaren eller andra.</li>
    <li>Tveksamt språk (inklusive förbannelse).</li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Kördes senast');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schema');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Fakturanummer');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Använder du anpassade fakturanummer?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Du kan konfigurera systemet att använda anpassade fakturanummer. Endast nya fakturor kommer att påverkas.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Startnummer');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numren skapas i följd. Vilket ska det första numret vara?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Vilket format ska fakturanumret ha?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Konfigurera fakturanummerformatet här. Ett format kan se ut som {N}/{D} eller {N}/{Y} där N är det automatiskt genererade numret, D = datum i formatet ÅÅÅÅÅMMDD ( 20190131) eller Y = ÅÅÅÅ (2019). Alla andra alfanumeriska tecken som inte är inneslutna i hängslen lämnas ifred, så ett mönster som ser ut som {N}/{D}-L skulle resultera i ett fakturanummer (21) som ser ut ungefär som 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Tilläggsavgift');
jr_define('_JOMRES_SURCHARGE_DESC', 'En extra avgift som kommer att läggas till rummet vid bokning (beräknat per dag)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritera webbplatsomfattande etiketter?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Anpassad text som sparats i etikettredigerings- eller översättningsfilsträngssidorna betraktas som "webbplatsomfattande" etiketter. Fastighetshanterare kan också anpassa etiketter för varje egenskap med hjälp av etikettredigeringsfunktionen i frontend. Detta möjliggör en fastighetsförvaltare att ha olika texter för sin fastighet, vilket är användbart om fastigheten skiljer sig från alla andra fastigheter på webbplatsen.<br/> När systemet söker efter etiketttexter kommer det att prioritera webbplatsomfattande texter framför fastigheter specifika texter vilket betyder att om det finns en webbplatstäckande text för den etiketten kommer systemet att välja den först. Om du ställer in det här alternativet till Nej kommer systemet att prioritera egenskapsspecifika texter framför webbplatstäckande texter.');
jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Detta kan ändras om vitlistning, så sajten "Världens bästa bokningssida" skulle ändra detta till "WBBS" eller liknande.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Bibliotekpaket');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Leverantörs- och nodmoduler är separata (gratis) paket för Jomres. Du kan installera om paketen på den här sidan.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Ominstallera bibliotekspaket');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Det går inte att ta bort egenskapstypen eftersom den fortfarande används av vissa egenskaper. Du måste ändra dessa egenskaper till en annan egenskapstyp först innan du försöker ta bort den här. Egenskaps-UID:n som förhindrar radering : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Slumpmässiga e-postadresser');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Erbjud slumpmässiga e-postmeddelanden');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Du kan tillåta att systemet genererar slumpmässiga e-postadresser i snabbboknings-popupen i instrumentpanelen. Detta gör att chefer och receptionister kan skapa bokningar för gäster som de inte har e-postadresser till, det är tänkt att fungera som en tidsbesparing för sajter med många receptionister/chefer som förstår att dessa slumpmässiga e-postmeddelanden aldrig kommer att användas för riktig kommunikation, är syftet att komma runt det faktum att i Jomres måste alla gäster ha e-postadresser. Du MÅSTE också tillhandahålla en domän i nästa fält.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Detta bör inte vara en normal e-postdomän, såsom gmail eller outlook. Istället kan det antingen vara din egen domän eller något helt annat, såsom "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Uppladdningsområde');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Ingen användarroll');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Avstängd');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Raderad från CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Om du gillar Jomres, vänligen överväg att lämna en recension på en av dessa webbplatser');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Jag är en trevlig person, jag har redan lämnat en recension');

jr_define('_LICENCE_PROMPT_DEAR', 'Kära ');
jr_define('_LICENCE_EXPIRED', ', din Jomres-licensnyckel har löpt ut, så du saknar dessa fantastiska funktioner och fördelar! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Pluginuppdateringar och nya pluginsläpp');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Endast exklusiva medlemmar support för e-post/biljetter');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Bekymmersfria Jomres Core-uppdateringar');
jr_define('_LICENCE_EXPIRED_POST', 'Anslut till oss för problemfria betalningslösningar och få tillgång till alla plugins och supporttjänster endast för medlemmar.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Få tillgång till alla plugins nu!');

jr_define('_LICENCE_INVALID_KEY', 'Tyvärr verkar du inte använda en giltig Jomres-licensnyckel, så du saknar dessa fantastiska funktioner och fördelar!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> som avsevärt utökar Jomres funktionalitet');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Endast exklusiva medlemmar support för e-post/biljetter');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Bekymmersfria Jomres Core-uppdateringar');
jr_define('_LICENCE_INVALID_POST', 'Anslut till oss för problemfria betalningslösningar och få tillgång till alla plugins och supporttjänster endast för medlemmar.');
jr_define('_LICENCE_INVALID_START', 'Få tillgång till alla plugins nu!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Användare');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Kommission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Prenumerationer');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Fakturor');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Översättningar');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Verktyg');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Rapporter');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Inställningar');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Hjälp');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Totala egenskaper i systemet');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Publicerade egenskaper');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Opublicerade egenskaper');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Godkända egenskaper');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Egenskaper som kräver godkännande');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Totalt antal recensioner ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Opublicerade recensioner ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Granska rapporter ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres systeminformation');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Den här egenskapens egenskapstyp är inte publicerad, den kanske inte visas i sökresultaten. Kontakta webbplatsens administratör för att publicera egenskapstypen, eller ändra egenskapstypen på sidan Redigera egenskap.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Uppdatera din egenskapstyp');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Inkomst (betalda belopp)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Kan inte ta bort egenskapsfunktionen "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" eftersom det används av följande egenskap(er): ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API-test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Den här sidan utför ett grundläggande test av REST API med hjälp av inbyggd funktionalitet i Jomres. Den anropar Jomres REST API för att se om den får ett giltigt svar.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Servern anropade denna URL för att se om svaret är giltigt: ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Sidan fick detta svar: ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Testen verkade gå som förväntat, du kommer förmodligen inte att ha några problem med att ta emot REST API-förfrågningar från resten av Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Testet misslyckades, titta i svarsfältet, om det ser ut som mycket html, eller om du fick ett 404-meddelande, då omdirigerar din server anrop till en annan webbadress. Detta kommer att hindra dig från att ta emot API samtal.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndikeringstest');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Jomres App-server upprätthåller en lista över alla Jomres-webbplatser. Detta tillåter oss att bygga ett syndikeringsnätverk. Detta nätverk är utformat för att låta våra användare visa egenskaper från andra webbplatser på sina egna webbplatser och är användbart, särskilt för nya webbplatser, för att bygga upp en SEO-närvaro på nätet. Målet är att alla Jomres-webbplatser ska arbeta tillsammans och bygga förtroende för nätverket. Det kostar inget för denna tjänst.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Din webbplats är för närvarande inte listad på Jomres App-server, som är en del av syndikeringsnätverket. Denna server kommer att försöka lägga till denna server till nätverket på nästa 6 sida laddas. några sidladdningar, detta ändras inte, kontrollera att anslutningstestet ovan klarar testerna. Notera att localhost-servrar inte kan läggas till nätverket.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Grattis, din server är listad på Jomres App-server.');
jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndikerade egenskaper');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Här är några andra fastigheter tillgängliga från vårt fastighetsnätverk');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndikeringsstatistik');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Grattis, din server är listad på Jomres Syndication Network. Din(a) egendom(ar) kommer snart att börja dyka upp på andra Jomres webbplatser, om de inte redan visas.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Din installation är inte en del av Jomres Syndication Network, därför visas inte din egendom på andra Jomres-baserade webbplatser och du kan inte dra nytta av denna kostnadsfria reklam.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktiva Jomres-installationer: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Det totala antalet Jomres-installationer som delar Jomres Syndication Network-egenskaper på sina webbplatser. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Totala egenskaper: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Detta är antalet tillgängliga egenskaper i JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total egendom visas: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Totalt, alla gånger en Jomres-egendom har länkats till från en annan Jomres-baserad webbplats.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Syndicate Network (JSN) är en gratis funktion tillgänglig för alla Jomres-användare. Syftet är att ge dig gratis reklam för dina fastigheter på andra Jomres-baserade webbplatser. Målet är att hjälpa du kommer snabbt igång med din webbplats och erbjuder gratis annonsering så att dina egenskaper blir igenkända och pålitliga eftersom de är länkade till webbplatser med hög tillförlitlighet och hög relevans som redan är välkända för sökmotorerna. Se denna <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">artikel på vår webbplats</a> och <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">handboken</a> för mer information.');


jr_define('GUEST_PROFILE_INFORMATION', 'Detta är din gästprofildata, fält med denna symbol <i class="fa fa-users" aria-hidden="true"></i>
 är offentligt synliga, medan fält med denna symbol <i class="fa fa-user-secret" aria-hidden="true"></i> endast kan ses av dig, dina värdar och webbplatsadministratörer.<br/> <br/>Värdar kan bara se privat information om du redan har skapat en bokning med dem.<br/><br/>Din information är säkert krypterad och lagrad i vår databas med AES-256-kryptering.');
jr_define('GUEST_PROFILE_OPTIONAL', 'Dessa fält är valfria, men värdar kan använda informationen här för att avgöra om de känner att de kan lita på dig, därför är det bättre att lägga till informationen. Kom ihåg att du ber att få stanna i deras egendom, och de kan tacka nej om de tycker att du inte passar eller att din biografi inte innehåller tillräckligt med information.');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Körkort');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passnummer');
jr_define('GUEST_PROFILE_IBAN', 'IBAN-nummer');
jr_define('GUEST_PROFILE_ABOUT_ME', 'Om mig');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Det här avsnittet "Om mig" är offentligt tillgängligt, så lägg inte in någon privat information. Som sagt, ansträng dig för att lägga ner så mycket som du känner dig bekväm med att dela som dina passioner, vad du göra för en levande, dina hobbyer etc. Du kan använda Markup för att ge det lite jazz. Värdar kommer att vilja känna att de kan lita på dig med sina egenskaper. Se till att din bild är en riktig bild av dig, inte din hund eller bil (ja, killar, vi pratar med er!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Ange eventuella speciella krav du kan ha, såsom behov av enkel åtkomst här. De kommer inte att visas på din offentliga profil men de kommer att läggas till i bokningsinformationen när du gör en bokning.');

jr_define('VIEW_HOST_PROFILE', 'Värdens profil');

jr_define('GUEST_PROFILE_TITLE', 'Gästprofil');
jr_define('GUEST_PROFILE_TITLE_MY', 'Min profil');

jr_define('GUEST_PROFILE_WELCOME', 'Hej, låt mig berätta lite om mig själv.');
jr_define('GUEST_PROFILE_MY_NAME', 'Jag heter ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' och jag kommer från ');
jr_define('GUEST_PROFILE_IN', ' region i ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Min privata information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Vi gör vårt bästa för att validera gäst- och värdinformation men du bör göra din egen due diligence och själv bestämma om denna person är pålitlig eller inte.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Mina egenskaper');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Mina recensioner');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Detta är vad jag sa om den här egenskapen: ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Jag gav den här egenskapen betyget : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Mina recensioner');
jr_define('GUEST_PROFILE_OF_ME', 'Vad andra människor säger om mig');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Vad den här värden sa om mig');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Recensera gäst');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Min recension av denna gäst ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Här är några exempel på gästrecensioner för att få bollen i rullning: <br/>

<ul>
<li>(gästens namn) var ett nöje att vara värd för! De lämnade utrymmet rent och var tysta under hela helgen. De hade smidig kommunikation och jag ser fram emot att få dem att bo hos mig igen!</li>
    <li>Jag älskade att ha (gästens namn) eftersom de kunde behandla platsen med respekt, ha en fantastisk tid och njuta av området. De var fantastiska med att hyra lokalen och jag hoppas att jag får vara värd för dem igen.</li>
    <li>Alla mina husregler respekterades med (gästens namn) och de kunde komma in och gå med lätthet. Jag älskade att ha dem där eftersom de var respektfulla och tysta. Jag rekommenderar dem varmt till andra!</li>
</ul>

');
jr_define('GUEST_PROFILE_UNKNOWN', 'Tyvärr, jag kan inte hitta den användaren. Troligtvis har de inte fyllt i sina kontouppgifter ännu.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Gäst');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Värd');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres är byggt på Bootstrap-ramverket, så du måste använda det på ett tema baserat på Bootstrap. Vi rekommenderar ett baserat på Bootstrap 3. Om du inte har tillgång till ett tema rekommenderar vi att du använder Jomres Leohtian-temat för Wordpress som du kan <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank ">ladda ner härifrån.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Markera som No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Bokning markerad som No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bokningar');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN-statistik för denna användare');

jr_define('BOOKING_NOSHOW_INFO', 'Bokning och No Show-information hämtas från Jomres Syndicate Network vid bokningstillfället. Den är hämtad från anonymiserad data och kan användas av dig för att avgöra om denna gäst är en risk att inte uppfylla bokningen. Om systemet rapporterar att data är okänd, det beror förmodligen på att detta system inte känns igen på nätverket.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Okänd');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define('CMF_CONFIG_KEY', 'Channel Management Framework Key');
jr_define('CMF_CONFIG_KEY_DESC', 'Channel Management Framework-licensnyckeln. Du måste tillhandahålla denna nyckel för att kunna ladda ner Channel Management Framework-plugins.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Din egendom har inte godkänts');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Din egendom har inte blivit godkänd. Om du tror att detta gjordes av misstag kontakta oss. ");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD',"Är det här en barngästtyp?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC',"Sätt detta till Ja om denna gästtyp skulle klassas som en underordnad gästtyp.");

jr_define('_JOMRES_GUESTTYPES_INTRO',"Om du vill debitera per person och natt måste du skapa några gästtyper.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS',"Du kan skapa så många gästtyper du behöver, försök börja med att skapa bara en gästtyp som heter 'Vuxen'. Lämna alla inställningar på sina standardvärden. Därefter, om du till exempel vill ge barn under 12 en rabatt på 50 %, du skulle skapa en ny gästtyp och kalla den 'Barn under 12'. Ställ in alternativet 'Lägg till avvikelse?' på - (negativ) och ställ in 'Varans' till 50. Detta betyder när barn läggs till i en bokning debiteras de 50 % av rumskostnaden för rummet. " );

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES',"Sätt priser manuellt");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS',"Ställ in lägsta antal nätter manuellt");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS',"Ange lägsta antal nätter");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW',"Ange <em>pris per natt</em> efter veckodag");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES',"Ange <em>pris per natt</em> efter datumintervall");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS',"Ange <em>minsta nätter</em> efter datumintervall");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES',"Datumväljarna och prisinmatningen låter dig ställa in ett pris för ett givet datumintervall. Välj ett start- och slutdatum, ange ett pris och klicka på knappen Ställ in pris per natt.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS',"Datumväljarna och inmatningen av minsta antal nätter låter dig ställa in ett värde för minsta antal nätter för ett visst datumintervall. Välj ett start- och slutdatum, ange ett antal för minsta antal nätter och klicka på 'Ange' minsta antal nätter'.");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO',"Använd den här rullgardinsmenyn för att växla mellan att ställa in priser för enskilda datum, till att ställa in lägsta antal nätter för enskilda datum. Du kan använda väljaren <em>efter veckodag</em>, <em>efter datum range</em>väljare eller ställ in priser/minsta nätter genom att manuellt redigera datumen.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT',"Använd den här rullgardinsmenyn för att växla mellan att ställa in priser för enskilda datum, till att ställa in lägsta nätter för enskilda datum. Du kan använda väljaren <em>efter datumintervall</em> eller ställa in priser/minsta nätter med manuell redigering av datumen.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR',"Ange priser eller lägsta nätter");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW',"Ställ in <em>minsta nätter</em> efter veckodag");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO',"Veckodag-fälten låter dig ställa in ett minsta antal nätter för en given veckodag, när du väl klickar på veckodag-knappen kommer alla veckodagar att ställas in på min nätter. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY',"Ställ in priser manuellt/minsta nätter");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES',"Ange priser");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS',"Ange lägsta antal nätter");

jr_define('_JOMRES_MICROMANAGE_PRICE',"Per natt");
jr_define('_JOMRES_MICROMANAGE_MINDAYS',"Min. nätter");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS',"Max nätter");

jr_define('_JOMRES_MICROMANAGE_INTRO',"Här kan du skapa dina tariffer, som är kopplade till de rumstyper som du har i din fastighet. ");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS',"De vanligaste alternativen");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON',"Instruktioner");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS',"Om du vill lägga till olika priser för olika antal gäster <em>kan du skapa fler än flera taxor för varje rumstyp</em> och ha olika min/max gästvärden i dessa tariffer. ");

jr_define('_JOMRES_MICROMANAGE_INFO',"Ge tariffen ett namn, definiera det maximala antalet nätter och det lägsta och högsta antalet gäster som krävs i bokningsformuläret innan tariffen erbjuds.<br/><br/> Använd datumväljarpanelen för att lägga till priser och inställningar för lägsta nätter till ett antal datum, eller redigera inmatningarna direkt. Om du inte vill att tariffen ska erbjudas alls på vissa datum, lämna priset inställt på 0 ( noll ) på dessa datum. <br/><br/> Du kan ha olika miniminätter på olika datum, så om du vill ha längre bokningar under festival-/konferensveckor kan du ställa in antalet minsta nätter för att vara högre under just dessa perioder.<br/ ><br/>Om du debiterar per person per pris (PPPN) kan du aktivera den inställningen i Inställningar > Fastighetskonfiguration > fliken Tariffer och valuta och sedan skapa de gästtyper som du behöver i Inställningar > Gästtyper.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS',"Extra alternativ");

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS',"Detta är ytterligare alternativ som inte är så vanligt förekommande, men som ändå är tillgängliga för dig. <br/><strong>Ignorera PPPN</strong> betyder ignorera per person per natt. Du kan ha flera olika tariffer för samma rumstyp, till exempel en som debiterar per person och natt, och en som inte gör det.<br/><strong>Tillåt helger</strong> Alternativet Tillåt helger ger dig möjlighet att göra en taxa som endast är tillgängligt under vardagar, till exempel om du vill ha en speciell taxa för affärsresenärer. I så fall skulle du ställa in alternativet på Nej och min nätter till 1 och max nätter, högst 5. <br/><strong>Helger endast</strong> Alternativet Endast helger är motsatsen till alternativet Tillåt helger. Vad du anser vara helgdagar kan konfigureras i dina inställningar för fastighetskonfiguration. Detta ger dig möjligheten att definiera ett pris för endast helger som du kanske vill erbjudande för speciella evenemang.<br/><strong>Incheckningsdag i veckan </strong> Det här alternativet ger dig möjligheten att tvinga incheckningen att endast ske på vissa veckodagar och används bäst i kombination med Fastighetskonfiguration > fliken Bokningar > Alternativen för fasta perioder. Majoriteten av användarna kommer att vilja låta det här alternativet vara inställt på Alla.<br/>De sista två alternativen, <strong>Min rum redan valda</strong> och <strong>Max rum redan valda</strong> är mycket specialiserade och användbar för fastigheter med extremt komplicerade tariffer. <em>Om du inte har ett specifikt behov bör du lämna dessa alternativ ifred.</em> Använd dem om du bara vill att denna tariff ska erbjudas när gästen redan har valt N antal rum i bokningsformuläret, så t.ex. du kan ha en grundtaxa där dessa alternativ lämnas som standard, och en andra taxa där alternativet för minsta rum som redan valts är satt till 1, då kommer denna andra tariff att erbjudas i bokningsformuläret när ett rum har valts." );
jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE',"Du kan skapa flera tariffer för samma rumstyp, så att du kan skapa en taxa för min/max dagar på 1 - 7 och en andra taxa där min dagar är 7, max dagar 14, och så vidare. Detta låter dig skapa prisscheman så enkla eller så komplicerade som du behöver. Det låter dig också skapa flera tariffer med olika villkor, så att du kan ha en andra uppsättning tariffer där priset är lägre för Bed & Breakfast, och en annan uppsättning dyrare tariffer för säng, frukost och kvällsmål.");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES',"Ange endast datumväljardagar");
jr_define( '_JOMRES_PROPERTY_HCATEGORIES', 'Egenskapskategorier' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Redigera egenskapskategori' );
jr_define('_JOMRES_STOP_READTHISFIRST1',"Stoppa!");
jr_define('_JOMRES_STOP_READTHISFIRST2',"Tack för att du installerade Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3',"Fastighetsförvaltning utförs på offentliga sidor, inte administratörsområdet.");
jr_define('_JOMRES_STOP_READTHISFIRST4',"Om du inte är bekant med Jomres, besök hjälpsektionen > sidan Komma igång.");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE',"Gå med i Jomres-syndikatet");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC',"När du har ställt in din webbplats och redo att börja ta emot besökare, gå med i Jomres.net-syndikatet och få dina fastigheter listade på andra Jomres-webbplatser.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1',"Du behöver minst ett rum av en av följande typer innan du kan skapa en taxa :");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2',"Gå till Inställningar > Rum och skapa ett rum först, när du har gjort det kommer du att kunna skapa en taxa för den rumstypen.");

jr_define('JOMRES_PLATFORM',"Jomres-plattformen");


jr_define('JOMRES_PLATFORM_CONNECTED',"Ansluten");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC',"Sätt detta till Ja om du redan har kopplat ditt Stripe-konto till Jomres-plattformen.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID',"Stripe Live-kontonummer");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC',"Detta är ditt Stripe-konto-id som finns i din Stripe Dashboard under Inställningar > Kontoinformation och ser ut som acct_xxxxxxxxxx. Du skulle använda det här fältet om du har flera Jomres-installationer och du vill använda samma konto överallt alla sajter och du har redan anslutit till oss. Om du inte har anslutit till Jomres-plattformen räcker det inte att ange dina uppgifter här. Besök istället menyalternativet Get Connected i verktygsfältet, under Hjälp-sektionen. Om du vill för att testa betalningar, ställ in din webbplats från produktion till utveckling på fliken Debugging i Webbplatskonfiguration.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY',"Stripe live hemlig nyckel");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC','Gå till Utvecklare > API-nycklar i din Stripe Dashboard för att hitta dina hemliga nycklar. Dessa används av systemet för att verifiera bokningsdata som returneras från betalningsformuläret är giltiga och att insättningar har betalats innan bokningen sparas .' );

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY',"Stripe test hemlig nyckel");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC',' ' );



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standardtaxeläge');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Sover');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Hur många personer kan den här egenskapen ta emot?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Antalet gäster i ditt dagliga pris');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Pris för extra vuxna ');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Barn');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Per person och natt?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 dagars modifierare');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Rabatt på dagspris om bokningen är för 7 dagar eller mer. Lämna denna inställd på noll om du inte vill att rabatten ska tillämpas.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 dagars modifierare');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Rabatt på dagspris om bokningen är för 30 dagar eller mer. Lämna denna inställd på noll om du inte vill att rabatten ska tillämpas.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Vuxna');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Pris baserat på 2 vuxna');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Bokning rabatterad från ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', ' till ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', ' eftersom bokningen är längre än 7 dagar.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', ' eftersom bokningen är längre än 30 dagar.');

jr_define('JOMRES_CITY_TAX_HEADING', 'Stadsskatter');
jr_define('JOMRES_CITY_TAX_VALUE', 'Stadsskattevärde');
jr_define('JOMRES_CITY_TAX_METHOD', 'Skatteberäkningsmetod');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Enstaka avgift');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Per natt');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per gäst');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Per gäst per natt');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Procentandel av bokningsvärdet');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Städavgift');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Städavgiftskostnad');


jr_define('JOMRES_COMPATABILITY_MODE', 'Tvinga konfigurationsläge för kompatibilitetsegenskaper?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Konfigurationsläge för kompatibilitetsegenskap tvingar flera saker att hända. I äldre versioner av Jomres kunde fastighetsförvaltare välja vilket taxeredigeringsläge de ska använda, och en mängd andra inställningar (av vilka en del kan verka förvirrande) kan ha Att aktivera kompatibilitetskonfiguration tvingar alla nya egenskaper att använda bara standardtaxeredigeringsläget, som modellerar booking.coms egendomskonfigurationsfunktioner med avseende på prissättning, underordnade prissättning etc. Det rekommenderas att för installationer som skapades efter 9.22 .0, detta alternativ bör vara inställt på Ja, men för äldre installationer är det upp till dig att bestämma om nya egenskaper automatiskt ska ställas in på kompatibilitetsläge när de skapas.");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Tar du emot barn under 18 år?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Ställ in det här alternativet till Ja om du tillåter barn. Om ja, i menyn Inställningar kommer du att ha ett alternativ som heter Barnpolicyer där du kan redigera barnrelaterade inställningar.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Barnpolicyer');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'I vilken ålder är barn tillåtna?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Per barn, per natt');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Per barn, per vistelse');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Barnpriser');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Ny underordnad taxa');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Redigera underordnad taxa');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Skapa dina gratis eller betalda barnpriser här. Priserna gäller endast när du har skapat beläggningsnivåer för rumstyper.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Ålder från');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Ålder till');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'per natt eller per vistelse?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Om noll eller inte ställts in kommer barn i denna åldersgrupp att vara gratis.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Åldrar vid incheckning');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Åldrar ');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Beläggningsnivåer');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maximalt antal vuxna');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maximalt antal barn');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maximal beläggning');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Redigera beläggningsnivå för: ');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Redigera beläggningsnivåer för denna rumstyp. Inkludera inte gäster som sover på barnsängar (de läggs till genom att skapa en extra) ');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'För varje ytterligare vuxen, hur mycket ska de debiteras?');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Extra vuxna');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Du har inte konfigurerat underordnade priser ännu.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Ställ in underordnad pris nu');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Du har konfigurerat din egendom för att tillåta barn men du har inte ställt in några beläggningsnivåer för barn ännu.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Ställ in beläggningsnivåer');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Varje gång du redigerar ett rum eller din fastighetstyp bör du kontrollera och uppdatera beläggningsnivåerna för din fastighet/din rum eftersom dessa påverkar antalet gäster som kan accepteras i bokningsformuläret.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Vuxna');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Barn');

jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Adminalternativnivå');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres har många meny- och konfigurationsalternativ som du kan använda när du konfigurerar din webbplats. De allra flesta av dem behöver du aldrig ändra så de är dolda som standard. Du kan välja att visa dessa alternativ genom att ställa in nivån för administratörsalternativ. Grundnivån visar dig precis vad du behöver när du skapar en webbplats för första gången. Gemensam nivå visar de alternativ som oftast ändras, och Allt visar dig alla möjliga inställningar och menyalternativ i administratörsområdet. ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Allt');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Kan vi samla in information om hur du använder Jomres?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Vi skulle vilja samla in information om hur du använder Jomres. Ingen personligt identifierbar information kommer att lagras, användningen kommer att anonymiseras och används endast för att hjälpa oss att förstå hur människor använder Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', ' Japp, det är okej ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', ' Nej, jag håller inte med ');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Kommer du att ta emot bokningar för mer än en fastighet?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres kan användas för webbplatser med en eller flera fastigheter. Om du tar bokningar för bara en fastighet kommer många alternativ att vara överflödiga och potentiellt förvirrande. Du kan ändra den här inställningen senare i Inställningar > Webbplats Konfiguration > Fliken Portalfunktioner.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', ' Bara en egenskap ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' Jag kommer att lista mer än en egenskap ');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Vilken version av Bootstrap-ramverket stöder din mall/tema?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Varje version av Bootstrap-ramverket kräver lite olika html-uppmärkning. Jomres har tre uppsättningar Bootstrap-kompatibla malluppsättningar, en för varje Bootstrap-version. Du måste se till att du konfigurerar den för att använda rätt malluppsättning. Om du inte då utdata som layout, modaler och menyer kommer inte att fungera korrekt. Om du bestämmer dig för att använda en mall/tema senare med en annan Bootstrap-version kan du ändra Bootstrap-malluppsättningen som Jomres ska använda i Admin > Jomres > Inställningar > Fliken Övrigt <br/><br/>Joomla 3 distribueras med Bootstrap 2 som standard, Joomla 4 kommer att använda Bootstrap 5. Jomres Leohtian-mall (Joomla) och tema (Wordpress) använder Bootstrap 3. Olika mallar/teman kan vara distribueras med sina egna Bootstrap-filer så om du är osäker, kontakta din mall/temas utvecklare.");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Ta bort decimaler från utgående priser?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Tillämpa grupp efter fix?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Vissa mysql-installationer kan ha problem med Jomres Queries på sidan Listegenskaper, Lista gäster och Lista fakturor. Om dessa sidor säger att de visar X av Y-resultat men ingenting visas i listan, ställ in det här alternativet till Ja kan lösa problemet. Det gör det inte om du använder delad värd och värdtjänsten inte tillåter din mysql-användare att utfärda kommandot "SET GLOBAL sql_mode=". ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Detta är en kanalegenskap, den kan inte administreras lokalt, besök ramverket för kanalhantering för att hitta egenskapens fjärradministrationslänk');

jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", " Inget bootstrap i temat ");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Länkar till sociala medier');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Sätt in dina kontonamn för sociala medier här, till exempel "jomres", inte hela webbadressen');
jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Kommaseparerad lista över språk som din organisation talar');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url till din organisations logotyp');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres uppdaterad');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Det finns en ny version av Jomres tillgänglig. Du måste uppdatera innan du kan fortsätta använda Jomres eftersom uppdateringar förbättrar funktionaliteten och säkerställer att din installation förblir säker.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Uppdatera Jomres nu');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Pluginuppdateringar');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Det finns nya versioner av plugins tillgängliga i pluginhanteraren. Du måste uppdatera alla plugins innan du kan fortsätta använda Jomres eftersom uppdateringar förbättrar funktionaliteten och säkerställer att din installation förblir säker.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Plugins att uppdatera');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Om din licens inte längre är giltig kan du få en ny licensnyckel från vår webbplats.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Uppdatera plugins');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Hämta ny nyckel');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Spara ny nyckel');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Egenskapstypbilder");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Behöver du hjälp att boka?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Ring vår kundtjänst på numret nedan för att prata med en av våra representanter som hjälper dig med alla dina semesterbehov.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Varför boka hos oss?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"Vi erbjuder de bästa bokningspriserna");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"Vi har de mest prisvärda fastigheterna på marknaden för närvarande.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Inga bokningsavgifter. Spara pengar!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Bra urval av egenskaper");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," egenskaper");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," gästrecensioner");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Vi är alltid här");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Ring eller maila oss när som helst");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Få 24-timmars support före, under och efter din resa");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Sociala medier");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Hitta oss på sociala medier");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Utestående");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Exceptionell");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Fantastiskt");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Superbt");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastiskt");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Mycket bra");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Bra");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Ny notering");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Rabatterade");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Vart vill du åka?');
	jr_define( 'DATA_SOURCES_TITLE', "Uppdatera datakällor" );
	jr_define( 'DATA_SOURCES_TITLE_INFO', "Datakällor uppdaterade. Datakällor används av inmatningsfält för autokomplettering i sökwidgeten och de uppdateras vanligtvis automatiskt, men den här sidan tvingar data att uppdateras manuellt om det behövs." );

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "För att skicka en token-förfrågan, skicka förfrågan till denna url");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Manuset för huvudvyns egenskap");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Egenskaps-uid för egenskapen som ska visas");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Standardmallen är property_details.html, med detta argument kan du definiera en annan mall för egendomsdetaljer att visa.");

	jr_define('JOMRES_UPDATES_TITLE', 'Jomres-uppdateringar');
	jr_define('JOMRES_UPDATES_INFO', "Den här sidan kan ladda ner och installera den senaste versionen av Jomres åt dig. Den använder sin egen funktionalitet och inte den hos värd-CMS, så om ett problem uppstår under värd-CMS:s uppdatering kan du använda den här sidan för att tvinga fram en ominstallation av den senaste versionen av Jomres.");
