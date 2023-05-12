<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Brza rezervacija');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Prikaži profile');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Opšte konfiguracije');
jr_define('_JOMRES_COM_MR_BACK', 'Nazad');
jr_define('_JOMRES_COM_MR_YES', 'Da');
jr_define('_JOMRES_COM_MR_NO', 'Ne');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Novo');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Novi objekat');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Novi gost');
jr_define('_JOMRES_COM_MR_SAVE', 'Sačuvaj');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Ime');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Dolazak');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Odlazak');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Korisničko ime');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Pristupni nivo');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Korisnik izmenjen');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Sve rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Izmeni rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Dolazak/Odlazak');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gost');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Soba');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Plaćanje');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Ime');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Prezime');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Specijalni zahtevi');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Neki specijalni zahtevi mogu zahtevati dodatna plaćanja.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Poništi rezervaciju');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Broj kuće ili naziv kuće');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ime');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Grad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Poštanski broj');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Tel');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilni');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Ne možete poništiti ovu rezervaciju jer je gost već prijavljen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depozit nije plaćen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potvrdi poništenje');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervacija poništena');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dana do dolaska');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tip rezervacije');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Crno');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepcija');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Ime sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Soba');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Sprat');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Aktivirati nedozvoljeni pristup ?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max osoba');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Tip sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Opis tipa sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Lista opcija sobe');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depozit plaćen');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Unesite depozit');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Ukupno za naplatu');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Oznaka depozita');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervacija');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depozit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depozit sačuvan');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Naše sobe');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Objekat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tip sobe');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Izmenite podatke');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Ime');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Prezime');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Kuća');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Grad');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Poštanski broj');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Tel');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobilni');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Odaberite');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Broj dana');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Ukupno');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Prikaži podešavanja soba i objekata');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Sobe');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Opcije soba');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Tipovi soba');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Objekat');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Opcije objekta');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tip');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Broj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Sprat');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Maksimum osoba');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Opcije');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Izmeni opcije');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Opcije sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Opis opcija');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Opcija sobe dodata');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Opcije sobe izmenjene');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Tip sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Tip sobe - skraćenica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Tip sobe - opis');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tip sobe dodat');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Izmeni detalje');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Grad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Država');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Poštanski broj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telefon');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Web sajt');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Opcije');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Objekat izmenjen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Opcije objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Opcije objekta - skraćenica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Opcije objekta - pun opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Opcija objekta je izmenjena');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarife');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tarifa - naziv');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Važi od');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Važi do');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tarifa za noć');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Minimum dana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Maksimum dana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Minimum osoba');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Maksimum osoba');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Tip sobe');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorišite PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Dozvoli vikende');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Izmeni detalj');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Dupliraj detalj');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa izbrisana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Izmeni tarifu');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervacija sačuvana');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Prijavite gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Odjavite gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Lista rezervacija');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Tabla');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Gosti - admin');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Objekti - admin');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Provera dostupnosti');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Ime');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Prezime');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Broj kuće');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Grad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Poštanski broj (PAK)');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Tel');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilni');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Nema soba koje sadrže sve parametre koje ste vi tražili');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Hvala vam što ste odabrali nas i nadamo se da ćete uživati u boravku.<br><br> Ovo je samo preliminarna rezervacija, i neće biti potvrdjena dok ne primite potvrdno pismo.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Prijavite gosta ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gost je prijavljen ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Gosti za odjavu ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Suplementi');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarife & Valuta');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload fajlova');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Suplementi za jednu osobu');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Proverite da li je postavljeno na DA ako želite da vršite naplatu suplimenata za jednu osobu');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Troškovi dodataka po osobi:');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Da li želite da depozit bude u procentima?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Da li depozit mora biti procenat cele rezervacije? Ako ne želite, onda je depozit definisane veličine');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Veličina depozita u procentima');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Po osobi, po noćenju');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Odaberite opciju DA ako želite da naplaćujete po osobi po noćenju. Ako ne želite, troškovi će biti izračunati po osnovi po sobi po noćenju');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Veličina fajla');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. veličina slike u kilobajtima');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Rezervisano');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalji rezervacije');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Podsećamo vas da je rezervacija legalni ugovor, pa ako ste zbog nekog razloga poništili rezervaciju ili skratili vaš boravak moraćete i dalje platiti ceo iznos vašeg ugovora.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Poništenje i smanjenje naplate</i> Ako otkažete vaš odmor vaše otkazivanje mora biti potvrđeno pismeno. Troškovi poništenja su sledeći:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Do 14 dana');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Štampaj garantno pismo');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Štampaj predračun');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Broj noćenja: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena po noćenju: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'UKUPNO');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Stampaj predracun');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Dodaj uslugu na račun');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Opis usluge');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Cena usluge');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Ostali elementi koji su naplaćeni');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Elementi dodati na račun');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Dodavanje slika');
jr_define('_JOMRES_FILE_UPLOAD', 'File Upload-ovan');
jr_define('_JOMRES_COM_A_ODDS', 'Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Izbriši ovu sliku');
jr_define('_JOMRES_FILE_DELETED', 'Fajl izbrisan');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Izbriši');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nije mogucć ukloniti ovu sobu, postoje rezervacije za nju. Poništite rezervacije pa pokušajte ponovo.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Soba je izbrisana');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Izbrišite opcije sobe');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nemoguce ukloniti opciju ove sobe, dodijeljena je nekim sobama. Uklonite tu opciju sa tih soba i pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Opcija sobe izbrisana');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Izbriši opciju objekta');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nemoguce ukloniti opciju ovog objekta, dodijeljen je nekom objektu. Uklonite tu opciju sa tih objekata i pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Opcija objekta je izbrisana');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Izbrisi tip sobe');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Tip sobe izbrisan');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Izbriši objekat');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Objekat izbrisan');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nemate prava da izbrisete ovaj objekat.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Širina velike slike');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Opis objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Vreme prijavljivanja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivnosti u okolini');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Uputstva za vozače');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aerodromi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Ostali transporti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Uslovi otkazivanja');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Posetioci mogu rezervisati online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Postavite opciju na DA ako želite da posetioci rezervišu sobe online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervacije su za fiksni period');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Postavite opciju na DA, i rezervacije će se uzimati za fiksni period. Ako je postavljeno na NE, onda vam "definisani dan za dolazak" neće biti postavljen na DA (ukoliko zelite da prisilite goste da dodju na odredjeni dan) u suprotnom nećete imati dovoljno linkova i prikaza objekta koji su slobodni u kalendaru.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Period rezervacije: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Rezervisane sobe');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximalni period, primer 3x 7 rezervacionih perioda = 21 dan');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Da li je ovo apartman/letnjikovac/vila?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Prikaži rezervaciju');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Potvrdi rezervaciju');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Ponedeljak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Utorak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Sreda');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Četvrtak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Petak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Subota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Nedelja');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Pon');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Uto');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Sre');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Čet');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Pet');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sub');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Ned');
jr_define('_JOMRES_COM_A_AVLCAL', 'Dostupnost');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Boja fonta za trenutni datum');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Boja fonta za dane u prikazanom mjesecu ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Boja fonta za dane kopji nijesu u prikazanom mjesecu');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Boja polja za dane kada je objekat/soba dostupna');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Boja polja za dane koji nijesu prikazani u mjesecu');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Boja polja za zauzete dane');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Boja polja za uslovno rezervisane sobe (rezervacije za koje nije uzet depozit)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Boja polja za prosle dane');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Zauzeto/Nije dostupno');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Dostupno za rezervacije');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Uslovna rezervacija');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Prijavljeni dan dolaska');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Samo za sajtove koji koriste fiksirani period rezervacije. Odaberite dan kada gosti moraju doći.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fiksirani dan dolaska');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Dani ostanka');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Prikazati kalendar dostupnosti?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Postavite ovu opciju na DA ako želite da prikažete kalendar dostupnosti');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Dostupnost');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Kliknite na slobodni datum ako želite formu za rezervaciju.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Crne rezervacije');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nove crne rezervacije');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Izbrišite gosta');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gost izbrisan');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Nije moguće izbrisati gosta, ima rezervacije na svoje ime. Poništite rezervacije pa pokušajte ponovo.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Bilo koji');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Kalendar format prikaza');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Kalendar format unosa');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Ovo dozvoljava korisniku da promijeni format unosa datuma u Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Fiksirani period rezervacija dozvoljava kratke prekide');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Dužina kratkog prekida');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Objavljeno');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit trail');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Korisnik (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filter na datum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Dolazak se očekuje');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Dolazak danas');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Trenutni Gosti');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Odlasci danas');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Rok za odlazak istekao');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Nije stigao');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Napravljena soba');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Izmenjena soba');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Izbrisana soba');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Napravljena opcija sobe');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Izmenjena opcija sobe');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Izbrisana opcija sobe');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Napravljen objekat ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Izmenjen objekat');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Izbrisan objekat');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Izmenjena podešavanja objekta');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Objavljeni objekti');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Napravljene tarife');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Izmenjene tarife');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Dodata naplata servisa');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Gost prijavljen');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Unesen depozit');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Napravljen gost');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Izmenjen gost');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervisana soba');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Kreirano extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Izmenjeno extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Izbrisano extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Objavljeno extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Unesena crna rezervacija.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Crna rezervacija je izbrisana.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Opis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra izmenjeno');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Izmeni opciju');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra izbrisan');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Extra administracija');
jr_define('_JOMRES_COM_A_EXTRAS', 'Prikaži extra (dodaci koje naplaćujete - bazen, đakuzi, parking...) za vreme rezervacije?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Postavite opciju na DA ako želite da prikažete gostu extra - dodatne opcije koje naplaćujete');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Opciono extra.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Crna rezervacija startni datum');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Datum nastavka servisa');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Crne rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Postoji greska prilikom rezervacije ovih soba, jedna ili vise soba koje ste odabrali nije slobodna.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Sobe ukljucene u crnu rezervaciju');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nema crnih rezervacija');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Broj zvezdica');
jr_define('_JOMRES_COM_A_RESET', 'Poništiti');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervacija poništena');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Trazi ovde za:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Simbol valute');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Kod valute');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Detalji');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Ograničite rezervacije unapred?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Postavite opciju na Da ako zelite da ogranicite rezervacije (koristite sledece polje da postavite ogranicenje u danima). Ako postavite opciju na Da i ako gost pokusa da rezervise vise od n dana unaprijed onda ce njegov dan dolaska biti postavljen za danas');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Dani za rezervaciju su unapred ograničeni na:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Taksa');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Taksa Sobe');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fiksna vrednost takse');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Procenat takse');
jr_define('_JOMRES_COM_A_EUROTAX', 'Taksa');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Procenat takse');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Sačuvaj sve zapise');
jr_define('_JOMRES_FRONT_TARIFFS', 'Naše Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Ime Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Opis Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Tip sobe');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Dostupna od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Dostupna do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Po osobi po noćenju');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Po noćenju');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Ne uključujuci vikende');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum dana');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maximum dana');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min osoba');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max osoba');
jr_define('_JOMRES_FRONT_PREVIEW', 'Pregled');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Izmene uključene?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Tekst je izmenjen.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Izmeni jezik');
jr_define('_JOMRES_FRONT_PTYPE', 'Tip objekta');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Lista tipova objekata');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Izmeni tipove objekata');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Tip objekta');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Opis tipa objekta');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Tip objekta sačuvan');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Tipovi objekata izbrisani');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Podsetnik za plaćanje');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Nema extra servisa koji će se dodati na račun');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Depozit');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Pun iznos');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Iznos naplaćen prilikom rezervacije');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Koristite ovu opciju da biste izabrali šta želite da naplaćujete prilikom rezervacije. Odaberite opciju DEPOZIT ako naplaćujete depozit, ili odaberite opciju PUN IZNOS ako želite da gostu bude naplaćena ukupna suma boravka iz rezervacije. Imajte na umu da ukupna suma boravka može biti plaćena prilikom dolaska goska.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Meseci za prikaz');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'U dostupnosti sobe, koliko meseci na kalendaru će se prikazivati?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Payment Gateways');
jr_define('_JOMRES_COM_A_CANCEL', 'Poništi');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Molim vas odaberite sobu ili sobe koje ne želite da budu u upotrebi, i potrebne datume. <br>Ako soba nema oznaku, onda ne može biti korišćena za crne rezervacije dok neka od rezervacija ne bude otkazana ili završena.<br/> Kada ste odabrali tražene datume, kliknite na plavo dugme "apply" da proverite dostupnost sobe. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Izgleda da ste izlogovani zbog neaktivnosti</b> Molimo vas ulogujte se ponovo.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Razlog');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Koristi payment gateway?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Molim vas odaberite način plaćanja.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway uključen?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Izmenjeno podesavanje plugin-a');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Uneseno podesavanje plugin-a');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Spoljni link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Stavite link do vaše veb stranice ovde. Ako postavite link do vašeg web sajta, molimo vas da i na vašem veb sajtu postavite link ka portalu pakujse.rs. (to može bi i link koji vodi do vašeg objekta na našem portalu)');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Izmeni kreditnu karticu');
jr_define('_JOMRES_COM_A_EDITICON', 'Izmeni velicinu ikonice');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slajd-šou');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Prikaži link za slideshow?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Prikaži slideshow u okviru?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slajd-šou');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Prikaži link za tarife?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popup dozvoljen?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Dodaj slideshow slike');
jr_define('_JOMRES_A_TABS_MISC', 'Misc');
jr_define('_JOMRES_A', 'Sajt konfiguracija');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Koristi global opcije objekta');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Odaberite plugin za pretragu koji želite da koristite.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Žao nam je, vaša pretraga nije dala rezultate. Molimo vas, izmenite pretragu i pokušajte ponovo.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Da li ste sigurni da to želite da uradite?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervišite sobu');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezerviši');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Prikazati tarife?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Cene i detalji');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Kliknite za sobe i dostupnost');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Prikazati informaciju o Adresi ispod ovog linka');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Prikazati detaljnu informaciju o objektu ispod ovog linka');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Prikazati sobe i dostupnost ispod ovog linka');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Flat rate tarife');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Srednje');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Odaberite model tarifiranja koji želite da koristite');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Imate dva izbora za metod kalkulacije tarifa. Prvi, 'flat rate' metod dozvoljava vam da ponudite razne tarife gostima i cena tokom celog boravka biće ista. Ovo je korisno ako želite da ponudite više različitih tarifa za isti dan, npr. Tarifa - Spavanje i doručak ili tarifa B&B (noćenje sa doručkom). Odaberite 'srednje' tarife ako želite da podesite vaše cene zavisno od datuma. Portal će pronaći sve tarife za svaki dan u rezervacijama, sastaviti zajedno i vratiti srednju vrednost za dati period");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Prikazati datum odlaska?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Postavite ovu opciju na Ne ako ne želite da bude prikazano polje sa datumom odlaska. Ovo koristite samo ako ste sigurni šta radite, datum odlaska u rezervacijama će pisati dan nakon dolaska. U suprotnom podrazumevana opcija je DA.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Limit opisa');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Ovo ograničava broj karaktera prikazanih u listi objekata.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Koristite date() format?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Kliknite da biste objavili');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Kliknite da ne objavljujete');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Odaberite glavni tip sobe');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Da biste dodijelili sliku ovom tipu sobe morate prvo uploadovati sliku u /images/stories/jomres/rmtypes/ folder. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Input greska - boja pozadine');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Podrazumevana država u formi za rezervaciju');
jr_define('_JOMRES_JAVASCRIPT_', 'Polja označena crvenom zvezdom su obavezna.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Korisnici mogu da registruju svoje objekte?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Postavite ovu opciju na DA ako želite da korisnici mogu registrovati svoje objekte bez dozvole administratora sajta.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Elementi označeni crvenom zvezdicom su obavezni.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Kreirani objekti');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Prikazati kalendar od početka godine?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kalendar dostupnosti prikazuje od pocetka tekuce godine.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Broj dostupnih soba');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Nazad na detalje objekta');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Tipovi soba');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Limit nasumične pretrage');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Prikaži google konverziju valuta link u listi tarifa?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Konvertor valuta');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Dozvolite korisnicima da vrše izmene koristeći html editore?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Koristite ovu formu da biste prijavili rezervaciju. Kursor misa preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Koristite ovu formu da biste prijavili rezervaciju. Kursor miša preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Opis knjiženja rezervacije');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Odaberite detalje vaših zahteva za rezervaciju');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Dostupnost ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Odaberite sobe koje želite');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Pogledajte ovde da li je objekat dostupan u ovom momentu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Opcije extra');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Odaberite bilo koju extra opciju koju želite da uključite u rezervaciju');
jr_define('_JOMRES_COM_PERDAY', 'Po noći');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Vaša adresa');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Molim vas unesite vaše informacije. Sva polja su obavezna osim polja za mobilni telefon');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Dostupne sobe');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Odabrane sobe');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>
Najbliži datum dolaska je: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Po noćenju:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Dodaci:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Taksa:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Popust:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Ukupna cena:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gosta');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Kliknite ovde ako želite da dodate sobu u vaš izbor');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Kliknite ovde ako želite da skloniite sobu iz vašgg izbora');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipovi gostiju');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tip');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Tip gostiju, pr. Djeca godine 5-10, ili Student ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Napomene');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Napomene u vezi sa tipom gostiju');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maksimalan broj gostiju ovog tipa koji se može odabrati prilikom rezervacije');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'U procentima');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Izračunata cifra je procenat osnovne cifre izračunate za sobu. Ako ste izabrali Ne onda će se cifra koju ste vi odredili dodati ili odbiti od cene sobe.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Dodati neslaganje?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Izračunata cifra je dodata ili uklonjena sa osnvone cene sobe. Postavite opciju na Ne ako želite da ovo bude popust na osnovnoj ceni. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Neslaganje');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Iznos neslaganja');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Redosled tipova gostiju je izmenjen');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Tip gosta je izbrisan');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Kreiran je tip gosta');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Tip gosta je izmenjen');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Izmenjen je tip gosta');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Prikaži link na listu soba na stranici detalja objekta?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Prikažite <b>samo</b> Kalendar dostupnosti/Listu soba?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Postavite ovu opciju na DA ako želite da prikažete header i detalje objekta, tako da je samo lista soba/kalendar dostupnosti vidljiv u okviru detalja objekta.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Dolazak - Odlazak minimalni interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimalni interval u rezervacionoj formi između dana dolaska i odlaska.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Lista na rezervacionoj formi prikazuje broj sobe');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Lista na rezervacionoj formi prikazuje ime sobe');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Lista na rezervacionoj formi prikazuje naziv tarife');
jr_define('_JOMRES_ORDER', 'Redosled');
jr_define('_JOMRES_REQUIREDFIELDS', 'Obavezno');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Broj dana pre dolaska');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimum dana koji moraju proći od današnjeg dana do dana dolaska.');
jr_define('_JOMRES_DTV', 'Varijacije tipa datuma');
jr_define('_JOMRES_DTV_DOW', 'Dan u nedelji');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Standardni tip gosta');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Standardni broj prvog tipa gosta je 1. Ako koristite tipove gostiju, onda je ovo broj koji će se pojavljivati za prvi tip gostiju u formi za prijavu.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Da li samo registrovani korisnici mogu rezervisati online?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Izvinite, morate biti registrovani korisnik da biste rezervisali online. Kliknite ovde da biste se registrovali. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Boja fonta za linkove trenutnih rezervacija');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Vikend granice');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Soba je rezervisana');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Crna rezervacija');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokružite depozit na najbližu cifru?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Da li želite da naplaćujete depozit?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarife naplaćujete na nedeljnom računu?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Imate mogućnost postavljanja razlicitih tarifa po dnevnoj ili nedeljnoj vrednosti. Ako koristite nedeljni, morate postaviti ovu opciju na DA.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Cena po nedelji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fiksirani datum dolaska potreban: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Kada je fiksirani datum izabran, može biti prikazan kao padajuća lista');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Datum dolaska netačan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Datum odlaska nije tačan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervacija je prekratka. Mora biti najmanje ovoliko dana izmedju dana dolaska i odlaska :');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Vaš interval je:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Tip gosta je netačan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Odaberite tip i broj gostiju');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Imate previše dozvoljenih tarifa');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Odabrali  ste više soba nego što imate gostiju, kliknite na ime sobe da biste je uklonili sa liste');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Imate previše gostiju za vaš broj slobodnih kreveta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Morate odabrati više soba');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Odaberi sobu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Ime je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Prezime je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Broj kuće ili ime kuće je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Ulica je obavezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Grad je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Region je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Poštanski broj je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Zemlja je obavezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Broj telefona je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Broj mobilnog je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email adresa je obavezna');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Imamo slobodne sobe!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Nijedna soba nije izabrana');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Use global currency?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Set this to yes to force all businesses to use the same currency.');
jr_define('_JOMRES_BOOKING_NUMBER', 'Broj rezervacije');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'OK za rezervaciju');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Izbrisati template varijable?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Izaberite ovo da omogucite DHTML dump template variabli za svaki FRONTEND template file. Korisno je ako zelite da proverite da li odredjeni elementi mogu da se koriste za odredjeni template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Izračunati procenat');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Izaberite DA ako računate po osobi u procentima. Ako ste odabrali NE biće primenjeno kao flat suma.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Dozvoljeni limit sobe/tarife');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Ovim možete da odaberete limit na broj slobodnih soba i tarifa koje su izlistane u formi za rezervaciju. Postavite na nulu ako ne želite ograničenje. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Trenutno nema slobodnih soba!');
// Introduced in v2.5
// Translate from here
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Book it now: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Global editing mode?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Global currency symbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Component wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Set this to Yes if if you want to force the site into Full Page view. This might be useful if you intend to access the site via iframes.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Samo vikendi');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Dani vikenda');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Podesite dane vikenda. Tarife koje dozvoljavaju ili ne dozvoljavaju vikende će uzeti u obzir ovo podešavanje prilikom generisanja liste soba.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Izaberite zemlju pre nego što dodate informacije o objektu');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Sačuvajte promene pre nego što dodate sliku objekta');
jr_define('_JOMRES_TARIFFSFROM', 'Cene od - ');
jr_define('_JOMRES_SEARCH_ALL', 'Sve');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Pretraga po državama');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Pretraga po regionima');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Mesto ');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Pretraga karakteristika');
jr_define('_JOMRES_SEARCH_BUTTON', 'Pretraži');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Pretraga reči');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Search word(s): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', '');
jr_define('_JOMRES_SEARCH_PTYPES', 'Tip objekta ');
jr_define('_JOMRES_SEARCH_RTYPES', 'Navedite sve nekretnine po tipu sobe');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Default');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Naziv objekta');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Property Region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Property Town');
jr_define('_JOMRES_SORTORDER_STARS', 'Zvezdice');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Opis objekta ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervacija');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Izmenite detalje adrese');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-checking room availability<br/>
(Room selection will be reset)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-checking availability');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifying your optional extras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Changing your room selection');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Updating your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Sorry, one or more address fields are incorrect.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Slika sobe');
jr_define('_JOMRES_CURRENCYFORMAT', 'Format valute');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Search options');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Log files');
jr_define('JOMRES_COM_A_MESSAGE', 'Poruka');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normalna Tarifa');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Napredna Tarifa');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Mikro tarifa');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Konfigurisanje tipova tarifa');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Warning: Switching between different tariff editing modes may result in loss of data. See the note below regarding this.</b>.
<br/><br/>
You have two options as to how you configure your tariffs.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: You can create a set of tariffs that are not linked to each other. <br/>
<br/>
Micromanage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create tariffs that are not linked with other tariffs. This allows you to create prices for your property that you cannot otherwise create in Micromanage mode. It is more laborious to use, because you need to ensure that each tariff's valid from/to dates perfectly match, but it allows you to create more complicated tariffs.<br/>
<br/>
If you switch from Advanced to Micromanage, all existing tariffs will be removed.<br/>
<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Želite li da prikažete listu soba na stranici sa detaljima o objektu?');
jr_define('JOMRES_PROPERTYTYPE', 'Property type');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max osoba u sobi');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Maksimalan broj gostiju u rezervaciji');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Dodaj napomenu');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Izmeni napomenu');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Obriši napomenu');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Vidi napomene');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Nova napomena je dodata');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'napomena je izmenjena');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Napomena je obrisana');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Lista rezervacija');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Moje rezervacije');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Vidi rezervaciju');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Pogledaj omiljeno');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Još uvek niste dodali nijedno omiljeno mesto!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Property type');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Mudra cena');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Uključeno');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Ovaj dodatak vam omogućava da dinamički omogućite i konfigurišete cene soba.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Većina preduzeća će ponovo izračunati cene soba na osnovu broja soba traženog tipa koje su dostupne na određeni datum. Ovo im omogućava da ponude popuste na tip sobe koja nije zauzeta tokom datog perioda sa ciljem da privuče posao koji bi inače mogao da bude propušten.<br/>Omogućavanje i konfigurisanje ovog dodatka omogućava vam da ponudite prilagodljive cene na osnovu broj soba izabranog tipa koje su dostupne (prazne) u objektu na određeni dan.<br/> Granična vrednost dana definiše broj dana u kojima datum dolaska mora da bude pre nego što se cene soba podese ovom funkcijom, a zatim u opcijama procenta možete da konfigurišete procenat soba koje mogu biti dostupne pre nego što se primeni dati popust.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Prag (broj dana između datuma dolaska i današnjeg dana)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Procenat zauzetih soba 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Procenat zauzetih soba 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Procenat zauzetih soba 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Procenat zauzetih soba 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Popust %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' je na popustu sa ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' do ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Cena sobe nije na popustu ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://console.cloud.google.com/projectselector2/google/maps-apis/credentials" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute ponuda');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktivna?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Podesite ovo na Da ako gostima želite da ponudite Last Minute opciju.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Prag');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Ako je rezervacija napravljena i datum dolaska je samo X dana od datuma rezervacije, onda se popust može primeniti');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Popust');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'U procentima');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Na ovu rezervaciju je uračunat popust!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Cena boravka je umanjena za ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Ovaj objekat ima LAST MINUTE ponudu. POPUST od  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' % ako rezervišete dolazak pre ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' % ili više ako rezervišete dolazak pre ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Rezervišite sada da biste maksimalno iskoristili ovu ponudu!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Opširne informacije o tarifi');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Podesite ovo na DA da biste prikazali detaljnije informacije o tarifi u iskačućem prozoru sa detaljima/tarifom');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimise configuration options');
jr_define('_JOMCOMP_AMEND', 'Izmeni rezervaciju - Izaberi objekat');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Izaberite objekat');
jr_define('_JOMCOMP_AMEND_HEADER', 'Originalni ugovor:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Depozit plaćen');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Depozit nije plaćen');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Zameni visinu depozita');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Otkaži');
jr_define('_JRPORTAL_CPANEL', 'Kontrolna Tabla');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Default Commission rate');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'List Commission Rates');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Commission Rates');
jr_define('_JRPORTAL_CRATE_TITLE', 'Title');
jr_define('_JRPORTAL_CRATE_TYPE', 'Type');
jr_define('_JRPORTAL_CRATE_VALUE', 'Comission rate');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Currency code');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Lista Objekata');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Naziv objekta');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Property address');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Properties who\'s background colour is red have not yet had a commission rate applied to them.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistics');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Commission Rate');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Lista rezervacija');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Objekat id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Faktura broj');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Ukupno za rezervaciju');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date archived');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Cena smeštaja');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'noćenja');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'po sobi ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Dodatne usluge');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Ukupna cena');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Molimo pročitajte i potvrdite saglasnost');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Detalji vaše rezervacije su sumirani ispod.<br /> Da bi ste bilo šta promenili, molimo kliknite na dugme IZMENI REZERVACIJU. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Ukoliko želite da izmenite bilo koju informaciju prikazanu iznad, kliknite ovde ');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Izmeni rezervaciju');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Ukoliko imate bilo kakve dodatne zahteve, unesite ih u polje ispod.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Potvrđujem da su gore unete informacije tačne i slažem se sa ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'po osobi po noćenju ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
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
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Imajte na umu da ovo nije formular za rezervaciju, već šaljete email upit vlasniku objekta.<br/>
Unesite poruku koju želite da pošaljete za ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontakt');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Poštovani, imate upit od ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Hvala vam na upitu, vaša poruka je poslata na adresu e-pošte vlasnika objekta i kopirana na vašu email adresu za vašu evidenciju. Oni će vam odgovoriti u najkraćem mogućem roku.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' u vezi objekta ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Pitanje');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Molimo izaberite željeni smeštaj');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Slobodno');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Nešto je rezervisano');
jr_define('_JOMRES_AVLCAL_HALF', 'Polu-rezervisano');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Uglavnom rezervisano');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Rezervisano sve');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Po nedelji');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Po danu');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Po rezervaciji');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Po osobi po rezervaciji');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Po osobi po danu');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Po osobi po nedelji');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Po danima (minimalno dana)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Po danima izabrano X soba');
jr_define('_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry & rebuild cache');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Opseg cene');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'You haven\'t made any bookings yet!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Edit your property type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Select your property type');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Your enquiry...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Property List limit');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of propertys to show on a page after a search');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activate this feature?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Use columns');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Search region by select combo dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Search by property name');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Show the search by property name input.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Town/region');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Show the Region input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Search by property type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Show the search by property type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Search by room type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Show the search by room type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Show the search by feature input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Set this to no to show the list as tooltip images and checkboxes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Search by description');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Show the search by description input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Search by availability');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Show the search by availability input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Search by price ranges');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Show the search by price ranges input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Price range increments');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Editing');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Custom fields');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Here you can define simple custom fields that will be shown in the booking form.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fieldname (no spaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Default value');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Required');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maksimalna količina');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Tax rates');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Tax code');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Rate description');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'You cannot delete this tax rate.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Rate');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Fakture');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Neplaćeno');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Plaćeno');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Otkazana');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Na čekanju');
jr_define('_JRPORTAL_INVOICES_USER', 'Korisnik');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Izdata');
jr_define('_JRPORTAL_INVOICES_DUE', 'Dospeva');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Pretplata');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Preostalo za plaćanje');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Recurring frequency');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Recurring day of month');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Currency code');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Stavke');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Ime');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Opis');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Cena');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Količina');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Popust');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Ukupno');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Tax code');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Poreski opis');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Poreska stopa');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override standard Jomres gateway settings?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Pokaži moje fakture');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Kuponi za popust');
jr_define('_JRPORTAL_COUPONS_DESC', 'Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Kod kupona');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Važi od');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Važi do');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'iznos popusta');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Popust je u procentima');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Room only');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ako imate kupon, kod unesite  u polje i kliknite na dugme „Sačuvaj Kupon“ da biste sačuvali detalje kupona uz vašu rezervaciju. Cena rezervacije biće umanjena za iznos koji je naznačen na kuponu.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Sačuvaj Kupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon je važeći i sačuvan za rezervaciju');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Kod nije ispravan');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Iznos popusta kupona');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Booking discounted. Coupon code/discount value/coupon settings : ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Choose languages');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Show the language selection dropdown?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Poštovani/');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Zahvaljujemo se na registraciji ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Vaše korisničko ime je : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Vaša lozinka je : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Ulogujte se da bi videli vašu rezervaciju ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon sačuvan');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon obrisan');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Username');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Password');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Notification mobile number');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Booking form room list show disabled access');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Booking form room list show max people');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'NAPOMINJEMO da cene soba,  procene i puna cena rezervacije neće biti izračunati dok ne dodate sobu(e) u svoj izbor.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Subscription packages');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Name');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Description');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Published');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Full amount');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Property limit');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Subscribe');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Use subscription handling functionality');
jr_define('_JOMRES_COM_NEWUSER', 'Create new user on booking');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Create new user account on unregistered user booking.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Klikni ovde i dodaj svoju nekretninu');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Novi korisnički detalji ');
jr_define('_JOMRES_LATLONG_DESC', 'Koristite miša da se krećete po mapi. Postavite strelicu na lokaciju vašeg objekta kako bi odredili tačnu lokaciju.');
jr_define('_JOMRES_CONTROLPANEL', 'Control Panel');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Prikaži fakturu');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Prikaži fakture');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Dodaj moj smeštaj na sajt');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Korak : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Sorry, but that package ID is not recognised.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Vaši poslovni detalji');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Poslovno ime');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'PIB/VAT broj');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Broj objekta');
jr_define('_JOMRES_INVOICE_NUMBER', 'Faktura broj ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Izaberite datume za koje želite da primenite crnu rezervaciju. Kada izaberete odgovarajuće datume, kliknite na dugme „primeni“ da biste ponovo proverili dostupnost. <br/> 
<br/> 
Ako objekat ima jednu ili više rezervacija za izabrani period, nećete moći da ga rezervišete sve dok ostale rezervacije/crne rezervacije ne budu otkazane/rezervirane.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Žao nam je, ne možete napraviti crnu rezervaciju za te datume.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Možete napraviti crnu rezervaciju objekta za ove datume.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Vaš objekat je konfigurisan tako da naplaćujete po osobi po noći, ali nemate kreiranih ili objavljenih tipova gostiju. Kreirajte i objavite jedan ili više tipova gostiju. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Izmena teksta uključena');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Izmena teksta isključena');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Štampaj fakturu');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Naplatiti promenljive depozite?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Promenljivi depoziti vam omogućavaju da definišete da li želite da naplatite pun iznos ako je datum dolaska rezervacije u roku od X dana od „danas“. Podesite ovu opciju na DA da biste omogućili funkciju i unesite broj dana ispod, tako da, na primer, ako je dan dolaska u roku od 60 dana, onda će iznos depozita biti pun iznos, u suprotnom će iznos biti zasnovan na depozitu gore konfigurisane opcije.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Broj dana u kojima će pui iznos biti naplaćen kao depozit.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Potvrdni email sa detaljima je poslat. Možete zatvoriti ovaj prozor.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontakt');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Označi fakturu kao plaćenu');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Faktura je označena kao plaćena');
jr_define('_JOMRES_APIKEY_REMAKE', 'Make new API key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single property installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance payment');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Lični popust');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limit property registration to one country?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Properties are located in this country : ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the property details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'We are sorry, but that property is not currently available.');
jr_define('_JOMRES_REVIEWS', 'Ocene');
jr_define('_JOMRES_REVIEWS_TITLE', 'Naslov ocene');
jr_define('_JOMRES_REVIEWS_DATE', 'objavljeno ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Ovaj objekat još uvek nije ocenjen.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Would you like to be the first to review this property?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Slažem se sa ovom ocenom');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Ne sslažem se sa ovom ocenom');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Prosečna ocena: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Ukupno glasova:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Dodajte novu recenziju');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Ako želite da ostavite recenziju morate biti ulogovani.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Recite nam šta mislite o ovom objektu : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Ovaj recenzent nam je rekao: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Prednosti: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Mane: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Objavljeno: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'You have already reviewed this property, you can\'t post another review about it.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Sorry, but you are not allowed to post reviews on this site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Prikaži recenzije');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' guests agree with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' guests do not agree with this review.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' guest agrees with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'guest does not agree with this review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Hvala vam što ste podelili svoje mišljenje o ovoj recenziji.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Hvala vam, ali već ste podelili svoje mišljenje o ovoj recenziji.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Please ensure that all fields have been filled.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Sumirajte svoju recenziju unosom naslova');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Unesite detaljniji opis recenzije u okvir za opis');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Molimo vas da unesete dobre delove vašeg iskustva i boravka u ovom objektu');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Molimo vas da sa nama podelite i negativna iskustva ili mane objekta');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Please rate the hostpitality you received from the staff');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Please rate your opinion of the property\s locale');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Please provide your opinion of the cleanliness of the property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Please rate the accommodation. Was it comfortable or threadbare');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Please provide your opinion of whether it was value for money');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Please rate the services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Review summary');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Your experience in more detail');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Zahvaljujemo se na vašoj recenziji.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatically publish reviews?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Set reviews to test mode?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Number of unpublished reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total number of reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Delete review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Prijavi Recenziju');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Review reports');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Please enter your report');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Primetili ste nešto u ovoj recenziji sa čime se ne slažete ili je netačno? Prijavite i mi ćemo to ispitati za vas.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Potvrdi');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Report created by ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = poor 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Gostoprimstvo ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Lokacija ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Čistoća ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Smeštaj ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Dobijeno za novac ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Usluga ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Ocenjeno od : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Sakrij ocene');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Show Booking form in property details page?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Da li je u cene uračunat porez?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Cene su uključene? Ako vaše cene uključuju porez, izaberite DA. Ako nisu, izaberite NE');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras tax:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Polja za dan u nedelji vam omogućavaju da podesite cenu za dati dan u nedelji, kada kliknete na dugme za dan u nedelji, svi dani u nedelji će biti podešeni na tu cenu.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rates');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Soba ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'gost(i). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', ' Ovako smo dodelili brojeve vaših gostiju njihovim sobama. Ako želite da promenite ovu raspodelu, moraćete da kontaktirate objekat nakon što izvršite rezervaciju. Mogu se naplatiti dodatni troškovi ako promenite svoje zadatke.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Objekat još uvek nije objavljen i gosti ga još uvek ne mogu videti. Kliknite na dugme KLIKNITE DA BISTE OBJAVILI ako želite da objekat bude vidljiv posetiocima portala.');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Default search result order');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Show search result order dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Izgled liste soba');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'U formularu za rezervaciju, koristeći stil liste "CLASSIC" soba, gostima nudite pojedinačne sobe ili pojedinačne apartmane. Sa opcijom TIPOVI SOBA, gosti biraju broj soba tipa x (npr. 2 x dvokrevetna).');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipovi soba');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Calendar week start day, Sunday or Monday');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Only property guests can review?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Po sobi');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Gostiju po sobi : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gostiju po rezervaciji : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Broj soba');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Januar');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Februar');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Mart');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Maj');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Avgust');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Septembar');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Oktobar');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Novembar');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Decembar');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Ceo ekran');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normalan pregled');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Partner discount ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Search user');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Existing partners');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choose a partner to be taken to the partner administration page.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Search for a property');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Current properties');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a property to edit the partner's discount settings for that property.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'This account has been suspended, it is not currently possible to administer your propert(ies) using this account.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Manager account suspended');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Manager account reinstated');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Remove favourite');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Booking data archive');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Izmeni nalog');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Existing managers');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Noćenja');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Show the search by guest number dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stars');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Osobe');
jr_define('_JOMRES_SEARCH_STARS', 'Broj zvezdica');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Number of properties');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Use commission functionality?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Set this to Yes to show the manager commission invoices which have been raised.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manager bookings create commission invoices?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'If a manager makes a booking, does that also create a commission invoice line item?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspend managers where invoices are marked as Pending?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto suspend threashold');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Користите ову опцију да промените контекст језика сајта. Ова функција омогућава Јомрес-у да користи етикете које су прикладне за начин на који користите Јомрес, тако да ако је ваш фокус на брокерској компанији за јахте, промена контекста ће омогућити Јомрес-у да представи ознаке прикладне за јахте. На пример, ако поставите контекст на "Иацхт Брокераге", онда ће Јомрес прво пронаћи тренутни језик, а затим претражити прилагођену текстуалну базу података за стрингове сачуване са језичким контекстом "иацхтброкераге". Ако постоје прилагођени стрингови за тренутни језик и контекст, они ће се користити. Ако није, онда ће се Јомрес вратити на дефиниције језика које користе његове језичке датотеке Цоре.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Price (highest first)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Price (lowest first)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Rezime cena i procene treba da se određuju po noći/nedelji/mesečno?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'za noć');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Za nedelju');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Za mesec');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Po osobi');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click Here');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Rezervacija važi od');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Rezervacija važi do');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Ime gosta');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Sa vašim kuponom, ova rezervacija je na popustu sa ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' na ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Set this to No to disable loading of both the Jquery UI javascript and CSS files.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Set this to No to disable only the jquery UI CSS file.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Ukupno uključujući porez');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Use conversion functionality');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Smeštaj bez taksi');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Smeštaj sa taksama');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatski izabrano?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Preostalo za uplatu (nakon plaćenog depozita)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrirajte resurse na osnovu njihovih karakteristika i sadržaja u objektu.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'second');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minute');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'hour');
jr_define('_JOMRES_DATEPERIOD_DAY', 'day');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'week');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'month');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'year');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'decade');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'from now');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Rezervacije su za cele dane?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Podrazumevano, resursi sistema rezervišu se preko noći, tako da rezervacija od 1. januara '.date('Y', strtotime('next year')).' do 2. januara '.date('Y', strtotime('next year')).' pokriva samo jednu noć.Međutim, ako ovu opciju postavite na DA, onda će rezervacija pokrivati čitave dane, tako da bi rezervacija za te dane pokrivala oba dana, a klijentu bi se naplaćivalo dva dana..');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'days(s) at');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Rezime cena i procene treba da se određuju po noći/nedelji/mesečno??');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Zameni cenu ukupnog smeštaja');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Sačuvaj zamene');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Limit u danima za otkazivanje rezervacija');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Prijavljeni (ulogovani), registrovani gosti mogu otkazati sopstvene rezervacije koje su već napravili. Ovde možete podesiti graničnu vrednost u danima u kojima se rezervacija ne može otkazati nakon određenog broja dana pre datuma dolaska.');
jr_define('_JOMRES_EDIT_PROFILE', 'Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship');
jr_define('_JOMRES_IMAGE', 'Slika');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Edit Tax rate');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edit Custom field');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Latest Jomres version');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="https://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section in the menu, including the "Getting Started" page which will guide you through your first steps.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Active property');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Email Settings');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternate Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Change this to your smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternate Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Change this to your smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Use authentication');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternate Password');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Brzi Pregled');
jr_define('_JOMRES_MENU_SHOW', 'Show');
jr_define('_JOMRES_MENU_HIDE', 'Hide');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Default');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Anybody');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registered');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nobody');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Menu Access control');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Full Access Control');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Full Access control');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Users with admin rights to this property');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametri');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Iznuđeno');
jr_define('_JOMRES_METATITLE', 'Glavni naslov');
jr_define('_JOMRES_METADESCRIPTION', 'Kratak opis objekta');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Add your property : Step 2 of 2');
jr_define('_JOMRES_CART_TITLE', 'Moje predložene rezervacije');
jr_define('_JOMRES_CART_INFO', 'Napomena, ova rezervacija još uvek nije sačuvana. Ako se odjavite ili vaša sesija istekne, ona će biti izgubljena. Ne zaboravite da potvrdite svoju rezervaciju!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Potvrdi rezervaciju(e)');
jr_define('_JOMRES_CART_OR', ' ili ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Sačuvaj za kasnije');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Nemate sačuvane rezervacije.');
jr_define('_JOMRES_CART_VIEWCART', 'View cart');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Pregled lista');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Foto pregled');
jr_define('_JOMRES_COMPARE', 'Uporedi');
jr_define('_JOMRES_REMOVE', 'Ukloni');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Nazad na rezultate pretrage');
jr_define('_JOMRES_ADDTOSHORTLIST', 'U omiljeno');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Ukloni omiljeno');
jr_define('_JOMRES_VIEWSHORTLIST', 'Vidi omiljeno');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Cookie Policy');
jr_define('_JOMRES_COOKIEPOLICY_2', 'We use cookies to help keep our site relevant and easy to use.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Read more...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Yes, I accept the use of cookies in this way.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Depozit je obavezan prve noći?
?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Cene su obračunate na bazi noćenja. Da li želite da se depozit naplaćuje za jednu noć? Ako jeste, možete zanemariti sledeće opcije.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "Još uvek niste dodali nijedan omiljeni objekat.");
jr_define('_JOMRES_SAFEMODE', 'Enable safe mode?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'NA UPIT');
jr_define('COMMON_NEXT', 'Dalje');
jr_define('COMMON_CANCEL', 'Otkaži');
jr_define('COMMON_SUBMIT', 'Potvrdi');
jr_define('COMMON_SAVE', 'Sačuvaj');
jr_define('COMMON_DELETE', 'Obriši');
jr_define('COMMON_RETURN', 'Povratak');
jr_define('COMMON_CLOSE', 'Zatvori');
jr_define('COMMON_BACK', 'Nazad');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'New');
jr_define('COMMON_SEND', 'Pošalji');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being "spammed" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href="http://www.google.com/recaptcha" target="_blank">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?");
jr_define('COMMON_ACTION', 'Radnja');
jr_define('COMMON_VIEW', 'Pogledaj');
jr_define('BACKTOTOP', 'Back to top');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Weak');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define('_JOMRES_INPUTFILTERING', 'Input filtering');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Input filtering level');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Allowed input tags');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Allowed inputs');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Property details in tabs?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Set this option to show property details in tabs. Set it to no to show them without tabs.');
jr_define('COMMON_PRINT', 'Štampaj');
jr_define('COMMON_EDIT', 'Izmeni');
jr_define('COMMON_COPY', 'Kopiraj');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres is designed to work within both the Bootstrap 2 or Bootstrap 3 frameworks. Once you have installed a BS2 or BS3 theme or template, set this switch to choose which of the flavours of Bootstrap you want Jomres to work with.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Use Jomres Bootstrap templates in the frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Here are some alternatives you might want to consider.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Želite li da sistem automatski detektuje iz koje države je gost?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Sistem će pokušati da automatski otkrije državu gosta, ako ranije nije rezervisao. Ovu opciju možete postaviti na NE i definisati državu za koju želite da se pojavi u obrascu za rezervaciju, u sledećoj opciji.");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'About Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Getting started');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Access Control');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'developer tools');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'languages');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'income generation');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'site structure');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'My Account (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portal functionality');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'reports/statistics');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Pomoć');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Updates');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'payment methods');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tariff default');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'This only applies to new tariffs');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Years to show');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Defines the number of years to show when editing a tariff type');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'invoices');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Detalji Naloga');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Uloguj se');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Izloguj se');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Pretraga');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Kontrolna Tabla');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Fakture');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Podešavanja');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'Ostalo');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Izmeni državu');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Country id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Country code');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Ime države');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Izmeni region');
jr_define('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Country code');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Ime regiona');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Lista država');
jr_define('_JOMRES_COM_LISTREGIONS', 'Lista regiona');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Export definitions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Translate locales');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define('_JOMRES_COM_NOTAMANAGER', "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Property list default layout');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Stay for a minimum of');
jr_define('_JOMRES_NIGHTSFOR', ' nights for ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Agent details');
jr_define('_JOMRES_AGENT_LISTINGS', "Agent's listings");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatically approve new properties');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Approvals');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Ovaj objekat još nije odobren. Kada bude odobren, moći ćete da ga objavite.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Sorry, you cannot publish this property as it has not been approved yet.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'A new property requires approval');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Vaš objekat je odobren');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Čestitamo, Vaš objekat je odobren, kliknite na sledeći link da biste videli kontrolnu tablu objekta: ");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Region names are translatable');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Gost odjavljen.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Žao nam je, ova email adresa je već u upotrebi. Ako je ovo vašae adresa e-pošte, uverite se da ste se prijavili pre nego što pokušate da rezervišete.');
jr_define('JOMRES_TAPTOCALL', 'Call us');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Nova recenzija za objekat ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Ostavljena je nova recenzija za ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Nova prijava');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Prijavljena je recenzija za ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'UKUPNO (bez poreza) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'UKUPNO (sa porezom) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Ukupan porez : ');
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
jr_define('_JOMRES_METAKEYWORDS', 'Ključne reči. Npr: apartman, smeštaj, ime objekta i sl.');
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
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Molimo unesite PIB ili VAT broj za ovaj objekat.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'PIB/VAT nije validan.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business details entered here will be used on commission and subscriptions invoices.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Izgleda da još uvek niste popunili detalje svog naloga. Da biste dodali svoj objekat na sajt, potrebno je da popunite podatke o svom nalogu pre nego što krenemo dalje.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Detalji resursa');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Detalji tarife');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Samo');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'preostalo!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Medija centar');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Dodaj slike');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Slike soba');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Glavna slika');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Očisti listu');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Prevuci i pusti slike ovde');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Izaberite resurs za koji želite da dodate slike. Ako možete da otpremite slike za pojedinačne resurse (npr. sobe), dobićete drugi padajući meni da izaberete određeni resurs. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Ako dodate više slika kao „Glavna slika“, one će se koristiti na listi pregleda. Slideshow slike će biti prikazane na stranici sa detaljima objekta.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Pogledajte sliku koju ste dodali');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Obriši sliku');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Dodaj sliku');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Room types icons');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property feature icons');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Dodaj sve slike');
//8.0
jr_define('COMMON_PREV', 'Nazad');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Danas');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Godina');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Mesec');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Nedelja');
jr_define('_JOMRES_DASHBOARD_DAY', 'Dan');
jr_define('_JOMRES_HLEGEND', 'Legenda');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'Od');
jr_define('_JOMRES_HTO', 'Do');
jr_define('_JOMRES_HNEW_BOOKING', 'Nova Rezervacija');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Status depozita');
jr_define('_JOMRES_HSTATUS_GUEST', 'Status gosta');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Status rezervacije');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Status objave');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Status fakture');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Tip fakture');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Odobreno');
jr_define('_JOMRES_HSTATUS_CURRENT', 'TRENUTNO POSLOVANJE');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Prikaži rezervacije za');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Prikaži fakture za');
jr_define('_JOMRES_STATUS_ANY', 'Bilo koji');
jr_define('_JOMRES_STATUS_PAID', 'Plaćen');
jr_define('_JOMRES_STATUS_NOTPAID', 'Nije plaćen');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Odjavljeni');
jr_define('_JOMRES_STATUS_ACTIVE', 'Aktivna');
jr_define('_JOMRES_STATUS_CANCELLED', 'Otkazana');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Objavljen');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Nije objavljen');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Gosti sa aktivnim rezervacijama');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Gosti sa ranijim rezervacijama');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Rezervacije');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Pretplate');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Provizije');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Sva moja poslovanja');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Postavi kao podrazumevano');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'Rezervacije');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'Objekti');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'Gosti');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'Izveštaji');
jr_define('_JOMRES_HLIST_GUESTS', 'Gosti');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Lista gostiju');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Lista Faktura');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Objekti');
jr_define('_JOMRES_HQUICK_BOOKING', 'Brza rezervacija');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Datum rezervacije');
jr_define('_JOMRES_HTWO_WEEKS', 'Dve nedelje');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current Residents');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezervacija broj');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres includes it's own template sets, one for each supported version of Bootstrap. Joomla and Wordpress templates/themes that are based on Bootstrap will offer a specific version of Bootstrap so you need to ensure that the option you choose here is compatible with your template/theme. If your theme does not provide any Bootstrap code set this option to No Bootstrap in Theme and then Jomres will automatically include Bootstrap 5 files for it's own use. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Prikaži goste za');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fiksni periodi');
jr_define('_JOMRES_HDEPOSITS', 'Depoziti');
jr_define('_JOMRES_HBOOKING_FORM', 'Formular za rezervaciju');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Obavezna polja');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Petar');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Petrović');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'Moja ulica');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Moj grad');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Moj Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Karakteristike resursa');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Tip resursa');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Izmeni tip gosta');
jr_define('_JOMRES_HEDIT_COUPON', 'Izmeni kupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Izmeni extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Kreirajte više resursa');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generiši resurse');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Broj resursa soba/apartmana?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Tip resursa');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Maksimalno osoba po resursu');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Obrišite sve postojeće resurse?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Odobrenje');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Odbijte upit za rezervaciju');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Odobrite upit za rezervaciju');
jr_define('_JOMRES_STATUS_APPROVED', 'Odobreno');
jr_define('_JOMRES_STATUS_REJECTED', 'Odbijeno');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Da li je za rezervacije potrebno vaše odobrenje ili potvrda dostupnosti?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Ako je opcija postavljena na DA, kada se izvrši rezervacija, neće se pojaviti u kalendarima dostupnosti (a drugi gosti i dalje mogu da rezervišu te dane i resurse) sve dok menadžer, odnosno vlasnik objekta ne prihvati/potvrdi dostupnost za rezervaciju. Kada se potvrdi, rezervacija se ubacuje kao privremena (ako ne zamenjuje druge rezervacije; drugi gosti više ne mogu rezervisati iste datume) i e-mail se šalje gostu da izvrši uplatu.');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Message');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email teme');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Izmena teme email-a');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email naslov');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Tekst email-a');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Tip email-a');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Ime email-a');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Opis email-a');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Pogledajte ovu stranicu za pomoć u prilagođavanju e-mailova i listu dostupnih izlaza: <a href="https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Teme - Pomoć</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email poslat vlasniku objekta kada je napravljena nova rezervacija');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E-mail poslat gostu kada  napravi novu rezervaciju');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Guest Confirmation Letter');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Garantno pismo ili email koji vlasnik objekta ručno šalje gostu kada želi da odobri rezervaciju');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Ova rezervacija se može odobriti. Svi izabrani resursi su dostupni za izabrane datume.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Budžet');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');
jr_define('_JOMRES_FOR', 'Za');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'noć');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'noći');
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
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Prikaz _START_ do _END_ od ukupno _TOTAL_ elemenata');
jr_define('DATATABLES_SINFOEMPTY', 'Prikaz 0 do 0 od ukupno 0 elemenata');
jr_define('DATATABLES_SINFOFILTERED', '(filtrirano od ukupno _MAX_ elemenata)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SLENGTHMENU', 'Prikaži _MENU_ elemenata');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Procesiranje u toku...');
jr_define('DATATABLES_SSEARCH', 'Pretraga:');
jr_define('DATATABLES_SZERORECORDS', 'Nije pronađen nijedan rezultat');
jr_define('DATATABLES_SFIRST', 'Početna');
jr_define('DATATABLES_SLAST', 'Poslednja');
jr_define('DATATABLES_SNEXT', 'Sledeća');
jr_define('DATATABLES_SPREVIOUS', 'Prethodna');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SHOWHIDE', 'Change columns');
jr_define('_BOOKING_ONREQUEST', 'Rezervacija na zahtev');
jr_define('_BOOKING_INSTANT', 'Brza rezervacija');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Zatraži rezervciju');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Poštovani/a ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Poslednja promena');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email poslat vlasniku objekta kada je nova rezervacija otkazana');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email poslat gostu kada je nova rezervacija otkazana');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transakcije');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ako otpremite više slika za pojedinačne opcione dodatke, koristiće se samo prva slika.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Plati sada');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Ova faktura je sada dospela za plaćanje. Kliknite na dugme da biste izabrali način plaćanja.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Ovo su neki od dodataka koje možete kupiti dok pravite rezervaciju za ovaj objekat. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Prikaži na stranici sa detaljima objekta?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Podešavanja stranice sa detaljima o objektu');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Kategorija');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Želite li da prikažete karakteristike objekta razdvojene u kategorije?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Podesite ovo na DA da biste odvojili karakteristike objekta u kategorije. Ova opcija utiče samo na karakteristike prikazane na stranici sa detaljima objekta. Sve ostale stranice će ih prikazati bez podele u kategorije.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email teme');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Pregledaj zahtev za rezervaciju');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Potvrdite zahtev za rezervaciju');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Izmenite zahtev za rezervaciju');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- Novi gost -- ');
jr_define('_JOMRES_CHARTS', 'Grafikoni');
jr_define('_JOMRES_CHARTS_SELECT', 'Izaberi grafikon...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Dolazne po godini/mesecu');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, hajde da počnemo. Prvo je potrebno da napravite sobe koje se nalaze u ovom objektu.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Napravi sobe');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Istraživanja pokazuju da nekretnine sa kvalitetnijim slikama imaju više pregleda. Dodajte glavnu sliku i neke dodatne slike kako bi povećali šansu da gosti obrate pažnju i rezervišu Vaš smeštaj.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Dodaj slike');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Napravi cenovnk');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Sobe u objektu');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Ceo objekat');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Kompletirajte Vašu adresu na kojoj se nalazi objekat kako bi gosti znali gde će odsesti.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Kompletiraj adresu');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, izgleda kao da ste možda zaboravili da popunite sva polja.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Dobrodošli u Vaš novi oglas za ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Zdravo i dobrodošli u Vašu novu nekretninu na ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "Upravo ste dodali nekretninu na našu web stranicu i ovom prilikom Vam želilimo dobrodošlicu u našu porodicu.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Tvoju novu kontrolnu tablu možeš videti ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' ovde ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Kada podesite nekretninu koju izdajete možete da vidite kako to izgleda gostima koji traže smeštaj, tako što ćete posetiti ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' vašu naslovnu stranu.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(ne brinite, još uvek nije objavljena, tako da je gosti ne mogu videti).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "Na vrhu stranice videćete nekoliko poruka (korak #1, korak #2, korak #3 itd). Dugmići pored ovih poruka će Vas voditi do stranica koje morate da posetite da bi postavili i podesili vašu nekretninu na portalu pakujse.rs. Kada završite svaki od ovih koraka, za šta je potrebno nekoliko minuta, posetiocima našeg sajta će biti mnogo lakše da pronađu vašu nekretninu i rezervirišu je.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Ako imate bilo kakvo pitanje ili problem sa dodavanjem nekretnine ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'pišite nam');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "a mi ćemo odgovoriti na svako pitanje i ako je potrebno, nekretninu dodati umesto Vas.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Puno sreće i mnogo gostiju želi Vam naš tim sa portala ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "Izgleda da nemate ture za prodaju. Napravite profil obilaska, a zatim koristite dugme Generiši da biste kreirali neke obilaske.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Hajde da napravimo neke ture!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Unesite ID svoje facebook stranice, na primer "pakujse". Ostavite ovo polje prazno da se ništa ne prikazuje. Nemojte unositi https://www.facebook.com ili bilo šta drugo.');
jr_define('COMMON_DOWNLOAD', 'Preuzmi');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Sada dodajte cenovnik. Ovo će biti vaše osnovne cene.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Prevucite rezervacije ovde za otkazivanje');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Nema rezervacija/Nekretnine (obični oglasi)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='https://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "U redu, hajde da započnemo dodavanje vašeg objekta na sajt. Potrebno je da saznamo neke informacije o vašem objektu. Kada ovo uradite prelazite na sledeće korake gde ćete dodati sobe, podesiti cene i postaviti slike vašeg smeštaja.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Tip objekta će Vam pomoći da definišete kako će se vaša nekretnina rezervisati. Na primer, ako imate apartman podrazumeva se da izdajete celu nekretninu. Naravno uvek možete dodati više apartmana. Ako izaberete hotel gosti će moći da rezervišu sobe.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Email adresa ne mora, ali može biti ista kao ona sa kojom ste se registrovali. Ovo Vam omogućava da imate različite ali validne email adrese za različite tipove objekata.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='https://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='https://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Dozvola broj');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Neke zemlje predviđaju da morate prikazati broj dozvole za svoj objekat. Ako imate takav broj, unesite ga ovde. Ukoliko ne posedujete dozvolu preskočite ovo polje.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
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
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Turistička taksa');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Stopa turističke takse');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Podesite stopu turističke takse. Turistička taksa se obračunava tek nakon generisanja prve rezervacije i dodaje se na stranicu potvrde rezervacije, u polju za dodatne usluge.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'U procentima?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Podesite opciju na DA ako je taksa u procenatima ili NE ako je u pitanju paušalna naknada.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ova stranica vam omogućava da dodate slike za svoje objekte, stvari i usluge koje nudite. Ima jedno glavno dugme i drugo dugme koje vam omogućava da izaberete određene resurse za dodavanje slika. Dakle, GLAVNA SLIKA I SLIDESHOW se prikazuju kao jedno posebno dugme (dugačko plavo dugme), ali ako ste kreirali npr. Opcioni dodaci ili sobe, tada ćete videti drugo dugme (zelene boje) gde možete da dodate slike za te specifične resurse.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ova stranica vam omogućava da dodate slike za svoj objekat, stvari i usluge koje nudite gostima. Ima jedno glavno dugme (plavi pravugaonik) i drugo dugme koje vam omogućava da izaberete određene resurse za dodavanje slika. Dakle, GLAVNA SLIKA i SLIDESHOW SLIKA će prikazati samo jedno dugme, ali ako ste kreirali bilo koje opcione dodatke (npr. sobe), videćete drugo dugme gde možete da otpremite slike za te specifične resurse.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Prvo izaberite sliku(e) koju želite da dodate klikom na zeleno dugme DODAJ SLIKE ili pomoću funkcije PREVUCI I PUSTI SLIKU OVDE. Oni će se pojaviti u koloni na desnoj strani.</li>
  <li>Iznad ove oblasti, koristite opciju \"Izaberite stavku za koju želite da dodate sliku\" da biste izabrali za koji resurs želite da otpremite slike. Možda će vam biti ponuđena opcija da odaberete određeni resurs ispod. Dakle, ako želite da dodate glavnu sliku objekta, kliknite na plavi pravougaonik i izaberite opciju glavna slika. Nakon toga kliknite na zeleno dugme Dodaj slike. Izaberite sliku sa vašeg telefona ili računara i nakon toga kliknite na opciju dodaj ili dodaj sve slike.</li>
  <li> Kada odaberete resurs, možete kliknuti na plavo dugme Dodaj slike da biste ga povezali sa tim resursom. Kada se slika doda, ona će nestati iz kolone na desnoj strani i pojaviće se na levoj strani.</li>
  <li>Pored slika koje ste dodali postoji i kanta za otpatke koje će vam služiti da obrišete slike koje ste pogrešno dodali ili slike koje više ne želite da se prikazuju.</li>
  <li>Možete da promenite redosled slika tako što ćete ih preimenovati pre nego što ih dodate, pošto se prikazuju na stranicama po abecednom redu.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Pored dugmeta Resurs (plavi pravugaonik), Nalazi se dugme Pregled. Ako kliknete na ovo, videćete iskačući prozor koji vam pokazuje kako će trenutno izgledati slike na stranici. Ovo vam pomaže da dobijete predstavu o tome kako će slike izgledati vašim gostima.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Ne postoji ograničenje u broju slika koje možete da dodate. Veličina slika se automatski menja kada se doda. Možete da dodate samo JPG i PNG fajlove.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealno bi bilo, da sve slike koje dodate budu najmanje ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " piksela širine, inače mogu izgledati nejasno nakon što ih dodate.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Bilo koja slika koju dodate ne može biti veća od ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " kada je reč o veličini fajla.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Izaberite stavku za koju želite da dodate sliku");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Slike koje ste već dodali za ovaj resurs");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Formatiranje teksta');
