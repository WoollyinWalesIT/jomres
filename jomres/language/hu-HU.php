<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
*/

// Jos Resident
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Mai érkezések mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Mai távozások mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Foglalásos érdeklődések mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Más érdeklődések mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Szállásfoglalás bejegyzése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Élő foglalások listázása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Adatok mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Nyelvek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Általános beállítások');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Kedvezmények beállítása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Szoba/szálláshely beállítása');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Szálláshely beállítása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Osztályozás beállítása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Vissza');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Back to Mos Residents List bookings');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Beállítás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Alapértelmezett adatok betöltése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Igen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Nem');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Új');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Új szoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Új szoba jellemzői');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Új szoba típusa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Új szálláshely');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Új szálláshely jellemzői');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Új vendég');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Mentés');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Név');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Érkezés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Távozás');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Felhasználó ADMIN hozzárendelése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Név');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Felhasználó Név');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Jelenleg felhatalmazott');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Alapértelmezett szálláshely');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Megváltoztatás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Belépési szint');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Felhasználó által módosított');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Szálláshely módosítása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Belépési szint megváltoztatása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepciós');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Szálláshely menedzser');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Minden foglalás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Új foglalások');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Foglalások szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Érk/Táv');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Vendég');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Szoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Fizetés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Családnév');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Keresztnév');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','A vendég érkezésének esedékessége ma. Kattintson erre a gombra, ha már megérkeztek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Megjegyzés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Különleges kérés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Kérjük, vegye figyelembe, hogy a különleges kérések némelyikéért felárat számolhatnak fel.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Felnőttek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Gyerekek');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Kilépés a foglalásból');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Honlap felhasználója');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','A ház száma vagy neve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Utca/tér');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Település');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postai i.sz.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Vonalas telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobiltelefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Faxszám');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Emailcím');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Kívánságok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Autó rendszáma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','A vendég kilépett');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Szálláshely kilépett');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Kilépés okának kiválasztása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Napok száma az érkezésig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Kilépés a előleg fizetésből</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Nem léphet ki a foglalásból, amíg a vendég a folyamatban lévő foglalást be nem fejezi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Szállásfoglaló befizetve, nincs több előlegterhelés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','A szállásfoglaló nincs befizetve, leelőlegezés szükséges');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Előleg befizetve, 50%-a szerződésbeni előlegnek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Az előleg nincs befizetve, 50%-a szerződésbeni előlegnek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Előleg befizetve, 100%-a szerződésbeni előlegnek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Előleg befizetve, 100%-a szerződésbeni előlegnek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Szállásfoglaló befizetési emlékeztető');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Előleg fizetéséből kilépve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Kilépés megerősítése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Foglalásból kilépve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Napok száma az érkezésig');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Foglalás típusa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Téves, hamis foglalás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepció');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Szoba neve, száma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Szoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Emelet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Mozgássérült-barát?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. fő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Szoba típusa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Szoba típus leírása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Szoba jellemzőinek listázása');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&euró;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Árazás szabályai');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Fizetett előleg');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Előleg összegének beírása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Összesen fizetendő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Előleg referenciaszáma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Befizetési referencia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','On-line szállásfoglalás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Előleg');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Előleg mentve');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Figyelmeztetés...</FONT></h1><BR><B>A nyelvi fájlok írási jogosultságait meg kell változtasd 766-ra, hogy a fordítások frissíthetőek legyenek</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Gyors szobatípus választás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Jelölőnégyzet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Felnőttek száma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Gyerekek száma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Gyerekágy szükséges?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Más választás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Kérjük, írja be VAGY az eltöltendő éjszakák számát vagy a távozás dátumát');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Éjszakák száma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Kérjük, válassza ki a kívánt szobatípust, az érkezés dátumát és az eltöltendő napok számát vagy a távozás dátumát. Végül kérjük, adja meg a felnőttek, (és esetleg a gyerekek) számát.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Szobáink');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Név');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Szobaszám');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Emelet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Mozgássérült-barát?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max. fő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Részletek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Szálláshely');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Szobatípus');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Sajnáljuk, de a szabadon lévő szobáink nem tudnak ennyi vendégek kiszolgálni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Sajnáljuk, de a szálláshelyünk nem tud erre a periódusra szállást biztosítani. Kérjük, térjen vissza a foglalhatósági naptárhoz és tekintse át az ott megjelenített szabad periódusokat.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Kérjük, válasszon a legördülő menüből');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Vendég kiválasztása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Leírás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Ügyfelek listája');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">HIBA: Rosszul választotta ki a dátumokat.<br>Lépjen vissza és adja meg újra az adatait.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">HIBA: Legalább egy fő megadása szükséges a szállásfoglaláshoz.<br>Lépjen vissza és adja meg újra az adatait.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">HIBA: A kiválasztott periódus hibás.<br>Lépjen vissza és adja meg újra az adatait.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">HIBA: You did not select any room types.<br>Lépjen vissza és adja meg újra az adatait.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">HIBA: A szállásfoglalás dátuma már elmúlt vagy mai nap (Min. 1 nappal korábban lehet foglalni).<br>Lépjen vissza és adja meg újra az adatait.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Vendégek részletes adatainak beírása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Vendég részletes adatainak jóváhagyása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Vendég adatainak szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Családnév');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Keresztnév');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Házszám');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Utca/tér');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Település');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postai i.sz.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Vonalas tel.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobil tel.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Faxszám');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Regisztrációs szám');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Hitelkártya szám');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Kártya kibocsátási dátuma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Kártya lejárati dátuma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Kibocsátás száma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Kártyán lévő név');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Kérjük, válasszon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Kiválasztás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Kedvezmény');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Min. napok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Max. napok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min. fő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max. fő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Eltöltendő napok száma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Napi árfolyam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Vendégek száma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Összesen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Előleg');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Legalább egy kiválasztott nap ünnepnapra esik.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Sajnáljuk, de nem találtunk olyan szálláshelyet, amely a megadott árkategóriába esne. De ne keseredjen el, még van csiszolnivalónk, hogy az Ön igényeit is kielégítsük. Kérjük, próbálja meg újra, módosítsa az eltöltendő napok számát vagy alternatívaként hívja fel a szálláshelyet telefonon.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','A szobák és a szálláshely beállításainak megtekintése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Szobák');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Szoba jellemzői');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Szoba típusa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Szálláshely');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Szálláshely jellemzői');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Szoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Típus');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Szálláshely');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Típus');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Név');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Szobaszám');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Emelet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Mozgássérült-barát?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. fő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Jellemzők');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Szoba hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Szoba adatai frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Kattintson a szoba egyedi azonosító linkjére az elem szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Elem szerkesztése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Szoba jellemzői');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Jellemzők leírása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Kattintson a szoba jellemzői linkre az elem szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Szoba jellemzője hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Szoba jellemzője frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Elem szerkesztése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Szoba típusa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Szobatípus rövidítése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Szoba típus leírása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Kattintson a szobatípus egyedi azonosító linkjére az elem szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Szoba típus hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Szobatípus frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Elem szerkesztése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Szálláshely');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Név');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Utca/tér');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Település');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Megye');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Ország');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postai i.sz.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel./fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','E-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Szolgáltató e-mailcíme');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Honlap');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Jellemzők');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Kattintson a szálláshely egyedi azonosító linkjére a szállás szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Szálláshely hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Szálláshely frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Elem szerkesztése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Szálláshely jellemzői');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Szálláshely jellemzőinek rövidítése.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Szálláshely jellemzőinek teljes leírása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Kattintson a szálláshely jellemzőinek egyedi azonosító linkjére az elem szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Szálláshely jellemzői hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Szálláshely jellemzői frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Elem szerkesztése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Árajánlat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Ár megnevezése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Részletes leírás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Érv. kezdve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Érv. eddig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Napi díjszabás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min. napok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max. napok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. fő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. fő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Szobatípus');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','PPPN mellőzése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Ünnepnapok engedélyezése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Hétvégék engedélyezése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Kattintson a szöveg szerkesztése linkre a díjszabás szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Díjszabás hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Díjszabás frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Elem szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Elem klónozása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Díjszabás törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Díjszabás törölve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Díjszabás szerkesztése');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Ünnepnapok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Az ünnepi periódus vége lehet az utolsó éjszaka, amelyet ünnepi díjszabással szándékozik megjeleníteni.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Ünnepnap szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Részletes leírás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Kezdet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Vége');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Új ünnepnap');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Kattintson a szöveg szerkesztése linkre az ünnepnap szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Ünnepnap hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Ünnepnap frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Elem szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Elem klónozása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Ünnepnap törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Ünnepnap törölve');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Szállásfoglalás adatai mentve');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Kérjük, bizonyosodjon meg, hogy az űrlapot helyesen töltötte ki.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Csak regisztrált felhasználók foglalhatnak on-line');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Kérjük regisztrálja magát a rendszerünkbe');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Szállásfoglalás banki átutalással');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Adataim');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Foglalásom');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Adminisztrálás');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','On-line szállásfoglalás');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Beérkezett foglalás');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Lejárt foglalás');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Szállásfoglalások listázása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','ÚJ foglalások');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Vezérlőpult');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Vendég ügyintézése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Szálláshely adminisztrálása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Díjszabás adminisztrálása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Kedvezmény adminisztrálása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Ünnepnap adminisztrálása');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Kérjük, válassza ki a kívánt szobatípust, az érkezés dátumát és az eltöltendő napok számát. Végül kérjük, adja meg a felnőttek, (és esetleg a gyerekek) számát.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Kérjük, adja meg adatait. Ezt csak első alkalommal kell megadja, a rendszer következő látogatásakor emlékezni fog Önre.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Kérjük, válassza ki a lefoglalandó szobát.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Kérjük, adja meg adatait. A Mobiltelefon kivételével minden mező kitöltése kötelező.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Foglalhatóság ellenőrzése ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Szoba választása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Vendég kiválasztása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Adatok jóváhagyása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Ügylettípus kiválasztása');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Szobatípus kiválasztása');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Családnév');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Keresztnév');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Házszám');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Utca/tér');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Település');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postai i.sz.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Vonalas telefonszám');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil telefonszám');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Faxszám');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Nincs a megadott paramétereknek megfelelő szabadon lévő szobatípus');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Adatok megadása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Adatok ellenőrzése');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Köszönjük, hogy igénybe vette szállásfoglalási szolgáltatásunkat.<br><br> <b>Kérjük, vegye figyelembe, hogy ez csak egy előzetes foglalás, és csak akkor válik érvényessé, ha megkapta tőlünk a visszaigazoló levelet.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','A következő szállás foglalása: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','A következő szoba foglalása: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Felnőttek száma: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Gyerekek száma: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Érkezés: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Távozás: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Foglalt napok száma: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Vendég E.A. (egyedi azonosító): ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Név: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Vonalas telefon: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobiltelefon: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Díjszabás: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','A szerződés értéke: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Bekért előleg: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Sajnáljuk, de a szállásfoglalás folyamata előtt szükséges az adatainak a frissítése. Kérjük, kattintson az "Adataim" linkre először és adja meg elérhetőségi adatait. Köszönjük.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Köszönjük, az adatai mentésre kerültek.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Üdvözöljük Idegen. Mielőtt lefoglalna egy szobát, meg kell adnia, frissítenie az adatait az "Adataim" című linkre kattintva.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Üdvözöljük újra ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Előzetes foglalás ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Vendég kiválaszása ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Bejövő foglalás ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Ma nem várható előleg érkezése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Foglalás eldobása ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Eldobott foglalás ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Foglalás eldobásának jóváhagyása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Ma nincs be nem érkezett előleg');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Ma bejövő előlegek');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Ma távozó vendégek');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','A szoba foglalt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Új foglalások');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Szoba foglaltság megtekintése:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Kiegészítők');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Díjszabás & Árfolyam');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Kedvezmények');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Foglalás érvénytelenítése. NEM LEELŐLEGEZETT');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Fájl feltöltése');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Jelenlegi beállítások');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Magyarázat');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Banki átutalással?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','A szállásfoglalás beállítása offline-ra, hogyha most nem akar foglalni.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Elérhető kedvezmények?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','A kedvezményrendszer azoknak a vendégeknek van kialakítva, amelyek a csoportlétszám függvényében kedvezményekre jogosultak. Mivelhogy a csoportlétszámtól függő, ezért a használata akkor ajánlott, amikor a foglalás nem /fő/nap alapon történik.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Kedvezmény 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Kedvezmény 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Kedvezmény 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Kedvezmény 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Kedvezmény 1 értéke');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Kedvezmény 2 értéke');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Kedvezmény 3 értéke');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Kedvezmény 4 értéke');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Egyszemélyes felár');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Bizonyosodjon meg, hogy ez az Igen-re van állítva, ha azt akarja, hogy a vendég felárat fizessen az egyszemélyes használatért');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Egyszemélyes felár');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Pótágy felár.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Bizonyosodjon meg, hogy ez az Igen-re van állítva, ha azt akarja, hogy a vendég felárat fizessen a pótágyért');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Pótágy felár díjszabása');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Előleg fizetése százalékosan?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','A foglaló összege a teljes összeg százalékosan számoljuk ki? Ha nem, akkor a foglaló értékeként egy fix összeg alkalmazható');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Bekért előleg összege');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Per fő, per nap');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Válassza az Igen-t, ha /fő/nap díjszabással akarja megterhelni. Ha nem, akkor az ár /szoba/nap alapon lesz kiszámolva');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Bánatpénz, kötbér megfizetésére kötelezhető');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Állítsa Igen-re, hogyha azt akarja, hogy a foglaló összege a foglalás lemondása esetén kötbérként legyen visszatartva, amely egy jövőbeni szállásfoglalásnál felhasználható. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Létező fájl');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Fájl típusok');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Itt pontosítsad, hogy milyen fájltípusok feltöltése engedélyezett. Kisbetűs, vesszővel elválasztott, szóköznélkül lista engedélyezett. Például: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Fájlméret');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','A kép maximális mérete KB-ban');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Kattintson a hétre a szobák kihasználtságának megtekintéséhez a mai nappal kezdődően');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Kattintson ide a lefoglalt szobák megtekintéséhez');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','vagy válassza ki az Önt érdeklő periódust');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Foglalt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Szabad');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>A kék háttérrel jelölt szobák foglaltak <br> ha a szoba piros, nem fizették be az előleget. <br> Ahol a szoba csillagozott a vendég a tárgynapra tervezi az érkezést.<br> Ha a szoba sárgával jelölt, a vendég jelenleg foglalja el a szobát.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Visszaigazoló levél');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Kedves ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Szállásdíj /nap - /szoba');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','A szállásfoglalás részletei');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Köszönjük, hogy a ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','rendszerén keresztül foglalt. Alább olvashatja a szállásfoglalása összefoglalóját. Kérjük, ellenőrizze le, hogy az Ön rendelkezésünkre bocsátott adatai helyesek, hogy szükség esetén fel tudjuk venni Önnel a kapcsolatot.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Az Ön részére megérkezéséig fent lesz tartva a szoba, amely du. 2 óra után foglalható el.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Mi örömmel várjuk, hogy üdvözölhessük Ön(öke)t szálláshelyünkön ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Reméljük, hogy jól érzi majd magát nálunk.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Most fel kell hívjuk a figyelmét egy kis nyomtatásra.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Felhívjuk a figyelmét, hogy a szállásfoglalás egy törvényes szerződés, tehát ha bármi oknál fogva vissza kellene mondania vagy lerövidítenie a foglalást, ezért a szállásfoglalási szabályzatban meghatározottak szerinti kötbért köteles kifizetni.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','A lefoglalt, de el nem foglalt, fogadott szolgáltatások, szálláshelyre engedményt nem tudunk elfogadni a szállásfoglalás teljes idejére. Ezért erősen javallott az utasbiztosítási kedvezmények igénybevétele.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Szállásfoglalás visszamondása vagy megrövidítése</i> Ha le akarja mondani a szállásfoglalást, akkor azt kérjük írásban tegye meg (e-mailen, postai levélben vagy faxon). A szálláslemondásnak a következő költségei vannak:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 nap vagy több');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Csak előleg.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15-től 30 napig');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' a szerződés értékének az 50%.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Az érkezés előtt 14 nap');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' a teljes szerződés 100%-a.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Áraink tartalmazzák az áfát. ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Visszaigazoló levél kinyomtatása');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Számla nyomtatása');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Kedves ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Díjszabás /nap - /szoba ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Vendégéjszakák száma: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','A szerződés létrejött: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Napi díjszabás: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Mindösszesen');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Számla részletei');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Köszönjük, hogy bennünket választott');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Reméljük, hogy hamarosan újra üdvözölhetjük Önt.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','ÁFA@ 20% minden díjszabásban benne foglaltatik. Minden más felár vagy eltérés Áfá-val lesznek terhelve.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Számla nyomtatása');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Szolgáltatás hozzáadása a számlához');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Szolgáltatás részletezése');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','A szolgáltatások értéke');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Megrendelés');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Egyéb megrendelt szolgáltatás');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Egyéb megrendelt elemek összértéke: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Elem hozzáadva a számlához');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Az eredeti szálláshelyet nem találjuk</h1><br>Nem folytatható. Kérjük, vegye fel a kapcsolatot a honlap adminisztrátorával.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Kép csatolása');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Kép feltöltése');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Feltöltés');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Fájl feltöltése');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','A feltöltendő fájl a következő típusú, méretű lehet');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','A feltöltéshez csatoljon egy fájlt');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Csak a következő fáljtípusok feltöltése engedélyezett:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Kérjük a feltöltés előtt válasszon ki egy fáljt');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','A fáljnév alfanumerikus karaktereket tartalmazhat (szóközöket és ékezetes betűket nem).');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','A fálj mérete meghaladja az Adminisztrátor által beállított maximum méretet.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','A megadott fáljnév már létezik. Kérjük, nevezze át a fált a feltöltés előtt és próbálja újra.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Az Ön fálj(a)i sikeresen feltöltődtek.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','A fájl NINCS feltöltve.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','A fájl sikeresen feltöltődött.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Belép a jomres hálózatba?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Ha az szálláshelyet regisztrálja az adatbázisunkba, az megjelenik a www.szekelyszallas.hu weboldalon. Feltételezzük, hogy a szálláshely üzemel. A Székelyföldi szálláskereső nem vállal felelősséget az Ön által feltöltött adatokért. Az adatok helyességéért Ön felel.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Naptár');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Naptár nyelvi fájlja');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Válassza ki azt a nyelvi fáljt, amely a Naptárban használható. Néhány Naptár hibás lehet! Bővebb infó: http://sourceforge.net/tracker/?group_id=75569&atid=544287');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS Naptár CSS fájlja');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Válassza ki a CSS stílusfáljt, amely a Naptárban használható');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Ünnepek megjelenítése?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Ha Igen-re van állítva, akkor meg kell bizonyosodnia, hogy az ünnepek és normál napok díjszabásai külön vannak választva. Állítsa Nem-re, hogyha az ünnepnapokat is a normálnapok díjszabásaival szeretné megterhelni.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Egyéb');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');

