<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
 
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_COM_MR_QUICKRESDESC','Hurtigreservasjon');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Vis profiler');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Generell konfigurasjon');
jr_define('_JOMRES_COM_MR_BACK','Tilbake');
jr_define('_JOMRES_COM_MR_YES','Ja');
jr_define('_JOMRES_COM_MR_NO','Nei');
jr_define('_JOMRES_COM_MR_NEWTARIFF','Ny');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','Ny ');
jr_define('_JOMRES_COM_MR_NEWGUEST','Ny gjest');
jr_define('_JOMRES_COM_MR_SAVE','Lagre');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Navn');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Ankomstdato');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Avreisedato');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Brukernavn');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Adgangsnivå');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Bruker endret');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Alle bestillinger');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Endre bestilling');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Ank/Avr');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gjest');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Enhet');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Betaling');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Navn');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Etternavn');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Spesielle krav');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Vennligst vær oppmerksom på at enkelte spesielle krav kan medføre ekstra kostnader.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Slett bestillingen');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Husnr eller Navn');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Adresse');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Sted');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postnr.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tlf');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-post');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Kan ikke avbestille fordi gjesten allerede har booket inn');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Forskudd ikke betalt');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Bekreft avbestillingen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Bookingen er kansellert');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dager til ankomst');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Bookingtype');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Blokkert');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Resepsjon');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internett');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Enhetens navn');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Enhetens nummer');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etg');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Handikap-tilpasset?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Maks antall personer');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Enhetstype');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Beskrivelse av enheten');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Enhetens egenskaper');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Forskudd betalt');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Angi forskudd');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Totalt å betale');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Forskudds ref');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Bestilling');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Forskudd');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Forskudd lagret');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Tilgjengelige enheter');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Egenskaper');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Enhetstyper');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Rediger gjestens personalia');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Fornavn');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Etternavn');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Hus');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Adresse');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Sted');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postnr');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Faks');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Velg en enhet for å fortsette');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Oppholdets lengde');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Totalt');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Se utleieenhet & egenskapskonfigurasjon');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Enhet');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Egenskaper for enheten');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Enhetstyper');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Utleieenhet');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Egenskaper for utleieenheten');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Enhet');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Type');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Navn');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nummer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etg');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maks antall personer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Fasiliteter');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Rediger enheten');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Enhetens fasiliteter');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Beskrivelse av fasilitetene');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Fasilitetene lagt til');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Enhetens fasiliteter er oppdatert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Enhetstype');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Enhetstype, forkortelse');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Beskrivelse av enhetstypen');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Enhetstype er lagt til');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Rediger enhet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Navn');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Adresse');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Sted');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Land');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postnr');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tlf');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Faks');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-post');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Nettside');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Fasiliteter');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','utleieenhet er oppdatert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Fasiliteter for utleieenheten');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Navn på enhetstype');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Full beskrivelse av utleieenhetens fasiliteter');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','utleieenhet - fasilitet er oppdatert');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Priser');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Pris navn');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Beskrivelse');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Gyldig fra');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Gyldig til');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Pris per natt');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min dager');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maks dager');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min personer');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maks personer');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Enhetstype');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorer PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Tillat helger');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Rediger enhet');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Klone enhet');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Pris er slettet');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Rediger pris');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Bestilling lagret');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Registrér en gjest inn');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Registrér en gjest ut');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','List bestillinger');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Adminpanel');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Administrer gjester');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Administrér utleieenhet');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Sjekk om enheten er ledig');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Fornavn');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Etternavn');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Hus nr.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Adresse');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Sted');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postnr');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tlf');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Det finnes ingen enheter som tilfredsstiller de ønskene du har spesifisert');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','Tusen takk for din bestilling/forespørsel hos oss!<br><br> <b>Vi gjør oppmerksom på at bestillingen ikke er endelig før du har mottatt bekreftelse på e-post.');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Bestillingen er gjort for enhet: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Navn: ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Sjekk inn gjest ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gjest er registrert ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Sjekk ut gjest ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Supplemanger');
jr_define('_JOMRES_COM_A_TARIFFS','Pris & Valuta');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Filopplasting');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Enkeltpersonstillegg');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Pass på at du setter denne til Ja om du ønsker å benytte enkeltpersonstillegg');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Enkeltpersonstillegg');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Forskudd som kreves er prosentvis?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Er forskuddet som kreves prosentvis av den total ordren? Hvis Nei vil depositumet bli fast pris');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','Ønsket forskuddsbeløp');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Per person per natt');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','Velg Ja om du ønsker å belaste per person per natt. Hvis ikke vil prisen bli beregnet per rom per natt');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','Filstørrelse');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maks bildestørrelse i kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED','Bestilt');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Kjære ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Bestillingsdetaljer');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Skriv ut bekreftelsen');
jr_define('_JOMRES_COM_INVOICE_TITLE','Utskrift av faktura');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Antall netter: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Pris per natt: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Totalsum');
jr_define('_JOMRES_COM_INVOICE_PRINT','Skriv ut faktura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Legg tjenester til regningen');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Beskrivelse av tjeneste ');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','Pris tjenester');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Andre belastede enheter');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Enheter lagt til regningen');
jr_define('_JOMRES_UPLOAD_IMAGE','Last opp bilde');
jr_define('_JOMRES_FILE_UPLOAD','Fil lastet opp');
jr_define('_JOMRES_COM_A_ODDS','Diverse.');
jr_define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent kall');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Sett denne til Ja for å se logg av minikomponentene som blir kalt på bunnen av siden etter at systemet er ferdig med å kjøre. Det deaktiverer også den interne viderekoblingsfunksjonen. Dette er nyttig hvis du prøver å identifisere hvilke minikomponenter som utfører diverse tjenester.');
jr_define('_JOMRES_FILE_DELETE','Slett dette bildet');
jr_define('_JOMRES_FILE_DELETED','Filen er slettet');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Slett');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Kan ikke slette denne enheten, da det finnes bestillinger for den. Slett bestillingene og prøv igjen.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Enhet er slettet');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Slett fasilitet');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Kan ikke slette denne fasiliteten, den er tildelt en eller flere enhet(er). Fjern fasiliteten fra enheten(e) og prøv igjen.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Fasiliteten er slettet');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Slett fasilitet');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Kan ikke slette denne fasiliteten, den er tildelt flere en eller flere enhet(er). Fjern fasiliteten fra enheten(e) og prøv igjen.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','fasiliteten er slettet');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Slett enhetstype');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Enhetstype er slettet');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Slett enhet');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','enhet er slettet');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Du har ikke rettighet til å slette enheten.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Fullstørrelse bildebredde');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Kart');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Beskrivelse av enheten');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Innsjekking');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Aktiviteter');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Veibeskrivelse');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Flyplasser');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Annen transport');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Vilkår & betingelser');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresse');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Gjester kan bestille på nett');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Sett denne til Ja for å tillate gjester å bestille rom på nett.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Bestillinger er for en bestemt periode');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Hvis du setter denne til Ja så registreres bestillingen for en avgrenset periode. Hvis den er satt til Nei, så må du forsikre deg om at Forhåndsdefinert ankomstdag ikke er satt til Ja (om du da ikke ønsker at folk skal ankomme på en spesifisert dag), ellers vil du ikke få mange linker i tilgjengelighetskalenderen.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','Bestilt periode: ');
jr_define('_JOMRES_COM_A_BOOKING','Bestilt enhet');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maks perioder, eks 3x7 bestilte perioder = 21 dager');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Er dette en enkeltstående enhet?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Fortsett bestillingen');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Bekreft bestillingen');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Mandag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Tirsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Onsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Torsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Fredag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Lørdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Søndag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Ma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Ti');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','On');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','To');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Lø');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Sø');
jr_define('_JOMRES_COM_A_AVLCAL','Tilgjengelighetskalender');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Skriftfarge for dagens dato');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','Skriftfarge for dager i den viste måneden ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Skriftfarge for dager som ikke er i den viste måneden');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Bakgrunnsfarge for dager når enhet er ledig');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Bakgrunnsfarge for dager som ikke er i den viste måneden');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Bakgrunnsfarge for bestilte dager');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Bakgrunnsfarge for midlertidig bestilte rom (bestilling hvor forskudd ikke er betalt)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Bakgrunnsfarge for tidligere datoer');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Opptatt/Ikke tilgjengelig');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','tilgjengelig for bestilling');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Midlertidig bestilling');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Forhåndsbestemt ankomstdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Kun for nettsteder som tilbyr bestilling av forhåndsdefinerte perioder. Velg ankomstdato.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fast ankomstdag');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Oppholdets varighet (dager)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Vis tilgjengelighetskalenderen?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Sett denne til ja for å vise tilgjengelighetskalenderen');
jr_define('_JOMRES_FRONT_AVAILABILITY','Tilgjengelighet');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Klikk på en ledig dato for å se på bestillingsskjemaet.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Sperre datoer');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','Ny sperre');
jr_define('_JOMRES_FRONT_DELETEGUEST','Slett gjest');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gjest er slettet');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Kan ikke slette denne gjesten fordi den har åpne bestillinger. Slett bestillingene og prøv igjen.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Spiller ingen rolle');
jr_define('_JOMRES_COM_CALENDAROUTPUT','Kalender-format');
jr_define('_JOMRES_COM_CALENDARINPUT','Format på kalenderinput');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','Dette lar brukeren endre inputformat på datoer inne i systemet.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Fast periodebestilling gir adgang til korte pauser');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Lengde på korte ferier');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publisert');
jr_define('_JOMRES_COM_A_PAYPAL','Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Dato');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','Bruker (brukernavn)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtrér på dato');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Ventet ankomst');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Ankommer i dag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Nåværende gjester');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Reiser i dag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Forsinket avreise');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Er ikke ankommet');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','Opprettet enhet');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Oppdatert enhet');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','Slettet enhet');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Opprettet fasiliter for enhet');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Oppdatert fasiliter for enhet');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Slettet fasiliter for enhet');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Opprettet enhet');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Oppdatert enhet');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Slettet enhet');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Redigert fasiliter for enhet');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Publisér enhet');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Opprettet pris');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Oppdatert pris');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Lagt til servicetillegg');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Registrert gjest inn');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Registrert forskudd');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','Opprettet gjest');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Oppdatert gjest');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Bestilt en enhet');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Opprettet en ekstratjeneste');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Oppdatert en ekstratjeneste');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Slettet en ekstratjeneste');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publisert ekstratjeneste.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Opprettet sperre.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Slettet sperre.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Ekstratjenester');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Beskrivelse');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Navn');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Pris');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Ekstratjeneste er oppdatert');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Rediger enhet');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','Tillegg er slettet');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Administrér tillegg');
jr_define('_JOMRES_COM_A_EXTRAS','Vis tillegg ved bestilling?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','Sett denne til ja for å vise tilleggene som du ønsker å tilby');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Valgfrie tillegg.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Startdato for sperre');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Første dato etter sperre');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Administrér sperre');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Det oppstod en feil ved bestilling - en eller flere av enheten du har valgt er ikke ledig.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Rom inkludert i spere');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Der er ingen sperre å vise');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Antall stjerner');
jr_define('_JOMRES_COM_A_RESET','Nullstill');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','Bestilling er kansellert');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE','Søk her for:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Valutasymbol');
jr_define('_JOMRES_COM_A_CURRENCYCODE','Valutakode');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Mer informasjon');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Begrens forhåndsbestillinger?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Sett denne til ja om du ønsker å begrense forhåndsbestilling (bruk det neste feltet for å sette begrensninger i antall dager). Hvis du setter denne til Ja så vil, dersom brukeren prøver å bestille mer enn x dag(er) på forhånd, deres ankomstdato bli satt x dag(er) frem i tid');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Dager forhåndsbestillinger er begrenset til:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Mva');
jr_define('_JOMRES_COM_A_ROOMTAX','Mva');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','romavgift fastbeløp');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Romavgift i prosent');
jr_define('_JOMRES_COM_A_EUROTAX','Euroavgift');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Euroavgift prosent');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Arkivér alle poster');
jr_define('_JOMRES_FRONT_TARIFFS','Priser');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Prisnavn');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Prisbeskrivelse');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Enhetstype');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Gyldig fra');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','Gyldig til');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Per person per natt');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Per natt');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Ikke inklusiv helger');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dager');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maksimum dager');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min personer');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maks personer');
jr_define('_JOMRES_FRONT_PREVIEW','Forhåndsvisning');
jr_define('_JOMRES_COM_A_EDITINGMODEON','Redigering på?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Oppdatert kundetekst.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Redigere språk');
jr_define('_JOMRES_FRONT_PTYPE','Enhetstype');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','List enhetstyper');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Rediger enhetstyper');
jr_define('_JOMRES_COM_PTYPES_PTYPE','enhetstype');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','Beskrivelse av enhetstype');
jr_define('_JOMRES_COM_PTYPES_SAVED','enhetstype lagret');
jr_define('_JOMRES_COM_PTYPES_DELETED','enhetstype(r) er slettet');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Betalingspåminnelse');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','Ingen ekstra tjenester å legge til regningen');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Forskudd');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','Fullt beløp');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Beløp belastet ved bestilling');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','Benytt dette valget for å bestemme hvilket beløp som skal belastes ved bestilling. Velg forskudd om du skal belaste forskudd, eller fullt beløp om hele summen skal belastes.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','Kalendermåneder som skal vises');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','I tilgjengelighetskalenderen, hvor mange måneder skal vises?');
// V1.4
jr_define('_JOMRES_COM_A_CANCEL','Avbryt');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','Velg enhetene du vil sperre, og de aktuelle datoene. <br>Dersom en enhet ikke har en avmerking, kan den ikke inkluderes i sperren før eventuelle opphold er avsluttet/kansellert.<br/> Etter at du har valgt de aktuelle datoene klikker du den blå Bruk knappen for å kontrollere tilgjengeligheten igjen. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN','<b>Det ser ut som om systemet har logget deg ut pga inaktivitet</b> Logg inn igjen og prøv på nytt.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Årsak');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Bruke betalingstjenester?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Vennligst velg betalingsmåte.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','Utvei tillatt?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modifisert plugin-innstillinger');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Lagt til plugin-innstillinger');
jr_define('_JOMRES_FRONT_GALLERYLINK','Vis enhetens hjemmeside');
jr_define('_JOMRES_COM_A_GALLERYLINK','Ekstern link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Legg inn link til hjemmesiden her.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Redigér kredittkort');
jr_define('_JOMRES_COM_A_EDITICON','Rediger ikonstørrelse');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Bildefremvisning');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Vis link til bildefremvisningen?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Vis bilderemvisningen på siden?');
jr_define('_JOMRES_FRONT_SLIDESHOW','Bildefremvisning');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Vis link til priser?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','Pop-ups tillatt?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Last opp mange bilder');
jr_define('_JOMRES_A_TABS_MISC','Diverse');
jr_define('_JOMRES_A','Konfigurér side');
jr_define('_JOMRES_A_ICON','Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Velg den søkemodulen du ønsker å bruke.');
jr_define('_JOMRES_FRONT_NORESULTS','<b>Beklager, men det finnes ingen treff for søket ditt. Vennligst endre søket og prøv igjen.</b>');
jr_define('_JOMRES_AREYOUSURE','Er du sikker?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Bestill en enhet');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Bestill denne enheten');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Vis priser inline?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Vis adresseopplysninger');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Vis detaljert enhetsinfo');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Vis enhet og tilgjengelighet');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Vis adresseopplysninger under denne linken');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Vis detaljert enhetsinfo under denne linken');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Vis enhet og tilgjengelighet under denne linken');
// Translate from here
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Fastpris');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Gjennomsnitt');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Velg prismodellen du ønsker å bruke');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC','Du har to metoder for beregning av pris. Den første er fastpris, som gir deg mulighet til å gi deg flere prisvalg slik at kunden betaler en fast pris for hele oppholdet. Dette kan være en fordel hvis du vil forandre pris på forskjellige opphold. Den andre er gjennomsnitt, som finner alle prisene for hver dag i bestillingen, legger de sammen og returnerer gjennomsnittet innen perioden');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Vis input for avreisedato?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC','Sett denne til NEI hvis du ikke ønsker å vise avreiseboksen. Bruk denne kun hvis du vet hva du driver med, da avreisedatoer i bestilling alltid settes til dagen etter ankomstdato');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Begrens beskrivelse');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC','Dette valget setter begrensninger for antall tegn i oppføringen for enheter');
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','Brukt stil for datoformat?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Klikk for å publisere');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Klikk for å trekke tilbake publiseringen');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','Inputfeil i bakgrunnsfarge');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','Standard land i bookingbestillingen');
jr_define('_JOMRES_JAVASCRIPT_','Felter merket med rød stjerne er påkrevet.');
jr_define('_JOMRES_COM_SELFREGISTRATION','Brukerne kan registrere sine enheter?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','Sett dette til JA hvis du vil at brukerne skal kunne registrere sine enheter uten påvirkning fra administrator.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Felter merket med rød stjerne er påkrevet.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Enheter opprettet');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','Vis kalender fra årets start?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Tilgjengelighetskalenderen vises fra årets start.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Antall enheter ledige');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Tilbake til enhetsdetaljer');
jr_define('_JOMRES_FRONT_ROOMTYPES','Enhetstyper');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','Bruk dette skjemaet for å legge til din bestilling. Beveg muspekeren over i-ikoner for mer informasjon om kolonner. Velg ankomst og avreisedato, og velg antall gjester. Velg så enheten/antall enheter du ønsker fra listen over enheter som er tilgjengelige. Klikk på hvilken som helst ledig enhet og legg dette til din bestilling. Når du er ferdig kan du legge til tillegg du måtte ønske. Siste steg er å fylle inn kontaktinformasjon. Når alle steg er fullført vil det vises en knapp som brukes for å fullføre bestillingen.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Bruk dette skjemaet for å legge til din bestilling. Beveg muspekeren over i-ikoner for mer informasjon om kolonner. Velg ankomst og avreisedato, og velg antall gjester. Når du er ferdig kan du legge til tillegg du måtte ønske. Siste steg er å fylle inn kontaktinformasjon. Når alle steg er fullført vil det vises en knapp som brukes for å fullføre bestillingen.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','Bestilling');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Velg ankomst- og avreisedato:');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Tilgjengelighet ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Velg enhet(er) du ønsker');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Se her for å se om enhet er ledig.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Valgfrie tillegg');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','Velg tillegg du vil inkludere i bestillingen din');
jr_define('_JOMRES_COM_PERDAY','Per natt');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Din kontaktinfo / fakturaadresse');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','Fyll inn dine detaljer. Merk: Alle felter med rød stjerne er påkrevd');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Ledige enheter');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Valgte enheter');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Tidligste ankomstdato er: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Per natt:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Totalt:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Tillegg:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','Mva:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Rabatt:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Totalt:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','gjester');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Legg til i bestillingen');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Fjern fra bestillingen');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Kundegruppe');
jr_define('_JOMRES_VARIANCES_TYPE','Type');
jr_define('_JOMRES_VARIANCES_TYPE_TT','Type kunde, feks barn alder 5-10, eller studenter ');
jr_define('_JOMRES_VARIANCES_NOTES','Notater');
jr_define('_JOMRES_VARIANCES_NOTES_TT','Notater du vil gjøre for denne kundegruppen');
jr_define('_JOMRES_VARIANCES_MAXIMUM','Maksimum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksimum av denne kundegruppen kan velges i bestillingsskjemaet');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','I prosent');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Den kalkulerte prisen er en prosentvis pris av den kalkurerte grunnprisen for enheten. Hvis denne er satt til Nei vil prisen du spesifiserer bli lagt til eller trukket fra grunnprisen for enheten.');
jr_define('_JOMRES_VARIANCES_POSNEG','Legg til variabel?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','Den kalkulerte prisen er lagt til eller trukket fra grunnprisen kalkulert for enheten. Sett denne til Nei hvis du vil at den kalkulerte prisen er et prisavslag av grunnprisen.');
jr_define('_JOMRES_VARIANCES_VARIANCE','Variabel');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','Summen av variabelen');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modifisert sortering for kundegruppe');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Slett kundegruppe');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Opprett kundegruppe');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Oppdatér kundegruppe');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Oppdatert kundegruppe');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Vis lenker til enhetslisten i siden for egenskapsdetaljer?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','Vis <b>kun</b> Tilgjengelighetskalender/Enhetslisten?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Sett denne til JA hvis du ikke ønsker å vise enhetsoverskrift og detaljer, slik at kun enhetslisten/tilgjengelighetskalenderen er synlig i detaljseksjonen. Dette alternativet er for brukere som leier ut enkle enheter.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Ankomst/avreise minimum intervall');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimumsintervallet i bestillingsskjemaet mellom ankomst- og avreisedato.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Bookingskjema viser enhetsnummer');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Bookingskjema viser enhetsnavn');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Bookingskjema viser pristittel');
jr_define('_JOMRES_ORDER','Sortering');
jr_define('_JOMRES_REQUIREDFIELDS','Påkrevd');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dager før ankomst');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimum dager som må overlappe, fra i dag, til før ankomstdato.');
jr_define('_JOMRES_DTV','Datotype variasjoner');
jr_define('_JOMRES_DTV_DOW','Dag i uken');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Kundegruppe som standard');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standardnummer for den første kundegruppen. Hvis du bruker kundegrupper er dette standardnummeret som den første kundegruppen vil bli satt til i bestillingsskjemaet.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Kun registrerte medlemmer kan bestille på nett?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Beklager, men du må være registrert for å bestille på nett. Klikk her for å registrere deg. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Skrift farge for linker til gjeldende bestillinger');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Marg for helger');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Enheten er bestilt');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','Sperret bestilling');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Avrund forskudd opp til nærmeste hele tall?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Krev forskudd?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Priser lagret med ukespriser?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Du har valget om du vil lagre enten dagspriser eller ukespriser. Hvis du lagrer de ukenlig MÅ du sette dette alternativet til Ja.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Pris per uke');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fast ankomstdato: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Når du velger fast ankomstdato kan datoen vises i en nedtrekksliste');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Ankomstdato ugyldig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Avreisedato er feil');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Bestillingen er for kort. Det må minimum være følgende antall dager mellom ankomst- og avreisedatoen:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Din bestilling har følgende antall dager:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Kundegruppe-variant er ukorrekt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Velg kundegruppe');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Det er for mange gjester for oppgitt pris');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Du har valgt flere enheter enn du har gjester');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','For mange gjester, ikke nok sengeplasser');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Du må velge flere enheter');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Start med å legge til en eller flere enheter i din handlekurv');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Fornavn er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Etternavn er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Husnummer er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Gatenavn er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Sted er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postnummer er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Land er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Hjemmetelefon er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Mobiltelefon er påkrevd');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','E-postadresse er påkrevd');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','Vi har ledig!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Ingen enhet(er) valgt. Vennligst legg til ønsket overnatting for å fortsette!');
jr_define('_JOMRES_BOOKING_NUMBER','Bestillingsnummer');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Klar til bestilling, meldingboks bakgrunn.');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','Tøm mal-variabler?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Sett denne for å muliggjøre DHTML-tømming av mal-variabler for hver FRONTEND malfil mens siden vises. Nyttig hvis du vil se om et bestemt element er tilgjengelig for bruk i en bestemt mal.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Tallet er prosentvis');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Sett denne til Ja hvis enkeltmannstillegget er prosentvis. Hvis Nei vil en fast sum bli satt.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST','Begrens antall ledige enheter(enhetspriser');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Bruk dette feltet til å begrense antall enheter og enhetspriser som er i bestillingsskjemaet. Sett den til 0 hvis begrensning ikke ønskes. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','Ingen ledige enheter på dette tidspunktet.');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW','Bestill nå: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global redigeringsmodus?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Vær forsiktig med denne funksjonen. Hvis ja, vil redigeringsmoduset påvirke alle tilpassede tekster for alle enheter i systemet for konstanten du redigerer.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Globalt valutasymbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponent innpakket');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set denne til Ja hvis komponenten skal være innpakket for at modulen og header-området ikke skal vises.');
jr_define('_JOMRES_COM_WEEKENDONLY','Kun helger');
jr_define('_JOMRES_COM_WEEKENDDAYS','Helgedager');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Sett dine helgedager. Priser som tillatter eller nekter helger vil ta denne innstillingene i bruk når enhetslister blir generert.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Velg land før du legger til informasjon om enheten.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Lagre endringer i enheten før du laster opp bilde.');
jr_define('_JOMRES_TARIFFSFROM','Priser fra - ');
jr_define('_JOMRES_SEARCH_ALL','Alle');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Søk etter land');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Søk etter region');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Velg sted');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Fasilitetssøk.');
jr_define('_JOMRES_SEARCH_BUTTON','Søk');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Skriv inn et søkeord i boksen, og trykk på knappen.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Søkeord: ');
jr_define('_JOMRES_SEARCH_AVL_INFO','Vennligst velg din ankomst- og avreisedato for å finne overnatting og opplevelser!');
jr_define('_JOMRES_SEARCH_PTYPES','Velg utleietype');
jr_define('_JOMRES_SEARCH_RTYPES','Velg enhetstype');
jr_define('_JOMRES_SORTORDER_DEFAULT','Standard');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','Utleiested');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','Utleiers region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','Utleiers by');
jr_define('_JOMRES_SORTORDER_STARS','Stjerner');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','Utleiedetaljer - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Bestillingsskjema');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Oppdatér din adresse');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Sjekker tilgjengelighet om igjen<br/>(Enhetsvalg vil bli slettet)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Sjekker tilgjengelighet om igjen');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Endrer dine tillegg');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Endrer dine enhetsvalg');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Oppdaterer din adresse');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Beklager, men en eller flere av adressefeltene er feil.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Bilde av enheten');
jr_define('_JOMRES_CURRENCYFORMAT','Valutaformat');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Søkevalg');
jr_define('JOMRES_COM_A_AVAILABLELOGS','Tilgjengeligshetslogg');
jr_define('JOMRES_COM_A_MESSAGE','Melding');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Avansert');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Detaljstyrt');
jr_define('JOMRES_COM_A_TARIFFMODE','Modus for prissetting');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC','<b>Advarsel: Endring mellom forskjellige pristyper kan resultere i tap av data. Se melding under for mer informasjon.</b>.
<br/><br/>
Du har tre valg for hvordan du vil definere priser.<br/>
Normal modus: Du har én pris for hver enhetstype som er gyldig de neste 10 årene.<br/>
Detaljstyrt: Du kan modifisere prisen for hver og en dag for hver enhetstype.<br/>
Avansert: Den "gamle" metoden for å styre priser. <br/>
<br/>
De forskjellige modusene gjør at du kan velge den modusen som passer deg best.<br/>
Normal modus er den enkleste, og den er enkel å forstå da den krysser enheter og priser med enhetstyper slik at du kan endre alt på én side.<br/>
Detaljstyrt gjør at du kan variere prisene dag for dag uten å måtte endre en drøss med priser. Den krysser forskjellige priser med hverandre, og gjør at du har mange priser for å dekke forskjellige perioder. Men: du kan ikke legge priser over hverandre.<br/>
Avansert modus lar deg lage en enhet og knytte den til en enhetstype. Du kan så lage et prisoppsett som du knytter om til DEN enhetstypen. Ved å bruke denne metoden er det mulig å legge forskjellige "lag"# med priser oppå hverandre, for eksempel en enhetstype "dobbeltrom" kan ha én pris for rom og frokost, og en annen pris for rom, frokost og middag. Den avanserte modusen krever mer fokus på detaljer siden det er mulig å IKKE knytte en enhet eller pris til en enhetstype, eller å sette datoer feil, men den gir deg innstillingsmuligheter som ingen andre moduser kan gi deg.<br/>
<br/>
Siden Normal og Detaljstyrt trenger spesifikke oppsett av enheter og priser for at oppsettene skal virke kan systemet trenge å slette data for å få det gjeldende prisoppsettet til å virke.<br/>
<br/>
Normal -> Avansert: Ingen endring. Eksisterende priser blir beholdt.<br/>
Normal -> Detaljstyrt: Alle eksisterende prisoppsett blir fjernet.<br/>
Avansert -> Normal: Alle eksisterende prisoppsett blir fjernet.<br/>
Avansert -> Detaljstyrt. Alle eksisterende prisoppsett blir fjernet.<br/>
Detaljstyrt -> Avansert. Alle eksisterende kryssreferanser mellom prisoppsett blir fjernet, men prisene i seg selv blir beholdt.<br/>
Detaljstyrt -> Normal. Alle eksisterende kryssreferanser og priser blir fjernet.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Vis enhetsliste i detaljefeltet for utleiested?');
jr_define('JOMRES_PROPERTYTYPE','Utleietype');
jr_define('JOMRES_MAXPEOPLEINROOM','Maks antall personer per enhet');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Maks antall personer per bestilling');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Legg til kommentar');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Endre kommentar');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Slett kommentar');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','Vis kommentarer');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','La til ny kommentar');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Endret kommentar');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Slettet kommentar');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','List bestillinger');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','Mine bestillinger');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','Vis bestilling');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Vis favoritter');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Du har ikke lagt til noen favoritter ennå!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','Utleietype');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','Aktiv');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','Denne plugin gjør at du kan aktivere og konfigurere prisene dynamisk.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','De fleste selskaper vil rekalkulere enhetsprisene basert på antall enheter av en bestemt type som er tilgjengelig på en bestemt dato. Dette gjør at de kan tilby rabatter på en enhet som ikke er opptatt i en gitt periode, med formål å øke bestillingene i den perioden.<br/>Aktivering og konfigurering av denne plugin gjør at du kan tilby justerbare priser basert på antall enheter av en bestemt type som er tilgjengelig på en bestemt dag.<br/> Dagens grense definerer antall dager som ankomstdato må være innen før enhetsprisene blir justert av denne egenskapen, og prosentsatsene gjør at du kan konfigurere prostenvis antall enheter som kan være tilgjengelig før rabatt blir gitt.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','Grense (antall dager mellom ankomstdato og i dag)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Prosent enheter opptatt 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Prosent enheter opptatt 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Prosent enheter opptatt 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Prosent enheter opptatt 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Rabatt %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' har blitt rabattert fra ');
jr_define('_JOMCOMP_WISEPRICE_TO',' til ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Enhetspris uten rabatt ');
jr_define('JOMRES_COM_A_MAPSKEY','Google maps API-nøkkel');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Du kan få tak i API-nøkkel fra <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Når nøkkel er lagt inn kan du vise kart i detaljfeltet for utleieenheten.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Siste liten');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktiv?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Sett denne til Ja hvis du vil aktivere "siste liten"-tilbud.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Grense');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Hvis en bestilling gjøres og ankomstdato bare er N dager fra bestillingsdato, gis det rabatt.');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Rabatt');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','I prosent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','En rabatt er lagt til på denne bestillingen!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Leiesummen har blitt redusert med ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Denne utleieren tilbyr "siste liten"-rabatt på  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' prosent hvis du bestiller med ankomst før ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE',' prosent eller mer hvis du bestiller med ankomst før ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Bestill nå for å øke rabatten!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Detaljert prisinformasjon');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Sett denne til Ja for å vise mer detaljert prisinformasjon i detalj/prisfeltet for utleieenheten.');
jr_define('JOMRES_COM_A_MINIMALCONFIG','Minimér konfigurasjonsinstillingene');
jr_define('_JOMCOMP_AMEND','Endre bestilling - Velg utleieenhet');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Velg ny utleieenhet');
jr_define('_JOMCOMP_AMEND_HEADER','Original leiesum:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','Forskudd betalt');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Forskudd ikke betalt');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Overstyr totalt');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Overstyr forskudd');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL','Avbryt');
jr_define('_JRPORTAL_CPANEL','JRPortal Kontrollpanel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Standard kommisjonsrate');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Velg standard kommisjonsrate som vil bli lagt til utleieenheter hvis ikke en annen kommisjonsrate er satt.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','List kommisjonsrater');
jr_define('_JRPORTAL_CPANEL_PATETITLE','Kommisjonsrater');
jr_define('_JRPORTAL_CRATE_TITLE','Tittel');
jr_define('_JRPORTAL_CRATE_TYPE','Type');
jr_define('_JRPORTAL_CRATE_VALUE','Kommisjonsrate');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Valutekode');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','List utleieenheter');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Utleieenhetens navn');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Utleieenhetens adresse');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','Utleieenheter med rød bakgrunnsfarge har ikke satt kommisjonsrate.');
jr_define('_JRPORTAL_STATS_PATETITLE','Statistikk');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Kommisjonsrate');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bestillinger');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Utleieenhetens id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Faktura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Bestilling totalt');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Arkiveringsdato');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Beskrivelse');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Du kan sette egne språkfiler for forskjellige utleieenheter ved å sette beskrivelsen lik navnet på en undermappe (f.eks hytteutleie), og kopiere en språkfil til den undermappen. Du kan så endre språkfilen for denne utleieenheten slik at rom eksempelvis blir til DVD, hytte, sykkel etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Du kan ikke slette denne utleieenheten siden det er den eneste utleieenheten du har tilgang til. Hvis du vil skjule den kan du bruke Avpublisér i menyen.');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL','Leiesum totalt');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS','natt/netter á');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM','per enhet ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL','Tillegg totalt ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY','Prisoppsummering ');
jr_define('_JOMRES_CONFIRMATION_ALERT','Vennligst les og godta ');
jr_define('_JOMRES_CONFIRMATION_HEADER','En oppsummering av din bestilling vises nedenfor.<br /> For å gjøre endringer, vennligst klikk på knappen Endre bestilling. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT','Vennligst klikk her hvis du trenger å endre noe av informasjonen ovenfor');
jr_define('_JOMRES_CONFIRMATION_AMEND','Endre bestilling');
jr_define('_JOMRES_CONFIRMATION_SPECIALS','Vennligst legg inn eventuelle spesielle forespørsler i boksen under.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT','Jeg bekrefter at informasjonen ovenfor er korrekt og godtar');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON','per person per natt ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	jr_define('_PN_OF','av');
if (!defined('_PN_START'))
	jr_define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Forrige');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Neste');
