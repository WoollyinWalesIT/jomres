<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Zobraziť dnešné príchody');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Zobraziť dnešné odchody');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Zobraziť žiadosti o rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Zobraziť ostatné žiadosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Rýchla rezervácia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Zoznam aktívnych rezervácií');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Zobraziť profily');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Jazyky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Všeobecné nastavenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Nastavenie zliav');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Nastavenie izieb/ubytovacích zariadení');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Nastavenie ubytovacieho zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Nastavenie sadzieb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Naspäť');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Naspäť na zoznam rezervácií');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Nastavenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Nahraj vzorové dáta');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Áno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Nie');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Vytvoriť');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Nová izba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Nové vybavenie izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Nový typ izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Nové ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nové vybavenie ubytovacieho zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Nový hosť');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Uložiť');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Meno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Príchod ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Odchod ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Priradenie užívateľských profilov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Meno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Užívateľské meno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Aktuálne autorizované');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Prednastavené ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Zmeniť');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESLEVEL','Úroveň prístupu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Užívateľ nastavený');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','n/a');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Zmena ubytovacieho zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESLEVEL','Zmena úrovne prístupu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Manažér ubytovacích zariadení');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Vsetky rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nové rezervácie (bez zálohy)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Úprava rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Prích/Odch');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Hosť');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Izba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Platba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Meno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Priezvisko');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Hosť má prísť dnes. Po jeho príchode kliknite na tlačtko.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Poznámky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Ostatné požadavky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Upozornenie: ostatné požiadavky môžu byť k dispozícií za príplatok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Dospelí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Deti');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Stornovať rezerváciu');
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
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Mesto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PSČ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Pevná linka');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
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
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Preferencie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','ŠPZ automobilu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Klient stornovaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Hotel stornovaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Zvoľte dôvod storna rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Dní do príchodu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Storno poplatky splatné do</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Nemožno stornovať, klient je už ubytovaný.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Záloha zaplatená, žiaden dlh');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Záloha nezaplatená, dlžoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Záloha zaplatená, 50% zmluvnej sumy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Záloha nezaplatená, 50% zmluvnej sumy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Záloha zaplatená, 100% zmluvnej sumy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Záloha nezaplatená, 100% zmluvnej sumy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Výzva k platbe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Záloha nezaplatená');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potvrdenie storna');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervácia stornovaná');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dní do príchodu');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Typ rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Čierna rezervácia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Názov izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Izba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Poschodie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Pre hendikep.?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. počet osôb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Typ izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Popis typu izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Zoznam vybavenia izby');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','Sk ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','SKK');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Platobné podmienky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Zaplatená záloha');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Aktualizácia zálohy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Celkovo na zaplatenie');
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
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Rezervácia');
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
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>UPOZORNENIE...</FONT></h1><BR><B>Na aktualizáciu jazykovej mutácie musíte na danom súbore nastaviť chmod práva na 776</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Rýchlorezervácie: Výber typu izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Checkbox');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Počet dospelých');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Počet detí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Detská postieľka?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternatívne');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Zadajte buď počet nocí, alebo dátum odchodu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Počet nocí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Zvoľte typ požadovanej izby, dátum príchodu, počet nocí a osôb.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Naše izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO',' ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Názov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Číslo izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Poschodie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Pre hendikep.?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max. počet osôb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Detaily');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Typ izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Prepáčte, ale požadovaný pocet osôb je vyšší než kapacita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Prepáčte, ale v danom období nieje k dispozícií žiadna izba. Skúste prosím vybrať iné obdobie.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Vyberte prosím zo zoznamu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Vybrať tohto hosťa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Zoznam hostí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="3">CHYBA: V zadaných dátumoch došlo k chybe.<br>Stlačte tlačtko Naspäť a znovu zadajte požadované údaje.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="3">CHYBA: Na úspešnú rezerváciu musíte zadať aspoň jedného hosťa.<br>Stlačte tlačtko Naspäť a znovu zadajte požadované údaje.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="3">CHYBA: Vybraný interval dát obsahuje chybu.<br>Stlačte tlačtko Naspäť a znovu zadajte požadované údaje.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="3">CHYBA: Nezadali ste požadovaný typ izby.<br>Stlačte tlačtko Naspäť a znovu zadajte požadované údaje.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="3">CHYBA: Dátum rezervácie je bohužiaľ v minulosti alebo dnes.<br>Stlačte tlačtko Naspäť a znovu zadajte požadované údaje.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Detaily hostí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Potvrdenie detailov hostí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Upraviť');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Meno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Priezvisko');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Dom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Mesto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','PSČ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefón - pevná');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefón - mobil');
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
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','ŠPZ automobilu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Číslo kreditnej karty');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Karta vystavená');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Platnosť kreditnej karty do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Číslo karty');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Meno uvedené na karte');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Výber z ponúkaných');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Výber');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Cenník');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Popis cenníku');
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
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min. počet osôb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max. počet osôb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Počet dní');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Cena za izbu a deň');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Počet hostí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Celkom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Záloha');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Aspoň jeden z dní pripadá na štátny sviatok');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Prepáčte, ale Vášmu výberu nezodpovedá žiaden cenník. Skúste prosím zmeniť výber napr. zadaním iného dátumu, počtu dní pobytu, alebo nás kontaktujte.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Nastavenie ubytovacích zariadení a izieb');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Vybavenie izieb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Typy izieb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Vybavenie ubytovacieho zariadenia');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Izba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Typ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Typ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Názov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Číslo izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Poschodie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Pre hendikep.?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. počet osôb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Vybavenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Izba pridaná');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Izba aktualizovaná');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Pre úpravu položky kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Upraviť položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Vybavenie izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Popis vybavenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Pre úpravu položky kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Vybavenie izby pridané');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Vybavenie izby aktualizované');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Upraviť položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Typ izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Typ izby skrátene.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Typ izby detailne');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Pre úpravu položky kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Typ izby pridaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Typ izby aktualizovaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Upraviť položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Názov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Mesto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Región');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Krajina');
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
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Vybavenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Pre úpravu položky kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Ubytovacie zariadenie pridané');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Ubytovacie zariadenie aktualizované');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Upraviť položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Vybavenie ubytovacieho zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Vybavenie ubyt. zariadenia skrátene');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Vybavenie ubyt. zariadenia detailne');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Pre úpravu položky kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Vybavenie ubyt. zariadenia pridané');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Vybavenie ubyt. zariadenia aktualizované');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Upraviť položku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Cenníky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Cenník');
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
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Sadzba za noc');
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
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. počet osôb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. počet osôb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Typ izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorovať PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Povoliť štátne sviatky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Povoliť víkendy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Pre úpravu položky kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Cenník pridaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Cenník aktualizovaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Upraviť položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Klonovať položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Odstrániť cenník');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Cenník odstránený');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Upraviť cenník');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Štátny sviatok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Posledným dátumom obdobia sviatkov by mala byť posledná noc účtovaná sadzbou za štátne sviatky.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Upraviť štátne sviatky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Začiatok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Koniec');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Nový štátny sviatok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Pre úpravu položky kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Štátny sviatok pridaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Štátny sviatok aktualizovaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Upraviť položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Klonovať položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Odstrániť štátny sviatok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Štátny sviatok odstránený');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervácia uložená');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Uistite sa, že formulár je správne vyplnený');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Online rezervácia je určená len registrovaným uživateľom');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Registrujte sa, prosím');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Offline rezervácia');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Moje detaily');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Moje rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Správa');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Rezervovať izbu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Ubytovať hosťa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Ukončiť ubytovanie hosťa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Zoznam rezervácií');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NOVÉ rezervácie');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Control Panel');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Správa hostí');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Správa ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Správa cenníka');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Správa zliav');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Správa štátnych sviatkov');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Zvoľte typ požadovanej izby, dátum príchodu, počet nocí a počet osôb.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Zadajte prosím Vaše detaily. Toto je jednorázový krok, systém si Vás bude nabudúce pamätať.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Zadajte prosím typ požadovanej izby.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Zadajte prosím požadované informácie. Okrem čsla mobilného telefónu sú všetky polia povinné.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Zistiť dostupnosť.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Vybrať túto izbu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Výber hostí');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Potvdenie zadaných údajov');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Výber sadzby');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Výber typu izby');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Meno');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Priezvisko');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Číslo domu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Mesto');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PSČ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefón - pevná');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefón - mobil');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Zadaným parametrom bohužiaľ nezodpovedá žádna izba.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Zadajte údaje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Potvrdenie zadaných údajov');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Ďakujeme za prejavený záujem a dúfame, že sa Vám Vaša cesta bude páčiť.<br><br> <b>Berte prosím na vedomie, že Vaša objednávka je zatiaľ predbežná až do doby, pokiaľ Vám ju nepotvrdíme záväzne e-mailom.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezervácia na: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezervácia izby: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Počet dospelých: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Počet detí: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Príchod: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Odchod: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Počet nocí: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','UID hosťa: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Meno: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefón - pevná: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefón - mobil: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','UID cenník: ');
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
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Prepáčte, ale pred spracovaním Vašej objednávky potrebujeme, aby ste aktualizovali Vaše údaje. Kliknite prosím najprv na odkaz "Moje detaily" a vyplňte Vaše údaje. Ďakujeme.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Ďakujeme, Vaše detaily boly úspešne uložené.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Vitajte späť. Pred rezerváciou prosím aktualizujte "Moje detaily" kliknutím na odkaz.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Vitajte späť ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Ubytovanie hosťa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Vybrať hosťa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Hosť ubytovaný');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Dnes už nezostávajú žiadni neubytovaní dnes prichádzajúci hostia');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Ukončiť ubytovanie hosťa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Ubytovanie hosťa ukončené');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Potvrdenie ukončenia ubytovania hosťa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','K dnešnému dňu už nezostávajú žiadni dnes odchádzajúci hostia');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Hostia s dnešným príchodom');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Hostia s dnešným odchodom');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Obsadené izby');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Nové rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Zobraziť naplnenosť od: ');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Príplatky');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Cenníky & meny');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Zľavy');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Storno podmienky. NEPOUŽITÉ');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload súboru');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktuálne nastavenie');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Vysvetlenie');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Offline rezervácie?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Pokiaľ si neprajete vykonať rezerváciu, môžete využiť offline rezerváciu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Použiť schému zliav?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Schéma zliav umožňuje rôznorodé možnosti v závislosti na veľkosti skupiny. Nieje vhodná v prípadoch účtovaných inak ako PPPN (per-person-per-night basis).');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Úroveň zľavy 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Úroveň zľavy 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Úroveň zľavy 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Úroveň zľavy 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Hodnota pre úroveň 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Hodnota pre úroveň 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Hodnota pre úroveň 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Hodnota pre úroveň 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Príplatok za 1 os.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Ak si prajete účtovať túto položku, nastavte hodnotu na ÁNO');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Príplatok za 1 osobu');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Detská postieľka');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Ak si prajete účtovať túto položku, nastavte hodnotu na ÁNO');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Príplatok za detskú postieľku');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Požadovaná záloha v percentách?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Prajete si zálohu účtovať percentom z celkovej sumy rezervácie? Ak nie, bude použitá paušálna suma.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Požadovaná výška zálohy');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Za osobu, za noc (PPPN)');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Ak si prajete účtovať položku podľa PPPN (per-person-per-night) zadajte hodnotu ÁNO. Ak nie, cena bude kalkulovaná ako PRPN (per-room-per-night).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Môže byť penále konpenzované?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Ak si v budúcnosti prajete od zákazníka zinkasovat penále za zrušenú objednávku, nastavte hodnotu na ÁNO');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Súbor už existuje');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Typy súborov');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Zadajte povolené typy súborov pre upload. Jednotlivé hodnoty oddeľte čiarkou, napr. zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Veľkosť súboru');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. veľkost obrázku v KB');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Pre zobrazenie týždennej obsadenosti izby počnajúc dneškom, kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Pre zobrazenie rezervácií kliknite na odkaz rezervovanej izby');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','alebo zadajte požadovaný dátum');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Obsadené');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Voľné');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Izby s modrým pozadím sú rezervované, ak však obsahujú červený text, záloha alebola zatiaľ vyplatená.<br>Ak je pri izbe znak hviezdy pri "Obsadené", očakáva sa príchod hosťa v tento deň.<br>Pokiaľ je text žltý, izba je aktuálne obsadená.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Potvrdenie rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Vážený(-á) ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena za noc - za izbu ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detaily objednávky');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Ďakujeme za Vašu rezerváciu v');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Nižšie uvedený je sumár Vašej rezervácie. Prosíme overte, či sú uvedené informácie, hlavne kontaktné, v poriadku a ak nie, dejte nám prosím obratom vedieť.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Vaša izba Vám je k dispozicií ihneď po Vašom príchode, od 14.00 hod.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Tešíme sa na stretnutie');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Dúfame, že sa Vám bude pobyt páčiť.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Teraz prosím venujte pozornosť podmienkam.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Pripomname, že rezervácia je právnou zmluvou, takže aj v prípade zrušenia, či skrátenia rezervácie ste povinní plniť dohodnuté podmienky.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Neposkytujú sa žiadne kompenzácie v prípade neobsadenia rezervovaných izieb, či neskonzumovania objednaných jedál. Pre tieto prípady odporúčame využiť poisťovacie služby.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Stornovanie - skrátenie rezervácie</i> Rezervácia sa dá zrušiť iba písomnou formou. Penále za zrušenie/krátenie rezervácií sú nasledovné:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dní a viac');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Iba záloha.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 až 30 dní');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% z celkovej sumy.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Deň príchodu do 14 dní');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% z celkovej sumy.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','DPH 19%. Každá zmena sa odrazí na cene.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Tlač potvrdenia rezervácie');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Tlač faktúry (daňového dokladu)');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Vážený(á) pán(pani)');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Cena za noc - za osobu ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Počet osôb: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Zmluva uzavretá: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena za noc: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Spolu');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Detaily faktúry (daňového dokladu)');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Ďakujeme za Váš pobyt v ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Dúfame, že aj nabudúce využijete naše služby.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','DPH je zahrnutá vo všetkých cenách. Akékoľvek zmeny sa odrazia na výsledných cenách.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Tlač faktúry');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Pridať službu k vyúčtovaniu');
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
define('_JOMRES_COM_ADDSERVICE_BUTTON','Pridať k vyúčtovaniu');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Ostatné účtované položky');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Ostatné účtované položky, spolu: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Položka pridaná k vyúčtovaniu');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red>Prednastavený hotel nenájdený.</h1><br>Nemožno pokračovať, kontaktujte správcu siete.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Vyberte obrázok k prílohe');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Upload obrázku');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Upload');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Upload súboru');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Súbor môže mať max.');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Odoslať daľší súbor na upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Môžete uploadovat iba súbory typu type:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Pred uploadom najprv vyberte požadovaý súbor.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Názov súboru musí obsahovať len alfanumerické znaky a žiadne medzery.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Veľkosť súboru prekračuje maximálnu veľkosť nastavenú administrátorom.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Súbor zvoleného mena už existuje, pred uploadom ho prosím premenujte alebo zvoľte iný.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Súbor bol úspešne nahraný.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Súbor aleboL nahraný.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Súbor bol úspešne nahraný.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Pripojiť sa k sieti jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Ak sa rozhodnete pripojit k sieti jomres, zvoľte hodnotu ÁNO a Vaše ubytovacie zariadenie sa stane súčasťou komunity jomres. Vezmite na vedomie, že ubytovacie zariadenie je následne považované za živé, aktualizované a ste zodpovední za zverejnené údaje. Jomres.net nieje a nebude zodpovedné za Vami zverejnené informácie.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS kalendár');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','Jazyk JS kalen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Vyberte požadovaný jazykový súbor JS kalendára. Upozornenie - niektoré kalendáre môžu obsahovať chyby, viac informácií na http://sourceforge.net/tracker/?group_id=75569&atid=544287');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS kalendár CSS súboru');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Zvoľte CSS súbor pre použitie s JS kalendárom');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Skontrolovať štátne sviatky?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Zvoľte hodnotu ÁNO a prekontrolujte, či máte samostatné sadzby cenníkov na sviatočné a nesviatočné dny. Ak nemáte zvláštne ceny pre obdobia štátnych sviatkov, zvoľte hodnotu NIE.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Rôzne');
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
define('_JOMRES_FILE_DELETE','Odstrániť súbor');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Súbor odstránený');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Zobraziť vstupné pole dátumu odchodu');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Ak si prajete zobrazit vstupné pole dátumu odchodu, nastavte hodnotu ÁNO. Majte na mysli, že niektoré prehliadače obsah kalendárov nezobrazujú korektne.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Zvoľte požadované ubytovacie zariadenie pre ktoré chcete zistiť dostupnosť izieb');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Ľubovoľné');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Izba');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Zobraziť SQL');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Ak zapnuté, zobrazuje SQL informácie.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Zobraziť SQL výsledky');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Ak zapnuté, budú zobrazené navrátené SQL dáta a hodnoty var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Vyberte šablónu');
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
define('_JOMRES_COM_A_CSS','Šablóny');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Odstrániť');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Izbu nemožno odstániť, obsahuje platné rezervácie. Zrušte rezervácie a skúste znovu.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Izba odstránená');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Odstrániť vybavenie izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Vybavenie izby nemožno odstrániť kvôli existujúcim väzbám. Zrušte väzby na izby a skúste znovu.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Vybavenie izby odstránené');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Odstrániť vybavenie ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Vybavenie ubytovacieho zariadenia nemožno odstrániť kvôli existujúcim väzbám. Zrušte väzby na dané ubyt. zariadenie a skúste znovu.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Vybavenie ubytovacieho zariadenia odstránené');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Odstrániť typ izby');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Typ izby nemožno odstrániť kvôli existujúcim väzbám. Zrušte väzby na typ izby a skúste znovu.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Vybavenie izby nemožno odstrániť kvôli existujúcim väzbám cenníku. Zmeňte cenníkové väzby a skúste znovu.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Typ izby odstránený');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Odstrániť ubyt. zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Ubytovacie zariadenie nemožno odstrániť, obsahuje dáta v tabuľke: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Ubytovacie zariadenie odstránené');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nemáte oprávnenie odstrániť toto ubytovacie zariadenie.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Vybrať toto ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Ku ktorému ubyt. zariadeniu priradiť izbu?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Vybrať ubyt. zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Musíte vybrať ubyt. zariadenie');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Šírka malého náhľadu obrázku');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Šírka stredného náhľadu obrázku');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Šírka plného náhľadu obrázku');

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
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Ako sa k nám dostanete');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Letisko');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Iná doprava');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Pravidlá a výhrady');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Jomres.net kľúč k Vášmu ubytovaciemu zariadeniu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Pred publikovaním Vašej stránky navštívte <a href="http://www.jomres.net" target="_blank">Jomres.net</a> a nadobudnite Jomres.net kľúč. Registráciou na Jomres.net zvýšite návštevnosť Vašich stránok.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Naše ubytovacie zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Návštevníci môžu rezervovať online');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Aby si návštevníci mohli rezervovať online, nastavte hodnotu ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervácie na fixné obdobie');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Zadajte hodnotu ÁNO, ak chcete rezervácie na fixné obdobie. Ak je hodnota NIE uistite sa, že hodnota poľa "Prednastavený deň príchodu" nieje nastavená na ÁNO (ak nechcete nútiť ľudí k príchodu v určitý deň) - v opačnom prípade nebude kalendár dostupnosti obsahovať dostatočné množstvo možností.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Obdobie rezervácie: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Rezervácia izbieb');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Okraj rezervačnej tabuľky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Zmeniť farbu okraja rezervačnej tabuľky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Pozadie rezervačnej tabuľky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Zmeniť farbu pozadia rezervačnej tabuľky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Šírka rezervačnej tabuľky');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Max. obdobie rezervácie, napr. 3x 7 rezervačných období = 21 dní');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Vyžadovať počet hostí?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Zadajte hodnotu ÁNO, ak chcete zobraziť pole s počtom hostí v rezervačnom formulári.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Je toto apartment/chalupa/vila?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Vhodné pri prenájme celého ubyt. zariadenia, nielen jednotlivých izieb v ňom. V tomto prípade sa uistite, že ubyt. zariadenie má v systéme len jednu izbu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Max. počet dospelých');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Nastavenie max. počtu dospelých v objednávkovom formulári');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Max. počet detí');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Nastavene max. počtu detí v objednávkovom formulári. Ak je nastavená 0, žiaden element viazaný na počet detí sa nezobrazí.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Pokračovať');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Revízia rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potvrdenie rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Zľavy');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>UPOZORNENIE</FONT></h1><BR><B>Na aktualizáciu súboru site_config.php musíte nastaviť práva na 777</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','pondelok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','utorok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','streda');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','štvrtok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','piatok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','sobota');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','nedeľa');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','po');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','ut');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','st');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','št');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','pi');
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
define('_JOMRES_COM_A_AVLCAL','Kalendár dostupnosti');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Typ písma textu');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Veľkosť písma textu');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Výška bunky');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Šírka bunky');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Farba písma dnešného dátumu');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Farba písma dní v mesiaci');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Farba pásma dní mimo zobrazený mesiac');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Farba pozadia bunky dní, keď je ubyt. zariadenie/izba volné(á)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Farba pozadia bunky dní mimo zobrazený mesiac');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Farba pozadia buniek obsadených dní');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Farba pozadia pre predbežné rezervácie (bez záloh)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Farba pozadia buniek dní v minulosti');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Farebná schéma:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Obsadené');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Voľné');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Predbežná rezervácia');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Prednastavený deň príchodu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Len pre webstránky ponúkajúce fixné obdobie rezervácií. Zadajte požadovaný počiatočný deň fixného obdobia.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fixný deň príchodu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Dĺžka pobytu (dni)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Zobraziť kalendáre dostupnosti?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Ak chcete zobraziť kalendár dostupnosti, nastavte hodnotu ÁNO, ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Potvrdiť výber');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Obsadenosť');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Nevyhnutné kroky: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Revidovať vybrané dátumy');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Revidovať počet hostí');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Poskytnúť osobné detaily');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Vybrať si');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Revidovať vybrané izby');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Revidovať objednávku. Ak je všetko v poriadku, potvrdiť rezerváciu.');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Na zobrazenie objednávkového formulára kliknite na voľný dátum.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Čierne rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Bez čiernych rezervácií');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nové čierne rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Zakázať rezerváciu týchto izieb');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Odstrániť hosťa');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Hosť odstránený');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Hosta alebolo možné odstrániť kvôli existujúcej rezervácií. Stornujte rezerváciu a skúste znovu.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Správa týždenného zobrazenia CP');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Nastavte hodnotu ÁNO, ak chcete používať týždenné zobrazenie CP namiesto mesačného.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Aktuálna cena izby: ');

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
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Dobrý deň');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Ďakujeme za rezerváciu v');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Nasleduje zhrnutie rezervácie:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Ak máte akékoľvek otázky týkajúce sa  rezervácie, alebo iných služieb, neváhajte a kontaktujte nás.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Naše telefónne číslo je');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Prípadne nás kontaktujte emailom');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Fajčiar? ');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Ľubovoľné');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Formát výstupu kalendára');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Umožňuje užívateľovi meniť formát výstupu kalendára Jomres.');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Formát vtupu kalendára');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Umožňuje užívateľovi meniť vstupný formát kalendára Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Obdobie fixných rezervácií s krátkými prestávkami');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Dĺžka prestávok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publikované');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Nastavenie');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Používať paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Používať Paypal sandbox?');
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
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Poznámka: Na použitie PayPalu musíte ísť do svojho PayPal účtu a aktivovať Autoreturn (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Chyba, email PayPal alebol nastavený');


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
define('_JOMRES_MR_AUDIT_LISTING_DATE','Dátum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Čas');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Uživateľ (username)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Činnosť');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Ubyt. zariadenie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Zobraziť detaily');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS','Oprávnenie ubyt. zariadení');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Ľubovoľné</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Podľa dátumu');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Podľa užívateľa');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Podľa činnosti');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Stav');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Nevybavené príchody');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Dnešné príchody');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktuálni hostia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Dnešné odchody');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Neskoré odchody');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Problém! Neskorý príchod');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filter');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Neznámy užívatel');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Vytvor. izba');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Aktualiz. izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Odstrán. izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Vytvor. vybavenie izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Aktualiz. vybavenia izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Odstrán. vybavenia izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Vytvor. typ izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Aktualiz. typ izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Odstrán. typ izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Vytvorenie ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Aktualizácia ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Odstránenie ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Vytvorenie vybavenia ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Aktualizácia vybavenia ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Odstránenie vybavenia ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Úprava nastavenia ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Zverejnenie ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Vytvorený cenník');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Aktualiz. cenník');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Odstránený cenník');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Vytvorený sviatok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Aktualiz. sviatok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Odstránený sviatok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Pridaná cena služieb');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Stornovaná rezervácia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Ubytovaný hosť');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Odhlásený hosť');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Aktualiz. detail CC');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Zadaná záloha');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Vytvorený hosť');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Aktualiz. hosť');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Odstránený hosť');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Upload nového obrázku ubyt. zariadenia.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Upload iného obrázku ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Odstránený obrázok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Upload nového obrázku izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Upload iného obrázku izby');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Upload nového obrázku rsrc');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Uploaded iného obrázku rsrc');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Rezervovaná izba');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Vytvorený doplnok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Aktualiz. doplnok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Odstránený doplnok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publikovaný doplnok');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Vložená čierna rezervácia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Odstránená čierna rezervácia');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Doplnky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Upraviť doplnky');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Popis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Názov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Nový doplnok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Na upravenie textu doplnku kliknite na odkaz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Doplnok vložený');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Doplnok aktualizovaný');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Upraviť položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Klonovať položku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Odstrániť doplnok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Doplnok odstránený');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Správa doplnkov');


