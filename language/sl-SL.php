<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Hitra rezervacija');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Prikaži profile');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Splošne nastavitve');
jr_define('_JOMRES_COM_MR_BACK', 'Nazaj');
jr_define('_JOMRES_COM_MR_YES', 'Da');
jr_define('_JOMRES_COM_MR_NO', 'Ne');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nova');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nov objekt');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Nov gost');
jr_define('_JOMRES_COM_MR_SAVE', 'Shrani');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Ime');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Prihod');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Odhod');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Ime uporabnika');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Raven dostopa');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Uporabniško spremenjeno');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Vse rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Uredi rezervacijo');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Prih/Odh');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gost');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Soba');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Plačilo');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Ime');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Priimek');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Posebne zahteve');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Upoštevajte, da je za nekatere posebne zahteve potrebno doplačilo.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Preklic rezervacije');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Hišna številka ali ime');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Kraj');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Pošta');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilni telefon');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-naslov');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Rezervacije ni mogoče preklicati, ker je stranka že prijavljena');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Polog ni plačan');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potrdite preklic');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervacija preklicana');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dni do prihoda');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Vrsta rezervacije');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Potrjena');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepcija');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Ime sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Soba');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Nadstropje');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Dostop za invalide na voljo?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Največ oseb');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Vrsta sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Opis vrste sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Seznam lastnosti sobe');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Polog plačan');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Vpišite polog');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Skupno za plačilo');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Oznaka pologa');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervacija');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Polog');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Polog shranjen');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Naše sobe');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Objekt');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Vrsta sobe');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Urejanje podatkov gosta');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Ime');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Priimek');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Hišna št.');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Kraj');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Pošta');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefon');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobilni telefon');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Faks');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Izberite možnost');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Število nočitev');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Skupaj');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Pokaži nastavitve sob in objektov');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Sobe');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Lastnosti sob');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Vrste sob');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Objekt');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Lastnosti objekta');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Soba');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Vrsta');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Številka');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Nadstropje');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Najv. oseb');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Lastnosti');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Uredi predmet');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Lastnosti sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Opis lastnosti');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Lastnost sobe dodana');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Lastnost sobe osvežena');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Vrsta sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Okrajšava vrste sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Opis vrste sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Vrsta sobe dodana');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Uredi predmet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Kraj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Regija');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Država');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Pošta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Faks');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-naslov');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Spletna stran');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Lastnosti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Objekt osvežen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Lastnosti objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Okrajšava lastnosti objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Poln opis lastnosti objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Lastnost objekta osvežena');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarife');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Naziv tarife');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Veljavna od');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Veljavna do');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tafifa na noč');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Najm. dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Najv. dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Najm. oseb');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Najv. oseb');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Vrsta sobe');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Prezri PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Dovoli konce tedna');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Uredi predmet');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Preslikaj predmet');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa izbrisana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Uredi tarifo');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervacija shranjena');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Prijava gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Odjava gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Seznam rezervacij');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Nadzorna plošča');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Upravljanje gostov');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Upravljanje objektov');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Preveri razpoložljivost');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Ime');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Priimek');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Hišna št..');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Kraj');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Pošta');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilni telefon');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Ni sob, ki bi ustrezale zahtevanim pogojem');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Zahvaljujemo se vam za rezervacijo in upamo, da bo vaše bivanje prijetno.<br><br> <b>Upoštevajte, da je rezervacija le predhodna in bo potrjena šele s pisnim potrdilom, ki ga prejmete od nas.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Prijava gosta ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gost prijavljen ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Odjava gosta ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Doplačila');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarife in valute');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Nalaganje datotek');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Doplačila za eno osebo');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Če želite obračunavati doplačila za eno osebo, izberite Da');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Vrednost doplačila za eno osebo');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Je zahtevani polog odstotna vrednost?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Je zahtevani polog odstotek skupne vrednosti rezervacije? Če ni, vnesite vrednost pologa');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Vrednost zahtevanega pologa');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Na osebo, na noč');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Izberite Da, če želite polog obračunati na osebo na noč. Če tega ne želite, bo vrednost obračunana na sobo na noč');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Velikost datoteke');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Največja velikost slike v kilobajtih');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Rezervirano');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Podrobnosti rezervacije');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Upoštevajte, da je rezervacija pravno zavezujoča pogodba, zato ste obvezani, da kljub morebitni odpovedi ali preklicu plačate poln znesek.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Stroški preklica ali skrajšanja</i> Če prekličete dopust, mora biti preklic v pisni obliki. Stroški preklica so naslednji:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Dan prihoda do 14 dni');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Natisni potrditveno pismo');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Izpis računa');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Število nočitev: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena na noč: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Skupaj');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Natisni račun');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Računu dodaj storitev');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Opis storitve');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Vrednost storitve');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Drugi predmeti računa');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Predmet dodan računu');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Naloži sliko');
jr_define('_JOMRES_FILE_UPLOAD', 'Nalaganje datoteke');
jr_define('_JOMRES_COM_A_ODDS', 'Razno');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Izbrišem sliko?');
jr_define('_JOMRES_FILE_DELETED', 'Datoteka izbrisana');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Izbriši');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Sobe ni mogoče izbrisati, ker ima rezervacije. Prekličite rezervacije in poskusite znova.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Soba izbrisana');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Izbriši lastnost sobe');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Lastnosti sobe ni mogoče izbrisati, ker je določena več sobam. Izbrišite lastnost za vse sobe.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Lastnost sobe izbrisana');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Izbriši lastnost objekta');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Lastnosti objekta ni mogoče izbrisati, ker je določena objektu. Izbrišite lastnost za ta objekt in poskusite znova.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Lastnost objekta izbrisana');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Izbriši vrsto sobe');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Vrsta sobe izbrisana');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Izbriši objekt');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Objekt izbrisan');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nimate ustreznih pravic za brisanje objekta.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Širina cele slike');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Kliknite za zemljevid');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Opis objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Preveri za obdobje');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Dejavnosti na tem območju');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Napotki za vožnjo');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Letališča');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Drugi prevozi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Politika in izjave');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Naslov');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Obiskovalci lahko rezervacijo opravijo na spletu');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Izberite Da, če želite ponuditi možnost spletnih rezervacij.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervacije veljajo za določeno obdobje');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Če izberete "Da", bodo rezervacije veljale za določeno obdobje. Če izberete "Ne", poskrbite, da "Prednastavljen dan prihoda" ni nastavljen na "Da" (razen če želite, da bi gostje prihajali na točno določen datum), saj v nasprotnem primeru ne bo veliko zadetkov v koledarju razpoložljivosti.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Obdobje rezervacije: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Sobe rezervacije');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Najdaljše obdobje, npr. 3 x 7 rezervacijskih obdobij = 21 dni');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Gre za apartma/kočo/vilo?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Pregled rezervacije');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Potrditev rezervacije');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Ponedeljek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Torek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Sreda');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Četrtek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Petek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sobota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Nedelja');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Po');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'To');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Sr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Če');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Pe');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'So');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Ne');
jr_define('_JOMRES_COM_A_AVLCAL', 'Razpoložljivost kap.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Barva pisave trenutnega datuma');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Barva pisave dni prikazanega meseca');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Barva pisave dni, ki niso v prikazanem mesecu');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Barva ozadja polja za dni, ko je objekt/soba na voljo');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Barva ozadja polja za dni, ki niso v prikazanem mesecu');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Barva ozadja polja za zasedene dni');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Barva ozadja polja za začasno rezervirane sobe (rezervacije, za katere polog še ni bil plačan)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Barva ozadja polja za pretekle dni');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Zasedeno/Ni na voljo');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Prosto za rezervacije');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Začasne rezervacije');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Prednastavljeni da prihoda');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Le za strani, ki nudijo v naprej določena obdobja rezervacij. Izberite dan, s katerim se začnejo prihodi.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Določen dan prihoda');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Obdobje bivanja (dni)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Prikaz koledarja razpoložljivosti?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Izberite Da, če želite prikazati koledar razpoložljivosti');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Razpoložljivost');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Če si želite ogledati obrazec za rezervacijo, kliknite na nezaseden datum.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Potrjene rezervacije');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nova potrjena rezervacija');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Izbriši gosta');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gost izbrisan');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Gosta ni mogoče izbrisati, ker ima odprte rezervacije. Prekličite rezervacije in poskusite znova.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Katera koli izbira');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Izstopna oblika koledarja');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Vstopna oblika koledarja');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'To uporabniku omogoča spremembo vstopne oblike datumov v sistemu Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Dovoli kratke premore med rezervacijami v naprej določenih obdobij');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Dolžina premora');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Objavljeno');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Sled za preverjanje');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Uporabnik (uporabniško ime)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filter po datumu');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Stanje');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Pričakovan prihod');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Prihod danes');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Trenutno nastanjeni');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Odhod danes');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Rok odhoda pretekel');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Ni prišel');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Soba ustvarjena');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Soba osvežena');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Soba izbrisana');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Lastnost sobe ustvarjena');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Lastnost sobe osvežena');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Lastnost sobe izbrisana');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Objekt ustvarjen');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Objekt osvežen');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Objekt izbrisan');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Lastnosti objekta spremenjene');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Objekt objavljen');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarifa ustvarjena');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarifa osvežena');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Cena storitve dodana');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Prijava gosta');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Polog vnesen');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Gost ustvarjen');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Gost osvežen');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervacija sobe');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Dodatek ustvarjen');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Dodatek osvežen');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Dodatek izbrisan');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Dodatek objavljen');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Potrjena rezervacija vnesena');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Potrjena rezervacija izbrisana');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Dodatki');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Opis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Dodatek osvežen');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Uredi predmet');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Dodatek izbrisan');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Upravitelj dodatkov');
jr_define('_JOMRES_COM_A_EXTRAS', 'Prikaz dodatkov ob rezervaciji?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Če izberete Da, bodo gostu pri rezervaciji prikazani tudi izbrani dodatki');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Dodatki.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Začetni datum potrjene rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Storitev se nadaljuje z dnem');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Potrjene rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Pri poskusu rezervacije sob je prišlo do napake, ker je najmanj ena od sob zasedena.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Sobe vključene v potrjeno rezervacijo');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Seznam potrjenih rezeracij je prazen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Število zvezdic');
jr_define('_JOMRES_COM_A_RESET', 'Ponastavi');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervacija preklicana');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Poišči:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Oznaka valute');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Koda valute');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Kliknite, če želite več podatkov');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Omejitev zgodnjih rezervacij?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Če želite omejiti zgodnje rezervacije, izberite Da (v naslednjem polju določite omejitev, izraženo v dneh). Če ste izbrali Da in uporabnik hoče rezervirati več kot n dni v naprej, bo datum prihoda vrnjen na današnji datum');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Omejitev zgodnjih rezervacij (dni v naprej):');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Davek');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Davek za sobo');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Določena vrednost davka');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Odstotna vrednost davka');
jr_define('_JOMRES_COM_A_EUROTAX', 'Davek');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Odstotna vrednost davka');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arhiviraj vse zapise');
jr_define('_JOMRES_FRONT_TARIFFS', 'Naše tarife');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Ime tarife');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Opis tarife');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Vrsta sobe');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Velja od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Velja do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Na osebo na noč');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Nočitev');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Izključujoč konce tedna');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Najmanj dni');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Največ dni');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Najmanj oseb');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Največ oseb');
jr_define('_JOMRES_FRONT_PREVIEW', 'Predogled');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Urejanje dne?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Besedilo po izbiri osveženo.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Sprememba jezika');
jr_define('_JOMRES_FRONT_PTYPE', 'Vrsta objekta');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Seznam vrst objektov');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Uredi vrsto objekta');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Vrsta objekta');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Opis vrste objekta');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Vrsta objekta shranjena');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Ena ali več vrsto bjektov izbrisanih.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Opomnik plačila');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Ni dodatnih storitev za obračun');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Polog');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Poln znesek');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Znesek, obračunan ob rezervaciji');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'S to možnostjo določite, kolikšen znesek želite obračunati ob rezervaciji. Izberite Polog, če želite obračunati le polog, oziroma Poln znesek, če želite obračunati poln znesek.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Prikaz mesecev na koledarju');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Koliko mesecv želite prikazati na koledarju razpoložljivosti sobe?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Prehodi');
jr_define('_JOMRES_COM_A_CANCEL', 'Prekliči');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Izberite sobe, ki jih želite odstraniti iz ponudbe in datum odstranitve. <br>Če soba ni označena, je ne morete vključite med potrjene rezervacije, dokler odprte rezervacije ne potečejo, oziroma jih ne prekličete.<br/> Ko izberete ustrezne datume, kliknite na modri gumb "Uporabi" in ponovno preverite razpoložljivost sobe. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Vse kaže, da vas je sistem Joomla odjavil zaradi nedejavnosti.</b> Prosimo, prijavite se in poskusite znova.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Vzrok');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Uporaba plačilnih prehodov?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Prosimo, izberite način plačila.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Prehod vključen?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Nastavitev vtičnika spremenjena');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Nastavitev vtičnika vnesena');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Uredi kreditno kartico');
jr_define('_JOMRES_COM_A_EDITICON', 'Uredi velikost ikone');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slikovna predstavitev');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Prikaz povezave za slikovno predstavitev?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Naj bo slikovna predstavitev vključen v stran?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slikovna predstavitev');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Prikaz povezav za tarife?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Uporaba pojavnih oken?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Nalaganje slik slikovne predstavitve');
jr_define('_JOMRES_A_TABS_MISC', 'Razno');
jr_define('_JOMRES_A', 'Nastavitve spletnega mesta');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Uporabi splošne lastnostni nastavitev');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Izberite iskalni vtičnik, ki ga želite uporabiti.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Žal iskanje ni našlo zadetkov. Spremenite pogoje iskanja in poskusite znova.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Ali to resnično želite?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervacija sobe');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezerviraj ta objekt');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Prikaz tarif na strani?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Naslov');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Podrobne informacije');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Kliknite za prikaz razpoložljivosti sob');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Prikaz podatkov o naslovu pod povezavo');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Prikaz podrobnih podatkov o objektu pod povezavo');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Prikaz podatkov o razpoložljivosti sob pod povezavo');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Enotne tarife');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Povprečja');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Uporabite tarifni model, ki ga želite uporabiti.');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Obstajata dve možnosti izračuna tarif. 'Enotna tarifa' omogoča ponudbo različnih tarif, ki pa se za celotno obdobje bivanja ne spremenijo. Metoda je uporabna, če želite za isto obdobje ponuditi več različnih tarif, npr. prenočišče in zajtrk, polpenzijon. 'Povprečno' tarifo izberite, če želite cene prilagajati datumom. Jomres poišče vse tariffe za posamezne dni bivanja, jih sešteje in izračuna povprečno vrednost za celotno obdobje.");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Prikaz vnosa datuma odhoda?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Izberite Ne, če ne želite prikazati okenca za vnost datuma odhoda. Možnost uporabite, le če ste s programom dobro seznanjeni, saj je samodejna nastavitev datuma odhoda dan po dnevu prihoda.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Omejitev opisa');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Ta nastavitev omeji število znakov, ki jih seznam objektov vzame iz opisa objekta.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Vrsta oblike uporabljenega datuma ()?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Kliknite za objavo');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Kliknite za odstranitev objave');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Uporabi splošne vrste sob');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Če želite vrsti sobe določiti sliko, morate najprej slike naložiti v mapo /images/stories/jomres/rmtypes/. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Napačen vnos barve ozadja');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Privzeta država v rezervacijskem obrazcu');
jr_define('_JOMRES_JAVASCRIPT_', 'Elementi, označeni z rdečo zvezdico, so obvezni.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Uporabniki lahko registrirajo svoje objekte?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Izberite Da, če želite uporabnikom dovoliti samostojno registracijo objektov brez posredovanja upravitelja.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Elementi, označeni z rdečo zvezdico, so obvezni.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Objekt ustvarjen');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Prikaz koledarja od začetka leta?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Koledar razpoložljivosti se začne z letošnjim letom.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Število prostih sob');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Nazaj na podrobnosti objekta');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Vrste sob');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Omejitev naključnega iskanja');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Prikaz povezave Google za preračunavanje valut na seznamu tarif?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Tarifo pretvori v :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Ali lahko uporabniki uporabljajo html urejevalnike?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'V tem obrazcu izpolnite rezervacijo. Če želite več podatkov o stolpcu, miškin kazalec premaknite na ikono "i". Spremenite podrobnosti rezervacije, kot so datum prihoda in odhoda ali število gostov, nato pa s seznama razpoložljivih sob izberite sobe, ki jih potrebujete. Kliknite na sobo, ki jo želite dodati rezervaciji. Ko zaključite, lahko izberete dodatne zahteve in izpolnete osebne podatke. Ko vnesete vse potrebne podatke, se bo pojavil gumb za potrditev rezervacije.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'V tem obrazcu izpolnite rezervacijo. Če želite več podatkov o stolpcu, miškin kazalec premaknite na ikono "i". Spremenite podrobnosti rezervacije, kot so datum prihoda in odhoda ali število gostov. When done, you can add any optional extras you may require and provide your address details. Ko zaključite, lahko izberete dodatne zahteve in izpolnete osebne podatke. Ko vnesete vse potrebne podatke, se bo pojavil gumb za potrditev rezervacije.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Podrobnosti rezervacije');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Izberite podrobne zahteve vaše rezervacije');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Razpoložljivost ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Izberite sobe, ki jih potrebujete');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Tukaj preverite, če je soba trenutno prosta.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Dodatne možnosti');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Izberite dodatne možnosti, ki jih želite vključiti v rezervacijo');
jr_define('_JOMRES_COM_PERDAY', 'Na noč');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'vaš naslov');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Prosimo, da vnesete svoje podatke. Obvezna so vsa polja razen številke mobilnega telefona.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Proste sobe');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Izbrane sobe');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Najzgodnejši možni datum prihoda je: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Na noč:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Skupaj:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Dodatki:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Davek:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Popust:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Končni znesek:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gostov');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Kliknite, če želite sobo dodati izboru');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Kliknite, če želite sobo odstraniti iz izbora');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Vrste gostov');
jr_define('_JOMRES_VARIANCES_TYPE', 'Vrsta');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Vrsta gosta, npr. otroci 5-10 let ali študenti. ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Opomba');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Morebitne opombe glede vrste gosta');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Največ');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Največje število posameznikov te vrste gosta, ki ga lahko izberete v rezervacijskem obrazcu');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Je odstotek');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Število se izračuna, kot delež vseh gostov v sobi. Če izberete Ne, bo število preprosto vsota ali razlika osnovnega in izbranega števila gostov v sobi.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Prištevanje odstopanja?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Število je vsota ali razlika osnovnega in izbranega števila gostov v sobi. Izberite Ne, če želite izbrano število odšteti od osnovnega števila. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Spremenljivka');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Vrednost odstopanja');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Vrsta gosta spremenjena');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Vrsta gosta izbrisana');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Vrsta gosta ustvarjena');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Vrsta gosta osvežena');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Vrsta gosta osvežena');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Prikaz povezave seznama sob na strani s podrobnostmi objekta?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Prikaz <b>izključno</b> koledarja razpoložljivosti sob?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Če izberete Da, ne bodo prikazane glava objekta in podrobnosti, tako da bo na strani podrobnosti objekta prikazan le koledar razpoložljivosti sob. Uporaben predvsem, če oddajate objekte, ki so prikazani z eno samo sobo(npr. apartmaje ali koče).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Najmanjši interval med prihodom in odhodom');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Najmanjši interval med prihodom in odhodom, ki je na voljo na rezervacijskem obrazcu.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Prikaz številke sobe na seznamu sob rezervacijskega obrazca');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Prikaz imena sobe na seznamu sob rezervacijskega obrazca');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Prikaz številke tarife na seznamu sob rezervacijskega obrazca');
jr_define('_JOMRES_ORDER', 'Naročilo');
jr_define('_JOMRES_REQUIREDFIELDS', 'Zahtevano');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dni pred prihodom');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Najmanjšte število dni med današnjim dnem in dnem prihoda.');
jr_define('_JOMRES_DTV', 'Variacije vsrte datuma');
jr_define('_JOMRES_DTV_DOW', 'Dan v tednu');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Privzeta vrsta gosta');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Privzeto število prve vrste gosta. Če uporabljate vrste gostov, je to število, ki bo na rezervacijskem obrazcu prikazano kot prva vrsta gosta.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Spletne rezervacije le za registrirane uporabnike?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Žal morate biti za spletno rezervacijo registriran uporabnik. Tukaj kliknite za registracijo na strani. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Barva pisave povezave trenutnih rezervacij');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Obrobe konca tedna');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Soba je rezervirana');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Potrjena rezervacija');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokrožanje pologa na najbližje celo število?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Zaračunavanje pologa?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Shranjevanje obračunanih tarif kot tedenskih vrednosti?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Obračunane tarife lahko shranjujete kot dnevne ali tedenske vrednosti. Če jih želite shranjevati tedensko, morate izbrati Da.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Cena na teden');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Število določenih datumov prihoda: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Če so izbrani določeni datumi prihoda, je to število datumov, ki so prikazani na seznamu.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Datum prihoda ni veljaven');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Datum odhoda ni veljaven');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Obdobje rezervacije je prekratko. Med prihodom in odhodom mora biti najmanj naslednje število dni:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Interval je');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Vrsta gosta ni veljavna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Izberite število/vrsto gostov');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Glede na tarife, ki so na vojo, ste izbrali preveliko število gostov.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Izbrali ste več sob, kot gostov. Odstranite odvečne sobe.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Število gostov je večje od števila postelj.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Izbrati morate več sob.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Izberite sobo.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Ime je obvezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Priimek je obvezen');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Hišna številka je obvezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Ulica je obvezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Kraj je obvezen');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Regija je obvezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Poštna številka je obvezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Država je obvezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefonska št. je obvezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Številka mobilnega telefona je obvezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'E-naslov je obvezen');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Imamo proste sobe!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Sobe še niso izbrane.');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezervačija št.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ozadje okenca za možnost rezervacije');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Odstranjevanje spremenljivk predlog?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Izberite Da, če želite ustvariti DHTML odložišče spremenljivk datoteke predloge uporabniške strani FRONTEND za odprto stran. Uporabno, če želite preveriti, ali je določen element predloge na voljo.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Število je odstotna vrednost');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Izberite Da, če želite, da je izračun po osebi odstotna vrednost. V nasprotnem primeru bo vrednost navadno število.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Omejitev razpoložljivih sob/tarif');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'S to možnostjo omejite število prostih sob in razpoložljivih tarif na rezervacijskem obrazcu. Če izberete nič, ni omejitve. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Trenutno nimamo prostih sob!');
jr_define ('_JOMRES_BOOKITNOW', 'Rezerviraj zdaj:');
jr_define ('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Globalni način urejanja?');
jr_define ('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Pazite na to funkcijo. Če je nastavljeno na Da, bo način urejanja vplival na besedilo po meri za VSE lastnosti v sistemu za konstanto, ki jo urejate.');
jr_define ('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Simbol globalne valute');
jr_define ('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponenta zavita');
jr_define ('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Nastavite na Da, če želite spletno mesto prisiliti v pogled celotne strani. To je lahko koristno, če nameravate dostopati do spletnega mesta prek vstavljenih okvirjev.');
jr_define ('_JOMRES_COM_WEEKENDONLY', 'Samo vikendi');
jr_define ('_JOMRES_COM_WEEKENDDAYS', 'Dnevi ob vikendih');
jr_define ('_JOMRES_COM_WEEKENDDAYS_DESC', 'Nastavite dneve ob koncu tedna. Tarife, ki dovoljujejo ali ne dovoljujejo vikendov, bodo pri ustvarjanju seznama sob upoštevale to nastavitev.');
jr_define ('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Izberite svojo državo, preden dodate kakršne koli podatke o nepremičnini');
jr_define ('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Shranite spremembe lastnosti pred nalaganjem slike lastnosti');
jr_define ('_JOMRES_TARIFFSFROM', 'Cene od -');
jr_define ('_JOMRES_SEARCH_ALL', 'Vse');
jr_define ('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Država');
jr_define ('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Regija');
jr_define ('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Mesto');
jr_define ('_JOMRES_SEARCH_FEATURE_INFO', 'Funkcije');
jr_define ('_JOMRES_SEARCH_BUTTON', 'Iskanje');
jr_define ('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Iskalni izraz');
jr_define ('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Iskalne besede (-e):');
jr_define ('_JOMRES_SEARCH_AVL_INFO', 'Vnesite predvidene datume prihoda in odhoda in pritisnite gumb, da poiščete nepremičnine, ki imajo na voljo izbrane datume.');
jr_define ('_JOMRES_SEARCH_PTYPES', 'Seznam vseh lastnosti glede na vrsto lastnosti');
jr_define ('_JOMRES_SEARCH_RTYPES', 'Seznam vseh lastnosti glede na vrsto sobe');
jr_define ('_JOMRES_SORTORDER_DEFAULT', 'Privzeto');
jr_define ('_JOMRES_SORTORDER_PROPERTYNAME', 'Ime nepremičnine');
jr_define ('_JOMRES_SORTORDER_PROPERTYREGION', 'Regija lastnine');
jr_define ('_JOMRES_SORTORDER_PROPERTYTOWN', 'Lastniško mesto');
jr_define ('_JOMRES_SORTORDER_STARS', 'Zvezde');
jr_define ('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Podrobnosti o nepremičnini');
jr_define ('_JOMRES_PATHWAY_BOOKINGFORM', 'Obrazec za rezervacijo');
jr_define ('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Posodobi podatke o naslovu');
jr_define ('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Ponovno preverjanje razpoložljivosti sobe <br/> (izbira sobe bo ponastavljena)');
jr_define ('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Ponovno preverjanje razpoložljivosti');
jr_define ('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Spreminjanje vaših izbirnih dodatkov');
jr_define ('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Spreminjanje izbire sobe');
jr_define ('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Posodabljanje podatkov o naslovu');
jr_define ('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Žal je eno ali več naslovnih polj napačno.');
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Slika sobe');
jr_define ('_JOMRES_CURRENCYFORMAT', 'Oblika valute');
jr_define ('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Možnosti iskanja');
jr_define ('JOMRES_COM_A_AVAILABLELOGS', 'Datoteke dnevnika');
jr_define ('JOMRES_COM_A_MESSAGE', 'Sporočilo');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define ('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Običajno');
jr_define ('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Napredno');
jr_define ('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Mikro upravljanje');
jr_define ('JOMRES_COM_A_TARIFFMODE', 'Način konfiguracije tarif');
jr_define ('JOMRES_COM_A_TARIFFMODE_DESC', "<b> Opozorilo: Preklop med različnimi vrstami tarif lahko povzroči izgubo podatkov. V zvezi s tem glejte spodnjo opombo </b>.
<br/> <br/>
Na voljo imate tri možnosti za konfiguriranje tarif. <br/>
Običajen način: Za vsako vrsto sobe boste imeli eno tarifo, ki bo veljala naslednjih 10 let. <br/>
Micromanage: Za vsako sobo/vrsto nepremičnine lahko spremenite ceno za vsak dan. <br/>
Napredno: \"stara\" Jomresova metoda upravljanja tarif. <br/>
<br/>
Različni tarifni načini vam omogočajo, da izberete način konfiguriranja tarif, ki vam najbolj ustreza. <br/>
Običajen način je najbolj poenostavljen, vendar ga je najlažje razumeti, saj bo referenčne sobe in tarife prekrival z vrstami sob/nepremičnin in vam omogočil, da na isti strani konfigurirate sobe in cene. <br/>
Mikro upravljanje vam omogoča, da vsakodnevno spreminjate stopnje, ne da bi morali upravljati sklope tarif. Posledično se za vas ustvarijo številne tarife, ki pokrivajo določeno časovno obdobje, vendar tarif ne morete prelagati drug na drugega. <br/>
Napredni način vam omogoča, da ustvarite sobo in jo povežete z vrsto sobe. Nato ustvarite tarifo in to povežete s tipom sobe. S to metodo je možno \"preložiti\" tarife drug na drugega, na primer soba tipa \"zakonska postelja\" ima lahko eno tarifo za nočitev z zajtrkom, drugo pa za nočitev, zajtrk in večerni obrok. Napredna metoda zahteva malo več pozornosti do podrobnosti, ker je mogoče ločiti sobo ali tarifo od vrste sobe/nepremičnine ali napačno nastaviti veljavno od in do datumov, vendar vam daje možnosti konfiguracije, ki jih imajo drugi načini ne ponujajo. <br/>
<br/>
Ker način Normal in Micromanage za delovanje tarifnega načina zahtevata posebno nastavitev sob in tarif, bo sistem morda moral ponastaviti nekatere podatke, da bodo trenutne konfiguracije tarif združljive s trenutnim načinom urejanja tarif. <br/>
<br/>
Običajno -> Napredno. Ni sprememb. Obstoječe tarife se ohranijo. <br/>
Običajno -> Mikro upravljanje. Vse obstoječe tarife so odstranjene. <br/>
Napredno -> Običajno. Vse obstoječe tarife so odstranjene. <br/>
Napredno -> Mikro upravljanje. Vse obstoječe tarife so odstranjene. <br/>
Mikro upravljanje -> Napredno. Vse obstoječe navzkrižne povezave med tarifami se odstranijo, same tarife pa bodo ostale. <br/>
Mikro upravljanje -> Normalno. Vse obstoječe navzkrižne reference in tarife so odstranjene. <br/> ");
jr_define ('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Pokaži seznam sob na strani s podrobnostmi o nepremičninah?');
jr_define ('JOMRES_PROPERTYTYPE', 'Vrsta lastnosti');
jr_define ('JOMRES_MAXPEOPLEINROOM', 'Največ ljudi na sobo');
jr_define ('JOMRES_MAXPEOPLEINBOOKING', 'Največ ljudi v rezervaciji');
jr_define ('_JOMCOMP_BOOKINGNOTES_ADD', 'Dodaj opombo');
jr_define ('_JOMCOMP_BOOKINGNOTES_EDIT', 'Uredi opombo');
jr_define ('_JOMCOMP_BOOKINGNOTES_DELETE', 'Izbriši opombo');
jr_define ('_JOMCOMP_BOOKINGNOTES_VIEW', 'Ogled zapiskov');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Dodana nova opomba');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Urejena opomba');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Izbrisana opomba');
jr_define ('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Seznam rezervacij');
jr_define ('_JOMCOMP_MYUSER_MYBOOKINGS', 'Moje rezervacije');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKING', 'Ogled rezervacije');
jr_define ('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Prikaži priljubljene');
jr_define ('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Niste še dodali priljubljenih!');
jr_define ('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Vrsta lastnosti');
jr_define ('_JOMCOMP_WISEPRICE_TITLE', 'Pametna cena');
jr_define ('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktivno');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Ta vtičnik vam omogoča dinamično omogočanje in konfiguriranje cen sob.');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Večina podjetij bo preračunala cene sob glede na število sob zahtevane vrste, ki so na voljo na določen datum. To jim omogoča, da ponujajo popuste za vrsto sobe, ki v danem trenutku ni zasedena. obdobje z namenom privabiti podjetja, ki bi jih sicer lahko zamudili. <br/> Če omogočite in konfigurirate ta vtičnik, lahko ponudite prilagodljive cene glede na število sob izbrane vrste, ki so na voljo v nepremičnini na določen dan. <br /> Prag dni določa število dni, v katerih mora biti datum prihoda, preden se cene sobe prilagodijo s to funkcijo, nato pa možnosti za odstotke omogočajo nastavitev odstotka sob, ki so na voljo, preden se uporabi določen popust. ' );
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD', 'Prag (število dni med datumom prihoda in danes)');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Odstotne sobe zasedene 10%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Odstotne sobe zasedene 25%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Odstotek zasedenih sob 50%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Odstotek sob zasedenih 75%');
jr_define ('_JOMCOMP_WISEPRICE_DISCOUNT', 'Popust %');
jr_define ('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'je znižano');
jr_define ('_JOMCOMP_WISEPRICE_TO', 'do');
jr_define ('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'Cena sobe ni znižana');
jr_define ('JOMRES_COM_A_MAPSKEY', 'Ključ API -ja za Google zemljevide');
jr_define ('JOMRES_COM_A_MAPSKEY_DESC', 'Ključ API-ja google maps lahko dobite na <a href = "https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key target="_blank"> Google zemljevidi </a>. Ko tukaj vnesete ključ zemljevida, bo Jomres prikazal zemljevid na strani s podrobnostmi o nepremičnini. ');
jr_define ('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define ('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktivno?');
jr_define ('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Nastavite na Da, če želite ponuditi last minute ponudbe.');
jr_define ('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Prag');
jr_define ('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Če je opravljena rezervacija in je datum prihoda le N dni od datuma rezervacije, se lahko uporabi popust');
jr_define ('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Popust');
jr_define ('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'V odstotkih');
jr_define ('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Za to rezervacijo je bil uporabljen popust!');
jr_define ('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Stroški bivanja so znižani za');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Ta lastnost ponuja popust v zadnjem trenutku');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', 'odstotek, če rezervirate za prihod prej');
jr_define ('_JOMCOMP_LASTMINUTE_ORMORE', 'odstotek ali več, če rezervirate za prihod prej');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Rezervirajte zdaj, da kar najbolje izkoristite to ponudbo!');
jr_define ('JOMRES_COM_A_VERBOSETARIFFINTO', 'Podrobne informacije o tarifi');
jr_define ('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Nastavite na Da, če želite prikazati podrobnejše informacije o tarifah v podrobnostih o lastnostih/pojavnem oknu tarife');
jr_define ('JOMRES_COM_A_MINIMALCONFIG', 'Zmanjšaj konfiguracijske možnosti');
jr_define ('_JOMCOMP_AMEND', 'Spremeni rezervacijo - izbira nepremičnine');
jr_define ('_JOMCOMP_AMEND_SELECTPROPERTY', 'Izberite lastnost');
jr_define ('_JOMCOMP_AMEND_HEADER', 'Prvotna pogodba:');
jr_define ('_JOMCOMP_AMEND_DEPOSITPAID', 'Depozit plačan');
jr_define ('_JOMCOMP_AMEND_DEPOSITDUE', 'Depozit ni plačan');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Preglasi depozit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define ('_JRPORTAL_CANCEL', 'Prekliči');
jr_define ('_JRPORTAL_CPANEL', 'Nadzorna plošča');
jr_define ('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Privzeta stopnja provizije');
jr_define ('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Izberite privzeto stopnjo provizije, ki bo uporabljena za nepremičnino, če druga stopnja provizije ni določena drugače.');
jr_define ('_JRPORTAL_CPANEL_LISTCRATES', 'Navedite provizije provizije');
jr_define ('_JRPORTAL_CPANEL_PATETITLE', 'Provizije');
jr_define ('_JRPORTAL_CRATE_TITLE', 'Naslov');
jr_define ('_JRPORTAL_CRATE_TYPE', 'Vrsta');
jr_define ('_JRPORTAL_CRATE_VALUE', 'Stopnja provizije');
jr_define ('_JRPORTAL_CRATE_CURRENCYCODE', 'Oznaka valute');
jr_define ('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Lastnosti seznama');
jr_define ('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Ime nepremičnine');
jr_define ('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Naslov nepremičnine');
jr_define ('_JRPORTAL_PROPERTIES_LEGEND', 'Lastnosti, katerih barva ozadja je rdeča, zanje še niso imele provizije.');
jr_define ('_JRPORTAL_STATS_PATETITLE', 'Statistika');
jr_define ('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Stopnja provizije');
jr_define ('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Rezervacije seznamov');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'ID nepremičnine');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'ID računa');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Skupna rezervacija');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Datum arhiviranja');
jr_define ('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Opis');
jr_define ('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Datoteke jezika, značilne za vrsto lastnosti, lahko nastavite tako, da nastavite opis na ime podmape, na primer "yachtbrokerage" in kopirate jezikovno datoteko v to podmapo. Nato lahko to jezikovno datoteko spremenite za to lastnost tip, tako da sobe postanejo na primer DVD -ji itd. ');
jr_define ('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Te lastnosti ne morete izbrisati, saj je edina lastnost, do katere imate dostop. Če jo želite onemogočiti, uporabite funkcijo za objavo v svoji orodni vrstici.');
// Jomres v3.0.6
// Jomres v3.1
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Skupaj nastanitev');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'noč (i) ob');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'na sobo');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Izboljšajte skupno bivanje');
jr_define ('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Povzetek cene');
jr_define ('_JOMRES_CONFIRMATION_ALERT', 'Prosimo, preberite in se strinjajte z');
jr_define ('_JOMRES_CONFIRMATION_HEADER', 'Spodaj je prikazan povzetek vaše rezervacije. <br /> Če želite narediti kakršne koli spremembe, kliknite gumb Spremeni rezervacijo.');
jr_define ('_JOMRES_CONFIRMATION_AMENDTEXT', 'Če morate spremeniti katerega od zgornjih podatkov, kliknite tukaj');
jr_define ('_JOMRES_CONFIRMATION_AMEND', 'Spremeni rezervacijo');
jr_define ('_JOMRES_CONFIRMATION_SPECIALS', 'Prosimo, da v spodnje polje vnesete posebne zahteve.');
jr_define ('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Potrjujem, da so zgornji podatki pravilni, in se strinjam z');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'na osebo na noč');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'od');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Začni');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Prejšnji');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Naslednji');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Konec');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Rezultati');
}
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Upoštevajte, da to ni obrazec za rezervacijo, temveč pošiljate e -poštno sporočilo. <br/> Vnesite sporočilo, ki bi ga radi poslali');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Stik s hotelom');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Poizvedba o nepremičnini od');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Hvala za poizvedbo, vaše sporočilo je bilo poslano na e -poštni naslov nepremičnine in prekopirano na vaš naslov za vašo evidenco. Odgovorili vam bodo čim prej s svojim odgovorom . ');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'glede');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Poizvedba');
jr_define ('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Prosimo, da na seznamu na desni izberete želeno namestitev');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Minimalno število sob je že izbrano');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Najmanjše število sob, ki so že izbrane pri rezervaciji, preden je mogoče ponuditi kombinacijo tarife/vrste sobe. Omogoča vam znižane tarife, če je že izbranih več kot N sob.');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Največ sob je že izbranih');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Največje število sob, ki so že izbrane pri rezervaciji, preden kombinacija tarif/sob ni več na voljo. Omogoča, da nehate ponujati to vrsto sobe/kombinacijo tarif, ko v obrazcu za rezervacijo izberete N sob.');
jr_define ('_JOMRES_COM_SPS_EDITROOM_DESC', 'Upoštevajte, da tukaj nastavljeni dodatki za eno osebo ne bodo uporabljeni, če so dodatki za eno osebo v splošni konfiguraciji nastavljeni na Da. Tu so nastavitve alternativa dodatkom za eno osebo po pavšalnih cenah in ne dodatek k stanovanju. stopnja SPS. ');
jr_define ('_JOMRES_AVLCAL_NOBOOKINGS', 'Na voljo');
jr_define ('_JOMRES_AVLCAL_QUARTER', 'Nekatere rezervacije');
jr_define ('_JOMRES_AVLCAL_HALF', 'Napol rezervirano');
jr_define ('_JOMRES_AVLCAL_THREEQUARTER', 'Večinoma rezervirano');
jr_define ('_JOMRES_AVLCAL_FULLYBOOKED', 'Popolnoma rezervirano');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Na teden');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Na dan');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Na rezervacijo');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Na osebo na rezervacijo');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Na osebo na dan');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Na osebo na teden');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Na dni (min dni)');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Na dan X izbranih sob');
jr_define ('_JOMRES_REGISTRYREBUILD', 'Obnovi register minkomponent in obnovi predpomnilnik');
jr_define ('_JOMRES_REGISTRYREBUILD_NOTES', "Običajno se register vtičnikov Jomres samodejno obnovi vsakič, ko si ogledate upravitelja vtičnikov in dodate ali odstranite vtičnik, vendar iz nekaterih razlogov teh funkcij ne morete uporabiti, zato lahko to funkcijo uporabite za obnovo Če imate dostop do funkcije upravitelja vtičnikov in nadgradenj, je malo verjetno, da boste morali uporabiti to funkcijo. Register vtičnikov boste morali obnoviti vsakič, ko dodate novo mini komponento in niste uporabili upravitelja vtičnikov. da ga dodam. ");
jr_define ('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Register uspešno obnovljen');
jr_define ('_JOMRES_REGISTRYREBUILD_FAILURE', 'Pri ponovni izgradnji registra minkomponent je prišlo do napake. V dnevniku napak Jomres preverite, ali obstaja zapis o tem, kaj je sprožilo napako.');
jr_define ('_JOMRES_SEARCH_PRICERANGES', 'Cena');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Niste še rezervirali!');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Uredite svojo vrsto nepremičnine');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Izberite svojo vrsto nepremičnine');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Vaša poizvedba ...');
jr_define ('_JOMRES_COM_A_LISTLIMIT', 'Omejitev seznama lastnosti');
jr_define ('_JOMRES_COM_A_LISTLIMIT_DESC', 'Število lastnin za prikaz na strani po iskanju');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Funkcija integriranega iskanja');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Funkcija integriranega iskanja Jomres uporabnikom omogoča iskanje po lastninah Jomres v skladu z nizom funkcij. Če ste že uporabljali iskalne funkcije Jomresa v Joomli, vam bodo te nastavitve poznane. <br/ > Ta funkcija nam omogoča, da v Jomresu ponudimo upravljanje iskanj tistim uporabnikom, ki ne želijo uporabljati iskalnih modulov Joomla, ali drugim uporabnikom CMS -ja, ki nimajo svojih iskalnih modulov Jomres. <br/> Ne pozabite, da če iščete nekaj po povezavi (tj. ne po spustnem meniju), druge možnosti iskanja ne bodo izvedene, le element, ki ustreza povezavi, ki ste jo kliknili. <br/> Upoštevajte, da privzeto postavitev tega integriranega iskanja ni zelo lepa. To je zato, ker mora datoteka predloge, ki izvaja postavitev, vsebovati vse možne možnosti, od katerih so nekatere nezdružljive. ');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktivirati to funkcijo?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Če je ta funkcija omogočena, bo vsak klic Jomresa, ki prikaže seznam lastnosti, prikazal tudi možnosti iskanja.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Uporabi stolpce');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Vsaka možnost iskanja, ki ste jo določili kot vrsto povezave (kjer je to primerno), bo prikazana kot stolpci (IE br vstavite na konec povezave)');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Išči regijo z izbiro kombiniranega spustnega menija');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Ponudite spustni meni iskanja za filtriranje po državah/regijah/mestih. Če boste uporabljali to funkcijo, je najbolje, da spodnjih iskanj po regijah/mestih ne uporabite.");
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Iskanje po imenu nepremičnine');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Prikaži iskanje po vnosu imena lastnosti.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Prikaži kot spustni meni?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Nastavite to na ne, če želite, da se seznam prikaže kot povezave');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Mesto/regija');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Prikaži vnos regije');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Prikaži kot spustni meni?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Nastavite to na ne, da se seznam prikaže kot povezave');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Iskanje po vrsti lastnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Prikaži iskanje glede na vnos vrste lastnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Prikaži kot spustni meni?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Nastavite to na ne, če želite, da se seznam prikaže kot povezave');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Iskanje po vrsti sobe');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Prikaži iskanje glede na vnos vrste sobe');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Prikaži kot spustni meni?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Nastavite to na ne, da se seznam prikaže kot povezave');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Funkcije');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Prikaži iskanje glede na vnos funkcije');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Prikaži kot spustni meni?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Nastavite to na ne, če želite, da se seznam prikaže kot slike in potrditvena polja');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Iskanje po opisu');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Pokaži iskanje po vnosu opisa');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Iskanje po razpoložljivosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Pokaži iskanje glede na vnos razpoložljivosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Iskanje po cenovnih razredih');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Prikaži iskanje glede na vnos cenovnih razredov');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Prirastki cenovnega razreda');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres bo pogledal vse vrednosti v tarifah in nato določil vrsto cenovnih razredov glede na vrednost prirastkov, ki ste jo nastavili tukaj.');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Privzeto, če lastnost ni izbrana v Jomresu, bo izvedla iskanje. Če iskalni modul ni sprožil tega iskanja, bo to iskanje prineslo naključne rezultate (namerno). Ta možnost vam omogoča, da omejite število donosov pri tem naključnem iskanju. ');
jr_define ('_JOMRES_COM_A_CRON_TITLE', 'Nastavitve in dnevniki opravil Cron');
jr_define ('_JOMRES_COM_A_CRON_DESC', 'Podatki o delu psevdokrona. Funkcija psevdokrona je potrebna pri izdajanju računov in upravljanju provizij.');
jr_define ('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Nameščene minkomponente cron. Če želite zagnati posamezno opravilo cron, uporabite spodnje povezave. Upoštevajte, da opravila cron ne proizvajajo nobenih rezultatov, zato na strani ne boste videli nobenih podatkov. Namesto tega se obrnite na opravilo spodaj se prijavite. ');

