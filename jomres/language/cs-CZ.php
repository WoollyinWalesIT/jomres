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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Zobrazit dnešní příjezdy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Zobrazit dnešní odjezdy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Zobrazit poptávky rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Zobrazit poptávky ostatní');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Rychlá rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Seznam aktivních rezervací');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Zobrazit profily');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Jazyky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Obecné nastavení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Nastavení slev');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Nastavení pokojů/kapacit');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Nastavení kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Nastavení sazeb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Zpět');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Zpět na seznam rezervací');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Nastavení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Nahrání vzorových dat');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Ano');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Ne');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Nový');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Nový pokoj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Nové vybavení pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Nový typ pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Nová kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nové vybavení kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Nový host');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Uložit');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Jméno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Příjezd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Odjezd');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Přiřazení uživatelských profilů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Jméno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Uživatelské jméno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Aktuální autorizace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Výchozí kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Změnit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Úroveň přístupu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Uživatel nastaven');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','n/a');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Změna kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Změna úrovně přístupu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepce');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Správce kapacit');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Všechny rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nové rezervace (bez zálohy)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editace rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Prj/Odj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Host');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Pokoj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Platba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Jméno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Príjmení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Host dnes ubytován. Po jeho příjezdu klepněte na tlačítko.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Poznámky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Ostatní požadavky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Upozornění: ostatní požadavky mohou být k dispozici jen za příplatek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Dospělí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Děti');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Stornovat rezervaci');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','WWW userid');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Číslo domu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulice');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Město');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PSČ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon - pevná');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon - mobil');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Preference');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','SPZ automobilu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Storno klient');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Storno hotel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Zadejte důvod stornování');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Dnů do příjezdu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Storno poplatky v neprospěch</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Nelze stornovat, klient již má rezervaci.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Zaplacená záloha, bez dalšího');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Záloha nezaplacená, deposit due');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Záloha zaplacená, 50% celkové částky splatno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Záloha nezaplacená, 50% celkové částky splatno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Záloha zaplacená, 100% celkové částky splatno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Záloha nezaplacená, 100% celkové částky splatno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Výzva k platbě');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Záloha nezaplacena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potvrzení storna');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervace stornována');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dnů do příjezdu');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Typ rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Zakázaná');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepce');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Název pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Pokoj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Podlaží');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Pro hendikepované?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. počet osob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Typ pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Popis typu pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Seznam vybavení pokoje');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','Kč');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','CZK');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Platební podmínky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Zaplacená záloha');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Vložit zálohu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Celkem k zaplacení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Záloha ref.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Platba ref.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Záloha');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Záloha uložena');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>UPOZORNĚNÍ...</FONT></h1><BR><B>K aktualizaci jazykové mutace musíte u požadovaného souboru nastavit práva na 776</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Rychlorezervace: Výběr typu pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Checkbox');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Počet dospělých');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Počet dětí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Vyžadovaná postýlka?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternativně');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Zadejte BUĎ počet nocí nebo datum odjezdu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Počet nocí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Zvolte typ požadovaného pokoje, datum příjezdu, počet nocí a osob, prosím.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Naše pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Název');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Číslo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Podlaží');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Pro handikepované?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max. počet osob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Detaily');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Typ pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Omlouváme se, ale požadovaný pocet osob je vyšší než nabízená kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Omlouváme se, ale k vybranému období není k dispozici žádný pokoj. Zkuste prosím vybrat jiné období.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Vyberte prosím ze seznamu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Vybrat tohoto hosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Seznam hostů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="3">CHYBA: V zadaných datumech došlo k chybě.<br>Stiskněte tlačítko Zpět a znovu zadejte požadované údaje, prosím.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="3">CHYBA: K provedení rezervace musíte zadat alespoň jednoho hosta.<br>Stiskněte tlačítko Zpět a znovu zadejte požadované údaje, prosím.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="3">CHYBA: Vybraný interval dat obsahuje chybu.<br>Stiskněte tlačítko Zpět a znovu zadejte požadované údaje, prosím.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="3">CHYBA: Nezadali jste požadovaný typ pokojů.<br>Stiskněte tlačítko Zpět a znovu zadejte požadované údaje, prosím.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="3">CHYBA: Datum rezervace bohužel leží v minulosti nebo je rovno dnešku.<br>Stiskněte tlačítko Zpět a znovu zadejte požadované údaje, prosím.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Zadání detailů o hostech');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Potvrzení detailů o hostech');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Upravit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Jméno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Příjmení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Dům');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulice');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Město');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','PSČ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon - pevná');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefon - mobil');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','E-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','SPZ automobilu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Číslo CC');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Karta vystavena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Platnost CC karty do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Číslo karty');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Jméno uvedené na kartě');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Výběr z nabízených');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Výběr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Ceník');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Popis ceníku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Min. počet dní');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Max. počet dní');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min. počet osob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max. počet osob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Počet dní');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Cena za pokoj a den');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Počet hostů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Celkem');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Záloha');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Alespoň jeden ze dnů připadá na státní svátek.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Omlouváme se, ale Vašemu výběru neodpovídá žádný ceník. Zkuste prosím změnit výběr např. zadáním jiného data, počtu dní pobytu nebo nás kontaktujte pro více alternativ.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Nastavení kapacit & pokojů');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Vybav. pokojů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Typy pokojů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Vybavení kapacit');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Pokoj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Typ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Typ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Název');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Číslo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Podlaží');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Pro hendikepované?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. počet osob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Vybavení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Pokoj přidán');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Pokoj aktualizován');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Pro úpravu položky klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Upravit položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Vybavení pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Popis vybavení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Pro úpravu položky klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Vybavení pokoje přidáno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Vybavení pokoje aktualizováno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Upravit položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Typ pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Typ pokoje zkrac.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Typ pokoje detailně');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Pro úpravu položky klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Typ pokoje přidán');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Typ pokoje aktualizován');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Upravit položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Název');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulice');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Město');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Země');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','PSČ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','www');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Vybavení');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Pro úpravu položky klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Kapacita přidána');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Kapacita aktualizována');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Upravit položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Vybavení kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Vybavení kapacity zkrác.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Vybavení kapacity detailně');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Pro úpravu položky klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Vybavení kapacity přidáno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Vybavení kapacity aktualizováno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Upravit položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Ceníky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Ceník');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Platný od');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Platný do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Sazba za noc');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min. počet dní');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max. počet dní');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. počet osob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. počet osob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Typ pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorovat PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Povolit státní svátky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Povolit víkendy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Pro úpravu položky klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Ceník přidán');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Ceník aktualizován');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Upravit položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Klonovat položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Odstranit ceník');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Ceník odstraněn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Upravit ceník');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Státní svátek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Konečné datum státního svátku by mělo být poslední nocí účtovanou podle sazeb za státní svátek.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Upravit státní svátky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Začátek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Konec');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Nový státní svátek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Pro úpravu položky klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Státní svátek přidán');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Státní svátek aktualizován');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Upravit položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Klonovat položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Odstranit státní svátek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Státní svátek odstraněn');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervace uložena');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Ujistete se, že formulář je správně vyplněn');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Online rezervace je určena jen registrovaným uživatelům');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Registrujte se, prosím');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Offline rezervace');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Moje detaily');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Moje rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Správa');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Rezervovat pokoj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Ubytovat hosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Ukončit ubytování hosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Seznam rezervací');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NOVÉ rezervace');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Control Panel');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Správa hostu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Správa kapacit');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Správa ceníku');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Správa slev');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Správa státních svátku');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Zvolte typ požadovaného pokoje, datum příjezdu, počet nocí a počet osob, prosím.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Zadejte prosím Vaše detaily. Toto je jednorázový krok, systém si Vás bude pro přístě pamatovat.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Zadejte prosím typ požadovaného pokoje.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Zadejte prosím požadované informace. Krome čísla mobilního telefonu jsou všechna pole povinná.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Zjistit dostupnost.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Vybrat tento pokoj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Výběr hostů');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Potvrzení zadaných údajů');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Výběr sazby');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Výběr typu pokoje');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Jméno');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Příjmení');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','č.p.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulice');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Město');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PSČ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon - pevná');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon - mobilní');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Zadaným parametrům bohužel neodpovídá žádný pokoj.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Zadání údajů');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Potvrzení zadaných údajů');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Děkujeme za projevený zájem a doufáme, že se Vám Vaše cesta bude líbit.<br><br> <b>Vemte prosím na vědomí, že Vaše objednávka je prozatím predběžná až do doby, než Vám ji potvrdíme závazně e-mailem.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezervace na: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezervace pokoje: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Počet dospělých: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Počet dětí: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Příjezd: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Odjezd: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Počet nocí: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','UID hosta: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Jméno: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon - pevná: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefon - mobil: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','UID ceník: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Cena objednávky: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Požadovaná záloha: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Omlouváme se, ale před zpracováním Vaší objednávky potřebujeme, abyste aktualizoval Vaše údaje. Klepněte prosím nejprve na odkaz "Moje detaily" a vyplnte Vaše adresní údaje. Děkujeme.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Děkujeme, Vaąe detaily byly úspěąně uloľeny.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Vítejte zpět. Před provedením rezervace prosím aktualizujte "Moje detaily" klepnutím na odkaz.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Vítejte zpět ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Ubytování hosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Vybrat hosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Host ubytován');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','K dnešnímu dni nezbývají žádní neubytovaní hosté');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Ukončit ubytování hosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Ubytování hosta ukončeno');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Potvrzení ukončení ubytování hosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','K dnešnímu dni nezbývají žádní odjíždějící hosté');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Hosté s dnešním příjezdem');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Hosté s dnešním odjezdem');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Obsazené pokoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Nové rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Zobrazit využití pokoje od:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Příplatky');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Ceníky & měny');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Slevy');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Storno podmínky. NEPOU®ITE');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload souboru');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktuální nastavení');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Vysvětlení');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Broněk Kocman 2006');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Offline rezervace?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Pokud si nepřejete provést rezervaci, můžete pokračovat offline rezervací.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Použít slevový systém?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Slevový systém umožňuje různorodé nabídky v závislosti na počtu objednávajících osob. Není vhodný v případech účovaných jinak než PPPN (per-person-per-night basis).');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Úroveň 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Úroveň 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Úroveň 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Úroveň 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Hodnota pro úroveň 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Hodnota pro úroveň 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Hodnota pro úroveň 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Hodnota pro úroveň 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Jednolůľko');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Přejete-li si účtovat tuto položku, nastavte hodnotu na ANO');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Příplatek za jednolůžko');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Dětská postýlka');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Přejete-li si účtovat tuto položku, nastavte hodnotu na ANO');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Příplatek za dětskou postýlku');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Požadovaná záloha v procentech?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Přejete-li si požadovanou zálohu účtovat procentem z celkové částky rezervace, zadejte hodnotu ANO. V opačném případě bude použita paušální hodnota.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Požadovaná výše zálohy');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','za osobu, za noc');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Přejete-li si účtovat položku dle PPPN (per-person-per-night), zadejte hodnotu ANO. Pokd ne, cena bude spočítána dle PRPN (per-room-per-night).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Pokuta k proplacení?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Přejete-li si v budoucnu od zákazníka zinkasovat pokutu za zrušenou objednávku, nastavte hodnotu na ANO');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Soubor již existuje');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Typy souborů');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Zadejte povolené typy souborů pro upload. Jednotlivé hodnoty oddělujte čárkou, např. zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Velikost souboru');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. velikost snímku v KB');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Pro zobrazení týdenní obsazenosti pokoje počínaje dneškem klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Pro zobrazení rezervací klepněte na odkaz pokoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','nebo zadejte datum, které Vás zajímá');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Obsazeno');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Volno');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Pokoje na modrém pozadí jsou rezervovány, nicméně, pokud obsahují červený text, nebyla doposud zaplacená záloha.<br>Pokud je u pokoje znak hvězdy u "Obsazeno", očekává se tento den příjezd hosta.<br>Pokud je text pokoje žlutě, je pokoj aktuálně obsazen hostem.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Potvrzení rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Vážený(-á) ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena za noc - za pokoj ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detaily objednávky');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Děkujeme za Vaši rezervaci v');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Níže naleznete shrnutí Vaší rezervace. Prosíme ověřte, že veškeré Vaše informace, zejména kontaktní, jsou v pořádku a pokud ne, dejte nám prosím obratem vědět.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Váš pokoj Vám je k dispozici hned po Vašem příjezdu, od 14.00 hod.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Těšíme se na setkání s Vámi ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Doufáme, že se Vám bude pobyt líbit.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Nyní prosím obraťte pozornost následujícím podmínkám.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','No allowance can be made for meals not taken or for rooms not occupied for the full period of the boking. With this in mind we strongly recommend that you use a holiday insurance facility.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Stornování a omezen práv</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dní a více');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Záloha pouze.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 až 30 dní');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% z celkové částky.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Příjezd do 14 dnů');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% z celkové částky.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','VAT@ 17.5% is included in all tariffs. Any increase or alterations will be charged.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Tisk potvrzení rezervace');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Tisk faktury (daňového dokladu)');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Drahý ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Cena za noc - za osobu ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Počet osob: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Smlouva uzavřena: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena za noc: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','CELKEM');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Detaily faktury (daňového dokladu)');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Děkujeme za Váš pobyt v ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Doufáme, že příšte využijete naše služby.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','Odpovídající výše DPH je již zahrnuta ve všech cenících. Jakékoli změny jsou předmětem dalšího vyúčtování.');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Přidat službu k vyúčtování');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Popis služby');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Hodnota služby');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Přidat k vyúčtování');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Ostatní účtované položky');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Ostatní účtované položky, celkem: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Položka přidaná k vyúčtování');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red>Výchozí hotel nenalezen.</h1><br>Nelze pokračovat, kontaktujte svého správce sítě.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Vyberte snímek k příloze');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Upload snímku');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Upload');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Upload ouboru');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Soubor může být omezen velikostí na');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Odeslat další soubor k uploadu');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Můžete pouze uploadovat soubory typu type:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Před uploadem nejprve vyberte požadovaý soubor, prosím.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Název souboru musí obsahovat pouze alfanumerické znaky a žádné mezery.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Velikost souboru překračuje maximální velikost nastavenou Administrátorem.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Soubor zvoleného jména již existuje, před uploadem jej prosím přejmenujte nebo zvolte jiný.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Soubor byl úspěšně nahrán.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Soubor NEBYL nahrán.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Soubor byl úspěšně nahrán.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Připojit se k síti jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Pokud se rozhodnete připojit k síti jomres, zvolte hodnotu ANO a Vaše kapacita se stane součástí komunity jomres. Vemte na vědomí, že kapacita je pak považovaná za živou, aktualizovanou a jste zodpovědní za zveřejněné údaje. Jomres.net není a nebude zodpovědná za Vámi zveřejněné informace.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS kalendář');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','Jazyk JS kalen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Vyberte požadovaný jazykový soubor JS kalendáře. Upozornění - některé kalendáře mohou obsahovat chyby, více informací na http://sourceforge.net/tracker/?group_id=75569&atid=544287');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS kalendář CSS souboru');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Zvolte CSS soubor pro použití s JS kalendářem');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Zkontrolovat státní svátky?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Zvolte hodnotu na ANO a překontrolujte, že máte samostatné sazby ceníků na sváteční a nesváteční dny. Nemáte-li zvláštní ceny pro období státních svátků, zvolte hodnotu na NE.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Různé');
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
define('_JOMRES_FILE_DELETE','Odstranit soubor');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Soubor odstraněn');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Zobrazit vstupní pole data odjezdu');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Přejete-li si obrazit vstupné pole data odjezdu, nastavte hodnotu na ANO. Vemte na vědomí, že některé prohlížeče obsah kalendářů nezobrazují korektně.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Zvolte požadovanou kapacitu u které chcete zjistit dostupnost pokojů');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Libovolné');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Pokoj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Zobrazit SQL');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Pokud zapnuto, zobrazuje SQL informace.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Zobrazit SQL výsledky');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Pokud zapnuto, budou zobrazena navrácená SQL data a hodnoty var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Vyberte šablonu');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','Top buttons css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Table headers css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','šablony');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Odstranit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Pokoj nelze odstranit, obsahuje platné rezervace. Zrušte rezervace a zkuste znovu, prosím.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Pokoj odstraněn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Odstranit vybavení pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Vybavení pokoje nelze odstranit kvůli existujícím vazbám. Zruąte vazby na pokoje a zkuste znovu, prosím.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Vybavení pokoje odstraněno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Odstranit vybavení kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Vybavení kapacity nelze odstranit kvůli existujícím vazbám. Zruąte vazby na kapacitu a zkuste znovu, prosím.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Vybavení kapacity odstraněno');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Odstranit typ pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Typ pokoje nelze odstranit kvůli existujícím vazbám. Zrušte vazby na typ pokoje a zkuste znovu, prosím.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Vybavení pokoje nelze odstranit kvůli existujícím vazbám ceníku. Změňte ceníkové vazby a zkuste znovu, prosím..');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Typ pokoje odstraněn');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Odstranit kapacitu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Kapacitu nelze odstranit, obsahuje data v tabulce: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Kapacita odstraněna');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nemáte oprávnění odstranit kapacitu.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Vybrat tuto kapacitu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Ke které kapacitě přiřadit pokoj?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Vybrat kapacitu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Musíte vybrat kapacitu');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','šířka malého náhledu snímku');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','šířka středního náhledu snímku');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','šířka plného náhledu snímku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Mapa lokality');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check-in');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Aktivity v okolí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Jak se k nám dostanete');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Letiště');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Jiná doprava');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Pravidla & vzdání se nároku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Váš klíč kapacity od Jomres.net');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Jakmile máte připravený website, navštivte <a href="http://www.jomres.net" target="_blank">Jomres.net</a> a získejte vlastní klíč. Díky tomu budete součástí nejširší sítě a zajistíte svému byznysu potřebnou návtěvnost.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Naše kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Návštěvníci mohou rezervovat online');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Přejete-li si, aby návštěvníci mohli online rezervovat, nastavte hodnotu na ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervace pro fixní období');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Přejete-li si fixní období rezervace, zadejte hodnotu ANO. Pokud je hodnota NE ujistěte se, že hodnota u pole "Pre/**
* @ignore
*/
defined arrival day" není na ANO (pokud vědomě nechcete nutit návžtěvníky k příjezdu v určitý den) - v opačném případě kalendář dostupnosti nebude obsahovat dostatečné množství odkazů.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Období rezervace: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Rez. pokoje');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Okraj rezervační tabulky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Změnit barvu okraje rezervační tabulky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Pozadí rezervační tabulky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Změnit barvu pozadí rezervační tabulky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','šířka rezervační tabulky');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Max. období rezervace, např. 3x 7 období rezervace = 21 dní');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Vyžadovat počet hostů?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Přejete-li si zobrazit pole Poře hostů v objednávce, nastavte na hodnotu ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Jde o apartment/chalupu/villu?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Vhodné pro případ, kdy pronajímáte celou kapacitu místo jednotlivých pokojů v ní. Jde-li o tento případ ujistěte se, že každá kapacita má navázaný poze jeden pokoj.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Maximální počet dospělých');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Nastavení maximálního počtu dospělých v objednávkovém formuláři');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Maximální počet dětí');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Nastavení maximálního počtu dětí v objednávkovém formuláři. Pokud je nastaveno na hodnotu 0, pak žádný element svázaný na počet dětí nebude zobrazen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Pokračovat');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Revize rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potvrzení rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Slevy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>UPOZORNĚNÍ</FONT></h1><BR><B>K aktualizaci souboru site_config.php musíte nastavit práva na 777</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','pondělí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','úterý');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','středa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','čtvrtek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','pátek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','sobota');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','neděle');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','po');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','út');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','st');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','čt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','pá');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','so');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','ne');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Kal. dostupností');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Typ písma pro všechen text');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Velikost písma pro všechen text');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Výuka buňky');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','šířka buňky');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Barva písma dnešního data');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Barva písma dnů v měsíci');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Barva pásma dnů mimo zobrazený měsíc');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Barva pozadí buňky dnů, kdy je kapacita/pokoj volný');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Barva pozadí buňky dnů mimo zobrazený měsíc');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Barva pozadí buňek pro obsazené dny');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Barva pozadí pro předběžné rezervace (bez záloh)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Barva pozadí buněk dnů v minulosti');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Barevné schéma:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Obsazeno-n/a');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Volno');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Předběžná rezervace');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Přednastavený den příjezdu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Pouze pro websites nabízející fixní období rezervací. Zadejte požadovaný počáteční den fixního období.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fixní den příjezdu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Pobyt (dny)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Zobrazit kalendáře dostupnosti?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Přejete-li si zobrazit kalendáře dostupnosti, nastavte hodnotu na ANO');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Potvrdit výběr');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Dostupnost');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Kroky, které musíte provést: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Revidovat vybrané data');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Revidovat počet hostů');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Poskytnout osobní detaily');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Vybrat kapacity a pokoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Revidovat vybraný pokoj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Revidovat objednávku. Jakmile je vše v pořádku, potvrdit rezervaci.');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Pro zobrazení objednávkového formuláře klepněte na volný den.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Zakázané rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Bez zakázaných rezervací');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nové zakázané rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Zakázat rezervaci těchto pokojů');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Odstranit hosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Host odstraněn');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Hosta nebylo možné odstranit kvůli existující otevřené rezervaci. Stornujte rezervace a zkuste znovu.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Správa týdenního zobrazení CP');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Přejete-li si používat týdenní zobrazení CP místo měsíčního, nastavte hodnotu na ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Aktuální cena pokoje: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Email je neplatný ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Toto je email od');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Dobrý den');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Děkujeme za provedenou rezervaci s');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Následuje přehled rezervace:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Pokud máte jakékoli dotazy ohledně rezervace nebo jiných služeb, neváhejte a kontaktujte nás.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Naše telefonní číslo je');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Případně nás kontaktujte emailem na');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Kuřácké');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Libovolné');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Výstupní formát kalendáře');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Umožňuje uživateli měnit výstupní formát data kalendáře Jomres.');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Vstupní formát kalendáře');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Umožňuje uživateli měnit vstupní formát data kalendáře Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Období fixních rezervací s krátkými přestávkami');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Délka přestávek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publikováno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Nastavení');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Používat paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Používat Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Vyžaduje PayPal Developer Account');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Váš PayPal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Poznámka: Pro použití paypalu musíte vstoupit do svého účtu na PayPal a aktivovat Autoreturn (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Chyba, email paypal nebyl nastavený');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit systému');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Bez auditu');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Čas');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Uživatel (username)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Činnost');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Kapacita');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Zobrazit detaily');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS','Oprávnění kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Libovolné</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Dle data');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Dle uživatele');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Dle činnosti');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Stav');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Nevyřízené příjezdy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Dnešní příjezdy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktuální hosté');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Dnešní odjezdy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Odjezdy po termínu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Problém! Bez příjezdu a storna');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filtr');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Neznámý uživatel');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Vytvoření pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Aktualizace pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Odstranění pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Vytvoření vybavení pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Aktualizace vybavení pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Odstranění vybavení pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Vytvoření typu pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Aktualizace typu pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Odstranění typu pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Vytvoření kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Aktualizace kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Odstranění kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Vytvoření vybavení kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Aktualizace vybavení kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Odstranění vybavení kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Upravení nastavení kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Zveřejnění kapacity');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Vytvoření ceníku');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Aktualizace ceníku');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Odstranění ceníku');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Vytvoření st.svátku');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Aktualizace st.svátku');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Odstranění st.svátku');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Přidání zaúčtování sluľeb');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Stornování rezervace');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Zabydlení hosta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Vybydlení hosta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Aktualizace detailu CC');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Zadaní zálohy');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Vytvoření hosta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Aktualizace hosta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Odstranění hosta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Upload snímku nové kapc.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Upload snímku jiné kapc.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Odstranění snímku');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Upload snímku nového pok.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Upload snímku jiného pok.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Upload nového snímku rsrc');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Uploaded snímku jiného rsrc');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Rezervace pokoje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Vytvoření Addons');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Aktualizace Addons');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Odstranění Addons');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publikování Addons');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Vložení zakázané rezervace');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Odstranění zakázané rezervace');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Doplňky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Upravit doplňky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Název');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Nový Doplněk');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Pro upravení textu Doplňku klepněte na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Doplněk vložený');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Doplněk aktualizovaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Upravit položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Klonovat položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Odstranit Doplněk');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Doplněk odstraněn');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Správa Doplňku');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Zobrazit doplněk během rezervace?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Přejete-li si během rezervace zobrazit Doplněk, zadejte hodnotu ANO');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Volitelné Doplňky');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Vybrat tuto kapacitu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Invertovat výběr/vybrat všechny');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Počáteční datum zakázané rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Konečné datum zakázané rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Zakázané rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Jeden nebo více pokoju byl již zarezervován. Před provedením zakázané rezervace nejprve musíte odstranit zakázané rezervace.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Behem rezervace došlo k chybě, jeden nebo více z vybraných pokoju není volný.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Pokoje zahrnuté v zakázané rezervaci');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Odstranit zakázanou rezervaci');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Zobrazit zakázané rezervace');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Seznam zakázaných rezervací není k dispozici');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Počet hvězdiček');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Zobrazit kuřácké?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Pro zobrazení kuřáckých prostor nastavte na ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','reset');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Vaše platba pres PayPal je ve stavu nevyřízená. Jakmile bude hotel moci potvrdit její příjem, stav rezervace bude změněn na potvrzený.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervace stornována');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Hledejte zde: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Hledat ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Zobrazit paypal debug info?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Zobrazit názvy pokojů?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Pro zobrazení názvu pokoje nastavte na ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Zobrazit typy pokojů?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Pro zobrazení názvu pokojů nastavte na ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Výchozí hodnota kuřácké');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Upozornění: Pokud je výchozí hodnota kuřácké na ANO a všechny nabízené pokoje jsou nekuřácké, nebudou zobrazeny žádné pokoje.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Symbol měny');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Např.&amp;pound&#59; Pro zobrazení meny použijte HTML kod dle dané entity, více informací na <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Kód měny');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Např. CZK. Tento symbol bude použit v potvrzujícím emailu rezervace.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Klepněte pro další informace');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Upozornění... Jste prihlášen jako manažer s oprávněními k veškerým kapacitám. Toto může být příčinou zpomalené funkčnosti některých modulu Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Omezit předprodej?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Přejete-li si omezit předprodejní rezervace, zvolte hodnotu ANO (a na dalším poli zadejte počet dní). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Počet dní omezeného předprodeje:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>UPOZORNĚNÍ: Nastavení obou hodnot na ANO není doporučeno, vyberte jedno z nabízených daňových schémat tak, aby odpovídalo podmínkám Vašeho trhu.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Daň');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Pokojová daň');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Vytvořené pro americké trhy, které používají speciální daň z pronajmutého pokoje. Možné kombinace jsou jak fixní, tak procentuální daň - tyto jsou pak počítány pouze z ceny pokoje.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Fixní daň');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Procentuální daň');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','DPH');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Pro trhy uplatňující DPH.');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','DPH %');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Zálohovat všechny záznamy');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' záznamu zazálohováno');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Systém zazálohoval auditované záznamy');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Ceny');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Ceník');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Popis ceníku');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Typ pokoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Platný od');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Platný do');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','za osobu a noc');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','za noc');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','bez započítání víkendu');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Min. počet dní');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Max. počet dní');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. počet osob');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. počet osob');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Náhled');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Zapnout úpravy?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktuální text');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nový text');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Aktualizovat upr. text.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Úprava jaz. nastavení');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Počet nezazálohovaných záznamů: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Systém obsahuje více jak 200 aktivních záznamů a v zájmu zachování výkonu SQL nebudou další záznamy zobrazeny. Pokud si přejete analyzovat auditované údaje, musíte projít přímo záznamy v SQL tabulce. Pravidelně zálohujte.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Seznam typu kapacit');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Upravit typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Popis typu kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Typ kapacity uložen');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Odstranění typu kapacity se nezdařilo. Typ kapacity je navázán na jeden nebo více kapacit, před odstraněním je nutné jim přiřadit jiný platný typ kapacity.');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Typ kapacit(y) odstraněn');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Chyba, kapacita nemá definované žádné pokoje.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Chyba, kapacita nemá definovaný žádný ceník.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Chyba, kapacita nemá definované typy pokojů.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Změna kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Výzva k platbě');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Vaše platební transakce přes PayPal byla dokončena, potvrzení o platbě Vám bylo zasláno emailem. Detaily transakce je také moľné po přihláąení zjistit přímo na Vaąem účtě na www.paypal.com. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','K účtu nejsou přidány žádné mimořádné položky');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Záloha');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Celková částka');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Částka splatná ke okamžiku rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Vyberte požadovaný typ platby během rezervace - zálohu nebo plnou částku.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Počet zobrazených měsíců v kalendáři');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Kolik má být k dispozici zobrazených měsíců?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Jménem společnosti, podepsán ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Platební brány');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Storno');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Zaškrnutím vyberte pokoj(e) vč. adekvátních datumů určené k zakázané rezervaci. <br>Pokud pokoj není označen, nemůže být do zakázaných rezervací zahrnut tak dlouho, dokud nejsou dokončeny již existující rezervace. <br>Jakmile jste vybrali adekvátní datumy, klepněte na tlačítko Apply/Provést - provede se opětovný dotaz na dostupnost pokojů.');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Systém Hotelak Vás zřejmě kvůli dlouhé prodlevě odhlásil.</b> Přihlašte se znovu prosím.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Odůvodnění');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Používat platební brány?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Přejete-li si používat online platební brány, zadejte hodnotu na ANO.<b>Upozornění:</b>Vypnutá hodnota NE platební brány nikterak nevypíná kalkulace záloh, které probíhají během rezervace, toto je možné pouze odstraněním elementů počítajících zálohy přímo ve zvolené šabloně pokoje.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Vyberte preferovanou platební metodu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Aktivní platební brána?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Upravení nastavení plugins');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Vložení nastavení plugins');
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
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','šifrování');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Použít šifrování mCrypt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Nastavte na hodnotu ANO, POKUD máte mCrypt kompilaci v PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Encryption key');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Encryption mode');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Encryption algorithm');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Zobrazené CC karty');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Aktualizované CC karty');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Upravit CC');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Upravit velikost ikon');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Hodnoty v px x px.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Dávkový upload snímku kapacit');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Snímky již v adresáři existují');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Virtuální prohlídka');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Zobrazit odkaz na virt. prohlídku?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Zobrazit virt. prohlídku inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Pokud má být prezentace zobrazena inline v detailech kapacit, nastavte na ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Výška virt. prohlídky');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Výška náhledu virt. prohlídky');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Virtuální prohlídka');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Omlouváme se, ale k dané kapacitě nejsou k dispozici žádné snímky. K nahrání snímku použijte dávkový upload snímku.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','šířka popup okna');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Výška popup okna');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Umístění snímku');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Změňte pouze v případě, že jsou snímky pro úcely jomres jinde než ve výchozím adresáři. Výchozí adresář je \'/images/stories/jomres/\' v závislosti na instalaci jomres.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Zobrazit odkaz na ceníky?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Povolit popup okna?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Pokud na hodnotě NE, budou odkazy místo v popup oknech otevřeny inline. EXPERIMENTAL! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload snímků virt. prohlídky');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Pro nahrání snímků této kapacity použijte formulář. <br/><b>Upozornění:</b> Jakékoli snímky stejného názvu budou přepsány novějšími. Tento formulář také nenahrává snímky vázané na konkrétní pokoj nebo záhlaví kapacity, pro které slouží sekce Správa kapacit. <br/><b>Poznámka:</b> Zde nahrávané snímky budou uloženy do patřičného adresáře /images/stories/jomres/*property_uid*. Pokud adresář neexistuje, bude vytvořen.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Různé');
/**
* @ignore
*/
define('_JOMRES_A','Nastavení website');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Použít obecné vybavení kapacit');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Přejete-li si, aby všechny kapacity používaly pouze vybavení zadané webmasterem, vyberte hodnotu ANO.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Pro přiřazení snímku vybavení nejprve nahrajte snímky kapacity do adresáře /images/stories/jomres/pfeatures/');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Ikona');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Vyberte požadovaný plugin vyhledávání.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Omlouváme se, ale dotazu neodpovídá žádný výsledek. Zadejte nová kritéria hledání, prosím.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Jste si jisti?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezervovat pokoj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezervovat tuto kapacitu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','CCV bezpečnostní kód');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Zobrazit ceny inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailní informace');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Dostupnost pokojů');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Zobrazit ceny');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Zobrazit pole Adresa pod odkazem');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Zobrazit pole Detailní informace pod odkazem');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Zobrazit pole Pokoje a Dostupnost pod odkazem');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Zobrazit pole Ceníky pod odkazem');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Paušál');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Průměrovaný');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Vyberte tarifní model');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Pro výpočet ceníku existují dva modely - paušální a průměrovaný. Pokud zvolíte paušální, jsou ceny a ceníky definované jednotlivými obdobími rezervace (můžete např. na stejné období nabízet ceník Polopenze a Plná penze). Pokud zvolíte průměrovaný, systém na rezervované období nalezne a zprůměruje všechny dostupné ceny.");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Použít portál Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Přejete-li si používat Jomres v součinnosti se software portálu Jomres, zadejte hodnotu ANO.');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Zobrazit zadání data odjezdu?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Přejete-li si zakázat zobrazení pole data odjezdu, zadejte hodnotu NE. V tomto případě bude automaticky jako den odjezdu použit den následující po dni příjezdu.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Omezení popisu');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Zadejte hodnotu počtu zobrazených znaků použitých pro popis jednotlivé kapacity.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Násobitel denní sazby');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Umožňuje nastavení násobitele denní sazby (užitečné např. při zobrazení týdenní ceny)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','šírka popup okna virt. prohlídky');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Výška popup okna virt. prohlídky');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Aktualizovat');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Pro kontrolu dostupnosti klepněte na tlačítko Aktualizovat');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Použitý formát date()?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Volba použitého typu datumu, více viz -> Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Publikovat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Nepublikovat');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Vyplňte prosím následující pole: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Děkujeme.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Použít obecné typy pokojů');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Přejete-li si použít obecné nastavení typů pokojů webmasterem ve všech pokojích, zadejte hodnotu ANO. Toto nastavení je také nutné pro případ, kdy chcete vyhledávat dle typu pokoje.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Pro přiřazení snímku tohoto typu pokoje nejprve nahrajte poľadované snímky do adresáře /images/stories/jomres/rmtypes/. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Zadat barvu okraje chybového pole');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Zadat barvu pozadí chybového pole');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Výchozí země rezervačního formuláře');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Použít nápovedu website?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Přejetel-li si, aby Jomres nad vyhledávacím polem behěm vyhledávávání zobrazoval nápovědu, zadejte hodnotu ANO.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Upravit texty rezervační nápovědy.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Červeně zvýrazněné položky jsou povinné.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Mohou uživatelé zadávat své kapacity?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Přejete-li si, aby uľivatelé mohli zadávat své kapacity bez kontaktu s administrátorem, zadejte hodnotu ANO.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Zadejte zemi a region své kapacity, prosím.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Zadejte všechny detaily Vaší kapacity, prosím.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Červeně zvýrazněné položky jsou povinné.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Vytvořit kapacitu');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Omlouváme se, ale pro přidání kapacity se neprve přihlaste do systému.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Vytvořená kapacita: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Uživateli: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Účtovat za den?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' za den');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Zobrazit kalendář od začátku roku?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Kalendář dostupnosti zobrazuje data od začátku aktuálního roku.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Zobrazit detaily vybavení pokojů?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Přejete-li si, aby Jomres během rezervace nekontroloval dostupnost pokoju a automaticky je nabízel, zadejte hodnotu NE.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Počet dostupných pokojů');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Zadejte prosím počet a typ požadovaných pokojů.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Nutné zadat počet');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Zpět na detaily kapacit');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Typy pokojů');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Použít metadata Jomres?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Přejete-li si aby Jomres použil slova z polí popisu kapacit pro generování metadat, zadejte hodnotu ANO. Slova musí být oddělená mezerou.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stop slova');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Stop slova jsou slova, která <i>nechcete</i> použít pro metadata.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Další elementy určené k odstranění');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Toto jsou elementy určené k odstranění z metadat, například znaménka, citace apod.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Četnost');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Počet opakování slov aby byla zahrnuta mezi metadata.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Omezení náhodného hledání');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Zobrazit převodník měn od Google?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Převést menu na :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Umoľnit uživatelům použití HTML editoru?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Pro vytvoření rezervace použijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů, následně vyberte z dostupných pokojů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Pro vytvoření rezervace pouľijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Detaily rezervace');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Zadejte požadované detaily Vaší rezervace');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Dostupnost');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Vyberte požadované pokoje');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Zda je požadovaná kapacita k dispozici zjistíte zde.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Volitelné doplňky');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Zadejte všechny požadované doplňky, které si přejete zahrnout do rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','za noc');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Vaše adresa');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Zadejte prosím Vaše kontaktní údaje. Vyjma čísla mobilního telefonu jsou všechny pole povinná.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Pokoje k dispozici');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Vybrané pokoje');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Nejbližší možné datum příjezdu: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Za noc:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Celkem:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Doplňky:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','DPH:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Sleva:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','CELKEM K ÚHRADĚ:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Hosté');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Klepnutím přidáte pokoj mezi vybrané');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Klepnutím odeberet pokoj z vybraných');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Typ hostů');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Typ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Typ zákazníka, např. děti 5-10 let, student apod.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Poznámky');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Poznámky k danému typu hostů');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Max. počet');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maximální počet hostů daného typu, které může být zadané v rámci rezervace');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Procentuelně');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Zadané číslo je procentem základní kalkulované hodnoty za pokoj. Pokud je na hodnotě NE, pak je zadané číslo jednoduše přičteno nebo odečteno ze základní hodnoty pokoje.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Přidat rozdílnou sazbu?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Rozdílná sazba je přidána nebo odebrána ze základní kalkulované hodnoty za pokoj. Pokud si přejete ji pouľít jako slevu ze základní hodnoty pokoje, zadejte hodnotu NE.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Rozdíl. sazba');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Hodnota rozd. sazby');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Pořadí upravených typů hostů');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Publivaný typ hostů');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Odstraněný typ hostů');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Vytvořený typ hostů');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Aktualizovaný typ hostů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Aktualizovaný typ hostů');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Zobrazit seznam pokojů na detailním popisu kapacity?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Zobrazit odkaz na seznam pokojů na detailním popisu kapacity?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Zobrazit <b>pouze</b> seznam dostupných pokojů v kalendáři?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Přejete-li si zakázat zobrazení záhlaví a detailů kapacity, zadejte hodnotu na ANO, kalendář dostupnosti pokojů je viditelný pouze v sekci detailního popisu kapacity. Vhodné pouze pro uživatele pronajímající SPRs (single room properties) jako jsou apartmány, chalupy apod.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS styl použitý na website');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Minimální interval mezi Prj-Odj');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimální interval mezi daty příjezdu a odjezdu na rezervačním formuláři.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Booking form room list show room number');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Booking form room list show room name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Booking form room list show tariff title');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Booking form overlib show title');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Booking form overlib show description');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Booking form overlib show rate/tariff');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Booking form overlib show starts');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Booking form overlib show ends');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Booking form overlib show minimum days');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Booking form overlib show maximum days');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Booking form overlib show minimum people');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Booking form overlib show maximum people');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Booking form overlib show room number');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Booking form overlib show room name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Booking form overlib show room type');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Booking form overlib show room smoking');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Booking form overlib show room disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Booking form overlib show room floor');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Booking form overlib show room maximum people');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Booking form overlib show room features');

