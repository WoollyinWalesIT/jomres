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
define('_JOMRES_COM_MR_MRARRIVEDESC','Prikaži današnje prijave');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Prikaži današnje odjave');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Prikaži zahtjeve za rezervacijom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Prikaži ostale zahtjeve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Brza rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Prikaži aktivne rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Prikaži profile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Jezici');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Opće postavke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Popusti - postavke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Sobe/Objekti - postavke');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Objekti - postavke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Tarife - postavke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Natrag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Natrag na moju listu rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Postavke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Ucitaj test podatke');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Da');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Ne');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Novo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Nova soba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Nove opcije sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Novi tip sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Novi objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nove opcije objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Novi gost');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Spremi');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Dolazak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Odlazak');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Dodijeli korisniku administratorska prava');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Korisnicko ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Upravo autoriziran');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Osnovni objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Promijeni ovo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Pristupna razina');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Korisnik izmjenjen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Promijeni objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Promijeni pristupnu razinu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Menadžer objekta');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Sve rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nove rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Uredi rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Dolazak/Odlazak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gost');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Soba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Placanje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Prezime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Gost se ocekuje danas. Kliknite ovdje ako je gost stigao');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Bilješke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Posebni zahtjevi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Dodatni zahtjevi se posebno naplacuju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Odrasli');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Djeca');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Poništi rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Korisnicki id');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Broj kuce ili naziv kuce');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Grad');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Poštanski broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefonski broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Broj mobitela');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Opcije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Registracijske tablice automobila');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Gost poništen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Hotel poništen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Odaberite razlog poništavanja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Dani do dolaska');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Troškovi poništenja</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Ne možete poništiti ovu rezervaciju jer je gost vec prijavljen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Polog je placen, nemate više dugovanja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Polog nije placen, imate dugovanja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Polog je placen, dugujete 50% ugovora');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Polog nije placen, dugujete 50% ugovora');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Plog je placen, dugujete 100% ugovora');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Polog nije placen, dugujete 100% ugovora');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Podsjetnik do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Polog nije placen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potvrdi poništenje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervacija poništena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dana do dolaska');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Tip rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Crno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Ime sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Broj sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Kat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Pristup za invalide');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Maksimalni broj osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Opis vrste sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Karakteristike sobe');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&euro;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','Â€');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Pravila tarifiranja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Polog placen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Unesite polog');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Ukupno za platiti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Oznaka pologa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Oznaka placanja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Polog');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Polog spremljen');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Upozorenje...</FONT></h1><BR><B>Morate chmod vašu datoteku na 766 da biste ažurirali jezik</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Brza rezervacija - odaberite tip sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Potvrdni okvir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Broj odraslih osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','	Broj djece');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Obvezna rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternativa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Unesite broj noci koliko želite ostati, ili datum odlaska');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Broj nocenja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Molimo vas unesite vrstu sobe koju tražite, datum dolaska gosta i broj nocenja ili datum odlaska tog gosta. Na kraju, unesite broj odralih osoba i djece koji ce doci zajedno.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Naše sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Kat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Pristup za invalide?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Maksimalni broj osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Karakteristike');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Tip sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Ispricavamo se, naše slobodne sobe ne mogu primiti vaš broj gostiju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Ispricavamo se, objekt nije slobodan u navedenom razdoblju. Molimo vas pogledajte kalendar i provjerite kada je slobodan.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Molim vas odaberite s padajuceg popisa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Odaberi ovog gosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Popis gostiju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">ERROR: Postoji greška u odabiru datuma.<br>Vratite se natrag i ponovno unesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">ERROR: Morate odabrati minimalno jednog gosta da bi ste izvršili rezervaciju.<br>Vratite se natrag i ponovno unesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">ERROR: Raspon datuma je pogrešan.Vratite se natrag i ponovno unesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">ERROR: Niste odabrali vrstu sobe.<br>Vratite se natrag i ponovno unesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">ERROR: Datum rezervacije je istekao ili je danas.<br>Vratite se natrag i ponovno unesite podatke.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Unesite podatke gosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Potvrdite unesene podatke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Uredite podatke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Prezime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Kucni broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Grad');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Poštanski broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Broj telefona');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Broj mobitela');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Broj registracijskih tablica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Broj kreditne kartice');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Datum izdavanja kartice');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Vrijedi do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Kontrolni broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Ime nositelja kartice');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Odaberite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Odaberite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Opis tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Minimalno dana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Maksimalno dana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Minimalni broj osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Maksimalni broj osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Broj nocenja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Cijena po danu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Broj gostiju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Ukupno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Polog');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Barem jedan od dana koje ste odabrali je praznik.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Ispricavamo se, nijedna tarifa ne odgovara kriterijima koje ste naveli. Razmotrit cemo vaš zahtjev. Molimo vas, promijenite broj dana vašeg boravka, ili izravno nazovite i obavite rezervaciju.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Prikaži postavke soba i objekata');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Karakteristike soba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Vrste soba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Karakteristike objekta');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Vrsta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Vrsta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Kat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Pristup za invalidne osobe?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maksimalno osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Karakteristike');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Soba dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Soba izmjenjena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Kliknite na id broj sobe da biste izmijenili mogucnosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Izmijeni opcije');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Karakteristike sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Opis karakteristika');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Kliknite na opciju sobe da biste je izmijenili');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Karakteristika sobe dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Mogucnosti sobe izmijenjene');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Izmijeni mogucnost');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Vrsta sobe - kratica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Vrsta sobe - opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Kliknite uid sobe da bi ste izmijenili stavku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Vrsta sobe dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Vrsta sobe izmijenjena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Izmijeni stavku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Grad');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Županija/Regija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Država');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Poštanski broj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Broj telefona');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Karakteristike');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Kliknite na uid link objekta da biste izmijenili stavku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Objekt dodan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Objekt izmijenjen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Izmijeni stavku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Karakteristike objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Karakteristike objekta - kratica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Karakteristike objekta - puni opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Kliknite na uid link objekta da bi ste izmijenili detalje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Karakteristika objekta je dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Karakteristika objekta je izmijenjena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Izmijeni detalj');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tarifa - naziv');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Vrijedi od');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Vrijedi do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Dnevna tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minimalno dana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maksimalno dana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minimalno osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maksimalno osoba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorirajte PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Dozvoli praznike');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Dozvoli vikende');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Kliknite na link da bi ste izmijenili tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarifa dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarifa izmijenjena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Izmijeni stavku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Kopiraj stavku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Izbriši tarifu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarifa izrisana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Izmijeni tarifu');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Praznici');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Posljednji dan praznika biti ce posljednji dan koji cete naplacivati gostima po tarifama za praznike.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Izmijeni praznike');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Pocetak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Kraj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Novi praznik');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Kliknite na link da biste izmijenili praznike');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Praznik dodan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Praznik izmijenjen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Izmijeni stavku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Kopiraj stavku');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Izbriši praznik');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Praznik izbrisan');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervacija sacuvana');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Molimo vas provjerite jeste li pravilno popunili obrazac.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Samo registrirani korisnici mogu napraviti rezervaciju on-line');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Molim vas registrirajte se');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Off-line rezervacije');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Moji podaci');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Moje rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Administriraj');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Rezerviraj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Prijavi gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Odjavi gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Izlistaj rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NOVE rezervacije');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Radna ploča');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Gosti - uredi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Objekti - uredi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Tarife - uredi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Popusti - uredi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Praznici - uredi');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Molimo vas odaberite vrstu sobe koja vas zanima ,datum dolaska i broj nocenja. Na kraju, unesite broj odraslih osoba i djece.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Molimo vas unesite vaše podatke. Ovo morate napraviti samo jednom, sustav ce zapamtiti vaše podatke za buduće posjete.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Molimo vas odaberite sobu koju želite.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Molim vas unesite vaše podatke. Sva polja su obvezna osim polja za broj mobilnog telefona.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Provjerite dostupnost');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Želim ovu sobu');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Odaberite gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Potvrdite vaše podatke');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Odaberi moj ugovor');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Odaberite vrstu sobe');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Prezime');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Kucni broj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Grad');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Poštanski broj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Broj telefona');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Broj mobitela');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Nema soba koje sadrže sve parametre koje ste vi tražili');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Unesite vaše podatke');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Potvrdite vaše podatke');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Hvala vam što ste nas odabrali i nadamo se da cete uživati u boravku.<br><br> <b>Ovo je samo preliminarna rezervacija, i nece biti potvrdena dok ne primite potvrdno pismo.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Izvršili ste rezervaciju objekta: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Izvršili ste rezervaciju sobe: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Broj odraslih osoba: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Broj djece: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Dolazak: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Odlazak: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Broj nocenja: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Gost Uid: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Ime: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Tel.: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mob.: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Tarifa: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Vrijednost ugovora je: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Polog: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Vaši podaci nisu potpuni. Molimo vas kliknite na link "Moji podaci" i popunite adresu. Hvala.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Hvala, vaši podaci su sacuvani.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Dobrodošli. Prije nego što rezervirate sobu, morate izmijeniti podatke na "Moji podaci" link.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Dobrodošli ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Prijavite gosta ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Odaberite gosta ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gost je prijavljen ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Danas ne dolazi nijedan gost');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Gosti za odjavu ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Odjavljeni gosti ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Potvrdite odjavu gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Nema gostiju za odjavu danas');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Gost dolazi danas');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Gost odlazi danas');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Zauzete sobe');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Nove rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Prikaži iskorištenost sobe:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Doplate');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tarife & Valuta');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Popust');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Nije Implementirano');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload datoteka');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Trenutne postavke');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Objasnjenje');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Rezervacije offline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Postavite rezervacije offline ako ne zelite primati rezervacije.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Sheme popusta dostupne?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Shema popusta je za one koji žele ponuditi gostima raznovrsnu ponudu s obzirom na broj gostiju. Radi pomoću broja osoba , nije preporučeno koristenje ukoliko ne naplaćujete po sustavu osoba/noć.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Razina 1 norma');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Razina 2 norma');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Razina 3 norma');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Razina 4 norma');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Razina 1 popust');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Razina 2 popust');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Razina 3 popust');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Razina 4 popust');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Nadoplata za jednu osobu');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Provjerite je li postavljeno na Da ukoliko želite vršiti nadoplatu za jednu osobu');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Troškovi nadoplate za jednu osobu');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Nadoplata za dječji krevetić');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Provjerite je li postavljeno na Da ako zelite vrsiti nadoplatu za djecji krevetic');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Nadoplata za djecji krevetic');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Polog je izrazen u postotcima?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Je li polog postotak od cijele rezervacije? Ako ne, onda polog mora imati određenu vrijednost');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Vrijednost pologa');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Po gostu za noć');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Odaberite Da ako zelite naplacivati po-osobi-za-noc. Ako ne zelite, onda ce troskovi biti izracunati po po-sobi-za-noc osnovi');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Može li kazna biti otkupljena?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Odaberite Da ukoliko želite da se novac izgubljen zbog otkazivanja rezervacije naplati sljedeći put od gosta. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Datoteka postoji');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Vrste datoteka');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Odaberite koje ćete vrste datoteka dozvoliti da se upload-aju. Koristite mala slova i zarez bez razmaka. Npr.: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Veličina datoteke');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maksimalna velicina slike u kilobajtima');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Rezerviraj za cijeli tjedan počevši od danas');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Kliknite na rezerviranu sobu da biste vidjeli rezervaciju');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','ili unesite datum za koji ste zainteresirani');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Rezervirano');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Slobodno');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Sobe sa plavom pozadinom su rezervirane, no<br> ukoliko soba ima crveni tekst, to znaci da za tu sobu nije uplacen polog.<br> Ako se na sobi nalazi zvjezdica preko "Rezervirano" znaci da se dolazak gosta ocekuje danas.<br> Ako soba ima zuti text, onda je gost zauzeo tu sobu.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Potvrdno pismo');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Postovani ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cijena soba/noc ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detalji rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Hvala vam na rezervaciji');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. U nastavku se nalaze detalji vase rezervacije. Molimo vas provjerite jesu podaci ispravni i kontaktirajte nas ukoliko postoji pogreska.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Vasa soba ce biti sacuvana do vaseg prijavljivanja, prijavljivanja su nakon 2 sata poslijepodne.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Ocekujemo vas dolazak ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Zelimo vam ugodan boravak.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Napomena.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Podsjećamo vas da je rezervacija legalni ugovor, pa ukoliko ste zbog nečega poništili rezervaciju ili skratili vas boravak morat ćete i dalje platiti cijeli iznos vašeg ugovora.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Nije predviđen nikakav povrat novca za dane koje niste boravili u sobi, ni za obroke koje niste iskoristili.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>	Troškovi poništenja ili smanjenja trajanja boravka:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dana ili više');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Samo polog.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dana');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% ugovora.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Do 14 dana');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% ugovora.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','PDV 22% je ukljucen u cijenu.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Ispis potvrdnog pisma');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Ispis predracuna');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Postovani ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Cijena po nocenju - po osobi ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Broj nocenja: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Ugovor je potvrdjen od: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cijena po nocenju: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Ukupno');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Detalji predracuna');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Hvala vam na');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Zelimo vam ugodan boravak.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','PDV 22% je uracunat u cijenu.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Ispisi predracun');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Dodaj uslugu na racun');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis usluge');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Cijena usluge');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Dodaj na racun');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Ostale stavke za naplatu');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Ostale stavke za naplatu, ukupno: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Stavke dodate na racun');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Hotel nije pronadjen</h1><br>Ne mozete nastaviti. Kontaktirajte vaseg administratora site-a.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Odaberite sliku koju cete dodati u attachmentu');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Upload slike');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Upload');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Datoteka Upload-ana');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Vasa datoteka moze biti vrste - max. velicine');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Dodajte novu datoteku za Upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Mozete upload-ati samo ovu vrstu datoteka:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Molimo vas odaberite datoteku prije upload-anja');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Ime datoteke mora sadrzavati samo alfanumericke karaktere i ne smije imati razmak.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Velicina datoteke je presla maksimum koji Administrator dozvoljava.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Datoteka s ovim imenom vec postoji. Molimo vas promijenite ime datoteke prije upload-a.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Vase datoteke su upload-ane.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Datoteka NIJE upload-ana.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Vasa datoteka je upload-ana.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Odluciti se za mrezu jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','If you choose to opt this property into the jomres network, then it will be listed at jomres.net. Please note, it will be assumed that this is a live hotel. Jomres.net cannot be held responsible for your property. You must ensure that your details are correct.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Kalendar');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Kalendar datoteka jezik');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Oadberite datoteku vaseg jezika koji zelite koristiti u Javascript kalendaru. Neki od kalendara mogu imati pogresne podatke, pogledajte http://sourceforge.net/tracker/?group_id=75569&atid=544287 za vise informacija');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS Kalendar CSS datoteka');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Odaberite CSS datoteku koju cete koristiti u Javascript kalendaru');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Provjerite praznike?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Ako ste odabrali ovu opciju sa Da, onda ste odvojili tarife za praznike i ostale dane. Odaberite Ne ako imate iste tarife za praznike i ostale dane.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Ostalo');
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
define('_JOMRES_FILE_DELETE','Izbriši ovu sliku');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Datoteka izbrisana');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Prikazi polje za unos prilikom odjave');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Postavite ovu opciju na Da ako zelite prikazati polje za odjavu. Moguce je da neki browseri ne podrzavaju javascript kalendar.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Odaberite objekt cije informacije o dostupnosti soba zelite prikazati');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Bilo koji');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Soba');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Objekt');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Prikazi sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Postavite opciju na Da ako zelite da se vidi SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Prikazi sql rezultate');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Postavite ovu opciju na Da ako zelite vidjeti SQL podatke i var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Odaberite vas predlozak');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','ID gumbova na vrhu css');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','ID tablice zaglavlja css');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Predlozak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Izbrisi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nije moguce izbrisati ovu sobu, postoje rezervacije za nju. Ponistite rezervacije pa pokusajte ponovo.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Soba je izbrisana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Izbrisite karakteristike sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nemoguce ukloniti karakteristike ove sobe, dodijeljena je nekim sobama. Uklonite karakteristiku sa tih soba i pokusajte ponovno.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Karakteristika sobe izbrisana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Izbrisi karakteristiku objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nije mogucee ukloniti karakteristiku ovog objekta, dodijeljena je nekom objektu. Uklonite karakteristiku sa tih objekata i pokusajte ponovno.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Karakteristika objekta je izbrisana');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Izbrisi vrstu sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Nije moguce uklonite vrstu sobe, dodijeljena je nekoj sobi. Promijenite tip sobe i pokusajte ponovno.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Nije moguce ukloniti vrstu sobe, dodijeljena je tarifa. Promijenite tarifu te sobe i pokusajte ponovno.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Vrsta sobe izbrisana');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Izbrisi objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Nije moguce izbrisati objekt, sadrzi podatke u tablici: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Objekt izbrisan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nemate prava da izbrisete ovaj objekat.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Odaberite ovaj objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','S kojim objektom ce ova soba biti povezana?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Odaberite objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Morate odabrati objekt');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Sirina male slicice');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Sirina srednje slicice');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Sirina velike slike');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Kliknite za mapu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Broj prijava');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Aktivnosti u zoni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Upute za vozace');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Zracne luke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Ostali prijevoz');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Police i objasnjenja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Vas Jomres.net property key');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Nasi objekti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Posjetitelji mogu rezervirati online');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Postavite opciju na Da ukoliko zelite da posjetitelji rezerviraju sobe online.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervacije su za odredeno razdoblje');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Postavite na Da, i rezervacije će se obavljati samo za određeno razdoblje. Ukoliko je postavljeno na Ne, onda "zadani dan za dolazak" neće biti postavljen na Da (ukoliko želite da gosti dođu na određeni dan) u suprotnom nećete imati dovoljno linkova koji su slobodni u kalendaru.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Razdoblje rezervacije: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Rezervirane sobe');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Okvir tablice za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Promijeni boju okvira tablice za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Pozadina tablice za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Promijenite boju pozadine tablice za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Širina tablice za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maksimalno razdoblje, npr. 3x7 rezervacijskih razdoblja = 21 dan');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Potreban je broj gostiju');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Postavite ovu opciju na Da ukoliko želite prikazati polje za unos broja gostiju prilikom rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Je li je ovo apartman/ljetnjikovac/vila?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Ukoliko iznajmljujete cijeli objekt/apartman a ne odvojeno sobe, onda ćete imati registriranu po jednu sobu za svaki objekt.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Maksimalan broj odraslih osoba');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Odredite maksimalan broj odraslih osoba u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Maksimalan broj djece');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Odredite maksimalan broj djece u obrascu za rezervaciju. Ako je postavljeno na nulu, dropdown polje se nece prikazivati.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Nastavite');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Prikaži rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potvrdi rezervaciju');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Popust');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Upozorenje...</FONT></h1><BR><B>Morate chmod vašu datoteku site_config.php na 777 ako želite mijenjati vaše postavke</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Ponedjeljak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Utorak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Srijeda');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Četvrtak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Petak');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Subota');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Nedjelja');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Pon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Uto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Sri');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Čet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sub');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Ned');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Popunjenost');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Font za sve tekstove');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Veličina fonta za sve tekstove');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Visina polja');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Širina polja');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Boja fonta za trenutni datum');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Boja fonta za dane u prikazanom mjesecu ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Boja fonta za dane koji nisu u prikazanom mjesecu');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Boja polja za dane kada je objekat/soba dostupna');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Boja polja za dane koji nijesu prikazani u mjesecu');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Boja polja za zauzete dane');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Boja polja za privremeno rezervirane sobe (rezervacije za koje uzet polog)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Boja polja za datume u prošlosti');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Šifra boje:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Zauzeto/Nije dostupno');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Dostupno' );
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Privremena rezervacija');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Određeni dan dolaska');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Samo za web stranice koje koriste predodređno razdoblje rezervacije. Odaberite dan kada gosti moraju doći.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Određeni dan dolaska');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Trajanje boravka');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Prikazati kalendar popunjenosti?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Postavite ovu opciju na Da ukoliko želite prikazeti kalendar popunjenosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Potvrdite vaš odabir');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Popunjenost');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Stvari koje morate uraditi: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Provjerite odabrane dane ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Provjerite broj gostiju ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Unesite vaše podatke');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Odaberite');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Provjerite sobu koju ste odabrali');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Provjerite vašu rezervaciju. Ako ste zadovoljni, potvrdite vašu rezervaciju');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Kliknite na slobodni datum ukoliko želite otvoriti obrazac za rezervaciju.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Crne rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Nema crnih rezervacija');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nove crne rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Odradite crnu rezervaciju za sljedeće sobe');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Izbrišite gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gost izbrisan');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Nije moguće izbrisati gosta, ima aktivne rezervacije. Poništite rezervacije te pokušajte ponovno.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Admin panel prikazuje tape view');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Postavite na Da ukoiko želite koristiti tjedni tape view, kao zamjenu za mjesečni kalendar popunjenosti.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Cijena odabrane sobe: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Email nije važeći');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Ovo je email primljen od');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Zdravo');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Zahvaljujemo vam se sto ste odradili rezervaciju sa');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Vaša rezervacija sadrži sljedeće:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Ukoliko imate pitanja, kontaktirajte nas');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Naš broj telefona je');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Možete nas kontaktirati na email');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Pušač');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Bilo koji");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Format prikaza kalendara');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Ovdje možete promijeniti format prikaza kalendara');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Format unosa datuma');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Ovdje možete promijeniti format unosa datuma.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Određeno razdoblje rezervacija dozvoljava kratke prekide');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Trajanje kratkog prekida');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Objavljeno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Postavke');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Koristite paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Koristite Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Zahtijeva PayPal Developer Account');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Vaš paypal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Obavijest: Da biste mogli koristili paypal morate u vašim paypal postavkama dozvoliti Autoreturn. (Profile/Website Payment Preferences) Postavite Auto Return: On, Postavite Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Pogreška, paypal email nije postavljen');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Nema audit trail');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Vrijeme');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Korisnik (username)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operacija');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Prava pristupa');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Prikaži detalje');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Bilo koji</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter na datum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtriraj korisničko ime');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtriraj operaciju');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Stanje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Dolazak se očekuje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Dolazi danas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Trenutni Rezident');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Polasci danas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Rok za polazak istekao');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Nije stigao');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filtriraj');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Nepoznati korisnik');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Soba kreirana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Soba izmijenjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Izbrisana soba');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Karakteristika sobe stvorena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Izmijenjena karakteristika sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Izbrisana karakteristika sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Unesena vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Izmijenjena vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Izbrisana vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Unesen objekt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Izmijenjen objekt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Izbrisan objekt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Kreirana karakteristika objekta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Izmijenjena karakteristika objekta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Izbrisana karakteristika objekta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Izmijenjene podestavke objekta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Objavljeni objekti');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Unesene tarife');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Izmijenjene tarife');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Izbrisane tarife');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Uneseni praznici');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Izmijenjeni praznici');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Izbrisani praznici');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Nadoplata za uslugu');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Poništena rezervacija');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Prijavljan gost');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Odjavljen gost');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Izmijenjeni cc detalji');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Unesen polog');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Kreiran gost');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Izmijenjen gost');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Izbrisan gost');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Upload-ana nova slika objekta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Upload-ana druga slika objekta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Izbrisana slika');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Upload-ana nova slika sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Upload-ane ostale slike sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Upload-ana nova slika resursa');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Upload-ane ostale slike resursa');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Rezervirana soba');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Dodatna usluga kreirana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Dodatana usluga izmijenjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Dodatana usluga izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Dodatana usluga objavljena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Unesena crna rezervacija.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Izbrisana crna rezervacija.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Dodatne usluge');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Izmijeni dodatnu uslugu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Cijena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Nova dodatna usluga');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Kliknite na Uredi da biste izmijenili dodatanu uslugu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Dodatana usluga unesena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Dodatana usluga izmijenjena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Uredi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Kopiraj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Izbriši dodatnu uslugu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Dodatna usluga izbrisana');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Postavke dodatnih usluga');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Prikaži dodatne usluge za vrijeme rezervacije?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Postavite opciju na Da ukoliko želite prikazati gostu dodatne usluge');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Dodatne usluge.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Odaberi ovaj objekt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Različiti odabir/odaberi sve');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Početni datum crne rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Datum nastavka servisa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Crne rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Jedna ili više soba koje ste odabrali već su rezervirane. Ukoliko želite napraviti za njih Crnu rezervaciju morate prvo poništiti ostale rezervacije.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Nije moguće nastaviti rezervaciju, jedna ili više soba koje ste odabrali nije slobodna.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Sobe uključene u crnu rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Izbriši crnu rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Prikaži crne rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nema crnih rezervacija');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Broj zvjezdica');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Prikazati opciju za pušače?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Postaviti opciju na Da ukoliko je želite prikazati.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Poništi');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Vaš status plaćanja sa paypal je postavljen na U čekanju. Kada primimo potvrdu vaše uplate, rezervacije će biti postavljena na Potvrđeno.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervacija poništena');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Traži ovdje za:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Traži ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Prikazi paypal debugging info?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Prikaži imena soba?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Postavite na Da ukoliko želite prikazati imena soba');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Prikaži vrste soba?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Postavite na Da ukoliko želite prikazati vrste soba?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Default opcija za pusace');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Upozorenje: Ukoliko ste postavili opciju na Da i ukoliko su sve vaše sobe za nepušače, u tom slučaju nijedna vaša soba neće biti prikazana tijekom rezervacije.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Oznaka valute');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','PR &amp;pound&#59; Morate koristiti HTML kod za traženu oznaku valute. Za popis ovih kodova posjetite <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Kod valute');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Pr EUR. Ovaj kod će se koristiti u email-u gostu koji mora potvrdizi svoju rezervaciju.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Info');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Upozorenje...Logirani ste kao manager s mogućnošću pristupa svim objektima. Upozoravamo vas da su mogući problemi prilikom funkcioniranja programa.</FONT>'); 
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ogranici rezervacije unaprijed?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Postavite opciju na Da ako zelite da ogranicite rezervacije (koristite sledece polje da postavite ogranicenje u danima). Ako postavite opciju na Da i ako gost pokusa da rezervise vise od n dana unaprijed onda ce njegov dan dolaska biti postavljen za danas');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Dani za rezervaciju unaprijed ograniceni na:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>OBAVJESTENJE: Ne predlaze se da postavite obje opcije na Da, trebate da koristite jednu od dvije opcije za obracun vase taxe. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Taksa');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Taksa Sobe');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Dizajnirano za americki standard. Sadrzi takse za sobe koje se naplacuju gostu. Mozete naplacivati kombinaciju ili fiksiranu vrijednost. Oe takse se odnose samo na sobe.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Fiksna vrijednost takse');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Procenat takse');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Taksa');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Predvidjeno za trzista koja podrzavaju blanket rate, pr. PDV dodat na cijenu. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Prosjek takse');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Spremi sve zapise');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' zapisi sacuvani');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer je sacuvao zapise');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Ime Tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Opis Tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Dostupna od');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Dostupna do');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Po osobi po noćenju');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Po noćenju');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Ne uključujući vikende');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dana');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maksimum dana');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min osoba');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max osoba');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Prikaz');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Izmjene uključene?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Tekući tekst');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Novi tekst');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Tekst je izmijenjen.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Izmijeni jezik');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Broj zapisa koji nisu spremljeni: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Postoji više od 200 aktivinih zapisa, te nije moguće prikazati SQL aktivnosti. Ako zelite analizirati SQL, morate ići izravno u audit tabele.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Vrsta objekta');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Prikaži vrste objekata');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Izmijeni vrste objekata');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Vrsta objekta');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Opis vrste objekta');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Vrsta objekta spremljena');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Nije moguće izbrisati vrstu objekta. Vrsta objekta je dodijeljena jednom ili više objekata, napravite izmjene i pokušajte ponovno');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Vsrte objekata izbrisane');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Pogreška, objekt nema soba.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Pogreška, objekt nema tarifa.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Pogreška, objekt nema vrste soba.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Promijeni objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Podsjetnik za plaćanje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Vaša paypal transakcija je izvršena, uskoro ćete dobiti potvrdu narudžbe na Vaš email. Prijavite se u Vaš Paypal korisnički račun da biste vidjeli detalje transakcije. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Ne postoje dodatne usluge koje terete Vaš račun');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Polog');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Puni iznos');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Iznos naplaćen tijekom rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Uredite ovdje postavke naplate tijekom rezervacije. Možete naplaćivati samo polog, ili puni iznos.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Mjeseci za prikaz');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Koliko će se mjeseci prikazivati na kalendaru s obzirom na dostupnost sobe?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Potpisano na ime ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Poništi');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Molimo Vas odaberite sobu/e koje ne želite da se koriste, i potrebne datume. <br>Ukoliko soba nema oznaku, ne može biti korištena za crne rezervacije dok neka od rezervacija ne bude otkazana ili završena.<br/> Kada odaberete tražene datume, kliknite na plavo dugme "apply" da provjerite dostupnost sobe. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Odjavljeni ste zbog neaktivnosti</b> Molimo vas, prijavite se ponovo.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Razlog');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Koristi payment gateway?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Postavite ovu opciju na Da ukoliko želite koristiti online payment gateways. <b>Obavijest:</b>Ovo ne iskljucuje polog izracunavanje prilikom rezervacije. Da isklucite ovo vi mozete izmeniti template koji prikazuju sobe i uklanjuju elemente koji se odnose na polog.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Molimo Vas odaberite način plaćanja.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway uključen?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Izmijenjene postavke plugin-a');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Unesene postavke plugin-a');
/**
* @ignore
*/
define('_JOMRES_FRONT_GALLERYLINK','Prikaži slike objekta');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK','Poveznica na galeriju');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK_DESC','Postavite link na vaš foto album za ovaj objekt. Biti će prikazan na stranici za opis objekta, kada se popuni.');
/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Enkripcija');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Koristite mCrypt enkripciju?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Postavite ovu opciju na Da ukoliko želite da se mCrypt kompilira u PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Enkripcijski ključ');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Način enkripcije');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Algoritam enkripcije');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Prikazana kreditna kartica');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Izmijenjena kreditna kartica');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Izmijeni kreditnu karticu');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Izmijeni veličinu ikone');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Mjereno u pixels square.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Slike objekta');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Slike su već u direktoriju');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Prikaži poveznicu za slideshow?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Prikaži slideshow u okviru?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Postavite na Da ukoliko želite da se slideshow prikazuje uz podatke objekta.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Slideshow puna visina');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail visina');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Ne postoje slike ovog objekta. Molimo Vas unesite slike koristeći upload opciju ukoliko želite prikazati slideshow.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Popup širina prozora');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Popup visina prozora');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Lokacija slike');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Promijenite samo ukoliko želite da slika bude negdje drugdje. Default je \'/images/stories/jomres/\' u odnosu na joomla root.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Prikaži link za tarife?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Popup dozvoljen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Ukoliko je postavljeno na Ne, poveznice koje su se otvarale kao pop-up sada će se otvarati u istom prozoru. EXPERIMENTAL! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow slike');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Koristite ovaj obrazac ukoliko želite upload-ati više slika objekta.<br/><b>Obavijest</b> slike sa istim imenima ce biti prekopirane. Ovim načinom ne možete unijeti slike za sobe ili header sliku objekta, to možete napraviti klikom na "Objekti-uredi".<br/><b>Obavijest</b> Slike uploado-ane ovdje biti će spremljene u /images/stories/jomres/*property_uid* folder.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Ostalo');
/**
* @ignore
*/
define('_JOMRES_A','Postavke website-a');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Koristi globalne postavke objekta');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Postavite na Da ukoliko želite da svi objekti koriste samo karakteristike objekta /**
* @ignore
*/
defined by the webmaster.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Da biste dodijelili sliku ovoj karakteristici morate prvo upload-ati slike vaših karakteristika objekta u /images/stories/jomres/pfeatures/ folder. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Ikona');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Odaberite pretraživač.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Nije pronađen nijedan rezultat koji odgovara vašim parametrima pretraživanja. Molimo promijenite parametre i pokušajte ponovo.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Jeste li sigurni?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezerviraj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezerviraj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Sigurnosni broj');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Prikaži tarife?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detalji');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknite za sobe i dostupnost');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Prikaži informacije o tarifama');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Prikaži informaciju o Adresi ispod ove poveznice');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Prikaži detalje o objektu ispod ove poveznice');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Prikaži sobe i dostupnost ispod ove poveznice');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Prikaži informacije o tarifama ispod ovepoveznice');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flat rate tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Srednje');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Odaberite vrstu naplate koju želite koristiti');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Postoje dvije vrste naplate. Prva, 'flat rate' vrsta vam omogućava ponudu raznih tarifa gostima i cijena je jednaka tijekom cijelog boravka. Odaberite ovu opciju ako želite ponuditi više različitih tarifa za isti dan, npr. (Spavanje i doručak, Tarifa večere..). Odaberite 'srednje' tarife ukoliko želite postaviti cijene s obzirom na datum. Sustav će pronaći sve tarife za svaki dan u rezervacijama, sastaviti zajedno i vratiti srednju vrijednost za zadano razdoblje");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Uključiti Jomres portal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Postavite na Da ako cete Jomres koristiti sa Jomres portalom');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Prikaži datum odlaska?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Postavite na Ne ako ne želite prikazati polje sa datumom odlaska. Ovo koristite samo ako ste sigurni što radite, datum odlaska u rezervacijama će pisati dan nakon dolaska.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Opis ograničen');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Ovdje ograničavate broj karaktera prikazanih u opisu objekata.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Dnevna stopa rasta');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Ovo dozvoljava korisniku da računa dane koje je rezervirao (korisno ako želite prikazati cijene objekata po tjednu)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Slideshow popup širina');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Slideshow popup visina');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Ažuriraj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Kliknite na Ažuriraj da biste provjerili dostupnost');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Koristite datum() format?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Postavite na Da ako želite da se datum ispisuje kao date() (Pogledajte <a href="http://www.php.net/manual/en/function.date.php">ovdje</a>). Postavite na Ne ako želite da koristite strftime() formatiranje (pogledajte <a href="http://www.php.net/manual/en/function.strftime.php">ovdje</a> pr. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Objavi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Nemoj objaviti');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Molimo vas popunite sljedeća polja: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Hvala.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Odaberite glavnu vrstu sobe');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Postavite na Da ukoliko želite koristiti ovu vrstu sobe za sve objekte/**
* @ignore
*/
defined by the webmaster. Postavite na Da ukoliko želite dozvoliti pretragu soba po vrsti sobe.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Da biste dodali sliku ovoj vrsti sobe morate prvo upload-ati sliku u /images/stories/jomres/rmtypes/ folder. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Input greska - boja granica');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Greška tijekom unosa boje pozadine');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Default država u formi za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Koristiti site pomoć?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Postavite na Da ukoliko zelite da Jomres prikaže pomoć iznad search modula.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Izmijenite ovdje sitehelp tekst.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Poljai označena sa crvenom zvjezdicom su obvezna.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Korisnici mogu registrirati svoje objekte?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Postavite na Da ukoliko želite da korisnici mogu registrirati svoje objekte bez dozvole administratora web stranice.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Molimo vas odaberite državu i županiju/regiju u kojoj se nalazi vaš objekt.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Molimo vas popunite detalje o vašem objektu.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Polja označena zvjezdicom su obavezna.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Kreirani objekti');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Morate biti registrirani korisnik da biste oglasili vaš objekt. Registrirajte se ili napravite Login");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Kreirani objekti: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Za korisnika: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Naplaćujte po danu?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Po danu');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Prikaži kalendar od početka godine?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Kalendar dostupnosti se prikazuje od početka tekuće godine.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Prikaži detaljne informacije o sobama?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Ako postavite ovu opciju na Ne, Jomres nece pokusavati da prikaze tekuce rezervacije, umjesto toga pretpostavice da dostupnost postoji.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Broj slobodnih soba');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Molimo vas unesite broj i vrstu soba koje želite.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Potreban je broj');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Natrag na detalje objekta');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Vrste soba');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Koristiti Jomres metadata?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Ukoliko postavite na Da, Jomres će koristiti tekst koji se ponavlja u opisu objekata i soba. Odvojite riječi razmakom.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Zaustavite riječi');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Postoje stop riječi koje ne želite da se pojavljuju u meta data.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Ostali elementi koje želite poništiti');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Postoje elementi koje je potrebno poništiti iz meta data. Primjer mogu biti simboli i ostalo.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Učestalost');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Koliko se puta riječ mora ponoviti prije nego se uključi u meta data.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Ograničenje nasumične pretrage');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Prikaži link google pretvaranja valuta u listu tarifa?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Pretvori tarifu u :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Dozvoli korisnicima uređivanje pomoću html editora?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Koristite ovaj obrazac da biste prijavili rezervaciju. Pređite mišom preko "i" i vidjet ćete ostale informacije. Unesite tražene informacije (dan dolaska, odlaska, broj gostiju..) te odaberite sobu/e koje želite sa liste dostupnih. Kliknite željenu sobu da biste je uključili u rezervaciju. Kada završite, ukoliko želite možete dodati na listu dodatne usluge. Kada popunite potrebna polja kliknite na Potvrdi rezervaciju.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Koristite ovu formu da biste prijavili rezervaciju. Pređite mišom preko "i" za više informacija. Unesite tražene informacije (dan dolaska, odlaska, broj gostiju..) te odaberite sobu/e koje želite sa liste dostupnih. Kliknite željenu sobu da biste je uključili u rezervaciju. Kada završite, ukoliko želite možete dodati na listu dodatne usluge. Kada popunite potrebna polja kliknite na Potvrdi rezervaciju.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Detalji rezervacije');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Odaberite detalje vaše rezervacije');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Dostupnost ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Odaberite sobe koje želite');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Pogledajte ovdje je li je objekt slobodan za traženo razdoblje.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Dodatne usluge');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Odaberite dodatne usluge koje želite dodati u rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Po noćenju');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Vaši detalji');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Molimo vas unesite vaše detalje. Sva polja su obvezna.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Dostupne sobe');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Odabrane sobe');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Najbliži datum dolaska je: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Po noćenju:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Ukupno:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Dodatne usluge:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Taksa:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Popust:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Ukupno:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gosti');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknite da biste dodali sobu u vašu narudžbu');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknite da biste poništili sobu iz vaše narudžbe');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Vrste gostiju');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Vrsta');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Vrsta gosta, npr. djeca do 12 godina, studenti... ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Bilješke');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Bilješke o vrsti gostiju');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maksimum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksimalan broj gostiju ove vrste koji se može odabrati prilikom rezervacije');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','U postotcima');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Izračunata vrijednost je postotak osnovne vrijednosti izračunate za sobu. Ukoliko ste izabrali Ne onda će se vrijednost koju ste vi odredili dodati ili odbiti od cijene sobe.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Dodati neslaganje?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Izračunata vrijednost je dodana ili oduzeta od osnovne cijene sobe. Postavite opciju na Ne ukoliko želite da ovo bude popust na osnovnu cijenu. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Varijance');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Iznos varijance');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Lista gostiju je izmijenjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Vrsta gosta objavljena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Vrsta gosta izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Vrsta gosta kreirana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Vrsta gosta izmijenjena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Vrsta gosta izmijenjena');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Prikaži popis soba objekta na stranici detalja objekta?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Prikaži link na popis soba na stranici detalja objekta?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Prikaži <b>samo</b> Kalendar dostupnosti/Popis soba?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Postavite na Da ukoliko želite prikazati header i detalje objekta, tako da je u okviru detalja objekta vidljiv samo popis soba/kalendar dostupnostiu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS Style koji se koristi na web stranici');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Dolazak-Odlazak minimalni razmak');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimalni razmak u obrascu za rezervaciju između dana dolaska i odlaska.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Prikaži broj sobe u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Prikaži ime sobe u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Prikaži naziv tarife u obrascu za rezervaciju');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Prikaži naziv u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Prikaži opis u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Prikaži stopu/tarifu u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Prikaži početak u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Prikaži kraj u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Prikaži minimum dana u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Prikaži maksimum dana u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Prikaži minimum osoba u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Prikaži maksimum osoba u obrascu za rezervaciju');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Prikaži broj sobe u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Prikaži ime sobe u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Prikaži vrstu sobe u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Prikaži dobe za pušače u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Prikaži sobe sa pristupom za invalidne osobe u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Prikaži kat sobe u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Prikaži maksimalni broj osoba po sobi u obrascu za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Prikaži karakteristike sobe u obrascu za rezervaciju');

