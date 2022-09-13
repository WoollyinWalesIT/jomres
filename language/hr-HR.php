<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
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
	jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Brza rezervacija');
	jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Prikaži profile');
	jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Opće postavke');
	jr_define('_JOMRES_COM_MR_BACK', 'Natrag');
	jr_define('_JOMRES_COM_MR_YES', 'Da');
	jr_define('_JOMRES_COM_MR_NO', 'Ne');
	jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Novo');
	jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Novi objekt');
	jr_define('_JOMRES_COM_MR_NEWGUEST', 'Novi gost');
	jr_define('_JOMRES_COM_MR_SAVE', 'Spremi');
// View bookings
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Ime');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Dolazak');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Odlazak');
	jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Korisnicko ime');
	jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Pristupna razina');
	jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Korisnik izmjenjen');
// Edit bookings
	jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Sve rezervacije');
	jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Uredi rezervacije');
	jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Dolazak/Odlazak');
	jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gost');
	jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Soba');
	jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Placanje');
	jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Ime');
	jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Prezime');
	jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Posebni zahtjevi');
	jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Dodatni zahtjevi se posebno naplacuju');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Poništi rezervaciju');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Broj kuce ili naziv kuce');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ime');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Grad');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Poštanski broj');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefonski broj');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Broj mobitela');
	jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email');
	jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Ne možete poništiti ovu rezervaciju jer je gost vec prijavljen');
	jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Polog nije placen');
	jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potvrdi poništenje');
	jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervacija poništena');
	jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dana do dolaska');
	jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tip rezervacije');
	jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Crno');
	jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepcija');
	jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
	jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Ime sobe');
	jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Broj sobe');
	jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Kat');
	jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Pristup za invalide');
	jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Maksimalni broj osoba');
	jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Vrsta sobe');
	jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Opis vrste sobe');
	jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Karakteristike sobe');
	jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Polog placen');
	jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Unesite polog');
	jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Ukupno za platiti');
	jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Oznaka pologa');
	jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervacija');
	jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Polog');
	jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Polog spremljen');
// Edit Language
	jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Naše sobe');
	jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Objekt');
	jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tip sobe');
// Display guest form
	jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Uredite podatke');
	jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Ime');
	jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Prezime');
	jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Kucni broj');
	jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulica');
	jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Grad');
	jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Poštanski broj');
	jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Broj telefona');
	jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Broj mobitela');
	jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
	jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Odaberite');
	jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Broj nocenja');
	jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Ukupno');
// Rooms tab
	jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Prikaži postavke soba i objekata');
	jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Sobe');
	jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Karakteristike soba');
	jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Vrste soba');
	jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Objekt');
	jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Karakteristike objekta');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Sobe');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Vrsta');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Ime');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Broj');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Kat');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Maksimalno osoba');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Karakteristike');
	jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Izmijeni opcije');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Karakteristike sobe');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Opis karakteristika');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Karakteristika sobe dodana');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Mogucnosti sobe izmijenjene');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Vrsta sobe');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Vrsta sobe - kratica');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Vrsta sobe - opis');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Vrsta sobe dodana');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Izmijeni stavku');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Ime');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulica');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Grad');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Županija/Regija');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Država');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Poštanski broj');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Broj telefona');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Karakteristike');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Objekt izmijenjen');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Karakteristike objekta');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Karakteristike objekta - kratica');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Karakteristike objekta - puni opis');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Karakteristika objekta je izmijenjena');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarife');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tarifa - naziv');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Opis');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Vrijedi od');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Vrijedi do');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Dnevna tarifa');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Minimalno dana');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Maksimalno dana');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Minimalno osoba');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Maksimalno osoba');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Vrsta sobe');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorirajte PPPN');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Dozvoli vikende');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Izmijeni stavku');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Kopiraj stavku');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa izrisana');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Izmijeni tarifu');
	jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervacija sacuvana');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Prijavi gosta');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Odjavi gosta');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Izlistaj rezervacije');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Radna ploča');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Gosti - uredi');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Objekti - uredi');
	jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Provjerite dostupnost');
	jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Ime');
	jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Prezime');
	jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Kucni broj');
	jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
	jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Grad');
	jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Poštanski broj');
	jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Broj telefona');
	jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Broj mobitela');
	jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Nema soba koje sadrže sve parametre koje ste vi tražili');
	jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Hvala vam što ste nas odabrali i nadamo se da cete uživati u boravku.<br><br> <b>Ovo je samo preliminarna rezervacija, i nece biti potvrdena dok ne primite potvrdno pismo.');
	jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Prijavite gosta ');
	jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gost je prijavljen ');
	jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Gosti za odjavu ');
// Config panel
	jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Doplate');
	jr_define('_JOMRES_COM_A_TARIFFS', 'Tarife & Valuta');
	jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload datoteka');
	jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Nadoplata za jednu osobu');
	jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Provjerite je li postavljeno na Da ukoliko želite vršiti nadoplatu za jednu osobu');
	jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Troškovi nadoplate za jednu osobu');
	jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Polog je izrazen u postotcima?');
	jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Je li polog postotak od cijele rezervacije? Ako ne, onda polog mora imati određenu vrijednost');
	jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Vrijednost pologa');
	jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Po gostu za noć');
	jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Odaberite Da ako zelite naplacivati po-osobi-za-noc. Ako ne zelite, onda ce troskovi biti izracunati po po-sobi-za-noc osnovi');
	jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Veličina datoteke');
	jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Maksimalna velicina slike u kilobajtima');
	jr_define('_JOMRES_FRONT_MR_BOOKED', 'Rezervirano');
	jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalji rezervacije');
	jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Podsjećamo vas da je rezervacija legalni ugovor, pa ukoliko ste zbog nečega poništili rezervaciju ili skratili vas boravak morat ćete i dalje platiti cijeli iznos vašeg ugovora.');
	jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>	Troškovi poništenja ili smanjenja trajanja boravka:');
	jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Do 14 dana');
	jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Ispis potvrdnog pisma');
	jr_define('_JOMRES_COM_INVOICE_TITLE', 'Ispis predracuna');
	jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Broj nocenja: ');
	jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cijena po nocenju: ');
	jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Ukupno');
	jr_define('_JOMRES_COM_INVOICE_PRINT', 'Ispisi predracun');
	jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Dodaj uslugu na racun');
	jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Opis usluge');
	jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Cijena usluge');
	jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Ostale stavke za naplatu');
	jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Stavke dodate na racun');
	jr_define('_JOMRES_UPLOAD_IMAGE', 'Upload slike');
	jr_define('_JOMRES_FILE_UPLOAD', 'Datoteka Upload-ana');
	jr_define('_JOMRES_COM_A_ODDS', 'Ostalo');
	jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
	jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
	jr_define('_JOMRES_FILE_DELETE', 'Izbriši ovu sliku');
	jr_define('_JOMRES_FILE_DELETED', 'Datoteka izbrisana');
	jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Izbrisi');
	jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nije moguce izbrisati ovu sobu, postoje rezervacije za nju. Ponistite rezervacije pa pokusajte ponovo.');
	jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Soba je izbrisana');
	jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Izbrisite karakteristike sobe');
	jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nemoguce ukloniti karakteristike ove sobe, dodijeljena je nekim sobama. Uklonite karakteristiku sa tih soba i pokusajte ponovno.');
	jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Karakteristika sobe izbrisana');
	jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Izbrisi karakteristiku objekta');
	jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nije mogucee ukloniti karakteristiku ovog objekta, dodijeljena je nekom objektu. Uklonite karakteristiku sa tih objekata i pokusajte ponovno.');
	jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Karakteristika objekta je izbrisana');
	jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Izbrisi vrstu sobe');
	jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Vrsta sobe izbrisana');
	jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Izbrisi objekt');
	jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Objekt izbrisan');
	jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nemate prava da izbrisete ovaj objekat.');
	jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Sirina velike slike');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Kliknite za mapu');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Opis objekta');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Broj prijava');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivnosti u zoni');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Upute za vozace');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Zracne luke');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Ostali prijevoz');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Police i objasnjenja');
	jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresa');
	jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Posjetitelji mogu rezervirati online');
	jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Postavite opciju na Da ukoliko zelite da posjetitelji rezerviraju sobe online.');
	jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervacije su za odredeno razdoblje');
	jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Postavite na Da, i rezervacije će se obavljati samo za određeno razdoblje. Ukoliko je postavljeno na Ne, onda "zadani dan za dolazak" neće biti postavljen na Da (ukoliko želite da gosti dođu na određeni dan) u suprotnom nećete imati dovoljno linkova koji su slobodni u kalendaru.');
	jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Razdoblje rezervacije: ');
	jr_define('_JOMRES_COM_A_BOOKING', 'Rezervirane sobe');
	jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maksimalno razdoblje, npr. 3x7 rezervacijskih razdoblja = 21 dan');
	jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Je li je ovo apartman/ljetnjikovac/vila?');
	jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Prikaži rezervaciju');
	jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Potvrdi rezervaciju');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Ponedjeljak');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Utorak');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Srijeda');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Četvrtak');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Petak');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Subota');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Nedjelja');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Pon');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Uto');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Sri');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Čet');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Pet');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sub');
	jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Ned');
	jr_define('_JOMRES_COM_A_AVLCAL', 'Popunjenost');
	jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Boja fonta za trenutni datum');
	jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Boja fonta za dane u prikazanom mjesecu ');
	jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Boja fonta za dane koji nisu u prikazanom mjesecu');
	jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Boja polja za dane kada je objekat/soba dostupna');
	jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Boja polja za dane koji nijesu prikazani u mjesecu');
	jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Boja polja za zauzete dane');
	jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Boja polja za privremeno rezervirane sobe (rezervacije za koje uzet polog)');
	jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Boja polja za datume u prošlosti');
	jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Zauzeto/Nije dostupno');
	jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Dostupno');
	jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Privremena rezervacija');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Određeni dan dolaska');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Samo za web stranice koje koriste predodređno razdoblje rezervacije. Odaberite dan kada gosti moraju doći.');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Određeni dan dolaska');
	jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Trajanje boravka');
	jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Prikazati kalendar popunjenosti?');
	jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Postavite ovu opciju na Da ukoliko želite prikazeti kalendar popunjenosti');
	jr_define('_JOMRES_FRONT_AVAILABILITY', 'Popunjenost');
	jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Kliknite na slobodni datum ukoliko želite otvoriti obrazac za rezervaciju.');
	jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Crne rezervacije');
	jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nove crne rezervacije');
	jr_define('_JOMRES_FRONT_DELETEGUEST', 'Izbrišite gosta');
	jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gost izbrisan');
	jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Nije moguće izbrisati gosta, ima aktivne rezervacije. Poništite rezervacije te pokušajte ponovno.');
	jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Bilo koji');
	jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Format prikaza kalendara');
	jr_define('_JOMRES_COM_CALENDARINPUT', 'Format unosa datuma');
	jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Ovdje možete promijeniti format unosa datuma.');
	jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Određeno razdoblje rezervacija dozvoljava kratke prekide');
	jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Trajanje kratkog prekida');
	jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Objavljeno');
	jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit trail');
	jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
	jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Korisnik (username)');
	jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filter na datum');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Stanje');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Dolazak se očekuje');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Dolazi danas');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Trenutni Rezident');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Polasci danas');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Rok za polazak istekao');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Nije stigao');
	jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Soba kreirana');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Soba izmijenjena');
	jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Izbrisana soba');
	jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Karakteristika sobe stvorena');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Izmijenjena karakteristika sobe');
	jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Izbrisana karakteristika sobe');
	jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Unesen objekt');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Izmijenjen objekt');
	jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Izbrisan objekt');
	jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Izmijenjene podestavke objekta');
	jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Objavljeni objekti');
	jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Unesene tarife');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Izmijenjene tarife');
	jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Nadoplata za uslugu');
	jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Prijavljan gost');
	jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Unesen polog');
	jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Kreiran gost');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Izmijenjen gost');
	jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervirana soba');
	jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Dodatna usluga kreirana');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Dodatana usluga izmijenjena');
	jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Dodatana usluga izbrisana');
	jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Dodatana usluga objavljena');
	jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Unesena crna rezervacija.');
	jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Izbrisana crna rezervacija.');
	jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Dodatne usluge');
	jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Opis');
	jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Ime');
	jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Cijena');
	jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Dodatana usluga izmijenjena');
	jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Uredi');
	jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Dodatna usluga izbrisana');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Postavke dodatnih usluga');
	jr_define('_JOMRES_COM_A_EXTRAS', 'Prikaži dodatne usluge za vrijeme rezervacije?');
	jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Postavite opciju na Da ukoliko želite prikazati gostu dodatne usluge');
	jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Dodatne usluge.');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Početni datum crne rezervacije');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Datum nastavka servisa');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Crne rezervacije');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Nije moguće nastaviti rezervaciju, jedna ili više soba koje ste odabrali nije slobodna.');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Sobe uključene u crnu rezervaciju');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nema crnih rezervacija');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Broj zvjezdica');
	jr_define('_JOMRES_COM_A_RESET', 'Poništi');
	jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervacija poništena');
	jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Traži ovdje za:');
	jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Oznaka valute');
	jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Kod valute');
	jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Info');
	jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Ogranici rezervacije unaprijed?');
	jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Postavite opciju na Da ako zelite da ogranicite rezervacije (koristite sledece polje da postavite ogranicenje u danima). Ako postavite opciju na Da i ako gost pokusa da rezervise vise od n dana unaprijed onda ce njegov dan dolaska biti postavljen za danas');
	jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Dani za rezervaciju unaprijed ograniceni na:');
	jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Taksa');
	jr_define('_JOMRES_COM_A_ROOMTAX', 'Taksa Sobe');
	jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fiksna vrijednost takse');
	jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Procenat takse');
	jr_define('_JOMRES_COM_A_EUROTAX', 'Taksa');
	jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Prosjek takse');
	jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Spremi sve zapise');
	jr_define('_JOMRES_FRONT_TARIFFS', 'Tarife');
	jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Ime Tarife');
	jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Opis Tarife');
	jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Vrsta sobe');
	jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Dostupna od');
	jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Dostupna do');
	jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Po osobi po noćenju');
	jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Po noćenju');
	jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Ne uključujući vikende');
	jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum dana');
	jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maksimum dana');
	jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min osoba');
	jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max osoba');
	jr_define('_JOMRES_FRONT_PREVIEW', 'Prikaz');
	jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Izmjene uključene?');
	jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Tekst je izmijenjen.');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Izmijeni jezik');
	jr_define('_JOMRES_FRONT_PTYPE', 'Vrsta objekta');
	jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Prikaži vrste objekata');
	jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Izmijeni vrste objekata');
	jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Vrsta objekta');
	jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Opis vrste objekta');
	jr_define('_JOMRES_COM_PTYPES_SAVED', 'Vrsta objekta spremljena');
	jr_define('_JOMRES_COM_PTYPES_DELETED', 'Vsrte objekata izbrisane');
	jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Podsjetnik za plaćanje');
	jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Ne postoje dodatne usluge koje terete Vaš račun');
	jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Polog');
	jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Puni iznos');
	jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Iznos naplaćen tijekom rezervacije');
	jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Uredite ovdje postavke naplate tijekom rezervacije. Možete naplaćivati samo polog, ili puni iznos.');
	jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Mjeseci za prikaz');
	jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Koliko će se mjeseci prikazivati na kalendaru s obzirom na dostupnost sobe?');
// V1.4
	jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Payment Gateways');
	jr_define('_JOMRES_COM_A_CANCEL', 'Poništi');
	jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Molimo Vas odaberite sobu/e koje ne želite da se koriste, i potrebne datume. <br>Ukoliko soba nema oznaku, ne može biti korištena za crne rezervacije dok neka od rezervacija ne bude otkazana ili završena.<br/> Kada odaberete tražene datume, kliknite na plavo dugme "apply" da provjerite dostupnost sobe. ');
	jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Odjavljeni ste zbog neaktivnosti</b> Molimo vas, prijavite se ponovo.');
	jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Razlog');
	jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Koristi payment gateway?');
	jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Molimo Vas odaberite način plaćanja.');
	jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway uključen?');
	jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Izmijenjene postavke plugin-a');
	jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Unesene postavke plugin-a');
	jr_define('_JOMRES_FRONT_GALLERYLINK', 'Prikaži slike objekta');
	jr_define('_JOMRES_COM_A_GALLERYLINK', 'Poveznica na galeriju');
	jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Postavite link na vaš foto album za ovaj objekt. Biti će prikazan na stranici za opis objekta, kada se popuni.');
	jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Izmijeni kreditnu karticu');
	jr_define('_JOMRES_COM_A_EDITICON', 'Izmijeni veličinu ikone');
	jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slideshow');
	jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Prikaži poveznicu za slideshow?');
	jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Prikaži slideshow u okviru?');
	jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slideshow');
	jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Prikaži link za tarife?');
	jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popup dozvoljen?');
	jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Upload slideshow slike');
	jr_define('_JOMRES_A_TABS_MISC', 'Ostalo');
	jr_define('_JOMRES_A', 'Postavke website-a');
	jr_define('_JOMRES_A_GLOBALPFEATURES', 'Koristi globalne postavke objekta');
	jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
	jr_define('_JOMRES_A_ICON', 'Ikona');
	jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Odaberite pretraživač.');
	jr_define('_JOMRES_FRONT_NORESULTS', '<b>Nije pronađen nijedan rezultat koji odgovara vašim parametrima pretraživanja. Molimo promijenite parametre i pokušajte ponovo.</b>');
	jr_define('_JOMRES_AREYOUSURE', 'Jeste li sigurni?');
	jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezerviraj');
	jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezerviraj');
//v1.4c
	jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Prikaži tarife?');
	jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresa');
	jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detalji');
	jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Kliknite za sobe i dostupnost');
	jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Prikaži informaciju o Adresi ispod ove poveznice');
	jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Prikaži detalje o objektu ispod ove poveznice');
	jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Prikaži sobe i dostupnost ispod ove poveznice');
	jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Flat rate tarife');
	jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Srednje');
	jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Odaberite vrstu naplate koju želite koristiti');
	jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Postoje dvije vrste naplate. Prva, 'flat rate' vrsta vam omogućava ponudu raznih tarifa gostima i cijena je jednaka tijekom cijelog boravka. Odaberite ovu opciju ako želite ponuditi više različitih tarifa za isti dan, npr. (Spavanje i doručak, Tarifa večere..). Odaberite 'srednje' tarife ukoliko želite postaviti cijene s obzirom na datum. Sustav će pronaći sve tarife za svaki dan u rezervacijama, sastaviti zajedno i vratiti srednju vrijednost za zadano razdoblje");
// v1.4e
	jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Prikaži datum odlaska?');
	jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Postavite na Ne ako ne želite prikazati polje sa datumom odlaska. Ovo koristite samo ako ste sigurni što radite, datum odlaska u rezervacijama će pisati dan nakon dolaska.');
// v1.4f
	jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Opis ograničen');
	jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Ovdje ograničavate broj karaktera prikazanih u opisu objekata.');
// v1.4g+
	jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Koristite datum() format?');
	jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Objavi');
	jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Nemoj objaviti');
	jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Odaberite glavnu vrstu sobe');
	jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Da biste dodali sliku ovoj vrsti sobe morate prvo upload-ati sliku u /images/stories/jomres/rmtypes/ folder. ');
	jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Greška tijekom unosa boje pozadine');
	jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Default država u formi za rezervaciju');
	jr_define('_JOMRES_JAVASCRIPT_', 'Poljai označena sa crvenom zvjezdicom su obvezna.');
	jr_define('_JOMRES_COM_SELFREGISTRATION', 'Korisnici mogu registrirati svoje objekte?');
	jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Postavite na Da ukoliko želite da korisnici mogu registrirati svoje objekte bez dozvole administratora web stranice.');
	jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Polja označena zvjezdicom su obavezna.');
	jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Kreirani objekti');
// v1.4i
	jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Prikaži kalendar od početka godine?');
	jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kalendar dostupnosti se prikazuje od početka tekuće godine.');
	jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Broj slobodnih soba');
	jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Natrag na detalje objekta');
	jr_define('_JOMRES_FRONT_ROOMTYPES', 'Vrste soba');
	jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Ograničenje nasumične pretrage');
	jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Prikaži link google pretvaranja valuta u listu tarifa?');
	jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Pretvori tarifu u :');
	jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Dozvoli korisnicima uređivanje pomoću html editora?');
// v2
	jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Koristite ovaj obrazac da biste prijavili rezervaciju. Pređite mišom preko "i" i vidjet ćete ostale informacije. Unesite tražene informacije (dan dolaska, odlaska, broj gostiju..) te odaberite sobu/e koje želite sa liste dostupnih. Kliknite željenu sobu da biste je uključili u rezervaciju. Kada završite, ukoliko želite možete dodati na listu dodatne usluge. Kada popunite potrebna polja kliknite na Potvrdi rezervaciju.');
	jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Koristite ovu formu da biste prijavili rezervaciju. Pređite mišom preko "i" za više informacija. Unesite tražene informacije (dan dolaska, odlaska, broj gostiju..) te odaberite sobu/e koje želite sa liste dostupnih. Kliknite željenu sobu da biste je uključili u rezervaciju. Kada završite, ukoliko želite možete dodati na listu dodatne usluge. Kada popunite potrebna polja kliknite na Potvrdi rezervaciju.');
	jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Detalji rezervacije');
	jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Odaberite detalje vaše rezervacije');
	jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Dostupnost ');
	jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Odaberite sobe koje želite');
	jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Pogledajte ovdje je li je objekt slobodan za traženo razdoblje.');
	jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Dodatne usluge');
	jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Odaberite dodatne usluge koje želite dodati u rezervaciju');
	jr_define('_JOMRES_COM_PERDAY', 'Po noćenju');
	jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Vaši detalji');
	jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Molimo vas unesite vaše detalje. Sva polja su obvezna.');
	jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Dostupne sobe');
	jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Odabrane sobe');
	jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Najbliži datum dolaska je: ');
	jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Po noćenju:');
	jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Ukupno:');
	jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Dodatne usluge:');
	jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Taksa:');
	jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Popust:');
	jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Ukupno:');
	jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gosti');
	jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Kliknite da biste dodali sobu u vašu narudžbu');
	jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Kliknite da biste poništili sobu iz vaše narudžbe');
	jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Vrste gostiju');
	jr_define('_JOMRES_VARIANCES_TYPE', 'Vrsta');
	jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Vrsta gosta, npr. djeca do 12 godina, studenti... ');
	jr_define('_JOMRES_VARIANCES_NOTES', 'Bilješke');
	jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Bilješke o vrsti gostiju');
	jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maksimum');
	jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maksimalan broj gostiju ove vrste koji se može odabrati prilikom rezervacije');
	jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'U postotcima');
	jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Izračunata vrijednost je postotak osnovne vrijednosti izračunate za sobu. Ukoliko ste izabrali Ne onda će se vrijednost koju ste vi odredili dodati ili odbiti od cijene sobe.');
	jr_define('_JOMRES_VARIANCES_POSNEG', 'Dodati neslaganje?');
	jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Izračunata vrijednost je dodana ili oduzeta od osnovne cijene sobe. Postavite opciju na Ne ukoliko želite da ovo bude popust na osnovnu cijenu. ');
	jr_define('_JOMRES_VARIANCES_VARIANCE', 'Varijance');
	jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Iznos varijance');
	jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Lista gostiju je izmijenjena');
	jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Vrsta gosta izbrisana');
	jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Vrsta gosta kreirana');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Vrsta gosta izmijenjena');
	jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Vrsta gosta izmijenjena');
	jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Prikaži link na popis soba na stranici detalja objekta?');
	jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Prikaži <b>samo</b> Kalendar dostupnosti/Popis soba?');
	jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Postavite na Da ukoliko želite prikazati header i detalje objekta, tako da je u okviru detalja objekta vidljiv samo popis soba/kalendar dostupnostiu.');
	jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Dolazak-Odlazak minimalni razmak');
	jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimalni razmak u obrascu za rezervaciju između dana dolaska i odlaska.');
	jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Prikaži broj sobe u obrascu za rezervaciju');
	jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Prikaži ime sobe u obrascu za rezervaciju');
	jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Prikaži naziv tarife u obrascu za rezervaciju');
	jr_define('_JOMRES_ORDER', 'Poredak');
	jr_define('_JOMRES_REQUIREDFIELDS', 'Obvezno');
	jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dana do dolaska');
	jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimum dana koji moraju proći od današnjeg dana do dana dolaska.');
	jr_define('_JOMRES_DTV', 'Varijacije vrste datuma');
	jr_define('_JOMRES_DTV_DOW', 'Dan u tjednu');
	jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Zadana vrsta gosta');
	jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Zadani broj prve vrste gosta je 1. Ukoliko koristite vrste gostiju, onda je ovo broj koji će se pojavljivati za prvu vrstu gostiju u obrascu za prijavu.');
	jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Samo registrirani korisnici mogu rezervirati online?');
	jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Morate biti registrirani korisnik da biste napravili rezervaciju online. Kliknite ovdje za registraciju. ');
	jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Boja fonta za linkove trenutnih rezervacija');
	jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Vikend ograničenja');
	jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Soba je rezervirana');
	jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Crna rezervacija');
	jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokružite polog na najbližu vrijednost?');
	jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Naplaćuj polog?');
	jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Naplaćuj tarife po tjednu?');
	jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Ovdje možete postaviti razlicite tarifa po dnevnoj ili tjednoj vrijednosti. Ukoliko koristite tjednu, postavite na Da.');
	jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Cijena po tjednu');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Potreban je određeni datum dolaska: ');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Kada je određeni datum odabran, datum može biti prikazan kao dropdown lista');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Netočan datum dolaska');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Netočan datum odlaska');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Prekratna duljina boravka. Mora biti najmanje ovoliko dana između dana dolaska i odlaska :');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Vaš razmak je:');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Netočna vrsta gosta');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Odaberite broj i vrstu gostiju');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Imate previše dozvoljenih tarifa');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Odabrali ste više soba nego što imate gostiju, kliknite na ime sobe da biste je uklonili sa liste');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Previše gostiju u odnosu na broj slobodnih kreveta');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Morate odabrati više soba');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Odaberi sobu');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Ime je obvezno');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Prezime je obvezno');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'OKućni broj ili ime kuće obvezno');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Ulica je obvezna');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Grad je obvezan');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Županija/Regija je obvezna');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Poštanski broj je obvezan');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Država je obvezna');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Broj telefona je obvezan');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Broj mobitela je obvezan');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email adresa je obvezna');
	jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Imamo mjesta!');
	jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Niste odabrali nijednu sobu');
	jr_define('_JOMRES_BOOKING_NUMBER', 'Broj rezervacije');
	jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Rezervacija je u redu');
	jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Izbrisati template varijable?');
	jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Izaberite ovo da biste omogucili DHTML dump predložak varijablu za svaki FRONTEND predložak datoteku. Ovo je korisno ukoliko želite provjeriti mogu li se određeni dijelovi koristiti za određeni predložak.');
	jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Izračunati postotak');
	jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Izaberite Da ukoliko računate po osobi u postotku. Ukoliko ste odabrali Ne biti će primijenjeno kao flat vrijednost.');
//v2rc2
	jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Dozvoljeni limit sobe/tarife');
	jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Ovim mozete da odaberete limit na broj soba slobodnih i tarifa koje su izlistane u formi za rezervaciju. Postavite na nulu ako ne zelite ogranicenje. ');
	jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Trenutno nema slobodnih soba!');
