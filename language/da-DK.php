<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Hurtig reservation');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Vis profiler');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Generel konfiguration');
jr_define('_JOMRES_COM_MR_BACK', 'Tilbage');
jr_define('_JOMRES_COM_MR_YES', 'Ja');
jr_define('_JOMRES_COM_MR_NO', 'Nej');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Ny');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Ny ejendom');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Ny gæst');
jr_define('_JOMRES_COM_MR_SAVE', 'Gem');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Navn');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Ankomst');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Afrejse');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Brugernavn');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Adgangsniveau');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Bruger modificeret');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Alle bookinger');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Rediger booking');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Ank/afr');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gæst');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Værelse');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Betaling');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Fornavn');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Efternavn');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Specielle fornødenheder');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Læg venligst mærke til at nogle ekstra fornødenheder koster ekstra.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Annuller booking');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Husnummer eller navn');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Gade');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'By');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postnummer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Tlf.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Kan ikke annullere denne booking da gæsten allerede er booket ind');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depositum ikke betalt');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Bekræft annullering');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Booking annulleret');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dage til ankomst');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Bookingtype');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Sort');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Reception');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Værelsesnavn');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Værelse');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Etage');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Handicapvenligt?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Maks personer');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Værelsestype');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Beskrivelse af værelsestype');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Facilitetsliste for værelse');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depositum betalt');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Indbetal depositum');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total til betaling');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Depositum ref');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Booking');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depositum');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depositum gemt');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Vore værelser');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Ejendom');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Værelsestype');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Rediger gæstedetaljer');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Fornavn');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Efternavn');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Hus');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Gade');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'By');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Postnummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Tlf.');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Foretag dit valg');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Antal dages ophold');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Se værelses og ejendomskonfiguration');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Værelser');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Værelses faciliteter');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Værelsestyper');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Ejendom');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Ejendomsfaciliteter');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Værelse');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Type');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Navn');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Nummer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Etage');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Maks personer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Faciliteter');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Rediger element');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Værelsesfaciliteter');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Facilitetsbeskrivelse');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Værelsesfacilitet tilføjet');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Værelsesfacilitet opdateret');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Værelsestype');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Forkortelse for værelsestype');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Beskrevlse af værelsestype');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Værelsestype tilføjet');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Rediger element');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Navn');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Gade');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'By');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Land');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Postnummer');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tlf.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Websted');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Facilitet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Ejendom opdateret');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Ejendomsfacilitet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Forkortelser for ejendomsfacilitet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Fuld beskrivelse af ejendomsfacilitet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Ejendomsfacilitet opdateret');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tariffer');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tariftitel');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Beskrivelse');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Gyldig fra');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Gyldig til');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Rate pr nat');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min dage');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Maks dage');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min personer');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Maks personer');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Værelsestype');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorer PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Tillad weekender');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Rediger element');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Klon element');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarif slettet');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Rediger tarif');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Booking gemt');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Book en gæst ind');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Book en gæst ud');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'List bookinger');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Opslagstavle');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Gæster');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Ejendomme & værelser');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Kontroller tilgængelighed');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Fornavn');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Efternavn');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Hus nr.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Gade');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'By');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postnummer');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Tlf.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Der er ingen værelser tilgængelige som kan tilfredsstille de angivne parametre');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Tak for din booking hos os. Vi håber du vil nyde dit ophold.<br><br> <b>Husk venligst at dette kun er en forhåndsbookning, og at denne ikke vil blive bekræftet før du modtager dit bekrftelsesbrev fra os.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Book gæst ind ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gæst booket ind ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Book gæst ud ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Tillæg');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tariffer & valuta');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Fil uploads');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Enkeltpersonstillæg');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Vær sikker på at dette er sat til ja hvis du vil opkræve for enkeltpersonstillæg');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Opkrævning af enkeltpersonstillægs');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Ønsket depositum er procentsats?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Er det ønskede depositum en procentdel af den totale bookning? Hvis nej, vil det anvendte depositum være en flad værdi');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Ønsket depositumsværdi');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Pr person, pr nat');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Vælg ja hvis du ønsker at opkræve pr-person-pr-nat. Hvis nej, vil omkostningerne blive beregnet på en pr-værelse-pr-nat basis');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Filstørrelse');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Maks. Billedefilstørrelse i kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Booket');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Reservationsdetaljer');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Du bliver mindet om at en bookning er en juridisk bindendene kontrakt, så hvis du af en eller anden grund skal annullere eller afkorte din bookning så skal du stadig betale det fulde beløb.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Annullerings- og forkortelsespriser</i> Hvis du annullerer din ferie skal annulleringen bekrfrætes skriftligt. Annulleringspriserne er som følger:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Ankomstdato til 14 dage');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Udskriv bekræftelsesbrev');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Fakturaudskrift');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Antal overnatninger: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Pris pr nat: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Total');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Udskriv faktura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Tilføj service til regning');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Servicebeskrivlese');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Serviceværdi');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Andre fakturerede elementer');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Element tilføjet til regning');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Upload billede');
jr_define('_JOMRES_FILE_UPLOAD', 'Fil upload');
jr_define('_JOMRES_COM_A_ODDS', 'Diverse');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minikomponent kald');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Skift til Ja for at se en log over kald af minikomponenter på bunden af siden efter at Jomres har kørt. Dette deaktiverer også den interne omdirigeringsfunktion. Dette er brugbart hvis du prøver at identificere hvilke minikomponenter der udfører visse services.');
jr_define('_JOMRES_FILE_DELETE', 'Slet dette billede');
jr_define('_JOMRES_FILE_DELETED', 'Fil(er) slettet');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Slet');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Kan ikke fjerne dette værelse, der er bookninger på det. Annuller disse booking og forsøg igen.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Værelse slettet');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Slet værelsesfacilitet');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Kunne ikke fjerne denne værelsesfacilitet, den er tildelt til nogle værelser. Fjern faciliteten fra disse værelser og forsøg igen.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Værelsesfacilitet slettet');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Slet ejendomsfacilitet');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Kunne ikke fjerne denne ejendomsfacilitet, den er tildelt til en ejendom. Fjern denne facilitet fra ejendommen og forsøg igen.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Ejendomsfacilitet slettet');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Slet værelsestype');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Værelsestype slettet');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Slet ejendom');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Ejendom slettet');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Du har ikke rettigheder til at slette denne ejendom.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Fuldstørrelse billedebredde');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Klik for et kort');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Ejendomsbeskrivelse');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Indtjekningstider');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Områdeaktiviteter');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Kørselsbeskrivelser');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Lufthavne');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Andre transportmidler');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Politik & betingelser');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Besøgende kan booke online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Sæt dette til Ja for at sikre at besøgende kan booke værelser online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Bookninger er for en afgrænset periode');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Hvis du sætter dette til Ja, vil bookninger blive modtaget for en begrænset periode. Hvis dette er sat til Nej, så vær sikker på at "defineret ankomstdag" ikke er sat til Ja (medmindre du vil tvinge folk til at ankomme på en bestemt dag) ellers vil du ikke få mange links i tilgængelighedskalenderen.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Booking periode: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Booking værelser');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maksimum perioder, f.eks 3x 7 booking perioder = 21 dage');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Er dette en lejlighed/hytte/villa?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Gennemse booking');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Bekræft booking');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Mandag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Tirsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Onsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Torsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Fredag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Lørdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Søndag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Ma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Ti');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'On');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'To');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Fr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Lø');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Sø');
jr_define('_JOMRES_COM_A_AVLCAL', 'Tilgængelighed kalender');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Fontfarve for den aktuelle dato');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Fontfarve for dage der er i månedsvisningen ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Fontfarve for dage der ikke er i månedsvisning');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Cellebaggrundsfarve for dage hvor ejendom/værelse er ledig');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Cellebaggrundsfarve for dage der ikke er i månedsvisning');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Cellebaggrundsfarve for optagede dage');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Cellebaggrundsfarve for provisorisk bookede værelser (bookinger der endnu ikke er betalt depositum for)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Cellebaggrundsfarve for datoer i det forgangne');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Optaget/Ikke tilgængelig');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Tilgængelig for bookninger');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Provisoriske bookninger');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Pre-defineret ankomstdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Kun for sider der tilbyder faste periodebookninger. Vælg dagen hvor ankomster skal starte p.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fast ankomstdag');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Opholdsperiode (dage)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Vis tilgængelighedskalendre?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Sæt dette til ja for at vise tilgængelighedskalendre');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Tilgængelighed');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Klik på en ledig dato for at se bookingformularen.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Blokerede bookninger');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Ny bookningsblokering');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Slet gæst');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gæst slettet');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Kunne ikke slette denne gæst da den endnu har bookninger åbne. Annuller bookningerne og prøv igen.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Ligegyldigt');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Kalender output format');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Kalender input format');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Dette tillader brugeren at skifte inputformat for datoer indeni Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Faste periodebookinger tillader korte pauser');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Længde på kort pause');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publiceret');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Logfil');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Dato');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Bruger (brugernavn)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtrer på dato');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Ankomst afventer');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Ankommer idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Nuværende beboer');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Afrejse idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Afrejse overskredet');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Er ikke ankommet');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Oprettet værelse');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Opdateret værelse');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Slettet værelse');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Oprettet værelsesfacilitet');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Opdateret værelsesfacilitet');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Slettet værelsesfacilitet');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Oprettet ejendom');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Opdateret ejendom');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Slettet ejendom');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Redigeret ejendomsindstillinger');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Publiceret ejendom.');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Oprettet tarif');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Opdateret tarif');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Tilføjet svc. opkrævning');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Booket gæst ind');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Angivet depositum');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Oprettet gæst');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Opdateret gæst');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Booket et værelse');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Oprettet en ekstra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Opdateret en ekstra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Slettet en ekstra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Publiceret ekstra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Angivet blokeret booking.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Slettet blokering af booking.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Ekstra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Beskrivelse');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Navn');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Pris');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Ekstraydelse opdateret');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Rediger element');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Ekstraydelse slettet');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Ekstraydelser');
jr_define('_JOMRES_COM_A_EXTRAS', 'Vis ekstraydelser ved bookingtidspunkt?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Sæt til Ja for at vise de ekstraydelser som du ønsker at tilbyde gæsten');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Valgfrie ekstraydelser.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Startdato for blokering af booking');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Dato for genoptagelse af service');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Blokerede bookinger');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Der skete en fejl i forsget på at booke disse værelser, et eller flere af værelserne er ikke ledige.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Værelser inkluderet i blokeret booking');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Inge blokerede bookninger');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Antal stjerner');
jr_define('_JOMRES_COM_A_RESET', 'Nulstil');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Booking annulleret');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Søg her efter:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Valutasymbol');
jr_define('_JOMRES_CURRENCYFORMAT', 'Valutaformat');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Valotakode');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Klik for mere information');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Begræns forud bookninger?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Sæt dette til Ja hvis du vil brgrænse forud bookninger (brug tekstfeltet til at sætte grænsen i form af dage). Hvis du sætter dette til Ja så vil ankomstdatoen bliver sat til dags dato hvis en bruger forsøger at booke mere end n dage forud');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Grænse for booking antal dage forud:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Moms');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Værelsesmoms');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Moms fast beløb');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Moms procentsats');
jr_define('_JOMRES_COM_A_EUROTAX', 'Moms');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Momsprocentsats');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arkiver alle poster');
jr_define('_JOMRES_FRONT_TARIFFS', 'Vore tariffer');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Tarifnavn');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Tarifbeskrivelse');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Værelsestype');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Gyldig fra');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Gyldig til');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Pr person pr nat');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Pr nat');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Ikke inklusiv weekender');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum dage');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maxksmum dage');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min personer');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Maks personer');
jr_define('_JOMRES_FRONT_PREVIEW', 'Forhåndsvis');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Redigering aktiveret?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Opdateret brugerdefineret tekst.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Rediger sprog');
jr_define('_JOMRES_FRONT_PTYPE', 'Ejendomstype');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'List ejendomstyper');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Rediger ejendomstype');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Ejendomstype');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Ejendomstypebeskrivelse');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Ejendomstype gemt');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Ejendom type(r) slettet');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Reminder om betaling');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Ingen ekstra services der skal tilføjes til regningen');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Depositum');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Fuldt beløb');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Beløb opkrævet ved bookingtidspunkt');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Brug denne indstilling til at afgøre hvad der skal opkræves på bookingtidspunktet. Vælg depositum hvis depositum skal opkræves, eller fuldt beløb hvis det fulde beløb skal opkræves.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Kalendermåneder der skal vises');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Hvor mange måneder skal vises for værelsestilgængelighed?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Payment Gateways');
jr_define('_JOMRES_COM_A_CANCEL', 'Annuller');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Vælg venligst værelset(erne) som du vil fjerne som service, og de relevante datoer. <br>Hvis et værelse ikke har en markering, kan det ikke blive inkluderet i den blokerede bookning indtil udestående bookninger er blevet gennemført/annulleret.<br/> Når du har valgt de passende datoer, så klik på den blå knap "anvend" for at gen-kontrollere tilgængelighed. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Du er blevet logget af på grund af inaktivitet</b> Log venligst på og prøv igen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Grund');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Brug betalingsgateways?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Vælg venligst din betalingsmetode.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway aktiveret?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Modificeret plugin indstilling');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Indsat plugin indstilling');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Rediger kreditkort');
jr_define('_JOMRES_COM_A_EDITICON', 'Rediger ikonstørrelse');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slideshows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Vis link til slideshows?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Vis slideshow inline?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slideshow');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Vis link til tariffer?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popups tilladt?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Upload slideshow billeder');
jr_define('_JOMRES_A_TABS_MISC', 'Diverse');
jr_define('_JOMRES_A', 'Webstedskonfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Brug globale ejendomsfunktioner');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Vælg søge plugin som du ønsker at anvende.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Desværre, din søgning returnerede ikke nogen resultater. Ændre dine søgekriterier og prøv igen.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Er du sikker på at du vil gøre dette?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Book et værelse');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Book denne ejendom');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Vis tariffer inline?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detaljeret information');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Klik for værelser og tilgængelighed');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Vis adresseinformation under dette link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Vis detaljeret ejendomsinfo under dette link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Vis værelser og tilgængelighed under dette link');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Flatrate tariffer');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Gennemsnit');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Vælg tarifmodellen som du vil anvende');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Du har to muligheder for tarifberegningsmetode. Den første, 'flat rate' metoden giver dig mulighed for at tilbyde et antal forskellige tariffer til gæsten og raten for overnatning er den samme hele tiden. Dette er brugbart hvis du vil tilbyde flere forskellige tariffer for den samme dato, f.eks. Seng og morgenmadstarif og S&M og aftensmadstarif. Vælg 'gennemsnit' tarif hvis du ønsker at justere dine priser afhængig af den pågældende dato. Jomres finder alle tarifferne for hver dag i bookingen, lægger dem sammen og returnerer derefter den gennemsnitlige rate over perioden");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Vis afrejsedato input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Sæt dette til Nej hvis du ikke vil vise inputboksen for afrejsedato. Brug kun dette hvis du ved hvad du gør, da afrejsedatoen i bookinger altid vil blive sat til dagen efter ankomstdatoen.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Beskrivelsesgrænse');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Dette begrænser antallet af karakterer der vises i ejendomslisten når den trækkes fra ejendomsbeskrivelsen.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Brugt dato() format stil?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Klik for at publicere');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Klik for at afpublicere');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Brug globale værelsestyper');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'For at tildele et billede til denne værelsestype skal du først uploade dit værelsestypebillede til mappen /images/stories/jomres/rmtypes/. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Input fejl baggrundsfarve');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Standard land i bookingformular');
jr_define('_JOMRES_JAVASCRIPT_', 'Elementer markeret med en rød stjerne skal udfyldes.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Brugere kan registrere deres ejendomme?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Sæt dette til Ja hvis du vil tillade at brugere registrerer deres egne ejendomme uden admin indblanding.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Elementer markeret med en rød stjerne skal udfyldes.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Oprettet ejendom');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Vis kalender fra begyndelsen af året?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Tilgængelighedskalenderen vises fra begyndelsen af det aktuelle år.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Antal værelser tilgængelige');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Tilbage til ejendomsdetaljer');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Værelsestyper');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Tilfældig søgegrænse');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Vis link til google valutakonverter i tariflistning?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Konverter rate til :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Tillad at brugere redigerer ved brug af html editorer?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Brug denne formular til at fortage din booking. Hold musen over "i" billederne for at få mere information om kolonnen. Modificer dine bookingdetaljer såsom ankomst- og afrejsedatoarrival & antal gæster. Vælg derefter de(t) ønskede værelse(r) fra listen over tilgængelige værelser. Klik på et tilgængeligt værelse for at tilføje det til din booking. Når du er færdig, kan du tilføje valgfrie ekstraydelser som du ønsker og angive dine adressedetaljer. Når der er udfyldt nok i formularen vil der fremkomme en send-knap så du kan bekræfte din booking.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Brug denne formular til at foretage din booking. Hold musen over "i" billederne for at få mere information om kolonnen. Modificer dine bookingdetaljer såsom ankomst- og afrejsedatoarrival & antal gæster. Når du er færdig, kan du tilføje valgfrie ekstraydelser som du ønsker og angive dine adressedetaljer. Når der er udfyldt nok i formularen vil der fremkomme en send-knap så du kan bekræfte din booking.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Bookingdetaljer');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Vælg detaljerne for dine bookingønkser');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Tilgængelighed ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Vælg værelserne som du ønsker');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Se her om ejendommen er tilgængelig på dette tidspunkt.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Udvid dit ophold');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Vælg valgfrie ekstraydelser som du vil inkludere i din booking');
jr_define('_JOMRES_COM_PERDAY', 'Pr nat');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Din adresse');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Angiv venligst dine detaljer. Bemærk at alle felter undtagen dit mobilnr. skal udfyldes');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Tilgængelige værelser');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Valgte værelser');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Den tidligst mulige ankomstdato er: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Pr nat:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Ekstrydelser:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Moms:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Rabat:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Samlet total:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gæster');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Klik nu for at tilføje dette værelse til dit udvalg');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Klik nu for at fjerne dette værelse fra dit udvalg');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Gæstetyper');
jr_define('_JOMRES_VARIANCES_TYPE', 'Type');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Kundetype, f.eks. børn i alderen 5-10, eller student ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Bemærkninger');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Bemærkninger som du vil notere om denne kundetype');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maksimum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maksimum antal af denne kundetype som kan vælges i bookingformularen');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Er procentdel');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Tallet der beregnes er en procentdel af grundantallet for værelset. Hvis dette er sat til Nej så bliver tallet du angiver blot lagt til eller trukket fra grundantallet for værelset.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Tilføj variant?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Det beregnede tal bliver lagt til eller trukket fra grundantallet beregnet for værelset. Sæt dette til Nej hvis du vil at dette skal være en rabat fra grundantallet. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Variant');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Størrelsen af varianten');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modificeret kundetyperækkefølge');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Slettet kundetype');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Oprettet kundetype');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Opdateret kundetype');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Opdateret kundetype');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Vis link til værelsesliste på ejendomsdetaljesiden?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Vis <b>kun</b> tilgængelighedskalender/værelsesliste?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Skift dette til Ja for at deaktivere visning af ejendomsheadere og detaljer, så kun værelseslisten/tilgængelighedskalenderen er synlig i ejendomsdetaljesektionen. Kun for brugere der udlejere enkeltværelsesejendomme (f.ke.s lejligheder, hytter, sommerhuse etc).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Ank-afr minimumsinterval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Mimimumsintervallet i bookingformularen mellem ankomstdato og afrejsedato.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Værelsesbillede');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Bookingformular værelsesliste vis værelsesnummer');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Bookingformular værelsesliste vis værelsesnavn');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Bookingformular værelsesliste vis tariftitel');
jr_define('_JOMRES_ORDER', 'Bestil');
jr_define('_JOMRES_REQUIREDFIELDS', 'Påkrævet');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dage inden ankomst');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimum antal dage der skal gå fra "idag", inden ankomstdato.');
jr_define('_JOMRES_DTV', 'Datotype variationer');
jr_define('_JOMRES_DTV_DOW', 'Dag i ugen');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Gæstetype standard');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Standard nummer for den første gæstetype. Hvis du bruger gæstetyper, så er dette standardnummeret som den første gæstetype i bookingformularen bliver sat til.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Kun registrerede brugere kan booke online?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Desværre, du skal være en registreret bruger for at booke online. Klik her for at registrere på dette websted. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Fontfarve på link til aktuelle bookinger');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Weekend kanter');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Værelse er booket');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Blokeret booking');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Afrund depositum op til nærmeste heltal?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Opkræv depositum?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarifopkrævninger gemmes som ugentlige tal?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Du har muligheden for at gemme tarfiopkrævninger som enten daglige eller ugentlige værdier. Hvis du gemmer dem som ugentlige, SKAL du sætte denne indstilling til Ja.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'pr uge');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fast ankomstdato gentaget: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Når fast ankomstdato er valgt, antallet af datoer som kan vises i dato dropdown listen');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Ankomstdato forkert');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Afrejsedato forkert');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Bookingen er for kort. Der skal mindst være dette antal dage mellem ankomst- og afrejsedato:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Dit interval er');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Gæsttypevariant er forkert');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Vælg dine gæsteantal/typer');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Du har for mange i din gruppe til de tilgængelige tariffer');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Du har valgt flere værelse end du har gæster til, klik på et værelsesnavn for at fjerne det fra dit udvalg');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'For mange gæster til de tilgængelige senge');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Du skal vælge flere værelser');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Vælg et værelse');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Fornavn skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Efternavn skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Hus nr/navn skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Gade skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'By skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Region skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Postnummer skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Land skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefonnummer skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Mobilnummer skal udfyldes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Emailadressen skal udfyldes');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Vi har ledige ophold!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Ingen værelser valgt endnu');
jr_define('_JOMRES_BOOKING_NUMBER', 'Booking nr.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok at booke, beskedboksbaggrung');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Dump skabelon var?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Sæt dette for at muliggøre et DHTML dump af skabelonvariabler for hvert FRONTEND skabelonfil når siden vises. Brugbar hvis du vil se om et bestemt element er tilgængelig for brug i en given skabelon.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Tal er procentdel');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Sæt dette til Ja hvis beregningstallet for enkeltpersonstillæg er en procentdel. Hvis Nej så vil det blive tilføjet som et fladt tal.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Tilgængelige værelser/tarifgrænse');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Brug dette input til at begrænse antallet af værelser & tariffer som bliver listet i bookingformularen. Sæt det til nul hvis du ikke vil aktivere begrænsningen. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Intet ledigt på dette tidspunkt!');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Book det nu: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Global redigeringstilstand?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Vær forsigtig med denne funktion. Hvis sat til Ja, så vil redigeringstilstanden påvirke den brugerdefinerede tekst for ALLE indstillinger i systemet for konstanten som du redigerer.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Brug global valuta?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Sæt til Ja for at tvinge alle indstillinger til at bruge den samme valuta (f.kes. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Globalt valutasymbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponent indlejret');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Sæt dette til Ja hvis komponenten er indlemmet så modul og header områder ikke ses');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Kun weekender');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Weekenddage');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Sæt dine weekenddage. Tariffer der tillader eller forbyder weekender vil tage denne indstilling i betragtning når der genereres værelseslister.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Vælg land inden du tilføjer nogen ejendomsinformation');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Gem dine ejendomsændringer inden du uploader et ejendomsbillede');
jr_define('_JOMRES_TARIFFSFROM', 'Priser fra - ');
jr_define('_JOMRES_SEARCH_ALL', 'Alle');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Søg efter land');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Søg efter region');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Søg efter by');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Facilitetssøgning.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Søg');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Angiv et søgeord i boksen og tryk på knappen.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Søgeord: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Angiv venligst dine formodede ankomsts- og afrejsedatoer og tryk på knappen for at finde ejendomme der er ledige på de valgte datoer.');
jr_define('_JOMRES_SEARCH_PTYPES', 'List alle ejendomme efter ejendomstype.');
jr_define('_JOMRES_SEARCH_RTYPES', 'List alle ejendomme efter værelsestype');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Standard');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Ejendomsnavn');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Ejendomsregion');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Ejendomsby');
jr_define('_JOMRES_SORTORDER_STARS', 'Stjerner');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Ejendomsdetaljer - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Bookingformular');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Opdater dine adressedetaljer');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Gen-kontroller værelsestilgængelighed<br/>(Værelsesvalg vil blive nulstillet)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Gen-kontroller tilgængelighed');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modificere dine valgfrie ekstraydelser');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Ændre dit værelsesvalg');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Opdatere dine adressedetaljer');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Desværre, et eller flere adressefelter er forkerte.');
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Room image');
jr_define ('_JOMRES_CURRENCYFORMAT', 'Valutaformat');
jr_define ('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Søgemuligheder');
jr_define ('JOMRES_COM_A_AVAILABLELOGS', 'Log files');
jr_define ('JOMRES_COM_A_MESSAGE', 'Besked');
////////////////////////////////////////////////////// ////////////////////////////////////////////////////// //////////////////////////////// Jomres 2.6.3
jr_define ('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define ('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avanceret');
jr_define ('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define ('JOMRES_COM_A_TARIFFMODE', 'Tariff Configuration Mode');
jr_define ('JOMRES_COM_A_TARIFFMODE_DESC', "<b> Advarsel: Skift mellem forskellige tariftyper kan resultere i tab af data. Se bemærkning herunder angående dette </b>.
<br/> <br/>
Du har tre muligheder for, hvordan du konfigurerer dine takster. <br/>
Normal tilstand: Du vil have en takst for hver værelsestype, der er gyldig i de næste 10 år. <br/>
Mikromanage: Du kan ændre prisen for hver dag for hvert værelse/ejendomstype. <br/>
Avanceret: Den \gamle \" Jomres -metode til håndtering af takster. <br/>
<br/>
De forskellige taksttilstande giver dig mulighed for at vælge den metode til konfiguration af takster, der passer bedst til dig. <br/>
Normal tilstand er den mest forenklede, men det er den letteste at forstå, fordi den krydser referencerum og takster til værelsestype/ejendomstyper og giver dig mulighed for at konfigurere værelser og priser på samme side. <br/>
Mikrostyring giver dig mulighed for at variere satserne dagligt uden at skulle styre mængder af takster, det gøres ved at krydshenvise mange forskellige takster med hinanden. Dette resulterer i, at der oprettes en række takster for dig over en periode, men du kan ikke lægge takster over hinanden. <br/>
Avanceret tilstand lader dig oprette et værelse og knytte det til en værelsestype. Du opretter derefter en takst og forbinder DET med en værelsestype. Ved hjælp af denne metode er det muligt at \"lagre \" takster over hinanden, f.eks. Kan en værelsestype \"Dobbeltseng \" have en takst for bed and breakfast og en anden for seng, morgenmad og aftensmad. Den avancerede metode kræver lidt mere opmærksomhed på detaljer, fordi det er muligt at adskille et værelse eller en tarif fra en værelse/ejendomstype, eller at forkert angive gyldig fra og til datoer, men det giver dig konfigurationsmuligheder, som de andre tilstande ikke tilbyde. <br/>
<br/>
Fordi normale og mikromanage -tilstande kræver et specifikt opsætning af lokaler og takster for at tarifftilstanden skal fungere, kan det være nødvendigt at nulstille nogle data for at gøre de aktuelle tarifkonfigurationer kompatible med den aktuelle tarifredigeringsfunktion. <br/>
<br/>
Normal -> Avanceret. Ingen ændring. Eksisterende takster bevares. <br/>
Normal -> Mikromanage. Alle eksisterende takster fjernes. <br/>
Avanceret -> Normal. Alle eksisterende takster fjernes. <br/>
Avanceret -> Micromanage. Alle eksisterende takster fjernes. <br/>
Mikromanage -> Avanceret. Alle eksisterende krydshenvisninger mellem takster fjernes, men selve taksterne forbliver. <br/>
Mikromanage -> Normal. Alle eksisterende krydshenvisninger og takster fjernes. <br/> ");
jr_define ('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Show rooms list in property details page?');
jr_define ('JOMRES_PROPERTYTYPE', 'Egenskabstype');
jr_define ('JOMRES_MAXPEOPLEINROOM', 'Max people per room');
jr_define ('JOMRES_MAXPEOPLEINBOOKING', 'Max antal personer i booking');
jr_define ('_JOMCOMP_BOOKINGNOTES_ADD', 'Tilføj note');
jr_define ('_JOMCOMP_BOOKINGNOTES_EDIT', 'Rediger note');
jr_define ('_JOMCOMP_BOOKINGNOTES_DELETE', 'Slet note');
jr_define ('_JOMCOMP_BOOKINGNOTES_VIEW', 'Se noter');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Tilføjet ny note');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Redigeret note');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Slettet note');
jr_define ('_JOMCOMP_MYUSER_LISTBOOKINGS', 'List Bookings');
jr_define ('_JOMCOMP_MYUSER_MYBOOKINGS', 'My Bookings');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKING', 'Vis booking');
jr_define ('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'View Favorites');
jr_define ('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Du har ikke tilføjet nogen favoritter endnu!');
jr_define ('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Egenskabstype');
jr_define ('_JOMCOMP_WISEPRICE_TITLE', 'Klog pris');
jr_define ('_JOMCOMP_WISEPRICE_ACTIVE', 'Active');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Dette plugin giver dig mulighed for at aktivere og konfigurere dine værelsepriser dynamisk.');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'De fleste virksomheder vil genberegne værelsespriser baseret på antallet af værelser af en påkrævet type, der er tilgængelige på en given dato. Dette giver dem mulighed for at tilbyde rabatter på en værelsestype, der ikke har travlt i løbet af en given periode periode med det formål at tiltrække forretninger, der ellers ville gå glip af. <br/> Aktivering og konfigurering af dette plugin giver dig mulighed for at tilbyde justerbare priser baseret på antallet af værelser af en valgt type, der er tilgængelige på ejendommen på en given dag. <br /> Dagsgrænsen definerer det antal dage, ankomstdagen skal være inden, inden værelsespriser justeres med denne funktion, så giver procentindstillingerne mulighed for at konfigurere den procentdel af værelser, der kan være tilgængelige, før en given rabat anvendes. ' );
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD', 'Grænseværdi (antal dage mellem ankomstdato og i dag)');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Procentdel af værelser optaget 10%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Procentdel af værelser optaget 25%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Procentdel af værelser optaget 50%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Procentdel af værelser optaget 75%');
jr_define ('_JOMCOMP_WISEPRICE_DISCOUNT', 'Rabat %');
jr_define ('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'er blevet nedsat fra');
jr_define ('_JOMCOMP_WISEPRICE_TO', 'til');
jr_define ('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'Room price not discounted');
jr_define ('JOMRES_COM_A_MAPSKEY', 'Google maps API -nøgle');
jr_define ('JOMRES_COM_A_MAPSKEY_DESC', 'Du kan få en Google maps API-nøgle fra <a href = "https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank"> Google maps </a>. Når du har indtastet din kortnøgle her, viser Jomres kortet på din ejendomsoplysningsside. ');
jr_define ('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define ('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktiv?');
jr_define ('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Indstil dette til Ja, hvis du vil tilbyde tilbud i sidste øjeblik.');
jr_define ('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define ('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Hvis der foretages en reservation, og ankomstdatoen kun er N dage fra reservationsdatoen, kan rabatten anvendes');
jr_define ('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Rabat');
jr_define ('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'I procent');
jr_define ('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Der er anvendt rabat på denne reservation!');
jr_define ('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Udgifterne til opholdet er reduceret med');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Denne ejendom tilbyder en sidste minuts rabat på');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', 'procent hvis du bestiller for at ankomme før');
jr_define ('_JOMCOMP_LASTMINUTE_ORMORE', 'procent eller mere, hvis du bestiller for at ankomme før');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Book nu for at få mest muligt ud af dette tilbud!');
jr_define ('JOMRES_COM_A_VERBOSETARIFFINTO', 'Oversigtfuld tarifinformation');
jr_define ('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Indstil dette til Ja for at vise mere detaljerede tarifoplysninger i ejendomsoplysningerne/takst -popup');
jr_define ('JOMRES_COM_A_MINIMALCONFIG', 'Minimer konfigurationsindstillinger');
jr_define ('_JOMCOMP_AMEND', 'Ændre booking - ejendomsvalg');
jr_define ('_JOMCOMP_AMEND_SELECTPROPERTY', 'Select Property');
jr_define ('_JOMCOMP_AMEND_HEADER', 'Original Contract:');
jr_define ('_JOMCOMP_AMEND_DEPOSITPAID', 'Deposit Paid');
jr_define ('_JOMCOMP_AMEND_DEPOSITDUE', 'Deposit Not Paid');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Tilsidesæt alt');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define ('_JRPORTAL_CANCEL', 'Annuller');
jr_define ('_JRPORTAL_CPANEL', 'Kontrolpanel');
jr_define ('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Standard Commission rate');
jr_define ('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Vælg den standardprovisionssats, der skal anvendes på en ejendom i tilfælde af, at der ikke på anden måde er fastsat en anden provision.');
jr_define ('_JRPORTAL_CPANEL_LISTCRATES', 'List Commission Rates');
jr_define ('_JRPORTAL_CPANEL_PATETITLE', 'Commission Rates');
jr_define ('_JRPORTAL_CRATE_TITLE', 'Titel');
jr_define ('_JRPORTAL_CRATE_TYPE', 'Type');
jr_define ('_JRPORTAL_CRATE_VALUE', 'Comissions rate');
jr_define ('_JRPORTAL_CRATE_CURRENCYCODE', 'Valutakode');
jr_define ('_JRPORTAL_CPANEL_LISTPROPERTIES', 'List Properties');
jr_define ('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Ejendomsnavn');
jr_define ('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Ejendomsadresse');
jr_define ('_JRPORTAL_PROPERTIES_LEGEND', 'Egenskaber, hvis baggrundsfarve er rød, har endnu ikke haft en provision på dem.');
jr_define ('_JRPORTAL_STATS_PATETITLE', 'Statistik');
jr_define ('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Commission Rate');
jr_define ('_JRPORTAL_CPANEL_LISTBOOKINGS', 'List bookings');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Ejendoms -id');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Faktura -id');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Booking total');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date archived');
jr_define ('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Beskrivelse');
jr_define ('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Du kan få egenskabstypespecifikke sprogfiler ved at indstille beskrivelsen til navnet på en undermappe, f.eks.\'yachtbrokerage\' og kopiere en sprogfil til denne undermappe. Du kan derefter ændre denne sprogfil for denne ejendom skriv, så rum bliver til f.eks. dvd\'er osv. ');
jr_define ('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Du kan ikke slette denne ejendom, da den er den eneste ejendom, du har adgang til. Hvis du vil deaktivere den, skal du bruge funktionen til ikke at offentliggøre værktøjslinjen.');
// Jomres v3.0.6
// Jomres v3.1
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Overnatning i alt');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'night (s) at');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'pr. værelse');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Forbedr dit ophold i alt');
jr_define ('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Price Summary');
jr_define ('_JOMRES_CONFIRMATION_ALERT', 'Læs venligst og accepter');
jr_define ('_JOMRES_CONFIRMATION_HEADER', 'Et resumé af din reservation er vist nedenfor. <br /> For at foretage ændringer, skal du klikke på knappen Rediger reservation.');
jr_define ('_JOMRES_CONFIRMATION_AMENDTEXT', 'Hvis du har brug for at ændre nogen af ​​ovenstående oplysninger, så klik her');
jr_define ('_JOMRES_CONFIRMATION_AMEND', 'Ret Reservation');
jr_define ('_JOMRES_CONFIRMATION_SPECIALS', 'Angiv eventuelle særlige anmodninger i feltet nedenfor.');
jr_define ('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Jeg bekræfter, at ovenstående oplysninger er korrekte og accepterer');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'pr. person pr. nat');
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'of');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Prev');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Next');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'End');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Results');
}
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Bemærk, at dette ikke er en reservationsformular, i stedet sender du en e -mail. <br/> Indtast venligst den meddelelse, du gerne vil sende til');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontakt hotel');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Ejendomsforespørgsel fra');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Tak for din henvendelse, din besked er blevet sendt til ejendommens kontakt -e -mailadresse og kopieret til din egen adresse for dine registreringer. De vil svare dig hurtigst muligt med deres svar . ');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'vedrørende');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Forespørgsel');
jr_define ('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Vælg din ønskede indkvartering fra listen til højre');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min. værelser allerede valgt');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum antal værelser, der allerede er valgt ved booking, før der kan tilbydes kombinationspris/rumtype. Giver dig mulighed for at have rabatter, når der allerede er valgt mere end N værelser.');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max allerede valgte værelser');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maksimalt antal værelser, der allerede er valgt ved booking før kombination af takster/værelser, tilbydes ikke længere. Giver dig mulighed for at stoppe med at tilbyde denne værelsestype/tarifkombination, når N værelser er blevet valgt i reservationsformularen.');
jr_define ('_JOMRES_COM_SPS_EDITROOM_DESC', 'Bemærk, at enkeltpersoners komplimenter, der er angivet her, ikke vil blive brugt, hvis Single Person Suppliments er indstillet til Ja i Generel konfiguration. Indstillingerne her er et alternativ til at have faste satser for enkeltpersoner, ikke en tilføjelse til lejligheden sats SPS. ');
jr_define ('_JOMRES_AVLCAL_NOBOOKINGS', 'Tilgængelig');
jr_define ('_JOMRES_AVLCAL_QUARTER', 'Nogle bookinger');
jr_define ('_JOMRES_AVLCAL_HALF', 'Halvt booket');
jr_define ('_JOMRES_AVLCAL_THREEQUARTER', 'Mest booket');
jr_define ('_JOMRES_AVLCAL_FULLYBOOKED', 'Fuldt booket');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per uge');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per day');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per booking');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per person per booking');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per person per day');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per person per week');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per dage X valgt værelse');
jr_define ('_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry & rebuild cache');
jr_define ('_JOMRES_REGISTRYREBUILD_NOTES', "Normalt genopbygges Jomres -plugin -registreringsdatabasen automatisk, hver gang du ser plugin -manageren og tilføjer eller fjerner et plugin, men det er muligt, at du af en eller anden grund ikke kan bruge disse funktioner, derfor kan du bruge denne funktion til at genopbygge registreringsdatabasen manuelt. Hvis du har adgang til Plugin Manager og Upgrades-funktionen, er det usandsynligt, at du skal bruge denne funktion. Du skal genopbygge plugin-registreringsdatabasen, hver gang du tilføjer en ny mini-komponent og ikke brugte Plugin Manager for at tilføje det. ");
jr_define ('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registrering genopbygget med succes');
jr_define ('_JOMRES_REGISTRYREBUILD_FAILURE', 'Der opstod en fejl med at genopbygge registreringsdatabasen for minikomponenter. Du bør kontrollere din Jomres -fejllog for at se, om der er en registrering af, hvad der udløste fejlen.');
jr_define ('_JOMRES_SEARCH_PRICERANGES', 'Price');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Du har ikke foretaget nogen bookinger endnu!');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Rediger din ejendomstype');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Vælg din ejendomstype');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Din forespørgsel ...');
jr_define ('_JOMRES_COM_A_LISTLIMIT', 'Property List limit');
jr_define ('_JOMRES_COM_A_LISTLIMIT_DESC', 'Antallet af ejendomme, der skal vises på en side efter en søgning');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integreret søgefunktion');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Den integrerede Jomres -søgefunktion giver dine brugere mulighed for at søge gennem Jomres -ejendomme i henhold til et sæt funktioner. Hvis du allerede har brugt søgefunktionerne i Jomres i Joomla, kender du disse indstillinger. <br/ > Denne funktion giver os mulighed for at tilbyde søgehåndtering inden for Jomres for de brugere, der ikke ønsker at bruge Joomla -søgemoduler, eller for andre CMS -brugere, hvis CMS ikke har det egne Jomres -søgemoduler. <br/> Husk bare, at hvis du vælger at søge efter noget via et link (dvs. ikke en dropdown), så vil andre søgemuligheder ikke blive implementeret, kun det element, der svarer til det link, du klikker på. <br/> Bemærk, at som standard er layoutet for denne integrerede søgning ikke særlig smukt. Det er fordi skabelonfilen, der udfører layoutet, skal indeholde alle mulige muligheder, hvoraf nogle er inkompatible. ');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Vil du aktivere denne funktion?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Hvis denne funktion er aktiveret, betyder ethvert opkald til Jomres, der viser ejendomslisten, at søgemulighederne også vises.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Brug kolonner');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Enhver søgemulighed, som du har defineret som link type (hvor relevant) vil blive vist som kolonner (IE br sat i slutningen af ​​linket)');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Søg i region ved at vælge rullemenu');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Tilbyd en rullemenu til søgning for at filtrere gennem lande/regioner/byer. Hvis du vil bruge denne funktion, er det bedst at ikke bruge region-/bysøgningerne herunder.");
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Søg efter ejendomsnavn');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Vis søgning efter ejendomsnavn input.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Indstil dette til nej for at vise listen som links');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'By/region');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Show the Region input');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Indstil dette til nej for at vise listen som links');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Søg efter ejendomstype');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Vis søgningen efter egenskabstype input');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Indstil dette til nej for at vise listen som links');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Søg efter værelsestype');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Vis søgningen efter rumtype input');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Indstil dette til nej for at vise listen som links');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Vis søgningen efter funktionsinput');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Indstil dette til nej for at vise listen som værktøjstipbilleder og afkrydsningsfelter');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Søg efter beskrivelse');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Vis søgningen efter beskrivelsesinput');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Søg efter tilgængelighed');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Vis søgningen efter tilgængelighedsinput');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Søg efter prisklasser');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Vis søgning efter prisklasser input');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Prisintervaller');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres vil se på alle værdierne i taksterne og derefter udarbejde en række prisklasser baseret på den værdi, du angiver her.');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Som standard, hvis en ejendom ikke er valgt i Jomres, udfører den en søgning. Hvis denne søgning ikke blev udløst af et søgemodul, frembragte denne søgning tilfældige resultater (bevidst). Denne mulighed giver dig mulighed for at begrænse antallet af returneringer i den tilfældige søgning. ');
jr_define ('_JOMRES_COM_A_CRON_TITLE', 'Cron jobindstillinger og logfiler');
jr_define ('_JOMRES_COM_A_CRON_DESC', 'Pseudocron jobinformation. Pseudocron -funktionaliteten er nødvendig ved fakturering og kommissionshåndtering.');
jr_define ('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. Hvis du vil køre et individuelt cron -job, skal du bruge nedenstående links. Bemærk, at cron -jobene ikke producerer noget output, så du ikke vil se nogen oplysninger på siden. Se i stedet jobbet log nedenfor. ');