/**
* @ignore
*/
define('_JOMRES_ORDER','Objednat');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','Přestože jste nastavili Jomres pro použití jednoduché kapacity (např. apartment, vila, chalupa), vytvořili jste více pokojů You have configured Jomres as a single room property (eg an apartment, cottage, villa) however you have more than one room created. This may result in errors when using Jomres, so if you are going to continue using Jomres to manage a single room property you need to remove all but one of the rooms. Please modify your configuration so that Single Room Property = No, then go to Property Admin and remove all rooms except one, so that you only have one room against this property.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Požadované');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dní před příjezdem');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimální počet dní vyjma dneška, které musí uběhnout před datem příjezdu.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Za noc:');

/**
* @ignore
*/
define('_JOMRES_DTV','Varianty typu dnů');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Den týdne');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Rozsahy dní');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Dny pobytu');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Den týdne');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Den týdne');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Výběr cenové třídy.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Tímto menu vyberete vlastní cenovou třídu, kterou jste vytvořili/stáhnuli jako separátní komponent do systému Joomla.');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Výchozí typ hosta');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Výchozí hodnotou je první hodnota typu hosta; pokud používáte tento parametr, pak bude použita výchozí hodnota.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Rezervace online pouze pro registrované uživatele?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Omlouváme se, ale pro provedení online rezervace musíte být registrovaným uživatem. Pro registraci klepněte sem.');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Barvy písma aktuálních rezervací');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Okraje týdne');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Vyberte použitý plugin pro CP');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Přejete-li si použití alternativního CP, zadejte jej zde.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Pokoj je rezervován');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Zakázaná rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrouhlit zálohu nahoru na celá?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Inkasovat zálohu?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Inkasování tarifů? uložit jako týdenní?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Přejete-li si uložit inkasované tržby? jednou týdně, zadejte hodnotu ANO. Druhou možností je denní inkaso.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Týdenní sazba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Opakované fixní data příjezdů: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','V případě fixních příjezdových datumu je počet dat zobrazen jako seznam.');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Neplatná hodnota kuřácké');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Neplatné datum příjezdu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Neplatné datum odjezdu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Rezervace je příliš krátká, minimální počet dní mezi příjezdem a odjezdem je roven ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Váš interval je roven ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Neplatný typ hostů');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Zadejte počet a typ hostů');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Počet požadovaných hostů je nad limitem možných ceníků');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Bohužel jste zadali větší počet pokojů než hostů, odeberte nadbytečné pokoje klepnutím na jejich název.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Počet postelí je nižší než počet hostů');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Musíte zadat více pokojů');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Vyberte pokoj');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Zadejte jméno');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Zadejte příjmení');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Zadejte číslo domu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Zadejte jméno ulice');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Zadejte město');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Zadejte region');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Zadejte PSČ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Zadejte zemi');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Zadejte číslo pevné tel. linky');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Zadejte číslo mobilního telefonu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Zadejte e-mail');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','E-mailová adresa není platná');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Ověření emailové domény se nezdařilo');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Máme volné místa!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Doposud nebyly vybrány pokoje');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Rezervace č.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Barva pozadí messageboxu, připraveno k rezervaci');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Vypsat proměnné šablony?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Přejete-li si vypsat hodnoty DHTML proměnných na frontendu webu, zadejte hodnotu ANO. Užitečné při ladění šablony.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Hodnota je procentem');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Přejete-li si použít hodnotu SRP kalkulace jako procento, zadejte hodnotu na ANO. V opačném případě je použitá paušální částka.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Omezení dostupných pokojů/ceníků');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Přejete-li si omezit počet vypsaných dostupných pokojů a ceníků v objednávce, zadejte požadovanou hodnotu. Hodnota na 0 zakazuje použití funkce omezení a žádné limity nebudou aplikovány. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Aktuálně obsazeno!');
// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','marže');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Zisk marže, v procentech.');