/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Kép törlése');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Fájl törölve');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Mutassa a Távozás beviteli mezőt');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Állítsa Igen-re, hogyha szeretné megjeleníteni a Távozás beviteli mezőt. Megjegyzendő, hogy néhány böngésző nem kezeli rendesen a Javascript Naptárakat. Személy szerint én kikapcsoltam ezt az opciót, mert úgy találtam, hogy ez a mező megjelenítése ott csúnya');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Válassza ki azt a szálláshelyet, amelynek a foglalhatósági naptárát szeretné megjeleníteni');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Bármelyik');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Szoba');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Szálláshely');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','SQL mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Kapcsold be ezt az SQL megtekintésé végett.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','SQL eredményeinek mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Kapcsold be ezt, hogy megtekinthesd, hogy a visszairánaított SQL adatok be lettek-e töltve.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Sabloncsomag választása');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','Felső gombok css id-je');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Táblázat fejlécének css id-je');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Sablonok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Törlés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nem lehet ezt a szobát törölni, foglalások vannak rá. Szabadítsa fel a foglalások alól és próbálja meg újra.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Szoba törölve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Szoba jellemzőinek törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nem lehet törölni a szoba jellemzőit, egy néhány szobához hozzá van rendelve. Távolítsa el enne a szobáknak ezt a jellemzőjét és próbálja meg újra.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Szoba jellemzői törölve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Szálláshely jellemzőinek törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nem lehet törölni ennek a szálláshelynek a jellemzőit, egy szálláshelyhez hozzá van rendelve. Távolítsa el ennek a szálláshelynek ezt a jellemzőjét és próbálja meg újra.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Szálláshely jellemzői törölve');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Szobatípus törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Nem lehet törölni ezt a szobatípust, egy szobához van hozzárendelve. Próbálja a szobát más szobatípushoz rendelni és próbálja meg újra.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Nem lehet törölni ezt a szobatípust, egy díjszabáshoz van hozzárendelve. Próbálja a díjszabást más szobatípushoz rendelni és próbálja meg újra.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Szobatípus törölve');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Szálláshely törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','A szálláshely nem törölhető, mert adatok vannak hozzárendelve: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Szálláshely törölve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Önnek nincs joga törölni ezt a szálláshelyet.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Szálláshely kiválasztása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Melyik szálláshelyhez tartozik a szoba?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Szálláshely kiválasztása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Egy szálláshelyet ki kell választani');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Kis ikonok képszélessége');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Közepes méretű ikonok képszélessége');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Teljes képméret');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Térkép megtekintése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Szálláshely leírása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Szolgáltatások és adottságok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Kikapcsolódás-, programlehetőségek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Csillagtúra ajánlatok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Árajánlat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Bejegyzett aldomainnév');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Biztosíték & lemondás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Jomres.net szállás licenszkulcs');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Ha weboldalát fel szeretné töltené az internetre látogassa meg a következő oldalt: <a href="http://www.szekelyszallas.hu" target="_blank">Székelyföldi szálláskereső</a> ahol azonosítót kaphat. Ezzel a Székelyföldi szálláskereső regisztrálja szálláshelyét az adatbázisába, még nagyobb látogatottságot biztosítva Önnek.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Szálláshely ajánlataink');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Szálláshely címe');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','A látogatók foglalhatnak on-line');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Állítsa Igen-re, hogy a látogatók is foglalhassanak on-line.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Szállásfoglalások fix periódusra');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Ha Igen-re van állítva, akkor a foglalások fix periódusokra lesznek eszközölve. Ha ez Nem-re van állítva, akkor először bizonyosodj meg, hogy az "Előre definiált érkezési nap" opció nincs Igen-re állítva (ha csak nem akarod, hogy a vendégek egy bizonyos napon érkezzenek); különben a naptárban nem sok működő link lesz');