jr_define ('_JOMRES_COM_A_CRON_METHOD', 'Metoda');
jr_define ('_JOMRES_COM_A_CRON_METHOD_DESC', 'Če nimate dostopa do opravil cron, nastavite to na Minicomponent, sicer ustvarite opravilo cron in mu povejte, naj zažene <br /> <i> curl -s' .JOMRES_SITEPAGE_URL_AJAX. '& task = cmpron = '. get_showtime (' tmplcomponent ').' & no_html = 1>/dev/null </i> ');
jr_define ('_JOMRES_COM_A_CRON_LOGGING', 'Prikaži beleženje v brskalniku');
jr_define ('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Deluje samo, če je metoda nastavljena na Minkomponentno.');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Zapisovanje je omogočeno');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Nastavite na Da, če želite omogočiti beleženje. Rezultati dnevnikov bodo prikazani spodaj.');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Natančno beleženje');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Veliko rezultatov beleženja');
jr_define ('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Urejanje predloge');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Polja po meri');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Tukaj lahko določite preprosta polja po meri, ki bodo prikazana v obrazcu za rezervacijo.');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Ime polja (brez presledkov)');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Privzeta vrednost');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Opis');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Zahtevano');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Največja količina');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Če je največja količina nastavljena na več kot 1, bodo gostom ponujeni spustni meni, da izberejo količino dodatkov, ki jih potrebujejo.');
jr_define ('_JRPORTAL_TAXRATES_TITLE', 'Davčne stopnje');
jr_define ('_JRPORTAL_TAXRATES_CODE', 'Davčna številka');
jr_define ('_JRPORTAL_TAXRATES_DESCRIPTION', 'Opis ocene');
jr_define ('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Te davčne stopnje ne morete izbrisati.');
jr_define ('_JRPORTAL_TAXRATES_RATE', 'Oceni');
jr_define ('_JRPORTAL_INVOICES_TITLE', 'Računi');
jr_define ('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Neplačano');
jr_define ('_JRPORTAL_INVOICES_STATUS_PAID', 'Plačano');
jr_define ('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Preklicano');
jr_define ('_JRPORTAL_INVOICES_STATUS_PENDING', 'V teku');
jr_define ('_JRPORTAL_INVOICES_USER', 'Uporabnik');
jr_define ('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define ('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define ('_JRPORTAL_INVOICES_DUE', 'Rok');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Naročnina');
jr_define ('_JRPORTAL_INVOICES_INITTOTAL', 'Neporavnano skupaj');
jr_define ('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Ponavljajoča se frekvenca');
jr_define ('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Ponavljajoči se dan v mesecu');
jr_define ('_JRPORTAL_INVOICES_CURRENCYCODE', 'Oznaka valute');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS', 'Postavke vrstice');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Ime');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Opis');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Začetna cena');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Začetna količina');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Začetni popust');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Začetno skupaj');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Davčna koda');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Davčni opis');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Davčna stopnja');
jr_define ('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Preglasi standardne nastavitve prehoda Jomres?');
jr_define ('_JRPORTAL_INVOICES_SHOWINVOICES', 'Pokaži moje račune');
jr_define ('_JRPORTAL_COUPONS_TITLE', 'Kuponi za popust');
jr_define ('_JRPORTAL_COUPONS_DESC', 'Kode popustov lahko ustvarite in jih posredujete gostom kot spodbudo za rezervacijo. Velja od in do datumov, ki se nanašajo na datume, ko je mogoče opraviti rezervacijo, ne na datume same rezervacije.') ;
jr_define ('_JRPORTAL_COUPONS_CODE', 'Koda kupona');
jr_define ('_JRPORTAL_COUPONS_VALIDFROM', 'Velja od');
jr_define ('_JRPORTAL_COUPONS_VALIDTO', 'Velja za');
jr_define ('_JRPORTAL_COUPONS_AMOUNT', 'Znesek popusta');
jr_define ('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Popust je odstotek');
jr_define ('_JRPORTAL_COUPONS_ROOMONLY', 'Samo soba');
jr_define ('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Če imate kodo kupona, jo vnesite v polje in kliknite povezavo "Shrani kupon", če želite shraniti podatke o kuponu v rezervacijo.');
jr_define ('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Shrani kupon');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon shranjen proti rezervaciji');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Številka kupona ni najdena');
jr_define ('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Vrednost popusta na kupon');
jr_define ('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervacija znižana. Koda kupona/vrednost popusta/nastavitve kupona:');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES', 'Izberite jezike');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Izberite jezikovne možnosti, ki bodo prikazane v spustnem meniju za preklop jezika.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Prikaži spustni meni za izbiro jezika?');
/*
* @ignore
*/
jr_define ('_JRPORTAL_NEWUSER_DEAR', 'Spoštovani');
jr_define ('_JRPORTAL_NEWUSER_THANKYOU', 'Hvala za registracijo');
jr_define ('_JRPORTAL_NEWUSER_USERNAME', 'Vaše uporabniško ime je:');
jr_define ('_JRPORTAL_NEWUSER_PASSWORD', 'Vaše geslo je:');
jr_define ('_JRPORTAL_NEWUSER_LOG_IN', 'Prijavite se, če si želite ogledati svoje rezervacije');
jr_define ('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon shranjen');
jr_define ('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon izbrisan');
// Še ni uporabljeno
jr_define ('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Uporabniško ime');
jr_define ('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Geslo');
jr_define ('_JRPORTAL_SMS_CLICKATELL_APIID', 'ID ID');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Mobilna številka za obvestila');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Prosimo, uporabite obliko Koda države, številka mobilnega telefona. Na primer številka mobilnega telefona iz Združenega kraljestva bi bila na primer 447979123456. Pustite to polje prazno, če ne želite, da se na vaš mobilni telefon pošljejo obvestila po e -pošti telefon. ");
jr_define ('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b> Očitno tega prehoda ne morete uporabljati/preizkusiti z lokalnega gostitelja, to morate storiti na strežniku v živo. </b>
<br/>
<br/>
Če želite uporabljati prehod Clickatell, potrebujete račun Clickatell in vsaj eno registrirano povezavo (primerek podproizvoda API) med vašo aplikacijo in našim prehodom. Vsaka povezava
metoda je znana kot podprodukt. Takole: <br/>
<br/>
<b> 1. korak - registrirajte se za račun Clickatell </b> <br/>
Če še nimate računa Clickatell, ga morate registrirati, kot je opisano spodaj. V nasprotnem primeru nadaljujte z 2. korakom. <br/>
* Pojdite na http://www.clickatell.com/products/sms_gateway.php in izberite ustrezen podprodukt API (način povezave), ki ga želite uporabiti (Clickatell Central (API)) <br/>
* Kliknite na registracijsko hiperpovezavo. <br/>
* Izpolnite obrazec za registracijo. <br/>
Ko boste uspešno oddali obrazec, boste samodejno prijavljeni v svoj novi račun in preusmerjeni na stran, kjer lahko dodate izbrano povezavo API. <br/>
<b> 2. korak - dodajte registrirano povezavo API (podprodukt) </b> <br/>
Če še niste prijavljeni v svoj račun, morate to storiti na http://www.clickatell.com/login.php <br/>
* V zgornjem meniju izberite \"Upravljaj moje izdelke\". <br/>
* V spustnem meniju ('Dodaj povezavo') izberite vrsto povezave API, ki jo želite uporabiti (HTTP API). <br/>
* Izpolnite obrazec. Prepričajte se, da vnesete zaklenjeni IP (IP tega strežnika), nastavite Povratni klic na HTTP POST. Za povratni klic IP morate nastaviti ".get_showtime ('live_site')."/index.php? Option = com_jomres & task = sms_clickatell_callback ter uporabniški ID in geslo. <br/>
Če registrirate več povezav API, mora biti ime opisa, ki ga vnesete za vsako, edinstveno - ne morete imeti več API -jev z istim imenom. <br/>
Ko boste uspešno oddali obrazec, bodo prikazani vaši podatki za preverjanje pristnosti, vključno z edinstvenim ID -jem vsake povezave (api_id). Ti podatki za preverjanje pristnosti so potrebni pri povezovanju s prehodom Clickatell za pošiljanje sporočila. <br/>
<br/>
Uporabite svoj uporabniški ID, geslo in api_id, da zapolnite zgornja polja. <br/>
<br/>
");
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Seznam sob za obrazec za rezervacije prikazuje onemogočen dostop');
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Seznam sob za obrazec za rezervacije prikazuje največ ljudi');
jr_define ('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Upoštevajte, da so navedene cene sob ocenjene in polna cena rezervacije ne bo izračunana, dokler ne dodate sobe ali sob k svoji izbiri.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Naročninski paketi');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Ime');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Opis');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Objavljeno');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Celoten znesek');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Omejitev lastnine');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Naročite se');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_USE', 'Uporabi funkcijo obravnave naročnine');
jr_define ('_JOMRES_COM_NEWUSER', 'Ustvari novega uporabnika ob rezervaciji');
jr_define ('_JOMRES_COM_NEWUSER_DESC', 'Ustvari nov uporabniški račun pri rezervaciji neregistriranih uporabnikov.');
jr_define ('_JOMRES_CLICKTOREGISTER', 'Kliknite tukaj za registracijo svoje nepremičnine');
jr_define ('_JRPORTAL_NEWUSER_SUBJECT', 'Podrobnosti o novem uporabniku');
jr_define ('_JOMRES_LATLONG_DESC', 'Z miško se premikajte po zemljevidu in povlecite kazalec na lokacijo vaše nepremičnine, da nastavite zemljepisno širino in dolžino.');
jr_define ('_JOMRES_CONTROLPANEL', 'Nadzorna plošča');
// Jomres v4.2
jr_define ('_JOMRES_MANAGER_SHOWINVOICE', 'Pokaži račun');
jr_define ('_JOMRES_MANAGER_SHOWINVOICES', 'Prikaži račune');
jr_define ('_JOMRES_USER_LISTMYPROPERTY', 'Dodaj mojo lastnino na to spletno mesto');
jr_define ('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo:');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Žal ta ID paketa ni prepoznan.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Žal ste že naročeni na brezplačni paket, na ta paket se ne morete več naročiti.');
jr_define ('_JOMRES_COM_YOURBUSINESS', 'Podrobnosti o vašem podjetju');
jr_define ('_JOMRES_COM_YOURBUSINESS_NAME', 'ime podjetja');
jr_define ('_JOMRES_COM_YOURBUSINESS_VATNO', 'DDV številka');
jr_define ('_JOMRES_COM_YOURBUSINESSADDRESS', 'Številka stavbe');
jr_define ('_JOMRES_INVOICE_NUMBER', 'Št. računa');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Izberite datume, za katere želite uporabiti črno rezervacijo. Ko izberete ustrezne datume, kliknite gumb "Uporabi", da znova preverite razpoložljivost. <br/>
<br/>
Če ima nepremičnina eno ali več rezervacij za izbrano obdobje, je ne boste mogli rezervirati, dokler ne prekličete/rezervirate drugih rezervacij/črnih rezervacij. ');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Žal te nepremičnine za te datume ne morete rezervirati na črno.');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'To lastnost lahko za te datume dodate na črno.');
jr_define ('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Vaša nepremičnina je konfigurirana za zaračunavanje na osebo na noč, vendar nimate ustvarjenih ali objavljenih nobenih vrst gostov, ustvarite in objavite eno ali več vrst gostov.');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Nimate še konfiguriranih tarif, ne boste mogli sprejeti nobenih rezervacij za svojo lastnino.');
jr_define ('_JOMRES_EDITINGMODE_ON', 'Način urejanja oznak vklopljen');
jr_define ('_JOMRES_EDITINGMODE_OFF', 'Način urejanja oznak izklopljen');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Plačati spremenljive vloge?');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Spremenljivi depoziti vam omogočajo, da določite, ali želite zaračunati celoten znesek, če je datum prihoda rezervacije v N dneh od "danes". To možnost nastavite na Da, če želite omogočiti funkcijo in vnesite spodnje število dni, tako da bo na primer, če je dan prihoda v 60 dneh, zaračunan znesek depozita celoten znesek, sicer bo znesek temeljil na zgoraj konfiguriranih možnostih depozita. ');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Število dni, v katerih bo celotni znesek zaračunan kot polog.');
jr_define ('_JOMRES_CONFIRMATION_EMAIL_SENT', 'E -poštno sporočilo je bilo poslano. To okno lahko zdaj zaprete.');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontaktni agent');
jr_define ('_JOMRES_INVOICE_MARKASPAID', 'Označi račun kot plačan');
jr_define ('_JOMRES_INVOICE_MARKEDASPAID', 'Račun označen kot plačan');
jr_define ('_JOMRES_APIKEY_REMAKE', 'Ustvari nov ključ API');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Je to ena sama namestitev lastnosti?');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Če je ta možnost nastavljena na Da, je pogled na Jomres od spredaj do nepooblaščenih uporabnikov zelo poenostavljen. Privzeti klici Jomresa iz možnosti menija, namesto da bi dobili seznam imetja, potrebujejo le gost na obrazcu za rezervacijo prve nepremičnine v sistemu. Upravitelji nepremičnin prav tako ne bodo videli gumba za predogled podrobnosti o nepremičnini ali gumba za dodajanje nove nepremičnine. Idealno, če želite navesti samo eno nepremičnino in zanjo opraviti rezervacije. <br /> ');
jr_define ('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Stanje plačila');
jr_define ('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Upoštevajte, da uporabljate način urejanja z omogočenim načinom globalnega urejanja. To je v redu, če razumete, kaj pomeni način globalnega urejanja, če pa tega ne storite, si lahko sami povzročite težave. Če niste prepričani če bi morali Jomres uporabljati na ta način, glejte <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode target="_blank"> stran z ročnim načinom urejanja </a> za več informacij o tej temi. ');
jr_define ('_JOMRES_SUPPORTKEY', 'Ključ podpore');
jr_define ('_JOMRES_SUPPORTKEY_DESC', 'Številka ključa licence za podporo (znana tudi kot številka licence). Za prenos vtičnikov za Jomres boste potrebovali posodobljeno licenco.');
jr_define ('_JOMRES_PERSONAL_DISCOUNT', 'Osebni popust');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Omejitev registracije nepremičnine na eno državo?');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Zagotovite lahko, da so registracije nepremičnin omejene na samo eno državo, tako da to možnost nastavite na Da in v naslednji možnosti nastavite državo.');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Lastnosti se nahajajo v tej državi:');
jr_define ('_JOMRES_JQUERYTHEME', 'Tema Jquery');
jr_define ('_JOMRES_JQUERYTHEME_DESC', 'Izberite temo jquery, ki jo želite uporabiti za zavihke s podrobnostmi o lastnostih.');
jr_define ('_JOMRES_PROPERTYNOTOUBLISHED', 'Žal ta lastnost trenutno ni na voljo.');
jr_define ('_JOMRES_REVIEWS', 'Ocene');
jr_define ('_JOMRES_REVIEWS_TITLE', 'Pregled naslova');
jr_define ('_JOMRES_REVIEWS_DATE', 'objavljeno');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS', 'Za to nepremičnino še ni ocen.');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Ali želite biti prvi, ki ocenjuje to nepremičnino?');
jr_define ('_JOMRES_REVIEWS_IAGREE', 'Strinjam se s tem pregledom');
jr_define ('_JOMRES_REVIEWS_IDISAGREE', 'Ne strinjam se s tem pregledom');
jr_define ('_JOMRES_REVIEWS_AVERAGE_RATING', 'Povprečna ocena:');
jr_define ('_JOMRES_REVIEWS_TOTAL_VOTES', 'Skupno glasov:');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW', 'Dodaj novo mnenje.');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Če želite objaviti mnenje, se morate prijaviti.');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY', 'Povejte nam, kaj mislite o tej nepremičnini:');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Ta recenzent nam je povedal:');
jr_define ('_JOMRES_REVIEWS_PROS', 'Pros:');
jr_define ('_JOMRES_REVIEWS_CONS', 'Proti:');
jr_define ('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Oddano dne:');
jr_define ('_JOMRES_REVIEWS_ALREADYREVIEWED', 'To nepremičnino ste že pregledali, o njej ne morete objaviti drugega mnenja.');
jr_define ('_JOMRES_REVIEWS_CANNOTREVIEW', 'Žal ne morete objavljati mnenj na tem spletnem mestu.');
jr_define ('_JOMRES_REVIEWS_CLICKTOSHOW', 'Pokaži ocene');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'gostje se strinjajo s tem mnenjem.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'gostje se s tem mnenjem ne strinjajo.');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'gost se strinja s tem mnenjem.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'gost se s tem mnenjem ne strinja.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Hvala, ker delite svoje mnenje o tem mnenju.');
jr_define ('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Hvala, vendar ste že delili svoje mnenje o tem mnenju.');
jr_define ('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Prepričajte se, da so vsa polja izpolnjena.');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Prosimo, povzemite svoje mnenje tako, da vnesete naslov');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Vnesite podrobnejši pregled v opisno polje');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Prosimo, vnesite dobre dele svoje izkušnje gosta v tej nastanitvi');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Prosimo, vnesite morebitne negativne misli o svojih izkušnjah');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Ocenite gostiteljstvo, ki ste ga prejeli od osebja');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Ocenite svoje mnenje o podrocju nepremičnine');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Prosimo vas za mnenje o čistoči nepremičnine');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Prosimo, ocenite nastanitev. Je bila udobna ali prazna');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Prosimo, podajte svoje mnenje, ali je to vrednost za denar');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Ocenite storitve');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Povzetek pregleda');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Vaše podrobnejše izkušnje');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Hvala, ker ste oddali svoje mnenje.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Hvala, ker ste oddali svoje mnenje. Kmalu ga bo objavil eden od naših pridnih moderatorjev.');
jr_define ('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Uporabi funkcijo pregleda Jomresa?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Samodejno objavi ocene?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Če to nastavite na Ne, boste morali ročno objaviti ocene');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Nastavi preglede v preskusni način?');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Običajno upravitelji nepremičnin ne morejo pregledati imetja. Če je omogočen preskusni način, lahko. Seveda to ni idealno v proizvodnem okolju.');
jr_define ('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'To je seznam vseh lastnosti. Če si želite ogledati ocene znamke, kliknite to znamko. Od tam boste lahko objavili ali izbrisali mnenje.');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Število neobjavljenih mnenj');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Skupno število pregledov');
jr_define ('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Objavi/Prekliči objavo pregleda');
jr_define ('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Izbriši pregled');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW', 'Poročilo o pregledu');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Pregled poročil');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Prosimo, vnesite poročilo');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'V tem pregledu opazite nekaj, kar je ugovarjajoče ali netočno? Prijavite to in preučili vas bomo.');
jr_define ('_JOMRES_REVIEWS_SUBMIT', 'Predloži');
jr_define ('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Poročilo ustvaril');
jr_define ('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Poročila objavljajo uporabniki, ki se morda ne strinjajo z vsebino ocene. Edini način za odstranitev poročila je izbris mnenja.');
jr_define ('_JOMRES_REVIEWS_RATING', 'Ocene (1 = slabo 10 = odlično)');
jr_define ('_JOMRES_REVIEWS_RATING_1', 'Gostinstvo');
jr_define ('_JOMRES_REVIEWS_RATING_2', 'Lokacija');
jr_define ('_JOMRES_REVIEWS_RATING_3', 'Čistoča');
jr_define ('_JOMRES_REVIEWS_RATING_4', 'Nastanitev');
jr_define ('_JOMRES_REVIEWS_RATING_5', 'Vrednost za denar');
jr_define ('_JOMRES_REVIEWS_RATING_6', 'Storitve');
jr_define ('_JOMRES_REVIEWS_REVIEWED_BY', 'Pregledal:');
jr_define ('_JOMRES_REVIEWS_CLICKTOHIDE', 'Skrij ocene');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Pokaži obrazec za rezervacijo na strani s podrobnostmi o nepremičnini?');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Nastavite na Da, če želite prikazati obrazec za rezervacijo na strani s podrobnostmi o nepremičnini. Če nastavite na Ne, se bo na strani s podrobnostmi nepremičnine prikazala povezava namesto na obrazec za rezervacijo.');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE', 'Ali so cene določene z davkom?');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Nastavljene cene so vključujoče? Če vaše cene vključujejo davek, izberite Da. Če niso, izberite Ne.');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Davek na dodatek:');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Polja za dan v tednu vam omogočajo, da nastavite stopnjo za določen dan v tednu, ko pritisnete gumb za dan v tednu, bodo vsi dnevi v tednu nastavljeni na to stopnjo.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Izbirniki datumov in vnos tečaja vam omogočajo, da za določeno časovno obdobje nastavite eno ceno. Izberite začetni in končni datum, vnesite ceno in kliknite gumb Nastavi cene.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Končni obseg');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Oceni');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Nastavi stopnje');
jr_define ('_JOMRES_PARTNERS_TITLE', 'Partnerji');
jr_define ('_JOMRES_CALENDAR_RTL', 'false');
jr_define ('_JOMRES_ROOMALLOCATIONS_ROOM', 'Soba');
jr_define ('_JOMRES_ROOMALLOCATIONS_GUESTS', 'gost (i).');
jr_define ('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Tako smo vašim sobam dodelili številke gostov. Če želite to dodelitev spremeniti, se morate po rezervaciji obrniti na hotel. Če spremenite svoje naloge, se lahko zaračunajo dodatni stroški. ');
jr_define ('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Upoštevajte, da vaša lastnina še ni objavljena, samo vi jo lahko vidite, obiskovalci spletnega mesta je ne bodo videli');
// 4.5.5
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Privzeti vrstni red rezultatov iskanja');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Spremenite to možnost, če želite spremeniti vrstni red, po katerem bodo rezultati iskanja privzeto predstavljeni.');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Pokaži spustni meni vrstnega reda rezultatov iskanja');
jr_define ('_JOMRES_ROOMMSLIST_STYLE', 'Slog seznama sob');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_DESC', 'V obrazcu za rezervacijo s "klasičnim" slogom seznama sob gostom ponudite posamezne sobe. S pogledom na vrsto sobe gostje namesto tega izberejo število sob tipa X (npr. 2 x dvoposteljne)) ');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasika');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Vrste sob');
jr_define ('_JOMRES_COM_CALENDAR_STARTDAY', 'Dan začetka koledarskega tedna, nedelja ali ponedeljek');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Samo gostje nepremičnine lahko pregledajo?');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Nastavite na Da, če želite omejiti mnenja samo na tiste uporabnike, ki so že bili gostje v tej lastnosti.');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Na sobo');
jr_define ('_JOMRES_MAX_GUESTS_PER_ROOM', 'Gosti na sobo:');
jr_define ('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gosti na rezervacijo:');
jr_define ('_JOMRES_NUMBER_OF_ROOMS', 'Število sob');
jr_define ('_JRPORTAL_MONTHS_LONG_0', 'januar');
jr_define ('_JRPORTAL_MONTHS_LONG_1', 'februar');
jr_define ('_JRPORTAL_MONTHS_LONG_2', 'marec');
jr_define ('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define ('_JRPORTAL_MONTHS_LONG_4', 'maj');
jr_define ('_JRPORTAL_MONTHS_LONG_5', 'junij');
jr_define ('_JRPORTAL_MONTHS_LONG_6', 'julij');
jr_define ('_JRPORTAL_MONTHS_LONG_7', 'avgust');
jr_define ('_JRPORTAL_MONTHS_LONG_8', 'september');
jr_define ('_JRPORTAL_MONTHS_LONG_9', 'oktober');
jr_define ('_JRPORTAL_MONTHS_LONG_10', 'november');
jr_define ('_JRPORTAL_MONTHS_LONG_11', 'december');
jr_define ('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Nastavite na Da, da zmanjšate število možnosti, ki so na voljo upraviteljem nepremičnin v razdelku Splošna konfiguracija. To je uporabno, če ne želite, da se upravitelji nepremičnin igrajo s preveč nastavitvami, lahko pa uredite jomres_config .php za določitev privzetih možnosti lastnosti. ');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Prosimo, izberite možnost za svojo rezervacijo');
jr_define ('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Če je ta možnost nastavljena na Da, bodo lahko upravitelji videli urejevalnik HTML, ki je priložen CMS, in v opis vnesli HTML. To je potencialno varnostno tveganje, ker obstaja možnost, da lahko uvedejo nezaželen HTML ali Javascript. Poleg tega, če vnesejo slabo oblikovan HTML, bi lahko bila oblikovanje strani ogroženo. Bolje je, da to možnost pustite nastavljeno na Ne, kjer koli je to mogoče. </p> <p> Če so vsi upravitelji zaupanja vredni uporabniki (npr. sebe), potem lahko pustite nastavljeno na Da in spremenite različne oznake HTML, ki jih lahko vnesejo na zavihku Filtriranje vnosov v konfiguraciji spletnega mesta. </p> <p> Če pa Če uporabljate Jomres kot portal, na katerem povabite uporabnike, da dodajo in upravljajo svoje lastnine, potem to ni idealna konfiguracija. Namesto tega pustite to možnost nastavljeno na Ne. Če je nastavljena na No, bodo upravitelji videli urejevalnik oznak, ki lahko uporabite za vnos osnovnega oblikovanja, ki bi moralo zadošča za večino uporabnikov. </p> ");
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Celozaslonski pogled');
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Običajen pogled');
jr_define ('_JOMRES_PARTNER_DISCOUNT', 'Partnerski popust');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Išči uporabnika');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Vnesite nekaj znakov za iskanje uporabnika. <br/> Ko izberete uporabnika, ga boste samodejno dodali kot partnerja in preusmerjeni boste na naslednjo stran, kjer lahko dodelite lastnosti in popuste uporabniku. ');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Obstoječi partnerji');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Izberite partnerja, ki ga želite odpreti na stran za upravljanje partnerja.');
jr_define ('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Iskanje nepremičnine');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Vnesite nekaj znakov iz imena nepremičnine in izberite znamko. <br/> Ko izberete nepremičnino, jo boste dodali v portfelj partnerja, vendar še ne bodo uživali popustov. sami si jih nastavite. ");
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Trenutne lastnosti');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Kliknite znamko, da uredite partnerske nastavitve popusta za to lastnost.");
// 4.6
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Ta račun je bil onemogočen, trenutno s tem računom ni mogoče upravljati vaših lastnikov (-ov).');
jr_define ('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Račun upravitelja je blokiran');
jr_define ('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Ponovno vzpostavljen račun upravitelja');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Upoštevajte, da je bil vaš račun upravitelja nepremičnine onemogočen. Ne boste mogli izvajati nobenih funkcij upravljanja nepremičnine, dokler ne obnovite računa.');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Upoštevajte, da je vaš račun upravitelja nepremičnin zdaj aktiven. Lahko nadaljujete z vsemi funkcijami upravljanja nepremičnine. Prijavite se v svoj račun in se prepričajte, da so ustrezni lastniki objavljeni. Hvala.' );
jr_define ('_JOMCOMP_MYUSER_REMOVE', 'Odstrani priljubljeno');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE', 'Arhiv podatkov o rezervacijah');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Arhiv podatkov o rezervacijah je surovo kopiranje informacij o rezervacijah, zajetih po pritisku gumba za potrditev rezervacije. Premaknite miškin kazalec nad datum, da si ogledate izpis neobdelanih podatkov. Podatki so shranjeni v tabeli XXX__jomres_booking_data_archive.');
jr_define ('_JOMRES_MY_ACCOUNT_EDIT', 'Uredi račun');
jr_define ('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Če želite dodati uporabnika kot upravitelja nepremičnine, najprej v zgornje polje vnesite prvih nekaj znakov njegovega uporabniškega imena. Ko je najden pravi uporabnik, ga izberite, nato pa izberite, katero lastnost ( s) morajo biti upravitelj. Uporabnik <em> mora biti že uporabnik v CMS </em> ');
jr_define ('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Obstoječi upravitelji');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Spanje');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Prikaži iskanje po spustnem seznamu gostov');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Zvezde');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Pokaži spustni meni Zvezde');
jr_define ('_JOMRES_SEARCH_GUESTNUMBER', 'Spanje');
jr_define ('_JOMRES_SEARCH_STARS', 'Število zvezd');
jr_define ('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Število lastnosti');
// 4.6.1
jr_define ('_JOMRES_CONFIG_JQUERY', 'Naloži knjižnico Jomres jQuery?');
jr_define ('_JOMRES_CONFIG_JQUERY_DESC', 'To lahko nastavite na NE, če imate predlogo, ki uporablja jQuery. Ta lahko MOŽNO reši težave s konflikti jQuery pri nekaterih predlogah, vendar ne pri vseh.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Če omogočite to možnost, lahko vidite preklopnik jezika v celozaslonskem pogledu na prednjem delu.');
jr_define ('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Sličice se samodejno ustvarijo za naložene slike.');
// 4.7.1
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Največja širina majhnih sličic (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Na seznamu lastnosti se uporabljajo majhne sličice, medtem ko se v glavi lastnosti uporabljajo sličice srednje velikosti.');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Največja višina majhnih sličic (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Največja širina srednjih sličic (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Največja višina srednjih sličic (px).');
jr_define ('_JOMRES_TOUCHTEMPLATES', 'Prevodi oznak');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE', 'Uporabi funkcijo provizije?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Nastavite na Da, če želite prikazati zbrane račune upraviteljev.');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Rezervacije upraviteljev ustvarjajo račune za provizijo?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Če upravitelj opravi rezervacijo, ali to ustvari tudi postavko na računu za provizijo?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Samodejno onemogoči upravitelje, pri katerih so računi označeni kot čakajoči?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Samodejno prekini prag');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Ta meja je število dni, v katerih mora upravitelj plačati račun, preden je blokiran in njegove lastnosti neobjavljene.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'Jezikovni kontekst');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'S to možnostjo spremenite jezikovni kontekst spletnega mesta. Ta funkcija Jomresu omogoča uporabo oznak, ki so primerne za vaš trenutni poudarek, tako da če se osredotočite kot posrednik za jahte, boste spremenili kontekst dovolite Jomresu, da predstavi oznake iz druge jezikovne datoteke. Če na primer nastavite kontekst na "Posredovanje jaht", bo Jomres najprej našel trenutni jezik, nato pa v imeniku /'.JOMRES_ROOT_DIRECTORY.'/jezikov poiskal podimenik. imenovano "yachtbrokerage". Če datoteka obstaja za trenutni jezik, bo ta datoteka uporabljena. Če ne, bo Jomres poiskal datoteko v angleškem jeziku v istem imeniku. Če tega ni mogoče najti, bo Jomres uporabil jezikovna datoteka za trenutno izbrani jezik v imeniku /'.JOMRES_ROOT_DIRECTORY.'/jeziki. ');
// 4.7.3
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Napredna konfiguracija spletnega mesta');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'To možnost nastavite na Da, če želite uporabiti napredne možnosti konfiguracije spletnega mesta. Če šele začenjate z Jomresom, vam svetujemo, da za zdaj pustite to možnost Ne, saj je privzeta namestitev zadostuje za začetek, namesto tega dodajte Jomres v glavni meni in se prijavite v vmesnik kot »admin« ter začnite konfigurirati svoje lastnosti. Upoštevajte, da številne napredne možnosti morda ne bodo na voljo, če tega ne storite. t nimajo nameščenih ustreznih vtičnikov. Uporabniki brezplačnega osnovnega sistema ne bodo mogli v celoti izkoristiti funkcij, ki jih omogočajo. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Naloži knjižnico uporabniškega vmesnika Jomres jQuery?');
jr_define ('_JOMRES_SORTORDER_PRICE_DESC', 'Cena (najprej najvišja)');
jr_define ('_JOMRES_SORTORDER_PRICE_ASC', 'Cena (najprej najnižja)');
// 4.7.6
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Povzetek in ocene cen je treba določiti glede na noč/na teden/na mesec?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Na noč');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Na teden');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Na mesec');
jr_define ('_JOMRES_BOOKINGFORM_PERPERSON', 'Na osebo');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'teden (i) ob');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mesec (i) ob');
// 4.7.7
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Kako naj deluje možnost iskanja po številkah ljudi?');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Vpliva na vse iskalne module. Če uporabljate funkcijo iskanja po številu gostov, bi morala funkcija iskanja iskati lastnosti, katerih tarife podpirajo številke gostov in so enake izbranemu številu, natančno enako izbranemu številu ali izbrano število in večje? ');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Počakajte, vaše naročilo je v obdelavi in ​​preusmerjeni boste na spletno mesto Paypal.');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Če v 5 sekundah niste samodejno preusmerjeni na Paypal ...');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Kliknite tukaj');
// 4.7.8
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Rezervacija velja od');
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Rezervacija velja za');
jr_define ('_JRPORTAL_COUPONS_GUESTNAME', 'Ime gosta');
jr_define ('_JRPORTAL_COUPONS_DESC_478', "Kode za popuste lahko ustvarite in jih posredujete gostom kot spodbudo za rezervacijo. <br/>
Veljavni datumi od in do se nanašajo na datume, na katere je mogoče opraviti rezervacijo, medtem ko se rezervacija, veljavna od/do datumov, nanašajo na datume, ki jih mora rezervacija pokriti, da je kupon veljaven. Če rezervacija ne velja za to obdobje, bodo za dneve izven tega obdobja veljale običajne cene. <br/>
Če želite, da je rezervacija na voljo enemu določenemu gostu, v spustnem meniju izberite ime tega gosta, da omejite kupon samo na tega gosta. ");
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'S vašim kuponom je ta rezervacija znižana');
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'do');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Nastavite to na Ne, da onemogočite nalaganje datotek javascript in CSS uporabniškega vmesnika Jquery.');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Naloži knjižnico CSS uporabniškega vmesnika Jomres jQuery?');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Nastavite na Ne, če želite onemogočiti samo datoteko CSS uporabniškega vmesnika jquery.');
//v5.1
jr_define ('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Skupaj z davkom');
jr_define ('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Neobjavljena lastnina');
// v5.2
jr_define ('_JOMRES_CONVERSION_TITLE', 'Uporabi funkcijo pretvorbe');
jr_define ('_JOMRES_CONVERSION_TITLE_DESC', "Uporabite spletno funkcijo pretvorbe Jomres. To bo uporabnikom s francoskimi povezavami ponudilo spustni meni, kjer bodo lahko izbrali valuto, v kateri želijo videti ponujene cene. Izhodna cena je prilagojena tako, da prikaže pretvorjeno cena, ki ji v oklepajih sledi domača cena nepremičnine. ");
jr_define ('_JOMRES_CONVERSION_DISCLAIMER', 'Po svojih najboljših močeh smo si prizadevali pridobiti čim bolj natančne in pravočasne menjalne tečaje. Naša funkcija pretvorbe valut na spletu je storitev samo za informativne namene in ni namenjena zagotavljanju natančnih številk. ne jamčimo za točnost menjalnih tečajev. Z uporabo te funkcije se šteje, da ste se strinjali, da je vsaka odvisnost ali uporaba funkcije pretvorbe tečaja v celoti na lastno odgovornost. ');
// 5.2.1
// 5.3.1
jr_define ('_JOMRES_CURRENCYCONVERSION_TAB', 'Pretvorba valut/kode valut');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'API ključ za zaznavanje IP');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Za samodejno nastavitev spustnega koda valute lahko Jomres uporabi brezplačno storitev, imenovano IPinfoDB, za odkrivanje države obiskovalca, vendar se morate registrirati za ključ API na <a href = "https://www.ipinfodb.com/login" target="_blank"> IPinfoDB </a> najprej. ');
jr_define ('_JOMRES_DEBUGGING_TAB', 'Odpravljanje napak');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Nastanitev brez davka');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Prenočišče z davkom');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Davek na sobe:');
jr_define ('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Odpri obrazec za rezervacijo');
jr_define ('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Nazaj na podrobnosti o lastnostih');
jr_define ('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Samodejno izbrano?');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Stanje (po plačanem depozitu)');
jr_define ('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrirajte vire glede na njihove lastnosti.');
jr_define ('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Zadnja rezervacija');
jr_define ('_JOMRES_DATEPERIOD_SECOND', 'drugo');
jr_define ('_JOMRES_DATEPERIOD_MINUTE', 'minuta');
jr_define ('_JOMRES_DATEPERIOD_HOUR', 'ura');
jr_define ('_JOMRES_DATEPERIOD_DAY', 'dan');
jr_define ('_JOMRES_DATEPERIOD_WEEK', 'teden');
jr_define ('_JOMRES_DATEPERIOD_MONTH', 'mesec');
jr_define ('_JOMRES_DATEPERIOD_YEAR', 'leto');
jr_define ('_JOMRES_DATEPERIOD_DECADE', 'desetletje');
jr_define ('_JOMRES_DATEPERIOD_S', 's');
jr_define ('_JOMRES_DATEPERIOD_AGO', 'pred tem');
jr_define ('_JOMRES_DATEPERIOD_FROMNOW', 'od zdaj');
jr_define ('_JOMRES_WHOLEDAY_TITLE', 'Rezervacije veljajo za cele dni?');
jr_define ('_JOMRES_WHOLEDAY_DESC', 'Sistem privzeto rezervira vire do noči, zato je rezervacija od 1. januarja' .date ('Y', strtotime ('naslednje leto')). 'do 2. januarja' .date ('Y', strtotime ('naslednje leto')). 'zajema samo eno noč. Če pa to možnost nastavite na Da, bo rezervacija namesto tega zajemala cele dneve, zato bi rezervacija v teh dneh zajemala oba dni, stranki pa bi zaračunali dva dni. ');
jr_define ('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Na dan');
jr_define ('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Na osebo na dan');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Prevoz');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Vrnitev');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dnevi ob');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Datum vračila napačen');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Rezervacija je prekratka. Med datumi prevzema in vračila mora biti vsaj toliko dni:');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Minimalni interval prevzema/vračila');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Najmanjši interval v obrazcu za rezervacijo med datumi prevzema in odpovedi. Interval 1 pomeni, da je mogoče datume prevzema in vračila nastaviti na isti dan, vendar je to še vedno odvisno od minimalnega interval, ki ga mehanizem za rezervacije samodejno izračuna, saj preverja tarife, ki veljajo za obdobje rezervacije. ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Povzetek in ocene cen je treba določiti na dan/na teden/na mesec?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Na dan');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dnevi pred datumom prevzema');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Najmanjše število dni, ki mora preteči od "danes" pred datumom prevzema.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Nastavite na da, če želite omejiti vnaprejšnje rezervacije (uporabite naslednje polje, če želite omejiti število dni). Če to nastavite na da, potem če uporabnik poskuša rezervirati več kot n dni vnaprej, potem bo njihov datum prevzema obnovljen na današnji datum ');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Prikaži vnos datuma vračila?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Nastavite to na Ne, če ne želite prikazati polja za vnos datuma vračila. To uporabite le, če veste, kaj počnete, saj bo datum vračila v rezervacijah vedno nastavljen na dan po datumu prevzema. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Če to nastavite na Da, se bodo rezervacije sprejemale za določeno obdobje. Če je to nastavljeno na Ne, potem preverite, da "določen dan prevzema" ni nastavljen na Da (razen če izrecno ne želite prisiliti ljudi, da prevzamejo na določen dan v tednu) drugače ne boste dobili veliko povezav v koledarju razpoložljivosti. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Vnaprej določen dan prevzema');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Samo za spletna mesta, ki ponujajo rezervacije za določen čas. Izberite dan v tednu, ko je treba prevzeti.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Nepremičen dan prevzema');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Ponovljeni datumi prevzema:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Ko so izbrani fiksni datumi prevzema, število datumov, ki jih je mogoče prikazati na spustnem seznamu datumov. Upoštevajte, da seznam datumov ne vključuje datumov, če rezervacija zaradi predhodnih rezervacij ni mogoča, in da bo seznam dejansko dvakrat daljši od izbrane številke, ker bo imel podobno število zgodovinskih datumov (če je na voljo). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Na osebo na dan');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Izberite Da, če želite zaračunati na osebo na dan. Če ne, se bodo stroški izračunali na podlagi vira na dan');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Spremenljivi depoziti vam omogočajo, da določite, ali želite zaračunati celoten znesek, če je datum prevzema rezervacije v N dneh od "danes". To možnost nastavite na Da, če želite omogočiti funkcijo in vnesite spodnje število dni, tako da bo na primer, če je dan prevzema v 60 dneh, zaračunan znesek depozita celoten znesek, sicer bo znesek temeljil na zgoraj konfiguriranih možnostih depozita. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Večina podjetij bo preračunala cene virov glede na število virov zahtevane vrste, ki so na voljo na določen datum. To jim omogoča, da ponujajo popuste na vir/podjetje, ki med letom ni zasedeno določeno obdobje z namenom privabljanja podjetij, ki bi jih sicer lahko zamudili. <br/> Če omogočite in konfigurirate ta vtičnik, lahko ponudite prilagodljive cene glede na število virov izbrane vrste, ki so na dan za podjetje na voljo. <br/> Dnevni prag določa število dni, v katerih mora biti datum prevzema, preden se cene vira prilagodijo s to funkcijo, nato pa možnosti za odstotke omogočajo nastavitev odstotka sredstev, ki so na voljo, preden se uporabi določen popust . Upoštevajte, da če bo rezerviranih več virov, bo trenutna stopnja popusta uporabljena za vse vire in se ne bo zmanjšala, ko bo izbranih več sredstev. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Prag (število dni med datumom prevzema in danes)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Prevoz v čakanju');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Prevzem danes');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Pobrano');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Vrne se danes');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Vračilo zapadlo');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Ni prevzeto');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Dnevi');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Označi prevzeto rezervacijo.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Označi vrnjeno rezervacijo.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Označi prevzeto rezervacijo');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Označi vrnjeno rezervacijo');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cena na dan:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Število dni:');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Shrani preglasitev');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Pošlji novim uporabnikom podatke o prijavi po e -pošti?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Če je možnost Ustvari novega uporabnika nastavljena na Da, lahko to možnost nastavite na Ne, da zagotovite, da uporabnikom po e -pošti niso prijavljeni podatki za prijavo, ko je uporabnik ustvarjen. To je lahko koristno, če ste samodejno na primer dodajanje novih uporabnikov na poštni seznam in ne želijo, da bi se uporabniki dejansko prijavili. ');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Prikaži davčne rezultate v povzetku seštevkov obrazca za rezervacijo?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Preprečite, da obrazec za rezervacijo prikazuje polja davčne cene v povzetku seštevkov, tako da to možnost nastavite na št.');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Meja preklica');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Prijavljeni, registrirani gostje lahko prekličejo lastne rezervacije. Tu lahko nastavite prag v dneh, ko rezervacije ni mogoče preklicati po določenem številu dni pred datumom prihoda.');
jr_define ('_JOMRES_EDIT_PROFILE', 'Uredi profil');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Razmerje med vrsto nepremičnine');
jr_define ('_JOMRES_IMAGE', 'Slika');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'Kliknite na črko, da prikažete vsa podjetja s tem prvim znakom. Ko imate seznam lastnosti, lahko tem nepremičninam dodelite provizije ali kliknite njihovo ikono za urejanje, da si ogledate podjetje \' s statistika. ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'Uredi davčno stopnjo');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Urejanje polja po meri');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'Geslo strežnika licenc');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'Uporabniško ime strežnika licenc');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Če imate na licenčnem strežniku uporabniško ime in geslo, jih vnesite tukaj. To vam bo pomagalo pri dostopu do vtičnikov, do katerih ste upravičeni. Če ste v zgornje polje vnesli veljaven ključ podpore, potem tukaj ni treba vnesti uporabniškega imena/gesla. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Ta različica Jomresa:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Najnovejša različica Jomresa');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Opozorilo: Na voljo je nova različica Jomresa, priporočamo nadgradnjo v najkrajšem možnem času.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'Dobrodošli v Jomresu. Osnovni sistem je brezplačen, vendar ga je mogoče izboljšati z namestitvijo vtičnikov. Za dostop do teh vtičnikov potrebujete licenco za prenos in podporo. Če želite kupiti Jomres Starter , Licenco za podjetja ali podjetja, <a href="http://www.jomres.net/prices" target="_blank"> obiščite našo spletno stran </a> za informacije o tem, kako lahko nadgradite. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'Ta sistem je idealen za vsak scenarij, pa naj bo to preprost obrazec za rezervacijo za eno nepremičnino, vse do spletnega mesta z več uporabniki v več jezikih in z več lastnostmi. Glejte "Pomoč" razdelek v meniju, vključno s stranjo »Začetek«, ki vas bo vodila skozi vaše prve korake. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktivna lastnina');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Nastavitve e -pošte');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'To možnost nastavite na Da za uporabo teh nadomestnih nastavitev SMTP. Zdi se, da vse večje število spletnih gostiteljev blokira delovanje pošte PHP, zato se lahko odločite, da boste preglasili nastavitve pošte, ki jih Jomres sprejme od vašega gostitelja CMS (običajno Joomla) in tukaj uporabite nastavitve po lastni izbiri. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Nadomestni gostitelj');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Spremeni to v svoj poštni strežnik smtp');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Nadomestna vrata');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Spremeni to v vrata smtp');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Nadomestni protokol');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Odvisno od nastavitev strežnika smtp morate pustiti to polje prazno ali vnesti ssl ali tls. Če ne veste, vprašajte svojega ponudnika SMTP.");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Uporabi preverjanje pristnosti');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Če vaš strežnik SMTP od odjemalcev zahteva prijavo, nastavite na Da. Uporabniško ime in geslo bosta nato uporabljena.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Nadomestno uporabniško ime');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Nadomestno geslo');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define ('_JOMRES_QUICK_INFO', 'Hitre informacije');
jr_define ('_JOMRES_MENU_SHOW', 'Pokaži');
jr_define ('_JOMRES_MENU_HIDE', 'Skrij');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Privzeto');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Kdorkoli');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registrirano');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Upravitelj');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nihče');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Nadzor dostopa do menija');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'Ta funkcija vam omogoča nadzor nad tem, kdo bo lahko videl vtičnik v glavnem meniju. Običajno so uporabniške možnosti 00009 vidne bodisi/ali neregistriranim obiskovalcem spletnega mesta, 00010 možnosti se običajno nanašajo na dejavnosti vrste sprejema uporablja se vsak dan, medtem ko se možnosti 00011 uporabljajo za nastavitev in konfiguracijo lastnosti, do njih pa je manj dostopen. ');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptor');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Popoln nadzor dostopa');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'To možnost nastavite na Da, če želite omogočiti funkcijo popolnega nadzora dostopa, nato za nastavitev nadzora dostopa obiščite možnost Nadzor dostopa v razdelku Vzdrževanje sistema.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Upoštevajte pa, da te nastavitve ne nadzorujejo osnovnih skriptov, s katerimi se povezujejo, zato na primer, če <i> 00009user_option_03_search </i> nastavite na Manager, lahko uporabnik, ki pozna Jomresa, še vedno pokličite j06000search.class.php tako, da v naslovno vrstico brskalnika vnesete http://www.domain.com/index.php?option=com_jomres&task=search. To je namerno, saj ta nadzor dostopa do menija preprosto nadzoruje, kaj je prikazano v Glavni meni Jomresa. Če potrebujete strožje kontrole, nastavite možnost Site Config -> Full Access Control na Yes in znova obiščite možnost Control Access Menu. ");
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Nadzor popolnega dostopa');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Ta funkcija je samo za napredne uporabnike. Če ne veste, za kaj je namenjena, in nimate posebnega razloga za njeno uporabo, se vrnite v konfiguracijo spletnega mesta in nastavite popoln dostop Možnost upravljanja na št. </strong> <br/>
Ta funkcija vam omogoča nadzor nad tem, kdo lahko dostopa do katerih minkomponent (z nekaj izjemami, ki so trdo kodirane v sistemu). Če je raven dostopa poleg imena skripta nastavljena na Privzeto, potem z možnostjo Popoln nadzor dostopa nastavljeno na Da <strong> kdor koli </strong> lahko dostopa do skriptov, do katerih ne bi smeli dostopati, če nameravate to uporabiti funkcijo, ki jo MORATE nastaviti za <strong> vsako </strong> Jomres minikomponento, navedeno tukaj. Če ne veste, kaj počnejo te minkomponente, vam močno priporočamo, da te funkcije sploh ne uporabljate. <br/>
V Jomresu ravni dostopa sledijo piramidi, zato so upravitelji nepremičnin večji od upraviteljev. Na kratko Super Manager> Manager> Receptionist> Registered> Unregistered. Torej, če ima registrirani uporabnik dostop do minkomponente, imajo tudi receptorji, menedžerji in super managerji. <br/>
Upoštevajte, da ne morete nadzorovati minikomponent skrbniškega območja. Vsakdo na skrbniškem področju velja za zaupanja vrednega uporabnika, saj mu ne sme biti preprečen dostop do katerega koli skripta (zlasti tega).
");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Opozorilo! Omogočen je popoln nadzor dostopa, vendar smo šteli nastavitve nadzora dostopa in jih primerjali s številom komponent, ki jih je treba nadzorovati, pri čemer se ti dve ne ujemata, zato imate morda nekaj skripti, ki niso nadzorovani. To je lahko varnostna težava, zato vas prosimo, da to takoj rešite tako, da obiščete funkcijo nadzora dostopa in preverite, ali so bile uporabljene ustrezne ravni. ');
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Uporabniki s skrbniškimi pravicami za to lastnost');
jr_define ('_JOMRES_DEBUGGING_YOUREMAIL', 'Vaš e -poštni naslov');
jr_define ('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define ('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametri');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define ('_JOMRES_METATITLE', 'Meta naslov');
jr_define ('_JOMRES_METADESCRIPTION', 'Meta opis');
jr_define ('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Dodajte svojo lastnino: korak 2 od 2');
jr_define ('_JOMRES_CART_TITLE', 'Moje predlagane rezervacije');
jr_define ('_JOMRES_CART_INFO', 'Upoštevajte, da te rezervacije še niso shranjene. Če se odjavite ali se vaša seja izteče, bodo izgubljene. Ne pozabite potrditi svojih rezervacij!');
jr_define ('_JOMRES_CART_CONFIRM_BOOKINGS', 'Potrditev rezervacij');
jr_define ('_JOMRES_CART_OR', 'ali');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.');
jr_define ('_JOMRES_CART_VIEWCART', 'Ogled vozička');
jr_define ('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Podimenik jezikovnih datotek');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Privzeta začetna točka zemljepisne širine');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Privzeta začetna točka zemljepisne dolžine');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Na Googlovem zemljevidu na strani za urejanje lastnosti, preden so oznako premaknili, kakšne naj bodo privzete zemljepisne širine/dolžine?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'E -pošta poslana s katerega naslova?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "To možnost pustite prazno, če jo želite onemogočiti. Jomres bo pri pošiljanju e -poštnih sporočil gostom uporabil e -poštne naslove hotela, vendar vaša e -poštna storitev MOŽDA ne dovoljuje e -poštnih sporočil z poljubnih naslovov (tj. en pooblaščen naslov). V tem primeru lahko s tem vnosom vnesete naslov, ki bo za vsa sistemska e -poštna sporočila viden kot naslov. ");
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Pogled seznama');
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Pogled fotografij');
jr_define ('_JOMRES_COMPARE', 'Primerjaj');
jr_define ('_JOMRES_REMOVE', 'Odstrani');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'Vrni se na rezultate iskanja');
jr_define ('_JOMRES_ADDTOSHORTLIST', 'Dodaj med priljubljene');
jr_define ('_JOMRES_REMOVEFROMSHORTLIST', 'Odstrani iz priljubljenih');
jr_define ('_JOMRES_VIEWSHORTLIST', 'Ogled ožjega izbora');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'Pomembno: Politika piškotkov');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'Piškotke uporabljamo za ohranjanje ustreznosti in enostavnosti uporabe našega spletnega mesta.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'Preberi več ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', 'Zakonodaja EU zahteva, da vsa spletna mesta jasno določijo, ali se piškotki uporabljajo in njihov namen.');
jr_define ('_JOMRES_COOKIEPOLICY_5', "Iskalnik in rezervacijski mehanizem tega spletnega mesta mora imeti možnost, da si zapomni možnosti, ki ste jih izbrali za najboljše delo. Če želite to narediti, morate shraniti podatke, povezane z majhno datoteko, imenovano \"piškotek\", ki na edinstven način identificira vaš brskalnik, in da to storimo, se morate strinjati, da lahko. Če ne sprejmete te politike piškotkov, boste močno omejeni pri tem, kaj lahko počnete na tem spletnem mestu. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'Da, na ta način sprejemam uporabo piškotkov.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Zahtevana varščina je strošek prve noči?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Cene so izračunane na noč. Ali želite, da je polog ena nočitev? Če je tako, lahko prezrete naslednje možnosti.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "Niste dodali nobenega elementa med priljubljene.");
jr_define ('_JOMRES_SAFEMODE', 'Omogoči varen način?');
jr_define ('_JOMRES_SAFEMODE_DESC', "Nastavite to na Da, da sprožite varen način. To bo onemogočilo vse vtičnike, tako da bo Jomres uporabljal samo svojo osnovno funkcionalnost.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define ('COMMON_NEXT', 'Next');
jr_define ('COMMON_CANCEL', 'Prekliči');
jr_define ('COMMON_SUBMIT', 'Predloži');
jr_define ('COMMON_SAVE', 'Save');
jr_define ('COMMON_DELETE', 'Delete');
jr_define ('COMMON_RETURN', 'Return');
jr_define ('COMMON_CLOSE', 'Close');
jr_define ('COMMON_BACK', 'Back');
jr_define ('COMMON_HOME', 'Home');
jr_define ('COMMON_NEW', 'Novo');
jr_define ('COMMON_SEND', 'Pošlji');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'Captcha se uporablja za zagotovitev, da je odjemalec, ki uporablja spletne obrazce, človek, in se uporablja za preprečevanje, da bi roboti v internetu "spamali" upraviteljem nepremičnin. Če želite uporabiti obrazec za stik z nami v Jomresu, se bo treba registrirati na <a href="http://www.google.com/recaptcha" target="_blank"> domači strani Google reCaptcha </a> in nastaviti svojo domeno za sprejemanje vaših javnih in zasebnih ključev. ste prejeli te ključe, jih vnesite spodaj. Storitev reCapcha je brezplačna storitev, ki jo ponuja Google. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'Javni ključ');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'Zasebni ključ');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Časovna omejitev zaklepne datoteke');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Da bi preprečil nevarnost gostov za dvojno rezervacijo sob, Jomres uporablja datoteko zaklepanja, da prepreči dodajanje sobe na seznam razpoložljivih sob v obrazcu za rezervacijo, če je nekdo drug že dodal sobo k svoji sobi za iste datume . Privzeto bo ta ključavnica potekla v 3600 sekundah ali eni uri. Čas, ki je potreben za iztek te ključavnice, lahko spremenite tako, da spremenite to številko. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "Omogoči Jomres 'Bootstrap predloge in funkcionalnost?");
jr_define ('COMMON_ACTION', 'Action');
jr_define ('COMMON_VIEW', 'View');
jr_define ('BACKTOTOP', 'Nazaj na vrh');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Slabo');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Močno');
jr_define ('_JOMRES_INPUTFILTERING', 'Vnosno filtriranje');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Raven filtriranja vnosa');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Večino podatkov, ki se vnesejo v sistem, očistimo tako, da najprej odstranimo vse oznake html, nato pa uporabimo funkcijo filtriranja spremenljivk PHP, da zagotovimo varnost podatkov pred vnosom v bazo podatkov. Morda boste želeli dovoliti določene vnose (na primer vnos besedila na strani s podrobnostmi o lastnostih) za vključitev HTML -ja. Za filtriranje tega vnosa lahko uporabite dve stopnji filtriranja: šibek ali močan. Nastavitev Šibko uporabite le, če uporabniki podatki zaupate sami, npr. drugi sistemski skrbniki, sicer pa pustite nastavljeno na Strong. Ko je nastavljeno na strong (priporočeno), lahko še vedno določite, katere oznake želite dovoliti, tako da uredite naslednjo nastavitev HTML Purifier Tags allowed tags. ") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Dovoljene vnosne oznake');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Urejate lahko oznake, ki jih čistilnik html dovoljuje prek svojega filtrirnega sistema. Privzeto je 'p,b,strong,a[href],i' (tj. Odstavek, krepko, močno, povezave in kurziv) Za več informacij o dovoljenih oznakah preberite dokumentacijo čistilca HTML na strani <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Čeprav lahko to nastavitev spremenite, lahko priporočamo, da ga pustite privzeto. ");
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Dovoljeni vhodi');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Določite lahko, kateri vnosi obrazca bodo omogočili html z urejanjem te možnosti, vsi vnosi, dodani na ta seznam, bodo razčlenjeni s čistilnikom HTML, namesto da bi bili odstranjeni vsi html. property_policies_disclaimers '. Dodajte več vnosov tako, da jih dodate iz imen, ločenih s presledkom. ");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Podrobnosti o lastnostih na zavihkih?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Nastavite to možnost za prikaz podrobnosti o lastnostih na zavihkih. Nastavite na ne, če jih želite prikazati brez zavihkov.');
jr_define ('COMMON_PRINT', 'Natisni');
jr_define ('COMMON_EDIT', 'Edit');
jr_define ('COMMON_COPY', 'Copy');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres je zasnovan za delo v okviru Bootstrap 2 ali Bootstrap 3. Ko namestite temo ali predlogo BS2 ali BS3, s tem stikalom izberite, kateri od okusov Bootstrapa želite, da Jomres deluje s. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Uporabi predloge Jomres Bootstrap v prednjem delu?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Tukaj je nekaj možnosti, ki bi jih morda želeli upoštevati.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Samodejno zaznavanje države gosta?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Sistem bo poskušal samodejno zaznati državo gosta, če še ni rezerviral. To možnost lahko nastavite na Ne in določite državo, v kateri želite, da je prikazana v obrazcu za rezervacijo. naslednja možnost. ");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'O Jomresu');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'pomoč');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Začetek');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Nadzor dostopa');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'orodja za razvijalce');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'jeziki');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'ustvarjanje dohodka');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'struktura spletnega mesta');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Priročnik (na spletu)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Moj račun (na spletu)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'funkcionalnost portala');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Upravitelj vtičnikov');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integracija');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'poročila/statistika');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'pomoč');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'Posodobitve');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'plačilni načini');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Privzeta tarifa');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'To velja samo za nove tarife');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Leta za prikaz');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Določa število let za prikaz pri urejanju vrste tarife');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'računi');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'podrobnosti o računu');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Prijava');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Odjava');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'iskanje');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'nadzorna plošča');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'rezerva');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'računi');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'nastavitve');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'ostalo');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'Urejanje države');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'ID države');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Koda države');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Ime države');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'Urejanje regije');
jr_define ('_JOMRES_EDIT_REGION_ID', 'ID regije');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Koda države');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'Ime regije');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'Seznam držav');
jr_define ('_JOMRES_COM_LISTREGIONS', 'Seznam regij');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'Izvozi definicije');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'S to funkcijo lahko izvozite prevode, ki so bili zgrajeni s funkcijo Jezikovni prevod. Zgradilo bo besedilno polje z vsemi podatki, ki so potrebni za izdelavo nove jezikovne datoteke, kar morate storiti je kopirati in prilepiti ta izhod v novo jezikovno datoteko, ki jo lahko postavite na nov strežnik, ki temelji na Jomresu, ali če želite prispevati nazaj k skupnosti Jomres. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Prevedi področne nastavitve');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Prevedi niz datotek lang');
jr_define ('_JOMRES_COM_NOTAMANAGER', "Napaka, uporabnik, v katerega ste prijavljeni, ni super upravitelj v Jomresu, te funkcije ne boste mogli uporabljati, dokler s funkcijo Upravitelji nepremičnin ne postanete OBA) super manager. To je varnostna funkcija. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'Privzeta postavitev seznama lastnosti');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'Ostanite najmanj');
jr_define ('_JOMRES_NIGHTSFOR', 'noči za');
jr_define ('_JOMRES_AGENT', 'Agent');
jr_define ('_JOMRES_AGENT_DETAILS', 'Podrobnosti o agentu');
jr_define ('_JOMRES_AGENT_LISTINGS', "Seznami agentov");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'Samodejno odobri nove lastnosti');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'Če to možnost nastavite na Ne, boste morali ročno odobriti nove lastnosti. Dokler lastnina ni odobrena, je upravitelj/upravitelj nepremičnine ne more objaviti.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'Odobritve');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Ta lastnost še ni odobrena. Ko bo odobrena, jo boste lahko objavili.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Žal te lastnosti ne morete objaviti, ker še ni odobrena.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Nova lastnost zahteva odobritev');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Lastnost je bila dodana sistemu, ki zahteva vašo odobritev. Kliknite povezavo, če si želite ogledati lastnosti, ki čakajo na odobritev:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Vaša lastnina je odobrena');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Čestitamo, vaša nepremičnina je odobrena, kliknite naslednjo povezavo za ogled nadzorne plošče nepremičnine:");
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Imena regij je mogoče prevesti');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Razen če uporabljate zelo hiter strežnik, priporočamo, da ta niz nastavite na Ne. Zaradi velikega števila imen regij prevzem imena regije zavzame veliko pomnilnika, kar lahko upočasni rezultate iskanja dol. ");
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Gost odjavljen.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Oprostite, ta e -poštni naslov je že v uporabi. Če je to vaš e -poštni naslov, se prepričajte, da ste prijavljeni, preden poskusite rezervirati.');
jr_define ('JOMRES_TAPTOCALL', 'Tapni za klic');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'Novo mnenje za');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'Novo mnenje je ostalo za');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'Novo poročilo');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'Poročali so o pregledu');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'Skupni znesek (brez davka):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'Skupni znesek (z davkom):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Skupni davek:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Vnesite dve besedi:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Vnesite, kar slišite:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Ponovno predvajaj zvočni posnetek');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Prenesi skladbo v formatu MP3');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Vizualni način');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Zvočni način');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'Osveži');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'Pomoč');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Žal, to ni pravilno. Poskusite znova.');
jr_define ('JOMRES_GOOGLE_MAPS', 'Možnosti Google zemljevida');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Uporabi vremensko plast?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Uporabi tranzitno plast?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'Omogoči zanimanja Gmap (vključno z morebitnimi konkurenti)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta ključne besede');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Skenirajte to kodo v telefon, da dobite navodila do nas.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Številka DDV, ki ste jo vnesli, ni pravilna. Imeli bi nekaj takega: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Neveljavna številka DDV. Preverite veljavnost svoje številke za DDV pri spletni storitvi za preverjanje številk DDV v Evropi (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Čestitamo. Vašo številko za DDV smo lahko potrdili.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'Seznam davčnih pravil');
jr_define ('_JOMRES_TAX_RULE', 'Davčno pravilo');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Davčna pravila se uporabljajo za določitev različnih davčnih pravil za različne regije. Ta davčna pravila vplivajo na osebo, ki opravi rezervacijo, če je registrirana, prijavljena in je svoj račun uredila na strani "uredi moj račun" . Namen teh pravil je namestiti prenočišča na tistih območjih, ki so oproščena DDV. Morda se vam bo zdelo, da vam ni treba ustvariti številnih pravil, če sploh. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Stopnje uvoznega davka');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'Če želite, lahko za vas uvozimo davčne stopnje za EU. Upoštevajte, če uporabite to funkcijo, bodo vse obstoječe davčne stopnje odstranjene.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Uredi davčno pravilo');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'Številka DDV za to nepremičnino.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Prosimo, vnesite številko DDV za to nepremičnino.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Številka DDV je potrjena.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Številka DDV ni potrjena.');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Tu vneseni podatki o podjetju bodo uporabljeni na računih za provizije in naročnine.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Zdi se, da še niste izpolnili podatkov o svojem računu. Če želite svojo nepremičnino navesti na spletnem mestu, morate dokončati podatke o svojem računu, preden lahko nadaljujemo.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Proizvodnja ali razvoj?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Če to možnost nastavite na Razvoj, bomo omogočili poročanje o napakah, sicer pa, ko je nastavljeno na Proizvodnja, bo izklopljeno. Če je to strežnik v živo, priporočamo, da to možnost nastavite na "produkcijo".' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Produkcija');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Razvoj');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Podrobnosti vira');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Podrobnosti o tarifah');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Samo');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'levo!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Funkcija vira');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Tega elementa vira ni mogoče odstraniti, dodeljen je viru. Odstranite funkcijo iz tega vira in poskusite znova.');
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Dodaj slike');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Slike sobe');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Glavna slika nepremičnine');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slike diaprojekcije');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Počisti seznam');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Povleci in spusti datoteke sem');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Izberite vir, za katerega želite naložiti slike. Če lahko naložite slike za posamezne vire (npr. sobe), boste za izbiro določenega vira dobili drugi spustni meni.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Če naložite več slik kot "sliko glavne lastnosti", bodo te uporabljene na seznamu lastnosti. Slike diaprojekcije bodo prikazane na strani s podrobnostmi o lastnostih.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Ogled svoje slike');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Izbriši sliko');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Naloži sliko');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Ikone sob');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Ikone lastnosti lastnosti');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Naloži vse datoteke');
//8.0
jr_define ('COMMON_PREV', 'Prev.');
jr_define ('COMMON_MORE', 'More');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'Danes');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'Leto');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'Mesec');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'Teden');
jr_define ('_JOMRES_DASHBOARD_DAY', 'Dan');
jr_define ('_JOMRES_HLEGEND', 'Legenda');
jr_define ('_JOMRES_HFILTER', 'Filter');
jr_define ('_JOMRES_HFROM', 'Od');
jr_define ('_JOMRES_HTO', 'Za');
jr_define ('_JOMRES_HNEW_BOOKING', 'Nova rezervacija');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'Stanje depozita');
jr_define ('_JOMRES_HSTATUS_GUEST', 'Status gosta');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'Status rezervacije');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'Status objave');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'Stanje računa');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'Vrsta računa');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Odobreno');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Trenutno poslovanje');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Prikaži rezervacije za');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Prikaži račune za');
jr_define ('_JOMRES_STATUS_ANY', 'Vse');
jr_define ('_JOMRES_STATUS_PAID', 'Plačano');
jr_define ('_JOMRES_STATUS_NOTPAID', 'Ni plačano');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Odjavljeno');
jr_define ('_JOMRES_STATUS_ACTIVE', 'Aktivno');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Preklicano');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Objavljeno');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'Ni objavljeno');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Gosti z aktivnimi rezervacijami');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Gosti s preteklimi rezervacijami');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'Rezervacije');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Naročnine');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Provizije');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'Vsa moja podjetja');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Nastavi kot trenutno');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Prijava');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Odjava');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'rezervacije');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'lastnosti');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'gosti');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'poročila');
jr_define ('_JOMRES_HLIST_GUESTS', 'Gosti');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Seznam gostov');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Seznam računov');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Lastnosti');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Hitra rezervacija');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'Datum rezervacije');
jr_define ('_JOMRES_HTWO_WEEKS', 'Dva tedna');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Ta rezervacija bo preklicana. Pritisnite V redu, če želite preklicati rezervacijo.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Današnje prijave');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Danes blagajne');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Trenutni prebivalci');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'Lokacija vrstice za krmarjenje');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Privzeto (področje vsebine)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Popravljeno na vrh');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Popravljeno do dna');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Obrnjena vrstica navzgor (sprememba barve)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'Številka rezervacije');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Prikaži goste za');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres vključuje lastne nabore predlog, enega za vsako podprto različico Bootstrapa. Predloge/teme/teme WordPressa in Joomla, ki temeljijo na Bootstrapu, ponujajo posebno različico Bootstrapa, zato morate zagotoviti, da izberete možnost tukaj je združljivo z vašo predlogo/temo. Če vaša tema ne vsebuje zagonske kode, nastavite to možnost na Brez zagonskega pasu v temi, nato pa bo Jomres samodejno vključil datoteke Bootstrap 3 za lastno uporabo. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Prikaži goste za');
jr_define ('_JOMRES_HFIXED_PERIODS', 'Fiksna obdobja');
jr_define ('_JOMRES_HDEPOSITS', 'Depoziti');
jr_define ('_JOMRES_HBOOKING_FORM', 'Obrazec za rezervacijo');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Obvezna polja');
jr_define ('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define ('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define ('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define ('COMMON_PLACEHOLDER_STREET', 'Moja ulica');
jr_define ('COMMON_PLACEHOLDER_TOWN', 'Moje mesto');
jr_define ('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_PROPERTYNAME', 'Moj hotel');
jr_define ('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define ('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'Razširjena konfiguracija');
jr_define ('SIMPLE_CONFIGURATION', 'Enostavna konfiguracija');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Funkcije vira');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Vrsta vira');
 jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Uredi vrsto gosta');
jr_define ('_JOMRES_HEDIT_COUPON', 'Uredi kupon');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Uredi dodatno');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Ustvari več virov');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Ustvari vire');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Koliko virov?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Vrsta virov');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Največ gostov na vir');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Izbriši vse obstoječe vire?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Prosimo, upoštevajte, trenutno si ogledujete skrbniško območje z napredno konfiguracijo spletnega mesta nastavljeno na Ne. Če želite videti več možnosti, nastavite Konfiguracija mesta -> Razno -> Napredna konfiguracija spletnega mesta na Da.');
jr_define ('DATATABLES_SINFO', 'Prikaz _START_ do _END_ od _TOTAL_ vnosov');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Odobritev');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Zavrni povpraševanje po rezervaciji');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Odobri povpraševanje po rezervaciji');
jr_define ('_JOMRES_STATUS_APPROVED', 'Odobreno');
jr_define ('_JOMRES_STATUS_REJECTED', 'Zavrnjeno');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Poizvedba');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Za rezervacije je potrebna odobritev ali potrditev razpoložljivosti?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Če je nastavljeno na da, se ob rezervaciji ne bo prikazalo na koledarjih razpoložljivosti (in drugi gostje lahko še vedno rezervirajo te dni in vir), dokler upravitelj nepremičnine ne sprejme/potrdi razpoložljivosti za rezervacijo . Ko je potrjena, se rezervacija vstavi kot začasna (če ne prevlada nad drugimi rezervacijami; drugi gostje ne morejo več rezervirati istih datumov) in stranki se pošlje e -poštno sporočilo za plačilo. ');
jr_define ('_JOMRES_ERROR', 'Napaka');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Oprostite! Pri poskusu obdelave te funkcije je prišlo do napake. Poročali smo vam in to bomo preučili.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Sporočilo');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'Datoteka');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Vrstica');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Sled');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Predloge e -pošte');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Urejanje predloge e -pošte');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Zadeva e -pošte');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Besedilo e -pošte');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Vrsta e -pošte');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'Ime e -pošte');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'Opis e -pošte');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Prosimo, poglejte to stran za pomoč pri prilagajanju e-poštnih sporočil in seznam razpoložljivih rezultatov: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates target="_blank"> Pomoč za predloge e-pošte </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Novi skrbnik spletnega mesta za rezervacijo');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E -poštno sporočilo, poslano administratorju spletnega mesta ob novi rezervaciji, če je omogočen globalni prehod Paypal');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'E -poštni naslov za novo rezervacijo hotela');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E -poštno sporočilo, poslano lastniku nepremičnine, ko je opravljena nova rezervacija');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'E -poštni naslov za novo rezervacijo za goste');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E -poštno sporočilo poslano gostu ob novi rezervaciji');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Pismo za potrditev gosta');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Pismo za tiskanje ali e -poštno sporočilo, ki ga lahko lastnik nepremičnine pošlje ročno za potrditev rezervacije');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Ta rezervacija je lahko odobrena. Vsi izbrani viri so na voljo za izbrane datume.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Te rezervacije ni mogoče odobriti, ker so nekateri viri že rezervirani za izbrane datume. Rezervacijo boste morali najprej spremeniti.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Pokaži povezavo Powered by Jomres v nogi Jomresa.');
jr_define ('GUEST_BUDGET', 'Proračun');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Uporabi funkcijo proračuna?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Samo zagonska spletna mesta! Funkcija Proračun je funkcija seznama nepremičnin, s katero lahko gost označi nepremičnine, katerih cena na noč je pod določeno številko. Funkcija ima nekatere omejitve, saj lahko ni primeren za nekatera spletna mesta, ki uporabljajo veliko različnih valut. Upoštevajte, da če uporabljate ta in vtičnik Predstavljeni vnosi, se vaš razred zavijanja predstavljenih vnosov samodejno spremeni v primarno na plošči, ko je prikazan seznam lastnosti. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Ime:');
jr_define ('_JOMRES_FOR', 'Za');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'noč');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'noči');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Uporabi drsenje v živo/infiniranje na seznamu lastnosti?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'februar');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'mar');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'april');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'maj');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'junij');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'julij');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'avgust');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'september');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'oktober');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'december');
jr_define('DATATABLES_SEMPTYTABLE', 'Nobenih podatkov ni na voljo');
jr_define('DATATABLES_SINFO', 'Prikazujem _START_ do _END_ od _TOTAL_ zapisov');
jr_define('DATATABLES_SINFOEMPTY', 'Prikazujem 0 do 0 od 0 zapisov');
jr_define('DATATABLES_SINFOFILTERED', '(filtrirano od _MAX_ vseh zapisov)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Prikaži _MENU_ zapisov');
jr_define('DATATABLES_SLOADINGRECORDS', 'Nalagam...');
jr_define('DATATABLES_SPROCESSING', 'Obdelujem...');
jr_define('DATATABLES_SSEARCH', 'Išči:');
jr_define('DATATABLES_SZERORECORDS', 'Nobeden zapis ne ustreza');
jr_define('DATATABLES_SFIRST', 'Prvi');
jr_define('DATATABLES_SLAST', 'Zadnji');
jr_define('DATATABLES_SNEXT', 'Nasl.');
jr_define('DATATABLES_SPREVIOUS', 'Pred.');
jr_define('DATATABLES_SSORTASCENDING', ': vključite za naraščujoči sort');
jr_define('DATATABLES_SSORTDESCENDING', ': vključite za padajoči sort');
jr_define ('DATATABLES_SHOWHIDE', 'Spremeni stolpce');
jr_define ('_BOOKING_ONREQUEST', 'Rezervacija na zahtevo');
jr_define ('_BOOKING_INSTANT', 'Takojšnja rezervacija');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Vključi odličen nabor ikon pisave?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Nastavite na Da, če vaša predloga ne vsebuje odlične pisave.');
jr_define ('_BOOKING_CALCQUOTE', 'Zahtevaj rezervacijo');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Spoštovani');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Izberite spletno mesto');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'ID spletnega mesta');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'Država EU?');
jr_define ('_JOMRES_HLASTCHANGED', 'Zadnja sprememba');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E -poštni naslov za preklic rezervacije hotela');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E -poštno sporočilo, poslano lastniku nepremičnine, ko je nova rezervacija preklicana');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'E -poštni naslov za preklic rezervacije gostov');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E -poštno sporočilo poslano gostu, ko je nova rezervacija preklicana');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Pošlji testno e -pošto');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'To je testno e -poštno sporočilo vašega rezervacijskega sistema.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testno sporočilo je bilo uspešno poslano');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Testno e -poštno sporočilo ni bilo poslano');
jr_define ('_INVOICE_TRANSACTIONS', 'Transakcije');
jr_define ('_OPENEXCHANGE_API', 'Ključ API -ja za odprte menjalne tečaje');
jr_define ('_OPENEXCHANGE_API_DESC', 'Za pretvorbo cen med storitvami potrebujete ključ API odprtih menjalnih tečajev. MORATE imeti ključ API za pravilno prikazovanje cen v Jomresu, lahko pa <a href = "https://openexchangerates.org /signup/free target="_blank"> registrirajte se za brezplačni ključ </a> (urne posodobitve, 1000 zahtev/mesec - brez HTTPS, podpore po e -pošti ali naprednih funkcij). Jomres prenese menjalne tečaje enkrat na dan, dokler če uporabljate ključ le na peščici spletnih mest, verjetno ne boste presegli teh omejitev. Pred Jomresom 8.3 smo uporabljali starejšo funkcijo Yahooja brez dokumentov, vendar smo ugotovili, da je uporaba te funkcije v nasprotju z Yahoojevimi pogoji in Pogoji. Posledično moramo domnevati, da lahko funkcija v nekem trenutku v prihodnosti izgine, zato je spremenjena uporaba odprtih menjalnih tečajev. ');
jr_define ('_JOMRES_COMMISSION', 'Komisija');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Če naložite več slik za posamezne izbirne dodatke, bo uporabljena samo prva slika.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Plačaj zdaj');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Ta račun je zapadel v plačilo. Kliknite gumb, da izberete plačilno sredstvo.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Tukaj je seznam nekaterih odličnih stvari, ki jih lahko kupite pri rezervaciji v tej nastanitvi.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'Na tej strani lahko konfigurirate vse nameščene prehode. Te možnosti vam omogočajo sprejemanje plačil za vse račune za provizijo ali naročnino. Nastavitve vmesnika lahko preglasi le Paypal, vse druge prehode pa morate konfigurirati prek Zavihek Konfiguracija nepremičnine -> Vrata, če pa se na tem seznamu prikaže prehod, mora biti sposoben obdelati plačila depozita za rezervacijo in plačila na računu. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Prikaži na strani s podrobnostmi o lastnostih?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'Nastavitve strani s podrobnostmi o lastnostih');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'Upravljanje nepremičnin v Jomresu poteka samo na nadzorni plošči spletnega mesta. Na tej strani boste lahko našteli vse lastnosti v sistemu, tako da lahko dodelite provizije in jih odobrite/zavrnete (če ti funkcije so omogočene.) Če želite ustvariti novo lastnost, urediti obstoječo, upravljati rezervacije ali katero koli drugo nalogo, povezano z lastnino/rezervacijami, se boste morali prijaviti na prednjo stran spletnega mesta in iti na privzeto stran Jomres. Tam boste videli Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Ikone sobnih funkcij');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Kategorije lastnosti nepremičnin');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Urejanje kategorije lastnosti nepremičnine');
jr_define ('_JOMRES_HCATEGORY', 'Kategorija');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Prikaži lastnosti lastnosti, ločene v kategorije?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Nastavite na DA za ločitev lastnosti lastnosti v kategorije. Ta možnost vpliva samo na lastnosti lastnosti, prikazane na strani s podrobnostmi o lastnostih. Vse druge strani jih bodo prikazale, ne da bi jih razdelile na kategorije.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Razveljavi prijavo');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Razveljavi plačilo');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Neizdan');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Vaš ključ za prenos in podporo je veljaven, vtičnike boste lahko prenesli prek upravitelja vtičnikov.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Vaš ključ za prenos in podporo NI veljaven, vtičnikov NE boste mogli prenesti prek upravitelja vtičnikov.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'Podvrsta');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Niste še nastavili podvrste svoje nepremičnine. Tukaj jo definirate kot nekaj kot 5-sobno vilo ali 4-sobno hišo in pomaga gostom, ki iščejo, da izboljšajo svoja iskanja.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Daj podvrsti svoji nepremičnini');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Predloge e -pošte');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Nastavitve stikov');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'Od tu lahko preglasite vse kontaktne podatke o nepremičninah (e -pošta, telefon, faks), tako da bo vsa komunikacija z gosti poslana vam in ne lastnikom nepremičnine.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Preglasi kontaktne podatke o seznamih?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Če je ta možnost nastavljena na Da, bodo e -poštni naslovi nepremičnin in telefonske številke zamenjani s tistimi, nastavljenimi na tem zavihku. To prisili, da se vsa sporočila pošljejo na vaš imenovani e -poštni naslov, kar zagotavlja, da gost in lastnina lastnik ne more zaobiti mehanizma rezervacij in provizij, ki bodo nastale. To pomeni tudi, da bo lastnost ob vsaki spremembi opisa nepremičnine nastavljena na Neodobreno (če je omogočena funkcija odobritve), zato boste morali ročno preveriti opis zagotoviti, da upravitelji niso vnesli podatkov o telefonu ali e -pošti v besedilna polja, preden jih znova odobrijo. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Spremembe podrobnosti o seznamu zahtevajo preverjanje skrbnika spletnega mesta. Če shranite nove podrobnosti, bo vaš vnos neobjavljen in čaka na odobritev skrbnika spletnega mesta, preden bo spet viden obiskovalcem spletnega mesta. Ne boste mogli prejemati na spletu rezervacije, medtem ko vaš vnos ni objavljen in čaka na odobritev. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Pregled zahteve za rezervacijo');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Potrditev zahteve za rezervacijo');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Spremeni zahtevo po rezervaciji');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Označi račun kot čakajoč');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Račun označen kot čakajoč');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Pošlji anonimne podatke o sledenju?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Izberite Da, če želite poslati anonimne podatke o sledenju na Jomres.net, da nam pomaga bolje razumeti, kako uporabljate sistem.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Prepričajte se, da so vaši podatki izpolnjeni na strani Uredi moj račun, preden poskušate rezervirati v imenu svojih strank.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Kontaktni podatki gosta");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - Novi gost -');
jr_define ('_JOMRES_CHARTS', 'Lestvice');
jr_define ('_JOMRES_CHARTS_SELECT', 'Izberite grafikon ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'Dohodek po letih/mesecu');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "V redu, začnimo. Najprej morate ustvariti nekaj sob za to lastnost.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Ustvari nekaj sob zdaj');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Raziskave so pokazale, da lastnosti z veliko kakovostnimi slikami ustvarijo več ogledov. Naložite glavno sliko in nekaj slik diaprojekcije, da izboljšate možnosti za rezervacijo.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Naloži sliko');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Ustvari nekaj tarif');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Kaj bodo gostje rezervirali?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Je ta nepremičnina tipa nepremičnine hotelskega tipa, kjer oddajate sobe v nepremičnini, ali nepremičnine tipa vile, kjer oddate celotno nepremičnino v eni rezervaciji?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Sobe v nepremičnini');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Celotna lastnina');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Oba'); // To je vmesna nastavitev, ki obstoječim uporabnikom, ki še ne bodo posodobili svojih vrst lastnosti, omogoča nazaj primerljivost. Ne bo mogoče izbrati
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Kaj bodo gostje rezervirali?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Dopolniti morate podatke o naslovu, da vas bodo gostje našli, ko pridejo na bivanje.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Posodobi svoj naslov');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Ups, izgleda, da ste pozabili izpolniti vsa polja.');
jr_define ('_JOMRES_CONTANT_US', 'Pišite nam');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Dobrodošli na vašem novem spletnem seznamu za');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Pozdravljeni in dobrodošli v vaši novi nepremičnini');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Pred kratkim ste na našo spletno stran dodali novo nepremičnino in želimo vam dobrodošlico v družini.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Lahko vidite svojo novo nadzorno ploščo');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'tukaj');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "Ko nastavite svojo nepremičnino, si lahko ogledate, kako izgleda obiskovalcem spletnega mesta");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'vaša prva stran.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(ni objavljeno, zato ga obiskovalci spletnega mesta še ne vidijo.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "Na vrhu strani boste videli številna sporočila. Gumbi ob teh sporočilih vas bodo vodili do strani, ki jih morate obiskati, da nastavite svojo lastnino na našem spletnem mestu. Ko boste Če smo izvedli vsako od teh nalog, bodo obiskovalci na naši spletni strani veliko lažje našli vašo nepremičnino in opravili rezervacije na spletu. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Če imate sploh kakšno vprašanje, prosim');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontaktirajte nas');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "z veseljem vam bomo odgovorili na vsa vprašanja.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Vse najboljše, naša ekipa na');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Zdi se, da nimate nobenih izletov za prodajo. Ustvarite profil potovanja, nato pa z gumbom Ustvari ustvarite nekaj ogledov.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Ustvarimo nekaj ogledov!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Lokacija simbola zamenjave valute');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Uporabite to možnost za premik simbola valute od zadaj, pred številko cene ali obratno.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Vnesite ID svoje facebook strani, na primer "jomres". Pustite to polje prazno, če ne želite prikazati ničesar. Ne vnesite https://www.facebook.com ali česa drugega.');
jr_define ('COMMON_DOWNLOAD', 'Download');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Nato boste morali dodati nekaj tarif. To so vaše osnovne cene.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap ni omogočen!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Opozorilo, v nastavitvah spletnega mesta Jomres nimate omogočenega zagonskega zagona -> zavihek Razno. Za zagotavljanje <i> nekaterih </i> funkcij Jomres trenutno uporablja svoje stare predloge, ki temeljijo na uporabniškem vmesniku jQuery, vendar se na njih že nekaj let ne dela. Vsi trenutni razvoj in izboljšave predlog Jomres (datoteke postavitve) so narejene v datotekah s predlogami Bootstrap 3. Če želite kar najbolje izkoristiti Jomres, vam priporočamo, da namestite sistem Bootstrap 3 tema za Wordpress ali Joomlo. Ko to storite, lahko v konfiguraciji spletnega mesta omogočite Jomres Bootstrap predloge.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Vaš ključ za podporo je veljaven. Upoštevajte, da ta licenca ne dovoljuje prenosov vtičnikov.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Povlecite rezervacije na to območje, da jih prekličete');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Prepričajte se, da ste ustvarili stran WordPress, ki vsebuje kratko kodo [jomres: xx-XX] (kjer je xx-XX koda jezika vašega spletnega mesta, na primer [jomres: en-GB] ali [ jomres: sl-ZDA]) drugače ne boste mogli dostopati do Jomresa s prednje strani za upravljanje svojih nepremičnin in rezervacij. <br> Jomres je zgrajen na ogrodju Bootstrap, zato ga morate uporabljati pri temi, ki temelji na Bootstrapu. priporočam eno, ki temelji na Bootstrapu 3. Če nimate dostopa do teme, priporočamo, da uporabite temo Jomresa Leohtiana za Wordpress, ki jo lahko <a href = "https://www.jomres.net/download/free- downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress target="_blank"> prenesite od tu. </a> ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Preden lahko ustvarite tip sobe, moramo vedeti, ali gre za nepremičnine hotelskega tipa ali za vile.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Kliknite, če želite dodati nove vrste sob');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Opozorilo, imate eno ali več vrst nepremičnin brez tipov sob. Lastnosti potrebujejo vrste sob, da lahko upravitelji nepremičnin ustvarijo tarife.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Z novim gumbom ustvarite nove vrste sob.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Ogledi');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Brez rezervacij/nepremičnin (preprost seznam)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Lokacija datoteke dnevnika');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres privzeto beleži sistemsko dejavnost na lokacijo' .JOMRES_SYSTEMLOG_PATH. ' na enega nad korenom vašega spletnega dokumenta. Če ne razumete, kaj to pomeni, prosite za nasvet svoje spletne gostitelje, saj bodo poznali vaš datotečni sistem. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres beleži podrobne informacije o vašem sistemu, vključno s ključi api, sistemskimi potmi, prehodi in informacijami o gostu, ki pa ne smejo biti vidne preostalemu internetu. Pot vašega sistemskega dnevnika ni nastavljena, zato sistemski dnevniki se trenutno shranjujejo v imenik '.JOMRES_SYSTEMLOG_PATH. ', kar ni idealno. Obiščite Konfiguracija spletnega mesta -> Odpravljanje napak in v svojem datotečnem sistemu nastavite pot, ki je zunaj spletnega korena. Če ste v dvomih, se obrnite na svoje spletne gostitelje saj vam bodo lahko svetovali. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Če je vaš CMS nameščen v korenskem imeniku vašega spletnega mesta, bi bila primerna lokacija');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nimate nastavljenega ključa Google Zemljevidov. Zaradi nedavnih sprememb v Google Zemljevidih ​​bodo vsa nova spletna mesta potrebovala ključ API za uporabo funkcij Google Zemljevida. Prosimo <a href = 'http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key 'target =' _ blank '> si oglejte našo stran z navodili za ustvarjanje ključa API < /a> in ključ shranite v Jomresu. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'Barvna shema Google zemljevida');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Prav, začnimo z dodajanjem vaše nepremičnine na spletno mesto. Tukaj moramo zbrati nekaj podatkov o vaši nepremičnini. Tako bomo lahko nastavili gole kosti vaše nepremičnine. Ko to storite, potem vodilo se bo po dodajanju sob, cen in slik. ");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Vrsta nepremičnine vam pomaga določiti, kako bo nepremičnina rezervirana, na primer s hoteli, v katerih "prodate" le eno ali dve sobi hkrati, medtem ko z vilami ponudite celotno nepremičnino.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Upoštevajte, da e -poštni naslov ne sme biti enak tistemu, ki ste ga uporabili pri registraciji računa. To vam omogoča različne naslove za različne lastnosti.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimalni depozit');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Nastavite lahko najnižji znesek depozita, ki ga želite zaračunati. Če to storite, nastavitev "Zahtevan depozit je cena prve noči?" & "Zahtevan depozit je odstotek?" v konfiguraciji nepremičnine ni mogoče konfigurirati. , namesto tega so vse vrednosti depozitov odstotek in morajo biti vsaj številka, ki jo določite tukaj. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Ta številka ne sme biti manjša od');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Gostitelj sistemskega dnevnika');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Vrata za sistemski dnevnik');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Če želite poslati sporočila sistemskega dnevnika na strežnik sistemskega dnevnika, lahko tukaj nastavite ime gostitelja ali IP (npr. 192.168.0.2) in vrata (npr. 514). Upoštevajte, če je spletno mesto nastavljeno n Razvoj, potem bodo poslana sporočila DEBUG. Če je nastavljeno na Proizvodnja, bodo poslana samo sporočila o ravni INFO in višjih. Če želite onemogočiti prijavo na oddaljeni strežnik, izpraznite polja gostitelja in vrat.");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP ne sme dostopati do funkcij PHP openlog in syslog. To je nastavitev na strani strežnika, če želite, da Jomres pošilja sporočila na strežnik sistemskega dnevnika, se obrnite na svoje gostitelje in potrdite, ali lahko PHP dostopa do teh funkcij. Ko bo omogočena, boste tukaj lahko konfigurirali nastavitve strežnika syslog. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Pošlji e -poštno sporočilo administratorju spletnega mesta, ko pride do napake?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "V preteklosti so bila vprašanja, ki jih je treba raziskati, poslana po e -pošti lastnikom spletnih mest. To je lahko odlično za spremljanje delovanja vašega sistema, saj ima ogromno premikajočih se delov in je težko slediti vsi. Žal lahko pajki in roboti, ki preiščejo vaša spletna mesta (tudi prijazna), nenamerno sprožijo usodne napake, kar lahko povzroči, da bo število prejetih sporočil ogromno. V tem primeru nastavite to možnost na Ne. Jomres pošlje beleženje sporočila v niz datotek za beleženje in v strežnik syslog (če vaše posebne nastavitve PHP to dovoljujejo, če se ne obrnejo na gostitelja). Datoteke lahko ročno analizirate, če iščete kaj posebnega (na primer, če razvijate prehod in želite uporabiti klic funkcije gateway_log ().), vendar je za preiskavo veliko informacij, zato je bolje uporabiti nekaj podobnega kot analizator datotek syslog. Če razvijate na Linuxu, potem na voljo vam je veliko orodij, če je v sistemu Windows preprosto orodje, ki ga lahko uporabite, http://maxbelkov.github.io/visualsyslog/ Na tej strani nastavite »gostitelja Syslog« na »127.0.0.1« in » Port 'na 514, če si želite ogledati sporočila, prijavljena v tem orodju. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Upravljanje lastnosti');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nimate nastavljenega ključa API -ja za zaznavanje IP -ja. To je potrebno, da lahko sistem samodejno zazna uporabnikovo lokacijo in samodejno nastavi njihovo valuto in državo. Prosimo <a href = 'http: // www .jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab 'target =' _ blank '> glejte naš priročnik stran o tem, kako ustvariti ključ API -ja za zaznavanje IP -ja </a> in ga shraniti v Jomres> Konfiguracija spletnega mesta> Pretvorbe valut / kode valut. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nimate nastavljenega ključa API -ja za odprte menjalne tečaje. To je potrebno, da lahko sistem samodejno prenese in uporablja menjalne tečaje. Prosim <a href = 'http: //www.jomres.net /manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-code-tab 'target =' _ blank '> si oglejte našo stran z navodili, kako ustvarite ključ API -ja za zaznavanje IP -ja </a> in ga shranite v Jomres> Konfiguracija spletnega mesta> Pretvorbe valut / kode valut. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Številka dovoljenja');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Nekatere države predpisujejo, da morate za svojo nepremičnino prikazati številko dovoljenja. Če imate takšno številko, jo vnesite tukaj in bo dodana v razdelek glave nepremičnine.');
jr_define ('_JOMRES_SHORTCODES', 'Kratke kode');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong> Vtičnik <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot MORATE namestiti in omogočiti, da te kratke kode delujejo. To je mogoče najti v upravitelju vtičnikov Jomres. Če je bilo to mesto zgrajeno z eno Quickstarts je verjetno že nameščen. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Zagotoviti morate, da je vtičnik <strong> 'Jomres Shortcodes' </strong> vklopljen. To je mogoče najti v upravitelju vtičnikov Jomres. Če je bilo to mesto zgrajeno z enim od hitrih zagonov, je verjetno že nameščen. ");
jr_define ('SHORTCODE_TASK', 'Naloga');
jr_define ('SHORTCODE_DESCRIPTION', 'Opis');
jr_define ('SHORTCODE_ARGUMENTS', 'Argumenti');
jr_define ('SHORTCODE_EXAMPLE', 'Primer');
jr_define ('INTEGRITY_CHECK', 'Preverjanje integritete datotečnega sistema');
jr_define ('INTEGRITY_CHECK_DESC', 'Ta funkcija vam omogoča, da preverite, ali se datotečni sistem ujema s tistim, ki je na voljo v trenutni različici Jomresa. To je uporabno za zagotovitev, da so bile vse datoteke po namestitvi/nadgradnji pravilno posodobljene. Datoteke v rdeči barvi manjkajo, datoteke v Oranžna obstaja, vendar se razlikuje od tistih, ki so na voljo v trenutni različici. Tu bodo navedene le datoteke, ki predstavljajo potencialne težave. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Preverjanje integritete datotečnega sistema');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Lokalno razpršitev');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Razpršitev različice');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Super! Nobenih težav ni bilo ugotovljeno.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Oznaka Google zemljevidov');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Preberi več');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Manj beri');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Turistična taksa');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Stopnja turistične takse');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Nastavite stopnjo turistične takse. Turistična taksa se izračuna šele po ustvarjanju začetne rezervacije in se doda na stran za potrditev rezervacije v polju za dodatne storitve.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Je odstotek?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Nastavite na Da, če je davek odstotek ali Ne, če je pavšalna pristojbina.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Vpliva na celotno vrednost rezervacije?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Nastavite na Da, če mora davek pokriti celotno vrednost rezervacije, torej je odstotek obeh namestitev skupaj z vsemi dodatki ali Ne, če je izračunan le na podlagi vrednosti skupna nastanitev. Če je zgornja možnost 'Is Odstotek' nastavljena na Ne, se ta možnost prezre. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Upoštevajte, da bo tej rezervaciji dodana turistična taksa. Davek boste lahko videli na strani za rezervacijo pregleda.');
jr_define ('NO_LICENSE_MESSAGE', "V konfiguraciji spletnega mesta niste shranili številke licence, zato ne boste mogli prenesti vtičnikov. Ko imate shranjen veljaven licenčni ključ, boste lahko namestili vse vtičnike, ki so navedeni kot Osnovni vtičniki. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Zdi se, da uporabljate številko licence, ki je neveljavna ali je potekla. Ko boste shranili veljaven licenčni ključ, boste lahko namestili vse vtičnike, ki so navedeni kot vtičniki Core.");
jr_define ('VALID_LICENSE_MESSAGE', "Čestitamo, uporabljate veljavno številko licence in lahko namestite vtičnike Core prek upravitelja vtičnikov Jomres.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ta stran vam omogoča nalaganje slik za vašo lastnino in stvari, ki jih ponujate. Ima en glavni gumb in drugi gumb, ki omogoča izbiro določenih virov za nalaganje slik. Torej, glavna lastnost slika in diaprojekcija bosta prikazala samo en gumb, če pa ste ustvarili kakšen npr. izbirni dodatek ali sobe, boste videli drugi gumb, kamor lahko naložite slike za te posebne vire. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ta stran vam omogoča nalaganje slik za vašo lastnino in stvari, ki jih ponujate. Ima en glavni gumb in drugi gumb, ki omogoča izbiro določenih virov za nalaganje slik. Torej, glavna lastnost slika in diaprojekcija bosta prikazala samo en gumb, če pa ste ustvarili izbirne dodatke, boste videli drugi gumb, kamor lahko naložite slike za te posebne vire. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Najprej izberite slike, ki jih želite naložiti, tako da kliknete Dodaj sliko ali uporabite funkcijo povleci in spusti. Te bodo prikazane v stolpcu na desni strani. </li>
  <li> Nad tem območjem uporabite gumb \"Izberite vir\", da izberete, za kateri vir želite naložiti slike. Morda vam bo ponujena možnost, da spodaj izberete določen vir. </li>
  <li> Ko izberete vir, lahko kliknete gumb Naloži sliko pod sliko, da ga povežete s tem virom. Ko je slika naložena, bo izginila iz stolpca na desni strani in se prikazala na levi. </li>
  <li> Z gumbom Smetnjak poleg obstoječih slik odstranite slike, ki jih ne želite več prikazovati. </li>
  <li> Vrstni red prikaza datotek v diaprojekciji lahko spremenite tako, da jih pred nalaganjem preimenujete, saj so prikazane na straneh po abecednem vrstnem redu. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Ob gumbu Viri boste morda videli gumb za predogled. Če kliknete na to, se prikaže pojavno okno, ki prikazuje, kako bodo naložene slike videti na strani. To vam bo pomagalo zamisel, kako bodo slike videti vašim strankam. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Število slik, ki jih lahko naložite, ni omejeno. Slike se ob nalaganju samodejno spremenijo. Naložite lahko samo datoteke JPG in PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "V idealnem primeru bi bile vse slike, ki jih naložite, vsaj");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "slikovne pike široke, sicer bodo lahko po nalaganju videti nejasne.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Vse slike, ki jih naložite, ne smejo biti več kot");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "v velikosti.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Izberite vir, za katerega želite naložiti slike");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Poseben vir");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Slike, ki so že naložene za ta vir");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Oblikovanje besedila');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Tukaj lahko vnesete besedilo s preprostim oblikovanjem Markdown. Ni vam treba poznati nobenega HTML -ja, samo uporabite gumbe, da bodo podatki videti, kot želite, ali pa besedilo oblikujte v skladu s temi primeri.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Poudarek');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'krepko');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'poševno');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'prečrtano');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Glave");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Velika glava');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Srednja glava");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Majhna glava');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Majhna glava');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Seznami");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Splošna postavka seznama');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Oštevilčena postavka seznama');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Povezave');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Besedilo za prikaz');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citati');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'To je narekovaj.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Lahko obsega več vrstic!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Slike');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabele');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Stolpec');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Prikaži slike lastnosti kot diaprojekcijo na seznamu lastnosti?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Če je nastavljeno na da, se prikaže diaprojekcija glavnih slik lastnosti. Če nastavite na ne, se prikaže prva glavna slika lastnosti.');