// Translate from here

// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Zobrazit menu administrátora jako ikony?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Nastavte na ANO, pokud chcete všechny administrátorské odkazy v textové podobě.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Zarezervujte nyní: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Celkový editační režím?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Pozor na toto nastavení. Pokud zvolíte ANO, pak vše co nastavíte, bude mít vliv na všechny texty, související s konstatnou, kterou upravujete.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Hlavní symbol měny');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Spustit komponentu samostatně');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Nastavte na ano, pokud je komponenta spoštěna samostaně a moduly a hlavičky nejsou vidět.');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super správce');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Pouze o víkendech');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Cena je platná pouze tehdy, obsahuje-li pobyt alespoň jeden den víkendu.');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Víkendové dny');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Nastavte dny víkendu. Tarify, které platí o víkendech, se budou řídit podle tohoto nastavení.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Před zadáním dalších informací o kapacitě zadejte stát');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Uložte nastavení o kapacitě před tím, než budete nahrávat fotografie.');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Ceny od - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','Vše');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Oblast');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Vlastnosti');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Popis');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Dostupnost');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Typ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Hledat podle země');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Hledat podle regionu');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Hledat podle města');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Vlastnosti vyhl.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Hledat');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Vložte frázi, kterou chcete vyhledat a stiskněte talčítko.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Vyhledat slovo(a): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Prosím vložte váš předpokládaný příjezd a odjezd a stiskněte tlačítko. Vyhledáme kapacity s volným ubytováním ve vámi zadaném termínu.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','Vypsat všechny kapacity dle jejich typu.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','Vypsat všechny kapacity dle typu pokoje.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Výchozí');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Název kapacity');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Oblast');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Město');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Počet hvězdiček');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Seznam kapacit');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Podrobnosti o ubytování - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Rezervační formulář');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Upravte podrobnosti své adresy');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Znovuověření dostupnosti pokoje<br/>(Předchozí výběr pokojů se vymaže)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Ověření dostupnosti');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Úprava vašich volitelných doplňků');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Změna výběru pokoje');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Změna údajů v adrese');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Omlouváme se, ale jedno nebo více polí v adrese je vyplněno špatně.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Fotografie pokoje');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Formát měny');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Ukázat nastavení manažera jako piktogramy');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Nastavení hledání');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Pozor! Tyto volby mají vliv pouze na formát jazyka v modulech. Chcete-li nastavit formát pro javascript v rámci dané kapacity, upravte prosím vlastnosti javascript kalendáře přímo v nastavení dané kapacity.');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Přístupné Logy');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','Žádné záznamy v logu. Tato situace je naprosto normální, musíte upravit ručně soubor jomres.php.');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datum a čas');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Zpráva');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normální');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Rozšířený');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Režim cen');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC','Nastavte na rozšířený, pokud potřebujete pracovat se složitějšími ceníky');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Ukázat seznam pokojů na základní stránce kapacity?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Typ kapacity');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','Pouze celý object');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Maximální počet osob na pokoji');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Maximální počet osob na rezervaci');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Vlož poznámku');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Uprav poznámku');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Vymaž poznámku');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','Ukaž poznámky');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Vložena nová poznámka');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Upravená poznámka');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Vymazaná poznámka');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','Moje nastavení');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','Nejste přihlášen. Pokud se přihlásíte nebo zaregistrujete, zpřístupní se vám informace o rezervaci.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Výpis rezervací');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','Moje rezervace');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','Výpis rezervací bez zaplacených záloh');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','Zobrazit rezervace');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Zobrazit oblíbené');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Zatím nemáte žádné oblíbené položky!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Vložit do oblíbených');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Typ kapacity');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','kapacity na stránce');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Dynamická cena');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Aktivní');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Tento plugin vám umožní nastavovat ceny pokojů dynamicky.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Většina firem se přepočítává ceny pokojů na základě počtu pokojů na požadovaného typu, které jsou k dispozici k určitému datu. To jim umožňuje nabízet slevy na ten druh pokoje, který není obsazen po určitou dobu s cílem zvýšit obsazenost. Povolení a konfigurace tohoto pluginu umožňuje nastavovat ceny pokojů v závislosti na počtu místností vybraného typu pokoje, které jsou k dispozici v kapacitě na daný den. Počet dnů odstupu definuje počet dnů před příjezdem, ve kterých můsí být pokoje volné. Procento znamená relativní počet pokojů z celku, které musí být volné, aby byla uvedá sleva uplatněna.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Počet do příjezdu');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Procento obsazených pokojů < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Procento obsazených pokojů < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Procento obsazených pokojů < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Procento obsazených pokojů < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Sleva %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Typ pokoje ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' byla slevněna z původní ceny ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' na ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Cena pokoje není slevněna ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Klíč API na Google maps');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Klíč API můžete získat z <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Jakmile uložíte API klíč, Jomres automaticky zobrazí mapu v detailu kapacity.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Použít SSL v rezervačním formuláři?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','Musíte mít platný SSL certifikát, vystavený pro ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Maximální počet osob, které mohou být v kapacitě ubytovány.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktivní?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Nastavte na ano, pokud chcte vytvářet Last Minute nabídky.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Práh');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Pokud je příjezd pouze N dnů před učiněním rezervace, může být poskytnuta sleva');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Sleva');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','v procentech');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','V této rezervaci byla uplatněna sleva!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Náklady na pobyt byly sníženy ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Tato kapacita nabízí slevu Last Minute ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' procent, pokud si zarezervujete svůj příjezd nejpozději ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' procent nebop i více, pokud si zarezervujete svůj příjezd nejpozději ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Zarezervujte nyní a získejte nejvíce výhod!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','Tato kapacita nabízí slevu Last Minute   ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' procent, pokud si zarezervujete svůj příjezd nejpozději  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Zarezervujte nyní a získejte nejvíce výhod!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Detailní informace o cenách');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Nastavte na ANO, pokud chcete zobrazovat v detailu kapacity podrobný ceník.');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimalizovat nastavení');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Nastavte na ano, pokud chcte minimalizovat možnosti nastavení pro Manažery Kapacit v globánní konfiguraci. Velmi užitečné, pokud nechcete, aby si všichni manažeři kapacit hráli v velkým nožstvím nastavení. Místo toho upravte soubor jomres_config.php a nastavte vše zde.');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Zrušit');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','Ovládací panel JRPortal');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Konfigurace');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Výchozí výše provize');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Zvolte výchozí výši provize, která bude aplikována v případě, že u kapacity nebude určena její individuální výše.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','Seznam provizních sazeb');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Provizní sazba');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Název');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Typ');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Provize');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Kód měny');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Seznam kapacit');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Název kapacity');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Adresa');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','U kapacit, kde je barva pozadí červaná, nebyly ještě aplikovány provizní sazby.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','Licenční číslo');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Číslo licence vašeho portálu - plug-in u .');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistika');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistika pro: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','období: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Vlastnosti - Kliky');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Zobrazení kapacity');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','leden');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','únor');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','březen');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','duben');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','květen');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','červen');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','červenec');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','srpen');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','září');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','říjen');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','listopad');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','prosinec');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Počet rezervací');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Hodnota rezervací');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Obsazenost pokoje');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Odhad provizí');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Provizní sazba');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Výpis rezervací');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','id kapacity');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','id hosta');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','id sloučení');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','id faktury');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Celkem rezervací');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','id smlouvy');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Číslo smlouvy');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Kód měny');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Vytvořeno');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archivováno');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Datum archivace');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Přidat kapacitu');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Zdroj : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Jedná se o kapacitu s více pokoji?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Jedná se kapacitu hotelu, penzionu nebo domu s více apartmány? Pokud je to tak, zvolte ANO. Pokud se jedná o jednoducho kapacitu (chata, chalupa bez členění na jednotlivé pokoje), vyberte Ne.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Vlož položku do účtu');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager faktur');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Přidružená kapacita (pokud lze)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Hodnota');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Popis');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Úspěšné vložení položky účtu do ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Zobrazit objednávky");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Nepodařilo se vložit položku účtu do ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Chyba, nenastavili jste hodnotu účtu");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Můžete založit svoje překladové soubory a použít je v popisu kapacity tak, že založíte podadresář s názevem kapacity a do něj umístíte jazykové soubory..');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Nemůžete tuto kapacitu vymazat, je to jediná kapacita, ke které máte přístup. Pokud ji chcete zakázat, použijte volbu "Nepublikovat" na vaší liště. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Pokud pracujete s DEMO instalací a chystáte upgrade na Jomres Solo, nejprve vytvořte novou kapacitu, následně tuto smažete a pak teprve proveďte upgrade na Jomres Solo.. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Zaslat chybová hlášení emailem?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Nastavte na ANO pokud chcete dostat do emailové schránky kopii souboru jomres.net automaticky po tom, co nastaně chybová událost. Je to vhodné i pro pozdější podporu a odstranění chyby. Pozor - tato vlastnost je vždy v počátku na počítači 'localhost' zakázána. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Jedná se o hotel/penzion/apartmánový dům? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Chování aplikace záleží na tom, jaký typ nemovitosti nabízíte. Pokud se jedná o nemovitost, ve které je více jednotek (hotel, penzion), zvolte MRP. Pokud pronajímáte pouze celý objekt (chata, chalupa), zvolte SRP. . ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Použít kontrolu emailu Jomres? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Zapíná striktní kontrolu emailů. Ochrana některých emailových serverů v případě, že zašlete mejl se špatnou nebo neexistující adresou, vrátí chybové hlášení s kódem 500. Pokud tomu chcete zabránit, zapněte tuto volbu. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Ubytování celkem");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"nocí v");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"za pokoj ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Přirážka za pobyt celkem ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Cena celkem ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Přečtěte si prosím a vyjádřete souhlas");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"Zhrnutí vaší rezervace níže<br /> Pokud chcete cokoliv změnit, stiskněte tlečítko Opravit rezervaci. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Pokud chcete změnit jakoukoliv informaci, uvedenou výše, stiskntě tlačítko");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Opravit rezervaci");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Do pole níže napište jakékoliv speciální přání nebo informaci.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Potvrzuji, že výše uvedené informace jsou pravdivé a souhlasím s nimi. ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Přejeďte myší přes náhled obrázku a zobrazí se zvětšená fotografie");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Zobrazit prezetaci fotografií kapacity.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Nahoru");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Dolů");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Oba");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"za osobu a noc ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Výchozí soubor jazyka");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Vyberte výchozí soubor pro překlad Jomres, pokud nemá být použito nastavení z komponenty JoomFish!");
// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"Absolutní cesta k log souboru. Pamatujte, že stále musíte ručně povolit logování v souboru jomres.php. Ačkoliv logování chyb je automatické, ostatní typy logování musí být nastaveny uživatelem.");
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
	define('_PN_PAGE','Strana');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','z');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Začátek');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Předchozí');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Další');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','Konec');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Zobrazení č.');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Výsledky');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Pozor, nejdná se o rezervační formulář, ale odeslání mejlu.<br/>Vložte zprávu, kterou chcete zaslat. ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Chci kontaktovat hotel');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Dotaz na nemovitost z ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Děkujeme za váš dotaz, který byl odeslán na emailovou adresu ubytovacího zařízení. Odpověď dostanete co nejdříve.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' týká se ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Napište znaky, které vidíte v rámečku');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Nemohu znaky přečíst. Vygeneruj ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Odeslat');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nový obrázek');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Dotaz');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Prosím vyberte požadované ubytování ze seznamu napravo');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Minimální počet vybraných pokojů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Maximální počet vybraných pokojů');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Upozornění! Příplatek za jednu osobu nastavený zde nebude použitý, pokud je nastavený Přípaletek za jednu osobu v hlavní konfiguraci na ANO. Nastavení je zde umístěno z důvodu, aby bylo umožněno pracovat s proměnnými příplatky za jednu osobu. .');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Volný"); 
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Nějaké rezervace");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"Zpoloviny rezervováno");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Většinou obsazeno");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Zcela rezervováno");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Prefix URL');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Toto je první položka, zobrazená po doméně. Změňte, pokud potřebujete. Pokud nechcete používat, nechte prázdné');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Název úlohy zobrazení kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','Název úlohy rezervace');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Název úlohy hledání');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Přidat zemi do url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Přidat zemi do url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Přidat město do url');
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
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Přidat název kapacity do url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Doplnit id kapacity do jejího názvu');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Pokud je nastaveno na NE, pak id kapacity nebude použito. Pokud je nastaveno na ANO, adresa url bude vypadat jako fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Prohledání struktury URL - Přidat zemi do url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Prohledání struktury URL - Výchozí země');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Pokud jsou všechny kapacity v jedné zemi, pak ji není třeba zadávat. Zadejte proto výchozí zemi, která bude při vyhledávání automaticky použita.');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Prohledávání struktury URL - Přidat region do URL');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Prohledávání struktury URL - Výchozí region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Pokud jsou všechny kapacity v jednom, pak jej není třeba zadávat. Zadejte proto výchozí region, která bude při vyhledávání automaticky použit.');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Prohledávání struktury URL - Přidat město do url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Prohledávání struktury URL - Výchozí město');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Prohledávání struktury URL - Typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Prohledávání struktury URL - Výchozí typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Použito v url, jestliže vyhledáváte ve všech typech kapacit');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Buď není nainstalována komponenta she404sef, nebo jste nezkopírovali soubor '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php do '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Jakmile nainstalujete sh404sef a/nebo zkopírujete soubor dle návodu, budete moci nastavovat vaše sef url adresy. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetekce jazyka Javascript kalendáře');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Pokud nebude možné detekovat jazyk, použije se nastavení níže.');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','za týden');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','za týden');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','za rezervaci');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','za osobu a rezervaci');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','za osobu a den');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','za osobu a týden');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','za dny X vybrané pokoje');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Obnovit registr modulů');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Běžně je registr modulů Jomres obnovován automaticky pokaždé, když spustíte manažera modulů a přidáte nebo odstraníte modul. Pokud z jakéhokoliv důvodu nemůžete tuto možnost využít, je k dispozici ještě tato volba. Pokud máte přístup do Manažera Modulů a nástroje Uprgade, nebudete tuto volbu potřebovat. Naopak, pokud nainstalujete libovolný modul manuálně, musíte obnovit registr manuálně.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registr úspěšně obnoven');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','Při obnovování registru došlo k chybě. Pro bližší informace a eventuelní nalezení chybného záznamu zkontrolujte prosím Jomres chybový log.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Vyhledávání dle rozsahu cen.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Ukládám...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Použít kompozitní zobrazení informací o kapacitě?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 umožňuje kompozitní zobrazení informací o nemovitosti, kde je celkový výstup formátován podle souboru šablony (composite_property_details.html). Jestliže nechcete využít tohoto nastavení, nastavte volbu na NE (zřejmě stávající uživatelé nastaví na Ne, noví uživatelé budou pravděpodobně volit Ano)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','Toto je seznam všech uživatelů systému. Uživatelé, kteří nemají přiřazenu žádnou kapacitu, mají ikonu Host. Výšší úrovně oprávnění mají ikonu Recepce / Správce kapacit / Super správce. <br/> Jomres Při první instalaci je uživateli "admin" je automaticky přiděleno oprávnění správce kapacit a je považován za oprávněného uživatele. <br/> Krom super správce, musí mít každý oprávněný uživatel přiřazen alespoň jeden objekt(kapacitu). V opačném případě jeho přihlášení do Jomres vyvolá chybu.<br/> Jakmile je uživatel potvrzen, můžete upravit jeho profil, přiřadit jim kapacitu nebo jim dát práva super správce. <br/> Chcete-li povolit uživatele, klikněte na červený kříž vedle jejich jména. Pro zrušení autorizace klikněte na zalené zaškrtnutí. <br/> Chcete-li přiřadit uživatelům pouze specifické vlastnosti, nebo jim dát práva super správce, potom klikněte na ikonu editovat (ta je viditelná pouze u povolených uživatelů). Uživatelé, kteří už zaregistrovali svoji kapacitu, se k němu automaticky přiřadí. Super správci mají automaticky právo na nastavení všech vlastností, a uvidí i všechny možnosti konfigurace. Tato možnost může být ovlivněna nastavení v administrátosrké části konfigurace.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Zde můžete přiřadit manažerům jejich kapacity. Ujistěte se, že v případě, kdy se nejedná o super správce, má přiřazenu alespoň jednu kapacitu, jinak jejich přihlášení vyvolá chybu. Naopak, aby recepční nebo manažer kapacit měl přístup pouze ke svým kapacitám, je třeba, aby rozbalovací nabídka Super správce není nastavena na hodnotu Ano.');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Prosím čekejte, vaše objednávka se zpracovává...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Zatím jste neudělali žádnou rezervaci!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Upravit typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Vybrat typ kapacity');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres logy');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','Tato nastavení umožňují ovládat zápisy do log souborů systému Jomres. Zápisy chyb jsou vždy povoleny, ale ostatní zápisy do log souboru, jako jsou rezervace, přihlášení, hlášení systému a požadavky mohou být nastaveny na ano nebo ne. Upozorňujeme, že <b>zapnutí logování je velmi výhodné z hlediska ladění programu a dohledávání chyb, ale nese s sebou velé bezpečnostní riziko</b> zejména v možnosti, že uživatelé bez příslušné auutorizace mohou otevřít logovací soubor a číst v něm. Proto prosím nechte nastavení logů vypnuté, není-li opravdu netné je používat. Pokud logování zapnete, ujistěte se, že složka <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> neobsahuje žádné staré log soubory. Uvědomte si, že zapnutí logování vede i ke zpomalení činnosti systému vzhledem ke shromažďování velkého množství informací.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Logování rezervačního formuláře (Logy rezervačního procesoru) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Logy brány (jako paypal atd.) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Logy požadavků (všechny příchozí požadavky serveru)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','Systém (různé logy) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portál (hlavně pro záznam provizí) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Váš dotaz...');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Rezervační formulář ukázat obrázek typu pokoje');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Limit výpisu kapacit');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','Počet kapacit, vypsaných na jedné stránce po skončení vyhledávání');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrované vyhledávání');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Integrované vyhledávání Jomres umožňuje uživatelům vyhledávat kapacity pomocí celé sady funkcí. Pokud jste již používali vyhledávací funkce Jomres v Joomle, budete toto nastavení znát. <br/> Tato funkce nám umožňuje nabídnout vyhledávání v systému Jomres pro ty uživatele, kteří nepoužívají vyhledávací moduly, obsažené v Joomla nebo pro ty uživatele, jejichž CMS vlastní vyhledávací modul nemá. <br/> Jen nezapomeňte, že pokud se rozhodnete hledat něco přes odkaz (tj. nikoli rozbalovací), pak další možnosti vyhledávání nebude možné provést, bude hledán pouze prvek, který odpovídá na odkazu, který jste klikli. <br/> Všimněte si, že ve výchozím nastavení zobrazení nevypadá integrované vyhledávání moc hezky. To proto, že soubor šablony, který zajišťuje zobrazení, musí obsahovat všechny možnosti, z nichž některé jsou vzájemně neslučitelné. Pro zlepšení a úpravu vzhledu do podoby, jakou si přejete, musíte upravit <b> srch.html </ b> ve složce <b> '. JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Aktivovat toto nastavení?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Pokud je toto nastavení povoleno, potom jakýkoliv požadavek, který zobrazuje výpis kapacit, bude zároveň zobrazovat i možnosti vyhledávání');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Použij sloupce');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Jakákoliv možnost vyhledávání, kterou definujete jako typ odkaz (tam, kde je to relevantní) bude zobrazena jako sloupec. (IE vloží značku br na konec odkazu)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Vlastnosti sloupců");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Počet piktogramů, které budou vloženy před značku br - tedy před přechodem na další řádek.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Vyhledávání regionů pomocí výběru v combo seznamu");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Nabízí možnost výběru v seznamu, vyfiltrovanému na země/regiony/města. Pokud chete toto nastavení používat, je lépe neoužívat vyhledávání regionů a měst níže.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Vyhladání kapacity podle jména");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Zobrazit vyhledávání podle názevu kapacity");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Vyhledávat podle města/regionu");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Zobrazit vyhledávání podle regionu");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Vyhledávání podle typu kapacity");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Zobrazit vyhledávání podle typu kapacity");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Vyhledávání podle typu pokoje");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Zobrazit vyhledávání podle typu pokoje");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Vyhledávání podle vlastností");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Zobrazit vyhledávání podle vlastností");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Vyhledávání podle popisu");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Zobrazit vyhledávání podle popisu");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Vyhledávání podle dostupnosti");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Zobrazit vyhledávání podle dostupnosti");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Vyhledávání dle rozsahu cen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Zobrazit vyhledávání podle cen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Přírůstek cenového rozpění");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres vyhledá všechny hodnoty v cenících, jejichž rozsahy odpovídají zde nastavené zvýšené ceně.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Ve výchozím nastavení, pokud není vybraná žádná kapacita, Jomres spustí vyhledávání. Pokud toto vyhledávání nebylo spuštěno vyhledávacím modulem, pak dojde k záměrnému vygenerování náhodných výsledků (záměrně). Tato volba umožňuje omezit počet výsledů tohoto náhodného hledání.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Nastavení a logy procesu Cron');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_DESC','Inforamce o úloze Cron. Tato úloha je nezbytná pro funkčnost fakturace a zúčtování provizí');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Intalované minikomponenty úlohy Cron. Ke spuštění dané úlohy použijte příslušný odkaz. Uvědomte si, že úloha nebude mít žádný výstup na obrazovku a nebudete tím pádem mít žádnou zpětnou vazbu. Místo toho nahlédněte do log souboru níže.');
/**
* @ignore
*/
global $jomresConfig_secret;
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD','Metoda');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"Jestliže nemáte přístup k procesu Cron, nastavte tuto minikomponentu. Jinak vytvřte Cron úlohu a jako parametr ke spuštění zadejte <br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Zobrazit logy v prohlížeči');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Pracuje pouze, pokud je metoda nastavena na minikomponentu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Záznam logu povolen');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Nastavte ANO pro povolení záznamu do log souboru. Výsledky budou ve výstupním souboru uvedeném níže.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Podrobné protokolování');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Výstup logů');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Úprava šablony');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','Tato funkce umožňuje upravit šablonu frontendu na serveru, ukládat výsledky do databáze. Funkce pouze pro pokročilé uživatele.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Název šablony');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Šablona byla upravena?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Uživatelská pole');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Zde můžete nadefinovat uživatelská pole, která budou následně zobrazena v rezervačním formuláři.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Název pole (bez mezer)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Výchozí hodnota');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Vyžadováno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximální množství');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Pokud je Maximální hodnota nastavena na hodnotu vyšší jak 1, pak se zobrazí pole se seznamem s výběrem hodnot. ');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Vystavení faktur");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"Dazby DPH");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Kód daně");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Popis daně");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Nemůžete vymazat tuto sazbu daně.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Daň");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Faktury");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Nazaplacená");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Zaplacená");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Zrušená");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Čeká na vyřízení");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"Uživatel");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Zvýšení");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Splatnost");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Schválení");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Celkem nezaplaceno");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Periodická platba");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Frekvence plateb");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Platební den");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Kód měny");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS',"Položky řádku");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Jméno");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Popis");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Základní cena");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Základní množství");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Základní sleva");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Celkem");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Periodická platba");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Periodické množství");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Periodická sleva");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Celkem per. platba");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Kód daně");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Popis daně");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Sazba daně");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Nastavení Paypal");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Kód měny (např. EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Použít schránku sandbox?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Vaše emailová adresa pro paypal");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Poznámka: Pokud chcete používat PayPal, musíte se nejprve do něj přihlásit a zrušit funkci Autoreturn. (Profile/Website Payment Preferences), a nastavit IPN (Profile/Instant Payment Notification Preferences) na URL adresu:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Faktura je nyní splatná. Stiskem tlačítka ji zaplatíte pomocí PayPal.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Ignorovat standardní nastavení platební brány Jomres?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Pokud je nastaveno na ANO, stane se následující: V Hlavní konfiguraci se neobjeví žádná nastavení platební brány, a za druhé, pokud je provedena rezervace, je také platba odeslána na adresu uvedenou zde, nikoliv na tu uvedenou před tím v Hlavní konfiguraci.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Ukaž mé faktury");