jr_define ('_JOMRES_COM_A_CRON_METHOD', 'Metode');
jr_define ('_JOMRES_COM_A_CRON_METHOD_DESC', 'Hvis du ikke har adgang til cron -job, skal du indstille dette til Minicomponent, ellers skal du oprette et cron -job og fortælle det om at køre <br /> <i> curl -s' .JOMRES_SITEPAGE_URL_AJAX. '& task = = '. get_showtime (' tmplcomponent ').' & no_html = 1>/dev/null </i> ');
jr_define ('_JOMRES_COM_A_CRON_LOGGING', 'Vis logning i browseren');
jr_define ('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Fungerer kun, hvis metoden er indstillet til Minicomponent.');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Indstil dette til Ja for at logning skal aktiveres. Resultaterne af logfilerne vil blive vist nedenfor.');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Oversigtlig logning');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Masser af logoutput');
jr_define ('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Skabelonredigering');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Brugerdefinerede felter');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Her kan du definere enkle tilpassede felter, der vil blive vist i reservationsformularen.');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Feltnavn (ingen mellemrum)');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Standardværdi');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Beskrivelse');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Påkrævet');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maksimal mængde');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Hvis maksimal mængde er indstillet til større end 1, tilbydes gæsterne en rullemenu for at vælge mængden af ​​de ekstra, de har brug for.');
jr_define ('_JRPORTAL_TAXRATES_TITLE', 'Skattesatser');
jr_define ('_JRPORTAL_TAXRATES_CODE', 'Tax code');
jr_define ('_JRPORTAL_TAXRATES_DESCRIPTION', 'Rate description');
jr_define ('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Du kan ikke slette denne skattesats.');
jr_define ('_JRPORTAL_TAXRATES_RATE', 'Rate');
jr_define ('_JRPORTAL_INVOICES_TITLE', 'Fakturaer');
jr_define ('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Ubetalt');
jr_define ('_JRPORTAL_INVOICES_STATUS_PAID', 'Betalt');
jr_define ('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Annulleret');
jr_define ('_JRPORTAL_INVOICES_STATUS_PENDING', 'Ventende');
jr_define ('_JRPORTAL_INVOICES_USER', 'Bruger');
jr_define ('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define ('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define ('_JRPORTAL_INVOICES_DUE', 'Forfaldet');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonnement');
jr_define ('_JRPORTAL_INVOICES_INITTOTAL', 'Outstanding total');
jr_define ('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Tilbagevendende frekvens');
jr_define ('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Tilbagevendende dag i måneden');
jr_define ('_JRPORTAL_INVOICES_CURRENCYCODE', 'Valutakode');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS', 'Linjeposter');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Navn');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Beskrivelse');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Initial Price');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Initial Quantity');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Initial Rabat');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Initial Total');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Tax code');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Tax description');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Tax rate');
jr_define ('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Tilsidesæt standard Jomres gateway -indstillinger?');
jr_define ('_JRPORTAL_INVOICES_SHOWINVOICES', 'Vis mine fakturaer');
jr_define ('_JRPORTAL_COUPONS_TITLE', 'Rabatkuponer');
jr_define ('_JRPORTAL_COUPONS_DESC', 'Rabatkoder kan genereres og videregives til gæster som et incitament til at foretage reservationer. Gyldig fra og til datoer refererer til de datoer, som en reservation kan foretages på, ikke datoerne for selve reservationen.') ;
jr_define ('_JRPORTAL_COUPONS_CODE', 'Kuponkode');
jr_define ('_JRPORTAL_COUPONS_VALIDFROM', 'Gyldig fra');
jr_define ('_JRPORTAL_COUPONS_VALIDTO', 'Gyldig til');
jr_define ('_JRPORTAL_COUPONS_AMOUNT', 'Rabatbeløb');
jr_define ('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Rabat er en procentdel');
jr_define ('_JRPORTAL_COUPONS_ROOMONLY', 'Kun værelse');
jr_define ('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Hvis du har en kuponkode, skal du indtaste den i feltet og klikke på linket "Gem kupon" for at gemme kuponoplysningerne i din reservation.');
jr_define ('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Gem kupon');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon gemt mod booking');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Kuponnummer ikke fundet');
jr_define ('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Kupon rabatværdi');
jr_define ('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Booking nedsat. Kuponkode/rabatværdi/kuponindstillinger:');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES', 'Vælg sprog');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Vælg de sprogindstillinger, der skal vises i rullemenuen til sprogskifte.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Vis rullemenuen til sprogvalg?');
/*
* @ignorere
*/
jr_define ('_JRPORTAL_NEWUSER_DEAR', 'Dear');
jr_define ('_JRPORTAL_NEWUSER_THANKYOU', 'Tak fordi du registrerede');
jr_define ('_JRPORTAL_NEWUSER_USERNAME', 'Dit brugernavn er:');
jr_define ('_JRPORTAL_NEWUSER_PASSWORD', 'Din adgangskode er:');
jr_define ('_JRPORTAL_NEWUSER_LOG_IN', 'Log venligst ind for at se dine bookinger');
jr_define ('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon gemt');
jr_define ('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon slettet');
// Ikke brugt endnu
jr_define ('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Brugernavn');
jr_define ('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Password');
jr_define ('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Notifikations mobilnummer');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Brug venligst formatet 'Landekode, mobilnummer'. For eksempel vil et britisk baseret mobilnummer være noget i stil med '447979123456'. Lad dette stå tomt, hvis du ikke vil have beskeder sendt til din mobil telefon.");
jr_define ('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b> Du kan naturligvis ikke bruge/teste denne gateway fra localhost, du skal gøre det på en 'live' server. </b>
<br/>
<br/>
For at bruge Clickatell-gatewayen har du brug for en Clickatell-konto og mindst én registreret forbindelse (API-subproduktforekomst) mellem din applikation og vores gateway. Hver forbindelse
metoden er kendt som et delprodukt. Sådan gør du: <br/>
<br/>
<b> Trin 1 - registrer dig for en Clickatell -konto </b> <br/>
Hvis du ikke allerede har en Clickatell -konto, skal du registrere dig for en som vist nedenfor. Ellers fortsæt til trin 2. <br/>
* Gå til http://www.clickatell.com/products/sms_gateway.php, og vælg det relevante API -underprodukt (forbindelsesmetode), du ønsker at bruge (Clickatell Central (API)) <br/>
* Klik på registreringshyperlinket. <br/>
* Udfyld registreringsformularen. <br/>
Når du har indsendt formularen, bliver du automatisk logget ind på din nye konto og ført til en side, hvor du kan tilføje din valgte API -forbindelse. <br/>
<b> Trin 2 - tilføj en registreret API -forbindelse (delprodukt) </b> <br/>
Hvis du ikke allerede er logget ind på din konto, skal du gøre det på http://www.clickatell.com/login.php <br/>
* Vælg \"Administrer mine produkter \" i topmenuen. <br/>
* Vælg den API -forbindelsestype, du ønsker at bruge (HTTP API) i rullemenuen ('Tilføj forbindelse'). <br/>
* Udfyld formularen. Sørg for, at du indtaster den låste IP (denne servers IP), indstil Tilbagekald til HTTP POST. Du skal indstille IP -tilbagekald til ".get_showtime ('live_site')."/index.php? Option = com_jomres & task = sms_clickatell_callback og et bruger -id og kodeord. <br/>
Hvis du registrerer mere end én API -forbindelse, skal det beskrivelsesnavn, du indtaster for hver, være unikt - du kan ikke have flere API'er med samme navn. <br/>
Efter at du har indsendt formularen, vises dine godkendelsesoplysninger, inklusive hver forbindelses unikke API -id (api_id). Disse godkendelsesoplysninger er påkrævede, når du opretter forbindelse til Clickatell -gatewayen for at sende en besked. <br/>
<br/>
Brug dit bruger -id, din adgangskode og api_id til at udfylde felterne ovenfor. <br/>
<br/>
");
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Booking formular room list show disabled access');
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Booking formular room list show max people');
jr_define ('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Bemærk venligst, at de angivne værelsespriser er skøn, og den fulde pris for reservationen vil ikke blive beregnet, før du har tilføjet et eller flere værelser til dit valg.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonnementspakker');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Navn');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Beskrivelse');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Published');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Fuldt beløb');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Property limit');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abonner');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_USE', 'Brug abonnementshåndteringsfunktionalitet');
jr_define ('_JOMRES_COM_NEWUSER', 'Opret ny bruger ved booking');
jr_define ('_JOMRES_COM_NEWUSER_DESC', 'Opret ny brugerkonto ved uregistreret brugerbooking.');
jr_define ('_JOMRES_CLICKTOREGISTER', 'Klik her for at registrere din ejendom');
jr_define ('_JRPORTAL_NEWUSER_SUBJECT', 'Nye brugeroplysninger');
jr_define ('_JOMRES_LATLONG_DESC', 'Brug musen til at flytte rundt på kortet, og træk markøren til placeringen af ​​din ejendom for at indstille breddegrad og længdegrad.');
jr_define ('_JOMRES_CONTROLPANEL', 'Kontrolpanel');
// Jomres v4.2
jr_define ('_JOMRES_MANAGER_SHOWINVOICE', 'Vis faktura');
jr_define ('_JOMRES_MANAGER_SHOWINVOICES', 'Vis fakturaer');
jr_define ('_JOMRES_USER_LISTMYPROPERTY', 'Føj min ejendom til dette websted');
jr_define ('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo:');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Beklager, men det pakke -id genkendes ikke.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Beklager, du er allerede abonneret på en gratis pakke, du kan ikke abonnere på den pakke igen.');
jr_define ('_JOMRES_COM_YOURBUSINESS', 'Your business details');
jr_define ('_JOMRES_COM_YOURBUSINESS_NAME', 'virksomhedsnavn');
jr_define ('_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT number');
jr_define ('_JOMRES_COM_YOURBUSINESSADDRESS', 'Bygningsnummer');
jr_define ('_JOMRES_INVOICE_NUMBER', 'Faktura nr.');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Vælg de datoer, du vil anvende den sorte reservation på. Når du har valgt de relevante datoer, skal du klikke på knappen "Anvend" for at tjekke tilgængeligheden igen. <br/>
<br/>
Hvis ejendommen har en eller flere bookinger i den valgte periode, vil du ikke være i stand til at reservere den før de andre bookinger/sorte bookinger er blevet annulleret/reserveret. ');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Beklager, du kan ikke sortbestille denne ejendom for disse datoer.');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'You can blackbook this property for these dates.');
jr_define ('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Din ejendom er konfigureret til at opkræve gebyrer pr. person pr. nat, men du har ikke oprettet eller offentliggjort nogen gæstetyper. Opret og udgiv en eller flere gæstetyper.');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Du har ikke nogen tariffer konfigureret endnu, du vil ikke være i stand til at foretage reservationer for din ejendom.');
jr_define ('_JOMRES_EDITINGMODE_ON', 'Label Editing mode on');
jr_define ('_JOMRES_EDITINGMODE_OFF', 'Label Editing mode off');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Charge variable depositions?');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Med variable indbetalinger kan du definere, om du vil opkræve det fulde beløb, hvis bookingens ankomstdato er inden for N dage fra "i dag". Indstil denne mulighed til Ja for at aktivere funktionen , og indtast antallet af dage herunder, så hvis ankomstdagen for eksempel er inden for 60 dage, vil det opkrævede depositum være det fulde beløb, ellers vil beløbet blive baseret på de indbetalingsmuligheder, der er konfigureret ovenfor. ');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Antallet af dage, inden for hvilket hele beløbet vil blive opkrævet som depositum.');
jr_define ('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Bekræftelses -e -mail er blevet sendt. Du kan lukke dette vindue nu.');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontakt agent');
jr_define ('_JOMRES_INVOICE_MARKASPAID', 'Mark faktura som betalt');
jr_define ('_JOMRES_INVOICE_MARKEDASPAID', 'Faktura markeret som betalt');
jr_define ('_JOMRES_APIKEY_REMAKE', 'Lav ny API -nøgle');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Er dette en enkelt ejendomsinstallation?');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Hvis denne valgmulighed er indstillet til Ja, er Jomres frontend-visning til ikke-autoriserede brugere meget forenklet. Standardopkald til Jomres fra en menuindstilling, i stedet for at få en liste over egenskaber, tager bare gæsten til reservationsformularen for den første ejendom i systemet. Ejendomsadministratorer vil heller ikke se knappen Forhåndsvisning af ejendomsdetaljer eller knappen Tilføj ny ejendom. Ideel hvis du kun vil liste en ejendom og foretage reservationer for den. <br /> ');
jr_define ('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance payment');
jr_define ('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Bemærk, du bruger redigeringstilstand med den globale redigeringsfunktion aktiveret. Dette er fint, hvis du forstår, hvad global redigeringstilstand betyder, men hvis du ikke gør det, kan du forårsage problemer selv. Hvis du er usikker. hvis du skulle bruge Jomres på denne måde, kan du se <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank "> den manuelle side i redigeringstilstand </a> for flere oplysninger om dette emne. ');
jr_define ('_JOMRES_SUPPORTKEY', 'Support key');
jr_define ('_JOMRES_SUPPORTKEY_DESC', 'Dit supportlicensnøglenummer (også kendt som dit licensnummer). Du skal bruge en opdateret licens for at kunne downloade plugins til Jomres.');
jr_define ('_JOMRES_PERSONAL_DISCOUNT', 'Personlig rabat');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Begræns ejendomsregistrering til ét land?');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Du kan sikre, at ejendomsregistreringer er begrænset til kun et land ved at indstille denne mulighed til Ja og indstille landet i følgende mulighed.');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Egenskaber er placeret i dette land:');
jr_define ('_JOMRES_JQUERYTHEME', 'Jquery tema');
jr_define ('_JOMRES_JQUERYTHEME_DESC', 'Vælg et jquery -tema, der skal bruges til fanerne med egenskabsoplysninger.');
jr_define ('_JOMRES_PROPERTYNOTOUBLISHED', 'Vi beklager, men denne ejendom er i øjeblikket ikke tilgængelig.');
jr_define ('_JOMRES_REVIEWS', 'Reviews');
jr_define ('_JOMRES_REVIEWS_TITLE', 'Review title');
jr_define ('_JOMRES_REVIEWS_DATE', 'indsendt den');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS', 'Der er endnu ingen anmeldelser af denne ejendom.');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Vil du være den første, der anmelder denne ejendom?');
jr_define ('_JOMRES_REVIEWS_IAGREE', 'Jeg er enig med denne anmeldelse');
jr_define ('_JOMRES_REVIEWS_IDISAGREE', 'Jeg er uenig i denne anmeldelse');
jr_define ('_JOMRES_REVIEWS_AVERAGE_RATING', 'Gennemsnitlig bedømmelse:');
jr_define ('_JOMRES_REVIEWS_TOTAL_VOTES', 'Total stemmer:');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW', 'Tilføj en ny anmeldelse.');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Du skal være logget ind for at skrive en anmeldelse.');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY', 'Fortæl os, hvad du synes om denne ejendom:');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Denne anmelder fortalte os:');
jr_define ('_JOMRES_REVIEWS_PROS', 'Fordele:');
jr_define ('_JOMRES_REVIEWS_CONS', 'Cons:');
jr_define ('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Sendt den:');
jr_define ('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Du har allerede anmeldt denne ejendom, du kan ikke skrive en anmeldelse mere om den.');
jr_define ('_JOMRES_REVIEWS_CANNOTREVIEW', 'Beklager, men du må ikke skrive anmeldelser på dette websted.');
jr_define ('_JOMRES_REVIEWS_CLICKTOSHOW', 'Vis anmeldelser');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'gæster er enige i denne anmeldelse.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'gæster er ikke enige i denne anmeldelse.');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'gæst er enig i denne anmeldelse.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'gæst er ikke enig i denne anmeldelse.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Tak fordi du delte din mening om denne anmeldelse.');
jr_define ('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Tak, men du har allerede delt din mening om denne anmeldelse.');
jr_define ('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Sørg for, at alle felter er udfyldt.');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Opsummer venligst din anmeldelse ved at indtaste en titel');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Angiv en mere komplet anmeldelse i beskrivelsesfeltet');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Indtast venligst de gode dele af din oplevelse af at være gæst på denne ejendom');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Angiv eventuelle negative tanker om din oplevelse');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Bedøm venligst den gæstfrihed, du har modtaget fra personalet');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Bedøm din mening om ejendommens område');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Giv din mening om ejendommens renlighed');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Bedøm venligst boligen. Var den behagelig eller slidt');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Giv din mening om, hvorvidt det var værdi for pengene');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Bedøm venligst tjenesterne');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Oversigtsoversigt');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Din oplevelse mere detaljeret');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Tak fordi du indsendte din anmeldelse.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Tak, fordi du indsendte din anmeldelse. Den offentliggøres snart af en af ​​vores hårdtarbejdende moderatorer.');
jr_define ('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Vil du bruge Jomres review -funktionalitet?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatisk udgivelse af anmeldelser?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Hvis du indstiller dette til Nej, skal du manuelt offentliggøre anmeldelser');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Indstil anmeldelser til testtilstand?');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalt kan ejendomsadministratorer ikke gennemgå ejendomme. Med testtilstand aktiveret kan de. Naturligvis er dette ikke ideelt i et produktionsmiljø.');
jr_define ('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Dette er en liste over alle ejendomme. Hvis du vil se en ejendoms anmeldelser, skal du klikke på den ejendom. Derfra kan du offentliggøre eller slette en anmeldelse.');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Antal upublicerede anmeldelser');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Samlet antal anmeldelser');
jr_define ('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review');
jr_define ('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Slet anmeldelse');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW', 'Anmeld anmeldelse');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Gennemgå rapporter');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Angiv venligst din rapport');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Kan du se noget i denne anmeldelse, der er modstridende eller unøjagtigt? Rapportér det, og vi vil undersøge det for dig.');
jr_define ('_JOMRES_REVIEWS_SUBMIT', 'Send');
jr_define ('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Rapport oprettet af');
jr_define ('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Rapporter indsendes af brugere, der kan være uenige i indholdet af en anmeldelse. Den eneste måde at fjerne en rapport på er at slette anmeldelsen.');
jr_define ('_JOMRES_REVIEWS_RATING', 'Ratings (1 = dårlig 10 = fremragende)');
jr_define ('_JOMRES_REVIEWS_RATING_1', 'Hospitality');
jr_define ('_JOMRES_REVIEWS_RATING_2', 'Location');
jr_define ('_JOMRES_REVIEWS_RATING_3', 'Renlighed');
jr_define ('_JOMRES_REVIEWS_RATING_4', 'Overnatning');
jr_define ('_JOMRES_REVIEWS_RATING_5', 'Værdi for pengene');
jr_define ('_JOMRES_REVIEWS_RATING_6', 'Services');
jr_define ('_JOMRES_REVIEWS_REVIEWED_BY', 'Anmeldt af:');
jr_define ('_JOMRES_REVIEWS_CLICKTOHIDE', 'Skjul anmeldelser');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Show Booking form in property details page?');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Indstil dette til Ja for at vise reservationsformularen på ejendomsoplysningssiden. Hvis du angiver det til Nej, vises der et link på ejendomsoplysningssiden i stedet for at pege på reservationsformularen.');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE', 'Er priser fastsat inklusive moms?');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Priser, der er inkluderet? Hvis dine priser inkluderer moms, skal du vælge Ja. Hvis de ikke er det, skal du vælge Nej');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Ekstra skat:');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Ugedagens felter giver dig mulighed for at angive en sats for en given ugedag, når du klikker på ugedagsknappen, vil alle ugens dage blive indstillet til den sats.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Datovælgerne og satsindtastningen giver dig mulighed for at angive en pris for et givet datointerval. Vælg en start- og slutdato, indtast en pris, og klik på knappen Set Rates.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rates');
jr_define ('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define ('_JOMRES_CALENDAR_RTL', 'false');
jr_define ('_JOMRES_ROOMALLOCATIONS_ROOM', 'Room');
jr_define ('_JOMRES_ROOMALLOCATIONS_GUESTS', 'gæst (er).');
jr_define ('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Sådan har vi tildelt dine gæstnumre til deres værelser. Hvis du vil ændre denne tildeling, skal du kontakte hotellet efter reservationen. Der kan være ekstra gebyrer, hvis du ændrer dine tildelinger. ');
jr_define ('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Bemærk, at din ejendom endnu ikke er udgivet, kun du kan se ejendommen, webstedets besøgende vil ikke se den');
// 4.5.5
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Standard søgeresultaterækkefølge');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Skift denne indstilling for at ændre den rækkefølge, som søgeresultaterne som standard præsenteres.');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Vis søgeresultatrækkefølge');
jr_define ('_JOMRES_ROOMMSLIST_STYLE', 'Værelsesliste stil');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_DESC', 'I reservationsformularen ved hjælp af "klassisk" værelseliste -stil tilbyder du individuelle værelser til gæster. Med værelsestypevisningen vælger gæsterne antallet af værelser af type X (f.eks. 2 x dobbeltværelser) i stedet ');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Rumtyper');
jr_define ('_JOMRES_COM_CALENDAR_STARTDAY', 'Kalenderugens startdag, søndag eller mandag');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Kun ejendomsgæster kan anmelde?');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Indstil dette til Ja, hvis du kun vil begrænse anmeldelser til kun de brugere, der allerede har været gæst i denne ejendom.');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per room');
jr_define ('_JOMRES_MAX_GUESTS_PER_ROOM', 'Gæster pr. værelse:');
jr_define ('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gæster pr. booking:');
jr_define ('_JOMRES_NUMBER_OF_ROOMS', 'Antal værelser');
jr_define ('_JRPORTAL_MONTHS_LONG_0', 'januar');
jr_define ('_JRPORTAL_MONTHS_LONG_1', 'februar');
jr_define ('_JRPORTAL_MONTHS_LONG_2', 'marts');
jr_define ('_JRPORTAL_MONTHS_LONG_3', 'april');
jr_define ('_JRPORTAL_MONTHS_LONG_4', 'maj');
jr_define ('_JRPORTAL_MONTHS_LONG_5', 'juni');
jr_define ('_JRPORTAL_MONTHS_LONG_6', 'juli');
jr_define ('_JRPORTAL_MONTHS_LONG_7', 'August');
jr_define ('_JRPORTAL_MONTHS_LONG_8', 'September');
jr_define ('_JRPORTAL_MONTHS_LONG_9', 'oktober');
jr_define ('_JRPORTAL_MONTHS_LONG_10', 'november');
jr_define ('_JRPORTAL_MONTHS_LONG_11', 'december');
jr_define ('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Indstil dette til Ja for at reducere antallet af tilgængelige muligheder for ejendomsadministratorer i sektionen Generel konfiguration. Dette er nyttigt, hvis du ikke vil have ejendomsadministratorer til at lege med for mange indstillinger, i stedet kan du redigere jomres_config .php for at definere standard egenskabsmuligheder. ');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Vælg en mulighed for din reservation');
jr_define ('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Hvis denne indstilling er indstillet til Ja, vil ledere kunne se html -editoren, der følger med CMS, og indtaste HTML i beskrivelsen. Dette er en potentiel sikkerhedsrisiko, da der er en mulighed for, at de kan introducere uønsket HTML eller Javascript. Desuden, hvis de indtaster dårligt formateret HTML, kan sidedesignet blive kompromitteret. Det er bedre at lade denne indstilling være indstillet til Ingen, hvor det er muligt. </p> <p> Hvis alle ledere har tillid til brugere (f.eks. dig selv), så kan du lade den være sat til Ja, og du kan ændre de forskellige HTML -tags, som de må indtaste på fanen Inputfiltrering i Site Configuration. </p> <p> Hvis du på den anden side ' genbruger Jomres som en portal, hvor du inviterer brugere til at tilføje og administrere deres egne ejendomme, så er dette ikke den ideelle konfiguration. I stedet skal du lade denne indstilling være Nej. Med den sat til Ingen ledere vil i stedet se en markdown -editor, at de kan bruge til at indtaste grundlæggende formatering, som skal være tilstrækkelig for de fleste brugere. </p> ");
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Fullscreen view');
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normal visning');
jr_define ('_JOMRES_PARTNER_DISCOUNT', 'Partner rabat');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Søg bruger');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Indtast et par tegn for at søge efter en bruger. <br/> Når du vælger en bruger, tilføjer du dem automatisk som partner, og du bliver taget til den næste side, hvor du kan tildele ejendomme og rabatter til brugeren. ');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Eksisterende partnere');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Vælg en partner, der skal føres til partneradministrationssiden.');
jr_define ('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Søg efter en ejendom');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Indtast et par tegn fra ejendomsnavnet, og vælg en ejendom. <br/> Når du vælger ejendommen, tilføjer du den til partnerens portefølje, men de får endnu ingen rabatter, du skal bruge at indstille dem selv. ");
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuelle egenskaber');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Klik på en ejendom for at redigere partnerens rabatindstillinger for denne ejendom.");
// 4.6
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Denne konto er blevet suspenderet, det er i øjeblikket ikke muligt at administrere dine ejendomme ved hjælp af denne konto.');
jr_define ('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Managerkonto suspenderet');
jr_define ('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Manager account reinstated');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Bemærk, at din ejendomsadministratorkonto er blevet suspenderet. Du kan ikke udføre ejendomsadministrationsfunktioner, før kontoen er blevet gendannet.');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Bemærk venligst, at din ejendomsadministratorkonto nu er aktiv. Du kan fortsætte med at udføre ejendomsadministrationsfunktioner. Log ind på din konto, og sørg for, at de (n) egnede ejendomme er blevet offentliggjort. Tak.' );
jr_define ('_JOMCOMP_MYUSER_REMOVE', 'Fjern favorit');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE', 'Arkiv for datadata');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Bogføringsdataarkivet er en rå dump af bookinginformation, der er registreret, efter at der er klikket på bekræftelsesknappen. Hold markøren over en dato for at se rådata -dumpen. Oplysningerne gemmes i tabellen XXX__jomres_booking_data_archive.');
jr_define ('_JOMRES_MY_ACCOUNT_EDIT', 'Rediger konto');
jr_define ('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'For at tilføje en bruger som ejendomsadministrator skal du først indtaste de første par tegn i deres brugernavn i feltet ovenfor. Når den korrekte bruger er fundet, skal du klikke på det navn for at vælge det og derefter vælge hvilken ejendom ( s) de skal være leder af. Brugeren <em> skal allerede være en bruger i CMS </em> ');
jr_define ('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Eksisterende ledere');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Vis søgefunktionen efter gæstenummer dropdown');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stars');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define ('_JOMRES_SEARCH_GUESTNUMBER', 'Sleeps');
jr_define ('_JOMRES_SEARCH_STARS', 'Antal stjerner');
jr_define ('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Antal ejendomme');
// 4.6.1
jr_define ('_JOMRES_CONFIG_JQUERY', 'Indlæs Jomres jQuery -bibliotek?');
jr_define ('_JOMRES_CONFIG_JQUERY_DESC', 'Du kan indstille dette til NEJ, hvis du har en skabelon, der bruger jquery. Dette KAN løse jquery -konfliktproblemer på nogle skabeloner, men ikke alle.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Aktivering af denne mulighed giver dig mulighed for at se sprogskifteren i fuldskærmsvisning i frontend.');
jr_define ('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Miniaturebilleder oprettes automatisk for uploadede billeder.');
// 4.7.1
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Små miniaturer maksimal bredde (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Små miniaturebilleder bruges på ejendomslisten, mens mellemstore miniaturebilleder bruges i ejendomsoverskriften.');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Små miniaturer max højde (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Mellemstore miniaturer max højde (px).');
jr_define ('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE', 'Vil du bruge kommissionsfunktionalitet?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Indstil dette til Ja for at vise managerprovisionsfakturaer, der er hævet.');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manager bookings create provision factures?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Hvis en leder foretager en reservation, opretter det så også en kommissionsfaktura -linjepost?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Afbryd automatisk administratorer, hvor fakturaer er markeret som Afventende?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automatisk suspendering af grænseværdi');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Denne grænse er det antal dage, en leder skal betale en faktura, før de suspenderes, og deres ejendomme ikke offentliggøres.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'Sproglig kontekst');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Brug denne indstilling til at ændre webstedets sprogkontekst. Denne funktion gør det muligt for Jomres at bruge etiketter, der passer til dit aktuelle fokus, så hvis dit fokus er som en yachtmægler, ændres konteksten tillade Jomres at præsentere etiketter fra en anden sprogfil. Hvis du f.eks. indstiller konteksten til "Yacht Brokerage", finder Jomres først det aktuelle sprog, derefter søger i mappen /'.JOMRES_ROOT_DIRECTORY.'/languages ​​efter et underkatalog kaldet "yachtbrokerage". Hvis filen findes for det aktuelle sprog, vil den fil blive brugt. Hvis ikke, vil Jomres søge efter en engelsk sprogfil i det samme bibliotek. Hvis den ikke kan findes, vil Jomres bruge sprogfil for det aktuelt valgte sprog i biblioteket /'.JOMRES_ROOT_DIRECTORY.'/languages. ');
// 4.7.3
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Avanceret webstedskonfiguration');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Indstil denne indstilling til Ja, hvis du vil bruge de avancerede konfigurationsmuligheder for webstedet. Hvis du lige starter med Jomres, anbefaler vi dig at overlade dette til Nej for øjeblikket, da standardinstallationen er tilstrækkeligt til at komme i gang, i stedet skal du tilføje Jomres til hovedmenuen og logge på frontend som "admin" og begynde at konfigurere dine ejendomme. Bemærk, at mange af de avancerede muligheder muligvis ikke er tilgængelige, hvis du ikke gør det t have de eller de relevante plugins installeret. Brugere af det gratis kernesystem vil ikke være i stand til at drage fuld fordel af de funktioner, de aktiverer. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Indlæs Jomres jQuery UI -bibliotek?');
jr_define ('_JOMRES_SORTORDER_PRICE_DESC', 'Pris (højeste først)');
jr_define ('_JOMRES_SORTORDER_PRICE_ASC', 'Pris (laveste først)');
// 4.7.6
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Prisoversigt og skøn bør prissættes pr. nat/pr. uge/pr. måned?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per nat');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per uge');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per month');
jr_define ('_JOMRES_BOOKINGFORM_PERPERSON', 'Per person');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week (s) at');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month (s) at');
// 4.7.7
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Hvordan skal søgemuligheden for personnumre fungere?');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Påvirker alle søgemoduler. Når søgefunktionen ved hjælp af gæstenummer søger efter egenskaber, hvis takster understøtter gæstetal og svarer til det valgte antal, nøjagtigt det valgte nummer eller det valgte antal og større? ');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Vent venligst, din ordre behandles, og du bliver omdirigeret til Paypal -webstedet.');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Hvis du ikke automatisk omdirigeres til Paypal inden for 5 sekunder ...');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Klik her');
// 4.7.8
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Booking gyldig fra');
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Booking valid to');
jr_define ('_JRPORTAL_COUPONS_GUESTNAME', 'Gæstens navn');
jr_define ('_JRPORTAL_COUPONS_DESC_478', "Rabatkoder kan genereres og videregives til gæster som et incitament til at foretage reservationer. <br/>
Gyldig fra og til datoer refererer til de datoer, som en reservation kan foretages på, hvorimod reservationen gyldig fra/til datoer refererer til de datoer, som reservationen skal dække for at kuponen skal være gyldig. Hvis en reservation falder uden for denne periode, gælder normale priser for dagene uden for denne periode. <br/>
Hvis du vil have reservationen til at være tilgængelig for en bestemt gæst, skal du vælge den gæstes navn i rullemenuen for at begrænse kuponen til kun den gæst. ");
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Med din kupon er denne booking blevet nedsat fra');
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'til');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Indstil dette til Nej for at deaktivere indlæsning af både Jquery UI -javascript- og CSS -filer.');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Indlæs Jomres jQuery UI CSS -bibliotek?');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Indstil dette til Nej for kun at deaktivere jquery UI CSS -filen.');
//v5.1
jr_define ('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc tax');
jr_define ('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Ikke -offentliggjort ejendom');
// v5.2
jr_define ('_JOMRES_CONVERSION_TITLE', 'Brug konverteringsfunktionalitet');
jr_define ('_JOMRES_CONVERSION_TITLE_DESC', "Brug Jomres online konverteringsfunktionalitet. Dette vil tilbyde en konverterings -dropdown til frontend -brugere, hvor de vil kunne vælge en valuta, de ønsker at se priser tilbydes i. Prisoutput justeres for at vise den konverterede pris efterfulgt af ejendommens 'oprindelige' pris i parentes. ");
jr_define ('_JOMRES_CONVERSION_DISCLAIMER', 'Vi har gjort vores bedste for at opnå de mest nøjagtige og rettidige valutakurser, vi kan. Vores online valutaomregningsfunktion er en tjeneste, der udelukkende er til informationsformål, og er ikke beregnet til at give nøjagtige tal. Følgelig, vi garanterer ikke nøjagtigheden af ​​valutakurserne. Ved hjælp af denne funktion anses du for at have accepteret, at enhver afhængighed eller brug af funktionen til omregning af kurser helt og holdes på egen risiko. ');
// 5.2.1
// 5.3.1
jr_define ('_JOMRES_CURRENCYCONVERSION_TAB', 'Valutaomregning/valutakoder');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_DESC', 'For automatisk at indstille rullemenuen for valutakode kan Jomres bruge en gratis tjeneste kaldet IPinfoDB til at registrere besøgendes land, men du skal registrere en API -nøgle på <a href = "http://ipinfodb.com/register.php" target ="_blank"> IPinfoDB </a> først. ');
jr_define ('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accomodation inc tax');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Værelsesafgift:');
jr_define ('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Åbn reservationsformularen');
jr_define ('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Tilbage til ejendomsoplysninger');
jr_define ('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatisk valgt?');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (after deposit paid)');
jr_define ('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrer ressourcer baseret på deres funktioner.');
jr_define ('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Seneste booking');
jr_define ('_JOMRES_DATEPERIOD_SECOND', 'anden');
jr_define ('_JOMRES_DATEPERIOD_MINUTE', 'minut');
jr_define ('_JOMRES_DATEPERIOD_HOUR', 'time');
jr_define ('_JOMRES_DATEPERIOD_DAY', 'dag');
jr_define ('_JOMRES_DATEPERIOD_WEEK', 'uge');
jr_define ('_JOMRES_DATEPERIOD_MONTH', 'måned');
jr_define ('_JOMRES_DATEPERIOD_YEAR', 'år');
jr_define ('_JOMRES_DATEPERIOD_DECADE', 'årti');
jr_define ('_JOMRES_DATEPERIOD_S', 's');
jr_define ('_JOMRES_DATEPERIOD_AGO', 'siden');
jr_define ('_JOMRES_DATEPERIOD_FROMNOW', 'fra nu');
jr_define ('_JOMRES_WHOLEDAY_TITLE', 'Bookinger er for hele dage?');
jr_define ('_JOMRES_WHOLEDAY_DESC', 'Som standard booker systemet ressourcer om natten, så en reservation fra den første januar' .date ('Y', strtotime ('næste år')). 'til den 2. januar' .date ('Y', strtotime ('næste år')). 'dækker kun en nat. Hvis du indstiller denne mulighed til Ja, vil dækningen i stedet dække hele dage i stedet, så en reservation på disse dage ville dække begge dele dage, og kunden ville blive faktureret i to dage. ');
jr_define ('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per day');
jr_define ('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per person per day');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Afhentning');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dage (er) kl');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date wrong');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Reservationen er for kort. Der skal mindst være så mange dage mellem afhentnings- og returdatoer:');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Mindste interval for afhentning/retur');
jr_define ('_JOMRES_COM_A_MINIMUMTERVAL_DESC_WHOLEDAY', 'Det mindste interval i reservationsformularen mellem afhentnings- og afleveringsdatoer. Et interval på 1 betyder, at afhentnings- og returdatoer kan indstilles til samme dag, men dette er stadig afhængigt af minimumsdatoen interval, der automatisk beregnes af bookingmotoren, da den kontrollerer takster, der er gyldige for bookingperioden. ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Prisoversigt og estimater bør prissættes pr. dag/pr. uge/pr. måned?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per dag');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dage før afhentningsdatoen');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Det mindste antal dage, der skal gå, fra "i dag", før afhentningsdatoen.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Indstil dette til ja, hvis du vil begrænse forudbestillinger (brug det næste felt til at angive grænsen i antal dage). Hvis du angiver dette til ja, hvis brugeren forsøger at booke mere end n dage i forvejen, så bliver deres afhentningsdato gendannet til dagens dato ');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Vis returdatoindtastning?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Indstil dette til Nej, hvis du ikke vil vise returdatoindtastningsfeltet. Brug kun dette, hvis du ved, hvad du laver, da returdatoen i bookinger altid vil blive indstillet til dagen efter afhentningsdatoen. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Hvis du indstiller dette til Ja, vil bookinger blive taget for en fast periode. Hvis dette er indstillet til Nej, skal du sikre dig, at "defineret afhentningsdag" ikke er angivet til Ja (medmindre du specifikt vil tvinge folk til at afhente en bestemt ugedag) ellers får du ikke mange links i tilgængelighedskalenderen. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Foruddefineret afhentningsdag');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Kun for websteder, der tilbyder tidsbestilling. Vælg den ugedag, som afhentninger skal foretages på.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fast afhentningsdag');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When vaste pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Bemærk, at datolisten ikke inkluderer nogen datoer, hvis en reservation ikke er mulig på grund af tidligere bookinger, og at listen faktisk vil være dobbelt så lang som dit valgte nummer, fordi den vil have et lignende antal historiske datoer (hvis tilgængelig). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Vælg Ja, hvis du vil opkræve per person-per-dag. Hvis nej, beregnes omkostningerne på basis af ressource-per-dag');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable depositions giver dig mulighed for at definere, om du vil opkræve det fulde beløb, hvis bookingens afhentningsdato er inden for N dage fra "i dag". Indstil denne mulighed til Ja for at aktivere funktionen , og indtast antallet af dage herunder, så hvis afhentningsdagen f.eks. er inden for 60 dage, vil det opkrævede depositum være det fulde beløb, ellers vil beløbet blive baseret på de indbetalingsmuligheder, der er konfigureret ovenfor. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'De fleste virksomheder genberegner ressourcepriser baseret på antallet af ressourcer af en påkrævet type, der er tilgængelige på en given dato. Dette giver dem mulighed for at tilbyde rabatter på en ressource/virksomhedstype, der ikke har travlt under en given periode med det formål at tiltrække forretninger, der ellers kan gå glip af. <br/> Aktivering og konfiguration af dette plugin giver dig mulighed for at tilbyde justerbare priser baseret på antallet af ressourcer af en valgt type, der er tilgængelige i virksomheden på en given dag. <br/> Dagsgrænsen definerer det antal dage, afhentningsdatoen skal være inden, før ressourcepriser justeres med denne funktion, så giver procentindstillingerne dig mulighed for at konfigurere den procentdel af ressourcer, der kan være tilgængelige, før en given rabat anvendes . Bemærk dog, at hvis flere ressourcer er reserveret, vil det aktuelle rabatniveau blive anvendt på alle ressourcer og reduceres ikke, efterhånden som der vælges flere ressourcer. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (antal dage mellem afhentningsdato og i dag)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Afhentning afventende');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Afhentning i dag');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'afhentet');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returnerer i dag');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return return');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Har ikke hentet');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returns.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returns');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Omkostninger pr. dag:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Antal dage:');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Tilsidesæt indkvartering i alt');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Gem tilsidesættelse');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Send nye brugere deres loginoplysninger til e -mail?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Hvis indstillingen Opret ny bruger er indstillet til Ja, kan du indstille denne mulighed til Nej for at sikre, at de ikke får tilsendt deres loginoplysninger, når brugeren er blevet oprettet. Dette kan være nyttigt, hvis du automatisk bliver oprettet tilføjer f.eks. nye brugere til en mailingliste og ønsker ikke, at brugerne rent faktisk skal logge ind. ');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Vis skatteoutput i reservationsformularens oversigt?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Undgå, at reservationsformularen viser skatteprisfelterne i totaloversigten ved at indstille denne mulighed til Nej');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Annulleringsgrænse');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logget in, registrerede gæster kan annullere deres egne bookinger. Her kan du indstille grænseværdien i dage, hvor reservationen ikke kan annulleres efter et bestemt antal dage før ankomstdatoen.');
jr_define ('_JOMRES_EDIT_PROFILE', 'Rediger profil');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relation');
jr_define ('_JOMRES_IMAGE', 'Image');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'Klik på et bogstav for at vise alle virksomheder med det første tegn. Når du har en liste over ejendomme, kan du tildele kommissionssatser til disse ejendomme eller klikke på deres "rediger" -ikon for at se virksomheden \' s statistik. ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'Edit Tax rate');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Rediger tilpasset felt');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'Licensserver brugernavn');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Hvis du har et brugernavn og en adgangskode på licensserveren, skal du indtaste dem her. Dette hjælper dig med at få adgang til plugins, som du har ret til. Hvis du har indtastet en gyldig supportnøgle i feltet ovenfor, så er det ikke nødvendigt at angive brugernavnet/adgangskoden her. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Seneste Jomres -version');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Advarsel: Der er en ny version af Jomres tilgængelig, vi rådes til at opgradere så hurtigt som muligt.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'Velkommen til Jomres. Kernesystemet er gratis, men det kan forbedres gennem installation af plugins. For at få adgang til disse plugins skal du have en download- og supportlicens. Hvis du vil købe en Jomres Starter , Business- eller Enterprise -licens, <a href="http://www.jomres.net/prices" target="_blank"> besøg vores websted </a> for oplysninger om, hvordan du kan opgradere. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'Dette system er ideelt til ethvert scenario, hvad enten det er en enkel reservationsformular for en enkelt ejendom, helt op til et websted, der har flere brugere, på flere sprog, med flere ejendomme. Se "Hjælp" i menuen, herunder siden "Kom godt i gang", der guider dig gennem dine første trin. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktiv ejendom');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'E -mail -indstillinger');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Indstil denne mulighed til Ja for at bruge disse alternative SMTP-indstillinger. Et stigende antal webværter ser ud til at blokere PHP-mailfunktionalitet, så du kan vælge at overskride de mailindstillinger, som Jomres vedtager fra din vært CMS (typisk Joomla) og brug indstillinger efter eget valg her. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternativ vært');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Skift dette til din smtp -mailserver');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternativ port');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Skift dette til din smtp -port');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternativ protokol');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Afhængigt af dine smtp -serverindstillinger skal du efterlade dette tomt eller indtaste 'ssl' eller 'tls'. Spørg din SMTP -udbyder, hvis du ikke ved det.");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Brug godkendelse');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Hvis din SMTP -server kræver, at klienter logger ind, skal du indstille dette til Ja. Brugernavn og adgangskode bruges derefter.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternativt brugernavn');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternativ adgangskode');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define ('_JOMRES_QUICK_INFO', 'Hurtig info');
jr_define ('_JOMRES_MENU_SHOW', 'Show');
jr_define ('_JOMRES_MENU_HIDE', 'Skjul');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Standard');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Anybody');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registreret');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Ingen');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Menu Adgangskontrol');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'Denne funktion giver dig mulighed for at styre, hvem der vil kunne se et plugin i hovedmenuen. Normalt kan brugerindstillinger 00009 ses af enten/eller uregistrerede besøgende, 00010 muligheder refererer generelt til modtagelsestypeaktiviteter, der er bruges dagligt, hvorimod 00011 muligheder bruges til at oprette og konfigurere en ejendom, men der er sjældnere adgang til dem. ');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Fuld adgangskontrol');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Indstil denne indstilling til Ja for at aktivere fuld adgangskontrolfunktion, og besøg derefter adgangskontrollen under Systemvedligeholdelse for at konfigurere adgangskontroller.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Bemærk dog, at disse indstillinger ikke styrer de underliggende scripts, de forbinder til, så hvis du f.eks. indstiller <i> 00009user_option_03_search </i> til 'Manager', kan en bruger, der kender Jomres, stadig ring til j06000search.class.php ved at indtaste http://www.domain.com/index.php?option=com_jomres&task=search i deres browsers adresselinje. Dette er forsætligt, da denne menuadgangskontrol simpelthen styrer, hvad der kan ses i Jomres hovedmenu. Hvis du har brug for strammere kontroller, skal du indstille indstillingen Site Config -> Full Access Control til Ja, og genvis menuen Adgangskontrol. ");
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Fuld adgangskontrol');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Denne funktion er kun for avancerede brugere. Hvis du ikke ved, hvad den er til, og ikke har en specifik grund til at bruge den, skal du vende tilbage til webstedskonfiguration og angive fuld adgang Kontrolindstilling til nr. </strong> <br/>
Denne funktion giver dig mulighed for at kontrollere, hvem der har adgang til hvilke minikomponenter (med nogle undtagelser, der er hårdt kodet ind i systemet). Hvis adgangsniveauet ved siden af ​​et scripts navn er sat til Standard, kan indstillingen Fuld adgangskontrol indstillet til Ja <strong> enhver </strong> få adgang til scripts, som de ikke burde have adgang til, hvis du har til hensigt at bruge dette funktion SKAL du indstille adgangskontrolniveauet for <strong> hver </strong> Jomres minikomponent, der er angivet her. Hvis du ikke ved, hvad disse minikomponenter gør, anbefaler vi på det kraftigste, at du slet ikke bruger denne funktion. <br/>
I Jomres følger adgangsniveauer en pyramide, så Super Property Managers er større end Managers. Kort sagt Super Manager> Manager> Receptionist> Registreret> Uregistreret. Så hvis en registreret bruger har adgang til en minikomponent, så har også receptionister, ledere og superchefer. <br/>
Bemærk, at du ikke kan kontrollere minikomponenter i administratorområdet. Alle i administratorområdet anses for at være en betroet bruger, idet de ikke bør blokeres for at få adgang til noget script (især dette).
");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Advarsel! Du har fuld adgangskontrol aktiveret, men vi har talt adgangskontrolindstillingerne og sammenlignet dem med antallet af minikomponenter, der skal kontrolleres, og de to stemmer ikke overens, derfor har du muligvis nogle scripts, der ikke er kontrolleret. Dette kan være et sikkerhedsproblem, og du opfordres til at løse dette med det samme ved at besøge adgangskontrolfunktionen og kontrollere, at de relevante niveauer er blevet anvendt. ');
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Brugere med administratorrettigheder til denne ejendom');
jr_define ('_JOMRES_DEBUGGING_YOUREMAIL', 'Din e -mail -adresse');
jr_define ('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define ('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametre');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define ('_JOMRES_METATITLE', 'Meta title');
jr_define ('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define ('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Tilføj din ejendom: Trin 2 af 2');
jr_define ('_JOMRES_CART_TITLE', 'Mine foreslåede bookinger');
jr_define ('_JOMRES_CART_INFO', 'Bemærk, disse bookinger er ikke gemt endnu. Hvis du logger ud, eller din session udløber, går de tabt. Husk at bekræfte dine bookinger!');
jr_define ('_JOMRES_CART_CONFIRM_BOOKINGS', 'Bekræft reservation (er)');
jr_define ('_JOMRES_CART_OR', 'eller');
jr_define ('_JOMRES_CART_SAVEFORLATER', 'Gem til senere');
jr_define ('_JOMRES_CART_NOBOOKINGS_SAVED', 'Du har ikke gemt nogen bookinger endnu.');
jr_define ('_JOMRES_CART_VIEWCART', 'Se indkøbsvogn');
jr_define ('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Underkatalog for sprogfil');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Standard Latitude Startpoint');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Standard Longitude Startpoint');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'I Google -kortet på ejendomsredigeringssiden, før markøren er blevet flyttet, hvad skal standardbredde/breddegrad -startpunkterne være?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'E -mails sendt fra hvilken adresse?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "Lad denne indstilling være tom for at deaktivere den. Jomres bruger hotellets e -mail -adresse (r), når e -mails sendes til gæster, men din e -mailtjeneste KAN ikke tillade e -mails fra vilkårlige adresser (dvs. de tillader kun e -mails fra en autoriseret adresse). Hvis dette er tilfældet, kan du bruge dette input til at indtaste en adresse, der vil blive set som FROM -adressen for alle systemmails. ");
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Listevisning');
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Photo view');
jr_define ('_JOMRES_COMPARE', 'Sammenlign');
jr_define ('_JOMRES_REMOVE', 'Fjern');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'Tilbage til søgeresultater');
jr_define ('_JOMRES_ADDTOSHORTLIST', 'Føj til favoritter');
jr_define ('_JOMRES_REMOVEFROMSHORTLIST', 'Fjern fra favoritter');
jr_define ('_JOMRES_VIEWSHORTLIST', 'Se din shortlist');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'Vigtigt: Cookiepolitik');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'Vi bruger cookies til at holde vores websted relevant og let at bruge.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'Læs mere ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', 'EU -lovgivning kræver, at alle websteder klart angiver, om cookies bruges og deres formål.');
jr_define ('_JOMRES_COOKIEPOLICY_5', "Søge- og bookingmotoren på dette websted skal kunne huske de muligheder, du har valgt for at fungere bedst. For at gøre dette skal det gemme oplysninger, der er knyttet til en lille fil kaldet \"cookie \", der entydigt identificerer din browser, og for at vi kan gøre det, skal du acceptere, at vi kan. Hvis du ikke accepterer denne cookiepolitik, vil du være stærkt begrænset i, hvad du kan gøre på dette websted. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'Ja, jeg accepterer brugen af ​​cookies på denne måde.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Kræver depositum prisen for den første nat?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Priser beregnes pr. nat. Vil du have et depositum til 1 nat? I så fald kan du ignorere følgende muligheder.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "Du har ikke tilføjet nogen varer til dine favoritter.");
jr_define ('_JOMRES_SAFEMODE', 'Aktivere sikker tilstand?');
jr_define ('_JOMRES_SAFEMODE_DESC', "Indstil dette til Ja for at aktivere sikker tilstand. Dette deaktiverer alle plugins, så Jomres kun vil bruge sin kernefunktionalitet.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define ('COMMON_NEXT', 'Next');
jr_define ('COMMON_CANCEL', 'Cancel');
jr_define ('COMMON_SUBMIT', 'Send');
jr_define ('COMMON_SAVE', 'Save');
jr_define ('COMMON_DELETE', 'Delete');
jr_define ('COMMON_RETURN', 'Return');
jr_define ('COMMON_CLOSE', 'Close');
jr_define ('COMMON_BACK', 'Back');
jr_define ('COMMON_HOME', 'Home');
jr_define ('COMMON_NEW', 'Ny');
jr_define ('COMMON_SEND', 'Send');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'Captcha bruges til at sikre, at klienten, der bruger webformularer, er et menneske og bruges til at forhindre, at ejendomsadministratorer bliver "spammet" af robotter på internettet. For at bruge kontaktformularen i Jomres kan du bliver nødt til at registrere sig på <a href="http://www.google.com/recaptcha" target="_blank"> startsiden for Google reCaptcha </a> og indstille dit domæne til at modtage dine offentlige og private nøgler. Når du har modtaget disse nøgler, bedes du indtaste dem herunder. ReCapcha -tjenesten er en gratis service fra Google. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'Offentlig nøgle');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'Privat nøgle');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'For at forhindre fare for gæster dobbeltbooker værelser Jomres bruger en låsfil til at forhindre et værelse i at blive føjet til listen over tilgængelige værelser i reservationsformularen, hvis nogen andre allerede har tilføjet værelset til deres for de samme datoer . Som standard udløber denne lås om 3600 sekunder eller en time. Du kan ændre den tid, det tager at udløbe denne lås, ved at ændre dette tal. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "Aktiver Jomres 'Bootstrap -skabeloner og funktionalitet?");
jr_define ('COMMON_ACTION', 'Action');
jr_define ('COMMON_VIEW', 'View');
jr_define ('BACKTOTOP', 'Tilbage til toppen');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Svag');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define ('_JOMRES_INPUTFILTERING', 'Input filtrering');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Input filtrering level');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "De fleste data, der indtastes i systemet, bliver desinficeret ved først at fjerne alle html -tags og derefter bruge PHPs variabel filtreringsfunktion til at gøre dataene sikre, før de indtastes i databasen. Du vil muligvis tillade visse input (f.eks. tekstindtastningerne på ejendomsoplysningssiden) for at inkludere HTML. Der er to filtreringsniveauer, du kan bruge til at filtrere dette input, enten Svag eller Stærk. Du bør kun bruge den svage indstilling, hvis brugeren (e) indtaster dataene er tillid til dig selv, f.eks. andre systemadministratorer, ellers bør du lade dem stå til Strong. Når den er indstillet til strong (anbefales), kan du stadig angive, hvilke tags der skal tillades ved at redigere den næste indstilling 'HTML Purifier tilladte tags'. ") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Tilladte input -tags');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Du kan redigere de tags, som html -renser tillader gennem filtreringssystemet. Standarden er 'p, b, strong, a [href], i' (dvs. afsnit, fed, stærk, links og kursivering) For flere oplysninger om tilladte tags, læs HTML purifier's dokumentation på <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Mens du kan ændre denne indstilling, kan du rådes til at lade det stå som standard. ");
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Tilladte input');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Du kan definere hvilke formindgange, der tillader html ved at redigere denne indstilling, alle input, der tilføjes til denne liste, analyseres gennem HTML Purifier i stedet for at have html fjernet. Standard er: 'property_description property_checkin_times_property_area_port_egenskab_egenskaber_egenskab_egenskaber_egenskab_egenskaber_egenskab_egenskaber_egenskab_egenskaber_egenskab_egenskaber_egenskab_egenskaber_egenskab_egenskaber_egenskaber property_policies_disclaimers '. Tilføj flere input ved at tilføje deres fra navne, adskilt af et mellemrum. ");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Ejendomsoplysninger i faner?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Indstil denne indstilling til at vise ejendomsoplysninger i faner. Indstil den til nej for at vise dem uden faner.');
jr_define ('COMMON_PRINT', 'Print');
jr_define ('COMMON_EDIT', 'Edit');
jr_define ('COMMON_COPY', 'Copy');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres er designet til at fungere inden for både Bootstrap 2 eller Bootstrap 3. Når du har installeret et BS2 eller BS3 tema eller en skabelon, skal du indstille denne switch til at vælge hvilken af ​​Bootstrap\'s smag du vil have Jomres til at fungere med.');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Vil du bruge Jomres Bootstrap -skabeloner i frontend?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Her er nogle alternativer, du måske vil overveje.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Registrer gæstens land automatisk?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Systemet vil automatisk forsøge at registrere gæstens land, hvis de ikke har reserveret før. Du kan indstille denne mulighed til Nej og definere det land, du foretrækker at vises i reservationsformularen, i den næste mulighed. ");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Om Jomres');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'hjælp');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Kom godt i gang');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Adgangskontrol');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'developer tools');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'sprog');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'inkomst generation');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'site structure');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Min konto (online)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portalfunktionalitet');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'rapporter/statistik');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'hjælp');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'Updates');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'betalingsmetoder');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tariff default');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Dette gælder kun for nye takster');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Years to show');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Definerer det antal år, der skal vises ved redigering af en tariffetype');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'fakturaer');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'kontooplysninger');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'søg');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'dashboard');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'fakturaer');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'settings');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'Rediger land');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'Country id');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Landekode');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Landnavn');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'Rediger region');
jr_define ('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Landekode');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'Region name');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'Liste over lande');
jr_define ('_JOMRES_COM_LISTREGIONS', 'List regions');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'Eksport definitioner');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Denne funktion giver dig mulighed for at eksportere oversættelser, der er opbygget ved hjælp af funktionen Sprogoversættelse. Det opbygger et tekstfelt med alle de data, der kræves for at opbygge en ny sprogfil, alt hvad du skal gøre er at kopiere og indsætte dette output i en ny sprogfil, som du kan sætte på en ny Jomres -baseret server, eller hvis du vil bidrage tilbage til Jomres -fællesskabet. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Translate locales');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Oversæt lang filstrenge');
jr_define ('_JOMRES_COM_NOTAMANAGER', "Fejl, den bruger, du er logget på som ikke er en supermanager i Jomres, vil du ikke være i stand til at bruge denne funktion, før du har brugt egenskaben Manager -funktionen til at gøre dig til både en manager og en Supermanager. Dette er en sikkerhedsfunktion. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'Standardlayout for ejendomsliste');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'Stay for a minimum of');
jr_define ('_JOMRES_NIGHTSFOR', 'nætter for');
jr_define ('_JOMRES_AGENT', 'Agent');
jr_define ('_JOMRES_AGENT_DETAILS', 'Agent detaljer');
jr_define ('_JOMRES_AGENT_LISTINGS', "Agentens fortegnelser");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatisk godkendelse af nye ejendomme');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'Hvis du indstiller denne indstilling til Nej, skal du manuelt godkende nye ejendomme. Indtil en ejendom er blevet godkendt, kan den ikke offentliggøres af en Manager/Super ejendomsadministrator.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'Godkendelser');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Denne ejendom er ikke godkendt endnu. Når den er blevet godkendt, vil du kunne offentliggøre den.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Beklager, du kan ikke offentliggøre denne ejendom, da den ikke er godkendt endnu.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'En ny ejendom kræver godkendelse');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'En ejendom er blevet føjet til systemet, som kræver din godkendelse. Klik på linket for at se de ejendomme, der afventer godkendelsesliste:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Din ejendom er blevet godkendt');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Tillykke, din ejendom er blevet godkendt. Klik på følgende link for at se ejendommens kontrolpanel:");
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Regionnavne kan oversættes');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Medmindre du kører en meget hurtig server, rådes du til at lade dette sæt stå til Nej. På grund af det store antal regionsnavne, tager regionnavneoversættelse meget hukommelse, som kan bremse dine søgeresultater ned.");
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Gæst reserveret.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Beklager, denne e -mail -adresse er allerede i brug. Hvis dette er din e -mail -adresse, skal du sørge for at have logget ind, før du prøver at bestille.');
jr_define ('JOMRES_TAPTOCALL', 'Tap to call');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'Ny anmeldelse for');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'En ny anmeldelse er blevet efterladt for');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'Ny rapport');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'En anmeldelse er blevet rapporteret for');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'Grand total (ex tax):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'Grand total (inkl. moms):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total tax:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Skriv de to ord:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Indtast det, du hører:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Gentag lydsporet');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Download nummeret i MP3 -format');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Lydtilstand');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'Opdater');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'Hjælp');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Beklager, det var forkert. Prøv igen.');
jr_define ('JOMRES_GOOGLE_MAPS', 'Google map -muligheder');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Vil du bruge vejrlag?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Vil du bruge transitlag?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'Aktiver Gmap -interessepunkter (inklusive muligvis dine konkurrenter)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan denne kode til din telefon for at få rutevejledning til os.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Det angivne momsnummer ser ikke ud til at være korrekt. Du skal have noget i stil med dette: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Ugyldigt momsnummer. Kontroller gyldigheden af ​​dit momsnummer med webstedet Europa VAT Number validering (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Tillykke. Vi kunne validere dit momsnummer.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'Liste skatteregler');
jr_define ('_JOMRES_TAX_RULE', 'Tax rule');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Skatteregler bruges til at oprette forskellige skatteregler for forskellige regioner. Disse skatteregler påvirker personen, der foretager reservationen, hvis de er registreret, logget ind og har redigeret deres konto ved hjælp af siden "rediger min konto" . Formålet med disse regler er at imødekomme bookere i de områder, der er fritaget for moms. Du kan opleve, at du slet ikke behøver at oprette mange regler. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Import skat satser');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'Vi kan importere skattesatser for EU for dig, hvis du ønsker det. Bemærk, hvis du bruger denne funktion, fjernes alle dine eksisterende skattesatser.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Rediger skatteregel');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'Momsnummeret for denne ejendom.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Angiv momsnummeret for denne ejendom.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Virksomhedsoplysninger, der indtastes her, vil blive brugt på provision- og abonnementsfakturaer.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Det ser ikke ud til, at du har udfyldt dine kontooplysninger endnu. For at få vist din ejendom på webstedet, skal vi udfylde dine kontooplysninger, før vi kan gå videre.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Produktion eller udvikling?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Hvis du indstiller denne indstilling til Udvikling, aktiverer vi fejlrapportering, ellers når den indstilles til Produktion, der slukkes. Hvis dette er en live server, anbefaler vi, at du indstiller denne mulighed til "produktion".' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Produktion');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Ressourceoplysninger');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tarifdetaljer');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Kun');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'venstre!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Ressourcefunktion');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Kan ikke fjerne denne ressourcefunktion, den er tildelt en ressource. Fjern funktionen fra denne ressource, og prøv igen.');
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Tilføj billeder');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Rumbilleder');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Egenskabets hovedbillede');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Diasshow -billeder');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Ryd liste');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Træk og slip filer her');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Vælg den ressource, du vil uploade billeder til. Hvis du kan uploade billeder for individuelle ressourcer (f.eks. værelser), får du en anden rullemenu til at vælge den specifikke ressource.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Hvis du uploader flere billeder som "Hoved -ejendomsbillede", vil disse blive brugt på ejendomslisten. Billeder i diasshow vil blive vist på ejendomsoplysningssiden.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Se dit billede');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Slet billede');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Upload billede');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Ikoner for rumtyper');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Egenskabsfunktionsikoner');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Upload alle filer');
//8.0
jr_define ('COMMON_PREV', 'Prev');
jr_define ('COMMON_MORE', 'More');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'I dag');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'År');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'Måned');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'Uge');
jr_define ('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define ('_JOMRES_HLEGEND', 'Legend');
jr_define ('_JOMRES_HFILTER', 'Filter');
jr_define ('_JOMRES_HFROM', 'From');
jr_define ('_JOMRES_HTO', 'Til');
jr_define ('_JOMRES_HNEW_BOOKING', 'Ny booking');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'Deposit status');
jr_define ('_JOMRES_HSTATUS_GUEST', 'Gæstestatus');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'Booking status');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'Fakturastatus');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'Fakturatype');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Approved');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Nuværende forretning');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Vis bookinger til');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Vis fakturaer for');
jr_define ('_JOMRES_STATUS_ANY', 'Any');
jr_define ('_JOMRES_STATUS_PAID', 'Betalt');
jr_define ('_JOMRES_STATUS_NOTPAID', 'Ikke betalt');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define ('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Annulleret');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Published');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'Ikke offentliggjort');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Gæster med aktive bookinger');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Gæster med tidligere bookinger');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'Bookings');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Abonnementer');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Provisioner');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'Alle mine virksomheder');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookinger');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'egenskaber');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'gæster');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'rapporter');
jr_define ('_JOMRES_HLIST_GUESTS', 'Gæster');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Liste gæster');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Liste fakturaer');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Hurtig booking');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'Dato for booking');
jr_define ('_JOMRES_HTWO_WEEKS', 'To uger');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Denne reservation annulleres. Tryk på OK for at annullere reservationen.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Nuværende beboere');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Standard (indholdsområde)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverteret navbar (farveændring)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'Reservationsnummer');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Vis gæster for');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres indeholder sine egne skabelonsæt, en for hver understøttet version af Bootstrap. Joomla og Wordpress -skabeloner/temaer, der er baseret på Bootstrap, vil tilbyde en specifik version af Bootstrap, så du skal sikre, at den valgmulighed, du vælger her er kompatibel med din skabelon/tema. Hvis dit tema ikke indeholder nogen Bootstrap -kode, skal du indstille denne indstilling til No Bootstrap i Theme, og derefter vil Jomres automatisk inkludere Bootstrap 3 -filer til eget brug. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Vis gæster for');
jr_define ('_JOMRES_HFIXED_PERIODS', 'Faste perioder');
jr_define ('_JOMRES_HDEPOSITS', 'Deposits');
jr_define ('_JOMRES_HBOOKING_FORM', 'Booking form');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Påkrævede felter');
jr_define ('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define ('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define ('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define ('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define ('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define ('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define ('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define ('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define ('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Ressourcefunktioner');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Ressourcetype');
 jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Rediger gæstetype');
jr_define ('_JOMRES_HEDIT_COUPON', 'Rediger kupon');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Rediger ekstra');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Opret flere ressourcer');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generer resources');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Hvor mange ressourcer?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Ressourcetype');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max guests per resource');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Slet alle eksisterende ressourcer?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Bemærk, du ser i øjeblikket administratorområdet med Avanceret webstedskonfiguration til Nej. Hvis du vil se flere muligheder, skal du indstille Webstedskonfiguration -> Diverse -> Avanceret webstedskonfig til Ja.');
jr_define ('DATATABLES_SINFO', 'Viser _START_til _END_af _TOTAL_poster');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Godkendelse');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Afvis bookingforespørgsel');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Godkend bookingforespørgsel');
jr_define ('_JOMRES_STATUS_APPROVED', 'Approved');
jr_define ('_JOMRES_STATUS_REJECTED', 'Afvist');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Forespørgsel');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Reservationer kræver godkendelse eller bekræftelse af tilgængelighed?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Hvis indstillet til ja, når en reservation foretages, vises den ikke i tilgængelighedskalenderne (og andre gæster kan stadig reservere disse dage og ressourcer), før ejendomsadministratoren accepterer/bekræfter tilgængelighed for reservationen . Når den er bekræftet, indsættes reservationen som foreløbig (hvis den ikke overskrider andre bookinger; andre gæster kan ikke bestille de samme datoer længere), og der sendes en e -mail til kunden for at foretage betalingen. ');
jr_define ('_JOMRES_ERROR', 'Fejl');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Beklager! Der opstod en fejl under forsøget på at behandle denne funktion. Den er blevet rapporteret for dig, og vi vil undersøge den.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Besked');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mail skabeloner');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Rediger e -mail -skabelon');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email subject');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'E -mail tekst');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'E -mail type');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'E -mail navn');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'E -mailbeskrivelse');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Se venligst denne side for at få hjælp til at tilpasse e-mails og en liste over det tilgængelige output: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates" target ="_blank"> Hjælp til e-mailskabeloner </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E -mail sendt til webstedsadministratoren, når en ny reservation foretages, hvis den globale Paypal -gateway er aktiveret');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E -mail sendt til ejendomsejer, når en ny reservation foretages');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'New Guest Booking Email');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E -mail sendt til gæsten, når en ny reservation foretages');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Gæstebekræftelsesbrev');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Udskriveligt brev eller e -mail, der kan sendes manuelt af ejendommens ejer for at bekræfte en reservation');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Denne booking kan godkendes. Alle valgte ressourcer er tilgængelige for de valgte datoer.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Denne reservation kan ikke godkendes, fordi nogle af ressourcerne allerede er reserveret til de valgte datoer. Du skal først ændre reservationen.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define ('GUEST_BUDGET', 'Budget');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Brug budgetfunktion?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Kun bootstrapped sites! Budget -funktionen er en funktion på ejendomslisten, som en gæst kan bruge til at fremhæve ejendomme, hvis pris pr. nat er under et bestemt tal. Funktionen har nogle begrænsninger i, at den kan ikke passende for nogle websteder, der bruger mange forskellige valutaer. Bemærk, hvis du bruger dette og plugin'et Fremhævede fortegnelser, ændres din featured listeindpakningsklasse automatisk til 'panel-primær', når ejendomslisten vises. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Navn:');
jr_define ('_JOMRES_FOR', 'For');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'nat');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nætter');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'maj');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Viser _START_til _END_af _TOTAL_linjer');
jr_define('DATATABLES_SINFOEMPTY', 'Viser 0 til 0 af 0 linjer');
jr_define('DATATABLES_SINFOFILTERED', '(filtreret fra _MAX_linjer)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', '.');
jr_define('DATATABLES_SLENGTHMENU', 'Vis _MENU_linjer');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Henter...');
jr_define('DATATABLES_SSEARCH', 'S&oslash;g:');
jr_define('DATATABLES_SZERORECORDS', 'Ingen linjer matcher s&oslash;gningen');
jr_define('DATATABLES_SFIRST', 'F&oslash;rste');
jr_define('DATATABLES_SLAST', 'Sidste');
jr_define('DATATABLES_SNEXT', 'N&aelig;ste');
jr_define('DATATABLES_SPREVIOUS', 'Forrige');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define ('DATATABLES_SHOWHIDE', 'Skift kolonner');
jr_define ('_BOOKING_ONREQUEST', 'Booking on request');
jr_define ('_BOOKING_INSTANT', 'Øjeblikkelig booking');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Indstil dette til Ja, hvis din skabelon ikke indeholder Font Awesome.');
jr_define ('_BOOKING_CALCQUOTE', 'Request booking');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Vælg et websted');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site -id');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'EU -land?');
jr_define ('_JOMRES_HLASTCHANGED', 'Senest ændret');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E -mail om annullering af hotelbooking');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E -mail sendt til ejendomsejeren, når en ny reservation annulleres');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'E -mail om annullering af gæstebestilling');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E -mail sendt til gæsten, når en ny reservation annulleres');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Send test -e -mail');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Test e -mail');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'Dette er en test -e -mail fra dit bookingsystem.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test -e -mail sendt med succes');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test -e -mail blev ikke sendt');
jr_define ('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define ('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define ('_OPENEXCHANGE_API_DESC', 'For at konvertere priser mellem tjenester skal du bruge en Open Exchange Rates API -nøgle. Du SKAL have en API -nøgle for at vise priser korrekt i Jomres, men du kan <a href = "https://openexchangerates.org /signup/free" target="_blank"> tilmeld dig en gratis nøgle </a> (timeopdateringer, 1000 anmodninger/måned - ingen HTTPS, e -mail support eller avancerede funktioner). Jomres downloader valutakurser en gang om dagen, så længe du bruger nøglen på kun en håndfuld websteder, det er usandsynligt, at du vil overskride disse grænser. Forud for Jomres 8.3 brugte vi en ældre, udokumenteret Yahoo -funktion, men har opdaget, at brugen af ​​denne funktion er i modstrid med Yahoos vilkår og Betingelser. Som følge heraf må vi antage, at funktionen kan forsvinde på et tidspunkt i fremtiden, derfor ændringen til at bruge Open Exchange Rates. ');
jr_define ('_JOMRES_COMMISSION', 'Commission');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Hvis du uploader flere billeder til individuelle ekstraudstyr, bruges kun det første billede.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Betal nu');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Denne faktura forfalder nu. Klik på knappen for at vælge betalingsmetode.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Her er en liste over nogle af de gode ting, du kan købe, mens du foretager en reservation på denne ejendom.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'På denne side kan du konfigurere alle installerede gateways. Disse muligheder giver dig mulighed for at tage betalinger for enhver kommissions- eller abonnementsfaktura. Frontend -indstillinger kan kun tilsidesættes af Paypal, alle andre gateways skal konfigureres via Ejendomskonfiguration -> Fanen Gateways, men hvis en gateway vises på denne liste, bør den være i stand til at behandle både bookingindbetalingsbetalinger og fakturabetalinger. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'Indstillinger for ejendomsoplysninger side');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'Ejendomsadministration i Jomres foretages kun fra webstedets frontend -cpanel. På denne side kan du liste alle ejendomme i systemet, så du kan tildele provision og godkende/afvise dem (hvis disse funktioner er aktiveret). For at oprette en ny ejendom, redigere eksisterende, administrere bookinger eller andre egenskaber/bookingsrelaterede opgaver, skal du logge ind på webstedets frontend og gå til Jomres standardside. Der vil du se Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Egenskabsfunktionskategorier');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define ('_JOMRES_HCATEGORY', 'Kategori');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Vis egenskabsfunktioner adskilt i kategorier?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Indstil dette til YES for at adskille egenskabsfunktionerne i kategorier. Denne indstilling påvirker kun egenskabsfunktionerne, der vises på ejendomsoplysningssiden. Alle andre sider viser dem uden at opdele dem i kategorier.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Fortryd checkin');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Fortryd betaling');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Uudgivet');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Din download- og supportnøgle er gyldig, du vil kunne downloade plugins via pluginhåndteringen.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Din download- og supportnøgle er IKKE gyldig, du vil IKKE kunne downloade plugins via pluginhåndteringen.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'Undertype');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Du har endnu ikke angivet din ejendoms undertype. Det er her, du definerer det som en villa med 5 soveværelser eller et sommerhus med 4 soveværelser, og det hjælper gæster, der søger med at finjustere deres søgninger.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Giv din ejendom en undertype');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mail skabeloner');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Kontaktindstillinger');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'Herfra kan du tilsidesætte alle ejendommens kontaktoplysninger (e -mail, telefon, fax), så al kommunikation med gæster sendes til dig og ikke til ejendomsejerne.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Tilsidesætter kontaktoplysninger for fortegnelser?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Hvis denne indstilling er angivet til Ja, vil ejendoms -e -mail -adresser og telefonnumre blive erstattet med dem, der er angivet i denne fane. Dette tvinger al kommunikation til at blive sendt til din nominerede e -mail -adresse, der sikrer, at gæst og ejendom ejeren kan ikke omgå bookingmotoren og de gebyrer, der vil resultere i. Det betyder også, at når en ejendoms beskrivelse ændres, vil ejendommen blive sat til Ikke godkendt (hvis godkendelsesfunktionen er aktiveret), og du skal kontrollere beskrivelsen manuelt for at sikre, at lederne ikke har indtastet telefon- eller e -mailoplysninger i tekstfelterne, før de godkender det igen. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Ændringer, der foretages i fortegnelsesoplysninger, kræver verifikation af webstedsadministrator. Hvis du gemmer nye oplysninger, annulleres din fortegnelse og afventes godkendelse af webstedsadministrator, før den igen kan ses for besøgende. Du vil ikke kunne modtage online bookinger, mens din fortegnelse er upubliceret og afventer godkendelse. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Bekræft bookinganmodning');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Ændre bookinganmodning');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Mark faktura som afventende');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Faktura markeret som afventende');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Send anonyme sporingsdata?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Vælg Ja for at sende anonyme sporingsdata til Jomres.net for at hjælpe os med bedre at forstå, hvordan du bruger systemet.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Sørg for, at dine oplysninger er udfyldt på siden Rediger min konto, før du forsøger at foretage bookinger på vegne af dine klienter.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Gæstes kontaktoplysninger");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - Ny gæst -');
jr_define ('_JOMRES_CHARTS', 'Diagrammer');
jr_define ('_JOMRES_CHARTS_SELECT', 'Select chart ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'Indkomst efter år/måned');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, lad os komme i gang. Først skal du oprette nogle værelser til denne ejendom.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Opret nogle værelser nu');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Forskning har vist, at ejendomme med masser af billeder i høj kvalitet genererer flere visninger. Upload et hovedbillede og nogle diasshow -billeder for at forbedre dine chancer for at få bookinger.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload et billede');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Opret nogle takster');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Hvad vil gæsterne booke?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Er denne ejendomstype en hoteltype ejendom, hvor du lejer værelser ud i ejendommen eller en villa type ejendom, hvor du lejer hele ejendommen ud i én booking?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Værelser i ejendommen');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Hele ejendommen');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Begge'); // Dette er en midlertidig indstilling, der giver bagudkompatibilitet for eksisterende brugere, der endnu ikke har opdateret deres ejendomstyper. Det kan ikke vælges
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Hvad vil gæsterne booke?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Du skal udfylde dine adresseoplysninger, så dine gæster kan finde dig, når de kommer for at blive.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Opdater din adresse');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Ups, det ser ud til at du måske har glemt at udfylde alle felterne.');
jr_define ('_JOMRES_CONTANT_US', 'Kontakt os');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hej, og velkommen til din nye ejendom på');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Du har for nylig tilføjet en ny ejendom til vores websted, og vi vil gerne byde dig velkommen i familien.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Du kan se dit nye dashboard');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'her');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "Når du har konfigureret din ejendom, kan du se, hvordan den ser ud for stedets besøgende ved at besøge");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'din forside.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(det er ikke offentliggjort, så stedets besøgende kan ikke se det endnu).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "Øverst på siden kan du se et antal meddelelser. Knapperne ved siden af ​​disse meddelelser guider dig til de sider, du skal besøge for at konfigurere din ejendom på vores websted. Når du ' har udført hver af disse opgaver, vil det være meget lettere for besøgende på vores websted at finde din ejendom og foretage bookinger online. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Hvis du overhovedet har spørgsmål');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontakt os');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "og vi vil med glæde besvare alle dine spørgsmål.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Alt godt, vores team på');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Du ser ikke ud til at have nogen ture at sælge. Opret en turprofil, og brug derefter knappen Generer til at oprette nogle ture.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Lad os lave nogle ture!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Byt valutasymbolplacering');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Brug denne mulighed til at flytte valutasymbolet bagfra, til foran pristallet eller omvendt.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Indtast dit facebookside -id, f.eks. "jomres". Lad dette stå tomt for ikke at vise noget. Indtast ikke https://www.facebook.com eller andet.');
jr_define ('COMMON_DOWNLOAD', 'Download');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Næste skal du tilføje nogle takster. Dette er dine grundpriser.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap er ikke aktiveret!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Advarsel, du har ikke Bootstrap aktiveret i Jomres -webstedskonfiguration -> fanen Diverse. For at give <i> nogle </i> funktioner bruger Jomres i øjeblikket sine gamle jQuery UI -baserede skabeloner, men disse er ikke blevet bearbejdet i flere år. Al nuværende udvikling og forbedringer af Jomres -skabeloner (layoutfiler) foretages i dens Bootstrap 3. -skabelonfiler. For at få det bedste ud af Jomres anbefaler vi, at du installerer en Bootstrap 3 -baseret tema for Wordpress eller Joomla. Når du har gjort det, kan du aktivere Jomres \'Bootstrap -skabeloner i Site Configuration.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Din supportnøgle er gyldig. Bemærk, at denne licens ikke tillader download af plugins.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Træk bookinger til dette område for at annullere dem');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Sørg for, at du har oprettet en WordPress-side, der indeholder [jomres: xx-XX] -kode (hvor xx-XX er dit webstedets sprogkode, f.eks. [jomres: da-GB] eller [ jomres: da-US]) ellers har du ikke adgang til Jomres fra frontend for at administrere dine ejendomme og bookinger. <br> Jomres er bygget på Bootstrap-rammerne, så du skal bruge det på et tema baseret på Bootstrap. Vi anbefaler en baseret på Bootstrap 3. Hvis du ikke har adgang til et tema, anbefaler vi, at du bruger Jomres Leohtian-temaet til Wordpress, som du kan <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank"> download herfra. </a> ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Inden du kan oprette en værelsestype, skal vi vide, om det er til en ejendom af en hoteltype eller en ejendom af en villa.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Klik for at tilføje nye værelsestyper');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Advarsel, du har en eller flere ejendomstyper uden rumtyper. Egenskaber har brug for rumtyper, så ejendomsadministratorer kan oprette takster.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Brug knappen Ny til at oprette nye rumtyper.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Ingen bookinger/fast ejendom (simpel liste)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Logfilplacering');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logger systemaktivitet som standard til' .JOMRES_SYSTEMLOG_PATH. "-placeringen. Da denne fil kan indeholde følsomme oplysninger (api -nøgler, systemstier, gateway -oplysninger, gæsteoplysninger) anbefaler vi stærkt, at du ændrer denne sti til en over din webdokumentrot. Hvis du ikke forstår, hvad dette betyder, skal du spørge dine webværter om råd, da de kender dit filsystem. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logger detaljerede oplysninger om dit system, herunder api -nøgler, systemstier, gateway og gæsteinformation, som alle ikke bør være synlige for resten af ​​internettet. Din systemlog -sti er ikke angivet, så derfor systemlogfiler gemmes i øjeblikket i biblioteket '.JOMRES_SYSTEMLOG_PATH.', hvilket ikke er ideelt. Besøg webstedskonfiguration -> fejlfinding og angiv en sti i dit filsystem, der ligger uden for webroden. Hvis du er i tvivl, skal du kontakte dine webværter som de vil kunne rådgive dig. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Hvis dit CMS er installeret i rodmappen på dit websted, ville en passende placering være');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Du har ikke en Google Maps -nøgle. På grund af de seneste ændringer i Google maps har alle nye websteder brug for en API -nøgle for at kunne bruge Google maps funktioner. <a href = 'http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target ='_blank '> se vores manual side om, hvordan du opretter en API-nøgle < /a> og gem nøglen i Jomres. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'Google map farveskema');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Okay, lad os begynde at tilføje din ejendom til webstedet. Vi skal indsamle lidt information om din ejendom her. Dette vil give os mulighed for at oprette de blotte knogler på din ejendom. Når det er gjort, så skal du vil blive guidet gennem tilføjelse af værelser, priser og billeder. ");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Ejendomstypen hjælper dig med at definere, hvordan ejendommen skal bookes, f.eks. med hoteller, du "sælger" kun et eller to værelser ad gangen, mens du med villaer tilbyder hele ejendommen.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Bemærk, at e -mailadressen ikke behøver at være den samme som den, du brugte, da du registrerede din konto. Dette giver dig mulighed for at have forskellige adresser til forskellige ejendomme.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Du kan konfigurere det mindste indbetalingsbeløb, der skal opkræves. Hvis du gør det, kan indstillingerne "Påkrævet depositum er prisen for den første nat?" og "Indskud kræves er procentdel?" i ejendomskonfiguration ikke konfigureres , i stedet er alle indskudsværdier en procentdel og skal mindst være det tal, du definerer her. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Dette tal må ikke være mindre end');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Hvis du vil sende systemlogningsmeddelelser til en syslog -server, kan du indstille værtsnavn eller IP (f.eks. 192.168.0.2) og port (f.eks. 514) her. Bemærk, hvis webstedet er indstillet til ' Udvikling 'derefter vil DEBUG -meddelelser blive sendt. Hvis det er indstillet til' Produktion ', sendes kun INFO -niveau og højere meddelelser. For at deaktivere logning til fjernserveren skal du tømme værts- og portfelterne. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP har ikke tilladelse til at få adgang til 'openlog' og 'syslog' PHP -funktionerne. Dette er en indstilling på serversiden, hvis du vil have Jomres til at sende beskeder til en syslog -server, skal du kontakte dine værter og bekræft, om PHP har adgang til disse funktioner. Når den er aktiveret, vil du kunne konfigurere din syslog -servers indstillinger her. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Send en e -mail til webstedets administrator, når der opstår en fejl?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historisk set er emner, der bør undersøges, blevet sendt til webstedsejere. Dette kan være fantastisk til at holde øje med driften af ​​dit system, da det har frygtelig mange bevægelige dele, og det er svært at holde styr på dem alle. Desværre kan edderkopper og robotter, der gennemsøger dine websteder (selv venlige) utilsigtet udløse fatale fejl, og dette kan medføre, at antallet af meddelelser, du modtager, bliver overvældende. Hvis det er tilfældet, skal du indstille denne mulighed til Nej. Jomres sender logning beskeder til både et sæt logfiler og til en syslog -server (hvis dine specifikke PHP -indstillinger tillader det, hvis de ikke bedes kontakte din vært). Du kan manuelt analysere filerne, hvis du leder efter noget specifikt (f.eks. hvis du udvikler en gateway og vil bruge funktionsopkaldet gateway_log ().) men det er mange oplysninger at trawl igennem, så det er bedre at bruge noget som en syslog filanalysator. Hvis du udvikler på linux så der er masser af værktøjer til rådighed for dig, hvis et enkelt værktøj, du kan bruge i Windows, er http://maxbelkov.github.io/visualsyslog/ På denne side skal du indstille 'Syslog -vært' til '127.0.0.1' og ' Port 'til 514 for at se meddelelser logget på det værktøj. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Administrer egenskaber');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Du har ikke et IP -detekterings -API -nøglesæt. Dette er nødvendigt for at systemet automatisk kan registrere brugerens placering og indstille deres valuta og land automatisk. <a href = 'http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> se vores manual side om, hvordan du opretter en IP -registrerings -API -nøgle </a> og gemmer nøglen i Jomres> Webstedskonfiguration> Valutaomregninger / Valutakoder. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Du har ikke et Open Exchange Rates API -nøglesæt. Dette er nødvendigt for at systemet automatisk kan downloade og bruge valutakurser. <a href = 'http://www.jomres.net /manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> se vores manual side om, hvordan du opret en IP -registrerings -API -nøgle </a> og gem nøglen i Jomres> Webstedskonfiguration> Valutaomregninger / Valutakoder. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Tilladelsesnummer');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Nogle lande lovgiver, at du skal vise et tilladelsesnummer for din ejendom. Hvis du har et sådant nummer, skal du indtaste det her, og det vil blive tilføjet til ejendomsoverskriftsafsnittet.');
jr_define ('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot plugin SKAL installeres og aktiveres for at disse shortcodes kan fungere. Dette kan findes i Jomres Plugin Manager. Hvis dette websted blev bygget med et af disse websteder, skal dette plugin bruges til at fungere. Quickstarts, så er det sandsynligvis allerede installeret. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Du skal sikre, at pluginnet <strong> 'Jomres Shortcodes' </strong> er aktiveret. Dette findes i Jomres Plugin Manager. Hvis dette websted blev bygget ved hjælp af en af ​​Quickstarts, er det sandsynligvis allerede installeret.");
jr_define ('SHORTCODE_TASK', 'Task');
jr_define ('SHORTCODE_DESCRIPTION', 'Description');
jr_define ('SHORTCODE_ARGUMENTS', 'Argumenter');
jr_define ('SHORTCODE_EXAMPLE', 'Eksempel');
jr_define ('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define ('INTEGRITY_CHECK_DESC', 'Denne funktion giver dig mulighed for at kontrollere, at filsystemet matcher det, der leveres i den aktuelle version af Jomres. Dette er nyttigt for at sikre, at alle filer blev opdateret korrekt efter installation/opgradering. Filer i rødt mangler, filer i Orange findes, men er forskellige fra dem, der blev leveret i den nuværende build. Kun fiiles, der er potentielle problemer, vil blive anført her. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! Ingen problemer blev fundet.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Læs mere');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Læs mindre');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Turistafgift');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Turistafgiftssats');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Indstil turistafgiftssatsen. Turistafgiften beregnes først, efter at den første booking er genereret og tilføjes til reservationsbekræftelsessiden i feltet ekstra services.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Indstil dette til Ja, hvis afgiften er en procentdel eller Nej, hvis det er et fast gebyr.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Påvirker hele bookingværdien?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Sæt dette til Ja, hvis afgiften skal dække hele værdien af ​​reservationen, så det er en procentdel af både indkvarteringen plus eventuelle ekstra, eller Nej, hvis det kun beregnes ud fra værdien af indkvarteringens total. Hvis indstillingen 'Er procentdel' ovenfor er sat til Nej, ignoreres denne mulighed. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Vær opmærksom på, at der vil blive tilføjet en turistafgift til denne reservation. Du vil kunne se afgiften på gennemgangsreservationssiden.');
jr_define ('NO_LICENSE_MESSAGE', "Du har ikke gemt et licensnummer i Site Configuration, derfor vil du ikke kunne downloade plugins. Når du har gemt en gyldig licensnøgle, kan du installere alle plugins, der er angivet som Core plugins. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Du ser ud til at bruge et licensnummer, der er ugyldigt eller er udløbet. Når du har gemt en gyldig licensnøgle, kan du installere alle plugins, der er angivet som Core -plugins.");
jr_define ('VALID_LICENSE_MESSAGE', "Tillykke, du bruger et gyldigt licensnummer og kan installere Core plugins via Jomres plugin manager.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Denne side giver dig mulighed for at uploade billeder til din ejendom og de ting, du tilbyder. Den har en hovedknap og en anden knap, der giver dig mulighed for at vælge specifikke ressourcer til at uploade billeder til. Så Hovedejendommen billede og diasshowet viser kun en knap, men hvis du har oprettet f.eks. ekstraudstyr eller lokaler, vil du se en anden knap, hvor du kan uploade billeder for de specifikke ressourcer. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Denne side giver dig mulighed for at uploade billeder til din ejendom og de ting, du tilbyder. Den har en hovedknap og en anden knap, der giver dig mulighed for at vælge specifikke ressourcer til at uploade billeder til. Så Hovedejendommen billede og diasshowet viser kun en knap, men hvis du har oprettet valgfrie ekstras, vil du se en anden knap, hvor du kan uploade billeder for de specifikke ressourcer. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Vælg først de eller de billeder, du vil uploade, ved at klikke på Tilføj billede eller bruge Træk og slip. Disse vises i kolonnen i højre side. </li>
  <li> Over dette område skal du bruge knappen \"Vælg ressource \" til at vælge, hvilken ressource du vil uploade billeder til. Du kan blive tilbudt muligheden for at vælge en bestemt ressource nedenunder. </li>
  <li> Når du har valgt en ressource, kan du derefter klikke på knappen Upload billede under et billede for at knytte den til den pågældende ressource. Når et billede er blevet uploadet, vil det forsvinde fra kolonnen på det højre websted og vises i venstre side. </li>
  <li> Brug knappen Papirkurv ved siden af ​​eksisterende billeder til at fjerne billeder, du ikke længere vil have vist. </li>
  <li> Du kan ændre den rækkefølge, som filer vises i diasshowet, ved at omdøbe dem, før de uploades, da de vises på sider i alfabetisk rækkefølge. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Ved siden af ​​knappen Ressource kan du muligvis se en forhåndsvisningsknap. Hvis du klikker på dette, vil du se en popup, der viser dig, hvordan de aktuelt uploadede billeder vil se ud på en side. Dette hjælper med at give dig en idé om, hvordan billederne vil se ud for dine kunder. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Der er ingen grænse for antallet af billeder, du kan uploade. Billederne ændres automatisk, når de uploades. Du kan kun uploade JPG- og PNG -filer.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideelt set ville alle billeder, du uploader, være mindst");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixels wide, ellers kan de se uklare ud efter at de er blevet uploadet.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Alle billeder, du uploader, må ikke være mere end");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "i størrelse.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Vælg den ressource, du vil uploade billeder til");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specifik ressource");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Billeder allerede uploadet til denne ressource");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Tekstformatering');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Du kan indtaste tekst her ved hjælp af simpel Markdown -formatering. Du behøver ikke at kende nogen HTML, bare brug knapperne til at få oplysningerne til at se ud, eller formater tekst i henhold til disse eksempler.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Betoning');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'fed');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'gennemstregning');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Lister");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Nummereret listeelement');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst til visning');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citater');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Dette er et citat.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Det kan strække sig over flere linjer!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Billeder');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabeller');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Kolonne');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Hvis indstillet til ja, vises et diasshow med egenskabets hovedbilleder. Hvis det er indstillet til nej, vises det første ejendoms hovedbillede.');