jr_define ('EDIT_CMS_USER', 'Urejanje uporabnika CMS');
jr_define ('BOOKING_MADE_BY', 'Rezervacija opravljena');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Storitve');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Vrste sob');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL zunanjega obrazca za rezervacijo');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Tukaj lahko nastavite zunanji URL, če želite za rezervacije uporabiti spletno mesto tretje osebe. Vsi gumbi za rezervacijo jomres bodo kazali na ta URL. To polje pustite prazno, če želite uporabiti obrazec za rezervacijo Jomresa . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (kratek opis sobe/podnapisi)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Opis sobe');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Gost na črnem seznamu');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Če je ta gost na črnem seznamu, potem ne bo mogel več rezervirati v tej nepremičnini.'); jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Shrani datoteke sej jomres na disk ali v bazo podatkov. Priporočeno: zbirka podatkov');
jr_define ('_JOMRES_MAP_HEIGHT', "Višina zemljevida (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Raven povečave zemljevida");
jr_define ('_JOMRES_MAP_MAPTYPE', "Vrsta zemljevida");
jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Upravitelj preglasitve predloge");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Paketi predlog so vtičniki, ki lahko zagotovijo preglasitev predlog za različne jedrne datoteke predlog Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Na tej strani so navedene vse datoteke s predlogami, ki jih lahko razveljavijo datoteke s predlogami paketa predlog. Če želite preglasiti določeno datoteko predloge, kliknite gumb za urejanje te datoteke, na naslednji strani boste lahko izberete, s katero različico želite preglasiti. Upoštevajte, da imajo te preglasitve prednost pred Jomres Core in vsemi preglasitvami teme/predloge Wordpress ali Joomla. Preglasitev lahko onemogočite tako, da jo izbrišete na strani Preglasitve predloge seznama. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Ime predloge");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Trenutna pot");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Ni razveljavljeno");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Izberete lahko datoteko predloge za preglasitev datotek predloge Core tako, da spremenite spustni meni");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Odstotek rezerviranih sob");
jr_define ('_JOMRES_SELECT_WIDGETS', "Izberite pripomočke");
jr_define ('_JOMRES_INTERVAL', "Interval");
jr_define ('_JOMRES_TIMELINE', "Časovnica");
jr_define ('_JOMRES_CPANEL_GRID', "Domača postavitev nadzorne plošče");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Izberite postavitev mreže na domači strani nadzorne plošče za upravljanje premoženja.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Označevalniki Google Zemljevidov");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Slike mest");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "S spremembo vrste nepremičnine bodo izbrisane vse sobe, tarife, nastavitve nepremičnine in ponastavitev razpoložljivosti.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Upoštevajte, da morate po posodobitvi posodobiti vse vtičnike Jomres, ki so že nameščeni, prek upravitelja vtičnikov Jomres. Če imate nameščene vtičnike Core, vendar nimate veljavne licence za Jomres, <em> naredimo ne </em> priporočamo, da posodobite Jomres, saj starejši vtičniki pogosto ne delujejo z novejšimi različicami Jomresa. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Upoštevajte, da morate po posodobitvi posodobiti vse vtičnike Jomres, ki so že nameščeni, prek upravitelja vtičnikov Jomres.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Če želite posodobiti Jomres in njegove vtičnike, potrebujete licenco za podaljšanje. Obiščite <a href='https://www.jomres.net/pricing' target='_blank'> naš spletno mesto </a> za več informacij. V večini primerov so te licence 50% cene celotne licence. Preden kupite podaljšanje, se prepričajte, da ste prijavljeni v našo trgovino. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Način plačila:");