/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Foglalási periódus: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Szobák foglalása');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Szállásfoglaló táblázat széle');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Szállásfoglalási táblázat széle színének megválzoztatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Szállásfoglaló táblázat háttérszíne');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Szállásfoglalási táblázat háttérszínének megválzoztatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Szállásfoglaló táblázat szélessége');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximum periódus, pl. 3 x 7 szállásfoglalási periódus = 21 nap');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Vendégek kötelező száma?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Állítsa Igen-re a vendégek számának megjelenítéséhez a szállásfoglalási űrlapon');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Ez egy apartman/kulcsosház/villa?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','PL. a teljes ház egyben kiadó, nem szobánként ezen a szálláshelyen. Ha ez az eset áll fent, akkor meg kell bizonyosodni, hogy egy szoba van hozzárendelve minden egyes ilyen szálláshelyhez.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Felnőttek maximum száma');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','A szállást foglaló felnőttek maximum számának beállítása.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Gyerekek maximum száma');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','A szállást foglaló gyerekek maximum számának beállítása. Ha ez nullára van állítva, akkor a kedvezményezettek neve és létszáma nem kerül a foglalási űrlapon megjelenítésre.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Végrehajtás');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Szállásfoglalás értékelése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Szállásfoglalás ellenőrzése, jóváhagyása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Kedvezmények');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Figyelmeztetés...</FONT></h1><BR><B>A site_config.php fájl attributámát 777-re kell változtatnia, ahhoz, hogy a beállítások elmenthetőek legyenek</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Hétfő');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Kedd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Szerda');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Csütörtök');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Péntek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Szombat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Vasárnap');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','H');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','K');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Sze');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Cs');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','P');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Szo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','V');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Foglalhatósági naptár');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Minden szöveg betűtípusa');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Minden szöveg betűmérete');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Cella magassága');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Cella széllessége');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Az aktuális dátum betűszíne');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','A megjelenített hónap napjainak betűszíne ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','A nem megjelenített hónapok napjainak betűszíne');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cella háttérszíne azokra a napokra, amikor a szállás/szoba szabad ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cella háttérszíne a meg nem jelenített hónapok napjainak');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cella háttérszíne a foglalt napokra ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cella háttérszíne  előzetesen lefoglalt szobákhoz (amelyekre még nem fizettek előleget)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cella háttérszíne múltbeli dátumokhoz');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Szín kódja:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Foglalt/Nem fogadóképes ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Foglalhatóságok');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Előzetes foglalások ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Érkezési nap / dátum');