jr_define('_JOMRES_MARKDOWN_DESC', 'Ovde možete uneti tekst koristeći jednostavno formatiranje. Ne morate da znate HTML, samo koristite dugmad da bi informacije izgledale onako kako želite ili formatirajte tekst prema ovim primerima.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Isticanje');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Zaglavlja");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Veliko zaglavlje');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Srednje zaglaavlje");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Malo zaglavlje');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Sitno zaglavlje');
jr_define('_JOMRES_MARKDOWN_LISTS', "Liste");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generička lista stavki');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numerisana lista stavki');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Linkovi');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst za prikazivanje');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citati');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Ovo je citat.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Može da obuhvata više redova!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Slike');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabele');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Kolona');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Rezervaciju napravio/la');
jr_define('_JOMRES_ROUTER_FEATURES', 'Sadržaji');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Spoljašnji URL link za rezervaciju');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Ovde možete da podesite spoljni URL link ako želite da koristite veb lokaciju treće strane za pravljenje rezervacija. Sva dugmad za rezervaciju našeg portala će upućivati na ovu URL adresu. Ostavite ovo polje prazno ako želite da za rezervaciju koristite formular sa našeg portala.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (kratak opis sobe/podnaslov)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Opis sobe');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT', "Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE', "Map type ");
jr_define('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Procenat Rezervisanih Soba");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Procenat Rezervisanih Soba");
jr_define('_JOMRES_SELECT_WIDGETS', "Izaberi table");
jr_define('_JOMRES_INTERVAL', "Period");
jr_define('_JOMRES_TIMELINE', "Timeline");
jr_define('_JOMRES_CPANEL_GRID', "Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Ako izmenite tip objekta obrisaćete sve sobe, cene, dostupnost kao i podešavanja koja ste postavili za objekat.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "Način plaćanja : ");

jr_define('_JOMRES_PRICES', "Get Connected");


jr_define('_OAUTH_TITLE', "App key management");
jr_define('_OAUTH_APPS', "REST API client details");
jr_define('_OAUTH_IDENTIFIER', "Identifier");
jr_define('_OAUTH_APIKEY', "Client ID");
jr_define('_OAUTH_SECRET', "Secret");
jr_define('_OAUTH_CREATED', "Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO', "The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE', "Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Property permissions");

jr_define('API_DOCUMENTATION_TITLE', "App REST API documentation");

jr_define('_OAUTH_CONFIG', "API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW', "Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation.");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page.");

jr_define('API_METHODS_TITLE', "API Methods");
jr_define('API_METHODS_DESCRIPTION', "This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI', "Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES', "This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES', "To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL', "Authorisation URL");

jr_define('WEBHOOKS_CORE', 'Webhooks');

jr_define('_WEBHOOKS_CONFIG_SHOW', "Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks documentation");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation.");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page.");

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration');
jr_define('WEBHOOKS_INTEGRATION_ID', 'Integration ID');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL or Name');
jr_define('WEBHOOKS_ENABLED', 'Enabled');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ');


jr_define('PORTAL_REVIEWS_LIMIT', 'Reviews limit');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Vidi sve recenzije');

jr_define('VIDEO_TUTORIALS', 'Video uputstva');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimalna vrednost depozita');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ako je izračunati depozit manji od ove cifre, postavite depozit na ovu vrednost. Ova cifra može sama po sebi biti zamenjena ako ne zadovoljava postavku minimalnog depozita na sajtu. Ostavite ga na 0 da ne koristite ovu opciju.");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define('_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define('_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define('JOMRES_INCOMPLETE', 'Nekompletnoo');
jr_define('JOMRES_WATING_APPROVAL', 'Čeka odobrenje');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map');

jr_define('HAS_STARS_TITLE', 'Allows stars classification?');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define('_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define('TRANSACTION_IDS', 'Broj transakcije');
jr_define('PAYMENT_METHOD', 'Način plaćanja');
jr_define('POA_DISPLAY_PRICE', 'Cena na upit');
jr_define('POA_DISPLAY_PRICE_DESC', 'Kada se objekti prikažu na listi, sistem će pokušati da pronađe važeću cenu iz konfigurisanih tarifa na osnovu ili današnjeg datuma, ili ako su datumi korišćeni u pretrazi, onda na osnovu tih datuma. Ako ne može, prikazaće se POA (cena na upit), što znači da bi gost trebalo da vas kontaktira da dobije cenu. Ako želite, ovde možete da konfigurišete cenu koja će biti prikazana umesto teksta CENA NA UPIT. Ova cifra bi bila „rezervna“ cena za prikaz ako se ne može odrediti druga cena.');

jr_define('PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define('PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define('INCLUDEINFILTERS', 'Include in filters?');
jr_define('INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define('REVIEW_REMINDER_PT1', "Imate ");
jr_define('REVIEW_REMINDER_PT2', " rezervaciju (e) za koje još niste ostavili recenziju. Molimo ostavite recenziju.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Rezervacije koje čekaju recenzije");
jr_define('REVIEW_NAG', "Nag guests for reviews?");
jr_define('REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

jr_define('HIDDEN_ADDRESS_SETTING', "Da li želite da sakrijete adresu?");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Ako ovu opciju postavite na Da, tada će samo gosti koji su već izvršili rezervaciju na vašem objektu moći da vide adresu ulice objekta. Možda biste želeli da koristite ovo podešavanje da sakrijete tačnu lokaciju imovine ako se, na primer, ne nalazite u tom objektu, nije u vašoj blizini ili nije obezbeđen....");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "*****");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define('DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define('OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define('DATATABLES_COLVIS', 'Column Visibility');

jr_define('API_TOKEN_LIFETIME', 'API token lifetime');
jr_define('API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define('ENCRYPTION_TITLE', 'Encryption');
jr_define('ENCRYPTION_FILE_LOCATION', 'Encryption file location');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Informacije koje sačuvate ovde će se koristiti na fakturama generisanim za ovaj objekat');

jr_define('_JOMRES_GDPR_POLICIES', 'GDPR Policies');
jr_define('_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.');

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Vaši podaci');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Neke funkcije ove veb stranice moraju da čuvaju informacije o vašoj poseti. Ovo se koristi samo za pružanje usluga vama, nikada se ne deli ni sa kim drugim i briše se kada više nije potrebno.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DA LI NAM DAJETE DOZVOLU DA ČUVAMO OVE INFORMACIJE??');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Detaljnije');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Morate da pristanete da čuvamo ove podatke kako biste mogli da rezervišete na ovom sajtu. Bez obzira na to da li se slažete da se vaši podaci čuvaju ili ne, mi ćemo sačuvati kolačić na vašem računaru kako bi nam rekli da li ste se uključili ili ne. Ovo nam pomaže da osiguramo da vas stalno ne pitamo da li želite da se prijavite ili odjavite i ne sadrži nikakve lične podatke . Ako se predomislite, u bilo kom trenutku možete da posetite stranicu Dozvole aplikacije da biste je uključili ili isključili.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Informacije se čuvaju u različitim vremenskim periodima u zavisnosti od prirode vaše posete. Dakle, ako samo gledate okolo, mi ćemo sačuvati približne informacije o geografskoj lokaciji (na nivou zemlje). Ako vršite pretrage, da bismo formulare za pretragu učinili lakšim za korisnika, mi ćemo čuvati poslednje stvari koje ste tražili. Ove informacije se obično čuvaju najviše 24 sata i koriste se samo da bi vaša poseta bila prijatnija.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Kada napravite rezervaciju kod nas, po potrebi se čuva više informacija.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Tehnički podaci obrasca za rezervaciju se snimaju i čuvaju najviše 60 dana. Ovo je potrebno kako bi se rezervacije na zahtev mogle pretvoriti u pune rezervacije kada rezervacija bude odobrena i radi analize od strane naših timova u slučaju da postoji problem sa rezervacijom. Ako niste bili prijavljeni kada ste napravili rezervaciju, poslaćemo vam imejlom korisničko ime i lozinku kako biste mogli da vidite svoju istoriju rezervacija i iskoristite svoje pravo da budete zaboravljeni (RTBF) ako to želite.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Podaci uneti u formular za rezervaciju, na primer ime, adresa e-pošte, prava adresa, čuvaju se najviše 365 dana nakon datuma završetka rezervacije (napuštanje objekta). Ove informacije se čuvaju u šifrovanoj formi u našoj bazi podataka tako da samo ovlašćene osobe mogu da ih vide. Ako napravite rezervaciju, po zakonu moramo da čuvamo vaše lične podatke dok je rezervacija važeća. Kada se rezervacija završi, bilo zato što je otkazana ili ste odjavljeni, tada ćete moći da iskoristite svoj RTBF tako što ćete se prijaviti i posetiti stranicu „Vaši podaci“. Informacije o fakturi za izvršene rezervacije i dalje će biti bezbedno uskladištene u našoj bazi podataka kako bismo bili sigurni da se pridržavamo relevantnih poreskih zakona, ali ćete moći da uklonite sve druge lične informacije nakon što rezervacija bude završena.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Kada pristanete da se vaši podaci čuvaju na gore opisani način, mi smo zakonski obavezni da sačuvamo ovu saglasnost u našoj bazi podataka. Ove informacije će uključivati vašu IP adresu i sadržaj obrasca za prijavu. Zadržaćemo ovo obaveštenje o saglasnosti na neodređeno vreme (ovo je zakonski zahtev).');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Još nam niste rekli da li možemo da prikupljamo lične podatke o vama');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Dali ste saglasnost da prikupljamo neophodne lične informacije za preuzimanje rezervacija');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Rekli ste nam da ne prikupljamo lične podatke');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Dozvole aplikacija');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Ovo su detalji koje za vas cuvaju razliciti objekti. Razliciti objekti mogu imati razlicite evidencije, u zavisnosti od toga cta ste uneli kada ste napravili rezervaciju.');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Ovo je glavni skup podataka koji cuvamo za vas, za razliku od onih koje ste podelili sa razlicitim objektima.');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Evo ličnih podataka koje čuvamo na ovoj veb stranici za vas. Konstruisan je u JSON (JavaScript Object Notation) formatu koji je lagan format za razmenu podataka. Ljudima je lako čitati i pisati, a mašinama je lako raščlaniti i generisati.');

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Anonymised');

jr_define('_JOMRES_GDPR_MY_DATA', 'Vaši podaci');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Prihvatanjem ovog Ugovora o uslovima korišćenja (ovaj „Ugovor“), saglasni ste da:

<ul>
	<li>
		Ste ovlašćeni da rezervišete smeštaj na ovom veb sajtu;
	</li>
	<li>
		Imate najmanje 18 godina;
	</li>
	<li>
		Posedujete zakonska ovlašćenja da kreirate obavezujuću zakonsku obavezu;
	</li>
	<li>
		Vi ćete koristiti Sajt u skladu sa ovim Ugovorom;
	</li>
	<li>
		Vi ćete koristiti Sajt samo da napravite legitimne rezervacije za sebe ili za drugu osobu za koju ste zakonski ovlašćeni da delujete;
	</li>
	<li>
		Obavestićete te druge osobe o ovom Ugovoru koji se primenjuje na rezervacije koje ste napravili u njihovo ime, uključujući sva pravila i ograničenja koja se primenjuju na njih;
	</li>
	<li>
		Sve informacije koje vi dostavite na ovu Veb lokaciju su istinite, tačne, aktuelne i potpune; i
	</li>
	<li>
		Čuvaćete informacije o svom nalogu i nadziraćete ga i bićete u potpunosti odgovorni za svako korišćenje vašeg naloga od Vas ili bilo koga drugog osim Vas.
	</li>
</ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'Bezbednost i transparentnost su nam važni.');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'Svoju odgovornost u vezi sa čuvanjem vaših podataka shvatamo veoma ozbiljno. Sve informacije koje mogu da identifikuju ličnosti (PII) se čuvaju šifrovane u našoj bazi podataka pomoću industrijskih standardnih algoritama kako bi se osiguralo da samo ovlašćeni korisnici mogu da vide ove informacije.');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Možete preuzeti sve PII podatke koje čuvamo za vas.');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Preuzmi');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Pravo Na Zaborav (RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'Verujemo da biste trebali biti u mogućnosti da <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">izbrišete</a> svoje <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">lične podatke </a>ako želite i ako je to izvodljivo. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Niste registrovani na ovom sajtu. Vaša opšta lokacija (država) i IP adresa će biti sačuvani najviše 24 sata, a zatim će biti izbrisani.');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Registrovani ste na sajtu i nemate nerešene ili aktivne rezervacije. Možemo da anonimiziramo većinu informacija koje trenutno imamo za vas. Da li biste želeli to da uradite? ');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Napomena: Ovo ne briše vaš nalog, već samo anonimizira našu evidenciju tako da vaš nalog ne može biti povezan sa vama kao osobom. Po zakonu moramo da nastavimo da čuvamo vaše podatke za potrebe fakturisanja, ali ćemo izbrisati sve podatke o gostima.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Registrovani ste na sajtu, ali imate neizvršene rezervacije i u ovom trenutku ne možemo da anonimiziramo vaše podatke. Ovi podaci će se čuvati najviše godinu dana nakon što je rezervacija završena, a zatim će biti izbrisani, ako ne odlučite da ih uklonite pre tog vremena.');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Pošto ste menadžer objekta na našem sajtu, ne možemo vam ponuditi mogućnost automatskog brisanja vaših podataka. Umesto toga, kontaktirajte nas direktno kako bismo mogli da vaš objekat uklonimo sa sajta ili dodamo drugom menadžeru ako to želite. Kada to uradimo i uklonimo vaš status menadžera objekta, moći ćete automatski da izbrišete svoje podatke.');

jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Zaboravi me (obriši sve moje podatke)!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Ovo se ne može poništiti!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Vaši podaci su obrisani!');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.');


jr_define('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define('EMPTY_TEMP_DIR_DONE', 'Temporary files deleted');

jr_define('MACHINE_TRANSLATION', 'Machine translations');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Tipovi soba');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Novi tip sobe');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Na ovoj stranici možete kreirati i uređivati tipove soba. Ove vrste soba biće specifične samo za ovaj objekat. Kada postavljate svoj objekat, prvo su vam potrebne neke vrste soba. Možete koristiti ili one tipove soba koje je napravio administrator ili možete dodati svoje (npr. Superior soba, Apartman LUX i slično). Kada imate jednu ili više vrsta soba, možete kreirati sobe tog tipa. Nakon što imate sobe, možete kreirati tarife (cene) za te sobe jer su tarife povezane sa tipovima soba.');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.');


jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Ne bi trebalo ponovo da koristite istu adresu e-pošte za svaku rezervaciju.<br/>Ako imate jedinstven domen (npr. ne Gmail adresu e-pošte) za svoje preduzeće, koristite broj telefona gosta kao njegovu adresu e-pošte. Adresa e-pošte bi tada izgledala otprilike kao 123456@mojdomen.com<br/>Ovo će osigurati da se novi gost kreira kada napravite rezervaciju .");