/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Zobraziť doplnok počas rezervácie?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Ak chcete počas rezervácie zobraziť doplnok, zadajte hodnotu ÁNO');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Voliteľné doplnky ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Vybrať toto ubyt. zariadenie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Invertovať výber/vybrať všetky');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Počiatočný dátum čiernej rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Konečný dátum čiernej rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Čierne rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Jedna alebo viac izieb je už rezervovaných. Pred vykonaním čiernej rezervácie najprv odstráňte tieto rezervácie.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Počas rezervácie došlo k chybe, jedna alebo viacej izieb niesu voľné');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Izby zahrnuté v čiernej rezervácií');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Odstrániť čiernu rezerváciu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Zobraziť čierne rezervácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Žiadne čierne rezervácie');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Počet hvezdiček');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Zobraziť fajčiarske?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Na zobrazenie fajčiarskych priestorov nastavte ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Reset');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Vaša platba cez PayPal nieje zatiaľ nevykonaná. Akonáhle bude hotel môct potvrdiť jej príjem, stav rezervácie bude zmenený na potvrdený.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervácia stornovaná');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Hľadajte tu: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES','Hľadať');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Zobraziť PayPal debug info?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Zobraziť názvy izieb?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Na zobrazenie názvu izby nastavte ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Zobraziť typy izieb?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Na zobrazenie názvov izieb nastavte ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Východzia hodnota poľa "Fajčiar"');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Upozornenie: Ak je východzia hodnota "Fajčiar" ÁNO a všetky ponúkané izby sú nefajčiarske, nezobrazia sa žiadne izby.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Symbol meny');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Napr.&amp&euro;&#59; Na zobrazenie meny použite HTML kód podľa danej entity, viac informácií na <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Kód meny');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Napr. SKK. Tento symbol bude použitý v emaile potvrdzujúcom rezerváciu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Kliknite pre daľšie informácie');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Upozornenie... ste prihlásený ako manažér s oprávneniami ku všetkým ubyt. zariadeniam. Toto môže byť príčinou spomalenej funkčnosti niektorých modulov Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Obmedziť predpredaj?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Ak chcete obmedziť predpredajné rezervácie, zvoľte hodnotu ÁNO (a v daľšom poli zadajte počet dní). Ak nastavíte ÁNO a užívateľ skúsi nastaviť viac ako n dní v predstihu, dátum príchodu bude nastavený na dnes');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Dni vymedzené na predpredaje:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>UPOZORNENIE: Nastavenie oboch hodnôt na ÁNO sa nedoporúča, vyberte jednu z ponúknutých daňových schém tak, aby zodpovedala podmienkam Vášho trhu.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Daň');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Daň za izbu');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Vytvorené pre americký trh, kde sa používa daň za izbu. Vyberte buď fixnú, alebo percentuálnu daň (% z ceny izby).');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Fixná daň');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Percentuálna daň');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','DPH');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Pre trhy s DPH.');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','DPH %');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Zálohovať všetky záznamy');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Záznamy zálohované');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Systém zarchivoval auditované záznamy');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Ceny');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Cenník');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Popis cenníku');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Typ izby');
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
define('_JOMRES_FRONT_TARIFFS_PPPN','za osobu a noc - PPPN');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','za noc');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','bez započtania víkendu/ov');
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
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. počet osôb');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. počet osôb');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Prehľad');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Zapnút úpravy?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktuálny text');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nový text');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Aktualizovaný text.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Úprava jaz. nastavenia');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Počet nezarchivovaných záznamov: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Systém obsahuje viac ako 200 aktívnych záznamov a v záujme zachovania výkonu SQL nebudú daľšie záznamy zobrazené. Ak chcete analyzovať auditované údaje, musíte to urobit priamo v záznamoch v SQL tabuľke. Pravideľne zálohujte.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Typ zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Zoznam typov zariadení');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Upraviť typ zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Typ ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Popis typu ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Typ ubyt. zariadenia uložený');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Odstránenie typu ubyt. zariadenia neúspešné. Typ ubyt. zariadenia je priradený k jednému alebo viecerým ubyt. zariadeniam. Pred odstránením je nutné im priradiť iný platný typ ubyt. zariadenia.');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Typ ubyt. zariadenia odstránený');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Chyba, ubyt. zariadenie nemá žiadne izby.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Chyba, ubyt. zariadenie nemá žiadnen cenník.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Chyba, ubyt. zariadenie nemá priradené typy izieb.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Zmena ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Výzva k úhrade');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Vaša PayPal platba bola dokončena a potvrdenie o platbe Vám bolo zaslané emailom. Detaily tranzakcie môžete po prihlásení zistiť na Vašom účte na www.paypal.com. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Žiadne extra služby na naúčtovanie');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Záloha');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Celková suma');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Suma splatná pri rezervácií');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Vyberte požadovaný typ platby počas rezervácie - zálohu alebo plnú sumu.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Počet zobrazených mesiacov v kalendári');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Koľko má byť zobrazených mesiacov v kalendári dostupnosti?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','V mene spoločnosti podpísaný');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Platobné brány');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Zrušiť');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Vyberte izbu/y, ktoré chcete vyradiť z používania a príslušné dátumy. <br>Pokiaľ izba nieje označená, nemôže byť zahrnutá do čiernych rezervácií tak dlho, kým niesú dokončené/zrušené už existujúce rezervácie. <br>Akonáhle ste vybrali adekvátne dátumy, kliknite na modré tlačtko Apply/Vykonať - vykoná sa opätovný dotaz na dostupnosť izieb.');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Zrejme ste boli pre dlhú nečinnosť odhlásení zo systému.</b> Znovu sa prihláste.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Dôvod');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Používať platobné brány?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Ak chcete používať online platobné brány, zadajte hodnotu ÁNO.<b>Upozornenie:</b>Toto nevypína kalkulácie záloh, ktoré prebiehajú počas rezervácie, vypnúť kalkulácie je možné len odstránením elementov záloh priamo v šablónach izieb.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Vyberte preferovanú platobnú metódu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Platobná metóda aktívna?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Upravené nastavenie plug-inu');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Vložené nastavenie plug-inu');
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
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');define('_JOMRES_COM_ENCRYPTION','Šifrovanie');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Použiť mCrypt šifrovanie?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Pokiaľ máte mCrypt v PHP kompilácií, nastavte ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Šifrovací kľúč');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Šifrovací mód');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Šifrovací algoritmus');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Zobrazené kreditné karty');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Aktualizované kreditné karty');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Upraviť kreditnú kartu');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Upraviť veľkosť ikon');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Hodnoty v px x px.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Dávkový upload obrázkov ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Obrázky už existujú');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Prezentácia');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Zobraziť linku k prezentácií?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Zobraziť prezentáciu inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Ak chcete prezentáciu zobraziť inline s detailami ubyt. zariadenia, nastavte ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Plná výška prezentácie');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Výška náhľadu prezentácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Prezentácia');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Prepáčte, k danému ubyt. zariadeniu niesú k dispozícií žiadne obrázky. Na nahratie obrázku použite dávkový upload obrázkov.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Šírka pop-up okna');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Výška pop-up okna');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Umiestnenie obrázku');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Zmeňte len v prípade, že chcete mať obrázky pre účely Jomres inde. Predvolená adresa je \'/images/stories/jomres/\' od hlavného adresára inštalácie Jomres.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Zobraziť linku k cenníkom?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Povoliť pop-up okná?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Ak nastavíte NIE, budú linky otvorené inline namiesto v pop-up oknách. EXPERIMENTÁLNE! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload obrázkov prezentácie');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Na upload obrázkov tohoto ubyt. zariadenia použite formulár. <br/><b>Upozornenie:</b> Akékoľvek obrázky rovnakého názvu budú prepísané novšími. Tento formulár nenahráva obrázky konkrétnych izieb, či záhlavia ubyt. zariadení. Na to slúži sekcia Správa ubyt. zariadení. <br/><b>Poznámka:</b> Nahrané obrázky budú uložené do adresára /images/stories/jomres/*property_uid*. Ak adresár neexistuje, bude vytvorený.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Rôzne');
/**
* @ignore
*/
define('_JOMRES_A','Nastavenia webstránky');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Použiť všeob. vybavenie ubyt. zariadení');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Ak chcete, aby všetky ubyt. zariadenia používali len vybavenie zadané webmasterom, vyberte hodnotu ÁNO.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Na priradenie obrázku k tomuto vybaveniu musíte najskôr nahrať obrázky ubyt. zariadenia do adresára /images/stories/jomres/pfeatures/');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Ikona');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Vyberte požadovaný plug-in vyhľadávania.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Dotazu nezodpovedá žiaden výsledok. Zadajte nové kritériá vyhľadávania.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Ste si istí?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezervovať izbu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezervovať toto ubytovacie zariadenie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','CCV bezpečnostný kód');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Zobraziť ceny inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailné informácie');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Dostupnosť izieb');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Zobraziť ceny');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Zobraziť adresu pod touto linkou');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Zobraziť detailné informácie pod touto linkou');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Zobraziť izby a dostupnosť pod touto linkou');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Zobraziť cenníky pod touto linkou');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Paušál');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Priemery');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Vyberte tarifný model');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Na výpočet cien existujú dva modely - paušálny a priemerový. Ak zvolíte paušálny, ceny a cenníky sú definované jednotlivými obdobiami rezervácie (napr. na rovnaké obdobie ponúkať cenník polpenzie a plnej penzie). Ak zvolíte priemerový systém, ten na rezervované obdobie vyhľadá a spriemeruje všetky dostupné ceny.");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Použiť portál Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Ak chcete používať Jomres v spolu so softwarom portálu Jomres, zadajte hodnotu ÁNO.');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Zobraziť zadáný dátum odchodu?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Ak chcete zakázať zobrazenie poľa dátumu odchodu, zadajte hodnotu NIE. V tomto prípade bude automaticky ako deň odchodu použitý deň následujúci po dni príchodu.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Obmedzenie popisu');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Obmedzenie počtu zobrazených znakov použitých na popis jednotlivých ubytovacích zariadení.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Násobiteľ dennej sadzby');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Umožňuje nastavenie násobiteľa dennej sadzby (užitočné napr. pri zobrazení týždennej ceny)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Šírka pop-up okna prezentácie');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Výška pop-up okna prezentácie');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Aktualizovať');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Na kontrolu dostupnosti kliknite na Aktualizovať');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Použitý formát date()?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Voľba použitého typu dátumu, viac viď -> Nastavte ÁNO ak chcete formátovať dátumy vzhľadom na date() (Pozrite <a href="http://www.php.net/manual/en/function.date.php">TU</a>). Nastavte NIE na použitie strftime() formátovania (Pozrite <a href="http://www.php.net/manual/en/function.strftime.php">TU</a> eg. %b %d %Y )');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Publikovať');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Nepublikovať');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Vyplňte prosím následujúce pole: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Ďakujeme.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Použiť obecné typy izieb');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Ak chcete použiť obecné nastavenia typu izieb nastavené webmasterom pri všetkých izbách, zadajte hodnotu ÁNO. Toto nastavenie je nutné aj v prípade, ak chcete vyhľadávať podľa typu izby.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Na priradenie obrázku k tomuto typu izby, najprv nahrajte požadované obrázky do adresára /images/stories/jomres/rmtypes/. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Zadať farbu okraja chybového poľa');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Zadať farbu pozadia chybového poľa');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Východzia krajina rezervačného formulára');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Použiť nápovedu webstránky?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Ak chcete, aby Jomres nad vyhľadávacím poľom počas vyhľadávania zobrazoval nápovedu, zadajte ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Upraviť texty rezervačnej nápovedy.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Červene zvýraznené položky sú povinné.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Môžu uživatelia registrovať svoje ubytovacie zariadenia?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Ak chcete, aby užívatelia mohli registrovať svoje ubytovacie zariadenia bez kontaktu s administrátorom, zadajte ÁNO.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Uveďte krajinu a región ubyt. zariadenia.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Uveďte všetky detaily Vášho ubyt. zariadenia.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Červene zvýraznené položky sú povinné.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Vytvorené ubyt. zariadenie');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Prepáčte, pred pridaním ubyt. zariadenia sa musíte prihlásiť do systému a nemať ešte vytvorenú žiadne iné.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Vytvorené ubyt. zariadenie: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Užívateľovi: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Účtovať denne?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' za deň');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Zobraziť kalendár od začiatku roku?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Kalendár dostupnosti zobrazuje dátumy od začiatku aktuálneho roku.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Zobraziť detailné info o izbe?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Ak chcete, aby Jomres počas rezervácie nekontroloval dostupnosť izieb a automaticky ich ponúkal, zadajte NIE.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Počet dostupných izieb');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Zadajte počet a typ požadovaných izieb.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Nutné zadať počet');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Naspäť na detaily ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Typy izieb');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Použít metadáta Jomres?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Ak chcete, aby Jomres použil slová z polí popisu ubyt. zariadenia na generovanie metadát, zadajte ÁNO. Slová musia byť oddelené medzerou.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stop slová');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Stop slová sú slová, které <i>nechcete</i> použiť na metadáta.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Daľšie elementy na odstránenie');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Toto sú elementy určené na odstránenie z metadát, napríklad interpunkcia atď.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Početnosť');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Počet opakovaní slov aby boli zahrnuté mezi metadáta.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limit náhodného vyhľadávania');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Zobraziť Google menový prevodník ?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Previesť cenu na:');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Umožniť užívateľom použiť HTML editor?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Na vytvorenie rezervácie použite tento formulár, nápovedu ku každej položke zobrazíte umiestnením kurzoru na ikone "i". Najskôr zadajte dátum príchodu, dátum odchodu a počet hostí, následne vyberte z dostupných izieb. Zadajte akékoľvek zvláštne prianie alebo požiadavku (tzv. doplnok) a vložte Vaše kontaktné údaje. Skontrolujte zadané údaje a odošlite kliknutím na tlačítko, ktoré sa objaví po zadaní nevyhnutných informácií.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Na vytvorenie rezervácie použite tento formulár, nápovedu ku každej položke zobrazíte umiestnením kurzoru na ikone "i". Najskôr zadajte dátum príchodu, dátum odchodu a počet hostí. Zadajte akékoľvek zvláštne prianie alebo požiadavku (tzv. doplnok) a vložte Vaše kontaktné údaje. Skontrolujte zadané údaje a odošlite kliknutím na tlačítko, ktoré sa objaví po zadaní nevyhnutných informácií.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Detaily rezervácie ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Zadajte požadované detaily Vašej rezervácie');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Dostupnosť');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Vyberte požadované izby');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Tu zistíte, či je požadované zariadenie k dispozícií.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Voliteľné doplnky ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Zadajte všetky požadované doplnky, ktoré si prajete zahrnúť do rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY',' za noc');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Vaša adresa ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Zadajte prosím Vaše kontaktné údaje. Okrem čsla mobilného telefónu sú všetky polia povinné.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Voľné izby');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Vybrané izby');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Najbližší možný dátum príchodu: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Za noc:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Spolu:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Doplnky:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','DPH:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Zľava:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Spolu k úhrade:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Hostia');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknutím pridáte izbu medzi vybrané');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknutím odoberiete izbu z vybraných');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Typy hostí');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Typ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Typ zákazníka, napr. deti 5-10 rokov, študent apod.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Poznámky');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Poznámky k danému typu hostí');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maximálny počet hostí daného typu, ktorý môže byť zadaný v rámci rezervácie');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Percentuálne');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Zadané číslo je percentom základnej ceny za izbu. Pokiaľ je vybrané NIE, potom je zadané číslo jednodcho pripočtané/odčtané zo základnej ceny izby.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Pridať inú sadzbu?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Iná sadzba je pričtaná, či odčítaná zo základnej ceny za izbu. Pokiaľ si prajete ju použíť ako zľavu zo základnej ceny izby, zadajte NIE.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Iná sadzba');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Hodnota inej sadzby');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Poradie upravených typov hostí');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Publikovaný typ hostí');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Odstránený typ hostí');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Vytvorený typ hostí');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Aktualizovaný typ hostí');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Aktualizovaný typ hostí');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Zobraziť zoznam izieb v detailnom popise ubyt. zariadenia?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Zobraziť linku na zoznam izieb v detailnom popise ubyt. zariadenia?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Zobraziť <b>iba</b> zoznam dostupných izieb v kalendári?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Ak chcete zakázať zobrazenie záhlavia a detailov ubyt. zariadenia, zadajte hodnotu na ÁNO, kalendár dostupnosti izieb bude viditeľný iba v sekci detailného popisu ubyt. zariadenia. Vhodné len pre uživateľov prenajímajúcich SPRs (single room properties - jednoizbových zariadení) ako sú apartmány, chalupy apod.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS štýl použitý na webstránke');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Minimálny interval Prích-Odch');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimálny interval mezi dátumami príchodu a odchodu v rezervačnom formulári.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Formulár zoznamu izieb zobrazí číslo izby');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Formulár zoznamu izieb zobrazí názov izby');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Formulár zoznamu izieb zobrazí názov cenníku/ceny');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Formulár overLIB zobrazí názov');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Formulár overLIB zobrazí popis');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Formulár overLIB zobrazí cenu/cenník');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Formulár overLIB zobrazí začiatky');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Formulár overLIB zobrazí konce');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Formulár overLIB zobrazí minimá dní');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Formulár overLIB zobrazí maximá dní');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Formulár overLIB zobrazí minimá ľudí');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Formulár overLIB zobrazí maximá ľudí');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Formulár overLIB zobrazí číslo izby');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Formulár overLIB zobrazí názov izby');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Formulár overLIB zobrazí typ izby');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Formulár overLIB zobrazí fajčiarsku izbu');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Formulár overLIB zobrazí prístup pre telesne postihnutých');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Formulár overLIB zobrazí poschodie');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Formulár overlib show zobrazí maximum ľudí na izbu');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Formulár overLIB zobrazí vybavenie izby');