// Introduced in v2.5
// v2.6
	jr_define('_JOMRES_BOOKITNOW', 'Rezerviraj sada: ');
	jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Global editing mode?');
	jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Budite oprezni s ovom funkcijom. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
	jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Simbol oznake valute');
	jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Component wrapped');
	jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Set this to Yes if if you want to force the site into Full Page view. This might be useful if you intend to access the site via iframes.');
	jr_define('_JOMRES_COM_WEEKENDONLY', 'Samo vikendi');
	jr_define('_JOMRES_COM_WEEKENDDAYS', 'Vikend dani');
	jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
	jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Odaberite zemlju u kojoj se nalazi vaš objekt prije nego što nastavite s unosom ostalih podataka');
	jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Spremite izmjene prije upload-anja slike objekta');
	jr_define('_JOMRES_TARIFFSFROM', 'Cijene od - ');
	jr_define('_JOMRES_SEARCH_ALL', 'Odaberi sve');
	jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Država');
	jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Županija/Regija');
	jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Grad');
	jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Traži prema karakteristici.');
	jr_define('_JOMRES_SEARCH_BUTTON', 'Traži');
	jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Upišite riječ koju tražite i pritisnite dugme.');
	jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Traži riječ/i): ');
	jr_define('_JOMRES_SEARCH_AVL_INFO', 'Molimo vas upišite datum vašeg dolaska i odlaska, te kliknite na Traži da biste dobili popis slobodnih objekata u traženom razdoblju');
	jr_define('_JOMRES_SEARCH_PTYPES', 'Prikaži prema vrsti');
	jr_define('_JOMRES_SEARCH_RTYPES', 'Prikaži prema vrsti sobe');
	jr_define('_JOMRES_SORTORDER_DEFAULT', 'Zadano');
	jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Ime');
	jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Županija/Regija');
	jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Grad');
	jr_define('_JOMRES_SORTORDER_STARS', 'Zvjezdice');
	jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Info - ');
	jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Obrazac za rezervaciju');
	jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Ažuriraj adresu');
	jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Provjeri ponovo dostupnost sobe<br/>(Room selection will be reset)');
	jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Provjeri ponovo dostupnost');
	jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Uredi dodatne usluge');
	jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Promijeni odabir sobe');
	jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Ažuriraj adresu');
	jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Jedno ili više polja je netočno.');
	jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Slika sobe');
	jr_define('_JOMRES_CURRENCYFORMAT', 'Oznaka valute');
	jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Postavke pretraživanja');
	jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Log files');
	jr_define('JOMRES_COM_A_MESSAGE', 'Poruka');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
	jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
	jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Advanced');
	jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
	jr_define('JOMRES_COM_A_TARIFFMODE', 'Način postavki tarife');
	jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
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
	jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Prikaži popis soba na stranici sa podacima objekta?');
	jr_define('JOMRES_PROPERTYTYPE', 'Vrsta objekta');
	jr_define('JOMRES_MAXPEOPLEINROOM', 'Maksimalan broj osoba po sobi');
	jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Maksimalan broj osoba po rezervaciji');
	jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Dodaj bilješku');
	jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Uredi bilješku');
	jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Izbriši bilješku');
	jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Pogledaj bilješke');
	jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Dodaj novu bilješku');
	jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Uređene bilješke');
	jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Deleted note');
	jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Izlistaj rezervacije');
	jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Moje rezervacije');
	jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Prikaži rezervacije');
	jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Prikaži Omiljene');
	jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Niste dodali još ništa u Omiljene!');
	jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Vrsta objekta');
	jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Wise cijena');
	jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktivno');
	jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Ovaj plugin omogućava da postavite i uredite cijenu vaše sobe dinamično');
	jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
	jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (broj dana između datuma dolaska i današnjeg dana)');
	jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Postotak zauzetih soba  10%');
	jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Postotak zauzetih soba  25%');
	jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Postotak zauzetih soba  50%');
	jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Postotak zauzetih soba  75%');
	jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Popust %');
	jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' popust s ');
	jr_define('_JOMCOMP_WISEPRICE_TO', ' na ');
	jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Cijena sobe bez popusta ');
	jr_define('JOMRES_COM_A_MAPSKEY', 'Google mape API key');
	jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Nije moguće dopiti google karte API ključ od <ahref="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Upišite google mape ključ ovdje i tada će se vaše karte prikazivati ispravno');
	jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
	jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktiviraj?');
	jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Postavite na Da ukoliko želite aktivirati Last minute ponude.');
	jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
	jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Ukoliko je rezervacija napravljena i dan dolaska je N dana od dana rezervacije, onda se popust može primijeniti');
	jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Popust');
	jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'U postotcima');
	jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Popust je primijenjen u ovoj rezervaciji!');
	jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Troškovi boravka su smanjeni za');
	jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Ovaj objekt nudi last minute popust od');
	jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' posto ukoliko rezervirate prije');
	jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' posto ili više ukoliko rezervirate prije ');
	jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Iskoristite ponudu i rezervirajte sada!');
	jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Verbose tarifa info');
	jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Postavite ovo na Da za prikaz detaljnijih informacija tarifa na stranici detalja objekta/popup tarife');
	jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Smanjite ko');
	jr_define('_JOMCOMP_AMEND', 'Ispravite rezervacije - Odabir objekta');
	jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Odaberi novi objekt');
	jr_define('_JOMCOMP_AMEND_HEADER', 'Originalni ugovor:');
	jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Polog plaćen');
	jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Polog nije plaćen');
	jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override ukupno');
	jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Override polog');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
	jr_define('_JRPORTAL_CANCEL', 'Poništi');
	jr_define('_JRPORTAL_CPANEL', 'Control Panel');
	jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Zadana vrijednost provizije');
	jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Odaberite zadanu proviziju koja će se primijeniti za objekte u slučaju da nije postavljena nikakva druga provizija.');
	jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Prikaži provizije');
	jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Provizije');
	jr_define('_JRPORTAL_CRATE_TITLE', 'Naslov');
	jr_define('_JRPORTAL_CRATE_TYPE', 'Vrsta');
	jr_define('_JRPORTAL_CRATE_VALUE', 'Provizija');
	jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Oznaka valute');
	jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Izlistaj objekte');
	jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Ime objekta');
	jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Adresa objekta');
	jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Objekti sa crvenom pozadinom su objekti za koje još nije primijenjena provizija');
	jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistika');
	jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provizija');
	jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Izlistaj rezervacije');
	jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'ID objekta');
	jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Id računa');
	jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Rezervacija ukupno');
	jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Datum arhiviran');
	jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Opis');
	jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
	jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
// Jomres v3.0.6
// Jomres v3.1
	jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Ukupno smještaj');
	jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'noć/i na');
	jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'po sobi ');
	jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Obogatite Vaš boravak Ukupno ');
	jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Price Summary ');
	jr_define('_JOMRES_CONFIRMATION_ALERT', 'Please read and agree to ');
	jr_define('_JOMRES_CONFIRMATION_HEADER', 'A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ');
	jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'If you need to change any of the above information then please click here');
	jr_define('_JOMRES_CONFIRMATION_AMEND', 'Izmijeni rezervaciju');
	jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Please enter any special requests in the box below.');
	jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'I confirm that the above information is correct and agree to the ');
	jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'po osobi za noć ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
	if (!defined('_PN_OF')) {
		jr_define('_PN_OF', 'of');
	}
	if (!defined('_PN_START')) {
		jr_define('_PN_START', 'Početak');
	}
	if (!defined('_PN_PREVIOUS')) {
		jr_define('_PN_PREVIOUS', 'Prethodna');
	}
	if (!defined('_PN_NEXT')) {
		jr_define('_PN_NEXT', 'Dalje');
	}
	if (!defined('_PN_END')) {
		jr_define('_PN_END', 'Kraj');
	}
	if (!defined('_PN_RESULTS')) {
		jr_define('_PN_RESULTS', 'Rezultati');
	}
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Imajte na umu da ovo nije obrazac za rezervaciju, već šaljete e -poruku. <br/> Unesite poruku koju želite poslati ');
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontaktiraj');
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Property enquiry from ');
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Hvala na vašem upitu, vaša poruka je poslana na adresu e -pošte nekretnine i kopirana na vašu adresu radi vaše evidencije. Odgovorit će vam što je prije moguće svojim odgovorom . ');
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'u vezi');
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Upit');
	jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Molimo odaberite željeni smještaj s popisa s desne strane');
	jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min broj soba već odabran');
	jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimalni broj soba već odabran pri rezervaciji prije nego što se može ponuditi kombinacija tarifa/vrsta sobe. Omogućuje vam snižene tarife kada je već odabrano više od N soba.');
	jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Maksimalan broj soba već odabran');
	jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maksimalan broj soba već odabran pri rezervaciji prije nego što se više ne nudi kombinirana tarifa/soba. Omogućuje vam da prestanete nuditi ovu vrstu sobe/kombinaciju tarifa nakon što u obrascu za rezervaciju odaberete N soba.');
	jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Imajte na umu da se ovdje dodani dodaci za jednu osobu neće koristiti ako su Dodaci za jednu osobu postavljeni na Da u općoj konfiguraciji. Ovdje su postavke alternativa dodavanju paušalnih dodataka za jednu osobu, a ne dodatak stanu. stopa SPS. ');
	jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Dostupno');
	jr_define('_JOMRES_AVLCAL_QUARTER', 'Neke rezervacije');
	jr_define('_JOMRES_AVLCAL_HALF', 'Pola rezervirano');
	jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Uglavnom rezervirano');
	jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Potpuno rezervirano');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Po tjednu');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Po danu');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Po rezervaciji');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Po osobi za rezervaciju');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Po osobi za dan');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Po osobi za tjedan');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Po danima (min. dana)');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Po danima odabrano X soba');
	jr_define('_JOMRES_REGISTRYREBUILD', 'Ponovna izgradnja registra minimalnih komponenti i obnova predmemorije');
	jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Obično se registar dodataka Jomres automatski ponovo gradi kad god pogledate upravitelja dodataka i dodate ili uklonite dodatak, međutim moguće je da iz nekog razloga ne možete koristiti ove značajke, pa ovu funkciju možete koristiti za ponovnu izgradnju registraciju ručno. Ako imate pristup značajci Upravitelj dodataka i nadogradnje, malo je vjerojatno da ćete morati koristiti ovu funkciju. Morat ćete obnoviti registar dodataka kad god dodate novu mini komponentu, a niste koristili Upravitelj dodataka da ga dodam. ");
	jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registar je uspješno obnovljen');
	jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Došlo je do pogreške pri ponovnoj izgradnji registra minikomponenti. Trebali biste provjeriti svoj Jomres dnevnik pogrešaka da vidite ima li zapisa o tome što je pokrenulo pogrešku.');
	jr_define('_JOMRES_SEARCH_PRICERANGES', 'Traži prema cijeni');
	jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Niste napravili nijednu rezervaciju dosad');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Uredi vrstu objekta');
	jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Odaberi vrstu objekta');
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Vaš upit ...');
	jr_define('_JOMRES_COM_A_LISTLIMIT', 'Ograničenje popisa svojstava');
	jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Broj vlasništva za prikaz na stranici nakon pretraživanja');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Značajka integriranog pretraživanja');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Jomres integrirana značajka pretraživanja omogućuje vašim korisnicima da pretražuju Jomres nekretnine prema skupu funkcija. Ako ste već koristili značajke pretraživanja Jomresa u Joomli, bit će vam poznate ove postavke. <br/ > Ova nam značajka omogućuje da ponudimo upravljanje pretraživanjem unutar Jomresa za one korisnike koji ne žele koristiti Joomla module za pretraživanje, ili za druge korisnike CMS -a koji nemaju CMS -ove vlastite Jomres module za pretraživanje. <br/> Ne zaboravite da ako odlučite tražiti nešto putem veze (tj. ne padajućeg izbornika), druge opcije pretraživanja neće biti implementirane, samo element koji odgovara vezi na koju ste kliknuli. <br/> Imajte na umu da prema zadanim postavkama izgled ovog integriranog pretraživanja nije baš lijep. To je zato što datoteka predloška koja izvodi izgled mora uključivati ​​sve moguće opcije, od kojih su neke nekompatibilne. ');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktivirati ovu značajku?');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Ako je ova značajka omogućena, tada će svaki poziv Jomresu koji prikazuje popis svojstava značiti da su prikazane i opcije pretraživanja.');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Koristi stupce');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Svaka opcija pretraživanja koju ste definirali kao vrstu veze (gdje je to relevantno) bit će prikazana kao stupci (IE br staviti na kraj veze)');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Područje pretraživanja odabirom kombiniranog padajućeg izbornika');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Ponudite padajući izbornik pretraživanja za filtriranje po zemljama/regijama/gradovima. Ako ćete koristiti ovu značajku, najbolje je da ne koristite dolje navedena područja/gradove.");
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Traži prema nazivu svojstva');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Prikaži pretraživanje prema unosu naziva svojstva.');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Prikaži kao padajući izbornik?');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Postavite ovo na ne da bi se popis prikazao kao veze');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Grad/regija');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Prikaži unos regije');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Prikaži kao padajući izbornik?');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Postavite ovo na ne da bi se popis prikazao kao veze');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Traži prema vrsti svojstva');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Prikaži pretraživanje prema unosu vrste svojstva');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Prikaži kao padajući izbornik?');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Postavite ovo na ne da bi se popis prikazao kao veze');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Traži prema vrsti sobe');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Prikaži pretraživanje prema unosu vrste sobe');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Prikaži kao padajući izbornik?');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Postavite ovo na ne da bi se popis prikazao kao veze');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Značajke');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Prikaži pretraživanje prema unosu značajki');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Prikaži kao padajući izbornik?');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Postavite ovo na ne da bi se popis prikazao kao slike s opisima i potvrdni okviri');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Traži prema opisu');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Prikaži pretraživanje prema unosu opisa');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Traži prema dostupnosti');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Prikaži pretraživanje prema unosu dostupnosti');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Traži po rasponima cijena');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Prikaži pretraživanje prema unosu raspona cijena');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Povećanje raspona cijena');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres će pogledati sve vrijednosti u tarifama, a zatim odrediti niz raspona cijena na temelju vrijednosti povećanja koje ovdje postavite.');
	jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Prema zadanim postavkama, ako svojstvo nije odabrano u Jomresu, ono će izvršiti pretraživanje. Ako ovo pretraživanje nije pokrenuo modul pretraživanja, to će pretraživanje proizvoljno proizvesti rezultate (namjerno). Ova vam opcija omogućuje da ograničiti broj povrata u tom slučajnom pretraživanju. ');
	jr_define('_JOMRES_COM_A_CRON_TITLE', 'Postavke i zapisnici posla Cron');
	jr_define('_JOMRES_COM_A_CRON_DESC', 'Podaci o pseudokronskim poslovima. Funkcija pseudokrona potrebna je za fakturiranje i obradu provizije.');
	jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Instalirane minkomponente crona. Za pokretanje pojedinačnog posla crona upotrijebite dolje navedene veze. Imajte na umu da poslovi crona ne proizvode izlaz pa nećete vidjeti nikakve informacije na stranici. Umjesto toga, pogledajte posao zapisnik ispod. ');

	jr_define('_JOMRES_COM_A_CRON_METHOD', 'Metoda');
	jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Ako nemate pristup cron poslovima, postavite ovo na Minicomponent, u protivnom stvorite cron posao i recite mu da radi <br/> <i> curl -s' .JOMRES_SITEPAGE_URL_AJAX. '& task = cron = '. get_showtime(' tmplcomponent ').' & no_html = 1>/dev/null </i> ');
	jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Prikaži prijavu u pregledniku');
	jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Radi samo ako je metoda postavljena na Minkomponentna.');
	jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Zapisivanje omogućeno');
	jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Postavite ovo na Da da bi bilježenje bilo omogućeno. Rezultati zapisnika bit će ispisani u nastavku.');
	jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Detaljno bilježenje');
	jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Mnogo zapisa zapisivanja');
	jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Uređivanje predloška');
	jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Prilagođena polja');
	jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Ovdje možete definirati jednostavna prilagođena polja koja će biti prikazana u obrascu za rezervaciju.');
	jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Naziv polja (bez razmaka)');
	jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Zadana vrijednost');
	jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Opis');
	jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Obavezno');
	jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maksimalna količina');
	jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Ako je maksimalna količina postavljena na više od 1, gostima će biti ponuđen padajući izbornik za odabir količine potrebnih dodataka.');
	jr_define('_JRPORTAL_TAXRATES_TITLE', 'Porezne stope');
	jr_define('_JRPORTAL_TAXRATES_CODE', 'Porezni kod');
	jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Opis opisa');
	jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Ne možete izbrisati ovu poreznu stopu.');
	jr_define('_JRPORTAL_TAXRATES_RATE', 'Stopa');
	jr_define('_JRPORTAL_INVOICES_TITLE', 'Fakture');
	jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Neplaćeno');
	jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Plaćeno');
	jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Otkazano');
	jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Na čekanju');
	jr_define('_JRPORTAL_INVOICES_USER', 'Korisnik');
	jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
	jr_define('_JRPORTAL_INVOICES_RAISED', 'Podignuto');
	jr_define('_JRPORTAL_INVOICES_DUE', 'Rok');
	jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Pretplata');
	jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Nepodmireno ukupno');
	jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Ponavljajuća frekvencija');
	jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Ponavljajući dan u mjesecu');
	jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Oznaka valute');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Stavke retka');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Ime');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Opis');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Početna cijena');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Početna količina');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Početni popust');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Početni ukupni iznos');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Porezni kod');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Opis poreza');
	jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Porezna stopa');
	jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Nadjačati standardne postavke pristupnika Jomres?');
	jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Prikaži moje račune');
	jr_define('_JRPORTAL_COUPONS_TITLE', 'Kuponi s popustom');
	jr_define('_JRPORTAL_COUPONS_DESC', 'Kodovi za popuste mogu se generirati i proslijediti gostima kao poticaj za rezervacije. Vrijedi od i do datuma koji se odnose na datume na koje se može izvršiti rezervacija, a ne na datume same rezervacije.') ;
	jr_define('_JRPORTAL_COUPONS_CODE', 'Kôd kupona');
	jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Vrijedi od');
	jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Vrijedi za');
	jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Iznos popusta');
	jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Popust je postotak');
	jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Samo soba');
	jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ako imate kôd kupona, unesite ga u okvir i kliknite vezu "Spremi kupon" da biste spremili podatke o kuponu u svoju rezervaciju.');
	jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Spremi kupon');
	jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon spremljen za rezervaciju');
	jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Broj kupona nije pronađen');
	jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Vrijednost popusta na kupon');
	jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervacija snižena. Kôd kupona/vrijednost popusta/postavke kupona:');
	jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Odaberite jezike');
	jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Odaberite jezične opcije koje će se prikazivati ​​u padajućem izborniku za promjenu jezika.');
	jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Prikaži padajući izbornik za odabir jezika?');
	/*
	* @ignore
	*/
	jr_define('_JRPORTAL_NEWUSER_DEAR', 'Poštovani');
	jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Hvala vam na registraciji');
	jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Vaše korisničko ime je:');
	jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Vaša lozinka je:');
	jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Molimo prijavite se da biste vidjeli svoje rezervacije');
	jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon je spremljen');
	jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon izbrisan');
// Još se ne koristi
	jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
	jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Korisničko ime');
	jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Lozinka');
	jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API ID');
	jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Mobilni broj za obavijesti');
	jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Upotrijebite format \"Kôd zemlje, broj mobilnog telefona \". Na primjer, broj mobilnog telefona iz Velike Britanije bio bi nešto poput \" 447979123456 \". Ostavite ovo polje prazno ako ne želite da se na vaš mobitel šalju e -poruke s obavijestima telefon.");
	jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
	jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b> Očigledno, ne možete koristiti/testirati ovaj pristupnik s localhosta, to ćete morati učiniti na poslužitelju \"uživo\". </b>
<br/>
<br/>
Da biste mogli koristiti Clickatell pristupnik, potreban vam je Clickatell račun i najmanje jedna registrirana veza (instanca podproizvoda API-ja) između vaše aplikacije i našeg pristupnika. Svaka veza
metoda je poznata kao podprodukt. Evo kako: <br/>
<br/>
<b> Korak 1 - registrirajte se za Clickatell račun </b> <br/>
Ako još nemate Clickatell račun, morate se registrirati za njega prema dolje. U suprotnom prijeđite na korak 2. <br/>
* Idite na http://www.clickatell.com/products/sms_gateway.php i odaberite odgovarajući podprodukt API -ja (način povezivanja) koji želite koristiti (Clickatell Central (API)) <br/>
* Kliknite na hipervezu za registraciju. <br/>
* Ispunite obrazac za registraciju. <br/>
Nakon uspješno predanog obrasca, automatski ćete biti prijavljeni na svoj novi račun i preusmjereni na stranicu na kojoj možete dodati odabranu API vezu. <br/>
<b> Korak 2 - dodajte registriranu API vezu (podprodukt) </b> <br/>
Ako još niste prijavljeni na svoj račun, to morate učiniti na http://www.clickatell.com/login.php <br/>
* Na gornjem izborniku odaberite \"Upravljaj mojim proizvodima \". <br/>
* Odaberite vrstu API veze koju želite koristiti (HTTP API) s padajućeg izbornika ('Dodaj vezu'). <br/>
* Ispunite obrazac. Provjerite jeste li unijeli zaključani IP (IP ovog poslužitelja), postavite Povratni poziv na HTTP POST. Morat ćete postaviti IP povratni poziv na ".get_showtime('live_site')."/index.php? Option = com_jomres & task = sms_clickatell_callback te korisnički ID i lozinku. <br/>
Ako registrirate više API veza, naziv opisa koji unosite za svaku mora biti jedinstven - ne možete imati više API -ja s istim imenom. <br/>
Nakon uspješnog slanja obrasca, bit će prikazani vaši podaci za provjeru autentičnosti, uključujući jedinstveni API ID svake veze (api_id). Ovi detalji autentifikacije potrebni su pri povezivanju s Clickatell pristupnikom za slanje poruke. <br/>
<br/>
Upotrijebite korisnički ID, lozinku i api_id za popunjavanje gornjih polja. <br/>
<br/>
");
	jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Popis soba s obrascem za rezervacije prikazuje onemogućen pristup');
	jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Popis soba u obrascu za rezervacije prikazuje maksimalan broj ljudi');
	jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Imajte na umu da su navedene cijene soba procjene i da puna cijena rezervacije neće biti izračunata dok ne dodate sobu ili sobe svom odabiru.');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Pretplatnički paketi');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Ime');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Opis');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Objavljeno');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Puni iznos');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Ograničenje imovine');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Pretplati se');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Koristi funkcionalnost upravljanja pretplatama');
	jr_define('_JOMRES_COM_NEWUSER', 'Izradi novog korisnika prilikom rezervacije');
	jr_define('_JOMRES_COM_NEWUSER_DESC', 'Izradi novi korisnički račun pri rezervaciji neregistriranih korisnika.');
	jr_define('_JOMRES_CLICKTOREGISTER', 'Kliknite ovdje za registraciju svoje nekretnine');
	jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Pojedinosti o novom korisniku');
	jr_define('_JOMRES_LATLONG_DESC', 'Koristite miš za kretanje po karti i povucite pokazivač na lokaciju vašeg posjeda da biste postavili zemljopisnu širinu i dužinu.');
	jr_define('_JOMRES_CONTROLPANEL', 'Upravljačka ploča');
// Jomres v4.2
	jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Prikaži fakturu');
	jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Prikaži račune');
	jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Dodaj moju nekretninu na ovu web lokaciju');
	jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo:');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Žao nam je, ali taj ID paketa nije prepoznat.');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Nažalost, već ste pretplaćeni na besplatni paket, ne možete se ponovno pretplatiti na taj paket.');
	jr_define('_JOMRES_COM_YOURBUSINESS', 'Podaci o vašem poslu');
	jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'naziv tvrtke');
	jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'PDV broj');
	jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Broj zgrade');
	jr_define('_JOMRES_INVOICE_NUMBER', 'Broj fakture');
	jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Odaberite datume za koje želite primijeniti crnu rezervaciju. Kad ste odabrali odgovarajuće datume, kliknite gumb "primijeni" da biste ponovno provjerili dostupnost. <br/>