if (!defined('_PN_END'))
	jr_define('_PN_END','Slutt');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Resultater');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Merk at dette IKKE er et bestillingsskjema. Du sender i stedet en e-post.<br>Vennligst skriv inn beskjeden du vil sende til ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Kontakt utleiested');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Utleiespørsmål fra ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Takk for din forespørsel. Din beskjed har blitt sendt til utleiers e-postadresse, og kopiert til din egen adresse for informasjon. Utleier vil svare så raskt som mulig.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' angående ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Forespørsel');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Vennligst velg din ønskede overnatting fra listen under.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min antall enheter allerede valgt');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum antall enheter allerede valgt i bestillingen før pris/enhetstype kombinasjon kan tilbys. Gjør at du kan gi rabatt når mer enn N enheter allerede er valgt. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Maks enheter allerede valgt');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maks antall enheter allerede valgt i bestillingen før pris/enhetstype kombinasjon ikke lenger tilbys. Gjør at du kan slutte å tilby denne kombinasjonen når N enheter har blitt valgt i bestillingsskjemaet. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Merk at enkeltpersonstillegg satt her ikke vil bli brukt hvis Enkeltpersonstillegg er satt til Ja i Generell Konfigurasjon. Innstillingene her er alternativer til å ha faste priser for enkeltpersonstillegg, ikke et tillegg til fastpris SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS','Tilgjengelig');
jr_define('_JOMRES_AVLCAL_QUARTER','Enkelte bestillinger');
jr_define('_JOMRES_AVLCAL_HALF','Halvfullt');
jr_define('_JOMRES_AVLCAL_THREEQUARTER','Mange bestillinger');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED','Fullt');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per uke');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per dag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per bestilling');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per bestilling');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per dag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per uke');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per dag (min dager)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per dag X enheter valgt');
jr_define('_JOMRES_REGISTRYREBUILD','Gjenopprett minikomponent-registeret');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES','Normalt vil systemets plugin-register gjenopprettes automatisk når du viser plugin-manageren, og når du legger til eller fjerner en plugin. Det er derimot mulig at du ikke kan bruke funksjonene av en eller annen grunn. Du kan derfor bruke dette valget til a gjenopprette registeret manuelt. Hvis du har tilgang til plugin-manageren og oppgraderingshjelperen er det lite sannsynlig at du vil trenge denne funksjonen. Du vil trenge å gjenopprette registeret hver gang du legger til en ny minikomponent uten å ha brukt plugin-manageren til å legge den til.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registeret gjenopprettet riktig');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','Det skjedde en feil under gjenopprettingen. Du bør sjekke systemets feillogg for å se om det er laget en registrering av hva som forårsaket feilen.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Velg prisklasse');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Du har ikke bestilt noe ennå!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Endre din utleietype');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Velg din utleietype');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Din forespørsel...');
jr_define('_JOMRES_COM_A_LISTLIMIT','Grense for utleielisten');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','Antall utleieenheter som vises på en side etter søk');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrert søkefunksjon');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Systemets integrerte søkefunksjon tillater brukerne å søke gjennom systemts utleieenheter i henhold til et sett av funksjoner. Hvis du allerede har brukt søkefunksjonen i Joomla tidligere så vil du være kjent med disse innstillingene.<br/>Denne funksjonen tillater oss å tilby søkehåndtering innen systemet for brukere som ikke ønsker å bruke Joomlas søkemoduler, eller for andre CMS-brukere der CMSet ikke har sin egen søkemodul for systemet.<br/>Husk på at hvis du velger å søke etter noe via en link (altså ikke en nedtrekksmeny) så vil ikke søkeopsjonene bli implementert, kun elementet som korresponderer med linken som du klikket.<br/>Merk at som standard så er layouten på det integrerte søket ikke veldig pent. Det er fordi template-filen som sørger for layouten må ta med alle mulige opsjoner, og noen er ikke kompatible. For å forbedre layouten og få til det du ønsker må du endre på <b>srch.html</b> i mappen /jomres/templates/(bootstrap3 eller bootstrap eller jquery_ui)/frontend/ ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Aktivér denne funksjonen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Hvis denne funksjonen er aktivert, så vil alle kall til systemet som viser utleielisten også vise søkeopsjonene.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Bruk kolonner');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC','Enhver søkeopsjon som du har definert som link vil bli vist som kolonner (altså med br på slutten av linken');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO','Søk region ved å velge kombinasjonsboks');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC','Tilby en nedtrekksmeny for å filtrere lang/regioner/byer. Hvis du skal bruke denne funksjonen bør du ikke bruke region/by søk nedenfor.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Søk på utleienavn");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Vis input for søk på utleienavn");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Vis som nedtrekksmeny?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Sett denne til Nei for å vise listen som linker");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Søk på by/region");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Vis input for søk på region");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Vis som nedtrekksmeny?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Sett denne til Nei for å vise listen som linker");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Søk etter utleietype");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Vis input for utleietype");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Vis som nedtrekksmeny?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Sett denne til Nei for å vise listen som linker");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Søk etter enhetstype");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Vis input for søk etter enhetstype");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Vis som nedtrekksmeny?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Sett denne til Nei for å vise listen som linker");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Søk etter funksjoner");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Vis input for søk etter funksjoner");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Vis som nedtrekksmeny?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Sett denne til Nei for å vise listen som tooltip-bilder og sjekkbokser");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Søk etter beskrivelse");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Vis input for søk etter beskrivelse");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Søk etter tilgjengelighet");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Vis input for søk etter tilgjengelighet");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Søk etter prisklasser");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Vis input for søk etter prisklasser");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Trinn for prisklasse");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Systemet vil se på alle verdiene i prisplanene, og finne ut en serie med prisklasser basert på trinnet du setter her.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Som standard vil det settes i gang et søk hvis et utleiested ikke er valgt i systemet. Hvis dette søket ikke var satt i gang av en søkemodul, så vil søket gi tilfeldige resultater (med vilje). Denne opsjonen gjør at du kan begrense antall søkeresultater i det tilfeldige søket.');
jr_define('_JOMRES_COM_A_CRON_TITLE','Cron jobb innstillinger og logger');
jr_define('_JOMRES_COM_A_CRON_DESC','Pseudocron jobb-informasjon. Den pseudocrone funksjonaliteten trengs av fakturerings- og kommisjonshåndteringen.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installerte cron minikomponenter. For å kjøre en individuell cron-jobb, bruk linkene under. Merk at en cron-jobb ikke genererer noen resultater, så du vil ikke se noe informasjon på siden. Referér til jobb-loggen under i stedet.');