/**
* @ignore
*/
define('_JOMRES_ORDER','Uložiť');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','Napriek tomu, že ste nastavili Jomres na použitie jednoizbového zariadenia (napr. apartment, vila, chalupa), vytvorili ste viac izieb. Toto môže spôsobiť problémy a preto ak chcete využívať Jomres na manažovanie jednoizbového ubyt. zariadenia, odstráňte všetky nadbytočné izby a ponechajte len jedu.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Požadované');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dní do príchodu');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimálny počet dní, ktoré musia ubehnúť pred dátumom príchodu (od "dnes").');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Za noc:');

/**
* @ignore
*/
define('_JOMRES_DTV','Varianty dátumového typu');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Deň týždňa');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Rozsahy dátumov');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Dni pobytu');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Deň týždňa');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Tento deň týždňa');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Výber cenovej triedy.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','V tomto menu vyberiete vlastnú cenovú triedu, ktorú ste vytvorili/stiahli ako samostatný komponent systému Joomla.');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Prednastavený typ hosťa');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Prednastavené číslo prvého typu hosťa; ak používate typy hostí, toto bude východzie číslo nastavené prvému typu hosťa.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Umožniť online rezervácie len registrovaným užívateľom?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Prepáčte, online rezervácia možná len registrovaným užívateľom. Zaregistrovať sa môžete kliknutím sem.');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Farba písma liniek k aktuálnym rezerváciám');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Okraje víkendov');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Vyberte plugin pre kontrolný panel');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Ak máte nainštalované alternatívne plugin-y pre kontrolný panel, môžete si vybrať tu.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Izba rezervovaná');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Čierna rezervácia');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrúhliť zálohu na celé číslo nahor?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Účtovať zálohy?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tarify ako týždenné hodnoty?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Ak chcete uchovávať tarify týždenne, zadajte hodnotu ÁNO. Druhá možnosť je denný cyklus.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Týždenná sadzba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Opakované fixné dátumy príchodu: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Ak sú vybrané fixné dátumy príchodu, dátumy môžu byť zobrazené v zozname.');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Fajčiar - neplatné');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Nesprávny dátum príchodu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Nesprávny dátum odchodu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Rezervácia je príliš krátka, minimálny počet dní mezi príchodom a odchodom je ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Váš interval je ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Neplatný typ hosťa');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Zadajte počet a typ hostí');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Počet požadovaných hostí je nad limitom dostupným v cenníku/ponuke');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Zadali ste viac izieb než je počet hostí, odoberte nadbytočné izby kliknutím na ich názov.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Počet postelí je nižší než počet hostí');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Musíte vybrať viac izieb');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Vyberte izbu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Zadajte krstné meno');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Zadajte priezvisko');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Zadajte číslo domu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Zadajte názov ulice');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Zadajte mesto');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Zadajte región');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Zadajte PSČ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Zadajte krajinu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Zadajte číslo pevnej tel. linky');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Zadajte číslo mobilného telefónu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Zadajte e-mail');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','E-mailová adresa neplatná');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Overenie emailovej domény neúspešné');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Máme voľné miesta!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Žiadne izby neboli vybrané');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Číslo rezervácie');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Súhlas s rezerváciou, farba pozadia poľa správy');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Vypísať premenné šablóny?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Ak chcete vidieť hodnoty DHTML premenných na frontende webu, zadajte ÁNO. Užitočné pri vylaďovaní šablóny.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Hodnota je percento');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Ak chcete použiť hodnotu kalkulácie na jednu osobu ako percento, zadajte ÁNO. Inak bude použitá paušálna suma.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Limit dostupných izieb/cenníkov');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Ak chcete limitovať počet vypísaných dostupných izieb a cenníkov v objednávke, zadajte požadovanú hodnotu. Hodnota 0 zakazuje použitie funkcie limitu a žiadne limity nebudú použité. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Žiadne voľné miesta!');
// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Marža');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Zisková marža ako percento.');


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Zobraziť Jomres admin možnosti ako ikony?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Pokiaľ chcete, aby sa všetky admin linky zobrazovali ako text, zadajte NIE.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Rezervovať: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Všeobecné editovanie?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Pozor na túto funkciu. Ak nastavíte ÁNO, tento mód ovplyvní VŠETKY popisné texty všetkých ubytovacích zariadení v systéme.');