jr_define ('_JOMRES_PRICES', "Poveži se");


jr_define ('_OAUTH_TITLE', "Upravljanje ključev aplikacije");
jr_define ('_OAUTH_APPS', "Podrobnosti odjemalca API -ja REST");
jr_define ('_OAUTH_IDENTIFIER', "Identifikator");
jr_define ('_OAUTH_APIKEY', "ID odjemalca");
jr_define ('_OAUTH_SECRET', "Skrivnost");
jr_define ('_OAUTH_CREATED', "Ustvarjena/posodobljena aplikacija");
jr_define ('_OAUTH_CLIENT_ID_INFO', "ID odjemalca in skrivnost sta ustvarjena za vas. Identifikator je tako, da lahko preprosto identificirate ta par ključev.");
jr_define ('_OAUTH_SCOPE_TITLE', "Dovoljenja (kaj lahko odjemalec naredi)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Uporabniška dovoljenja");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Dovoljenja lastnine");

jr_define ('API_DOCUMENTATION_TITLE', "Dokumentacija API -ja REST API");

jr_define ('_OAUTH_CONFIG', "Konfiguracija jedra API");

jr_define ('_OAUTH_CONFIG_SHOW', "Prikaži možnosti konfiguracije odjemalca API v glavnem meniju Jomresa?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Lahko se odločite, da v razdelku Moj račun v glavnem meniju Jomresa ne prikažete možnosti konfiguracije odjemalca API. Namesto tega se lahko odločite, da jih želite prikazati na drugih straneh s kratkimi kodami Jomres.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Prikaže stran z dokumentacijo jedra API. Core API omogoča uporabnikom, da ustvarijo odjemalce API, ki se nato uporabijo za dostop do funkcionalnosti API, ki je opisana v dokumentaciji API Core.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Prikaže osrednjo stran za upravljanje API -ja, na kateri lahko upravitelji lastnosti konfigurirajo odjemalce API. Upoštevajte, da je to samo registriran uporabnik, zato morajo biti uporabniki registrirani in prijavljeni, preden si lahko ogledajo to stran.");