<br/>
Ako nekretnina ima jednu ili više rezervacija za odabrano razdoblje, nećete je moći rezervirati sve dok se druge rezervacije/crne rezervacije ne otkažu/rezerviraju. ');
	jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Nažalost, ne možete rezervirati ovu nekretninu na crno za te datume.');
	jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Možete unijeti ovu nekretninu za te datume.');
	jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Vaš je objekt konfiguriran za naplatu po osobi po noći, ali nemate kreiranih niti objavljenih vrsta gostiju, stvorite i objavite jednu ili više vrsta gostiju.');
	jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Još nemate konfigurirane tarife, nećete moći prihvatiti rezervacije za svoju nekretninu.');
	jr_define('_JOMRES_EDITINGMODE_ON', 'Način uređivanja oznaka uključen');
	jr_define('_JOMRES_EDITINGMODE_OFF', 'Način uređivanja oznaka isključen');
	jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Naplatiti promjenjive depozite?');
	jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Promjenjivi depoziti omogućuju vam da definirate želite li naplatiti cijeli iznos ako je datum dolaska rezervacije unutar N dana od "danas". Postavite ovu opciju na Da da biste omogućili značajku , i unesite donji broj dana, pa, na primjer, ako je dan dolaska unutar 60 dana, tada će iznos depozita biti pun iznos, inače će se iznos temeljiti na gore konfiguriranim opcijama pologa. ');
	jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Broj dana unutar kojih će se cijeli iznos naplatiti kao polog.');
	jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'E -poruka s potvrdom je poslana. Ovaj prozor možete sada zatvoriti.');
	jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontaktirajte agenta');
	jr_define('_JOMRES_INVOICE_MARKASPAID', 'Označi fakturu kao plaćenu');
	jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Račun označen kao plaćen');
	jr_define('_JOMRES_APIKEY_REMAKE', 'Napravi novi API ključ');
	jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Je li ovo instalacija s jednim svojstvom?');
	jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Ako je ova opcija postavljena na Da, tada je frontalni prikaz Jomresa neovlaštenim korisnicima uvelike pojednostavljen. Zadani pozivi Jomresu iz opcije izbornika, umjesto da im se daje popis vlasništva, samo treba gost na obrascu za rezervaciju prve nekretnine u sustavu. Upravitelji nekretnine također neće vidjeti gumb za pregled detalja o nekretnini niti gumb Dodaj novu nekretninu. Idealno je ako samo želite navesti jednu nekretninu i rezervirati je za nju. <br /> ');
	jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Plaćanje salda');
	jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Imajte na umu da koristite način uređivanja s omogućenim načinom globalnog uređivanja. To je u redu ako razumijete što znači način globalnog uređivanja, ali ako to ne učinite, možete sami uzrokovati probleme. Ako niste sigurni ako biste trebali koristiti Jomres na ovaj način, pogledajte <a href = "https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target ="_blank"> stranica s priručnikom za način uređivanja </a> za više informacija o ovoj temi. ');
	jr_define('_JOMRES_SUPPORTKEY', 'Ključ podrške');
	jr_define('_JOMRES_SUPPORTKEY_DESC', 'Broj vašeg ključa licence za podršku (poznat i kao broj licence). Trebat će vam ažurirana licenca da biste mogli preuzimati dodatke za Jomres.');
	jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Osobni popust');
	jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Ograničiti registraciju imovine na jednu državu?');
	jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Možete osigurati da su registracije nekretnina ograničene na samo jednu državu postavljanjem ove opcije na Da i postavljanjem zemlje u sljedećoj opciji.');
	jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Nekretnine se nalaze u ovoj zemlji:');
	jr_define('_JOMRES_JQUERYTHEME', 'Jquery tema');
	jr_define('_JOMRES_JQUERYTHEME_DESC', 'Odaberite temu jquery koju ćete koristiti za kartice s pojedinostima o svojstvima.');
	jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Žao nam je, ali to svojstvo trenutno nije dostupno.');
	jr_define('_JOMRES_REVIEWS', 'Recenzije');
	jr_define('_JOMRES_REVIEWS_TITLE', 'Naslov recenzije');
	jr_define('_JOMRES_REVIEWS_DATE', 'objavljeno na');
	jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Još nema recenzija za ovu nekretninu.');
	jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Želite li biti prvi koji će pregledati ovaj objekt?');
	jr_define('_JOMRES_REVIEWS_IAGREE', 'Slažem se s ovom recenzijom');
	jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Ne slažem se s ovom recenzijom');
	jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Prosječna ocjena:');
	jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Ukupno glasova:');
	jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Dodaj novu recenziju.');
	jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Morate biti prijavljeni da biste objavili recenziju.');
	jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Recite nam što mislite o ovoj nekretnini:');
	jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Ovaj recenzent nam je rekao:');
	jr_define('_JOMRES_REVIEWS_PROS', 'Pros:');
	jr_define('_JOMRES_REVIEWS_CONS', 'Nedostaci:');
	jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Poslano dana:');
	jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Već ste pregledali ovu nekretninu, ne možete objaviti drugu recenziju o njoj.');
	jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Žao nam je, ali ne smijete objavljivati ​​recenzije na ovoj web stranici.');
	jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Prikaži recenzije');
	jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'gosti se slažu s ovom recenzijom.');
	jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'gosti se ne slažu s ovom recenzijom.');
	jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'gost se slaže s ovom recenzijom.');
	jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'gost se ne slaže s ovom recenzijom.');
	jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Hvala što ste podijelili svoje mišljenje o ovoj recenziji.');
	jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Hvala, ali već ste podijelili svoje mišljenje o ovoj recenziji.');
	jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Molimo provjerite jesu li sva polja ispunjena.');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Sažmite recenziju unošenjem naslova');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Molimo unesite potpuniji pregled u okvir za opis');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Molimo unesite dobre dijelove svog iskustva boravka u ovom objektu');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Molimo unesite sve negativne misli o svom iskustvu');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Molimo ocijenite domaćina koji ste primili od osoblja');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Molimo ocijenite svoje mišljenje o lokalitetu nekretnine');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Molimo da date svoje mišljenje o čistoći nekretnine');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Molimo ocijenite smještaj. Je li bio udoban ili istrošen');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Molimo navedite svoje mišljenje je li vrijednost za novac');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Molimo ocijenite usluge');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Sažetak pregleda');
	jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Vaše iskustvo detaljnije');
	jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Hvala što ste poslali recenziju.');
	jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Hvala što ste poslali recenziju. Uskoro će je objaviti jedan od naših vrijednih moderatora.');
	jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Koristiti Jomresovu funkciju pregleda?');
	jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatski objavljivati ​​recenzije?');
	jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Ako postavite ovo na Ne, morat ćete ručno objaviti recenzije');
	jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Postavi recenzije u testni način?');
	jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Obično upravitelji nekretnina ne mogu pregledavati imovinu. S omogućenim testnim načinom, mogu. Naravno, to nije idealno u proizvodnom okruženju.');
	jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Ovo je popis svih svojstava. Da biste vidjeli recenzije nekretnina, kliknite na tu nekretninu. Odatle ćete moći objaviti ili izbrisati recenziju.');
	jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Broj neobjavljenih recenzija');
	jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Ukupan broj recenzija');
	jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Objavi/Poništi objavu recenzije');
	jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Izbriši recenziju');
	jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Prijavi pregled');
	jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Pregled izvješća');
	jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Molimo unesite svoje izvješće');
	jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Vidite li u ovoj recenziji nešto što je prigovorno ili netočno? Prijavite to i mi ćemo to provjeriti.');
	jr_define('_JOMRES_REVIEWS_SUBMIT', 'Pošalji');
	jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Izvješće izradilo');
	jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Izvješća objavljuju korisnici koji se ne slažu sa sadržajem recenzije. Jedini način uklanjanja izvješća je brisanje recenzije.');
	jr_define('_JOMRES_REVIEWS_RATING', 'Ocjene (1 = loše 10 = izvrsno)');
	jr_define('_JOMRES_REVIEWS_RATING_1', 'Ugostiteljstvo');
	jr_define('_JOMRES_REVIEWS_RATING_2', 'Lokacija');
	jr_define('_JOMRES_REVIEWS_RATING_3', 'Čistoća');
	jr_define('_JOMRES_REVIEWS_RATING_4', 'Smještaj');
	jr_define('_JOMRES_REVIEWS_RATING_5', 'Vrijednost za novac');
	jr_define('_JOMRES_REVIEWS_RATING_6', 'Usluge');
	jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Pregledao:');
	jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Sakrij recenzije');
	jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Prikaži obrazac za rezervaciju na stranici s pojedinostima o nekretnini?');
	jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Postavite ovo na Da da bi se obrazac za rezervaciju prikazao na stranici s podacima o nekretnini. Ako postavite na Ne, tada će se na stranici s podacima o nekretnini pojaviti veza umjesto da pokazuje na obrazac za rezervaciju.');
	jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Jesu li cijene uključene s porezom?');
	jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Cijene su uključene? Ako vaše cijene uključuju porez, odaberite Da. Ako nisu, odaberite Ne.');
	jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Porez na dodatke:');
	jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Polja za dan u tjednu omogućuju vam postavljanje stope za određeni dan u tjednu, nakon što pritisnete gumb za dan u tjednu svi dani u tjednu bit će postavljeni na tu stopu.');
	jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Alati za odabir datuma i unos tečaja omogućuju vam postavljanje jedne cijene za zadani datumski raspon. Odaberite datum početka i završetka, unesite cijenu i kliknite gumb Postavi cijene.');
	jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range');
	jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Kraj raspona');
	jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Ocjena');
	jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Postavi stope');
	jr_define('_JOMRES_PARTNERS_TITLE', 'Partners');
	jr_define('_JOMRES_CALENDAR_RTL', 'false');
	jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Soba');
	jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'gost (i).');
	jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Ovako smo dodijelili brojeve vaših gostiju njihovim sobama. Ako želite promijeniti ovu raspodjelu, morat ćete se obratiti hotelu nakon rezervacije. Mogu se naplatiti dodatne naknade ako promijenite svoje zadatke. ');
	jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Imajte na umu da vaš objekt još nije objavljen, samo ga možete vidjeti, posjetitelji web mjesta ga neće vidjeti');
// 4.5.5
	jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Zadani redoslijed rezultata pretraživanja');
	jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Promijenite ovu opciju za promjenu redoslijeda prikaza rezultata pretraživanja prema zadanim postavkama.');
	jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Prikaži padajući izbornik poretka rezultata pretraživanja');
	jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Stil popisa soba');
	jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'U obrascu za rezervaciju, koristeći "klasični" stil popisa soba, nudite gostima individualne sobe. Uz pogled na vrstu sobe, gosti odabiru broj soba tipa X (npr. 2 x dvokrevetne sobe) umjesto toga ');
	jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasično');
	jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Vrste soba');
	jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Dan početka kalendarskog tjedna, nedjelja ili ponedjeljak');
	jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Samo gosti objekta mogu pregledati?');
	jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Postavite ovo na Da ako želite ograničiti recenzije samo na one korisnike koji su već bili gosti u ovom objektu.');
	jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Po sobi');
	jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Gosti po sobi:');
	jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gosti po rezervaciji:');
	jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Broj soba');
	jr_define('_JRPORTAL_MONTHS_LONG_0', 'siječanj');
	jr_define('_JRPORTAL_MONTHS_LONG_1', 'Veljača');
	jr_define('_JRPORTAL_MONTHS_LONG_2', 'Ožujak');
	jr_define('_JRPORTAL_MONTHS_LONG_3', 'Travanj');
	jr_define('_JRPORTAL_MONTHS_LONG_4', 'svibanj');
	jr_define('_JRPORTAL_MONTHS_LONG_5', 'lipanj');
	jr_define('_JRPORTAL_MONTHS_LONG_6', 'srpanj');
	jr_define('_JRPORTAL_MONTHS_LONG_7', 'kolovoz');
	jr_define('_JRPORTAL_MONTHS_LONG_8', 'Rujan');
	jr_define('_JRPORTAL_MONTHS_LONG_9', 'Listopad');
	jr_define('_JRPORTAL_MONTHS_LONG_10', 'Studeni');
	jr_define('_JRPORTAL_MONTHS_LONG_11', 'Prosinac');
	jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Postavite ovo na Da da biste smanjili broj opcija dostupnih upraviteljima nekretnina u odjeljku Opća konfiguracija. Ovo je korisno ako ne želite da se upravitelji nekretnina igraju s previše postavki, umjesto toga možete urediti jomres_config .php za definiranje zadanih opcija svojstava. ');
	jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Molimo odaberite opciju za svoju rezervaciju');
	jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Ako je ova opcija postavljena na Da, tada će upravitelji moći vidjeti html uređivač isporučen s CMS -om i unijeti HTML u opis. To je potencijalni sigurnosni rizik jer postoji mogućnost da mogu uvesti neželjeni HTML ili Javascript. Osim toga, ako unesu loše formatirani HTML, dizajn stranice mogao bi biti ugrožen. Bolje je ovu opciju ostaviti postavljenu na Ne gdje god je to moguće. </p> <p> Ako su svi upravitelji pouzdani korisnici (npr. sebe), tada možete ostaviti postavljeno na Da i izmijeniti različite HTML oznake koje im je dopušteno unositi na kartici Filtriranje unosa u konfiguraciji web lokacije. </p> <p> S druge strane, ponovno koristite Jomres kao portal na kojem pozivate korisnike da dodaju i upravljaju svojim vlastitim nekretninama, ovo nije idealna konfiguracija. Umjesto toga ovu opciju ostavite postavljenu na Ne. S postavkom na Ne, upravitelji će umjesto toga vidjeti uređivač oznaka može koristiti za unos osnovnog oblikovanja koje bi trebalo biti dovoljni za većinu korisnika. </p> ");
	jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Prikaz na cijelom zaslonu');
	jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normalni prikaz');
	jr_define('_JOMRES_PARTNER_DISCOUNT', 'Partnerski popust');
	jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Traži korisnika');
	jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Unesite nekoliko znakova za traženje korisnika. <br/> Kad odaberete korisnika, automatski ćete ga dodati kao partnera i bit ćete preusmjereni na sljedeću stranicu na kojoj možete dodijeliti nekretnine i popuste korisniku. ');
	jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Postojeći partneri');
	jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Odaberite partnera za preusmjeravanje na stranicu za administraciju partnera.');
	jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
	jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Traži nekretninu');
	jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Unesite nekoliko znakova iz naziva svojstva i odaberite svojstvo. <br/> Kad odaberete nekretninu, dodati ćete je u portfelj partnera, no oni još neće uživati ​​popuste, trebat će vam da ih sami postavite. ");
	jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Trenutna svojstva');
	jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Kliknite na svojstvo da biste uredili partnerske postavke popusta za tu nekretninu.");
// 4.6
	jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Ovaj je račun obustavljen, trenutno nije moguće upravljati vašim vlasnicima pomoću ovog računa.');
	jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Račun upravitelja obustavljen');
	jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Račun upravitelja vraćen');
	jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Imajte na umu da je vaš račun upravitelja imovine obustavljen. Nećete moći obavljati nikakve funkcije upravljanja imovinom dok se račun ne vrati.');
	jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Imajte na umu da je vaš račun upravitelja nekretnina sada aktivan. Možete nastaviti obavljati sve funkcije upravljanja nekretninom. Prijavite se na svoj račun i pobrinite se da odgovarajuća ovlaštenja budu objavljena. Hvala vam.');
	jr_define('_JOMCOMP_MYUSER_REMOVE', 'Ukloni omiljeno');
	jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Arhiva podataka o rezervacijama');
	jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Arhiva podataka o rezervacijama sirovo je polje podataka o rezervacijama snimljenih nakon klika na gumb za potvrdu rezervacije. Zadržite pokazivač miša iznad datuma da biste vidjeli ispis sirovih podataka. Podaci se pohranjuju u tablicu XXX__jomres_booking_data_archive.');
	jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Uredi račun');
	jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Da biste dodali korisnika kao upravitelja svojstva, najprije unesite prvih nekoliko znakova njegovog korisničkog imena u gornje polje. Kad se pronađe pravi korisnik, kliknite to ime da biste ga odabrali, a zatim odaberite koje svojstvo ( s) trebali bi biti upravitelji. Korisnik <em> već mora biti korisnik u CMS -u </em> ');
	jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Postojeći upravitelji');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Spava');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Prikaži pretraživanje prema padajućem broju gostiju');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Zvijezde');
	jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Prikaži padajući izbornik Zvijezde');
	jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Spava');
	jr_define('_JOMRES_SEARCH_STARS', 'Broj zvjezdica');
	jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Broj svojstava');
// 4.6.1
	jr_define('_JOMRES_CONFIG_JQUERY', 'Učitaj Jomres jQuery knjižnicu?');
	jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Ovo možete postaviti na NE ako imate predložak koji koristi jquery. Ovaj MOŽDA rješava probleme sukoba jquery na nekim predlošcima, ali ne na svim.');
	jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Omogućavanje ove opcije omogućuje vam da vidite prebacivač jezika u prikazu preko cijelog zaslona na sučelju.');
	jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Minijature se automatski stvaraju za prenesene slike.');
// 4.7.1
	jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Maksimalna širina malih sličica (px).');
	jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Male se sličice koriste na popisu svojstava, dok se u zaglavlju svojstva koriste minijature srednje veličine.');
	jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Maksimalne visine malih sličica (px).');
	jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Maksimalna širina srednjih sličica (px).');
	jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Maksimalne visine minijatura (px).');
	jr_define('_JOMRES_TOUCHTEMPLATES', 'Prijevodi oznaka');
	jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Koristiti proviziju?');
	jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Postavite ovo na Da za prikaz računa za proviziju upravitelja koji su podignuti.');
	jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Rezervacije upravitelja stvaraju fakture s provizijom?');
	jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ako upravitelj vrši rezervaciju, stvara li to i stavku retka na proviziji?');
	jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Automatski obustavi upravitelje gdje su računi označeni kao Na čekanju?');
	jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automatski obustavi prag');
	jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Ovaj prag je broj dana u kojima upravitelj mora platiti fakturu prije nego što se obustavi i ne objavi njihova svojstva.');
//4.7.2
	jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Jezični kontekst');
	jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Koristite ovu opciju za promjenu jezičnog konteksta web lokacije. Ova značajka omogućuje Jomresu korištenje oznaka koje odgovaraju vašem trenutnom fokusu, pa ako je vaš fokus kao posrednik za jahte, tada će se promijeniti kontekst dopustiti Jomresu da predstavi oznake iz datoteke s drugim jezikom. Na primjer, ako postavite kontekst na "Posredovanje jahtama" tada će Jomres prvo pronaći trenutni jezik, a zatim u direktoriju /'.JOMRES_ROOT_DIRECTORY.'/jezik pronaći poddirektorij pod nazivom "yachtbrokerage". Ako datoteka postoji za trenutni jezik, tada će se ta datoteka koristiti. Ako ne, Jomres će potražiti datoteku na engleskom jeziku u tom istom direktoriju. Ako se to ne može pronaći, Jomres će koristiti jezična datoteka za trenutno odabrani jezik u /'.JOMRES_ROOT_DIRECTORY.'/imenik. ');
// 4.7.3
	jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Napredna konfiguracija web lokacije');
	jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Postavite ovu opciju na Da ako želite koristiti napredne mogućnosti konfiguracije web mjesta. Ako tek počinjete s Jomresom, savjetujemo vam da to za sada ostavite na Ne, jer je zadana instalacija dovoljno za početak, umjesto toga trebate dodati Jomres u glavni izbornik i prijaviti se na sučelje kao "admin" te početi konfigurirati svojstvo (e). Imajte na umu da mnoge napredne opcije možda neće biti dostupne ako ne t imati instalirane odgovarajuće dodatke. Korisnici besplatnog jezgrenog sustava neće moći u potpunosti iskoristiti mogućnosti koje omogućuju. ');
	jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Učitaj Jomres jQuery biblioteku korisničkog sučelja?');
	jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Cijena (prvo najviša)');
	jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Cijena (najniža prvo)');
// 4.7.6
	jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Sažetak cijena i procjene trebaju se odrediti po noći/tjedno/mjesečno?');
	jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Po noći');
	jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Po tjednu');
	jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Mjesečno');
	jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Po osobi');
	jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'tjedan (i) u');
	jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mjesec (i) u');
// 4.7.7
	jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Kako bi trebala funkcionirati opcija pretraživanja brojeva ljudi?');
	jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Utječe na sve module pretraživanja. Prilikom upotrebe značajke pretraživanja broja gostiju, treba li značajka pretraživanja tražiti svojstva čije će tarife podržavati gostujuće brojeve i biti jednaki odabranom broju, ili odabrani broj i veći? ');
	jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Molimo pričekajte, vaša se narudžba obrađuje i bit ćete preusmjereni na web stranicu Paypala.');
	jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Ako niste automatski preusmjereni na Paypal u roku od 5 sekundi ...');
	jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Kliknite ovdje');
// 4.7.8
	jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Rezervacija vrijedi od');
	jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Rezervacija vrijedi do');
	jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Ime gosta');
	jr_define('_JRPORTAL_COUPONS_DESC_478', "Kodovi za popuste mogu se generirati i proslijediti gostima kao poticaj za rezervacije. <br/>
Važeći od i do datumi odnose se na datume na koje je moguće izvršiti rezervaciju, dok se rezervacija koja važi od/do datuma odnosi na datume koje rezervacija mora pokriti da bi kupon bio važeći. Ako rezervacija padne izvan tog razdoblja, primjenjivat će se normalne cijene za dane izvan tog razdoblja. <br/>
Ako želite da rezervacija bude dostupna jednom određenom gostu, odaberite ime tog gosta u padajućem izborniku kako biste kupon ograničili samo na tog gosta. ");
	jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'S vašim je kuponom ova rezervacija snižena');
	jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'do');
	jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Postavite ovo na Ne da biste onemogućili učitavanje javascript i CSS datoteka JUery korisničkog sučelja.');
	jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Učitaj Jomres jQuery UI CSS biblioteku?');
	jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Postavite ovo na Ne da biste onemogućili samo CSS datoteku korisničkog sučelja jquery.');
//v5.1
	jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Ukupni porez');
	jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Neobjavljeno vlasništvo');
// v5.2
	jr_define('_JOMRES_CONVERSION_TITLE', 'Koristi funkcionalnost konverzije');
	jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Upotrijebite Jomresovu mrežnu funkciju konverzije. To će ponuditi padajući izbornik konverzija za sučelne korisnike, gdje će moći odabrati valutu u kojoj žele vidjeti ponuđene cijene. Izlazna cijena prilagođena je tako da prikazuje pretvorene cijena slijedi \"izvorna\" cijena nekretnine u zagradama. ");
	jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Uložili smo sve napore u postizanje što točnijih i pravovremenih tečajeva. Naša značajka pretvaranja valuta na mreži usluga je koja služi samo u informativne svrhe i ne namjerava dati točne brojke. U skladu s tim, ne jamčimo točnost tečaja. Korištenjem ove značajke smatra se da ste se složili da će svako oslanjanje ili upotreba značajke pretvaranja tečaja biti na vlastitu odgovornost. ');
// 5.2.1
// 5.3.1
	jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Konverzija valute/kodovi valuta');
	jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'API ključ za otkrivanje IP -a');
	jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Za automatsko postavljanje padajućeg koda valute Jomres može koristiti besplatnu uslugu pod nazivom IPinfoDB za otkrivanje zemlje posjetitelja, međutim morate se registrirati za API ključ na <a href = "https://www.ipinfodb.com/login" target ="_blank"> IPinfoDB </a> prvo. ');
	jr_define('_JOMRES_DEBUGGING_TAB', 'Otklanjanje pogrešaka');
	jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Smještaj bez poreza');
	jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Smještaj sa porezom');
	jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Porez na sobe:');
	jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Otvori obrazac za rezervaciju');
	jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Natrag na detalje o nekretnini');
	jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatski odabrano?');
	jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Stanje (nakon uplate depozita)');
	jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtriranje resursa na temelju njihovih značajki.');
	jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Najnovija rezervacija');
	jr_define('_JOMRES_DATEPERIOD_SECOND', 'drugo');
	jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minuta');
	jr_define('_JOMRES_DATEPERIOD_HOUR', 'sat');
	jr_define('_JOMRES_DATEPERIOD_DAY', 'dan');
	jr_define('_JOMRES_DATEPERIOD_WEEK', 'tjedan');
	jr_define('_JOMRES_DATEPERIOD_MONTH', 'mjesec');
	jr_define('_JOMRES_DATEPERIOD_YEAR', 'godina');
	jr_define('_JOMRES_DATEPERIOD_DECADE', 'desetljeće');
	jr_define('_JOMRES_DATEPERIOD_S', 's');
	jr_define('_JOMRES_DATEPERIOD_AGO', 'prije');
	jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'od sada');
	jr_define('_JOMRES_WHOLEDAY_TITLE', 'Rezervacije su za cijele dane?');
	jr_define('_JOMRES_WHOLEDAY_DESC', 'Sustav prema zadanim postavkama rezervira resurse do noći, tako da je rezervacija od prvog siječnja' .date('Y', strtotime('sljedeće godine')). 'do 2. siječnja' .date('Y', strtotime('iduće godine')). 'pokriva samo jednu noć. Ako ovu opciju postavite na Da, rezervacija će umjesto toga pokriti cijele dane, pa bi rezervacija tih dana pokrivala oboje dana, a korisniku će se naplatiti dva dana. ');
	jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Po danu');
	jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Po osobi dnevno');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Preuzimanje');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Povratak');
	jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dana (i) u');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Datum vraćanja nije točan');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Rezervacija je prekratka. Treba proći barem toliko dana između datuma preuzimanja i povrata:');
	jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Minimalni interval preuzimanja/vraćanja');
	jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Najmanji interval u obrascu za rezervaciju između datuma preuzimanja i otpreme. Interval od 1 znači da se datumi preuzimanja i vraćanja mogu postaviti na isti dan, međutim to i dalje ovisi o minimalnom interval koji automatski izračunava mehanizam za rezervacije jer provjerava važeće tarife za razdoblje rezervacije. ');
	jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Cijene sažetka i procjene trebaju biti dnevne/tjedne/mjesečne?');
	jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Po danu');
	jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dani prije datuma preuzimanja');
	jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Najmanji broj dana koji mora proteći, od "danas", prije datuma preuzimanja.');
	jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Postavite ovo na da ako želite ograničiti unaprijed rezervacije (upotrijebite sljedeće polje za postavljanje ograničenja u danima). Ako postavite ovo na da, ako korisnik pokuša rezervirati više od n dana unaprijed, tada će njihov datum preuzimanja biti vraćen na današnji datum ');
	jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Prikaži unos datuma povratka?');
	jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Postavite ovo na Ne ako ne želite prikazati okvir za unos datuma povrata. Koristite ovo samo ako znate što radite, jer će datum povrata u rezervacijama uvijek biti postavljen na dan nakon datuma preuzimanja. ");
	jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Ako ovo postavite na Da, tada će se rezervacije uzimati na određeno razdoblje. Ako je ovo postavljeno na Ne, onda provjerite da "definirani dan preuzimanja" nije postavljen na Da (osim ako niste želite prisiliti ljude da se jave na određeni dan u tjednu) inače nećete dobiti mnogo veza u kalendaru dostupnosti. ');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Unaprijed definirani dan preuzimanja');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Samo za web stranice koje nude rezervacije na određeno razdoblje. Odaberite dan u tjednu na koji se preuzimanja moraju izvršiti.');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fiksni dan preuzimanja');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Ponavljanje fiksnih datuma preuzimanja:');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Kada su odabrani fiksni datumi preuzimanja, broj datuma koji se mogu prikazati na padajućem popisu datuma. Imajte na umu da popis datuma neće uključivati ​​datume ako rezervacija nije moguća zbog prethodnih rezervacija, i da će popis zapravo biti dvostruko dulji od vašeg odabranog broja jer će imati sličan broj povijesnih datuma (gdje su dostupni). ');
	jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Po osobi, po danu');
	jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Odaberite Da ako želite naplaćivati ​​po osobi po danu. Ako ne, tada će se troškovi izračunavati po resursu po danu');
	jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Promjenjivi depoziti omogućuju vam da definirate želite li naplatiti cijeli iznos ako je datum preuzimanja rezervacije unutar N dana od "danas". Postavite ovu opciju na Da da biste omogućili značajku , i unesite donji broj dana, pa, na primjer, ako je dan preuzimanja unutar 60 dana, tada će iznos depozita biti pun iznos, inače će se iznos temeljiti na gore konfiguriranim opcijama pologa. ');
	jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Većina će tvrtki ponovno izračunati cijene resursa na temelju broja resursa potrebne vrste koji su dostupni na određeni datum. To im omogućuje da ponude popuste na resurs/vrstu poslovanja koja nije zauzeta tijekom određeno razdoblje s ciljem privlačenja poslova koji bi se inače mogli propustiti. <br/> Omogućavanje i konfiguriranje ovog dodatka omogućuje vam da ponudite prilagodljive cijene na temelju broja resursa odabrane vrste koji su dostupni u tvrtki na određeni dan. <br/> Prag dana definira broj dana u kojima datum preuzimanja mora biti unutar prije nego što cijene resursa budu prilagođene ovom značajkom, tada vam opcije postotaka omogućuju konfiguriranje postotka resursa koji su dostupni prije primjene datog popusta . Imajte na umu, međutim, ako je rezervirano više resursa, tada će se trenutna razina popusta primijeniti na sve resurse i neće se smanjivati ​​kako se odabire više resursa. ');
	jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Prag (broj dana između datuma preuzimanja i danas)');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Preuzimanje na čekanju');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Preuzimanje danas');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Pokupljeno');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Vraća se danas');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Povratak kasni');
	jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Nije se javio');
	jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Dani');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Označite preuzimanje rezervacije.');
	jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Označi da je rezervacija vraćena.');
	jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Označi preuzetu rezervaciju');
	jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Označi vraćenu rezervaciju');
	jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cijena po danu:');
	jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Broj dana:');
	jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Nadjačaj smještaj ukupno');
	jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Spremi poništavanje');
	jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Pošaljite e -poštom svojim korisnicima podatke za prijavu?');
	jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Ako je opcija Stvori novog korisnika postavljena na Da, možete postaviti ovu opciju na Ne kako biste bili sigurni da se njihovi podaci za prijavu ne šalju e -poštom nakon što je korisnik stvoren. Ovo bi moglo biti korisno ako ste automatski dodavanje novih korisnika na popis adresa, na primjer, i ne žele da se korisnici stvarno prijave. ');
	jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Prikaži izlaz poreza u sažetku zbroja obrasca za rezervaciju?');
	jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Spriječite da obrazac za rezervaciju prikazuje polja s cijenama poreza u sažetku zbroja postavljanjem ove opcije na Ne.');
	jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Prag otkazivanja');
	jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Prijavljeni, registrirani gosti mogu otkazati vlastite rezervacije. Ovdje možete postaviti prag u danima u kojima se rezervacija ne može otkazati nakon određenog broja dana prije datuma dolaska.');
	jr_define('_JOMRES_EDIT_PROFILE', 'Uredi profil');
	jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Odnos tipa svojstva');
	jr_define('_JOMRES_IMAGE', 'Slika');
	jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Kliknite na slovo za prikaz svih tvrtki s tim prvim znakom. Nakon što imate popis svojstava, tim nekretninama možete dodijeliti stope provizije ili kliknite njihovu ikonu "uredi" da biste vidjeli tvrtku \' s statistika. ');
	jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Uredi poreznu stopu');
	jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Uredi prilagođeno polje');
	jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Zaporka poslužitelja licenci');
	jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Korisničko ime poslužitelja licenci');
	jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Ako imate korisničko ime i lozinku na poslužitelju licenci, unesite ih ovdje. To će vam pomoći da pristupite dodacima na koje imate pravo. Ako ste u gornje polje unijeli važeći ključ podrške, tada ovdje nije potrebno unijeti korisničko ime/lozinku. ');
	jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Ova verzija Jomresa:');
	jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Najnovija verzija Jomresa');
	jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Upozorenje: Dostupna je nova verzija Jomresa, preporučuje se nadogradnja što je prije moguće.');
	jr_define('_JOMRES_PRODUCT_INFORMATION', 'Dobro došli u Jomres. Sustav Core je besplatan, ali se može poboljšati instalacijom dodataka. Za pristup tim dodacima potrebna vam je licenca za preuzimanje i podršku. Ako želite kupiti Jomres Starter , Poslovna ili Poduzetnička licenca, <a href="https://www.jomres.net/prices" target="_blank"> posjetite našu web lokaciju </a> za informacije o tome kako možete nadograditi. ');
	jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Ovaj je sustav idealan za svaki scenarij, bio to jednostavan obrazac za rezervaciju za jednu nekretninu, sve do web stranice koja ima više korisnika, na više jezika, s više svojstava. Pogledajte "Pomoć" odjeljak u izborniku, uključujući stranicu "Početak rada" koja će vas voditi kroz vaše prve korake. ');
	jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktivno vlasništvo');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Postavke e -pošte');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Postavite ovu opciju na Da da biste koristili ove zamjenske postavke SMTP-a. Čini se da sve veći broj web domaćina blokira funkcionalnost pošte PHP-a, pa možete izabrati premošćivanje postavki pošte koje Jomres usvaja od vašeg domaćina CMS (obično Joomla) i ovdje koristite postavke po vlastitom izboru. ');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternativni domaćin');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Promijeni ovo na svoj smtp poslužitelj pošte');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternativni port');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Promijeni ovo u svoj smtp port');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternativni protokol');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Ovisno o postavkama vašeg poslužitelja smtp, ovo polje morate ostaviti prazno ili unijeti \"ssl\" ili \" tls\". Pitajte svog davatelja usluga SMTP ako ne znate.");
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Koristi provjeru autentičnosti');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Ako vaš SMTP poslužitelj zahtijeva od klijenata da se prijave, postavite ovo na Da. Tada će se koristiti korisničko ime i lozinka.');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternativno korisničko ime');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternativna lozinka');
	jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
	jr_define('_JOMRES_QUICK_INFO', 'Brzi podaci');
	jr_define('_JOMRES_MENU_SHOW', 'Prikaži');
	jr_define('_JOMRES_MENU_HIDE', 'Sakrij');
	jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Zadano');
	jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Bilo tko');
	jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registrirano');
	jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Upravitelj');
	jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
	jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nitko');
	jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Kontrola pristupa izborniku');
	jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Ova značajka omogućuje vam da kontrolirate tko će moći vidjeti dodatak na glavnom izborniku. Korisničke opcije 00009 obično mogu vidjeti ili/ili neregistrirani posjetitelji web stranice, 00010 opcija općenito se odnosi na aktivnosti tipa prijema koje su koriste se svakodnevno, dok se 00011 opcija koristi za postavljanje i konfiguriranje svojstva, ali im se pristupa rjeđe. ');
	jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepcionar');
	jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Potpuna kontrola pristupa');
	jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Postavite ovu opciju na Da da biste omogućili značajku potpune kontrole pristupa, a zatim posjetite opciju Kontrola pristupa u odjeljku Održavanje sustava za konfiguriranje kontrola pristupa.');
	jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Imajte na umu, međutim, da ove postavke ne kontroliraju skripte na koje se povezuju, pa, na primjer, ako <i> 00009user_option_03_search </i> postavite na \"Manager\", korisnik koji poznaje Jomres i dalje može nazovite j06000search.class.php unosom http://www.domain.com/index.php?option=com_jomres&task=search u adresnu traku preglednika. To je namjerno jer ova kontrola pristupa izborniku jednostavno kontrolira ono što se može vidjeti u Jomres glavni izbornik. Ako trebate strože kontrole, postavite opciju Site Config -> Full Access Control na Yes i ponovno posjetite opciju Control Access Menu. ");
	jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Kontrola potpunog pristupa');
	jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Ova je značajka samo za napredne korisnike. Ako ne znate čemu služi i nemate poseban razlog za njezinu upotrebu, vratite se na konfiguraciju web -lokacije i postavite potpuni pristup Kontrolna opcija na Br. </strong> <br/>
