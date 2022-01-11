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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Szállásfoglalás bejegyzése');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Adatok mutatása');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Általános beállítások');
jr_define('_JOMRES_COM_MR_BACK', 'Vissza');
jr_define('_JOMRES_COM_MR_YES', 'Igen');
jr_define('_JOMRES_COM_MR_NO', 'Nem');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Új');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Új szálláshely');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Új vendég');
jr_define('_JOMRES_COM_MR_SAVE', 'Mentés');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Név');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Érkezés');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Távozás');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Felhasználó Név');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Belépési szint');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Felhasználó által módosított');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Minden foglalás');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Foglalások szerkesztése');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Érk/Táv');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Vendég');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Szoba');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Fizetés');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Családnév');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Keresztnév');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Különleges kérés');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Kérjük, vegye figyelembe, hogy a különleges kérések némelyikéért felárat számolhatnak fel.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Kilépés a foglalásból');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'A ház száma vagy neve');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Utca/tér');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Település');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postai i.sz.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Vonalas telefon');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobiltelefon');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Emailcím');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nem léphet ki a foglalásból, amíg a vendég a folyamatban lévő foglalást be nem fejezi');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Előleg fizetéséből kilépve');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Kilépés megerősítése');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Foglalásból kilépve');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Napok száma az érkezésig');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Foglalás típusa');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Téves, hamis foglalás');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepció');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Szoba neve, száma');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Szoba');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Emelet');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Mozgássérült-barát?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. fő');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Szoba típusa');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Szoba típus leírása');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Szoba jellemzőinek listázása');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Fizetett előleg');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Előleg összegének beírása');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Összesen fizetendő');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Előleg referenciaszáma');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'On-line szállásfoglalás');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Előleg');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Előleg mentve');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Szobáink');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Szálláshely');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Szobatípus');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Vendég adatainak szerkesztése');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Családnév');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Keresztnév');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Házszám');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Utca/tér');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Település');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Postai i.sz.');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Vonalas tel.');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobil tel.');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Faxszám');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Kérjük, válasszon');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Eltöltendő napok száma');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Összesen');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'A szobák és a szálláshely beállításainak megtekintése');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Szobák');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Szoba jellemzői');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Szoba típusa');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Szálláshely');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Szálláshely jellemzői');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Szoba');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Típus');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Név');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Szobaszám');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Emelet');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. fő');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Jellemzők');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Elem szerkesztése');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Szoba jellemzői');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Jellemzők leírása');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Szoba jellemzője hozzáadva');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Szoba jellemzője frissítve');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Szoba típusa');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Szobatípus rövidítése');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Szoba típus leírása');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Szoba típus hozzáadva');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Elem szerkesztése');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Név');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Utca/tér');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Település');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Megye');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Ország');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Postai i.sz.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel./fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'E-mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Szolgáltató e-mailcíme');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Honlap');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Jellemzők');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Szálláshely frissítve');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Szálláshely jellemzői');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Szálláshely jellemzőinek rövidítése.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Szálláshely jellemzőinek teljes leírása');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Szálláshely jellemzői frissítve');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Árak');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Ár megnevezése');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Részletes leírás');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Érv. kezdve');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Érv. eddig');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Napi díjszabás');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min. napok');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max. napok');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. fő');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. fő');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Szobatípus');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'PPPN mellőzése');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Hétvégék engedélyezése');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Elem szerkesztése');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Elem klónozása');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Díjszabás törölve');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Díjszabás szerkesztése');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Szállásfoglalás adatai mentve');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Beérkezett foglalás');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Lejárt foglalás');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Szállásfoglalások listázása');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Vezérlőpult');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Vendég ügyintézése');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Szálláshely adminisztrálása');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Foglalhatóság ');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Családnév');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Keresztnév');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Házszám');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Utca/tér');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Település');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postai i.sz.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Vonalas telefonszám');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil telefonszám');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Nincs a megadott paramétereknek megfelelő szabadon lévő szobatípus');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Köszönjük, hogy igénybe vette szállásfoglalási szolgáltatásunkat.<br><br> <b>Kérjük, vegye figyelembe, hogy ez csak egy előzetes foglalás, és csak akkor válik érvényessé, ha megkapta tőlünk a visszaigazoló levelet.</center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Előzetes foglalás ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Bejövő foglalás ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Foglalás eldobása ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Kiegészítők');
jr_define('_JOMRES_COM_A_TARIFFS', 'Díjszabás és árfolyam');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Fájl feltöltése');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Egyszemélyes felár');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Bizonyosodjon meg, hogy ez az Igen-re van állítva, ha azt akarja, hogy a vendég felárat fizessen az egyszemélyes használatért');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Egyszemélyes felár');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Előleg fizetése százalékosan?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'A foglaló összege a teljes összeg százalékosan számoljuk ki? Ha nem, akkor a foglaló értékeként egy fix összeg alkalmazható');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Bekért előleg összege');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Per fő, per nap');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Válassza az Igen-t, ha /fő/nap díjszabással akarja megterhelni. Ha nem, akkor az ár /szoba/nap alapon lesz kiszámolva');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Fájlméret');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'A kép maximális mérete KB-ban');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Foglalt');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'A szállásfoglalás részletei');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Felhívjuk a figyelmét, hogy a szállásfoglalás egy törvényes szerződés, tehát ha bármi oknál fogva vissza kellene mondania vagy lerövidítenie a foglalást, ezért a szállásfoglalási szabályzatban meghatározottak szerinti kötbért köteles kifizetni.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Szállásfoglalás visszamondása vagy megrövidítése</i> Ha le akarja mondani a szállásfoglalást, akkor azt kérjük írásban tegye meg (e-mailen, postai levélben vagy faxon). A szálláslemondásnak a következő költségei vannak:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Az érkezés előtt 14 nap');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Visszaigazoló levél kinyomtatása');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Számla nyomtatása');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Vendégéjszakák száma: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Napi díjszabás: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Mindösszesen');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Számla nyomtatása');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Szolgáltatás hozzáadása a számlához');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Szolgáltatás részletezése');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'A szolgáltatások értéke');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Egyéb megrendelt szolgáltatás');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Elem hozzáadva a számlához');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Kép feltöltése');
jr_define('_JOMRES_FILE_UPLOAD', 'Fájl feltöltése');
jr_define('_JOMRES_COM_A_ODDS', 'Egyéb');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Kép törlése');
jr_define('_JOMRES_FILE_DELETED', 'Fájl törölve');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Törlés');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nem lehet ezt a szobát törölni, foglalások vannak rá. Szabadítsa fel a foglalások alól és próbálja meg újra.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Szoba törölve');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Szoba jellemzőinek törlése');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nem lehet törölni a szoba jellemzőit, egy néhány szobához hozzá van rendelve. Távolítsa el enne a szobáknak ezt a jellemzőjét és próbálja meg újra.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Szoba jellemzői törölve');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Szálláshely jellemzőinek törlése');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nem lehet törölni ennek a szálláshelynek a jellemzőit, egy szálláshelyhez hozzá van rendelve. Távolítsa el ennek a szálláshelynek ezt a jellemzőjét és próbálja meg újra.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Szálláshely jellemzői törölve');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Szobatípus törlése');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Szobatípus törölve');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Szálláshely törlése');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Szálláshely törölve');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Önnek nincs joga törölni ezt a szálláshelyet.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Teljes képméret');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Térkép megtekintése');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Leírás');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Szolgáltatások és adottságok');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Kikapcsolódás-, programlehetőségek');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Csillagtúra ajánlatok');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Árak');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Tömegközlekedés');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Működési és lemondási nyilatkozat');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Szálláshely címe');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'A látogatók foglalhatnak on-line');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Állítsa Igen-re, hogy a látogatók is foglalhassanak on-line.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Szállásfoglalások fix periódusra');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Ha Igen-re van állítva, akkor a foglalások fix periódusokra lesznek eszközölve. Ha ez Nem-re van állítva, akkor először bizonyosodj meg, hogy az "Előre definiált érkezési nap" opció nincs Igen-re állítva (ha csak nem akarod, hogy a vendégek egy bizonyos napon érkezzenek); különben a naptárban nem sok működő link lesz');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Foglalási periódus: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Szobák foglalása');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximum periódus, pl. 3 x 7 szállásfoglalási periódus = 21 nap');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Ez egy apartman/kulcsosház/villa?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Szállásfoglalás végrehajtása');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Szállásfoglalás ellenőrzése, jóváhagyása');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Hétfő');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Kedd');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Szerda');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Csütörtök');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Péntek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Szombat');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Vasárnap');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'H');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'K');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Sze');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Cs');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'P');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Szo');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'V');
jr_define('_JOMRES_COM_A_AVLCAL', 'Foglalhatósági naptár');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Az aktuális dátum betűszíne');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'A megjelenített hónap napjainak betűszíne ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'A nem megjelenített hónapok napjainak betűszíne');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Cella háttérszíne azokra a napokra, amikor a szállás/szoba szabad ');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Cella háttérszíne a meg nem jelenített hónapok napjainak');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Cella háttérszíne a foglalt napokra ');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Cella háttérszíne  előzetesen lefoglalt szobákhoz (amelyekre még nem fizettek előleget)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Cella háttérszíne múltbeli dátumokhoz');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Foglalt/Nem fogadóképes ');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Foglalhatóságok');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Előzetes foglalások ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Érkezési nap / dátum');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Csak azoknak a honlapoknak, amelyek fix periódusos foglalásokat ajánlanak. Válaszd ki a napot, amellyel az érkezéseknek kezdődniük kell.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fixált érkezési nap');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Üdülési periódus (napok)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Elérhetőségi naptár mutatása?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Válassza az Igen-t, az elérhetőségi, foglalhatóségi naptár mutatásához');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Elérhetőség, foglalhatóság');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Kattintson egy szabad dátumra a szállásfoglalási űrlap eléréséhez.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Hamis foglalások');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Új hamis foglalás');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Vendég törlése');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Vendég törölve');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Nem lehet a vendéget törölni, ha érvényben lévő foglalásuk van. Törölje a vendég foglalását és próbálja meg újra.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Bármilyen');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Naptár kimeneti formátuma');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Naptár bemeneti formátuma');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Ez az opció engedélyezi a felhasználónak, hogy megváltoztassa a szállásfoglaló rendszer naptárának bemeneti formátumát.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'A fix periódusú foglalások esetén rövid megszakítások engedélyezettek');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'A megszakítások hossza');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publikálva');
jr_define('_JOMRES_COM_A_PAYPAL', 'PayPal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Nyomonkövetés');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Dátum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Felhasználó (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Szűrés dátum szerint');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Állapot');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Függő érkezések');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Mai érkezések');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Jelenleg helybéli');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Mai távozások');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Lejárt távozások');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Nem érkezett meg');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Létrehozott szoba');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Frissített szoba');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Törölt szoba');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Létrehozott szoba jellemző');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Frissített szoba jellemző');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Törölt szoba jellemző');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Létrehozott szálláshely');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Frissített szálláshely');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Törölt szálláshely');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Szerkesztett szálláshely beállítások');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Publikált szálláshely');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Létrehozott díjszabás');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Frissített díjszabás');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Szolgáltatás díjszabásának hozzáadása');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Beérkezett foglalás');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Bevitt előleg');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Létrehozott vendég');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Frissített vendég');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Lefoglalt szobák');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Létrehozott szolgáltatás');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Frissített szolgáltatás');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Törölt szolgáltatás');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Publikált szolgáltatás.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Bevitt hamis foglalás.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Törölt hamis foglalás.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Szolgáltatás neve');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Részletes leírás');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Név');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Ár');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Szolgáltatás frissítve');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Elem szerkesztése');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Szolgáltatás törölve');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Szolgáltatások adminisztrálása');
jr_define('_JOMRES_COM_A_EXTRAS', 'Megjelenítsük a szolgáltatásokat a foglalás ideje alatt?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Állítsa ezt igenre, hogy a szolgáltatásokat is kínálja a vendégnek');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Választható szolgáltatások.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Hamis foglalás kezdődátuma');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Szolgáltatások visszavezetése');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Hamis foglalások');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'A foglalás próbálkozása alatt egy hiba lépett fel, egy vagy több szoba a kiválasztottak közül nem szabad.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Hamisan (fenntartott) foglalt szobák');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nincs listázandó hamis foglalás');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Csillagok száma');
jr_define('_JOMRES_COM_A_RESET', 'Visszaállítás');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Visszavont foglalás');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Szálláshely gyorskereső');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Pénznem jele');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Pénznem jele');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Kattintson ide több információért!');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Bővített szállásfoglalás korlátozása?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Állítsa ezt Igen-re, ha korlátozni akarja a bővített szállásfoglalást (használja a követekző mezőt a napok számának korlátozására). Ha ezt az opciót Igen-re állítsa, akkor ha a vendég több, mint n napot próbál foglalni, akkor az érkezési nap vissza lesz állítva az aznapi napra');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Bővített foglalás napok száma ennyi napra korlátozva:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Adó');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Szoba adó');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fix összegű adó');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Adó százalékmértéke');
jr_define('_JOMRES_COM_A_EUROTAX', 'Turisztikai adó');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Adó mértéke');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Minden rekord archiválása');
jr_define('_JOMRES_FRONT_TARIFFS', 'Árajánlat szállásra');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Díjszabás neve');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Díjszabás leírása');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Szobatípus');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Érv. ettől');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Érv. eddig');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', '/fő /nap');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'nap');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'A hétvégéken kívül');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum napok');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maximum napok');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. személy');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. személy');
jr_define('_JOMRES_FRONT_PREVIEW', 'Előnézet');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Folyamatban lévő szerkesztés?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Szöveg frissítve.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Nyelv szerkesztése');
jr_define('_JOMRES_FRONT_PTYPE', 'Szállás típusa');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Szállástípus listázása');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Szállástípus szerkesztése');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Szállástípus');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Szállástípus leírása');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Szállástípus mentve');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Szállástípus(ok) törölve');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Fizetési emlékeztető');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Nincs extraköltségű plusz szolgáltatás hozzáadva');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Előleg');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Teljes összeg');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'A foglalásra fizetendő összeg');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Hsználja ezt az opciót, hogy eldönthesse, hogy mi van megadóztatva a szállásfoglalás alatt. Válassza ki az előleget, ha az előleg adóköteles vagy az egész összeget, ha a teljes összeg adóköteles.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Megjelenítendő hónap');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'A szoba foglalhatóságánál, hány hónap legyen megjelenítve?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'On-line  fizetés');
jr_define('_JOMRES_COM_A_CANCEL', 'Kilépés');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Kérjük, válassza ki a szobá(ka)t, amelyeket ki akar vonni a szolgáltatás alól, és az azzal kapcsolatos dátumokat. <br>Ha egy szoba nincs megjelölve, akkor nem  vehető fel rá hamis foglalás (fenntartás), amíg a tényleges szállásfoglalások nincsenek teljesítve vagy visszamondva.<br/> Ha kiválasztotta a megfelelő adatokat, akkor kattintson a kék "Alkalmaz" gombra, hogy a szoba foglalhatóságát újra leellenőrizhesse. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Úgy néz ki, hogy a portálrendszer az inaktivitás miatt kiléptette Önt.</b> Kérjük jelentkezzen be a rendszerbe és próbálja újra.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Kilépés oka');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Használ On-line fizetést?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Kérjük válassza ki a fizetési módozatot.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway engedélyezése?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Kiegészítők módosításának beállítása');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Telepített kiegészítő beállítása');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Szállás weboldalára mutató link');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Hitelkártya szerkesztése');
jr_define('_JOMRES_COM_A_EDITICON', 'Ikon méretének szerkesztése');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Képnézegető');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Galéria linkjének megjelenítése?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'A diavetítés megjelenítése szalagban?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Galéria');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Árlista link mutatása?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Engedélyezi a felugró ablakokat?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Képek feltöltése diavetítéshez');
jr_define('_JOMRES_A_TABS_MISC', 'Egyéb');
jr_define('_JOMRES_A', 'Oldal konfigurálása');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Globális szálláshely beállítási lehetőség');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Válassza ki a keresési módot, amit használni akar.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>A keresés nem hozott eredményt. Kérjük adjon meg új keresési feltételeket és próbálja újra.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Biztos ezt akarja tenni?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Foglaljon most!');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Foglaljon most!');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Árak megjelenítése szalagban?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Elérhetőségek');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Részletes bemutatás');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Kattintson ide a szoba és foglalhatóság megtekintéséhez');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Cím megjelenítése a link alatt');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Részletes szállásadatok megjelenítése a link alatt');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Szobák és a foglaltság megjelenítése a link alatt');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Átalánydíjak');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Átlagok');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Válasszon árkialakítási modellt');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Kétféle árképzés közül választhat. Az első 'átalányár' eljárás lehetővé teszi számos ár megadását a vendégnek és az ár a foglalás teljes időtartamára megegyezik, minden nap azonos. Ez akkor praktikus, ha ugyanarra a dátumra különböző árakat is meg akar adni, pl. szoba reggelivel vagy félpanziós ár... Válassza az 'átlagár' kalkulációt, ha szezonális árakat akar használni, napokra lebontva. A rendszer megtalálja a foglalás napjaihoz rendelt árakat, összegzi, és kiszámítja a foglalás idejére eső átlagárat. ");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Megjelenjen a távozás dátumának megadása mező?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Állítsa Nem-re, ha nem akarja megjeleníteni a távozás dátuma mezőt. Gondolja át a beállítást, mivel a távozás dátuma a foglalásban mindig az érkezést követő nap lesz. ');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Leírás korlátozása');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Ez a beállítás korlátozza a szállások listájában megjelenítendő karakterek számát ha a szálláshely leírásából kilépve.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Dátum formátum() ?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Készre jelentés');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Készrejelentés visszavonása');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Globális szobatípusok használata');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Kép hozzárendeléséhez ehhez a szobatípushoz előbb fel kell töltenie a képeket a következő mappába /images/stories/jomres/rmtypes/ . ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Háttérszín beviteli hiba');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Ország megadása a foglalási űrlapon');
jr_define('_JOMRES_JAVASCRIPT_', 'A megjelölt mezők kitöltése kötelező.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Regisztrálhatja a felhasználó a szállását?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Állítsa Igen-re ha engedélyezni akarja a felhasználók számára a szálláshelyek rögzítését adminisztrátori beavatkozás nélkül.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'A megjelölt mezők kitöltése kötelező.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Szálláshely létrehozása');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Naptár megjelenítése az év elejétől?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'A foglaltsági naptár ez év első napjától kezdődik.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Szabad szobák');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Vissza a szállás részleteihez');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Szoba típusok');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Véletlen keresés limit');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Google árfolyamlink megjelenítése az árlistában?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Váltsa át :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Html szerkesztő használata engedélyezett a felhasználónak?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Ezt az űrlapot használhatja a szállásfoglaláshoz. Állítsa a kurzort az "i" képek fölé további információért a témáról. Módosítsa foglalása adatait, mint az érkezés és távozás dátuma, vendégek száma, azután válasszon a szabad szobák közül igényeinek megfelelőt. Kattintson bármely szabad szobára, hogy hozzáadja foglalásához. Ha elkészült extrákat is adhat foglalásához, majd rögzítse a címét. Ha elegendő adatot megadott megjelenik a jóváhagyás gomb, és befejezheti a foglalást.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Ezt az űrlapot használhatja a szállásfoglaláshoz. Állítsa a kurzort az "i" képek fölé további információért a témáról. Módosítsa foglalása adatait, mint az érkezés és távozás dátuma, vendégek száma. Ha elkészült extrákat is adhat foglalásához, majd rögzítse a címét. Ha elegendő adatot megadott megjelenik a jóváhagyás gomb, és befejezheti a foglalást.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'A szállásfoglalás részletei');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Kérjük, válassza ki a szállásfoglalás kívánt részleteit');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Foglalhatóság');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Válassza ki a kívánt szobákat');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Tekintse meg a szoba foglaltságát abban az időszakban.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Választható szolgáltatás');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Válasszon valamilyen extrát, melyet a foglalásba fel akar venni');
jr_define('_JOMRES_COM_PERDAY', 'Naponta');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Az Ön címe');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Kérjük, írja be az adatait. Felhívjuk a figyelmét, hogy minden mező kitöltése kötelező a Mobil telefonszám kivételével');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Szabad szoba');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Kiválasztott szoba');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>A legkorábbi lehetséges érkezési nap: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Naponta:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Összesen:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Szolgáltatások:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Turisztikai adó:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Kedvezmény:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Mindösszesen:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Vendégek');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Kattintson ide a szoba kiválasztásáért!');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Kattintson ide, hogy a szobát törölje a kiválasztottak közül');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Vendég típusok');
jr_define('_JOMRES_VARIANCES_TYPE', 'Típus');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Vendég típusa; pl. 3-10 éves Gyerek, Diák, stb.');
jr_define('_JOMRES_VARIANCES_NOTES', 'Megjegyzés');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Vendégtípussal kapcsolatos megjegyzése, ha van ilyen.');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Ennek a vendégtípusnak a maximális száma, aki a foglalásba felvehető');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Százalék');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'A kiszámolt összeg a szoba alapárának százaléka. Ha Nem-re állítja a meghatározott összeg hozzáadódik vagy levonódik a szoba alapárából. ');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Eltérés megadása?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'A kiszámolt összeg hozzáadódik vagy levonódik a szoba alapárából. Állítsa Nem-re, ha diszkontot akar adni a szobaárból.  ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Eltérés');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Az eltérés összege');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'A módosított vendégtípus rendezése');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Vendégtípus törlése');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Vendégtípus létrehozása');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Vendégtípus frissítése');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Vendégtípus frissítve');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Szobalista linkjének megjelenítése a szálláshely részletes bemutatkozó oldalán?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', '<b>Csak</b> Foglalhatósági naptár/Szabad szobák megjelenítése?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Állítsa Igen-re, ha nem akarja megjelentetni a szálláshely fejadatait és részleteit, csak a szobák listáját/foglalhatósági naptárat. Azoknak a felhasználóknak ajánlatos, akik csak üres szállás kiadással foglalkoznak (pl. apartmanok, villák stb).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Érk-Táv minimum intervalluma');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'A minimum időtartam az érkezés és távozás dátuma között.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Szállásfoglaló űrlap - szobalista - szobaszám mutatása');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Szállásfoglaló űrlap - szobalista - szoba nevének mutatása');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Szállásfoglaló űrlap - szobalista - Díjszabás címének mutatása');
jr_define('_JOMRES_ORDER', 'Rendezés');
jr_define('_JOMRES_REQUIREDFIELDS', 'Megadni kötelező');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Érkezés előtti napok száma');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'A mai nap és az érkezés közötti minimális napok száma.');
jr_define('_JOMRES_DTV', 'Dátum típus variációk');
jr_define('_JOMRES_DTV_DOW', 'A hét napjai');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Alapértelmezett vendégtípus');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Alapszám az egy az első vendégtípusnak. Ha használ vendégtípust, ez az elsőszám, mely az első foglalásba bekerül. ');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Csak regisztrált felhasználók foglalhatnak on-line?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Sajnáljuk, regisztrálnia kell magát a rendszerbe, ahhoz, hogy on-line tudjon foglalni. Kérjük, kattintson ide a honlapon való regisztráláshoz. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Jelenlegi foglalások linkjeinek betűszíne');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Hétvégi határok');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'A szoba foglalt');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Hamis foglalás');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Az előleg felkerekítése?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Foglalót kér?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Az árak heti egységben tárolandók?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Lehetőség van az árak napi vagy heti egységben tárolására. Ha a hetit akarja választani állítsa be az Igen-t.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Heti ár');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fix érkezési dátumok rendszeresítve: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Amikor fix érkezési dátumok vannak kiválszatva, akkor a dátumok száma megtekinthető a dátumok legördülő mezőben');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Érkezés dátuma hibás');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Távozás dátuma hibás');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'A foglalási periódus túl rövid. Az érkezési és távozási dátum között a foglalható napok száma minimum:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'A kiválasztott periódusban a napok száma:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'A vendégtípus variáns hibás');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Válassza ki a vendégek számát/típusát');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Túl sok vendég van a csoportban az elérhető létszám vagy díjszabáshoz képest');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Több szobát választott, mint amennyi a vendégek létszámához viszonyítva szükséges, kérjük, kattintson a kiválasztott szoba/szállás valamelyikére, hogy módosíthassa a választását!');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Túl sok vendég a szabad ágyak számához viszonyítva');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Egy vagy több szobát még ki kell választani');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Szoba / szálláshely választása');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Családnév megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Keresztnév megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Házszám/név megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Utca/tér megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Település megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Megye megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'A postai irányítószám megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Ország megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Vonalas telefonszám megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Mobiltelefonszám megadása kötelező');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Emailcím megadása kötelező');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Üres helyek vannak!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Még nincs kiválasztva szoba');
jr_define('_JOMRES_BOOKING_NUMBER', 'Szállásfoglalás egyedi azonosító száma (E.a.)');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Foglalás rendben, üzenő doboz a háttérben');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Sablon változóinak betöltése?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Állítsa be ezt, hogy engedélyezze a sablon változóinak DHTML betöltését minden FRONTEND sablonfile esetén az oldal megtekintésekor. Hasznos, ha azt akarod látni, hogy bizonyos elemek elérhetően használhatóak a beállított sablonban.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Százalékosan megjelenítve');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Állítsa Igenre, hogyha az egyfős szállásfoglalás számításánál százalék szerepel. Hogyha nem, akkor a megadott fix összeg lesz alkalmazva.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Szabad szobák/díjszabás limit');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Használja ezt a lehetőséget a szállásfoglalási űrlapon szereplő szabad szobák és díjszabások korlátozására. Állítsa nullára, ha nem akarja ezt a korlátozást engedélyezni. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Ez alkalommal nincs szabad hely!');
// Introduced in v2.5
jr_define('_JOMRES_ANY', 'Mindegy');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Ezt lefoglalom!');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Tömeges módosítás funkció?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Legyen óvatos ezzel a funkcióval. Ha Igen-re állítja, a változás a  rendszer ÖSSZES szálláshelyének szövegét módosítja.');
jr_define('_BOOKAROOM', 'On-line szállásfoglalás');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Weekends only');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Hétvége napjai');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Állítsa be a hétvége napjait. A hétvégét magába foglaló/kizáró tarifák e szerint jelenítik meg a szobalistát.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Válassza ki az országot, mielőtt bármely más mezőt kitöltene');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Save your property changes before uploading a property image');
jr_define('_JOMRES_TARIFFSFROM', 'Árak');
jr_define('_JOMRES_SEARCH_ALL', 'Összes');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Keresés ország szerint');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Keresés megye szerint');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Keresés város szerint');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Keresés tulajdonság szerint');
jr_define('_JOMRES_SEARCH_BUTTON', 'Keresés');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Search term');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Szavak keresése: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Kérjük adja meg a tervezett érkezési és indulási idejét és nyomja meg a keresés gombot, hogy ezen időtartamon elérhető szálláshelyeket találjon.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Összes szállás listázása  szállástípus szerint');
jr_define('_JOMRES_SEARCH_RTYPES', 'Összes szállás listázása szoba típus szerint');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Alapértelmezett');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Szállás neve');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Megye');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Város');
jr_define('_JOMRES_SORTORDER_STARS', 'Csillagok');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Szállás részletek');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Booking form');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Update your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-checking room availability<br/>(Room selection will be reset)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-checking availability');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifying your optional extras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Changing your room selection');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Updating your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Sorry, one or more address fields are incorrect.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Szoba kép');
jr_define('_JOMRES_CURRENCYFORMAT', 'Valuta formátum');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Search options');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Log files');
jr_define('JOMRES_COM_A_MESSAGE', 'Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normál');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Fejlett');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Díjszabás beállítás');
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
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Szobalista megjelenítése a szállás részletei oldalon?');
jr_define('JOMRES_PROPERTYTYPE', 'Property type');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max fő/szoba');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max fő/foglalás');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Megjegyzés írása');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Megjegyzés szerkesztése');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Megjegyzés törlése');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Megjegyzések megtekintése');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Megjegyzés hozzáadva');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Megjegyzés mentve');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Megjegyzés törölve');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Foglalások listázása');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Foglalásaim');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Foglalás megtekintése');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'View Favourites');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'You haven\'t added any favourites yet!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Property type');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktív');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'This plugin allows you to enable and configure your room prices dynamically.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (number of days between arrival date and today)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Percentage rooms occupied  10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Percentage rooms occupied 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Percentage rooms occupied 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Percentage rooms occupied 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Discount %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' has been discounted from ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' to ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Room price not discounted ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktív?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Set this to Yes if you want to offer last minute deals.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Discount');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In percent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'A discount has been applied to this booking!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'The cost of the stay has been reduced by ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'This property offers a last minute discount of  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' percent if you book to arrive before ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' percent or more if you book to arrive before ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Book now to make the most of this offer!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Részletes díjszabás információk');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Állítsa igenre részletesebb díjszabás információk megjelenítéséhez a szállás részletei/díjszabás felugró ablakban.');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimise configuration options');
jr_define('_JOMCOMP_AMEND', 'Amend Booking - Property Selection');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Select Property');
jr_define('_JOMCOMP_AMEND_HEADER', 'Original Contract:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Deposit Paid');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Deposit Not Paid');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Foglaló felülírása');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Cancel');
jr_define('_JRPORTAL_CPANEL', 'Control Panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Default Commission rate');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'List Commission Rates');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Commission Rates');
jr_define('_JRPORTAL_CRATE_TITLE', 'Title');
jr_define('_JRPORTAL_CRATE_TYPE', 'Type');
jr_define('_JRPORTAL_CRATE_VALUE', 'Comission rate');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Valuta kódja');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Szálláshelyek listája');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Szálláshely neve');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'címe');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Properties who\'s background colour is red have not yet had a commission rate applied to them.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistics');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Commission Rate');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'List bookings');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Property id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Invoice id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Booking total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date archived');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Leírás');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Szállás végösszege');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'éjszakák a');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'szobánként ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Extrák összege ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Árak összefoglalása ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Please read and agree to ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Alább látható a foglalásának az összefoglalása.<br /> Hogy bármilyen módosítást végezzen, kattintson a foglalás módosítása gombra. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Ha módosítani szeretné a foglalását, kattintson ide');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Foglalás módosítása');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Kérjük írja ide a különleges kéréseit, kérdéseit amit a szállásadóhoz szeretne intézni.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Megerősítem, hogy egyetértek a következőkben foglaltakkal: ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'per person per night ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'nak');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Rajt');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Előző');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Következő');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Vége');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Eredmények');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Felhívjuk figyelmét, hogy ezzel még nem történt meg a foglalás.<br />Kérjük erősítse meg e-mail üzenetben. Az üzenetét ide írja ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kapcsolat');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Ingatlanlekérdezés innen');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Köszönjük érdeklődését, üzenetét elküldtük a szálláshely kapcsolattartási e -mail címére, és a saját címére másoltuk nyilvántartásba. A lehető leghamarabb válaszolnak Önnek válaszával . ');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'tekintetében');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Kérdez');
jr_define ('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Kérjük, válassza ki a kívánt szállást a jobb oldali listából');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min. szoba már kiválasztva');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'A foglaláskor már kiválasztott szobák minimális száma, mielőtt a tarifa/szobatípus kombinációt fel lehet ajánlani. Lehetővé teszi kedvezményes tarifák használatát, ha N -nél több szoba van kiválasztva.');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Maximálisan kiválasztott szobák');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'A szobafoglalás előtt már kiválasztott szobák maximális száma a tarifa/szoba kombináció megszüntetése előtt. Lehetővé teszi, hogy leállítsa ezt a szobatípust/tarifakombinációt, miután N szobát kiválasztott a foglalási űrlapon.');
jr_define ('_JOMRES_COM_SPS_EDITROOM_DESC', 'Ne feledje, hogy az itt beállított egyszemélyes juttatások nem használhatók, ha az Egyszemélyes kellékek beállítása Igen az általános konfigurációban. Az itt megadott beállítások az átalánydíjas egyszemélyes tartozékok alternatívái, nem pedig a lakás kiegészítései arány SPS. ');
jr_define ('_JOMRES_AVLCAL_NOBOOKINGS', 'Elérhető');
jr_define ('_JOMRES_AVLCAL_QUARTER', 'Néhány foglalás');
jr_define ('_JOMRES_AVLCAL_HALF', 'Félig lefoglalt');
jr_define ('_JOMRES_AVLCAL_THREEQUARTER', 'Leginkább lefoglalt');
jr_define ('_JOMRES_AVLCAL_FULLYBOOKED', 'Teljesen lefoglalt');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Hetenként');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Naponként');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Foglalásonként');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Személyenként és foglalásonként');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Személyenként és napontként');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Személyenként és hetenként');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Naponként (min nap)');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Naponként X szobánként');
jr_define ('_JOMRES_REGISTRYREBUILD', 'Minicomponent registry rebuild & cache rebuild');
jr_define ('_JOMRES_REGISTRYREBUILD_NOTES', "Általában a Jomres beépülő modul nyilvántartása automatikusan újraépül, amikor megnézi a bővítménykezelőt, és hozzáad vagy eltávolít egy beépülő modult, azonban lehetséges, hogy ezeket a funkciókat valamilyen okból nem tudja használni, ezért ezzel a funkcióval újjáépítheti a manuálisan. Ha hozzáfér a Plugin Manager and Upgrades szolgáltatáshoz, akkor valószínűtlen, hogy ezt a funkciót kell használnia. Minden alkalommal újratelepítenie kell a plugin-nyilvántartást, amikor új mini-összetevőt ad hozzá, és nem használta a Plugin Manager alkalmazást. hozzá. ");
jr_define ('_JOMRES_REGISTRYREBUILD_SUCCESS', 'A rendszerleíró adatbázis újjáépítése sikeres');
jr_define ('_JOMRES_REGISTRYREBUILD_FAILURE', 'Hiba történt a minikomponensek nyilvántartásának újjáépítésekor. Ellenőrizze a Jomres hibanaplóját, hogy van -e rekord a hibát kiváltó okokról.');
jr_define ('_JOMRES_SEARCH_PRICERANGES', 'Keresés ár szerint');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Még nem foglalt helyet!');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Tulajdonságtípus szerkesztése');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Válassza ki a tulajdon típusát');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Kérdése van ...');
jr_define ('_JOMRES_COM_A_LISTLIMIT', 'Szállás lista limit');
jr_define ('_JOMRES_COM_A_LISTLIMIT_DESC', 'A keresés után megjelenítendő ingatlanok száma');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrált keresési szolgáltatás');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'A Jomres integrált keresési funkció lehetővé teszi a felhasználók számára, hogy funkciók szerint kereshessenek a Jomres ingatlanokban. Ha már használta a Jomres keresési funkcióit a Joomlában, ismeri ezeket a beállításokat. <br/ > Ez a funkció lehetővé teszi számunkra, hogy keresési kezelést kínáljunk a Jomres -en belül azoknak a felhasználóknak, akik nem akarják használni a Joomla keresési modulokat, vagy más olyan CMS -felhasználóknak, akiknek nincs saját Jomres -keresési modulja. <br/> Ne feledje, hogy ha úgy dönt, hogy linken keresztül keres valamit (azaz nem legördülő listát), akkor más keresési lehetőségek nem valósulnak meg, csak az az elem, amely megfelel annak a linknek, amelyre kattintott. <br/> Vegye figyelembe, hogy alapértelmezés szerint az integrált keresés elrendezése nem túl szép. Ez azért van, mert az elrendezést végrehajtó sablonfájlnak tartalmaznia kell az összes lehetséges opciót, amelyek közül néhány nem kompatibilis. ');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktiválja ezt a funkciót?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Ha ez a funkció engedélyezve van, akkor a Jomres hívása, amely a tulajdonságlistát mutatja, azt jelenti, hogy a keresési lehetőségek is megjelennek.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Oszlopok használata');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Bármely keresési lehetőség, amelyet link típusként definiált (ahol releváns), oszlopokban jelenik meg (IE br a link végére)');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Régió keresése kombinált legördülő menüből');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Ajánljon keresési legördülő menüt az országok/régiók/városok közötti szűréshez. Ha használni szeretné ezt a funkciót, akkor legjobb, ha nem használja az alábbi régió/város keresést.");
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Tulajdonnév szerinti keresés');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Mutassa a keresést a tulajdonságnév bevitele alapján.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Megjelenítés legördülő menüben?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Állítsa ezt nemre, hogy a lista linkként jelenjen meg');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Város/régió');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Régió bemenet megjelenítése');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Megjelenítés legördülő menüben?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Állítsa ezt nemre, hogy a lista linkként jelenjen meg');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Tulajdonságtípus szerinti keresés');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'A keresés megjelenítése tulajdonság típusa szerint');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Megjelenítés legördülő listaként?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Állítsa ezt nemre, hogy a lista linkként jelenjen meg');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Keresés szobatípus szerint');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'A keresés megjelenítése szobatípus bemenet alapján');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Megjelenítés legördülő menüben?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Állítsa ezt nemre, hogy a lista linkként jelenjen meg');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Jellemzők');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'A keresés megjelenítése szolgáltatásbevitel alapján');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Megjelenítés legördülő menüben?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Állítsa ezt nemre, ha a lista eszköztipp -képként és jelölőnégyzetként jelenik meg');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Keresés leírás alapján');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'A keresés megjelenítése leírás szerint');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Keresés elérhetőség alapján');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'A keresés megjelenítése rendelkezésre állási bemenet alapján');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Keresés ár szerint');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'A keresés megjelenítése árkategóriák bevitel szerint');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Árkategóriás lépések');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres megvizsgálja a tarifák összes értékét, majd egy árkategóriát dolgoz ki az itt beállított növekményérték alapján.');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Alapértelmezés szerint, ha egy tulajdonság nincs kiválasztva a Jomres -ban, akkor keresést hajt végre. Ha ezt a keresést nem egy keresési modul indította el, akkor a keresés véletlenszerű eredményeket hoz (szándékosan). Ez a lehetőség lehetővé teszi, hogy korlátozza a visszatérések számát abban a véletlenszerű keresésben. ');
jr_define ('_JOMRES_COM_A_CRON_TITLE', 'Cron jobbeállítások és naplók');
jr_define ('_JOMRES_COM_A_CRON_DESC', 'Pseudocron munkainformációk. Az álkron funkciókra a számlázás és a jutalékkezelés szükséges.');
jr_define ('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Telepített cron minikomponensek. Egyedi cron feladat futtatásához használja az alábbi hivatkozásokat. Ne feledje, hogy a cron jobok nem hoznak létre kimenetet, ezért nem fognak információt látni az oldalon. Ehelyett nézze meg a feladatot napló alább. ');