jr_define ('API_METHODS_TITLE', "Metode API");
jr_define ('API_METHODS_DESCRIPTION', "Ta seznam metod temelji na nameščenih vtičnikih za funkcije API in se samodejno ustvari. Če namestite ali izbrišete vtičnik za funkcijo API, obiščite to stran, da obnovite ta seznam metod API, ki so na voljo na vašem spletnem mestu. ");

jr_define ('_OAUTH_REDIRECT_URI', "URI za preusmeritev");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Daj mi ime, ki je zate pomembno, na primer Moj telefon");

jr_define ('_OAUTH_GRANT_TYPES', "Ta sistem podpira dve vrsti dodelitve, poverilnice odjemalca in implicitno. Če uporabljate tok <em> client_credentials </em>, boste potrebovali tako ID odjemalca kot skrivnost odjemalca. Če uporabljate <em > implicitno </em> potem bi vaša aplikacija poslala samo ID odjemalca in vi bi se prijavili v sistem, da to aplikacijo izrecno pooblastite. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "Če želite uporabiti <em> implicitni </em> tok vrste dodeljevanja, boste morali za odobritev svojih aplikacij uporabiti ta URL. Ko je ta URL poklican in ste aplikacijo pooblastili, bo sistem izdal žeton, ki ga bodo aplikacije uporabljale za klicanje API -ja tega sistema ");
jr_define ('_OAUTH_AUTHORISATION_URL', "URL za avtorizacijo");

jr_define ('WEBHOOKS_CORE', 'Webhooks');

jr_define ('_WEBHOOKS_CONFIG_SHOW', "Prikaži konfiguracijske možnosti Webhook v glavnem meniju Jomresa?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Lahko se odločite, da možnosti konfiguracije Webhook ne prikažete v razdelku Moj račun v glavnem meniju Jomresa. Namesto tega se lahko odločite, da jih želite prikazati na drugih straneh z uporabo kratkih kod Jomres.");
jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "Dokumentacija Webhooks");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Prikaže stran dokumentacije jedra API -ja. Core API omogoča uporabnikom, da ustvarijo odjemalce API -ja, ki se nato uporabljajo za dostop do funkcionalnosti API -ja, ki je opisana v dokumentaciji API Core.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Prikaže osrednjo stran za upravljanje API -ja, na kateri lahko upravitelji lastnosti konfigurirajo odjemalce API. Upoštevajte, da je to funkcija samo za registrirane uporabnike, zato morajo biti uporabniki registrirani in prijavljeni, preden lahko vidijo to stran.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Urejanje integracije');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'ID integracije');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL ali ime');
jr_define ('WEBHOOKS_ENABLED', 'Omogočeno');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Način preverjanja pristnosti/integracija');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Vsi spletni kliki, ki jih ustvarite, se ne bodo sprožili, ker niste dodeljeni nobeni znamki. Upravljalci super -lastnosti običajno ne dodelijo posameznih lastnosti, zato boste za ustvarjanje spletnega kljuka morda potrebovali novega uporabnika.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Vsi spletni potiki, ki jih ustvarite, bodo sproženi proti naslednjim lastnostim:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'Omejitev pregledov');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'S to nastavitvijo omejite število pregledov, prikazanih na strani s podrobnostmi o nepremičnini.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Prikaži vsa mnenja');