jr_define('_JOMRES_COM_A_CRON_METHOD','Metode');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"Hvis du ikke har tilgang til cron-jobber, sett denne til Minikomponent. Hvis ikke, lag en cron-jobb og be den kjøre <br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1> /dev/null</i>");
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Endre mal');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Tilpassede felt');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Her kan du definere enkle tilpassede felt som du kan vise i bestillingsskjemaet.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Feltnavn (ingen mellomrom)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Standardverdi');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Beskrivelse');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Påkrevd');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maksimalt antall');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Hvis Maksimalt antall er satt til høyere enn 1, så blir gjesten vist en nedtrekksmeny for å velge hvor mange tillegg de ønsker.');
jr_define('_JRPORTAL_TAXRATES_TITLE',"Mva-rater");
jr_define('_JRPORTAL_TAXRATES_CODE',"Mva-kode");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Beskrivelse av rate");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Du kan ikke slette denen mva-raten.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Rate");
jr_define('_JRPORTAL_INVOICES_TITLE',"Fakturaer");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Ubetalt");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Betalt");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Kansellert");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Venter");
jr_define('_JRPORTAL_INVOICES_USER',"Bruker");
jr_define('_JRPORTAL_INVOICES_STATUS',"Status");
jr_define('_JRPORTAL_INVOICES_RAISED',"Laget");
jr_define('_JRPORTAL_INVOICES_DUE',"Forfall");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Abonnement");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Utestående totalt");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Frekvens på faste betalinger");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Dag i måneden for faste betalinger");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Valutakode");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Linjer");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Navn");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Beskrivelse");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Opprinnelig pris");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Opprinnelig antall");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Opprinnelig rabatt");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Opprinnelig totalsum");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Mva-kode");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Mva-beskrivelse");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Mva-rate");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Overstyr standard gateway-innstillinger i systemet?");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Vis mine fakturaer");
jr_define('_JRPORTAL_COUPONS_TITLE',"Rabattkuponger");
jr_define('_JRPORTAL_COUPONS_DESC',"Rabattkuponger kan genereres og gis til gjester som et incentiv for å gjøre bestillinger. Gyldighetsdatoene refererer til datoene som en bestilling kan lages, ikke datoene for selve bestillingen.");
jr_define('_JRPORTAL_COUPONS_CODE',"Kupongkode");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Gyldig fra");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Gyldig til");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Rabatt");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Rabatten er prosentvis");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Kun enhet");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Hvis du har en kupongkode, vennligst skriv den inn i boksen og trykk på "Lagre kupong"-linken for å lagre kupongen i din bestilling.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Lagre kupong');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Kupong lagret i bestilling');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Kupongkode ikke funnet');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Kupongrabatt');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Bestillingen er rabattert. Kupongkode/rabatt/kuponginnstillinger: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Velg språk');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Velg språk som vises i nedtrekksmenyen for språk.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Vis nedtrekksmenyen for språk?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR',"Kjære");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Takk for registreringen ");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Ditt brukernavn er : ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Ditt passord er : ");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Vennligst logg inn for å se dine bestillinger ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Kupong lagret');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Kupong slettet');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Brukernavn");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Passord");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Mobilnummer");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Vennligst bruk formatet 'Landkode, mobilnummer'. For eksempel vil et norsk nummer være '4499123456'. La denne være blank hvis du ikke ønsker meldinger til din mobiltelefon.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Vis handikapaksess i enhetslisten på bestillingsskjemaet');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Vis maks personer i enhetslisten på bestillingsskjemaet');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Merk at prisene listet er foreløpige, og full pris for bestillingen kalkuleres når du har lagt til en eller flere enheter til din bestilling.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Abonnementpakker");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Navn");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Beskrivelse");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Publisert");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Fullt beløp");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Grense for utleieenhet");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Abonnér");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Bruk abonnements-funksjonalitet");
jr_define('_JOMRES_COM_NEWUSER','Lag ny bruker ved bestilling');
jr_define('_JOMRES_COM_NEWUSER_DESC','Lag ny brukerkonto ved uregistrert brukerbestilling.');
jr_define('_JOMRES_CLICKTOREGISTER','Klikk her for å registrere din utleieenhet');
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Takk for din bestilling – nye brukerdetaljer følger");
jr_define('_JOMRES_LATLONG_DESC',"Bruk musen til å flytte rundt på kartet, og dra pekeren til stedet utleieenheten befinner seg for å sette lengde- og breddegrad.");
jr_define('_JOMRES_CONTROLPANEL','Kontrollpanel');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Vis faktura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Vis fakturaer');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Legg min utleieenhet til denne siden');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Advarsel : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Beklager, men pakke-ID’en ble ikke gjenkjent");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Beklager, du er allerede abonnement på en gratispakke, og du kan ikke abonnere på flere.");
jr_define('_JOMRES_COM_YOURBUSINESS','Dine detaljer');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','Sted');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','Organisasjonsnummer');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Bygningsnummer');
jr_define('_JOMRES_INVOICE_NUMBER','Fakturanummer ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Velg datoene du ønsker å sperre. Når du har valg de ønskede datoene trykker du Bruk-knappen for å sjekke tilgjengelighet. <br/> 
<br/> 
Hvis utleieenheten har en eller flere bestillinger i perioden du ønsker å sperre, vil du ikke klare å sperre før du har kansellert de andre bestillingene.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Beklager, men du kan ikke sperre denne utleieenheten for disse datoene.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Du kan sperre utleieenheten for disse datoene.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Din utleieenhet er konfigurert for å ta betalt per person per natt, men du har ingen gjestetyper laget eller publisert. Vennligst lag og publisér en eller flere gjestetyper. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Du har ingen priser konfigurert, og vil derfor ikke kunne ta imot bestillinger for din utleieenhet.');
jr_define('_JOMRES_EDITINGMODE_ON','Editeringsmodus på');
jr_define('_JOMRES_EDITINGMODE_OFF','Editeringsmodus av');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Belast variable depositumer?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable depositumer gjør at du kan velge å ta betalt fullt beløp hvis ankomstdagen er innen N dager fra "i dag". Sette denne opsjonen til Ja for å aktivere funksjonen, og legg inn antall dager under, slik at f.eks hvis ankomstdagen er innen 60 dager, så vil depositumet være fullt beløp, mens det ellers vil være basert på opsjonene du har konfigurert ovenfor.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Antall dager før ankomst som innebærer fullt depositum ved bestilling.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Bekreftelses-epost har blitt sendt. Du kan nå lukke dette vinduet.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Kontakt agent');
jr_define('_JOMRES_INVOICE_MARKASPAID','Merk faktura som betalt');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Faktura merket som betalt');
jr_define('_JOMRES_APIKEY_REMAKE','Lag ny API-nøkkel');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Er denne installasjonen for én enkelt utleieenhet?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Hvis denne opsjonen er satt til JA, så vil forsiden av systemet være veldig enkel for ikke-autoriserte brukere. Standard kall til systemet fra en meny, i stedet for å vise en liste over enheter, tar gjesten rett til bestillingsskjemaet for første enhet i systemet. Utleiere vil heller ikke se forhåndsvisning av utleiedetaljene, og knapp for å legge til ny enhet. Dette er ideelt hvis du bare vil liste én enhet og ta bestillinger for den.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Restbetaling');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Merk, du bruker Editeringsmodus med Global Editering aktivert. Dette går bra hvis du skjønner hva Global Editering betyr, men hvis ikke kan du skape problemer. Hvis du er usikker på om du bør bruke systemet på denne måten, vennligst se <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">manualen for editeringsmodus</a> for mer informasjon om dette.');
jr_define('_JOMRES_SUPPORTKEY','Support-nøkkel');
jr_define('_JOMRES_SUPPORTKEY_DESC','Din support-nøkkel (også kalt lisensnøkkel). Du trenger en gyldig nøkkel for å laste ned plugins for systemet.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Personlig rabatt');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Begrens registreringer til ett land?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Du kan forsikre deg om at registreringene er begrenset til bare ett land ved å sette denne til JA og velge landet i neste opsjon.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Utleieenhetene finnes i dette landet : ');
jr_define('_JOMRES_JQUERYTHEME','Jquery-tema');
jr_define('_JOMRES_JQUERYTHEME_DESC','Velg et jquery-tema for bruk i detaljfeltet.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','Beklager, men enheten er ikke tilgjengelig for øyeblikket.');
jr_define('_JOMRES_REVIEWS','Anmeldelser');
jr_define('_JOMRES_REVIEWS_TITLE','Tittel på anmeldelsen');
jr_define('_JOMRES_REVIEWS_DATE','postet ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','Det finnes ingen anmeldelser av utleieenheten ennå.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Vil du være den første som anmelder denne utleieenheten?');
jr_define('_JOMRES_REVIEWS_IAGREE','Jeg er enig i anmeldelsen');
jr_define('_JOMRES_REVIEWS_IDISAGREE','Jeg er ikke enig i anmeldelsen');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Gjennomsnittsrangering: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Totale anmeldelser:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Legg til ny anmeldelse.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Du må være innlogget for å legge inn en anmeldelse.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Fortell oss hva du synes om dette utleiestedet : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Denne anmelderen fortalte oss : ');
jr_define('_JOMRES_REVIEWS_PROS','Plusser: ');
jr_define('_JOMRES_REVIEWS_CONS','Minuser: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Sendt inn: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','Du har allerede anmeldt dette utleiestedet, du kan ikke sende inn en ny anmeldelse.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Beklager, men du har ikke tilgang til å sende inn anmeldelse på denne siden.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Klikk for å vise anmeldelser');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' gjester er enige i denne anmeldelsen. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' gjester er ikke enige i denne anmeldelsen.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' gjest er enig i denne anmeldelsen. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','gjest er ikke enig i denne anmeldelsen.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Takk for at du deler din mening om denne anmeldelsen.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Takk, men du har allerede sagt din mening om denne anmeldelsen.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Vennligst pass på at alle feltene er utfylt.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Vennligst oppsummér din anmeldelse ved å legge inn en tittel');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Vennligst legg inn en beskrivende anmeldelse i boksen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Vennligst legg inn de gode delene ved opplevelsen på dette utleiestedet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Vennligst legg inn de negative sidene ved dette utleiestedet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Vennligst rangér gjestfriheten du opplevde fra personalet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Vennligst rangér din mening om utleieenhetens utseende');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Vennligst rangér din mening om renheten i utleieenheten');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Vennligst rangér overnattingen. Var den komfortabel eller slitt?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Vennligst rangér om du følte du fikk valuta for pengene');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Vennligst rangér servicen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Oppsummering av anmeldelsen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Din erfaring i detalj');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Takk for at du sendte inn din anmeldelse.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Takk for at du sender inn din anmeldelse. Den vil snart bli publisert av en av våre ansatte.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Bruk systemets anmeldelsesfunksjonalitet?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Publisér anmeldelser automatisk?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Hvis du setter denne til Nei må du selv publisere anmeldelser manuelt');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Sett anmeldelser til test-modus?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalt kan ikke utleiere anmelde utleieenheter. Med testmodus aktivert så kan de. Dette er selvsagt ikke ideelt.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Dette er en liste over alle utleieenhetene. For å se en enhets anmeldelser, klikk på enheten. Derfra vil du ha anledning til å publisere eller slette anmeldelser.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Antall upubliserte anmeldelser');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Totalt antall anmeldelser');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publisér/Avpublisér anmeldelse');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Slett anmeldelse');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Rapportér anmeldelse');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Se gjennom rapporter');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Vennligst legg inn din rapport');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Ser du noe i denne anmeldelsen som er feil eller diskuterbart? Raportér det, og vi vil ta en titt på det.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Send');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Rapport laget av ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Rapporter blir postet av brukers som kan være uenige i innholdet i en anmeldelse. Den eneste måten å fjerne en rapport på er ved å slette anmeldelsen.');
jr_define('_JOMRES_REVIEWS_RATING','Karakter (1 = dårlig 10 = perfekt) ');
jr_define('_JOMRES_REVIEWS_RATING_1','Gjestfrihet  ');
jr_define('_JOMRES_REVIEWS_RATING_2','Lokale ');
jr_define('_JOMRES_REVIEWS_RATING_3','Renhet ');
jr_define('_JOMRES_REVIEWS_RATING_4','Overnatting ');
jr_define('_JOMRES_REVIEWS_RATING_5','Verdi for pengene ');
jr_define('_JOMRES_REVIEWS_RATING_6','Service ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Anmeldt av : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Skjul anmeldelser');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Vis bestillingsskjema i detaljsiden?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Sett denne til Ja for å vise bestillingsskjema i detaljsiden. Hvis du setter til Nei vil det i stedet komme opp en link på detaljsiden som viser videre til bestillingskjemaet.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Er prisene oppgitt inkludert mva?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prisene er inkludert mva? Hvis prisene er inkludert mva, sett Ja. Hvis ikke, sett Nei.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Mva på tillegg:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Ukedag-feltene gjør at du kan sette prisen for en bestemt ukedag, og når du trykker på knappen for den dagen blir alle like ukedager fremover satt til samme pris.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Datovelgerne og prisinputen gjør at du kan sette en pris for en gitt datorekke. Velg en startdato og en sluttdato, legg inn pris, og trykk på Sett rater.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Startdato');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Sluttdato');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Pris');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Sett rater');
jr_define('_JOMRES_PARTNERS_TITLE','Partnere');
jr_define('_JOMRES_CALENDAR_RTL','feil');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Enhet ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','gjest(er). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','Følgende er vår fordeling av gjester i enhetene. Hvis du ønsker å endre denne fordelingen kan du kontakte utleier etter at bestillingen er gjort. Ved endringer kan det komme tillegg i pris.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Merk at utleieenheten ennå ikke er publisert, så det er bare du som kan se den, og ikke noen av gjestene på siden");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Standard rekkefølge på søkeresultater');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Endre denne opsjonen for å endre rekkefølgen på hvordan søkeresultatene vises.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Vis nedtrekksmeny for visning av søkeresultatene');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Stil for enhetslistene');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','Hvis du i bestillingsskjemaet bruker "klassisk" visning, så tilbyr du individuelle enheter til gjestene. Med visning av enhetstyper velger gjestene antall enheter av type X (f.eks 2 x dobbeltrom) i stedet');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Klassisk');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Enhetstyper');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Ukens startdato, Søndag eller Mandag');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Kun enhetens gjester kan anmelde?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Sett denne til Ja hvis du ønsker å begrense anmeldelser til å kun tillates for brukere som faktisk har vært gjester i enheten.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per enhet');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Gjester per enhet : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Gjester per bestilling : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Antall enheter');
jr_define('_JRPORTAL_MONTHS_LONG_0','Januar');
jr_define('_JRPORTAL_MONTHS_LONG_1','Februar');
jr_define('_JRPORTAL_MONTHS_LONG_2','Mars');
jr_define('_JRPORTAL_MONTHS_LONG_3','April');
jr_define('_JRPORTAL_MONTHS_LONG_4','Mai');
jr_define('_JRPORTAL_MONTHS_LONG_5','Juni');
jr_define('_JRPORTAL_MONTHS_LONG_6','Juli');
jr_define('_JRPORTAL_MONTHS_LONG_7','August');
jr_define('_JRPORTAL_MONTHS_LONG_8','September');
jr_define('_JRPORTAL_MONTHS_LONG_9','Oktober');
jr_define('_JRPORTAL_MONTHS_LONG_10','November');
jr_define('_JRPORTAL_MONTHS_LONG_11','Desember');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Sett denne til Ja for å redusere antall opsjoner tilgjengelig for utleiere i Generell Konfigurasjon. Dette er fornuftig hvis du ikke vil at utleiere skal leke med for mange innstillinger, og du kan i stedet endre jomres_config.php for å definere standard enhetsopsjoner.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Vennligst velg tillegg for din bestilling');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Skrur på html editor i enhetsdetaljene. Hvis denne er satt til Nei vil all html utenom p og br bli tatt vekk fra all tekst.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Vis fullskjerm");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal skjerm");
jr_define('_JOMRES_PARTNER_DISCOUNT',"Partnerrabatt ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Søk bruker");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Skriv inn noen få tegn for å søke etter bruker.<br/> Når du velger en bruker vil du automatisk legge den til som Partner, og du vil bli videresendt til neste side der du kan legge til enheter og rabatter for brukeren.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Eksisterende partnere");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Velg en partner for å bli tatt til siden for partneradministrasjon.");
jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Søk etter utleiested");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Legg inn noen få tegn fra navnet på utleiestedet, og velg stedet.<br/> Når du velger stedet vil det bli lagt til partnerens portefølje. Partneren vil ikke få rabatter ennå, de må du selve sette først.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Aktuelle utleiesteder");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Klikk på et utleiested for å endre partnerens rabatt for stedet.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"Denne kontoen har blitt stengt, og det er ikke mulig å administrere dine utleiesteder med denne kontoen.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Utleiekonto stengt");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Utleiekonto gjenåpnet");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Vennligst merk at din utleiekonto har blitt stengt. Du vil ikke kunne gjøre endringer for dine utleiesteder før kontoen er gjenåpnet. ");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Vennligst merk at din utleiekonto nå er aktiv. Du kan nå utføre endringer for dine utleieenheter. Vennligst logg inn og forsikre deg om at dine enheter er publisert.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Fjern favoritt');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Arkiv for bestillingsdata');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','Arkivet for bestillingsdata er en ren dumping av bestillingsinformasjonen som kommer etter at Bestill-knappen er trykket. Hold musen over en dato for å se informasjonen. Informasjonen er lagret i tabellen XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Endre konto');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Legg inn noen få tegn fra brukernavnet for å søke etter bruker.<br/> Når du velger en bruker vil du automatisk legge den til som utleier, og du blir videresendt til neste side der du kan legge til utleiesteder og rettigheter til brukeren.");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Eksisterende utleiere");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Personer");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Vis nedtrekksmeny for antall gjester");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Søk etter stjernerangering");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Vis nedtrekksmeny for stjernerangering");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Antall gjester');
jr_define('_JOMRES_SEARCH_STARS','Antall stjerner');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Antall utleiesteder");
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY',"Last systemets jQuery-bibliotek?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"Du kan sette denne til Nei hvis du har en mal som bruker jquery. Dette KAN løse jquery-konfliktproblemer på noen maler, men ikke alle.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','hvis du bruker Joomfish bør du sette denne til Nei, og bruke Joomfish sin språkvelger. Velgeren er alltid aktivert i administrasjonsområdet fordi den trengs når du bruker funksjonen for tekstoversettelser.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Miniatyrbilde lages automatisk for opplastede bilder.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Maks bredde (px) for små miniatyrbilder.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Små miniatyrbilder brukes i listen over utleiesteder, mens medium miniatyrbilder brukes i overskriften for utleiesteder.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Maks høyde (px) for små minatyrbilder.');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH',' Maks bredde (px) for medium minatyrbilder.');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT',' Maks høyde (px) for medium miniatyrbilder.');
jr_define('_JOMRES_TOUCHTEMPLATES','Tekstoversettelser');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"Bruk kommisjonsfunksjonalitet?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Sett denne til Ja for å vise utleierne kommisjonsfakturaer som har blitt laget.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Utleiers bestillinger lager kommisjonsfakturaer?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"Hvis en utleier bestiller, legges det til kommisjon på denne også?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Utesteng automatisk utleiere der fakturaer er merket Venter?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Grense for automatisk utestengelse");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"Denne grensen er antall dager utleier har på seg for å betale en faktura før de blir utestengt og utleiestedene deres blir avpublisert.");
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Språk-kontekst');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Bruk denne opsjonen for å endre sidens språk-kontekst. Denne funksjonen gjør at systemet kan bruke tekst som passer for ditt gjeldende fokus, slik at hvis ditt fokus er å leie ut båter, så vil det å endre kontekst gjøre at systemet kan bruke tekst fra en annen språkfil. For eksempel, hvis du setter konteksten til Båtutleie, så vil systemet først finne det gjeldende språket, og så søke gjennom /jomres/languages for en undermappe kalt "båtutleie". Hvis filen eksisterer for språket vil den bli brukt. Hvis ikke vil systemet søke etter en engelsk språkfil i samme undermappe, og bruke denne. Hvis det heller ikke finnes vil systemet bruke språkfilen for det valgte språket som ligger under /jomres/languages.');
// 4.7.3
jr_define('_JOMRES_CONFIG_JQUERY_UI',"Last systemets jQuery UI-bibliotek?");
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Pris (lavest først)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Prisoppsummering og estimater skal prises som per natt/uke/måned?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per natt');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per uke');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per måned');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','uke(r) á ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','måned(er) á ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Hvordan skal søkeopsjonen for antall personer virke?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Endrer alle søkemodulene. Når du bruker funksjonen for å søke etter antall personer, skal da søkefunksjonen se etter utleiesteder der det finnes priser for gjesteantall opp til og likt som antallet som er valgt, eksakt likt antallet valgt, eller større eller lik antallet valgt? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Vennligst vent, din bestilling blir opprettet, og du vil bli videresendt til Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Hvis du ikke blir videresendt til Paypal innen 5 sekunder...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Klikk her');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Bestilling gyldig fra");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Bestilling gyldig til");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Gjestens navn");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Rabattkoder kan lages og sendes til gjester som et incentiv til å bestille.<br/>
Gyldig fra og til refererer til datoene bestillingen må gjøres, mens Bestilling gyldig fra/til datoene refererer til datoene bestillingen må være innenfor for at koden skal være gyldig. Hvis en bestilling faller utenfor den gitte perioden vil vanlige priser gjelde for dagene utenfor perioden.<br/>
Hvis du ønsker at bestillingen skal være tilgjengelig for en spesifikk gjest, velger du gjestens navn i nedtrekksmenyen for å begrense rabatten til å kun gjelde den gjesten.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"Med denne kupongen har bestillingen din blitt rabattert fra ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," til ");
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Sett denne til Nei for å deaktivere lasting av både Jquery UI javascript og CSS-filer.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Last systemets jQuery UI CSS-bibliotek?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Sett denne til Nei for å kun deaktivere jquery UI CSS-filen.");
//v5.1 
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Totalt inkl mva");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Upublisert utleiested');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE',"Bruk vekslingsfunksjonalitet");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Bruk systemets nettbaserte vekslingsfunksjonalitet. Dette viser en nedtrekksmeny for veksling, der brukeren kan velge sin valuta som prisene vises i. Prisene blir endret slik at de viser den konverterte prisen i tillegg til utleiestedets 'hjemlige' pris.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"Vi har gjort det vi kan for å få de mest presise og oppdaterte valutakursene vi kan. Vår nettbaserte vekslingsfunksjonalitet er en service som tilbys KUN for å informere, og er ikke ment å vise eksakte tall. Dermed kan vi ikke garantere at valutakursene er eksakte. Ved å bruke denne funksjonen godtar du at all bruk av denne funksjonen er på egen risiko.");
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Valutakonvertering/valutakoder');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP-deteksjon API-nøkkel');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','For å automatisk sette valutakode i nedtrekksmenyen kan systemet bruke en gratis tjeneste kalt IPinfoDB for å finne gjestens land. For å bruke må du registrere en API-nøkkel hos <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> først.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugging');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Leiesum ekskl mva');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Leiesum inkl mva');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Mva:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Åpne bestillingsskjema');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Tilbake til utleiedetaljene');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Velg automatisk?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Gjenstående (etter betalt depositum)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filtrér ressurser basert på egenskapene.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Siste bestilling');
jr_define('_JOMRES_DATEPERIOD_SECOND','sekund(er)');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minutt(er)');
jr_define('_JOMRES_DATEPERIOD_HOUR','time(r)');
jr_define('_JOMRES_DATEPERIOD_DAY','dag(er)');
jr_define('_JOMRES_DATEPERIOD_WEEK','uke(r)');
jr_define('_JOMRES_DATEPERIOD_MONTH','måned(er)');
jr_define('_JOMRES_DATEPERIOD_YEAR','år');
jr_define('_JOMRES_DATEPERIOD_DECADE','tiår');
jr_define('_JOMRES_DATEPERIOD_S','');
jr_define('_JOMRES_DATEPERIOD_AGO','siden');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','fra nå');
jr_define('_JOMRES_WHOLEDAY_TITLE','Bestillinger er for hele dager?');
jr_define('_JOMRES_WHOLEDAY_DESC','Som standard bestilles enheter per natt, slik at en bestilling fra første Januar '.date("Y",strtotime("next year")).' til andre Januar '.date("Y",strtotime("next year")).' Kun dekker én natt. Hvis du setter denne til Ja, derimot, så vil bestillingen dekke begge dagene i stedet, og kunden vil belastes for begge dagene.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per dag');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per dag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Ankomst');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Avreise');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"dag(er) á");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Avreisedato er ukorrekt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','Bestillingen er for kort. Det må være minst følgende antall dager mellom ankomst og avreisedato:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Minimum intervall for ankomst/avreise');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','Minste intervall mellom ankomst og avreise. Et intervall på 1 betyr at ankomst og avreise kan gjøres samme dag, men det er fremdeles avhengig av minimum intervall som automatisk kalkuleres av systemet, da dette sjekker prisoppsettet som er gyldig for bestillingsperioden.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Prisoppsummering og estimater skal prises per dag/per uke/per måned?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per dag');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Dager før ankomst');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','Minimum antall dager fra i dag til ankomstdato.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Sett denne til Ja hvis du vil begrense forhåndsbestillinger (bruk neste felt for å sette grensen i dager). Hvis du setter denne til Ja vil brukere som prøver å bestille mer en n dager frem i tid få ankomstdato satt til dagens dato.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Vis input for avreisedato?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Sett denne til Nei hvis du ikke vil vise input for avreisedato. Bruk denne kun hvis du vet hva du gjør, da avreisedatoen alltid vil bli satt til dagen etter ankomst.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','Hvis du setter denne til Ja, så vil bestillingene tas for en bestemt periode. Hvis du setter denne til Nei, så må du være sikker på at bestemt ankomstdag ikke er satt til Ja (med mindre du spesifikt vil tvinge gjester til å hente på en bestemt ukedag), ellers vil du ikke få mange treff i tilgjengelighetskalenderen.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Predefinert ankomstdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Kun for sider som tilbyr bestemte bestillingsperioder. Velg dagen i uken som ankomst må skje.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Bestemt ankomstdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Bestemt ankomstdag gjentas: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','Når bestemte ankomstdager er valgt, så er dette antall datoer som kan vises i nedtrekksmenyen for datoer. Merk at datolisten ikke vil inkludere noen datoer hvis bestillingen ikke er mulig på grunn av tidligere bestillinger, og listen vil faktisk bli dobbelt så lang som det valgte tallet da den vil ha et lignende antall historiske datoer (der det er mulig).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person per dag');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Velg Ja hvis du vil ta betalt per person per dag. Hvis Nei vil prisen bli kalkulert per enhet per dag');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable depositum gjør at du kan definere om du vil belaste fullt beløp hvis ankomstdato er innen N dager fra i dag. Sett denne opsjonen til Ja hvis du vil aktivere denne funksjonen, og legg inn antall dager nedenfor, slik at eksempelvis alle bestillinger innen 60 dager frem i tid vil belastes med fullt beløp med en gang, mens det ellers vil belastes depositum som oppgitt ovenfor.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','De fleste utleiere vil kalkulere prisene basert på antall enheter som er tilgjengelig på en bestemt dato. Dette gjør at de kan gi rabatt på en enhet som ikke er fullbooket i en gitt periode, slik at det gjør enheten mer attraktiv.<br/>Aktivering og konfigurering av denne funksjonen gjør at du kan tilby justerbare priser alt etter hvor mange enheter av en bestemt type som er tilgjengelig på en bestemt dato.<br/> Grensen for antall dager definerer antall dager som bestillingen må være innen for at prisene justeres av denne funksjonen. Prosentsatsen gjør at du kan konfigurere prosentvis antall enheter som kan være tilgjengelig før rabatten gis. Merk at hvis flere enheter bestilles så vil det gjeldende rabattnivået brukes på alle enheter, og vil ikke reduseres når flere enheter velges.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Grense (antall dager mellom ankomstdato og dagens dato)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Ankomst venter');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Ankomst i dag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Ankommet');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Reiser i dag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Avreise forsinket');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Har ikke ankommet');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Dager');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Merk en bestilling som ankommet.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Merk en bestilling som reist.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Merk en bestilling som ankommet');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Merk en bestilling som reist');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Kost per dag: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Antall dager: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Overstyr total leiesum');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Lagre overstyring');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Send nye brukere e-post med innloggingsdetaljer?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','hvis Lag Ny Bruker-opsjonen er satt til Ja, så kan du sette denne funksjonen til Nei for å hindre at det sendes innloggingsdetaljer til brukeren med en gang brukeren blir opprettet. Dette kan være nyttig hvis du automatisk legger nye brukere til en mailing-liste, og ikke vil at brukerne skal logge inn.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Vis mva-output sammen med totalsummen i bestillingsskjemaet?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Du hindrer bestillingsskjemaet fra å vise mva-output sammen med totalsummer ved å sette denne til Nei.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Grense for avbestilling');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Innloggede, registrerte gjester kan avbestille sine egne bestillinger. Her kan du sette grensen i dager for mange dager før ankomst avbestillingsgrensen er.');
jr_define('_JOMRES_EDIT_PROFILE','Endre profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Sammenheng mellom utleietyper');
jr_define('_JOMRES_IMAGE','Bilde');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Klikk på en bokstav for å vise alle utleiesteder med denne som første bokstav. Når du har fått frem listen kan du legge inn kommisjonsrater til stedene, eller klikke på "endre"-ikonet for å se statistikk for stedet.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Endra mva-rate");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Endre tilpassede felt");
jr_define('_JOMRES_LICENSESERVER_PASSWORD',"Passord for lisensserver");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"Brukernavn for lisensserver");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"Hvis du har brukernavn og passord til lisensserveren kan du skrive dem inn her. Dette vil gjøre at du får tilgang til tilleggene du har rett på. Hvis du har skrevet inn en gyldig lisensnøkkel ovenfor trenger du ikke å skrive inn brukernavn/passord her.");
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"Systemversjon installert : ");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Nyeste systemversjon");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Advarsel: Det finnes en oppdatering til systemet, og du bør oppgradere så raskt du kan.");
jr_define('_JOMRES_PRODUCT_INFORMATION','Velkommen til Jomres, vi håper du vil like Joomla\'s best likte bestillingssystem. Hvis du vil kjøpe Jomres Silver eller Jomres Gold, <a href="http://www.jomres.net/prices" target="_blank"> vennligst besøk vår side</a> for informasjon om hvordan du kan oppgradere.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','Dette systemet er ideelt for et hvilket som helst scenario, om det så er et bestillingskjema for en enkelt eiendom eller en side som har flere brukere med forskjellige språk og mange utleieenheter. Vennligst se "Hjelp"-seksjonen til venstre, inkludert "Getting Started"-siden som vil guide deg gjennom de første stegene.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Aktivt utleiested");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternative SMTP-innstillinger");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Sett denne opsjonen til Ja for å bruke disse alternative SMTP-innstillingene. Et økende antall webhoster ser ut til å blokkere PHP-mailfunksjonalitet, så du kan velge å overstyre mailinnstillingene som systemet adopterer fra din host-CMS (typisk Joomla) og bruke disse innstillingene i stedet.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternativ host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Endre denne til din smtp-mailserver");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternativ port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Endre denne til din smtp-port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternativ protokoll");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Avhengig av dine smtp-serverinnstillinger setter du denne blank, ellers skriver inn 'ssl' eller 'tls'. Spør din SMTP-leverandør hvis du ikke vet.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Bruk autentisering");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"Hvis din SMTP-server krever at klienter for å logge inn, sett denne til Ja. Brukernavn og passord vil da bli brukt.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternativ brukernavn");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternativt passord");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");
jr_define('_JOMRES_QUICK_INFO',"Hurtiginfo");
jr_define('_JOMRES_MENU_SHOW',"Vis");
jr_define('_JOMRES_MENU_HIDE',"Skjul");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Standard");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Hvem som helst");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registrert");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Utleier");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Superbruker");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Ingen");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Meny tilgangskontroll");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"Denne funksjonen gjør at du kan kontrollere hvem som kan se en plugin i hovedmenyen. Typisk vil brukeropsjon 00009 synlig for enten/eller uregistrerte besøkende, 00010-opsjoner refererer normalt til resepsjonsaktiviteter som brukes dag for dag, mens 00011-opsjonener blir brukt for å sette opp og konfigurere et utleiested (men brukes ganske sjelden).");

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Brukere med admin-rettigheter til dette utleiestedet");
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Din epost-adresse');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Modell');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parametere');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
jr_define('_JOMRES_METATITLE','Meta-tittel');
jr_define('_JOMRES_METADESCRIPTION','Meta-beskrivelse');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2'," Legg til ditt utleiested : Steg 2 av 2");
jr_define('_JOMRES_CART_TITLE','Mine foreslåtte bestillinger');
jr_define('_JOMRES_CART_INFO','Merk at disse bestillingene ikke er lagret ennå. Hvis du logger ut eller venter for lenge vil de gå tapt. Husk å bekrefte dine bestillinger!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Bekreft bestilling(er)');
jr_define('_JOMRES_CART_OR',' eller ');
jr_define('_JOMRES_CART_SAVEFORLATER','Lagre til senere');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','Du har ingen lagrede bestillinger ennå.');
jr_define('_JOMRES_CART_VIEWCART','Vis handlekurv');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Undermappe for språkfil');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Standard startpunkt for breddegrad');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Standard startpunkt for lengdegrad');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','Hva skal være standard lengde/breddegrad i Google-kartet for utleiestedet før markøren flyttes?');
jr_define('_JOMRES_SYSTEM_EMAILS','E-poster sendes fra hvilke adresse?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"La denne opsjonen være blank for å deaktivere den. Systemet vil bruke utleiestedets e-postadresse(r) når det sender ut e-poster til gjester, men din e-postservice KAN muligens ikke tillate e-poster fra vilkårlige adresser (altså de tillater kun fra en autorisert adresse). Hvis dette er tilfelle kan du bruke denne inputen for å legge inn en adresse som vil bli satt som FRA-adresse for alle systemets e-poster.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"Listevisning");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Fotovisning");
jr_define('_JOMRES_COMPARE',"Sammenlikn");
jr_define('_JOMRES_REMOVE',"Fjern");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Tilbake til søkeresultater");
jr_define('_JOMRES_ADDTOSHORTLIST',"Legg til i favoritter");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Fjern fra favoritter");
jr_define('_JOMRES_VIEWSHORTLIST',"Vis dine favoritter");
jr_define('_JOMRES_COOKIEPOLICY_1',"Viktig: Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_2',"Vi bruker cookies for å bidra til å holde siden vår relevant og enkel å bruke.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Les mere...");
jr_define('_JOMRES_COOKIEPOLICY_4',"EU-regler forlanger at alle internettsider spesifiserer om cookie blir brukt, og hva de blir brukt til.");
jr_define('_JOMRES_COOKIEPOLICY_5',"Søke- og bestillingsmotoren på denne siden trenger å huske de opsjonene du har valgt for å virke best mulig. For å gjøre dette trenger systemet å lagre informasjonen i en liten fil kalt \"cookie\", som identifiserer nettleseren din. For at vi skal kunne gjøre dette må du godta dette. Hvis du ikke godtar vår cookie policy så vil det være veldig begrenset hva du kan gjøre på denne siden.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Ja, jeg godtar bruk av cookies på denne måten.");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Depositum påkrevd er lik kosten av første natt?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prisene blir kalkulert per natt. Vil du at depositumet skal være prisen for én natt? Hvis ja, kan du ignorere de følgende opsjonene.');
jr_define('_JOMRES_NOTHINGINSHORTLIST',"Du har ikke lagt til noen favoritter.");
jr_define('_JOMRES_SAFEMODE',"Aktivér sikkermodus?");
jr_define('_JOMRES_SAFEMODE_DESC',"Sett denne til Ja for å aktivere sikkermodus. Dette vil deaktivere alle plugins, slik at systemet kun kjører med grunnfunksjonene..");
jr_define('_JOMRES_PRICE_ON_APPLICATION',"---");
jr_define('COMMON_NEXT',"Neste");
jr_define('COMMON_CANCEL',"Avbryt");
jr_define('COMMON_SUBMIT',"Send");
jr_define('COMMON_SAVE',"Lagre");
jr_define('COMMON_DELETE',"Slett");
jr_define('COMMON_RETURN',"Tilbake");
jr_define('COMMON_CLOSE',"Lukk");
jr_define('COMMON_BACK',"Tilbake");
jr_define('COMMON_HOME',"Hjem");
jr_define('COMMON_NEW',"Ny");
jr_define('COMMON_SEND',"Send");
jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha brukes for å forsikre om at klienten som bruker et skjema er menneskelig, og brukes til å hindre at Utleiere spammes av roboter på internett. For å bruke Kontakt Oss-skjemaet i systemet må du registrere deg på <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">Google reCaptcha</a>-hjemmesiden og sette siden din til å ta imot offentlige (public) og private nøkler. Når du har fått de nøklene skriver du dem inn nedenfor. reCapcha er gratis, og leveres av Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Offentlig (Public) nøkkel");
jr_define('RECAPTCHA_PRIVATE_KEY',"Privat nøkkel");
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Timeout på reservasjon");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"For å hindre at gjester dobbeltbooker bruker systemet en timeout for å hindre at en enhet vises som tilgjengelig når en annen bruker allerede har lagt enheten til sin bestilling for de samme datoene. Som standard er timeouten satt til 3600 sekunder, altså 1 time, men du kan endre hvor lenge en enhet skal være sperret med dette tallet.");
jr_define('_JOMRES_BOOTSTRAPSWITCH',"Aktivér systemets Bootstrap –maler og funksjonalitet?");
jr_define('COMMON_ACTION',"Aksjon");
jr_define('COMMON_VIEW',"Visning");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Svak");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Sterk");
jr_define('_JOMRES_INPUTFILTERING',"Input-filtrering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Nivå for input-filtrering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"De fleste data som legges inn i systemet blir rensket ved å først ta bort alle html-tagger, og deretter brukes PHPs variable filtreringsfunksjonalitet til å gjøre data sikkert før det lagres i databasen. Det kan være at du vil tillate enkelte input (for eksempel tekstinput i utleiedetaljene) å inkludere HMTL. Det finnes to nivåer av filtrering som kan brukes på denne inputen, enten Svak eller Sterk. Du bør kun bruke Svak hvis brukerne som legge inn info er folk du stoler på, eksempelvis systemadministratorer, ellers bør du sette den til Sterk. Når den er satt til Sterk (anbefalt) kan du fremdeles spesifisere hvilke tager som er tillatt ved å endre den neste innstillingen 'HTML-renser tillatte tager'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Tillatte input-tager");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"Du kan endre tagene som html-renseren vil tillate. Standard er 'p,b,strong,a[href],i' (altså Paragraf, Bold (fet), Strong (uthevet), Linker and Italics (kursiv)). For mer informasjon på tillatte tager kan du lese HTML-renserens informasjon på <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Selv om du kan endre denne innstillingen anbefales det at du setter den til standard.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Tillatte inputer");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"Du kan definere hvilke skjemainput som godtar html ved å endre denne innstillingen. All input som legges til listen vil bli sendt gjennom i stedet for å bli renset. Standard er : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Legg til flere input ved å legge til skjemenavn, seperarert med mellomrom.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Utleiedetaljer i faner?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Sett denne opsjonen for å vise utleiedetaljene i faner. Sett til Nei for å vise uten faner.");
jr_define('COMMON_PRINT',"Skriv ut");
jr_define('COMMON_EDIT',"Endre");
jr_define('COMMON_COPY',"Kopiér");
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 inkluderer Twitter Bootstrap-rammeverk som standard, og systemet har maler og funksjonalitet som bruker disse malene. Som standard er disse satt til Ja nåt du kjører systemet på Joomla 3, men du kan sette til Nei hvis du vil (ikke anbefalt). Hvis du kjører en versjon av Joomla som er lavere enn Joomla 3, så kan du fremdeles bruke Jomres Bootstrap-maler og funksjonalitet, men som standard er disse opsjonene satt til Nei.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Bruk Jomres Bootstrap-maler på forsiden?");
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Her er noen alternativer du kan vurdere:");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Autodetektér gjesters land?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"Systemet vil automatisk prøve å detektere gjestenes land hvis de ikke har bestilt her før. Du kan sette denne til Nei, og definere hvilket land du vil foretrekke at vises, i neste innstilling.");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES" , "Om Jomres");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "hjelp");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Komme i gang");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS" , "utviklerverktøy");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES" , "språk");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION" , "inntektsgenerator");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE" , "sidestruktur");
jr_define( "_JOMRES_CUSTOMCODE_MANUAL" , "Manual (nettbasert)");
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE" , "Min Konto (nettbasert)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL" , "portal-funksjonalitet");
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER" , "Plugin-administrasjon");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION" , "integrasjon");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS" , "rapporter/statistikker");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "hjelp");
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES" , "Oppgraderinger");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS" , "betalingsmetoder");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT" , "Standard prisoppsett");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC" , "Dette gjelder kun for nye prisoppsett");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW" , "År som vises");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC" , "Definerer antall år som vises når du endrer et prisoppsett");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "fakturaer");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "kontodetaljer");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Logg inn");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Logg ut");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "søk");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "kontrollpanel");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK" , "bestill");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "fakturaer");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS" , "innstillinger");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC" , "diverse");
jr_define( "_JOMRES_EDIT_COUNTRY_TITLE" , "Endre land");
jr_define( "_JOMRES_EDIT_COUNTRY_ID" , "Land id");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE" , "Landkode");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME" , "Navn på land");
jr_define( "_JOMRES_EDIT_REGION_TITLE" , "Endre region");
jr_define( "_JOMRES_EDIT_REGION_ID" , "Region id");
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE" , "Landkode");
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME" , "Navn på region");
jr_define( "_JOMRES_COM_LISTCOUNTRIES" , "List land");
jr_define( "_JOMRES_COM_LISTREGIONS" , "List regioner");
jr_define( "_JOMRES_EXPORT_DEFINITIONS" , "Eksport av definisjoner");
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO" , "Denne funksjonen gjør at du kan eksportere oversettelser som har blitt bygget opp med bruk av Språkoversettelser-funksjonen. Den vil bygge opp et tekstfelt med alle data som trengs for å bygge en ny språkfil, og alt du trenger å gjøre er å kopiere dette til en ny språkfil som du kan legge på en ny Jomres-basert server, eller hvis du vil gi noe tilbake til Jomres-samfunnet.");
jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS" , "Oversett stedsnavn");
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES" , "Oversett språktekster");
jr_define( "_JOMRES_COM_NOTAMANAGER" , "Feil, brukeren er ikke logget inn som Superbruker i systemet, og du vil ikke kunne bruke denne funksjonen før du har brukt Vis Profiler for å gjøre deg selv til BÅDE Utleier og Superbruker. Dette er en sikkerhetsfunksjon.");
jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT" , "Standard layout på utleielisten");
jr_define( "_JOMRES_STAYFORAMINIMUMOF" , "Overnatt miniumum");
jr_define( "_JOMRES_NIGHTSFOR" , " netter for ");
jr_define( "_JOMRES_AGENT" , "Agent");
jr_define( "_JOMRES_AGENT_DETAILS" , "Agentdetaljer");
jr_define( "_JOMRES_AGENT_LISTINGS" , "Agentens enheter");
jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE" , "Godkjenn nye utleiesteder automatisk");
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC" , "Hvis du setter denne opsjonen til Nei så må du manuelt godkjenne nye utleiesteder. Før stedet er godkjent kan det ikke publiseres av Utleier/Superbruker.");
jr_define( "_JOMRES_APPROVALS_MENU_NAME" , "Godkjenninger");
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET" , "Dette utleiestedet er ikke godkjent ennå. Når det er godkjent kan du publisere det.");
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH" , "Beklager, du kan ikke publisere utleiestedet da det ikke er godkjent ennå.");
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT" , "Et nytt utleiested trenger godkjenning");
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT" , "Et utleiested er lagt til systemet, og trenger godkjenning. Klikk på linken for å se utleiestedene som trenger godkjenning : ");
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT" , "Ditt utleiested har blitt godkjent");
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT" , "Gratulerer, ditt utleiested har blitt godkjent. Vennligst klikk på linken for å komme til utleiestedets kontrollpanel : ");
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE" , "Regionnavn kan oversettes");
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC" , "Med mindre du kjører på en veldig rask server bør du la denne stå på Nei. På grunn av veldig mange regionnavn kan oversettelse av disse bruke veldig mye minne, og dermed trege ned søkeresultatene.");
jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT" , "Gjest booket ut.");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE','Beklager, den oppgitte epost-adressen er allerede i bruk. Hvis dette er din adresse ber vi om at logger inn før du prøver å bestille.');
jr_define( "JOMRES_TAPTOCALL", "Trykk for å ringe" );
jr_define( "JOMRES_NEWREVIEW_SUBJECT", "Ny anmeldelse for " );
jr_define( "JOMRES_NEWREVIEW_MESSAGE", "En ny anmeldelse er lagt inn for " );
jr_define( "JOMRES_NEWREPORT_SUBJECT", "Ny Rapport" );
jr_define( "JOMRES_NEWREPORT_MESSAGE", "En anmeldelse er rapportert for " );
jr_define( "JOMRES_SUPERIOR", "Superior" );
jr_define( "JOMRES_GRANDTOTAL_EX_TAX", "Totalsum (ekskl mva) : " );
jr_define( "JOMRES_GRANDTOTAL_INC_TAX", "Totalsum (inkl mva) : " );
jr_define( "JOMRES_GRANDTOTAL_TOTAL_TAX", "Mva : " );
jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL", "Tast de to ordene: " );
jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO", "Skriv inn det du hører: " );
jr_define( "JOMRES_RECAPTCHA_PLAY_AGAIN", "Spill lyden om igjen " );
jr_define( "JOMRES_RECAPTCHA_CANT_HEAR_THIS", "Last ned lyden som MP3" );
jr_define( "JOMRES_RECAPTCHA_VISUAL_CHALLENGE", "Visuelt modus" );
jr_define( "JOMRES_RECAPTCHA_AUDIO_CHALLENGE", "Lydmodus" );
jr_define( "JOMRES_RECAPTCHA_REFRESH_BTN", "Last om igjen" );
jr_define( "JOMRES_RECAPTCHA_HELP_BTN", "Hjelp" );
jr_define( "JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "Beklager, det var feil. Vennligst prøv igjen" );
jr_define( "JOMRES_GOOGLE_MAPS", "Valg for Google map" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Bruk vær-lag?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celsius" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Bruk transit-lag?" );
jr_define( "JOMRES_GOOGLE_MAPS_POIS", "Aktivér Gmap Points of Interest (muligens inkludert dine konkurrenter)?" );
jr_define( "_JOMRES_METAKEYWORDS", "Meta Nøkkelord" );
jr_define( "_JOMRES_SCAN_FOR_DIRECTIONS", "Skann denne koden på mobilen for å få veibeskrivelse til oss." );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX", "VAT-nummeret du har skrevet inn ser ikke ut til å være korrekt. Det bør være noe likt: BE805670816B01" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "Ugyldig VAT-nummer. Vennligst sjekk ditt VAT-nummer med Europa VAT Number validation webservice (VIES)" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Gratulerer. Vi klarte å validere ditt VAT-nummer." );
jr_define( "_JOMRES_TAX_RULES_LIST", "List mva-regler" );
jr_define( "_JOMRES_TAX_RULE", "Mva-regel" );
jr_define( "_JOMRES_TAX_RULE_INFO", "Mva-regler brukes for å legge inn forskjellige mva-regler for forskjellige regioner. Disse mva-reglene har innvirkning på personen som gjør bestillingen, hvis de er registrert, logget inn, og har endret sin konto ved bruk av \"endre konto\"-siden. Meningen med disse reglene er å fange opp bestillere i områder som er fritatt fra mva, og det er mulig du ikke trenger å opprette mange regler, eller kanskje ikke noen i det hele tatt." );
jr_define( "_JOMRES_TAX_RATES_IMPORT", "Importér mva-regler" );
jr_define( "_JOMRES_TAX_RATES_IMPORT_INFO", "Vi kan importere mva-regler for EU for deg hvis du vil. Merk at hvis du bruker denne funksjonen vil alle dine eksisterende mva-regler forsvinne." );
jr_define( "_JRPORTAL_TAX_RULE_EDIT", "Endre mva-regel" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER", "Mva-nummeret for denne utleieenheten." );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Vennligst legg inn mva-nummer for denne utleieenheten." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "Mva-nummer validert." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "Mva-nummer ikke validert." );
jr_define( "_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Utleiedetaljene som er lagt inn her vil bli brukt på fakturaer for kommisjon og abonnementer." );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Det ser ikke ut som du har fylt inn kontodetaljer ennå. For å registrere din utleieenhet på siden må du fullføre kontodetaljene før du kan fortsette." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Produksjon eller Utvikling?" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "Hvis du setter dette valget til Utvikling vil vi aktivere feilrapportering, mens det vil være av hvis valget står på Produksjon. Hvis dette er en live server anbefaler vi at du setter valget til \"produksjon\"." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Produksjon" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Utvikling" );
jr_define( '_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Enhetsdetaljer' );
jr_define( '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Prisdetaljer' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Kun' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'igjen!' );
jr_define( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Egenskap for enheten' );
jr_define( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Ikke mulig å fjerne denne egenskapen, siden den er assosiert med en enhet. Fjern egenskapen fra enheten og prøv igjen.' );
jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Mediesenter");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Legg til bilder");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Bilder av enheten");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Hovedbilde for utleiestedet");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Slideshow-bilder");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Slett listen");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Dra & Slipp filer her");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Velg ressursene du vil laste opp bilder for. Hvis du laster opp for individuelle ressurser (f.eks rom) vil du bli vist en ny nedtrekksmeny der du kan velge spesifikk ressurs. ");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"Hvis du laster opp flere bilder som \"Main property image\" vil kun det første bli vist.");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"Vis bildet");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Slett bilde");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Last opp bilde");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Bilder av enhetstype");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Bilder av utleiestedet");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Last opp alle filer");
//8.0
jr_define('COMMON_PREV' , "Forrige" );
jr_define('COMMON_MORE' , "Mer" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "I dag" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "År" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Måned" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Uke" );
jr_define('_JOMRES_DASHBOARD_DAY' , "Dag" );
jr_define('_JOMRES_HLEGEND' , "Forklaring" );
jr_define('_JOMRES_HFILTER' , "Filter" );
jr_define('_JOMRES_HFROM' , "Fra" );
jr_define('_JOMRES_HTO' , "Til" );
jr_define('_JOMRES_HNEW_BOOKING' , "Ny bestilling" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Depositumstatus" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Gjestestatus" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Bestillingsstatus" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Publiseringsstatus" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Fakturastatus" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Fakturatype" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Godkjent" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Valgt utleie" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Vis bestilinger for" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Vis fakturaer for" );
jr_define('_JOMRES_STATUS_ANY' , "Alle" );
jr_define('_JOMRES_STATUS_PAID' , "Betalt" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Ikke betalt" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Sjekket ut" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Aktiv" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Kansellert" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Publisert" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Ikke publisert" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Gjester med aktive bestillinger" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "Gjester med tidligere bestillinger" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Bestillinger" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Abonnementer" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Kommisjoner" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "Alle mine utleiesteder" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Sett som valgt" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Sjekk inn" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Sjekk ut" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "bestillinger" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "utleiesteder" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "gjester" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "rapporter" );
jr_define( "_JOMRES_HLIST_GUESTS", "Gjester" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "List gjester" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "List fakturaer" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Bedrifter" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Rask bestilling" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Bestillingsdato" );
jr_define( "_JOMRES_HTWO_WEEKS", "To uker" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "Denne bestillingen vil bli kansellert. Trykk OK for å kansellere bestillingen." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Dagens ankomster" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Dagens avreiser" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Gjester akkurat nå" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Lokasjon for navigasjonsmeny" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Standard (innholdsområdet)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Låst til topp" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Låst til bunn" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Omvendt navmeny (fargeendring)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Bestillingsnummer" );
jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap-versjon" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Jomres includes it's own template sets, one for each supported version of Bootstrap. Joomla and Wordpress templates/themes that are based on Bootstrap will offer a specific version of Bootstrap so you need to ensure that the option you choose here is compatible with your template/theme." );
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Vis gjester for" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Bestemte perioder" );
jr_define('_JOMRES_HDEPOSITS' , "Depositum" );
jr_define('_JOMRES_HBOOKING_FORM' , "Bestillingsskjema" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Tvungne felter" );
jr_define('COMMON_PLACEHOLDER_FIRSTNAME' , "Kari" );
jr_define('COMMON_PLACEHOLDER_SURNAME' , "Nordmann" );
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER' , "10" );
jr_define('COMMON_PLACEHOLDER_STREET' , "Nordveien" );
jr_define('COMMON_PLACEHOLDER_TOWN' , "Minby" );
jr_define('COMMON_PLACEHOLDER_LANDLINE' , "0000 0000" );
jr_define('COMMON_PLACEHOLDER_MOBILE' , "0000 0000" );
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME' , "Mitt Sted" );
jr_define('COMMON_PLACEHOLDER_POSTCODE' , "XXXX" );
jr_define('COMMON_PLACEHOLDER_EMAIL' , "eksempel@adresse.com" );
jr_define('EXTENDED_CONFIGURATION' , "Utvidet konfigurasjon" );
jr_define('SIMPLE_CONFIGURATION' , "Enkel konfigurasjon" );
jr_define('_JOMRES_HRESOURCE_FEATURES' , "Utleiefasiliteter" );
jr_define('_JOMRES_HRESOURCE_TYPE' , "Utleietype" );
jr_define('_JOMRES_HEDIT_GUEST_TYPE' , "Endre gjestetype" );
jr_define('_JOMRES_HEDIT_COUPON' , "Endre rabattkode" );
jr_define('_JOMRES_HEDIT_EXTRA' , "Endre tillegg" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE' , "Lag flere ressurser" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE' , "Generèr ressurser" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY' , "Hvor mange ressurser?" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE' , "Ressurstype" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS' , "Maks gjester per ressurs" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE' , "Slett alle eksisterende ressurser?" );
jr_define('DATATABLES_SINFO' , "Viser _START_ til SLUTT av _TOTALT_ innlegg" );
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL',"Godkjenning");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY',"Avvis forespørsel");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY',"Godkjenn forespørsel");
jr_define('_JOMRES_STATUS_APPROVED',"Godkjent");
jr_define('_JOMRES_STATUS_REJECTED',"Avvist");
jr_define('_JOMRES_STATUS_INQUIRY',"Forespørsel");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE',"Krever bestillinger godkjenning?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "Hvis denne er satt til ja, så vil bestillingen ikke vises i kalenderen når den gjøres, og andre kan fremdeles bestille de samme dagene helt til utleier aksepterer/bekrefter bestillingen. Når den er bekreftet blir bestillingen lagt inn som midlertidig (så lenge den ikke er i veien for andre bestillinger), og en epost sendes til kunden for betaling.");
jr_define('_JOMRES_ERROR',"Feil");
jr_define('_JOMRES_ERROR_MESSAGE',"Beklager! En feil oppsto ved kjøring av denne funksjonen. Det er rapportert til administrator og vil bli sjekket.");
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Melding");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE',"Fil");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE',"Linje");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE',"Sporing");
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"Epost-maler");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"Endre epost-mal");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"Epost-emne");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"Epost-tekst");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"Epost-type");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"Epost-navn");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"Epost-beskrivelse");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Vennligst se denne siden for hjelp til å endre eposter og for en liste over tilgjengelige funksjoner: <a href=\"http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates\" target=\"_blank\">Hjelp for epost-maler</a>");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Epost til admin ved ny bestilling");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"Epost sendt til administrator når ny bestilling gjøres, hvis global paypal-betaling er aktivert");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Epost til utleier ved ny bestilling");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"Epost sendt til utleier når ny bestilling gjøres");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Epost til gjest ved ny bestilling");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"Epost sendt til gjest når ny bestilling gjøres");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Gjestens bekreftelses-epost");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Utskrivbart brev eller epost som kan sendes manuelt av utleier for å bekrefte en bestilling");
jr_define('_JOMRES_CAN_BE_APPROVED',"Denne bestillingen kan godkjennes. Alle valgte ressurser er tilgjengelige for de valgte datoene.");
jr_define('_JOMRES_CANT_BE_APPROVED',"Denne bestillingen kan ikke godkjennes da en eller flere ressurser er opptatte på de valgte datoene. Du må endre bestillingen først.");
jr_define('_JOMRES_SHOW_POWEREDBY',"Vis Powered by Jomres link på bunnen av siden.");
jr_define('GUEST_BUDGET',"Budsjett");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Bruk budsjettfunksjon?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Kun for sider med bootstrap! Budsjettfunksjonen er en funksjon i utleielisten som en gjest kan bruke for å merke utleieeenheter der pris per natt er under et visst beløp. Funksjonen har noen begrensninger som kanskje ikke virker bra for sider med mange valutaer. Merk at hvis du bruker Featured Listings plugin, så vil wrapping class automatisk endres til 'panel-primary' når utleielisten vises.");
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Navn: ' );
jr_define( '_JOMRES_FOR', 'For' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHT', 'natt' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHTS', 'netter' );
jr_define( '_JOMRES_LIVE_SCROLLING', 'Bruk Live Scrolling/Uendelig Scrolling i søkelisten?' );
jr_define( '_JRPORTAL_MONTHS_SHORT_0', 'Jan' );
jr_define( '_JRPORTAL_MONTHS_SHORT_1', 'Feb' );
jr_define( '_JRPORTAL_MONTHS_SHORT_2', 'Mar' );
jr_define( '_JRPORTAL_MONTHS_SHORT_3', 'Apr' );
jr_define( '_JRPORTAL_MONTHS_SHORT_4', 'Mai' );
jr_define( '_JRPORTAL_MONTHS_SHORT_5', 'Jun' );
jr_define( '_JRPORTAL_MONTHS_SHORT_6', 'Jul' );
jr_define( '_JRPORTAL_MONTHS_SHORT_7', 'Aug' );
jr_define( '_JRPORTAL_MONTHS_SHORT_8', 'Sep' );
jr_define( '_JRPORTAL_MONTHS_SHORT_9', 'Okt' );
jr_define( '_JRPORTAL_MONTHS_SHORT_10', 'Nov' );
jr_define( '_JRPORTAL_MONTHS_SHORT_11', 'Des' );
jr_define('DATATABLES_SEMPTYTABLE'		, "Ingen data tilgjengelig i tabell" );
jr_define('DATATABLES_SINFO'			, "Viser _START_ til _END_ av _TOTAL_ enheter" );
jr_define('DATATABLES_SINFOEMPTY'		, "Viser 0 til 0 av 0 enheter" );
jr_define('DATATABLES_SINFOFILTERED'	, "(filtrert fra _MAX_ enheter totalt)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "," );
jr_define('DATATABLES_SLENGTHMENU'		, "Vis _MENU_ enheter" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "Laster..." );
jr_define('DATATABLES_SPROCESSING'		, "Jobber..." );
jr_define('DATATABLES_SSEARCH'			, "Søk:" );
jr_define('DATATABLES_SZERORECORDS'		, "Ingen passende resultater funnet" );
jr_define('DATATABLES_SFIRST'			, "Første" );
jr_define('DATATABLES_SLAST'			, "Siste" );
jr_define('DATATABLES_SNEXT'			, "Neste" );
jr_define('DATATABLES_SPREVIOUS'		, "Forrige" );
jr_define('DATATABLES_SSORTASCENDING'	, ": aktivér for å sortere kolonnen stigende" );
jr_define('DATATABLES_SSORTDESCENDING'	, ": aktivér for å sortere kolonnen synkende" );
jr_define('DATATABLES_SHOWHIDE'	, "Endre kolonner" );
jr_define( '_BOOKING_ONREQUEST', 'Send forespørsel' );
jr_define( '_BOOKING_INSTANT', 'Bestill på nett' );
jr_define( '_JOMRES_COM_FONTAWESOME', 'Inkludér Font Awesome ikonsett?' );
jr_define( '_JOMRES_COM_FONTAWESOME_DESC', 'Sett denne til Ja hvis din mal ikke inkluderer Font Awesome.' );
jr_define( '_BOOKING_CALCQUOTE', 'Forespør bestilling' );
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Kjære ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Velg en side');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Side id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU-land?');
jr_define( '_JOMRES_HLASTCHANGED', 'Sist endret' );
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME',"Hotell Kansellerings-epost");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC',"Epost sendt til utleier når en bestilling kanselleres");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME',"Gjest Kansellerings-epost");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC',"Epost sendt til gjest når en bestilling kanselleres");
jr_define('_JOMRES_TEST_EMAIL_SEND',"Send test-epost");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT',"Test-epost");
jr_define('_JOMRES_TEST_EMAIL_CONTENT',"Dette er en test-epost fra bookingsystemet.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS',"Test-epost sendt");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE',"Test-epost ble ikke sendt");
jr_define('_INVOICE_TRANSACTIONS',"Transaksjoner");
jr_define ('_OPENEXCHANGE_API', "Open Exchange Rates API nøkkel");
jr_define ('_OPENEXCHANGE_API_DESC', 'For å konvertere priser mellom tjenester trenger du en Open Exchange Rates API -nøkkel. Du MÅ ha en API -nøkkel for å vise prisene riktig i Jomres, men du kan registrere deg for en gratis nøkkel på https: // openexchangerates. org/registrering/gratis (timeoppdateringer, 1000 forespørsler/måned - ingen HTTPS, e -poststøtte eller avanserte funksjoner). Jomres laster ned valutakurser en gang om dagen, så lenge du bruker nøkkelen på bare en håndfull nettsteder, er du usannsynlig å overskride disse grensene. Før Jomres 8.3 brukte vi en eldre, udokumentert Yahoo -funksjon, men har oppdaget at bruk av denne funksjonen er i strid med Yahoos vilkår og betingelser. Som et resultat må vi anta at funksjonen kan forsvinne kl. et eller annet tidspunkt i fremtiden, derav endringen til bruk av åpne valutakurser. ');
jr_define('_JOMRES_COMMISSION',"Kommisjon");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS',"Hvis du laster opp flere bilder for tillegg vil kun det første bli vist.");
jr_define( '_JRPORTAL_INVOICES_PAYNOW', "Betal nå" );
jr_define( '_JRPORTAL_INVOICES_PAYNOW_DESC', "Denne fakturaen forfaller nå. Vennligst klikk på knappen for å velge betalingsmåte." );
jr_define('_JOMRES_EXTRAS_TEMPLATE',"Her er en liste over flotte tillegg du kan kjøpe når du bestiller på dette stedet. ");
jr_define( 'GATEWAYS_INSTRUCTIONS', 'På denne siden kan du konfigurere alle installerte betalingsmåter. Disse opsjonene gjør at du kan ta betalt for Kommisjon- eller Abonnementsfakturaer, og de har ingenting med utleiestedenes betalingsmåte å gjøre.' );
jr_define( 'EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Vis i utleiestedets detaljside?' );
jr_define( 'PROPERTY_DETAILS_PAGE_OPTIONS', 'Sideinnstillinger for utleiestedets detaljer' );
jr_define( '_JOMRES_HLIST_PROPERTIES_WARNING', 'Styring av utleie gjøres kun fra kontrollpanelet på forsiden. På denne siden har du mulighet til å liste all utleie i systemet, slik at du kan legge til provisjonsrater og godkjenne/fjerne godkjenning (hvis disse funksjonene er aktivert). For å legge til en ny utleie, endre en eksisterende, håndtere bestillinger, eller lignende oppgaver, må du logge inn på forsiden og gå til hovedsiden for bookingmotoren. Der får du tilgang til systemets kontrollpanel.' );
jr_define( '_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Ikoner for rombeskrivelser' );
jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Kategorier for utleiefasiliteter' );
jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Endre kategorier for utleiefasiliteter' );
jr_define( '_JOMRES_HCATEGORY', 'Kategori' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Vis utleiefasiliteter separert i kategorier?' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Sett denne til JA for å separere utleiefasilitetene i kategorier. Denne opsjonen endrer bare hvordan utleiefasilitetene vises på siden med utleiedetaljer. Alle andre sider vil vise dem uten å dele i kategorier.' );
jr_define( '_JOMRES_ACTION_UNDO_CHECKIN', 'Angre innsjekking' );
jr_define( '_JOMRES_ACTION_UNDO_CHECKOUT', 'Angre utsjekking' );
jr_define( '_JOMRES_STATUS_UNISSUED', 'Ikke sendt' );
jr_define( 'DEFAULT_TERMS_AND_CONDITIONS', '' );
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Nedlastings- og støttenøkkelen din er gyldig, du vil kunne laste ned plugins via programtillegget.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Nedlastings- og støttenøkkelen din er IKKE gyldig, du vil IKKE kunne laste ned plugins via programtillegget.');
jr_define( '_JOMRES_SRP_RESOURCE_TYPE', 'Ressurstype' );
jr_define ("_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK", "Du har ikke angitt ressurstype ennå. Her definerer du det som en villa med 5 soverom eller hytte med 4 soverom, og den hjelper gjester som ønsker å finjustere søket.");
jr_define ("_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK", "Gi eiendommen din en ressurstype");
jr_define( "_JOMRES_EMAIL_TEMPLATES_TITLE", "Epost-maler" );
jr_define( "_JOMRES_CONTACT_SETTINGS", "Kontaktinnstillinger" );
jr_define ("_JOMRES_CONTACT_SETTINGS_DESC", "Herfra kan du overstyre alle eiendoms kontaktdetaljer (e -post, telefon, faks), slik at all kommunikasjon med gjester blir sendt til deg og ikke til eiendomseierne.");
jr_define ("_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS", "Override listings contact details?");
jr_define ("_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC", "Hvis dette alternativet er satt til Ja, vil egenskapens e -postadresser og telefonnumre bli erstattet med de som er angitt i denne fanen. Dette tvinger all kommunikasjon til å bli sendt til den nominerte e -postadressen din, slik at gjest og eiendom eieren kan ikke omgå bookingmotoren og provisjonskostnadene som vil oppstå. Det betyr også at når en eiendoms beskrivelse endres, blir eiendommen satt til Ikke godkjent (hvis godkjenningsfunksjonen er aktivert), og du må sjekke beskrivelsen manuelt for å sikre at lederne ikke har lagt inn telefon- eller e -postdetaljer i tekstfeltene før de godkjente det igjen. ");
jr_define ("_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Endringer som gjøres i oppføringsdetaljer krever bekreftelse av nettstedadministrator. Hvis du lagrer nye detaljer, blir oppføringen din publisert og ventende godkjenning av siden før den blir synlig igjen for besøkende. Du vil ikke kunne motta online bestillinger mens oppføringen din er upublisert og venter på godkjenning. ");
jr_define( '_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Se gjennom bestillingsforespørsel' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Bekreft bestillingsforespørsel' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_AMEND', 'Endre bestillingsforespørsel' );
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Merk faktura som ventende');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Faktura merket som ventende');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Send anonym tracking data?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Sett dette alternativet til Ja for å sende anonyme sporingsdata til Jomres.net for å hjelpe oss å forstå bedre hvordan du bruker systemet.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Sørg for at detaljene dine er fullført på siden Rediger min konto før du prøver å foreta bestillinger på vegne av kundene dine.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Gjestens kontaktinformasjon");
jr_define( '_JOMRES_CLEAR_GUEST_DETAILS', " -- Ny gjest -- " );
jr_define( '_JOMRES_CHARTS', 'Statistikk' );
jr_define( '_JOMRES_CHARTS_SELECT', 'Velg statistikk...' );
jr_define( '_JOMRES_CHART_BOOKINGS_DESC', 'Inntekt per år/måned' );
jr_define ("_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK", "Ok, la oss komme i gang. Først må du lage noen rom for denne eiendommen.");
jr_define ("_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK", "Opprett noen rom nå");
jr_define ("_JOMRES_IMAGES_EXIST_SANITY_CHECK", "Forskning har vist at eiendommer med mange bilder av høy kvalitet genererer flere visninger. Last opp et hovedbilde og noen lysbildeseriebilder for å forbedre sjansene for å få bestillinger.");
jr_define ("_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK", "Last opp et bilde");
jr_define ("_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK", "Lag noen tariffer");
jr_define ("_JOMRES_PROPERTYTYPE_FLAG", "Hvilken eiendomsstil er dette?");
jr_define ("_JOMRES_PROPERTYTYPE_FLAG_DESC", "Er denne egenskapen en hotelltype -eiendom, hvor du leier ut flere rom i eiendommen, eller en villa -type eiendom, der du leier ut eiendommen i sin helhet? Hvis eiendomstypen er beregnet på eiendommer som ikke tilbyr rom- eller eiendomsbestillingsfunksjonalitet (som turer), velg verken. ");
jr_define ("_JOMRES_PROPERTYTYPE_FLAG_HOTEL", "Hotel/Bed & breakfast/Pension");
jr_define ("_JOMRES_PROPERTYTYPE_FLAG_VILLA", "Villa/hytte/leilighet");
jr_define ("_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Begge"); // Dette er en midlertidig innstilling som gir bakoverkompatibilitet for eksisterende brukere som ennå ikke har oppdatert eiendomstypene sine. Det vil ikke være valgbart
jr_define ("_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "Hotell eller villa?");
jr_define ("_JOMRES_ADDRESS_SANITY_CHECK", "Du må fullføre adresseopplysningene dine slik at gjestene dine kan finne deg når de kommer for å bli.");
jr_define ("_JOMRES_ADDRESS_SANITY_CHECK_LINK", "Oppdater adressen din");
jr_define ("_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED", "Oops, det ser ut til at du kanskje har glemt å fylle ut alle feltene.");
jr_define ("_JOMRES_CONTANT_US", "Kontakt oss");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_TITLE", "Welcome to your new online listing for");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_1", "Hei, og velkommen til din nye eiendom på");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_2", "Du har nylig lagt til en ny eiendom på nettstedet vårt, og vi vil ønske deg velkommen til familien.");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_3", "Du kan se det nye dashbordet");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT", "her");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_4", "Når du har konfigurert eiendommen din, kan du se hvordan den ser ut for besøkende ved å besøke");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT", "forsiden din.");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_5", "(den er ikke publisert, så besøkende kan ikke se den ennå).");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_6", "Øverst på siden vil du se en rekke meldinger. Knappene ved siden av disse meldingene vil lede deg til sidene du må besøke for å sette opp eiendommen din på nettstedet vårt. Når du ' har utført hver av disse oppgavene, vil det være mye lettere for besøkende på nettstedet vårt å finne eiendommen din og foreta bestillinger online. ");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_7", "Hvis du har spørsmål i det hele tatt, vær så snill");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT", "kontakt oss");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_8", "og vi vil gjerne svare på alle spørsmålene dine.");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE", "Alt godt, teamet vårt på");
jr_define ("_JOMRES_JINTOUR_SANITY_CHECK", "Det ser ikke ut til at du har noen turer å selge. Lag en turprofil, bruk deretter Generer -knappen for å lage noen turer.");
jr_define ("_JOMRES_JINTOUR_SANITY_CHECK_LINK", "La oss lage noen turer!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Bytt valutasymbolplassering');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Bruk dette alternativet til å flytte valutasymbolet bakfra, til foran pristallet, eller omvendt.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Skriv inn facebookside -ID -en din, for eksempel "jomres". La dette stå tomt for å vise ingenting. Ikke skriv inn https://www.facebook.com eller noe annet.');
jr_define ('COMMON_DOWNLOAD', 'Last ned');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Neste må du legge til noen tariffer. Dette er grunnpriser.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap er ikke aktivert!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Advarsel, du har ikke Bootstrap aktivert i Jomres nettstedskonfigurasjon -> Diverse -fanen. For å gi <i> noen </i> funksjoner bruker Jomres for tiden de gamle jQuery UI -baserte malene, men disse har ikke blitt jobbet med på flere år. All gjeldende utvikling og forbedringer av Jomres -maler (layoutfiler) er gjort til det er Bootstrap 3. malfiler. For å få det beste ut av Jomres anbefaler vi at du installerer en Bootstrap 3 -basert tema for Wordpress eller Joomla. Når du har gjort det, kan du aktivere Jomres Bootstrap -maler i nettstedskonfigurasjon.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Støttenøkkelen din er gyldig. Vær oppmerksom på at denne lisensen ikke tillater nedlasting av programtillegg.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Dra bestillinger til dette feltet for å kansellere dem');
jr_define ('_JOMRES_LAT', 'Breddegrad (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Lengdegrad (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Vennligst sørg for at du har opprettet en WordPress-side som inneholder [jomres: xx-XX] kortkoden (hvor xx-XX er nettstedets språkkode, for eksempel [jomres: en-GB] eller [ jomres: en-US]) ellers vil du ikke ha tilgang til Jomres fra frontend for å administrere eiendommer og bestillinger.');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Før du kan opprette en romtype, må vi vite om det er for en hotelltype eiendom eller en villa type eiendom.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Klikk for å legge til nye romtyper');
jr_define ("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Advarsel, du har en eller flere eiendomstyper uten romtyper. Egenskaper trenger romtyper slik at eiendomsforvaltere kan opprette tariffer.");
jr_define ("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Bruk knappen Ny for å opprette nye romtyper.");
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Ingen bestillinger/eiendom (enkel oppføring)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Loggfilplassering');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logger systemaktivitet som standard til' .JOMRES_SYSTEMLOG_PATH. "plassering. Siden denne filen kan inneholde sensitiv informasjon (api -nøkler, systembaner, gateway -informasjon, gjesteinformasjon) anbefaler vi sterkt at du endrer denne banen til en over roten til webdokumentet. Hvis du ikke forstår hva dette betyr, kan du spørre webvertene dine om råd, da de kjenner filsystemet ditt. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logger detaljert informasjon om systemet ditt, inkludert api -nøkler, systembaner, gateway og gjesteinformasjon, som ikke skal være synlige for resten av internett. Systemloggbanen er ikke angitt, så systemlogger lagres for øyeblikket i '.JOMRES_SYSTEMLOG_PATH.' -katalogen, noe som ikke er ideelt. Besøk nettstedskonfigurasjon -> feilsøking og angi en bane i filsystemet ditt som ligger utenfor webrotet. Hvis du er i tvil, vennligst kontakt webvertene dine som de vil kunne gi deg råd. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a passende location would be');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Du har ikke en <a href='https://console.developers.google.com/apis/api/maps_backend/overview' target='_blank'> Google Maps -nøkkel </a> satt. På grunn av nylige endringer i Google maps, vil alle nye nettsteder trenge en API-nøkkel for å kunne bruke funksjonene til Google maps. Vennligst <a href = 'http: //www.jomres.net/manual/site-managers-guide /14-get-started/338-google-maps-api-key 'target =' _ blank '> se vår manuelle side om hvordan du oppretter en API-nøkkel </a> og lagrer nøkkelen i Jomres. Når du har nøkkelen din , kan du skrive den inn i nettstedskonfigurasjon> kategorien Alternativer for Google -kart. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'Google map fargevalg');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "La oss begynne å legge til eiendommen din på nettstedet. Vi må samle litt informasjon om eiendommen din her. Dette lar oss sette opp de blotte beinene til eiendommen din. Når det er gjort, kan du vil bli guidet gjennom å legge til rom, priser og bilder. ");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Eiendomstypen hjelper deg med å definere hvordan eiendommen skal bookes, for eksempel med hoteller du "selger" bare ett eller to rom om gangen, mens du med villaer tilbyr hele eiendommen.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Merk at e -postadressen ikke trenger å være den samme som du brukte da du registrerte kontoen din. Dette lar deg ha forskjellige adresser for forskjellige eiendommer.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Du kan konfigurere minimumsbeløpet for innskudd som skal belastes. Hvis du gjør det, kan innstillingene "Deposit kreves kostnaden for den første natten?" og "Deposit kreves er prosentandel?" i eiendomskonfigurasjon ikke konfigureres , i stedet er alle innskuddsverdier en prosentandel og må være minst det tallet du definerer her. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Dette tallet kan ikke være mindre enn');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Hvis du vil sende systemloggingsmeldinger til en syslog -server, kan du angi vertsnavn eller IP (f.eks. 192.168.0.2) og port (f.eks. 514) her. Merk at hvis nettstedet er satt til ' Utvikling 'deretter vil DEBUG -meldinger bli sendt. Hvis den er satt til' Produksjon ', sendes bare INFO -nivå og høyere meldinger. For å deaktivere logging til den eksterne serveren, tøm verts- og portfeltene. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP har ikke tillatelse til å få tilgang til openlog og syslog PHP -funksjonene. Dette er en server sideinnstilling. Hvis du vil at Jomres skal sende meldinger til en syslog server, vennligst kontakt vertene dine. og bekreft om PHP har tilgang til disse funksjonene. Når den er aktivert, vil du kunne konfigurere innstillingene til syslog -serveren din her. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Send en e -post til nettstedets administrator når det oppstår en feil?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historisk sett har saker som bør undersøkes blitt sendt til nettstedseiere. Dette kan være flott for å holde øye med driften av systemet ettersom det har fryktelig mange bevegelige deler og det er vanskelig å holde styr på alle sammen. Dessverre kan edderkopper og roboter som gjennomsøker nettstedene dine (også vennlige) utilsiktet utløse fatale feil, og dette kan føre til at antallet meldinger du mottar blir overveldende. Hvis det er tilfelle, sett dette alternativet til Nei. Jomres sender logging meldinger til både et sett med loggfiler og til en syslog -server (hvis dine spesifikke PHP -innstillinger tillater det, vennligst kontakt verten din). Du kan analysere filene manuelt hvis du er ute etter noe spesifikt (for eksempel hvis du utvikler en gateway og vil bruke funksjonskallet gateway_log ().) men det er mye informasjon å tråle gjennom, så det er bedre å bruke noe som en syslog filanalysator. Hvis du utvikler på linux da det er mange verktøy tilgjengelig for deg, hvis du på Windows er et enkelt verktøy du kan bruke er http://maxbelkov.github.io/visualsyslog/ På denne siden setter du 'Syslog -verten' til '127.0.0.1' og ' Port 'til 514 for å se meldinger logget på det verktøyet. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Utleiesteder');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a <a href='http://ipinfodb.com/account.php' target='_blank'> API Detection API Key </a> set. This is required to allow systemet for automatisk å oppdage brukerens posisjon og angi valuta og land automatisk. <a href = 'http: //www.jomres.net/manual/site-managers-guide/35-control-panel/main/site- configuration/128-site-configuration-currency-conversion-currency-codes-tab 'target =' _ blank '> se vår manuelle side om hvordan du oppretter en IP-deteksjons-API-nøkkel </a> og lagrer nøkkelen i Jomres> Nettstedskonfigurasjon > Valutakonverteringer / Valutakoder. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Du har ikke et <a href='https://openexchangerates.org/account/apps' target='_blank'> Open Exchange Rates API Key </a> -sett. Dette må til la systemet automatisk laste ned og bruke valutakurser. <a href = 'http: //www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128- site-configuration-currency-conversion-currency-codes-tab 'target =' _ blank '> se vår manuelle side om hvordan du oppretter en Open Exchange Rates API-nøkkel </a> og lagrer nøkkelen i Jomres> Nettstedskonfigurasjon> Valutakonverteringer / Valutakoder. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Tillatelsesnummer');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Enkelte land krav at du må vise tillatelsesnummer for det du leier ut. Legg det inn her hvis du har et slikt nummer.');
jr_define ('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot -plugin MÅ installeres og aktiveres for at disse kortkodene skal fungere. Dette kan finnes i Jomres Plugin Manager. Hvis dette nettstedet ble bygget med en av pluginene for Jomres. Quickstarts da er det sannsynligvis allerede installert. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Du må sørge for at <strong> 'Jomres Shortcodes' </strong> plugin er aktivert. Dette finnes i Jomres Plugin Manager. Hvis dette nettstedet ble bygget med en av Quickstarts, er det sannsynligvis allerede installert.");
jr_define ('SHORTCODE_TASK', 'Task');
jr_define ('SHORTCODE_DESCRIPTION', 'Description');
jr_define ('SHORTCODE_ARGUMENTS', 'Argumenter');
jr_define ('SHORTCODE_EXAMPLE', 'Eksempel');
jr_define ('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define ('INTEGRITY_CHECK_DESC', 'Denne funksjonen lar deg kontrollere at filsystemet samsvarer med det som er tilgjengelig i den gjeldende versjonen av Jomres. Dette er nyttig for å sikre at alle filer ble oppdatert riktig etter installasjon/oppgradering. Filer i rødt mangler, filer i Oransje eksisterer, men er forskjellige fra de som ble levert i den nåværende bygningen. Bare fiiler som er potensielle problemer vil bli oppført her. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Fantastisk! Ingen problemer ble funnet.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Les mer');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Les mindre');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Turistskatt');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Sats for turistskatt');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Sett satsen for turistskatt. Turistskatten blir kun kalkulert etter at bestillingen er gjort, og legges til i bookingbekreftelsen under ekstrabestillinger.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Prosentsats?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Sett denne til Ja hvis skatten er prosentvis eller Nei for flat rate.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Sett dette til Ja hvis skatten skal dekke hele verdien av bestillingen, så det er en prosentandel av både overnatting pluss eventuelle tillegg, eller Nei hvis det bare er beregnet basert på verdien av overnattingssummen. Hvis alternativet Er prosentandel ovenfor er satt til Nei, blir dette alternativet ignorert. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Vær oppmerksom på at en turistskatt vil bli lagt til denne bestillingen. Du vil kunne se avgiften på bestillingssiden for anmeldelse.');
jr_define ('NO_LICENSE_MESSAGE', "Du har ikke lagret et lisensnummer i nettstedskonfigurasjon, derfor vil du ikke kunne laste ned plugins. Når du har lagret en gyldig lisensnøkkel, kan du installere alle plugins som er oppført som Core plugins. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Du ser ut til å bruke et lisensnummer som er ugyldig eller har utløpt. Når du har lagret en gyldig lisensnøkkel, kan du installere alle plugins som er oppført som Core -plugins.");
jr_define ('VALID_LICENSE_MESSAGE', "Gratulerer, du bruker et gyldig lisensnummer og kan installere Core -plugins via Jomres plugin manager.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Denne siden lar deg laste opp bilder for eiendommen din og tingene du tilbyr. Den har en hovedknapp og en andre knapp som lar deg velge spesifikke ressurser å laste opp bilder til. Så Hovedegenskapen bilde og lysbildeserien vil bare vise én knapp, men hvis du har opprettet f.eks. valgfrie tillegg eller rom, vil du se en annen knapp der du kan laste opp bilder for de spesifikke ressursene. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Denne siden lar deg laste opp bilder for eiendommen din og tingene du tilbyr. Den har en hovedknapp og en andre knapp som lar deg velge spesifikke ressurser å laste opp bilder til. Så Hovedegenskapen bilde og lysbildeserien vil bare vise en knapp, men hvis du har opprettet valgfrie tillegg, vil du se en annen knapp der du kan laste opp bilder for de spesifikke ressursene. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Velg først bildene du vil laste opp ved å klikke Legg til bilde eller bruke Dra og slipp. Disse vises i kolonnen på høyre side. </li>
  <li> Over dette området bruker du \"Velg ressurs\" -knappen for å velge hvilken ressurs du vil laste opp bilder til. Du kan bli tilbudt muligheten til å velge en bestemt ressurs under. </li>
  <li> Når du har valgt en ressurs, kan du klikke på Last opp bilde -knappen under et bilde for å knytte den til den ressursen. Når et bilde er lastet opp, vil det forsvinne fra kolonnen på høyre side og vises til venstre. </li>
  <li> Bruk papirkurven -knappen ved siden av eksisterende bilder for å fjerne bilder du ikke lenger vil skal vises. </li>
  <li> Du kan endre rekkefølgen på hvilke filer som skal vises i lysbildeserien ved å gi dem nytt navn før du laster dem opp, ettersom de vises på sider i alfabetisk rekkefølge. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Ved siden av ressursknappen kan det hende du ser en forhåndsvisningsknapp. Hvis du klikker på denne, vil du se en popup som viser deg hvordan de opplastede bildene vil se ut på en side. Dette hjelper deg med å gi deg en ide om hvordan bildene vil se ut for kundene dine. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Det er ingen grense for antall bilder du kan laste opp. Bilder endres automatisk når de lastes opp. Du kan bare laste opp JPG- og PNG -filer.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideelt sett vil alle bildene du laster opp være minst");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "piksler bredt, ellers kan de se uklare ut etter at de er lastet opp.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Bilder du laster opp kan ikke være mer enn");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "i størrelse.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Velg ressursen du vil laste opp bilder for");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Spesifikk ressurs");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bilder allerede lastet opp for denne ressursen");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Tekstformatering');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Du kan skrive inn tekst her ved hjelp av enkel Markdown -formatering. Du trenger ikke å kjenne noen HTML, bare bruk knappene for å få informasjonen til å se ut som du vil, eller formater tekst i henhold til disse eksemplene.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'fet');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'gjennomstreking');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Liten overskrift');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Lister");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Nummerert listeelement');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Lenker');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst som skal vises');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Det kan spenne over flere linjer!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Bilder');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabeller');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Kolonne');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Hvis den er satt til ja, vil en lysbildefremvisning av egenskapens hovedbilder bli vist. Hvis den er satt til nei, vil det første egenskapens hovedbilde bli vist.');
