<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
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
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'För att automatiskt välja standardvalutakod i rullgardinslistan kan Jomres använda en gratis tjänst som kallas IPinfoDB för att spåra besökarens land, men du måste registrera dig för att få en API nyckel hos <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> först.');
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
jr_define('JOMRES_TAPTOCALL', 'Tap to call');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'New review for ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'A new review has been left for ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'A review has been reported for ');
jr_define('JOMRES_SUPERIOR', 'Superior');
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
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Use weather layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan this code into your phone to get directions to us.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
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
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Centre');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Add images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Room images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Property main image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Clear list');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'If you upload multiple images as the "Main property image" these will be used in the Property List . Slideshow images will be shown on the property details page.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'View your image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Delete image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Upload image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Room types icons');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property feature icons');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Upload all files');
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
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Quick booking');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Date of booking');
jr_define('_JOMRES_HTWO_WEEKS', 'Two weeks');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');
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
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
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
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
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
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
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
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
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
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
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
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Buy Jomres");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Restart your membership now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Start your free trial now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');