jr_define ('VIDEO_TUTORIALS', 'Video Tutoriali');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Najmanjša vrednost depozita');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Če je izračunani depozit manjši od tega zneska, namesto tega nastavite depozit na to vrednost. Ta številka je lahko sama prekoračena, če ne ustreza nastavitvi minimalnega depozita spletnega mesta. Pustite nastavljeno na 0 do nastavitve ne uporabljajte. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Če želite povečati hitrost svojega spletnega mesta, priporočamo, da v bazo podatkov uvozite podrobnosti o obstoječih slikah spletnega mesta in lastnosti.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Uvoz obstoječih podrobnosti slik v bazo podatkov');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Poskusna funkcija. Če je omogočeno, bodo slike, naložene s funkcijo medijskega središča, kopirane tudi v vedro Amazon S3 in postrežene iz URL -ja vedra Amazon S3. Ko to omogočite prvič, boste tudi napovedano za uvoz obstoječih slik v vedro S3. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'Domena CloudFront');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Zamenjajte privzeto domeno Amazon S3 s svojo domeno CloudFront');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Priporočeno, da se omogoči. Samo za Windows in Mac OSX, če libcurl ni bil zgrajen s podporo za Schannel ali Secure Transport (izvorne knjižnice SSL, vključene v Windows in Mac OS X)), morate to nastaviti na Št. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Omogočili ste integracijo Amazon S3, zato boste morali vse obstoječe slike kopirati v vedro S3. Slike so zdaj na voljo obiskovalcem vašega spletnega mesta z vašega naslova Amazon S3, zato boste potrebovali da jih najprej kopirate v vedro S3, sicer ne bodo vidni obiskovalcem vašega spletnega mesta. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Ko pritisnete ta gumb, ne prekinjajte postopka in počakajte na sporočilo o uspehu ali napaki. To lahko traja nekaj časa, da se dokonča.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopiraj obstoječe slike v vedro Amazon S3');


jr_define ('JOMRES_INCOMPLETE', 'Nepopolno');
jr_define ('JOMRES_WATING_APPROVAL', 'Čaka na odobritev');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Zemljevid podrobnosti nepremičnine');

jr_define ('HAS_STARS_TITLE', 'Dovoli klasifikacijo zvezd?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Prisiliti ponovni uvoz podatkov o sliki v bazo podatkov');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Prisilno znova naložite slike v vedro S3');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Izbrisati vse podatke Jomresa ob odstranitvi?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Če je nastavljeno na da, bo Jomres ob odstranitvi izbrisal vse tabele podatkovne zbirke. S tem bodo izbrisani vsi podatki Jomresa iz db in jih ni mogoče razveljaviti.');

jr_define ('TRANSACTION_IDS', 'ID transakcije');
jr_define ('PAYMENT_METHOD', 'Način plačila');
jr_define ('POA_DISPLAY_PRICE', 'Cena POA');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Ko so lastnosti prikazane na seznamu, bo sistem poskušal najti veljavno ceno iz konfiguriranih tarif na podlagi današnjega datuma ali če so bili datumi uporabljeni pri iskanju, potem na podlagi teh datumov .Če ne more, bo prikazano POA (cena za prijavo), kar pomeni, da se mora gost obrniti na vas, da dobi ceno. Če želite, lahko tukaj nastavite ceno, ki bo prikazana namesto besedila POA. Ta številka bi bila "nadomestna" cena za prikaz, če druge cene ni mogoče določiti. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Preden lahko namestite vtičnike Jomres, morate namestiti upravitelja vtičnikov, ali želite to storiti zdaj?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Preden lahko posodobite vse nameščene vtičnike, morate posodobiti upravitelja vtičnikov, ali želite to storiti zdaj?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Naredimo to!");