jr_define ('EDIT_CMS_USER', 'Rediger CMS -bruger');
jr_define ('BOOKING_MADE_BY', 'Booking foretaget af');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Faciliteter');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Rumtyper');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Ekstern reservationsformular URL');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Her kan du angive en ekstern URL, hvis du vil bruge et tredjepartswebsted til at foretage bookinger. Alle jomres bookingknapper peger på denne URL. Lad dette felt være tomt, hvis du vil bruge Jomres bookingformularen . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Gæstesorteliste');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Hvis denne gæst er sortlistet, vil de ikke længere være i stand til at foretage bookinger i denne ejendom.'); jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Gem jomres sessionsfiler på disk eller i database. Anbefalet: database');
jr_define ('_JOMRES_MAP_HEIGHT', "Korthøjde (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Kort zoomniveau");
jr_define ('_JOMRES_MAP_MAPTYPE', "Korttype");
jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Skabelonpakker er plugins, der kan tilvejebringe tilsidesættelsesskabeloner til forskellige centrale Jomres -skabelonfiler.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Denne side viser alle skabelonfiler, der kan tilsidesættes af en skabelonpakkes skabelonfiler. Hvis du vil tilsidesætte en bestemt skabelonfil, skal du klikke på redigeringsknappen for den pågældende fil, på den næste side vil du være i stand til at vælge, hvilken version du vil tilsidesætte med. Bemærk, at disse tilsidesættelser prioriteres frem for både Jomres Core og enhver Wordpress- eller Joomla -tema-/skabelonoverstyring. Du kan deaktivere en tilsidesættelse ved at slette den på siden Liste -skabelonoverstyringer. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Skabelonnavn");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuel sti");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Ikke tilsidesat");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Du kan vælge, hvilken skabelonfil der skal tilsidesætte kerneskabelonfilerne ved at ændre rullemenuen");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Procenterede værelser reserveret");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Procenterede værelser reserveret");
jr_define ('_JOMRES_SELECT_WIDGETS', "Vælg widgets");
jr_define ('_JOMRES_INTERVAL', "Interval");
jr_define ('_JOMRES_TIMELINE', "Tidslinje");
jr_define ('_JOMRES_CPANEL_GRID', "Kontrolpanelets hjemmelayout");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Vælg gitterlayoutet på din frontend ejendomsadministrations kontrolpanels startside.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Bybilleder");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Ændring af egenskabstypen sletter alle værelser, takster, ejendomsindstillinger og nulstilling af tilgængelighed.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Bemærk venligst, at efter opdatering skal du opdatere alle Jomres Plugins, der allerede er installeret, via Jomres plugin manager. Hvis du har Core plugins installeret, men ikke har en gyldig Jomres -licens, gør vi <em> det ikke </em> anbefaler, at du opdaterer Jomres, da ældre plugins ofte ikke fungerer med nyere versioner af Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Bemærk venligst, at efter opdatering skal du opdatere alle Jomres Plugins, der allerede er installeret, via Jomres plugin manager.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Hvis du vil opdatere Jomres og dets plugins, skal du have en fornyelseslicens. Besøg <a href='https://www.jomres.net/pricing' target='_blank'> vores websted </a> for flere oplysninger. I de fleste tilfælde er disse licenser 50% af prisen på en fuld licens. Sørg for, at du har logget ind på vores butik, før du forsøger at købe en fornyelse. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Betalingsmetode:");