jr_define ('_JOMRES_COM_A_CRON_METHOD', 'Módszer');
jr_define ('_JOMRES_COM_A_CRON_METHOD_DESC', 'Ha nem fér hozzá a cron jobokhoz, állítsa ezt a Minicomponent értékre, különben hozzon létre egy cron feladatot, és mondja meg, hogy futtassa a <br /> <i> curl -s' .JOMRES_SITEPAGE_URL_AJAX. '& feladat = cm. = '. get_showtime (' tmplcomponent ').' & no_html = 1>/dev/null </i> ');
jr_define ('_JOMRES_COM_A_CRON_LOGGING', 'Naplózás megjelenítése a böngészőben');
jr_define ('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Csak akkor működik, ha a módszer Minikomponensre van állítva.');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Naplózás engedélyezve');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Állítsa ezt Igen értékre a naplózás engedélyezéséhez. A naplók eredményei alább láthatók.');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Részletes naplózás');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Sok naplózási kimenet');
jr_define ('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Sablonszerkesztés');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Egyéni mezők');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Itt definiálhat egyszerű egyéni mezőket, amelyek megjelennek a foglalási űrlapon.');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Mezőnév (nincs szóköz)');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Alapértelmezett érték');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Leírás');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Kötelező');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximumális mennyiség');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Ha a szükséges mennyiség nagyobb mint 1, akkor a vendégek egy legördülő menüt fognak látni, ahol kiválaszthatják az extrák kívánt mennyiségét.');
jr_define ('_JRPORTAL_TAXRATES_TITLE', 'Adókulcsok');
jr_define ('_JRPORTAL_TAXRATES_CODE', 'Adószám');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Rate description');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'You cannot delete this tax rate.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Rate');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Számlák');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Nincs fizetve');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Fizetve');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Törölve');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Függőben');
jr_define('_JRPORTAL_INVOICES_USER', 'Felhasználó');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Állapot');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Kiállítva');
jr_define('_JRPORTAL_INVOICES_DUE', 'Esedékes');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Előfizetés');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Egyszeri végösszeg');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Ismétlődés ideje');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Recurring day of month');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Valuta kódja');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Tételek felsorolása');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Név');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Leírás');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Egyszeri ár');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Egyszeri mennyiség');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Egyszeri kedvezmény');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Egyszeri végösszeg');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Ádó kód');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Ádó leírás');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Adó');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override standard Jomres gateway settings?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Számláim megjelenítése');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Kedvezmény kuponok');
jr_define ('_JRPORTAL_COUPONS_DESC', 'Kedvezménykódok generálhatók és továbbíthatók a vendégeknek a foglalás ösztönzésére. Érvényes dátumok és dátumok a foglalás időpontjára vonatkoznak, nem pedig a foglalás időpontjára.') ;
jr_define('_JRPORTAL_COUPONS_CODE', 'Kupon kód');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Valid from');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Valid to');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Discount amount');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Discount is a percentage');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Room only');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ha van kuponja, kérjük írja be a mezőbe és kattinson a "Kupon mentése" gombra, hogy mentésre kerüljenek a kuponadatok a foglalásához .');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Kupon mentése');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon mentve a foglalás ellen');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'A kupon száma nem található');
jr_define ('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Kupon értéke');
jr_define ('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Kedvezményes foglalás. Kuponkód/kedvezményérték/kuponbeállítások:');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES', 'Nyelvek kiválasztása');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Válassza ki a nyelvi beállításokat a nyelvváltó legördülő menüben.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Megjeleníti a nyelvválasztó legördülő menüt?');
/*
* @figyelmen kívül hagyni
*/
jr_define ('_JRPORTAL_NEWUSER_DEAR', 'Kedves');
jr_define ('_JRPORTAL_NEWUSER_THANKYOU', 'Köszönjük, hogy regisztrált');
jr_define ('_JRPORTAL_NEWUSER_USERNAME', 'A felhasználóneve:');
jr_define ('_JRPORTAL_NEWUSER_PASSWORD', 'A jelszava:');
jr_define ('_JRPORTAL_NEWUSER_LOG_IN', 'Kérjük, jelentkezzen be a foglalások megtekintéséhez');
jr_define ('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon mentve');
jr_define ('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon törölve');
// Még nem használt
jr_define ('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Felhasználónév');
jr_define ('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Jelszó');
jr_define ('_JRPORTAL_SMS_CLICKATELL_APIID', 'API azonosító');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Értesítési mobilszám');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Kérjük, használja az \"Országkód, mobilszám \"formátumot. Például az Egyesült Királyságban található mobilszám például \"447979123456 \". Hagyja üresen, ha nem szeretne értesítő e -mailt küldeni a mobiljára telefon.");
jr_define ('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<br/> <br/>
<b> Nyilvánvaló, hogy nem használhatja/tesztelheti ezt az átjárót a localhostból, ezt egy \"élő\" szerveren kell megtenni. </b>
<br/> <br/>
A Clickatell-átjáró használatához Clickatell-fiókra és legalább egy regisztrált kapcsolatra (API-altermékpéldány) van szüksége az alkalmazás és az átjáró között. Minden egyes kapcsolat
módszer résztermékként ismert. Így kell eljárni: <br/>
<br/>
<b> 1. lépés - regisztráljon egy Clickatell -fiókhoz </b> <br/>
Ha még nem rendelkezik Clickatell -fiókkal, regisztrálnia kell az alábbiak szerint. Ellenkező esetben folytassa a 2. lépéssel. <br/>
* Keresse fel a http://www.clickatell.com/products/sms_gateway.php oldalt, és válassza ki a használni kívánt megfelelő API -alterméket (csatlakozási módot) (Clickatell Central (API)) <br/>
* Kattintson a regisztrációs hiperhivatkozásra. <br/>
* Töltse ki a regisztrációs űrlapot. <br/>
Az űrlap sikeres elküldése után automatikusan bejelentkezik új fiókjába, és egy olyan oldalra kerül, ahol hozzáadhatja a választott API -kapcsolatot. <br/>
<b> 2. lépés - regisztrált API -kapcsolat (altermék) hozzáadása </b> <br/>
Ha még nem jelentkezett be fiókjába, akkor ezt a http://www.clickatell.com/login.php címen kell megtenni <br/>
* A felső menüben válassza a \"Termékeim kezelése \" lehetőséget. <br/>
* Válassza ki a használni kívánt API -kapcsolat típusát (HTTP API) a legördülő menüből (\"Kapcsolat hozzáadása\"). <br/>
* Töltse ki az űrlapot. Győződjön meg arról, hogy beírta a zárolt IP -t (ennek a szervernek az IP -címét), és állítsa visszahívásként a HTTP POST beállítást. Be kell állítania az IP visszahívást ".get_showtime ('live_site')." értékre. \"/index.php?option=com_jomres&task=sms_clickatell_callback, valamint felhasználói azonosítót és jelszót. <br/>
Ha több API -kapcsolatot regisztrál, az egyes leírásoknak egyedi nevet kell megadniuk - nem rendelkezhet több azonos nevű API -val. <br/>
Az űrlap sikeres elküldése után megjelennek a hitelesítési adatok, beleértve az egyes kapcsolatok egyedi API -azonosítóját (api_id). Ezekre a hitelesítési adatokra van szükség, amikor üzenetet küld a Clickatell átjáróhoz. <br/>
<br/>
Használja felhasználói azonosítóját, jelszavát és api_id azonosítóját a fenti mezők kitöltéséhez. <br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Foglalási űrlap szobalistája megjeleníti a mozgássérült hozzáférést');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Foglalási űrlap szobalistája megjeleníti a vendégek maximális számát');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Előfizetési csomagok');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Név');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Leírás');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Published');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Teljes ár');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Engedélyezett szálláshelyek/előfizetés');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Előfizetés');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Use subscription handling functionality');
jr_define('_JOMRES_COM_NEWUSER', 'Create new user on booking');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Create new user account on unregistered user booking.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Click here to register your property');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'New user details ');
jr_define('_JOMRES_LATLONG_DESC', 'Használja az egeret a térkép mozgatásához, és húzza oda a mutatót a szállás helyére.');
jr_define('_JOMRES_CONTROLPANEL', 'Kezelőpanel');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Számla');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Számlák');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Szálláshelyem regisztrációja');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Figyelem: ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Sorry, but that package ID is not recognised.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'A vállalkozás részletei');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Cégnév');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Adószám');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Building number');
jr_define('_JOMRES_INVOICE_NUMBER', 'Számla száma ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Sválassza ki azokat a dátumokat, amelyekre alkalmazni szeretné a fekete foglalást. Ha kiválasztotta a megfelelő dátumokat, kattintson az "Alkalmaz" gombra az elérhetőség újbóli ellenőrzéséhez. <br/>
<br/>
Ha a szálláshely egy vagy több foglalással rendelkezik a kiválasztott időszakra, akkor nem tudja lefoglalni, amíg a többi/fekete foglalást nem törölték/le nem írták.');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Sajnáljuk, de ezt a dátumot nem lehet lefoglalni.');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Feketelizálhatja ezt a tulajdonságot ezekre a dátumokra.');
jr_define ('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Az ingatlan úgy van konfigurálva, hogy személyenként és éjszakánként felszámítson, de nem hoz létre vagy tesz közzé vendégtípust, hozzon létre és tegyen közzé egy vagy több vendégtípust.');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Még nem állított be egy tarifát sem, így nem tud foglalásokat fogadni.');
jr_define ('_JOMRES_EDITINGMODE_ON', 'Címke szerkesztési mód bekapcsolva');
jr_define ('_JOMRES_EDITINGMODE_OFF', 'Címke szerkesztési mód ki');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Változó előleg kérése?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'A változó előleg beállítás lehetővé teszi, hogy a foglalás teljes árát felszámolja előlegként, ha a foglalás érkezési napja egy bizonyos számú napnál közelebb van "mához". Állítsa ezt az opciót igenre, és írja be a napok számát alul. Pl. ha ma 2011-10-15-e van, és ön 15 napot állított be, minden 2011-10-01-e után beérkező foglaláskor a vendégnek előre ki kell fizetnie a teljes árat. Az ez előtti foglalásokkor a fenti foglaló-beállítások lesznek alkalmazva.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Napok száma, amin belüli foglalásokkor a teljes ár felszámolalásra kerül mint foglaló');
jr_define ('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Megerősítő e -mailt küldtünk. Most bezárhatja ezt az ablakot.');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kapcsolattartó ügynök');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Számla megjelölése fizetettként');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Számla megjelölve fizetettként');
jr_define('_JOMRES_APIKEY_REMAKE', 'Make new API key');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Ez egyetlen ingatlan telepítése?');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Ha ez az opció Igen értékre van állítva, akkor a Jomres előnézete a nem jogosult felhasználók számára jelentősen leegyszerűsödik. A Jomres alapértelmezett hívásai egy menüpontból, ahelyett, hogy az ingatlanok listáját kapnák, csak a vendéget a rendszer első ingatlana foglalási űrlapján. Az ingatlankezelők szintén nem látják a Tulajdon részletei előnézeti gombot vagy az Új ingatlan hozzáadása gombot. Ideális, ha csak egy ingatlant szeretne felsorolni, és foglalni szeretne. <br /> ');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Fizetési mérleg');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define ('_JOMRES_SUPPORTKEY_DESC', 'Támogatási licenc kulcsa (más néven licensz száma). A Jomres bővítményeinek letöltéséhez naprakész licencre lesz szüksége.');
jr_define ('_JOMRES_PERSONAL_DISCOUNT', 'Személyes kedvezmény');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Korlátozza az ingatlan -regisztrációt egy országra?');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Biztosíthatja, hogy az ingatlan -regisztráció csak egy országra korlátozódjon, ha ezt az opciót Igen -re állítja, és az országot a következő lehetőségben állítja be.');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Az ingatlanok ebben az országban találhatók:');
jr_define ('_JOMRES_JQUERYTHEME', 'Jquery téma');
jr_define ('_JOMRES_JQUERYTHEME_DESC', 'Válasszon ki egy jquery témát a tulajdonság részletei lapokhoz.');
jr_define ('_JOMRES_PROPERTYNOTOUBLISHED', 'Sajnáljuk, de ez a tulajdonság jelenleg nem érhető el.');
jr_define('_JOMRES_REVIEWS', 'Értékelések');
jr_define('_JOMRES_REVIEWS_TITLE', 'Vélemény címe');
jr_define('_JOMRES_REVIEWS_DATE', 'dátuma ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Még nincsenek vélemények erről a szálláshelyről.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Szeretne őn lenni az első, aki véleményehzeti ezt a szálláshelyet?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Egyetértek ezzel a véleménnyel');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Nem értek egyet ezzel a véleménnyelw');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Átlagos vélemény: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Összes velemény:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Új vélemény hozzáadása');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Véleményezéshez be kell jelentkeznie.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Tell us what you think about this property : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Ez a véleményező ezt írta: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Előnyök: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Hátrányok: ');
jr_define ('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Elküldve:');
jr_define ('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Már felülvizsgálta ezt a tulajdont, nem tehet róla újabb véleményt.');
jr_define ('_JOMRES_REVIEWS_CANNOTREVIEW', 'Sajnáljuk, de nem tehet közzé véleményeket ezen az oldalon.');
jr_define ('_JOMRES_REVIEWS_CLICKTOSHOW', 'Vélemények megjelenítése');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'a vendégek egyetértenek ezzel az értékeléssel.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'a vendégek nem értenek egyet ezzel az értékeléssel.');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'a vendég egyetért ezzel az értékeléssel.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'a vendég nem ért egyet ezzel az értékeléssel.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Köszönjük, hogy megosztotta véleményét erről az értékelésről.');
jr_define ('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Köszönöm, de már megosztotta véleményét erről az értékelésről.');
jr_define ('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Kérjük, győződjön meg arról, hogy minden mező kitöltésre került.');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Kérjük, foglalja össze véleményét cím megadásával');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Kérjük, írjon be egy teljes körű értékelést a leírás mezőbe');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Kérjük, adja meg az ingatlan vendégeként szerzett tapasztalatainak jó részét');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Kérjük, írjon be minden negatív gondolatot a tapasztalatairól');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Kérjük, értékelje a személyzettől kapott vendéglátást');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Kérjük, értékelje véleményét az ingatlan területi beállításáról');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Kérjük, adja meg véleményét az ingatlan tisztaságáról');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Kérjük, értékelje a szállást. Kényelmes volt vagy szálkás');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Kérjük, adja meg véleményét, hogy ár -érték arányban volt -e');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Kérjük, értékelje a szolgáltatásokat');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Összefoglaló áttekintés');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Saját tapasztalat részletesebben');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Köszönjük, hogy elküldte véleményét.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Köszönjük, hogy elküldte véleményét. Az egyik szorgalmas moderátorunk hamarosan közzéteszi.');
jr_define ('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Használja a Jomres felülvizsgálati funkciót?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatikusan közzéteszi a véleményeket?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Ha ezt Nem értékre állítja, akkor manuálisan kell közzétennie a véleményeket');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Beállítja a véleményeket tesztmódba?');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Általában az ingatlankezelők nem tekinthetik át az ingatlanokat. Ha engedélyezve van a tesztmód, akkor igen. Természetesen ez nem ideális éles környezetben.');
jr_define ('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Ez az összes ingatlan listája. Az ingatlan véleményeinek megtekintéséhez kattintson az adott ingatlanra. Innen közzéteheti vagy törölheti a véleményt.');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Publikálatlan vélemények száma');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Összes vélemény');
jr_define ('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Vélemény közzététele/közzététel visszavonása');
jr_define ('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Vélemény törlése');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW', 'Jelentés áttekintése');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Jelentések áttekintése');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Kérjük, írja be jelentését');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Lát valamit ebben az áttekintésben, ami kifogásolható vagy pontatlan? Jelentse, és mi megvizsgáljuk az Ön számára.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Mentés');
jr_define ('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Jelentést készítette');
jr_define ('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'A jelentéseket olyan felhasználók teszik közzé, akik nem értenek egyet a vélemény tartalmával. A jelentés eltávolításának egyetlen módja a vélemény törlése.');
jr_define ('_JOMRES_REVIEWS_RATING', 'Értékelések (1 = gyenge 10 = kiváló)');
jr_define ('_JOMRES_REVIEWS_RATING_1', 'Vendéglátás');
jr_define ('_JOMRES_REVIEWS_RATING_2', 'Hely');
jr_define ('_JOMRES_REVIEWS_RATING_3', 'Tisztaság');
jr_define ('_JOMRES_REVIEWS_RATING_4', 'Szállás');
jr_define ('_JOMRES_REVIEWS_RATING_5', 'Value for money');
jr_define ('_JOMRES_REVIEWS_RATING_6', 'Szolgáltatások');
jr_define ('_JOMRES_REVIEWS_REVIEWED_BY', 'Értékelte:');
jr_define ('_JOMRES_REVIEWS_CLICKTOHIDE', 'Vélemények elrejtése');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Foglalási űrlap megjelenítése a szálláshely adatlapján?');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Állítsa ezt Igen értékre a foglalási űrlap megjelenítéséhez a szálláshely adatlapján. Ha Nem értékre állítja, akkor a szálláshely adatlapján megjelenik egy link, amely a foglalási űrlapra mutat.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Az árak tartalmazzák az adót?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ha az ön árai tartalmazzák az adót, állítsa igenre, ha nem nemre.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extraák adója:');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'A hét napja mezők lehetővé teszik az ár beállítását egy adott hét napra, ha a hét napjára kattint, a hét minden napja erre az árfolyamra áll.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'A dátumválasztók és az árbevitel lehetővé teszik, hogy egy árat állítson be egy adott dátumtartományban. Válasszon ki egy kezdő és befejező dátumot, írjon be egy árat, és kattintson az Árak beállítása gombra.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Kezdő tartomány');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Végtartomány');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Értékelés');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Árak beállítása');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partnerek');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Szoba ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'vendég(ek). ');
jr_define ('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Így rendeljük hozzá vendégszámaikat a szobájukhoz. Ha módosítani szeretné ezt az elosztást, a foglalás után fel kell vennie a kapcsolatot a szállodával. A megbízások megváltoztatása esetén további díjak merülhetnek fel. ');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Még nem publikálta a szállást, így a vendégek nem, csak ön láthatja azt.');
// 4.5.5
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Alapértelmezett keresési eredmény sorrend');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Változtassa meg ezt a beállítást a keresési eredmények alapértelmezett megjelenítési sorrendjének megváltoztatásához.');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Keresési eredmények sorrendjének megjelenítése');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Szobalista stílusa');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'A foglalási űrlapon a klasszikus szobalistán egyedi szobákat ajánlhat a vendégeknek. A Szoba típus szerinti szobalistán viszont a vendég választhat, milyen típusú szobából hányra tart igényt (pl 2 x dupla ágyas).');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasszikus');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Szoba típusok');
jr_define ('_JOMRES_COM_CALENDAR_STARTDAY', 'Naptári hét kezdő napja, vasárnap vagy hétfő');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Csak az ingatlan vendégei értékelhetik?');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Állítsa ezt Igen értékre, ha csak azokra a felhasználókra szeretné korlátozni a véleményeket, akik már vendégként szerepeltek ebben a tulajdonban.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Szobánként');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Max. személy/szoba');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Max személy/foglalás');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Szobák száma');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Január');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Február');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Március');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Április');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Május');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Június');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Július');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Agusztus');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Szeptember');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Október');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'November');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'December');
jr_define ('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Állítsa ezt Igen értékre, hogy csökkentse az ingatlankezelők számára elérhető lehetőségek számát az Általános konfiguráció részben. Ez akkor hasznos, ha nem szeretné, hogy az ingatlankezelők túl sok beállítással játsszanak, hanem szerkesztheti a jomres_config .php az alapértelmezett tulajdonságopciók meghatározásához. ');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Kérjük, válasszon egy lehetőséget a foglaláshoz');
jr_define ('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Ha ez az opció Igen értékre van állítva, akkor a menedzserek láthatják a CMS -hez mellékelt HTML -szerkesztőt, és HTML -t írhatnak be a leírásba. Ez potenciális biztonsági kockázat, mivel lehetőség van arra, hogy nem kívánt HTML -t vagy Javascriptet vezessenek be. Ezenkívül, ha rosszul formázott HTML -t írnak be, akkor az oldal kialakítása veszélybe kerülhet. Jobb, ha ezt a lehetőséget hagyja a Nem értéken, ahol csak lehetséges. </p> <p> Ha minden kezelő megbízható felhasználó (pl. saját maga), akkor hagyhatja azt Igen értékre állítva, és módosíthatja a különböző HTML -címkéket, amelyeket be lehet írni a Beállítások szűrése fülre a webhely konfigurációjában. </p> <p> Ha viszont újra használja a Jomres -t portálként, ahol meghívja a felhasználókat, hogy adják hozzá és adminisztrálják saját tulajdonságaikat, akkor ez nem az ideális konfiguráció. Ehelyett hagyja ezt a beállítást Nem értékben. Ha nincs beállítva, akkor a kezelők látni fogják segítségével megadhatja az alapvető formázást, amelyet meg kell tennie elegendő a felhasználók többségének. </p> ");
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Teljes képernyő nézet');
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normál nézet');
jr_define ('_JOMRES_PARTNER_DISCOUNT', 'Partnerkedvezmény');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Felhasználó keresése');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Írjon be néhány karaktert a felhasználó kereséséhez. <br/> Amikor kiválaszt egy felhasználót, automatikusan hozzáadja őt partnerként, és a következő oldalra kerül, ahol ingatlanokat és kedvezményeket rendelhet a felhasználónak. ');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Létező partnerek');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Válasszon partnert a partner adminisztrációs oldalára.');
jr_define ('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Ingatlan keresése');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Írjon be néhány karaktert a tulajdon nevéből, és válasszon ki egy ingatlant. <br/> Amikor kiválasztja az ingatlant, hozzáadja a partner portfóliójához, de még nem élvez kedvezményeket, hogy maga állítsa be ezeket. ");
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuális ingatlanok');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Kattintson egy tulajdonságra a partner kedvezményes beállításainak szerkesztéséhez.");

jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Ezt a fiókot felfüggesztettük, jelenleg nem lehetséges a tulajdon (ok) adminisztrálása ezzel a fiókkal.');
jr_define ('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Kezelői fiók felfüggesztve');
jr_define ('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Kezelői fiók visszaállítása');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Felhívjuk figyelmét, hogy a tulajdonkezelői fiókját felfüggesztettük. A fiók visszaállításáig nem végezhet semmilyen ingatlankezelési funkciót.');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Felhívjuk figyelmét, hogy ingatlankezelői fiókja most aktív. Folytathatja a vagyonkezelési funkciók végrehajtását. Kérjük, jelentkezzen be fiókjába, és győződjön meg arról, hogy a megfelelő ingatlan (ok) közzétételre kerültek. Köszönöm.' );
jr_define ('_JOMCOMP_MYUSER_REMOVE', 'Kedvenc eltávolítása');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE', 'Foglalási adatok archívuma');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'A foglalási adatarchívum a foglalás megerősítésére szolgáló gomb megnyomása után rögzített foglalási információk nyers kiürítése. Vigye az egérmutatót egy dátum fölé a nyersadat -lerakat megtekintéséhez. Az információkat a XXX__jomres_booking_data_archive táblázat tárolja.');
jr_define ('_JOMRES_MY_ACCOUNT_EDIT', 'Személyes adatok szerkesztése');
jr_define ('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Felhasználó ingatlantulajdonosként való hozzáadásához először írja be a felhasználónév első néhány karakterét a fenti mezőbe. Ha megtalálta a megfelelő felhasználót, kattintson a névre a kiválasztásához, majd válassza ki, melyik tulajdonság ( s) kezelőnek kell lenniük. A felhasználónak <em> már felhasználónak kell lennie a CMS -ben </em> ');
jr_define ('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Meglévő kezelők');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Alszik');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'A keresés megjelenítése vendégszám szerinti legördülő menüben');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Csillag');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars legördülő menü');
jr_define ('_JOMRES_SEARCH_GUESTNUMBER', 'Alszik');
jr_define ('_JOMRES_SEARCH_STARS', 'Csillagok száma');
jr_define ('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Az ingatlanok száma');