/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Csak azoknak a honlapoknak, amelyek fix periódusos foglalásokat ajánlanak. Válaszd ki a napot, amellyel az érkezéseknek kezdődniük kell.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fixált érkezési nap');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Üdülési periódus (napok)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Elérhetőségi naptár mutatása?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Válassza az Igen-t, az elérhetőségi, foglalhatóségi naptár mutatásához');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Választásom jóváhagyása');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Elérhetőség, foglalhatóság');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Elvégzendő teendők:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','A kiválasztott dátumok leellenőrzése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','A vendégek számának leellenőrzése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Személyes adatok megadása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Szoba kiválasztása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Kiválasztott szoba megtekintése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Adatok ellenőrzése. Amennyiben megfelelő, kérjük erősítse meg a foglalást');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Kattintson egy szabad dátumra a szállásfoglalási űrlap eléréséhez.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Téves foglalások');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Nincs téves foglalás');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Új téves foglalások');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Ezen szobák foglaltságának mímelése');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Vendég törlése');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Vendég törölve');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Nem lehet a vendéget törölni, ha érvényben lévő foglalásuk van. Törölje a vendég foglalását és próbálja meg újra.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Vezérlőpult szalag típusú mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Ha Igen-re van állítva, akkor a foglalhatósági Naptár Havi naptárnézetből át lesz állítva Heti naptárnézetre.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','A szoba jelenlegi ára: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Az emailcím érvénytelen ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','E levél feladója');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Üdvözöljük');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Köszönjük, hogy foglalt a');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','A szállásfoglalásának összegzése:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Bármilyen bármilyen kérdése merülne fel a szállásfoglalással vagy a szolgáltatásainkkal kapcsolatosan, kérjük bizalommal forduljon hozzánk.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','A mi telefonszámunk');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Felveheti velünk a kapcsolatot a következő e-mailcímen is');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Dohányzó');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Bármilyen");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Naptár kimeneti formátuma');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Ez az opció engedélyezi a felhasználónak, hogy megváltoztassa a szállásfoglaló rendszer naptárának kimeneti formátumát.');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Naptár bemeneti formátuma');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Ez az opció engedélyezi a felhasználónak, hogy megváltoztassa a szállásfoglaló rendszer naptárának bemeneti formátumát.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','A fix periódusú foglalások esetén rövid megszakítások engedélyezettek');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','A megszakítások hossza');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publikálva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Beállítások');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','PayPal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','PayPal felhasználó?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Használ Paypal sandbox-ot?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','PayPal Developer Account szükséges');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Az Ön PayPal e-mailcíme');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Megjegyzés: Hogy használhassa a PayPal-t, be kell lépnie a PayPal accountjába és engedélyezni a Visszatérést a honlapra opciót /Autoreturn/. (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Hiba, a PayPal e-mail nem lett beállítva');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Nyomonkövetés');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Nincs nyomkövetés');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Dátum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Idő');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Felhasználó (username)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Művelet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Szálláshely jogai');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Részletek megtekintése');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Bármelyik</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Szűrés dátum szerint');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Szűrés felhasználónév szerint');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Szűrés művelet szerint');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Állapot');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Függő érkezések');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Mai érkezések');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Jelenleg helybéli');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Mai távozások');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Lejárt távozások');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Nem érkezett meg');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Szűrés');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Ismeretlen felhasználó');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Létrehozott szoba');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Frissített szoba');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Törölt szoba');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Létrehozott szoba jellemző');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Frissített szoba jellemző');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Törölt szoba jellemző');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Szobatípus létrehozása');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Frissített szobatípus');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Törölt szobatípus');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Létrehozott szálláshely');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Frissített szálláshely');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Törölt szálláshely');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Létrehozott szálláshely jellemző');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Frissített szálláshely jellemző');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Törölt szálláshely jellemző');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Szerkesztett szálláshely beállítások');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Publikált szálláshely');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Létrehozott díjszabás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Frissített díjszabás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Törölt díjszabás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Létrehozott ünnep');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Frissített ünnep');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Törölt ünnep');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Szolgáltatás díjszabásának hozzáadása');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Szállásfoglalás lemondása');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Beérkezett foglalás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Lejárt foglalás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Frissített CC részletek');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Bevitt előleg');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Létrehozott vendég');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Frissített vendég');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Törölt vendég');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Feltöltött új szállásfotó');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Feltöltött egyéb szállásfotók');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Törölt kép');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Feltöltött új szobafotó');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Feltöltött egyéb szobafotók');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Feltöltött új jellemzők fotó');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Feltöltött egyéb jellemzők fotói');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Lefoglalt szobák');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Létrehozott szolgáltatás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Frissített szolgáltatás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Törölt szolgáltatás');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publikált szolgáltatás.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Bevitt hamis foglalás.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Törölt hamis foglalás.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Szolgáltatás neve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Szolgáltatás szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Részletes leírás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Név');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Ár');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Új szolgáltatás');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Kattintson a szöveg szerkesztése linkre a szolgáltatás szerkesztéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Szolgáltatás hozzáadva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Szolgáltatás frissítve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Elem szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Elem klónozása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Szolgáltatás törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Szolgáltatás törölve');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Szolgáltatások adminisztrálása');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Megjelenítsük a szolgáltatásokat a foglalás ideje alatt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Állítsa ezt igenre, hogy a szolgáltatásokat is kínálja a vendégnek');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Választható szolgáltatások.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Szálláshely kiválasztása');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Kijelölés megfordítása / mindenik kijelőlése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Hamis foglalás kezdődátuma');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Szolgáltatások visszavezetése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Hamis foglalások');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Egy vagy több szoba a megjelöltek közül már foglalt. Ha ezeket a szobákat szeretné fenntartani, akkor először az ezekre érvényes foglalások alól fel kell szabadítsa.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','A foglalás próbálkozása alatt egy hiba lépett fel, egy vagy több szoba a kiválasztottak közül nem szabad.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Hamisan (fenntartott) foglalt szobák');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Hamis foglalások törlése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Hamis foglalások megtekintése');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nincs listázandó hamis foglalás');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Csillagok száma');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Dohányzó opció mutatása?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Állítsa ezt igenre, hogy a dohányzó opciót megjelenítse.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Visszaállítás');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Az Ön PayPal fizetési státusa Függő-re van állítva. Miután a hotel visszaigazolja a fizetési mód fogadóképességét, azután a foglalás státusa meg lesz változtatva Visszaigazolt-ra.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Visszavont foglalás');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Szálláshely gyorskereső');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Keresés ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Mutassa a PayPal hibaüzenetét?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Szoba nevének mutatása?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Állítsa Igen-re a szoba nevének megjelenítéséhez?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Szobatípus mutatása?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Igen-re állítsa a Szobatípus mutatásához?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Dohányzás alapértelmezettre állítása');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Légy óvatos: Ha ez Igen-re van állítva és van Nemdohányzó szoba, akkor nem lesz megjelenítve szoba a szállásfoglalási űrlapon.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Pénznem jele');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Pl. &amp;euro&#59; Megjegyzendő, hogy használhat HTML kódokat a szimbólumok megjelenítésére. A pénznem szimbólumok megtekinthetők itt: <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Pénznem jele');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','P. EUR. Ez a szállásfoglalás visszaigazolásakor használatos.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Kattintson ide több információért!');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Figyelmeztetés... Ön Menedzserként van bejelentkezve, azaz minden szálláshelyet szerkeszthet. Légy óvatos, egy néhány Jomres funkció átállítása problémákat okozhat.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Bővített szállásfoglalás korlátozása?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Állítsa ezt Igen-re, ha korlátozni akarja a bővített szállásfoglalást (használja a követekző mezőt a napok számának korlátozására). Ha ezt az opciót Igen-re állítsa, akkor ha a vendég több, mint n napot próbál foglalni, akkor az érkezési nap vissza lesz állítva az aznapi napra');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Bővített foglalás napok száma ennyi napra korlátozva:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>MEGJEGYZÉS: Nem ajánlott mindkét opció esetében Igen-t bejelölnie, csak egyik adószámítási lehetőséget célszerű használni.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Adó');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Szoba adó');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Az amerikai piacra tervezve. Ez a helyi turisztikai adó lesz ráterhelve a vendégre. Kombinálva vagy egyenként megterhelhető egy fix vagy egy százalékos összeggel. Vegye figyelembe, hogy ezek az adók csak a szoba árára vannak alkalmazva.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Fix összegű adó');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Adó százalékmértéke');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Turisztikai adó');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Minden piac számára, amely általános forgalmi adót alkalmaz, Pl. ÁFA Magyarországon, TVA Romániában, Value Added Tax in the UK. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Adó mértéke');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Minden rekord archiválása');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' rekord archiválva');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Nyomkövető archivált rekordjai');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Árajánlat szállásra');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Díjszabás neve');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Díjszabás leírása');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Szobatípus');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Érv. ettől');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Érv. eddig');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','/fő /nap');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','/nap');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','A hétvégéken kívül');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum napok');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum napok');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. személy');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. személy');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Előnézet');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Folyamatban lévő szerkesztés?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Jelenlegi szöveg');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Új szöveg');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Szöveg frissítve.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Nyelv szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Nem archivált elemek száma: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Több, mint 200 rekord az aktiv nyomkövetőben nincs archiválva, így nem lehetséges a végrehajtott SQL tevékenység megjelenítése. Ha az SQL tevékenységet meg akarod tekinteni, akkor a nyomkövető táblát közvetlenül kell elemezned. Ha rendszeresen akarod követni az SQL tevékenységet, akkor javasolt, hogy archiválj rendszeresen');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Szállás típusa');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Szállástípus listázása');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Szállástípus szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Szállástípus');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Szállástípus leírása');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Szállástípus mentve');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','A szállástípust nem lehet törölni. A szállástípus hozzá van rendelve egy vagy több zsálláshelyhez, légyszíves sorold át őket, majd próbáld újra');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Szállástípus(ok) törölve');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Hiba, a szállásnak nincs szobája.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Hiba, a szállásnak nincs díjszabása.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Hiba, a szállásnak nincsen szobatípusa.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Szálláshely megváltoztatása');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Fizetési emlékeztető');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>A PayPal tranzakciója teljesítve, és a foglalásról egy emlékeztető lett e-mailezve Önnek. Beléphet a PayPal azonosítójával a www.paypal.com címen és megtekintehi a tranzakció adatait. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Nincs extraköltségű plusz szolgáltatás hozzáadva');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Előleg');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Teljes összeg');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','A foglalásra fizetendő összeg');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Hsználja ezt az opciót, hogy eldönthesse, hogy mi van megadóztatva a szállásfoglalás alatt. Válassza ki az előleget, ha az előleg adóköteles vagy az egész összeget, ha a teljes összeg adóköteles.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Megjelenítendő hónap');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','A szoba foglalhatóságánál, hány hónap legyen megjelenítve?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Aláírva a köv. nevében');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','On-line  fizetés');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Kilépés');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Kérjük, válasszon szobá(ka)t, amelyeket ki akar vonni a szolgáltatás alól, és az azzal kapcsolatos adatokat. <br>Ha egy szoba nincs megjelölve, akkor nem  vehető fel rá hamis foglalás (fenntartás), amíg a tényleges szállásfoglalások nincsenek teljesítve vagy visszamondva.<br/> Ha kiválasztotta a megfelelő adatokat, akkor kattintson a kék "Alkalmaz" gombra, hogy a szoba foglalhatóságát újra leellenőrizhesse. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Úgy néz ki, hogy a portálrendszer az inaktivitás miatt kiléptette Önt.</b> Kérjük jelentkezzen be a rendszerbe és próbálja újra.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Kilépés oka');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Használ On-line fizetést?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Állítsa Igen-re, hogyha on-line fizetési módozatot is szeretne használni. <b>Megjegyzés:</b>Ez nem kapcsolja ki az előlegszámítási opciót a szállásfoglalási folyamatban. Ha ezt ki akarja kapcsolni, akkor módosítani kell azokat a sablonokat, amelyek az előlegezésre vonatkoznak.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Kérjük válassza ki a fizetési módozatot.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway engedélyezése?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Kiegészítők módosításának beállítása');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Telepített kiegészítő beállítása');
/**
* @ignore
*/
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK','External link');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Titkosítás');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Use mCrypt encryption?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Set this to yes IF you have mCrypt compiled into PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Titkosító kulcs');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Titkosító mód');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Titkosítási algoritmus');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Megtekintett hitelkártya');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Hitelkártya frissítése');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Hitelkártya szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Ikon méretének szerkesztése');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Pixelben mérve.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Szállásképek feltöltése');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','A kép már létezik az albumban');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Képnézegető');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Diavetítő linkjének megjelenítése?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','A diavetítés megjelenítése szalagban?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Állítsa be az Igen-t, ha a szalag diavetítést a szállás adataival akarja megjeleníteni.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Diavetítés teljes magasságban');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Diavetítés ikon magasságban');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Diavetítő');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sajnos nem tartozik kép a szálláshelyhez. Kérjük töltsön fel néhány képet a tömeges feltöltés funkcióval, ha használni szeretné a diavetítést.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Felugró ablak szélessége');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Felugró ablak magassága');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Kép helye');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Csak abban az esetben változtassa meg a beállítást, ha máshol van szüksége a jomres képekre. Hiba ha nincs megadva a \'/images/stories/jomres/\' a joomla elérési úttal kapcsolatban.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Árlista link mutatása?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Engedélyezi a felugró ablakokat?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Ha Nem-re állítjuk a felugró ablakban megnyíló linkek szalagban fognak megjelenni. KÍSÉRLETI! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Képek feltöltése diavetítéshez');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Ezt a formát használja a szállásképek tömeges feltöltéséhez.<br/><b>Vegye figyelembe, </b> hogy az azonos nevű képek felülírják egymást. Szintén vegye figyelembe, hogy ez a forma nem tölti fel a szoba specifikus képeket, valamint a szállás fejképeit. Ezeket a szálláshely adminisztrációs felüleltéről tudja feltölteni. <br/><b>Vegye figyelembe, </b> hogy a feltöltött képek a  /images/stories/jomres/*property_uid* könyvtárba kerülnek. Ha ez a könyvtár még nem létezett, létre fog jönni, hacsak nem határoz meg egy másik könyvtárat.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Egyéb');
/**
* @ignore
*/
define('_JOMRES_A','Oldal konfigurálása');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Globális szálláshely beállítási lehetőség');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Állítsa Igen-re, ha minden szálláshelynél akarja használni a szálláshely rendszergazda által beállított jellegzetességeket.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Kép hozzárendeléshez ehhez a funkcióhoz először fel kell tölteni a szálláshely képeit a /images/stories/jomres/pfeatures/ mappába. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Ikon');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Válassza ki a keresési módot, amit használni akar.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>A keresés nem hozott eredményt. Kérjük adjon meg új keresési feltételeket és próbálja újra.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Biztos ezt akarja tenni?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','On-line szállásfoglalás');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Lefoglalom!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Biztonsági szám');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Árak megjelenítése szalagban?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Elérhetőségek');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Részletes bemutatás');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kattintson ide a szoba és foglalhatóság megtekintéséhez');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Árak megjelenítése');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Cím megjelenítése a link alatt');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Részletes szállásadatok megjelenítése a link alatt');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Szobák és a foglaltság megjelenítése a link alatt');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Árak megjelenítése a link alatt');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Átalánydíjak');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Átlagok');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Válasszon árkialakítási modellt');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Kétféle árképzés közül választhat. Az első 'átalányár' eljárás lehetővé teszi számos ár megadását a vendégnek és az ár a foglalás teljes időtartamára megegyezik, minden nap azonos. Ez akkor praktikus, ha ugyanarra a dátumra különböző árakat is meg akar adni, pl. szoba reggelivel vagy félpanziós ár... Válassza az 'átlagár' kalkulációt, ha szezonális árakat akar használni, napokra lebontva. A rendszer megtalálja a foglalás napjaihoz rendelt árakat, összegzi, és kiszámítja a foglalás idejére eső átlagárat. ");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Jomres portál használata?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Állítsa Igen-e ha a Jomres-t akarja használni a Jomres portál szoftverrel');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Megjelenjen a távozás dátumának megadása mező?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Állítsa Nem-re, ha nem akarja megjeleníteni a távozás dátuma mezőt. Gondolja át a beállítást, mivel a távozás dátuma a foglalásban mindig az érkezést követő nap lesz. ");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Leírás korlátozása');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Ez a beállítás korlátozza a szállások listájában megjelenítendő karakterek számát ha a szálláshely leírásából kilépve.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Napi árak összeadása');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Lehetővé teszi a felhasználó számára, hogy csatoljon egy összeadást a foglalás során visszaigazolt napi szállásdíjakhoz (ajánlatos ha a szállásdíjat pl. egy hétre vonatkozóan tünteti fel)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Diavetítés ablakának szélessége');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Diavetítés ablakának magassága');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Frissítés');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Kattintson az Aktualizálás gombra a foglaltság ellenőrzéséhez');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Dátum formátum() ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Állítsa Igen-re a normál dátumformátumhoz () (Példa: <a href="http://www.php.net/manual/en/function.date.php"></a>). Állítsa Nem-re strftime() formátum használatához (Példa: <a href="http://www.php.net/manual/en/function.strftime.php"></a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Készre jelentés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Készrejelentés visszavonása');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Töltse ki a következő mezőket: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Köszönjük.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Globális szobatípusok használata');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Állítsa Igen-re, ha minden szálláshelynek csak a rendszergazda által meghatározzott szobatípust akarja engedélyezni. Ha engedélyezni akarja a szobatípus alapú keresést, akkor ezt szükséges Igen-re állítani.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Kép hozzárendeléséhez ehhez a szobatípushoz előbb fel kell töltenie a képeket a következő mappába /images/stories/jomres/rmtypes/ . ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Határszín beviteli hiba');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Háttérszín beviteli hiba');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Ország megadása a foglalási űrlapon');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Használja a segítséget?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Állítsa Igen-re, ha meg akarja jeleníteni a Segítség szövegét a keresőablak fölött.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Segítség szövegének szerkesztése.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','A megjelölt mezők kitöltése kötelező.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Regisztrálhatja a felhasználó a szállását?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Állítsa Igen-re ha engedélyezni akarja a felhasználók számára a szálláshelyek rögzítését adminisztrátori beavatkozás nélkül.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Kérjük adja meg a megyét és régiót, ahol a szálláshelye található.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Kérjük, töltse ki a szálláshely részletes adatait.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','A megjelölt mezők kitöltése kötelező.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Szálláshely létrehozása');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Nem regisztrálhat szálláshelyet! Regisztrálja magát és jelentkezzen be!");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Regisztrált szállás: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Felhasználó: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Napi díjszámítás?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Naponta');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Naptár megjelenítése az év elejétől?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','A foglaltsági naptár ez év első napjától kezdődik.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Megtekinti a szoba részleteit?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Ha Nem-et állít be, a Jomres nem mutatja meg az összes közbenső foglalást, csak jelzi a foglaltságot.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Szabad szobák');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Kérjük válassza ki a szobák számát és típusát.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Szám megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Vissza a szállás részleteihez');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Szoba típusok');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Jomres metadata használata?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Ha az Igen-t állítja be, a Jomres a szálláshely leírásában szereplő szöveget fogja használni és a szálláshelylista oldalait a metaadatok generálásához. Szóközzel tagolja a szavakat.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Szavak elrejtése');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Ezek rejtett szavak, melyeket <i>nem</i> akar megjeleníteni a meta adatokban .");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Egyéb fogalmak eltávolítása');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Ezek fogalmak, melyeket el kell távolítani a metaadatok közül. Példa lehet egy szimbólum, kérdőjel stb.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Gyakoriság');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Az ismétlődések száma ahhoz, hogy a szavak bekerüljenek a metaadatok közé.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Véletlen keresés limit');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Google árfolyamlink megjelenítése az árlistában?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Váltsa át :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Html szerkesztő használata engedélyezett a felhasználónak?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Ezt az űrlapot használhatja a szállásfoglaláshoz. Állítsa a kurzort az "i" képek fölé további információért a témáról. Módosítsa foglalása adatait, mint az érkezés és távozás dátuma, vendégek száma, azután válasszon a szabad szobák közül igényeinek megfelelőt. Kattintson bármely szabad szobára, hogy hozzáadja foglalásához. Ha elkészült extrákat is adhat foglalásához, majd rögzítse a címét. Ha elegendő adatot megadott megjelenik a jóváhagyás gomb, és befejezheti a foglalást.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Ezt az űrlapot használhatja a szállásfoglaláshoz. Állítsa a kurzort az "i" képek fölé további információért a témáról. Módosítsa foglalása adatait, mint az érkezés és távozás dátuma, vendégek száma. Ha elkészült extrákat is adhat foglalásához, majd rögzítse a címét. Ha elegendő adatot megadott megjelenik a jóváhagyás gomb, és befejezheti a foglalást.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','A szállásfoglalás részletei');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Kérjük, válassza ki a szállásfoglalás kívánt részleteit');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Foglalhatóság');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Válassza ki a kívánt szobákat');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Tekintse meg a szoba foglaltságát abban az időszakban.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Választható szolgáltatás');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Válasszon valamilyen extrát, melyet a foglalásba fel akar venni');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Naponta');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Az Ön címe');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Kérjük, írja be az adatait. Felhívjuk a figyelmét, hogy minden mező kitöltése kötelező a Mobil telefonszám kivételével');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Szabad szoba');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Kiválasztott szoba');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>A legkorábbi lehetséges érkezési nap: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Naponta:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Összesen:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Szolgáltatások:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Turisztikai adó:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Kedvezmény:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Mindösszesen:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Vendégek');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kattintson ide a szoba kiválasztásáért!');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kattintson ide, hogy a szobát törölje a kiválasztottak közül');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Vendég típusok');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Típus');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Vendég típusa; pl. 3-10 éves Gyerek, Diák, stb.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Megjegyzés');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Vendégtípussal kapcsolatos megjegyzése, ha van ilyen.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Ennek a vendégtípusnak a maximális száma, aki a foglalásba felvehető');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Százalék');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','A kiszámolt összeg a szoba alapárának százaléka. Ha Nem-re állítja a meghatározott összeg hozzáadódik vagy levonódik a szoba alapárából. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Eltérés megadása?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','A kiszámolt összeg hozzáadódik vagy levonódik a szoba alapárából. Állítsa Nem-re, ha diszkontot akar adni a szobaárból.  ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Eltérés');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Az eltérés összege');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','A módosított vendégtípus rendezése');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Vendégtípus publikálása');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Vendégtípus törlése');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Vendégtípus létrehozása');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Vendégtípus frissítése');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Vendégtípus frissítve');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Szobalista megjelenítése a szálláshely részletes bemutatkozó oldalán?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Szobalista linkjének megjelenítése a szálláshely részletes bemutatkozó oldalán?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','<b>Csak</b> Foglalhatósági naptár/Szabad szobák megjelenítése?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Állítsa Igen-re, ha nem akarja megjelentetni a szálláshely fejadatait és részleteit, csak a szobák listáját/foglalhatósági naptárat. Azoknak a felhasználóknak ajánlatos, akik csak üres szállás kiadással foglalkoznak (pl. apartmanok, villák stb).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','A honlapon használható CSS stíluslap');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Érk-Táv minimum intervalluma');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','A minimum időtartam az érkezés és távozás dátuma között.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Szállásfoglaló űrlap - szobalista - szobaszám mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Szállásfoglaló űrlap - szobalista - szoba nevének mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Szállásfoglaló űrlap - szobalista - Díjszabás címének mutatása');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Szállásfoglaló űrlap - megnevezés mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Szállásfoglaló űrlap - leírás mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Szállásfoglaló űrlap - foglalható díjszabás mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Szállásfoglaló űrlap - foglalható díj kezdeti értékének mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Szállásfoglaló űrlap - foglalható díj végső értékének mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Szállásfoglaló űrlap - min. foglalható napok számának mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Szállásfoglaló űrlap - max. foglalható napok számának mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Szállásfoglaló űrlap - min. foglalható személyek számának mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Szállásfoglaló űrlap - max. foglalható személyek számának mutatása');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Szállásfoglaló űrlap - foglalható szobák számának mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Szállásfoglaló - foglalható szobák nevének mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Szállásfoglaló űrlap - foglalható szobák típusának mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Szállásfoglaló űrlap - dohányzó szobák mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Szállásfoglaló űrlap - mozgássérült-barát opció mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Szállásfoglaló űrlap - emeletek mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Szállásfoglaló űrlap - szobák és maximum személyek számának mutatása');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Szállásfoglaló űrlap - foglalható szobák jellemzőinek mutatása');