jr_define('_JOMRES_LOGIN_USERNAME', 'Email adresa');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Lozinka');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Drago nam je što ponovo želite da rezervišete kod nas. Da biste mogli da upravljate svim vašim rezervacijama, potrebno je da se prijavite kako bi rezervacija mogla da se doda na vaš nalog. Ovo takođe osigurava da ste ovlašćeni da koristite navedenu email adresu.");

jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Ako ne znate svoju lozinku, možemo vam poslati novi email za poništavanje lozinke. Pratite uputstva u toj email poruci da biste resetovali lozinku.');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'Zaboravili ste lozinku?');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Želite da se vaše ime ne prikazuje?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Ako prilikom ocenjivanja ne želite da se prikazuje vaše ime, koristićemo vaše inicijale.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' je rekao/la ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Odgovori na ovu recenziju');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Vaš odgovor na ovu recenziju napišite ovde.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Vaš odgovor');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Sadržaj recenzije');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Pre nego što pošaljete Vaš odgovor na recenziju, morate pročitati sledeće. Slanjem odgovora potvrđujete da se slažete sa ovim uslovima i odredbama korišćenja.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Koje su naše smernice za odgovor na recenziju?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Odgovarate na recenziju za vaš objekat. Vaš odgovor <em>ne sme</em> koristiti kao ulazak u bilo kakvu vrstu rasprave. Ako želite da prijavite recenziju, morate koristiti opciju "Prijavi Recenziju",  a ova stranica nije namenjena tome.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Kada ostavite odgovor na recenziju, nećete više biti u mogućnosti da ga izmenite.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Dozvoljeno je i poželjno');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>Detaljan odgovor na recenziju.</li>
    <li>Budite iskreni i pošteni.</li>
    <li>Razumni odgovori na probleme recenzenta (zapamtite, drugi možda imaju slične probleme, ali nisu iskoristili priliku da objave recenziju).</li>
    <li>Podstaknite gosta da direktno stupi u kontakt sa vama radi rešavanja problema.
    <li>Uvek zapamtite da će budući gosti videti vaš odgovor. Budite profesionalni u svakom trenutku.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Nije dozvoljeno');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Bilo kakva vrsta rasprave.</li>
    <li>Pitanja recenzentu ili drugima.</li>
    <li>Nedolično ponašanje (uključujući psovke).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Brojevi faktura');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Da li želite da koristite nasumično izabrane brojeve faktura?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Možete da podesite sistem da koristi prilagođene brojeve faktura. To će uticati samo na nove fakture.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Početni broj/brojevi');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Brojevi se kreiraju uzastopno. Koji broj treba da bude prvi?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Koji format treba da ima broj fakture?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Konfigurišite format broja fakture ovde. Format može da izgleda kao {N}/{D} ili {N}/{I} gde je N automatski generisani broj, D = datum u formatu GGGGMMDD (20190131) ili I = GGGG (2019). Svi drugi alfa numerički znakovi koji nisu u vitičastim zagradama biće ostavljeni sami, tako da bi obrazac koji izgleda kao {N}/{D}-L rezultirao brojem fakture (21) koji izgleda otprilike kao 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Doplata');