jr_define ('_JOMRES_CONFIG_JQUERY', 'Betölti a Jomres jQuery könyvtárat?');
jr_define ('_JOMRES_CONFIG_JQUERY_DESC', 'Ezt NEM -re állíthatja, ha rendelkezik sablonnal, amely jquery -t használ. Ez megoldhatja a jquery ütközési problémákat egyes sablonokon, de nem mindegyiken.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Ennek az opciónak az engedélyezése lehetővé teszi a nyelvváltó megjelenítését az előlap teljes képernyős nézetében.');
jr_define ('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'A miniatűrök automatikusan jönnek létre a feltöltött képekhez.');

jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Kis miniatűrök maximális szélessége (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'A kisméretű indexképek a tulajdonságlistában, míg a közepes méretű indexképek a tulajdonság fejlécében használatosak.');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Kis miniatűrök maximális magassága (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Közepes bélyegképek maximális szélessége (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Közepes bélyegképek maximális magassága (px).');
jr_define ('_JOMRES_TOUCHTEMPLATES', 'Címkefordítások');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE', 'Használsz jutalékfunkciót?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Állítsa ezt Igen értékre, hogy megjelenjenek a kezelői jutalék számlák, amelyeket felvettek.');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'A kezelői foglalások jutalékos számlákat hoznak létre?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ha a menedzser foglalást végez, akkor ez létrehozza a jutalékos számla sort is?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Automatikusan felfüggeszti a kezelőket, ahol a számlák függőben vannak megjelölve?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Threashold automatikus felfüggesztése');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Ez a háromszoros nap azoknak a napoknak a száma, ameddig a menedzsernek számlát kell fizetnie, mielőtt felfüggesztik, és ingatlanjait közzéteszik.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'Nyelvi kontextus');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Ezzel az opcióval módosíthatja a webhely nyelvi kontextusát. Ez a funkció lehetővé teszi a Jomres számára, hogy az aktuális fókuszának megfelelő címkéket használjon, tehát ha a hangsúly Yachtközvetítőként működik, akkor a kontextus módosítása engedélyezze a Jomres számára, hogy más nyelvű fájlból származó címkéket mutasson be. Ha például a kontextust "Yacht Brokerage" értékre állítja, akkor a Jomres először megtalálja az aktuális nyelvet, majd a /'.JOMRES_ROOT_DIRECTORY.'/languages ​​könyvtárban keres egy alkönyvtárat "yachtbrokerage". Ha a fájl létezik az aktuális nyelvhez, akkor ezt a fájlt fogja használni. Ha nem, akkor a Jomres angol nyelvű fájlt keres ugyanabban a könyvtárban. Ha ez nem található, a Jomres a nyelvfájl a jelenleg kiválasztott nyelvhez a /'.JOMRES_ROOT_DIRECTORY.'/languages ​​könyvtárban. ');

jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Speciális webhelykonfiguráció');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Állítsa ezt az opciót Igen -re, ha a speciális webhelykonfigurációs beállításokat kívánja használni. Ha még csak a Jomres programmal kezdi, akkor azt javasoljuk, hogy ezt most hagyja a Nem értékre, mivel az alapértelmezett telepítés elegendő ahhoz, hogy elkezdhesse, ehelyett hozzá kell adnia a Jomres -t a főmenübe, és bejelentkeznie a kezelőfelületre "admin" -ként, és el kell kezdenie a tulajdon (ok) konfigurálását. Felhívjuk figyelmét, hogy előfordulhat, hogy számos speciális beállítás nem érhető el, ha nem t telepítse a megfelelő beépülő modul (oka) t. Az ingyenes, központi rendszer felhasználói nem fogják tudni teljes mértékben kihasználni az általuk engedélyezett funkciókat. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Betölti a Jomres jQuery UI könyvtárat?');
jr_define ('_JOMRES_SORTORDER_PRICE_DESC', 'Ár (legmagasabb első)');
jr_define ('_JOMRES_SORTORDER_PRICE_ASC', 'Ár (először a legalacsonyabb)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Az ár összefoglalás és becslés éjszakánként, hetenként vagy hónaponként legyen számolva?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Éjszakánként');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Hetenként');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Hónaponként');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Vendégenként');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ');
// 4.7.7jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Hogyan működik a személyek keresési opciója ? ');
//jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Minden keresési modult érint . A vendégszám keresési funkció használatakor, ha a keresési szolgáltatás olyan ingatlanokat keres, akik tarifái támogatják a vendégszámot, és megegyeznek a választott számmal, pontosan megegyeznek a választott számmal, vagy a választott és nagyobb szám ? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Kérem várjon, a rendelése feldolgozás alatt van. Nemsokára át lesz irányítva a PayPal fizetéskezelő oldalra.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Ha nem kerül automatikusan átirányításra 5 másodpercen benül...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Kattintson ide');
// 4.7.8jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'A foglalás érvényes:');
//jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'A foglalás érvényes');
//jr_define ('_JRPORTAL_COUPONS_GUESTNAME', 'Vendég neve');
//jr_define ('_JRPORTAL_COUPONS_DESC_478', "Kedvezménykódok generálhatók és továbbadhatók a vendégeknek a foglalás ösztönzésére. <br/>
//Érvényes dátum és dátum azokra a dátumokra vonatkozik, amelyeken a foglalás végrehajtható, míg a dátumtól kezdve érvényes foglalás azokra a dátumokra vonatkozik, amelyeket a foglalásnak le kell fednie, hogy a kupon érvényes legyen. Ha a foglalás ezen az időszakon kívül esik, akkor az időszakon kívüli napokra a normál árak érvényesek. <br/>
//Ha azt szeretné, hogy a foglalás csak egy bizonyos vendég számára legyen elérhető, válassza ki a vendég nevét a legördülő menüből, hogy a kupont csak erre a vendégre korlátozza. ");
//jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'A kuponnal ezt a foglalást kedvezményes áron');
//jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'to');
//jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Állítsa ezt Nem értékre a Jquery UI javascript és CSS fájlok betöltésének letiltásához . ');
//jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Betölti a Jomres jQuery UI CSS könyvtárat ? ');
//jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Állítsa ezt Nem értékre, ha csak a jquery felhasználói felület CSS fájlját szeretné letiltani . ');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Végösszeg adóval');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property');
// v5.2jr_define ('_JOMRES_CONVERSION_TITLE', 'Konverziós funkció használata');
//jr_define ('_JOMRES_CONVERSION_TITLE_DESC', "Használja a Jomres online konverziós funkciót. Ez egy konverziós legördülő menüt kínál a frontend felhasználóknak, ahol kiválaszthatják azt a pénznemet, amelyben látni akarják az árakat. ár, amelyet zárójelben az ingatlan "natív" ára követ. ");
//jr_define ('_JOMRES_CONVERSION_DISCLAIMER', 'Minden tőlünk telhetőt megtettünk annak érdekében, hogy a lehető legpontosabb és időszerű árfolyamokat kapjuk . Online valutaátváltási szolgáltatásunk csak tájékoztatási célú szolgáltatás, és nem pontos számadatokat szolgál .) nem garantáljuk az árfolyamok pontosságát . E funkció használatával úgy kell tekinteni, hogy beleegyezett abba, hogy az árfolyamátváltási funkcióra való bármilyen támaszkodás vagy annak használata kizárólag a saját felelősségére történik . ");
//5.2.1
//5.3.1
//jr_define ('_JOMRES_CURRENCYCONVERSION_TAB', 'Valutaátváltás/pénznemkódok');
//jr_define ('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP észlelési API kulcs');
//jr_define ('_JOMRES_IP_DETECTION_API_KEY_DESC', 'A pénznemkód legördülő menüjének automatikus beállításához a Jomres képes az IPinfoDB nevű ingyenes szolgáltatás használatával felderíteni a látogató országát, azonban regisztrálnia kell egy API kulcsot a <a href = "http: //ipinfodb.com/register.php target="_blank"> IPinfoDB </a> először. ');
//jr_define ('_JOMRES_DEBUGGING_TAB', 'Hibakeresés');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Szállás adó nélkül');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Szállás adóval ');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Szállásfoglalás');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Vissza a szálláshely leírásához');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatikusan kiválasztva?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Egyenleg (előleg befizetése után)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.');
jr_define ('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Utolsó foglalás');
jr_define ('_JOMRES_DATEPERIOD_SECOND', 'második');
jr_define ('_JOMRES_DATEPERIOD_MINUTE', 'perc');
jr_define ('_JOMRES_DATEPERIOD_HOUR', 'óra');
jr_define ('_JOMRES_DATEPERIOD_DAY', 'nap');
jr_define ('_JOMRES_DATEPERIOD_WEEK', 'hét');
jr_define ('_JOMRES_DATEPERIOD_MONTH', 'hónap');
jr_define ('_JOMRES_DATEPERIOD_YEAR', 'év');
jr_define ('_JOMRES_DATEPERIOD_DECADE', 'évtized');
jr_define ('_JOMRES_DATEPERIOD_S', 's');
jr_define ('_JOMRES_DATEPERIOD_AGO', 'ezelőtt');
jr_define ('_JOMRES_DATEPERIOD_FROMNOW', 'mostantól');
jr_define ('_JOMRES_WHOLEDAY_TITLE', 'A foglalások egész napra szólnak?');
jr_define ('_JOMRES_WHOLEDAY_DESC', 'Alapértelmezés szerint a rendszer éjjelre lefoglalja az erőforrásokat, tehát január elsejétől' .date ('Y', strtotime ('jövő év')). ' - január 2.' .date ("Y", strtotime ("jövő év")). "csak egy éjszakára vonatkozik. Ha azonban ezt az opciót Igen értékre állítja, akkor a foglalás egész napokra vonatkozik, így az ezeken a napokon történő foglalás mindkettőt lefedi. nap, és az ügyfelet két napig számlázzák. ");
jr_define ('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Naponta');
jr_define ('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Személyenként naponta');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Vissza');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'nap (ok)');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Helytelen a visszatérési dátum');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'A foglalás túl rövid. Legalább ennyi napnak kell eltelnie az átvétel és a visszaküldés dátuma között:');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'A foglalási űrlap minimális intervalluma az átvétel és az átadási dátum között. Az 1 -es intervallum azt jelenti, hogy az átvételi és visszaküldési dátumok ugyanazon a napon állíthatók be, de ez még mindig a minimumtól függ intervallum, amelyet a foglalási motor automatikusan kiszámít, mivel ellenőrzi a foglalási időszakra érvényes tarifákat. ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Az árösszefoglalót és a becsléseket napi/heti/havi áron kell megadni?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Naponta');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Napok az átvétel dátuma előtt');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'A minimális napok száma, aminek le kell telnie a "ma" -tól a felvétel dátuma előtt.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Állítsa ezt igenre, ha korlátozni szeretné az előzetes foglalásokat (a következő mezőben állítsa be a korlátot a napokban). Ha ezt igenre állítja, akkor ha a felhasználó több n -nél próbál foglalni nappal korábban, akkor az átvétel dátuma visszaáll a mai dátumra ');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Mutasd a visszatérési dátumot?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Állítsa ezt Nem értékre, ha nem szeretné megjeleníteni a visszatérési dátum beviteli mezőjét. Csak akkor használja ezt, ha tudja, mit csinál, mivel a foglalások visszatérési dátuma mindig a napra lesz állítva az átvétel dátuma után. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Ha ezt Igen értékre állítja, akkor a foglalások rögzített időtartamra kerülnek fogadásra. Ha ezt Nem értékre állítja be, akkor győződjön meg arról, hogy a "meghatározott átvételi nap" nem Igen értékű (hacsak nem kifejezetten kényszeríteni akarja az embereket, hogy vegyenek fel a hét egy bizonyos napján) különben nem sok linket fog kapni az elérhetőségi naptárban. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Előre meghatározott átvételi nap');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Csak azoknál a webhelyeknél, amelyek határozott időtartamú foglalásokat kínálnak. Válassza ki a hét napját, amelyen át kell venni az átvételt.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fix átvételi nap');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Rögzített átvételi dátumok:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Rögzített átvételi dátumok kiválasztásakor a dátumok legördülő listában megjeleníthető dátumok száma. Ne feledje, hogy a dátumok listája nem tartalmaz dátumokat, ha a foglalás nem lehetséges az előzetes foglalások miatt, és hogy a lista valójában kétszer olyan hosszú lesz, mint a kiválasztott szám, mert hasonló számú történelmi dátummal fog rendelkezni (ahol elérhető). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Személyenként, naponta');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Válassza az Igen lehetőséget, ha személyenként és naponta kívánja felszámítani a díjat. Ha nem, akkor a költségeket erőforrásonként számítják ki naponta');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'A változó letétek lehetővé teszik annak meghatározását, hogy a teljes összeget felszámítsák -e, ha a foglalás átvételi dátuma N napon belül van. A beállítás engedélyezéséhez állítsa ezt az opciót Igen értékre , és írja be az alábbi napok számát, így például ha az átvételi nap 60 napon belül van, akkor a felszámított letéti összeg a teljes összeg lesz, ellenkező esetben az összeg a fent beállított befizetési lehetőségeken alapul. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'A legtöbb vállalkozás újra kiszámítja az erőforrás -árakat a kívánt típusú erőforrások adott időpontban rendelkezésre álló száma alapján. Ez lehetővé teszi számukra, hogy kedvezményeket adhassanak egy olyan erőforrás/üzleti típus számára, amely nem elfoglalt egy adott időszak, azzal a céllal, hogy olyan vállalkozásokat vonzzon, amelyek egyébként elmaradhatnak. <br/> A beépülő modul engedélyezése és konfigurálása lehetővé teszi, hogy a kiválasztott típus erőforrásainak száma alapján az adott napon állítható árakat kínáljon. <br/> A napok küszöbértéke határozza meg, hogy hány napig kell a felvételi dátumnak lennie, mielőtt ez a szolgáltatás módosítja az erőforrások árait, majd a százalékos beállítások lehetővé teszik az adott kedvezmény alkalmazása előtt rendelkezésre álló erőforrások százalékos arányának beállítását Megjegyezzük azonban, hogy ha több forrás van lefoglalva, akkor a jelenlegi kedvezmény minden erőforrásra érvényes lesz, és nem csökken, ha több erőforrást választanak ki. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Küszöbérték (napok száma az átvétel dátuma és ma között)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Átvétel függőben');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Átvétel ma');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Felvette');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Visszatér ma');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Késedelmes visszatérés');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Nem vette fel');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Napok');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Foglalt foglalás megjelölése.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Foglalás visszajelzése.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Foglalás megjelölése felvéve');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Foglalás visszajelzése');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Napi költség:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Napok száma:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Foglalás végösszegének felülírása');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Felülírás elmentése');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'E -mailt küld az új felhasználóknak a bejelentkezési adataikról?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Ha az Új felhasználó létrehozása beállítás Igen értékre van állítva, akkor ezt az opciót Nem értékre állíthatja be, hogy ne küldje el e -mailben a bejelentkezési adatait a felhasználó létrehozása után. Ez hasznos lehet, ha automatikusan például új felhasználók hozzáadása a levelezőlistához, és nem akarják, hogy a felhasználók ténylegesen bejelentkezzenek. ');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Mutassa az adóbevallást a foglalási űrlap összesítésében?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Annak megakadályozásával, hogy a foglalási űrlap megjelenítse az összesített összeg adóadat -mezőit, ha ezt a lehetőséget nemre állítja');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Törlés Threashold');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Bejelentkezve a regisztrált vendégek lemondhatják saját foglalásaikat. Itt állíthatja be a threashold, napokban, amikor a foglalás nem törölhető az érkezés dátuma előtt meghatározott számú nap elteltével.');
jr_define ('_JOMRES_EDIT_PROFILE', 'Profil szerkesztése');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Tulajdonság típusú kapcsolat');
jr_define ('_JOMRES_IMAGE', 'Kép');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'Kattintson egy levélre az összes olyan vállalkozás megjelenítéséhez, amely az első karakterrel rendelkezik. Miután megvan a tulajdonságok listája, jutalékokat rendelhet ezekhez a tulajdonságokhoz, vagy kattintson a "szerkesztés" ikonra a vállalkozás megtekintéséhez \' s statisztika. ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'Adókulcs szerkesztése');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Egyéni mező szerkesztése');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'Licencszerver jelszava');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'Licencszerver felhasználóneve');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Ha rendelkezik felhasználónévvel és jelszóval a licencszerveren, kérjük, adja meg itt. Ez segít elérni a jogosult bővítményeket. Ha érvényes támogatási kulcsot adott meg a fenti mezőben, akkor nem szükséges itt megadni a felhasználónevet/jelszót. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Ez a Jomres verzió:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Legújabb Jomres verzió');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Figyelmeztetés: A Jomres új verziója érhető el, javasoljuk, hogy frissítse a lehető leghamarabb.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'Üdvözöljük a Jomres -ban! A Core rendszer ingyenes, de bővítmények telepítésével fejleszthető. A bővítmények eléréséhez letöltési és támogatási licencre van szükség. Ha Jomres Starter -t szeretne vásárolni , Üzleti vagy vállalati licenc, <a href="http://www.jomres.net/prices" target="_blank"> kérjük, látogasson el webhelyünkre </a> a frissítés módjáról. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'Ez a rendszer ideális minden esetre, legyen az egyszerű foglalási űrlap egyetlen ingatlanhoz, akár egy olyan webhelyhez, amely több felhasználóval rendelkezik, több nyelven, több tulajdonsággal. Lásd a "Súgót" szakaszban, beleértve az "Első lépések" oldalt, amely végigvezeti Önt az első lépéseken. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktív tulajdonság');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'E -mail beállítások');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Állítsa ezt az opciót Igen-re ezen alternatív SMTP-beállítások használatához. Úgy tűnik, hogy egyre több webtárhely blokkolja a PHP levelezési funkciót, így dönthet úgy, hogy felülmúlja a Jomres által a gazdától kapott levelezési beállításokat CMS (jellemzően Joomla), és itt használhatja az Ön által választott beállításokat. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternatív gazdagép');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Változtassa meg ezt smtp levelezőszerverére');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternatív port');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Változtassa meg ezt smtp portjára');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternatív protokoll');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Az smtp szerver beállításaitól függően ezt üresen kell hagynia, vagy be kell írnia az \"ssl\"vagy\" tls \" parancsot. Ha nem tudja, kérdezze meg az SMTP szolgáltatótól.");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Hitelesítés használata');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Ha az SMTP -kiszolgáló megköveteli az ügyfelek bejelentkezését, állítsa ezt Igen értékre. Ekkor a felhasználónév és a jelszó kerül felhasználásra.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternatív felhasználónév');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternatív jelszó');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define ('_JOMRES_QUICK_INFO', 'Gyors információ');
jr_define ('_JOMRES_MENU_SHOW', 'Show');
jr_define ('_JOMRES_MENU_HIDE', 'Elrejtés');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Alapértelmezett');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Bárki');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Regisztrált');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Menedzser');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Senki');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Menühozzáférés -szabályozás');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'Ez a funkció lehetővé teszi annak vezérlését, hogy ki láthatja a beépülő modult a főmenüben. Általában a 00009 felhasználói beállításokat láthatják a webhely látogatói vagy nem regisztráltak, a 00010 opció általában a Recepció típusú tevékenységekre vonatkozik. napi szinten használják, míg a 00011 opciót egy ingatlan beállítására és konfigurálására használják, de ritkábban érik el. ');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepciós');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Teljes hozzáférés -ellenőrzés');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Állítsa ezt az opciót Igen értékre a teljes hozzáférés -vezérlési funkció engedélyezéséhez, majd keresse fel a Rendszerkarbantartás alatt található Hozzáférés -vezérlés opciót a hozzáférés -vezérlés konfigurálásához.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', 'Megjegyezzük azonban, hogy ezek a beállítások nem szabályozzák a mögöttes parancsfájlokat, amelyekhez csatlakoznak, így például ha a <i> 00009user_option_03_search </i> értéket állítja be olyan felhasználónak, aki ismeri a Jomres -t hívja a j06000search.class.php fájlt, és írja be a http://www.domain.com/index.php?option=com_jomres&task=search címet a böngésző címsorába. Ez szándékos, mivel ez a Menühozzáférés -vezérlő egyszerűen szabályozza a Jomres főmenü. Ha szigorúbb ellenőrzésre van szüksége, akkor állítsa a Site Config -> Full Access Control opciót Igen értékre, és keresse fel újra a Menühozzáférés -vezérlés opciót. ');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Teljes hozzáférés -ellenőrzés');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Ez a funkció csak haladó felhasználóknak szól. Ha nem tudja, hogy mire való, és nincs konkrét oka a használatára, akkor térjen vissza a Webhely konfigurációhoz, és állítsa be a teljes hozzáférést Vezérlő opció: Nem </strong> <br/>
Ezzel a funkcióval szabályozhatja, hogy ki melyik minikomponenshez férhet hozzá (néhány kivétellel, amelyek keményen vannak kódolva a rendszerben). Ha a szkript neve melletti hozzáférési szint alapértelmezett, akkor a Teljes hozzáférés -szabályozás Igen értékre állítva <strong> bárki </strong> hozzáférhet olyan szkriptekhez, amelyekhez nem férhet hozzá, ezért, ha ezt szeretné használni funkcióhoz KELL állítani a hozzáférés -szabályozási szintet <strong> minden </strong> itt felsorolt ​​Jomres -minikomponenshez. Ha nem tudja, mit tesznek ezek a minikomponensek, akkor határozottan javasoljuk, hogy egyáltalán ne használja ezt a funkciót. <br/>
A Jomres -ban a hozzáférési szintek piramist követnek, így a szuper ingatlankezelők nagyobbak, mint a menedzserek. Röviden: Super Manager> Menedzser> Recepciós> Regisztrált> Nem regisztrált. Tehát, ha egy regisztrált felhasználó hozzáfér egy minikomponenshez, akkor a recepciósok, a menedzserek és a szupermenedzserek is. <br/>
Ne feledje, hogy a rendszergazdai terület minikomponenseit nem tudja vezérelni. A rendszergazdai területen bárki megbízható felhasználónak minősül, mivel nem szabad megakadályozni, hogy hozzáférjen bármely szkripthez (különösen ehhez).
");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Figyelmeztetés! A teljes hozzáférés -vezérlés engedélyezve van, de számoltuk a hozzáférés -vezérlési beállításokat, és összehasonlítottuk a vezérelni kívánt összetevők számával, és a kettő nem egyezik, ezért előfordulhat, hogy nem ellenőrzött szkriptek. Ez biztonsági probléma lehet, és arra kéri, hogy azonnal oldja meg ezt a hozzáférés -felügyeleti szolgáltatás felkeresésével és a megfelelő szintek alkalmazásának ellenőrzésével. ');
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Felhasználók, akik adminisztrátori jogokkal rendelkeznek ehhez a tulajdonhoz');
jr_define ('_JOMRES_DEBUGGING_YOUREMAIL', 'Az Ön e -mail címe');
jr_define ('_JOMRES_EXTRAS_MODELS_MODEL', 'Modell');
jr_define ('_JOMRES_EXTRAS_MODELS_PARAMS', 'Paraméterek');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'Erő');
jr_define ('_JOMRES_METATITLE', 'Meta title');
jr_define ('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define ('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Tulajdon hozzáadása: 2/2. lépés');
jr_define ('_JOMRES_CART_TITLE', 'Javasolt foglalásaim');
jr_define ('_JOMRES_CART_INFO', 'Megjegyzés: ezeket a foglalásokat még nem mentették el. Ha kijelentkezik, vagy a munkamenet lejár, elvesznek. Ne felejtse el megerősíteni a foglalásait!');
jr_define ('_JOMRES_CART_CONFIRM_BOOKINGS', 'Foglalás megerősítése');
jr_define ('_JOMRES_CART_OR', 'vagy');
jr_define ('_JOMRES_CART_SAVEFORLATER', 'Mentés későbbre');
jr_define ('_JOMRES_CART_NOBOOKINGS_SAVED', 'Még nincsenek mentett foglalásai.');
jr_define ('_JOMRES_CART_VIEWCART', 'Kosár megtekintése');
jr_define ('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Nyelvfájl -alkönyvtár');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Alapértelmezett szélességi kezdőpont');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Alapértelmezett hosszúsági kezdőpont');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'A Google térképen a tulajdonságszerkesztő oldalon, mielőtt a jelölőt elmozdították, mi legyen az alapértelmezett szélességi/hosszúsági kezdőpont?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'Melyik címről küldött e -mailek?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "Hagyja ezt az opciót üresen a letiltásához. A Jomres a szálloda e -mail címét használja, amikor e -maileket küld a vendégeknek, azonban az e -mail szolgáltatása NEM engedélyezi az önkényes címekről érkező e -maileket (azaz csak a egy engedélyezett cím). Ha ez a helyzet, akkor ezt a bemenetet használva adhat meg egy címet, amely az összes rendszer e -mailjének FROM címeként fog megjelenni. ");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Lista nézet ');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Fotó nézet ');
jr_define('_JOMRES_COMPARE', 'Összehasonlítás ');
jr_define ('_JOMRES_REMOVE', 'Eltávolítás');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'Vissza a keresési eredményekhez');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Listához adás');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Eltávolítás a listáról');
jr_define('_JOMRES_VIEWSHORTLIST', 'Saját lista nézet ');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'Fontos: Cookie Policy');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'Cookie -kat használunk annak érdekében, hogy webhelyünk releváns és könnyen használható legyen.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'További információ ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', "Az uniós jogszabályok előírják, hogy minden weboldalnak egyértelműen meg kell határoznia, hogy sütiket használnak -e, és azok célját.");
jr_define ('_JOMRES_COOKIEPOLICY_5', "Ennek az oldalnak a kereső- és foglalási motorjának képesnek kell lennie arra, hogy emlékezzen az Ön által választott lehetőségekre, hogy a lehető legjobban működjön. Ehhez meg kell tárolnia a kis fájlhoz társított információkat, \"cookie\", amely egyedileg azonosítja az Ön böngészőjét, és ahhoz, hogy ezt megtehessük, el kell fogadnia, hogy képesek vagyunk rá. Ha nem fogadja el ezt a cookie -szabályzatot, akkor szigorúan korlátozni fogja az ezen a webhelyen elvégzendő tevékenységeket. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'Igen, elfogadom a cookie -k ilyen módon történő használatát.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'A letét szükséges az első éjszaka költsége?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Az árak éjszakánként kerülnek kiszámításra. Szeretné, hogy a letét egy éjszaka díja legyen? Ha igen, figyelmen kívül hagyhatja a következő lehetőségeket.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "Nem adott hozzá elemeket a kedvencekhez.");
jr_define ('_JOMRES_SAFEMODE', 'Engedélyezi a biztonságos módot?');
jr_define ('_JOMRES_SAFEMODE_DESC', "Állítsa ezt Igen értékre a biztonságos mód aktiválásához. Ez letiltja az összes bővítményt, így a Jomres csak az alapfunkcióit fogja használni.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define ('COMMON_NEXT', 'Tovább');
jr_define ('COMMON_CANCEL', 'Mégse');
jr_define ('COMMON_SUBMIT', 'Küldés');
jr_define ('COMMON_SAVE', 'Mentés');
jr_define ('COMMON_DELETE', 'Törlés');
jr_define ('COMMON_RETURN', 'Return');
jr_define ('COMMON_CLOSE', 'Bezárás');
jr_define ('COMMON_BACK', 'Vissza');
jr_define ('COMMON_HOME', 'Kezdőlap');
jr_define ('COMMON_NEW', 'Új');
jr_define ('COMMON_SEND', 'Küldés');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'A Captcha annak biztosítására szolgál, hogy a webes űrlapokat használó ügyfél ember legyen, és megakadályozza, hogy az ingatlankezelők "spammeljenek" a robotok által az interneten. A Kapcsolatfelvételi űrlap használatához regisztrálnia kell a <a href="http://www.google.com/recaptcha" target="_blank"> Google reCaptcha </a> kezdőlapján, és be kell állítania a domainjét a nyilvános és a privát kulcsok fogadására. megkapta ezeket a kulcsokat, kérjük, adja meg őket alább. A reCapcha szolgáltatás a Google ingyenes szolgáltatása. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'Nyilvános kulcs');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'Privát kulcs');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'A kétágyas szobafoglalás veszélyének elkerülése érdekében a Jomres egy zárfájl segítségével megakadályozza, hogy egy szoba felkerüljön a foglalási űrlapon elérhető szobák listájára, ha valaki más már hozzáadta a szobát a saját szobájához ugyanazon dátumokra . Alapértelmezés szerint ez a zár 3600 másodperc vagy egy óra múlva lejár. A szám megváltoztatásával megváltoztathatja a zár lejáratához szükséges időt. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "Engedélyezi a Jomres Bootstrap sablonokat és funkciókat?");
jr_define ('COMMON_ACTION', 'Action');
jr_define ('COMMON_VIEW', 'Nézet');
jr_define ('BACKTOTOP', 'Vissza az elejére');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Gyenge');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Erős');
jr_define ('_JOMRES_INPUTFILTERING', 'Bemeneti szűrés');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Bemeneti szűrési szint');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "A rendszerbe bevitt legtöbb adatot először a html -címkék eltávolításával, majd a PHPs változó szűrési funkciójával fertőtlenítik, hogy az adatok biztonságossá váljanak, mielőtt bekerülnek az adatbázisba. Érdemes engedélyezni bizonyos bemeneteket (például a szövegbevitelt a tulajdonság részletei oldalon), hogy HTML -t tartalmazzon. Kétféle szűrési szintet használhat a bemenet szűrésére, gyenge vagy erős. Csak akkor használja a Gyenge beállítást, ha a felhasználó (k) az adatok önmagadban bíznak, pl. rendszergazdák, különben hagyd az Erős értéket. Ha erős (ajánlott) értékre van állítva, akkor a következő \"HTML -tisztító engedélyezett címkék\" beállítás szerkesztésével megadhatod, hogy mely címkéket engedélyezd. ") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Engedélyezett bemeneti címkék');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Szerkesztheti azokat a címkéket, amelyeket a html -tisztító a szűrőrendszeren keresztül engedélyezni fog. Az alapértelmezett érték \" p, b, strong, a [href], i \"(azaz bekezdés, félkövér, erős, linkek és dőlt betűk) Ha többet szeretne megtudni az engedélyezett címkékről, olvassa el a HTML -tisztító dokumentációját a <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a> címen. Bár módosíthatja ezt a beállítást, javasoljuk, hogy hagyja alapértelmezettként. ");
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Engedélyezett bemenetek');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Meghatározhatja, hogy mely űrlapbemenetek engedélyezzék a html -t az opció szerkesztésével, a listához hozzáadott minden bemenet a HTML -tisztítón keresztül lesz értelmezve, ahelyett, hogy minden html -t le kellene törölni. Alapértelmezett: 'property_description property_checkin_times property_arearea property_policies_disclaimers '. További bemenetek hozzáadása a nevekből szóközzel elválasztva. ");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Tulajdon adatai lapokon?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Ezt az opciót úgy állíthatja be, hogy a tulajdonság részleteit a lapokon jelenítse meg. Állítsa a nem értékre, ha fülek nélkül szeretné megjeleníteni őket.');
jr_define ('COMMON_PRINT', 'Nyomtatás');
jr_define ('COMMON_EDIT', 'Szerkesztés');
jr_define ('COMMON_COPY', 'Másolás');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'A Jomres -t úgy tervezték, hogy mind a Bootstrap 2, mind a Bootstrap 3 keretek között működjön. Miután telepítette a BS2 vagy BS3 témát vagy sablont, állítsa ezt a kapcsolót, hogy kiválassza, melyik Bootstrap íz közül szeretné a Jomres -t működni. val vel.');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Jomres Bootstrap sablonokat használ az előlapon?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Íme néhány alternatíva, amelyeket érdemes megfontolni.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "A vendég országának automatikus észlelése?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "A rendszer megpróbálja automatikusan észlelni a vendég országát, ha korábban nem foglaltak le. Ezt a beállítást nemre állíthatja, és megadhatja azt az országot, amelyben a foglalási űrlapon szeretne megjelenni. a következő lehetőség. ");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'About Jomres');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Első lépések');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Hozzáférés -szabályozás');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'fejlesztői eszközök');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'nyelvek');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'jövedelemszerzés');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'webhelyszerkezet');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Kézikönyv (online)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Saját fiók (online)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portálfunkciók');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Bővítménykezelő');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integráció');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'jelentések/statisztikák');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'Frissítések');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'fizetési módok');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Alapértelmezett tarifa');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Ez csak az új tarifákra vonatkozik');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Megmutatandó évek');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Meghatározza a tarifatípus szerkesztésekor megjelenítendő évek számát');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'számlák');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'fiókadatok');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Bejelentkezés');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Kijelentkezés');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'keresés');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'műszerfal');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'tartalék');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'számlák');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'beállítások');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'egyéb');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'Ország szerkesztése');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'Ország azonosítója');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Országkód');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Ország neve');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'Régió szerkesztése');
jr_define ('_JOMRES_EDIT_REGION_ID', 'Régióazonosító');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Országkód');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'Régió neve');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'Országok listája');
jr_define ('_JOMRES_COM_LISTREGIONS', 'Régiók listája');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'Definíciók exportálása');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Ez a funkció lehetővé teszi a Nyelvi fordítás funkcióval készített fordítások exportálását. Szövegmezőt fog felépíteni az új nyelvi fájl létrehozásához szükséges összes adatgal, mindössze annyit kell tennie, hogy másolja és illessze be ezt a kimenetet egy új nyelvi fájlba, amelyet új Jomres -alapú szerverre helyezhet, vagy ha vissza szeretne járulni a Jomres közösséghez. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Locales fordítása');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'A lang fájl karakterláncok fordítása');
jr_define ('_JOMRES_COM_NOTAMANAGER', "Hiba, a bejelentkezett felhasználó nem kiemelt menedzser a Jomres -en belül, nem fogja tudni használni ezt a funkciót, amíg nem használja a Tulajdonkezelők szolgáltatást, hogy kezelővé váljon, és szuper menedzser. Ez egy biztonsági szolgáltatás. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'Tulajdonságlista alapértelmezett elrendezése');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'Maradj legalább');
jr_define ('_JOMRES_NIGHTSFOR', 'éjszakák');
jr_define ('_JOMRES_AGENT', 'Ügynök');
jr_define ('_JOMRES_AGENT_DETAILS', 'Ügynök adatai');
jr_define ('_JOMRES_AGENT_LISTINGS', "Ügynök adatai");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'Új tulajdonságok automatikus jóváhagyása');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'Ha ezt a lehetőséget nemre állítja, akkor manuálisan kell jóváhagynia az új ingatlanokat. Amíg egy tulajdont nem hagytak jóvá, azt egy menedzser/szuper ingatlankezelő nem teheti közzé.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'Jóváhagyások');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Ezt a tulajdonságot még nem hagyták jóvá. Miután jóváhagyták, közzéteheti azt.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Sajnáljuk, nem teheti közzé ezt a tulajdont, mivel még nem hagyták jóvá.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Egy új tulajdonság jóváhagyást igényel');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Egy olyan tulajdonság került a rendszerbe, amely jóváhagyását igényli. Kattintson a linkre a jóváhagyásra váró ingatlanok megtekintéséhez:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Az ingatlanodat jóváhagytuk');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Gratulálunk, a tulajdonát jóváhagytuk, kérjük, kattintson a következő linkre az ingatlan kezelőpaneljének megtekintéséhez:");
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'A régiónevek fordíthatók');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Hacsak nem egy nagyon gyors kiszolgálót használ, javasoljuk, hogy hagyja ezt a beállítást Nem. A régiónevek nagy száma miatt a régiónév fordítása sok memóriát foglal el, ami lassíthatja a keresési eredményeket le.");
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'A vendég lefoglalt.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sajnáljuk, ez az e -mail cím már használatban van. Ha ez az Ön e -mail címe, kérjük, győződjön meg róla, hogy bejelentkezett, mielőtt foglalni próbálna.');
jr_define ('JOMRES_TAPTOCALL', 'Koppintson a híváshoz');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'Új vélemény a\' számára');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'Új véleményt hagytunk a\' számára');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'Új jelentés');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'A felülvizsgálatról beszámoltak');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'Végösszeg (adó nélkül):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'Végösszeg (adóval):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Összes adó:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Írja be a két szót:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Írja be, amit hall:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'A hangsáv újrajátszása');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'A szám letöltése MP3 formátumban');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Vizuális mód');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio mód');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'Frissítés');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'Súgó');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sajnáljuk, ez helytelen volt. Kérjük, próbálja újra.');
jr_define ('JOMRES_GOOGLE_MAPS', 'Google térképbeállítások');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Használ időjárási réteget?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Használsz tömegközlekedési réteget?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'Engedélyezi a Gmap érdekes helyeket (beleértve a versenytársakat is)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Szkennelje be ezt a kódot a telefonjába, hogy eljusson hozzánk.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Úgy tűnik, hogy a megadott áfa -szám nem helyes. Valami ilyesmi kell: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Érvénytelen áfa -szám. Kérjük, ellenőrizze az áfaszám érvényességét az Europa VAT Number validation webservice -ban (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Gratulálunk. Sikerült ellenőrizni az áfa -számát.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'Adószabályok listája');
jr_define ('_JOMRES_TAX_RULE', 'Adózási szabály');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Az adószabályokat különböző adózási szabályok megállapítására használják a különböző régiókra. Ezek az adózási szabályok hatással vannak a foglalást végző személyre, ha regisztrált, bejelentkezett és szerkesztette fiókját a "Fiókom szerkesztése" oldal használatával . Ezeknek a szabályoknak az a célja, hogy azokon a területeken foglaljanak helyet foglalók, akik héa -mentesek, és előfordulhat, hogy nem kell sok szabályt létrehoznia, ha egyáltalán van ilyen. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Importadókulcsok');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'Ha kívánjuk, importálhatjuk az EU -ra vonatkozó adókulcsokat az Ön számára. Megjegyzés: ha használja ezt a funkciót, akkor az összes meglévő adókulcs eltávolításra kerül.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Adószabály szerkesztése');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'Az ingatlan áfaszáma.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Kérjük, adja meg az ingatlan áfa -számát.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'érvényesített áfa -szám');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'ÁFA -szám nincs érvényesítve');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Az itt megadott üzleti adatokat felhasználjuk a jutalék- és előfizetési számlákon.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Úgy tűnik, még nem töltötte ki fiókadatait. Ahhoz, hogy felsorolhassa ingatlanát a webhelyen, be kell fejeznie fiókja adatait, mielőtt tovább tudunk lépni.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Termelés vagy fejlesztés?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Ha ezt az opciót Fejlesztésre állítja, akkor engedélyezzük a hibajelentést, ellenkező esetben, ha a Termelés beállítása ki lesz kapcsolva. Ha ez egy élő szerver, javasoljuk, hogy ezt az opciót állítsa "termelési" értékre.' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Gyártás');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Fejlesztés');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Erőforrás részletei');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tarifa részletek');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Csak');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'bal!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Erőforrás -szolgáltatás');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Nem lehet eltávolítani ezt az erőforrás -szolgáltatást, hozzá van rendelve egy erőforráshoz. Távolítsa el a funkciót ebből az erőforrásból, és próbálja újra.');

jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Médiaközpont');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Képek hozzáadása');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Szoba képek');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Tulajdon fő képe');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Diavetítés képei');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Lista törlése');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Fájlok húzása ide');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Válassza ki azt az erőforrást, amelyhez képeket szeretne feltölteni. Ha képeket tud feltölteni az egyes erőforrásokhoz (pl. szobák), akkor egy második legördülő listát kap az adott erőforrás kiválasztásához.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Ha több képet tölt fel "Fő tulajdonságképként", akkor ezeket használja a Tulajdonságlistában. A diavetítés képei megjelennek a tulajdonság részletei oldalon.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Kép megtekintése');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Kép törlése');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Kép feltöltése');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Szobatípusok ikonok');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Tulajdonság -ikonok');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Minden fájl feltöltése');