jr_define ('EDIT_CMS_USER', 'Rediger CMS -bruker');
jr_define ('BOOKING_MADE_BY', 'Booking made by');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Fasiliteter');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Romtyper');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Ekstern bestillingsskjema URL');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Her kan du angi en ekstern URL hvis du vil bruke et tredjeparts nettsted for å gjøre bestillinger. Alle jomres bookingknapper peker til denne URL -en. La dette feltet stå tomt hvis du vil bruke Jomres bookingskjema. . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Gjeste svartelistet');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Hvis denne gjesten er svartlistet, vil de ikke lenger kunne bestille på denne eiendommen.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define ('_JOMRES_MAP_HEIGHT', "Karthøyde (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Kart zoom -nivå");
jr_define ('_JOMRES_MAP_MAPTYPE', "Karttype");
jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Mal Override Manager");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Malpakker er plugins som kan gi overstyringsmaler for forskjellige kjerne Jomres -malfiler.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Denne siden viser alle malfiler som kan overstyres av en malpakkes malfiler. Hvis du vil overstyre en bestemt malfil, klikker du på redigeringsknappen for den filen. På neste side vil du i stand til å velge hvilken versjon du vil overstyre med. Merk, disse overstyringene prioriteres både over Jomres Core og i alle Wordpress- eller Joomla -temaer/maloverstyringer. Du kan deaktivere en overstyring ved å slette den på siden List Overrides List. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Malnavn");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Current path");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Ikke overstyrt");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Du kan velge hvilken malfil du vil overstyre kjernemalfilene ved å endre rullegardinmenyen");
jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Prosentvis belegg");
jr_define ('_JOMRES_SELECT_WIDGETS', "Velg widgets");
jr_define ('_JOMRES_INTERVAL', "Periode");
jr_define ('_JOMRES_TIMELINE', "Tidslinje");
jr_define ('_JOMRES_CPANEL_GRID', "Hjemoppsett på kontrollpanelet");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Velg rutenettoppsettet for frontend -eiendomsadministrasjonens kontrollpanels hjemmeside.");
jr_define ('_JOMRES_COM_A_GATEWAYLIST', 'Betalingsmåter');
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Bybilder");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Hvis du endrer egenskapstypen, slettes alle rom, tariffer, eiendomsinnstillinger og tilbakestilling av tilgjengelighet.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Vær oppmerksom på at etter oppdatering må du oppdatere alle Jomres Plugins som allerede er installert, via Jomres plugin manager. Hvis du har Core plugins installert, men ikke har en gyldig Jomres lisens, gjør vi <em> ikke </em> anbefaler at du oppdaterer Jomres ettersom eldre plugins ofte ikke fungerer med nyere versjoner av Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Vær oppmerksom på at etter oppdatering må du oppdatere alle Jomres Plugins som allerede er installert, via Jomres plugin manager.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Hvis du vil oppdatere Jomres og dets plugins, trenger du en fornyelseslisens. Besøk <a href='https://www.jomres.net/pricing' target='_blank'> vår nettsted </a> for mer informasjon. I de fleste tilfeller er disse lisensene 50% av prisen på en full lisens. Sørg for at du har logget deg inn i butikken vår før du prøver å kjøpe en fornyelse. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Betalingsmåte:");