Ova vam značajka omogućuje da kontrolirate tko može pristupiti kojim minikomponentama (uz neke iznimke koje su teško kodirane u sustav). Ako je razina pristupa pored naziva skripte postavljena na Zadana, tada s opcijom Kontrola potpunog pristupa postavljenom na Da <strong> svatko </strong> može pristupiti skriptama kojima ne bi trebao pristupiti ako namjeravate koristiti ovu značajku koju MORATE postaviti razinu kontrole pristupa za <strong> svaku </strong> Jomres minikomponentu koja je ovdje navedena. Ako ne znate što ove minikomponente rade, preporučujemo vam da ovu značajku uopće ne koristite. <br/>
U Jomresu razine pristupa slijede piramidu, pa su upravitelji super nekretnina veći od upravitelja. Ukratko Super Manager> Upravitelj> Recepcioner> Registriran> Neregistriran. Dakle, ako registrirani korisnik ima pristup minikomponenti, to čine i recepcionari, menadžeri i supermenadžeri. <br/>
Imajte na umu da ne možete kontrolirati minikomponente administratorskog područja. Bilo tko u administratorskom području smatra se pouzdanim korisnikom jer mu ne bi trebao biti blokiran pristup bilo kojoj skripti (osobito ovoj).
");
	jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Upozorenje! Omogućena vam je potpuna kontrola pristupa, međutim mi smo prebrojali postavke kontrole pristupa i usporedili ih s brojem minikomponenti koje treba kontrolirati, a dvije se ne podudaraju, pa možda imate neke skripte koje se ne kontroliraju. To bi mogao biti sigurnosni problem i pozivamo vas da to odmah riješite posjetom značajci Kontrola pristupa i provjerom da li su primijenjene odgovarajuće razine. ");
	jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Korisnici s administratorskim pravima za ovo svojstvo');
	jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Vaša adresa e -pošte');
	jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
	jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametri');
	jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Sila');
	jr_define('_JOMRES_METATITLE', 'Meta naslov');
	jr_define('_JOMRES_METADESCRIPTION', 'Meta opis');
	jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Dodajte svoju nekretninu: Korak 2 od 2');
	jr_define('_JOMRES_CART_TITLE', 'Moje predložene rezervacije');
	jr_define('_JOMRES_CART_INFO', 'Imajte na umu da ove rezervacije još nisu spremljene. Ako se odjavite ili vam sesija istekne, bit će izgubljeni. Ne zaboravite potvrditi svoje rezervacije!');
	jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Potvrdi rezervacije');
	jr_define('_JOMRES_CART_OR', 'ili');
	jr_define('_JOMRES_CART_SAVEFORLATER', 'Spremi za kasnije');
	jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Nemate još spremljenih rezervacija.');
	jr_define('_JOMRES_CART_VIEWCART', 'Prikaži košaricu');
	jr_define('_JOMRES_CART_TITLE', 'Moje predložene rezervacije');
	jr_define('_JOMRES_CART_INFO', 'Imajte na umu da ove rezervacije još nisu spremljene. Ako se odjavite ili vam sesija istekne, bit će izgubljeni. Ne zaboravite potvrditi svoje rezervacije!');
	jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Potvrdi rezervacije');
	jr_define('_JOMRES_CART_OR', 'ili');
	jr_define('_JOMRES_CART_SAVEFORLATER', 'Spremi za kasnije');
	jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Nemate još spremljenih rezervacija.');
	jr_define('_JOMRES_CART_VIEWCART', 'Prikaži košaricu');
	jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Poddirektorij jezičnih datoteka');
	jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Zadana početna točka zemljopisne širine');
	jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Zadana početna točka zemljopisne dužine');
	jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Na Google karti na stranici za uređivanje svojstva, prije nego što se oznaka premjesti, koje bi zadane početne točke zemljopisne širine/dužine trebale biti?');
	jr_define('_JOMRES_SYSTEM_EMAILS', 'E -pošta poslana s koje adrese?');
	jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Ostavite ovu opciju praznom da biste je onemogućili. Jomres će koristiti e -adrese hotela prilikom slanja e -pošte gostima, no vaša usluga e -pošte MOŽDA neće dopustiti e -poštu s proizvoljnih adresa (tj. jednu ovlaštenu adresu). Ako je to slučaj, onda možete koristiti ovaj ulaz za unos adrese koja će se vidjeti kao FROM adresa za sve e -poruke sustava. ");
	jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Prikaz popisa');
	jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Pregled fotografija');
	jr_define('_JOMRES_COMPARE', 'Usporedi');
	jr_define('_JOMRES_REMOVE', 'Ukloni');
	jr_define('_JOMRES_RETURN_TO_RESULTS', 'Povratak na rezultate pretraživanja');
	jr_define('_JOMRES_ADDTOSHORTLIST', 'Dodaj u favorite');
	jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Ukloni iz favorita');
	jr_define('_JOMRES_VIEWSHORTLIST', 'Pogledajte svoj uži izbor');
	jr_define('_JOMRES_COOKIEPOLICY_1', 'Važno: Pravila o kolačićima');
	jr_define('_JOMRES_COOKIEPOLICY_2', 'Koristimo kolačiće kako bismo našu web stranicu održali relevantnom i jednostavnom za korištenje.');
	jr_define('_JOMRES_COOKIEPOLICY_3', 'Pročitajte više ...');
	jr_define('_JOMRES_COOKIEPOLICY_4', 'Zakonodavstvo EU -a zahtijeva da sve web stranice jasno naznače koriste li se kolačići i njihova svrha.');
	jr_define('_JOMRES_COOKIEPOLICY_5', "Stroj za pretraživanje i rezervacije ove web stranice mora se moći sjetiti opcija koje ste odabrali za najbolji rad. Da biste to učinili, potrebno je pohraniti podatke koji su povezani s malom datotekom zvanom \"kolačić \" koji jedinstveno identificira vaš preglednik, a da bismo to učinili, morate se složiti da to možemo. Ako ne prihvatite ovu politiku kolačića, bit ćete jako ograničeni u onome što možete učiniti na ovoj web stranici. ");
	jr_define('_JOMRES_COOKIEPOLICY_6', 'Da, prihvaćam upotrebu kolačića na ovaj način.');
	jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Potreban polog je cijena prve noći?');
	jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Cijene se izračunavaju po noćenju. Želite li da polog bude jedna noć? Ako je tako, možete zanemariti sljedeće opcije.');
	jr_define('_JOMRES_NOTHINGINSHORTLIST', "Niste dodali nijednu stavku u svoje favorite.");
	jr_define('_JOMRES_SAFEMODE', 'Omogući siguran način rada?');
	jr_define('_JOMRES_SAFEMODE_DESC', "Postavite ovo na Da da biste pokrenuli siguran način rada. To će onemogućiti sve dodatke tako da će Jomres koristiti samo svoju osnovnu funkcionalnost.");
	jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
	jr_define('COMMON_NEXT', 'Next');
	jr_define('COMMON_CANCEL', 'Cancel');
	jr_define('COMMON_SUBMIT', 'Submit');
	jr_define('COMMON_SAVE', 'Save');
	jr_define('COMMON_DELETE', 'Delete');
	jr_define('COMMON_RETURN', 'Return');
	jr_define('COMMON_CLOSE', 'Close');
	jr_define('COMMON_BACK', 'Back');
	jr_define('COMMON_HOME', 'Home');
	jr_define('COMMON_NEW', 'Novo');
	jr_define('COMMON_SEND', 'Pošalji');
	jr_define('RECAPTCHA_TITLE', 'reCaptcha');
	jr_define('RECAPTCHA_INFO', 'Captcha se koristi kako bi se osiguralo da je klijent koji koristi web obrasce ljudsko biće, a koristi se za sprječavanje da roboti na internetu "spamiraju" upravitelje nekretnina. Da biste koristili obrazac za kontakt u Jomresu, morat će se registrirati na <a href="http://www.google.com/recaptcha" target="_blank"> Google reCaptcha </a> početnoj stranici i postaviti svoju domenu da prima vaše javne i privatne ključeve. primili ste te ključeve, unesite ih ispod. Usluga reCapcha besplatna je usluga koju pruža Google. ');
	jr_define('RECAPTCHA_PUBLIC_KEY', 'Javni ključ');
	jr_define('RECAPTCHA_PRIVATE_KEY', 'Privatni ključ');
	jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Vremensko ograničenje datoteke zaključavanja');
	jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Kako bi spriječio opasnost od gostiju da rezerviraju dvokrevetne sobe, Jomres koristi datoteku zaključavanja kako bi spriječio dodavanje sobe na popis raspoloživih soba u obrascu za rezervaciju ako je netko već dodao sobu svojoj sobi za iste datume . Prema zadanim postavkama, ovo zaključavanje će isteći za 3600 sekundi ili jedan sat. Promjenom ove brojke možete promijeniti vrijeme potrebno da istekne ovo zaključavanje. ');
	jr_define('_JOMRES_BOOTSTRAPSWITCH', "Omogući Jomres 'Bootstrap predloške i funkcionalnost?");
	jr_define('COMMON_ACTION', 'Action');
	jr_define('COMMON_VIEW', 'View');
	jr_define('BACKTOTOP', 'Natrag na vrh');
	jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Slabo');
	jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Snažno');
	jr_define('_JOMRES_INPUTFILTERING', 'Filtriranje ulaza');
	jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Ulazna razina filtriranja');
	jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Većina podataka koji se unose u sustav čiste se tako da se prvo uklone sve html oznake, a zatim pomoću funkcije filtriranja varijabli PHP -a učini podaci sigurnima prije unosa u bazu podataka. Možda biste htjeli dopustiti određene unose (na primjer, unosi teksta na stranici s pojedinostima o svojstvu) za uključivanje HTML -a. Postoje dvije razine filtriranja koje možete koristiti za filtriranje ovog unosa, ili Slab ili Snažan. Postavku Slab trebate koristiti samo ako korisnici koji ulaze podaci vjerujete sebi, npr. kolegama administratorima sustava, inače biste trebali ostaviti postavljeno na Strong. Kad je postavljeno na strong (preporučeno), još uvijek možete odrediti koje oznake dopustiti uređivanjem sljedeće postavke \"HTML Purifier allowed tags\". ") ;
	jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Dopuštene oznake za unos');
	jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Možete uređivati ​​oznake koje html pročišćivač dopušta kroz svoj sustav filtriranja. Zadana vrijednost je \" p, b, jaka, a [href], i \" (tj. Paragraf, Podebljano, Strogo, Veze i kurziv) Za više informacija o dopuštenim oznakama pročitajte dokumentaciju pročišćivača HTML -a na <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Iako možete promijeniti ovu postavku, savjetuje se da ga ostavite na zadano. ");
	jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Dopušteni ulazi');
	jr_define("_JOMRES_INPUTFILTERING_INPUTS_DESC” ", "možete odrediti koji oblik ulaza će omogućiti html uređivanjem ovu opciju, bilo koji ulaz dodaje ovom popisu će biti analiziran kroz HTML pročišćavanje, umjesto da sve HTML oduzeta Zadano je: 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers '. Dodajte još unosa dodavanjem njihovih imena, odvojenih razmakom. ");
	jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Pojedinosti o nekretninama u karticama?');
	jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Postavite ovu opciju za prikaz pojedinosti o svojstvima na karticama. Postavite na ne da bi se prikazivali bez kartica.');
	jr_define('COMMON_PRINT', 'Ispis');
	jr_define('COMMON_EDIT', 'Edit');
	jr_define('COMMON_COPY', 'Copy');
	jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres je dizajniran za rad u okvirima Bootstrap 2 ili Bootstrap 3. Nakon što instalirate BS2 ili BS3 temu ili predložak, postavite ovaj prekidač da biste odabrali koje od aroma Bootstrapa želite da Jomres radi s.');
	jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Koristi Jomres Bootstrap predloške na sučelju?');
	jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Evo nekoliko alternativa koje biste mogli razmotriti.');
	jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Automatsko otkrivanje zemlje gosta?");
	jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Sustav će pokušati automatski otkriti državu gosta, ako već nije rezervirao. Ovu opciju možete postaviti na Ne i definirati državu koju želite prikazati u obrascu za rezervaciju, u sljedeća opcija. ");
	jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'O Jomresu');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'pomoć');
	jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Početak');
	jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Kontrola pristupa');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'alati za razvojne programere');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'jezici');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'stvaranje prihoda');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'struktura web lokacije');
	jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Priručnik (na mreži)');
	jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Moj račun (na mreži)');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'funkcionalnost portala');
	jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Upravitelj dodataka');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integracija');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'izvješća/statistika');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'pomoć');
	jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Ažuriranja');
	jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'načini plaćanja');
	jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Zadana tarifa');
	jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Ovo se odnosi samo na nove tarife');
	jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Godine za prikazivanje');
	jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Određuje broj godina za prikaz pri uređivanju vrste tarife');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'fakture');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'pojedinosti o računu');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Prijava');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Odjava');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'traži');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'nadzorna ploča');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'rezerva');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'fakture');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'postavke');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'ostalo');
	jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Uređivanje zemlje');
	jr_define('_JOMRES_EDIT_COUNTRY_ID', 'ID zemlje');
	jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Šifra zemlje');
	jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Naziv zemlje');
	jr_define('_JOMRES_EDIT_REGION_TITLE', 'Uredi regiju');
	jr_define('_JOMRES_EDIT_REGION_ID', 'ID regije');
	jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Šifra zemlje');
	jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Naziv regije');
	jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Popis zemalja');
	jr_define('_JOMRES_COM_LISTREGIONS', 'Popis regija');
	jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Izvoz definicija');
	jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Ova značajka omogućuje vam izvoz prijevoda izgrađenih pomoću značajke Prevođenje jezika. Izgradit će tekstualno polje sa svim podacima potrebnim za izradu nove jezične datoteke, sve što trebate učiniti je kopirati i zalijepiti ovaj izlaz u novu jezičnu datoteku koju možete staviti na novi poslužitelj sa sjedištem u Jomresu ili ako želite vratiti doprinos zajednici Jomres. ');
	jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Prevedi jezike');
	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Prevedi nizove datoteka lang');
	jr_define('_JOMRES_COM_NOTAMANAGER', "Pogreška, korisnik na kojeg ste prijavljeni nije super upravitelj u Jomresu, nećete moći koristiti ovu značajku sve dok ne upotrijebite značajku Upravitelji nekretninama kako biste se oboje postavili upraviteljem i super menadžer. Ovo je sigurnosna značajka. ");
	jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Zadani izgled popisa svojstava');
	jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Ostanite minimalno');
	jr_define('_JOMRES_NIGHTSFOR', 'noći za');
	jr_define('_JOMRES_AGENT', 'Agent');
	jr_define('_JOMRES_AGENT_DETAILS', 'Pojedinosti o agentu');
	jr_define('_JOMRES_AGENT_LISTINGS', "Unosi agenata");
	jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatski odobri nova svojstva');
	jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Ako postavite ovu opciju na Ne, morat ćete ručno odobriti nova svojstva. Dok ne odobri nekretninu, ne može je objaviti upravitelj/super upravitelj nekretnine.');
	jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Odobrenja');
	jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Ovo svojstvo još nije odobreno. Nakon što ga odobrite, moći ćete ga objaviti.');
	jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Nažalost, ne možete objaviti ovaj objekt jer još nije odobren.');
	jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Za novo svojstvo potrebno je odobrenje');
	jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Sustav je dodan u sustav za koje je potrebno vaše odobrenje. Kliknite vezu za pregled svojstava koja čekaju na odobrenje:');
	jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Vaša je nekretnina odobrena');
	jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Čestitamo, vaša je nekretnina odobrena, kliknite sljedeću vezu za pregled upravljačke ploče nekretnine:");
	jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Nazivi regija mogu se prevesti');
	jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Osim ako ne koristite vrlo brzi poslužitelj, preporučuje se da ovaj skup ostavite na Ne. Zbog velikog broja naziva regija, prijevod naziva regije zauzima puno memorije što može usporiti rezultate pretraživanja dolje. ");
	jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Gost rezerviran.');
	jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Žao nam je, ta adresa e -pošte se već koristi. Ako je ovo vaša adresa e -pošte, provjerite jeste li se prijavili prije pokušaja rezervacije.');
	jr_define('JOMRES_TAPTOCALL', 'Dodirni za poziv');
	jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Nova recenzija za');
	jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Nova recenzija je ostavljena za');
	jr_define('JOMRES_NEWREPORT_SUBJECT', 'Novo izvješće');
	jr_define('JOMRES_NEWREPORT_MESSAGE', 'Pregled je prijavljen za');
	jr_define('JOMRES_SUPERIOR', 'Superior');
	jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Ukupni iznos (bez poreza):');
	jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Ukupno (uključujući porez):');
	jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Ukupni porez:');
	jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Upišite dvije riječi:');
	jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Unesite ono što čujete:');
	jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Ponovi audio zapis');
	jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Preuzmi pjesmu u MP3 formatu');
	jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Vizualni način rada');
	jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio način rada');
	jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Osvježi');
	jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Pomoć');
	jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Nažalost, to nije točno. Pokušajte ponovno.');
	jr_define('JOMRES_GOOGLE_MAPS', 'Opcije Google karte');
	jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Koristiti vremenski sloj?');
	jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
	jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
	jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Koristiti tranzitni sloj?');
	jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Omogući Gmap -ove točke interesa (uključujući moguće vaše konkurente)?');
	jr_define('_JOMRES_METAKEYWORDS', 'Meta ključne riječi');
	jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Skenirajte ovaj kôd u svoj telefon da biste dobili upute do nas.');
	jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Izgleda da PDV broj koji ste unijeli nije točan. Trebali biste imati nešto poput ovoga: BE805670816B01");
	jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Nevažeći broj PDV -a. Provjerite valjanost svog PDV broja s web -uslugom Europa za provjeru PDV broja (VIES)');
	jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Čestitamo. Uspjeli smo potvrditi vaš PDV broj.');
	jr_define('_JOMRES_TAX_RULES_LIST', 'Popis poreznih pravila');
	jr_define('_JOMRES_TAX_RULE', 'Porezno pravilo');
	jr_define('_JOMRES_TAX_RULE_INFO', 'Porezna pravila koriste se za utvrđivanje različitih poreznih pravila za različite regije. Ova porezna pravila utječu na osobu koja vrši rezervaciju, ako je registrirana, prijavljena i uredila svoj račun pomoću stranice "uredi moj račun" . Svrha ovih pravila je smjestiti bookere u ona područja koja su oslobođena PDV -a, možda ćete otkriti da ne morate stvarati mnoga pravila, ako ih uopće ima. ');
	jr_define('_JOMRES_TAX_RATES_IMPORT', 'Stope uvoznog poreza');
	jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Ako želite, za vas možemo uvesti porezne stope za EU. Napomena, ako koristite ovu značajku, sve vaše postojeće porezne stope bit će uklonjene.');
	jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Uredi porezno pravilo');
	jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Broj PDV -a za ovu nekretninu.');
	jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Molimo unesite PDV broj za ovu nekretninu.');
	jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Broj PDV -a potvrđen.');
	jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Broj PDV -a nije potvrđen.');
	jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Ovdje navedeni poslovni podaci koristit će se na fakturama i pretplatama.');
	jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Čini se da još niste unijeli podatke o svom računu. Da bismo naveli vašu nekretninu na web mjestu, trebate dovršiti podatke o svom računu prije nego što nastavimo.");
	jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Proizvodnja ili razvoj?');
	jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Ako postavite ovu opciju na razvoj, omogućit ćemo izvješćivanje o pogreškama, inače će se, kad je postavljeno na Proizvodnja, isključiti. Ako je ovo poslužitelj uživo, preporučujemo da postavite ovu opciju na "produkcija".');
	jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Proizvodnja');
	jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Razvoj');
//v7.3.3
	jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Pojedinosti o resursu');
	jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Pojedinosti o tarifama');
	jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Samo');
	jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'lijevo!');
	jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Značajka resursa');
	jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Nije moguće ukloniti ovu značajku resursa, dodijeljena je resursu. Uklonite značajku iz ovog resursa i pokušajte ponovo.');
// v7.4
	jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Medijski centar');
	jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Dodaj slike');
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Slike sobe');
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Glavna slika nekretnine');
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slike dijaprojekcije');
	jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Obriši popis');
	jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Povuci i ispusti datoteke ovdje');
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Odaberite resurs za koji želite učitati slike. Ako možete prenijeti slike za pojedinačne resurse (npr. sobe), dobit ćete drugi padajući izbornik za odabir određenog resursa.');
	jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Ako prenesete više slika kao "glavnu sliku svojstva", one će se koristiti na popisu svojstava. Slike dijaprojekcije bit će prikazane na stranici s pojedinostima o nekretnini.');
	jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Pogledajte svoju sliku');
	jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Izbriši sliku');
	jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Prenesi sliku');
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Ikone vrsta soba');
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Ikone značajki svojstva');
	jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Prenesi sve datoteke');