jr_define ('INCLUDEINFILTERS', 'Vključi v filtre?');
jr_define ('INCLUDEINFILTERS_DESC', 'Filtri lastnosti lastnosti v Ajax Composite Searchu lahko postanejo zelo dolgi, zato lahko to možnost nastavite na Ne, da preprečite, da bi se ta funkcija prikazala na seznamu lastnosti lastnosti.');

jr_define ('REVIEW_REMINDER_PT1', "Imate");
jr_define ('REVIEW_REMINDER_PT2', "rezervacije, za katere še niste pustili ocene. Pustite mnenje.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Rezervacije čakajo na ocene");
jr_define ('REVIEW_NAG', "Nagnite goste za ocene?");
jr_define ('REVIEW_NAG_DESC', "Ko je gost rezerviran za rezervacijo, ga bo sistem opozoril, naj objavi oceno za svojo rezervacijo. Za onemogočanje opomnika to možnost nastavite na Ne.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Skrij naslov?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Če to možnost nastavite na Da, bodo lahko samo gosti, ki so že rezervirali rezervacijo v vaši nepremičnini, videli naslov nepremičnine. To nastavitev lahko uporabite za skritje natančne lokacije nepremičnine če na primer rutinsko ostane brez nadzora. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimiziraj slike ob nalaganju?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Ko je omogočeno, bodo slike optimizirane za splet (velikost datoteke je lahko do 75% manjša). Odvisno od vrste naložene slike mora imeti vaš strežnik eno ali več teh knjižnic, ki jih namesti gostitelj ponudnik: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Preverjanje integritete zbirke podatkov');
jr_define ('OBSOLETE_FILES_CHECK', 'Preverjanje zastarelih datotek');
jr_define ('DATATABLES_COLVIS', 'Vidljivost stolpca');

jr_define ('API_TOKEN_LIFETIME', 'Življenjska doba žetona API');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Kako dolgo žeton API ostane veljaven, v sekundah. 86400 = 1 dan, 31536000 = 1 leto');


jr_define ('ENCRYPTION_TITLE', 'Encryption');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Lokacija datoteke za šifriranje');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Nikoli ne izbrišite šifrirne datoteke ** <br/> Uporabniški podatki so shranjeni šifrirani v tabelah, da zagotovite, da so "podatki v mirovanju" varno zaščiteni v skladu s priporočili GDPR. Privzeto šifrirni ključ je shranjena v datoteki "encryption_key.class.php" v korenu vaše namestitve Jomres (običajno /public_html /jomres). Tu lahko spremenite, kje je datoteka shranjena. Če spremenite lokacijo, morate datoteko premakniti, ne čakajte, da Jomres ustvari novo različico, sicer ne boste mogli dekodirati podatkov vaših gostov. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Tukaj shranjeni podatki bodo uporabljeni na računih, ustvarjenih za to lastnost');

jr_define ('_JOMRES_GDPR_POLICIES', 'Politike GDPR');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Tukaj lahko nastavite, kako dolgo bo po ustvarjanju rezervacije ali računa odstranjen iz sistema, da zagotovite, da ste skladni z GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Obdobje hrambe rezervacije (v dneh)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Koliko dni po datumu odhoda rezervacije je treba izbrisati rezervacijo? Ko je izbrisana, sta tako rezervacija kot račun odstranjeni. Običajno obdobje hrambe je lahko 365 dni.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Obdobje hrambe računa (ne rezervacije)');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Drugi računi, na primer računi za naročnine in naročnine, niso vezani na rezervacije. Posledično ne bodo izbrisani, ko bodo izbrisani računi in pogodbe. Odvisno od vaše države in vaše poslovne prakse, konfigurirati boste morali drugo obdobje hrambe. Tipično obdobje hrambe je lahko 3653 dni, kar je 10 let. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Vaši podatki');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Nekatere funkcije tega spletnega mesta morajo shranjevati podatke o vašem obisku. Uporabljajo se le za zagotavljanje storitev, nikoli jih ne delite z nikomer drugim in se izbrišejo, ko niso več potrebne.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'NAM DAJETE DOVOLJENJE ZA SHRANJEVANJE TIH INFORMACIJ ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Podrobno');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Morate se strinjati, da shranjujemo te podatke, da lahko na teh straneh opravite rezervacije. Ne glede na to, ali se strinjate s shranjevanjem vaših podatkov, bomo v vaš računalnik shranili piškotek ali ste se odločili ali ne. To nam pomaga zagotoviti, da vas ne bomo nenehno spraševali, ali se želite prijaviti ali zavrniti, in ne vsebuje nobenih osebno prepoznavnih podatkov (PII). Če si premislite, lahko kadar koli obiščete stran »Dovoljenja za aplikacije«, da se vključite ali izključite. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Podatki se shranijo za različna časovna obdobja, odvisno od narave vašega obiska. Če torej samo pogledate naokoli, bomo shranili podatke o približni geografski lokaciji (na ravni države). Če izvedete iskanje, potem v da bodo obrazci za iskanje bolj prijazni, bomo shranili zadnje stvari, ki ste jih iskali. Ti podatki se običajno hranijo največ 24 ur in se uporabljajo le za to, da je vaš obisk prijetnejši. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Ko rezervirate pri nas, se po potrebi shrani več informacij.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Tehnični podatki obrazca za rezervacijo se zajamejo in hranijo največ 60 dni. To je potrebno, da se lahko rezervacije na zahtevo po potrditvi rezervacije spremenijo v celotne rezervacije in jih analizirajo naše ekipe v primeru težav z rezervacijo. Če niste bili prijavljeni, ko ste opravili rezervacijo, vam bomo po e -pošti poslali uporabniško ime in geslo, da si boste lahko ogledali zgodovino rezervacij in uveljavili svojo pravico do pozabe (RTBF), če želijo to storiti. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Podatki, vneseni v obrazec za rezervacijo, na primer ime, e -poštni naslov, dejanski naslov so shranjeni največ 365 dni po datumu odhoda rezervacije. Ti podatki so shranjeni v šifrirani obliki v naši bazi podatkov tako da si ga lahko ogledajo samo pooblaščeni ljudje. Če naredite rezervacijo, moramo po zakonu shraniti vaše osebne podatke, dokler je rezervacija veljavna. Ko je rezervacija končana, bodisi zato, ker je bila preklicana ali ste bili odjavljeni, boste lahko izvajate svoj RTBF tako, da se prijavite in obiščete stran »Vaši podatki«. Podatki o računu za zaključene rezervacije bodo še vedno varno shranjeni v naši bazi podatkov, da zagotovimo spoštovanje ustrezne davčne zakonodaje, vendar boste lahko odstranili vse druge osebne podatke po zaključeni rezervaciji. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Ko se strinjate, da se vaši podatki shranijo, kot je opisano zgoraj, smo po zakonu dolžni to soglasje shraniti v našo bazo podatkov. Ti podatki bodo vključevali vašo številko IP in vsebino obrazca za prijavo. obdrži to obvestilo o soglasju za nedoločen čas (to je zakonska zahteva). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Niste nam še povedali, ali lahko zbiramo osebne podatke o vas');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Strinjali ste se, da zbiramo potrebne osebne podatke za rezervacije');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Povedali ste nam, da ne zbiramo osebnih podatkov');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Niste nam dali dovoljenja za zbiranje vaših zasebnih podatkov');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Če želite na tem spletnem mestu izvesti določena dejanja, moramo zbirati osebno prepoznavne podatke o vas, vendar nam za to niste dali dovoljenja.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Spremenite dovoljenja');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Nadaljuj ogled lastnosti');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'Dovoljenja za aplikacije');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Podatki o gostu');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'To so podrobnosti, ki jih za vas shranijo različne nepremičnine. Različni hoteli imajo lahko različne evidence, odvisno od tega, kaj ste vnesli, ko ste naredili rezervacijo.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'V nobenem hotelu v tem sistemu nimate shranjenih podatkov');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Podatki profila');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'To je glavni niz podatkov, ki ga hranimo za vas, za razliko od tistih, ki ste jih dali v skupno rabo z različnimi lastnostmi.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Niste shranili podatkov o profilu');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Tukaj so osebno prepoznavni podatki, ki jih hranimo na tem spletnem mestu za vas. Izdelani so v obliki zapisa JSON (JavaScript Object Notation), ki je lahka oblika izmenjave podatkov. Človeku je enostavna za branje in pisati in stroji jih je enostavno razčleniti in ustvariti. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Anonimiziran');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Vaši podatki');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'S sprejetjem teh pogojev uporabe (ta "pogodba") se strinjate, da:

<ul>
<li>
Pooblaščeni ste za rezervacijo hotelov prek te spletne strani;
</li>
<li>
Ste stari najmanj 18 let;
</li>
<li>
Imate zakonsko pooblastilo za oblikovanje zavezujoče pravne obveznosti;
</li>
<li>
Spletno mesto boste uporabljali v skladu s to pogodbo;
</li>
<li>
Spletno mesto boste uporabljali le za zakonite rezervacije zase ali za drugo osebo, za katero ste po zakonu pooblaščeni;
</li>
<li>
Druge osebe boste obvestili o tem sporazumu, ki velja za pridržke, ki sem jih naredil v njihovem imenu, vključno z vsemi pravili in omejitvami, ki veljajo zanj;
</li>
<li>
Vse informacije, ki jih sami posredujete na spletno mesto, so resnične, točne, aktualne in popolne; in
</li>
<li>
Varovali boste podatke o svojem računu, sami in kdo drug pa boste nadzorovali in v celoti odgovorni za vsako uporabo vašega računa.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Za nas sta pomembna varnost in preglednost.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Svoje odgovornosti glede shranjevanja vaših podatkov jemljemo zelo resno. Vsi osebno prepoznavni podatki (PII) so v naši bazi podatkov shranjeni šifrirani z uporabo standardnih algoritmov, ki zagotavljajo, da si lahko te podatke ogledajo samo pooblaščeni uporabniki.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Lahko prenesete vse osebne podatke, ki jih hranimo za vas.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Prenesi zdaj');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Pravica do pozabe (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Menimo, da bi morali <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> izbrisati </a> svoj < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Podatki, ki omogočajo osebno prepoznavo </a>, če želite in če je izvedljivo. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Niste registrirani na tem spletnem mestu. Vaša splošna lokacija (država) in številka IP bosta shranjeni največ 24 ur in nato izbrisani.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Niste registrirani na tem spletnem mestu in ste onemogočili zbiranje podatkov. Vaše osebne podatke nismo shranili.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Ste registrirani na spletnem mestu in nimate čakajočih ali aktivnih rezervacij. Večino podatkov, ki jih trenutno imamo, lahko anonimiziramo. Ali želite to storiti?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Opomba: To ne izbriše vašega računa, preprosto anonimizira naše zapise, tako da vašega računa ni mogoče povezati z vami kot osebo. Po zakonu moramo še naprej hraniti vaše osebne podatke za namene izdajanja računov. izbrisati vse zapise gostov. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Ste registrirani na spletnem mestu, vendar imate še vedno odprte rezervacije in vaših podatkov trenutno ne moremo anonimizirati. Ti podatki bodo shranjeni največ eno leto po zaključeni rezervaciji, nato pa bodo biti izbrisan, če se pred tem ne odločite za odstranitev. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Ker ste upravitelj nepremičnine na našem spletnem mestu, vam ne moremo ponuditi možnosti za samodejno brisanje vaših podatkov. Namesto tega se obrnite neposredno na nas, da lahko vaše nepremičnine dodelimo drugemu upravitelju. Ko to storimo in odstranimo vaš status upravitelja nepremičnine, boste lahko samodejno izbrisali svoje podatke. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Pozabi me!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Tega ni mogoče razveljaviti!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Vaši podatki so bili izbrisani!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Žal ne morete rezervirati, ker je vaš e -poštni naslov neveljaven');
jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Ta stran vam omogoča anonimnost vseh gostov, ki imajo svoje podatke shranjene v sistemu. To vam omogoča, da ste skladni z GDPR, vendar na tej strani ne morete urejati nobenih drugih podatkov. Če želite to narediti, prijaviti se morate na prednjo stran kot upravitelj nepremičnine. Predpostavlja se, da se je z vami obrnil zgodovinski gost, ki je zahteval, da mu dovolite uveljavljati svojo pravico do pozabe. Če se ne more prijaviti na prednjo stran spletnega mesta (morda uporabnik ni bil ustvarjen zanje, ko so rezervirali), potem lahko uporabite to območje za njihovo anonimnost, ko potrdite njihovo identiteto. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonimni gost');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'IZBRISANA NEPREMIČNINA');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Anonimizirani podatki gostov');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Ni mogoče anonimiti');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Za shranjevanje vaših podatkov potrebujemo vaše dovoljenje, preden lahko opravite rezervacijo. KLIKNITE TUKAJ in nam dovolite.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Omogoči funkcijo skladno z GDPR?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NE PRIPOROČAMO, DA IZKLJUČITE FUNKCIONALNOST SKLADNEGA GDPR. Jomres ima vgrajene funkcije, ki vam pomagajo zagotoviti, da je razdelek Jomres na vašem spletnem mestu skladen z GDPR. ne bi smeli, če ste v EU ali poslujete z državljani EU), potem bo Jomres samodejno domneval, da je vsak obiskovalec spletnega mesta dal dovoljenje za omogočanje svojih osebnih podatkov. Dovoljenje za aplikacijo in strani Moji podatki ne bodo prikazani in uporabniki ne bodo pozvani, da dovolijo zbiranje podatkov. ');


jr_define ('EMPTY_TEMP_DIR', 'Prazna temp dirka');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Začasne datoteke izbrisane');

jr_define ('MACHINE_TRANSLATION', 'Strojni prevodi');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Izvorni jezik');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Funkcijo strojnega prevajanja je mogoče priključiti. To vam omogoča vnos nizov v enem jeziku in prevode lahko potegnete iz oddaljenih storitev. Zavedajte se, da vse prevajalske storitve ne podpirajo vseh jezikov. Poglejte te storitve za več podrobnosti. ');

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Vrste sob');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Nova vrsta sobe');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Na tej strani lahko ustvarite in uredite vrste sob. Te vrste sob bodo specifične samo za to lastnost. Pri nastavitvi vaše nepremičnine najprej potrebujete nekatere vrste sob. Uporabite lahko tudi tiste vrste sob, ki jih je ustvaril skrbnika ali pa dodate svoje. Ko imate eno ali več vrst sob, lahko ustvarite sobe te vrste sob. Ko imate sobe, lahko za te sobe ustvarite tarife (cene), ker so tarife povezane z vrstami sob. . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Upravitelji lahko ustvarijo vrste sob?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Uporabite to možnost, če želite konfigurirati, ali lahko upravitelji ustvarijo svoje vrste sob v prednjem delu. Priporočamo, da pustite to možnost nastavljeno na Ne, ko prvič uporabljate Jomres, še posebej, če ustvarjate portal, ker bi morali v skrbniškem območju ustvariti vse vrste sob. Vrste sob, ki so jih ustvarili upravitelji, bodo prikazane v iskalnih obrazcih, ker pa so te vrste sob specifične za posamezne lastnosti, bo v rezultatih iskanja prikazana samo ena znamka, če je izbrana ta vrsta sobe med iskalnimi poizvedbami. Če želite, da lahko samo upravitelji nepremičnin ustvarijo vrste sob, pustite to možnost nastavljeno na Da in z vtičnikom za nadzor dostopa dovolite, da si samo upravitelji ogledajo možnost menija "Nastavitve> Vrste sob". Samo nepremičnine, ki se najemajo zunanje sobe v nepremičnini in uporaba naprednih načinov ali načinov urejanja tarif Micromanage lahko uporabijo to možnost. Lastnosti tipa vile/stanovanja je ne bodo mogle uporabljati. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Posodobljena vrsta sobe/nepremičnine');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Prikaži vrste sob v možnostih iskanja');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Če se odločite, da upraviteljem nepremičnin dovolite, da ustvarijo svoje vrste sob, lahko izberete, ali naj se te ustvarjene vrste sob prikazujejo v možnostih iskanja, kjer ste izbrali prikaz vrst sob.');
jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Za vsako rezervacijo ne smete znova uporabljati istega e-poštnega naslova. <br/> Če imate za svoje podjetje edinstveno domeno (npr. ne e-poštni naslov gmail)), uporabite telefonsko številko gosta kot njihov e -poštni naslov. E -poštni naslov bi bil potem videti kot 123456@mydomain.com <br/> To bo zagotovilo, da bo pri ustvarjanju rezervacije ustvarjen nov gost. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'E -poštni naslov');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Geslo');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Veseli smo, da želite znova rezervirati pri nas. Če želite skupaj upravljati vse svoje rezervacije, se morate prijaviti, da lahko rezervacijo dodate v svoj račun. To je tudi zagotavlja, da ste pooblaščeni za uporabo navedenega e-poštnega naslova. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Če ne poznate svojega gesla, vam lahko pošljemo e -poštno sporočilo za ponastavitev gesla. Za ponastavitev gesla sledite navodilom v tem e -poštnem sporočilu.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Ste pozabili geslo?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonimizirajte svoje ime?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Če se odločite anonimiti svoje ime pri pregledu, bomo namesto tega uporabili vaše začetnice.');
jr_define ('ANONIMNO', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'rečeno');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Odgovori na to mnenje');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Tukaj vnesite svoj odgovor na to mnenje.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Vaš odgovor');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Glavni pregled');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Odgovor za pregled shranjen');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Preden pošljete odgovor na pregled, morate prebrati naslednje. Z oddajo odgovora potrjujete, da se strinjate s temi pogoji in določili.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Kakšne so naše smernice za odgovor na pregled?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Odgovarjate na pregled svoje nepremičnine. <em> Ne smete </em> uporabiti svojega odgovora kot postopek komercialnega spora. Če želite prijaviti pregled, morate uporabiti poročilo Pregled gumb "na seznamu in ne na strani za odgovor na pregled. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Ko odgovor pustite, ga ne boste mogli urediti.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Dovoljeno in spodbujeno');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Popoln odgovor na pregled. </li>
    <li> Vljudnost in poštenost. </li>
    <li> Pameten odziv na vprašanja recenzentov (ne pozabite, da imajo drugi podobne težave, vendar niso izkoristili priložnosti za objavo mnenja). </li>
    <li> Spodbudite gosta, da stopi v stik z vami neposredno za rešitev težav.
    <li> Ne pozabite, da bodo bodoči gostje videli vaš odziv. Bodite vedno profesionalni. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Ni dovoljeno');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Gospodarski spori. </li>
    <li> Vprašanja recenzentu ali drugim. </li>
    <li> Vprašljiv jezik (vključno s preklinjanjem). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Zadnji tek');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Urnik');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Številke računov');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Uporabi številke računov po meri?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Sistem lahko konfigurirate tako, da uporablja številke računov po meri. To bo vplivalo samo na nove račune.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Začetna številka');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Številke se ustvarjajo zaporedoma. Kakšna naj bo prva številka?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'V kakšni obliki naj bo številka računa?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Tu nastavite obliko številke računa. Oblika je lahko videti kot {N}/{D} ali {N}/{Y}, kjer je N samodejno ustvarjena številka, D = datum v obliki LLLLMMDD ( 20190131) ali Y = LLLL (2019). Vsi drugi alfanumerični znaki, ki niso zaviti v zavite oklepaje, bodo ostali sami, zato bi vzorec, ki izgleda kot {N}/{D} -L, povzročil številko računa (21), ki izgleda kot 21/2019-L ');
jr_define ('_JOMRES_SURCHARGE_TITLE', 'Doplačilo');
jr_define ('_JOMRES_SURCHARGE_DESC', 'Dodatna bremenitev, ki bo dodana sobi ob rezervaciji (izračunano na dan)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Dajte prednost oznakam za celotno spletno mesto?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Besedilo po meri, shranjeno pri urejanju nalepk ali straneh nizov datotek za prevajanje, se štejejo za oznake "za celotno spletno mesto". Upravitelji nepremičnin lahko tudi prilagodijo oznake za vsako znamko s pomočjo funkcije za urejanje nalepk v prednjem delu. To omogoča upravitelju nepremičnine, da ima drugačna besedila za svojo lastnino, kar je koristno, če je lastnost drugačna od vseh drugih lastnosti na spletnem mestu. <br/> Ko sistem išče besedila z oznakami, bo dal prednost besedilom na celotnem spletnem mestu nad lastnino določena besedila, kar pomeni, da če za to oznako obstaja besedilo na celotnem spletnem mestu, ga bo sistem najprej izbral. Če to možnost nastavite na Ne, bo sistem dal prednost besedilom, značilnim za lastnost, pred besedilom na celotnem spletnem mestu. ');

jr_define ('_JOMRES_REFERRER', 'Napotitelj');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // To bi lahko spremenili, če bi ga uvrstili na beli seznam, zato bi mesto "Najboljše mesto za rezervacije na svetu" to spremenilo v "WBBS" ali podobno.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Paketi knjižnic');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Moduli prodajalca in vozlišča so ločeni (brezplačni) paketi za Jomres. Pakete lahko znova namestite na to stran.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Znova namesti knjižnične pakete');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Vrste lastnosti ni mogoče izbrisati, ker jo nekatere lastnosti še vedno uporabljajo. Te lastnosti morate najprej spremeniti v drugo vrsto lastnosti, preden poskusite izbrisati to. UID -ji lastnosti, ki preprečujejo brisanje:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Naključni e -poštni naslovi');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Ponudba naključnih e -poštnih sporočil');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Sistemu lahko dovolite, da ustvari naključne e -poštne naslove v pojavnem oknu za hitro rezervacijo na nadzorni plošči. To omogoča upraviteljem in receptorjem, da ustvarijo rezervacije za goste, za katere nimajo e -poštnih naslovov. kot prihranek časa za spletna mesta s številnimi receptorji/menedžerji, ki razumejo, da ta naključna e -poštna sporočila nikoli ne bodo uporabljena za resnično komunikacijo, namen je zaobiti dejstvo, da morajo imeti vsi gostje v Jomresu e -poštne naslove. naslednje polje. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Domena naključnih e -poštnih sporočil');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'To ne sme biti običajna e -poštna domena, na primer gmail ali outlook. Namesto tega je lahko vaša lastna domena ali kaj drugega, na primer "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Območje nalaganja');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Brez uporabniške vloge');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptor');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Upravitelj nepremičnin');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Prekinjeno');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Izbrisano iz CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Če vam je všeč Jomres, pustite mnenje na enem od teh spletnih mest');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Sem prijazna oseba, že sem pustil pregled');

jr_define ('_LICENCE_PROMPT_DEAR', 'Spoštovani');
jr_define ('_LICENCE_EXPIRED', ', vaš licenčni ključ Jomres je potekel, zato vam manjkajo te odlične funkcije in prednosti!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Posodobitve vtičnikov in nove izdaje vtičnikov');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Ekskluzivni člani samo za e -pošto/podporo za vstopnice');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Brezskrbne posodobitve jedra Jomres');
jr_define ('_LICENCE_EXPIRED_POST', 'Povežite se z nami za brezhibne plačilne rešitve in pridobite dostop do vseh vtičnikov in storitev podpore samo za člane.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Pridobite dostop do vseh vtičnikov zdaj!');

jr_define ('_LICENCE_INVALID_KEY', 'Zdi se, da ne uporabljate veljavnega licenčnega ključa Jomres, zato vam manjkajo te odlične funkcije in prednosti!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Vtičniki </a>, ki močno razširjajo funkcionalnost Jomresa');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Ekskluzivni člani samo za e -pošto/podporo za vstopnice');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Brezskrbne posodobitve jedra Jomres');
jr_define ('_LICENCE_INVALID_POST', 'Povežite se z nami za brezhibne plačilne rešitve in pridobite dostop do vseh vtičnikov in storitev podpore samo za člane.');
jr_define ('_LICENCE_INVALID_START', 'Pridobite dostop do vseh vtičnikov zdaj!');
jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Nadzorna plošča');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Uporabniki');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Komisija');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Naročnine');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Računi');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Prevodi');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Orodja');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Poročila');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Nastavitve');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Pomoč');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Skupne lastnosti v sistemu');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Objavljene lastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Neobjavljene lastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Odobrene lastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Lastnosti, ki zahtevajo odobritev');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Skupno ocen');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Neobjavljena mnenja');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Pregled poročil');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Informacije o sistemu Jomres');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Vrsta lastnosti te lastnosti ni objavljena, morda se ne pojavi v rezultatih iskanja. Za objavo vrste lastnosti se obrnite na skrbnika spletnega mesta ali spremenite vrsto lastnosti na strani Urejanje lastnosti.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Posodobi svojo vrsto nepremičnine');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Dohodek (izplačani zneski)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Funkcije lastnosti ni mogoče izbrisati "');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '", ker ga uporabljajo naslednje lastnosti:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'Test API -ja REST');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Ta stran izvaja osnovni preizkus API-ja REST z uporabo vgrajene funkcije v Jomresu. Pokliče Jomres REST API, da preveri, ali prejme veljaven odgovor.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Strežnik je poklical ta URL, da preveri, ali je odgovor veljaven:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Stran je prejela ta odgovor:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Zdelo se je, da je test potekal po pričakovanjih, verjetno ne boste imeli težav pri prejemanju zahtev REST API od preostalega interneta.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Test ni uspel, poiščite polje Response (Odziv), če je videti kot veliko HTML ali če ste prejeli sporočilo 404, potem vaš strežnik preusmerja klice na drug URL. Tako boste preprečili prejemanje API -ja klice. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Preskus sinhronizacije');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Strežnik aplikacij Jomres vzdržuje seznam vseh spletnih mest Jomres. To nam omogoča, da zgradimo distribucijsko omrežje. To omrežje je namenjeno našim uporabnikom, da prikažejo lastnosti z drugih spletnih mest in zlasti za nova spletna mesta, za krepitev prisotnosti SEO na internetu. Cilj je, da vsa spletna mesta Jomres sodelujejo in krepijo zaupanje v omrežje. Ta storitev se ne zaračunava. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Vaše spletno mesto trenutno ni na strežniku aplikacij Jomres, ki je del distribucijskega omrežja. Ta strežnik bo poskusil znova dodati ta strežnik v omrežje na naslednjih 6 straneh, nekaj nalag strani, to se ne spremeni, preverite, ali zgornji preizkus povezljivosti prestane preskuse. Upoštevajte, da strežnikov localhost ni mogoče dodati v omrežje. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Čestitamo, vaš strežnik je naveden na strežniku aplikacij Jomres.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Sindicirane lastnosti');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Tukaj je še nekaj drugih nepremičnin, ki so na voljo v našem nepremičninskem omrežju');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Statistika združevanja');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Čestitamo, vaš strežnik je naveden v Jomres Syndication Network. Vaše lastnosti se bodo kmalu začele pojavljati na drugih spletnih mestih Jomres, če še niso prikazane.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Vaša namestitev ni del omrežja Jomres Syndication Network, zato vaše lastnine ne bodo prikazane na drugih spletnih mestih Jomres in od tega brezplačnega oglaševanja ne morete izkoristiti.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktivne instalacije Jomresa:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Skupno število naprav Jomres, ki na svojih spletnih mestih delijo lastnosti Jomres Syndication Network.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Skupne lastnosti:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'To je število lastnosti, ki so na voljo v JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Prikaz celotne lastnine:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Skupaj je bila vsaka povezava znamke Jomres povezana z drugega spletnega mesta, ki temelji na Jomresu.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Syndicate Network (JSN) je brezplačna funkcija, ki je na voljo vsem uporabnikom Jomresa. Njen namen je brezplačno oglaševanje vaših nepremičnin na drugih spletnih mestih v Jomresu. Cilj je pomagati svoje spletno mesto hitro dvignete in ponudite brezplačno oglaševanje, tako da bodo vaše nepremičnine prepoznane in jim zaupate, saj so povezane z visoko zaupanja vrednimi, visoko ustreznimi spletnimi mesti, ki so iskalnikom že dobro znane. Glejte to <a href = "https: //www.jomres.net/features/jomres-syndication-network target="_blank"> članek na naši spletni strani </a> in <a href =" https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network target="_blank"> priročnik </a> za več informacij. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'To so podatki vašega profila gosta, polja s tem simbolom <i class = "fa fa-users" aria-hidden = "true"> </i>
 so javno vidna, medtem ko lahko polja s tem simbolom <i class = "fa fa-user-secret" aria-hidden = "true"> </i> vidite le vi, vaši gostitelji in skrbniki spletnega mesta. <br/> <br/> Gostitelji lahko vidijo zasebne podatke le, če ste pri njih že ustvarili rezervacijo. <br/> <br/> Vaši podatki so varno šifrirani in shranjeni v naši bazi podatkov s šifriranjem AES-256. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Ta polja so izbirna, vendar lahko gostitelji uporabijo te podatke, da ugotovijo, ali menijo, da vam lahko zaupajo, zato je bolje, da podatke dodate. Ne pozabite, da ostajate pri svojih premoženja in vas lahko zavrnejo, če menijo, da se ne ujemate ali da vaša biografija ne vsebuje dovolj informacij. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Vozniško dovoljenje');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Številka potnega lista');