jr_define ('_JOMRES_PRICES', "Bli tilkoblet");


jr_define('_OAUTH_TITLE',"Håndtering av app-nøkler");
jr_define('_OAUTH_APPS',"REST API klientdetaljer");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Laget/Oppdatert App");
jr_define('_OAUTH_CLIENT_ID_INFO'," Client ID og Secret lages for deg. Identifier er for at du enkelt skal kunne identifisere disse to nøklene.");
jr_define('_OAUTH_SCOPE_TITLE',"Tillatelser ( hva klienten kan gjøre ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "Brukertilgang");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Tillatelser for utleiested");

jr_define('API_DOCUMENTATION_TITLE',"App REST API dokumentasjon");

jr_define('_OAUTH_CONFIG',"API Core konfigurasjon");

jr_define('_OAUTH_CONFIG_SHOW',"Vis valg for API klientkonfigurasjon i Jomres hovedmeny?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"Du kan velge å ikke vise valg for API klientkonfigurasjon i 'Min Konto'-seksjonen av Jomres hovedmeny. I stedet kan du velge å vise dette andre steder ved bruk av Jomres Shortcodes.");
jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Viser API -kjernedokumentasjonssiden. API Core lar brukerne lage API -klienter, som deretter brukes til å få tilgang til API -funksjonaliteten som er beskrevet i API Core -dokumentasjonen.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Viser API -kjerneadministrasjonssiden, der eiendomsforvaltere kan konfigurere API -klienter. Vær oppmerksom på at dette er en registrert brukerfunksjon, så brukere må være registrert og logget på før de kan se denne siden.");

jr_define ('API_METHODS_TITLE', "API -metoder");
jr_define ('API_METHODS_DESCRIPTION', "Denne listen over metoder er basert på de installerte plugin -modulene for API -funksjoner og genereres automatisk. Hvis du installerer eller sletter en API -funksjon, må du besøke denne siden for å bygge opp igjen denne listen over API -metoder som er tilgjengelige på nettstedet ditt. ");

jr_define ('_OAUTH_REDIRECT_URI', "Omdiriger URI");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Gi meg et navn som er meningsfullt for deg, for eksempel Min telefon");

jr_define ('_OAUTH_GRANT_TYPES', "Dette systemet støtter to tilskuddstyper, Client Credentials og Implicit. Hvis du bruker strømmen <em> client_credentials </em>, trenger du både klient -ID og klienthemmelighet. Hvis du bruker <em > implisitt </em> så sender appen din bare klient -IDen, og du logger deg på systemet for å eksplisitt autorisere den appen. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "For å bruke <em> implisitte </em> tilskuddstypestrømmen må du bruke denne nettadressen til å godkjenne appene dine. Når denne nettadressen kalles, og du har autorisert appen, vil systemet utstede et tegn som appene dine deretter vil bruke til å kalle dette systemets API ");
jr_define ('_OAUTH_AUTHORISATION_URL', "Autorisasjons -URL");

jr_define ('WEBHOOKS_CORE', 'Webhooks');

jr_define ('_WEBHOOKS_CONFIG_SHOW', "Show Webhook configuration options in Jomres main menu?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Du kan velge å ikke vise Webhook -konfigurasjonsalternativene i 'Min konto' -delen i Jomres -hovedmenyen. Du kan i stedet bestemme at du ville vise dem på andre sider ved hjelp av Jomres Shortcodes.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks -dokumentasjon");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Viser API -kjernedokumentasjonssiden. API Core lar brukerne lage API -klienter, som deretter brukes til å få tilgang til API -funksjonaliteten som er beskrevet i API Core -dokumentasjonen.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Viser API -kjerneadministrasjonssiden, hvor eiendomsforvaltere kan konfigurere API -klienter. Vær oppmerksom på at dette er en registrert brukerfunksjon, så brukere må være registrert og logget på før de kan se denne siden.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'Integration ID');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL or Name');
jr_define ('WEBHOOKS_ENABLED', 'Enabled');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Eventuelle webkroker du oppretter vil ikke bli utløst da du ikke er tilordnet noen eiendommer. Super eiendomsforvaltere er vanligvis ikke tilordnet individuelle eiendommer, så du kan trenge en ny bruker for opprettelse av webhook.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Eventuelle webhooks du oppretter, utløses mot følgende egenskaper:');
jr_define( 'PORTAL_REVIEWS_LIMIT', 'Grense for anmeldelser' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Bruk denne innstillingen for å begrense antall anmeldelser som vises på siden for detaljer for utleiested.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Vis alle anmeldelser' );

jr_define( 'VIDEO_TUTORIALS', 'Video-opplæring' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES', 'Utleiekategorier' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Endre utleiekategori' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum forskudd' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Hvis det kalkulerte forskuddet er mindre enn dette tallet, så settes forskuddet til denne verdien i stedet. Dette tallet kan også bli overskrevet hvis det ikke passer med sidens minimumsinnstilling for forskudd. Sett til 0 for å ikke bruke innstillingen." );
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'For å øke nettstedets hastighet, anbefaler vi at du importerer detaljer om det eksisterende nettstedet og eiendomsbilder til databasen.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importer eksisterende bildedetaljer til database');
jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Eksperimentell funksjon. Hvis den er aktivert, blir bilder lastet opp med mediesenterfunksjonen også kopiert til Amazon S3 -bøtte og servert fra Amazon S3 -bøtte -url. Når du aktiverer dette første gangen, vil du også bli lovet å importere eksisterende bilder til din S3 -bøtte. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront -domene');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Erstatt standard Amazon S3 -domene med CloudFront -domenet ditt');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Anbefalt å være aktivert. Bare for Windows og Mac OSX, hvis libcurl ikke ble bygget med støtte for Schannel eller Secure Transport (de opprinnelige SSL -bibliotekene som er inkludert i Windows og Mac OS X), bør du sette dette til Nei.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Du har aktivert Amazon S3 -integrasjonen, så du må kopiere alle eksisterende bilder til din S3 -bøtte. Bilder blir nå vist til besøkende fra nettstedet ditt fra Amazon S3 -url, så du trenger å kopiere dem først til din S3 -bøtte, ellers vil de ikke være synlige for besøkende på nettstedet ditt. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Når du klikker på denne knappen, må du ikke avbryte prosessen og vente på en suksess eller feilmelding. Avhengig av serverhastighet kan dette ta en stund å fullføre.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopier eksisterende bilder til Amazon S3 -bøtte');


jr_define ('JOMRES_INCOMPLETE', 'Incomplete');
jr_define ('JOMRES_WATING_APPROVAL', 'Ventende godkjenning');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Eiendomsdetaljekart');

jr_define ('HAS_STARS_TITLE', 'Tillater stjerneklassifisering?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force laste opp bilder på nytt til S3 -bøtte');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Slett alle Jomres -data ved avinstallering?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Hvis den er satt til ja, vil Jomres slette alle databasetabellene når den avinstalleres. Dette sletter alle Jomres -data fra db og kan ikke angres.');

jr_define ('TRANSACTION_IDS', 'Transaction ID');
jr_define ('PAYMENT_METHOD', 'Betalingsmåte');
jr_define ('POA_DISPLAY_PRICE', 'POA Price');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Når egenskaper vises i en liste, vil systemet prøve å finne en gyldig pris fra konfigurerte tariffer basert på enten dagens dato, eller hvis datoer ble brukt i et søk, deretter basert på disse datoene . Hvis den ikke kan, vil den vise POA (Pris på søknad), noe som betyr at gjesten bør kontakte deg for å få en pris. Hvis du vil, kan du konfigurere en pris her som skal vises i stedet for POA -teksten. Dette tallet ville være en "fallback" -pris å vise hvis ingen annen pris kan fastslås. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Du må installere plugin -manageren før du kan installere Jomres -plugins, vil du gjøre det nå?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Du må oppdatere plugin -manageren før du kan oppdatere eventuelle installerte plugins, vil du gjøre det nå?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "La oss gjøre dette!");