//8.0
	jr_define('COMMON_PREV', 'Prev');
	jr_define('COMMON_MORE', 'More');
	jr_define('_JOMRES_DASHBOARD_TODAY', 'Danas');
	jr_define('_JOMRES_DASHBOARD_YEAR', 'Godina');
	jr_define('_JOMRES_DASHBOARD_MONTH', 'Mjesec');
	jr_define('_JOMRES_DASHBOARD_WEEK', 'Tjedan');
	jr_define('_JOMRES_DASHBOARD_DAY', 'Dan');
	jr_define('_JOMRES_HLEGEND', 'Legenda');
	jr_define('_JOMRES_HFILTER', 'Filter');
	jr_define('_JOMRES_HFROM', 'Od');
	jr_define('_JOMRES_HTO', 'Za');
	jr_define('_JOMRES_HNEW_BOOKING', 'Nova rezervacija');
	jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Status depozita');
	jr_define('_JOMRES_HSTATUS_GUEST', 'Status gosta');
	jr_define('_JOMRES_HSTATUS_BOOKING', 'Status rezervacije');
	jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Status izdavanja');
	jr_define('_JOMRES_HSTATUS_INVOICE', 'Status fakture');
	jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Vrsta računa');
	jr_define('_JOMRES_HSTATUS_APPROVED', 'Odobreno');
	jr_define('_JOMRES_HSTATUS_CURRENT', 'Trenutno poslovanje');
	jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Prikaži rezervacije za');
	jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Prikaži račune za');
	jr_define('_JOMRES_STATUS_ANY', 'Bilo što');
	jr_define('_JOMRES_STATUS_PAID', 'Plaćeno');
	jr_define('_JOMRES_STATUS_NOTPAID', 'Nije plaćeno');
	jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Odjavljeno');
	jr_define('_JOMRES_STATUS_ACTIVE', 'Aktivno');
	jr_define('_JOMRES_STATUS_CANCELLED', 'Otkazano');
	jr_define('_JOMRES_STATUS_PUBLISHED', 'Objavljeno');
	jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Nije objavljeno');
	jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Gosti s aktivnim rezervacijama');
	jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Gosti s prethodnim rezervacijama');
	jr_define('_JOMRES_STATUS_BOOKINGS', 'Rezervacije');
	jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Pretplate');
	jr_define('_JOMRES_STATUS_COMMISSIONS', 'Provizije');
	jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Sve moje tvrtke');
	jr_define('_JOMRES_ACTION_SET_CURRENT', 'Postavi kao trenutno');
	jr_define('_JOMRES_ACTION_CHECKIN', 'Prijava');
	jr_define('_JOMRES_ACTION_CHECKOUT', 'Odjava');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'rezervacije');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'svojstva');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'gosti');
	jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'izvješća');
	jr_define('_JOMRES_HLIST_GUESTS', 'Gosti');
	jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Popis gostiju');
	jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Popis faktura');
	jr_define('_JOMRES_HLIST_PROPERTIES', 'Svojstva');
	jr_define('_JOMRES_HQUICK_BOOKING', 'Brza rezervacija');
	jr_define('_JOMRES_HDATE_OF_BOOKING', 'Datum rezervacije');
	jr_define('_JOMRES_HTWO_WEEKS', 'Dva tjedna');
	jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Ova će rezervacija biti otkazana. Pritisnite U redu za otkazivanje rezervacije.');
	jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Današnje prijave');
	jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Danas odjave');
	jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Trenutni stanovnici');
	jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Položaj navigacijske trake');
	jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Zadano (područje sadržaja)');
	jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Popravljeno do vrha');
	jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Popravljeno do dna');
	jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Obrnuta navigacijska traka (promjena boje)');
	jr_define('_JOMRES_BOOKING_NUMBER', 'Broj rezervacije');
	jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Prikaži goste za');
	jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap verzija');
	jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres uključuje vlastite skupove predložaka, po jedan za svaku podržanu verziju Bootstrapa. Joomla i Wordpress predlošci/teme koje se temelje na Bootstrapu ponudit će određenu verziju Bootstrapa pa morate osigurati da opciju koju odaberete ovdje je kompatibilno s vašim predloškom/temom. Ako vaša tema ne sadrži nikakav Bootstrap kôd, postavite ovu opciju na Bez pokretanja u temi, a zatim će Jomres automatski uključiti datoteke Bootstrap 3 za vlastitu upotrebu. ");
	jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Prikaži goste za');
	jr_define('_JOMRES_HFIXED_PERIODS', 'Fiksna razdoblja');
	jr_define('_JOMRES_HDEPOSITS', 'Depoziti');
	jr_define('_JOMRES_HBOOKING_FORM', 'Obrazac za rezervaciju');
	jr_define('_JOMRES_HREQUIRED_FIELDS', 'Obavezna polja');
	jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
	jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
	jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
	jr_define('COMMON_PLACEHOLDER_STREET', 'Moja ulica');
	jr_define('COMMON_PLACEHOLDER_TOWN', 'Moj grad');
	jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
	jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
	jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Moj hotel');
	jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
	jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
	jr_define('EXTENDED_CONFIGURATION', 'Proširena konfiguracija');
	jr_define('SIMPLE_CONFIGURATION', 'Jednostavna konfiguracija');
	jr_define('_JOMRES_HRESOURCE_FEATURES', 'Značajke resursa');
	jr_define('_JOMRES_HRESOURCE_TYPE', 'Vrsta resursa');
	jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Uredi vrstu gosta');
	jr_define('_JOMRES_HEDIT_COUPON', 'Uredi kupon');
	jr_define('_JOMRES_HEDIT_EXTRA', 'Uredi dodatno');
	jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Izradi više resursa');
	jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generiranje resursa');
	jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Koliko resursa?');
	jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Vrsta resursa');
	jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Maks. broj gostiju po resursu');
	jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Izbrisati sve postojeće resurse?');
	jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Imajte na umu da trenutno gledate administratorsko područje s naprednom konfiguracijom web stranice postavljenom na Ne. Ako želite vidjeti više opcija, postavite Konfiguracija web mjesta -> Razno -> Napredna konfiguracija web stranice na Da.');
	jr_define('DATATABLES_SINFO', 'Prikaz _START_ do _END_ od _TOTAL_ unosa');
	jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Odobrenje');
	jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Odbij upit o rezervaciji');
	jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Odobri upit o rezervaciji');
	jr_define('_JOMRES_STATUS_APPROVED', 'Odobreno');
	jr_define('_JOMRES_STATUS_REJECTED', 'Odbijeno');
	jr_define('_JOMRES_STATUS_INQUIRY', 'Upit');
	jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Za rezervacije je potrebno odobrenje ili potvrda dostupnosti?');
	jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Ako je postavljeno na da, kada se izvrši rezervacija, neće se prikazivati ​​u kalendarima dostupnosti (a drugi gosti i dalje mogu rezervirati te dane i resurse) sve dok upravitelj objekta ne prihvati/potvrdi dostupnost za rezervaciju . Nakon potvrde, rezervacija se ubacuje kao privremena (ako ne nadjačava druge rezervacije; drugi gosti više ne mogu rezervirati iste datume) i klijentu se šalje e -poruka radi plaćanja. ');
	jr_define('_JOMRES_ERROR', 'Pogreška');
	jr_define('_JOMRES_ERROR_MESSAGE', 'Žao nam je! Došlo je do pogreške pri pokušaju obrade ove funkcije. Prijavljeno je za vas i mi ćemo to provjeriti.');
	jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Poruka');
	jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Datoteka');
	jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Linija');
	jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trag');
	jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Predlošci e -pošte');
	jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Uredi predložak e -pošte');
	jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Predmet e -pošte');
	jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Tekst e -pošte');
	jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Vrsta e -pošte');
	jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Ime e -pošte');
	jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Opis e -pošte');
	jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Molimo pogledajte ovu stranicu za pomoć pri prilagođavanju poruka e-pošte i popis dostupnih ispisa: <a href = "https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank"> Pomoć za predloške e-pošte </a> ');
	jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Nova adresa e -pošte za rezervaciju za administratora web lokacije');
	jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E -pošta poslana administratoru web stranice prilikom nove rezervacije, ako je omogućen globalni pristup Paypal');
	jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Nova adresa e -pošte za rezervaciju hotela');
	jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E -pošta poslana vlasniku nekretnine prilikom nove rezervacije');
	jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Gost nova rezervacija e -pošte');
	jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E -pošta poslana gostu prilikom nove rezervacije');
	jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Pismo potvrde gosta');
	jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Pismo ili adresa za ispis koju vlasnik nekretnine može ručno poslati radi potvrde rezervacije');
	jr_define('_JOMRES_CAN_BE_APPROVED', 'Ova rezervacija može biti odobrena. Svi odabrani resursi dostupni su za odabrane datume.');
	jr_define('_JOMRES_CANT_BE_APPROVED', 'Ova rezervacija se ne može odobriti jer su neki resursi već rezervirani za odabrane datume. Prvo ćete morati izmijeniti rezervaciju.');
	jr_define('_JOMRES_SHOW_POWEREDBY', 'Prikaži vezu Powered by Jomres u podnožju Jomresa.');
	jr_define('GUEST_BUDGET', 'Budget');
	jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Koristiti značajku proračuna?');
	jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Samo web lokacije s pokretanjem! Značajka Proračun je značajka popisa nekretnina koju gost može koristiti kako bi za njih istaknuo nekretnine čija je cijena noćenja ispod određene brojke. Značajka ima neka ograničenja u tome što bi mogla nije prikladno za neke web stranice koje koriste mnogo različitih valuta. Napomena, ako koristite ovaj i dodatak Istaknuti oglasi, vaša klasa omotavanja istaknutih unosa automatski se mijenja u 'panel-primary' kada se prikaže popis svojstava. ");
	jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Ime:');
	jr_define('_JOMRES_FOR', 'Za');
	jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'noć');
	jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'noći');
	jr_define('_JOMRES_LIVE_SCROLLING', 'Koristi pomicanje uživo/infiniranje pomicanja na popisu svojstava?');
	jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
	jr_define('_JRPORTAL_MONTHS_SHORT_1', 'veljača');
	jr_define('_JRPORTAL_MONTHS_SHORT_2', 'ožujak');
	jr_define('_JRPORTAL_MONTHS_SHORT_3', 'travanj');
	jr_define('_JRPORTAL_MONTHS_SHORT_4', 'svibanj');
	jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Lipanj');
	jr_define('_JRPORTAL_MONTHS_SHORT_6', 'srpanj');
	jr_define('_JRPORTAL_MONTHS_SHORT_7', 'kolovoz');
	jr_define('_JRPORTAL_MONTHS_SHORT_8', 'rujan');
	jr_define('_JRPORTAL_MONTHS_SHORT_9', 'listopad');
	jr_define('_JRPORTAL_MONTHS_SHORT_10', 'studeni');
	jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Prosinac');
	jr_define('DATATABLES_SEMPTYTABLE', 'Nema podataka u tabeli');
	jr_define('DATATABLES_SINFO', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
	jr_define('DATATABLES_SINFOEMPTY', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
	jr_define('DATATABLES_SINFOFILTERED', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
	jr_define('DATATABLES_SINFOPOSTFIX', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
	jr_define('DATATABLES_SINFOTHOUSANDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
	jr_define('DATATABLES_SLENGTHMENU', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
	jr_define('DATATABLES_SLOADINGRECORDS', 'Učitavanje...');
	jr_define('DATATABLES_SPROCESSING', 'Molimo sačekajte');
	jr_define('DATATABLES_SSEARCH', 'Traži');
	jr_define('DATATABLES_SZERORECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
	jr_define('DATATABLES_SFIRST', 'Prva');
	jr_define('DATATABLES_SLAST', 'Zadnja');
	jr_define('DATATABLES_SNEXT', 'Sljedeća');
	jr_define('DATATABLES_SPREVIOUS', 'Nazad');
	jr_define('DATATABLES_SSORTASCENDING', 'Sortiraj silazno');
	jr_define('DATATABLES_SSORTDESCENDING', 'Sortiraj uzlazno');
	jr_define('DATATABLES_SHOWHIDE', 'Promijeni stupce');
	jr_define('_BOOKING_ONREQUEST', 'Rezervacija na zahtjev');
	jr_define('_BOOKING_INSTANT', 'Trenutna rezervacija');
	jr_define('_JOMRES_COM_FONTAWESOME', 'Uključi sjajan skup ikona za font?');
	jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Postavite ovo na Da ako vaš predložak ne sadrži Font Awesome.');
	jr_define('_BOOKING_CALCQUOTE', 'Zatraži rezervaciju');
	jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Poštovani');
	jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Odaberite web mjesto');
	jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'ID web lokacije');
	jr_define('_JOMRES_IS_EU_COUNTRY', 'Država EU?');
	jr_define('_JOMRES_HLASTCHANGED', 'Zadnja promjena');
	jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E -pošta za otkazivanje rezervacije hotela');
	jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E -pošta poslana vlasniku nekretnine kada se otkaže nova rezervacija');
	jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'E -pošta za otkazivanje rezervacije gostiju');
	jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E -pošta poslana gostu kada se otkaže nova rezervacija');
	jr_define('_JOMRES_TEST_EMAIL_SEND', 'Pošalji testnu e -poštu');
	jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Testna e -pošta');
	jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Ovo je testna e -poruka iz vašeg sustava rezervacija.');
	jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testna poruka e -pošte uspješno poslana');
	jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Testna e -pošta nije poslana');
	jr_define('_INVOICE_TRANSACTIONS', 'Transakcije');
	jr_define('_OPENEXCHANGE_API', 'API ključ otvorenih tečajeva');
	jr_define('_OPENEXCHANGE_API_DESC', 'Za pretvaranje cijena između usluga trebat će vam API ključ Open Exchange Rates API. MORATE imati API ključ za ispravno prikazivanje cijena u Jomresu, međutim možete <a href = "https://openexchangerates.org /signup/free" target="_blank"> registrirajte se za besplatni ključ </a> (ažuriranja po satu, 1000 zahtjeva mjesečno - bez HTTPS -a, podrške putem e -pošte ili naprednih značajki). Jomres preuzima tečajeve jednom dnevno, sve dok koristite ključ na samo nekoliko web stranica, vjerojatno nećete premašiti ta ograničenja. Prije Jomresa 8.3 koristili smo stariju, nedokumentiranu značajku Yahooa, međutim otkrili smo da je korištenje ove značajke u suprotnosti s Yahoovim Uvjetima i Uvjeti. Kao rezultat toga, moramo pretpostaviti da bi značajka mogla nestati u nekom trenutku u budućnosti, stoga promjena u korištenju otvorenih tečajeva. ');
	jr_define('_JOMRES_COMMISSION', 'Komisija');
	jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ako prenesete više slika za pojedinačne opcionalne dodatke, koristit će se samo prva slika.');
	jr_define('_JOMRES_COMMISSION', 'Komisija');
	jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ako prenesete više slika za pojedinačne opcionalne dodatke, koristit će se samo prva slika.');
	jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Platite odmah');
	jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Ova faktura dospjela na naplatu. Molimo kliknite gumb za odabir načina plaćanja.');
	jr_define('_JOMRES_EXTRAS_TEMPLATE', "Evo popisa nekih sjajnih stvari koje možete kupiti prilikom rezervacije u ovom objektu.");
	jr_define('GATEWAYS_INSTRUCTIONS', 'Na ovoj stranici možete konfigurirati sve instalirane pristupnike. Ove vam opcije omogućuju primanje plaćanja za sve račune za provizije ili pretplate. Postavke sučelja može nadjačati samo Paypal, sve ostale pristupnike potrebno je konfigurirati putem Konfiguracija nekretnine -> kartica Gateways, međutim ako se na ovom popisu pojavi pristupnik, trebao bi biti u mogućnosti obraditi i uplate pologa za rezervaciju i plaćanja putem računa. ');
	jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Prikaži na stranici s pojedinostima o nekretnini?');
	jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Postavke stranice s pojedinostima o nekretninama');
	jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Upravljanje nekretninama u Jomresu vrši se samo s cpanela na sučelju web stranice. Na ovoj stranici moći ćete navesti sve nekretnine u sustavu, tako da možete dodijeliti stope provizije i odobriti ih/odobriti (ako su ovi značajke su omogućene). Da biste stvorili novi entitet, uredili postojeći, upravljali rezervacijama ili bilo kojim drugim poslom povezanim s nekretninama/rezervacijama, morat ćete se prijaviti na sučelje web stranice i otići na zadanu stranicu Jomresa. Tamo ćete vidjeti Jomres frontend cpanel. ');
	jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Ikone značajki sobe');
	jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Kategorije značajki imovine');
	jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Uređivanje kategorije značajki svojstva');
	jr_define('_JOMRES_HCATEGORY', 'Kategorija');
	jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Prikaži značajke svojstva podijeljene u kategorije?');
	jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Postavite ovo na DA za razdvajanje značajki svojstva u kategorije. Ova opcija utječe samo na značajke svojstva prikazane na stranici s pojedinostima svojstva. Sve ostale stranice prikazat će ih bez podjele u kategorije.');
	jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Poništi prijavu');
	jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Poništi plaćanje');
	jr_define('_JOMRES_STATUS_UNISSUED', 'Nije izdano');
	jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
	jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Vaš ključ za preuzimanje i podršku je važeći, dodatke ćete moći preuzeti putem upravitelja dodataka.');
	jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Vaš ključ za preuzimanje i podršku NIJE valjan, nećete moći preuzimati dodatke putem upravitelja dodataka.');
	jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Podvrsta');
	jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Još niste postavili podvrstu svoje nekretnine. Ovdje je definirate kao nešto poput vile s 5 spavaćih soba ili vikendice s 4 spavaće sobe i pomaže gostima koji traže da poboljšaju svoja pretraživanja.") ;
	jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Dajte svom nekretnini podvrstu');
	jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Predlošci e -pošte');
	jr_define('_JOMRES_CONTACT_SETTINGS', 'Postavke kontakta');
	jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Odavde možete nadjačati sve podatke za kontakt nekretnine (e -pošta, telefon, faks) tako da se sva komunikacija s gostima šalje vama, a ne vlasnicima nekretnina.');
	jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Nadjačati podatke za kontakt na popisu?');
	jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Ako je ova opcija postavljena na Da, e -adrese i telefonski brojevi nekretnine bit će zamijenjeni onima koji su postavljeni na ovoj kartici. To prisiljava svu komunikaciju da se šalje na vašu nominiranu adresu e -pošte osiguravajući da gost i nekretnina vlasnik ne može zaobići mehanizam za rezervacije i provizije koje će rezultirati. To također znači da će svaki put kad se promijeni opis nekretnine biti postavljeno na Neodobreno (ako je omogućena značajka odobrenja), a vi ćete morati ručno provjeriti opis kako bi bili sigurni da upravitelji nisu unijeli podatke o telefonu ili e -pošti u tekstualna polja prije nego što ih ponovno odobre. ");
	jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Promjene pojedinosti o popisu zahtijevaju potvrdu administratora web lokacije. Ako spremite nove pojedinosti, vaš će unos biti neobjavljen i čeka odobrenje administratora web stranice prije nego što ga ponovno vidite posjetiteljima web stranice. Nećete moći primati podatke na mreži rezervacije dok je vaš unos neobjavljen i čeka odobrenje. ');
	jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Pregledajte zahtjev za rezervaciju');
	jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Potvrdi zahtjev za rezervaciju');
	jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Izmjena zahtjeva za rezervaciju');
	jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Označi fakturu na čekanju');
	jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Faktura označena kao na čekanju');
	jr_define('_JOMRES_TRACKING_ENABLE', 'Slanje anonimnih podataka o praćenju?');
	jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Odaberite Da za slanje anonimnih podataka o praćenju na Jomres.net kako bismo bolje razumjeli kako koristite sustav.');
	jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Molimo provjerite jesu li vaši podaci ispunjeni na stranici Uređivanje mog računa prije nego što pokušate izvršiti rezervaciju u ime svojih klijenata.');
	jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Podaci za kontakt gosta");
	jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' - Novi gost -');
	jr_define('_JOMRES_CHARTS', 'Karte');
	jr_define('_JOMRES_CHARTS_SELECT', 'Odaberi grafikon ...');
	jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Prihod po godini/mjesecu');
	jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "U redu, počnimo. Prvo morate stvoriti neke prostorije za ovu nekretninu.");
	jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Odmah izradi neke sobe');
	jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Istraživanje je pokazalo da svojstva s puno visokokvalitetnih slika generiraju više pregleda. Prenesite glavnu sliku i neke slike slideshowa kako biste povećali svoje šanse za rezervacije.');
	jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Prenesi sliku');
	jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Izradi neke tarife');
	jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Što će gosti rezervirati?');
	jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Je li ova nekretnina hotelskog tipa, u kojoj iznajmljujete sobe u nekretnini, ili vile tipa vile, gdje cijelu nekretninu iznajmljujete u jednoj rezervaciji?');
	jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Sobe u objektu');
	jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Cijelo vlasništvo');
	jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Oboje'); // Ovo je privremena postavka koja daje unatrag usporedivost za postojeće korisnike koji još nisu ažurirali svoje vrste svojstava. Ne može se birati
	jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Što će gosti rezervirati?');
	jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Morat ćete dovršiti podatke o adresi kako bi vas gosti mogli pronaći kada dođu odsjesti.");
	jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Ažurirajte svoju adresu');
	jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Ups, izgleda da ste zaboravili popuniti sva polja.');
	jr_define('_JOMRES_CONTANT_US', 'Kontaktirajte nas');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Dobrodošli na vaš novi mrežni profil za');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Bok i dobrodošli u svoju novu nekretninu na');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "Nedavno ste na našu web stranicu dodali novu nekretninu i želimo vam dobrodošlicu u obitelj.");
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Možete vidjeti svoju novu nadzornu ploču');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'ovdje');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Nakon što postavite svoj objekt, posjetiteljima web stranice možete vidjeti kako izgleda posjetiteljima");
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'vaša naslovnica.');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(nije objavljeno, pa ga posjetitelji još ne mogu vidjeti).");
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "Pri vrhu stranice vidjet ćete brojne poruke. Gumbi pored ovih poruka odvest će vas na stranice koje trebate posjetiti da biste postavili svoj objekt na našoj web stranici. Nakon što ' ako smo izvršili svaki od ovih zadataka, posjetiteljima na našoj web stranici bit će mnogo lakše pronaći vašu nekretninu i izvršiti rezervacije putem interneta. ");
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Ako imate bilo kakvih pitanja, molim');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontaktirajte nas');
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "i bit će nam zadovoljstvo odgovoriti na sva vaša pitanja.");
	jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Sve najbolje, naš tim na');
	jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "Čini se da nemate obilaske za prodaju. Izradite profil obilaska, a zatim pomoću gumba Generiraj stvorite neke obilaske.");
	jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Napravimo neke obilaske!");
	jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Položaj simbola zamjene valute');
	jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Upotrijebite ovu opciju za pomicanje simbola valute iza, ispred broja cijene ili obrnuto.');
	jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
	jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Unesite ID svoje facebook stranice, na primjer "jomres". Ostavite ovo polje prazno da ne prikazuje ništa. Nemojte unositi https://www.facebook.com ili bilo što drugo.');
	jr_define('COMMON_DOWNLOAD', 'Preuzmi');
	jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Zatim ćete morati dodati neke tarife. Ovo su vaše osnovne cijene.');
	jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap nije omogućen!');
	jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Upozorenje, nemate omogućen Bootstrap u konfiguraciji web lokacije Jomres -> kartica Razno. Za pružanje <i> neke </i> funkcionalnosti Jomres trenutno koristi stare predloške zasnovane na sučelju jQuery, međutim na njima se nije radilo nekoliko godina. Sav trenutni razvoj i poboljšanja Jomres predložaka (datoteka izgleda) napravljeni su u datotekama predložaka Bootstrap 3. Da biste izvukli najbolje iz Jomresa, preporučujemo da instalirate Bootstrap 3 temu za Wordpress ili Joomlu. Nakon što to učinite, možete omogućiti Jomres Bootstrap predloške u konfiguraciji web mjesta.');
	jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Vaš ključ za podršku je važeći. Imajte na umu da ova licenca ne dopušta preuzimanje dodataka.');
	jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Povucite rezervacije u ovo područje da biste ih otkazali');
	jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
	jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
	jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Molimo provjerite jeste li stvorili WordPress stranicu koja sadrži kratki kôd [jomres: xx-XX] (gdje je xx-XX kôd jezika vaše web stranice, na primjer [jomres: en-GB] ili [ jomres: hr-US]) inače nećete moći pristupiti Jomresu sa sučelja za upravljanje svojim nekretninama i rezervacijama. ');
	jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Većina nekretnina u Jomresu ima proces upravljanja najmom. Hoteli/pansioni/pansioni iznajmljuju pojedinačne sobe, a vikendice/vile/apartmani iznajmljuju cijelu nekretninu. To je za upravitelja nevidljivo, ali za njih da biste mogli stvoriti tarife za njihovu nekretninu, najprije morate dodati vrste soba koje odgovaraju tipu nekretnine.
Na primjer, za hotelsku nekretninu obično je potrebno nekoliko tipova soba (dvokrevetne sobe, jednokrevetne sobe i blizanci), dok vila može imati samo jedan tip sobe, npr. 2 spavaće sobe, 5 spavaćih soba.
Moguće je stvoriti tipove soba za nekretnine poput Toursa. To omogućuje korisnicima da pretražuju nekretnine kao što su samo obilasci, ali Upravitelj nekretnina neće stvarati tarife za ovu vrstu nekretnine, tako da proces upravljanja za njih nije relevantan.
');
	jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Kliknite za dodavanje novih vrsta soba');
	jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Upozorenje, imate jednu ili više vrsta nekretnina bez vrsta soba. Svojstvima su potrebne vrste soba kako bi upravitelji nekretnina mogli stvoriti tarife.');
	jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Upotrijebite gumb New za stvaranje novih tipova soba.');
	jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Obilasci');
	jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Nema rezervacija/nekretnina (jednostavan popis)');
	jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Lokacija datoteke zapisnika');
	jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres prema zadanim postavkama bilježi aktivnosti sustava na lokaciju' .JOMRES_SYSTEMLOG_PATH. ". Kako ova datoteka može sadržavati osjetljive podatke (api ključeve, sistemske putove, podatke o pristupniku, podatke o gostima), toplo preporučujemo da promijenite ovaj put na jedan iznad korijena vašeg web dokumenta. Ako ne razumijete što to znači, pitajte svoje web domaćine za savjet jer će znati vaš datotečni sustav. ");
	jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres zapisuje detaljne informacije o vašem sustavu, uključujući api ključeve, putove sustava, pristupnike i podatke o gostima, a sve to ne bi trebalo biti vidljivo ostatku interneta. Put vašeg zapisnika sustava nije postavljen, pa zapisnici sustava trenutno se spremaju u direktorij '.JOMRES_SYSTEMLOG_PATH. ", što nije idealno. Posjetite Konfiguracija web lokacije -> Otklanjanje pogrešaka i postavite put u datotečni sustav izvan korijena weba. Ako ste u nedoumici, obratite se svojim web domaćinima jer će vam oni moći savjetovati. ");
	jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Ako je vaš CMS instaliran u korijenskom direktoriju vaše web stranice, onda bi to bilo prikladno mjesto');
	jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nemate postavljen ključ Google karata. Zbog nedavnih promjena na Google kartama, za sve nove web stranice bit će potreban ključ API -ja za korištenje značajki Google karte. <a href = 'http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target ='_blank'> pogledajte stranicu s priručnikom o tome kako izraditi API ključ < /a> i spremite ključ u Jomres. ");
	jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Shema boja Google karte');
	jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Dobro, počnimo dodavati vašu nekretninu na web stranicu. Ovdje moramo prikupiti malo podataka o vašoj nekretnini. To će nam omogućiti postavljanje golih kostiju vaše nekretnine. Kad to učinite, onda ćete vodit će se kroz dodavanje soba, cijena i slika. ");
	jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Vrsta nekretnine vam pomaže da definirate kako će se nekretnina rezervirati, na primjer s hotelima u kojima "prodajete" samo jednu ili dvije sobe odjednom, dok s vilama nudite cijelu nekretninu.');
	jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Imajte na umu da adresa e -pošte ne mora biti ista kao adresa koju ste koristili prilikom registracije računa. To vam omogućuje da imate različite adrese za različita svojstva.");
	jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimalni depozit');
	jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Možete konfigurirati minimalni iznos depozita koji će se naplatiti. Ako to učinite, tada se postavke "Potreban polog je cijena prve noći?" i "Potreban polog je postotak?" u Konfiguraciji nekretnine ne mogu se konfigurirati. , umjesto toga sve vrijednosti depozita su postotak i moraju biti barem brojka koju ovdje definirate. ');
	jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Ova brojka ne može biti manja od');
	jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Domaćin Sysloga');
	jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Sistemski port');
	jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Ako želite slati poruke zapisnika sustava na poslužitelj syslog, ovdje možete postaviti ime hosta ili IP (npr. 192.168.0.2) i port (npr. 514). Napomena, ako je web lokacija postavljena na \"Development\" tada će se slati poruke DEBUG. Ako je postavljeno na' Production ', tada će se slati samo poruke INFO razine i više. Da biste onemogućili prijavu na udaljeni poslužitelj, ispraznite polja hosta i porta. ");
	jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP ne smije pristupiti PHP funkcijama \" openlog \"i\" syslog \". Ovo je postavka na strani poslužitelja. Ako želite da Jomres šalje poruke poslužitelju syslog, obratite se svojim domaćinima i potvrdite je li PHP -u ​​dopušten pristup ovim funkcijama. Nakon što ga omogućite, ovdje ćete moći konfigurirati postavke poslužitelja syslog. ");
	jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Pošalji e -poruku administratoru web stranice kada dođe do pogreške?');
	jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Povijesno su problemi koje treba istražiti poslani e -poštom vlasnicima web stranica. To može biti izvrsno za praćenje rada vašeg sustava jer ima jako puno pokretnih dijelova i teško ih je pratiti nažalost, pauci i botovi koji indeksiraju vaše web stranice (čak i prijateljske) mogu nenamjerno izazvati fatalne pogreške, a to može uzrokovati prevelik broj poruka koje primite. Ako je to slučaj, postavite ovu opciju na Ne. Jomres šalje zapisnike poruke i na skup datoteka za bilježenje i na poslužitelj syslog -a (ako vam to dopuštaju određene postavke PHP -a, ako ne žele, kontaktirajte vašeg domaćina). Možete ručno analizirati datoteke ako tražite nešto određeno (na primjer, ako razvijate pristupnik i želite koristiti poziv gateway_log ().), ali to je puno informacija za traženje pa je bolje koristiti nešto poput analizatora datoteka syslog. Ako razvijate na Linuxu, tada na raspolaganju vam je mnogo alata, ako u sustavu Windows jednostavan alat koji možete koristiti je http://maxbelkov.github.io/visualsyslog/ Na ovoj stranici postavite 'Syslog host' na '127.0.0.1' i ' Priključite 'na 514 za prikaz poruka prijavljenih u taj alat. ");

	jr_define('_JOMRES_MANAGE_PROPERTIES', 'Upravljanje svojstvima');
	jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nemate postavljen IP ključ za otkrivanje IP -a. To je potrebno kako bi sustav mogao automatski otkriti lokaciju korisnika i automatski postaviti njihovu valutu i državu. Molimo <a href = 'https://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> pogledajte naš priručnik stranicu o tome kako stvoriti API ključ za otkrivanje IP -a </a> i spremiti ključ u Jomres> Konfiguracija web stranice> Pretvorbe valuta / kodovi valuta. ");
	jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nemate skup ključeva API -ja za otvorene tečajeve. To je potrebno kako bi sustav mogao automatski preuzimati i koristiti tečajeve valuta. Molimo <a href = 'https://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> pogledajte stranicu s priručnikom o tome kako izradite ključ API -ja za otkrivanje IP -a </a> i spremite ključ u Jomres> Konfiguracija web stranice> Pretvorbe valuta / kodovi valuta. ");
	jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Broj dozvole');
	jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Neke zemlje propisuju da morate prikazati broj dozvole za svoju nekretninu. Ako imate takav broj, unesite ga ovdje i on će biti dodan u odjeljak zaglavlja nekretnine.');
	jr_define('_JOMRES_SHORTCODES', 'Kratki kodovi');
	jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong> Dodatak <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot MORA biti instaliran i omogućen da bi ti kratki kodovi radili. To se može pronaći u Jomres Plugin Manageru. Ako je ova web stranica izgrađena pomoću jednog od Quickstarts je vjerojatno već instaliran. ");
	jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Morate osigurati da je <strong> <strong> Jomres Shortcode '</strong> dodatak omogućen. To se može pronaći u Jomres upravitelju dodataka. Ako je ova web stranica izgrađena pomoću jednog od Quickstart -a, vjerojatno je Već instalirano.");
	jr_define('SHORTCODE_TASK', 'Zadatak');
	jr_define('SHORTCODE_DESCRIPTION', 'Opis');
	jr_define('SHORTCODE_ARGUMENTS', 'Argumenti');
	jr_define('SHORTCODE_EXAMPLE', 'Primjer');
	jr_define('INTEGRITY_CHECK', 'Provjera integriteta datotečnog sustava');
	jr_define('INTEGRITY_CHECK_DESC', 'Ova značajka omogućuje vam da provjerite podudara li se sustav datoteka koji je isporučen u trenutnoj verziji Jomresa. To je korisno za osiguravanje da su sve datoteke ispravno ažurirane nakon instalacije/nadogradnje. Nedostaju datoteke u crvenom, datoteke u Narančasta postoji, ali se razlikuje od onih isporučenih u trenutnoj verziji. Ovdje će biti navedene samo datoteke koje predstavljaju potencijalne probleme. ');
	jr_define('INTEGRITY_CHECK_FILENAME', 'Provjera integriteta datotečnog sustava');
	jr_define('INTEGRITY_CHECK_LOCALHASH', 'Lokalno raspršivanje');
	jr_define('INTEGRITY_CHECK_BUILDHASH', 'Raspršivanje verzije');
	jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Sjajno! Nisu pronađeni nikakvi problemi.');
	jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Oznaka Google karata');
	jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Pročitajte više');
	jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Čitaj manje');
	jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Boravišna pristojba');
	jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Stopa boravišne pristojbe');
	jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Postavite stopu boravišne pristojbe. Boravišna pristojba obračunava se tek nakon generiranja početne rezervacije i dodaje se na stranicu za potvrdu rezervacije, u okvir za dodatne usluge.');
	jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Je li postotak?');
	jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Postavite ovo na Da ako je porez postotak ili Ne ako je paušalna pristojba.");
	jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Utječe na cijelu vrijednost rezervacije?');
	jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Postavite ovo na Da ako porez pokriva cijelu vrijednost rezervacije, pa je to postotak oba smještaja plus svi dodaci, ili Ne ako se izračunava samo na temelju vrijednosti ukupni smještaj. Ako je gornja opcija 'Je postotak' postavljena na Ne, tada se ova opcija zanemaruje. ");
	jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Imajte na umu da će se ovoj rezervaciji dodati boravišna pristojba. Porez ćete moći vidjeti na stranici za rezervaciju recenzije.');
	jr_define('NO_LICENSE_MESSAGE', "Niste spremili broj licence u konfiguraciji web stranice, stoga nećete moći preuzeti dodatke. Nakon što spremite valjani licencni ključ, moći ćete instalirati sve dodatke koji su navedeni kao Osnovni dodaci. ");
	jr_define('INVALID_LICENSE_MESSAGE', "Čini se da koristite broj licence koji je nevažeći ili mu je istekao rok. Nakon što spremite važeći licencni ključ, moći ćete instalirati sve dodatke koji su navedeni kao jezgri dodataka.");
	jr_define('VALID_LICENSE_MESSAGE', "Čestitamo, koristite valjani broj licence i možete instalirati Core dodatke putem upravitelja dodataka Jomres.");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ova stranica vam omogućuje prijenos slika za vašu nekretninu i stvari koje nudite. Ima jedan glavni gumb i drugi gumb koji vam omogućuje odabir određenih resursa za prijenos slika. Dakle, glavno svojstvo slika i Slideshow prikazat će samo jedan gumb, ali ako ste stvorili bilo koji, na primjer, Dodatne dodatke ili Sobe, tada ćete vidjeti drugi gumb na koji možete učitati slike za te određene resurse. ');
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ova vam stranica omogućuje prijenos slika za vašu nekretninu i stvari koje nudite. Ima jedan glavni gumb, a drugi gumb koji vam omogućuje odabir određenih resursa za prijenos slika. Dakle, glavno svojstvo slika i prezentacija prikazat će samo jedan gumb, no ako ste stvorili dodatne dodatke, vidjet ćete drugi gumb na koji možete prenijeti slike za te određene resurse. ');
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Najprije odaberite slike koje želite prenijeti klikom na Dodaj sliku ili pomoću opcije Povuci i ispusti. Oni će se pojaviti u stupcu s desne strane. </li>
  <li> Iznad ovog područja upotrijebite gumb \"Odaberi resurs \" da biste odabrali za koji izvor želite prenijeti slike. Možda će vam se ponuditi mogućnost da odaberete određeni resurs ispod. </li>
  <li> Nakon što odaberete resurs, možete kliknuti gumb Upload Image ispod slike da biste ga povezali s tim resursom. Nakon što se slika prenese, nestat će iz stupca na desnoj web stranici, a pojavit će se s lijeve strane. </li>
  <li> Upotrijebite gumb Otpad pored postojećih slika da biste uklonili slike koje više ne želite prikazivati. </li>
  <li> Možete promijeniti redoslijed prikazivanja datoteka u slideshowu tako da ih preimenujete prije učitavanja jer se prikazuju na stranicama abecednim redom. </li>