jr_define ('_JOMRES_PRICES', "Få forbindelse");


jr_define ('_OAUTH_TITLE', "Administration af appnøgler");
jr_define ('_OAUTH_APPS', "REST API -klientoplysninger");
jr_define ('_OAUTH_IDENTIFIER', "Identifier");
jr_define ('_OAUTH_APIKEY', "Client ID");
jr_define ('_OAUTH_SECRET', "Secret");
jr_define ('_OAUTH_CREATED', "Oprettet/opdateret app");
jr_define ('_OAUTH_CLIENT_ID_INFO', "Klient -id og hemmelighed oprettes for dig. Identifikatoren er, så du let kan identificere dette nøglepar.");
jr_define ('_OAUTH_SCOPE_TITLE', "Tilladelser (hvad klienten kan gøre)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Brugerrettigheder");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Egenskabstilladelser");

jr_define ('API_DOCUMENTATION_TITLE', "App REST API -dokumentation");

jr_define ('_OAUTH_CONFIG', "API Core -konfiguration");

jr_define ('_OAUTH_CONFIG_SHOW', "Vis API -klientkonfigurationsindstillinger i Jomres hovedmenu?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Du kan vælge at ikke vise API -klientens konfigurationsmuligheder i sektionen 'Min konto' i Jomres hovedmenu. Du kan i stedet beslutte, at du vil vise dem på andre sider ved hjælp af Jomres Shortcodes.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Viser API -kernedokumentationssiden. API Core giver brugerne mulighed for at oprette API -klienter, som derefter bruges til at få adgang til API -funktionaliteten, der er beskrevet i API Core -dokumentationen.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Viser API -kerneadministrationssiden, hvor ejendomsadministratorer kan konfigurere API -klienter. Bemærk, at dette kun er en registreret brugerfunktion, så brugere skal være registreret og logget på, før de kan se denne side.");