/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Slevové kupony");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Kódy slevových kuponů mohou být vygenerovány a zaslány uživatelům systému, aby byla podpořena poptávka po rezevování kapacit. Datum platnosti se vztahuje na použití slevového kuponu, nikoliv na datum rezervace jako takové.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Kód kuponu");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Platnost od");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Platnost do");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Výše slevy");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Sleva je procentní");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"Pouze pokoj");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Sleva je nyní použita pouze na náklady za pokoj. Pokud je nastaveno na Ne, je sleva použita na náklady za celý pobyt.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Chyba Sql při pokusu o vymazání nebo vložení kuponu");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Pokud máte kód slevového kuponu, napište nebo zkopírujte jej do tohoto pole a stiskněte tlačítko Ulož slevu. Vaše sleva bude uplatněna na tuto rezervaci.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Ulož slevu');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Sleva uložena do rezervace');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Kód slevového kuponu nenalezen');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Výše slevy na kuponu');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Rezervace se slevou. Kód kuponu/sleva/nastavení kuponu: ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Použít Jomres cache?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Nastavte na NE, pokud chcete zakázat cachování v rámci programu Jomres.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Volba jazyka');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Vyberte jazyky, které chcete vybírat v přepínacím seznamu jazyků.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Ukázat výběr jazyka?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Odhlášené a zrušené rezervace');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Vážený/á");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Děkujeme za registraci ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Vaše uživatelské jméno je : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Vaše heslo : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Prosím přihlašte se, aby jste mohli prohlížet Vaše rezervace ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Kupón uložen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Kupón vymazán');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','Toto je Váš ovládací panel, kde můžete spravovat veškeré informace o Vašich kapacitách');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Použít Jomres zpracování zpráv');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Mnoho zprávců požaduje zpětnou vazbu o tom, že stránka byla znovu načtena. K tomu slouží tato volba.');
/**

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Jméno");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Heslo");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Číslo telefonu pro zaslání potvrzení");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Prosím, použijte formát 'Country code, mobile number'. Např: '420123456789'. Nevyplňujte, pokud nechcete dostávat zprávy o odeslání.");
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
<b>Tuto funkci nelze testovat na 'localhost'u, musíte být přihlášeni v živé aplikaci.</b>
<br/>
<br/>
Aby jste mohli používat Clickatell bránu, musíte mít účet a alespoň jedno zaregistrované spojení (API sub-product instance) mezi Vaší aplikací a naší bránou. Každé spojení
je nazýváno jako sub-product. Zde je podrobný postup:<br/>
<br/>
<b>Step 1 - zaregistrujte si Clickatell účet</b><br/>
Pokud ještě nemáte Clikatell účet, postupujte podle návodu níže. Jinak pokračujte Krokem 2.<br/>
* Běžte na http://www.clickatell.com/products/sms_gateway.php, a vyberte API subproduct (metoda spojení) který chcte použít. ( Clickatell Central (API) )<br/>
* Klikněte na odkaz k registraci.<br/>
* Vyplňte regustrační formulář.<br/>
Po úspěšné registraci budete přesměrování na stránku, kde můžete nakonfigurovat nové API spojení.<br/>
<b>Krok 2 - přidání registrovaného API spojení(sub-product)</b><br/>
Pokud ještě nejste přihlášeni, učiňte tak na stránce http://www.clickatell.com/login.php<br/>
* Vyberte \"Manage my Products\" z horní nabídky.<br/>
* Vyberte typ spojení API, které chcete použít (HTTP API) z příslušného pole se seznamem ('Add Connection').<br/>
* Vyplňte zbytek formuláře. Ujistěte se, že jste zadali správnou adresu IP(IP adresu tohoto serveru), nastavte Callback na HTTP POST. Musíte nastavit IP callback na ".$jomresConfig_live_site."/index2.php?option=com_jomres&task=sms_clickatell_callback a dále userid a heslo.<br/>
Pokud zadáváte více než jedno API spojení, jejich popis musí být vždy jedninečný - nelze mít více API se stejným názvem.<br/>
Po úspěšném odeslání formuláře se zobrazí všechny detaily vašeho připojení, včetně seznamu všech API a jejich jedinečného id. Všechny tyto údaje jsou potřebné pro přojení k bráně Clickatell a odeslání zpráv.<br/>
<br/>
Použijte userid, heslo a api_id v vyplnění příslušných polí.<br/>

<br/>
");
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Ukázat zakázaný přístup k rezervačnímu formuláři');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Ukázat maximální počet osob v rezervačním formuláři');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Prosím uvědomte si, že uvedé ceny jsou pouze přibližné. Přesné ceny budou vypočteny teprve až vyberete pokoj nebo pokoje.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Poslední změna databáze šablon');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Poslední změna šablony na disku');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Varování databáze šablon');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Databáze šablon může být zastaralá');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','Jestliže u šablony vidíte piktogram, pak to znamná, že Jomres detekoval, že šablona, která je uložena v databázi <strong><i>může</i></strong> starší než ta, která je uložena na disku. V tomto případě je možné, že šablona byla aktualizována instalací nové verze Jomres. V tomto případě je možné, že šablona nebude moci plně využít funkce v nové verzi Jomres nebo instalované funkce nepracují tak, jak se očekávalo. Měli byste srovna soubory na disku s vaším nastavením, aby nedocházelo ke zbytečné ztrátě funkcionality.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Předplacené balíčky");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Jméno");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Popis");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Publikováno");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Četnost");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"ZKušební období");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Zkušební obnos");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Plný obnos");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Limit pokojů"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limit kapacit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Četnost: M/Q/B/A Měsíčně/Q(kvartálně)/B(půlročně)/A(ročně)");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Zkušební období: Vstup celé číslo, 0 (nula) nenastaveno, 1 jeden měsíc, 2 dva měsíce atd.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Předplatit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Prosím vložte/změnte vaše údaje. Upozorňujeme, že všechna pole jsou povinná.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Jméno");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Příjmení");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Adresa");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Země");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"PSČ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Potřebujete platnou registraci k vytvoření nových kapacit. V tomto okamžiku, jste si zakoupili předplatné na ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," zveřejněných kapacit. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Můžete zvýšit počet kapacit, které můžete vytvořit pomocí <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>zakoupením většiho množství předplatného.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," Používáte ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," kapacitních složek. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Na výpis vašich aktuálních kapacit klikněte na <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Na výpis všech dostupných balíčků předlatného klikněte na <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Bohužel, nemůžete zveřejnit tuto kapacitu, dosáhli jste maximálního počtu otevřených kapacitních složek.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Děkujeme Vám za objednávku zveřejnění Vašich kapacit na našem serveru. Jakmile bude Vaše faktura označna jako zaplacená, můžete pokračovat zde: <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>a zadat údaje o vašich kapacitách.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Je nám líto, že jste se nerozhodli por využití našich služeb. Pokud V8m můžeme jakkoliv pomoci, neváhejte a kontaktujte nás.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Omlouvám se, ale dosáhli jste maximálního počtu kapacit, které můžete mít zveřejněné v jednom okamžiku. Pokud chcte jejich počet zvýšit, kliněnte na <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>objednávku dalších balíčků.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Použít funkce předplatného");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Nastavte na ANO, pokud má Jomres používat předplatné.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Při rezervaci vytvořit nového uživatele');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Pokud rezervaci zadává neregistrovaný uživatel, automaticky proběhne vytvoření nového uživatele.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Klikněte zde pro zadání vaší kapacity');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Aktivní předplatné");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"id brány předplatného");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Děkujeme za rezervaci. Níže jsou uvedeny údaje nového uživatele");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres předá vaši adresu do aplikace Google a nechá automaticky vygenerovat pozici na mapě. Ta se pak zobrazí v detailu kapacity. Pokud z jakéhokoliv důvodu nebude vaše adresa automaticky nalezena, můžete ji zadat sami do pole lat (šířka) a long (délka). Pokud budete informace zadávat ručně, data z aplikace Google Earth mohou být nepřesná. Doporučujeme spíše navštívit adresu <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">itouchmap</a> a použít jejich údaje.");

/**
* @ignore
*/
define('_JOMRES_CONTROLPANEL','Ovládací panel');