/**
* @ignore
*/
define('_JOMRES_ORDER','Rendelés');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','A Jomres-ben egyszobás szállásokat állított be (pl apartman, villa) habár több szobát is létrehozott. Ez a használat során hibákhoz vezethet, ezért ha a Jomres-ben egyszobás szállásokat is használni akar, távolítsa el a többi szobát, csak egy maradjon. Módosítsa a beállításokat Egyszobás szállások = Nem, aztán lépjen a szálláshely adminisztrációs felületre és távolítsa el az összes szobát, hogy csak egy maradjon ehhez a szálláshoz.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Megadni kötelező');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Érkezés előtti napok száma');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','A mai nap és az érkezés közötti minimális napok száma.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Naponta:');

/**
* @ignore
*/
define('_JOMRES_DTV','Dátum típus variációk');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','A hét napjai');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Periódusok');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Lefoglalt napok');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last-Minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','A hét napja');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','A hét bizonyos napja');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Árcsoport összetevők kiválasztása');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Ez a legördülő menü lehetővé teszi, hogy saját árcsoport objektumot válasszon, melyet Ön hozott létre vagy töltött le és telepített, mint külön összetevő a Joomla-ban. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Alapértelmezett vendégtípus');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Alapszám az egy az első vendégtípusnak. Ha használ vendégtípust, ez az elsőszám, mely az első foglalásba bekerül. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Csk regisztrált felhasználók foglalhatnak on-line?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sajnáljuk, regisztrálnia kell magát a rendszerbe, ahhoz, hogy on-line tudjon foglalni. Kérjük, kattintson ide a honlapon való regisztráláshoz. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Jelenlegi foglalások linkjeinek betűszíne');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Hétvégi határok');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Melyik felületet használja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Ha valamelyik Jomres megjelenési felületet telepítette, itt állíthatja be az alapértelmezett helyett.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','A szoba foglalt');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Hamis foglalás');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Az előleg felkerekítése?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Foglalót kér?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Az árak heti egységben tárolandók?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Lehetőség van az árak napi vagy heti egységben tárolására. Ha a hetit akarja választani állítsa be az Igen-t.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Heti ár');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fix érkezési dátumok rendszeresítve: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Amikor fix érkezési dátumok vannak kiválszatva, akkor a dátumok száma megtekinthető a dátumok legördülő mezőben');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Dohányzó opció érvénytelen');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Érkezés dátuma hibás');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Távozás dátuma hibás');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','A foglalási periódus túl rövid. Az érkezési és távozási dátum között a foglalható napok száma minimum:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','A kiválasztott periódusban a napok száma:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','A vendégtípus variáns hibás');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Válassza ki a vendégek számát/típusát');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Túl sok vendég van a csoportban az elérhető létszám vagy díjszabáshoz képest');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Több szobát választott, mint amennyi a vendégek létszámához viszonyítva szükséges, kérjük, kattintson a kiválasztott szoba/szállás valamelyikére, hogy módosíthassa a választását!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Túl sok vendég a szabad ágyak számához viszonyítva');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Egy vagy több szobát még ki kell választani');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Szoba / szálláshely választása');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Családnév megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Keresztnév megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Házszám/név megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Utca/tér megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Település megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Megye/Régió megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','A postai irányítószám megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Ország megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Vonalas telefonszám megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Mobiltelefonszám megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Emailcím megadása kötelező');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Az emailcím nem érvényes');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Nem lehet az e-mailcím domainjét értelmezni');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Üres helyek vannak!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Még nincs kiválasztva szoba');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Szállásfoglalás egyedi azonosító száma (E.a.)');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Foglalás rendben, üzenő doboz a háttérben');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Sablon változóinak betöltése?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Állítsa be ezt, hogy engedélyezze a sablon változóinak DHTML betöltését minden FRONTEND sablonfile esetén az oldal megtekintésekor. Hasznos, ha azt akarod látni, hogy bizonyos elemek elérhetően használhatóak a beállított sablonban.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Százalékosan megjelenítve');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Állítsa Igenre, hogyha az egyfős szállásfoglalás számításánál százalék szerepel. Hogyha nem, akkor a megadott fix összeg lesz alkalmazva.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Szabad szobák/díjszabás limit');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Használja ezt a lehetőséget a szállásfoglalási űrlapon szereplő szabad szobák és díjszabások korlátozására. Állítsa nullára, ha nem akarja ezt a korlátozást engedélyezni. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Ez alkalommal nincs szabad hely!');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_ANY','Mindegy');


// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Árrés');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Árrés százalékban.');


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Jomres adminisztrációs lehetőségek megjelenítése ikonként?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Állítsa Nem-re, ha az összes adminisztrációs linket szövegként akarja látni.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Ezt lefoglalom!');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Tömeges módosítás funkció?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Legyen óvatos ezzel a funkcióval. Ha Igen-re állítja, a változás a  rendszer ÖSSZES szálláshelyének szövegét módosítja.');


define('_BOOKAROOM','On-line szállásfoglalás');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tariff only valid if stay period includes a weekend day (friday or saturday) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any property information');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your property changes before uploading a property image');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Prices from - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','All');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Features');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Description');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Availability');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Search');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find properties that have accommodation available on your chosen dates.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','List all properties by property type.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','List all properties by room type.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Default');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Property Name');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Property Region');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Property Town');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Stars');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Property list');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Property details - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking room availability<br/>(Room selection will be reset)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your room selection');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Currency format');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Note! These options only affect the language format in modules. To adjust the javascript langauge format for a given property please edit that javascript calendar options within that property');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datetime');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
/**
* @ignore
*/
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
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP only');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max people per room');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','You are not logged in. If you log in/register with this site then you will be able to view your bookings information.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','List Bookings, no deposit paid');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Room type ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' to ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Max people that property can accommodate');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Cancel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configuration');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Title');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Type');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Comission rate');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','License number');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Your license number for the portal plugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistics');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Period: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','January');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','February');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','March');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','April');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','May');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','June');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','July');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','August');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','September');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','October');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','November');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','December');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Room usage');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Property id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Add property');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Source : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Is this a multiroom property?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Is this a property like a hotel/bed and breakfast/penzion? If so, select Yes. If it is a single room property like a villa/cottage then choose No.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per room ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Enhance Your Stay Total ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Hover over a thumbnail for a larger image");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Show slideshow above property details or below.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Top");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Bottom");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Both");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"The absolute path to the available logs. Remember, you will still need to enable logging by editing jomres.php manually. although error logging is automatic all other logs must be switched on by yourself.");
// Jomres 3.1.13
/**
* @ignore
*/
if (!defined('_PN_LT'))
	define('_PN_LT','&lt;');