jr_define ('COMMON_PREV', 'Előző');
jr_define ('COMMON_MORE', 'Tovább');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'Ma');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'Év');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'Hónap');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'Hét');
jr_define ('_JOMRES_DASHBOARD_DAY', 'Nap');
jr_define ('_JOMRES_HLEGEND', 'Legend');
jr_define ('_JOMRES_HFILTER', 'Szűrő');
jr_define ('_JOMRES_HFROM', 'Feladó');
jr_define ('_JOMRES_HTO', 'Címzett');
jr_define ('_JOMRES_HNEW_BOOKING', 'Új foglalás');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'Betétállapot');
jr_define ('_JOMRES_HSTATUS_GUEST', 'Vendégállapot');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'Foglalási állapot');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'Közzétételi állapot');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'Számla állapota');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'Számla típusa');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Jóváhagyott');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Jelenlegi üzlet');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Foglalások megjelenítése');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Számlák megjelenítése');
jr_define ('_JOMRES_STATUS_ANY', 'Bármi');
jr_define ('_JOMRES_STATUS_PAID', 'Fizetett');
jr_define ('_JOMRES_STATUS_NOTPAID', 'Nincs fizetve');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Kijelentkezve');
jr_define ('_JOMRES_STATUS_ACTIVE', 'Aktív');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Törölt');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Megjelent');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'Nem tették közzé');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Aktív foglalással rendelkező vendégek');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Vendégek korábbi foglalásokkal');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'Foglalások');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Előfizetések');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Bizottságok');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'Minden vállalkozásom');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Beállítás aktuálisnak');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Bejelentkezés');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Kijelentkezés');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'foglalások');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'tulajdonságok');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'vendégek');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'jelentések');
jr_define ('_JOMRES_HLIST_GUESTS', 'Vendégek');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Vendégek listája');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Számlák listája');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Tulajdonságok');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Gyors foglalás');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'A foglalás dátuma');
jr_define ('_JOMRES_HTWO_WEEKS', 'Két hét');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Ez a foglalás törlésre kerül. A foglalás törléséhez nyomja meg az OK gombot.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Ma bejelentkezik');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Jelenlegi lakosok');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'Navigációs sáv helye');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Alapértelmezett (tartalomterület)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Rögzítve a tetejére');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Rögzítve az aljára');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Fordított navigációs sáv (színváltozás)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'Foglalási szám');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Vendégek megjelenítése');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap verzió');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "A Jomres saját sablonkészleteit tartalmazza, egyet a Bootstrap minden támogatott verziójához. A Bootstrap -on alapuló Joomla és Wordpress sablonok/témák a Bootstrap egy adott verzióját kínálják, ezért gondoskodnia kell a választott lehetőségről itt kompatibilis a sablonoddal/témáddal. Ha a témád nem tartalmaz Bootstrap kódot, állítsd be ezt a lehetőséget No Bootstrap a témában, majd a Jomres automatikusan tartalmazza a Bootstrap 3 fájlokat saját használatra. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Vendégek megjelenítése');
jr_define ('_JOMRES_HFIXED_PERIODS', 'Fix időszakok');
jr_define ('_JOMRES_HDEPOSITS', 'Betétek');
jr_define ('_JOMRES_HBOOKING_FORM', 'Foglalási űrlap');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Kötelező mezők');
jr_define ('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define ('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define ('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define ('COMMON_PLACEHOLDER_STREET', 'Saját utca');
jr_define ('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define ('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define ('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define ('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'Kiterjesztett konfiguráció');
jr_define ('SIMPLE_CONFIGURATION', 'Egyszerű konfiguráció');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Erőforrás -szolgáltatások');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Erőforrás típusa');
 jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Vendégtípus szerkesztése');
jr_define ('_JOMRES_HEDIT_COUPON', 'Szelvény szerkesztése');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Extra szerkesztés');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Több erőforrás létrehozása');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Erőforrások létrehozása');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Hány erőforrás?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Erőforrás típusa');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max vendég / erőforrás');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Törli az összes meglévő erőforrást?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Felhívjuk figyelmét, hogy jelenleg a rendszergazdai területet nézi, ha a Speciális webhelykonfiguráció értéke Nem. Ha további lehetőségeket szeretne látni, állítsa a Webhely -konfiguráció -> Egyéb -> Speciális webhelykonfiguráció értéket Igen -re.');
jr_define ('DATATABLES_SINFO', '_START_ - _END_ megjelenítése _TOTAL_ bejegyzésből');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Jóváhagyás');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Foglalási lekérdezés elutasítása');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Foglalási lekérdezés jóváhagyása');
jr_define ('_JOMRES_STATUS_APPROVED', 'Jóváhagyott');
jr_define ('_JOMRES_STATUS_REJECTED', 'Elutasítva');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Vizsgálat');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'A foglalások jóváhagyást vagy rendelkezésre állási megerősítést igényelnek?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Ha igen, akkor a foglaláskor nem jelenik meg a rendelkezésre állási naptárakban (és más vendégek továbbra is lefoglalhatják azokat a napokat és erőforrásokat), amíg az ingatlankezelő el nem fogadja/megerősíti a foglalás rendelkezésre állását. . A visszaigazolást követően a foglalás ideiglenesként kerül beillesztésre (ha nem írja felül más foglalásokat; más vendégek már nem tudják ugyanazt a dátumot lefoglalni), és e -mailt küld az ügyfélnek a fizetéshez. ');
jr_define ('_JOMRES_ERROR', 'Hiba');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Sajnáljuk! Hiba történt a funkció feldolgozása során. Ezt jelentettük Önnek, és megvizsgáljuk.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Üzenet');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'Fájl');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Sor');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Nyomkövetés');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mail sablonok');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'E -mail sablon szerkesztése');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'E -mail tárgya');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'E -mail szövege');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'E -mail típus');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'E -mail név');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'E -mail leírás');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Ezen az oldalon talál segítséget az e-mailek személyre szabásához és a rendelkezésre álló kimenet listájához: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates target="_blank"> E-mail sablonok súgója </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Webhely adminisztrátorának új foglalási e -mailje');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E -mail elküldve a webhely adminisztrátorának új foglaláskor, ha a globális Paypal átjáró engedélyezve van');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Szálloda új foglalási e -mailje');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E -mail elküldve az ingatlan tulajdonosának, amikor új foglalás történik');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Vendég új foglalási e -mailje');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E -mail elküldve a vendégnek, amikor új foglalás történik');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Vendég megerősítő levele');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Nyomtatható levél vagy e -mail, amelyet az ingatlan tulajdonosa manuálisan küldhet a foglalás megerősítésére');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Ez a foglalás jóváhagyható. Minden kiválasztott erőforrás rendelkezésre áll a kiválasztott időpontokban.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Ezt a foglalást nem lehet jóváhagyni, mert a források egy része már le van foglalva a kiválasztott dátumokra. Először módosítania kell a foglalást.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define ('GUEST_BUDGET', 'Költségvetés');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Használja a Költségkeret funkciót?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Csak rendszerindító webhelyek! A Költségkeret funkció az ingatlanlista egyik jellemzője, amellyel a vendég kiemelheti azoknak az ingatlanoknak a számát, akiknek az éjszakánkénti ára egy bizonyos érték alatt van. A funkciónak vannak bizonyos korlátai, amelyek miatt előfordulhat, hogy nem megfelelő néhány webhelyhez, amelyek sok különböző pénznemet használnak. Megjegyzés: ha ezt és a Kiemelt listák bővítményt használja, akkor a kiemelt adatlapok csomagolási osztálya automatikusan panel-elsődleges -re változik, amikor megjelenik a tulajdonságlista. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Név:');
jr_define ('_JOMRES_FOR', 'For');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'éjszaka');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'éjszakák');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Élő görgetést használ/Görgetést végez a tulajdonságlistában?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'jan');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'február');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'márc');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'ápr');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'május');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'június');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'július');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'aug.');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'Szeptember');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'okt');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'november');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'Nincs rendelkezésre álló adat');
jr_define('DATATABLES_SINFO', 'Találatok: _START_ - _END_ Összesen: _TOTAL_');
jr_define('DATATABLES_SINFOEMPTY', 'Nulla találat');
jr_define('DATATABLES_SINFOFILTERED', '(_MAX_ összes rekord közül szűrve)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ' ');
jr_define('DATATABLES_SLENGTHMENU', '_MENU_találat oldalanként');
jr_define('DATATABLES_SLOADINGRECORDS', 'Betöltés...');
jr_define('DATATABLES_SPROCESSING', 'Feldolgozás...');
jr_define('DATATABLES_SSEARCH', 'Keresés:');
jr_define('DATATABLES_SZERORECORDS', 'Nincs a keresésnek megfelelő találat');
jr_define('DATATABLES_SFIRST', 'Első');
jr_define('DATATABLES_SLAST', 'Utolsó');
jr_define('DATATABLES_SNEXT', 'Következő');
jr_define('DATATABLES_SPREVIOUS', 'Előző');
jr_define('DATATABLES_SSORTASCENDING', ': aktiválja a növekvő rendezéshez');
jr_define('DATATABLES_SSORTDESCENDING', ': aktiválja a csökkenő rendezéshez');
jr_define ('DATATABLES_SHOWHIDE', 'Oszlopok módosítása');
jr_define ('_BOOKING_ONREQUEST', 'Foglalás kérésre');
jr_define ('_BOOKING_INSTANT', 'Azonnali foglalás');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Magában foglalja a fantasztikus betűtípus ikonkészletet?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Állítsa ezt Igen értékre, ha a sablon nem tartalmazza a Font Awesome -ot.');
jr_define ('_BOOKING_CALCQUOTE', 'Foglalás kérése');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Kedves');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Válasszon egy webhelyet');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Webhelyazonosító');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'EU -ország?');
jr_define ('_JOMRES_HLASTCHANGED', 'Utoljára módosítva');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Szállodai foglalás törlési e -mail');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E -mail elküldve az ingatlan tulajdonosának, amikor új foglalás törlődik');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Vendégfoglalás törlési e -mail');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E -mail elküldve a vendégnek, amikor új foglalás törlődik');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Teszt e -mail küldése');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Teszt e -mail');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'Ez egy teszt e -mail a foglalási rendszerből.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'A teszt e -mail sikeresen elküldve');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'A teszt e -mail nem lett elküldve');
jr_define ('_INVOICE_TRANSACTIONS', 'Tranzakciók');
jr_define ('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define ('_OPENEXCHANGE_API_DESC', 'A szolgáltatások közötti árak konvertálásához Open Exchange Rates API -kulcsra van szükség. Kell egy API -kulcs az árak helyes megjelenítéséhez Jomres -ban, de <a href = "https://openexchangerates.org /signup/free "_target =" _ blank "> regisztráljon egy ingyenes kulcsért </a> (óránkénti frissítések, 1000 kérés/hónap - nincs HTTPS, e -mail támogatás vagy speciális funkciók). A Jomres naponta egyszer tölti le az árfolyamokat, amíg ha csak néhány helyen használja a kulcsot, akkor valószínűleg nem lépi túl ezeket a korlátokat. A Jomres 8.3 előtt régebbi, nem dokumentált Yahoo szolgáltatást használtunk, azonban felfedeztük, hogy ennek a funkciónak a használata ellentétes a Yahoo feltételeivel és Ebből kifolyólag feltételeznünk kell, hogy a szolgáltatás a jövőben egy bizonyos ponton eltűnik, ezért a nyílt árfolyamok használatára váltunk. ');
jr_define ('_JOMRES_COMMISSION', 'Bizottság');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ha több képet tölt fel az opcionális extrákhoz, csak az első kép lesz használatban.');
jr_define ('_JOMRES_COMMISSION', 'Bizottság');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ha több képet tölt fel az opcionális extrákhoz, csak az első kép lesz használatban.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Fizess most');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Ez a számla esedékes. Kérjük, kattintson a gombra a fizetési mód kiválasztásához.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Itt van egy lista néhány nagyszerű dologról, amelyeket megvásárolhat a szállásfoglalás során.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'Ezen az oldalon konfigurálhat bármilyen telepített átjárót. Ezekkel a beállításokkal fizethet bármely jutalékért vagy előfizetési számláért. A kezelőfelület beállításait csak a Paypal tudja felülbírálni, az összes többi átjárót a Tulajdon beállítása -> Átjárók lap, azonban ha egy átjáró jelenik meg ebben a listában, akkor képesnek kell lennie a foglalási letéti és a számlafizetések feldolgozására is. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Megjeleníteni a tulajdonság részleteit tartalmazó oldalon?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'Tulajdon részletei oldal beállításai');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'A Jomres -i ingatlankezelés csak a webhely kezelőpaneljéről történik. Ezen az oldalon felsorolhatja a rendszer összes tulajdonságát, így hozzárendelheti a jutalékokat, és jóváhagyhatja/visszavonhatja őket (ha ezek új tulajdonság létrehozásához, a meglévők szerkesztéséhez, a foglalások kezeléséhez vagy bármely más, ingatlanokkal/foglalásokkal kapcsolatos feladathoz be kell jelentkeznie a webhely kezelőfelületére, és fel kell lépnie a Jomres alapértelmezett oldalára. Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Szoba jellemzői');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Tulajdonságkategóriák');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Tulajdonságkategória szerkesztése');
jr_define ('_JOMRES_HCATEGORY', 'Kategória');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Kategóriákba sorolt ​​tulajdonságok megjelenítése?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Állítsa ezt IGEN -re, hogy a tulajdonság jellemzőit kategóriákba sorolja. Ez az opció csak a tulajdonság részletei oldalon megjelenő tulajdonságokra vonatkozik. Minden más oldalon megjelennek, anélkül, hogy kategóriákra bontanák őket.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Bejelentkezés visszavonása');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Fizetés visszavonása');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Ki nem adott');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'A letöltési és támogatási kulcsa érvényes, a bővítményeket a pluginkezelőn keresztül töltheti le.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Letöltési és támogatási kulcsa NEM érvényes, NEM tudja letölteni a bővítményeket a bővítménykezelőn keresztül.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'Altípus');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Még nem állította be az ingatlan altípusát. Itt határozza meg azt, mint valami 5 hálószobás villát vagy 4 hálószobás nyaralót, és ez segíti a keresést végző vendégeket.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Adjon a tulajdonnak altípust');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mail sablonok');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Kapcsolatbeállítások');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'Innen felülbírálhatja az összes ingatlan kapcsolattartási adatait (e -mail, telefon, fax), így a vendégekkel folytatott kommunikáció minden esetben Önnek lesz küldve, nem pedig az ingatlan tulajdonosainak.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Felülbírálja a listák elérhetőségeit?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Ha ez az opció Igen értékre van állítva, akkor a tulajdon e -mail címét és telefonszámát lecseréli az ezen a lapon beállított értékre. Ez kényszeríti az összes kommunikációt az Ön által megadott e -mail címre, biztosítva, hogy a vendég és a tulajdon a tulajdonos nem tudja megkerülni a foglalási motort és az ebből eredő jutalékokat. Ez azt is jelenti, hogy amikor egy ingatlan leírása megváltozik, az ingatlan nem jóváhagyott értékre lesz állítva (ha a jóváhagyási funkció engedélyezve van), és manuálisan ellenőriznie kell a leírást annak biztosítása érdekében, hogy a menedzserek ne írjanak be telefon- vagy e -mail -adatokat a szövegmezőkbe, mielőtt ismét jóváhagyják. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'A lista adatainak módosításaihoz a rendszergazda ellenőrzésére van szükség. Ha új adatokat ment, az adatlap közzététele visszavonásra kerül, és a rendszergazda jóváhagyására vár, mielőtt ismét láthatóvá válna a webhely látogatói számára. Nem fog tudni online értesítést kapni foglalások, miközben az adatlapja nincs közzétéve, és jóváhagyásra vár. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Foglalási kérelem felülvizsgálata');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Foglalási kérés megerősítése');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Foglalási kérelem módosítása');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Számla megjelölése függőben');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Függőben lévő számla megjelölve');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Névtelen követési adatokat küld?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Válassza az Igen lehetőséget, ha névtelen követési adatokat szeretne küldeni a Jomres.net -re, hogy jobban megértsük a rendszer használatát.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Kérjük, győződjön meg arról, hogy adatait kitöltötte a Fiókom szerkesztése oldalon, mielőtt ügyfelei nevében szeretne foglalni.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "A vendég elérhetőségei");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - Új vendég -');
jr_define ('_JOMRES_CHARTS', 'Charts');
jr_define ('_JOMRES_CHARTS_SELECT', 'Diagram kiválasztása ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'Jövedelem év/hónap szerint');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, kezdjük. Először létre kell hoznia néhány szobát ehhez a tulajdonsághoz.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Hozzon létre néhány szobát most');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'A kutatások bebizonyították, hogy a sok kiváló minőségű képet tartalmazó ingatlanok több nézetet generálnak. Töltsön fel egy főképet és néhány diavetítéses képet, hogy javítsa a foglalási esélyeket.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Kép feltöltése');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Hozzon létre néhány tarifát');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Mit fognak foglalni a vendégek?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Ez az ingatlan egy szállodai típusú ingatlan, ahol szobákat bérel az ingatlanban, vagy egy villa típusú ingatlan, ahol az egész ingatlant egy foglalással bérbe adja?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Szobák az ingatlanban');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Az egész ingatlan');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Mindkettő'); // Ez egy ideiglenes beállítás, amely visszafelé kompatibilitást biztosít azoknak a meglévő felhasználóknak, akik még nem frissítették a tulajdonságtípusukat. Nem lesz választható
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Mit fognak foglalni a vendégek?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Be kell töltenie a címadatait, hogy a vendégek megtalálhassák Önt, ha maradni akarnak.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Frissítse a címét');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hoppá, úgy tűnik, lehet, hogy elfelejtette kitölteni az összes mezőt.');
jr_define ('_JOMRES_CONTANT_US', 'Kapcsolatfelvétel');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Üdvözöljük az új online adatlapon');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Szia, és üdvözöljük az új ingatlanodon');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Nemrégiben új ingatlant adott hozzá webhelyünkhöz, és üdvözöljük a családban.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Láthatja az új irányítópultot');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'itt');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "Miután beállította a tulajdonát, megtekintheti, hogyan néz ki a webhely látogatói számára, ha meglátogatja");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'a címlapod.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(nincs közzétéve, így a webhely látogatói még nem láthatják).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "Az oldal tetején számos üzenetet fog látni. Az üzenetek melletti gombok elvezetik Önt az oldalakhoz, amelyeket meg kell látogatnia ahhoz, hogy webhelyén beállítsa tulajdonát. Ha egyszer Mindegyik feladatot elvégezte, a webhelyünk látogatói sokkal könnyebben megtalálják az Ön ingatlanát, és online foglalhatnak. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Ha bármilyen kérdése van, kérem');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'vegye fel velünk a kapcsolatot');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "és örömmel válaszolunk minden kérdésére.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Minden jót, csapatunk itt');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Úgy tűnik, nincs értékesíthető túrája. Hozzon létre egy körutazási profilt, majd a Generálás gombbal hozzon létre néhány túrát.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Készítsünk néhány túrát!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Pénznem szimbólum helyének cseréje');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Ezzel az opcióval áthelyezheti a pénznem szimbólumát az árlista mögül, elöl vagy fordítva.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Írja be Facebook -oldalának azonosítóját, például "jomres". Hagyja üresen, hogy ne mutasson semmit. Ne írja be a https://www.facebook.com vagy bármi mást.');
jr_define ('COMMON_DOWNLOAD', 'Letöltés');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Ezután hozzá kell adnia néhány tarifát. Ezek az Ön alapárai.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'A Bootstrap nincs engedélyezve!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Figyelem, a Bootstrap nincs engedélyezve a Jomres Site Configuration -> Misc lapon. <i> Néhány </i> funkció biztosítása érdekében a Jomres jelenleg a régi, jQuery UI alapú sablonokat használja, azonban ezeken évek óta nem dolgoztak. A Jomres sablonok (elrendezési fájlok) minden jelenlegi fejlesztése és fejlesztése a Bootstrap 3 sablonfájlokhoz készült. A Jomres legjobb kihasználásához javasoljuk, hogy telepítsen egy Bootstrap 3 alapú téma a Wordpress vagy a Joomla számára. Ha ezt megtette, engedélyezheti a Jomres Bootstrap sablonokat a webhelykonfigurációban.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'A támogatási kulcs érvényes. Vegye figyelembe, hogy ez a licenc nem teszi lehetővé a beépülő modulok letöltését.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Húzza a foglalásokat erre a területre a törléshez');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Hosszú (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Győződjön meg róla, hogy létrehozott egy WordPress oldalt, amely tartalmazza a [jomres: xx-XX] rövid kódot (ahol xx-XX a webhely nyelvi kódja, például [jomres: en-GB] vagy [ jomres: hu-USA]) különben nem fog tudni hozzáférni a Jomres-hez a frontendről, hogy kezelje ingatlanjait és foglalásait. <br> A Jomres a Bootstrap keretrendszerre épül, ezért azt a Bootstrap-on alapuló témára kell használnia. javasoljon egyet a Bootstrap 3 alapján. Ha nem fér hozzá egy témához, akkor javasoljuk, hogy használja a Jomres Leohtian témát a Wordpresshez, amelyet <a href = "https://www.jomres.net/download/free- letöltések/letöltés/5-miscelleneous-downloads/11-leohtian-for-wordpress target="_blank"> letöltés innen. </a> ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Jomres legtöbb ingatlanának van bérbeadási folyamata. A szállodák/panziók/panziók külön szobákat bérelnek, a nyaralók/villák/apartmanok pedig az egész ingatlant. Ez az ingatlankezelő számára láthatatlan, de nekik ahhoz, hogy tarifákat hozzanak létre ingatlanukhoz, először hozzá kell adnia az ingatlan típusának megfelelő szobatípusokat.
Például egy szállodai ingatlan típusnak általában több szobatípusra van szüksége (kétágyas szobák, egyágyas szobák és ikrek), míg a villáknak csak egy szobatípusuk lehet, pl. 2 hálószoba, 5 hálószoba.
Lehetőség van szobatípusok létrehozására az olyan ingatlanokhoz, mint a Tours. Ez lehetővé teszi az ügyfelek számára, hogy csak olyan túrákat keressenek, mint a túrák, de az ingatlankezelő nem hoz létre tarifákat ehhez a tulajdontípushoz, így a kezelési folyamat nem releváns számukra.
');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Kattintson ide új szobatípusok hozzáadásához');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Figyelmeztetés, egy vagy több olyan ingatlantípussal rendelkezik, amely nem rendelkezik szobatípussal. Az ingatlanoknak szobatípusokra van szükségük, hogy az ingatlankezelők tarifákat hozzanak létre.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Használja az Új gombot új szobatípusok létrehozásához.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Túrák');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Nincs foglalás/Ingatlan (egyszerű lista)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Naplófájl helye');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'A Jomres alapértelmezés szerint naplózza a rendszer tevékenységét a' .JOMRES_SYSTEMLOG_PATH. "helyre. Mivel ez a fájl bizalmas információkat (api kulcsokat, rendszer elérési útjait, átjáró adatait, vendéginformációkat) tartalmazhat, javasoljuk, hogy módosítsa ezt az elérési utat a webdokumentum gyökere feletti egérhez. Ha nem érti, mit jelent ez, kérjük, kérjen tanácsot az internetes házigazdától, mert ők ismerik a fájlrendszerét. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres naplózza a rendszer részletes adatait, beleértve az API -kulcsokat, a rendszer elérési útjait, az átjárót és a vendéginformációkat, amelyeknek nem szabad látniuk az internet többi része számára. A rendszernapló elérési útja nincs beállítva, ezért a rendszernaplókat jelenleg a ".JOMRES_SYSTEMLOG_PATH." könyvtárba menti a rendszer, amely nem ideális. Látogassa meg a Webhelykonfiguráció -> Hibakeresés oldalt, és állítsa be a fájlrendszerben a webes gyökéren kívüli elérési utat. mivel tanácsot tudnak adni. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Ha a CMS telepítve van a webhely gyökérkönyvtárába, akkor megfelelő hely lenne');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nem rendelkezik Google Térkép kulcskészlettel. A Google Térkép legutóbbi változásai miatt minden új webhelynek szüksége lesz egy API kulcsra a Google térkép funkcióinak használatához. Kérjük, <a href = 'http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key 'target =' _ blank '> tekintse meg kézikönyvünket az API-kulcs létrehozásáról < /a> és mentse a kulcsot a Jomres -ban. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'Google térkép színséma');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Rendben, kezdjük hozzá a tulajdont a webhelyhez. Itt össze kell gyűjtenünk egy kis információt az ingatlanáról. Ez lehetővé teszi számunkra, hogy beállítsuk az ingatlan csupasz csontjait. Ha ez megtörtént, akkor Szobák, árak és képek hozzáadása során vezetnek.");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Az ingatlan típusa segít meghatározni, hogyan fogják lefoglalni az ingatlant, például olyan szállodákban, ahol egyszerre csak egy vagy két szobát "értékesít", míg a villákban a teljes ingatlant kínálja.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Vegye figyelembe, hogy az e -mail címnek nem kell megegyeznie azzal, amelyet a fiók regisztrálásakor használt. Ez lehetővé teszi, hogy különböző címek legyenek a különböző ingatlanokhoz.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimális befizetés');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Beállíthatja a fizetendő minimális letéti összeget. Ha igen, akkor a "Befizetés szükséges az első éjszaka költsége?" és "A befizetés szükséges százalékos arány?" beállítások a Tulajdonság -konfigurációban nem konfigurálhatók , ehelyett minden betétérték százalékos, és legalább az itt megadott számnak kell lennie. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Ez az érték nem lehet kevesebb, mint');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog port');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Ha rendszernaplózási üzeneteket szeretne küldeni egy naplószerverre, itt állíthatja be a gazdagépnevet vagy az IP -t (pl. 192.168.0.2) és a portot (pl. 514). Megjegyzés: ha a webhely beállítása Fejlesztés ', majd a DEBUG üzenetek kerülnek elküldésre. Ha' Gyártás 'értékre van állítva, akkor csak INFO szintű és magasabb szintű üzenetek kerülnek elküldésre. A naplózás letiltásához a távoli szerverre ürítse ki a gazda- és portmezőket. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "A PHP nem férhet hozzá az \"openlog\" és a \"syslog\" PHP funkciókhoz. Ez a szerver oldali beállítás, ha azt szeretné, hogy a Jomres üzeneteket küldjön egy naplószerverre, kérjük, forduljon a házigazdához és ellenőrizze, hogy a PHP hozzáférhet -e ezekhez a funkciókhoz. Miután engedélyezte, itt konfigurálhatja a rendszernapló -kiszolgáló beállításait. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'E -mail küldése a rendszergazdának hiba esetén?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "A korábban megvizsgálandó problémákat e -mailben elküldtük a webhelytulajdonosoknak. Ez kiválóan alkalmas arra, hogy figyelemmel kísérje a rendszer működését, mivel rettentő sok mozgó alkatrésze van, és nehéz nyomon követni Sajnos a webhelyeit feltérképező pókok és robotok (még barátságosak is) véletlenül végzetes hibákat okozhatnak, és emiatt a beérkező üzenetek száma elsöprő lehet. Ha ez a helyzet, akkor állítsa ezt a lehetőséget Nem értékre. üzeneteket egy naplózási fájlkészlethez és egy rendszernapló -kiszolgálóhoz (ha az adott PHP -beállítások lehetővé teszik, ha nem, kérjük, lépjen kapcsolatba a házigazdával). Manuálisan elemezheti a fájlokat, ha valami konkrétat keres (pl. egy átjárót fejlesztesz, és szeretnéd használni a gateway_log () függvényhívást.), de ez sok információ, amin keresztül kell vonulnod, ezért jobb valami syslog fájl -elemzőt használni. Ha Linuxon fejlesztesz, akkor rengeteg eszköz áll az Ön rendelkezésére, ha Windows rendszeren, akkor egy egyszerű eszköz a http://maxbelkov.github.io/visualsyslog/ Ezen az oldalon állítsa a 'Syslog host' értékét '127.0.0.1' és a ' Port '514 -re az eszközbe bejelentkezett üzenetek megtekintéséhez. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Tulajdonságok kezelése');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nem rendelkezik IP -észlelési API -kulcskészlettel. Ez szükséges ahhoz, hogy a rendszer automatikusan észlelhesse a felhasználó tartózkodási helyét, és automatikusan beállítsa pénznemét és országát. <a href = 'http: // www .jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency -odes-tab 'target =' _ blank '> lásd a kézikönyvet oldal arról, hogyan hozhat létre IP -észlelési API -kulcsot </a>, és mentse a kulcsot a Jomres> Webhelykonfiguráció> Valutaátváltások / Valutakódok mappába. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nincs Open Exchange Rates API kulcskészlete. Ez szükséges ahhoz, hogy a rendszer automatikusan letöltse és használja a devizaárfolyamokat. Kérjük, <a href = 'http: //www.jomres.net /manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency -odes-tab 'target =' _ blank '> tekintse meg kézikönyvünket arról, hogyan hozzon létre egy IP -észlelési API -kulcsot </a>, és mentse a kulcsot a Jomres> Webhelykonfiguráció> Valutaátváltások / Valutakódok mappába. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Engedély száma');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Egyes országokban a törvények előírják, hogy meg kell jelenítenie az ingatlan engedélyszámát. Ha rendelkezik ilyen számmal, írja be ide, és hozzáadódik a tulajdon fejléc részéhez.');
jr_define ('_JOMRES_SHORTCODES', 'Rövid kódok');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "A <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot bővítményt KELL telepíteni és engedélyezni, hogy ezek a rövid kódok működjenek. Ez megtalálható a Jomres beépülő modul -kezelőben. Ha ezt a webhelyet használta Gyorsindítás, akkor valószínűleg már telepítve van. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Biztosítanod kell, hogy a <strong>Jomres Shortcodes</strong> plug -in engedélyezve van. Ez megtalálható a Jomres Plugin Managerben. Ha ezt az oldalt a Gyorsindítások egyikével hozták létre, akkor valószínűleg már telepítve van. ");
jr_define ('SHORTCODE_TASK', 'Feladat');
jr_define ('SHORTCODE_DESCRIPTION', 'Leírás');
jr_define ('SHORTCODE_ARGUMENTS', 'Érvek');
jr_define ('SHORTCODE_EXAMPLE', 'Példa');
jr_define ('INTEGRITY_CHECK', 'Fájlrendszer integritás ellenőrzése');
jr_define ('INTEGRITY_CHECK_DESC', 'Ez a funkció lehetővé teszi, hogy ellenőrizze, hogy a fájlrendszer megfelel -e a Jomres jelenlegi verziójának. Ez hasznos annak biztosításában, hogy a telepítés/frissítés után minden fájl megfelelően frissült -e. A piros színű fájlok hiányoznak, Narancssárga létezik, de eltér a jelenlegi verzióban szállítottól. Csak azok a fájlok kerülnek felsorolásra, amelyek potenciális problémát jelentenek. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Fájlrendszer integritás ellenőrzése');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Helyi kivonat');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Verzió kivonata');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Félelmetes! Nem találtunk problémát.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'További információ');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Olvasson kevesebbet');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Idegenforgalmi adó');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Idegenforgalmi adó mértéke');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Állítsa be az idegenforgalmi adó mértékét. Az idegenforgalmi adót csak az első foglalás létrehozása után számítják ki, és hozzáadják a foglalás visszaigazolási oldalához, az extra szolgáltatások rovatba.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Százalékos?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Állítsa ezt Igen értékre, ha az adó százalékos, vagy Nem, ha átalánydíj.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Befolyásolja a teljes foglalási értéket?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Állítsa ezt Igen értékre, ha az adó a foglalás teljes értékét lefedi, tehát mind a szállás, mind az extrák százaléka, vagy nem, ha csak az érték alapján számítják ki Ha a fenti \"Százalékos\" opció értéke Nem, akkor ezt a lehetőséget figyelmen kívül hagyja. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Kérjük, vegye figyelembe, hogy ehhez a foglaláshoz idegenforgalmi adó kerül hozzáadásra. Az adót a felülvizsgálati foglalási oldalon láthatja.');
jr_define ('NO_LICENSE_MESSAGE', "Nem mentette el a licencszámot a webhelykonfigurációban, ezért nem tudja letölteni a bővítményeket. Miután mentett egy érvényes licenckulcsot, telepítheti a Core beépülő modulok. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Úgy tűnik, hogy érvénytelen vagy lejárt licencszámot használ. Ha elmentett egy érvényes licenckulcsot, akkor telepítheti a beépülő modulként felsorolt ​​bővítményeket.");
jr_define ('VALID_LICENSE_MESSAGE', "Gratulálunk, érvényes licencszámot használ, és telepítheti a Core bővítményeket a Jomres bővítménykezelőn keresztül.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ezen az oldalon képeket tölthetsz fel az ingatlanodhoz és az általad kínált dolgokhoz. Egy főgombja van, és egy második gomb, amely lehetővé teszi a képek feltöltéséhez szükséges erőforrások kiválasztását. Tehát a Fő tulajdonság a kép és a diavetítés csak egy gombot jelenít meg, de ha létrehozott pl. opcionális extrákat vagy szobákat, akkor megjelenik egy második gomb, amelyre képeket tölthet fel az adott erőforrásokhoz. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ezen az oldalon képeket tölthetsz fel az ingatlanodról és az általad kínált dolgokról. Egy főgombja van, és egy második gomb, amely lehetővé teszi a képek feltöltéséhez szükséges erőforrások kiválasztását. Tehát a Fő tulajdonság a kép és a diavetítés csak egy gombot jelenít meg, de ha létrehozott opcionális extrákat, akkor megjelenik egy második gomb, amelyre képeket tölthet fel az adott erőforrásokhoz. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Először válassza ki a feltölteni kívánt kép (eke) t a Kép hozzáadása gombra kattintva, vagy húzza át. Ezek a jobb oldali oszlopban jelennek meg. </li>
  <li> E terület felett a \"Válassza ki az erőforrást \" gombbal válassza ki, hogy melyik erőforráshoz kíván képeket feltölteni. Lehet, hogy felajánlja a lehetőséget, hogy egy adott erőforrást válasszon alatta. </li>
  <li> Miután kiválasztotta az erőforrást, kattintson a Kép feltöltése gombra a kép alatt, és társítsa azt az adott erőforrással. A kép feltöltése után eltűnik a jobb oldali oszlopból, és megjelenik a bal oldalon. </li>
  <li> A meglévő képek melletti Kuka gomb segítségével távolítsa el azokat a képeket, amelyeket már nem szeretne megjeleníteni. </li>
  <li> A fájlok diavetítésben való megjelenítésének sorrendjét megváltoztathatja, ha a feltöltés előtt átnevezi őket, mivel az oldalak betűrendben jelennek meg. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Az Erőforrás gomb mellett egy Előnézet gomb látható. Ha erre kattint, megjelenik egy előugró ablak, amely megmutatja, hogy a jelenleg feltöltött képek hogyan fognak megjelenni egy oldalon. Ez segít Önnek elképzelés arról, hogy a képek hogyan fognak kinézni ügyfelei számára. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Nincs korlátozva a feltölthető képek száma. A képek automatikusan átméreteződnek feltöltéskor. Csak JPG és PNG fájlokat tölthet fel.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideális esetben minden feltöltött kép legalább");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "képpont széles, különben homályosnak tűnhetnek a feltöltés után.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "A feltöltött képek nem lehetnek többek");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "méretben.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Válassza ki azt az erőforrást, amelyhez képeket szeretne feltölteni");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Speciális erőforrás");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Az ehhez az erőforráshoz már feltöltött képek");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Szövegformázás');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Itt írhat be szöveget egyszerű Markdown formázással. Nem kell ismernie semmilyen HTML -t, csak használja a gombokat, hogy az információk a kívántnak tűnjenek, vagy formázza a szöveget a példák szerint.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Kiemelés');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'félkövér');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'dőlt');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'áthúzás');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Fejlécek");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Nagy fejléc');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Közepes fejléc");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Kis fejléc');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Apró fejléc');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Listák");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Általános listaelem');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Számozott listaelem');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Linkek');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Megjelenítendő szöveg');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Idézetek');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Ez egy idézet.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Több sorra is kiterjedhet!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Képek');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Táblázatok');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Oszlop');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Tulajdonképek megjelenítése diavetítésként a tulajdonságlistában?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ha igen, akkor a tulajdonság fő képeinek diavetítése jelenik meg. Ha nem, akkor az első tulajdonság fő képe jelenik meg.');
