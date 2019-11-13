<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
 
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
##################################################################
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
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Tusen takk for din bestilling/forespørsel hos oss!<br><br> <b>Vi gjør oppmerksom på at bestillingen ikke er endelig før du har mottatt bekreftelse på e-post.</center>');
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
jr_define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Det ser ut som om systemet har logget deg ut pga inaktivitet</b> Logg inn igjen og prøv på nytt.');
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
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"Hvis du ikke har tilgang til cron-jobber, sett denne til Minikomponent. Hvis ikke, lag en cron-jobb og be den kjøre <br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1> /dev/null</i> ");
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
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','Hvis du i bestillingsskjemaet bruker “klassisk” visning, så tilbyr du individuelle enheter til gjestene. Med visning av enhetstyper velger gjestene antall enheter av type X (f.eks 2 x dobbeltrom) i stedet');
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
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','For å automatisk sette valutakode i nedtrekksmenyen kan systemet bruke en gratis tjeneste kalt IPinfoDB for å finne gjestens land. For å bruke må du registrere en API-nøkkel hos <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> først.');
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
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2." );
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
jr_define('_OPENEXCHANGE_API',"Open Exchange Rates API nøkkel");
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can register for a free key at https://openexchangerates.org/signup/free (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
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
jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.' );
jr_define( '_JOMRES_SRP_RESOURCE_TYPE', 'Ressurstype' );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK", "You haven't yet set your property resource type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches." );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK", "Give your property a resource type" );
jr_define( "_JOMRES_EMAIL_TEMPLATES_TITLE", "Epost-maler" );
jr_define( "_JOMRES_CONTACT_SETTINGS", "Kontaktinnstillinger" );
jr_define( "_JOMRES_CONTACT_SETTINGS_DESC", "From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners." );
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS", "Override listings contact details?");
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC", "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again." );
jr_define( "_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.");
jr_define( '_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Se gjennom bestillingsforespørsel' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Bekreft bestillingsforespørsel' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_AMEND', 'Endre bestillingsforespørsel' );
jr_define( '_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending' );
jr_define( '_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending' );
jr_define( '_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?' );
jr_define( '_JOMRES_TRACKING_ENABLE_DESC', 'Set this option to Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.' );
jr_define( '_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.' );
jr_define( '_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details" );
jr_define( '_JOMRES_CLEAR_GUEST_DETAILS', " -- Ny gjest -- " );
jr_define( '_JOMRES_CHARTS', 'Statistikk' );
jr_define( '_JOMRES_CHARTS_SELECT', 'Velg statistikk...' );
jr_define( '_JOMRES_CHART_BOOKINGS_DESC', 'Inntekt per år/måned' );
jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK", "Ok, let's get started. First you need to create some rooms for this property." );
jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK", "Create some rooms now" );
jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK", "Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings." );
jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK", "Upload an image" );
jr_define( "_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK", "Create some tariffs" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG", "What style of property is this?" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_DESC", "Is this property type a hotel type property, where you rent out multiple rooms in the property, or a villa type property, where you rent out the property in it's entirety? If the property type is intended for properties that don't offer room or property booking functionality ( like tours ) choose Neither." );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_HOTEL", "Hotel/Bed & breakfast/Pension" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_VILLA", "Villa/Cottage/Apartment" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Both" ); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable 
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "Hotel or Villa?" );
jr_define( "_JOMRES_ADDRESS_SANITY_CHECK", "You'll need to complete your address details so that your guests can find you when they come to stay." );
jr_define( "_JOMRES_ADDRESS_SANITY_CHECK_LINK", "Update your address" );
jr_define( "_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED", "Oops, it looks like you might have forgotten to complete all the fields." );
jr_define( "_JOMRES_CONTANT_US", "Kontakt oss" );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_TITLE", "Welcome to your new online listing for " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_1", "Hi, and welcome to your new property on " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_2", "You recently added a new property to our website, and we'd like to welcome you to the family." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3", "You can see your new dashboard " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT", " here " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4", "Once you've setup your property you can see how it looks to site visitors by visiting " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT", " your front page." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_5", "(it's not published, so site visitors can't see it yet)." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_6", "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7", "If you have any questions at all, please " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT", "contact us" );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_8", "and we'll be delighted to answer all your questions." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE", "All the best, our team at " );
jr_define( "_JOMRES_JINTOUR_SANITY_CHECK", "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours." );
jr_define( "_JOMRES_JINTOUR_SANITY_CHECK_LINK", "Let's create some tours!" );
jr_define( '_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location' );
jr_define( '_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.' );
jr_define( 'COMMON_DOWNLOAD', 'Last ned' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.' );
jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap er ikke aktivert!' );
jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.' );
jr_define( '_JOMRES_DASHBOARD_DRAG_TRASH', 'Dra bestillinger til dette feltet for å kansellere dem' );
jr_define('_JOMRES_LAT', 'Breddegrad (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Lengdegrad (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define( '_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types' );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs." );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Use the New button to create new Room Types." );
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a <a href='https://console.developers.google.com/apis/api/maps_backend/overview' target='_blank'>Google Maps key</a> set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres. Once you have your key, you can enter it into Site Configuration > Google map Options tab.");
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
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Something guest related');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah ');
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
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Utleiesteder');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have an <a href='http://ipinfodb.com/account.php' target='_blank'>IP Detection API Key</a> set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an <a href='https://openexchangerates.org/account/apps' target='_blank'> Open Exchange Rates API Key</a> set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an Open Exchange Rates API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Tillatelsesnummer');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Enkelte land krever at du må vise tillatelsesnummer for det du leier ut. Legg det inn her hvis du har et slikt nummer.');
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
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Turistskatt');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Sats for turistskatt');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Sett satsen for turistskatt. Turistskatten blir kun kalkulert etter at bestillingen er gjort, og legges til i bookingbekreftelsen under ekstrabestillinger.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Prosentsats?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Sett denne til Ja hvis skatten er prosentvis eller Nei for flat rate.");
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
jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Prosentvis belegg");
jr_define('_JOMRES_SELECT_WIDGETS',"Velg widgets");
jr_define('_JOMRES_INTERVAL',"Periode");
jr_define('_JOMRES_TIMELINE',"Tidslinje");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Betalingsmåter');
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Kjøp Jomres");


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


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Grense for anmeldelser' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Bruk denne innstillingen for å begrense antall anmeldelser som vises på siden for detaljer for utleiested.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Vis alle anmeldelser' );

jr_define( 'VIDEO_TUTORIALS', 'Video-opplæring' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES', 'Utleiekategorier' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Endre utleiekategori' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum forskudd' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Hvis det kalkulerte forskuddet er mindre enn dette tallet, så settes forskuddet til denne verdien i stedet. Dette tallet kan også bli overskrevet hvis det ikke passer med sidens minimumsinnstilling for forskudd. Sett til 0 for å ikke bruke innstillingen." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importer eksisterende bildedetaljer til database');

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

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

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
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Unable to unpublish property type because it is still be used by some properties. You must change these properties to another property type first before attempting to unpublish this one. Property UIDs that prevent the change : ');

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


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for this user');

jr_define('BOOKING_NOSHOW_INFO', 'Booking and No Show information is pulled from the Jomres Syndicate Network at booking time. It is taken from anonymised data and can be used by you to decide if this guest is a risk of not fulfilling the booking. If the system reports that the data is unknown, it is probably because this system is not recognised on the network.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');
