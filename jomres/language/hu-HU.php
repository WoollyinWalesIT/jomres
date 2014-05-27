<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Szállásfoglalás bejegyzése' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Adatok mutatása' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Általános beállítások' );
jr_define( '_JOMRES_COM_MR_BACK', 'Vissza' );
jr_define( '_JOMRES_COM_MR_YES', 'Igen' );
jr_define( '_JOMRES_COM_MR_NO', 'Nem' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Új' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Új szálláshely' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Új szálláshely jellemzői' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Új vendég' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Mentés' );
// View bookings
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Név' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Érkezés' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Távozás' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Felhasználó ADMIN hozzárendelése' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Név' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Felhasználó Név' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Jelenleg felhatalmazott' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Alapértelmezett szálláshely' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Megváltoztatás' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Belépési szint' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Felhasználó által módosított' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Recepciós' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Szálláshely menedzser' );
// Edit bookings
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Minden foglalás' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Új foglalások' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Foglalások szerkesztése' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Érk/Táv' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Vendég' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Szoba' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Fizetés' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Családnév' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Keresztnév' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Különleges kérés' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Kérjük, vegye figyelembe, hogy a különleges kérések némelyikéért felárat számolhatnak fel.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Kilépés a foglalásból' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'A ház száma vagy neve' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Utca/tér' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Település' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postai i.sz.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Vonalas telefon' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobiltelefon' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Emailcím' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nem léphet ki a foglalásból, amíg a vendég a folyamatban lévő foglalást be nem fejezi' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Előleg fizetéséből kilépve' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Kilépés megerősítése' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Foglalásból kilépve' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Napok száma az érkezésig' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Foglalás típusa' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Téves, hamis foglalás' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepció' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Szoba neve, száma' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Szoba' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Emelet' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Mozgássérült-barát?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. fő' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Szoba típusa' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Szoba típus leírása' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Szoba jellemzőinek listázása' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Fizetett előleg' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Előleg összegének beírása' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Összesen fizetendő' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Előleg referenciaszáma' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'On-line szállásfoglalás' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Előleg' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Előleg mentve' );
// Edit Language
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Szobáink' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Szálláshely' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Szobatípus' );
// Display guest form
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Vendég adatainak szerkesztése' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Családnév' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Keresztnév' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Házszám' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Utca/tér' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Település' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Postai i.sz.' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Vonalas tel.' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobil tel.' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Faxszám' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Hitelkártya szám' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Kártya kibocsátási dátuma' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Kártya lejárati dátuma' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Kibocsátás száma' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Kártyán lévő név' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Kérjük, válasszon' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Eltöltendő napok száma' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Vendégek száma' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Összesen' );
// Rooms tab
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'A szobák és a szálláshely beállításainak megtekintése' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Szobák' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Szoba jellemzői' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Szoba típusa' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Szálláshely' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Szálláshely jellemzői' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Szoba' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Típus' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Név' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Szobaszám' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Emelet' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Mozgássérült-barát?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. fő' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Jellemzők' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Szoba hozzáadva' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Elem szerkesztése' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Szoba jellemzői' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Jellemzők leírása' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Szoba jellemzője hozzáadva' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Szoba jellemzője frissítve' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Szoba típusa' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Szobatípus rövidítése' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Szoba típus leírása' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Szoba típus hozzáadva' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Szobatípus frissítve' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Elem szerkesztése' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Név' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Utca/tér' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Település' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Megye' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Ország' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Postai i.sz.' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel./fax' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'E-mail' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Szolgáltató e-mailcíme' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Honlap' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Jellemzők' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Szálláshely hozzáadva' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Szálláshely frissítve' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Szálláshely jellemzői' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Szálláshely jellemzőinek rövidítése.' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Szálláshely jellemzőinek teljes leírása' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Szálláshely jellemzői hozzáadva' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Szálláshely jellemzői frissítve' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Árak' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Ár megnevezése' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Részletes leírás' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Érv. kezdve' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Érv. eddig' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Napi díjszabás' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min. napok' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max. napok' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. fő' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. fő' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Szobatípus' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'PPPN mellőzése' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Hétvégék engedélyezése' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Díjszabás hozzáadva' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Díjszabás frissítve' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Elem szerkesztése' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Elem klónozása' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Díjszabás törölve' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Díjszabás szerkesztése' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Ünnepnapok' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Szállásfoglalás adatai mentve' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Beérkezett foglalás' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Lejárt foglalás' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Szállásfoglalások listázása' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'ÚJ foglalások' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Vezérlőpult' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Vendég ügyintézése' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Szálláshely adminisztrálása' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Foglalhatóság ' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Adatok jóváhagyása' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Családnév' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Keresztnév' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Házszám' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Utca/tér' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Település' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Postai i.sz.' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Vonalas telefonszám' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil telefonszám' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Nincs a megadott paramétereknek megfelelő szabadon lévő szobatípus' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Köszönjük, hogy igénybe vette szállásfoglalási szolgáltatásunkat.<br><br> <b>Kérjük, vegye figyelembe, hogy ez csak egy előzetes foglalás, és csak akkor válik érvényessé, ha megkapta tőlünk a visszaigazoló levelet.</center>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Előzetes foglalás ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Vendég kiválaszása ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Bejövő foglalás ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Ma nem várható előleg érkezése' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Foglalás eldobása ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Ma nincs be nem érkezett előleg' );
// Config panel
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Kiegészítők' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Díjszabás és árfolyam' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Kedvezmények' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Fájl feltöltése' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'Jelenlegi beállítások' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Magyarázat' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Egyszemélyes felár' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Bizonyosodjon meg, hogy ez az Igen-re van állítva, ha azt akarja, hogy a vendég felárat fizessen az egyszemélyes használatért' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Egyszemélyes felár' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Előleg fizetése százalékosan?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'A foglaló összege a teljes összeg százalékosan számoljuk ki? Ha nem, akkor a foglaló értékeként egy fix összeg alkalmazható' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'Bekért előleg összege' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'Per fő, per nap' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Válassza az Igen-t, ha /fő/nap díjszabással akarja megterhelni. Ha nem, akkor az ár /szoba/nap alapon lesz kiszámolva' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Fájlméret' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'A kép maximális mérete KB-ban' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Foglalt' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'A szállásfoglalás részletei' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Felhívjuk a figyelmét, hogy a szállásfoglalás egy törvényes szerződés, tehát ha bármi oknál fogva vissza kellene mondania vagy lerövidítenie a foglalást, ezért a szállásfoglalási szabályzatban meghatározottak szerinti kötbért köteles kifizetni.' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Szállásfoglalás visszamondása vagy megrövidítése</i> Ha le akarja mondani a szállásfoglalást, akkor azt kérjük írásban tegye meg (e-mailen, postai levélben vagy faxon). A szálláslemondásnak a következő költségei vannak:' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Az érkezés előtt 14 nap' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Visszaigazoló levél kinyomtatása' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Számla nyomtatása' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Vendégéjszakák száma: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'A szerződés létrejött: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Napi díjszabás: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Mindösszesen' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Köszönjük, hogy bennünket választott' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Reméljük, hogy hamarosan újra üdvözölhetjük Önt.' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Számla nyomtatása' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Szolgáltatás hozzáadása a számlához' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Szolgáltatás részletezése' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'A szolgáltatások értéke' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Egyéb megrendelt szolgáltatás' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Egyéb megrendelt elemek összértéke: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Elem hozzáadva a számlához' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Kép feltöltése' );
jr_define( '_JOMRES_FILE_UPLOAD', 'Fájl feltöltése' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'Csak a következő fáljtípusok feltöltése engedélyezett:\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Kérjük a feltöltés előtt válasszon ki egy fáljt' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'A fáljnév alfanumerikus karaktereket tartalmazhat (szóközöket és ékezetes betűket nem).' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'A fálj mérete meghaladja az Adminisztrátor által beállított maximum méretet.' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'A fájl NINCS feltöltve.' );
jr_define( '_JOMRES_FILE_UPDATED', 'A fájl sikeresen feltöltődött.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS Naptár' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'JS Naptár nyelvi fájlja' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Válassza ki azt a nyelvi fáljt, amely a Naptárban használható. Néhány Naptár hibás lehet! Bővebb infó: http://sourceforge.net/tracker/?group_id=75569&atid=544287' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'JS Naptár CSS fájlja' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Válassza ki a CSS stílusfáljt, amely a Naptárban használható' );
jr_define( '_JOMRES_COM_A_ODDS', 'Egyéb' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.' );
jr_define( '_JOMRES_FILE_DELETE', 'Kép törlése' );
jr_define( '_JOMRES_FILE_DELETED', 'Fájl törölve' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Törlés' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nem lehet ezt a szobát törölni, foglalások vannak rá. Szabadítsa fel a foglalások alól és próbálja meg újra.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Szoba törölve' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Szoba jellemzőinek törlése' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nem lehet törölni a szoba jellemzőit, egy néhány szobához hozzá van rendelve. Távolítsa el enne a szobáknak ezt a jellemzőjét és próbálja meg újra.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Szoba jellemzői törölve' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Szálláshely jellemzőinek törlése' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nem lehet törölni ennek a szálláshelynek a jellemzőit, egy szálláshelyhez hozzá van rendelve. Távolítsa el ennek a szálláshelynek ezt a jellemzőjét és próbálja meg újra.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Szálláshely jellemzői törölve' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Szobatípus törlése' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Nem lehet törölni ezt a szobatípust, egy szobához van hozzárendelve. Próbálja a szobát más szobatípushoz rendelni és próbálja meg újra.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Nem lehet törölni ezt a szobatípust, egy díjszabáshoz van hozzárendelve. Próbálja a díjszabást más szobatípushoz rendelni és próbálja meg újra.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Szobatípus törölve' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Szálláshely törlése' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'Szálláshely törölve' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Önnek nincs joga törölni ezt a szálláshelyet.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Teljes képméret' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Térkép megtekintése' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Leírás' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Szolgáltatások és adottságok' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Kikapcsolódás-, programlehetőségek' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Csillagtúra ajánlatok' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Árak' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Tömegközlekedés' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Működési és lemondási nyilatkozat' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Szálláshely címe' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'A látogatók foglalhatnak on-line' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Állítsa Igen-re, hogy a látogatók is foglalhassanak on-line.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Szállásfoglalások fix periódusra' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Ha Igen-re van állítva, akkor a foglalások fix periódusokra lesznek eszközölve. Ha ez Nem-re van állítva, akkor először bizonyosodj meg, hogy az "Előre definiált érkezési nap" opció nincs Igen-re állítva (ha csak nem akarod, hogy a vendégek egy bizonyos napon érkezzenek); különben a naptárban nem sok működő link lesz' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Foglalási periódus: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Szobák foglalása' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximum periódus, pl. 3 x 7 szállásfoglalási periódus = 21 nap' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Ez egy apartman/kulcsosház/villa?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'PL. a teljes ház egyben kiadó, nem szobánként ezen a szálláshelyen. Ha ez az eset áll fent, akkor meg kell bizonyosodni, hogy egy szoba van hozzárendelve minden egyes ilyen szálláshelyhez.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Szállásfoglalás végrehajtása' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Szállásfoglalás ellenőrzése, jóváhagyása' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Hétfő' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Kedd' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Szerda' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Csütörtök' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Péntek' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Szombat' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Vasárnap' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'H' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'K' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Sze' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Cs' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'P' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Szo' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'V' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'Foglalhatósági naptár' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Az aktuális dátum betűszíne' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'A megjelenített hónap napjainak betűszíne ' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'A nem megjelenített hónapok napjainak betűszíne' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Cella háttérszíne azokra a napokra, amikor a szállás/szoba szabad ' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Cella háttérszíne a meg nem jelenített hónapok napjainak' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Cella háttérszíne a foglalt napokra ' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Cella háttérszíne  előzetesen lefoglalt szobákhoz (amelyekre még nem fizettek előleget)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Cella háttérszíne múltbeli dátumokhoz' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Foglalt/Nem fogadóképes ' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Foglalhatóságok' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Előzetes foglalások ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Érkezési nap / dátum' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Csak azoknak a honlapoknak, amelyek fix periódusos foglalásokat ajánlanak. Válaszd ki a napot, amellyel az érkezéseknek kezdődniük kell.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fixált érkezési nap' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Üdülési periódus (napok)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Elérhetőségi naptár mutatása?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Válassza az Igen-t, az elérhetőségi, foglalhatóségi naptár mutatásához' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Elérhetőség, foglalhatóság' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Kattintson egy szabad dátumra a szállásfoglalási űrlap eléréséhez.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Hamis foglalások' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'Új hamis foglalás' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'Vendég törlése' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Vendég törölve' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Nem lehet a vendéget törölni, ha érvényben lévő foglalásuk van. Törölje a vendég foglalását és próbálja meg újra.' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'A szoba jelenlegi ára: ' );






jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Dohányzó' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', "Bármilyen" );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Naptár kimeneti formátuma' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'Ez az opció engedélyezi a felhasználónak, hogy megváltoztassa a szállásfoglaló rendszer naptárának kimeneti formátumát.' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'Naptár bemeneti formátuma' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'Ez az opció engedélyezi a felhasználónak, hogy megváltoztassa a szállásfoglaló rendszer naptárának bemeneti formátumát.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'A fix periódusú foglalások esetén rövid megszakítások engedélyezettek' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'A megszakítások hossza' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publikálva' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'PayPal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Nyomonkövetés' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Dátum' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Idő' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Felhasználó (username)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Művelet' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Részletek megtekintése' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Szűrés dátum szerint' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Szűrés felhasználónév szerint' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Szűrés művelet szerint' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Állapot' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Függő érkezések' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Mai érkezések' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Jelenleg helybéli' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Mai távozások' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Lejárt távozások' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Nem érkezett meg' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Ismeretlen felhasználó' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'Létrehozott szoba' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Frissített szoba' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'Törölt szoba' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Létrehozott szoba jellemző' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Frissített szoba jellemző' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Törölt szoba jellemző' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Szobatípus létrehozása' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Frissített szobatípus' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Törölt szobatípus' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Létrehozott szálláshely' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Frissített szálláshely' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Törölt szálláshely' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Létrehozott szálláshely jellemző' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Frissített szálláshely jellemző' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Törölt szálláshely jellemző' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Szerkesztett szálláshely beállítások' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Publikált szálláshely' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Létrehozott díjszabás' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Frissített díjszabás' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Törölt díjszabás' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'Szolgáltatás díjszabásának hozzáadása' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Beérkezett foglalás' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Lejárt foglalás' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Bevitt előleg' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'Létrehozott vendég' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Frissített vendég' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'Törölt vendég' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Lefoglalt szobák' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Létrehozott szolgáltatás' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Frissített szolgáltatás' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Törölt szolgáltatás' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Publikált szolgáltatás.' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'Bevitt hamis foglalás.' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Törölt hamis foglalás.' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Szolgáltatás neve' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Részletes leírás' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Név' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'Ár' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Szolgáltatás frissítve' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Elem szerkesztése' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'Szolgáltatás törölve' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Szolgáltatások adminisztrálása' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'Megjelenítsük a szolgáltatásokat a foglalás ideje alatt?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Állítsa ezt igenre, hogy a szolgáltatásokat is kínálja a vendégnek' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Választható szolgáltatások.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Hamis foglalás kezdődátuma' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Szolgáltatások visszavezetése' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Hamis foglalások' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'A foglalás próbálkozása alatt egy hiba lépett fel, egy vagy több szoba a kiválasztottak közül nem szabad.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Hamisan (fenntartott) foglalt szobák' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Hamis foglalások megtekintése' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nincs listázandó hamis foglalás' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Csillagok száma' );
jr_define( '_JOMRES_COM_A_SMOKING', 'Dohányzó opció mutatása?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Állítsa ezt igenre, hogy a dohányzó opciót megjelenítse.' );
jr_define( '_JOMRES_COM_A_RESET', 'Visszaállítás' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'Visszavont foglalás' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Szálláshely gyorskereső' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Dohányzás alapértelmezettre állítása' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'Pénznem jele' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Pl. &amp;euro&#59; Megjegyzendő, hogy használhat HTML kódokat a szimbólumok megjelenítésére. A pénznem szimbólumok megtekinthetők itt: <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Pénznem jele' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'P. EUR. Ez a szállásfoglalás visszaigazolásakor használatos.' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Kattintson ide több információért!' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Bővített szállásfoglalás korlátozása?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Állítsa ezt Igen-re, ha korlátozni akarja a bővített szállásfoglalást (használja a követekző mezőt a napok számának korlátozására). Ha ezt az opciót Igen-re állítsa, akkor ha a vendég több, mint n napot próbál foglalni, akkor az érkezési nap vissza lesz állítva az aznapi napra' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Bővített foglalás napok száma ennyi napra korlátozva:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>MEGJEGYZÉS: Nem ajánlott mindkét opció esetében Igen-t bejelölnie, csak egyik adószámítási lehetőséget célszerű használni.</FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Adó' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'Szoba adó' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'Az amerikai piacra tervezve. Ez a helyi turisztikai adó lesz ráterhelve a vendégre. Kombinálva vagy egyenként megterhelhető egy fix vagy egy százalékos összeggel. Vegye figyelembe, hogy ezek az adók csak a szoba árára vannak alkalmazva.' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'Fix összegű adó' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Adó százalékmértéke' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'Turisztikai adó' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Adó mértéke' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Minden rekord archiválása' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' rekord archiválva' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Nyomkövető archivált rekordjai' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'Árajánlat szállásra' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Díjszabás neve' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Díjszabás leírása' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Szobatípus' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Érv. ettől' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Érv. eddig' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', '/fő /nap' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'nap' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'A hétvégéken kívül' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum napok' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maximum napok' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. személy' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. személy' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Előnézet' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'Folyamatban lévő szerkesztés?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Jelenlegi szöveg' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'Új szöveg' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Szöveg frissítve.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Nyelv szerkesztése' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'Nem archivált elemek száma: ' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Szállás típusa' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'Szállástípus listázása' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Szállástípus szerkesztése' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Szállástípus' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Szállástípus leírása' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'Szállástípus mentve' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'A szállástípust nem lehet törölni. A szállástípus hozzá van rendelve egy vagy több zsálláshelyhez, légyszíves sorold át őket, majd próbáld újra' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'Szállástípus(ok) törölve' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Fizetési emlékeztető' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'Nincs extraköltségű plusz szolgáltatás hozzáadva' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Előleg' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'Teljes összeg' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'A foglalásra fizetendő összeg' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Hsználja ezt az opciót, hogy eldönthesse, hogy mi van megadóztatva a szállásfoglalás alatt. Válassza ki az előleget, ha az előleg adóköteles vagy az egész összeget, ha a teljes összeg adóköteles.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'Megjelenítendő hónap' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'A szoba foglalhatóságánál, hány hónap legyen megjelenítve?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Aláírva a köv. nevében' );
// V1.4
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'On-line  fizetés' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Kilépés' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Kérjük, válassza ki a szobá(ka)t, amelyeket ki akar vonni a szolgáltatás alól, és az azzal kapcsolatos dátumokat. <br>Ha egy szoba nincs megjelölve, akkor nem  vehető fel rá hamis foglalás (fenntartás), amíg a tényleges szállásfoglalások nincsenek teljesítve vagy visszamondva.<br/> Ha kiválasztotta a megfelelő adatokat, akkor kattintson a kék "Alkalmaz" gombra, hogy a szoba foglalhatóságát újra leellenőrizhesse. ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Úgy néz ki, hogy a portálrendszer az inaktivitás miatt kiléptette Önt.</b> Kérjük jelentkezzen be a rendszerbe és próbálja újra.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Kilépés oka' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Használ On-line fizetést?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Állítsa Igen-re, hogyha on-line fizetési módozatot is szeretne használni. <b>Megjegyzés:</b>Ez nem kapcsolja ki az előlegszámítási opciót a szállásfoglalási folyamatban. Ha ezt ki akarja kapcsolni, akkor módosítani kell azokat a sablonokat, amelyek az előlegezésre vonatkoznak.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Kérjük válassza ki a fizetési módozatot.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway engedélyezése?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Kiegészítők módosításának beállítása' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Telepített kiegészítő beállítása' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'External link' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Szállás weboldalára mutató link' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Megtekintett hitelkártya' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Hitelkártya frissítése' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Hitelkártya szerkesztése' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Ikon méretének szerkesztése' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Szállásképek feltöltése' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'A kép már létezik az albumban' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Képnézegető' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Galéria linkjének megjelenítése?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'A diavetítés megjelenítése szalagban?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Diavetítés ikon magasságban' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Galéria' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Sajnos nem tartozik kép a szálláshelyhez. Kérjük töltsön fel néhány képet a tömeges feltöltés funkcióval, ha használni szeretné a diavetítést.' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Árlista link mutatása?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'Engedélyezi a felugró ablakokat?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Ha Nem-re állítjuk a felugró ablakban megnyíló linkek szalagban fognak megjelenni. KÍSÉRLETI! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Képek feltöltése diavetítéshez' );
jr_define( '_JOMRES_A_TABS_MISC', 'Egyéb' );
jr_define( '_JOMRES_A', 'Oldal konfigurálása' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Globális szálláshely beállítási lehetőség' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Állítsa Igen-re, ha minden szálláshelynél akarja használni a szálláshely rendszergazda által beállított jellegzetességeket.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'Ikon' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Válassza ki a keresési módot, amit használni akar.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>A keresés nem hozott eredményt. Kérjük adjon meg új keresési feltételeket és próbálja újra.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Biztos ezt akarja tenni?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Foglaljon most!' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Foglaljon most!' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Biztonsági szám' );
//v1.4c
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Árak megjelenítése szalagban?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Elérhetőségek' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Részletes bemutatás' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Kattintson ide a szoba és foglalhatóság megtekintéséhez' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Árak megjelenítése' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Cím megjelenítése a link alatt' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Részletes szállásadatok megjelenítése a link alatt' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Szobák és a foglaltság megjelenítése a link alatt' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Árak megjelenítése a link alatt' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Átalánydíjak' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Átlagok' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Válasszon árkialakítási modellt' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Kétféle árképzés közül választhat. Az első 'átalányár' eljárás lehetővé teszi számos ár megadását a vendégnek és az ár a foglalás teljes időtartamára megegyezik, minden nap azonos. Ez akkor praktikus, ha ugyanarra a dátumra különböző árakat is meg akar adni, pl. szoba reggelivel vagy félpanziós ár... Válassza az 'átlagár' kalkulációt, ha szezonális árakat akar használni, napokra lebontva. A rendszer megtalálja a foglalás napjaihoz rendelt árakat, összegzi, és kiszámítja a foglalás idejére eső átlagárat. " );
// v1.4e
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Megjelenjen a távozás dátumának megadása mező?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Állítsa Nem-re, ha nem akarja megjeleníteni a távozás dátuma mezőt. Gondolja át a beállítást, mivel a távozás dátuma a foglalásban mindig az érkezést követő nap lesz. " );
// v1.4f
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Leírás korlátozása' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "Ez a beállítás korlátozza a szállások listájában megjelenítendő karakterek számát ha a szálláshely leírásából kilépve." );
// v1.4g+
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Dátum formátum() ?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Állítsa Igen-re a normál dátumformátumhoz () (Példa: <a href="http://www.php.net/manual/en/function.date.php"></a>). Állítsa Nem-re strftime() formátum használatához (Példa: <a href="http://www.php.net/manual/en/function.strftime.php"></a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Készre jelentés' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Készrejelentés visszavonása' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'Globális szobatípusok használata' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Állítsa Igen-re, ha minden szálláshelynek csak a rendszergazda által meghatározzott szobatípust akarja engedélyezni. Ha engedélyezni akarja a szobatípus alapú keresést, akkor ezt szükséges Igen-re állítani.' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'Kép hozzárendeléséhez ehhez a szobatípushoz előbb fel kell töltenie a képeket a következő mappába /images/stories/jomres/rmtypes/ . ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Háttérszín beviteli hiba' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'Ország megadása a foglalási űrlapon' );
jr_define( '_JOMRES_JAVASCRIPT_', 'A megjelölt mezők kitöltése kötelező.' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Regisztrálhatja a felhasználó a szállását?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Állítsa Igen-re ha engedélyezni akarja a felhasználók számára a szálláshelyek rögzítését adminisztrátori beavatkozás nélkül.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Kérjük adja meg a megyét, ahol a szálláshelye található.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Kérjük, töltse ki a szálláshely részletes adatait.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'A megjelölt mezők kitöltése kötelező.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Szálláshely létrehozása' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "Csak regisztrált felhasználók állíthatnak be szálláshelyet! Regisztrálja magát és jelentkezzen be!" );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Regisztrált szállás: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Felhasználó: ' );
// v1.4i
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Naptár megjelenítése az év elejétől?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'A foglaltsági naptár ez év első napjától kezdődik.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Szabad szobák' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Vissza a szállás részleteihez' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Szoba típusok' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Véletlen keresés limit' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Google árfolyamlink megjelenítése az árlistában?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Váltsa át :' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'Html szerkesztő használata engedélyezett a felhasználónak?' );
// v2
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Ezt az űrlapot használhatja a szállásfoglaláshoz. Állítsa a kurzort az "i" képek fölé további információért a témáról. Módosítsa foglalása adatait, mint az érkezés és távozás dátuma, vendégek száma, azután válasszon a szabad szobák közül igényeinek megfelelőt. Kattintson bármely szabad szobára, hogy hozzáadja foglalásához. Ha elkészült extrákat is adhat foglalásához, majd rögzítse a címét. Ha elegendő adatot megadott megjelenik a jóváhagyás gomb, és befejezheti a foglalást.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Ezt az űrlapot használhatja a szállásfoglaláshoz. Állítsa a kurzort az "i" képek fölé további információért a témáról. Módosítsa foglalása adatait, mint az érkezés és távozás dátuma, vendégek száma. Ha elkészült extrákat is adhat foglalásához, majd rögzítse a címét. Ha elegendő adatot megadott megjelenik a jóváhagyás gomb, és befejezheti a foglalást.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'A szállásfoglalás részletei' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Kérjük, válassza ki a szállásfoglalás kívánt részleteit' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Foglalhatóság' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Válassza ki a kívánt szobákat' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Tekintse meg a szoba foglaltságát abban az időszakban.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Választható szolgáltatás' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Válasszon valamilyen extrát, melyet a foglalásba fel akar venni' );
jr_define( '_JOMRES_COM_PERDAY', 'Naponta' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Az Ön címe' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Kérjük, írja be az adatait. Felhívjuk a figyelmét, hogy minden mező kitöltése kötelező a Mobil telefonszám kivételével' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Szabad szoba' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Kiválasztott szoba' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>A legkorábbi lehetséges érkezési nap: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'Naponta:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Összesen:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Szolgáltatások:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'Turisztikai adó:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Kedvezmény:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Mindösszesen:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Vendégek' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Kattintson ide a szoba kiválasztásáért!' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Kattintson ide, hogy a szobát törölje a kiválasztottak közül' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Vendég típusok' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Típus' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Vendég típusa; pl. 3-10 éves Gyerek, Diák, stb.' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Megjegyzés' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Vendégtípussal kapcsolatos megjegyzése, ha van ilyen.' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Maximum' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Ennek a vendégtípusnak a maximális száma, aki a foglalásba felvehető' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Százalék' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'A kiszámolt összeg a szoba alapárának százaléka. Ha Nem-re állítja a meghatározott összeg hozzáadódik vagy levonódik a szoba alapárából. ' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Eltérés megadása?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'A kiszámolt összeg hozzáadódik vagy levonódik a szoba alapárából. Állítsa Nem-re, ha diszkontot akar adni a szobaárból.  ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Eltérés' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Az eltérés összege' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'A módosított vendégtípus rendezése' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Vendégtípus publikálása' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Vendégtípus törlése' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Vendégtípus létrehozása' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Vendégtípus frissítése' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Vendégtípus frissítve' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Szobalista linkjének megjelenítése a szálláshely részletes bemutatkozó oldalán?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', '<b>Csak</b> Foglalhatósági naptár/Szabad szobák megjelenítése?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Állítsa Igen-re, ha nem akarja megjelentetni a szálláshely fejadatait és részleteit, csak a szobák listáját/foglalhatósági naptárat. Azoknak a felhasználóknak ajánlatos, akik csak üres szállás kiadással foglalkoznak (pl. apartmanok, villák stb).' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Érk-Táv minimum intervalluma' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'A minimum időtartam az érkezés és távozás dátuma között.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Szállásfoglaló űrlap - szobalista - szobaszám mutatása' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Szállásfoglaló űrlap - szobalista - szoba nevének mutatása' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Szállásfoglaló űrlap - szobalista - Díjszabás címének mutatása' );
jr_define( '_JOMRES_ORDER', 'Rendezés' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Megadni kötelező' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Érkezés előtti napok száma' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'A mai nap és az érkezés közötti minimális napok száma.' );
jr_define( '_JOMRES_DTV', 'Dátum típus variációk' );
jr_define( '_JOMRES_DTV_DOW', 'A hét napjai' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Alapértelmezett vendégtípus' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Alapszám az egy az első vendégtípusnak. Ha használ vendégtípust, ez az elsőszám, mely az első foglalásba bekerül. ' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Csak regisztrált felhasználók foglalhatnak on-line?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Sajnáljuk, regisztrálnia kell magát a rendszerbe, ahhoz, hogy on-line tudjon foglalni. Kérjük, kattintson ide a honlapon való regisztráláshoz. ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Jelenlegi foglalások linkjeinek betűszíne' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Hétvégi határok' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'A szoba foglalt' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Hamis foglalás' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Az előleg felkerekítése?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Foglalót kér?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Az árak heti egységben tárolandók?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Lehetőség van az árak napi vagy heti egységben tárolására. Ha a hetit akarja választani állítsa be az Igen-t.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Heti ár' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fix érkezési dátumok rendszeresítve: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Amikor fix érkezési dátumok vannak kiválszatva, akkor a dátumok száma megtekinthető a dátumok legördülő mezőben' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Dohányzó opció érvénytelen' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Érkezés dátuma hibás' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Távozás dátuma hibás' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'A foglalási periódus túl rövid. Az érkezési és távozási dátum között a foglalható napok száma minimum:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'A kiválasztott periódusban a napok száma:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'A vendégtípus variáns hibás' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Válassza ki a vendégek számát/típusát' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Túl sok vendég van a csoportban az elérhető létszám vagy díjszabáshoz képest' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Több szobát választott, mint amennyi a vendégek létszámához viszonyítva szükséges, kérjük, kattintson a kiválasztott szoba/szállás valamelyikére, hogy módosíthassa a választását!' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Túl sok vendég a szabad ágyak számához viszonyítva' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Egy vagy több szobát még ki kell választani' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Szoba / szálláshely választása' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Családnév megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Keresztnév megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Házszám/név megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Utca/tér megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Település megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Megye megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'A postai irányítószám megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Ország megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Vonalas telefonszám megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Mobiltelefonszám megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Emailcím megadása kötelező' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'Az emailcím nem érvényes' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Nem lehet az e-mailcím domainjét értelmezni' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'Üres helyek vannak!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Még nincs kiválasztva szoba' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Szállásfoglalás egyedi azonosító száma (E.a.)' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Foglalás rendben, üzenő doboz a háttérben' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Sablon változóinak betöltése?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Állítsa be ezt, hogy engedélyezze a sablon változóinak DHTML betöltését minden FRONTEND sablonfile esetén az oldal megtekintésekor. Hasznos, ha azt akarod látni, hogy bizonyos elemek elérhetően használhatóak a beállított sablonban.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Százalékosan megjelenítve' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Állítsa Igenre, hogyha az egyfős szállásfoglalás számításánál százalék szerepel. Hogyha nem, akkor a megadott fix összeg lesz alkalmazva.' );
//v2rc2
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Szabad szobák/díjszabás limit' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Használja ezt a lehetőséget a szállásfoglalási űrlapon szereplő szabad szobák és díjszabások korlátozására. Állítsa nullára, ha nem akarja ezt a korlátozást engedélyezni. ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Ez alkalommal nincs szabad hely!' );
// Introduced in v2.5
jr_define( '_JOMRES_ANY', 'Mindegy' );
// Introduced in v2.5
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'Ezt lefoglalom!' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Tömeges módosítás funkció?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Legyen óvatos ezzel a funkcióval. Ha Igen-re állítja, a változás a  rendszer ÖSSZES szálláshelyének szövegét módosítja.' );
jr_define( '_BOOKAROOM', 'On-line szállásfoglalás' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super Property Manager' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Weekends only' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Hétvége napjai' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Állítsa be a hétvége napjait. A hétvégét magába foglaló/kizáró tarifák e szerint jelenítik meg a szobalistát.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Válassza ki az országot, mielőtt bármely más mezőt kitöltene' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Save your property changes before uploading a property image' );
jr_define( '_JOMRES_TARIFFSFROM', 'Árak' );
jr_define( '_JOMRES_SEARCH_ALL', 'Összes' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Keresés ország szerint' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Keresés megye szerint' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Keresés város szerint' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Keresés tulajdonság szerint' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Keresés' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Enter a search word into the box and press the button.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Szavak keresése: ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Kérjük adja meg a tervezett érkezési és indulási idejét és nyomja meg a keresés gombot, hogy ezen időtartamon elérhető szálláshelyeket találjon.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Összes szállás listázása  szállástípus szerint' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Összes szállás listázása szoba típus szerint' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'Alapértelmezett' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Szállás neve' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Megye' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Város' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Csillagok' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Szállás lista' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Szállás részletek' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Booking form' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Update your address details' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-checking room availability<br/>(Room selection will be reset)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-checking availability' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifying your optional extras' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Changing your room selection' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Updating your address details' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Sorry, one or more address fields are incorrect.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Szoba kép' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Valuta formátum' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Show Managers\'s options as images' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Search options' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Available Logs' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'No log entries. This is normal, you need to manually modify jomres.php to trigger logging' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Message' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normál' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Fejlett' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Díjszabás beállítás' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
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
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Szobalista megjelenítése a szállás részletei oldalon?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Property type' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'SRP only' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Max fő/szoba' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Max fő/foglalás' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Megjegyzés írása' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Megjegyzés szerkesztése' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Megjegyzés törlése' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Megjegyzések megtekintése' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Megjegyzés hozzáadva' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Megjegyzés mentve' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Megjegyzés törölve' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Vezérlőpult' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Foglalások listázása' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Foglalásaim' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Foglalás megtekintése' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'View Favourites' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'You haven\'t added any favourites yet!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Add to Favourites' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Property type' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Regisztrált szálláshelyek száma' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Wise price' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Aktív' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'This plugin allows you to enable and configure your room prices dynamically.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (number of days between arrival date and today)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Percentage rooms occupied  10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Percentage rooms occupied 25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Percentage rooms occupied 50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Percentage rooms occupied 75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Discount %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' has been discounted from ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' to ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Room price not discounted ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Google maps API key' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Use SSL in booking form?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'You need to ensure that you have a valid SSL certificate for ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktív?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Set this to Yes if you want to offer last minute deals.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Discount' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In percent' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'A discount has been applied to this booking!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'The cost of the stay has been reduced by ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'This property offers a last minute discount of  ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' percent if you book to arrive before ' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', ' percent or more if you book to arrive before ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Book now to make the most of this offer!' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Részletes díjszabás információk' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Állítsa igenre részletesebb díjszabás információk megjelenítéséhez a szállás részletei/díjszabás felugró ablakban.' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Minimise configuration options' );
jr_define( '_JOMCOMP_AMEND', 'Amend Booking - Property Selection' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Select New Property' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Original Contract:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Deposit Paid' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Deposit Not Paid' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Foglaló felülírása' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Cancel' );
jr_define( '_JRPORTAL_CPANEL', 'JRPortal Control Panel' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Default Commission rate' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'List Commission Rates' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Commission Rates' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Title' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Type' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Comission rate' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Valuta kódja' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Szálláshelyek listája' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Szálláshely neve' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'címe' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'Properties who\'s background colour is red have not yet had a commission rate applied to them.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Statistics' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Statistics for: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Properties - Clicks' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Property view' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Number of bookings' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Value of bookings' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Commission estimate' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Commission Rate' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'List bookings' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Property id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Guest id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Affiliate id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Invoice id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Booking total' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Contract id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Contract number' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Currency Code' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Created' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Archived' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date archived' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Add item to bill' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Manager to invoice' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Associated property (if applicable)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Value' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Leírás' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Successfully inserted billing item into " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "View orders" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Failed to insert billing item into " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Error, you didn't set a value for the bill" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "Email error log messages?" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "Szálláshely alaptípusa" );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "A további beállítási lehetőségek ettől függnek. Válassza az \"MRP\"-t ha szobákat ad ki egy ingatlanon belül, az \"SRP\"-t ha egyben adja ki az egész ingatlant." );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "Use Jomres email address checker? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. " );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Szállás végösszege" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "éjszakák a" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "szobánként " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Extrák összege " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Árak összefoglalása " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Please read and agree to " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Alább látható a foglalásának az összefoglalása.<br /> Hogy bármilyen módosítást végezzen, kattintson a foglalás módosítása gombra. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Ha módosítani szeretné a foglalását, kattintson ide" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Foglalás módosítása" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "Kérjük írja ide a különleges kéréseit, kérdéseit amit a szállásadóhoz szeretne intézni." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Megerősítem, hogy egyetértek a következőkben foglaltakkal: " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "per person per night " );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Default language file" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Choose the default language file that Jomres should use if the language hasn't been set by Joomfish." );
// Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'of' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Start' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Prev' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Next' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'End' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Results' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Felhívjuk figyelmét, hogy ezzel még nem történt meg a foglalás.<br />Kérjük erősítse meg e-mail üzenetben. Az üzenetét ide írja ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kapcsolat' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Property enquiry from ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' regarding ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Type the characters that you see in the box' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'I cannot read the characters. Generate a ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Send' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'new image' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Kérdez' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Please select your required accommodation from the list on the right' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min rooms already selected' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max rooms already selected' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Available" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Some bookings" );
jr_define( '_JOMRES_AVLCAL_HALF', "Half booked" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Mostly booked" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Fully booked" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Url prefix' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'View property task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'dobooking task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Search task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Add country to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Add region to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Add town to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Add property type to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Add property name to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Append property id to property name' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Search URL Structure - Add country to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Search URL Structure - Default country' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Search URL Structure - Add region to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Search URL Structure - Default region' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Search URL Structure - Add town to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Search URL Structure - Default town' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Search URL Structure - Property type' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Search URL Structure - Default property type' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Used in url if search is for all property types' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autodetect Javascript calendar language' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Hetenként' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Naponként' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Foglalásonként' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Személyenként és foglalásonként' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Személyenként és napontként' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Személyenként és hetenként' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Naponként (min nap)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Naponként X szobánként' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Keresés ár szerint' );
jr_define( 'JOMRES_WORD_SAVING', 'Saving...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Use Composite Property details?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'You haven\'t made any bookings yet!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Property type' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Edit your property type' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Select your property type' );
jr_define( '_JOMRES_COM_LOGGING', 'Jomres logging' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Booking form logging (Booking engine logs) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Gateway logs (eg paypal etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Request log (all incoming server requests)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Misc ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (mainly for recording commission etc) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Kérdése van...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Foglalási űrlap megjeleníti a szoba típus képét' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Szállás lista limit' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of propertys to show on a page after a search' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activate this feature?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Use columns' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Feature columns" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "The number of feature icons that can be shown before a br is inserted to go to next row." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Search region by select combo dropdown" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Search by property name" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Show the search by property name input." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Search by town/region" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Show the search by region input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Search by property type" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Show the search by property type input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Search by room type" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Show the search by room type input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Search by features" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Show the search by feature input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Set this to no to show the list as tooltip images and checkboxes" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Search by description" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Show the search by description input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Search by availability" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Show the search by availability input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Keresés ár szerint" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Show the search by price ranges input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Price range increments" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Method' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . $jomresConfig_secret . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Editing' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Template Name' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Template has been customised?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Custom fields' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Here you can define simple custom fields that will be shown in the booking form.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fieldname (no spaces)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Default value' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Leírás' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Kötelező' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximumális mennyiség' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Ha a maximális mennyiség nagyobb mint 1, akkor a vendégek egy legördülő menüt fognak látni, ahol kiválaszthatják az extrák kívánt mennyiségét.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Issue invoices" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Tax rates" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Tax code" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Rate description" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "You cannot delete this tax rate." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Rate" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Számlák" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Nincs fizetve" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Fizetve" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Törölve" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "Függőben" );
jr_define( '_JRPORTAL_INVOICES_USER', "Felhasználó" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Állapot" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Kiállítva" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Esedékes" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Előfizetés" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Egyszeri végösszeg" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Ismétlődő végösszeg" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Ismétlődés ideje" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Recurring day of month" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Valuta kódja" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Tételek felsorolása" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Név" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Leírás" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Egyszeri ár" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Egyszeri mennyiség" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Egyszeri kedvezmény" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Egyszeri végösszeg" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Ismétlődő ár" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Ismétlődő mennyiség" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Ismétlődő dikedvezményscount" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Ismétlődő végösszeg" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Ádó kód" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Ádó leírás" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Adó" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Paypal beállítások" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Valuta kódja(pl EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Sandbox használata?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "Paypal email-cím (azonosító)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "This invoice is now due. Please click the button to be taken to paypal." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Override standard Jomres gateway settings?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Számláim megjelenítése" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Kedvezmény kuponok" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Kupon kód" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Valid from" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Valid to" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Discount amount" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "Discount is a percentage" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Room only" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Sql error when trying to delete/insert a coupon" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ha van kuponja, kérjük írja be a mezőbe és kattinson a "Kupon mentése" gombra, hogy mentésre kerüljenek a kuponadatok a foglalásához .' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Kupon mentése' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Coupon saved against booking' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Coupon number not found' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Kupon értéke' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Booking discounted. Coupon code/discount value/coupon settings : ' );
jr_define( '_JOMRES_COM_CACHING', 'Use the Jomres caching feature?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Set this to No to disable the Jomres caching feature.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Choose languages' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choose the language options to be shown in the language switch dropdown.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Show the language selection dropdown?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Kijelentkezett és törölt foglalások' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Dear" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Thank you for registering " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Your user name is : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "Your password is : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Please log in to view your bookings " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon saved' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon deleted' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Use Jomres messaging' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Username" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Password" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Notification mobile number" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<br/><br/>
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/><br/>
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " . $jomresConfig_live_site . "/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Foglalási űrlap szobalistája megjeleníti a mozgássérült hozzáférést' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Foglalási űrlap szobalistája megjeleníti a vendégek maximális számát' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Database template Last edited' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Disk template Last edited' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Database template warning' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Database template may be out of date' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Előfizetési csomagok" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Név" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Leírás" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Published" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Számlázási ciklus" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Próbaidő" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Próbaidő ára" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Teljes ár" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Rooms limit" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Engedélyezett szálláshelyek/előfizetés" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Számlázási ciklus: H/N/F/É Havi/Negyedéves/Féléves/Éves" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Próbaidő hossza: Egész szám, 0 (nulla) - nincs, 1 - 1 hónap, 2 - 2 hónap, stb.." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Előfizetés" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Kérjük adja meg/frissítse az előfizetői adatait. Megjegyzés: minden adat megadása kötelező." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Keresztnév" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Vezetéknév" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Cím" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "Ország" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "Irányítószám" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " published property(s). " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "You can increase the number of properties you can create by <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>purchasing more subscription packages here.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " You have used " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " property slots. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "A jelenlegi szálláshelyeinek a megtekintéséhez kérjük kattintson <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>ide</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "To see a list of the current subscription packages available, click <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>here</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>click here to continue creating your property(s).</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH', "We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages&Itemid=" . $Itemid . "'>purchasing more subscription packages here.</a> " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Use subscription handling functionality" );
jr_define( '_JOMRES_COM_NEWUSER', 'Create new user on booking' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Create new user account on unregistered user booking.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Click here to register your property' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Active subscriptions" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Gateway subscription id" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Thank you for your booking - new user details follow" );
jr_define( '_JOMRES_LATLONG_DESC', "Használja az egeret a térkép mozgatásához, és húzza oda a mutatót a szállás helyére." );
jr_define( '_JOMRES_CONTROLPANEL', 'Control Panel' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Output Jomres javascript headers into the body of the html?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Számla' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Számlák' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Szálláshelyem regisztrációja' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Figyelem: ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Sorry, but that package ID is not recognised." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Sorry, you are already subscribed to a free package, you cannot subscribe to that package again." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "My Account" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Your business details' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Cégnév' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'Adószám' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Building number' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Számla száma ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Sorry, you cannot black book this property for those dates.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'You can blackbook this property for those dates.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Még nem állított be egy tarifát sem, így nem tud foglalásokat fogadni.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Editing mode on' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Editing mode off' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Változó előleg kérése?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'A változó előleg beállítás lehetővé teszi, hogy a foglalás teljes árát felszámolja előlegként, ha a foglalás érkezési napja egy bizonyos számú napnál közelebb van "mához". Állítsa ezt az opciót igenre, és írja be a napok számát alul. Pl. ha ma 2011-10-15-e van, és ön 15 napot állított be, minden 2011-10-01-e után beérkező foglaláskor a vendégnek előre ki kell fizetnie a teljes árat. Az ez előtti foglalásokkor a fenti foglaló-beállítások lesznek alkalmazva.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Napok száma, amin belüli foglalásokkor a teljes ár felszámolalásra kerül mint foglaló' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Send Contact Owner emails to Alternative address?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternative address for Contact Owner emails.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Confirmation email has been sent. You may close this window now.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Real estate listing' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Is this property a Real estate listing?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Számla megjelölése fizetettként' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Számla megjelölve fizetettként' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Make new API key' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Use Google for initial translations?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single property installation?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'Use HTML purifier functionality?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Fizetési mérleg' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Egyenleg' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Support key' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Personal discount' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limit property registration to one country?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Properties are located in this country : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery theme' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the property details tabs.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'We are sorry, but that property is not currently available.' );
jr_define( '_JOMRES_REVIEWS', 'Értékelések' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Vélemény címe' );
jr_define( '_JOMRES_REVIEWS_DATE', 'dátuma ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Még nincsenek vélemények erről a szálláshelyről.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Szeretne őn lenni az első, aki véleményehzeti ezt a szálláshelyet?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Egyetértek ezzel a véleménnyel' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'Nem értek egyet ezzel a véleménnyelw' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Átlagos vélemény: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Összes velemény:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Új vélemény hozzáadása' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Véleményezéshez be kell jelentkeznie.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Tell us what you think about this property : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Ez a véleményező ezt írta: ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Előnyök: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Hátrányok: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Submitted On: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'You have already reviewed this property, you can\'t post another review about it.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Sorry, but you are not allowed to post reviews on this site.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Vélemények megjelenítése' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' guests agree with this review. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' guests do not agree with this review.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' guest agrees with this review. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'guest does not agree with this review.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Thank you for sharing your opinion of this review.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Thank you, but you have already shared your opinion of this review.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Please ensure that all fields have been filled.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Please summarise your review by entering a title' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Please enter a more complete review in the description box' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Please enter the good parts of your experience of being a guest at this property' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Please enter any negative thoughts you might have of your experience' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Please rate the hostpitality you received from the staff' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Please rate your opinion of the property\s locale' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Please provide your opinion of the cleanliness of the property' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Please rate the accommodation. Was it comfortable or threadbare' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Please provide your opinion of whether it was value for money' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Please rate the services' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Review summary' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Your experience in more detail' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Thank you for submitting your review.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Thank you for submitting your review. It will be published soon by one of our hard working moderators.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Use Jomres review functionality?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatically publish reviews?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Set reviews to test mode?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Number of unpublished reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total number of reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Delete review' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Report review' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Review reports' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Please enter your report' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Mentés' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Report created by ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Ratings (1 = poor 10 = excellent) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Hospitality  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Location ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Cleanliness ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Accommodation ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Value for money ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Services ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Reviewed by : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Hide reviews' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Show Booking form in property details page?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Az árak tartalmazzák az adót?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ha az ön árai tartalmazzák az adót, állítsa igenre, ha nem nemre.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extraák adója:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rates' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Partnerek' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Ma' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Előző' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Következő' );
jr_define( '_JOMRES_CALENDAR_RTL', 'false' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Szoba ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'vendég(ek). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Még nem publikálta a szállást, így a vendégek nem, csak ön láthatja azt." );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Default search result order' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Show search result order dropdown' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Szobalista stílusa' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'A foglalási űrlapon a klasszikus szobalistán egyedi szobákat ajánlhat a vendégeknek. A Szoba típus szerinti szobalistán viszont a vendég választhat, milyen típusú szobából hányra tart igényt (pl 2 x dupla ágyas).' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasszikus' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Szoba típusok' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(Re)checking availability' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Rebuilding available rooms list' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Calculating totals' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Finished form update' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Calendar week start day, Sunday or Monday' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Only property guests can review?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Szobánként' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Max. személy/szoba' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Max személy/foglalás' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Szobák száma' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tariff default price' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "This only applies to new tariffs" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Years to show" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Defines the number of years to show when editing a micromanage tariff" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Január' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Február' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'Március' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'Április' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Május' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Június' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Július' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'Agusztus' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'Szeptember' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Október' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'November' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'December' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Szálláshely kezelési mód" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "A rendszer különböző képpen kezeli a szálláshelyeket/cégeket a szerint, hogy milyen típusként adjuk hozzá." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Kiadás (foglalások kezelése)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Válassza a kiadás lehetőséget, ha szbákat szeretne kiadni egy ingatlanon belül (pl. Szálloda/B&B/Villa/Apartmanok)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Megjelenítés (foglalások kezelése nélkül)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Válassza a megjelenítés funkciót, ha nem szeretné, hogy a rendszer kezelje a foglalásokat, egyszerűen csak meg szeretne jelenni a rendszerben (pl. rendelkezik saját foglalási rendszerrel, vagy eladó ingatlan hirdetése)" );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.' );

jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Please select an option for your booking' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Fullscreen view" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Normal view" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "Show the timezone switcher in the property manager's toolbar?" );

jr_define( '_JOMRES_PARTNER_DISCOUNT', "Partner discount " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Search user" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Existing partners" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Choose a partner to be taken to the partner administration page." );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Partner :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Search for a property" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Current properties" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a property to edit the partner's discount settings for that property." );


// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "This account has been suspended, it is not currently possible to administer your propert(ies) using this account." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Manager account suspended" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Manager account reinstated" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Remove favourite' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Booking data archive' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Személyes adatok szerkesztése' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Search users" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Existing managers" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Choose a manager to be taken to the manager administration page." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Search by guest numbers" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Show the search by guest number dropdown" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Search by stars" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Show the search by stars dropdown" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Number of guests' );
jr_define( '_JOMRES_SEARCH_STARS', 'Number of stars' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Commission invoices" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Number of properties" );
// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "Load Jomres jQuery library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.' );

// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', 'Label Translations' );

jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "Use commission functionality?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Set this to Yes to show the manager commission invoices which have been raised." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Manager bookings create commission invoices?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "If a manager makes a booking, does that also create a commission invoice line item?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "A new commission invoice has been raised" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first)." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Auto suspend managers where invoices are marked as Pending?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Auto suspend threashold" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished." );

//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Solo, Silver or Gold. Users of the free, core system will not be able to take full advantage of the features that they enable.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI library?" );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Price (highest first)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Price (lowest first)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Az ár összefoglalás és becslés éjszakánként, hetenként vagy hónaponként legyen számolva?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Éjszakánként' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Hetenként' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Hónaponként' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'Vendégenként' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ' );

// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Kérem várjon, a rendelése feldolgozás alatt van. Nemsokára át lesz irányítva a PayPal fizetéskezelő oldalra.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Ha nem kerül automatikusan átirányításra 5 másodpercen benül...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Kattintson ide' );
// 4.7.8

jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Booking valid from" );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Booking valid to" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "Guest name" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "With your coupon, this booking has been discounted from " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " to " );

jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "Set this to No to disable loading of both the Jquery UI javascript and CSS files." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "Load Jomres jQuery UI CSS library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Set this to No to disable only the jquery UI CSS file." );

//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Végösszeg adóval" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Use conversion functionaity" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Use javascript caching?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "Volt és jelenlegi vendégek megjelenítése" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Csak jelenlegi vendégek" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Debugging' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Szállás adó nélkül' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Szállás adóval ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Szállásfoglalás' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Vissza a szálláshely leírásához' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatikusan kiválasztva?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Egyenleg (előleg befizetése után)' );
jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.' );
jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Latest booking' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'second' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'minute' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'hour' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'day' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'week' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'month' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'year' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'decade' );
jr_define( '_JOMRES_DATEPERIOD_S', 's' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'ago' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'from now' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Bookings are for whole days?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January ' . date( "Y", strtotime( "next year" ) ) . ' to the 2nd of January ' . date( "Y", strtotime( "next year" ) ) . ' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per day' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per person per day' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "days(s) at" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date." );

jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ' );

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Foglalás végösszegének felülírása' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Felülírás elmentése' );

jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'Booking form width in px' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.' );

jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Edit Profile' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship' );
jr_define( '_JOMRES_IMAGE', 'Image' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Business types that can show this feature' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "Edit Tax rate" );

jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Edit Custom field" );

jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "License server password" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "License server username" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here." );

jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "This Jomres version : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Latest Jomres version" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience." );

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Solo, Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Change your active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Alternate SMTP Settings" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternate Host" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Change this to your smtp mail server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternate Port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Change this to your smtp port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternate Protocol" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Use authentication" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternate Username" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternate Password" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically." );

jr_define( '_JOMRES_QUICK_INFO', "Quick Info" );

jr_define( '_JOMRES_MENU_SHOW', "Show" );
jr_define( '_JOMRES_MENU_HIDE', "Hide" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "Use the alternate menu layout?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Default" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Anybody" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registered" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Nobody" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Menu Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Receptionist" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Full Access Control" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls." );

jr_define( '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option." );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Full Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
" );
jr_define( '_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied." );

jr_define( '_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Users with admin rights to this property" );
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "List all user's invoices" );


jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Subject' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Your full name' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Please describe your issue' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Model' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Force' );
jr_define( '_JOMRES_METATITLE', 'Meta title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Properties found" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Add your property : Step 1 of 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Add your property : Step 2 of 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'My businesses' );


jr_define( '_JOMRES_CART_TITLE', 'My proposed bookings' );
jr_define( '_JOMRES_CART_INFO', 'Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirm booking(s)' );
jr_define( '_JOMRES_CART_OR', ' or ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'Save for later' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.' );
jr_define( '_JOMRES_CART_VIEWCART', 'View cart' );

jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory' );

jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?' );

jr_define( '_JOMRES_CLEARDATES', 'I don\'t have any dates yet' );

jr_define( '_JOMRES_MOBILE_REDIRECT', 'Redirect to frameless when on mobile devices?' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.' );

jr_define( '_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails." );

jr_define( '_JOMRES_CSS_CACHING_TITLE', "Use css caching?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );


jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Search calendars show the clear dates checkbox?" );

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Lista nézet " );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Fotó nézet " );

jr_define( '_JOMRES_COMPARE', "Összehasonlítás " );
jr_define( '_JOMRES_REMOVE', "Remove" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Return to search results" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Listához adás" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Eltávolítás a listáról" );
jr_define( '_JOMRES_VIEWSHORTLIST', "Saját lista nézet " );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy." );

jr_define( '_JOMRES_COOKIEPOLICY_1', "Important: Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "We use cookies to help keep our site relevant and easy to use." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "Read more..." );
jr_define( '_JOMRES_COOKIEPOLICY_4', "EU legislation requires that all websites clearly specify if cookies are being used and their purpose." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "Yes, I accept the use of cookies in this way." );

jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.' );

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your shortlist." );

jr_define( '_JOMRES_MOBILE_SETTINGS', "Mobile device settings" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Simulate mobile mode" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulation IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1." );

jr_define( '_JOMRES_SAFEMODE', "Enable safe mode?" );
jr_define( '_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality." );

jr_define( '_JOMRES_PRICE_ON_APPLICATION', "POA" );

jr_define( '_JOMRES_USE_JOMRESEDITOR', "Use Jomres' WYSIWYG editor? (recommended)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it." );

jr_define( 'COMMON_NEXT', "Next" );
jr_define( 'COMMON_CANCEL', "Cancel" );
jr_define( 'COMMON_SUBMIT', "Submit" );
jr_define( 'COMMON_SAVE', "Save" );
jr_define( 'COMMON_DELETE', "Delete" );
jr_define( 'COMMON_RETURN', "Return" );
jr_define( 'COMMON_CLOSE', "Close" );
jr_define( 'COMMON_BACK', "Back" );

jr_define( 'COMMON_HOME', "Home" );

jr_define( 'COMMON_NEW', "New" );

jr_define( 'COMMON_SEND', "Send" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Public key" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Private key" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Lockfile timeout" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "If you are running a bootstrap enabled template in the frontend of this site set this option to Yes." );

jr_define( 'COMMON_ACTION', "Action" );
jr_define( 'COMMON_VIEW', "View" );

jr_define( 'BACKTOTOP', "Back to top" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Weak" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Strong" );

jr_define( '_JOMRES_INPUTFILTERING', "Input filtering" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtering level" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Allowed input tags" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Allowed inputs" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Property details in tabs?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Set this option to show property details in tabs. Set it to no to show them without tabs." );

jr_define( 'COMMON_PRINT', "Nyomtatás" );

jr_define( 'COMMON_EDIT', "Edit" );
jr_define( 'COMMON_COPY', "Copy" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Use Jomres Bootstrap templates in the frontend?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Use Jomres Bootstrap templates in the administrator area?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Here are some alternatives you might want to consider." );

jr_define( '_JOMRES_BEEZ_WARNING', "Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "About Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Getting started" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "system maintenance" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Access Control" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "developer tools" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "languages" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "income generation" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "accounting" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "site structure" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "user management" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Manual (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "My Account (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "scheduled tasks" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portal functionality" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin manager" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "integration" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "reports/statistics" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "taxes" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Tickets (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Upgrades" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "payment methods" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tariff default" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "This only applies to new tariffs" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Years to show" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Defines the number of years to show when editing a tariff type" );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "account details" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Login" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Logout" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "dashboard" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "settings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "Edit country" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "Country id" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Country name" );

jr_define( "_JOMRES_EDIT_REGION_TITLE", "Edit region" );
jr_define( "_JOMRES_EDIT_REGION_ID", "Region id" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "Region name" );


jr_define( "_JOMRES_COM_LISTCOUNTRIES", "List countries" );
jr_define( "_JOMRES_COM_LISTREGIONS", "List regions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "Export definitions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community." );

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Translate locales" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Translate lang file strings" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature." );

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "Property list default layout" );

jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Stay for a minimum of" );
jr_define( "_JOMRES_NIGHTSFOR", " nights for " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Property list images, show the property image as a gif if slideshow images are available." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Show as GIFs only if the property is a featured property." );

jr_define( "_JOMRES_AGENT", "Agent" );
jr_define( "_JOMRES_AGENT_DETAILS", "Agent details" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Agent's listings" );

jr_define( "_JOMRES_PROPERTY_LANG", "Property language" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "The default language of this property." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Automatically approve new properties" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Approvals" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Properties awaiting approval" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "No properties are awaiting approval" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Approve property" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Review property" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "This property has not been approved yet. Once it has been approved you will be able to publish it." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "Sorry, you cannot publish this property as it has not been approved yet." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "A new property requires approval" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Your property has been approved" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Congratulations, your property has been approved, please click the following link to view the property's control panel : " );

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Region names are translatable" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down." );

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT", "Guest booked out." );

jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.' );

jr_define( "JOMRES_TAPTOCALL", "Tap to call" );

jr_define( "JOMRES_NEWREVIEW_SUBJECT", "New review for " );
jr_define( "JOMRES_NEWREVIEW_MESSAGE", "A new review has been left for " );
jr_define( "JOMRES_NEWREPORT_SUBJECT", "New Report" );
jr_define( "JOMRES_NEWREPORT_MESSAGE", "A review has been reported for " );

jr_define( "JOMRES_NON_REGISTERED_USER", "Non registered user" );

jr_define( "JOMRES_JQUERY18_2", "Use Jquery 2.x?" );
jr_define( "JOMRES_JQUERY18_2_DESC", "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No. " );

jr_define( "JOMRES_SUPERIOR", "Superior" );
jr_define( "JOMRES_SUPERIOR_S", "(S)" );

jr_define( "JOMRES_GRANDTOTAL_EX_TAX", "Grand total (ex tax) : " );
jr_define( "JOMRES_GRANDTOTAL_INC_TAX", "Grand total (inc tax) : " );
jr_define( "JOMRES_GRANDTOTAL_TOTAL_TAX", "Total tax : " );

jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL", "Type the two words: " );
jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO", "Enter what you hear: " );
jr_define( "JOMRES_RECAPTCHA_PLAY_AGAIN", "Replay the audio track " );
jr_define( "JOMRES_RECAPTCHA_CANT_HEAR_THIS", "Download the track in MP3 format" );
jr_define( "JOMRES_RECAPTCHA_VISUAL_CHALLENGE", "Visual mode" );
jr_define( "JOMRES_RECAPTCHA_AUDIO_CHALLENGE", "Audio mode" );
jr_define( "JOMRES_RECAPTCHA_REFRESH_BTN", "Refresh" );
jr_define( "JOMRES_RECAPTCHA_HELP_BTN", "Help" );
jr_define( "JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "Sorry, that was incorrect. Please try again." );


jr_define( "JOMRES_GOOGLE_MAPS", "Google map options" );
jr_define( "JOMRES_GOOGLE_MAPS_INFO", "These layer options are mainly specific to maps in property lists and the property details page. If enabled, only the Weather layer will be shown in the extended maps plugin as including too many options on a larger map makes it extremely slow." );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Use weather layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD", "Fahrenheit or Celcius? " );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit" );

jr_define( "JOMRES_GOOGLE_MAP_OPTION_PANORAMIO", "Use Panoramio layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Use transit layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRAFFIC", "Use traffic layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_BICYCLING", "Use bicycling layer?" );

jr_define( "JOMRES_GOOGLE_MAPS_POIS", "Enable Gmap Points of Interest (including possibly your competitors)?" );


jr_define( "_JOMRES_METAKEYWORDS", "Meta Keywords" );

jr_define( "_JOMRES_PLEASE_PRINT", "Please print this email and present it on your arrival." );
jr_define( "_JOMRES_OFFICE_USE_ONLY", "Office use only" );
jr_define( "_JOMRES_SCAN_FOR_DIRECTIONS", "Scan this code into your phone to get directions to us." );


jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "Use the built in VIES VAT validation feature?" );
jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "New in Jomres 7.3 is a feature which allows business owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers." );

jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX", "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Congratulations. We were able to validate your VAT number." );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED", "VAT number wasn't entered." );
jr_define( "_JOMRES_TAX_RULES_LIST", "List tax rules" );
jr_define( "_JOMRES_TAX_RULE", "Tax rule" );
jr_define( "_JOMRES_TAX_RULE_INFO", "Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the \"edit my account\" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all." );
jr_define( "_JOMRES_TAX_RATES_IMPORT", "Import tax rates" );
jr_define( "_JOMRES_TAX_RATES_IMPORT_INFO", "We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed." );
jr_define( "_JRPORTAL_TAX_RULE_EDIT", "Edit tax rule" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER", "The VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Please enter the VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "VAT number validated." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "VAT number not validated." );
jr_define( "_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Business details entered here will be used on commission and subscriptions invoices." );

jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further." );


jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Production or Development?" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to \"production\"." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Production" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Development" );

//v7.3.3
jr_define( '_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details' );
jr_define( '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!' );
jr_define( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature' );
jr_define( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.' );

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
$jrConfig   = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Media Centre");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Property image upload service");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Add images");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Room images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Property main image");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Slideshow images");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Clear list");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Drag & Drop files here");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"The maximum file size for uploads is ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Only JPG and PNG images are allowed.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"If you upload multiple images as the \"Main property image\" only the first of those images will be used.");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"View your image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Delete image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Upload image");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Feature and Room type images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Room types images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Property feature images");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Upload all files");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Close" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Welcome to your Property" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Properties, then Preview." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "This is your property name" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "This is the timezone dropdown selector." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "This is the language selector." );
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT' , "You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B." );

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE' , "This is the Editing Mode selector." );
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT' , "You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste." );

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE' , "This is content area." );
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT' , "In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day." );

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE' , "Active property switch page." );
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT' , "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage." );

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE' , "This is where your property names will show." );
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT' , "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE' , "This is your property header." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT' , "This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address." );

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE' , "Your photo gallery." );
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT' , "This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE' , "Main buttons." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT' , "Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration." );

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE' , "Inline Calendar." );
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT' , "Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE' , "Rooms list tab" );
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT' , "Here you can see all rooms, and the availability of each room if you click on the availability button." );

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE' , "Reviews list." );
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT' , "Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property." );

jr_define('TOUR_ID_MAPTAB_TITLE' , "Map tab." );
jr_define('TOUR_ID_MAPTAB_CONTENT' , "Under this tab your guests can see your property in a zoomable map." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE' , "More Information tab." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT' , "Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE' , "Booking Form." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT' , "Your guests can either go to a separate page, or they can use the booking form in this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE' , "Main Property Details." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT' , "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE' , "All current and future tariffs" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT' , "This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE' , "Local Events." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT' , "If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE' , "Local Attractions." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT' , "If there are any attractions near to you, like museums or amusement parks they will be listed here." );

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE' , "Available Auctions." );
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT' , "If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods." );

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT' , "On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style." );

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE' , "Your Business details." );
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT' , "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you." );

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE' , "External links." );
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT' , "You can add a link to another site here." );

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE' , "Gateways." );
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT' , "Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online." );

jr_define('TOUR_ID_TAB_MISC_TITLE' , "Miscellaneous ." );
jr_define('TOUR_ID_TAB_MISC_CONTENT' , "This tab is for settings that don't fit into any other tab." );

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE' , "Property details page settings." );
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT' , "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page)." );

jr_define('TOUR_ID_TAB_REQUIRED_TITLE' , "Required items in the booking form." );
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT' , "This tab allows you to set which items in the booking form that are required or optional." );

jr_define('TOUR_ID_TAB_SRPS_TITLE' , "Villa/Apartment specific settings." );
jr_define('TOUR_ID_TAB_SRPS_CONTENT' , "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties." );

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE' , "Single Person Supplements." );
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT' , "Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual." );

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE' , "Tariffs" );
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT' , "On this page you can configure how tariffs and deposits are calculated." );

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE' , "Tourist Tax." );
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT' , "If your country or city charges tourist taxes, you can configure them here." );

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE' , "Micromanage settings." );
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT' , "Micromange tariff editing mode specific settings." );

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE' , "Wise Price settings." );
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT' , "This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE' , "The table." ); 
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT' , "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE' , "Property creation, step 1." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT' , "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE' , "Property country." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT' , "Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE' , "The property type." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT' , "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast." );

if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you want to offer tours/finite resource booking (for example skis) that are booked on the same booking form, then you would still choose this option. If you're offering tours/finite resources only without rooms then choose the Tours option. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE' , "Property creation step 2." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT' , "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE' , "MRP or SRP." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT' , "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE' , "Property name & address." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT' , "Please enter the property name and address in the following fields." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE' , "Number of stars." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE' , "Mapping location." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT' , "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE' , "Property features." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT' , "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT' , "You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );


jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE' , "Policies and Disclaimers." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT' , "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window." );

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE' , "List all bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT' , "On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE' , "List new bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT' , "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE' , "List old bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT' , "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "List guests." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT' , "The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE' , "Overrides." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT' , "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT' , "If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE' , "Particulars." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT' , "Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE' , "Room features filter." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT' , "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms." );


if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite resources. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer." );
	}
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Existing guests." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT' , "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE' , "Guest details." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT' , "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE' , "Black bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT' , "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT' , "The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT' , "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT' , "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT' , "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT' , "On this page you can edit your property type and your tariffs." );

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE' , "Guest types." );
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT' , "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type." );

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT' , "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied." );

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE' , "Optional extras." );
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT' , "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE' , "Media Centre." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS,false) );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Resource picker." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Existing images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Upload controls." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Selected images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Finished!" );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "HELP" );

//8.0
jr_define('COMMON_PREV' , "Prev" );
jr_define('COMMON_MORE' , "More" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "Today" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "Year" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Month" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Week" );
jr_define('_JOMRES_DASHBOARD_DAY' , "Day" );
jr_define('_JOMRES_HLEGEND' , "Legend" );
jr_define('_JOMRES_HFILTER' , "Filter" );
jr_define('_JOMRES_HFROM' , "From" );
jr_define('_JOMRES_HTO' , "To" );
jr_define('_JOMRES_HNEW_BOOKING' , "New booking" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Deposit status" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Guest status" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Booking status" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Publishing status" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Invoice status" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Invoice type" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Approved" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Current business" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Show bookings for" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Show invoices for" );
jr_define('_JOMRES_STATUS_ANY' , "Any" );
jr_define('_JOMRES_STATUS_PAID' , "Paid" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Not paid" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Checked out" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Active" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Cancelled" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Published" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Not published" );
jr_define('_JOMRES_STATUS_PROVISIONAL' , "Provisional booking" );
jr_define('_JOMRES_STATUS_CONFIRMED' , "Confirmed booking" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Guests with active bookings" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "Guests with past bookings" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Bookings" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Subscriptions" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Commissions" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "All my businesses" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Set as current" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Check in" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Check out" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "properties" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "guests" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "reports" );
jr_define( "_JOMRES_HLIST_GUESTS", "Guests" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "List guests" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "List invoices" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Businesses" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Quick booking" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Date of booking" );
jr_define( "_JOMRES_HTWO_WEEKS", "Two weeks" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "This booking will be cancelled. Press OK to cancel the booking." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Today checkins" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Today checkouts" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Current residents" );

jr_define( "_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Navigation bar settings" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Navigation bar location" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Default (content area)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Fixed to top" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Fixed to bottom" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Inverted navbar (colour change)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Booking number" );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );

jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap version" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2." );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Fixed periods" );
jr_define('_JOMRES_HDEPOSITS' , "Deposits" );
jr_define('_JOMRES_HBOOKING_FORM' , "Booking form" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Required fields" );

jr_define('COMMON_PLACEHOLDER_FIRSTNAME' , "Tom" );
jr_define('COMMON_PLACEHOLDER_SURNAME' , "Smith" );
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER' , "110" );
jr_define('COMMON_PLACEHOLDER_STREET' , "My Street" );
jr_define('COMMON_PLACEHOLDER_TOWN' , "My Town" );
jr_define('COMMON_PLACEHOLDER_LANDLINE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_MOBILE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME' , "My Hotel" );
jr_define('COMMON_PLACEHOLDER_POSTCODE' , "XXNN NNXX" );
jr_define('COMMON_PLACEHOLDER_EMAIL' , "example@address.com" );

jr_define('EXTENDED_CONFIGURATION' , "Extended Configuration" );
jr_define('SIMPLE_CONFIGURATION' , "Simple Configuration" );
 
jr_define('_JOMRES_HRESOURCE_FEATURES' , "Resource features" );
jr_define('_JOMRES_HRESOURCE_TYPE' , "Resource type" );
 jr_define('_JOMRES_HEDIT_GUEST_TYPE' , "Edit guest type" );
jr_define('_JOMRES_HEDIT_COUPON' , "Edit coupon" );
jr_define('_JOMRES_HEDIT_EXTRA' , "Edit extra" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE' , "Create multiple resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE' , "Generate resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY' , "How many resources?" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE' , "Resources type" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS' , "Max guests per resource" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE' , "Delete all existing resources?" );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.' );

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT' , "On this tab you can configure the look and feel of the booking form." );

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE' , "Bookings." );
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT' , "This tab allows you to modify how bookings are treated, plus various other settings." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE' , "Edit Guest." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT' , "Here you can edit a guest's address details. Please note that any changes you make here will only be reflected in this record. If the guest has made bookings on other properties, these changes will not appear on those other properties." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE' , "VAT." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT' , "If a VAT number is entered here then it will be shown on the guest's invoice." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE' , "Discount." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT' , "You can choose to give this guest an automatic discount which will be applied whenever they make a booking." );


jr_define('DATATABLES_SINFO' , "Showing _START_ to _END_ of _TOTAL_ entries" );

jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL',"Approval");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY',"Reject booking inquiry");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY',"Approve booking inquiry");
jr_define('_JOMRES_STATUS_APPROVED',"Approved");
jr_define('_JOMRES_STATUS_REJECTED',"Rejected");
jr_define('_JOMRES_STATUS_INQUIRY',"Inquiry");

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE',"Bookings require approval or availability confirmation?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.");

jr_define('_JOMRES_ERROR',"Error");
jr_define('_JOMRES_ERROR_MESSAGE',"Sorry! An error occured while trying to process this function. It has been reported for you and we will look into it.");

jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Message");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE',"File");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE',"Line");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE',"Trace");


jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"Email templates");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"Edit email template");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"Email subject");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"Email text");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"Email type");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"Email name");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"Email description");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Please see this page for help customizing the emails and a list of the available output: <a href=\"http://manual.jomres.net/email_templates.html\" target=\"_blank\">Email Templates Help</a>");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Site Admin New Booking Email");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Hotel New Booking Email");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"Email sent to property owner when a new booking is made");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Guest New Booking Email");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"Email sent to guest when a new booking is made");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Guest Confirmation Letter");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Printable letter or email that can be sent manually by the property owner to confirm a booking");


jr_define('_JOMRES_CAN_BE_APPROVED',"This booking can be approved. All selected resources are available for the selected dates.");
jr_define('_JOMRES_CANT_BE_APPROVED',"This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.");

jr_define('_JOMRES_SHOW_POWEREDBY',"Show the Powered by Jomres link in the Jomres footer.");


jr_define('GUEST_BUDGET',"Budget");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Use Budget feature?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");

jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ' );