jr_define('_JOMRES_SURCHARGE_DESC', 'Dodatna naknada koja će biti dodata sobi kada se rezerviše (obračunava se po danu)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Preporučio');
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
jr_define('_LICENCE_EXPIRED_POST', 'Connect to us for trouble free payment solutions and get access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Get access to all plugins now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Connect to us for trouble free payment solutions and get access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Get access to all plugins now!');

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


jr_define('GUEST_PROFILE_INFORMATION', 'Ovo su podaci vašeg profila gosta, polje sa ovom ikonicom <i class="fa fa-users" aria-hidden="true"></i>
 je javno vidljivo (zeleno polje), dok polje sa ovom ikonicom <i class="fa fa-user-secret" aria-hidden="true"></i> (roze polje) možete videti samo Vi, Vaš domaćin (vlasnik smeštaja) i administrator sajta.<br/><br/>Domaćini mogu da vide privatne podatke samo ako ste već napravili rezervaciju kod njih..<br/><br/>Vaše informacije su bezbedno šifrovane i uskladištene u našoj bazi podataka pomoću AES-256 enkripcije.');

jr_define('GUEST_PROFILE_OPTIONAL', 'Ova polja su opciona i ne morate ih popuniti, ali domaćini mogu da koriste informacije ovde da utvrde da li smatraju da vam mogu verovati, pa je bolje da dodate informacije. Zapamtite, Vi tražite da ostanete u njihovom objekt, a oni mogu da vas odbiju ako smatraju da ne odgovarate ili da vaša biografija ne sadrži dovoljno informacija.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Vozačka dozvola');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Broj paoša');
jr_define('GUEST_PROFILE_IBAN', 'Ibns broj');
jr_define('GUEST_PROFILE_ABOUT_ME', 'O meni');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Ovaj odeljak „O meni“ je javno dostupan, tako da ne stavljajte nikakve privatne informacije. Uz to, potrudite se da napišete o sebi onoliko koliko vam je prijatno da delite, kao što su vaša interesovanja, vaši hobiji itd. Domaćini će želeti da osete da vam mogu poveriti svoju objekat za boravak u istom. Uverite se da je vaša slika prava slika vas, a ne npr. vašeg psa ili automobila.');

jr_define('GUEST_PROFILE_PREFERENCES', 'Ovde unesite sve posebne zahteve koje imate, kao što su potrebe za lakoćom pristupa. Oni neće biti prikazani na vašem javnom profilu, ali će biti dodati u informacije o rezervaciji kada napravite rezervaciju.');

jr_define('VIEW_HOST_PROFILE', 'Profil vlasnika');

jr_define('GUEST_PROFILE_TITLE', 'Profil gosta');
jr_define('GUEST_PROFILE_TITLE_MY', 'Moj profil');

jr_define('GUEST_PROFILE_WELCOME', 'Zdravo, dozvolite mi da vam kažem nešto o sebi.');
jr_define('GUEST_PROFILE_MY_NAME', 'Moje ime je ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' i moje mesto je ');
jr_define('GUEST_PROFILE_IN', ' država ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Moje privatne informacije');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Dajemo sve od sebe da potvrdimo informacije o gostima i domaćinu, ali vi sami treba da izvršite proveru i sami odlučite da li je ova osoba vredna poverenja ili ne.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Moji objekti');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzije');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Ovo je ono što sam napisao o ovom objektu : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Ocena kojom sam ocenio ovaj objekat je : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzije');
jr_define('GUEST_PROFILE_OF_ME', 'Šta drugi ljudi kažu o meni');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Šta ovaj domaćin kaže o meni');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Oceni gosta');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Moja ocena za ovog gosta ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Evo nekoliko primera ocena gostiju da biste dobili ideju : <br/>
	
	<ul>
	<li>(ime gosta) je bilo zadovoljstvo ugostiti! Ostavili su prostor čistim i bili su tihi tokom vikenda. Imali smo super komunikaciju i radujem se što ceu ponovo rezervisati!!</li>
    <li>Volim što sam za gosta imao (ime gosta) jer su se on i njegova devojka  ophodili prema mestu s poštovanjem, odlično su se proveli i uživali u svemu. Bili su sjajni sa iznajmljivanjem prostora i nadam se da ću ih ponovo ugostiti.</li>
    <li>Sva moja kućna pravila su poštovana (ime gosta) i mogli su da uđu i odu kao da nisu tu. Voleo sam što su tamo jer su bili ljubazni i tihi. Toplo ih preporučujem drugima!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Označi kao Ne prikazuj');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Rezrvacija označena kao Ne prikazuj');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Rezervacija');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'Nema prikaza');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'Statistika za ovog korisnika');