</ol>
 ");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Pored gumba Resurs, možda ćete vidjeti gumb za pregled. Ako kliknete na ovo, vidjet ćete skočni prozor koji će vam pokazati kako će trenutačno prenesene slike izgledati na stranici. To vam pomaže da dobijete ideja o tome kako će slike izgledati vašim klijentima. ");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Ne postoji ograničenje broja slika koje možete prenijeti. Slike se automatski mijenjaju kada se prenose. Možete prenijeti samo datoteke JPG i PNG.");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealno bi bilo koje slike koje prenesete bile najmanje");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "širina piksela, u protivnom mogu izgledati nejasnoće nakon prijenosa.");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Sve slike koje prenesete ne mogu biti veće od");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "u veličini.");
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Odaberite resurs za koji želite prenijeti slike");
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Određeni resurs");
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Slike već učitane za ovaj resurs");
	jr_define('_JOMRES_MARKDOWN_TITLE', 'Formatiranje teksta');
	jr_define('_JOMRES_MARKDOWN_DESC', 'Ovdje možete unijeti tekst jednostavnim Markdown oblikovanjem. Ne morate znati nikakav HTML, samo upotrijebite gumbe da bi informacije izgledale onako kako želite ili oblikovati tekst prema ovim primjerima.');
	jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Naglasak');
	jr_define('_JOMRES_MARKDOWN_BOLD', 'podebljano');
	jr_define('_JOMRES_MARKDOWN_ITALICS', 'kurziv');
	jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'precrtano');
	jr_define('_JOMRES_MARKDOWN_HEADERS', "Zaglavlja");
	jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Veliko zaglavlje');
	jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Srednje zaglavlje");
	jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Malo zaglavlje');
	jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Sitno zaglavlje');
	jr_define('_JOMRES_MARKDOWN_LISTS', "Popisi");
	jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Opća stavka popisa');
	jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numerirana stavka popisa');
	jr_define('_JOMRES_MARKDOWN_LINKS', 'Veze');
	jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst za prikaz');
	jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citati');
	jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Ovo je citat.');
	jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Može obuhvatiti više redaka!');
	jr_define('_JOMRES_MARKDOWN_IMAGES', 'Slike');
	jr_define('_JOMRES_MARKDOWN_TABLE', 'Tablice');
	jr_define('_JOMRES_MARKDOWN_COLUMN', 'Stupac');
	jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Prikaži slike svojstava kao dijaprojekciju na popisu svojstava?');
	jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ako je postavljeno na da, prikazat će se dijaprojekcija glavnih slika svojstava. Ako je postavljeno na ne, tada će se prikazati prva glavna slika svojstva.');
	jr_define('EDIT_CMS_USER', 'Uredi korisnika CMS -a');
	jr_define('BOOKING_MADE_BY', 'Rezervaciju je napravio');
	jr_define('_JOMRES_ROUTER_FEATURES', 'Pogodnosti');
	jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Tipovi soba');
	jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL vanjskog obrasca za rezervaciju');
	jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Ovdje možete postaviti vanjski URL ako želite koristiti web stranice treće strane za rezervacije. Svi gumbi za rezervaciju Jomres upućivat će na ovaj URL. Ostavite ovo polje prazno ako želite koristiti obrazac za rezervaciju Jomresa . ');
	jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (kratak opis sobe/podnaslov)');
	jr_define('_JOMRES_ROOM_DESCRIPTION', 'Opis sobe');
	jr_define('_JOMRES_GUEST_BLACKLISTED', 'Gost na crnoj listi');
	jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ako je ovaj gost na crnoj listi, više neće moći rezervirati smještaj u ovom objektu.');
	jr_define('_JOMRES_SESSION_HANDLER', 'Rukovatelj sesije');
	jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Spremi datoteke jomres sesije na disk ili u bazu podataka. Preporučeno: baza podataka');
	jr_define('_JOMRES_MAP_HEIGHT', "Visina karte (px)");
	jr_define('_JOMRES_MAP_ZOOMLEVEL', "Razina zumiranja karte");
	jr_define('_JOMRES_MAP_MAPTYPE', "Vrsta karte");

	jr_define('_JOMRES_TEMPLATE_PACKAGES', "Upravitelj nadjačavanja predložaka");
	jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Paketi predložaka su dodaci koji mogu pružiti nadjačavanje predložaka za različite datoteke osnovnih predložaka Jomresa.");
	jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Ova stranica prikazuje sve datoteke predložaka koje mogu nadjačati datoteke predložaka paketa predložaka. Ako želite nadjačati određenu datoteku predloška, ​​kliknite gumb za uređivanje te datoteke, na sljedećoj stranici bit ćete u mogućnosti odabrati s kojom verzijom želite nadjačati. Imajte na umu da ova nadjačavanja imaju prioritet nad Jomres Core -om i bilo kojim nadjačavanjem tema/predložaka Wordpress -a ili Joomle. Poništavanje možete onemogućiti brisanjem na stranici Poništavanje predložaka popisa. ");
	jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Naziv predloška");
	jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Trenutni put");
	jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nije nadjačano");
	jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Možete odabrati koju datoteku predloška nadjačati datoteke predložaka jezgre promjenom padajućeg izbornika");


	jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Postotak rezerviranih soba");


	jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Postotak rezerviranih soba");
	jr_define('_JOMRES_SELECT_WIDGETS', "Odabir widgeta");
	jr_define('_JOMRES_INTERVAL', "Interval");
	jr_define('_JOMRES_TIMELINE', "Vremenska traka");
	jr_define('_JOMRES_CPANEL_GRID', "Domaći raspored upravljačke ploče");
	jr_define('_JOMRES_CPANEL_GRID_DESC', "Odaberite raspored mreže na početnoj stranici upravljačke ploče za upravljanje sučeljem.");

	jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google označivači karata");
	jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Slike grada");
	jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Promjenom vrste svojstva izbrisat će se sve sobe, tarife, postavke nekretnine i poništiti dostupnost.");
	jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Imajte na umu da nakon ažuriranja morate ažurirati sve već instalirane Jomres dodatke putem upravitelja dodataka Jomres. Ako imate instalirane Core dodatke, ali nemate važeću licencu za Jomres, mi <em> radimo ne </em> preporučujemo da ažurirate Jomres jer stariji dodaci često možda neće raditi s novijim verzijama Jomresa. ');
	jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Imajte na umu da nakon ažuriranja morate ažurirati sve već instalirane Jomres dodatke putem upravitelja dodataka Jomres.');
	jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Ako želite ažurirati Jomres i njegove dodatke, trebat će vam licenca za obnovu. Posjetite <a href='https://www.jomres.net/pricing' target='_blank'> naš web mjesto </a> za više informacija. U većini slučajeva ove licence čine 50% cijene potpune licence. Prije nego što pokušate obnoviti, provjerite jeste li se prijavili u našu trgovinu. ");
	jr_define('_JOMRES_PAYMENT_METHOD_USED', "Način plaćanja:");

	jr_define('_JOMRES_PRICES', "Poveži se");

	jr_define('_OAUTH_TITLE', "Upravljanje ključevima aplikacije");
	jr_define('_OAUTH_APPS', "Pojedinosti REST API klijenta");
	jr_define('_OAUTH_IDENTIFIER', "Identifikator");
	jr_define('_OAUTH_APIKEY', "ID klijenta");
	jr_define('_OAUTH_SECRET', "Tajna");
	jr_define('_OAUTH_CREATED', "Izrađena/ažurirana aplikacija");
	jr_define('_OAUTH_CLIENT_ID_INFO', "ID klijenta i tajna su stvoreni za vas. Identifikator je tako da možete lako identificirati ovaj par ključeva.");
	jr_define('_OAUTH_SCOPE_TITLE', "Dopuštenja (što klijent može učiniti)");
	jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Korisnička dopuštenja");
	jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Dopuštenja imovine");

	jr_define('API_DOCUMENTATION_TITLE', "Dokumentacija API -ja REST API -ja");

	jr_define('_OAUTH_CONFIG', "Konfiguracija API jezgre");

	jr_define('_OAUTH_CONFIG_SHOW', "Prikaži opcije konfiguracije API klijenta u glavnom izborniku Jomresa?");
	jr_define('_OAUTH_CONFIG_SHOW_DESC', "Možete odabrati da se opcije konfiguracije API klijenta ne prikazuju u odjeljku \"Moj račun\" glavnog izbornika Jomresa. Umjesto toga možete odlučiti da ih želite prikazati na drugim stranicama pomoću Jomres kratkih kodova.");

	jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Prikazuje stranicu dokumentacije API jezgre. API Core dopušta korisnicima stvaranje API klijenata, koji se zatim koriste za pristup API funkciji koja je navedena u dokumentaciji API Core.");

	jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Prikazuje stranicu za administraciju API -ja, na kojoj upravitelji svojstava mogu konfigurirati API klijente. Imajte na umu da je ovo samo registrirani korisnik, pa se korisnici moraju registrirati i prijaviti da bi mogli vidjeti ovu stranicu.");

	jr_define('API_METHODS_TITLE', "API metode");
	jr_define('API_METHODS_DESCRIPTION', "Ovaj popis metoda temelji se na vašim instaliranim dodacima za značajke API -ja i automatski se generira. Ako instalirate ili izbrišete dodatak za značajku API -ja, morate posjetiti ovu stranicu kako biste ponovo izgradili ovaj popis metoda API -ja dostupnih na vašoj web lokaciji. ");

	jr_define('_OAUTH_REDIRECT_URI', "URI za preusmjeravanje");
	jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Dajte mi ime koje vam znači, poput Mog telefona");

	jr_define('_OAUTH_GRANT_TYPES', "Ovaj sustav podržava dvije vrste dodjele, vjerodajnice klijenta i implicitne. Ako koristite tok <em> client_credentials </em>, trebat će vam i ID klijenta i tajna klijenta. Ako koristite <em > implicitno </em> tada bi vaša aplikacija poslala samo ID klijenta, a vi biste se prijavili u sustav kako biste izričito autorizirali tu aplikaciju. ");

	jr_define('_OAUTH_IMPLICIT_NOTES', "Da biste koristili <em> implicitni </em> tok vrste dodjele, morat ćete koristiti ovaj URL za autorizaciju svojih aplikacija. Kad se pozove ovaj URL, a vi ste autorizirali aplikaciju, sustav će izdati token koji će vaše aplikacije zatim koristiti za pozivanje API -ja ovog sustava ");
	jr_define('_OAUTH_AUTHORISATION_URL', "URL autorizacije");

	jr_define('WEBHOOKS_CORE', 'Webhooks');

	jr_define('_WEBHOOKS_CONFIG_SHOW', "Prikaži opcije konfiguracije Webhooka u glavnom izborniku Jomresa?");
	jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Možete odabrati da se opcije konfiguracije Webhooka ne prikazuju u odjeljku \"Moj račun\" glavnog izbornika Jomresa. Umjesto toga možete odlučiti da ih želite prikazati na drugim stranicama pomoću Jomres kratkih kodova.");

	jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks dokumentacija");

	jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Prikazuje stranicu dokumentacije API jezgre. API Core dopušta korisnicima stvaranje API klijenata, koji se zatim koriste za pristup API funkciji koja je navedena u dokumentaciji API Core.");

	jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Prikazuje stranicu za administraciju API -ja, na kojoj upravitelji svojstava mogu konfigurirati API klijente. Imajte na umu da je ovo samo registrirani korisnik, pa se korisnici moraju registrirati i prijaviti da bi mogli vidjeti ovu stranicu.");

	jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Uredi integraciju');
	jr_define('WEBHOOKS_INTEGRATION_ID', 'ID integracije');
	jr_define('WEBHOOKS_INTEGRATION_URL', 'URL ili naziv');
	jr_define('WEBHOOKS_ENABLED', 'Omogućeno');

	jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Način provjere autentičnosti/Integracija');

	jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Svi web -dojmovi koje stvorite neće se pokrenuti jer niste dodijeljeni nijednom svojstvu. Upravitelji super -svojstava obično ne dodjeljuju pojedina svojstva, pa će vam za izradu web -dojavnika možda trebati novi korisnik.');
	jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Bilo koji web dohvat koji stvorite pokrenut će se protiv sljedećih svojstava:');


	jr_define('PORTAL_REVIEWS_LIMIT', 'Ograničenje recenzija');
	jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Koristite ovu postavku da ograničite broj recenzija prikazanih na stranici s pojedinostima o nekretnini.');
	jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Prikaži sve recenzije');

	jr_define('VIDEO_TUTORIALS', 'Video tutoriali');
	jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimalna vrijednost depozita');
	jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ako je izračunati depozit manji od ove brojke, umjesto toga postavite polog na ovu vrijednost. Ova brojka bi sama mogla biti prekomjerna ako ne zadovoljava postavku minimalnog depozita web-lokacije. Ostavite postavljenu na 0 do ne koristite postavku. ");

	jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Kako biste povećali brzinu svoje web stranice, preporučujemo uvoz podataka o postojećim slikama web stranice i svojstava u bazu podataka.');
	jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Uvezi podatke o postojećim slikama u bazu podataka');

	jr_define('_JOMRES_S3_ACTIVE_DESC', 'Eksperimentalna značajka. Ako je omogućeno, slike prenesene pomoću značajke medijskog centra također će se kopirati u vašu kantu Amazon S3 i posluživati ​​s vašeg URL -a kante Amazon S3. Kada to omogućite prvi put, bit ćete i potaknut na uvoz postojećih slika u vašu kantu S3. ');
	jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domena');
	jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Zamijenite zadanu domenu Amazon S3 svojom domenom CloudFront');
	jr_define('_JOMRES_S3_SSLTLS_DESC', 'Preporučuje se omogućiti. Samo za Windows i Mac OSX, ako libcurl nije izgrađen s podrškom za Schannel ili Secure Transport (izvorne SSL knjižnice uključene u Windows i Mac OS X), trebate postaviti ovo na Ne.');
	jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Omogućili ste integraciju Amazon S3, pa ćete morati kopirati sve postojeće slike u svoju kantu S3. Slike se sada poslužuju posjetiteljima vaše web lokacije s Amazon S3 URL -a, pa ćete trebati da ih prvo kopirate u svoju kantu S3, u protivnom neće biti vidljivi posjetiteljima vaše web stranice. ');
	jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Nakon što kliknete ovaj gumb, nemojte prekidati proces i čekati poruku o uspjehu ili pogrešci. Ovisno o brzini poslužitelja, ovo može potrajati.');
	jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopiraj postojeće slike u korpu Amazon S3');


	jr_define('JOMRES_INCOMPLETE', 'Nedovršeno');
	jr_define('JOMRES_WATING_APPROVAL', 'Čekanje na odobrenje');
	jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Karta pojedinosti o nekretnini');

	jr_define('HAS_STARS_TITLE', 'Dopušta klasifikaciju zvjezdica?');
	jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Prisilno ponovno uvezi detalje slike u bazu podataka');
	jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Prisilno ponovno učitavanje slika u kantu S3');
	jr_define('_JOMRES_UNINSTALL_TABLES', 'Izbrisati sve Jomres podatke prilikom deinstalacije?');
	jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'Ako je postavljeno na da, Jomres će izbrisati sve tablice baze podataka kada se deinstalira. Time će se izbrisati svi Jomres podaci iz db -a i ne može se poništiti.');

	jr_define('TRANSACTION_IDS', 'ID transakcije');
	jr_define('PAYMENT_METHOD', 'Način plaćanja');
	jr_define('POA_DISPLAY_PRICE', 'Cijena POA');
	jr_define('POA_DISPLAY_PRICE_DESC', 'Kad su nekretnine prikazane na popisu, sustav će pokušati pronaći važeću cijenu iz konfiguriranih tarifa na temelju današnjeg datuma ili ako su datumi korišteni u pretraživanju, onda na temelju tih datuma . Ako ne može, tada će se prikazati POA (cijena u prijavi), što znači da bi vas gost trebao kontaktirati radi dobivanja cijene. Ako želite, ovdje možete konfigurirati cijenu koja će se prikazivati ​​umjesto teksta POA. Ova brojka bila bi "zamjenska" cijena za prikaz ako se ne može odrediti druga cijena. ');

	jr_define('PLUGINMANAGER_INSTALL', 'Morate instalirati upravitelj dodataka prije nego instalirate Jomres dodatke, želite li to učiniti sada?');
	jr_define('PLUGINMANAGER_REINSTALL', 'Morate ažurirati upravitelja dodataka prije nego što možete ažurirati sve instalirane dodatke, želite li to učiniti sada?');
	jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Učinimo to!");

	jr_define('INCLUDEINFILTERS', 'Uključi u filtre?');
	jr_define('INCLUDEINFILTERS_DESC', 'Filtri svojstava svojstava u Ajax Composite Searchu mogu postati jako dugački, pa ovu opciju možete postaviti na Ne kako biste spriječili prikazivanje ove značajke na popisu svojstava svojstva.');

	jr_define('REVIEW_REMINDER_PT1', "Imate");
	jr_define('REVIEW_REMINDER_PT2', "rezervacije za koje još niste ostavili recenziju. Molimo ostavite recenziju.");
	jr_define('BOOKINGS_AWAITING_REVIEWS', "Rezervacije čekaju recenzije");
	jr_define('REVIEW_NAG', "Zavadite goste za recenzije?");
	jr_define('REVIEW_NAG_DESC', "Nakon što je gost odjavljen s rezervacije, sustav će ga podsjetiti da objavi recenziju za svoju rezervaciju. Postavite ovu opciju na Ne da biste onemogućili ovaj podsjetnik.");

	jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Slanje kopija e -poruka o rezervacijama administratorima web lokacije?");
	jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Kad je omogućeno, kopije e -poruka o rezervacijama poslane upraviteljima nekretnina bit će poslane i svim administratorima web lokacije.");
	jr_define('HIDDEN_ADDRESS_SETTING', "Sakrij adresu?");
	jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Ako postavite ovu opciju na \"Da\", samo će gosti koji su već rezervirali smještaj na vašem objektu moći vidjeti adresu nekretnine. Možda biste željeli koristiti ovu postavku za skrivanje točne lokacije nekretnine ako se, na primjer, rutinski ostavlja bez nadzora. ");
	jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
	jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimiziraj slike pri prijenosu?');
	jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Kad je omogućeno, slike će biti optimizirane za web (veličina datoteke može biti do 75% manja). Ovisno o vrsti prenesene slike, vaš poslužitelj mora imati jednu ili više ovih knjižnica instaliranih od strane hosta davatelj usluga: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
	jr_define('DATABASE_INTEGRITY_CHECK', 'Provjera integriteta baze podataka');
	jr_define('OBSOLETE_FILES_CHECK', 'Provjera zastarjelih datoteka');
	jr_define('DATATABLES_COLVIS', 'Vidljivost stupca');

	jr_define('API_TOKEN_LIFETIME', 'Životni vijek API tokena');
	jr_define('API_TOKEN_LIFETIME_DESC', 'Koliko dugo API token ostaje važeći, u sekundama. 86400 = 1 dan, 31536000 = 1 godina');


	jr_define('ENCRYPTION_TITLE', 'Encryption');
	jr_define('ENCRYPTION_FILE_LOCATION', 'Lokacija datoteke za šifriranje');
	jr_define('ENCRYPTION_FILE_LOCATION_DESC', '** Nikada ne brišite datoteku šifriranja ** <br/> Korisnički podaci pohranjeni su šifrirani u tablicama kako bi se osiguralo da su "podaci u mirovanju" zaštićeni na siguran način, u skladu s preporukama GDPR -a. Prema zadanim postavkama, ključ za šifriranje je pohranjena u datoteci "encryption_key.class.php" u korijenu vaše Jomres instalacije (obično /public_html /jomres). Ovdje možete promijeniti mjesto gdje je datoteka pohranjena. Ako promijenite lokaciju, morate premjestiti datoteku, ne čekajte da Jomres izradi novu verziju, u protivnom nećete moći dekodirati podatke svojih gostiju. ');

	jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Podaci koje spremite ovdje će se koristiti na fakturama generiranim za ovu nekretninu');

	jr_define('_JOMRES_GDPR_POLICIES', 'GDPR politike');
	jr_define('_JOMRES_GDPR_POLICIES_DESC', 'Ovdje možete konfigurirati koliko će dugo nakon kreiranja rezervacije ili računa biti uklonjeno iz sustava kako biste bili sigurni da ste u skladu s GDPR -om.');

	jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Razdoblje zadržavanja rezervacije (u danima)');
	jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Koliko dana nakon datuma polaska rezervacije treba izbrisati rezervaciju? Kad se izbriše, i rezervacija i faktura se uklanjaju. Uobičajeno razdoblje zadržavanja može biti 365 dana.');

	jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Period zadržavanja fakture (ne rezervacije)');
	jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Ostali računi, poput računa s provizijom i pretplatom, nisu povezani s rezervacijama. Zbog toga se neće izbrisati prilikom brisanja faktura i ugovora. Ovisno o vašoj zemlji i vašoj poslovnoj praksi, morat ćete konfigurirati drugačije razdoblje čuvanja. Tipično razdoblje čuvanja može biti 3653 dana, što je 10 godina. ');


	jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Vaši podaci');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Neke značajke ove web stranice trebaju pohraniti podatke o vašem posjetu. Ovo se koristi samo za pružanje usluge vama, nikada se ne dijeli s drugima i briše se kada više nije potrebno.');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DAJETE LI NAM DOZVOLU ZA ČUVANJE OVIH INFORMACIJA ??');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Detaljno');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Morate pristati na to da pohranjujemo te podatke kako biste mogli rezervirati na ovoj web stranici. Bez obzira na to pristajete li na pohranu vaših podataka, pohranit ćemo kolačić na vaše računalo kako bismo vam rekli da li ste se uključili ili ne. To nam pomaže da osiguramo da vas nećemo stalno pitati želite li se uključiti ili isključiti i ne sadrži nikakve podatke koji otkrivaju identitet (PII). Ako se predomislite, možete u bilo kojem trenutku posjetiti stranicu "Dopuštenja aplikacije" za uključivanje ili isključivanje. ');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Podaci se pohranjuju za različita vremenska razdoblja, ovisno o prirodi vašeg posjeta. Dakle, ako samo razgledate, pohranit ćemo približne podatke o zemljopisnoj lokaciji (na razini zemlje). Ako izvršite pretraživanje, do učinimo obrasce pretraživanja prilagođenijima korisnicima, pohranit ćemo posljednje stvari na kojima ste pretraživali. Ti se podaci obično pohranjuju najviše 24 sata i koriste se samo kako bi vaš posjet učinili ugodnijim. ');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Kada izvršite rezervaciju kod nas, prema potrebi se pohranjuje više informacija.');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Tehnički podaci obrasca za rezervaciju se snimaju i čuvaju najviše 60 dana. To je potrebno kako bi se rezervacije na zahtjev mogle pretvoriti u potpune rezervacije nakon odobrenja rezervacije i na analizu naših timova u slučaju da postoji problem s rezervacijom. Ako niste bili prijavljeni prilikom rezervacije, poslat ćemo vam korisničko ime i lozinku kako biste mogli pregledati svoju povijest rezervacija i iskoristiti svoje pravo na zaborav (RTBF) ako želite to učiniti. ');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Podaci uneseni u obrazac za rezervaciju, na primjer ime, adresa e -pošte, stvarna adresa pohranjuju se najviše 365 dana nakon datuma polaska rezervacije. Ti se podaci pohranjuju u šifriranom obliku u našoj bazi podataka tako da ga mogu vidjeti samo ovlašteni ljudi. Ako izvršite rezervaciju, prema zakonu moramo pohraniti vaše osobne podatke dok je rezervacija valjana. Nakon dovršetka rezervacije, bilo zato što je otkazana ili ste odjavljeni, tada ćete biti u mogućnosti ostvariti svoj RTBF prijavljivanjem i posjetom stranici "Vaši podaci". Podaci o fakturi za dovršene rezervacije i dalje će biti sigurno pohranjeni u našoj bazi podataka kako bismo bili sigurni da se pridržavamo relevantnih poreznih zakona, ali ćete moći ukloniti sve ostale podatke koji otkrivaju identitet nakon dovršetka rezervacije. ');
	jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Kada pristanete na to da se vaši podaci pohranjuju na gore opisani način, zakonski smo dužni pohraniti tu privolu u našu bazu podataka. Ti će podaci uključivati ​​vaš IP broj i sadržaj obrasca za uključivanje. zadržati ovu obavijest o pristanku na neodređeno vrijeme (ovo je zakonski uvjet). ');

	jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Još nam niste rekli možemo li prikupljati osobne podatke o vama');
	jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Pristali ste da prikupljamo potrebne podatke za otkrivanje identiteta za rezervacije');
	jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Rekli ste nam da ne prikupljamo podatke koji otkrivaju identitet');

	jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'Niste nam dali dopuštenje za prikupljanje vaših privatnih podataka');
	jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Da bismo izvršili određene radnje na ovoj web stranici, moramo prikupljati podatke o vama koji vas mogu identificirati, ali niste nam za to dali dopuštenje.');
	jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Promijenite svoja dopuštenja');
	jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Nastavi pregledavati svojstva');

	jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Dopuštenja aplikacije');

	jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Podaci o gostima');
	jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Ovo su podaci koje za vas spremaju različiti objekti. Različiti hoteli mogu držati različite zapise, ovisno o tome što ste unijeli prilikom rezervacije.');
	jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Nemate pohranjenih podataka ni u jednom hotelu u ovom sustavu');
	jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Podaci profila');
	jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Ovo je glavni skup podataka koji vam držimo, za razliku od onih koje ste podijelili s različitim svojstvima.');
	jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Niste spremili nikakve podatke o profilu');
	jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Ovdje se nalaze podaci za osobnu identifikaciju koje pohranjujemo na ovoj web stranici. Izrađeni su u JSON (JavaScript Object Notation) formatu koji je lagani format za razmjenu podataka. Lako ih je čitati i čitati) pisati i strojevima je lako raščlaniti i generirati. ');

	jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Anonimizirano');
	jr_define('_JOMRES_GDPR_MY_DATA', 'Vaši podaci');
	jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Prihvaćanjem ovih Uvjeta korištenja (ovaj "Ugovor"), slažete se da:

<ul>
<li>
Ovlašteni ste za rezervaciju hotela putem ove web stranice;
</li>
<li>
Imate najmanje 18 godina;
</li>
<li>
Posjedujete zakonsko ovlaštenje za stvaranje obvezujuće pravne obveze;
</li>
<li>
Stranicu ćete koristiti u skladu s ovim Ugovorom;
</li>
<li>
Stranicu ćete koristiti samo za legitimne rezervacije za sebe ili za drugu osobu za koju ste zakonski ovlašteni djelovati;
</li>
<li>
Obavijestit ćete takve druge osobe o ovom Ugovoru koji se odnosi na rezervacije koje sam napravio u njihovo ime, uključujući sva pravila i ograničenja koja se na njih primjenjuju;
</li>
<li>
Sve informacije koje sami dostavite web stranici su istinite, točne, aktualne i potpune; i
</li>
<li>
Štitit ćete podatke o svom računu te ćete nadzirati i biti u potpunosti odgovorni za svaku upotrebu vašeg računa sami i bilo tko osim vas.
</li>
</ul>
');
	jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'Sigurnost i transparentnost su nam važni.');
	jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'Vrlo ozbiljno shvaćamo svoje odgovornosti u pogledu pohrane vaših podataka. Svi osobni podaci (PII) pohranjeni su šifrirani u našoj bazi podataka pomoću standardnih algoritama za industriju kako bi se osiguralo da samo ovlašteni korisnici mogu vidjeti te podatke.');

	jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Možete preuzeti sve osobne podatke koje vam spremamo.');
	jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Preuzmi sada');

	jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Pravo na zaborav (RTBF)');
	jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'Vjerujemo da biste trebali moći <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> izbrisati </a> svoju <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank" > Podaci za osobnu identifikaciju </a> ako želite i ako je to izvedivo. ');
	jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Niste registrirani na ovoj web stranici. Vaša opća lokacija (država) i IP broj bit će pohranjeni najviše 24 sata, a zatim izbrisani.');
	jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Niste registrirani na ovoj web stranici i isključili ste prikupljanje podataka. Nismo pohranili vaš PII.');

	jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Registrirani ste na web mjestu i nemate nijednih ili aktivnih rezervacija. Možemo anonimizirati većinu podataka koje trenutno držimo za vas. Želite li to učiniti?');
	jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Napomena: Ovo ne briše vaš račun, već samo anonimizira našu evidenciju tako da vaš račun ne može biti povezan s vama kao osobom. Prema zakonu moramo nastaviti pohranjivati ​​vaše osobne podatke za potrebe fakturiranja izbrišite sve zapise o gostima. ');

	jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Registrirani ste na web mjestu, međutim imate još neispunjenih rezervacija i trenutno ne možemo anonimizirati vaše podatke. Ti će se podaci čuvati najviše godinu dana nakon dovršetka rezervacije, tada će se biti izbrisan ako ga ne odlučite ukloniti prije tog vremena. ');
	jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Budući da ste upravitelj nekretnine na našoj web stranici, ne možemo vam ponuditi mogućnost automatskog brisanja vaših podataka. Umjesto toga, kontaktirajte nas izravno kako bismo vašu nekretninu mogli dodijeliti drugom upravitelju. Nakon što to učinimo i uklonimo vaš status upravitelja nekretnine, moći ćete automatski izbrisati svoje podatke. ');

	jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Zaboravi me!');
	jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Ovo se ne može poništiti!');
	jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Vaši su podaci izbrisani!');

	jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Nažalost, ne možete izvršiti rezervaciju jer je vaša adresa e -pošte nevažeća');

	jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Ova stranica vam daje mogućnost anonimizacije svih gostiju koji imaju svoje podatke pohranjene u sustavu. To vam omogućuje da budete u skladu s GDPR -om, ali ne možete uređivati ​​druge podatke na ovoj stranici. Da biste to učinili morate se prijaviti na sučelje kao upravitelj nekretnine. Pretpostavka je da vas je kontaktirao povijesni gost tražeći da mu dopustite da iskoristi svoje pravo na zaborav. Ako se ne mogu prijaviti na sučelje web stranice (možda korisnik nije stvoren za njih prilikom rezervacije), onda možete koristiti ovo područje za njihovu anonimizaciju nakon što potvrdite njihov identitet. ');
	jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonimni gost');
	jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'BRISANO NEKRETNINA');
	jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Podaci o gostima anonimni');
	jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Ne mogu anonimiti');

	jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Trebamo vaše dopuštenje za pohranu vaših podataka prije nego što izvršite rezervaciju. KLIKNITE OVDJE da biste nam dali dopuštenje.');

	jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'Omogućiti funkcionalnost usklađenu s GDPR -om?');
	jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NE PREPORUČUJEMO DA ISKLJUČITE FUNKCIONALNOST SAGLASNOG GDPR-a. Jomres ima ugrađene značajke koje vam pomažu da osigurate da je odjeljak Jomres vaše web stranice u skladu s GDPR-om (ako onemogućite ovu značajku i ne biste trebali ako ste u EU -u ili poslujete s građanima EU -a) tada će Jomres automatski pretpostaviti da je svaki posjetitelj web stranice dao dopuštenje za omogućavanje svojih osobnih podataka. Dopuštenje aplikacije i stranice Moji podaci neće biti prikazani i korisnici neće biti upitani da daju dopuštenje za prikupljanje podataka. ');


	jr_define('EMPTY_TEMP_DIR', 'Prazna temp dir');
	jr_define('EMPTY_TEMP_DIR_DONE', 'Privremene datoteke izbrisane');

	jr_define('MACHINE_TRANSLATION', 'Strojni prijevodi');
	jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Izvorni jezik');
	jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Moguće je priključiti funkcionalnost strojnog prevođenja. To vam omogućuje unos nizova na jednom jeziku, a prijevodi se mogu izvući iz udaljenih usluga. Imajte na umu da sve usluge prevođenja ne podržavaju sve jezike. Pogledajte te usluge za više detalja.');

	jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Tipovi soba');
	jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Nova vrsta sobe');
	jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Na ovoj stranici možete stvarati i uređivati ​​vrste soba. Ove vrste soba bit će specifične samo za ovo svojstvo. Prilikom postavljanja vašeg posjeda najprije su vam potrebne neke vrste soba. Možete koristiti bilo koje od tipova soba koje je izradio administratora ili možete dodati vlastitu. Nakon što imate jednu ili više vrsta soba, tada možete stvoriti sobe te vrste sobe. Nakon što imate sobe, tada možete stvoriti tarife (cijene) za te sobe jer su tarife povezane s vrstama soba . ');
	jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Upravitelji mogu stvarati vrste soba?');
	jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Upotrijebite ovu opciju za konfiguriranje mogu li upravitelji stvoriti vlastite vrste soba na sučelju. Preporučujemo da ostavite ovu opciju na Ne kada prvi put koristite Jomres, posebno ako stvarate portal jer biste trebali stvoriti sve vrste soba u administratorskom području. Vrste soba koje su stvorili upravitelji pojavit će se u obrascima za pretraživanje, ali budući da su ove vrste soba specifične za pojedina svojstva, samo će se jedno svojstvo prikazati u rezultatima pretraživanja ako je odabrana ta vrsta sobe tijekom pretraživanja. Ako želite da samo upravitelji super nekretnina mogu stvarati vrste soba, ostavite ovu opciju postavljenom na Da i upotrijebite dodatak za kontrolu pristupa kako biste samo super upraviteljima omogućili prikaz opcije izbornika "Postavke> Vrste soba". Samo nekretnine koje se iznajmljuju vanjske sobe u objektu i korištenje naprednih ili Micromanage načina uređivanja tarifa mogu koristiti ovu opciju. Svojstva tipa vila/apartmana neće ih moći koristiti. ');
	jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Ažurirana vrsta sobe/nekretnine');
	jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Prikaži vrste soba u opcijama pretraživanja');
	jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Ako odlučite dopustiti upraviteljima nekretnina da stvaraju vlastite vrste soba, možete odabrati želite li prikazati te stvorene vrste soba u opcijama pretraživanja gdje ste odabrali prikazivanje vrsta soba.');


	jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Ne biste trebali ponovo koristiti istu adresu e-pošte za svaku rezervaciju. <br/> Ako imate jedinstvenu domenu (npr. nije adresa e-pošte gmail) za svoju tvrtku, upotrijebite telefonski broj gosta kao njihova adresa e -pošte. E -adresa bi tada izgledala poput 123456@mydomain.com <br/> To će osigurati stvaranje novog gosta kada kreirate rezervaciju. ");

	jr_define('_JOMRES_LOGIN_USERNAME', 'Adresa e -pošte');
	jr_define('_JOMRES_LOGIN_PASSWORD', 'Lozinka');
	jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Oduševljeni smo što želite ponovno rezervirati kod nas. Da biste mogli zajedno upravljati svim svojim rezervacijama, morate se prijaviti kako bi se rezervacija mogla dodati vašem računu. Ovo također osigurava da ste ovlašteni koristiti navedenu adresu e-pošte. ");

	jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Ako ne znate svoju lozinku, možemo vam poslati e -poruku za poništavanje lozinke. Slijedite upute u toj e -pošti da biste poništili lozinku.');
	jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'Zaboravili ste lozinku?');

	jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonimizirati svoje ime?');
	jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Ako odlučite anonimizirati svoje ime prilikom pregleda, umjesto toga ćemo koristiti vaše inicijale.');
	jr_define('ANONYMOUS', 'Anon');

	jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'rekao');
	jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Odgovori na ovu recenziju');
	jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Ovdje unesite svoj odgovor na ovu recenziju.');
	jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Vaš odgovor');
	jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Glavni pregled');
	jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Odgovor na pregled spremljen');


	jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Prije nego što pošaljete odgovor na recenziju, morate pročitati sljedeće. Slanjem odgovora potvrđujete da se slažete s ovim uvjetima i odredbama.');
	jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Koje su naše smjernice za odgovor na recenziju?');
	jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Vi odgovarate na pregled svoje nekretnine. <em> Ne smijete </em> koristiti svoj odgovor kao postupak komercijalnog osporavanja. Ako trebate prijaviti pregled, morate upotrijebiti "Izvješće Gumb "Pregledaj" na popisu, a ne na stranici s odgovorima na pregled. ');

	jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Nakon što ostavite odgovor, nećete ga moći urediti.');

	jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Dopušteno i ohrabreno');
	jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Potpuni odgovor na recenziju. </li>
    <li> Ljubaznost i poštenje. </li>
    <li> Razumni odgovori na recenzentove probleme (zapamtite, drugi možda imaju sličnih problema, ali nisu iskoristili priliku za objavljivanje recenzije). </li>
    <li> Potaknite gosta da izravno stupi u kontakt s vama radi rješavanja problema.
    <li> Uvijek imajte na umu da će budući gosti vidjeti vaš odgovor. Budite uvijek profesionalni. </li>
</ul>
');

	jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Nije dopušteno');

	jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Trgovački sporovi. </li>
    <li> Pitanja recenzentu ili drugima. </li>
    <li> Upitan jezik (uključujući i psovke). </li>