jr_define ('API_METHODS_TITLE', "API -metoder");
jr_define ('API_METHODS_DESCRIPTION', "Denne liste over metoder er baseret på dine installerede API -funktions plugins og genereres automatisk. Hvis du installerer eller sletter et API -funktions plugin, skal du besøge denne side for at genopbygge denne liste over API -metoder, der er tilgængelige på dit websted. ");

jr_define ('_OAUTH_REDIRECT_URI', "Omdiriger URI");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Giv mig et navn, der har betydning for dig, f.eks. Min telefon");

jr_define ('_OAUTH_GRANT_TYPES', "Dette system understøtter to tildelingstyper, Client Credentials og Implicit. Hvis du bruger flowet <em> client_credentials </em>, skal du have både klient -id og klienthemmelighed. Hvis du bruger <em > implicit </em> så ville din app bare sende klient -id'et, og du ville logge ind på systemet for eksplicit at godkende den app. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "For at bruge <em> implicit </em> tildelingstypestrømmen skal du bruge denne url til at godkende dine apps. Når denne webadresse kaldes, og du har godkendt appen, vil systemet udstede et tegn, som du apps derefter vil bruge til at kalde dette systems API ");
jr_define ('_OAUTH_AUTHORISATION_URL', "Autorisationswebadresse");

jr_define ('WEBHOOKS_CORE', 'Webhooks');

jr_define ('_WEBHOOKS_CONFIG_SHOW', "Vis Webhook -konfigurationsindstillinger i Jomres hovedmenu?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Du kan vælge at ikke vise Webhook -konfigurationsindstillingerne i sektionen 'Min konto' i Jomres -hovedmenuen. Du kan i stedet beslutte, at du vil vise dem på andre sider ved hjælp af Jomres Shortcodes.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks -dokumentation");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Viser API -kernedokumentationssiden. API Core giver brugerne mulighed for at oprette API -klienter, som derefter bruges til at få adgang til API -funktionaliteten, som er beskrevet i API Core -dokumentationen.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Viser API -kerneadministrationssiden, hvor ejendomsadministratorer kan konfigurere API -klienter. Bemærk, at dette kun er en registreret brugerfunktion, så brugere skal være registreret og logget på, før de kan se denne side.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'Integration ID');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL or Name');
jr_define ('WEBHOOKS_ENABLED', 'Aktiveret');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Eventuelle webhooks, du opretter, udløses ikke, da du ikke er tildelt nogen ejendomme. Super ejendomsadministratorer tildeles typisk ikke individuelle ejendomme, så du skal muligvis have en ny bruger til oprettelse af webhook.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Eventuelle webhooks, du opretter, udløses mod følgende egenskaber:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'Reviews limit');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Brug denne indstilling til at begrænse antallet af anmeldelser vist på ejendomsoplysningssiden.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Vis alle anmeldelser');