jr_define('BOOKING_NOSHOW_INFO', 'Informacije o rezervaciji i nepojavljivanju se preuzimaju iz mreže u vreme rezervisanja. Preuzeto je iz anonimnih podataka i možete ih koristiti da odlučite da li postoji rizik da ovaj gost ne ispuni rezervaciju. Ako sistem prijavi da su podaci nepoznati, to je verovatno zato što ovaj sistem nije prepoznao gosta na mreži, jer prvi put rezerviše ali to ne znači da ovaj gost ipak neće napraviti rezervaciju.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define('CMF_CONFIG_KEY', 'Channel Management Framework Key');
jr_define('CMF_CONFIG_KEY_DESC', 'The Channel Management Framework license key. You will need to provide this key to be able to download Channel Management Framework plugins.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Vaš objekat nije odobren');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Vaša objekat nije odobren ili je suspendovan. Ako mislite da je ovo učinjeno greškom, molimo Vas da nas kontaktirate. ");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "Da li je tip gosta dete?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Podesite ovo na DA ako bi ovaj tip gosta bio klasifikovan kao tip gosta Dete.");

jr_define('_JOMRES_GUESTTYPES_INTRO', "Ako želite da naplaćujete po osobi po noćenju, moraćete da kreirate tipove gostiju.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Možete da kreirate onoliko tipova gostiju koliko vam je potrebno, pokušajte da počnete tako što ćete kreirati samo jedan tip gostiju koji se zove „Odrasli“. Ostavite sva podešavanja na podrazumevanim vrednostima. Zatim, ako na primer želite da deci mlađoj od 12 godina date popust od 50%, kreirali biste novi tip gostiju i nazvali ga „Deca mlađa od 12 godina“. Podesite „Dodati neslaganje?“ opciju na - (negativno) i postavite 'Neslaganje' na 50. To znači da kada se deca dodaju u rezervaciju, njima se naplaćuje 50% cene sobe za sobu. ");

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Set prices manually");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Set minimum nights manually");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Podesi minimum noćenja");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Podesite <em>cenu noćenja</em> po danu u nedelji");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Podesite <em>cenu noćenja</em> prema periodu");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Podesite <em>minimalni broj noćenja</em> prema periodu");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Birači datuma i unos cene vam omogućavaju da postavite jednu cenu za dati period. Odaberite datum početka i završetka, unesite cenu i kliknite na dugme Postavi cenu po noćenju.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Birači datuma i unos minimalnog broja noćenja vam omogućavaju da postavite jednu vrednost za minimalni broj noćenja za dati period. Odaberite datum početka i završetka, unesite broj za minimalni broj noćenja i kliknite na Podesi minimalno noćenja.");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Koristite ovaj padajući meni da biste menjali između podešavanja cena za pojedinačne datume i podešavanja minimalnih noćenja za pojedinačne datume. Možete da koristite birač <em>po danu u nedelji</em> birač po <em>opsegu datuma</em> ili da podesite cene/minimalni broj noćenja tako što ćete ručno izmeniti datume.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Koristite ovaj padajući meni da biste menjali između podešavanja cena za pojedinačne datume i podešavanja minimalnih noćenja za pojedinačne datume. Možete da koristite birač <em>prema rasponu datuma</em> ili da podesite cene/minimalni broj noćenja tako što ćete ručno izmeniti datume.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Podesi cene ili minimum noćenja");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Podesite <em>minimalni broj noćenja</em> po danu u nedelji");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Polja za dan u nedelji vam omogućavaju da podesite minimalni broj noćenja za određeni dan u nedelji, kada kliknete na dugme za dan u nedelji, svi dani u nedelji će biti podešeni na to podešavanje minimalnog broja noćenja.");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Ručno podešavanje cena i minimalnog broj noćenja");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Podesi cene");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Podesi min noćenja");

