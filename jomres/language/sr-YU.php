<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
//German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC','Brza rezervacija');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Prikaži profile');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Opšte konfiguracije');
jr_define('_JOMRES_COM_MR_BACK','Nazad');
jr_define('_JOMRES_COM_MR_YES','Da');
jr_define('_JOMRES_COM_MR_NO','Ne');
jr_define('_JOMRES_COM_MR_NEWTARIFF','Novo');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','Novi objekat');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nove opcije objekta');
jr_define('_JOMRES_COM_MR_NEWGUEST','Novi gost');
jr_define('_JOMRES_COM_MR_SAVE','Sačuvaj');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Ime');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Dolazak');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Odlazak');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Dodeli korisniku administratorska prava');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Ime');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Korisničko ime');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Upravo autorizovan');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Osnovni objekat');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Promeni ovo');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Pristupni nivo');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Korisnik izmenjen');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcija');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Menadžer objekta');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Sve rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nove rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Izmeni rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Dolazak/Odlazak');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gost');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Soba');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Plaćanje');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Ime');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Prezime');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Specijalni zahtevi');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Neki specijalni zahtjevi mogu zahtevati extra plaćanja.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Poništi rezervaciju');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Broj kuće ili naziv kuće');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ime');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Grad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Poštanski broj');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tel');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilni');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Ne možete poništiti ovu rezervaciju jer je gost već prijavljen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Depozit nije plaćen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potvrdi poništenje');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervacija poništena');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dana do dolaska');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Tip rezervacije');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Crno');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcija');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Ime sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Soba');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Sprat');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Aktivirati nedozvoljeni pristup ?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max osoba');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Tip sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Opis tipa sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista opcija sobe');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Depozit placen');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Unesite depozit');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Ukupno za naplatu');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Oznaka depozita');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Rezervacija');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Depozit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Depozit sačuvan');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Nase sobe');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Objekat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Tip sobe');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Izmenite podatke');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Ime');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Prezime');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Kuca');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Grad');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postanski broj');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Tel');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobilni');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Broj kreditne kartice');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Kartica izdata');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Kartica istice dana');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Broj izdavanja');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Ime na kartici');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Odaberite');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Broj dana');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Broj gostiju');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Prikazi podešavanja soba i objekata');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Sobe');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Opcije soba');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Tipovi soba');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Objekat');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Opcije objekta');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Tip');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Ime');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Broj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Sprat');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Onemoguciti pristup?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maximum osoba');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Opcije');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Soba dodata');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Izmeni opcije');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Opcije sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Opis opcija');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Opcija sobe dodata');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Opcije sobe izmenjene');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Tip sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Tip sobe - skraćenica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Tip sobe - opis');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Tip sobe dodat');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Tip sobe izmenjen');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Izmeni detalje');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Ime');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Grad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Regija');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Zemlja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Poštanski broj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Web sajt');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Opcije');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Objekat dodat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Objekat izmenjen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Opcije objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Opcije objekta - skraćenica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Opcije objekta - puni opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Opcija objekta je dodata');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Opcija objekta je izmenjena');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarife');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tarifa - naziv');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Važi od');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Važi do');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Tarifa za noć');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minimum dana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maximum dana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minimum osoba');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maximum osoba');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Tip sobe');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorisite PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Dozvoli vikende');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarifa dodata');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarifa izmenjena');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Izmeni detalj');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Dupliraj detalj');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarifa izbrisana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Izmeni tarifu');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Praznici');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervacija sacuvana');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Prijavite gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Odjavite gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Izlistaj rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NOVE rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Tabla');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Gosti - admin');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Objekti - admin');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Provera dostupnosti');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Potvrdite vase podatke');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Ime');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Prezime');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Broj kuće');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Grad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Poštanski broj (PAK)');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tel');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilni');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Nema soba koje sadrže sve parametre koje ste vi tražili');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Hvala vam što ste odabrali nas i nadamo se da ćete uživati u boravku.<br><br> <b>Ovo je samo preliminarna rezervacija, i neće biti potvrdjena dok ne primite potvrdno pismo.</center>');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezervacije za objekat: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezervacije za sobe: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Dolazak: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Odlazak: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Ime: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Tel: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobilni: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Vrednost ugovora je: ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Prijavite gosta ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Odaberite gosta ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gost je prijavljen ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Nema gostiju za dolazak danas');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Gosti za odjavu ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Nema gostiju za odjavu danas');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Suplementi');
jr_define('_JOMRES_COM_A_TARIFFS','Tarife & Valuta');
jr_define('_JOMRES_COM_A_DISCOUNTS','Popust');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload fajlova');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','Trenutno podesavanje');
jr_define('_JOMRES_COM_A_EXPLANATION','Objasnjenje');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Suplimenti za jednu osobu');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','proverite da li je postavljeno na Da ako zelite da vrsite naplatu suplimenata za jednu osobu');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Troškovi dodataka po osobi:');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Depozit u procentima?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Da li depozit mora biti procenat cele rezervacije? Ako ne želite, onda je depozit definisane veličine');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','Veličina depozita');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Po osobi, po noćenju');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','Odaberite Da ako želite da naplaćujete po osobi po noćenju. Ako ne želite, troškovi će biti izračunati po osnovi po sobi po noćenju');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','Velicina fajla');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. velicina slike u Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED','Rezervisano');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','Potvrdno pismo');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Postovani ');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cijena per night - per room ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detalji rezervacije');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Hvala vam na rezervaciji');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. U nastavku se nalaze detalji vaše rezervacije. Molim vas proverite da li su podaci ispravni i kontaktirajte nas ako postoji greška.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Vaša soba će biti sačuvana do vašeg prijavljivanja, prijavljivanja su nakon 2 sata poslepodne.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Očekujemo vas dolazak ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Želimo vam prijatan boravak.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Sada vam moramo skrenuti paznju na sledeće.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Podsećamo vas da je rezervacija legalni ugovor, pa ako ste zbog nekog razloga poništili rezervaciju ili skratili vaš boravak moraćete i dalje platiti celi iznos vašeg ugovora.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Nije dozvoljen ugovor iz kojeg se uklanjaju obroci ili smanjuju dani za naplatu za koje vi niste boravili u sobi. Zbog ovoga, preporučujemo vam da iskoristite osiguranje za vreme odmora.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Poništenje i smanjenje naplate</i> Ako otkažete vaš odmor vaše otkazivanje mora biti potvrdjeno pismeno. Troškovi poništenja su sledećci:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dana ili više');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Samo depozit.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dana');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% ugovora.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Do 14 dana');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% ugovora.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','PDV je uključen u sve tarife.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Štampaj garantno pismo');
jr_define('_JOMRES_COM_INVOICE_TITLE','Štampaj predračun');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Broj nocenja: ');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Ugovor je potvrdjen od: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cijena po nocenju: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Hvala vam na');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Nadamo se da cemo se uskoro vidjeti ponovo.');
jr_define('_JOMRES_COM_INVOICE_PRINT','Stampaj predracun');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Dodaj uslugu na racun');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis usluge');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','Cijena usluge');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Ostali elementi koji su naplaceni');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Ostali naplaceni elementi, total vrijednost: ');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Elementi dodati na racun');
jr_define('_JOMRES_UPLOAD_IMAGE','Upload slike');
jr_define('_JOMRES_FILE_UPLOAD','File Upload-ovan');
jr_define('_JOMRES_FILE_ERROR_TYPE','Dozvoljeno vam je upload-ujete tipove:\n');
jr_define('_JOMRES_FILE_ERROR_EMPTY','Molim vas odaberite file prije upload-ovanja');
jr_define('_JOMRES_FILE_ERROR_NAME','Ime fajla mora sadrzati samo alfanumericke karaktere i ne smije sadrzati praznine.');
jr_define('_JOMRES_FILE_ERROR_SIZE','Velicina fajla je presla maximum koju Administrator dozvoljava.');
jr_define('_JOMRES_FILE_NOT_UPLOADED','Fajl NIJE uploadovan.');
jr_define('_JOMRES_FILE_UPDATED','Vas fajl je uploadovan.');
jr_define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Kalendar fajl jezik');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Oadberite fajl vaseg jezika koji zelite da koristite u Javascript kalendar. Neki od kalendara mogu imati pogresne podatke, pogledajte http://sourceforge.net/tracker/?group_id=75569&atid=544287 za vise informacija');
jr_define('_JOMRES_COM_A_CALENDARCSS','JS Kalendar CSS fajl');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','Odaberite CSS fajl koji cete koristiti u Javascript kalendaru');
jr_define('_JOMRES_COM_A_ODDS','Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE','Izbrisi ovu sliku');
jr_define('_JOMRES_FILE_DELETED','Fajl izbrisan');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Izbrisi');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nemoguce ukloniti ovu sobu, postoje rezervacije za nju. Ponistite rezervacije pa pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Soba je izbrisana');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Izbrisite opcije sobe');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nemoguce ukloniti opciju ove sobe, dodijeljena je nekim sobama. Uklonite tu opciju sa tih soba i pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Opcija sobe izbrisana');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Izbrisi opciju objekta');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nemoguce ukloniti opciju ovog objekta, dodijeljen je nekom objektu. Uklonite tu opciju sa tih objekata i pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Opcija objekta je izbrisana');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Izbrisi tip sobe');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Nemoguce uklonite tip sobe, dodijeljen je nekoj sobi. Promijenite tip sobe i ponovo pokusajte.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Nemoguce uklonite tip sobe, dodijeljena je tarifa. Promijenite tarifu te sobe i ponovo pokusajte.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Tip sobe izbrisan');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Izbrisi objekat');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','Objekat izbrisan');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nemate prava da izbrisete ovaj objekat.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Sirina velike slike');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Vreme prijavljivanja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Prostor aktivnosti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Uputstva za vozače');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Aerodromi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Ostali transporti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Polisom i obrazloženjima');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresa');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Posetioci mogu rezervisati online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Postavite opciju na Da ako zelite da posjetioci rezervisu sobe online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervacije su za fiksni period');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Postavite opciju na Da, i rezervacije ce se uzimati za fiksni period. Ako je postavljeno na Ne, onda vam "definisani dan za dolazak" nece biti postavljen na Da (ukoliko zelite da prisilite goste da dodju na odredjeni dan) u suprotnom necete imati dovoljno linkova koji su slobodni u kalendaru.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','Period rezervacije: ');
jr_define('_JOMRES_COM_A_BOOKING','Rezervisane sobe');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximalni period, primjer 3x 7 rezervacionih perioda = 21 dan');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Da li je ovo apartman/letnjikovac/vila?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Vi izdajete cijeli objekat, radije nego sobe u tom objektu posebno. Ako je ovo vas slucaj, onda vi imate registrovanu samo jednu sobu za svaki objekat posebno.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Prikaži rezervaciju');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Potvrdi rezervaciju');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Ponedeljak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Utorak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Sreda');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Četvrtak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Petak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Subota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Nedelja');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Pon');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Uto');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Sre');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Čet');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pet');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sub');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Ned');
jr_define('_JOMRES_COM_A_AVLCAL','Dostupnost');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Boja fonta za trenutni datum');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','Boja fonta za dane u prikazanom mjesecu ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Boja fonta za dane kopji nijesu u prikazanom mjesecu');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Boja polja za dane kada je objekat/soba dostupna');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Boja polja za dane koji nijesu prikazani u mjesecu');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Boja polja za zauzete dane');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Boja polja za uslovno rezervisane sobe (rezervacije za koje nije uzet depozit)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Boja polja za prosle dane');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Zauzeto/Nije dostupno');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Dostupno za rezervacije');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Uslovna rezervacija');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Prijavljeni dan dolaska');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Samo za sajtove koji koriste fiksirani period rezervacije. Odaberite dan kada gosti moraju doci.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fiksirani dan dolaska');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Dani ostanka');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Prikazati kalendar dostupnosti?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Postavite ovu opciju na Da ako zelite da prikazete kalendar dostupnosti');
jr_define('_JOMRES_FRONT_AVAILABILITY','Dostupnost');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Kliknite na slobodni datum ako zelite formu za rezervaciju.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Crne rezervacije');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nove crne rezervacije');
jr_define('_JOMRES_FRONT_DELETEGUEST','Izbrisite gosta');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gost izbrisan');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Nemoguce izbrisati gosta, ima rezervacije na svoje ime. Ponistite rezervacije pokusajte ponovo.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Cijena odredjene sobe: ');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Zdravo');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Zahvaljujemo vam se sto ste odradili rezervaciju sa');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Vasa rezervacija sadrzi sledece:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Ako imate bilo koje pitanje u vezi sa ovom rezervacijom ili bilo kojim drugim servisom, onda molim vas ne oklijevajte vec nam posaljite email.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nas broj telefona je');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Mozete nas kontaktirati na email');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Pusac');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Bilo koji");
jr_define('_JOMRES_COM_CALENDAROUTPUT','Kalendar format prikaza');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC','Ovo dozvoljava korisniku da promijeni format prikaza datuma u Jomres');
jr_define('_JOMRES_COM_CALENDARINPUT','Kalendar format unosa');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','Ovo dozvoljava korisniku da promijeni format unosa datuma u Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Fiksirani period rezervacija dozvoljava kratke prekide');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Duzina kratkog prekida');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Objavljeno');
jr_define('_JOMRES_COM_A_PAYPAL','Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','Vrijeme');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','Korisnik (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operacija');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Prikazi detalje');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter na datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter na username');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter na operaciju');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Dolazak se ocekuje');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Dolazak danas');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Odredjeni Rezident');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Odlasci danas');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Rok za odlazak istekao');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Nije stigao');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Nepoznati korisnik');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','Napravljena soba');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Izmenjena soba');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','Izbrisana soba');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Napravljena opcija sobe');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Izmenjena opcija sobe');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Izbrisana opcija sobe');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Uneseni tip sobe');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Izmenjen tip sobe');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Izbrisan tip sobe');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Napravljen objekat ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Izmenjen objekat');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Izbrisan objekat');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Napravljena opcija objekta');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Izmenjena opcija objekta');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Izbrisana opcija objekta');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Izmenjena podešavanja objekta');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Objavljeni objekti');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Napravljene tarife');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Izmenjene tarife');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Izbrisane tarife');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Dodata naplata servisa');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Prijavljan gost');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Odjavljen gost');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Unesen depozit');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','Napravljen gost');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Izmenjen gost');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST','Izbrisan gost');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Rezervisana soba');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Kreirano extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Izmenjeno extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Izbrisano extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Objavljeno extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Unesena crna rezervacija.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Izbrisana crna rezervacija.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Opis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Ime');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra izmenjeno');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Izmeni opciju');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','Extra izbrisan');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Extra administracija');
jr_define('_JOMRES_COM_A_EXTRAS','Prikazi extra za vrijeme rezervacije?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','Postavi opciju na Da ako zelite da prikazete gostu extra opcije');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Opciono extra.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Crna rezervacija startni datum');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Datum nastavka servisa');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Crne rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Postoji greska prilikom rezervacije ovih soba, jedna ili vise soba koje ste odabrali nije slobodna.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Sobe ukljucene u crnu rezervaciju');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Prikazi crne rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nema crnih rezervacija');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Broj zvezdica');
jr_define('_JOMRES_COM_A_SMOKING','Prikazati opciju za pusace?');
jr_define('_JOMRES_COM_A_SMOKING_DESC','Postaviti opciju na Da ako zelite da je prikazete.');
jr_define('_JOMRES_COM_A_RESET','Ponistiti');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervacija ponistena');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE','Trazi ovdje za:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','Default opcija za pusace');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Simbol valute');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','PR &amp;pound&#59; Morate koristiti HTML code za trazeni simbol. Za listu ovih kodova posjetite <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE','Kod valute');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','Pr GBP. Ovo se koristi u email-u musteriji koji treba da potvrdi svoju rezervaciju.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Detalji');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ogranici rezervacije unaprijed?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Postavite opciju na Da ako zelite da ogranicite rezervacije (koristite sledece polje da postavite ogranicenje u danima). Ako postavite opciju na Da i ako gost pokusa da rezervise vise od n dana unaprijed onda ce njegov dan dolaska biti postavljen za danas');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Dani za rezervaciju unaprijed ograniceni na:');
jr_define('_JOMRES_COM_A_TAX_WARNING','<font color=red>OBAVJESTENJE: Ne predlaze se da postavite obje opcije na Da, trebate da koristite jednu od dvije opcije za obracun vase taxe. </FONT>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Taksa');
jr_define('_JOMRES_COM_A_ROOMTAX','Taksa Sobe');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC','Dizajnirano za americki standard. Sadrzi takse za sobe koje se naplacuju gostu. Mozete naplacivati kombinaciju ili fiksiranu vrijednost. Oe takse se odnose samo na sobe.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','Fiksna vrijednost takse');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Procenat takse');
jr_define('_JOMRES_COM_A_EUROTAX','Taksa');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Procenat takse');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Sacuvaj sve zapise');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' zapisi sacuvani');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer je sacuvao zapise');
jr_define('_JOMRES_FRONT_TARIFFS','Naše Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Ime Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Opis Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Tip sobe');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Dostupna od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','Dostupna do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Po osobi po noćenju');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Po noćenju');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Ne uključujuci vikende');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dana');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum dana');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min osoba');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max osoba');
jr_define('_JOMRES_FRONT_PREVIEW','Prikaz');
jr_define('_JOMRES_COM_A_EDITINGMODEON','Izmene ukljucene?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Tekući tekst');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','Novi tekst');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Tekst je izmenjen.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Izmeni jezik');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','Broj nearhiviranih zapisa: ');
jr_define('_JOMRES_FRONT_PTYPE','Tip objekta');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','Izlistaj tipove objekata');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Izmijeni tipove objekata');
jr_define('_JOMRES_COM_PTYPES_PTYPE','Tip objekta');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','Opis tipa objekta');
jr_define('_JOMRES_COM_PTYPES_SAVED','Tip objekta sacuvan');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Nemoguce izbrisati tip objekta. Tip objekta je dodijeljen jednom ili vise objekata, molim vas promijenite to i ponovo pokusajte');
jr_define('_JOMRES_COM_PTYPES_DELETED','Tipovi objekata izbrisani');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Podsjetnik za placanje');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','Nema extra servisa da se dodaju na racunu');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Depozit');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','Puni iznos');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Iznos naplacen prilikom rezervacije');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','Koristite ovu opciju da biste odlucili sta treba da naplacujete prilikom rezervacije. Odaberite depozit ako naplacujete depozit, ili puni iznos.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','Mjeseci za prikaz');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','U dostupnosti sobe, koliko mjeseci na kalendaru ce se prikazivati?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Potpisano na polovini od ');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
jr_define('_JOMRES_COM_A_CANCEL','Ponisti');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','Molim vas odaberite sobu ili sobe koje ne zelite da budu u upotrebi, i potrebne datume. <br>Ako soba nema oznaku, onda ne moze biti koriscena za crne rezervacije dok neka od rezervacija ne bude otkazana ili zavrsena.<br/> Kada ste odabrali trazene datume, kliknite na plavo dugme "apply" da proverite dostupnost sobe. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Izgleda da ste izlogovani zbog neaktivnosti</b> Molim vas logujte se ponovo.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Razlog');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Koristi payment gateway?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Postavi ovu opciju na Daako zelite da koristite online payment gateways. <b>Obavjestenje:</b>Ovo ne iskljucuje depozit izracunavanje prilikom rezervacije. Da isklucite ovo vi mozete izmeniti template koji prikazuju sobe i uklanjuju elemente koji se odnose na depozit.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Molim vas odaberite nacin placanja.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway ukljucen?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Izmenjeno podesavanje plugin-a');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Uneseno podesavanje plugin-a');
jr_define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK','External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Prikazana kreditna kartica');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Izmenjena kreditna kartica');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Izmeni kreditnu karticu');
jr_define('_JOMRES_COM_A_EDITICON','Izmeni velicinu ikonice');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Unos slike objekta');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Slike su vec u direktorijumu');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Slajd-šou');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Prikazi link za slideshow?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Prikazi slideshow u okviru?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail visina');
jr_define('_JOMRES_FRONT_SLIDESHOW','Slajd-šou');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />
Izvinite, nema slika za ovaj objekat. Molim vas upload-ujte slike koristeći upload opciju ako želite da koristite slajd-šou.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Prikazi link za tarife?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','Popup dozvoljen?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Ako je postavljeno na Ne, linkovi koji su se otvarali kao pop-up sada ce se otvarati u istom prozoru. EXPERIMENTAL! ');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow slike');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Koristite ovu formu ako zelite da upload-ujete vise slika objekta.<br/><b>Obavjestenje</b> slike sa istim imenima ce biti prekopirane. Ovim nacinom ne mozete unijeti slike za sobe ili header sliku objekta, to cete morati uraditi iz Property Admin sekcije.<br/>
<b>Obavjestenje</b> Slike uploadovane ovdje ce biti zapisane u /images/stories/jomres/*property_uid* folder.');
jr_define('_JOMRES_A_TABS_MISC','Misc');
jr_define('_JOMRES_A','Sajt konfiguracija');
jr_define('_JOMRES_A_GLOBALPFEATURES','Koristi global opcije objekta');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','Postavite ovu opciju na Da ako zelite da svi objekti koriste samo opcije objekta 
defined by the webmaster.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO','Da biste dodijeli sliku ovoj opciji prvo morate upload-ovati slike vasih opcija objekta u /images/stories/jomres/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON','Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Odaberite plugin za pretragu koji zelite da koristite.');
jr_define('_JOMRES_FRONT_NORESULTS','<b>Zao nam je, vaša pretraga nije dala rezultate. Molimo vas, izmenite pretragu i pokušajte ponovo.</b>');
jr_define('_JOMRES_AREYOUSURE','Da li ste sigurni da to zelite da uradite?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezervišite sobu');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezervisi objekat');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','Sigurnosni broj');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Prikazati tarife?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Cene i detalji');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknite za sobe i dostupnost');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Prikazati informacije o tarifama');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Prikazati informaciju o Adresi ispod ovog linka');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Prikazati detaljnu informaciju o objektu ispod ovog linka');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Prikazati sobe i dostupnost ispod ovog linka');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Prikazati informacije o tarifama ispod ovog linka');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flat rate tarife');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Srednje');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Odaberite model tarifiranja koji zelite da koristite');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Imate dva izbora za metod kalkulacije tarifa. Prvi, 'flat rate' metod dozvoljava vam da ponudi razne tarife gostima i cijena tokom cijelog boravka je ista. Ovo je korisno ako zelite da ponudite vise razlicitih tarifa za isti dan, pr. Spavanje i dorucak tarifa i B&B i Tarifa vecere. Odaberite 'srednje' tarife ako zelite da podesite vase cijene zavisno od datuma. Jomres ce naci sve tarife za svaki dan u rezervacijama, sastaviti zajedno i vratiti srednju vrijednost za dati period");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Prikazati datum odlaska?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Postavite ovu opciju na Ne ako ne zelite da bude prikazano polje sa datumom odlaska. Ovo koristite samo ako ste sigurni sta radite, datum odlaska u rezervacijama ce pisati dan nakon dolaska.");
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Limit opisa');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Ovo ogranicava broj karaktera prikazanih u listi objekata.");
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','Koristite date() format?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Postavite ovu opciju na Da ako zelite da vam se datum ispisuje kao date() (Pogledajte <a href="http://www.php.net/manual/en/function.date.php">ovdje</a>). Postavite na Ne ako zelite da koristite strftime() formatiranje (pogledajte <a href="http://www.php.net/manual/en/function.strftime.php">ovdje</a> pr. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Kliknite da biste objavili');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Kliknite da ne objavljujete');
jr_define('_JOMRES_A_GLOBALROOMTYPES','Odaberite glavni tip sobe');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC','Postavite ovu opciju na Da ako zelite da postavite koriscenje ovog tipa sobe na svim objektima 
defined by the webmaster. Morate postaviti na Da ako zelite da dozvolite pretragu soba po tipu sobe.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO','Da biste dodijelili sliku ovom tipu sobe morate prvo uploadovati sliku u /images/stories/jomres/rmtypes/ folder. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input greska - boja pozadine');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','Default zemlja u formi za rezervaciju');
jr_define('_JOMRES_JAVASCRIPT_','Polja označena crvenom zvezdom su obavezna.');
jr_define('_JOMRES_COM_SELFREGISTRATION','Korisnici mogu da registruju svoje objekte?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','Postavite ovu opciju na Da ako zelite da korisnici mogu registrovati svoje objekte bez dozvole administratora sajta.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Molim vas odredite zemlju i region gdje se nalazi vas objekat.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Molim vas popunite detalje o vasem objektu.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Elementi označeni crvenom zvezdicom su obavezni.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Kreirani objekti');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED',"Zao nam je, ne mozete kreirati objekat na ovom sistemu. Morate biti logovani, registrovani korisnik, i ne smijete imati vec kreirani objekat.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Kreirani objekti: ');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Za korisnika: ');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','Prikazati kalendar od početka godine?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Kalendar dostupnosti prikazuje od pocetka tekuce godine.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Broj dostupnih soba');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Nazad na detalje objekta');
jr_define('_JOMRES_FRONT_ROOMTYPES','Tipovi soba');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limit nasumične pretrage');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Prikaži google konverxiju valuta link u listu tarifa?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','Konvertor valuta:');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR','Dozvolite korisnicima da vrše izmjene koristeci html editore?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','Koristite ovu formu da biste prijavili rezervaciju. Kursor misa preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Koristite ovu formu da biste prijavili rezervaciju. Kursor miša preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','Opis knjiženja rezervacije');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Odaberite detalje vaših zahteva za rezervaciju');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Dostupnost ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Odaberite sobe koje želite');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Pogledajte ovde da li je objekat dostupan u ovom momentu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Opcije extra');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','Odaberite bilo koju extra opciju koju želite da uključite u rezervaciju');
jr_define('_JOMRES_COM_PERDAY','Po noći');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Vaša adresa');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','Molim vas unesite vaše informacije. Sva polja su obavezna osim polja za mobilni telefon');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Dostupne sobe');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Odabrane sobe');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>
Najbliži datum dolaska je: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Po noćenju:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extra:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','Taksa:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Popust:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Ukupna cena:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gosta');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknite ovde ako želite da dodate sobu u vaš izbor');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknite ovde ako želite da skloniite sobu iz vašgg izbora');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Tipovi gostiju');
jr_define('_JOMRES_VARIANCES_TYPE','Tip');
jr_define('_JOMRES_VARIANCES_TYPE_TT','Tip gostiju, pr. Djeca godine 5-10, ili Student ');
jr_define('_JOMRES_VARIANCES_NOTES','Napomene');
jr_define('_JOMRES_VARIANCES_NOTES_TT','Napomene u vezi sa tipom gostiju');
jr_define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksimalan broj gostiju ovog tipa koji se moze odabrati prilikom rezervacije');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','U procentima');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Izracunata cifra je procenat osnovne cifre izracunate za sobu. Ako ste izabrali Ne onda ce se cifra koju ste vi odredili dodati ili odbiti od cijene sobe.');
jr_define('_JOMRES_VARIANCES_POSNEG','Dodati neslaganje?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','Izracunata cifra je dodata ili uklonjena sa osnvone cijene sobe. Postavite opciju na Ne ako zelite da ovo bude popust na osnovnoj cijeni. ');
jr_define('_JOMRES_VARIANCES_VARIANCE','Neslaganje');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','Iznos neslaganja');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modifikovani spisak tipa musterija');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Objavljen tip musterije');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Izbrisan tip musterije');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Kreiran tip musterije');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Izmenjen tip musterije');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Izmenjen tip musterije');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Prikazi link na listu soba u stranici detalja objekta?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','Prikazi <b>samo</b> Kalendar dostupnosti/Listu soba?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Postavi ovu opciju na Da ako zelite da prikazete header i detalje objekta, tako da je samo lista soba/kalendar dostupnosti vidljiv u okviru detalja objekta.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Dolazak-Odlazak minimalni interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimalni interval U rezervacionoj formi izmedju dana dolaska i odlaska.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Lista na rezervacionoj formi prikazuje broj sobe');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Lista na rezervacionoj formi prikazuje ime sobe');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Lista na rezervacionoj formi prikazuje naziv tarife');
jr_define('_JOMRES_ORDER','Poredak');
jr_define('_JOMRES_REQUIREDFIELDS','Obavezno');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dani prije dolaska');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimum dana koji moraju proci od danasnjeg dana do dana dolaska.');
jr_define('_JOMRES_DTV','Varijacije tipa datuma');
jr_define('_JOMRES_DTV_DOW','Dan u nedjelji');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Tip gosta standardni');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standardni broj prvog tipa gosta je 1. Ako koristite tipove gostiju, onda je ovo broj koji ce se pojavljivati za prvog tipa gostiju u formi za prijavu.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Registrovani korisnici samo mogu rezervisati online?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Izvinite, morate biti registrovani korisnik da biste rezervisali online. Kliknite ovde da biste se registrovali. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Boja fonta za linkove trenutnih rezervacija');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Vikend granice');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Soba je rezervisana');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','Crna rezervacija');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokruzite depozit na najblizu cifru?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Naplacujte depozit?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tarife naplacujte na nedjeljni racun?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Imate mogucnost postavljanja razlicitih tarifa po dnevnoj ili nedjeljnoj vrijednosti. Ako koristite nedjeljni, morate postaviti ovu opciju na Da.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cena po nedelji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fiksirani datum dolaska potreban: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Kada je fiksirani datum selektovan, datum moze biti prikazan kao dropdown lista');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opcija za pusace nije validna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Datum dolaska netacan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Datum odlaska nije tacan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Rezervacija je prekratka. Mora biti najmanje ovoliko dana izmedju dana dolaska i odlaska :');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Vas interval je:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Tip gosta je netacan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Odaberite broj gostiju i tip');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Imate previse dozvoljenih tarifa');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Odabrali  ste vise soba nego sto imate gostiju, kliknite na ime sobe da biste je uklonili sa liste');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Previse gostiju imate za vas broj slobodnih kreveta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Morate odabrati vise soba');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Odaberi sobu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Ime je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Prezime je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Broj kuće ili ime kuće je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Ulica je obavezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Grad je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postanski broj je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Zemlja je obavezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Broj telefona je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Broj mobilnog je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email adresa je obavezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email adresa nije validna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Neuspjela validacija vaseg email domena');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','Imamo slobodne sobe!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Nijedna soba nije izabrana');
jr_define('_JOMRES_BOOKING_NUMBER','Broj rezervacije');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','OK za rezervaciju');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','Izbrisati template varijable?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Izaberite ovo da omogucite DHTML dump template variabli za svaki FRONTEND template file. Korisno je ako zelite da proverite da li odredjeni elementi mogu da se koriste za odredjeni template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Izracunati procenat');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Izaberite Da ako racunate po osobi u procentima. Ako ste odabrali Ne bice primenjeno kao flat suma.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST','Dozvoljeni limit sobe/tarife');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Ovim mozete da odaberete limit na broj soba slobodnih i tarifa koje su izlistane u formi za rezervaciju. Postavite na nulu ako ne zelite ogranicenje. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','Nema soba trenutno slobodnih!');
// Introduced in v2.5
// Translate from here
// v2.6
jr_define('_JOMRES_BOOKITNOW','Book it now: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
jr_define('_JOMRES_COM_WEEKENDONLY','Weekends only');
jr_define('_JOMRES_COM_WEEKENDDAYS','Dani vikenda');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Izaberite zemlju pre nego što dodate informacije o objektu');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Sačuvajte promene pre nego što dodate sliku objekta');
jr_define('_JOMRES_TARIFFSFROM','Cene od - ');
jr_define('_JOMRES_SEARCH_ALL','Sve');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Pretraga po zeljami');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Pretraga po regionima');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Izlistaj po mestu: ');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Pretraga karakteristika');
jr_define('_JOMRES_SEARCH_BUTTON','Pretraži');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Pretraga reči');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
jr_define('_JOMRES_SEARCH_AVL_INFO','');
jr_define('_JOMRES_SEARCH_PTYPES','Izlistaj po vrsti objekta: ');
jr_define('_JOMRES_SEARCH_RTYPES','List all properties by room type.');
jr_define('_JOMRES_SORTORDER_DEFAULT','Default');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','Property Name');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','Property Region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','Property Town');
jr_define('_JOMRES_SORTORDER_STARS','Stars');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','Property list');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','Opis objekta ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking room availability<br/>
(Room selection will be reset)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your room selection');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Slika sobe');
jr_define('_JOMRES_CURRENCYFORMAT','Currency format');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
jr_define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
jr_define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
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
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
jr_define('JOMRES_PROPERTYTYPE','Property type');
jr_define('JOMRES_COM_A_SRPONLY','SRP only');
jr_define('JOMRES_MAXPEOPLEINROOM','Max people per room');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','My options');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
jr_define('_JOMCOMP_WISEPRICE_TO',' to ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
jr_define('JOMRES_COM_A_MAPSKEY','Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
jr_define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
jr_define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
jr_define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
jr_define('_JOMCOMP_AMEND_HEADER','Original Contract:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL','Cancel');
jr_define('_JRPORTAL_CPANEL','JRPortal Control Panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
jr_define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
jr_define('_JRPORTAL_CRATE_TITLE','Title');
jr_define('_JRPORTAL_CRATE_TYPE','Type');
jr_define('_JRPORTAL_CRATE_VALUE','Comission rate');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
jr_define('_JRPORTAL_STATS_PATETITLE','Statistics');
jr_define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Broj rezervacija');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Vrednost rezervacija');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','Izlistaj rezervacije');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Objekat id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Gost id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');
jr_define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
jr_define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
jr_define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6
jr_define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Cena smeštaja");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"noćenja");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"po sobi ");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Produženje boravaka");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Ukupna cena");
jr_define('_JOMRES_CONFIRMATION_ALERT',"Molimo pročitajte i potvrdite saglasnost");
jr_define('_JOMRES_CONFIRMATION_HEADER',"Detalji vaše rezervacije su sumirani ispod.<br /> Da bi ste bilo šta promenili, molimo kliknite na dugme Amend Reservation. ");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT',"Ukoliko želite da izmenite pilo koju informaciju prikazanu iznad, kliknite ovde ");
jr_define('_JOMRES_CONFIRMATION_AMEND',"Izmeni rezervaciju");
jr_define('_JOMRES_CONFIRMATION_SPECIALS',"Ukoliko imate bilo kakve dodatne zahteve, unesite ih u polje ispod.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Potvrdjujem da su gore unete informacije tačne i slažem se ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"po osobi po noćenju ");
// Jomres 3.1.10
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	jr_define('_PN_OF','of');
if (!defined('_PN_START'))
	jr_define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Prev');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Next');
if (!defined('_PN_END'))
	jr_define('_PN_END','End');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Results');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>
Please enter the message you\'d like to send to ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Kontaktiraj hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Molimo izaberite željeni smeštaj');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS',"Slobodno"); 
jr_define('_JOMRES_AVLCAL_QUARTER',"Nešto je rezervisano");
jr_define('_JOMRES_AVLCAL_HALF',"Polu-rezervisano");
jr_define('_JOMRES_AVLCAL_THREEQUARTER',"Uglavnom rezervisano");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED',"Rezervisano sve");
jr_define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
jr_define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Opseg cene');
jr_define('JOMRES_WORD_SAVING','Saving...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>
To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
jr_define('_JOMRES_COM_LOGGING','Jomres logging');
jr_define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Listing foma za rezervaciju soba prikazuje sliku tipa sobe');
jr_define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD','Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
jr_define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
jr_define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
jr_define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
jr_define('_JRPORTAL_TAXRATES_CODE',"Tax code");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Rate");
jr_define('_JRPORTAL_INVOICES_TITLE',"Invoices");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
jr_define('_JRPORTAL_INVOICES_USER',"User");
jr_define('_JRPORTAL_INVOICES_STATUS',"Status");
jr_define('_JRPORTAL_INVOICES_RAISED',"Raised");
jr_define('_JRPORTAL_INVOICES_DUE',"Due");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
jr_define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
jr_define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
jr_define('_JRPORTAL_COUPONS_CODE',"Coupon code");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
jr_define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
jr_define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
jr_define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR',"Dear");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
// Not used yet
jr_define('_JOMRES_COM_GROWL','Use Jomres messaging');
jr_define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
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
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"NAPOMINJEMO da cene soba, procene i puna cena rezervacije neće biti izračunata dok ne dodate sobu(e) u svoj izbor.");
jr_define('_JOMRES_LASTEDITED_DB','Database template Last edited');
jr_define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
jr_define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
jr_define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
jr_define('_JOMRES_COM_NEWUSER','Create new user on booking');
jr_define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
jr_define('_JOMRES_CLICKTOREGISTER','Click here to register your property');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
jr_define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
jr_define('_JOMRES_CONTROLPANEL','Control Panel');
jr_define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
jr_define('_JOMRES_COM_YOURBUSINESS','Your business details');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
jr_define('_JOMRES_EDITINGMODE_ON','Editing mode on');
jr_define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
jr_define('_JOMRES_COM_INVOICE_PRINT','Print invoice');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
jr_define('_JOMRES_REALESTATE_TITLE','Real estate listing');
jr_define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
jr_define('_JOMRES_APIKEY_REMAKE','Make new API key');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY','Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
jr_define('_JOMRES_JQUERYTHEME','Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that property is not currently available.');
jr_define('_JOMRES_REVIEWS','Reviews');
jr_define('_JOMRES_REVIEWS_TITLE','Review title');
jr_define('_JOMRES_REVIEWS_DATE','posted on ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this property yet.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this property?');
jr_define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
jr_define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this property : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
jr_define('_JOMRES_REVIEWS_PROS','Pros: ');
jr_define('_JOMRES_REVIEWS_CONS','Cons: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this property, you can\'t post another review about it.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the property\s locale');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Submit');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
jr_define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
jr_define('_JOMRES_REVIEWS_RATING_2','Location ');
jr_define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
jr_define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
jr_define('_JOMRES_REVIEWS_RATING_5','Value for money ');
jr_define('_JOMRES_REVIEWS_RATING_6','Services ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in property details page?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Extras tax:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
jr_define('_JOMRES_PARTNERS_TITLE','Partners');
jr_define('_JOMRES_CALENDAR_TODAY','Today');
jr_define('_JOMRES_CALENDAR_PREV','Previous');
jr_define('_JOMRES_CALENDAR_NEXT','Next');
jr_define('_JOMRES_CALENDAR_RTL','false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Room ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your property is not yet published, only you can see the property, site visitors will not see it");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Rooms list style');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Room types');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available rooms list');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only property guests can review?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per room');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per room : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Number of rooms');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
jr_define('_JRPORTAL_MONTHS_LONG_0','January');
jr_define('_JRPORTAL_MONTHS_LONG_1','February');
jr_define('_JRPORTAL_MONTHS_LONG_2','March');
jr_define('_JRPORTAL_MONTHS_LONG_3','April');
jr_define('_JRPORTAL_MONTHS_LONG_4','May');
jr_define('_JRPORTAL_MONTHS_LONG_5','June');
jr_define('_JRPORTAL_MONTHS_LONG_6','July');
jr_define('_JRPORTAL_MONTHS_LONG_7','August');
jr_define('_JRPORTAL_MONTHS_LONG_8','September');
jr_define('_JRPORTAL_MONTHS_LONG_9','October');
jr_define('_JRPORTAL_MONTHS_LONG_10','November');
jr_define('_JRPORTAL_MONTHS_LONG_11','December');

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Property management process");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your property/business.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)");

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');

jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the property manager's toolbar?");

jr_define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a property");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a property to edit the partner's discount settings for that property.");


// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
jr_define('_JOMRES_SEARCH_STARS','Number of stars');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
jr_define('_JOMRES_TOUCHTEMPLATES','Label Translations');

jr_define('_JRPORTAL_ROI_TAB',"ROI");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

jr_define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

jr_define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugging');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND','second');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minute');
jr_define('_JOMRES_DATEPERIOD_HOUR','hour');
jr_define('_JOMRES_DATEPERIOD_DAY','day');
jr_define('_JOMRES_DATEPERIOD_WEEK','week');
jr_define('_JOMRES_DATEPERIOD_MONTH','month');
jr_define('_JOMRES_DATEPERIOD_YEAR','year');
jr_define('_JOMRES_DATEPERIOD_DECADE','decade');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','from now');

jr_define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

jr_define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

jr_define('_JOMRES_EDIT_PROFILE','Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
jr_define('_JOMRES_IMAGE','Image');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

jr_define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

jr_define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

jr_define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

jr_define('_JOMRES_QUICK_INFO',"Quick Info");

jr_define('_JOMRES_MENU_SHOW',"Show");
jr_define('_JOMRES_MENU_HIDE',"Hide");
jr_define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
jr_define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


jr_define('_JOMRES_DEBUGGING_SUBJECT','Subject');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
jr_define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
jr_define('_JOMRES_METATITLE','Meta title');
jr_define('_JOMRES_METADESCRIPTION','Meta description');
jr_define('_JOMRES_FOUNDPROPERTIES',"Properties found");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

jr_define('_JOMRES_MYPROPERTIES','My businesses');


jr_define('_JOMRES_CART_TITLE','My proposed bookings');
jr_define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
jr_define('_JOMRES_CART_OR',' or ');
jr_define('_JOMRES_CART_SAVEFORLATER','Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART','View cart');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

jr_define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

jr_define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

jr_define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

jr_define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
jr_define('_JOMRES_CSS_CACHING_DESC',"");


jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

jr_define('_JOMRES_COMPARE',"Compare");
jr_define('_JOMRES_REMOVE',"Remove");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

jr_define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
jr_define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

jr_define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

jr_define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Read more...");
jr_define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
jr_define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

jr_define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

jr_define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
jr_define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

jr_define('_JOMRES_SAFEMODE',"Enable safe mode?");
jr_define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

jr_define('_JOMRES_PRICE_ON_APPLICATION',"POA");

jr_define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

jr_define('COMMON_NEXT',"Next");
jr_define('COMMON_CANCEL',"Cancel");
jr_define('COMMON_SUBMIT',"Submit");
jr_define('COMMON_SAVE',"Save");
jr_define('COMMON_DELETE',"Delete");
jr_define('COMMON_RETURN',"Return");
jr_define('COMMON_CLOSE',"Close");
jr_define('COMMON_BACK',"Back");

jr_define('COMMON_HOME',"Home");

jr_define('COMMON_NEW',"New");

jr_define('COMMON_SEND',"Send");

jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Public key");
jr_define('RECAPTCHA_PRIVATE_KEY',"Private key");


jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


jr_define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

jr_define('COMMON_ACTION',"Action");
jr_define('COMMON_VIEW',"View");

jr_define('BACKTOTOP',"Back to top");

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

jr_define('_JOMRES_INPUTFILTERING',"Input filtering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

jr_define('COMMON_PRINT',"Print");

jr_define('COMMON_EDIT',"Edit");
jr_define('COMMON_COPY',"Copy");


jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Use Jomres Bootstrap templates in the frontend?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Use Jomres Bootstrap templates in the administrator area?");

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Here are some alternatives you might want to consider.");

jr_define('_JOMRES_BEEZ_WARNING',"Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.");

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES" , "About Jomres");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN" , "1 main");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Getting started");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE" , "system maintenance");
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL" , "Access Control");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS" , "developer tools");
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE" , "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES" , "languages");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION" , "income generation");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING" , "accounting");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS" , "bookings");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE" , "site structure");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT" , "user management");
jr_define( "_JOMRES_CUSTOMCODE_MANUAL" , "Manual (online)");
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE" , "My Account (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS" , "scheduled tasks");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL" , "portal functionality");
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER" , "Plugin manager");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION" , "integration");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS" , "reports/statistics");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES" , "taxes");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS" , "Tickets (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES" , "Upgrades");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS" , "payment methods");

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT" , "Tariff default");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC" , "This only applies to new tariffs");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW" , "Years to show");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC" , "Defines the number of years to show when editing a tariff type");

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Login");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Logout");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "dashboard");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK" , "reserve");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS" , "management");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS" , "settings");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC" , "misc");
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS" , "SRPs");

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE" , "Edit country");
jr_define( "_JOMRES_EDIT_COUNTRY_ID" , "Country id");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME" , "Country name");

jr_define( "_JOMRES_EDIT_REGION_TITLE" , "Edit region");
jr_define( "_JOMRES_EDIT_REGION_ID" , "Region id");
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME" , "Region name");


jr_define( "_JOMRES_COM_LISTCOUNTRIES" , "List countries");
jr_define( "_JOMRES_COM_LISTREGIONS" , "List regions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS" , "Export definitions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO" , "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.");

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS" , "Translate locales");
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES" , "Translate lang file strings");
jr_define( "_JOMRES_COM_NOTAMANAGER" , "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature.");

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT" , "Property list default layout");

jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that'); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF" , "Stay for a minimum of");
jr_define( "_JOMRES_NIGHTSFOR" , " nights for ");


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS" , "Property list images, show the property image as a gif if slideshow images are available.");
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY" , "Show as GIFs only if the property is a featured property.");

jr_define( "_JOMRES_AGENT" , "Agent");
jr_define( "_JOMRES_AGENT_DETAILS" , "Agent details");
jr_define( "_JOMRES_AGENT_LISTINGS" , "Agent's listings");