/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Použiť všeobecnú menu?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Ak nastavíte ÁNO, všetky ubytovacie zariadenia budú používať rovnakú menu (napr. & euro ;)');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Symbol všeobecnej meny');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponent skrytý');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Ak nechcete, aby sa modul zobrazoval, nastavte ÁNO.');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super manažér ubytovacích zariadení');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Iba víkendy');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Cenník platí len v prípade, ak ubytovanie zahŕňa aj víkend (piatok alebo sobotu) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Víkendové dni');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Nastavte si víkendové dni. Cenníky, ktoré berú do úvahy víkendy sa budú riadiť týmo výberom pri generovaní zoznamu izieb.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Pred pridaním akýchkoľvek informácií o ubyt. zariadení, zvoľte krajinu');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Pred uploadom obrázkov ubyt. zariadenia, najskôr uložte zmeny');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Ceny od - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','Všetko');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Región');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Vybavenie');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Popis');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Obsadenosť');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Typ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Vyhľadať podľa krajiny');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Vyhľadať podľa regiónu');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Vyhľadať podľa mesta');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Vyhľadať podľa vybavenia.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Vyhľadať');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Vpíšte hľadané slovo do rámika a stlačte tlačítko.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Vyhľadať slovo/slová: ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Uveďte dátumy príchodu a odchodu a stlačte tlačítko. Vyhľadajú sa ubytovacie zariadenia vyhovujúce zadaným kritériám.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','Zoznam ubytovacích zariadení podľa typu zariadenia.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','Zoznam ubytovacích zariadení podľa typu izieb.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Prednastavené');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Názov ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Región ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Mesto ubyt. zariadenia');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Hviezdičky');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Zoznam ubytovacích zariadení');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Popis ubytovacích zariadení - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Rezervačný formulár');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Aktualizujte údaje o adrese');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Kontrola obsadenosti izieb<br/>(Výber izieb bude nastavený)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Kontrola obsadenosti');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Úprava Vášho výberu doplnkov');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Zmena Vášho výberu izieb');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Úprava informácií o Vašej adrese');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Prepáčte, niektoré polia boli vyplnené nesprávne.');
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
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
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