jr_define('_JOMRES_MICROMANAGE_PRICE', "Po noćenju");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Min noćenja");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Max noćenja");

jr_define('_JOMRES_MICROMANAGE_INTRO', "Ovde možete kreirati svoje tarife, koje su povezane sa tipovima soba koje imate u svom objektu. ");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Najčešće korišćene opcije");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Uputstva i instrukcije");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Ako želite da dodate različite cene za različit broj gostiju, onda <em>možete kreirati više od nekoliko tarifa za svaki tip sobe</em> i imati različite minimalne/maksimalne vrednosti gostiju u tim tarifama.");

jr_define('_JOMRES_MICROMANAGE_INFO', "Dajte naziv tarifi, definišite maksimalan broj noćenja, kao i minimalni i maksimalan broj gostiju koji su potrebni u formularu za rezervaciju pre nego što se tarifa ponudi.<br/><br/> Koristite tablu za biranje datuma da biste dodali cene i podešavanja minimalnog broja noćenja u raspon datuma ili direktno uredili unose. Ako ne želite da se tarifa uopšte nudi na određene datume, ostavite cenu podešenu na 0 ( nula ) na te datume. <br/><br/> Možete imati različite minimalne brojeve noćenja na različite datume, tako da ako želite duže rezervacije tokom npr. festivalskih/konferencijskih nedelja, možete podesiti minimalan broj nocenja da budu vecie samo u tim periodima.<br/><br/>Ako naplaćujete po osobi po noćenju (PPPN), možete da omogućite tu postavku u Podešavanja > Opšte konfiguracije > Tab Tarife & Valuta, a zatim kreirate tipove gostiju koje su vam potrebne u Podešavanja > Tipovi gostiju.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Extra opcije");

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Ovo su dodatne opcije koje se ne koriste tako često, ali su vam ipak dostupne. <br/><strong>IGNORIŠI PO OSOBI PO NOĆENJU (PPPN)</strong> Znači ignorisanje po osobi po noći. Možete imati nekoliko različitih tarifa za isti tip sobe, na primer od kojih se jedna naplaćuje po osobi po noći, a druga ne.<br/><strong>DOZVOLI VIKENDE</strong> Opcija Dozvoli vikende vam daje mogućnost da napravite tarifu koja je dostupna samo radnim danima, na primer ako želite posebnu tarifu za poslovne putnike. U tom slučaju biste postavili opciju na Ne i minimalne noći na 1, a maksimalne noći, najviše 5. <br/><strong>SAMO VIKENDI</strong>  Opcija Samo vikendi je suprotna opciji Dozvoli vikende. Ono što smatrate danima vikenda može da se konfiguriše u podešavanjima konfiguracije objekta. Ovo vam daje mogućnost da definišete cenu samo za vikend koju biste možda želeli da ponudite za posebne događaje.<br/><strong>DOLAZAK DAN U NEDELJI</strong> Ova opcija vam daje mogućnost da prisilite prijavu da bude samo određenim danima u nedelji i najbolje je koristiti u kombinaciji sa Opšte Konfiguracije > Kartica Rezervacije > Opcije fiksnih perioda. Većina korisnika će želeti da ovu opciju ostavi na Sve.<br/>Poslednje dve opcije,<strong>Minimalan broj soba je već izabran</strong> i <strong>Maksimalan broj soba je već izabran</strong> su veoma specijalizovane i korisne za nekretnine sa izuzetno komplikovanim tarifama. <em>Osim ako nemate posebne potrebe, trebalo bi da ostavite ove opcije na podrazumevana podešavanja.</em> Koristite ih ako želite da se ova tarifa nudi samo kada je gost već izabrao X broj soba u formularu za rezervaciju, tako da na primer možete imati jednu osnovnu tarifu gde su te opcije ostavljene kao podrazumevane, i drugu tarifu gde je za Minimalan broj soba već izabrana opcija postavljena na 1, onda će ova druga tarifa biti ponuđena u obrascu za rezervaciju kada soba bude izabrana.");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Možete kreirati više tarifa za isti tip sobe, tako da možete kreirati jednu tarifu za min/max dana od 1 - 7 i drugu tarifu gde je minimalno dana 7, maksimalno dana 14 itd. Ovo vam omogućava da kreirate šeme cena koje su jednostavne ili komplikovane koliko vam je potrebno. Takođe vam omogućava da kreirate više tarifa sa različitim uslovima, tako da možete imati drugi set tarifa gde je cena niža za noćenje sa doručkom i drugi skup skupljih tarifa za noćenje, doručak i večeru.");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Podesite samo dane za biranje datuma");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Property Categories');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Edit Property Category');
jr_define('_JOMRES_STOP_READTHISFIRST1', "Stop!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Thanks for installing Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3', "Property management is performed in public facing pages, not the administrator area.");
jr_define('_JOMRES_STOP_READTHISFIRST4', "If you are not familiar with Jomres please visit the Help section > Getting Started page.");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Join the Jomres Syndicate");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Once you have your site setup and ready to start receiving visitors, join the Jomres.net syndicate and get your properties listed on other Jomres sites.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "You need at least one room of one of the following types before you can create a tariff :");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Go to Settings > Rooms and create a room first, once  you have done that you will be able to create a tariff for that room type.");