jr_define ('VIDEO_TUTORIALS', 'Video Tutorials');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum indskudsværdi');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Hvis det beregnede indskud er mindre end dette tal, skal du indstille indskud til denne værdi i stedet. Dette tal kan i sig selv blive overskredet, hvis det ikke opfylder webstedets minimumsindskud. Indstil det til 0 til ikke bruge indstillingen. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'For at øge dit websteds hastighed anbefaler vi at importere detaljer om det eksisterende websted og ejendomsbilleder til databasen.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importer eksisterende billeder til databasen');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Eksperimentel funktion. Hvis aktiveret, vil billeder, der uploades ved hjælp af mediecenterfunktionen, også blive kopieret til din Amazon S3 -spand og serveret fra din Amazon S3 -spand -url. Når du aktiverer dette første gang, vil du også blive lovet at importere eksisterende billeder til din S3 -spand. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domæne');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Erstat dit standard Amazon S3 -domæne med dit CloudFront -domæne');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Anbefales at blive aktiveret. Kun for Windows og Mac OSX, hvis libcurl ikke blev bygget med Schannel eller Secure Transport -understøttelse (de native SSL -biblioteker inkluderet i Windows og Mac OS X), skal du indstille dette til Ingen.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Du har aktiveret Amazon S3 -integrationen, så du bliver nødt til at kopiere alle eksisterende billeder til din S3 -spand. Billeder vises nu til dit websteds besøgende fra din Amazon S3 -url, så du skal bruge at kopiere dem først til din S3 -spand, ellers vil de ikke være synlige for dit websteds besøgende. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Når du klikker på denne knap, skal du ikke afbryde processen og vente på en succes- eller fejlmeddelelse. Afhængigt af serverhastighed kan dette tage et stykke tid at fuldføre.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopier eksisterende billeder til Amazon S3 -spand');


jr_define ('JOMRES_INCOMPLETE', 'Incomplete');
jr_define ('JOMRES_WATING_APPROVAL', 'Ventende godkendelse');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Kort over ejendomsoplysninger');

jr_define ('HAS_STARS_TITLE', 'Tillader stjerneklassificering?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force genoverførsel af billeder til S3 -spand');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Slet alle Jomres -data ved afinstallation?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Hvis indstillet til ja, sletter Jomres alle dets databasetabeller, når de afinstalleres. Dette sletter alle Jomres -data fra db og kan ikke fortrydes.');