jr_define ('EDIT_CMS_USER', 'CMS felhasználó szerkesztése');
jr_define ('BOOKING_MADE_BY', 'A foglalást készítette');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Szolgáltatások');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Szobatípusok');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Külső foglalási űrlap URL -je');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Itt beállíthat egy külső URL -t, ha harmadik fél weboldalát szeretné használni a foglalásokhoz. Minden jomres foglalási gomb erre az URL -re mutat. Hagyja üresen ezt a mezőt, ha a Jomres foglalási űrlapot szeretné használni . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (rövid szobaleírás/felirat)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Szoba leírása');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Vendég feketelistája');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ha ez a vendég feketelistán szerepel, akkor többé nem foglalt helyet foglalni ezen a szálláshelyen.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'A jomres munkamenet -fájlok mentése lemezre vagy adatbázisba. Ajánlott: adatbázis');
jr_define ('_JOMRES_MAP_HEIGHT', "Térképmagasság (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Térkép nagyítási szint");
jr_define ('_JOMRES_MAP_MAPTYPE', "Térkép típusa");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Sablon felülbírálás kezelő");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "A sabloncsomagok olyan beépülő modulok, amelyek felülbíráló sablonokat biztosíthatnak a különböző alapvető Jomres sablonfájlokhoz.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Ez az oldal felsorolja azokat a sablonfájlokat, amelyeket felülírhat egy sabloncsomag sablonfájlja. Ha felül szeretne írni egy bizonyos sablonfájlt, kattintson az adott fájl szerkesztés gombjára, a következő oldalon kiválaszthatja, hogy melyik verzióval kívánja felülbírálni. Megjegyzés: ezek a felülbírálások elsőbbséget élveznek mind a Jomres Core, mind a Wordpress vagy Joomla téma/sablon felülbírálásokkal szemben. A felülbírálást letilthatja, ha törli a Lista sablon felülbírálás oldalán. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Sablon neve");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuális útvonal");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nincs felülírva");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Kiválaszthatja, hogy melyik sablonfájl felülírja a Core sablonfájlokat a legördülő menü megváltoztatásával");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Foglalt szobák százalékos aránya");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Foglalt szobák százalékos aránya");
jr_define ('_JOMRES_SELECT_WIDGETS', "Widgetek kiválasztása");
jr_define ('_JOMRES_INTERVAL', "Interval");
jr_define ('_JOMRES_TIMELINE', "Idővonal");
jr_define ('_JOMRES_CPANEL_GRID', "Vezérlőpult otthoni elrendezése");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Válassza ki a frontend tulajdonságkezelő központ kezdőlapjának rácselrendezését.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Térképjelzők");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Városképek");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "A tulajdonság típusának megváltoztatása törli az összes szobát, tarifát, ingatlanbeállítást és visszaállítja a rendelkezésre állást.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Kérjük, vegye figyelembe, hogy a frissítés után frissítenie kell a már telepített Jomres beépülő modulokat a Jomres bővítménykezelőn keresztül. Ha telepítette a Core bővítményeket, de nincs érvényes Jomres licence, akkor nem </em> javaslom a Jomres frissítését, mivel a régebbi bővítmények gyakran nem működnek a Jomres újabb verzióival. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Kérjük, vegye figyelembe, hogy a frissítés után frissítenie kell a már telepített Jomres beépülő modulokat a Jomres bővítménykezelőn keresztül.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Ha frissíteni szeretné a Jomres -t és annak bővítményeit, megújítási licencre lesz szüksége. Kérjük, látogasson el a <a href='https://www.jomres.net/pricing' target='_blank'> oldalra webhelyről </a> további információért. A legtöbb esetben ezek a licencek a teljes licenc árának 50% -át teszik ki. Kérjük, győződjön meg róla, hogy bejelentkezett üzletünkbe, mielőtt megújítást szeretne vásárolni. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Fizetési mód:");

jr_define ('_JOMRES_PRICES', "Kapcsolódás");


jr_define ('_OAUTH_TITLE', "Alkalmazáskulcs -kezelés");
jr_define ('_OAUTH_APPS', "REST API ügyfél adatai");
jr_define ('_OAUTH_IDENTIFIER', "Azonosító");
jr_define ('_OAUTH_APIKEY', "Ügyfél -azonosító");
jr_define ('_OAUTH_SECRET', "Titkos");
jr_define ('_OAUTH_CREATED', "Létrehozott/frissített alkalmazás");
jr_define ('_OAUTH_CLIENT_ID_INFO', "Az ügyfélazonosítót és a titkot az Ön számára hozták létre. Az azonosító azért van, hogy könnyen azonosítani tudja ezt a kulcspárt.");
jr_define ('_OAUTH_SCOPE_TITLE', "Engedélyek (amit az ügyfél tehet)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Felhasználói jogosultságok");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Tulajdonjogok");

jr_define ('API_DOCUMENTATION_TITLE', "App REST API dokumentáció");

jr_define ('_OAUTH_CONFIG', "API Core konfiguráció");

jr_define ('_OAUTH_CONFIG_SHOW', "Megjeleníti az API kliens konfigurációs beállításait a Jomres főmenüjében?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Lehet, hogy nem jeleníti meg az API -ügyfél konfigurációs beállításait a Jomres főmenü \"Saját fiók\" szakaszában. Ehelyett eldöntheti, hogy más oldalakon szeretné megjeleníteni őket a Jomres Shortcodes használatával.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Megjeleníti az API alapdokumentációs oldalát. Az API Core lehetővé teszi a felhasználók számára, hogy API -ügyfeleket hozzanak létre, amelyek segítségével elérhetik az API Core dokumentációjában ismertetett API -funkciókat.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Megjeleníti az API alapfelügyeleti oldalát, ahol a tulajdonkezelők konfigurálhatják az API klienseket. Ne feledje, hogy ez csak regisztrált felhasználó szolgáltatás, ezért a felhasználóknak regisztrálniuk kell, és be kell jelentkezniük, mielőtt láthatják ezt az oldalt.");

jr_define ('API_METHODS_TITLE', "API módszerek");
jr_define ('API_METHODS_DESCRIPTION', "Ez a metóduslista a telepített API -szolgáltatás bővítményein alapul, és automatikusan generálódik. Ha telepít vagy töröl egy API -funkcióbővítményt, látogasson el erre az oldalra, hogy újraépítse a webhelyén elérhető API -módszerek listáját. ");

jr_define ('_OAUTH_REDIRECT_URI', "Átirányítási URI");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Adj egy számodra értelmes nevet, például Saját telefon");

jr_define ('_OAUTH_GRANT_TYPES', "Ez a rendszer két támogatástípust támogat, az Ügyfél hitelesítő adatait és az Implicit. Ha az <em> ügyfél_hitelesítő adatok </em> folyamatot használja, akkor szüksége lesz mind az ügyfélazonosítóra, mind az ügyféltitokra. Ha <em > implicit </em> akkor az alkalmazás csak az ügyfél azonosítóját küldi el, és bejelentkezik a rendszerbe, hogy kifejezetten engedélyezze az alkalmazást. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "Az <em> implicit </em> támogatás típusának használatához ezt az URL -t kell használnia az alkalmazások engedélyezéséhez. Amikor ezt az URL -t hívják, és engedélyezte a rendszer által kiadott alkalmazást egy jogkivonat, amelyet az alkalmazások ezután használnak a rendszer API -jának meghívásához ");
jr_define ('_OAUTH_AUTHORISATION_URL', "Engedélyezési URL");

jr_define ('WEBHOOKS_CORE', 'Webhooks');

jr_define ('_WEBHOOKS_CONFIG_SHOW', "Webhook konfigurációs beállítások megjelenítése a Jomres főmenüben?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Lehet, hogy nem jeleníti meg a Webhook konfigurációs beállításait a Jomres főmenü \"Saját fiók\" részében. Ehelyett eldöntheti, hogy más oldalakon szeretné megjeleníteni őket a Jomres Shortcodes használatával.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks dokumentáció");
jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Megjeleníti az API alapdokumentációs oldalát. Az API Core lehetővé teszi a felhasználók számára, hogy API -ügyfeleket hozzanak létre, amelyek segítségével elérhetik az API Core dokumentációjában ismertetett API -funkciókat.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Megjeleníti az API alapfelügyeleti oldalát, ahol a tulajdonkezelők konfigurálhatják az API klienseket. Ne feledje, hogy ez csak regisztrált felhasználó szolgáltatás, ezért a felhasználóknak regisztrálniuk és bejelentkezniük kell, mielőtt láthatják ezt az oldalt.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Integráció szerkesztése');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'Integrációs azonosító');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL vagy név');
jr_define ('WEBHOOKS_ENABLED', 'Engedélyezve');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Hitelesítési módszer/integráció');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Az Ön által létrehozott webhookok nem kerülnek aktiválásra, mivel nincsenek hozzárendelve semmilyen tulajdonsághoz. A szuper tulajdonkezelők általában nem kapnak egyedi tulajdonságokat, ezért szükség lehet egy új felhasználóra a webhook létrehozásához.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Bármilyen webhook, amelyet létrehoz, a következő tulajdonságok ellen aktiválódik:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'Vélemények korlátja');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Ezzel a beállítással korlátozhatja a szálláshely adatlapján megjelenített értékelések számát.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Összes vélemény megjelenítése');

jr_define ('VIDEO_TUTORIALS', 'Video Tutorials');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimális letéti érték');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ha a számított befizetés kisebb, mint ez az érték, akkor állítsa be a letétet erre az értékre. Ez az érték önmagában felülírható, ha nem felel meg a webhely minimális letétbeállításának. Hagyja 0-ra állítva ne használja a beállítást. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'A webhely sebességének növelése érdekében javasoljuk, hogy importálja a meglévő webhely részleteit és a tulajdonságképeket az adatbázisba.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Meglévő képek adatainak importálása az adatbázisba');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Kísérleti szolgáltatás. Ha engedélyezve van, a médiaközpont funkcióval feltöltött képek szintén az Amazon S3 vödörbe kerülnek, és az Amazon S3 vödör URL -jéről jelennek meg. Amikor ezt először engedélyezi, Ön is megkéri, hogy importálja a meglévő képeket az S3 vödörbe. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Cserélje le az alapértelmezett Amazon S3 tartományt a CloudFront domainjére');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Engedélyezés ajánlott. Csak Windows és Mac OSX rendszereken, ha a libcurl nem Schannel vagy Secure Transport támogatással készült (a Windows és Mac OS X rendszerben található natív SSL -könyvtárak), akkor ezt állítsa be Nem.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Engedélyezte az Amazon S3 integrációt, így az összes létező képet át kell másolnia az S3 vödörbe. A képek mostantól az Amazon S3 URL -jéről jelennek meg a webhely látogatói számára, ezért szüksége lesz rá másolja őket először az S3 vödörbe, különben nem fogják látni a webhely látogatói.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Ha erre a gombra kattint, ne szakítsa meg a folyamatot, és ne várja meg a sikeres vagy hibaüzenetet. A szerver sebességétől függően ez eltarthat egy ideig.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Meglévő képek másolása az Amazon S3 vödörbe');


jr_define ('JOMRES_INCOMPLETE', 'Hiányos');
jr_define ('JOMRES_WATING_APPROVAL', 'Jóváhagyás függőben');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Ingatlan adatlapja');

jr_define ('HAS_STARS_TITLE', 'Lehetővé teszi a csillagok osztályozását?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'A képadatok kényszerített újraimportálása az adatbázisba');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Képek újratöltése az S3 vödörbe');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Törli az összes Jomres adatot az eltávolításkor?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Ha igen, a Jomres eltávolítja az összes adatbázis -tábláját, ha eltávolítja. Ezzel törli az összes Jomres -adatot a db -ból, és nem vonható vissza.');

jr_define ('TRANSACTION_IDS', 'Transaction id');
jr_define ('PAYMENT_METHOD', 'Fizetési mód');
jr_define ('POA_DISPLAY_PRICE', 'POA Price');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Amikor a tulajdonságok megjelennek egy listában, a rendszer megpróbál érvényes árat találni a beállított tarifákból a mai dátum alapján, vagy ha dátumokat használtak a keresésben, akkor ezek alapján . Ha nem, akkor megjelenik a POA (Ár az alkalmazásban), ami azt jelenti, hogy a vendégnek fel kell vennie Önnel a kapcsolatot, hogy árat kérjen. Ha szeretné, itt konfigurálhat egy árat, amely a POA szöveg helyett megjelenik. Ez az ábra "tartalék" ár lenne, ha más árat nem lehet meghatározni. ');
jr_define ('PLUGINMANAGER_INSTALL', 'A Jomres bővítmények telepítése előtt telepítenie kell a bővítménykezelőt, most szeretné megtenni?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Frissítenie kell a bővítménykezelőt, mielőtt frissítené a telepített bővítményeket, most szeretné ezt megtenni?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Tegyük ezt!");

jr_define ('INCLUDEINFILTERS', 'Include in szűrők?');
jr_define ('INCLUDEINFILTERS_DESC', 'Tulajdonságszűrők az Ajax összetett keresésben nagyon hosszúra nyúlhatnak, ezért ezt a beállítást nemre állíthatja, hogy megakadályozza, hogy ez a szolgáltatás megjelenjen a tulajdonságok listájában.');

jr_define ('REVIEW_REMINDER_PT1', "Megvan");
jr_define ('REVIEW_REMINDER_PT2', "foglalás (ok), amelyekről még nem hagyott véleményt. Kérjük, írjon véleményt.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Várakozásokra váró foglalások");
jr_define ('REVIEW_NAG', "Vendégek a véleményekért?");
jr_define ('REVIEW_NAG_DESC', "Miután egy vendéget lefoglaltunk a foglalásból, a rendszer emlékezteti őket, hogy írjanak véleményt a foglalásukról. Az emlékeztető letiltásához állítsa ezt a lehetőséget Nem értékre.");

jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Elküldi a foglalási e -mailek másolatát a webhely rendszergazdáinak?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Ha engedélyezve van, az ingatlankezelőknek küldött foglalási e -mailek másolatait is elküldik a webhely összes adminisztrátorának.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Elrejti a címet?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Ha ezt az opciót Igen értékre állítja, akkor csak azok a vendégek láthatják az ingatlan utcájának címét, akik már foglaltak az ingatlanon. Ezt a beállítást használhatja az ingatlan pontos helyének elrejtésére ha például rutinszerűen felügyelet nélkül hagyják. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimalizálja a képeket feltöltéskor?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Ha engedélyezve van, a képek a webre lesznek optimalizálva (a fájlméret akár 75% -kal is kisebb lehet). A feltöltött képtípustól függően a szervernek rendelkeznie kell egy vagy több könyvtárral, amelyeket a tárhely telepített szolgáltató: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define ('OBSOLETE_FILES_CHECK', 'Elavult fájlok ellenőrzése');
jr_define ('DATATABLES_COLVIS', 'Oszlop láthatósága');

jr_define ('API_TOKEN_LIFETIME', 'API token élettartam');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Mennyi ideig marad érvényben egy API token másodpercben. 86400 = 1 nap, 31536000 = 1 év');


jr_define ('ENCRYPTION_TITLE', 'Titkosítás');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Titkosítási fájl helye');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Soha ne törölje a titkosítási fájlt ** <br/> A felhasználói adatokat táblázatokban titkosítva tároljuk annak érdekében, hogy a "nyugalomban lévő adatok" biztonságosan védettek legyenek, a GDPR ajánlásainak megfelelően. Alapértelmezés szerint a titkosítási kulcs a "encryption_key.class.php" fájlban tárolódik a Jomres telepítés gyökerében (általában /public_html /jomres). Itt módosíthatja a fájl tárolási helyét. Ha megváltoztatja a helyet, akkor mozgatnia kell a fájlt, ne várja meg, amíg Jomres új verziót hoz létre, különben nem tudja dekódolni a vendégek adatait. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Az itt elmentett információkat a tulajdonhoz készített számlákon fogjuk használni');