jr_define ('INCLUDEINFILTERS', 'Inkluder i filtre?');
jr_define ('INCLUDEINFILTERS_DESC', 'Egenskapsfiltre i Ajax Composite Search kan bli veldig lange, så du kan sette dette alternativet til Nei for å forhindre at denne funksjonen vises i listen over egenskaper.');

jr_define ('REVIEW_REMINDER_PT1', "Du har");
jr_define ('REVIEW_REMINDER_PT2', "bestilling (er) som du ikke har gitt noen anmeldelse for ennå. Legg igjen en anmeldelse.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Bestillinger venter på anmeldelser");
jr_define ('REVIEW_NAG', "Nag -gjester for anmeldelser?");
jr_define ('REVIEW_NAG_DESC', "Når en gjest er booket ut fra en bestilling, vil systemet minne dem på å legge ut en anmeldelse av bestillingen. Sett dette alternativet til Nei for å deaktivere denne påminnelsen.");

jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Vil du sende kopier av booking -e -postene til nettstedets administratorer?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Når den er aktivert, blir kopier av booking -e -postene som sendes til eiendomsforvaltere også sendt til alle nettstedets administratorer.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Skjul adresse?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Hvis du angir dette alternativet til Ja, vil bare gjester som allerede har lagt inn en bestilling på eiendommen din se gateadressen til eiendommen. Det kan være lurt å bruke denne innstillingen til å skjule eiendommens nøyaktige beliggenhet hvis den for eksempel rutinemessig blir etterlatt uten tilsyn. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimaliser bilder ved opplasting?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Når den er aktivert, blir bildene optimalisert for web (filstørrelsen kan være opptil 75% mindre). Avhengig av den opplastede bildetypen må serveren ha en eller flere av disse bibliotekene installert av verten leverandør: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define ('OBSOLETE_FILES_CHECK', 'Kontroll av foreldede filer');
jr_define ('DATATABLES_COLVIS', 'Column Visibility');

jr_define ('API_TOKEN_LIFETIME', 'API -token levetid');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Hvor lenge et API -token forblir gyldig i sekunder. 86400 = 1 dag, 31536000 = 1 år');


jr_define ('ENCRYPTION_TITLE', 'Encryption');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Encryption file location');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Slett aldri krypteringsfilen ** <br/> Brukerdata lagres kryptert i tabeller for å sikre at "data i hvile" er beskyttet sikkert i henhold til GDPR -anbefalinger. Som standard er krypteringsnøkkelen er lagret i filen "encryption_key.class.php" i roten til Jomres -installasjonen (vanligvis /public_html /jomres). Du kan endre hvor filen er lagret her. Hvis du endrer plasseringen, må du flytte filen, ikke vent til Jomres oppretter en ny versjon, ellers vil du ikke kunne dekode gjestenes detaljer. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Informasjonen du lagrer her vil bli brukt på fakturaer generert for denne eiendommen');