jr_define ('TRANSACTION_IDS', 'Transaktions -id');
jr_define ('PAYMENT_METHOD', 'Betalingsmetode');
jr_define ('POA_DISPLAY_PRICE', 'POA Price');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Når egenskaber vises på en liste, vil systemet forsøge at finde en gyldig pris ud fra konfigurerede tariffer baseret på enten dagens dato, eller hvis datoer blev brugt i en søgning, derefter baseret på disse datoer . Hvis det ikke kan, viser det POA (Pris på ansøgning), hvilket betyder, at gæsten skal kontakte dig for at få en pris. Hvis du vil, kan du konfigurere en pris her, der vil blive vist i stedet for POA -teksten. Dette tal ville være en "fallback" -pris at vise, hvis ingen anden pris kan bestemmes. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Du skal installere plugin manager, før du kan installere Jomres plugins, vil du gøre det nu?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Du skal opdatere pluginhåndteringen, før du kan opdatere eventuelle installerede plugins, vil du gøre det nu?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Lad os gøre dette!");

jr_define ('INCLUDEINFILTERS', 'Inkluder i filtre?');
jr_define ('INCLUDEINFILTERS_DESC', 'Egenskabsfiltre i Ajax Composite Search kan blive meget lange, så du kan indstille denne indstilling til Nej for at forhindre, at denne funktion vises i egenskabslisten.');

jr_define ('REVIEW_REMINDER_PT1', "Du har");
jr_define ('REVIEW_REMINDER_PT2', "booking (er), som du ikke har efterladt en anmeldelse af endnu. Skriv en anmeldelse.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Bookinger venter på anmeldelser");
jr_define ('REVIEW_NAG', "Nag gæster for anmeldelser?");
jr_define ('REVIEW_NAG_DESC', "Når en gæst er blevet reserveret fra en reservation, vil systemet minde dem om at skrive en anmeldelse af deres reservation. Indstil denne indstilling til Nej for at deaktivere denne påmindelse.");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Vil du sende kopier af booking -e -mails til webstedets administratorer?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Når den er aktiveret, sendes kopier af booking -e -mails sendt til ejendomsadministratorer også til alle webstedets administratorer.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Skjul adresse?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Hvis du indstiller denne mulighed til Ja, er det kun gæster, der allerede har foretaget en reservation på din ejendom, som kan se ejendommens adresse. Du vil måske bruge denne indstilling til at skjule ejendommens nøjagtige placering hvis den f.eks. rutinemæssigt efterlades uden opsyn. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimer billeder ved upload?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Når det er aktiveret, optimeres billeder til web (filstørrelse kan være op til 75% mindre). Afhængigt af den uploadede billedtype skal din server have en eller flere af disse biblioteker installeret af hosting udbyder: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define ('OBSOLETE_FILES_CHECK', 'Check of Old Files Check');
jr_define ('DATATABLES_COLVIS', 'Column Visibility');

jr_define ('API_TOKEN_LIFETIME', 'API -token levetid');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Hvor længe et API -token forbliver gyldigt i sekunder. 86400 = 1 dag, 31536000 = 1 år');


jr_define ('ENCRYPTION_TITLE', 'Encryption');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Krypteringsfilplacering');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Slet aldrig krypteringsfilen ** <br/> Brugerdata gemmes krypteret i tabeller for at sikre, at "data i hvile" er beskyttet sikkert i overensstemmelse med GDPR -anbefalinger. Som standard er krypteringsnøglen er gemt i filen "encryption_key.class.php" i roden af ​​din Jomres -installation (typisk /public_html /jomres). Du kan ændre, hvor filen er gemt her. Hvis du ændrer placeringen, skal du flytte filen, vent ikke på, at Jomres opretter en ny version, ellers kan du ikke afkode dine gæsters detaljer. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'De oplysninger, du gemmer her, vil blive brugt på fakturaer genereret for denne ejendom');

jr_define ('_JOMRES_GDPR_POLICIES', 'GDPR Policies');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Her kan du konfigurere, hvor længe efter at en reservation eller faktura er blevet oprettet, skal den fjernes fra systemet for at sikre, at du er i overensstemmelse med GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Reservationsopbevaringsperiode (i dage)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Hvor mange dage efter en booking afrejsedato skal reservationen slettes? Når den slettes, fjernes både reservationen og fakturaen. En typisk opbevaringsperiode kan være 365 dage.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Fakturaopbevaring (ikke-booking) periode');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Andre fakturaer, f.eks. provision- og abonnementsfakturaer, er ikke knyttet til bookinger. Som følge heraf vil de ikke blive slettet, når bookingfakturaer og kontrakter slettes. Afhængigt af dit land og din egen forretningspraksis, du bliver nødt til at konfigurere en anden opbevaringsperiode. En typisk opbevaringsperiode kan være 3653 dage, hvilket er 10 år. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Dine data');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Nogle funktioner på dette websted skal gemme oplysninger om dit besøg. Dette bruges kun til at levere service til dig, deles aldrig med andre og slettes, når det ikke længere er nødvendigt.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'GIVER DU OSS TILLADELSE TIL AT LAGRE DENNE INFORMATION ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'I detaljer');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Du skal give samtykke til, at vi gemmer disse data, så du kan foretage bookinger på dette websted. Uanset om du accepterer, at dine data gemmes eller ej, gemmer vi en cookie på din computer for at fortælle det os, uanset om du har valgt det. Dette hjælper os med at sikre, at vi ikke hele tiden spørger dig om, hvorvidt du vil melde dig ud eller ikke, og det ikke indeholder nogen personligt identificerbare oplysninger (PII). Hvis du skifter mening, synes du kan besøge siden "Apptilladelser" når som helst for at melde sig fra eller fra. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Oplysningerne gemmes i forskellige tidsperioder afhængigt af besøgets art. Så hvis du bare kigger rundt, gemmer vi omtrentlige geografiske oplysninger (landniveau). Hvis du udfører søgninger, så til gør søgeformularer mere brugervenlige, vi gemmer de sidste ting, du har søgt på. Disse oplysninger gemmes typisk i maksimalt 24 timer og bruges kun til at gøre dit besøg mere behageligt. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Når du foretager en reservation hos os, gemmes der nødvendigvis flere oplysninger.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Teknikkerne i reservationsformularen indsamles og opbevares i maksimalt 60 dage. Dette er påkrævet, så bookinger på forespørgsel kan omdannes til fulde bookinger, når en reservation er godkendt og til analyse af vores teams hvis der er et problem med en reservation. Hvis du ikke var logget ind, da du foretog en reservation, sender vi en e -mail til dig med et brugernavn og en adgangskode, så du kan se din bookinghistorik og udøve din ret til at blive glemt (RTBF), hvis du ønsker at gøre det. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data indtastet i reservationsformularen, f.eks. navn, e -mail -adresse, reel adresse gemmes i maksimalt 365 dage efter bookingens afrejsedato. Disse oplysninger gemmes i krypteret form i vores database så kun autoriserede personer kan se det. Hvis du foretager en reservation, skal vi ved lov gemme din PII, mens reservationen er gyldig. Når reservationen er gennemført, enten fordi den er blevet annulleret, eller du er blevet tjekket ud, så vil du være i stand til at udøve din RTBF ved at logge ind og besøge siden "Dine data". Fakturaoplysninger for gennemførte bookinger gemmes stadig sikkert i vores database for at sikre, at vi overholder relevante skattelove, men du vil kunne fjerne alle andre PII efter reservationen er gennemført. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Når du accepterer, at dine oplysninger gemmes som beskrevet ovenfor, er vi juridisk forpligtet til at gemme dette samtykke i vores database. Disse oplysninger inkluderer dit IP-nummer og indholdet af tilmeldingsformularen. Vi vil beholde denne meddelelse om samtykke på ubestemt tid (dette er et lovkrav). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Du har endnu ikke fortalt os, om vi kan indsamle personligt identificerbare oplysninger om dig');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Du har givet samtykke til, at vi indsamler de nødvendige personligt identificerbare oplysninger til at foretage bookinger');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Du har bedt os om ikke at indsamle personligt identificerbare oplysninger');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Du har ikke givet os tilladelse til at indsamle dine private data');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For at du kan udføre bestemte handlinger på dette websted, skal vi indsamle personligt identificerbare oplysninger om dig, men du har ikke givet os tilladelse til at gøre det.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Skift dine tilladelser');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Fortsæt med at se ejendomme');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'App -tilladelser');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Gæstedata');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Disse er de oplysninger, der gemmes for dig af de forskellige ejendomme. Forskellige hoteller kan have forskellige poster, afhængigt af hvad du indtastede, da du foretog reservationen.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Du har ingen data gemt på hoteller i dette system');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profildata');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Dette er det vigtigste datasæt, vi har for dig, adskilt fra dem, du har delt med forskellige egenskaber.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Du har ikke gemt nogen profiloplysninger');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Her er de personligt identificerbare oplysninger, vi gemmer på dette websted for dig. Det er konstrueret i JSON (JavaScript Object Notation) -format, som er et let dataudvekslingsformat. Det er let for mennesker at læse og skrive, og det er let for maskiner at analysere og generere. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Anonymiseret');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Dine data');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Ved at acceptere disse vilkår for brugsbetingelser (denne "aftale") accepterer du, at:

<ul>
<li>
Du er autoriseret til at booke hoteller via dette websted;
</li>
<li>
Du er mindst 18 år gammel;
</li>
<li>
Du besidder den juridiske myndighed til at oprette en bindende juridisk forpligtelse;
</li>
<li>
Du vil bruge webstedet i overensstemmelse med denne aftale;
</li>
<li>
Du vil kun bruge webstedet til at foretage legitime forbehold for dig selv eller for en anden person, for hvem du er lovligt autoriseret til at handle;
</li>
<li>
Du vil informere sådanne andre personer om denne aftale, der gælder for de forbehold, jeg har taget på deres vegne, herunder alle regler og begrænsninger, der er gældende for den;
</li>
<li>
Alle oplysninger, du selv leverer til webstedet, er sande, nøjagtige, aktuelle og fuldstændige; og
</li>
<li>
Du vil beskytte dine kontooplysninger og overvåge og være fuldt ansvarlig for enhver brug af din konto af dig selv og andre end dig.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Sikkerhed og gennemsigtighed er vigtige for os.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Vi tager vores ansvar med hensyn til lagring af dine data meget alvorligt. Alle personligt identificerbare oplysninger (PII) lagres krypteret i vores database ved hjælp af branchestandardalgoritmer for at sikre, at kun autoriserede brugere kan se disse oplysninger.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Du kan downloade hele den PII, vi gemmer for dig.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download nu');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Retten til at blive glemt (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Vi mener, at du skal kunne <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> slette </a> din < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Personligt identificerbare oplysninger </a>, hvis du vil, og hvis det er praktisk muligt. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Du er ikke registreret på dette websted. Din generelle placering (land) og IP -nummer gemmes i maksimalt 24 timer og slettes derefter.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Du er ikke registreret på dette websted, og du har fravalgt dataindsamling. Vi har ikke gemt din PII.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Du er registreret på webstedet og har ingen afventende eller aktive bookinger. Vi kan anonymisere de fleste oplysninger, vi i øjeblikket har til dig. Vil du gøre det?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Bemærk: Dette sletter ikke din konto, det anonymiserer simpelthen vores registreringer, så din konto ikke kan knyttes til dig som person. Ifølge loven skal vi fortsat gemme din PII til fakturering, men vi vil dog slet alle gæsteposter. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Du er registreret på webstedet, men du har udestående bookinger, og vi kan ikke anonymisere dine data på nuværende tidspunkt. Disse data opbevares i maksimalt et år efter reservationen er gennemført, så vil det blive slettes, hvis du ikke vælger at fjerne det før det tidspunkt. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Fordi du er ejendomsadministrator på vores websted, kan vi ikke tilbyde dig muligheden for at få dine data slettet automatisk. Kontakt os i stedet direkte, så vi kan tildele dine ejendomme til en anden leder. Når vi har gjort det og fjernet din status som ejendomsadministrator, vil du automatisk kunne slette dine data. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Glem mig!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Dette kan ikke fortrydes!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Dine data er blevet slettet!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Beklager, du kan ikke foretage en reservation, da din e -mail -adresse er ugyldig');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Denne side giver dig mulighed for at anonymisere alle gæster, der har deres oplysninger gemt i systemet. Dette giver dig mulighed for at være i overensstemmelse med GDPR, men du kan ikke redigere andre oplysninger på denne side. For at gøre dette du skal logge ind på frontend som ejendomsadministrator. Antagelsen er, at en historisk gæst har kontaktet dig for at bede dig om at udøve deres ret til at blive glemt. Hvis de ikke er i stand til at logge ind på webstedets frontend (måske en bruger blev ikke oprettet for dem, da de reserverede), så kan du bruge dette område til at anonymisere dem, når du har bekræftet deres identitet. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymiser gæst');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'SLETET EJENDOM');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Gæstedata anonymiseret');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Kan ikke anonymisere');
jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Vi har brug for din tilladelse til at gemme dine oplysninger, før du kan foretage en reservation. KLIK HER for at give os tilladelse.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Aktivere GDPR -kompatibel funktionalitet?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'VI ANBEFALER IKKE AT DU deaktiverer GDPR-kompatibel funktionalitet. Jomres har indbyggede funktioner, der hjælper dig med at sikre, at Jomres-sektionen på dit websted er i overensstemmelse med GDPR. Hvis du deaktiverer denne funktion det burde du ikke, hvis du er i EU, eller du gør forretninger med borgere i EU), så antager Jomres automatisk, at hver besøgende på webstedet har givet deres tilladelse til at få deres personlige data aktiveret. Apptilladelse og Mine data -sider vil ikke blive vises, og brugerne bliver ikke bedt om at give deres tilladelse til at få indsamlet data. ');


jr_define ('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Midlertidige filer slettet');

jr_define ('MACHINE_TRANSLATION', 'Maskinoversættelser');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Kildesprog');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Det er muligt at koble til maskinoversættelsesfunktionalitet. Dette giver dig mulighed for at indtaste strenge på ét sprog, og oversættelser kan trækkes fra fjerntjenester. Vær opmærksom på, at ikke alle oversættelsestjenester understøtter alle sprog. Se disse tjenester for flere detaljer.' );

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Rumtyper');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Ny værelsestype');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Du kan oprette og redigere rumtyper på denne side. Disse rumtyper er kun specifikke for denne ejendom. Når du konfigurerer din ejendom, skal du først bruge nogle rumtyper. Du kan bruge enten disse rumtyper oprettet af administratoren, eller du kan tilføje din egen. Når du har en eller flere rumtyper, kan du derefter oprette værelser af den pågældende rumtype. Efter at du har værelser, kan du derefter oprette takster (priser) for disse værelser, fordi takster er knyttet til værelsestyper . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Ledere kan oprette rumtyper?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Brug denne indstilling til at konfigurere, om ledere kan oprette deres egne rumtyper i frontend eller ej. Vi anbefaler kraftigt, at du lader denne indstilling være Nej, når du først begynder at bruge Jomres, især hvis du opretter en portal, fordi du skal oprette alle rumtyper i administratorområdet. Rumtyper, der er oprettet af ledere, vises i søgeformularer, men fordi disse værelsestyper er specifikke for individuelle ejendomme, vises der kun én ejendom i søgeresultaterne, hvis den rumtype er valgt varighedssøgninger. Hvis du vil, så kun Super Property Managers kan oprette værelsestyper, skal du lade denne indstilling stå på Ja og bruge adgangskontrol -plugin et til kun at give superadministratorer mulighed for at se menuindstillingen "Indstillinger> Rumtyper". Kun ejendomme, der lejer ud værelser i ejendommen og brug Avanceret eller Micromanage tarifredigeringstilstande kan bruge denne mulighed. Villa/lejlighedstype ejendomme vil ikke kunne bruge den. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Værelses-/ejendomstype opdateret');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Vis værelsestyper i søgemuligheder');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Hvis du vælger at tillade ejendomsadministratorer at oprette deres egne værelsestyper, kan du vælge, om de oprettede værelsestyper skal vises eller ikke i de søgemuligheder, hvor du har valgt at vise rumtyper.');


jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Du bør ikke genbruge den samme e-mail-adresse til hver booking. <br/> Hvis du har et unikt domæne (f.eks. ikke en gmail-e-mailadresse) til din virksomhed, skal du bruge gæstens telefonnummer som deres e -mail -adresse. E -mail -adressen vil derefter ligne 123456@mydomain.com <br/> Dette vil sikre, at der oprettes en ny gæst, når du opretter en reservation. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'E -mail -adresse');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Password');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Vi er glade for, at du gerne vil booke hos os igen. For at kunne administrere alle dine bookinger sammen, er det nødvendigt, at du logger ind, så bookingen kan føjes til din konto. Dette også sikrer, at du er autoriseret til at bruge den angivne e-mail-adresse. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Hvis du ikke kender din adgangskode, kan vi sende dig en e -mail til nulstilling af adgangskode. Følg instruktionerne i denne e -mail for at nulstille din adgangskode.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Glemt dit kodeord?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonymisere dit navn?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Hvis du vælger at anonymisere dit navn ved gennemgang, bruger vi dine initialer i stedet.');
jr_define ('ANONYMOUS', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'sagde');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Svar på denne anmeldelse');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Skriv dit svar på denne anmeldelse her.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Dit svar');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Gennemgå svar gemt');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Inden du sender et anmeldelsesvar, skal du læse følgende. Ved at indsende et svar bekræfter du, at du accepterer disse vilkår og betingelser.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Hvad er vores retningslinjer for et anmeldelsesvar?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Du reagerer på gennemgangen af ​​din ejendom. Du <em> må ikke </em> bruge dit svar som en kommerciel tvistproces. Hvis du skal rapportere en anmeldelse, skal du bruge "Rapporten" Gennemse "knappen på fortegnelsen, og ikke denne anmeldelse svar side. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Når du har forladt dit svar, kan du ikke redigere det.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Tilladt og opmuntret');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Et fuldt svar på anmeldelsen. </li>
    <li> Hilsen og ærlighed. </li>
    <li> Fornuftige svar på anmelderens problemer (husk, andre har muligvis lignende problemer, men benyttede ikke lejligheden til at skrive en anmeldelse). </li>
    <li> Tilskynd gæsten til at kontakte dig direkte for at løse problemer.
    <li> Husk altid, at fremtidige gæster vil se dit svar. Sørg for altid at være professionel. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Ikke tilladt');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Kommercielle tvister. </li>
    <li> Spørgsmål til korrekturlæseren eller andre. </li>
    <li> Tvivlsomt sprog (inklusive forbandelse). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Sidste løb');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Fakturanumre');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Vil du bruge tilpassede fakturanumre?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Du kan konfigurere systemet til at bruge tilpassede fakturanumre. Kun nye fakturaer påvirkes.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Startnummer');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Tal oprettes i træk. Hvad skal det første tal være?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Hvilket format skal fakturanummeret have?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Konfigurer fakturanummerformatet her. Et format kan ligne {N}/{D} eller {N}/{Y}, hvor N er det automatisk genererede nummer, D = dato i formatet ÅÅÅÅMMDD ( 20190131) eller Y = ÅÅÅÅ (2019). Alle andre alfanumeriske tegn, der ikke er omsluttet af krøllede seler, efterlades alene, så et mønster, der ligner {N}/{D} -L, ville resultere i et fakturanummer (21), der ligner 21/2019-L ');

jr_define ('_JOMRES_SURCHARGE_TITLE', 'Tillæg');
jr_define ('_JOMRES_SURCHARGE_DESC', 'Et ekstra gebyr, der tilføjes til værelset, når det er reserveret (beregnet pr. dag)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioriterer etiketter på hele webstedet?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Brugerdefineret tekst, der er gemt i etiketteredigering eller oversættelse af langfil-stringsider, betragtes som "webstedsdækkende" etiketter. Ejendomsadministratorer kan også tilpasse etiketter for hver ejendom ved hjælp af etiketteredigeringsfunktionen i frontend. Dette gør det muligt en ejendomsadministrator for at have forskellige tekster til sin ejendom, hvilket er nyttigt, hvis ejendommen er forskellig fra alle de andre ejendomme på webstedet. <br/> Når systemet søger efter etikettekster, vil det prioritere hele teksten frem for ejendommen specifikke tekster, hvilket betyder, at hvis der findes en tekst på hele stedet for denne etiket, vil systemet først vælge den. Hvis du indstiller denne indstilling til Nej, vil systemet prioritere ejendomsspecifikke tekster frem for tekster på hele webstedet. ');
jr_define ('_JOMRES_REFERRER', 'Henviser');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Dette kan ændres, hvis hvidlistning foretages, så webstedet "Verdens bedste bookingwebsted" ville ændre dette til "WBBS" eller lignende.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Leverandør- og nodemoduler er separate (gratis) pakker til Jomres. Du kan geninstallere pakkerne på denne side.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Geninstaller bibliotekspakker');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Kan ikke slette ejendomstype, fordi den stadig bruges af nogle ejendomme. Du skal først ændre disse egenskaber til en anden egenskabstype, før du forsøger at slette denne. Egenskabs -UID er, der forhindrer sletning:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Kunne ikke fjerne publicering af ejendomstype, fordi den stadig bruges af nogle ejendomme. Du skal først ændre disse egenskaber til en anden egenskabstype, før du prøver at fjerne denne. Ejendoms -UID er, der forhindrer ændringen:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Tilfældige e -mail -adresser');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Tilbuds tilfældige e -mails');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Du kan tillade systemet at generere tilfældige e -mail -adresser i hurtig booking -popup en i instrumentbrættet. Dette gør det muligt for ledere og receptionister at oprette bookinger til gæster, som de ikke har e -mail -adresser til, det er beregnet til at fungere som tidsbesparende for websteder med mange receptionister/ledere, der forstår, at disse tilfældige e -mails aldrig vil blive brugt til reel kommunikation, er formålet at komme uden om, at alle gæster i Jomres skal have e -mail -adresser. Du SKAL også angive et domæne i det næste felt. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Dette bør ikke være et normalt e -mail -domæne, f.eks. gmail eller outlook. I stedet kan det enten være dit eget domæne eller noget helt andet, f.eks. "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload område');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Ingen brugerrolle');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Suspenderet');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Slettet fra CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Hvis du kan lide Jomres, kan du overveje at skrive en anmeldelse af et af disse websteder');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Jeg er en rar person, jeg har allerede forladt en anmeldelse');

jr_define ('_LICENCE_PROMPT_DEAR', 'Dear');
jr_define ('_LICENCE_EXPIRED', ', din Jomres -licensnøgle er udløbet, så du mangler disse fantastiske funktioner og fordele!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin -opdateringer og nye plugin -udgivelser');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Kun eksklusive medlemmer E -mail/billetsupport');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Bekymringsfrie Jomres Core-opdateringer');
jr_define ('_LICENCE_EXPIRED_POST', 'Opret forbindelse til os for problemfrie betalingsløsninger og få adgang til alle plugins og supporttjenester, der kun er medlemmer.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Få adgang til alle plugins nu!');