jr_define ('_JOMRES_GDPR_POLICIES', 'GDPR irányelvek');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Itt állíthatja be, hogy a foglalás vagy számla létrehozása után mennyi ideig távolítsuk el a rendszerből, hogy biztosítsuk a GDPR betartását.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Foglalási megőrzési időszak (napokban)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Hány nappal a foglalás indulási dátuma után törölni kell a foglalást? Törlés esetén a foglalást és a számlát is eltávolítjuk. A tipikus megőrzési időszak 365 nap lehet.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Számlamegőrzési (nem foglalási) időszak');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Más számlák, például jutalék- és előfizetési számlák, nincsenek kötve a foglalásokhoz. Ennek következtében nem törlődnek a foglalási számlák és szerződések törlésekor. Országától és saját üzleti gyakorlatától függően más megőrzési időszakot kell konfigurálnia. A tipikus megőrzési időszak 3653 nap lehet, ami 10 év. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Az Ön adatai');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'A webhely egyes funkcióinak tárolniuk kell az Ön látogatásáról szóló információkat. Ezt kizárólag szolgáltatás nyújtására használjuk, másokkal soha nem osztjuk meg, és szükség esetén töröljük.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'ENGEDÉLYET ad -e nekünk az információ tárolásához ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Részletesen');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Hozzájárulsz ahhoz, hogy ezeket az adatokat tároljuk, hogy lefoglalhassuk ezen az oldalon. Függetlenül attól, hogy beleegyezel -e adataid tárolásába, tárolunk egy cookie -t a számítógépeden, hogy elmondjuk nekünk, függetlenül attól, hogy feliratkozott -e vagy sem. Ez segít abban, hogy ne kérdezzük folyamatosan, hogy kíván -e vagy sem, és nem tartalmaz személyazonosításra alkalmas adatokat (PII). Ha meggondolja magát, bármikor felkeresheti az "Alkalmazásengedélyek" oldalt, hogy engedélyezze vagy kijelentkezzen. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Az információkat a látogatás jellegétől függően különböző időtartamokra tároljuk. Tehát, ha csak körülnéz, tároljuk a hozzávetőleges földrajzi hely (országszintű) információkat. Ha keresést hajt végre, akkor a keresési űrlapok felhasználóbarátabbá tétele tároljuk az utoljára keresett dolgokat. Ezeket az információkat általában legfeljebb 24 órán keresztül tároljuk, és csak a látogatás kellemesebbé tételére használjuk. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Amikor nálunk foglal, szükség esetén több információt tárol.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'A foglalási űrlap technikai adatait rögzítjük és legfeljebb 60 napig megőrizzük. Erre azért van szükség, hogy az On Request foglalások teljes foglalásokká válhassanak a foglalás jóváhagyása után, és csapataink elemzéséhez. Ha probléma merül fel a foglalással. Ha nem volt bejelentkezve a foglalás során, akkor e -mailben küldünk Önnek egy felhasználónevet és jelszót, hogy megtekinthesse foglalási előzményeit, és érvényesíthesse az elfelejtett jogát (RTBF), ha ezt akarom tenni. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'A foglalási űrlapon megadott adatok, például név, e -mail cím, valódi cím, a foglalás indulási dátuma után legfeljebb 365 napig tárolódnak. Ezeket az információkat titkosított formában tároljuk adatbázisunkban így csak a felhatalmazott személyek tekinthetik meg. Ha foglalást végez, akkor a törvény értelmében a személyes adatait tárolnunk kell, amíg a foglalás érvényes. Ha a foglalás befejeződött, akár azért, mert törölték, akár kijelentkeztek, akkor gyakorolhatja RTBF -jét bejelentkezve és az "Ön adatai" oldalon. a foglalás befejezése után. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Ha beleegyezik, hogy adatait a fent leírtak szerint tároljuk, jogilag kötelesek vagyunk ezt a hozzájárulást adatbázisunkban tárolni. Ez az információ tartalmazza az Ön IP-számát és a feliratkozási űrlap tartalmát. őrizze meg ezt a beleegyezési értesítést határozatlan ideig (ez törvényi követelmény). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Még nem mondta el nekünk, hogy gyűjthetünk -e Önről személyazonosításra alkalmas adatokat');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Ön hozzájárult ahhoz, hogy a foglaláshoz szükséges személyazonosításra alkalmas adatokat összegyűjtsük');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Ön azt mondta nekünk, hogy ne gyűjtsünk személyazonosításra alkalmas adatokat');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Nem adott nekünk engedélyt a személyes adatok gyűjtésére');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Ahhoz, hogy bizonyos műveleteket elvégezhessen ezen a webhelyen, össze kell gyűjtenünk Önről személyazonosításra alkalmas adatokat, de Ön nem adott engedélyt erre.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Engedélyek módosítása');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Tulajdonságok folytatása');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'Alkalmazásengedélyek');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Vendégadatok');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Ezek az adatok, amelyeket a különböző szálláshelyek tárolnak Önnek. A különböző szállodák eltérő rekordokat tárolhatnak attól függően, hogy mit adtak meg a foglalás során.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Ön nem tárol adatokat egyetlen szállodával sem ebben a rendszerben');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profiladatok');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Ez az Ön számára tárolt fő adathalmaz, különbözve azoktól, amelyeket különböző tulajdonságokkal osztott meg.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Nem mentett profilinformációt');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Itt vannak a személyazonosításra alkalmas adatok, amelyeket ezen a webhelyen tárolunk Önnek. JSON (JavaScript Object Notation) formátumban készült, amely könnyű adatcsere-formátum. Az emberek könnyen olvashatják és írni, és a gépek könnyen értelmezik és generálják. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Névtelen');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Saját adatok');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'A jelen Felhasználási Feltételek (jelen "Megállapodás") elfogadásával elfogadja, hogy:

<ul>
<li>
Ön jogosult szállodákat foglalni ezen a webhelyen keresztül;
</li>
<li>
Ön legalább 18 éves;
</li>
<li>
Ön rendelkezik jogi felhatalmazással kötelező jogi kötelezettség létrehozására;
</li>
<li>
Ön a jelen Szerződésnek megfelelően fogja használni az oldalt;
</li>
<li>
Ön csak akkor fogja használni az oldalt, hogy jogos fenntartásokat tegyen magának vagy más olyan személynek, akinek törvényileg felhatalmazása van;
</li>
<li>
Ön tájékoztatni fogja az ilyen személyeket erről a megállapodásról, amely az én nevükben tett fenntartásaimra vonatkozik, beleértve az ezekre vonatkozó szabályokat és korlátozásokat;
</li>
<li>
Az Ön által a Weboldalnak megadott minden információ igaz, pontos, aktuális és teljes; és
</li>
<li>
Meg fogja védeni a fiókadatait, és felügyeli, és teljes mértékben felelősséggel tartozik fiókja saját és bárki más általi használatáért.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'A biztonság és az átláthatóság fontos számunkra.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Nagyon komolyan vesszük az adatok tárolásával kapcsolatos felelősségeinket. Minden személyazonosító információt (PII) titkosítva tárolunk adatbázisunkban, ipari szabványos algoritmusok használatával, hogy csak az arra jogosult felhasználók láthassák ezeket az információkat.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Letöltheti az összes általunk tárolt PII -t.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Letöltés most');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Elfelejtett jog (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Úgy gondoljuk, hogy képesnek kell lennie <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> törlésére </a> a < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Személyazonosításra alkalmas információ </a>, ha szeretné és ha megvalósítható. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Ön nem regisztrált ezen az oldalon. Általános tartózkodási helyét (országát) és IP -számát legfeljebb 24 órán keresztül tároljuk, majd töröljük.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Ön nem regisztrált ezen az oldalon, és leiratkozott az adatgyűjtésről. Nem tároltuk az Ön PII -jét.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Ön regisztrált az oldalon, és nincs függőben lévő vagy aktív foglalása. A jelenleg birtokában lévő legtöbb információt anonimizálhatjuk. Szeretné ezt megtenni?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Megjegyzés: Ez nem törli a fiókját, egyszerűen anonimizálja a nyilvántartásainkat, hogy fiókja ne lehessen társítani Önt mint személyt. A törvény értelmében számviteli célból továbbra is tárolnunk kell PII -jét minden vendégrekord törlése. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Ön regisztrált az oldalon, de fennáll a foglalása, és jelenleg nem tudjuk névteleníteni adatait. Ezeket az adatokat a foglalás befejezése után legfeljebb egy évig őrizzük meg, akkor törölni kell, ha nem választja el azt megelőzően. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Mivel Ön ingatlankezelő webhelyünkön, nem kínálhatjuk fel Önnek az adatok automatikus törlésének lehetőségét. Ehelyett kérjük, vegye fel velünk a kapcsolatot közvetlenül, hogy hozzárendelhessük ingatlanát egy másik kezelőhöz. Miután ezt megtettük, és eltávolítottuk ingatlankezelői státuszát, automatikusan törölheti adatait. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Felejts el!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Ezt nem lehet visszavonni!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Adatait töröltük!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sajnáljuk, nem tud foglalni, mivel az e -mail címe érvénytelen');
jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Ez az oldal lehetőséget ad arra, hogy névtelenné tegye azokat a vendégeket, akik adatait a rendszerben tárolják. Ez lehetővé teszi, hogy megfeleljen a GDPR -nek, de ezen az oldalon semmilyen más információt nem szerkeszthet. ingatlankezelőként kell bejelentkeznie a kezelőfelületre. A feltételezés az, hogy egy történelmi vendég felvette Önnel a kapcsolatot, és azt kérte, hogy engedélyezze számukra, hogy éljenek az elfelejtés jogával. Ha nem tud bejelentkezni a webhely kezelőfelületére (talán a felhasználót nem számukra hozták létre, amikor lefoglalták), akkor ezt a területet használhatja anonimizálásra, miután megerősítette személyazonosságát. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Vendég névtelenítése');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Anonimizált vendégadatok');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Nem lehet anonimizálni');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Szükségünk van az Ön engedélyére, hogy tárolhassuk adatait, mielőtt lefoglalnánk. IDE KATTINTVA engedélyt adhat nekünk.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Engedélyezi a GDPR -kompatibilis funkciót?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NEM AJÁNLJUK, hogy TILTSA LE A GDPR KOMPLEKTÍV FUNKCIÓT. A Jomres beépített funkciókkal biztosítja, hogy webhelye Jomres része megfeleljen a GDPR-nak. Ha letiltja nem szabad, ha az EU -ban van, vagy üzleti tevékenységet folytat az uniós polgárokkal), akkor a Jomres automatikusan azt feltételezi, hogy az oldal minden látogatója engedélyezte személyes adatainak engedélyezését. Az alkalmazás engedélye és a Saját adatok oldalak nem lesznek megjelennek, és a felhasználóknak nem kell megadniuk az engedélyt az adatok gyűjtésére. ');


jr_define ('EMPTY_TEMP_DIR', 'Üres temp dir');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Ideiglenes fájlok törölve');

jr_define ('MACHINE_TRANSLATION', 'Gépi fordítások');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Forrásnyelv');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Lehetőség van gépi fordítási funkció bekapcsolására. Ez lehetővé teszi, hogy egy nyelven írjon be karakterláncokat, és a fordítások távoli szolgáltatásokból származhatnak. Ne feledje, hogy nem minden fordítási szolgáltatás támogatja az összes nyelvet. további részletek.' );

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Szobatípusok');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Új szobatípus');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Létrehozhat és szerkeszthet szobatípusokat ezen az oldalon. Ezek a szobatípusok csak erre a tulajdonságra vonatkoznak. Az ingatlan beállításakor először néhány szobatípusra van szüksége. Használhatja az alábbi szobatípusokat is: a rendszergazda, vagy felveheti a sajátját. Ha már rendelkezik egy vagy több szobatípussal, akkor létrehozhat ilyen típusú szobákat. A szobák birtokában tarifákat (árakat) hozhat létre ezekre a szobákra, mivel a tarifák szobatípusokhoz kapcsolódnak. . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'A menedzserek létrehozhatnak szobatípusokat?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Ezzel az opcióval konfigurálhatja, hogy a menedzserek létrehozhassanak -e saját szobatípusokat a kezelőfelületen. Erősen javasoljuk, hogy hagyja ezt a beállítást Nem értékre, amikor először használja a Jomres -t, különösen akkor, ha portálon, mert az összes szobatípust a rendszergazdai területen kell létrehoznia. A menedzserek által létrehozott szobatípusok megjelennek a keresési űrlapokon, de mivel ezek a szobatípusok az egyes ingatlanokra jellemzőek, csak egy ingatlan jelenik meg a keresési eredményekben, ha az adott szobatípust kiválasztja a keresések során. Ha azt szeretné, hogy csak a Szuper ingatlankezelők hozzanak létre szobatípusokat, akkor hagyja ezt az opciót Igen értéken, és a Beléptetés -bővítmény segítségével engedélyezze, hogy csak a szuper menedzserek tekinthessék meg a "Beállítások> Szobatípusok" menüopciót. ki az ingatlan szobáiban, és használja a Speciális vagy Micromanage tarifaszerkesztési módokat.');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Szoba/ingatlan típus frissítve');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Szobatípusok megjelenítése a keresési beállításokban');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Ha úgy dönt, hogy engedélyezi az ingatlankezelőknek saját szobatípusok létrehozását, akkor kiválaszthatja, hogy megjelenítse -e a létrehozott szobatípusokat a keresési lehetőségekben, ahol a szobatípusok megjelenítését választotta.');

jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Ne használja újra ugyanazt az e-mail címet minden foglalásnál. <br/> Ha egyedi domainje van (pl. nem Gmail e-mail címe) a vállalkozásához, akkor használja a vendég telefonszámát e -mail címük. Az e -mail cím így nézne ki: 123456@mydomain.com <br/> Ez biztosítja, hogy a foglalás létrehozásakor új vendég jön létre. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'E -mail cím');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Jelszó');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Örülünk, hogy újra nálunk szeretne foglalni. Ahhoz, hogy az összes foglalását együtt kezelhesse, be kell jelentkeznie, hogy a foglalást hozzáadhassák fiókjához. Ez is biztosítja, hogy Ön jogosult a megadott e-mail cím használatára. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Ha nem tudja a jelszavát, küldhetünk Önnek egy jelszó -visszaállító e -mailt. Kérjük, kövesse az e -mailben található utasításokat a jelszó visszaállításához.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Elfelejtette jelszavát?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonimizálja a nevét?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Ha úgy dönt, hogy névtelenné teszi a nevét felülvizsgálat közben, akkor a kezdőbetűit használjuk.');
jr_define ('ANONYMOUS', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'mondta');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Válasz erre az értékelésre');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Írja be ide a válaszát.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Az Ön válasza');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Fő felülvizsgálat');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Véleményválasz mentve');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Mielőtt felülvizsgálati választ küldene, olvassa el az alábbiakat. Válasz elküldésével megerősíti, hogy elfogadja ezeket a feltételeket.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Milyen irányelveink vannak a felülvizsgálati válaszra?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Válaszolsz az ingatlanod felülvizsgálatára. <em> nem </em> használhatod a válaszodat kereskedelmi vitafolyamatként. Ha jelentést kell tenned, használd a "Jelentést" Áttekintés "gomb a listán, és nem ez az értékelés válaszoldala. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Ha elhagyta a választ, nem tudja szerkeszteni.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Engedélyezett és bátorított');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Teljes válasz a felülvizsgálatra. </li>
    <li> Udvariasság és őszinteség. </li>
    <li> Értelmes válaszok a lektor problémáira (ne feledje, lehet, hogy másoknak is hasonló problémái vannak, de nem éltek a lehetőséggel, hogy véleményt tegyenek közzé). </li>
    <li> Bátorítsa a vendéget, hogy lépjen kapcsolatba Önnel a problémák megoldása érdekében.
    <li> Mindig ne feledje, hogy a leendő vendégek látni fogják a válaszát. Ügyeljen arra, hogy mindig profi legyen. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Nem engedélyezett');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Kereskedelmi viták. </li>
    <li> Kérdések a véleményezőnek vagy másoknak. </li>
    <li> Kérdéses nyelv (beleértve az átkozást is). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Utoljára futott');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Ütemezés');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Számlaszámok');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Használ egyedi számlaszámokat?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Beállíthatja a rendszert egyéni számlaszámok használatára. Ez csak az új számlákat érinti.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Kezdő szám');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Számok egymás után jönnek létre. Mi legyen az első szám?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Milyen formátumú legyen a számlaszám?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Itt állítsa be a számlaszám formátumát. Egy formátum lehet a következő: {N}/{D} vagy {N}/{Y}, ahol N az automatikusan generált szám, D = dátum YYYYYMMDD ( 20190131) vagy Y = YYYY (2019). Minden egyéb alfanumerikus karakter, amely nem szerepel göndör zárójelekben, egyedül marad, így a {N}/{D} -L kinézetű minta számlaszámot eredményez (21), valahogy így néz ki: 21/2019-L ');jr_define ('_JOMRES_SURCHARGE_TITLE', 'Felár');
jr_define ('_JOMRES_SURCHARGE_DESC', 'További díj, amelyet a szoba foglalásakor fizetnek (naponta számítva)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritizálja az egész webhelyre kiterjedő címkéket?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'A címkeszerkesztésben elmentett egyéni szöveg vagy a lang fájl karakterláncok fordítása oldalak "webhelyszintű" címkéknek minősülnek. Az ingatlankezelők személyre szabhatják a címkéket minden tulajdonhoz a címke szerkesztő funkciójával a kezelőfelületen. Ez lehetővé teszi egy ingatlankezelőnek, hogy különböző szövegekkel rendelkezzen a tulajdonához, ami hasznos, ha a tulajdonság eltér a webhely összes többi tulajdonságától. <br/> Amikor a rendszer címkeszövegeket keres, akkor az egész webhelyre kiterjedő szövegeket részesíti előnyben a tulajdonságokkal szemben specifikus szövegek, amelyek azt jelentik, hogy ha létezik az adott címkére egy webhelyre kiterjedő szöveg, akkor a rendszer először ezt választja. Ha ezt a lehetőséget Nem értékre állítja, akkor a rendszer a tulajdonságokra jellemző szövegeket részesíti előnyben az egész webhelyre kiterjedő szövegekkel szemben. ');

jr_define ('_JOMRES_REFERRER', 'Ajánló');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Ez megváltoztatható, ha engedélyezőlistára kerül, így a "Világ legjobb foglalási webhelye" webhely "WBBS" -re vagy hasonlóra módosítaná.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Könyvtári csomagok');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'A szállító és a csomópont modulok külön (ingyenes) csomagok a Jomres számára. A csomagokat ezen az oldalon újratelepítheti.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Könyvtári csomagok újratelepítése');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Nem lehet törölni a tulajdonságtípust, mert néhány tulajdonság továbbra is használja. Először törölnie kell ezeket a tulajdonságokat egy másik tulajdonságtípusra. Mielőtt megpróbálná törölni ezt. Tulajdonság UID -k, amelyek megakadályozzák a törlést:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Nem lehet visszavonni a tulajdonságtípus közzétételét, mert még mindig használja néhány tulajdonság. Először módosítsa ezeket a tulajdonságokat egy másik tulajdonságtípusra, mielőtt megpróbálja visszavonni ezt. Tulajdonság -azonosítók, amelyek megakadályozzák a módosítást:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Véletlenszerű e -mail címek');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Véletlen e -mailek felajánlása');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Megengedheti a rendszernek, hogy véletlenszerű e -mail címeket generáljon az irányítópult Gyorsfoglalás felugró ablakában. Ez lehetővé teszi a vezetőknek és a recepciósoknak, hogy foglalásokat hozzanak létre azoknak a vendégeknek, akiknek nincsenek e -mail címeik. időmegtakarításként olyan webhelyeken, ahol sok recepciós/menedzser érti, hogy ezeket a véletlenszerű e -maileket soha nem fogják valódi kommunikációra használni, a cél az, hogy elkerüljük azt a tényt, hogy Jomres -ban minden vendégnek rendelkeznie kell e -mail címmel. a következő mező. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Ez nem lehet normális e -mail domain, például gmail vagy outlook. Ehelyett lehet saját domain, vagy valami más, például "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Feltöltési terület');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Nincs felhasználói szerep');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepciós');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Ingatlankezelő');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Felfüggesztve');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Törölt a CMS -ből');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Ha kedveled Jomres -t, kérlek, hagyj véleményt ezeken az oldalakon');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Kedves ember vagyok, már írtam véleményt');

jr_define ('_LICENCE_PROMPT_DEAR', 'Kedves');
jr_define ('_LICENCE_EXPIRED', ', a Jomres licenc kulcsa lejárt, így hiányoznak ezek a nagyszerű szolgáltatások és előnyök!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Bővítményfrissítések és új plugin -kiadások');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Csak exkluzív tagok E -mail/Jegyek támogatása');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Aggasztó Jomres Core frissítések');
jr_define ('_LICENCE_EXPIRED_POST', 'Kapcsolódjon hozzánk a problémamentes fizetési megoldásokért, és kapjon hozzáférést az összes bővítményhez és a csak tagok támogatási szolgáltatásaihoz.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Hozzáférés az összes bővítményhez most!');

jr_define ('_LICENCE_INVALID_KEY', 'Sajnos úgy tűnik, hogy nem érvényes Jomres -licenckulcsot használ, így hiányoznak ezek a nagyszerű szolgáltatások és előnyök!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Bővítmények </a>, amelyek nagymértékben kiterjesztik a Jomres funkcióit');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Csak exkluzív tagok E -mail/Jegyek támogatása');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Aggasztó Jomres Core frissítések');
jr_define ('_LICENCE_INVALID_POST', 'Kapcsolódjon hozzánk a problémamentes fizetési megoldásokért, és kapjon hozzáférést az összes beépülő modulhoz és csak tagok támogatási szolgáltatásaihoz.');
jr_define ('_LICENCE_INVALID_START', 'Hozzáférés az összes bővítményhez most!');

jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Felhasználók');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Bizottság');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Előfizetések');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Számlák');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portál');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Fordítások');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Eszközök');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Jelentések');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Beállítások');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Súgó');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Összes tulajdonság a rendszerben');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Közzétett ingatlanok');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Publikálatlan tulajdonságok');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Jóváhagyott tulajdonságok');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Jóváhagyást igénylő tulajdonságok');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Összes vélemény');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Publikálatlan vélemények');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Jelentések áttekintése');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres Rendszerinformáció');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Ennek a tulajdonságnak a tulajdontípusa nincs közzétéve, előfordulhat, hogy nem jelenik meg a keresési eredményekben. Kérjük, lépjen kapcsolatba a webhely rendszergazdájával a tulajdonság típusának közzétételéhez, vagy módosítsa a tulajdonság típusát a Tulajdonság szerkesztése oldalon.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Tulajdonságtípus frissítése');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Jövedelem (kifizetett összegek)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Nem lehet törölni a tulajdonság tulajdonságot');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '", mert a következő tulajdonság (ok) használják:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API teszt');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Ez az oldal elvégzi a REST API alapszintű tesztelését a Jomres beépített funkcióival. Meghívja a Jomres REST API-t, hogy megnézze, érvényes választ kap-e.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'A szerver felhívta ezt az URL -t, hogy megnézze, érvényes -e a válasz:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Az oldal ezt a választ kapta:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Úgy tűnt, hogy a teszt a várakozásoknak megfelelően zajlik, valószínűleg nem lesz problémája a REST API kérések fogadásával az internet többi részéről.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'A teszt sikertelen, nézze meg a Válasz mezőt, ha sok html -nek tűnik, vagy 404 -es üzenetet kapott, akkor a szerver átirányítja a hívásokat egy másik URL -re. Ez megakadályozza, hogy API -t kapjon hívások. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Szindikációs teszt');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'A Jomres App szerver fenntartja az összes Jomres webhely listáját. Ez lehetővé teszi számunkra a terjesztési hálózat felépítését. Ezt a hálózatot úgy terveztük, hogy felhasználóink ​​megjeleníthessék saját webhelyeik tulajdonságait, és különösen az új webhelyek esetében, hogy SEO -jelenlétet biztosítson a neten. A cél az, hogy minden Jomres -webhely együttműködjön, és bizalmat építsen a hálózatban. E szolgáltatásért nem kell fizetni. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'A webhely jelenleg nem szerepel a terjesztési hálózat részét képező Jomres App kiszolgálón. Ez a szerver újra megpróbálja hozzáadni ezt a kiszolgálót a hálózathoz. Ha a következő 6 oldal néhány oldalbetöltés, ez nem változik, ellenőrizze, hogy a fenti csatlakozási teszt megfelel -e a teszteknek. Megjegyzés: a localhost szervereket nem lehet hozzáadni a hálózathoz. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Gratulálunk, a szervere szerepel a Jomres App szerverén.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Szindikált tulajdonságok');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Íme néhány más ingatlan, amely elérhető az ingatlanhálózatunkból');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Szindikációs statisztika');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Gratulálunk, szervere szerepel a Jomres -szindikációs hálózaton. A tulajdon (ok) hamarosan megjelennek más Jomres -webhelyeken, ha még nem jelennek meg.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Az Ön telepítése nem része a Jomres -szindikációs hálózatnak, ezért az Ön tulajdona (i) nem jelennek meg más Jomres -alapú webhelyeken, és Ön nem részesülhet ebből az ingyenes hirdetésből.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktív Jomres telepítések:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'A Jomres telepítések teljes száma, amelyek megosztják a Jomres Syndication Network tulajdonságait webhelyeiken.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Összes tulajdonság:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Ez a JSN -ben elérhető ingatlanok száma.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'A teljes tulajdon megjelenítése:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Összesen minden alkalommal, amikor egy Jomres -tulajdont egy másik Jomres -alapú webhelyről linkeltek össze.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'A Jomres Syndicate Network (JSN) egy ingyenes szolgáltatás, amely minden Jomres -felhasználó számára elérhető. Célja, hogy ingyenes hirdetést biztosítson ingatlanjairól más Jomres -alapú webhelyeken. A cél az, hogy segítsen gyorsan elindítja webhelyét, és ingyenes hirdetést kínál, hogy felismerjék és megbízhatóak legyenek az ingatlanjai, mert nagy megbízhatóságú, nagy relevanciájú webhelyekhez kapcsolódnak, amelyeket a keresőmotorok már jól ismertek. Lásd ezt <a href = "https: //www.jomres.net/features/jomres-syndication-network target="_blank"> cikk a weboldalunkon </a> és <a href =" https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network target="_blank"> a kézikönyv </a> további információkért. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'Ez a vendégprofil adatai, mezők ezzel a szimbólummal <i class = "fa fa-users" aria-hidden = "true"> </i>
 nyilvánosan láthatók, míg a <i class = "fa fa-user-secret" aria-hidden = "true"> </i> szimbólumú mezőket csak Ön, a házigazdák és a webhely rendszergazdái láthatják. <br/> <br/> A házigazdák csak akkor láthatják a privát információkat, ha már létrehozott velük foglalást. <br/> <br/> Az Ön adatait biztonságosan titkosítjuk, és AES-256 titkosítással tároljuk adatbázisunkban. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Ezek a mezők nem kötelezőek, azonban a házigazdák az itt található információk alapján megállapíthatják, hogy úgy érzik -e, hogy bízhatnak benned, ezért jobb, ha hozzáadod az információkat. Ne feledd, azt kéred, hogy maradj a tulajdonát, és elutasíthatnak, ha úgy érzik, hogy nem vagy megfelelő, vagy ha az életrajzod nem tartalmaz elegendő információt. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Vezetői engedély');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Útlevél száma');
jr_define ('GUEST_PROFILE_IBAN', 'IBAN szám');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'Rólam');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Ez a "Rólam" szakasz nyilvánosan megtekinthető, ezért ne adjon meg semmilyen privát információt. Ennek ellenére tegyen erőfeszítéseket, hogy annyit tegyen meg, amennyire jól érzi magát, megosztja a szenvedélyeit, amit a megélhetés, a hobbid stb. Használhatod a Markup -ot, hogy adj neki egy kis jazzt. A házigazdák érezni akarják, hogy bízhatnak benned a tulajdonságaikban. Győződj meg róla, hogy a képed valódi kép rólad, nem a kutyádról vagy autó (igen, srácok, veled beszélünk!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Adja meg az esetleges különleges követelményeit, például az egyszerű hozzáférési igényeket itt. Ezek nem jelennek meg nyilvános profilján, de a foglalás során hozzáadásra kerülnek a foglalási adatokhoz.');

jr_define ('VIEW_HOST_PROFILE', 'Gazda profilja');

jr_define ('GUEST_PROFILE_TITLE', 'Vendégprofil');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Saját profil');

jr_define ('GUEST_PROFILE_WELCOME', 'Szia, hadd meséljek egy kicsit magamról.');
jr_define ('GUEST_PROFILE_MY_NAME', 'A nevem');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'és én innen származom:');
jr_define ('GUEST_PROFILE_IN', 'régió');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Saját adatok');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Minden tőlünk telhetőt megteszünk, hogy ellenőrizze a vendég- és fogadóadatokat, de Önnek meg kell tennie a kellő gondosságát, és maga dönti el, hogy megbízható -e ez a személy vagy sem.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Saját tulajdonságok');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Saját vélemények');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Ezt mondtam erről a tulajdonságról:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Ennek a tulajdonságnak adtam a következő pontszámot:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Saját vélemények');
jr_define ('GUEST_PROFILE_OF_ME', 'Amit mások mondanak rólam');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Amit ez a házigazda mondott rólam');
jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Vendég véleménye');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Véleményem erről a vendégről');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Íme néhány példa vendégértékelésre a labda gurítása érdekében: <br/>

<ul>
<li> (a vendégek neve) örömmel fogadtuk! Tisztán hagyták a teret, és csendben voltak a hétvégén. Zökkenőmentes kommunikációjuk volt, és várom, hogy újra velem maradhassanak! </li>
    <li> Szerettem a (vendég neve) nevet, mert tisztelettel bánhattak a hellyel, jól érezték magukat és élvezték a környéket. Remekül bérelték a teret, és remélem, hogy újra vendégül láthatom őket. </li>
    <li> A (vendég nevével) tiszteletben tartották az összes házirendemet, és könnyedén be tudtak jönni és menni. Szerettem ott lenni, mert tiszteletteljesek és csendesek voltak. Nagyon ajánlom másoknak is! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Sajnálom, nem találom a felhasználót. Valószínűleg még nem adták meg a fiókadataikat.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Vendég');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define ('WORDPRESS_THEME_ADVICE', 'A Jomres a Bootstrap keretrendszerre épül, ezért azt a Bootstrap alapú témára kell használni. Javasoljuk a Bootstrap 3 alapúat. Ha nincs hozzáférése egy témához, javasoljuk, hogy használja a Jomres Leohtian téma a Wordpresshez, amelyet <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> letöltés innen. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Megjelenítés megjelölése');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Foglalás nincs megjelölve');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Foglalások');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Show');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statisztikák ehhez a felhasználóhoz');

jr_define ('BOOKING_NOSHOW_INFO', 'Foglalás és meg nem jelenés információk a Jomres -szindikátus -hálózatból származnak a foglaláskor. Anonimizált adatokból származnak, és Ön használhatja fel annak eldöntésére, hogy ez a vendég veszélyezteti -e a foglalás teljesítését. Ha a rendszer arról számol be, hogy az adatok ismeretlenek, valószínűleg azért, mert ezt a rendszert nem ismeri fel a hálózat. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Ismeretlen');

jr_define ('CMF_CONFIG_TITLE', 'Csatornakezelési keretrendszer');
jr_define ('CMF_CONFIG_KEY', 'Csatornakezelési keretrendszer kulcsa');
jr_define ('CMF_CONFIG_KEY_DESC', 'The Channel Management Framework licenckulcs. Ezt a kulcsot meg kell adnia ahhoz, hogy le tudja tölteni a Channel Management Framework bővítményeket.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Az ingatlan nem lett jóváhagyva');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "A tulajdonát nem hagytuk jóvá. Ha úgy gondolja, hogy ez tévedésből történt, lépjen velünk kapcsolatba.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Ez egy gyermek vendég típus?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Állítsa ezt Igen értékre, ha ezt a vendégtípust gyermek vendégtípusnak minősítené.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Ha személyenként és éjszakánként szeretne fizetni, akkor létre kell hoznia néhány vendégtípust.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Annyi vendégtípust hozhat létre, amennyire szüksége van. Próbálja ki úgy, hogy csak egy \"Felnőtt\" nevű vendégtípust hoz létre. Hagyja az összes beállítást az alapértelmezett értékükön. Ezután, ha például adjon 50% kedvezményt a 12 év alatti gyermekeknek, ha új vendégtípust hoz létre, és nevezze \"12 év alatti gyermekeknek\". Állítsa az \"Add variancia?\" opciót - (negatív) értékre, és állítsa a \"Variance\" értéket 50 -re. Ez azt jelenti, hogy ha gyermekeket adnak hozzá a foglaláshoz, akkor a szoba szobaárának 50% -át számolják fel. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Árak manuális beállítása");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Állítsa be a minimális éjszakákat manuálisan");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Minimális éjszakák beállítása");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Állítsa be <em> éjszaka árát </em> a hét napjai szerint");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "<em> éjszakánkénti ár </em> beállítása dátumtartomány szerint");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "<em> minimális éjszakák </em> beállítása dátumtartomány szerint");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "A dátumválasztók és az árbevitel lehetővé teszik, hogy egy árat állítson be egy adott dátumtartományban. Válasszon ki egy kezdő és befejező dátumot, írjon be egy árat, majd kattintson az Éjszakai ár beállítása gombra.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "A dátumválasztók és a minimális éjszakák megadása lehetővé teszi, hogy egy értéket állítson be a minimális éjszakákhoz egy adott dátumtartományban. Válasszon kezdő és befejező dátumot, írjon be egy számot a minimális éjszakákhoz, majd kattintson a \"Beállítás\" gombra. minimum éjszakák ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Ezzel a legördülő menüvel válthat az egyes dátumok árainak beállítása, illetve az egyes dátumok minimális éjszakáinak beállítása között. Használhatja a <em> hét napja </em> választót, a <em> dátum szerint tartomány </em> választó vagy állítsa be az árakat/minimális éjszakákat a dátumok kézi szerkesztésével. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Ezzel a legördülő menüvel válthat az egyes dátumok árainak beállítása, az egyes dátumok minimális éjszakáinak beállítása között. Használhatja a <em> dátumtartomány </em> választót, vagy beállíthatja az árakat/minimális éjszakákat a dátumok kézi szerkesztése. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Árak vagy minimális éjszakák beállítása");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "<em> minimális éjszakák </em> beállítása a hét napjai szerint");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "A hét napja mezők lehetővé teszik a minimális éjszakák számának beállítását egy adott hét napra, ha a hét napja gombra kattint, a hét minden napja a min éjszaka beállításra lesz állítva. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Manuálisan beállított árak/minimális éjszakák");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Árak beállítása");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Minimális éjszakák beállítása");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Éjszakánként");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Min éjszaka");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Max éjszaka");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Itt hozhat létre tarifákat, amelyek az ingatlanban lévő szobatípusokhoz vannak társítva.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Leggyakrabban használt lehetőségek");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Utasítások");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Ha különböző árakat szeretne hozzáadni különböző vendégek számához, <em> több szobatípust is létrehozhat minden szobatípushoz </em>, és különböző min/max vendégek értékeket tartalmazhat ezekben a tarifákban. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Adjon nevet a tarifának, határozza meg az éjszakák maximális számát, valamint a foglalási űrlapon feltüntetett minimális és maximális vendégszámot a tarifa felajánlása előtt. <br/> <br/> Használja a dátumválasztó panelen az árak és a minimális éjszakák beállításainak hozzáadásához egy dátumtartományhoz, vagy közvetlenül szerkesztheti a bevitelt. Ha nem szeretné, hogy a tarifát egyáltalán felkínálják bizonyos dátumokon, hagyja 0 (nulla) értéket ezeket a dátumokat. <br/> <br/> Különböző minimális éjszakákat rendelhet különböző dátumokon, így ha hosszabb foglalásokat szeretne a fesztivál/konferencia hetek alatt, akkor beállíthatja, hogy a minimális éjszakák magasabbak legyenek ezekben az időszakokban. <br/ > <br/> Ha személyenként és személyenként (PPPN) számol fel, akkor engedélyezheti ezt a beállítást a Beállítások> Tulajdon beállítása> Tarifák és pénznem lapon, majd hozza létre a kívánt vendégtípusokat a Beállítások> Vendégtípusok menüben. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Extra lehetőségek");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Ezek további opciók, amelyeket nem olyan gyakran használnak, de mégis elérhetők. <br/> <strong> A PPPN figyelmen kívül hagyása </strong> A személyenként és éjszakánként figyelmen kívül hagyható eszközök. Többféle tarifa is lehet ugyanarra a szobatípusra, például az egyik személyenként és éjszakánként fizet, a másik nem. <br/> <strong> Hétvégék engedélyezése </strong> A Hétvégék engedélyezése lehetőséget kínál arra, hogy csak olyan tarifát szabjon ki elérhető hétköznapokon, például ha különleges tarifát szeretne az üzleti utazók számára. Ebben az esetben a Nem értéket, a minimális éjszakákat pedig 1 -re, a maximális éjszakákat pedig legfeljebb 5 -re állítja. <br/> <strong> Hétvégén csak </strong> csak a Hétvégék opció a Hétvégék engedélyezése opció fordítottja. A hétvégi napoknak tekinthető beállítások a Tulajdon konfigurációs beállításaiban érhetők el. Ez lehetővé teszi, hogy meghatározzon egy csak hétvégi díjat, amelyet érdemes ajánlatot különleges eseményekre. <br/> <strong> Bejelentkezés a hét napján </strong> Ez az opció lehetőséget ad arra, hogy a bejelentkezést csak a hét bizonyos napjain végezze, és a legjobban a Tulajdonság -konfiguráció> Foglalások fül> Rögzített időszakok beállításokkal együtt használható. A felhasználók többsége ezt az opciót az Összes beállításra kívánja hagyni. <br/> Az utolsó két lehetőség, a <strong> Minimálisan kiválasztott szobák </strong> és a <strong> Már kiválasztott szobák maximális száma </strong> nagyon speciális és rendkívül bonyolult tarifájú ingatlanok számára hasznos. <em> Hacsak nincs különleges igénye, hagyja békén ezeket a lehetőségeket. </em> Akkor használja őket, ha csak akkor szeretné ezt a tarifát felajánlani, amikor a vendég már kiválasztotta a N számú szobát a foglalási űrlapon, például rendelkezhet egy alapdíjjal, ahol az alapértelmezett beállítások megmaradnak, és egy második díjszabással, ahol a már kiválasztott szoba minimum 1 -re van állítva, akkor ezt a második tarifát a foglalási űrlapon felajánlják, miután kiválasztották a szobát. " );
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Több tarifát is létrehozhat ugyanahhoz a szobatípushoz, így létrehozhat egy tarifát 1/7 -es min/max napokra, és egy második tarifát, ahol a minimum nap 7, a maximális 14 nap, és Ez lehetővé teszi, hogy olyan egyszerű vagy bonyolult árazási sémákat hozzon létre, amennyire szüksége van. Lehetővé teszi több tarifa létrehozását is, különböző feltételekkel, így rendelkezhet egy második díjcsomaggal, ahol a Bed & Breakfast ára alacsonyabb, és egy másik, drágább díjszabás az ágyra, a reggelire és az esti étkezésre. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Csak dátumválasztó napok beállítása");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Ingatlankategóriák');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Tulajdonkategória szerkesztése');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Állj!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Köszönjük, hogy telepítette a Jomres -t");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "A vagyonkezelés nyilvános oldalakon történik, nem a rendszergazda területén.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Ha nem ismeri Jomres -t, látogasson el a Súgó> Első lépések oldalra.");

jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Csatlakozz a Jomres -szindikátumhoz");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Miután beállította webhelyét, és készen áll a látogatók fogadására, csatlakozzon a Jomres.net szindikátushoz, és tegye közzé ingatlanjait más Jomres -webhelyeken.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Szüksége van legalább egy szobára az alábbi típusok közül, mielőtt tarifát hozhat létre:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Lépjen a Beállítások> Szobák menüpontba, és hozzon létre egy szobát, ha ezt megtette, akkor tarifát hozhat létre az adott szobatípushoz.");

jr_define ('JOMRES_PLATFORM', "Jomres Platform");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Csatlakoztatva");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Állítsa ezt Igen -re, ha már összekapcsolta Stripe -fiókját a Jomres platformmal.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live Account number");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Ez az Ön Stripe -fiók azonosítója, amely megtalálható a Stripe Dashboard panelen, a Beállítások> Fiókadatok menüpont alatt, és úgy néz ki, mint acct_xxxxxxxxx Ezt a mezőt akkor használja, ha több Jomres -telepítéssel rendelkezik, és ugyanazt a fiókot szeretné használni az összes webhelyet, és már csatlakozott hozzánk. Ha nem csatlakozott a Jomres Platformhoz, akkor nem elegendő itt megadnia adatait. Ehelyett keresse fel a Kapcsolat menüpontot az eszköztár Súgó szakaszában. Ha szeretné a kifizetések teszteléséhez a Webhely konfiguráció Hibakeresés lapján állítsa a webhelyet a gyártásról a fejlesztésre. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe élő titkos kulcs");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Ugrás a Fejlesztők> API kulcsok elemre a Stripe Dashboardon a titkos kulcsok megkereséséhez. Ezeket használja a rendszer, hogy ellenőrizze a fizetési űrlapból visszaadott foglalási adatokat, és hogy a foglalás mentése előtt letétet fizettek -e. . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Csíkteszt titkos kulcsa");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standard tarifa mód');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Alszik');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Hány embert tud elhelyezni ez a szálláshely?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'A vendégek száma a napi árban');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Extra felnőttek ára');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Gyerekek');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Személyenként és éjszakánként?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 napos módosító');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Kedvezmény a napi árra, ha 7 vagy több napos foglalás esetén hagyja ezt a beállítást nullára, ha nem akarja alkalmazni a kedvezményt.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 napos módosító ');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Kedvezmény a napi árra, ha 30 vagy több napos foglalás esetén hagyja ezt a beállítást nullára, ha nem akarja alkalmazni a kedvezményt.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Felnőttek');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Ár 2 felnőtt alapján');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Foglalás kedvezményes');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'to');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'mert a foglalás 7 napnál hosszabb.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'mert a foglalás 30 napnál hosszabb.');
jr_define ('JOMRES_CITY_TAX_HEADING', 'Városi adók');
jr_define ('JOMRES_CITY_TAX_VALUE', 'Városi adóérték');
jr_define ('JOMRES_CITY_TAX_METHOD', 'Adószámítási módszer');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Egyszeri díj');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Éjszakánként');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Vendégenként');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Vendégenként éjszakánként');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'A foglalási érték százaléka');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Takarítási díj');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Takarítási díj költsége');


jr_define ('JOMRES_COMPATABILITY_MODE', 'Kényszerítse a kompatibilitási tulajdonság konfigurációs módját?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "A kompatibilitási tulajdonságok konfigurációs módja több dologra is rákényszerül. A Jomres régebbi verzióiban az ingatlankezelők választhattak, hogy melyik tarifaszerkesztési módot használják, és számos más beállítás (amelyek közül néhány zavarosnak tűnhet) A kompatibilitási konfiguráció engedélyezése arra kényszeríti az összes új tulajdont, hogy csak a szokásos tarifaszerkesztési módot használja, amely modellezi a booking.com tulajdonságkonfigurációs funkcióit az árazás, a gyermekárképzés stb. tekintetében. .0, ezt az opciót Igen értékre kell állítani, de a régebbi telepítéseknél Ön dönti el, hogy az új tulajdonságokat automatikusan kompatibilitási módba kell -e állítani azok létrehozásakor. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Elfogad 18 év alatti gyermekeket?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Állítsa ezt az opciót Igen -re, ha engedélyezi a gyermekeket. Ha igen, akkor a Beállítások menüben lesz egy Gyermekpolitikák nevű opció, ahol szerkesztheti a gyermekekkel kapcsolatos beállításokat.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Gyermekszabályok');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'Hány éves korban megengedettek a gyermekek?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Gyermekenként, éjszakánként');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Gyermekenként, tartózkodásonként');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Gyermekkori árak');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Új gyermek aránya');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Gyermekkorlátozás szerkesztése');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Itt hozhatja létre ingyenes vagy fizetett gyermekárát. Az árak csak akkor érvényesek, ha a szobatípusok számára kihasználtsági szintet állított be.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Kor kezdve');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Kor -');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'éjszakánként vagy tartózkodásonként?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Díj');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Ha nulla vagy nincs beállítva, akkor ebben a korosztályban a gyerekek ingyenesek lesznek.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Életkor bejelentkezéskor');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Korok');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Foglaltsági szintek');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maximum felnőttek');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maximum gyermekek');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maximum kihasználtság');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Foglalási szint szerkesztése:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Ennek a szobatípusnak a kihasználtsági szintjeinek szerkesztése. Ne vegye figyelembe a kiságyon alvó vendégeket (ezek hozzáadódnak az Extra létrehozásával)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Mennyi díjat kell fizetni minden további felnőttért?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Extra felnőttek');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Még nem konfigurálta a gyermekárfolyamokat.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Gyermekkorlátozás (ok) beállítása most');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Beállította a tulajdonát, hogy engedélyezze a gyermekek számára, de még nem állított be gyermekek számára kihasználtsági szintet.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Foglalási szintek beállítása');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Bármikor, amikor szerkeszt egy szobát vagy ingatlantípust, ellenőrizze és frissítse az ingatlan/szobák kihasználtságát, mivel ezek befolyásolják a foglalási űrlapon elfogadható vendégek számát.');

jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Felnőttek');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Gyerekek');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Felügyeleti beállítások szintje');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'A Jomres számos menü- és konfigurációs opciót tartalmaz, amelyeket használhat a webhely konfigurálásakor. Ezek túlnyomó részét soha nem kell módosítania, így alapértelmezés szerint el vannak rejtve. Választhatja, hogy megjeleníti -e ezeket a beállításokat Az alapszint csak azt mutatja meg, amire szüksége van egy webhely első beállításakor. A közös szint a leggyakrabban módosított beállításokat, a Minden pedig az összes lehetséges beállítást és menüopciót mutatja a rendszergazdai területen. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Alap');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Közös');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Minden');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Gyűjthetünk információkat a Jomres használatáról?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Szeretnénk információkat gyűjteni a Jomres használatával kapcsolatban. Személyazonosításra alkalmas adatokat nem tárolunk, a használatot anonimizáljuk, és csak arra használjuk, hogy megértsük, hogyan használják az emberek a Jomres -t.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Igen, ez rendben van');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Nem, nem értek egyet');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Egynél több ingatlanra fog foglalni?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'A Jomres egy- vagy többtulajdonú webhelyekhez használható. Ha csak egy ingatlanra foglal le foglalásokat, akkor sok lehetőség felesleges és zavaró lehet. Ezt a beállítást később módosíthatja a Beállítások> Webhelyen Konfiguráció> Portálfunkciók fül. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Csak egy tulajdonság');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Egynél több tulajdont fogok felsorolni');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "A Bootstrap keretrendszer melyik verzióját támogatja a sablon/téma?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "A Bootstrap keretrendszer minden verziója kissé eltérő html -jelölést igényel. A Jomres három Bootstrap -kompatibilis sablonkészlettel rendelkezik, mindegyik Bootstrap -verzióhoz. Biztosítani kell, hogy konfigurálja a megfelelő sablonkészlet használatához. akkor a kimenet, például az elrendezés, a módok és a menük nem fognak megfelelően működni. Ha később úgy dönt, hogy sablont/témát használ egy másik Bootstrap verzióval, akkor módosíthatja a Jomres által használt Bootstrap sablonkészletet az Adminisztráció> Jomres> Beállítások alkalmazásban > Egyéb lap. <br/> <br/> A Joomla 3 alapértelmezés szerint a Bootstrap 2 -vel kerül forgalomba, a Joomla 4 a Bootstrap 5 -öt fogja használni. A Jomres Leohtian sablon (Joomla) és téma (Wordpress) a Bootstrap 3 -at használja. saját Bootstrap fájljaikkal terjesztik, így ha kétségei vannak, forduljon a sablon/téma fejlesztőjéhez. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Csík tizedesjegyek a kibocsátási árakból?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Alkalmazza a csoportot javítás alapján?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Bizonyos mysql telepítéseknél probléma lehet a Jomres -lekérdezésekkel a Lista tulajdonságai, Vendégek listája és Számlák oldalon. Ha ezek az oldalak azt mondják, hogy X találatot mutatnak Y -ból, de semmi sem jelenik meg a listában, akkor ez az Igen opció megoldhatja a problémát. Nem, ha megosztott tárhelyet használ, és a tárhelyszolgáltatás nem teszi lehetővé a mysql felhasználó számára a "SET GLOBAL sql_mode =" parancs kiadását. ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Ez egy csatornatulajdon, nem adminisztrálható helyben, látogasson el a csatornakezelési keretoldalra, és keresse meg a tulajdonság távoli adminisztrációs linkjét');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Nincs Bootstrap a témában");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Közösségi média linkek');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Írja ide közösségimédia-fiókja nevét, például "jomres", ne a teljes URL-t');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'A szervezet által beszélt nyelvek vesszővel tagolt listája');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'A szervezet logójának URL-je');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres frissítve');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'A Jomres új verziója érhető el. Frissítenie kell, mielőtt tovább használhatná a Jomrest, mivel a frissítések javítják a funkcionalitást és biztosítják a telepítés biztonságát.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Jomres frissítése most');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Bővítményfrissítések');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'A beépülő modulok új verziói érhetők el a beépülő modulkezelőben. Frissítenie kell az összes beépülő modult, mielőtt folytatni tudná a Jomres használatát, mivel a frissítések javítják a funkcionalitást és biztosítják a telepítés biztonságát.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Frissítendő beépülő modulok');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Ha a licence már nem érvényes, szerezhet be egy új licenckulcsot weboldalunkról.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Bővítmények frissítése');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Új kulcs beszerzése');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Új kulcs mentése');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Tulajdon típusú képek");