jr_define('JOMRES_PLATFORM', "Jomres Platform");


jr_define('JOMRES_PLATFORM_CONNECTED', "Connected");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Set this to Yes if you have already connected your Stripe account with the Jomres Platform.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live Account number");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "This is your Stripe Account id which can be found in your Stripe Dashboard under Settings > Account information and looks like acct_xxxxxxxxx You would use this field if you have multiple Jomres installations and you want to use the same account across all sites and you have already connected to us. If you have not connected to the Jomres Platform, it's not sufficient to enter your details here. Instead, please visit the Get Connected menu option in the toolbar, under the Help section. If you want to test payments, in the Debugging tab of Site Configuration set your site from Production to Development.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live secret key");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Go to Developers > API keys in your Stripe Dashboard to find your secret keys. These are used by the system to verify booking data returned from the payment form is valid and that deposits have been paid before saving the booking.');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Stripe test secret key");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', ' ');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standardna Tarifa');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Noćenja');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'How many people can this property accommodate?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'The number of guests in your daily price');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Cena za dodatne odrasle osobe ');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Deca');

jr_define('_JOMRES_FAQ', 'Često postavljana pitanja');

jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Per person per night?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'Modifikator za 7 dana');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Popust na dnevnu cenu ako je rezervacija za 7 dana ili više. Ostavite ovaj set na nulu ako ne želite da se popust primenjuje.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'Modifikator za 30 dana');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Popust na dnevnu cenu ako je rezervacija za 30 dana ili više. Ostavite ovaj set na nulu ako ne želite da se popust primenjuje.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Odrasli');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Cena na bazi 2 odrasle osobe');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Booking discounted from ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', ' to ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', ' because the booking is greater than 7 days.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', ' because the booking is greater than 30 days.');


jr_define('JOMRES_CITY_TAX_HEADING', 'Boravišne takse');
jr_define('JOMRES_CITY_TAX_VALUE', 'Vrednost boravišne takse');
jr_define('JOMRES_CITY_TAX_METHOD', 'Metod obračuna poreza
');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Pojedinačna naknada');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Po noćenju');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Po gostu');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Po gostu po noćenju');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Procenat vrednosti rezervacije');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Taksa za čišćenje');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Cena naknade za čišćenje');


jr_define('JOMRES_COMPATABILITY_MODE', 'Force Compatability property configuration mode?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Compatability property configuration mode forces several things to happen. In older versions of Jomres, property managers could choose which tariff editing mode to use, and a variety of other settings (some of which may appear confusing) may have been available to them. Enabling Compatability configuration forces all new properties to use just the Standard tariff editing mode, which models the booking.com property configuration functionality with respect to pricing, child pricing etc. It is recommended that for installations that were created after 9.22.0, this option should be set to Yes, but for older installations it's up to you to decide if new properties should be automatically set to Compatability mode when they are created.");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Da li je dozvoljen boravak deci mlađoj od 18 godina??');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Podesite ovu opciju na Da ako je deci dozvoljen boravak. Ako ste podesili opciju na DA, onda ćete u meniju Podešavanja imati opciju pod nazivom SMERNICE ZA DECU gde možete da menjate podešavanja vezana za decu.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Smernice za decu');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'Od kog uzrasta je deci dozvoljen boravak u objektu??');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Po detetu, po noćenju');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Po detetu, po boravku');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Stope za decu');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nova stopa za dete');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Izmeni stopu za dete');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Besplatne ili plaćene stope za decu kreirajte ovde. Cene će se primenjivati samo kada ste kreirali nivoe popunjenosti za tipove soba.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Godine od');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Godine do');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'Po noćenju ili po boravku?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Stopa');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Ako je nula ili nije podešeno, deca ovog uzrasta boraviće besplatno.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Ages at checkin');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Ages ');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Nivo punjenosti');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maksimum odraslih osoba');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maksimum dece');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maksimalna popunjenost - maksimalan broj gostiju u objektu');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Izmenite nivo popunjenosti za : ');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Edit occupancy levels for this room type. Do not include guests sleeping on cots (those are added by creating an Extra) ');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Koliko bi trebalo da bude naplaćeno za svaku dodatnu odraslu osobu?');

jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'You have not configured child rates yet.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Set child rate(s) now');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'You have configured your property to allow children but you have not set any occupancy levels for children yet. You can change this setting in Settings > Property Configuration > Bookings tab.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Set occupancy levels');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Svaki put kada uređujete sobu ili svoj tip objekta, trebalo bi da proverite i ažurirate nivoe popunjenosti za svoju nekretninu/sobe jer oni utiču na broj gostiju koji mogu biti prihvaćeni u obrascu za rezervaciju.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Odrasli');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Deca');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Admin options level');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres has many menu and configuration options that you can use when configuring your site. The huge majority of them you will never need to change so they are hidden by default. You can choose to show those options by setting the Admin Options level.  Basic level shows you just what you need when setting up a site for the first time. Common level shows you those options which are most commonly changed, and Everything shows you all possible settings and menus options in the administrator area.');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Everything');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Can we collect information about how you use Jomres?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'We would like to collect information about how you use Jomres. No personally identifyable information will be stored, usage will be anonymised and only used to help us to understand how people use Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', ' Yep, that\'s ok ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', ' No, I don\'t agree ');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Will you be taking bookings for more than one property?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres can be used for single or multi-property sites. If you will be taking bookings for just one property then many options will be redundant and potentially confusing. You can change this setting later in the Settings > Site Configuration > Portal functionality tab.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', ' Just one property ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' I will be listing more than one property ');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Which version of the Bootstrap framework does your template/theme support?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Each version of the Bootstrap framework requires slightly different html markup. Jomres has three sets of Bootstrap compatible template sets, one for each Bootstrap version. You must ensure that you configure it to use the appropriate template set. If you don't then output such as layout, modals and menus will not work properly. If you decide to use a template/theme later with a different Bootstrap version you can change the Bootstrap template set that Jomres should use in Admin > Jomres > Settings > Misc tab. <br/><br/>Joomla 3 is distributed with Bootstrap 2 by default, Joomla 4 will use Bootstrap 5. Jomres Leohtian template (Joomla) and theme (Wordpress) uses Bootstrap 3. Different templates/themes may be distributed with their own Bootstrap files so if you are in any doubt, please contact your template/theme's developer.");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Odvojiti decimale iz izlaznih cena?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Apply group by fix?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Some mysql installations may have a problem with Jomres Queries in the List Properties, List guests and List invoices page. If those pages say that they are showing X of Y results but nothing appears in the list, then setting this option to Yes may fix the issue. It will not if you are on shared hosting and the hosting service does not allow your mysql user to issue the "SET GLOBAL sql_mode=" command. ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'This is a channel property, it cannot be administered locally, visit the channel management framework page to find the property\'s remote administration link');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", " No Bootstrap in theme ");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Social media links');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Put your social media account names here, for example "jomres", not the entire url');


jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Comma seperated list of languages your organisation speaks');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url to your organisation logo');


jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Property type images");


	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "Need help booking?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Call our customer services team on the number below to speak to one of our representatives who will help you with all of your holiday needs.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "Why book with us?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "We offer the best booking rates");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "We have the best priced properties currently on the market.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "No booking fees. Save money!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "Great selection of properties");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " properties");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " guest reviews");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "We’re Always Here");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Call or email us, anytime");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Get 24-hour support before, during, and after your trip");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Social media");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Find us on social media");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Outstanding");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Exceptional");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Fabulous");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Superb");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastic");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Very good");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Good");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "New listing");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Discounted");


	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Where do you want to go?');
	jr_define('DATA_SOURCES_TITLE', "Refresh data sources");
	jr_define('DATA_SOURCES_TITLE_INFO', "Data sources refreshed. Data sources are used by autocomplete input fields in the search widget and they are usually updated automatically, however this page forces the data to be updated manually if required.");


	jr_define('_OAUTH_TOKEN_REQUEST_URI', "To send a token request, send the request to this url");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "The main view property script");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "The property uid of the property to be viewed");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "The default template is property_details.html, with this argument you can define a different property details template to show.");

	jr_define('JOMRES_UPDATES_TITLE', 'Jomres Updates');
	jr_define('JOMRES_UPDATES_INFO', "This page can download and install the most recent version of Jomres for you. It uses it's own functionality and not that of the host CMS therefore if a problem occurs during the host CMS's update you can use this page to force a reinstallation of the most recent version of Jomres.");


	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Property managers can use the editing mode in the frontend to customise strings for each property, however this can only work if your WordPress Permalink setting is set to Plain (http://www.domain.com/?p=123). Once  you have done that frontend users will be able to customise strings, such as room names and other labels, that are specific to unique properties. ');


	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Label editing mode');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'This feature is used to change item labels, usually into different languages.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Editing mode allows you to rename labels that are unique to individual properties. When you use Editing mode to rename a label, the change will only appear on that property listing. For example, on one property you might want to use the word "Prices" and on another the word "Rates". Not all labels can be changed, for example room type names are site-wide labels, so they cannot be changed, but usually anything that is unique to an individual property can be changed.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'If the site supports multiple languages, while using one language you can create an item that is unique to an individual property. When you then change your active language, you can use the editing mode to rename that label, entering a suitable translation in the current language. You can continue changing the active language to enter a suitable translation for that label for each language the site supports.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Label editing mode switch');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'In this screenshot we see the Editing mode switch. The Editing mode is OFF and the labels appear as normal: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Label editing mode enabled');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'In this screenshot we see that, while in Editing mode, the labels you can rename are highlighted:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Select the item to change');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'When a label is selected a popup appears:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Change the label');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Use the little form to change the label. Click the Tick to finish, or click the X to cancel editing:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Label changed');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Once you have saved the change then the label is updated in the page. You can disable editing mode now:');


	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Translations');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'On this page you can translate labels from one language to another. When you visit the page you will see strings that you have already created and their value in whatever language you are currently using. At the top set the target language, then for the labels you want to translate, click on the label and a popup will let you enter your new translation. For longer lines of text you can paste in the text from another source. Remember that any HTML will be stripped out.<br/>
You can leave the target language set to your current language and use this page to rename items here, instead of visiting their individual pages.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Target language');


	jr_define('API_CLIENTS_INFO', 'API Clients are Client ID/Secret key pairs that allow remote systems to use API features that you give them permissions to use. On this page you can create as many Client/Secret keypairs as you need, each with any combination of permissions that you require.');
	jr_define('CLIENT_TOKEN', 'Access Token');
	jr_define('CLIENT_TOKEN_INFO', "Access tokens can be requested using the Client ID and Secret. Some Clients may already have an access token created for it, in which case you can use this access token. If you believe that the token may have been compromised, or you just want to change it, you can expire the client's tokens. All tokens associated with the client/secret pair will be expired.");
	jr_define('DELETE_TOKEN', 'Expire Tokens');


	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Choose your currency" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Choose your language" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER',"Register" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "Sign in");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "List your property");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "You must register and login first");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"Show filters");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"Hide filters");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "Text shown on pages is stored in language files. The Jomres system of showing language strings on the page means that you don't need to directly edit these language files. Instead, you can edit those strings on this page by clicking on the highlighted text and putting the new text you want to show in the input form that opens up. When you click the Check mark, then that change is saved to the database. This means that all of your changes are stored and are not overwritten when you update Jomres. If you want to change text for different languages use the language selection dropdown on the top right, to change the current language. Text strings are sometimes repeated in different places in language files because they are used in different contexts so don't forget to use the browser's search feature to make sure you've edited the correct string. ");


	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "All property management is performed in the frontend of your site. You are not currently logged in as a property manager, so please login first and then you will be able to administer your properties.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "When Jomres is first installed it will create a Super Property Manager for the administrator user, and add a new option to the Main Menu called Bookings. Do not delete this menu item. Login using the button provided and visit the Bookings page to start administering properties. ");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_INFO', 'On this page you can configure which payment gateways you want to receive deposit payments through. You will need an account on the payment gateway. The settings page will provide you with instructions on how to configure the gateway. If the gateway has a test mode and if Test Mode is enabled, you as a property manager will be able to use the payment gateway to test your configuration. When Test Mode is disabled only non-Manager users will see the payment gateways during the booking process.');

	jr_define('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', "Test mode");

	jr_define('JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', "Development mode is enabled, therefore if you use this feature you will be updating your installation of Jomres to the Nightly branch. This is the most recent version of Jomres and may or may not be stable. If you do not want to update to Nightly please visit Admin > Jomres > Settings > Site Configuration > Debugging tab and set the Production/Development option to Production.");

	jr_define('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN', "Include children in occupancy level checks?");
	jr_define('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN_DESC_MRP', "When guests make bookings, the rooms have a maximum number of guests that they can accommodate.  If the total number of guests exceeds the number of guests the selected rooms can accommodate, then the booking form will tell them that they need to select more rooms.    
 
 If you set this option to Yes then the number of children will be included in the total number of guests check. If you set this option to No then the number of children will not be included in the total number of guests check. This means that if you set this option to No then a party of 4, for example, 2 adults and 2 children, will be able to book a double room that occommodates 2 adults. ");


	jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_SRP', 'Select Yes if you want to charge per-person-per-night.');

	jr_define('_JRPORTAL_FEATUREDLISTINGS_WORD_FEATURED',"Featured");