</ul>
');

	jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Zadnji put');
	jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Raspored');


	jr_define('_JOMRES_INVOICE_NUMBERS', 'Brojevi faktura');

	jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Koristiti prilagođene brojeve faktura?');
	jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Sustav možete konfigurirati tako da koristi prilagođene brojeve računa. To će utjecati samo na nove račune.');

	jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Početni broj');
	jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Brojevi se stvaraju uzastopno. Koji bi trebao biti prvi broj?');

	jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Koji format treba imati broj računa?');
	jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Ovdje konfigurirajte format broja fakture. Format može izgledati kao {N}/{D} ili {N}/{Y} gdje je N automatski generirani broj, D = datum u formatu GGGGMMDD ( 20190131) ili Y = GGGG (2019). Svi drugi alfanumerički znakovi koji nisu zatvoreni u uvijenim zagradama bit će ostavljeni sami, pa će uzorak koji izgleda kao {N}/{D} -L rezultirati brojem računa (21) koji izgleda nešto poput 21/2019-L ');

	jr_define('_JOMRES_SURCHARGE_TITLE', 'Nadoplata');
	jr_define('_JOMRES_SURCHARGE_DESC', 'Dodatna naknada koja će se dodati u sobu prilikom rezervacije (izračunano po danu)');


	jr_define('_JOMRES_PDF_BUTTON', 'PDF');


	jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Odredite prioritetne oznake za web-lokaciju?');
	jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Prilagođeni tekst spremljen u uređivanje naljepnica ili stranice s nizovima datoteka prevoda lang smatraju se oznakama "na cijeloj web lokaciji". Upravitelji nekretnina također mogu prilagoditi oznake za svako svojstvo pomoću značajke uređivanja oznaka na sučelju. To omogućuje upravitelj imovine da ima različite tekstove za svoju nekretninu, što je korisno ako se nekretnina razlikuje od svih ostalih svojstava na web mjestu. <br/> Kad sustav traži tekstove oznaka, prioritet će imati tekstovi na cijeloj web lokaciji određeni tekstovi što znači da ako za cijelu web lokaciju postoji tekst za tu oznaku, sustav će je prvo odabrati. Ako postavite ovu opciju na Ne, sustav će dati prioritet tekstovima specifičnim za svojstvo nad tekstovima na cijeloj web lokaciji. ');
	jr_define('_JOMRES_REFERRER', 'Preporuka');
	jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Ovo bi se moglo promijeniti ako se stavi na popis dopuštenih, pa bi mjesto "Najbolje mjesto za rezervacije na svijetu" promijenilo ovo u "WBBS" ili slično.
	jr_define('_JOMRES_LIBRARY_PACKAGES', 'Paketi knjižnica');
	jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Moduli dobavljača i čvorova zasebni su (besplatni) paketi za Jomres. Pakete možete ponovno instalirati na ovoj stranici.');
	jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Ponovno instaliranje knjižničnih paketa');

	jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Nije moguće izbrisati vrstu svojstva jer se još uvijek koriste nekim svojstvima. Morate prvo promijeniti ta svojstva u drugu vrstu svojstva prije pokušaja brisanja ovog. UID -ovi svojstva koji sprječavaju brisanje:');
	jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Nije moguće poništiti objavljivanje vrste svojstva jer se još uvijek koriste nekim svojstvima. Morate prvo promijeniti ta svojstva u drugu vrstu svojstva prije nego što pokušate poništiti objavu. UID -ovi svojstva koji sprječavaju promjenu:');

	jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Nasumične adrese e -pošte');
	jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Ponudi nasumične poruke e -pošte');
	jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Možete dopustiti sustavu da generira nasumične e -adrese u skočnom prozoru za brzu rezervaciju na nadzornoj ploči. To omogućuje upraviteljima i recepcionerima da kreiraju rezervacije za goste za koje nemaju adrese e -pošte, to je namijenjeno za rad kao uštedu vremena za web stranice s mnogo recepcionara/menadžera koji razumiju da se te nasumične e -poruke nikada neće koristiti za stvarnu komunikaciju, svrha je zaobići činjenicu da u Jomresu svi gosti moraju imati adrese e -pošte. MORATE navesti i domenu u sljedeće polje. ');
	jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Domena nasumičnih e -poruka');
	jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Ovo ne bi trebala biti normalna domena e -pošte, kao što je gmail ili outlook. Umjesto toga, to može biti vaša vlastita domena ili nešto sasvim drugo, poput "mysite.emails"');
	jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Područje za prijenos');
	jr_define('_LIST_USERS_LEGEND_NOROLE', 'Nema korisničke uloge');
	jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepcionarka');
	jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Upravitelj imovine');
	jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Manager');
	jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Obustavljeno');
	jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Izbrisano iz CMS -a');


	jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Ako vam se sviđa Jomres, razmislite o tome da ostavite recenziju na jednoj od ovih web stranica');
	jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Ja sam fina osoba, već sam ostavio recenziju');

	jr_define('_LICENCE_PROMPT_DEAR', 'Poštovani');
	jr_define('_LICENCE_EXPIRED', ', vaš Jomres licencni ključ je istekao, pa vam nedostaju ove sjajne značajke i prednosti!');
	jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Ažuriranja dodataka i nova izdanja dodataka');
	jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Podrška za e -poštu/ulaznice samo za članove');
	jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Bezbrižna ažuriranja Jomres Core-a');
	jr_define('_LICENCE_EXPIRED_POST', 'Povežite se s nama za rješenja za plaćanje bez problema i pristupite svim dodacima i uslugama podrške samo za članove.');
	jr_define('_LICENCE_EXPIRED_RESTART', 'Odmah pristupite svim dodacima!');

	jr_define('_LICENCE_INVALID_KEY', 'Nažalost, čini se da ne koristite važeći Jomres licencni ključ, pa vam nedostaju ove sjajne značajke i prednosti!');
	jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Dodaci </a> koji uvelike proširuju funkcionalnost Jomresa');
	jr_define('_LICENCE_INVALID_BENEFITS_2', 'Samo e -pošta/podrška za ulaznice samo za članove');
	jr_define('_LICENCE_INVALID_BENEFITS_3', 'Bezbrižna ažuriranja Jomres Core-a');
	jr_define('_LICENCE_INVALID_POST', 'Povežite se s nama za rješenja plaćanja bez problema i pristupite svim dodacima i uslugama podrške samo za članove.');
	jr_define('_LICENCE_INVALID_START', 'Odmah pristupite svim dodacima!');

	jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Nadzorna ploča');
	jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Korisnici');
	jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Povjerenstvo');
	jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Pretplate');
	jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Fakture');
	jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
	jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Prijevodi');
	jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Alati');
	jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Izvješća');
	jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Postavke');
	jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Pomoć');

	jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Ukupno svojstava u sustavu');
	jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Objavljena svojstva');
	jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Neobjavljena svojstva');
	jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Odobrena svojstva');
	jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Svojstva koja zahtijevaju odobrenje');

	jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Ukupno recenzija');
	jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Neobjavljene recenzije');
	jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Pregled izvješća');

	jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Informacije o sustavu Jomres');

	jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Vrsta svojstva ovog svojstva nije objavljena, možda se neće pojaviti u rezultatima pretraživanja. Obratite se administratoru web lokacije da biste objavili vrstu svojstva ili promijenili vrstu svojstva na stranici Uređivanje svojstva.");
	jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Ažurirajte vrstu svojstva');


	jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Prihod (plaćeni iznosi)');
	jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Nije moguće izbrisati značajku svojstva "');
	jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"jer ga koriste sljedeća svojstva (i):');


	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Ova stranica izvodi osnovni test REST API-ja pomoću ugrađene funkcionalnosti u Jomresu. Poziva Jomres REST API da vidi prima li valjani odgovor.');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Poslužitelj je pozvao ovaj URL da vidi je li odgovor ispravan:');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Stranica je primila ovaj odgovor:');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Činilo se da je test prošao prema očekivanjima, vjerojatno nećete imati problema s primanjem zahtjeva za REST API s ostatka Interneta.');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Test nije uspio, pogledajte u polju Odgovor, ako izgleda kao puno HTML -a ili ste primili poruku 404, tada vaš poslužitelj preusmjerava pozive na drugi URL. To će vas spriječiti u primanju API -ja poziva. ');

	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Poslužitelj aplikacija Jomres održava popis svih Jomres web stranica. To nam omogućuje izgradnju mreže za distribuciju. Ova je mreža osmišljena kako bi našim korisnicima omogućila prikazivanje svojstava s drugih web lokacija, posebno za nove web stranice, za stvaranje SEO prisutnosti na mreži. Cilj je da sve Jomres web stranice rade zajedno, gradeći povjerenje u mrežu. Ova se usluga ne naplaćuje. ');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Vaša web stranica trenutno nije navedena na poslužitelju aplikacija Jomres, koji je dio mreže za distribuciju. Ovaj poslužitelj će pokušati ponovo dodati ovaj poslužitelj na mrežu na sljedećih 6 stranica, nekoliko učitavanja stranica, to se ne mijenja, provjerite je li gornji test povezivanja prošao testove. Imajte na umu da se lokalni host poslužitelji ne mogu dodati u mrežu. ');
	jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Čestitamo, vaš poslužitelj je naveden na poslužitelju aplikacije Jomres.');

	jr_define('_JOMRES_SYNDICATION_TITLE', 'Sindicirana svojstva');
	jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Ovdje su neke druge nekretnine dostupne iz naše mreže nekretnina');
	jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
	jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Čestitamo, vaš poslužitelj je naveden na Jomres Syndication Network. Vaše nekretnine će se uskoro početi pojavljivati ​​na drugim Jomres web stranicama, ako se već ne prikazuju.');
	jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Vaša instalacija nije dio Jomres Syndication Network, stoga se vaša svojstva ne prikazuju na drugim web stranicama sa sjedištem u Jomresu i ne možete imati koristi od ovog besplatnog oglašavanja.');
	jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktivne Jomres instalacije:');
	jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Ukupan broj Jomres instalacija koje na svojim web stranicama dijele svojstva Jomres Syndication Network.');
	jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Ukupno svojstava:');
	jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Ovo je broj svojstava dostupnih u JSN -u.');
	jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Prikazuje ukupno svojstvo:');
	jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Ukupno je sve vrijeme povezano svojstvo Jomresa s druge web stranice sa sjedištem u Jomresu.');
	jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Syndicate Network (JSN) besplatna je značajka dostupna svim korisnicima Jomresa. Svrha joj je omogućiti vam besplatno oglašavanje vaših nekretnina na drugim web stranicama sa sjedištem u Jomresu. Cilj je pomoći brzo pokrećete svoju web lokaciju nudeći besplatno oglašavanje tako da su vaše nekretnine prepoznate i pouzdane jer su povezane s web lokacijama s visokim povjerenjem i velikom relevantnošću koje su već dobro poznate tražilicama. Pogledajte ovo <a href = "https://www.jomres.net/features/jomres-syndication-network" target="_blank"> članak na našoj web stranici </a> i <a href =" https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank"> priručnik </a> za više informacija. ');


	jr_define('GUEST_PROFILE_INFORMATION', 'Ovo su podaci vašeg profila gostiju, polja s ovim simbolom <i class = "fa fa-users" aria-hidden = "true"> </i>
 su javno vidljivi, dok polja s ovim simbolom <i class = "fa fa-user-secret" aria-hidden = "true"> </i> možete vidjeti samo vi, vaši domaćini i administratori web mjesta. <br/> <br/> Domaćini mogu vidjeti privatne podatke samo ako ste već s njima napravili rezervaciju. <br/> <br/> Vaši su podaci sigurno šifrirani i pohranjeni u našu bazu podataka pomoću AES-256 šifriranja. ');
	jr_define('GUEST_PROFILE_OPTIONAL', 'Ova su polja neobavezna, ali domaćini mogu upotrijebiti ove podatke kako bi utvrdili osjećaju li da vam mogu vjerovati, stoga je bolje dodati podatke. Zapamtite, tražite da ostanete u svojim vlasništvo, pa vas mogu odbiti ako smatraju da vam ne odgovaraju ili da vaša biografija ne sadrži dovoljno informacija. ');

	jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Vozačka dozvola');
	jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Broj putovnice');
	jr_define('GUEST_PROFILE_IBAN', 'IBAN broj');
	jr_define('GUEST_PROFILE_ABOUT_ME', 'O meni');
	jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Ovaj odjeljak "O meni" javno je vidljiv pa nemojte unositi nikakve privatne podatke. Ipak, potrudite se dati onoliko koliko vam je ugodno podijeliti svoje strasti, ono što volite zarađujte za život, svoje hobije itd. Možete upotrijebiti Markup da biste mu dali malo džeza. Domaćini će htjeti osjećati da vam mogu vjerovati u njihova svojstva. Uvjerite se da je vaša slika stvarna slika vas, a ne vašeg psa ili automobil (da, dečki, razgovaramo s vama!). ');

	jr_define('GUEST_PROFILE_PREFERENCES', 'Ovdje unesite sve posebne zahtjeve, kao što su potrebe za jednostavnim pristupom. Oni neće biti prikazani na vašem javnom profilu, ali će se dodati podacima o rezervaciji prilikom rezervacije.');

	jr_define('VIEW_HOST_PROFILE', 'Profil domaćina');

	jr_define('GUEST_PROFILE_TITLE', 'Profil gosta');
	jr_define('GUEST_PROFILE_TITLE_MY', 'Moj profil');

	jr_define('GUEST_PROFILE_WELCOME', 'Bok, dopustite mi da vam kažem nešto o sebi.');
	jr_define('GUEST_PROFILE_MY_NAME', 'Moje ime je');
	jr_define('GUEST_PROFILE_I_COME_FROM', 'a ja dolazim iz');
	jr_define('GUEST_PROFILE_IN', 'regija u');

	jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Moji privatni podaci');
	jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Dajemo sve od sebe da potvrdimo podatke o gostima i domaćinima, no trebali biste učiniti sve potrebno i sami odlučiti je li ta osoba pouzdana.');

	jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Moje nekretnine');
	jr_define('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzije');
	jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Ovo sam rekao o ovom svojstvu:');
	jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Ovom sam objektu dao ocjenu ocjene:');
	jr_define('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzije');
	jr_define('GUEST_PROFILE_OF_ME', 'Što drugi ljudi govore o meni');
	jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Što je ovaj domaćin rekao o meni');

	jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Pregledaj gosta');
	jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Moja recenzija ovog gosta');
	jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Evo nekoliko primjera recenzija gostiju za pokretanje lopte: <br/>

<ul>
<li> (ime gostiju) bilo je zadovoljstvo ugostiti! Otišli su iz prostora čisti i cijeli vikend bili su tihi. Imali su nesmetanu komunikaciju i radujem se što ću opet ostati sa mnom! </li>
    <li> Volio sam imati (ime gosta) jer su se mogli odnositi prema mjestu s poštovanjem, odlično se zabaviti i uživati ​​u okolici. Bili su izvrsni s iznajmljivanjem prostora i nadam se da ću ih opet ugostiti. </li>
    <li> Poštovala su se sva moja kućna pravila (ime gosta) i mogli su s lakoćom ući i otići. Volio sam ih imati jer su bili poštovani i tihi. Toplo ih preporučujem drugima! </li>
</ul>

');

	jr_define('GUEST_PROFILE_UNKNOWN', 'Nažalost, ne mogu pronaći tog korisnika. Najvjerojatnije još nisu unijeli podatke o svom računu.');

	jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Gost');
	jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
	jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Administrator');

	jr_define('WORDPRESS_THEME_ADVICE', 'Jomres je izgrađen na okviru Bootstrap, pa ga morate koristiti na temi temeljenoj na Bootstrapu. Preporučujemo jednu temeljenu na Bootstrapu 3. Ako nemate pristup temi, preporučujemo vam da koristite temu Jomresa Leohtiana za Wordpress koju možete <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> preuzmite odavde. </a> ');


	jr_define('BOOKING_NOSHOW_MENU', 'Označi kao da se ne prikazuje');
	jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Rezervacija označena kao Bez prikaza');
	jr_define('BOOKING_NOSHOW_BOOKINGS', 'Rezervacije');
	jr_define('BOOKING_NOSHOW_NOSHOWS', 'Bez emisija');
	jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistika za ovog korisnika');

	jr_define('BOOKING_NOSHOW_INFO', 'Podaci o rezervaciji i bez prikaza izvlače se iz Sindikalne mreže Jomres u vrijeme rezervacije. Uzeti su iz anonimiziranih podataka i možete ih koristiti za odlučivanje postoji li rizik da ovaj gost ne ispuni rezervaciju. Ako sustav izvještava da su podaci nepoznati, vjerojatno zato što ovaj sustav nije prepoznat na mreži. ');

	jr_define('BOOKING_NOSHOW_UNKNOWN', 'Nepoznato');
	jr_define('CMF_CONFIG_TITLE', 'Okvir za upravljanje kanalima');
	jr_define('CMF_CONFIG_KEY', 'Okvirni ključ za upravljanje kanalom');
	jr_define('CMF_CONFIG_KEY_DESC', 'Licencni ključ Framework Management Framework -a. Morat ćete unijeti ovaj ključ da biste mogli preuzeti dodatke Framework Management Framework -a.');

	jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Vaša nekretnina nije odobrena');
	jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Vaša nekretnina nije odobrena. Ako mislite da je to učinjeno pogreškom, kontaktirajte nas.");

	jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "Je li ovo vrsta gosta za djecu?");
	jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Postavite ovo na Da ako bi se ova vrsta gosta klasificirala kao dječja vrsta gosta.");

	jr_define('_JOMRES_GUESTTYPES_INTRO', "Ako želite naplaćivati ​​po osobi po noći, morat ćete stvoriti neke vrste gostiju.");
	jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Možete stvoriti onoliko vrsta gostiju koliko vam je potrebno, pokušajte započeti stvaranjem samo jedne vrste gosta pod nazivom \"Odrasli\". Ostavite sve postavke na zadanim vrijednostima. Zatim, ako na primjer želite dajte djeci mlađoj od 12 godina popust od 50% stvorili biste novu vrstu gosta i nazvali je \"Djeca mlađa od 12 godina\". Postavite opciju \"Dodaj varijansu?\" na - (negativno) i postavite \"Varijansu\" na 50. To znači kada se djeci doda rezervacija, naplaćuju se 50% cijene sobe. ");

	jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Postavi cijene ručno");
	jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Ručno postavite minimalno noćenja");
	jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Postavi minimalne noćenja");

	jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Postavite <em> cijenu po noći </em> po danu u tjednu");
	jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Postavi <em> cijenu noćenja </em> prema datumskom rasponu");
	jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Postavi <em> minimalno noćenja </em> prema datumskom rasponu");

	jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Alati za odabir datuma i unos tečaja omogućuju vam postavljanje jedne cijene za zadani datumski raspon. Odaberite datum početka i završetka, unesite cijenu i kliknite gumb Postavi cijenu po noći.");
	jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Alati za odabir datuma i unos minimalnih noći omogućuju vam postavljanje jedne vrijednosti za minimalne noći u danom rasponu datuma. Odaberite datum početka i završetka, unesite broj za minimalne noći i kliknite Postavi minimalni broj noćenja. ");

	jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Koristite ovaj padajući izbornik za promjenu između postavljanja cijena za pojedinačne datume, za postavljanje minimalnih noćenja za pojedinačne datume. Možete koristiti birač <em> po danu u tjednu </em>, izbornik <em> po datumu odaberite </em> birač ili postavite cijene/minimalne noćenja ručnim uređivanjem datuma. ");
	jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Koristite ovaj padajući izbornik za promjenu između postavljanja cijena za pojedinačne datume, za postavljanje minimalnih noćenja za pojedinačne datume. Možete upotrijebiti birač <em> prema datumskom rasponu </em> ili postaviti cijene/minimalne noći prema ručno uređivanje datuma. ");
	jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Postavi cijene ili minimalna noćenja");

	jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Postavi <em> minimum noćenja </em> po danu u tjednu");
	jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Polja za dan u tjednu omogućuju vam da postavite minimalni broj noćenja za određeni dan u tjednu, nakon što pritisnete gumb dana u tjednu svi dani u tjednu bit će postavljeni na tu postavku min. noći. ");


	jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Ručno postavite cijene/minimalna noćenja");
	jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Postavi cijene");
	jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Postavi minimalno noćenje");

	jr_define('_JOMRES_MICROMANAGE_PRICE', "Po noći");
	jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Najmanje noći");
	jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Maksimalni broj noći");

	jr_define('_JOMRES_MICROMANAGE_INTRO', "Ovdje možete stvoriti tarife koje su povezane s vrstama soba koje imate u svom posjedu.");

	jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Najčešće korištene opcije");

	jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Upute");

	jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Ako želite dodati različite cijene za različit broj gostiju, <em> možete stvoriti više od nekoliko tarifa za svaku vrstu sobe </em> i imati različite vrijednosti min/max gostiju u tim tarifama. ");
	jr_define('_JOMRES_MICROMANAGE_INFO', "Dajte tarifi naziv, definirajte maksimalan broj noćenja te minimalni i maksimalni broj gostiju koji su potrebni u obrascu za rezervaciju prije nego što se ponudi tarifa. <br/> <br/> Koristite ploču za odabir datuma za dodavanje cijena i postavki minimalnih noćenja u niz datuma ili izravno uređivanje unosa. Ako ne želite da se tarifa uopće nudi na određene datume, ostavite cijenu postavljenu na 0 (nula) na te datume. <br/> <br/> Možete imati različite minimalne noćenja na različite datume, pa ako želite duže rezervacije tijekom festivalskih/konferencijskih tjedana, možete postaviti minimalne noći da budu veće samo u tim razdobljima. <br/ > <br/> Ako naplaćujete po osobi po udjelu (PPPN), možete omogućiti tu postavku u Postavke> Konfiguracija imovine> Tarife i valuta, a zatim stvorite potrebne vrste gostiju u Postavkama> Vrste gostiju. ");

	jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Dodatne opcije");

	jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Ovo su dodatne opcije koje se ne koriste tako često, ali su vam ipak dostupne. <br/> <strong> Zanemari PPPN </strong> znači zanemariti osobu po noći. Možete imati nekoliko različitih tarifa za istu vrstu sobe, na primjer jedna od njih naplaćuje se po osobi po noći, a druga ne. <br/> <strong> Dopusti vikende </strong> Opcija Dopusti vikende daje vam mogućnost da odredite tarifu koja je samo dostupno radnim danima, na primjer ako želite posebnu tarifu za poslovne putnike. U tom slučaju postavite opciju na Ne, a min. noćenja na 1, a maksimalno 5 noćenja. <br/> <strong> Vikendi samo </strong> Opcija Samo vikendom obrnuta je od opcije Dopusti vikende. Ono što smatrate danom vikenda možete konfigurirati u postavkama konfiguracije nekretnine. To vam daje mogućnost da definirate stopu samo za vikend koju biste željeli ponuda za posebne događaje. <br/> <strong> Dan prijave u tjednu </strong> Ova vam mogućnost daje mogućnost prisilnog prijavljivanja samo u određene dane u tjednu, a najbolje ju je koristiti zajedno s konfiguracijom nekretnine> karticom Rezervacije> opcijama s fiksnim razdobljima. Većina korisnika htjet će ostaviti ovu opciju postavljenom na Sve. <br/> Posljednje dvije opcije, <strong> Minimalno odabrane sobe </strong> i <strong> Maksimalno već odabrane sobe </strong> vrlo su specijalizirane i korisno za nekretnine s izuzetno kompliciranim tarifama. <em> Osim ako nemate posebne potrebe, ove opcije ostavite na miru. </em> Iskoristite ih ako želite da se ova tarifa ponudi samo kada je gost već odabrao N broj soba u obrascu za rezervaciju, pa na primjer mogli biste imati jednu osnovnu tarifu u kojoj su te opcije ostavljene prema zadanim postavkama, i drugu tarifu u kojoj je već odabrana opcija min soba postavljena na 1, tada će ova druga tarifa biti ponuđena u obrascu za rezervaciju nakon što odaberete sobu. ");

	jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Možete stvoriti više tarifa za istu vrstu sobe, tako da možete stvoriti jednu tarifu za min/max dane od 1 - 7 i drugu tarifu gdje su minimalni dani 7, maksimalni dani 14 i itd. To vam omogućuje stvaranje jednostavnih ili kompliciranih shema određivanja cijena. Također vam omogućuje stvaranje više tarifa s različitim uvjetima, tako da možete imati drugi skup tarifa u kojima je cijena niža za noćenje s doručkom, a još jedan skup skupljih tarifa za noćenje, doručak i večeru. ");

	jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Postavi samo dane za odabir datuma");
	jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Kategorije nekretnina');
	jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Uredi kategoriju svojstva');
	jr_define('_JOMRES_STOP_READTHISFIRST1', "Stop!");
	jr_define('_JOMRES_STOP_READTHISFIRST2', "Hvala što ste instalirali Jomres");
	jr_define('_JOMRES_STOP_READTHISFIRST3', "Upravljanje imovinom vrši se na javnim stranicama, a ne u administratorskom području.");
	jr_define('_JOMRES_STOP_READTHISFIRST4', "Ako niste upoznati s Jomresom, posjetite odjeljak Pomoć> Stranica za početak rada.");


	jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Pridružite se Jomres sindikatu");
	jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Nakon što postavite svoju web lokaciju i budete spremni za prijem posjetitelja, pridružite se sindikatu Jomres.net i popišite svoje nekretnine na druga Jomres web mjesta.");



	jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Treba vam barem jedna soba jedne od sljedećih vrsta prije nego što možete stvoriti tarifu:");
	jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Idite na Postavke> Sobe i prvo stvorite sobu, nakon što to učinite moći ćete izraditi tarifu za tu vrstu sobe.");

	jr_define('JOMRES_PLATFORM', "Jomres platforma");


	jr_define('JOMRES_PLATFORM_CONNECTED', "Povezano");
	jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Postavite ovo na Da ako ste već povezali svoj Stripe račun s Jomres platformom.");

	jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe broj računa uživo");
	jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Ovo je vaš ID Stripe računa koji se može pronaći na vašoj Stripe nadzornoj ploči u odjeljku Postavke> Podaci o računu i izgleda kao acct_xxxxxxxxx Ovo polje biste koristili ako imate više Jomres instalacija i želite koristiti isti račun na cijelom računu sve web stranice i već ste se povezali s nama. Ako niste povezani s Jomres platformom, nije dovoljno unijeti svoje podatke ovdje. Umjesto toga, posjetite opciju izbornika Poveži se na alatnoj traci, u odjeljku Pomoć. Ako želite za testiranje plaćanja, na kartici Otklanjanje pogrešaka u Konfiguraciji web -mjesta postavite svoju web lokaciju od Proizvodnje do Razvoj. ");

	jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe tajni ključ uživo");
	jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Idite na Programeri> API ključevi na nadzornoj ploči Stripe kako biste pronašli svoje tajne ključeve. Sustav ih koristi za provjeru valjanosti podataka o rezervaciji vraćenih s obrasca za plaćanje i da su depoziti plaćeni prije spremanja rezervacije. . ');

	jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Tajni ključ za testiranje pruga");
	jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



	jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standardni tarifni način');

	jr_define('JOMRES_COM_A_ACCOMMODATES', 'Spavanje');
	jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Koliko ljudi može primiti ovaj objekt?');
	jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Broj gostiju u vašoj dnevnoj cijeni');
	jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Cijena za odrasle');

	jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Djeca');



	jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Po osobi po noći?');
	jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
	jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 -dnevni modifikator');
	jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Popust na dnevnu stopu ako je rezervacija na 7 ili više dana. Ostavite ovu postavku na nulu ako ne želite da se popust primjenjuje.');
	jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'Modifikator za 30 dana');
	jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Popust na dnevnu stopu ako je rezervacija 30 dana ili više. Ostavite ovo postavljeno na nulu ako ne želite primijeniti popust.');
	jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Odrasli');
	jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Cijena na temelju 2 odrasle osobe');
	jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Rezervacija snižena od');
	jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'do');
	jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'jer je rezervacija dulja od 7 dana.');
	jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'jer je rezervacija dulja od 30 dana.');


	jr_define('JOMRES_CITY_TAX_HEADING', 'Gradske takse');
	jr_define('JOMRES_CITY_TAX_VALUE', 'Vrijednost gradske pristojbe');
	jr_define('JOMRES_CITY_TAX_METHOD', 'Metoda obračuna poreza');

	jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Pojedinačna naknada');
	jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Po noći');
	jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Po gostu');
	jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Po gostu po noći');
	jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Postotak vrijednosti rezervacije');

	jr_define('JOMRES_CLEANING_FEE_HEADING', 'Naknada za čišćenje');
	jr_define('JOMRES_CLEANING_FEE_VALUE', 'Cijena naknade za čišćenje');


	jr_define('JOMRES_COMPATABILITY_MODE', 'Način konfiguracije svojstava svojstava Compatability?');
	jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Način konfiguracije svojstva kompatibilnosti prisiljava da se dogodi nekoliko stvari. U starijim verzijama Jomresa upravitelji nekretnina mogli su izabrati koji će se način uređivanja tarifa koristiti i razne druge postavke (od kojih neke mogu izgledati zbunjujuće) Omogućavanje konfiguracije kompatibilnosti prisiljava sva nova svojstva da koriste samo standardni način uređivanja tarifa, koji modelira funkcionalnost konfiguracije imovine booking.com s obzirom na cijene, podređene cijene itd. Preporučuje se da za instalacije koje su stvorene nakon 9.22. .0, ovu bi opciju trebalo postaviti na Da, ali za starije instalacije na vama je da odlučite trebate li nova svojstva automatski postaviti u način kompatibilnosti kada se stvore. ");

	jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Prihvaćate li djecu mlađu od 18 godina?');
	jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Postavite ovu opciju na Da ako dopuštate djeci. Ako da, tada ćete u izborniku Postavke imati opciju pod nazivom Dječja pravila gdje možete uređivati ​​postavke povezane s djecom.");

	jr_define('JOMRES_POLICIES_CHILDREN', 'Politike za djecu');

	jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'U kojoj su dobi djeca dopuštena?');


	jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Po djetetu, po noći');
	jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Po djetetu, po boravku');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Stope djece');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nova podređena stopa');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Uredi podređenu stopu');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Ovdje stvorite besplatne ili plaćene stope za djecu. Cijene će se primjenjivati ​​samo ako ste stvorili razine zauzetosti za vrste soba.');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Dob od');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Dob do');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'po noći ili po boravku?');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
	jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Ako je nula postavljena ili nije postavljena, djeca ove dobne skupine bit će besplatna.');
	jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Dob pri prijavi');
	jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Dob');

	jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Razine popunjenosti');
	jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maksimalan broj odraslih osoba');
	jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maksimalno djece');
	jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maksimalna popunjenost');

	jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Uredi razinu zauzetosti za:');
	jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Uredi razinu zauzetosti za ovu vrstu sobe. Ne uključuje goste koji spavaju na dječjim krevetićima (oni se dodaju stvaranjem dodatka)');
	jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Koliko treba naplatiti za svaku dodatnu odraslu osobu?');

	jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Dodatne odrasle osobe');


	jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Još niste konfigurirali podređene cijene.');
	jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Odmah postavite podređene stope');
	jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Konfigurirali ste svoju nekretninu tako da dopušta djeci, ali još niste postavili nijednu razinu zauzetosti za djecu.');
	jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Postavi razine zauzetosti');
	jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Svaki put kada uređujete sobu ili vrstu svoje nekretnine trebate provjeriti i ažurirati razinu zauzetosti vaše nekretnine/sobe jer to utječe na broj gostiju koji se mogu prihvatiti u obrascu za rezervaciju.');


	jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Odrasli');
	jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Children');


	jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Razina administratorskih opcija');
	jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres ima mnogo opcija izbornika i konfiguracije koje možete koristiti pri konfiguriranju svoje web stranice. Ogromnu većinu njih nikada nećete morati mijenjati pa su prema zadanim postavkama skrivene. Možete odabrati da se te opcije prikazuju postavljanjem razina administratorskih opcija. Osnovna razina pokazuje vam samo ono što vam je potrebno pri prvom postavljanju web mjesta. Zajednička razina prikazuje vam one opcije koje se najčešće mijenjaju, a Sve vam prikazuje sve moguće postavke i opcije izbornika u administratorskom području. ');
	jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Osnovno');
	jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Uobičajeno');
	jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Sve');

	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Možemo li prikupljati podatke o tome kako koristite Jomres?');
	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Željeli bismo prikupiti podatke o tome kako koristite Jomres. Neće se pohranjivati ​​podaci koji otkrivaju identitet, upotreba će biti anonimizirana i samo će nam pomoći da razumijemo kako ljudi koriste Jomres.');
	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Da, to je u redu');
	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Ne, ne slažem se');

	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Hoćete li primati rezervacije za više nekretnina?');
	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres se može koristiti za web stranice s jednim ili s više nekretnina. Ako ćete rezervirati samo jedan objekt, mnoge će opcije biti suvišne i potencijalno zbunjujuće. Ovu postavku možete promijeniti kasnije u Postavkama> Web lokacija Konfiguracija> kartica Funkcija portala. ');
	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Samo jedno svojstvo');
	jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Navest ću više od jednog objekta');

	jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Koju verziju Bootstrap okvira podržava vaš predložak/tema?");
	jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Svaka verzija Bootstrap okvira zahtijeva nešto drugačije html oznake. Jomres ima tri skupa Bootstrap kompatibilnih skupova predložaka, jedan za svaku verziju Bootstrapa. Morate osigurati da ga konfigurirate za korištenje odgovarajućeg skupa predložaka. tada ne ispisujete, kao što su izgled, načini i izbornici neće raditi ispravno. Ako kasnije odlučite koristiti predložak/temu s drugom verzijom Bootstrapa, možete promijeniti skup predloška Bootstrap koji bi Jomres trebao koristiti u Admin> Jomres> Postavke > Razno. <br/> <br/> Joomla 3 prema zadanim se postavkama distribuira s Bootstrapom 2, Joomla 4 će koristiti Bootstrap 5. Predložak Jomres Leohtian (Joomla) i tema (Wordpress) koriste Bootstrap 3. Mogu biti različiti predlošci/teme distribuiraju s vlastitim Bootstrap datotekama pa se, ako ste u nedoumici, obratite programeru vašeg predloška/teme. ");
	jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
	jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
	jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
	jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
	jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Skinuti decimale s izlaznih cijena?');

	jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Primijeniti grupu prema popravku?');
	jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Neke instalacije mysqla mogu imati problema s Jomres upitima na stranici Svojstva popisa, Popis gostiju i Popis faktura. Ako te stranice kažu da prikazuju rezultate X od Y, ali ništa se ne pojavljuje na popisu, tada postavite ova opcija na Da može riješiti problem. Neće se dogoditi ako ste na zajedničkom hostingu, a usluga hostinga ne dopušta vašem mysql korisniku da izda naredbu "SET GLOBAL sql_mode =". ');
	jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Ovo je svojstvo kanala, ne može se administrirati lokalno, posjetite stranicu okvira za upravljanje kanalom kako biste pronašli vezu za udaljenu administraciju svojstva');
	jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Bez pokretanja u temi");

	jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Veze društvenih medija');
	jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Ovdje stavite nazive računa na društvenim mrežama, na primjer "jomres", a ne cijeli url');

	jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Popis jezika koje vaša organizacija govori zarezima odvojenih');
	jr_define('JOMRES_ORGANISATION_LOGO_URL', 'URL logotipa vaše organizacije');

	jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres ažuriran');
	jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Dostupna je nova verzija Jomresa. Morate ažurirati prije nego što nastavite koristiti Jomres jer ažuriranja poboljšavaju funkcionalnost i osiguravaju da vaša instalacija ostaje sigurna.');
	jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Ažuriraj Jomres sada');

	jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Ažuriranja dodataka');
	jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Postoje nove verzije dodataka dostupne u upravitelju dodataka. Morate ažurirati sve dodatke prije nego što nastavite koristiti Jomres jer ažuriranja poboljšavaju funkcionalnost i osiguravaju da vaša instalacija ostaje sigurna.');
	jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Dodaci za ažuriranje');

	jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Ako vaša licenca više nije važeća, možete dobiti novi licencni ključ s naše web stranice.');

	jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Ažuriraj dodatke');
	jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Nabavi novi ključ');
	jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Spremi novi ključ');

	jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Slike vrste svojstva");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "Trebate pomoć pri rezervaciji?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Nazovite naš tim za korisničku podršku na broj ispod kako biste razgovarali s jednim od naših predstavnika koji će vam pomoći oko svih vaših potreba za odmor.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "Zašto rezervirati kod nas?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "Nudimo najbolje cijene rezervacija");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "Imamo nekretnine po najpovoljnijim cijenama trenutno na tržištu.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "Bez naknada za rezervaciju. Uštedite!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "Veliki izbor nekretnina");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " svojstva");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " recenzije gostiju");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "Uvijek smo tu");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Nazovite nas ili nas e-poštom, bilo kada");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Dobijte 24-satnu podršku prije, tijekom i nakon putovanja");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Društveni mediji");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Pronađite nas na društvenim mrežama");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Izvanredan");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Izuzetno");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Nevjerojatno");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Izvrsno");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastično");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Vrlo dobro");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Dobro");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Novi unos");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Sniženo");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Kamo želite ići?');
	jr_define('DATA_SOURCES_TITLE', "Osvježi izvore podataka");
	jr_define('DATA_SOURCES_TITLE_INFO', "Izvori podataka osvježeni. Izvore podataka koriste polja za samodovršavanje u widgetu za pretraživanje i obično se ažuriraju automatski, međutim ova stranica prisiljava da se podaci ažuriraju ručno ako je potrebno.");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Da biste poslali zahtjev za tokenom, pošaljite zahtjev na ovaj url");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Skripta svojstva glavnog pogleda");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Uid svojstva svojstva koje treba pogledati");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Zadani predložak je property_details.html, s ovim argumentom možete definirati drugi predložak pojedinosti svojstva za prikaz.");

	jr_define('JOMRES_UPDATES_TITLE', 'Jomres ažuriranja');
	jr_define('JOMRES_UPDATES_INFO', "Ova stranica može preuzeti i instalirati najnoviju verziju Jomresa za vas. Ona koristi vlastitu funkcionalnost, a ne funkcionalnost CMS-a domaćina, stoga ako dođe do problema tijekom ažuriranja CMS-a hosta možete koristiti ovu stranicu za prisiliti ponovnu instalaciju najnovije verzije Jomresa.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Upravitelji nekretninama mogu koristiti način uređivanja u prednjem dijelu za prilagodbu nizova za svako svojstvo, međutim ovo može funkcionirati samo ako je vaša postavka stalne veze u WordPressu postavljena na Plain (http://www.domain.com/?p=123). Nakon što to učinite, korisnici će moći prilagoditi nizove, kao što su nazivi prostorija i druge oznake, koje su specifične za jedinstvena svojstva. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Način uređivanja oznaka');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Ova značajka se koristi za promjenu oznaka stavki, obično na različite jezike.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Način uređivanja omogućuje vam da preimenujete oznake koje su jedinstvene za pojedinačna svojstva. Kada koristite način uređivanja za preimenovanje oznake, promjena će se pojaviti samo na tom popisu svojstava. Na primjer, na jednom svojstvu koje biste možda željeli koristiti riječ "Cijene", a na drugoj riječ "Cijene". Ne mogu se mijenjati sve oznake, na primjer nazivi vrsta soba su oznake za cijelu web-lokaciju, tako da se ne mogu mijenjati, ali obično sve što je jedinstveno za pojedinačnu nekretninu može se promijeniti.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Ako web-mjesto podržava više jezika, dok koristite jedan jezik, možete stvoriti stavku koja je jedinstvena za pojedinačna svojstva. Kada zatim promijenite svoj aktivni jezik, možete koristiti način uređivanja za preimenovanje te oznake, unos prikladnog prijevoda na trenutnom jeziku. Možete nastaviti mijenjati aktivni jezik da biste unijeli prikladan prijevod za tu oznaku za svaki jezik koji stranica podržava.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Prekidač načina za uređivanje oznaka');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'Na ovoj snimci zaslona vidimo prekidač načina uređivanja. Način uređivanja je ISKLJUČEN i oznake se pojavljuju kao normalno: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Omogućen način za uređivanje oznaka');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'Na ovoj snimci zaslona vidimo da su oznake koje možete preimenovati označene, dok ste u načinu za uređivanje:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Odaberite stavku koju želite promijeniti');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Kada je oznaka odabrana, pojavljuje se skočni prozor:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Promijeni oznaku');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Upotrijebite mali obrazac za promjenu oznake. Kliknite kvačicu za završetak ili kliknite X za odustajanje od uređivanja:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Oznaka promijenjena');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Nakon što spremite promjenu, oznaka se ažurira na stranici. Sada možete onemogućiti način uređivanja:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Prijevodi');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'Na ovoj stranici možete prevesti oznake s jednog jezika na drugi. Kada posjetite stranicu vidjet ćete nizove koje ste već kreirali i njihovu vrijednost na jeziku koji trenutno koristite. Na vrhu postavite ciljni jezik, zatim za oznake koje želite prevesti, kliknite na oznaku i skočni prozor će vam omogućiti da unesete svoj novi prijevod. Za duže retke teksta možete zalijepiti tekst iz drugog izvora. Imajte na umu da će svaki HTML biti uklonjen .<br/>
Možete ostaviti ciljni jezik postavljen na vaš trenutni jezik i koristiti ovu stranicu za preimenovanje stavki ovdje, umjesto da posjećujete njihove pojedinačne stranice.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Ciljni jezik');

	jr_define('API_CLIENTS_INFO', 'API klijenti su parovi ključeva ID klijenta/tajni koji omogućuju udaljenim sustavima korištenje značajki API-ja za koje im date dopuštenja za korištenje. Na ovoj stranici možete stvoriti onoliko parova ključeva klijent/tajni koliko vam je potrebno, svaki s bilo koja kombinacija dopuštenja koja vam je potrebna.');
	jr_define('CLIENT_TOKEN', 'Pristupni token');
	jr_define('CLIENT_TOKEN_INFO', "Pristupni tokeni mogu se zatražiti pomoću ID-a klijenta i tajne. Neki klijenti možda već imaju kreiran pristupni token, u kojem slučaju možete koristiti ovaj pristupni token. Ako vjerujete da je token možda kompromitirano ili ga samo želite promijeniti, možete isteći klijentovim tokenima. Svi tokeni povezani s parom klijent/tajna bit će istekli.");
	jr_define('DELETE_TOKEN', 'Tokeni isteka');

	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Odaberite svoju valutu" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Odaberite svoj jezik" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER',"Registracija" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "Prijava");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "Navedite svoju nekretninu");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "Prvo se morate registrirati i prijaviti");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"Prikaži filtere");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"Sakrij filtere");