jr_define ('GUEST_PROFILE_IBAN', 'številka IBAN');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'O meni');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Ta razdelek »O meni« je javno viden, zato ne vnesite nobenih zasebnih podatkov. Kljub temu se potrudite, da čim več občutka delite, na primer svoje strasti, kaj preživljajte se, s svojimi hobiji itd. Z markupom lahko dodate malo jazza. Gostitelji bodo želeli čutiti, da vam lahko zaupajo svoje lastnosti. Poskrbite, da bo vaša slika prava slika vas, ne vašega psa ali avto (da, fantje, s tabo se pogovarjamo!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Tukaj vnesite vse posebne zahteve, na primer potrebe po enostavnem dostopu. Ne bodo prikazane v vašem javnem profilu, bodo pa dodane informacijam o rezervaciji, ko naredite rezervacijo.');

jr_define ('VIEW_HOST_PROFILE', 'Profil gostitelja');

jr_define ('GUEST_PROFILE_TITLE', 'Profil gosta');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Moj profil');

jr_define ('GUEST_PROFILE_WELCOME', 'Živjo, naj ti povem nekaj o sebi.');
jr_define ('GUEST_PROFILE_MY_NAME', 'Moje ime je');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'in prihajam iz');
jr_define ('GUEST_PROFILE_IN', 'regija v');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Moji zasebni podatki');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Potrudimo se, da potrdimo podatke o gostu in gostitelju, vendar se morate potruditi in se sami odločiti, ali je ta oseba vredna zaupanja.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Moje lastnosti');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Moja mnenja');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'To sem povedal o tej lastnosti:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'To lastnost sem ocenil z oceno:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Moja mnenja');
jr_define ('GUEST_PROFILE_OF_ME', 'Kaj drugi govorijo o meni');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Kaj je ta gostitelj povedal o meni');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Preglej gosta');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Moje mnenje o tem gostu');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Tukaj je nekaj primerov mnenj gostov, da se žogica začne premikati: <br/>

<ul>
<li> (ime gostov) je bilo veselje gostiti! Ves prostor so zapustili in ves vikend bili tiho. Imeli so nemoteno komunikacijo in veselim se, da bodo spet ostali pri meni! </li>
    <li> Všeč mi je bilo ime (ime gosta), ker so lahko s spoštovanjem ravnali do kraja, se imeli super in uživali v okolici. Bili so odlični pri najemu prostora in upam, da jih bom spet gostil. </li>
    <li> Vsa moja hišna pravila so bila spoštovana (ime gosta) in z lahkoto so vstopili in odšli. Všeč mi je bilo, ker so bili spoštljivi in ​​tihi. Zelo jih priporočam drugim! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Žal tega uporabnika ne najdem. Najverjetneje še niso vnesli podatkov o svojem računu.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Gost');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Gostitelj');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres je zgrajen na ogrodju Bootstrap, zato ga morate uporabljati pri temi, ki temelji na Bootstrapu. Priporočamo eno, ki temelji na Bootstrapu 3. Če nimate dostopa do teme, priporočamo, da uporabite temo Jomresa Leohtiana za Wordpress, ki jo lahko <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> prenesite od tu. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Označi kot brez prikaza');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Rezervacija označena kot brez prikaza');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Rezervacije');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'Statistika JSN za tega uporabnika');

jr_define ('BOOKING_NOSHOW_INFO', 'Podatki o rezervaciji in brez prikaza se poberejo iz sindikalnega omrežja Jomres ob rezervaciji. Izvzeti so iz anonimiziranih podatkov in jih lahko uporabite za odločitev, ali obstaja tveganje, da ta gost ne bo izpolnil rezervacije. Če sistem poroča, da so podatki neznani, verjetno zato, ker tega sistema v omrežju ne prepoznajo. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Neznano');

jr_define ('CMF_CONFIG_TITLE', 'Okvir za upravljanje kanalov');
jr_define ('CMF_CONFIG_KEY', 'Okvirni ključ za upravljanje kanala');
jr_define ('CMF_CONFIG_KEY_DESC', 'Licenčni ključ ogrodja za upravljanje kanalov. Ta ključ boste morali vnesti, da boste lahko prenesli vtičnike Framework Management Framework.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Vaša lastnina ni odobrena');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Vaša nepremičnina ni odobrena. Če menite, da je bilo to storjeno pomotoma, se obrnite na nas.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Ali je to vrsta otroškega gosta?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Nastavite na Da, če bi to vrsto gosta uvrstili med otroške vrste gostov.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Če želite zaračunati na osebo na noč, boste morali ustvariti nekatere vrste gostov.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Ustvarite lahko toliko vrst gostov, kot jih potrebujete. Poskusite začeti tako, da ustvarite samo eno vrsto gosta, imenovano Odrasli. Pustite vse nastavitve pri privzetih vrednostih. Naprej, če želite na primer otrokom, mlajšim od 12 let, zagotovite 50% popust, če bi ustvarili novo vrsto gosta, in ga poimenujte »otroci mlajši od 12«. Nastavite možnost »Dodaj varianco?« na - (negativno) in nastavite »Variance« na 50. To pomeni ko so otroci vključeni v rezervacijo, se jim zaračuna 50% cene sobe. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Ročno nastavite cene");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Ročno nastavite minimalno število nočitev");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Nastavi minimalne nočitve");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Nastavi <em> ceno na noč </em> po dnevih v tednu");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Nastavi <em> ceno na noč </em> glede na časovno obdobje");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Nastavi <em> minimalno število nočitev </em> glede na časovno obdobje");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Izbirniki datumov in vnos tečaja vam omogočajo, da nastavite eno ceno za določeno časovno obdobje. Izberite začetni in končni datum, vnesite ceno in kliknite gumb Nastavi ceno na noč.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Izbirniki datumov in vnos najnižjih noči vam omogočajo, da nastavite eno vrednost za najmanjše število nočitev za določeno časovno obdobje. Izberite začetni in končni datum, vnesite številko za najmanjše noči in kliknite Nastavi najmanj nočitev. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "S tem spustnim menijem preklopite med nastavitvijo cen za posamezne datume in nastavitvijo minimalnih nočitev za posamezne datume. Uporabite lahko izbirnik <em> po dnevu v tednu </em>, izbirnik <em> po datumu izberite </em> izbirnik ali nastavite cene/minimalne nočitve z ročnim urejanjem datumov. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "S tem spustnim menijem spremenite nastavitve cen za posamezne datume, nastavite najnižje nočitve za posamezne datume. Uporabite lahko izbirnik <em> glede na časovno obdobje </em> ali nastavite cene/najnižje nočitve za ročno urejanje datumov. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Nastavite cene ali minimalne nočitve");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Nastavi <em> minimalno število nočitev </em> po dnevih v tednu");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Polja za dan v tednu vam omogočajo, da nastavite najmanjše število nočitev za določen dan v tednu. Ko pritisnete gumb za dan v tednu, bodo vsi dnevi v tednu nastavljeni na to nastavitev min. noči. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Ročno nastavite cene/minimalne nočitve");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Nastavi cene");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Nastavi minimalne nočitve");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Na noč");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Najmanj noči");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Največ noči");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Tukaj lahko ustvarite tarife, ki so povezane z vrstami sob, ki jih imate v svoji nepremičnini.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Najpogosteje uporabljene možnosti");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Navodila");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Če želite dodati različne cene za različno število gostov, <em> lahko ustvarite več kot več tarif za vsako vrsto sobe </em> in v teh tarifah nastavite različne vrednosti min/max gostov. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Dajte tarifi ime, določite največje število nočitev ter najmanjše in največje število gostov, ki so potrebni v obrazcu za rezervacijo, preden je ponujena tarifa. <br/> <br/> Uporabite na plošči za izbiranje datuma, da v različne datume dodate cene in nastavitve minimalnih nočitev ali neposredno uredite vnose. Če ne želite, da se tarifa na določene datume sploh ponudi, pustite ceno nastavljeno na 0 (nič) na ti datumi. <br/> <br/> Na različne datume imate lahko različne minimalne noči, zato, če želite daljše rezervacije v tednih festivala/konference, lahko nastavite, da bodo najmanjše noči v teh obdobjih višje. <br/ > <br/> Če zaračunavate na osebo na ceno (PPPN), lahko to nastavitev omogočite v Nastavitve> Konfiguracija nepremičnine> Tarife in valuta, nato pa ustvarite potrebne vrste gostov v Nastavitve> Vrste gostov. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Dodatne možnosti");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "To so dodatne možnosti, ki se ne uporabljajo tako pogosto, a so vam vseeno na voljo. <br/> <strong> Prezri PPPN </strong> pomeni prezreti osebo na noč. Lahko imate več različnih tarif za isto vrsto sobe, na primer ena od njih zaračunava osebo na noč, druga pa ne. <br/> <strong> Dovoli vikende </strong> Možnost Dovoli vikende vam omogoča, da določite tarifo, ki je samo na voljo med delavniki, na primer, če želite posebno tarifo za poslovne potnike. V tem primeru nastavite možnost Ne in najmanjše noči na 1 in največ nočitev, največ 5. <br/> <strong> Vikendi samo </strong> Možnost Samo za vikende je obratno od možnosti Dovoli vikende. Tiste, ki jih imate za vikend, lahko nastavite v nastavitvah konfiguracije nepremičnine. Tako lahko določite stopnjo samo za vikend, ki bi jo morda želeli ponudba za posebne dogodke. <br/> <strong> Dan prijave v tednu </strong> Ta možnost vam omogoča, da prisilite prijavo samo ob določenih dneh v tednu in jo je najbolje uporabiti skupaj z možnostjo Konfiguracija nepremičnine> Zavihek> Možnosti fiksnih obdobij. Večina uporabnikov želi pustiti to možnost nastavljeno na Vse. <br/> Zadnji dve možnosti, <strong> Minimalno število izbranih sob </strong> in <strong> Največ izbranih sob </strong> sta zelo specializirani in uporabno za nepremičnine z izjemno zapletenimi tarifami. <em> Razen če imate posebne potrebe, pustite te možnosti pri miru. </em> Uporabite jih, če želite, da se ta tarifa ponudi le, če je gost v obrazcu za rezervacijo že izbral N število sob, zato npr. lahko bi imeli eno osnovno tarifo, pri kateri te možnosti ostanejo privzeto, in drugo tarifo, kjer je že izbrana možnost min sob nastavljena na 1, potem bo ta druga tarifa na voljo v obrazcu za rezervacijo, ko bo izbrana soba. " );
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Za isto vrsto sobe lahko ustvarite več tarif, tako da lahko ustvarite eno tarifo za min/max dni 1 - 7 in drugo tarifo, kjer je min dni 7, največ 14 dni in tako naprej. To vam omogoča, da ustvarite sheme določanja cen tako preproste ali zapletene, kot jih potrebujete. Prav tako vam omogoča, da ustvarite več tarif z različnimi pogoji, tako da imate lahko drugi niz tarif, kjer je cena za nočitev z zajtrkom nižja, in še en niz dražjih tarif za nočitev, zajtrk in večerjo. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Nastavi samo dneve izbirnika datuma");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Kategorije nepremičnin');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Urejanje kategorije nepremičnine');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Stop!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Hvala za namestitev Jomresa");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Upravljanje premoženja se izvaja na javnih straneh, ne na skrbniškem področju.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Če Jomresa ne poznate, obiščite razdelek Pomoč> stran za začetek.");


jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Pridružite se sindikatu Jomres");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Ko nastavite spletno mesto in ste pripravljeni na začetek sprejemanja obiskovalcev, se pridružite sindikatu Jomres.net in svoje nepremičnine uvrstite na druga spletna mesta Jomres.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Preden ustvarite tarifo, potrebujete vsaj eno sobo ene od naslednjih vrst:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Pojdite v Nastavitve> Sobe in najprej ustvarite sobo, ko boste to storili, boste lahko ustvarili tarifo za to vrsto sobe.");

jr_define ('JOMRES_PLATFORM', "Jomres platforma");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Povezano");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Nastavite na Da, če ste svoj račun Stripe že povezali s platformo Jomres.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Številka računa Stripe Live");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "To je vaš ID računa Stripe, ki ga najdete na nadzorni plošči Stripe v razdelku Nastavitve> Podatki o računu in izgleda kot acct_xxxxxxxxx) To polje bi uporabili, če imate več namestitev Jomresa in želite uporabljati isti račun v vseh vsa spletna mesta in ste se že povezali z nami. Če niste povezani s platformo Jomres, ni dovolj, da vnesete svoje podatke tukaj. Namesto tega obiščite možnost menija Poveži se v orodni vrstici v razdelku Pomoč. Če želite za preizkušanje plačil na zavihku Odpravljanje napak v konfiguraciji spletnega mesta nastavite svoje spletno mesto od proizvodnje do razvoja. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe skrivni ključ v živo");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Pojdite na Razvijalci> Ključi API -ja na nadzorni plošči Stripe, da poiščete svoje skrivne ključe. Slednji jih sistem uporabi za preverjanje veljavnosti podatkov o rezervaciji, vrnjenih z obrazca za plačilo, in da so bili pred shranjevanjem rezervacije plačani depoziti. . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Skrivni ključ za preskus proge");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');

jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standardni tarifni način');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Spanje');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Koliko ljudi lahko sprejme ta nepremičnina?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Število gostov v vaši dnevni ceni');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Cena za odrasle');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Otroci');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Na osebo na noč?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 -dnevni modifikator');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Popust na dnevno ceno, če je rezervacija za 7 dni ali več. Pustite to nastavljeno na nič, če ne želite uporabiti popusta.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 -dnevni modifikator');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Popust na dnevno ceno, če je rezervacija za 30 dni ali več. Pustite to nastavljeno na nič, če ne želite, da se popust uporabi.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Odrasli');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Cena glede na 2 odrasli osebi');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Rezervacija znižana od');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'do');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'ker je rezervacija daljša od 7 dni.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'ker je rezervacija daljša od 30 dni.');


jr_define ('JOMRES_CITY_TAX_HEADING', 'Mestne takse');
jr_define ('JOMRES_CITY_TAX_VALUE', 'Vrednost davka na mesto');
jr_define ('JOMRES_CITY_TAX_METHOD', 'Metoda izračuna davka');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Enkratna pristojbina');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Na noč');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Na gosta');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Na gosta na noč');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Odstotek vrednosti rezervacije');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Pristojbina za čiščenje');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Stroški čiščenja');

jr_define ('JOMRES_COMPATABILITY_MODE', 'Način konfiguracije lastnosti lastnosti Compatability?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Način konfiguracije lastnosti združljivosti povzroči, da se zgodi nekaj stvari. V starejših različicah Jomresa so lahko upravitelji nepremičnin izbrali, kateri način urejanja tarif bodo uporabili, in številne druge nastavitve (nekatere so lahko zmedene)) Omogočanje konfiguracije kompatibilnosti prisili vse nove lastnosti, da uporabljajo samo standardni način urejanja tarif, ki modelira funkcionalnost konfiguracije nepremičnine booking.com glede cen, podrejenih cen itd. Priporočljivo je, da za namestitve, ki so bile ustvarjene po 9.22. .0, bi morala biti ta možnost nastavljena na Da, pri starejših namestitvah pa se morate odločiti, ali je treba nove lastnosti samodejno nastaviti na način združljivosti, ko se ustvarijo. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Ali sprejemate otroke, mlajše od 18 let?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "To možnost nastavite na Da, če dovolite otrokom. Če je odgovor pritrdilen, boste v meniju Nastavitve imeli možnost Otroške politike, kjer lahko urejate nastavitve, povezane z otroki.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Otroške politike');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'V kateri starosti so otroci dovoljeni?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Na otroka na noč');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Na otroka na bivanje');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Otroške stopnje');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nova stopnja otroka');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Urejanje podrejene stopnje');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Tu ustvarite svoje brezplačne ali plačane stopnje. Cene bodo veljale le, če ste za vrste sob ustvarili stopnje zasedenosti.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Starost od');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Starost do');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'na noč ali na bivanje?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Oceni');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Če nič ali ni nastavljeno, bodo otroci tega starostnega razreda brezplačni.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Starost ob prijavi');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Starost');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Stopnje zasedenosti');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Največ odraslih');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Največ otrok');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Največja zasedenost');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Urejanje ravni zasedenosti za:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Urejanje ravni zasedenosti za to vrsto sobe. Ne vključujte gostov, ki spijo na otroških posteljicah (ti so dodani z ustvarjanjem dodatka)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Koliko bi morali zaračunati za vsako dodatno odraslo osebo?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Dodatni odrasli');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Niste še konfigurirali podrejenih stopenj.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Zdaj nastavite podrejene stopnje');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Svojo nepremičnino ste konfigurirali tako, da dovoljuje otrokom, za otroke pa še niste določili ravni zasedenosti.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Nastavi ravni zasedenosti');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Vsakič, ko uredite sobo ali vrsto vaše nepremičnine, morate preveriti in posodobiti stopnje zasedenosti vaše nepremičnine/sob, ker to vpliva na število gostov, ki jih je mogoče sprejeti v obrazcu za rezervacijo.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Odrasli');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Chidren');

jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Raven možnosti skrbnika');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres ima veliko možnosti menija in konfiguracije, ki jih lahko uporabite pri konfiguriranju svojega spletnega mesta. Ogromno večino vam jih nikoli ne bo treba spremeniti, zato so privzeto skrite. Izberete lahko, da te možnosti prikažete tako, da nastavite raven skrbniških možnosti. Osnovna raven vam pokaže, kaj potrebujete pri prvi nastavitvi spletnega mesta. Skupna raven prikazuje tiste možnosti, ki se najpogosteje spreminjajo, vse pa vse možne nastavitve in možnosti menijev na skrbniškem področju. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Osnovno');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Skupno');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Vse');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Ali lahko zbiramo podatke o tem, kako uporabljate Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Radi bi zbirali podatke o tem, kako uporabljate Jomres. Ne bodo shranjeni nobeni osebno prepoznavni podatki, uporaba bo anonimizirana in uporabljena le za razumevanje, kako ljudje uporabljajo Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Ja, to je v redu');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Ne, ne strinjam se');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Boste rezervirali več kot eno nepremičnino?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres je mogoče uporabiti za spletna mesta z eno ali več lastnostmi. Če boste rezervirali samo eno nepremičnino, bo veliko možnosti odveč in lahko zmede. To nastavitev lahko spremenite pozneje v Nastavitve> Spletno mesto Konfiguracija> jeziček Funkcionalnost portala. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Samo ena lastnost');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Navedel bom več kot eno nepremičnino');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Katero različico okvira Bootstrap podpira vaša predloga/tema?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Vsaka različica ogrodja Bootstrap zahteva nekoliko drugačne oznake HTML. Jomres ima tri nabore združljivih predlogov Bootstrap, enega za vsako različico zagonskega strežnika. Če želite uporabiti ustrezen nabor predlogov, ga morate konfigurirati. potem ne boste izpisali, kot so postavitev, načini in meniji, ki ne bodo delovali pravilno. Če se odločite, da boste pozneje uporabili predlogo/temo z drugo različico Bootstrapa, lahko spremenite nabor predlog Bootstrap, ki bi jih moral Jomres uporabiti v meniju Admin> Jomres> Settings > Razno. <br/> <br/> Joomla 3 je privzeto distribuiran z Bootstrapom 2, Joomla 4 bo uporabljal Bootstrap 5. Predloga Jomres Leohtian (Joomla) in tema (Wordpress) uporablja Bootstrap 3. Različne predloge/teme so lahko distribuirajo z lastnimi datotekami Bootstrap, zato se v primeru dvoma obrnite na razvijalca predloge/teme. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Odstrani decimalke iz izhodnih cen?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Uporabi skupino po popravku?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Nekatere namestitve mysql imajo lahko težave z Jomres poizvedbami na strani Lastnosti seznama, Seznam gostov in Seznam računov ta možnost na Da lahko odpravi težavo. Ne bo, če uporabljate gostovanje v skupni rabi in storitev gostovanja ne dovoljuje, da vaš uporabnik mysql izda ukaz "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'To je lastnost kanala, ki je ni mogoče upravljati lokalno, obiščite stran okvirja za upravljanje kanalov in poiščite povezavo za oddaljeno upravljanje lastnosti');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "V temi ni zagonskega pasu");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Povezave do družbenih medijev');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Tukaj vnesite imena svojih računov v družbenih omrežjih, na primer "jomres", ne celotnega URL-ja');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Seznam jezikov, ločenih z vejicami, ki jih govori vaša organizacija');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'URL logotipa vaše organizacije');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres posodobljen');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Na voljo je nova različica Jomresa. Preden lahko nadaljujete z uporabo Jomresa, morate posodobiti, saj posodobitve izboljšujejo funkcionalnost in zagotavljajo, da vaša namestitev ostane varna.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Posodobi Jomres zdaj');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Posodobitve vtičnika');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'V upravitelju vtičnikov so na voljo nove različice vtičnikov. Preden lahko nadaljujete z uporabo Jomresa, morate posodobiti vse vtičnike, saj posodobitve izboljšujejo funkcionalnost in zagotavljajo, da vaša namestitev ostane varna.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Vtičniki za posodobitev');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Če vaša licenca ni več veljavna, lahko dobite nov licenčni ključ na našem spletnem mestu.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Posodobi vtičnike');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Pridobi nov ključ');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Shrani nov ključ');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Slike vrste lastnosti");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Potrebujete pomoč pri rezervaciji?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Pokličite našo ekipo za pomoč strankam na spodnjo številko, da se pogovorite z enim od naših predstavnikov, ki vam bo pomagal pri vseh vaših prazničnih potrebah.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Zakaj rezervirati pri nas?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"Nudimo najboljše cene rezervacij");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"Trenutno imamo nepremičnine po najboljših cenah na trgu.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Brez provizij za rezervacijo. Prihranite denar!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Velik izbor lastnosti");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," lastnosti");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," ocene gostov");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Vedno smo tukaj");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Pokličite ali nam pišite kadarkoli");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Pridobite 24-urno podporo pred, med in po potovanju");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Družabni mediji");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Poišči nas na družbenih medijih");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Izjemno");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Izjemno");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Čudovito");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Odlično");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastično");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Zelo dobro");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Dobro");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Nov seznam");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Popust");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Kam želite iti?');
	jr_define( 'DATA_SOURCES_TITLE', "Osveži vire podatkov");
	jr_define( 'DATA_SOURCES_TITLE_INFO', "Viri podatkov so osveženi. Vire podatkov uporabljajo samodokončana vnosna polja v iskalnem pripomočku in se običajno posodabljajo samodejno, vendar ta stran prisili, da se podatki posodobijo ročno, če je potrebno." );

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Če želite poslati zahtevo za žeton, pošljite zahtevo na ta url");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Skript lastnosti glavnega pogleda");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Uid lastnosti lastnosti, ki si jo je treba ogledati");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Privzeta predloga je property_details.html, s tem argumentom lahko definirate drugo predlogo podrobnosti lastnosti, ki jo želite prikazati.");

	jr_define('JOMRES_UPDATES_TITLE', 'Jomresove posodobitve');
	jr_define('JOMRES_UPDATES_INFO', "Ta stran lahko namesto vas prenese in namesti najnovejšo različico Jomresa. Uporablja lastno funkcionalnost in ne gostiteljskega CMS-ja, zato, če pride do težave med posodobitvijo gostiteljskega CMS-ja, lahko uporabite to stran za prisilite ponovno namestitev najnovejše različice Jomresa.");