jr_define ('_LICENCE_INVALID_KEY', 'Desværre ser det ikke ud til, at du bruger en gyldig Jomres -licensnøgle, så du mangler disse fantastiske funktioner og fordele!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Plugins </a>, der i høj grad udvider Jomres-funktionalitet');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Kun eksklusive medlemmer E -mail/billetsupport');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Bekymringsfrie Jomres Core-opdateringer');
jr_define ('_LICENCE_INVALID_POST', 'Opret forbindelse til os for problemfrie betalingsløsninger og få adgang til alle plugins og supporttjenester, der kun er medlemmer.');
jr_define ('_LICENCE_INVALID_START', 'Få adgang til alle plugins nu!');
jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Brugere');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Abonnementer');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Fakturaer');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Værktøjer');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Rapporter');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Hjælp');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total egenskaber i system');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Publicerede ejendomme');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Ikke -offentliggjorte ejendomme');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Godkendte ejendomme');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Egenskaber, der kræver godkendelse');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Upublicerede anmeldelser');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Gennemgå rapporter');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Denne ejendoms ejendomstype er ikke offentliggjort, den vises muligvis ikke i søgeresultater. Kontakt webstedsadministratoren for at offentliggøre ejendomstypen, eller rediger ejendomstypen på siden Rediger ejendom.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Opdater din ejendomstype');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Indkomst (betalte beløb)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Kan ikke slette egenskabsfunktionen');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"fordi den bruges af følgende egenskaber:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Denne side udfører en grundlæggende test af REST API ved hjælp af indbygget funktionalitet i Jomres. Den kalder Jomres REST API for at se, om den modtager et gyldigt svar.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Serveren kaldte denne URL for at se, om svaret er gyldigt:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Siden modtog dette svar:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Testen syntes at gå som forventet, du vil sandsynligvis ikke have problemer med at modtage REST API -anmodninger fra resten af ​​Internettet.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Testen mislykkedes, kig i svarfeltet, hvis det ligner meget html, eller du modtog en 404 -besked, omdirigerer din server opkald til en anden url. Dette forhindrer dig i at modtage API opkald. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Jomres App -serveren opbevarer en liste over alle Jomres -websteder. Dette giver os mulighed for at opbygge et syndikeringsnetværk. Dette netværk er designet til at give vores brugere mulighed for at vise ejendomme fra andre websteder på deres egne websteder, og deres egne websteder er på deres egne websteder, og deres egne websteder er på deres egne websteder, især for nye websteder, at opbygge en SEO -tilstedeværelse på nettet. Målet er, at alle Jomres -websteder arbejder sammen og bygger tillid til netværket. Der er ingen gebyrer for denne service. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Dit websted er i øjeblikket ikke opført på Jomres App -serveren, som er en del af syndikeringsnetværket. Denne server vil prøve igen at tilføje denne server til netværket på de næste 6 sider indlæses. få sider indlæses, dette ændrer sig ikke. Kontroller, at forbindelsestesten ovenfor klarer testene. Bemærk, localhost -servere kan ikke tilføjes til netværket. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Tillykke, din server er angivet på Jomres App -serveren.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Syndikerede egenskaber');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Her er nogle andre ejendomme tilgængelige fra vores ejendomsnetværk');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Tillykke, din server er angivet på Jomres Syndication Network. Din ejendom (er) vil snart blive vist på andre Jomres -websteder, hvis de ikke allerede vises.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Din installation er ikke en del af Jomres Syndication Network, derfor vises din ejendom (er) ikke på andre Jomres -baserede websteder, og du kan ikke drage fordel af denne gratis annoncering.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktive Jomres -installationer:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Det samlede antal Jomres -installationer, der deler Jomres Syndication Network -egenskaber på deres websteder.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Dette er antallet af ejendomme, der er tilgængelige i JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'I alt er der hele tiden blevet linket til en Jomres -ejendom fra et andet Jomres -baseret websted.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) er en gratis funktion, der er tilgængelig for alle Jomres -brugere. Formålet er at give dig gratis reklame for dine ejendomme på andre Jomres -baserede websteder. Målet er at hjælpe du får dit websted hurtigt på banen og tilbyder gratis annoncering, så dine ejendomme bliver genkendt og betroet, fordi de er knyttet til websteder med høj tillid, høj relevans, der allerede er velkendte for søgemaskinerne. Se dette <a href = "https://www.jomres.net/features/jomres-syndication-network" target ="_blank"> artikel på vores websted </a> og <a href ="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target ="_blank"> manualen </a> for flere oplysninger. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'Dette er dine gæsteprofildata, felter med dette symbol <i class = "fa fa-users" aria-hidden = "true"> </i>
 er offentligt synlige, hvorimod felter med dette symbol <i class = "fa fa-user-secret" aria-hidden = "true"> </i> kun kan ses af dig, dine værter og webstedsadministratorer. <br/> <br/> Værter kan kun se private oplysninger, hvis du allerede har oprettet en reservation hos dem. <br/> <br/> Dine oplysninger er sikkert krypteret og gemt i vores database ved hjælp af AES-256-kryptering. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Disse felter er valgfrie, men værter kan bruge oplysningerne her til at afgøre, om de føler, at de kan stole på dig, derfor er det bedre at tilføje oplysningerne. Husk, du beder om at blive i deres ejendom, og de kan afvise dig, hvis de føler, at du ikke passer godt, eller at din bio ikke indeholder nok information. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Kørekort');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Pasnummer');
jr_define ('GUEST_PROFILE_IBAN', 'IBAN -nummer');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'Om mig');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Denne "Om mig" sektion er offentligt synlig, så læg ikke private oplysninger. Når det er sagt, gør en indsats for at lægge så meget som du føler dig tryg ved at dele, såsom dine lidenskaber, hvad du leve af dine hobbyer osv. Du kan bruge Markup til at give den lidt jazz. Værter vil gerne føle, at de kan stole på dig med deres egenskaber. Sørg for, at dit billede er et rigtigt billede af dig, ikke din hund. eller bil (ja, fyre, vi taler til dig!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Angiv eventuelle særlige krav, du måtte have, f.eks. behovet for let adgang her. De vises ikke på din offentlige profil, men de tilføjes til reservationsoplysningerne, når du foretager en reservation.');

jr_define ('VIEW_HOST_PROFILE', 'Værts profil');

jr_define ('GUEST_PROFILE_TITLE', 'Gæsteprofil');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Min profil');

jr_define ('GUEST_PROFILE_WELCOME', 'Hej, lad mig fortælle dig lidt om mig selv.');
jr_define ('GUEST_PROFILE_MY_NAME', 'Mit navn er');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'og jeg kommer fra');
jr_define ('GUEST_PROFILE_IN', 'region in');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Mine private oplysninger');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Vi gør vores bedste for at validere gæst- og værtsoplysninger, men du bør gøre din egen korrekte dilligence og selv bestemme, om denne person er troværdig.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Mine egenskaber');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Mine anmeldelser');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Dette er hvad jeg sagde om denne ejendom:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Jeg gav denne ejendom en karakter på:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Mine anmeldelser');
jr_define ('GUEST_PROFILE_OF_ME', 'Hvad andre siger om mig');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Hvad denne vært sagde om mig');
jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Anmeld gæst');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Min anmeldelse af denne gæst');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Her er nogle eksempler på gæsteanmeldelser for at få bolden til at rulle: <br/>

<ul>
<li> (gæstens navn) var en fornøjelse at være vært! De forlod rummet rent og var stille hele weekenden. De havde en gnidningsløs kommunikation, og jeg glæder mig til at få dem til at blive hos mig igen! </li>
    <li> Jeg elskede at have (gæstens navn), fordi de var i stand til at behandle stedet med respekt, have det sjovt og nyde området. De var fantastiske med at leje pladsen, og jeg håber, at jeg får vært for dem igen. </li>
    <li> Alle mine husregler blev respekteret med (gæstens navn), og de kunne let komme ind og gå. Jeg elskede at have dem der, da de var respektfulde og stille. Jeg anbefaler dem stærkt til andre! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Beklager, jeg kan ikke finde den bruger. Mest sandsynligt har de ikke udfyldt deres kontooplysninger endnu.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres er bygget på Bootstrap -rammerne, så du skal bruge det på et tema baseret på Bootstrap. Vi anbefaler et baseret på Bootstrap 3. Hvis du ikke har adgang til et tema, anbefaler vi, at du bruger det Jomres Leohtian-temaet til Wordpress, som du kan <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> download herfra. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Booking markeret som No Show');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN -statistik for denne bruger');

jr_define ('BOOKING_NOSHOW_INFO', 'Booking og No Show -oplysninger trækkes fra Jomres Syndicate Network ved bookingtidspunktet. Det er hentet fra anonymiserede data og kan bruges af dig til at afgøre, om denne gæst er en risiko for ikke at opfylde reservationen. Hvis systemet rapporterer, at dataene er ukendte, det er sandsynligvis fordi dette system ikke genkendes på netværket. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Ukendt');

jr_define ('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define ('CMF_CONFIG_KEY', 'Channel Management Framework Key');
jr_define ('CMF_CONFIG_KEY_DESC', 'Channel Management Framework -licensnøglen. Du skal angive denne nøgle for at kunne downloade Channel Management Framework -plugins.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Din ejendom er ikke godkendt');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Din ejendom er ikke godkendt. Hvis du mener, at dette blev udført ved en fejl, bedes du kontakte os.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Er dette en gæstetype for børn?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Indstil dette til Ja, hvis denne gæstetype ville blive klassificeret som en underordnet gæstetype.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Hvis du vil opkræve betaling pr. person pr. nat, skal du oprette nogle gæstetyper.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Du kan oprette så mange gæstetyper som du har brug for, så prøv at starte med at oprette kun en gæstetype kaldet 'Voksen'. Lad alle indstillingerne være på deres standardværdier. Hvis du f.eks. vil giv børn under 12 år en rabat på 50%, du ville oprette en ny gæstetype, og kald det 'Børn under 12'. Indstil indstillingen 'Tilføj varians?' til - (negativ) og indstil 'Variance' til 50. Det betyder når børn tilføjes til en reservation, opkræves de 50% af værelsesprisen for værelset. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Indstil priser manuelt");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Indstil minimum nætter manuelt");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Angiv minimumsnætter");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Indstil <em> pris pr. nat </em> efter ugedag");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Indstil <em> pris pr. nat </em> efter datointerval");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Indstil <em> minimumsnætter </em> efter datointerval");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Datovælgerne og satsindtastningen giver dig mulighed for at angive en pris for et givet datointerval. Vælg en start- og slutdato, indtast en pris, og klik på knappen Angiv pris pr. nat.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Datovælgerne og minimumsnatten input giver dig mulighed for at angive en værdi for minimumsnætterne for et givet datointerval. Vælg en start- og slutdato, indtast et tal for minimumsnætterne, og klik på 'Angiv minimumsnætter '. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Brug denne rullemenu til at skifte mellem fastsættelse af priser for individuelle datoer, til at angive minimumsnætter for individuelle datoer. Du kan bruge <em> efter ugedag </em> vælgeren, <em> efter dato range </em> picker eller indstil priser/minimumsnætter ved manuelt at redigere datoerne. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Brug denne rullemenu til at skifte mellem indstilling af priser for individuelle datoer, til at angive minimumsnætter for individuelle datoer. Du kan bruge <em> efter datointervallet </em> -vælgeren eller angive priser/minimumsnætter med manuelt redigere datoerne. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Angiv priser eller minimum overnatninger");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Indstil <em> minimumsnætter </em> efter ugedag");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Ugedagens felter giver dig mulighed for at angive et minimum antal nætter for en given ugedag, når du klikker på ugedagsknappen, vil alle ugens dage blive indstillet til den min nætterindstilling. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Manuelt fastsatte priser/minimumsnætter");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Angiv priser");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Angiv minimumsnætter");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Per nat");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Min nætter");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Max nights");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Her kan du oprette dig takster, som er knyttet til de rumtyper, du har i din ejendom.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Mest anvendte muligheder");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Instruktioner");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Hvis du vil tilføje forskellige priser for forskellige antal gæster, så kan <em> du oprette mere end flere takster for hver rumtype </em> og have forskellige min/max -gæsteværdier i disse takster. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Giv taksten et navn, definer det maksimale antal nætter og det mindste og maksimale antal gæster, der kræves i reservationsformularen, inden taksten tilbydes. <br/> <br/> Brug datovælgerpanelet for at tilføje priser og minimumsnætterindstillinger til en række datoer eller redigere input direkte. Hvis du ikke ønsker, at taksten overhovedet skal tilbydes på bestemte datoer, skal du lade prisen være 0 (nul) den disse datoer. <br/> <br/> Du kan have forskellige minimumsnætter på forskellige datoer, så hvis du vil have længere bookinger i løbet af festival-/konferenceuger, kan du indstille minunætterne til at være højere i netop disse perioder. <br/ > <br/> Hvis du opkræver pr. person pr. magt (PPPN), kan du aktivere denne indstilling i fanen Indstillinger> Ejendommskonfiguration> Tariffer og valuta, og derefter oprette de gæstetyper, du har brug for i Indstillinger> Gæstetyper. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Ekstra muligheder");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Dette er yderligere muligheder, der ikke er så almindeligt anvendte, men ikke desto mindre tilgængelige for dig. <br/> <strong> Ignorer PPPN </strong> Betydning Ignorer pr. person pr. nat. Du kan have flere forskellige takster. for den samme værelsestype, f.eks. hvoraf en opkræver pr. person pr. nat, og en, der ikke gør det. <br/> <strong> Tillad weekender </strong> Indstillingen Tillad weekender giver dig mulighed for at lave en tarif, der kun er tilgængelig i hverdagene, f.eks. hvis du ønsker en særlig takst for forretningsrejsende. I så fald ville du indstille indstillingen til Nej og minenætterne til 1 og maks. overnatninger, højst 5. <br/> <strong> Weekender kun </strong> Kun weekends -indstillingen er det modsatte af indstillingen Tillad weekender. Det, du anser for at være weekenddage, kan konfigureres i dine ejendomskonfigurationsindstillinger. Dette giver dig mulighed for at definere en weekend -sats, som du måske vil tilbud til særlige begivenheder. <br/> <strong> Check-in ugedag </strong> Denne mulighed giver dig mulighed for at tvinge indtjekning til kun at være på bestemte dage i ugen og bruges bedst i forbindelse med egenskaben Konfiguration> fanen Bookinger> Indstillinger for faste perioder. Størstedelen af ​​brugerne vil gerne lade denne indstilling være sat til Alle. <br/> De sidste to muligheder, <strong> Min. Værelser allerede valgt </strong> og <strong> Maks. Allerede valgte værelser </strong> er meget specialiserede og nyttigt for ejendomme med ekstremt komplicerede takster. <em> Medmindre du har et specifikt behov, bør du lade disse muligheder være i fred. </em> Brug dem, hvis du kun vil have denne takst tilbudt, når gæsten allerede har valgt N antal værelser i reservationsformularen, så f.eks. du kunne have en grundtarif, hvor disse valgmuligheder efterlades som standard, og en anden takst, hvor de mindst valgte værelser er indstillet til 1, så tilbydes denne anden takst i reservationsformularen, når et værelse er blevet valgt. " );
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Du kan oprette flere takster for den samme rumtype, så du kan oprette en takst for min/max dage på 1 - 7 og en anden takst, hvor min. dage er 7, maks. dage 14 og så videre. Dette giver dig mulighed for at oprette prisordninger så enkle eller så komplicerede som du har brug for. Det giver dig også mulighed for at oprette flere takster med forskellige betingelser, så du kan få et andet sæt af takster, hvor prisen er lavere for Bed & Breakfast, og endnu et sæt dyrere takster for seng, morgenmad og aftensmad. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Indstil kun datovælgerdage");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Ejendomskategorier');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Rediger ejendomskategori');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Stop!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Tak fordi du installerede Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Ejendomsadministration udføres på offentlige sider, ikke i administratorområdet.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Hvis du ikke kender Jomres, skal du besøge Hjælp -sektionen> Kom godt i gang.");

jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Join Jomres Syndicate");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Når du har konfigureret dit websted og er klar til at begynde at modtage besøgende, skal du deltage i Jomres.net -syndikatet og få dine ejendomme opført på andre Jomres -websteder.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Du skal bruge mindst et værelse af en af ​​følgende typer, før du kan oprette en tarif:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Gå til Indstillinger> Rum og opret et værelse først, når du har gjort det, vil du være i stand til at oprette en takst for den pågældende rumtype.");

jr_define ('JOMRES_PLATFORM', "Jomres Platform");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Tilsluttet");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Indstil dette til Ja, hvis du allerede har forbundet din Stripe -konto med Jomres -platformen.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live -kontonummer");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Dette er dit Stripe -konto -id, der findes i dit Stripe Dashboard under Indstillinger> Kontooplysninger og ligner acct_xxxxxxxxx Du vil bruge dette felt, hvis du har flere Jomres -installationer, og du vil bruge den samme konto på tværs alle websteder, og du har allerede oprettet forbindelse til os. Hvis du ikke har oprettet forbindelse til Jomres -platformen, er det ikke tilstrækkeligt at angive dine oplysninger her. Besøg i stedet menuen Få forbindelse i værktøjslinjen under afsnittet Hjælp. Hvis du vil for at teste betalinger, skal du på fanen Debugging i webstedskonfiguration angive dit websted fra produktion til udvikling. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live secret key");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Gå til Udviklere> API -nøgler i dit Stripe Dashboard for at finde dine hemmelige nøgler. Disse bruges af systemet til at verificere bookingsdata, der returneres fra betalingsformularen, er gyldige, og at indbetalinger er blevet betalt, før du gemmer reservationen . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Stripe test secret key");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standard Tariff Mode');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Hvor mange mennesker kan denne ejendom rumme?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Antallet af gæster i din daglige pris');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Pris for ekstra voksne');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Børn');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Per person pr. nat?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 dages modifikator');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Rabat på daglig pris, hvis reservationen er i 7 dage eller mere. Lad dette sæt være nul, hvis du ikke vil have rabatten.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 dages modifikator');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Rabat på daglig pris, hvis reservationen er for 30 dage eller mere. Lad dette sæt være nul, hvis du ikke vil have rabatten.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Voksne');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Pris baseret på 2 voksne');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Booking nedsat fra');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'til');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'fordi reservationen er større end 7 dage.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'fordi reservationen er større end 30 dage.');

jr_define ('JOMRES_CITY_TAX_HEADING', 'Byafgifter');
jr_define ('JOMRES_CITY_TAX_VALUE', 'City tax value');
jr_define ('JOMRES_CITY_TAX_METHOD', 'Skatteberegningsmetode');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Enkelt gebyr');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Per nat');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per gæst');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Per gæst pr. nat');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Procentdel af bookingværdi');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Rengøringsgebyr');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Rengøringsgebyr');


jr_define ('JOMRES_COMPATABILITY_MODE', 'Force Compatability property configuration mode?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Kompatibilitetskonfigurationstilstand tvinger flere ting til at ske. I ældre versioner af Jomres kan ejendomsadministratorer vælge, hvilken tarifredigeringsmetode der skal bruges, og en række andre indstillinger (hvoraf nogle kan virke forvirrende) kan have har været tilgængelig for dem. Aktivering af kompatibilitetskonfiguration tvinger alle nye ejendomme til kun at bruge standardtarifredigeringsfunktionen, der modellerer booking.com -ejendommens konfigurationsfunktionalitet med hensyn til prissætning, børnepris osv. Det anbefales, at for installationer, der blev oprettet efter 9.22 .0, skal denne indstilling sættes til Ja, men for ældre installationer er det op til dig at beslutte, om nye egenskaber automatisk skal indstilles til kompatibilitetstilstand, når de oprettes. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Accepterer du børn under 18 år?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Indstil denne indstilling til Ja, hvis du tillader børn. Hvis ja, har du i menuen Indstillinger en mulighed kaldet Børnepolitik, hvor du kan redigere børnerelaterede indstillinger.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Børnepolitik');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'I hvilke aldre er børn tilladt?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Per barn, pr. nat');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Per barn, pr. ophold');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Børnesatser');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'New child rate');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Rediger børnesats');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Opret dine gratis eller betalte børnesatser her. Priser gælder kun, når du har oprettet belægningsniveauer for værelsestyper.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Alder fra');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Alder til');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'pr. nat eller pr. ophold?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Hvis nul eller ikke er indstillet, vil børn i denne aldersgruppe være gratis.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Alder ved checkin');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Alder');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Belægningsniveauer');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maksimum voksne');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maksimalt antal børn');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maksimal belægning');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Edit occupancy level for:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Red belægningsniveauer for denne værelsestype. Inkluder ikke gæster, der sover i barnesenge (de tilføjes ved at oprette en ekstra)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Hvor meget skal de opkræves for hver ekstra voksen?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Ekstra voksne');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Du har ikke konfigureret børnesatser endnu.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Set child rate (s) now');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Du har konfigureret din ejendom til at tillade børn, men du har endnu ikke angivet belægningsniveauer for børn.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Indstil belægningsniveauer');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Hver gang du redigerer et værelse eller din ejendomstype, bør du kontrollere og opdatere belægningsniveauerne for din ejendom/værelser, da disse påvirker antallet af gæster, der kan accepteres i reservationsformularen.');

jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Voksne');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Chidren');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Admin option level');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres har mange menu- og konfigurationsmuligheder, som du kan bruge, når du konfigurerer dit websted. Det store flertal af dem skal du aldrig ændre, så de er skjult som standard. Du kan vælge at vise disse muligheder ved at indstille niveauet Admin -indstillinger. Grundlæggende niveau viser dig, hvad du har brug for, når du opretter et websted for første gang. Fælles niveau viser dig de muligheder, der oftest ændres, og Alt viser dig alle mulige indstillinger og menuer i administratorområdet. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Everything');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Kan vi indsamle oplysninger om, hvordan du bruger Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Vi vil gerne indsamle oplysninger om, hvordan du bruger Jomres. Ingen personligt identificerbare oplysninger gemmes, brug vil blive anonymiseret og kun brugt til at hjælpe os med at forstå, hvordan folk bruger Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Jep, det er ok');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Nej, jeg er ikke enig');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Vil du tage bookinger til mere end én ejendom?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres kan bruges til enkelt- eller multi-ejendomswebsteder. Hvis du tager bookinger for kun en ejendom, vil mange muligheder være overflødige og potentielt forvirrende. Du kan ændre denne indstilling senere i Indstillinger> Websted. Fanen Konfiguration> Portalfunktionalitet. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Bare en ejendom');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Jeg angiver mere end én ejendom');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Hvilken version af Bootstrap -rammen understøtter din skabelon/tema?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Hver version af Bootstrap -rammen kræver lidt forskellige html -markeringer. Jomres har tre sæt Bootstrap -kompatible skabelonsæt, et for hver Bootstrap -version. Du skal sørge for at konfigurere det til at bruge det relevante skabelonsæt. Hvis du ikke derefter output som layout, modeller og menuer fungerer ikke korrekt. Hvis du beslutter dig for at bruge en skabelon/et tema senere med en anden Bootstrap -version, kan du ændre Bootstrap -skabelonsættet, som Jomres skal bruge i Admin> Jomres> Indstillinger > Fanen Diverse. <br/> <br/> Joomla 3 distribueres som standard med Bootstrap 2, Joomla 4 bruger Bootstrap 5. Jomres Leohtian -skabelon (Joomla) og tema (Wordpress) bruger Bootstrap 3. Der kan være forskellige skabeloner/temaer distribueres med deres egne Bootstrap -filer, så hvis du er i tvivl, bedes du kontakte din skabelons/temas udvikler. ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Strip decimals from output prices?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Apply group by fix?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Nogle mysql -installationer kan have et problem med Jomres -forespørgsler på siden Listeegenskaber, listegæster og listefakturaer. Hvis disse sider siger, at de viser X med Y -resultater, men intet vises på listen, kan denne mulighed til Ja kan muligvis løse problemet. Det gør det ikke, hvis du er på delt hosting, og hostingtjenesten ikke tillader din mysql -bruger at udstede kommandoen "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Dette er en kanalejendom, den kan ikke administreres lokalt. Besøg rammesiden for kanalstyring for at finde ejendommens fjernadministrationslink');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Ingen bootstrap i tema");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Links til sociale medier');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Skriv dine kontonavne på sociale medier her, for eksempel "jomres", ikke hele url\'en');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Kommasepareret liste over sprog din organisation taler');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Webadresse til din organisations logo');
jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres opdateret');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Der er en ny version af Jomres tilgængelig. Du skal opdatere, før du kan fortsætte med at bruge Jomres, da opdateringer forbedrer funktionaliteten og sikrer, at din installation forbliver sikker.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Opdater Jomres nu');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Plugin-opdateringer');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Der er nye versioner af plugins tilgængelige i plugin-manageren. Du skal opdatere alle plugins før du kan fortsætte med at bruge Jomres, da opdateringer forbedrer funktionaliteten og sikrer at din installation forbliver sikker.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Plugins til opdatering');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Hvis din licens ikke længere er gyldig, kan du få en ny licensnøgle fra vores hjemmeside.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Opdater plugins');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Få ny nøgle');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Gem ny nøgle');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Ejendomstype billeder");