/**
* @ignore
*/
define('_JOMRES_ORDER','Poredak');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','Postavili ste sustav na SRP (npr. apartman, vila, kuća), te istodobno kreirali više od jedne sobe. Ovo može dovesti do grešaka prilikom korištenja sustava. Ukoliko želite nastaviti sa SRP načinom rada, poništite sve sobe osim jedne.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Obvezno');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dana do dolaska');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimum dana koji moraju proći od današnjeg dana do dana dolaska.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Po noćenju:');

/**
* @ignore
*/
define('_JOMRES_DTV','Varijacije vrste datuma');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Dan u tjednu');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Raspon datuma');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Duljina boravka');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Dan u tjednu');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Dan u tjednu');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Odabir razreda tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Ovaj dropdown meni dozvoljava vam da odaberete određeni razred tarife koji ste kreirali/downloadovali i instalirali kao posebnu komponentu. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Zadana vrsta gosta');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Zadani broj prve vrste gosta je 1. Ukoliko koristite vrste gostiju, onda je ovo broj koji će se pojavljivati za prvu vrstu gostiju u obrascu za prijavu.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Samo registrirani korisnici mogu rezervirati online?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Morate biti registrirani korisnik da biste napravili rezervaciju online. Kliknite ovdje za registraciju. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Boja fonta za linkove trenutnih rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Vikend ograničenja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Koji plugin za radnu ploču koristite');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Ukoliko imate instaliran Jomres dashboard plugin možete odabrati alternativu ovdje.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Soba je rezervirana');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Crna rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokružite polog na najbližu vrijednost?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Naplaćuj polog?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Naplaćuj tarife po tjednu?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Ovdje možete postaviti razlicite tarifa po dnevnoj ili tjednoj vrijednosti. Ukoliko koristite tjednu, postavite na Da.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cijena po tjednu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Potreban je određeni datum dolaska: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Kada je određeni datum odabran, datum može biti prikazan kao dropdown lista');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opcija za pušače nije važeća');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Netočan datum dolaska');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Netočan datum odlaska');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Prekratna duljina boravka. Mora biti najmanje ovoliko dana između dana dolaska i odlaska :');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Vaš razmak je:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Netočna vrsta gosta');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Odaberite broj i vrstu gostiju');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Imate previše dozvoljenih tarifa');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Odabrali ste više soba nego što imate gostiju, kliknite na ime sobe da biste je uklonili sa liste');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Previše gostiju u odnosu na broj slobodnih kreveta');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Morate odabrati više soba');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Odaberi sobu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Ime je obvezno');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Prezime je obvezno');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','OKućni broj ili ime kuće obvezno');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Ulica je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Grad je obvezan');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Županija/Regija je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Poštanski broj je obvezan');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Država je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Broj telefona je obvezan');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Broj mobitela je obvezan');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email adresa je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email adresa nije važeća');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Email adresa nije odobrena');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Imamo mjesta!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Niste odabrali nijednu sobu');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Broj rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Rezervacija je u redu');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Izbrisati template varijable?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Izaberite ovo da biste omogucili DHTML dump predložak varijablu za svaki FRONTEND predložak datoteku. Ovo je korisno ukoliko želite provjeriti mogu li se određeni dijelovi koristiti za određeni predložak.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Izračunati postotak');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Izaberite Da ukoliko računate po osobi u postotku. Ukoliko ste odabrali Ne biti će primijenjeno kao flat vrijednost.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Dozvoljeni limit sobe/tarife');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Ovim mozete da odaberete limit na broj soba slobodnih i tarifa koje su izlistane u formi za rezervaciju. Postavite na nulu ako ne zelite ogranicenje. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Trenutno nema slobodnih soba!');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Margina');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Marginalni profit u postotku.');




// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Prikaži administracijske postavke kao ikone?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Postavi na ne ukoliko želite da se administracijski linkovi prikažu kao tekst.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Rezerviraj sada: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Budite oprezni s ovom funkcijom. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Simbol oznake valute');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Samo vikendi');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tariff only valid if stay period includes a weekend day (friday or saturday) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Vikend dani');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Odaberite zemlju u kojoj se nalazi vaš objekt prije nego što nastavite s unosom ostalih podataka');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Spremite izmjene prije upload-anja slike objekta');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Cijene od - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','Odaberi sve');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Županija/Regija');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Karakteristike');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Opis');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Dostupnost');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Vrsta');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Država');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Županija/Regija');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Grad');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Traži prema karakteristici.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Traži');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Upišite riječ koju tražite i pritisnite dugme.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Traži riječ/i): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Molimo vas upišite datum vašeg dolaska i odlaska, te kliknite na Traži da biste dobili popis slobodnih objekata u traženom razdoblju');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','Prikaži prema vrsti.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','Prikaži prema vrsti sobe.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Zadano');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Županija/Regija');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Grad');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Zvjezdice');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Popis objekata');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Info - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Obrazac za rezervaciju');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Ažuriraj adresu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Provjeri ponovo dostupnost sobe<br/>(Room selection will be reset)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Provjeri ponovo dostupnost');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Uredi dodatne usluge');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Promijeni odabir sobe');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Ažuriraj adresu');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Jedno ili više polja je netočno.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Slika sobe');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Oznaka valute');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Prikaži postavke menadžera kao slike');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Postavke pretraživanja');
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
define('JOMRES_COM_A_MESSAGE','Poruka');
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
define('JOMRES_COM_A_TARIFFMODE','Način postavki tarife');
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
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Prikaži popis soba na stranici sa podacima objekta?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Vrsta objekta');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','Samo SRP');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Maksimalan broj osoba po sobi');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Maksimalan broj osoba po rezervaciji');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Dodaj bilješku');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Uredi bilješku');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Izbriši bilješku');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','Pogledaj bilješke');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Dodaj novu bilješku');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Uređene bilješke');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','Moje postavke');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','Niste prijavljeni. Registrirajte se ili logirajte da biste vidjeli informacije o rezervaciji.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Izlistaj rezervacije');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','Moje rezervacije');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','Prikaži rezervacije za koje nije plaćen polog');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','Prikaži rezervacije');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Prikaži Omiljene');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Niste dodali još ništa u Omiljene!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Dodaj u Omiljene');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Vrsta objekta');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Objekti na web stranici');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise cijena');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Aktivno');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Ovaj plugin omogućava da postavite i uredite cijenu vaše sobe dinamično');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (broj dana između datuma dolaska i današnjeg dana)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Postotak zauzetih soba < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Postotak zauzetih soba < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Postotak zauzetih soba < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Postotak zauzetih soba < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Popust %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Vrsta sobe ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' popust s ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' na ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Cijena sobe bez popusta ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google mape API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Nije moguće dopiti google karte API ključ od <ahref="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Upišite google mape ključ ovdje i tada će se vaše karte prikazivati ispravno');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Koristiti SSL u obrascu za rezervaciju?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','Provjerite imate li valjani SSL certifikat za ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Maksimalni broj ljudi koje objekt može primiti');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktiviraj?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Postavite na Da ukoliko želite aktivirati Last minute ponude.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Ukoliko je rezervacija napravljena i dan dolaska je N dana od dana rezervacije, onda se popust može primijeniti');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Popust');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','U postotcima');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Popust je primijenjen u ovoj rezervaciji!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Troškovi boravka su smanjeni za');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Ovaj objekt nudi last minute popust od');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' posto ukoliko rezervirate prije');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' posto ili više ukoliko rezervirate prije ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Iskoristite ponudu i rezervirajte sada!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','Ovaj objekt nudi last minute popust od ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' posto ukoliko rezervirate prije ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Iskoristite ponudu i rezervirajte sada!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tarifa info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Postavite ovo na Da za prikaz detaljnijih informacija tarifa na stranici detalja objekta/popup tarife');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Smanjite ko');
/**
* @ignore
*/

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Ispravite rezervacije - Odabir objekta');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Odaberi novi objekt');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Originalni ugovor:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Polog plaćen');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Polog nije plaćen');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override ukupno');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override polog');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Poništi');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Postavke');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Zadana vrijednost provizije');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Odaberite zadanu proviziju koja će se primijeniti za objekte u slučaju da nije postavljena nikakva druga provizija.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','Prikaži provizije');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Provizije');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Naslov');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Vrsta');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Provizija');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Oznaka valute');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Izlistaj objekte');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Ime objekta');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Adresa objekta');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Objekti sa crvenom pozadinom su objekti za koje još nije primijenjena provizija');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','Broj licence');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Vaš broj licence za portal plugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistika');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistika za: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Razdoblje: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Objekti - Klikovi');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Prikaz objekta');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','Siječanj');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','Veljača');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','Ožujak');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','Travanj');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','Svibanj');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','Lipanj');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','Srpanj');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','Kolovoz');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','Rujan');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','Listopad');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','Studeni');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','Prosinac');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Broj rezervacija');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Vrijednost rezervacija');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Iskorištenost sobe');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Procjena provizije');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Provizija');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Izlistaj rezervacije');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','ID objekta');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','ID gosta');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Id računa');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Rezervacija ukupno');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','ID ugovora');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Broj ugovora');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Kod valute');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Kreirano');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Arhivirano');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Datum arhiviran');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Dodaj objekt');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Podrijetlo : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Je li ovo nekretnina sa više soba?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Je li ova nekretnina hotel/bed and breakfast/pansion? Ako je, odaberite DA. Ukoliko se radi o  single room nekretnini poput a villa/kuća/apartman odaberite NE.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Dodaj stavku na račun');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Menadžer to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Pridruženi objekti(ukoliko je primjenjivo)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Vrijednost');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Opis');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Stavka je uspješno dodana na Vaš račun ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Prikaži narudžbe");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Neuspješno dodavanje stavke na račun ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Greška, niste postavili vrijednost za račun");
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
define('_JOMRES_COM_JOMRESEMAILCHECK',"Koristi Jomres email address checker? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Ukupno smještaj");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"noć/i na");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"po sobi ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Obogatite Vaš boravak Ukupno ");
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
define('_JOMRES_CONFIRMATION_AMEND',"Izmijeni rezervaciju");
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
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Vrh");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Dno");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Oboje");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"po osobi za noć ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Zadana datoteka za jezik");
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
	define('_PN_PAGE','Stranica');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','of');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Početak');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prethodna');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Dalje');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','Kraj');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Display #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Rezultati');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Kontaktiraj');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Pošalji');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nova slika');

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
define('_JOMRES_AVLCAL_NOBOOKINGS',"Dostupno"); 
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
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Po tjednu');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Po danu');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Po rezervaciji');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Po osobi za rezervaciju');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Po osobi za dan');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Po osobi za tjedan');
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
define('_JOMRES_SEARCH_PRICERANGES','Traži prema cijeni');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Spremam...');
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
define('_JOMRES_PHRASE_PROCESSING','Molimo vas pričekajte, vaša narudžba se obrađuje ...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Niste napravili nijednu rezervaciju dosad');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Vrsta objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Uredi vrstu objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Odaberi vrstu objekta');
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
define('_JOMRES_COM_LOGGING_SYSTEM','Sustav (misc log) ');
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