/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS','Vložit Jomres javascript do těla html místo do hlavičky?');
/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS_DESC','Nastavte na ANO, pokud dochází k problémům s MSIE a Javascriptem, umístěným v hlavičce stránky. Tato volba umístí Javascript až za tag body.');


// Jomres v4.2

/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICE','Zobrazit fakturu');
/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICES','Zobrazit faktury');
/**
* @ignore
*/
define('_JOMRES_USER_LISTMYPROPERTY','Vložit moji kapacitu na tuto stránku');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Varování : ');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Můžete vytvořit i tzv. balíček zdarma a to tak, že po jeho vytvoření nastavíte jak zkušební částku, tak plnou částku na hodnotu 0.00");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Omlouvám se, ale ID balíčku nebylo rozpoznáno.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Omlouvám se, ale už jste jednou použil balíček zdarma a nemůžete jej použít znovu.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Očekávaná platba <b>1:</b> Vytvořeno <b>2:</b> Zrušeno <b>3:</b> Termín ukončení");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Můj účet");
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS','Vaše obchodní údaje');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_NAME','Obchodní jméno');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_VATNO','DIČ');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESSADDRESS','Číslo popisné');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>POZNÁMKA: Následující sazba daně je pro použití v USA. Pokud chcte používat režim evropské DPH, vyberte sazbu z nabídky nahoře</FONT>');
/**
* @ignore
*/
define('_JOMRES_INVOICE_NUMBER','Číslo faktury ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Vyberte data, která chcete použít pro anonymní rezervaci. Poté, co jste vyberete vhodná data, klikněte na tlačítko "Použít" a znovu proveďte kontrolu dostupnosti. <br/>
<br/>Pokud v kapacitě je jedna nebo více rezervací za vybrané období, pak nebudete moci objednat až do té chvíle, kdy bude druhá rezervace / anonymní rezervace zrušena nebo odhlášena. ');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Bohužel, na tento termín nelze provést nanonymní rezervaci.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Na tento termín lze provést anonymní rezervaci.');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Platba za tuto kapacitu je nastavena na osobu a noc, ale nemáte vytvořený nebo zveřejněný žádný typ hosta. Prosím vytvořte, případně zveřejněte alespoň jeden typ hosta pro tuto kapacitu. ');

/**
* @ignore
*/
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Zatím nemáte žádnou pložku v ceníku, nebude možné pro tuto kapacitu přijímat rezervace.');

/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_ON','Režim úprav zapnutý');
/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_OFF','Režim úprav vypnutý');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Vytiskni fakturu');


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
define('_JOMRES_REALESTATE_YESNO','Is this property a for sale listing?');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a listing where you will be offering short term rentals and will be using this system for taking bookings.');
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