jr_define ('_JOMRES_GDPR_POLICIES', 'GDPR Policies');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Her kan du konfigurere hvor lenge etter at en bestilling eller faktura er opprettet, blir den fjernet fra systemet for å sikre at du er i samsvar med GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Oppbevaringsperiode for reservasjoner (i dager)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Hvor mange dager etter en bestillings avreisedato bør bestillingen slettes? Når den slettes, fjernes både bestillingen og fakturaen. En typisk oppbevaringsperiode kan være 365 dager.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Fakturaoppbevaring (ikke-bestilling)');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Andre fakturaer, for eksempel provisjons- og abonnementsfakturaer, er ikke knyttet til bestillinger. Som et resultat slettes de ikke når bookingfakturaer og kontrakter slettes. Avhengig av ditt land og din egen forretningspraksis, du må konfigurere en annen oppbevaringsperiode. En typisk oppbevaringsperiode kan være 3653 dager, som er 10 år. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Dine data');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Noen funksjoner på dette nettstedet må lagre informasjon om besøket ditt. Dette brukes bare for å yte service til deg, deles aldri med andre og slettes når det ikke lenger er behov for det.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'GIR DU OSS TILLATELSE FOR Å LAGRE DENNE INFORMASJONEN ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Du må samtykke i at vi lagrer disse dataene for at du skal kunne gjøre bestillinger på dette nettstedet. Uansett om du samtykker i at dataene dine lagres eller ikke, lagrer vi en informasjonskapsel på datamaskinen din for å fortelle det oss om du har meldt deg på eller ikke. Dette hjelper oss med å sikre at vi ikke hele tiden spør deg om du vil melde deg av eller ikke, og det inneholder ikke noen personlig identifiserbar informasjon (PII). Hvis du ombestemmer deg kan besøke siden "Apptillatelser" når som helst for å melde deg ut eller av. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Informasjonen lagres i forskjellige tidsperioder avhengig av besøkets art. Så hvis du bare ser deg rundt, lagrer vi omtrentlig geografisk informasjon (landnivå). Hvis du utfører søk, så til gjør søkeskjemaer mer brukervennlige, vi lagrer de siste tingene du søkte på. Denne informasjonen lagres vanligvis i maksimalt 24 timer og brukes bare for å gjøre besøket ditt hyggeligere. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Når du bestiller hos oss, lagres det nødvendigvis mer informasjon.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Teknikkene i bestillingsskjemaet blir fanget opp og beholdt i maksimalt 60 dager. Dette er nødvendig for at bestillinger på forespørsel kan bli til full bestilling når en bestilling er godkjent, og for analyse av teamene våre i tilfelle det er et problem med en bestilling. Hvis du ikke var logget inn da du foretok en bestilling, sender vi deg et brukernavn og passord på e -post, slik at du kan se bestillingsloggen din og utøve din rett til å bli glemt (RTBF) hvis du ønsker å gjøre det. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data som er lagt inn i bestillingsskjemaet, for eksempel navn, e -postadresse, ekte adresse lagres maksimalt 365 dager etter bestillings avreisedato. Denne informasjonen lagres i kryptert form i databasen vår slik at bare autoriserte personer kan se den. Hvis du foretar en bestilling må vi ved lov lagre PII mens bestillingen er gyldig. Når bestillingen er fullført, enten fordi den er kansellert eller du har blitt sjekket ut, vil du være i stand til å utøve RTBF ved å logge deg på og gå til siden "Dine data". Fakturainformasjon for fullførte bestillinger vil fortsatt lagres sikkert i databasen vår for å sikre at vi overholder relevante skattelovgivninger, men du vil kunne fjerne alle andre PII etter at bestillingen er fullført. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Når du samtykker i at informasjonen din lagres som beskrevet ovenfor, er vi juridisk forpliktet til å lagre dette samtykket i databasen vår. Denne informasjonen inkluderer ditt IP-nummer og innholdet i påmeldingsskjemaet. Vi vil beholde denne samtykkemeldingen på ubestemt tid (dette er et lovkrav). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Du har ennå ikke fortalt oss om vi kan samle inn personlig identifiserbar informasjon om deg');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Du har samtykket i at vi samler inn nødvendig personlig identifiserbar informasjon for å ta bestillinger');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Du har bedt oss om ikke å samle inn personlig identifiserbar informasjon');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Du har ikke gitt oss tillatelse til å samle inn dine private data');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For at du skal kunne utføre visse handlinger på dette nettstedet må vi samle inn personlig identifiserbar informasjon om deg, men du har ikke gitt oss tillatelse til det.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Endre tillatelsene dine');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Fortsett å se eiendommer');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'App -tillatelser');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Gjestedata');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Dette er detaljene som er lagret for deg av de forskjellige eiendommene. Ulike hoteller kan ha forskjellige poster, avhengig av hva du skrev inn da du booket.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Du har ingen data lagret på noen hoteller i dette systemet');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profildata');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Dette er hoveddatasettet vi har for deg, forskjellig fra de du har delt med forskjellige eiendommer.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Du har ikke lagret noen profilinformasjon');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Her er den personlig identifiserbare informasjonen vi lagrer på dette nettstedet for deg. Den er konstruert i JSON (JavaScript Object Notation) -format som er et lett datautvekslingsformat. Det er lett for mennesker å lese og skrive, og det er lett for maskiner å analysere og generere. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Anonymisert');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Dine data');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Ved å godta disse vilkårene for bruk (denne "Avtalen") godtar du at:

<ul>
<li>
Du er autorisert til å bestille hoteller gjennom dette nettstedet;
</li>
<li>
Du er minst 18 år gammel;
</li>
<li>
Du har den juridiske myndigheten til å opprette en bindende juridisk forpliktelse;
</li>
<li>
Du vil bruke nettstedet i samsvar med denne avtalen;
</li>
<li>
Du vil bare bruke nettstedet til å foreta legitime reservasjoner for deg selv eller for en annen person som du er lovlig autorisert til å handle for;
</li>
<li>
Du vil informere slike andre personer om denne avtalen som gjelder reservasjonene jeg har gjort på deres vegne, inkludert alle regler og begrensninger som gjelder for den;
</li>
<li>
All informasjon du selv gir til nettstedet er sann, nøyaktig, aktuell og fullstendig; og
</li>
<li>
Du vil beskytte kontoinformasjonen din og vil føre tilsyn med og være helt ansvarlig for enhver bruk av kontoen din av deg selv og andre enn deg.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Sikkerhet og åpenhet er viktig for oss.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Vi tar vårt ansvar for lagring av dataene dine veldig alvorlig. All personlig identifiserbar informasjon (PII) lagres kryptert i databasen vår ved hjelp av bransjestandardalgoritmer for å sikre at bare autoriserte brukere kan se denne informasjonen.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Du kan laste ned hele PII -en vi lagrer for deg.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Last ned nå');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Glemt (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Vi mener at du bør kunne <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> slette </a> din < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Personlig identifiserbar informasjon </a> hvis du vil, og hvis det er praktisk mulig. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Du er ikke registrert på dette nettstedet. Din generelle posisjon (land) og IP -nummer lagres i maksimalt 24 timer og slettes deretter.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Du er ikke registrert på dette nettstedet, og du har valgt bort datainnsamling. Vi har ikke lagret PII.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Du er registrert på nettstedet og har ingen ventende eller aktive bestillinger. Vi kan anonymisere de fleste opplysningene vi har for deg. Vil du gjøre det?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Merk: Dette sletter ikke kontoen din, det anonymiserer bare postene våre slik at kontoen din ikke kan knyttes til deg som person. Etter loven må vi fortsette å lagre PII for faktureringsformål, men vi vil slett alle gjesteposter. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Du er registrert på nettstedet, men du har utestående bestillinger og vi kan ikke anonymisere dataene dine for øyeblikket. Disse dataene beholdes i maksimalt ett år etter at bestillingen er fullført, så vil det bli slettes hvis du ikke velger å fjerne det før den tid. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Fordi du er eiendomsforvalter på nettstedet vårt, kan vi ikke tilby deg muligheten til å slette dataene dine automatisk. I stedet kan du kontakte oss direkte slik at vi kan tilordne eiendommen (e) til en annen leder. Når vi har gjort det og fjernet statusen din som eiendomsforvalter, vil du automatisk kunne slette dataene dine. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Glem meg!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Dette kan ikke angres!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Dine data er slettet!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Beklager, du kan ikke foreta en bestilling da e -postadressen din er ugyldig');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Denne siden gir deg muligheten til å anonymisere alle gjester som har informasjonen lagret i systemet. Dette lar deg være i samsvar med GDPR, men du kan ikke redigere annen informasjon på denne siden. For å gjøre det du må logge deg på frontend som eiendomsforvalter. Antagelsen er at en historisk gjest har kontaktet deg for å be om at du kan utøve sin rett til å bli glemt. Hvis de ikke klarer å logge seg på frontend på nettstedet (kanskje en brukeren ble ikke opprettet for dem da de bestilte), så kan du bruke dette området til å anonymisere dem når du har bekreftet identiteten deres. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymiser gjest');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'SLETTET EIENDOM');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Gjestedata anonymisert');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Kan ikke anonymisere');
jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Vi trenger din tillatelse til å lagre informasjonen din før du kan gjøre en bestilling. KLIKK HER for å gi oss tillatelse.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Aktivere GDPR -kompatibel funksjonalitet?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'VI ANBEFALER IKKE AT DU deaktiverer GDPR-kompatible funksjoner. Jomres har innebygde funksjoner som hjelper deg å sikre at Jomres-delen på nettstedet ditt er i samsvar med GDPR. og hvis du deaktiverer denne funksjonen. du bør ikke hvis du er i EU eller gjør forretninger med borgere i EU), så vil Jomres automatisk anta at hver besøkende på nettstedet har gitt sin tillatelse til å ha sine personlige data aktivert. Apptillatelse og Mine data -sider vil ikke være vises, og brukerne blir ikke bedt om å gi tillatelse til å samle inn dataene. ');


jr_define ('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Midlertidige filer slettet');

jr_define ('MACHINE_TRANSLATION', 'Maskinoversettelser');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Kildespråk');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Det er mulig å koble til maskinoversettelsesfunksjonalitet. Dette lar deg skrive inn strenger på ett språk og oversettelser kan trekkes fra eksterne tjenester. Vær oppmerksom på at ikke alle oversettelsestjenester støtter alle språk. Se disse tjenestene for flere detaljer.' );

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Romtyper');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Ny romtype');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Du kan opprette og redigere romtyper på denne siden. Disse romtypene vil bare være spesifikke for denne egenskapen. Når du konfigurerer eiendommen din, trenger du først noen romtyper. Du kan bruke enten disse romtypene som er opprettet av administratoren, eller du kan legge til dine egne. Når du har en eller flere romtyper, kan du deretter opprette rom av den romtypen. Etter at du har rom, kan du deretter opprette tariffer (priser) for disse rommene fordi tariffer er knyttet til romtyper . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Ledere kan opprette romtyper?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Bruk dette alternativet til å konfigurere om ledere kan lage sine egne romtyper i frontend eller ikke. Vi anbefaler på det sterkeste at du lar dette alternativet stå Nei når du begynner å bruke Jomres, spesielt hvis du oppretter en portal fordi du bør opprette alle romtyper i administratorområdet. Romtyper opprettet av ledere vil vises i søkeskjemaer, men fordi disse romtypene er spesifikke for individuelle eiendommer, vil bare én eiendom vises i søkeresultatene hvis den romtypen er valgt durings -søk. Hvis du vil at bare Super Property Managers kan opprette romtyper, kan du la dette alternativet stå på Ja og bruke tilgangskontroll -pluginet for å bare tillate superledere å se menyalternativet "Settings> Room types". Bare eiendommer som leier ut rom i eiendommen og bruk avansert eller Micromanage tariffredigering moduser kan bruke dette alternativet. Villa/leilighet type eiendommer vil ikke kunne bruke det. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Rom/eiendomstype oppdatert');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Vis romtyper i søkealternativer');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Hvis du velger å tillate eiendomsforvaltere å lage sine egne romtyper, kan du velge om de opprettede romtypene skal vises eller ikke i søkealternativene der du har valgt å vise romtyper.');


jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Du bør ikke bruke den samme e-postadressen på nytt for hver bestilling. <br/> Hvis du har et unikt domene (f.eks. ikke en gmail-e-postadresse) for virksomheten din, kan du bruke gjestens telefonnummer som deres e -postadresse. E -postadressen vil da se ut som 123456@mydomain.com <br/> Dette vil sikre at en ny gjest opprettes når du oppretter en bestilling. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'E -postadresse');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Password');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Vi er glade for at du vil bestille hos oss igjen. For å kunne administrere alle bestillingene dine sammen, er det nødvendig at du logger deg på slik at bookingen kan legges til i kontoen din. Dette også sikrer at du er autorisert til å bruke den oppgitte e-postadressen. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Hvis du ikke vet passordet ditt, kan vi sende deg en e -post for tilbakestilling av passord. Følg instruksjonene i e -posten for å tilbakestille passordet.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Glemt passordet ditt?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonymize your name?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Hvis du velger å anonymisere navnet ditt ved gjennomgang, bruker vi initialene dine i stedet.');
jr_define ('ANONYMOUS', 'Anon');
jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'sa');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Svar på denne anmeldelsen');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Skriv svaret ditt på denne anmeldelsen her.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Ditt svar');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Gjennomgå svar lagret');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Før du sender inn et svar på anmeldelse, må du lese følgende. Ved å sende inn et svar bekrefter du at du godtar disse vilkårene og betingelsene.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Hva er våre retningslinjer for svar på anmeldelse?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Du svarer på anmeldelsen av eiendommen din. Du <em> må ikke </em> bruke svaret ditt som en kommersiell tvisteprosess. Hvis du trenger å rapportere en anmeldelse, må du bruke "Rapport" Gjennomgå "-knappen på oppføringen, og ikke denne anmeldelsenesvarssiden. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Når du har forlatt svaret, kan du ikke redigere det.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Tillatt og oppmuntret');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Et fullstendig svar på anmeldelsen. </li>
    <li> Hilsen og ærlighet. </li>
    <li> Fornuftige svar på korrekturleserens problemer (husk at andre kan ha lignende problemer, men benyttet ikke sjansen til å legge ut en anmeldelse). </li>
    <li> Oppfordre gjesten til å komme i kontakt med deg direkte for å løse problemer.
    <li> Husk alltid at fremtidige gjester vil se svaret ditt. Sørg for å være profesjonell til enhver tid. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Ikke tillatt');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Kommersielle tvister. </li>
    <li> Spørsmål til korrekturleseren eller andre. </li>
    <li> Tvilsomt språk (inkludert forbannelse). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Sist kjørt');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Fakturanumre');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Bruke egendefinerte fakturanumre?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Du kan konfigurere systemet til å bruke tilpassede fakturanumre. Bare nye fakturaer påvirkes.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Startnummer');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Tall opprettes fortløpende. Hva skal det første tallet være?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Hvilket format skal fakturanummeret ha?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Konfigurer fakturanummerformatet her. Et format kan se ut som {N}/{D} eller {N}/{Y} der N er det automatisk genererte tallet, D = dato i formatet ÅÅÅÅÅMMDD ( 20190131) eller Y = ÅÅÅÅ (2019). Eventuelle andre alfanumeriske tegn som ikke er omsluttet i krøllete seler, får være i fred, så et mønster som ser ut som {N}/{D} -L vil resultere i et fakturanummer (21) som ser omtrent ut som 21/2019-L ');

jr_define ('_JOMRES_SURCHARGE_TITLE', 'tilleggsavgift');
jr_define ('_JOMRES_SURCHARGE_DESC', 'En tilleggsavgift som blir lagt til i rommet ved bestilling (beregnet per dag)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritize label-wide labels?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Egendefinert tekst som er lagret i etikettredigeringen eller translate lang-filstrenge-sider regnes som "nettstedsomfattende" etiketter. Eiendomsforvaltere kan også tilpasse etiketter for hver eiendom ved å bruke etikettredigeringsfunksjonen i frontend. Dette tillater en eiendomsforvalter for å ha forskjellige tekster for eiendommen sin, noe som er nyttig hvis eiendommen er forskjellig fra alle de andre egenskapene på nettstedet. <br/> Når systemet søker etter etiketttekster, vil det prioritere nettstedsomfattende tekster fremfor eiendom spesifikke tekster som betyr at hvis det finnes en tekst på hele siden for denne etiketten, vil systemet velge den først. Hvis du setter dette alternativet til Nei, vil systemet prioritere eiendomsspesifikke tekster fremfor tekster på hele siden. ');

jr_define ('_JOMRES_REFERRER', 'Referrer');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Dette kan bli endret hvis hviteliste, så nettsted "Verdens beste bestillingsside" ville endre dette til "WBBS" eller lignende.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Leverandør- og nodemoduler er separate (gratis) pakker for Jomres. Du kan installere pakkene på denne siden på nytt.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Installer bibliotekpakker på nytt');
jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Kan ikke slette egenskapstype fordi den fortsatt brukes av noen eiendommer. Du må først endre disse egenskapene til en annen eiendomstype før du prøver å slette denne. Egenskaps -UID -er som forhindrer sletting:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Kan ikke oppheve publisering av eiendomstype fordi den fortsatt brukes av noen eiendommer. Du må først endre disse egenskapene til en annen eiendomstype før du prøver å oppheve publiseringen. Egenskaps -UID -er som forhindrer endringen:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Tilfeldige e -postadresser');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Du kan la systemet generere tilfeldige e -postadresser i hurtigboksen i hurtigmenyen. Dette gjør at ledere og resepsjonister kan lage bestillinger for gjester som de ikke har e -postadresser for, det er ment å fungere som tidsbesparelse for nettsteder med mange resepsjonister/ledere som forstår at disse tilfeldige e -postene aldri vil bli brukt til ekte kommunikasjon, er formålet å omgå det faktum at i Jomres må alle gjester ha e -postadresser. Du MÅ også oppgi et domene i det neste feltet. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Dette skal ikke være et normalt e -postdomene, for eksempel gmail eller outlook. I stedet kan det enten være ditt eget domene, eller noe helt annet, for eksempel "mitt nettsted. e -post');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Last opp område');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Ingen brukerrolle');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Resepsjonist');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Suspendert');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Slettet fra CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Hvis du liker Jomres, kan du vurdere å legge igjen en anmeldelse på et av disse nettstedene');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Jeg er en hyggelig person, jeg har allerede skrevet en anmeldelse');

jr_define ('_LICENCE_PROMPT_DEAR', 'Dear');
jr_define ('_LICENCE_EXPIRED', ', Jomres -lisensnøkkelen din er utløpt, så du mangler disse flotte funksjonene og fordelene!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Kun eksklusive medlemmer e -post/billettstøtte');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'bekymringsfrie Jomres Core-oppdateringer');
jr_define ('_LICENCE_EXPIRED_POST', 'Koble til oss for problemfrie betalingsløsninger og få tilgang til alle plugins og brukerstøtte-tjenester.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Få tilgang til alle plugins nå!');

jr_define ('_LICENCE_INVALID_KEY', 'Dessverre ser det ikke ut til at du bruker en gyldig Jomres -lisensnøkkel, så du mangler disse flotte funksjonene og fordelene!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> programtillegg </a> som i stor grad utvider Jomres-funksjonaliteten');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Kun eksklusive medlemmer e -post/billettstøtte');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'bekymringsfrie Jomres Core-oppdateringer');
jr_define ('_LICENCE_INVALID_POST', 'Koble til oss for problemfrie betalingsløsninger og få tilgang til alle plugins og brukerstøtte-tjenester.');
jr_define ('_LICENCE_INVALID_START', 'Få tilgang til alle plugins nå!');

jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Brukere');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Abonnementer');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Fakturaer');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Rapporter');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Hjelp');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Totale egenskaper i systemet');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Publiserte eiendommer');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Ikke -publiserte eiendommer');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Godkendte eiendommer');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Egenskaper som krever godkjenning');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Upubliserte anmeldelser');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Gjennomgå rapporter');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Eiendommens eiendomstype er ikke publisert, den kan ikke vises i søkeresultater. Ta kontakt med nettstedets administrator for å publisere eiendomstypen, eller endre eiendomstypen på siden Rediger eiendom.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Oppdater din eiendomstype');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Inntekt (betalte beløp)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Kan ikke slette egenskapen');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"fordi den brukes av følgende eiendommer:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Denne siden utfører en grunnleggende test av REST API ved hjelp av innebygd funksjonalitet i Jomres. Den kaller Jomres REST API for å se om den mottar et gyldig svar.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Serveren kalte denne URL -adressen for å se om svaret er gyldig:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Siden mottok dette svaret:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Testen så ut til å gå som forventet, du vil sannsynligvis ikke ha noen problemer med å motta REST API -forespørsler fra resten av Internett.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Testen mislyktes, se i Svar -feltet, hvis det ser ut som mye html, eller du mottok en 404 -melding, vil serveren omdirigere anrop til en annen nettadresse. Dette forhindrer deg i å motta API ringer. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Jomres App -serveren opprettholder en liste over alle Jomres -nettsteder. Dette lar oss bygge et syndikasjonsnettverk. Dette nettverket er utformet slik at brukerne våre kan vise eiendommer fra andre nettsteder, og har egne nettsteder på sine nettsteder. spesielt for nye nettsteder, for å bygge opp en SEO -tilstedeværelse på nettet. Målet er at alle Jomres -nettsteder skal jobbe sammen og bygge tillit til nettverket. Det er ingen kostnad for denne tjenesten. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Nettstedet ditt er for øyeblikket ikke oppført på Jomres App -serveren, som er en del av syndikeringsnettverket. Denne serveren prøver igjen å legge denne serveren til nettverket på de neste 6 sidene. få sider lastet inn, dette endres ikke. Sjekk at tilkoblingstesten ovenfor består testene. Merk, lokale servere kan ikke legges til nettverket. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Gratulerer, serveren din er oppført på Jomres App -serveren.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Her er noen andre eiendommer tilgjengelig fra vårt eiendomsnettverk');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Gratulerer, serveren din er oppført på Jomres Syndication Network. Eiendommen din begynner snart å vises på andre Jomres -nettsteder hvis de ikke allerede vises.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Installasjonen er ikke en del av Jomres Syndication Network, derfor blir ikke eiendommen din vist på andre Jomres -baserte nettsteder, og du kan ikke dra fordel av denne gratis annonseringen.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installasjoner:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Det totale antallet Jomres -installasjoner som deler Jomres Syndication Network -egenskaper på nettstedene sine.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Dette er antall eiendommer som er tilgjengelige i JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Totalt har alle ganger en Jomres -eiendom blitt koblet til fra et annet Jomres -basert nettsted.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) er en gratis funksjon som er tilgjengelig for alle Jomres -brukere. Formålet er å gi deg gratis annonsering av eiendommene dine på andre Jomres -baserte nettsteder. Målet er å hjelpe du får nettstedet ditt raskt fra bakken og tilbyr gratis annonsering slik at eiendommene dine blir gjenkjent og klarert fordi de er knyttet til nettsteder med høy tillit og høy relevans som allerede er godt kjent for søkemotorene. Se dette <a href = "https: //www.jomres.net/features/jomres-syndication-network target="_blank"> artikkel på nettstedet vårt </a> og <a href =" https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network target="_blank"> manualen </a> for mer informasjon. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class = "fa fa-users" aria-hidden = "true"> </i>
 er offentlig synlige, mens felt med dette symbolet <i class = "fa fa-user-secret" aria-hidden = "true"> </i> bare kan sees av deg, vertene og nettstedets administratorer. <br/> <br/> Verter kan bare se privat informasjon hvis du allerede har opprettet en bestilling hos dem. <br/> <br/> Informasjonen din er trygt kryptert og lagret i databasen vår ved hjelp av AES-256-kryptering. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Disse feltene er valgfrie, men verter kan bruke informasjonen her for å avgjøre om de føler at de kan stole på deg, derfor er det bedre å legge til informasjonen. Husk at du ber om å bli i deres eiendom, og de kan avvise deg hvis de føler at du ikke passer godt eller at biografen din ikke inneholder nok informasjon. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Førerkort');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Passnummer');
jr_define ('GUEST_PROFILE_IBAN', 'IBAN -nummer');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'Om meg');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Denne "Om meg" -delen er offentlig synlig, så ikke legg inn noen privat informasjon. Når det er sagt, gjør en innsats for å legge så mye som du føler deg komfortabel med å dele for eksempel lidenskapene dine, det du leve av, hobbyene dine osv. Du kan bruke Markup til å gi den litt jazz. Verter vil føle at de kan stole på deg med sine egenskaper. Sørg for at bildet ditt er et ekte bilde av deg, ikke hunden din. eller bil (ja, gutta, vi snakker med deg!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Skriv inn eventuelle spesielle krav du måtte ha, for eksempel enkel tilgang her. De vil ikke bli vist på din offentlige profil, men de vil bli lagt til i bestillingsinformasjonen når du foretar en bestilling.');

jr_define ('VIEW_HOST_PROFILE', 'Host \' s profile ');

jr_define ('GUEST_PROFILE_TITLE', 'Gjesteprofil');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Min profil');

jr_define ('GUEST_PROFILE_WELCOME', 'Hei, la meg fortelle deg litt om meg selv.');
jr_define ('GUEST_PROFILE_MY_NAME', 'Mitt navn er');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'og jeg kommer fra');
jr_define ('GUEST_PROFILE_IN', 'region in');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Min private informasjon');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Vi gjør vårt beste for å validere gjeste- og vertsinformasjon, men du bør gjøre din egen aktsomhet og bestemme selv om denne personen er troverdig.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Mine eiendommer');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Mine anmeldelser');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Dette er hva jeg sa om denne egenskapen:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Jeg ga denne eiendommen en karakter på:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Mine anmeldelser');
jr_define ('GUEST_PROFILE_OF_ME', 'Hva andre sier om meg');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Hva denne verten sa om meg');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Gjennomgå gjest');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Min anmeldelse av denne gjesten');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Her er noen eksempler på gjesteanmeldelser for å få ballen til å rulle: <br/>

