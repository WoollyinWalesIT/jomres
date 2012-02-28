<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
//German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define('_JOMRES_COM_MR_QUICKRESDESC','Brza rezervacija');
define('_JOMRES_COM_MR_SHOWPROFILES','Prikaži profile');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Opšte konfiguracije');
define('_JOMRES_COM_MR_BACK','Nazad');
define('_JOMRES_COM_MR_YES','Da');
define('_JOMRES_COM_MR_NO','Ne');
define('_JOMRES_COM_MR_NEWTARIFF','Novo');
define('_JOMRES_COM_MR_NEWPROPERTY','Novi objekat');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nove opcije objekta');
define('_JOMRES_COM_MR_NEWGUEST','Novi gost');
define('_JOMRES_COM_MR_SAVE','Sačuvaj');
// View bookings
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Ime');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Dolazak');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Odlazak');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Dodeli korisniku administratorska prava');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Ime');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Korisničko ime');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Upravo autorizovan');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Osnovni objekat');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Promeni ovo');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Pristupni nivo');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Korisnik izmenjen');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcija');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Menadžer objekta');
// Edit bookings
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Sve rezervacije');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nove rezervacije');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Izmeni rezervacije');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Dolazak/Odlazak');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gost');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Soba');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Plaćanje');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Ime');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Prezime');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Specijalni zahtevi');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Neki specijalni zahtjevi mogu zahtevati extra plaćanja.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Poništi rezervaciju');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Broj kuće ili naziv kuće');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ime');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Grad');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Poštanski broj');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tel');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilni');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Ne možete poništiti ovu rezervaciju jer je gost već prijavljen');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Depozit nije plaćen');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potvrdi poništenje');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervacija poništena');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dana do dolaska');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Tip rezervacije');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Crno');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcija');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Ime sobe');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Soba');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Sprat');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Aktivirati nedozvoljeni pristup ?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max osoba');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Tip sobe');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Opis tipa sobe');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista opcija sobe');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Depozit placen');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Unesite depozit');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Ukupno za naplatu');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Oznaka depozita');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Rezervacija');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Depozit');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Depozit sačuvan');
// Edit Language
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Nase sobe');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Objekat');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Tip sobe');
// Display guest form
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Izmenite podatke');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Ime');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Prezime');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Kuca');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Grad');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postanski broj');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Tel');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobilni');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Broj kreditne kartice');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Kartica izdata');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Kartica istice dana');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Broj izdavanja');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Ime na kartici');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Odaberite');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Broj dana');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Broj gostiju');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
// Rooms tab
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Prikazi podešavanja soba i objekata');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Sobe');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Opcije soba');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Tipovi soba');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Objekat');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Opcije objekta');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Sobe');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Tip');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Ime');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Broj');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Sprat');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Onemoguciti pristup?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maximum osoba');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Opcije');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Soba dodata');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Izmeni opcije');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Opcije sobe');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Opis opcija');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Opcija sobe dodata');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Opcije sobe izmenjene');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Tip sobe');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Tip sobe - skraćenica');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Tip sobe - opis');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Tip sobe dodat');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Tip sobe izmenjen');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Izmeni detalje');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Ime');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Grad');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Regija');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Zemlja');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Poštanski broj');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Web sajt');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Opcije');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Objekat dodat');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Objekat izmenjen');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Opcije objekta');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Opcije objekta - skraćenica');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Opcije objekta - puni opis');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Opcija objekta je dodata');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Opcija objekta je izmenjena');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarife');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tarifa - naziv');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Važi od');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Važi do');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Tarifa za noć');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minimum dana');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maximum dana');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minimum osoba');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maximum osoba');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Tip sobe');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorisite PPPN');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Dozvoli vikende');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarifa dodata');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarifa izmenjena');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Izmeni detalj');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Dupliraj detalj');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarifa izbrisana');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Izmeni tarifu');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Praznici');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervacija sacuvana');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Prijavite gosta');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Odjavite gosta');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Izlistaj rezervacije');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NOVE rezervacije');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Tabla');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Gosti - admin');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Objekti - admin');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Provera dostupnosti');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Potvrdite vase podatke');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Ime');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Prezime');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Broj kuće');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Grad');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Poštanski broj (PAK)');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tel');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilni');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Nema soba koje sadrže sve parametre koje ste vi tražili');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Hvala vam što ste odabrali nas i nadamo se da ćete uživati u boravku.<br><br> <b>Ovo je samo preliminarna rezervacija, i neće biti potvrdjena dok ne primite potvrdno pismo.</center>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezervacije za objekat: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezervacije za sobe: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Dolazak: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Odlazak: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Ime: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Tel: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobilni: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Vrednost ugovora je: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Prijavite gosta ');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Odaberite gosta ');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gost je prijavljen ');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Nema gostiju za dolazak danas');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Gosti za odjavu ');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Nema gostiju za odjavu danas');
// Config panel
define('_JOMRES_COM_A_SUPPLIMENTS','Suplementi');
define('_JOMRES_COM_A_TARIFFS','Tarife & Valuta');
define('_JOMRES_COM_A_DISCOUNTS','Popust');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload fajlova');
define('_JOMRES_COM_A_CURRENT_SETTINGS','Trenutno podesavanje');
define('_JOMRES_COM_A_EXPLANATION','Objasnjenje');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Suplimenti za jednu osobu');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','proverite da li je postavljeno na Da ako zelite da vrsite naplatu suplimenata za jednu osobu');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Troškovi dodataka po osobi:');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Depozit u procentima?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Da li depozit mora biti procenat cele rezervacije? Ako ne želite, onda je depozit definisane veličine');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Veličina depozita');
define('_JOMRES_COM_A_TARIFFS_PER','Po osobi, po noćenju');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Odaberite Da ako želite da naplaćujete po osobi po noćenju. Ako ne želite, troškovi će biti izračunati po osnovi po sobi po noćenju');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Velicina fajla');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. velicina slike u Kilobyte');
define('_JOMRES_FRONT_MR_BOOKED','Rezervisano');
define('_JOMRES_COM_CONFIRMATION_TITLE','Potvrdno pismo');
define('_JOMRES_COM_CONFIRMATION_DEAR','Postovani ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cijena per night - per room ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detalji rezervacije');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Hvala vam na rezervaciji');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. U nastavku se nalaze detalji vaše rezervacije. Molim vas proverite da li su podaci ispravni i kontaktirajte nas ako postoji greška.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Vaša soba će biti sačuvana do vašeg prijavljivanja, prijavljivanja su nakon 2 sata poslepodne.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Očekujemo vas dolazak ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Želimo vam prijatan boravak.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Sada vam moramo skrenuti paznju na sledeće.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Podsećamo vas da je rezervacija legalni ugovor, pa ako ste zbog nekog razloga poništili rezervaciju ili skratili vaš boravak moraćete i dalje platiti celi iznos vašeg ugovora.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Nije dozvoljen ugovor iz kojeg se uklanjaju obroci ili smanjuju dani za naplatu za koje vi niste boravili u sobi. Zbog ovoga, preporučujemo vam da iskoristite osiguranje za vreme odmora.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Poništenje i smanjenje naplate</i> Ako otkažete vaš odmor vaše otkazivanje mora biti potvrdjeno pismeno. Troškovi poništenja su sledećci:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dana ili više');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Samo depozit.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dana');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% ugovora.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Do 14 dana');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% ugovora.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','PDV je uključen u sve tarife.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Štampaj garantno pismo');
define('_JOMRES_COM_INVOICE_TITLE','Štampaj predračun');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Broj nocenja: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Ugovor je potvrdjen od: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cijena po nocenju: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Hvala vam na');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Nadamo se da cemo se uskoro vidjeti ponovo.');
define('_JOMRES_COM_INVOICE_PRINT','Stampaj predracun');
define('_JOMRES_COM_ADDSERVICE_TITLE','Dodaj uslugu na racun');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis usluge');
define('_JOMRES_COM_ADDSERVICE_VALUE','Cijena usluge');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Ostali elementi koji su naplaceni');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Ostali naplaceni elementi, total vrijednost: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Elementi dodati na racun');
define('_JOMRES_UPLOAD_IMAGE','Upload slike');
define('_JOMRES_FILE_UPLOAD','File Upload-ovan');
define('_JOMRES_FILE_ERROR_TYPE','Dozvoljeno vam je upload-ujete tipove:\n');
define('_JOMRES_FILE_ERROR_EMPTY','Molim vas odaberite file prije upload-ovanja');
define('_JOMRES_FILE_ERROR_NAME','Ime fajla mora sadrzati samo alfanumericke karaktere i ne smije sadrzati praznine.');
define('_JOMRES_FILE_ERROR_SIZE','Velicina fajla je presla maximum koju Administrator dozvoljava.');
define('_JOMRES_FILE_NOT_UPLOADED','Fajl NIJE uploadovan.');
define('_JOMRES_FILE_UPDATED','Vas fajl je uploadovan.');
define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Kalendar fajl jezik');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Oadberite fajl vaseg jezika koji zelite da koristite u Javascript kalendar. Neki od kalendara mogu imati pogresne podatke, pogledajte http://sourceforge.net/tracker/?group_id=75569&atid=544287 za vise informacija');
define('_JOMRES_COM_A_CALENDARCSS','JS Kalendar CSS fajl');
define('_JOMRES_COM_A_CALENDARCSS_DESC','Odaberite CSS fajl koji cete koristiti u Javascript kalendaru');
define('_JOMRES_COM_A_ODDS','Misc.');
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
define('_JOMRES_FILE_DELETE','Izbrisi ovu sliku');
define('_JOMRES_FILE_DELETED','Fajl izbrisan');
define('_JOMRES_COM_MR_ROOM_DELETE','Izbrisi');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nemoguce ukloniti ovu sobu, postoje rezervacije za nju. Ponistite rezervacije pa pokusajte ponovo.');
define('_JOMRES_COM_MR_ROOM_DELETED','Soba je izbrisana');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Izbrisite opcije sobe');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nemoguce ukloniti opciju ove sobe, dodijeljena je nekim sobama. Uklonite tu opciju sa tih soba i pokusajte ponovo.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Opcija sobe izbrisana');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Izbrisi opciju objekta');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nemoguce ukloniti opciju ovog objekta, dodijeljen je nekom objektu. Uklonite tu opciju sa tih objekata i pokusajte ponovo.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Opcija objekta je izbrisana');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Izbrisi tip sobe');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Nemoguce uklonite tip sobe, dodijeljen je nekoj sobi. Promijenite tip sobe i ponovo pokusajte.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Nemoguce uklonite tip sobe, dodijeljena je tarifa. Promijenite tarifu te sobe i ponovo pokusajte.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Tip sobe izbrisan');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Izbrisi objekat');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Objekat izbrisan');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nemate prava da izbrisete ovaj objekat.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Sirina velike slike');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Mapa');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis objekta');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Vreme prijavljivanja');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Prostor aktivnosti');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Uputstva za vozače');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Aerodromi');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Ostali transporti');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Polisom i obrazloženjima');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresa');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Posetioci mogu rezervisati online');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Postavite opciju na Da ako zelite da posjetioci rezervisu sobe online.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervacije su za fiksni period');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Postavite opciju na Da, i rezervacije ce se uzimati za fiksni period. Ako je postavljeno na Ne, onda vam "definisani dan za dolazak" nece biti postavljen na Da (ukoliko zelite da prisilite goste da dodju na odredjeni dan) u suprotnom necete imati dovoljno linkova koji su slobodni u kalendaru.');
define('_JOMRES_COM_A_FIXEDPERIOD','Period rezervacije: ');
define('_JOMRES_COM_A_BOOKING','Rezervisane sobe');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximalni period, primjer 3x 7 rezervacionih perioda = 21 dan');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Da li je ovo apartman/letnjikovac/vila?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Vi izdajete cijeli objekat, radije nego sobe u tom objektu posebno. Ako je ovo vas slucaj, onda vi imate registrovanu samo jednu sobu za svaki objekat posebno.');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Prikaži rezervaciju');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potvrdi rezervaciju');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Ponedeljak');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Utorak');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Sreda');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Četvrtak');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Petak');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Subota');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Nedelja');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Pon');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Uto');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Sre');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Čet');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pet');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sub');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Ned');
define('_JOMRES_COM_A_AVLCAL','Dostupnost');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Boja fonta za trenutni datum');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Boja fonta za dane u prikazanom mjesecu ');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Boja fonta za dane kopji nijesu u prikazanom mjesecu');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Boja polja za dane kada je objekat/soba dostupna');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Boja polja za dane koji nijesu prikazani u mjesecu');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Boja polja za zauzete dane');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Boja polja za uslovno rezervisane sobe (rezervacije za koje nije uzet depozit)');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Boja polja za prosle dane');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Zauzeto/Nije dostupno');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Dostupno za rezervacije');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Uslovna rezervacija');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Prijavljeni dan dolaska');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Samo za sajtove koji koriste fiksirani period rezervacije. Odaberite dan kada gosti moraju doci.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fiksirani dan dolaska');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Dani ostanka');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Prikazati kalendar dostupnosti?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Postavite ovu opciju na Da ako zelite da prikazete kalendar dostupnosti');
define('_JOMRES_FRONT_AVAILABILITY','Dostupnost');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Kliknite na slobodni datum ako zelite formu za rezervaciju.');
define('_JOMRES_FRONT_BLACKBOOKING','Crne rezervacije');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nove crne rezervacije');
define('_JOMRES_FRONT_DELETEGUEST','Izbrisite gosta');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gost izbrisan');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Nemoguce izbrisati gosta, ima rezervacije na svoje ime. Ponistite rezervacije pokusajte ponovo.');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Cijena odredjene sobe: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Zdravo');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Zahvaljujemo vam se sto ste odradili rezervaciju sa');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Vasa rezervacija sadrzi sledece:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Ako imate bilo koje pitanje u vezi sa ovom rezervacijom ili bilo kojim drugim servisom, onda molim vas ne oklijevajte vec nam posaljite email.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nas broj telefona je');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Mozete nas kontaktirati na email');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Pusac');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Bilo koji");
define('_JOMRES_COM_CALENDAROUTPUT','Kalendar format prikaza');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Ovo dozvoljava korisniku da promijeni format prikaza datuma u Jomres');
define('_JOMRES_COM_CALENDARINPUT','Kalendar format unosa');
define('_JOMRES_COM_CALENDARINPUT_DESC','Ovo dozvoljava korisniku da promijeni format unosa datuma u Jomres.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Fiksirani period rezervacija dozvoljava kratke prekide');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Duzina kratkog prekida');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Objavljeno');
define('_JOMRES_COM_A_PAYPAL','Paypal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Vrijeme');
define('_JOMRES_MR_AUDIT_LISTING_USER','Korisnik (username)');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operacija');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Prikazi detalje');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter na datum');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter na username');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter na operaciju');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Dolazak se ocekuje');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Dolazak danas');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Odredjeni Rezident');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Odlasci danas');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Rok za odlazak istekao');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Nije stigao');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Nepoznati korisnik');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Napravljena soba');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Izmenjena soba');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Izbrisana soba');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Napravljena opcija sobe');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Izmenjena opcija sobe');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Izbrisana opcija sobe');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Uneseni tip sobe');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Izmenjen tip sobe');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Izbrisan tip sobe');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Napravljen objekat ');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Izmenjen objekat');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Izbrisan objekat');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Napravljena opcija objekta');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Izmenjena opcija objekta');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Izbrisana opcija objekta');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Izmenjena podešavanja objekta');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Objavljeni objekti');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Napravljene tarife');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Izmenjene tarife');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Izbrisane tarife');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Dodata naplata servisa');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Prijavljan gost');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Odjavljen gost');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Unesen depozit');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Napravljen gost');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Izmenjen gost');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Izbrisan gost');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Rezervisana soba');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Kreirano extra');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Izmenjeno extra');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Izbrisano extra');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Objavljeno extra.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Unesena crna rezervacija.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Izbrisana crna rezervacija.');
define('_JOMRES_COM_MR_EXTRA_TITLE','Extra');
define('_JOMRES_COM_MR_EXTRA_DESC','Opis');
define('_JOMRES_COM_MR_EXTRA_NAME','Ime');
define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra izmenjeno');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Izmeni opciju');
define('_JOMRES_COM_MR_EXTRA_DELETED','Extra izbrisan');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Extra administracija');
define('_JOMRES_COM_A_EXTRAS','Prikazi extra za vrijeme rezervacije?');
define('_JOMRES_COM_A_EXTRAS_DESC','Postavi opciju na Da ako zelite da prikazete gostu extra opcije');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Opciono extra.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Crna rezervacija startni datum');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Datum nastavka servisa');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Crne rezervacije');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Postoji greska prilikom rezervacije ovih soba, jedna ili vise soba koje ste odabrali nije slobodna.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Sobe ukljucene u crnu rezervaciju');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Prikazi crne rezervacije');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nema crnih rezervacija');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Broj zvezdica');
define('_JOMRES_COM_A_SMOKING','Prikazati opciju za pusace?');
define('_JOMRES_COM_A_SMOKING_DESC','Postaviti opciju na Da ako zelite da je prikazete.');
define('_JOMRES_COM_A_RESET','Ponistiti');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervacija ponistena');
define('_JOMRES_FRONT_MR_SEARCH_HERE','Trazi ovdje za:');
define('_JOMRES_COM_A_SMOKING_OPTION','Default opcija za pusace');
define('_JOMRES_COM_A_CURRENCYSYMBOL','Simbol valute');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','PR &amp;pound&#59; Morate koristiti HTML code za trazeni simbol. Za listu ovih kodova posjetite <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
define('_JOMRES_COM_A_CURRENCYCODE','Kod valute');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Pr GBP. Ovo se koristi u email-u musteriji koji treba da potvrdi svoju rezervaciju.');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Detalji');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ogranici rezervacije unaprijed?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Postavite opciju na Da ako zelite da ogranicite rezervacije (koristite sledece polje da postavite ogranicenje u danima). Ako postavite opciju na Da i ako gost pokusa da rezervise vise od n dana unaprijed onda ce njegov dan dolaska biti postavljen za danas');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Dani za rezervaciju unaprijed ograniceni na:');
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>OBAVJESTENJE: Ne predlaze se da postavite obje opcije na Da, trebate da koristite jednu od dvije opcije za obracun vase taxe. </FONT>');
define('_JOMRES_COM_FRONT_ROOMTAX','Taksa');
define('_JOMRES_COM_A_ROOMTAX','Taksa Sobe');
define('_JOMRES_COM_A_ROOMTAX_DESC','Dizajnirano za americki standard. Sadrzi takse za sobe koje se naplacuju gostu. Mozete naplacivati kombinaciju ili fiksiranu vrijednost. Oe takse se odnose samo na sobe.');
define('_JOMRES_COM_A_ROOMTAX_FIXED','Fiksna vrijednost takse');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Procenat takse');
define('_JOMRES_COM_A_EUROTAX','Taksa');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Procenat takse');
define('_JOMRES_MR_AUDIT_ARCHIVE','Sacuvaj sve zapise');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' zapisi sacuvani');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer je sacuvao zapise');
define('_JOMRES_FRONT_TARIFFS','Naše Tarife');
define('_JOMRES_FRONT_TARIFFS_TITLE','Ime Tarife');
define('_JOMRES_FRONT_TARIFFS_DESC','Opis Tarife');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Tip sobe');
define('_JOMRES_FRONT_TARIFFS_STARTS','Dostupna od');
define('_JOMRES_FRONT_TARIFFS_ENDS','Dostupna do');
define('_JOMRES_FRONT_TARIFFS_PPPN','Po osobi po noćenju');
define('_JOMRES_FRONT_TARIFFS_PN','Po noćenju');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Ne uključujuci vikende');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dana');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum dana');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min osoba');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max osoba');
define('_JOMRES_FRONT_PREVIEW','Prikaz');
define('_JOMRES_COM_A_EDITINGMODEON','Izmene ukljucene?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Tekući tekst');
define('_JOMRES_COM_A_EDITING_NEWTEXT','Novi tekst');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Tekst je izmenjen.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Izmeni jezik');
define('_JOMRES_COM_A_AUDITING_SHOWING','Broj nearhiviranih zapisa: ');
define('_JOMRES_FRONT_PTYPE','Tip objekta');
define('_JOMRES_COM_PTYPES_LIST_TITLE','Izlistaj tipove objekata');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Izmijeni tipove objekata');
define('_JOMRES_COM_PTYPES_PTYPE','Tip objekta');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Opis tipa objekta');
define('_JOMRES_COM_PTYPES_SAVED','Tip objekta sacuvan');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Nemoguce izbrisati tip objekta. Tip objekta je dodijeljen jednom ili vise objekata, molim vas promijenite to i ponovo pokusajte');
define('_JOMRES_COM_PTYPES_DELETED','Tipovi objekata izbrisani');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Podsjetnik za placanje');
define('_JOMRES_EXTRAS_NOEXTRAS','Nema extra servisa da se dodaju na racunu');
define('_JOMRES_COM_CHARGING_DEPOSIT','Depozit');
define('_JOMRES_COM_CHARGING_FULLAMT','Puni iznos');
define('_JOMRES_COM_CHARGING_CONFIG','Iznos naplacen prilikom rezervacije');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Koristite ovu opciju da biste odlucili sta treba da naplacujete prilikom rezervacije. Odaberite depozit ako naplacujete depozit, ili puni iznos.');
define('_JOMRES_COM_MONTHSTOSHOW','Mjeseci za prikaz');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','U dostupnosti sobe, koliko mjeseci na kalendaru ce se prikazivati?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Potpisano na polovini od ');
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
define('_JOMRES_COM_A_CANCEL','Ponisti');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Molim vas odaberite sobu ili sobe koje ne zelite da budu u upotrebi, i potrebne datume. <br>Ako soba nema oznaku, onda ne moze biti koriscena za crne rezervacije dok neka od rezervacija ne bude otkazana ili zavrsena.<br/> Kada ste odabrali trazene datume, kliknite na plavo dugme "apply" da proverite dostupnost sobe. ');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Izgleda da ste izlogovani zbog neaktivnosti</b> Molim vas logujte se ponovo.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Razlog');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Koristi payment gateway?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Postavi ovu opciju na Daako zelite da koristite online payment gateways. <b>Obavjestenje:</b>Ovo ne iskljucuje depozit izracunavanje prilikom rezervacije. Da isklucite ovo vi mozete izmeniti template koji prikazuju sobe i uklanjuju elemente koji se odnose na depozit.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Molim vas odaberite nacin placanja.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway ukljucen?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Izmenjeno podesavanje plugin-a');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Uneseno podesavanje plugin-a');
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
define('_JOMRES_COM_A_GALLERYLINK','External link');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Prikazana kreditna kartica');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Izmenjena kreditna kartica');
define('_JOMRES_MR_CREDITCARD_EDIT','Izmeni kreditnu karticu');
define('_JOMRES_COM_A_EDITICON','Izmeni velicinu ikonice');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Unos slike objekta');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Slike su vec u direktorijumu');
define('_JOMRES_COM_A_SLIDESHOWS','Slajd-šou');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Prikazi link za slideshow?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Prikazi slideshow u okviru?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail visina');
define('_JOMRES_FRONT_SLIDESHOW','Slajd-šou');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />
Izvinite, nema slika za ovaj objekat. Molim vas upload-ujte slike koristeći upload opciju ako želite da koristite slajd-šou.');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Prikazi link za tarife?');
define('_JOMRES_COM_A_POPUPSALLOWED','Popup dozvoljen?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Ako je postavljeno na Ne, linkovi koji su se otvarali kao pop-up sada ce se otvarati u istom prozoru. EXPERIMENTAL! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow slike');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Koristite ovu formu ako zelite da upload-ujete vise slika objekta.<br/><b>Obavjestenje</b> slike sa istim imenima ce biti prekopirane. Ovim nacinom ne mozete unijeti slike za sobe ili header sliku objekta, to cete morati uraditi iz Property Admin sekcije.<br/>
<b>Obavjestenje</b> Slike uploadovane ovdje ce biti zapisane u /images/stories/jomres/*property_uid* folder.');
define('_JOMRES_A_TABS_MISC','Misc');
define('_JOMRES_A','Sajt konfiguracija');
define('_JOMRES_A_GLOBALPFEATURES','Koristi global opcije objekta');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Postavite ovu opciju na Da ako zelite da svi objekti koriste samo opcije objekta 
defined by the webmaster.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Da biste dodijeli sliku ovoj opciji prvo morate upload-ovati slike vasih opcija objekta u /images/stories/jomres/pfeatures/ folder. ');
define('_JOMRES_A_ICON','Ikona');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Odaberite plugin za pretragu koji zelite da koristite.');
define('_JOMRES_FRONT_NORESULTS','<b>Zao nam je, vaša pretraga nije dala rezultate. Molimo vas, izmenite pretragu i pokušajte ponovo.</b>');
define('_JOMRES_AREYOUSURE','Da li ste sigurni da to zelite da uradite?');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezervišite sobu');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezervisi objekat');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Sigurnosni broj');
//v1.4c
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Prikazati tarife?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresa');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Cene i detalji');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknite za sobe i dostupnost');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Prikazati informacije o tarifama');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Prikazati informaciju o Adresi ispod ovog linka');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Prikazati detaljnu informaciju o objektu ispod ovog linka');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Prikazati sobe i dostupnost ispod ovog linka');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Prikazati informacije o tarifama ispod ovog linka');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flat rate tarife');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Srednje');
define('_JOMRES_COM_A_TARIFFS_MODEL','Odaberite model tarifiranja koji zelite da koristite');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Imate dva izbora za metod kalkulacije tarifa. Prvi, 'flat rate' metod dozvoljava vam da ponudi razne tarife gostima i cijena tokom cijelog boravka je ista. Ovo je korisno ako zelite da ponudite vise razlicitih tarifa za isti dan, pr. Spavanje i dorucak tarifa i B&B i Tarifa vecere. Odaberite 'srednje' tarife ako zelite da podesite vase cijene zavisno od datuma. Jomres ce naci sve tarife za svaki dan u rezervacijama, sastaviti zajedno i vratiti srednju vrijednost za dati period");
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Prikazati datum odlaska?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Postavite ovu opciju na Ne ako ne zelite da bude prikazano polje sa datumom odlaska. Ovo koristite samo ako ste sigurni sta radite, datum odlaska u rezervacijama ce pisati dan nakon dolaska.");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','Limit opisa');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Ovo ogranicava broj karaktera prikazanih u listi objekata.");
// v1.4g+
define('_JOMRES_COM_A_DATEFORMATSTYLE','Koristite date() format?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Postavite ovu opciju na Da ako zelite da vam se datum ispisuje kao date() (Pogledajte <a href="http://www.php.net/manual/en/function.date.php">ovdje</a>). Postavite na Ne ako zelite da koristite strftime() formatiranje (pogledajte <a href="http://www.php.net/manual/en/function.strftime.php">ovdje</a> pr. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Kliknite da biste objavili');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Kliknite da ne objavljujete');
define('_JOMRES_A_GLOBALROOMTYPES','Odaberite glavni tip sobe');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Postavite ovu opciju na Da ako zelite da postavite koriscenje ovog tipa sobe na svim objektima 
defined by the webmaster. Morate postaviti na Da ako zelite da dozvolite pretragu soba po tipu sobe.');
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Da biste dodijelili sliku ovom tipu sobe morate prvo uploadovati sliku u /images/stories/jomres/rmtypes/ folder. ');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input greska - boja pozadine');
define('_JOMRES_COM_CONFIGCOUNTRIES','Default zemlja u formi za rezervaciju');
define('_JOMRES_JAVASCRIPT_','Polja označena crvenom zvezdom su obavezna.');
define('_JOMRES_COM_SELFREGISTRATION','Korisnici mogu da registruju svoje objekte?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Postavite ovu opciju na Da ako zelite da korisnici mogu registrovati svoje objekte bez dozvole administratora sajta.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Molim vas odredite zemlju i region gdje se nalazi vas objekat.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Molim vas popunite detalje o vasem objektu.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Elementi označeni crvenom zvezdicom su obavezni.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Kreirani objekti');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Zao nam je, ne mozete kreirati objekat na ovom sistemu. Morate biti logovani, registrovani korisnik, i ne smijete imati vec kreirani objekat.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Kreirani objekti: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Za korisnika: ');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Prikazati kalendar od početka godine?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Kalendar dostupnosti prikazuje od pocetka tekuce godine.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Broj dostupnih soba');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Nazad na detalje objekta');
define('_JOMRES_FRONT_ROOMTYPES','Tipovi soba');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limit nasumične pretrage');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Prikaži google konverxiju valuta link u listu tarifa?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Konvertor valuta:');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Dozvolite korisnicima da vrše izmjene koristeci html editore?');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Koristite ovu formu da biste prijavili rezervaciju. Kursor misa preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Koristite ovu formu da biste prijavili rezervaciju. Kursor miša preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
define('_JOMRES_AJAXFORM_PARTICULARS','Opis knjiženja rezervacije');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Odaberite detalje vaših zahteva za rezervaciju');
define('_JOMRES_AJAXFORM_AVAILABLE','Dostupnost ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Odaberite sobe koje želite');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Pogledajte ovde da li je objekat dostupan u ovom momentu.');
define('_JOMRES_AJAXFORM_EXTRAS','Opcije extra');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Odaberite bilo koju extra opciju koju želite da uključite u rezervaciju');
define('_JOMRES_COM_PERDAY','Po noći');
define('_JOMRES_AJAXFORM_ADDRESS','Vaša adresa');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Molim vas unesite vaše informacije. Sva polja su obavezna osim polja za mobilni telefon');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Dostupne sobe');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Odabrane sobe');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>
Najbliži datum dolaska je: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Po noćenju:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extra:');
define('_JOMRES_AJAXFORM_BILLING_TAX','Taksa:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Popust:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Ukupna cena:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gosta');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknite ovde ako želite da dodate sobu u vaš izbor');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknite ovde ako želite da skloniite sobu iz vašgg izbora');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Tipovi gostiju');
define('_JOMRES_VARIANCES_TYPE','Tip');
define('_JOMRES_VARIANCES_TYPE_TT','Tip gostiju, pr. Djeca godine 5-10, ili Student ');
define('_JOMRES_VARIANCES_NOTES','Napomene');
define('_JOMRES_VARIANCES_NOTES_TT','Napomene u vezi sa tipom gostiju');
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksimalan broj gostiju ovog tipa koji se moze odabrati prilikom rezervacije');
define('_JOMRES_VARIANCES_ISPERCENTAGE','U procentima');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Izracunata cifra je procenat osnovne cifre izracunate za sobu. Ako ste izabrali Ne onda ce se cifra koju ste vi odredili dodati ili odbiti od cijene sobe.');
define('_JOMRES_VARIANCES_POSNEG','Dodati neslaganje?');
define('_JOMRES_VARIANCES_POSNEG_TT','Izracunata cifra je dodata ili uklonjena sa osnvone cijene sobe. Postavite opciju na Ne ako zelite da ovo bude popust na osnovnoj cijeni. ');
define('_JOMRES_VARIANCES_VARIANCE','Neslaganje');
define('_JOMRES_VARIANCES_VARIANCE_TT','Iznos neslaganja');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modifikovani spisak tipa musterija');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Objavljen tip musterije');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Izbrisan tip musterije');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Kreiran tip musterije');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Izmenjen tip musterije');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Izmenjen tip musterije');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Prikazi link na listu soba u stranici detalja objekta?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Prikazi <b>samo</b> Kalendar dostupnosti/Listu soba?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Postavi ovu opciju na Da ako zelite da prikazete header i detalje objekta, tako da je samo lista soba/kalendar dostupnosti vidljiv u okviru detalja objekta.');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Dolazak-Odlazak minimalni interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimalni interval U rezervacionoj formi izmedju dana dolaska i odlaska.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Lista na rezervacionoj formi prikazuje broj sobe');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Lista na rezervacionoj formi prikazuje ime sobe');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Lista na rezervacionoj formi prikazuje naziv tarife');
define('_JOMRES_ORDER','Poredak');
define('_JOMRES_REQUIREDFIELDS','Obavezno');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dani prije dolaska');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimum dana koji moraju proci od danasnjeg dana do dana dolaska.');
define('_JOMRES_DTV','Varijacije tipa datuma');
define('_JOMRES_DTV_DOW','Dan u nedjelji');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Tip gosta standardni');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standardni broj prvog tipa gosta je 1. Ako koristite tipove gostiju, onda je ovo broj koji ce se pojavljivati za prvog tipa gostiju u formi za prijavu.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Registrovani korisnici samo mogu rezervisati online?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Izvinite, morate biti registrovani korisnik da biste rezervisali online. Kliknite ovde da biste se registrovali. ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Boja fonta za linkove trenutnih rezervacija');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Vikend granice');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Soba je rezervisana');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Crna rezervacija');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokruzite depozit na najblizu cifru?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Naplacujte depozit?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tarife naplacujte na nedjeljni racun?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Imate mogucnost postavljanja razlicitih tarifa po dnevnoj ili nedjeljnoj vrijednosti. Ako koristite nedjeljni, morate postaviti ovu opciju na Da.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cena po nedelji');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fiksirani datum dolaska potreban: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Kada je fiksirani datum selektovan, datum moze biti prikazan kao dropdown lista');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opcija za pusace nije validna');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Datum dolaska netacan');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Datum odlaska nije tacan');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Rezervacija je prekratka. Mora biti najmanje ovoliko dana izmedju dana dolaska i odlaska :');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Vas interval je:');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Tip gosta je netacan');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Odaberite broj gostiju i tip');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Imate previse dozvoljenih tarifa');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Odabrali  ste vise soba nego sto imate gostiju, kliknite na ime sobe da biste je uklonili sa liste');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Previse gostiju imate za vas broj slobodnih kreveta');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Morate odabrati vise soba');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Odaberi sobu');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Ime je obavezno');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Prezime je obavezno');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Broj kuće ili ime kuće je obavezno');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Ulica je obavezna');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Grad je obavezan');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region je obavezan');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postanski broj je obavezan');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Zemlja je obavezna');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Broj telefona je obavezan');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Broj mobilnog je obavezan');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email adresa je obavezna');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email adresa nije validna');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Neuspjela validacija vaseg email domena');
define('_JOMRES_SRP_WEHAVEVACANCIES','Imamo slobodne sobe!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Nijedna soba nije izabrana');
define('_JOMRES_BOOKING_NUMBER','Broj rezervacije');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','OK za rezervaciju');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Izbrisati template varijable?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Izaberite ovo da omogucite DHTML dump template variabli za svaki FRONTEND template file. Korisno je ako zelite da proverite da li odredjeni elementi mogu da se koriste za odredjeni template.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Izracunati procenat');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Izaberite Da ako racunate po osobi u procentima. Ako ste odabrali Ne bice primenjeno kao flat suma.');
//v2rc2
define('_JOMRES_COM_LIMITROOMSLIST','Dozvoljeni limit sobe/tarife');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Ovim mozete da odaberete limit na broj soba slobodnih i tarifa koje su izlistane u formi za rezervaciju. Postavite na nulu ako ne zelite ogranicenje. ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Nema soba trenutno slobodnih!');
// Introduced in v2.5
// Translate from here
// v2.6
define('_JOMRES_BOOKITNOW','Book it now: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
define('_JOMRES_COM_WEEKENDDAYS','Dani vikenda');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Izaberite zemlju pre nego što dodate informacije o objektu');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Sačuvajte promene pre nego što dodate sliku objekta');
define('_JOMRES_TARIFFSFROM','Cene od - ');
define('_JOMRES_SEARCH_ALL','Sve');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Pretraga po zeljami');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Pretraga po regionima');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Izlistaj po mestu: ');
define('_JOMRES_SEARCH_FEATURE_INFO','Pretraga karakteristika');
define('_JOMRES_SEARCH_BUTTON','Pretraži');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Pretraga reči');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
define('_JOMRES_SEARCH_AVL_INFO','');
define('_JOMRES_SEARCH_PTYPES','Izlistaj po vrsti objekta: ');
define('_JOMRES_SEARCH_RTYPES','List all properties by room type.');
define('_JOMRES_SORTORDER_DEFAULT','Default');
define('_JOMRES_SORTORDER_PROPERTYNAME','Property Name');
define('_JOMRES_SORTORDER_PROPERTYREGION','Property Region');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Property Town');
define('_JOMRES_SORTORDER_STARS','Stars');
define('_JOMRES_PATHWAY_PROPERTYLIST','Property list');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Opis objekta ');
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking room availability<br/>
(Room selection will be reset)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your room selection');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Slika sobe');
define('_JOMRES_CURRENCYFORMAT','Currency format');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
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
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
define('JOMRES_PROPERTYTYPE','Property type');
define('JOMRES_COM_A_SRPONLY','SRP only');
define('JOMRES_MAXPEOPLEINROOM','Max people per room');
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
define('_JOMCOMP_WISEPRICE_TO',' to ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Cancel');
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
define('_JRPORTAL_CRATE_TITLE','Title');
define('_JRPORTAL_CRATE_TYPE','Type');
define('_JRPORTAL_CRATE_VALUE','Comission rate');
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
define('_JRPORTAL_STATS_PATETITLE','Statistics');
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Broj rezervacija');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Vrednost rezervacija');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Izlistaj rezervacije');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Objekat id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Gost id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Cena smeštaja");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"noćenja");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"po sobi ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Produženje boravaka");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Ukupna cena");
define('_JOMRES_CONFIRMATION_ALERT',"Molimo pročitajte i potvrdite saglasnost");
define('_JOMRES_CONFIRMATION_HEADER',"Detalji vaše rezervacije su sumirani ispod.<br /> Da bi ste bilo šta promenili, molimo kliknite na dugme Amend Reservation. ");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Ukoliko želite da izmenite pilo koju informaciju prikazanu iznad, kliknite ovde ");
define('_JOMRES_CONFIRMATION_AMEND',"Izmeni rezervaciju");
define('_JOMRES_CONFIRMATION_SPECIALS',"Ukoliko imate bilo kakve dodatne zahteve, unesite ih u polje ispod.");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Potvrdjujem da su gore unete informacije tačne i slažem se ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"po osobi po noćenju ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','of');
if (!defined('_PN_START'))
	define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
if (!defined('_PN_END'))
	define('_PN_END','End');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>
Please enter the message you\'d like to send to ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Kontaktiraj hotel');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Molimo izaberite željeni smeštaj');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Slobodno"); 
define('_JOMRES_AVLCAL_QUARTER',"Nešto je rezervisano");
define('_JOMRES_AVLCAL_HALF',"Polu-rezervisano");
define('_JOMRES_AVLCAL_THREEQUARTER',"Uglavnom rezervisano");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Rezervisano sve");
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
define('_JOMRES_SEARCH_PRICERANGES','Opseg cene');
define('JOMRES_WORD_SAVING','Saving...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>
To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
define('_JOMRES_COM_LOGGING','Jomres logging');
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Listing foma za rezervaciju soba prikazuje sliku tipa sobe');
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Method');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_NOHTML."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
define('_JRPORTAL_TAXRATES_RATE',"Rate");
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
define('_JRPORTAL_INVOICES_USER',"User");
define('_JRPORTAL_INVOICES_STATUS',"Status");
define('_JRPORTAL_INVOICES_RAISED',"Raised");
define('_JRPORTAL_INVOICES_DUE',"Due");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
// Not used yet
define('_JOMRES_COM_GROWL','Use Jomres messaging');
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"NAPOMINJEMO da cene soba, procene i puna cena rezervacije neće biti izračunata dok ne dodate sobu(e) u svoj izbor.");
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
define('_JOMRES_COM_NEWUSER','Create new user on booking');
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Control Panel');
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
define('_JOMRES_COM_YOURBUSINESS','Your business details');
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
define('_JOMRES_COM_INVOICE_PRINT','Print invoice');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
define('_JOMRES_REALESTATE_TITLE','Real estate listing');
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
define('_JOMRES_APIKEY_REMAKE','Make new API key');
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
define('_JOMRES_SUPPORTKEY','Support key');
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
define('_JOMRES_JQUERYTHEME','Jquery theme');
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');
define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that property is not currently available.');
define('_JOMRES_REVIEWS','Reviews');
define('_JOMRES_REVIEWS_TITLE','Review title');
define('_JOMRES_REVIEWS_DATE','posted on ');
define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this property yet.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this property?');
define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this property : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
define('_JOMRES_REVIEWS_PROS','Pros: ');
define('_JOMRES_REVIEWS_CONS','Cons: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this property, you can\'t post another review about it.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the property\s locale');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
define('_JOMRES_REVIEWS_SUBMIT','Submit');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
define('_JOMRES_REVIEWS_RATING_2','Location ');
define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
define('_JOMRES_REVIEWS_RATING_5','Value for money ');
define('_JOMRES_REVIEWS_RATING_6','Services ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in property details page?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Extras tax:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
define('_JOMRES_PARTNERS_TITLE','Partners');
define('_JOMRES_CALENDAR_TODAY','Today');
define('_JOMRES_CALENDAR_PREV','Previous');
define('_JOMRES_CALENDAR_NEXT','Next');
define('_JOMRES_CALENDAR_RTL','false');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Room ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your property is not yet published, only you can see the property, site visitors will not see it");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
define('_JOMRES_ROOMMSLIST_STYLE','Rooms list style');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Room types');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available rooms list');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only property guests can review?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per room');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per room : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
define('_JOMRES_NUMBER_OF_ROOMS','Number of rooms');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
define('_JRPORTAL_MONTHS_LONG_0','January');
define('_JRPORTAL_MONTHS_LONG_1','February');
define('_JRPORTAL_MONTHS_LONG_2','March');
define('_JRPORTAL_MONTHS_LONG_3','April');
define('_JRPORTAL_MONTHS_LONG_4','May');
define('_JRPORTAL_MONTHS_LONG_5','June');
define('_JRPORTAL_MONTHS_LONG_6','July');
define('_JRPORTAL_MONTHS_LONG_7','August');
define('_JRPORTAL_MONTHS_LONG_8','September');
define('_JRPORTAL_MONTHS_LONG_9','October');
define('_JRPORTAL_MONTHS_LONG_10','November');
define('_JRPORTAL_MONTHS_LONG_11','December');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Property management process");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your property/business.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)");

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the property manager's toolbar?");

define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a property");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a property to edit the partner's discount settings for that property.");


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
define('_JOMRES_SEARCH_STARS','Number of stars');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");

// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
define('_JOMRES_TOUCHTEMPLATES','Label Translations');

define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");


// 5.2.1
define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
define('_JOMRES_DEBUGGING_TAB','Debugging');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
define('_JOMRES_DATEPERIOD_SECOND','second');
define('_JOMRES_DATEPERIOD_MINUTE','minute');
define('_JOMRES_DATEPERIOD_HOUR','hour');
define('_JOMRES_DATEPERIOD_DAY','day');
define('_JOMRES_DATEPERIOD_WEEK','week');
define('_JOMRES_DATEPERIOD_MONTH','month');
define('_JOMRES_DATEPERIOD_YEAR','year');
define('_JOMRES_DATEPERIOD_DECADE','decade');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','ago');
define('_JOMRES_DATEPERIOD_FROMNOW','from now');

define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

define('_JOMRES_EDIT_PROFILE','Edit Profile');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
define('_JOMRES_IMAGE','Image');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/jomres-mainmenu-213/jomres-lite-solo-developer-unlimited-comparison-matrix" target="_blank"> please visit our site</a> for information on how you can upgrade.');
define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Password");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

define('_JOMRES_QUICK_INFO',"Quick Info");

define('_JOMRES_MENU_SHOW',"Show");
define('_JOMRES_MENU_HIDE',"Hide");
define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


define('_JOMRES_DEBUGGING_SUBJECT','Subject');
define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
define('_JOMRES_METATITLE','Meta title');
define('_JOMRES_METADESCRIPTION','Meta description');
define('_JOMRES_FOUNDPROPERTIES',"Properties found");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

define('_JOMRES_MYPROPERTIES','My properties');


define('_JOMRES_CART_TITLE','My proposed bookings');
define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
define('_JOMRES_CART_OR',' or ');
define('_JOMRES_CART_SAVEFORLATER','Save for later');
define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
define('_JOMRES_CART_VIEWCART','View cart');

define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
define('_JOMRES_CSS_CACHING_DESC',"");


define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");