/**
* @ignore
*/
if (!defined('_PN_RT'))
	define('_PN_RT','&gt;');
/**
* @ignore
*/
if (!defined('_PN_PAGE'))
	define('_PN_PAGE','Page');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','of');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','End');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Display #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"Half booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Saving...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Please wait, your order is being processed...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres logging');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
/**
* @ignore
*/
global $jomresConfig_secret;
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD','Method');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Rate");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"User");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Raised");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Due");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','This is your dashboard, here you can see a general overview of your property\'s availability. ');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Use Jomres messaging');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<br/>
<br/>
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index2.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>

<br/>
");

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Set this to Yes to tell Jomres that it must use subscription package handling.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Create new user on booking');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres will pass your address to Google to generate the map position in the property details. If for whatever reason Google cannot find your address based on the information found above, you can ienter latitude and longitude in the lat/long fields instead. If you choose to enter the latitude and longitude, please note that I have found the Google earth lat and long information to be inaccurate so you are advised instead to visit <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">the itouchmap site</a> and use their information to determine your latitude and longitude. When entering your lat and long, the format should be something like '51.754564622' and '-4.997314810'.");

/**
* @ignore
*/
define('_JOMRES_CONTROLPANEL','Control Panel');

/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');


// Jomres v4.2

/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
/**
* @ignore
*/
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS','Your business details');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
/**
* @ignore
*/
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');

/**
* @ignore
*/
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');

/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_TITLE','Real estate listing');

/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
/**
* @ignore
*/
define('_JOMRES_APIKEY_REMAKE','Make new API key');

/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');

/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
/**
* @ignore
*/
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
/**
* @ignore
*/
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/Editing_mode" target="_blank">the editing mode manual page</a> for more information on this subject.');

/**
* @ignore
*/
define('_JOMRES_SUPPORTKEY','Support key');
/**
* @ignore
*/
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download updates and plugins for Jomres.');
/**
* @ignore
*/
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');

/**
* @ignore
*/
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
/**
* @ignore
*/
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
/**
* @ignore
*/
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
/**
* @ignore
*/
define('_JOMRES_JQUERYTHEME','Jquery theme');
/**
* @ignore
*/
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');