<ul>
<li> (gjestenes navn) var en glede å være vertskap for! De forlot plassen ren og var stille hele helgen. De hadde jevn kommunikasjon, og jeg gleder meg til å få dem til å bli hos meg igjen! </li>
    <li> Jeg elsket å ha (gjestenavn) fordi de var i stand til å behandle stedet med respekt, ha det hyggelig og nyte området. De var kjempebra med å leie plassen, og jeg håper jeg får være vert for dem igjen. </li>
    <li> Alle husordenene mine ble respektert med (gjestenavn), og de kunne enkelt komme inn og gå. Jeg elsket å ha dem der, da de var respektfulle og stille. Jeg anbefaler dem på det sterkeste til andre! </li>
</ul>

');
jr_define ('GUEST_PROFILE_UNKNOWN', 'Beklager, jeg kan ikke finne den brukeren. Mest sannsynlig har de ikke fylt ut kontodetaljene sine ennå.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres er bygget på Bootstrap -rammeverket, så du må bruke det på et tema basert på Bootstrap. Vi anbefaler et basert på Bootstrap 3. Hvis du ikke har tilgang til et tema, anbefaler vi at du bruker det Jomres Leohtian-temaet for Wordpress som du kan <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> last ned herfra. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN -statistikk for denne brukeren');

jr_define ('BOOKING_NOSHOW_INFO', 'Booking and No Show -informasjon hentes fra Jomres Syndicate Network ved bestillingstidspunktet. Den er hentet fra anonymiserte data og kan brukes av deg til å avgjøre om denne gjesten er en risiko for ikke å oppfylle bestillingen. Hvis systemet rapporterer at dataene er ukjente, det er sannsynligvis fordi dette systemet ikke gjenkjennes på nettverket. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Ukjent');

jr_define ('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define ('CMF_CONFIG_KEY', 'Channel Management Framework Key');
jr_define ('CMF_CONFIG_KEY_DESC', 'Lisensnøkkelen for Channel Management Framework. Du må oppgi denne nøkkelen for å kunne laste ned plugins for Channel Management Framework.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Eiendommen din er ikke godkjent');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Eiendommen din er ikke godkjent. Hvis du tror at dette ble gjort ved en feil, vennligst kontakt oss.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Er dette en barnestype?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Sett dette til Ja hvis denne gjestetypen vil bli klassifisert som en barnegjestype.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Hvis du vil belaste per person per natt, må du opprette noen gjestetyper.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Du kan lage så mange gjestetyper du trenger, prøv å starte med å lage bare en gjestetype som heter Voksen . La alle innstillingene være på standardverdiene. Hvis du for eksempel vil gi barn under 12 år en rabatt på 50%. Du vil opprette en ny gjestetype, og kall det Barn under 12. Sett alternativet Legg til varians? til - (negativt) og sett Varians til 50. Dette betyr når barn legges til i en bestilling, blir de belastet 50% av romprisen for rommet. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Sett priser manuelt");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Sett minimum netter manuelt");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Sett minimum netter");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Sett <em> pris per natt </em> etter ukedag");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Sett <em> pris per natt </em> etter datointervall");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Angi <em> minimumsnett </em> etter datointervall");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Datovelgeren og prisinnmatingen lar deg angi én pris for et gitt datointervall. Velg en start- og sluttdato, angi en pris, og klikk på knappen Sett pris per natt.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Datovelgeren og minimumsnettinndata lar deg angi én verdi for minimumsnettene for et gitt datointervall. Velg en start- og sluttdato, skriv inn et tall for minimumsnettene, og klikk på Angi minimum netter. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Bruk denne rullegardinmenyen til å bytte mellom å sette priser for individuelle datoer, til å angi minimumsnett for individuelle datoer. Du kan bruke <em> etter ukedag </em> -velgeren, <em> etter dato utvalg </em> plukker eller angi priser/minimumsnett ved å redigere datoene manuelt. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Bruk denne rullegardinmenyen til å endre mellom å sette priser for individuelle datoer, til å angi minimumsnett for individuelle datoer. Du kan bruke <em> etter datointervall </em> -velgeren eller angi priser/minimumsnett med manuelt redigere datoene. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Angi priser eller minimumsnett");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Angi <em> minimumsnett </em> etter ukedag");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Med ukedagene kan du angi et minimum antall netter for en gitt ukedag. Når du klikker på ukedagsknappen, vil alle ukens dager være satt til den minste nattinnstillingen. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Manuelt angitte priser/minimumsnett");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Angi priser");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Sett minimum netter");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Per natt");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Min netter");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Maks netter");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Her kan du opprette tariffer som er knyttet til romtypene du har i eiendommen din.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Mest brukte alternativer");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Instruksjoner");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Hvis du vil legge til forskjellige priser for forskjellige antall gjester, kan du <em> opprette mer enn flere tariffer for hver romtype </em> og ha forskjellige min/maks gjester verdier i disse tariffene. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Gi tariffen et navn, definer maksimalt antall netter og minimum og maksimum antall gjester som kreves i bestillingsskjemaet før tariffen tilbys. <br/> <br/> Bruk datovelgerpanelet for å legge til priser og minimumsnettinnstillinger til en dato, eller redigere inngangene direkte. Hvis du ikke vil at tariffen skal tilbys i det hele tatt på bestemte datoer, lar du prisen stå til 0 (null) på disse datoene. <br/> <br/> Du kan ha forskjellige minimumsnett på forskjellige datoer, så hvis du vil ha lengre bestillinger i løpet av festival-/konferanseukene, kan du angi at min netter skal være høyere i bare de periodene. <br/ > <br/> Hvis du belaster Per Person Per Pight (PPPN) kan du aktivere denne innstillingen i Innstillinger> Eiendomskonfigurasjon> Tariffer og valuta -fanen, og opprett deretter gjestetypene du trenger i Innstillinger> Gjestetyper. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Ekstra alternativer");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Dette er tilleggsalternativer som ikke er så ofte brukt, men som er tilgjengelige for deg. <br/> <strong> Ignorer PPPN </strong> Betyr Ignorer per person per natt. Du kan ha flere forskjellige tariffer. for samme romtype, for eksempel en av dem per person per natt, og en som ikke gjør det. <br/> <strong> Tillat helger </strong> Med alternativet Tillat helger får du muligheten til å lage en tariff som bare er tilgjengelig på hverdager, for eksempel hvis du vil ha en spesialpris for forretningsreisende. I så fall vil du sette alternativet til Nei og min netter til 1 og maks. netter, maksimalt 5. <br/> <strong> Helger bare </strong> Det eneste alternativet i helgene er det motsatte av alternativet Tillat helger. Det du anser for å være helgedager kan konfigureres i innstillingene for eiendomskonfigurasjon. Dette gir deg muligheten til å definere en helgepris som du kanskje vil tilbud for spesielle arrangementer. <br/> <strong> Innsjekking Ukedag </strong> Dette alternativet gir deg muligheten til å tvinge innsjekking til å bare være på bestemte dager i uken, og brukes best i forbindelse med kategorien Egenskaper> kategorien Bestillinger> Faste perioder. Flertallet av brukerne vil la dette alternativet stå satt til Alle. <br/> De to siste alternativene, <strong> Min. Rom allerede valgt </strong> og <strong> Maks. Rom som allerede er valgt </strong> er svært spesialiserte og nyttig for eiendommer med ekstremt kompliserte tariffer. <em> Med mindre du har et spesifikt behov, bør du la disse alternativene være i fred. </em> Bruk dem hvis du bare vil at denne tariffen skal tilbys når gjesten allerede har valgt N antall rom i bestillingsskjemaet, så f.eks. du kan ha en grunnleggende tariff der disse alternativene er stående som standard, og en andre tariff der de minst valgte alternativene er satt til 1, så vil denne andre taksten bli tilbudt i bestillingsskjemaet når et rom er valgt. " );
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Du kan opprette flere tariffer for samme romtype, slik at du kan opprette en tariff for min/maks dager på 1 - 7 og en andre tariff der min dager er 7, maks dager 14 og så videre. Dette lar deg lage prisordninger så enkle eller så kompliserte du trenger. Det lar deg også opprette flere tariffer med forskjellige betingelser, slik at du kan ha et andre sett med tariffer der prisen er lavere for Bed & Breakfast, og et annet sett med dyrere takster for seng, frokost og kveldsmåltid. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Sett bare datovelgerdager");

jr_define ('_JOMRES_STOP_READTHISFIRST1', "Stopp!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Takk for at du installerte Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Eiendomsadministrasjon utføres på offentlige sider, ikke i administratorområdet.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Hvis du ikke er kjent med Jomres, kan du gå til Hjelp -delen> Komme i gang -siden.");


jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Bli med i Jomres -syndikatet");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Når du har konfigurert nettstedet og er klar til å begynne å motta besøkende, kan du bli medlem av Jomres.net -syndikatet og få eiendommene dine oppført på andre Jomres -nettsteder.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Du trenger minst ett rom av en av følgende typer før du kan opprette en tariff:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Gå til Innstillinger> Rom og opprett et rom først, når du har gjort det, vil du kunne opprette en tariff for den romtypen.");

jr_define ('JOMRES_PLATFORM', "Jomres Platform");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Tilkoblet");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Sett dette til Ja hvis du allerede har koblet din Stripe -konto til Jomres -plattformen.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live Account number");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Dette er din Stripe -konto -ID som du finner i Stripe Dashboard under Innstillinger> Kontoinformasjon og ser ut som acct_xxxxxxxxx Du vil bruke dette feltet hvis du har flere Jomres -installasjoner og du vil bruke den samme kontoen på tvers alle nettstedene, og du har allerede koblet til oss. Hvis du ikke har koblet til Jomres -plattformen, er det ikke tilstrekkelig å angi detaljene dine her. I stedet kan du gå til menyen alternativet Bli tilkoblet på verktøylinjen under Hjelp -delen. Hvis du vil for å teste betalinger, i kategorien Feilsøking i nettstedskonfigurasjon angi nettstedet ditt fra produksjon til utvikling. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live secret key");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Gå til utviklere> API -nøkler i Stripe Dashboard for å finne dine hemmelige nøkler. Disse brukes av systemet for å bekrefte bestillingsdata som returneres fra betalingsskjemaet er gyldig og at innskudd er betalt før lagring av bestillingen . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Stripe test secret key");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standard Tariff Mode');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Hvor mange personer har denne eiendommen plass til?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Antall gjester i din daglige pris');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Pris for ekstra voksne');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Barn');


jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Per person per natt?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 day modifier');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Rabatt på daglig pris hvis bookingen er på 7 dager eller mer. La dette settet være null hvis du ikke vil at rabatten skal brukes.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 day modifier');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Rabatt på daglig pris hvis bestillingen er på 30 dager eller mer. La dette settet være null hvis du ikke vil at rabatten skal gjelde.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Voksne');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Pris basert på 2 voksne');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Booking discounted from');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'to');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'fordi bestillingen er større enn 7 dager.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'fordi bestillingen er større enn 30 dager.');


jr_define ('JOMRES_CITY_TAX_HEADING', 'Byavgifter');
jr_define ('JOMRES_CITY_TAX_VALUE', 'By tax value');
jr_define ('JOMRES_CITY_TAX_METHOD', 'Skatteberegningsmetode');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Single fee');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Per natt');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per gjest');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Per gjest per natt');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Prosentandel av bestillingsverdi');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Rengjøringsgebyr');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Rengjøringsgebyrkostnad');


jr_define ('JOMRES_COMPATABILITY_MODE', 'Force Compatability property configuration mode?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Kompatibilitetskonfigurasjonsmodus tvinger flere ting til å skje. I eldre versjoner av Jomres kan eiendomsforvaltere velge hvilken tarifferedigeringsmodus som skal brukes, og en rekke andre innstillinger (hvorav noen kan virke forvirrende) kan ha har vært tilgjengelig for dem. Aktivering av kompatibilitetskonfigurasjon tvinger alle nye eiendommer til å bruke bare standard tariffredigeringsmodus, som modellerer booking.com -eiendommens konfigurasjonsfunksjonalitet med hensyn til priser, barnepris osv. Det anbefales at for installasjoner som ble opprettet etter 9.22 .0, bør dette alternativet settes til Ja, men for eldre installasjoner er det opp til deg å avgjøre om nye egenskaper skal settes automatisk til kompatibilitetsmodus når de opprettes. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Tar du imot barn under 18 år?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Sett dette alternativet til Ja hvis du tillater barn. Hvis ja, vil du i Innstillinger -menyen ha et alternativ som heter Barnepolicyer hvor du kan redigere barnrelaterte innstillinger.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Barnepolicyer');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'I hvilken alder er barn tillatt?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Per barn, per natt');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Per barn, per opphold');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Barnetakster');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'New child rate');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Edit child rate');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Opprett gratis eller betalte barnesatser her. Priser gjelder bare når du har opprettet belegg for romtyper.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Alder fra');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Alder til');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'per natt eller per opphold?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Hvis null eller ikke er angitt, vil barn i dette aldersområdet være gratis.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Alder ved innsjekking');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Alder');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Occupancy levels');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maksimum voksne');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maksimalt antall barn');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maksimal belegg');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Edit occupancy level for:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Rediger belegg for denne romtypen. Ikke ta med gjester som sover i barnesenger (de legges til ved å opprette et ekstra)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Hvor mye skal de belastes for hver ekstra voksen?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Ekstra voksne');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'You have not configured child rates yet.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Still child rate (s) now');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'You have configured your property to allow children but you have not set any occupancy levels for children yet.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Still occupancy levels');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Hver gang du redigerer et rom eller din eiendomstype, bør du kontrollere og oppdatere beleggsnivåene for eiendommen/rommene dine, da disse påvirker antall gjester som kan godtas i bestillingsskjemaet.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Voksne');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Children');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Admin options level');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres har mange meny- og konfigurasjonsalternativer du kan bruke når du konfigurerer nettstedet. De aller fleste av dem trenger du aldri å endre, slik at de er skjult som standard. Du kan velge å vise disse alternativene ved å angi nivået Admin Options. Grunnleggende nivå viser deg akkurat det du trenger når du skal sette opp et nettsted for første gang. Felles nivå viser deg de alternativene som oftest endres, og Alt viser deg alle mulige innstillinger og menyalternativer i administratorområdet. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Everything');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Kan vi samle informasjon om hvordan du bruker Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Vi ønsker å samle inn informasjon om hvordan du bruker Jomres. Ingen personlig identifiserbar informasjon vil bli lagret, bruk blir anonymisert og bare brukt for å forstå hvordan folk bruker Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Jepp, det er ok');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Nei, jeg er ikke enig');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Vil du ta bestillinger for mer enn én eiendom?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres kan brukes til enkeltsider eller flere eiendommer. Hvis du vil ta bestillinger for bare en eiendom, vil mange alternativer være overflødige og potensielt forvirrende. Du kan endre denne innstillingen senere i Innstillinger> Nettsted. Fanen Konfigurasjon> Portalfunksjonalitet. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Bare en eiendom');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Jeg viser mer enn én eiendom');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Hvilken versjon av Bootstrap -rammeverket støtter malen/temaet ditt?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Hver versjon av Bootstrap -rammeverket krever litt forskjellige HTML -koder. Jomres har tre sett med Bootstrap -kompatible malsett, ett for hver Bootstrap -versjon. Du må sørge for at du konfigurerer den til å bruke det riktige malsettet. Hvis Hvis du bestemmer deg for å bruke en mal/et tema senere med en annen Bootstrap -versjon, kan du endre Bootstrap -malsettet som Jomres skal bruke i Admin> Jomres> Innstillinger > Kategorien Diverse. <br/> <br/> Joomla 3 er som standard distribuert med Bootstrap 2, Joomla 4 bruker Bootstrap 5. Jomres Leohtian -mal (Joomla) og tema (Wordpress) bruker Bootstrap 3. Ulike maler/temaer kan være distribuert med sine egne Bootstrap -filer, så hvis du er i tvil, kan du kontakte utvikleren av malen/temaet ditt. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Fjern desimaler fra utgangspriser?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Apply group by fix?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Noen mysql -installasjoner kan ha et problem med Jomres -forespørsler på siden Listeegenskaper, Listegjester og Listefakturaer. Hvis disse sidene sier at de viser X av Y -resultater, men ingenting vises i listen, kan du angi dette alternativet til Ja kan løse problemet. Det vil ikke gjøre det hvis du er på delt hosting og hostingtjenesten ikke tillater mysql -brukeren å sende kommandoen "SET GLOBAL sql_mode =". ');


jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Apply group by fix?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Noen mysql -installasjoner kan ha et problem med Jomres -forespørsler på siden Listeegenskaper, Listegjester og Listefakturaer. Hvis disse sidene sier at de viser X av Y -resultater, men ingenting vises i listen, kan du angi dette alternativet til Ja kan løse problemet. Det vil ikke gjøre det hvis du er på delt hosting og hostingtjenesten ikke tillater mysql -brukeren å sende kommandoen "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Dette er en kanaleiendom, den kan ikke administreres lokalt. Gå til rammesiden for kanaladministrasjon for å finne egenskapens lenke for ekstern administrasjon');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "No Bootstrap in theme");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Linker til sosiale medier');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Legg inn navnene på sosiale medier-kontoer her, for eksempel "jomres", ikke hele url\'en');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Kommaseparert liste over språk organisasjonen din snakker');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url til organisasjonens logo');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres oppdatert');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Det er en ny versjon av Jomres tilgjengelig. Du må oppdatere før du kan fortsette å bruke Jomres ettersom oppdateringer forbedrer funksjonaliteten og sørger for at installasjonen din forblir sikker.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Oppdater Jomres nå');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Plugin-oppdateringer');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Det er nye versjoner av plugins tilgjengelig i plugin-behandlingen. Du må oppdatere alle plugins før du kan fortsette å bruke Jomres ettersom oppdateringer forbedrer funksjonaliteten og sørger for at installasjonen din forblir sikker.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Plugins for å oppdatere');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Hvis lisensen din ikke lenger er gyldig, kan du få en ny lisensnøkkel fra nettstedet vårt.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Oppdater plugins');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Få ny nøkkel');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Lagre ny nøkkel');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Egenskapstype bilder");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Trenger du hjelp til å bestille?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Ring vårt kundeserviceteam på nummeret nedenfor for å snakke med en av våre representanter som vil hjelpe deg med alle dine feriebehov.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Hvorfor bestille hos oss?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"Vi tilbyr de beste bookingprisene");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"Vi har de best prisede eiendommene på markedet for øyeblikket.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Ingen bestillingsgebyrer. Spar penger!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Flott utvalg av egenskaper");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," egenskaper");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," gjesteanmeldelser");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Vi er alltid her");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Ring eller send e-post til oss, når som helst");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Få 24-timers støtte før, under og etter turen");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Sosiale medier");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Finn oss på sosiale medier");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Enestående");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Eksepsjonell");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Fantastisk");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Superb");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastisk");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Veldig bra");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Bra");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Ny oppføring");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Rabattert");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Hvor vil du?');
	jr_define( 'DATA_SOURCES_TITLE', "Oppdater datakilder" );
	jr_define( 'DATA_SOURCES_TITLE_INFO', "Datakilder oppdateres. Datakilder brukes av inndatafelt for autofullføring i søkewidgeten og de oppdateres vanligvis automatisk, men denne siden tvinger dataene til å bli oppdatert manuelt hvis nødvendig." );

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "For å sende en token-forespørsel, send forespørselen til denne url-en");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Hovedvisningsegenskapsskriptet");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Egenskaps-uid for eiendommen som skal vises");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Standardmalen er property_details.html, med dette argumentet kan du definere en annen mal for egenskapsdetaljer som skal vises.");
	jr_define('JOMRES_UPDATES_TITLE', 'Jomres-oppdateringer');
	jr_define('JOMRES_UPDATES_INFO', "Denne siden kan laste ned og installere den nyeste versjonen av Jomres for deg. Den bruker sin egen funksjonalitet og ikke den til verts-CMS-en, så hvis det oppstår et problem under oppdateringen av vert-CMS-en kan du bruke denne siden til å tvinge frem en reinstallering av den nyeste versjonen av Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Egenskapsforvaltere kan bruke redigeringsmodusen i frontend for å tilpasse strenger for hver eiendom, men dette kan bare fungere hvis WordPress Permalink-innstillingen er satt til Vanlig (http://www.domain.com/?p=123). Når du har gjort det, vil grensesnittbrukere kunne tilpasse strenger, som romnavn og andre etiketter, som er spesifikke for unike egenskaper. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Etikettredigeringsmodus');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Denne funksjonen brukes til å endre vareetiketter, vanligvis til forskjellige språk.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Redigeringsmodus lar deg gi nytt navn til etiketter som er unike for individuelle eiendommer. Når du bruker redigeringsmodus for å gi nytt navn til en etikett, vil endringen bare vises på den eiendomsoppføringen. For eksempel på én eiendom du kanskje vil ønske å bruke ordet "Priser" og på en annen ordet "Rates". Ikke alle etiketter kan endres, for eksempel er romtypenavn etiketter for hele nettstedet, så de kan ikke endres, men vanligvis alt som er unikt for en individuell eiendom kan endres.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Hvis nettstedet støtter flere språk, mens du bruker ett språk, kan du opprette et element som er unikt for en individuell egenskap. Når du deretter endrer ditt aktive språk, kan du bruke redigeringsmodusen til å gi nytt navn til den etiketten, legge inn en passende oversettelse på gjeldende språk. Du kan fortsette å endre det aktive språket for å angi en passende oversettelse for den etiketten for hvert språk nettstedet støtter.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Etikettredigeringsmodusbryter');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'I dette skjermbildet ser vi redigeringsmodusbryteren. Redigeringsmodusen er AV og etikettene vises som normalt: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Etikettredigeringsmodus aktivert');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'I dette skjermbildet ser vi at når du er i redigeringsmodus, er etikettene du kan gi nytt navn uthevet:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Velg elementet som skal endres');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Når en etikett er valgt vises en popup:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Endre etiketten');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Bruk det lille skjemaet for å endre etiketten. Klikk haken for å fullføre, eller klikk X for å avbryte redigeringen:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Etikett endret');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Når du har lagret endringen, blir etiketten oppdatert på siden. Du kan deaktivere redigeringsmodus nå:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Oversettelser');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'På denne siden kan du oversette etiketter fra ett språk til et annet. Når du besøker siden vil du se strenger du allerede har opprettet og verdien deres på hvilket språk du bruker for øyeblikket. Øverst angir du målspråk. Klikk deretter på etiketten for etikettene du vil oversette, og en popup lar deg legge inn den nye oversettelsen. For lengre tekstlinjer kan du lime inn teksten fra en annen kilde. Husk at all HTML vil bli fjernet .<br/>
Du kan la målspråket settes til ditt nåværende språk og bruke denne siden til å endre navn på elementer her, i stedet for å besøke deres individuelle sider.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Målspråk');

	jr_define('API_CLIENTS_INFO', 'API-klienter er klient-ID/hemmelige nøkkelpar som lar eksterne systemer bruke API-funksjoner som du gir dem tillatelse til å bruke. På denne siden kan du opprette så mange klient-/hemmelige nøkkelpar som du trenger, hver med hvilken som helst kombinasjon av tillatelser du trenger.');
	jr_define('CLIENT_TOKEN', 'Tilgangstoken');
	jr_define('CLIENT_TOKEN_INFO', "Tilgangstokener kan bes ved hjelp av klient-ID og hemmelig. Noen klienter kan allerede ha opprettet et tilgangstoken for det, i så fall kan du bruke dette tilgangstokenet. Hvis du tror at tokenet kan ha blitt kompromittert, eller du bare vil endre det, kan du utløpe klientens tokens. Alle tokens knyttet til klienten/hemmelige paret vil bli utløpt.");
	jr_define('DELETE_TOKEN', 'Utløpssymboler');