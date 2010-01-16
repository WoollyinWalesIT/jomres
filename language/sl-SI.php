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
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Prikaži današnje prihode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Prikaži današnje odhode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Prikaži zahtevke za rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Prikaži druge zahtevke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Hitra rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Seznam aktivnih rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Prikaži profile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Jeziki');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Splošne nastavitve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Nastavitve popustov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Nastavitve sob/objektov');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Nastavitve objektov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Nastavitve tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Nazaj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Nazaj na seznam rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Nastavitve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Naloži vzorčne podatke');

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
define('_JOMRES_COM_MR_NEWTARIFF','Nova');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Nova soba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Nova lastnost sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Nova vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Nov objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nova lastnost objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Nov gost');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Shrani');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Prihod');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Odhod');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Določite upraviteljske funkcije uporabnika');
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
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Ime uporabnika');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Trenutna pooblastila');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Privzeti objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Spremeni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Raven dostopa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Uporabniško spremenjeno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','Ne velja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Spremeni objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Spremeni raven dostopa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Upravitelj objekta');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Vse rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nove rezervaciji (neplačan polog)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Uredi rezervacijo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Prih/Odh');
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
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Plačilo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Priimek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Gost prispe danes. Kliknite, če je že prispel.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Opombe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Posebne zahteve');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Upoštevajte, da je za nekatere posebne zahteve potrebno doplačilo.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Odrasli');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Otroci');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Preklic rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Uporabniški ID spletne strani');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Hišna številka ali ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Kraj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Pošta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilni telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Št. faksa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-naslov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Izbira');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Registracija avtomobila');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Preklic stranke');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Preklic hotela');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Izberite vzrok preklica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Dni do prihoda');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Stroški Preklica</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Rezervacije ni mogoče preklicati, ker je stranka že prijavljena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Polog doplačan, doplačilo ni potrebno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Polog ni plačan, potrebno je doplačilo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Polog plačan, plačilo je 50% skupnega zneska');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Polog ni plačan, plačilo je 50% skupnega zneska');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Polog plačan, plačilo je 100% skupnega zneska');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Polog ni plačan, plačilo je 100% skupnega zneska');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Preostali znesek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Polog ni plačan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potrdite preklic');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervacija preklicana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dni do prihoda');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Vrsta rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Potrjena');
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
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Soba');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Nadstropje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Dostop za invalide na voljo?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Največ oseb');
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
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Seznam lastnosti sobe');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&funt;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','£');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Tarifna pravila');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Polog plačan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Vpišite polog');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Skupno za plačilo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Oznaka pologa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Oznaka plačila');
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
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Polog shranjen');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Pozor ...</FONT></h1><BR><B>Jezikovno datoteko morate nastaviti z ukazom chmod 766, da bo jezik osvežen</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Vrste sob za hitro rezervacijo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Potrditveno polje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Število odraslih');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Število otrok');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Dodatno ležišče?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Druga možnost');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Vpišite število nočitev ALI datum odhoda gosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Število nočitev');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Izberite zahtevano vrsto sobe, datum prihoda gosta in število nočitev ali datum odhoda. Vpišite število odraslih in otrok v skupini.');

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
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Številka');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Nadstropje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Dostop za invalide?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Najv. oseb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Podrobnosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Žal v sobah, ki so na voljo, ne moremo namestiti tega števila gostov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Žal objekt v tem obdobju ne more ponuditi nastanitve. Prosimo, vrnite se na koledar in ponovno preverite zasedenost.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Izberite s seznama');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Izberi tega gosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Seznam gostov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">NAPAKA: Napaka v izbiri datumov.<br>Pritisnite gumb Nazaj in ponovno vnesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">NAPAKA: Za rezervacijo je potreben vsaj en gost.<br>Pritisnite gumb Nazaj in ponovno vnesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">NAPAKA: Izbrani razpon datumov je neveljaven.<br>Pritisnite gumb Nazaj in ponovno vnesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">NAPAKA: Niste izbrali vrste sobe.<br>Pritisnite gumb Nazaj in ponovno vnesite podatke.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">NAPAKA: Datum rezervacije je potekel ali pa je današnji.<br>Pritisnite gumb Nazaj in ponovno vnesite podatke.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Vnos podatkov gosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Potrditev podatkov gosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Urejanje podatkov gosta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Priimek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Hišna št.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Kraj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Pošta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobilni telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Faks');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','E-naslov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Reg. št.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Št. kred. kartice');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Datum izdaje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Datum veljavnosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Št. izdaje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Ime na kartici');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Izberite možnost');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Izbira');
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
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Najm. dni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Najv. dni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Najm. oseb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Najv. oseb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Število nočitev');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Dnevna tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Število gostov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Skupaj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Polog');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Vsaj en od datumov sovpada s turistično sezono.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Žal ni tarif za izbrane pogoje. Ne skrbite, morda je potrebna le manjša prilagoditev vaših zahtev. Poskusite znova in spremenite število nočitev ali pa poskusite z rezeracijo po telefonu.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Pokaži nastavitve sob in objektov');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Lastnosti sob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Vrste sob');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Lastnosti objekta');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Soba');
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
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Številka');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Nadstropje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Dostop za invalide?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Najv. oseb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Lastnosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Soba dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Soba osvežena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Za urejanje kliknite na uid povezavo sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Uredi predmet');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Lastnosti sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Opis lastnosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Za urejanje kliknite na povezavo lastnosti sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Lastnost sobe dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Lastnost sobe osvežena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Uredi predmet');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Okrajšava vrste sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Opis vrste sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Za urejanje kliknite na povezavo razreda sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Vrsta sobe dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Vrsta sobe osvežena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Uredi predmet');

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
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Kraj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Regija');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Država');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Pošta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Faks');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-naslov');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Spletna stran');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Lastnosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Za urejanje kliknite na uid povezavo objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Objekt dodan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Objekt osvežen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Uredi predmet');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Lastnosti objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Okrajšava lastnosti objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Poln opis lastnosti objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Za urejanje kliknite na uid povezavo lastnosti objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Lastnost objekta dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Lastnost objekta osvežena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Uredi predmet');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Naziv tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Veljavna od');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Veljavna do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Tafifa na noč');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Najm. dni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Najv. dni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Najm. oseb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Najv. oseb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Prezri PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Dovoli čas počitnic');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Dovoli konce tedna');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Za urejanje tarife kliknite na povezavo urejanja besedila');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarifa dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarifa osvežena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Uredi predmet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Preslikaj predmet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Izbriši tarifo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarifa izbrisana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Uredi tarifo');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Počitniško odbobje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Zadnji dan turistične sezone naj bo zadnja noč, ki jo gostu zaračunate po tarifi turistične sezone.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Uredi turistično sezono');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Opis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Začetek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Konec');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Nova turistična sezona');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Za urejanje turistične sezone kliknite na povezavo urejanja besedila');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Turistična sezona dodana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Turistična sezona osvežena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Uredi predmet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Preslikaj predmet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Izbriši turistično sezono');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Turistična sezona izbrisana');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervacija shranjena');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Preverite, ali je obrazec parvilno izpolnjen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Rezervacije prek spleta so mogoče le za registrirane uporabnike');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Prosimo, registrirajte se');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Rezervacije niso povezane');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Moje podrobnosti');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Moje rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Upravljanje');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Rezervacija sobe');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Prijava gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Odjava gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Seznam rezervacij');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NOVE rezervacije');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Nadzorna plošča');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Upravljanje gostov');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Upravljanje objektov');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Upravljanje tarif');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Upravljanje popustov');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Upravljanje počitniških obdobij');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Izberite želeno vrsto sobe, datum prihoda in število nočitev. Vpišite še število odraslih in otrok v skupini.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Vpišite svoje podatke. Vnos je potreben le enkrat, ker se podatki shranijo tudi za vaše prihodnje obiske.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Izberite želeno sobo.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Vpišite svoje podatke. Obvezna so vsa polja, razen številke mobilnega telefona.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Preveri razpoložljivost');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Želim to sobo');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Izberite gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Potrdite svoje podatke');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Izbira tarife');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Izberite vrste sob');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Ime');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Priimek');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Hišna št..');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Kraj');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Pošta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilni telefon');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Faks');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Ni sob, ki bi ustrezale zahtevanim pogojem');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Vpišite svoje podatke');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Potrdite svoje podatke');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Zahvaljujemo se vam za rezervacijo in upamo, da bo vaše bivanje prijetno.<br><br> <b>Upoštevajte, da je rezervacija le predhodna in bo potrjena šele s pisnim potrdilom, ki ga prejmete od nas.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezervacija ustvarjena za objekt: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezervacija ustvarjena za sobo: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Število odraslih: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Število otrok: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Prihod: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Odhod: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Število nočitev: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Uid gosta: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Ime: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobilni telefon: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Tarifa: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Skupna vrednost bivanja je: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Potrebni polog: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Pred obdelavo rezervacije morate osvežiti svoje podatke. Prosimo, zgoraj kliknite na "Moji podatki" in vnesite svoj naslov. Hvala!');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Hvala, vaši podatki so shranjeni.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Pozdravljeni! Preden lahko rezervirate sobo, morate osvežiti svoje podatke v povezavi "Moji podatki".');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Dobrodošli nazaj');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Prijava gosta ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Izbira gosta ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gost prijavljen ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Danes ne bo novih gostov');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Odjava gosta ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Gost odjavljen ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Potrdite odjavo gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Noben od gostov ne oddide danes');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Gostje pridejo danes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Gostje odidejo danes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Sobe zasedene');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Nove rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Poglej zasedenost sobe od:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Doplačila');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tarife in valute');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Popusti');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Politika preklicov.  SE NE IZVAJA');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Nalaganje datotek');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Trenutna nastavitev');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Pojasnilo');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Avtorske pravice Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Rezervacije niso povezane?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Če ne želite sprejemati rezervacij, lahko prekinete povezavo.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Je sistem popustov na voljo?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Sistem popustov, ki omogoča dajanje popusta na število oseb v skupini. Glede na to, da deluje na podlagi števila oseb, ga uporabljajte, le če računate po osebi.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Prag 1. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Prag 2. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Prag 3. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Prag 4. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Vrednost popusta 1. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Vrednost popusta 2. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Vrednost popusta 3. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Vrednost popusta 4. nivoja');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Doplačila za eno osebo');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Če želite obračunavati doplačila za eno osebo, izberite Da');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Vrednost doplačila za eno osebo');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Doplačilo za pomožno ležišče.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Če želite obračunavati doplačila za pomožna ležišča, izberite Da');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Vrednost doplačila za pomožno ležiščo');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Je zahtevani polog odstotna vrednost?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Je zahtevani polog odstotek skupne vrednosti rezervacije? Če ni, vnesite vrednost pologa');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Vrednost zahtevanega pologa');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Na osebo, na noč');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Izberite Da, če želite polog obračunati na osebo na noč. Če tega ne želite, bo vrednost obračunana na sobo na noč');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Povračilo ob odpovedi?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Izberite Da, če želite stranki ob odpovedi rezervacije omogočiti povračilo, ki ga lahko uporabi v prihodnje. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Datoteka obstaja');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Vrste datotek');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Določite, katere za datoteke je nalaganje dovoljeno. Seznam naj bo napisan z malimi črkami, vrste naj bodo ločene z vejicami. Primer: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Velikost datoteke');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Največja velikost slike v kilobajtih');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Kliknite, če želite izbrati tedensko uporabo sobe, ki se začne z današnjim dnem');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Če si želite ogledati rezervacijo, kliknite na rezervirano sobo');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','ali izberite datum, ki vas zanima');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Rezervirano');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Prosto');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Sobe z modrim ozadjem so rezervirane, vendar če <br> je besedilo sobe rdeče, polog ni bil plačan.<br> Če je ob oznaki "Rezervirano" zvezdica, to pomeni, da gost prispe danes.<br> Če je besedilo sobe rumeno, gost trenutno biva v sobi.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Potrditveno pismo');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Spoštovani ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena na noč - na sobo ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Podrobnosti rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Hvala za rezervacijo pri');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Spodaj je povzetek podrobnosti rezervacije. Prosimo, preverite, ali so vaši podatki pravilni in nam sporočite morebitne napake.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Sobo vam bomo prihranili do vašega prihoda, prijava pa je ob 14h.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Veselimo se že, da vas bomo pričakali v ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Upamo, da bo vaše bivanje prijetno.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Opozoriti vam moramo na drobni tisk.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Upoštevajte, da je rezervacija pravno zavezujoča pogodba, zato ste obvezani, da kljub morebitni odpovedi ali preklicu plačate poln znesek.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','V obdobju rezervacije ne veljajo povračila za obroke in nočitve, ki jih ne izkoristite. Zaradi tega vam priporočamo, da uporabite možnost zavarovanja počitnic.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Stroški preklica ali skrajšanja</i> Če prekličete dopust, mora biti preklic v pisni obliki. Stroški preklica so naslednji:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dni ali več');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Le polog.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dni');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% celotne vrednosti.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Dan prihoda do 14 dni');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% celotne vrednosti.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','DDV@ 20% je vključen v vseh tarifah. Kakršno koli zvišanje ali sprememba bo obračunano.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Natisni potrditveno pismo');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Izpis računa');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Spoštovani ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Cena na noč - na sobo ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Število nočitev: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Pogodba sklenjena: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena na noč: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Skupaj');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Podrobnosti računa');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Zahvaljujemo se vam za obisk');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Upamo, da nas boste znova obiskali.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','DDV@ 20% je vključen v vseh tarifah. Kakršno koli zvišanje ali sprememba bo obračunano.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Natisni račun');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Računu dodaj storitev');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis storitve');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Vrednost storitve');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Dodaj računu');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Drugi predmeti računa');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Drugi predmeti računa, skupaj: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Predmet dodan računu');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Privzeti hotel ni bil najden</h1><br>Nadaljevanje ni mogoče. Obrnite se na upravitelja spletne strani.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Izberite datoteko slike, ki jo želite pripeti');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Naloži sliko');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Naloži');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Nalaganje datoteke');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Datoteka je lahko vrste - najv. velikost');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Izberite novo datoteko za nalaganje');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Nalagate lahko le datoteke vrst:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Pred nalaganjem izberite datoteko');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Ime datoteke lahko vsebuje le črke in številke brez presledkov.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Velikost datoteke presega omejitev, ki jo je določil upravitelj.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Datoteka s tem imenom že obstaja. Pred nalaganjem datoteke spremenite ime.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Datoteka je bila naložena.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Datoteka NI bila naložena.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Datoteka je bila naložena.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Prijava v omrežje jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Če izberete prijavo tega objekta, bo objekt izpisan na jomres.net. Upoštevajte, da bo obravnavan kot aktiven hotel. Jomres.net ne odgovarja za vaš objekt. Poskrbite, da bodo vaši podatki pravilni.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','Koledar Javascript');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','Jezikovna datoteka koledarja Javascript');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Izberite jezikovno datoteko za koledar Javascript. Upoštevajte, da so nekateri koledarji drugačni. Več informacij poiščite na http://sourceforge.net/tracker/?group_id=75569&atid=544287');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','CSS datoteka koledarja Javascript');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Izberite CSS datoteko koledarja Javascript');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Preverim čas turistične sezone?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Če izberete Da, morate nastaviti različni tarifi za turistično sezono in navadno obdobje. Če izberete Ne, je tarifa za vsa obdobja enaka.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Razno');
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
define('_JOMRES_FILE_DELETE','Izbrišem sliko?');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Datoteka izbrisana');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Pokaži polje za vnos odhoda');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Če izberete Da, bo prikazano polje odhoda. Opozorjen sem bil, da nekateri brskalniki niso združljivi s koledarji Javascript. Sam polje to izključim, ker kvari videz strani.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Izberite objekt, za katerega želite prikazati zasedenost sob.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Katerikoli');
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
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Prikaži sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Vključite, če želite prikazati SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Prikaži rezultate sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Če izberete to možnost, bodo prikazani podatki SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Izberite paket predlog');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','Identifikacija css id vrhnjih gumbov');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Identifikacija css id glav tabel');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Predloge');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Izbriši');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Sobe ni mogoče izbrisati, ker ima rezervacije. Prekličite rezervacije in poskusite znova.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Soba izbrisana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Izbriši lastnost sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Lastnosti sobe ni mogoče izbrisati, ker je določena več sobam. Izbrišite lastnost za vse sobe.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Lastnost sobe izbrisana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Izbriši lastnost objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Lastnosti objekta ni mogoče izbrisati, ker je določena objektu. Izbrišite lastnost za ta objekt in poskusite znova.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Lastnost objekta izbrisana');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Izbriši vrsto sobe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Vrste sobe ni mogoče izbrisati, ker je določena eni od sob. Sobi določite drugo vrsto in poskusite znova.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Vrste sobe ni mogoče izbrisati, ker ima določeno tarifo. Tarifo določite za drugo vrsto sobe in poskusite znova.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Vrsta sobe izbrisana');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Izbriši objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Objekta ni mogoče izbrisati, ker ima vnos v tabeli: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Objekt izbrisan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nimate ustreznih pravic za brisanje objekta.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Izberi ta objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','S katerim objektom bo povezana soba?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Izberite objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Morate izbrati objekt');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Širina male predstavitvene sličice');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Širina srednje predstavitvene sličice');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Širina cele slike');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Kliknite za zemljevid');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis objekta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Preveri za obdobje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Dejavnosti na tem območju');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Napotki za vožnjo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Letališča');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Drugi prevozi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Politika in izjave');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Vaš lastniški ključ Jomres.net');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Ko bo vaša spletna stran pripravljena za objavo na spletu, obiščite <a href="http://www.jomres.net" target="_blank">Jomres.net</a>, kjer prejmete lastniški ključ. S tem ključem bomo vaš objekt registrirali na omrežju Jomres, s čimer vam bomo zagotovili predstavitev največjemu številu morebitnih strank.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Naši objekti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Naslov');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Obiskovalci lahko rezervacijo opravijo na spletu');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Izberite Da, če želite ponuditi možnost spletnih rezervacij.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervacije veljajo za določeno obdobje');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Če izberete "Da", bodo rezervacije veljale za določeno obdobje. Če izberete "Ne", poskrbite, da "Prednastavljen dan prihoda" ni nastavljen na "Da" (razen če želite, da bi gostje prihajali na točno določen datum), saj v nasprotnem primeru ne bo veliko zadetkov v koledarju razpoložljivosti.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Obdobje rezervacije: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Sobe rezervacije');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Obroba tabele rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Spremenite barvo obrobe tabele rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Ozadje tabele rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Spremenite barvo ozadja tabele rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Širina tabele rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Najdaljše obdobje, npr. 3 x 7 rezervacijskih obdobij = 21 dni');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Zahtevano število gostov?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Če izberete Da, bo na obrazcu za rezervacije prikazono polje števila gostov.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Gre za apartma/kočo/vilo?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','V primeru, da v najem dajete objekt in ne posameznih sob, If this is the case, poskrbite, da bo za vsak objekt registrirana le ena soba.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Največje mogoče število odraslih oseb');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Določite največje mogoče število odraslih oseb v rezervacijskem obrazcu.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Največje mogoče število otrok');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Določite največje mogoče število otrok v rezervacijskem obrazcu. Če izberete vrednost nič, podatkovna polja za otroke ne bodo prikazana.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Naprej');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Pregled rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potrditev rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Popusti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Pozor ...</FONT></h1><BR><B>Nastavitev chmod datoteke jomres_config.php morate spremeniti v 777, če želite spreminjati nastavitve.</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Ponedeljek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Torek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Sreda');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Četrtek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Petek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sobota');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Nedelja');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Po');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','To');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Sr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Če');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pe');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','So');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Ne');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Razpoložljivost kap.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Skupina pisav za vsa besedila');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Velikost pisave za vsa besedila');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Višina polja');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Širina polja');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Barva pisave trenutnega datuma');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Barva pisave dni prikazanega meseca');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Barva pisave dni, ki niso v prikazanem mesecu');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Barva ozadja polja za dni, ko je objekt/soba na voljo');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Barva ozadja polja za dni, ki niso v prikazanem mesecu');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Barva ozadja polja za zasedene dni');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Barva ozadja polja za začasno rezervirane sobe (rezervacije, za katere polog še ni bil plačan)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Barva ozadja polja za pretekle dni');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Barvni ključ:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Zasedeno/Ni na voljo');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Prosto za rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Začasne rezervacije');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Prednastavljeni da prihoda');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Le za strani, ki nudijo v naprej določena obdobja rezervacij. Izberite dan, s katerim se začnejo prihodi.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Določen dan prihoda');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Obdobje bivanja (dni)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Prikaz koledarja razpoložljivosti?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Izberite Da, če želite prikazati koledar razpoložljivosti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Potrdite izbiro');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Razpoložljivost');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Kaj morate storiti: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Preveriti izbrane datume ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Preveriti število gostov ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Vnesti osebne podatke');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Označiti svojo izbiro');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Preveriti izbrano sobo');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Preveriti naročilo. Če so podatki pravilni, potrdite rezervacijo');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Če si želite ogledati obrazec za rezervacijo, kliknite na nezaseden datum.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Potrjene rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Ni potrjenih rezervacij');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nova potrjena rezervacija');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Potrdi rezervacije teh sob');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Izbriši gosta');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gost izbrisan');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Gosta ni mogoče izbrisati, ker ima odprte rezervacije. Prekličite rezervacije in poskusite znova.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Upraviteljeva plošča prikaže trakovni prikaz');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Izberite Da, če želite namesto mesečnega koledarja prikazati tedenski trakovni prikaz razpoložljivosti.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Dejanska cena sobe: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','E-pošta ni veljavna ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Pošiljatel e-pošte:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Pozdravljeni!');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Hvala za rezervacijo pri');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Sledi povzetek rezervacije:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Če imate glede rezervacije ali drugih storitev kakršna koli vprašanja, se brez oklevanja obrnite na nas.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Naša telefonska številka je');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Uporabite lahko tudi naš poštni naslov:');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Kadilci');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Katera koli izbira");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Izstopna oblika koledarja');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','To uporabniku omogoča spremembo izstopne oblike datumov v sistemu Jomres.');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Vstopna oblika koledarja');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','To uporabniku omogoča spremembo vstopne oblike datumov v sistemu Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Dovoli kratke premore med rezervacijami v naprej določenih obdobij');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Dolžina premora');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Objavljeno');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Nastavitve');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Uporaba sistema Paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Uporaba zaščitenega okolja Paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Zahteva račun razvijalca PayPal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Vaš Paypal e-naslov');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Opomba: Če želite uporabljati sistem Paypal, morate v svojem računu Paypal omogočiti možnost Autoreturn (samodejno vračanje). (Profile/Website Payment Preferences (profil/nastavitve spletnega plačevanja) Možnost "Return" nastavite na: "On", povratni naslov nastavite na URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Napaka. Paypal e-naslov ni nastavljen');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Sled za preverjanje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Brez sledi za preverjanje');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Ura');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Uporabnik (uporabniško ime)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Postopek');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Lastniške pravice');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Poglej podrobnosti');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Kakršne koli</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter po datumu');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter po uporabniškemu imenu');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter po postopku');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Stanje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Pričakovan prihod');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Prihod danes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Trenutno nastanjeni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Odhod danes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Rok odhoda pretekel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Ni prišel');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filter');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Neznan uporabnik');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Soba ustvarjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Soba osvežena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Soba izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Lastnost sobe ustvarjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Lastnost sobe osvežena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Lastnost sobe izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Vrsta sobe vstavljena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Vrsta sobe osvežena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Vrsta sobe izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Objekt ustvarjen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Objekt osvežen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Objekt izbrisan');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Lastnost objekta ustvarjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Lastnost objekta osvežena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Lastnost objekta izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Lastnosti objekta spremenjene');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Objekt objavljen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarifa ustvarjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarifa osvežena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarifa izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Turistična sezona ustvarjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Turistična sezona osvežena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Turistična sezona izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Cena storitve dodana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Rezervacija preklicana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Prijava gosta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Odjava gosta');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Podrobnosti CC osvežene');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Polog vnesen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Gost ustvarjen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Gost osvežen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Gost izbrisan');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Nova slika objekta naložena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Druga slika objekta naložena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Slika izbrisana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Nova slika sobe naložena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Druga slika sobe naložena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Nova slika ponudbe naložena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Druga slika ponudbe naložena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Rezervacija sobe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Dodatek ustvarjen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Dodatek osvežen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Dodatek izbrisan');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Dodatek objavljen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Potrjena rezervacija vnesena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Potrjena rezervacija izbrisana');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Dodatki');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Uredi dodatek');
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
define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Nov dodatek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Če želite urediti besedilo dodatka, kliknite na povezavo za urejanje besedila.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Dodatek dodan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Dodatek osvežen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Uredi predmet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Kloniraj predmet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Izbriši dodatek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Dodatek izbrisan');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Upravitelj dodatkov');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Prikaz dodatkov ob rezervaciji?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Če izberete Da, bodo gostu pri rezervaciji prikazani tudi izbrani dodatki');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Dodatki.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Izberi ta objekt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Obrni izbor/Označi vse');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Začetni datum potrjene rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Storitev se nadaljuje z dnem');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Potrjene rezervacije');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Najmanj ena od označenih sob je že rezervirana. Če želite potrditi rezervacije teh sob, morate najprej izbrisati predhodne rezervacije.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Pri poskusu rezervacije sob je prišlo do napake, ker je najmanj ena od sob zasedena.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Sobe vključene v potrjeno rezervacijo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Izbriši potrjeno rezervacijo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Poglej potrjeno rezervacijo');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Seznam potrjenih rezeracij je prazen');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Število zvezdic');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Prikaz možnosti za kadilce?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Če izberete Da, bo prikazana možnost za kadilce.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Ponastavi');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Plačilo preko sistema Paypal je na čakanju. Ko hotel preveri plačilo, bo rezervacija spremenjena v potrjeno.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervacija preklicana');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Poišči:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Iskanje ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Prikaz podatkov odstranjevanja hroščev sistema Paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Prikaz imen sob?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Če želite prikazati imena sob, izberite Da.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Prikaz vrst sob?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Če želite prikazati vrste sob, izberite Da.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Možnost za kadilce kot privzeta nastavitev');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Opomba: Če je privzeta vrednost Da, vse vaše sobe pa so za nekadilce, na seznamu strani za rezervacije ne bo prikazana nobena od sob.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Oznaka valute');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Npr. &amp;pound&#59; Upoštevajte, da morate za oznake uporabljati HTML kode. Seznam teh kod najdete na <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Koda valute');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Npr. GBP. Ta oznaka se uporablja v e-pošti za potrditev rezervacij.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Kliknite, če želite več podatkov');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Pozor ... Prijavljeni ste kot direktor s pravicami za vse objekte. Upoštevajte, da to lahko pri nekaterih postopkih v sistemu Jomres povzroči težave.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Omejitev zgodnjih rezervacij?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Če želite omejiti zgodnje rezervacije, izberite Da (v naslednjem polju določite omejitev, izraženo v dneh). Če ste izbrali Da in uporabnik hoče rezervirati več kot n dni v naprej, bo datum prihoda vrnjen na današnji datum');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Omejitev zgodnjih rezervacij (dni v naprej):');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTE: Ne priporočamo, da za obe možnosti izberete Da. Uporabite le eno od možnosti za izračun davka. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Davek');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Davek za sobo');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Ustvarjeno za ameriško tržišče. To je davek, ki je zaračunan gostu, ki najame sobo. Izberete lahko določeno vrednost, odstotno vrednost ali kombinacijo obeh. Upoštevajte, da ti davki veljajo le za ceno sobe.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Določena vrednost davka');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Odstotna vrednost davka');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Davek');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Za vsa tržišča, za katera velja enotna davčna stopnja, npr. DDV v Sloveniji.');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Odstotna vrednost davka');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Arhiviraj vse zapise');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE','Zapisi arhivirani');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Pregledovalec je arhiviral zapise pregledovanja');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Naše tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Ime tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Opis tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Vrsta sobe');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Velja od');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Velja do');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Na osebo na noč');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Nočitev');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Izključujoč konce tedna');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Najmanj dni');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Največ dni');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Najmanj oseb');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Največ oseb');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Predogled');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Urejanje dne?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Trenutno besedilo');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Novo besedilo');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Besedilo po izbiri osveženo.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Sprememba jezika');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Število nearhiviranih zapisov: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','V sledi za preverjanje je 200 aktivnih zapisov, zato izpeljanih postopkov SQL ni mogoče prikazati. Če si želite ogledati SQL, morate neposredno preučiti tabelo preverjanja. Če želite redno preverjati SQL, priporočamo redno arhiviranje.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Vrsta objekta');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Seznam vrst objektov');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Uredi vrsto objekta');
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
define('_JOMRES_COM_PTYPES_SAVED','Vrsta objekta shranjena');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Vrste objekta ni mogoče izbrisati. Vrsta objekta je določena za enega ali več objektov, prosimo, da objektom določite drugo vrsto, preden to vrsto izbrišete.');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Ena ali več vrsto bjektov izbrisanih.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Napaka. Objekt nima sob.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Napaka. Objekt nima tarif.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Napaka. Objekt nima vrst sob.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Spremeni objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Opomnik plačila');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Plačilo preko sistema Paypal je bilo uspešno in obvestilo o transakciji je bilo poslano na vaš e-naslov. Če si želite ogledati podrobnosti transkcije, se prijavite na vaš račun na www.paypal.com. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Ni dodatnih storitev za obračun');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Polog');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Poln znesek');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Znesek, obračunan ob rezervaciji');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','S to možnostjo določite, kolikšen znesek želite obračunati ob rezervaciji. Izberite Polog, če želite obračunati le polog, oziroma Poln znesek, če želite obračunati poln znesek.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Prikaz mesecev na koledarju');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Koliko mesecv želite prikazati na koledarju razpoložljivosti sobe?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Podpisano v imenu ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Prehodi');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Prekliči');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Izberite sobe, ki jih želite odstraniti iz ponudbe in datum odstranitve. <br>Če soba ni označena, je ne morete vključite med potrjene rezervacije, dokler odprte rezervacije ne potečejo, oziroma jih ne prekličete.<br/> Ko izberete ustrezne datume, kliknite na modri gumb "Uporabi" in ponovno preverite razpoložljivost sobe. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Vse kaže, da vas je sistem Joomla odjavil zaradi nedejavnosti.</b> Prosimo, prijavite se in poskusite znova.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Vzrok');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Uporaba plačilnih prehodov?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Izberite Da, če želite uprabljati sistem plačilnih prehodov. <b>Opomba:</b>To ne izključi izračuna pologa ob rezervaciji. Če želite to možnost izključiti, to lahko uredite v predlogah, kjer so prikazane sobe, tako da odstranite elemente, ki se nanašajo na pologe.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Prosimo, izberite način plačila.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Prehod vključen?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Nastavitev vtičnika spremenjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Nastavitev vtičnika vnesena');
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
define('_JOMRES_COM_ENCRYPTION','Šifriranje');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Uporaba šifriranja mCrypt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Izberite le, če je mCrypt vključen v PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Šifrirni ključ');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Oblika šifriranja');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Šifrirni algoritem');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Kreditna kartica pregledana');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Kreditna kartica osvežena');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Uredi kreditno kartico');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Uredi velikost ikone');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Merjeno v kvadratnih pikah.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Nalaganje slikovnega paketa objekta');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Slike so že v imeniku');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Slikovna predstavitev');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Prikaz povezave za slikovno predstavitev?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Naj bo slikovna predstavitev vključen v stran?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Izberite Da, če želite na strani s podrobnostmi objekta prikazati tudi slikovno predstavitev.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Skupna višina slikovne predstavitve');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Višina ciljne male sličice slikovne predstavitve');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Slikovna predstavitev');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Žal za ta objekt slike niso na voljo. Če želite uporabljati možnost slikovne predstavitve, z možnostjo nalaganja slikovnega paketa naložite slike.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Širina pojavnega okna');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Višina pojavnega okna');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Postavitev slike');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Spremenite le, če želite, da jomres sliko prestavi drugam. Privzeta nastavitev je \'/images/stories/jomres/\' v korenskem imeniku joomla.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Prikaz povezav za tarife?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Uporaba pojavnih oken?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Če izberete Ne, bodo okna, ki bi se drugače odprla kot pojavna okna, odprta na strani. POSKUSNA VERZIJA! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Nalaganje slik slikovne predstavitve');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','S to možnostjo naložite sklop slik objekta.<br/><b>Opomba:</b> Vse slike z istim imenom bodo zamenjane. Upoštevajte, da s to možnostjo ne morete naložiti slik, ki so vezane le na posamezne sobe ali glavne slike objekta - to lahko naredite na strani upravitelja objekta.<br/><b>Opomba:</b> Naložene slike bodo shranjene v mapi /images/stories/jomres/*property_uid*. Če mapa ne obstaja, bo ustvarjena, razen če ste v nastavitvah izbrali drugo mapo.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Razno');
/**
* @ignore
*/
define('_JOMRES_A','Nastavitve spletnega mesta');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Uporabi splošne lastnostni nastavitev');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Izberite Da, če želite uporabljati izključno nastavitve, ki jih določi spletni skrbnik.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Če želite sliko določiti lastnosti, morate najprej slike ponudbe objekta naložiti v mapo /images/stories/jomres/pfeatures/. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Ikona');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Izberite iskalni vtičnik, ki ga želite uporabiti.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Žal iskanje ni našlo zadetkov. Spremenite pogoje iskanja in poskusite znova.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Ali to resnično želite?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezervacija sobe');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezerviraj ta objekt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Varnostna številka');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Prikaz tarif na strani?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Naslov');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Podrobne informacije');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknite za prikaz razpoložljivosti sob');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Prikaz informacij o tarifah');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Prikaz podatkov o naslovu pod povezavo');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Prikaz podrobnih podatkov o objektu pod povezavo');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Prikaz podatkov o razpoložljivosti sob pod povezavo');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Prikaz podatkov o tarifah pod povezavo');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Enotne tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Povprečja');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Uporabite tarifni model, ki ga želite uporabiti.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Obstajata dve možnosti izračuna tarif. 'Enotna tarifa' omogoča ponudbo različnih tarif, ki pa se za celotno obdobje bivanja ne spremenijo. Metoda je uporabna, če želite za isto obdobje ponuditi več različnih tarif, npr. prenočišče in zajtrk, polpenzijon. 'Povprečno' tarifo izberite, če želite cene prilagajati datumom. Jomres poišče vse tariffe za posamezne dni bivanja, jih sešteje in izračuna povprečno vrednost za celotno obdobje.");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Uporaba portala Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Izberite Da, če želite pri uporabi Jomresa uporabiti tudiportalsko programsko opremo.');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Prikaz vnosa datuma odhoda?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Izberite Ne, če ne želite prikazati okenca za vnost datuma odhoda. Možnost uporabite, le če ste s programom dobro seznanjeni, saj je samodejna nastavitev datuma odhoda dan po dnevu prihoda.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Omejitev opisa');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Ta nastavitev omeji število znakov, ki jih seznam objektov vzame iz opisa objekta.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Večkratnik dnevne tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"To omogoča uporabo večkratnika dnevne tarife, ki jo je mogoče prikazati na rezervacijski strani (uporabno, če želite, na primer, prikazati tedensko tarifo sobe)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Širina pojavnega okna slikovne predstavitve');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Višina pojavnega okna slikovne predstavitve');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Osveži');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Če želite preveriti razpoložljivost, kliknite na gumb za osvežitev podatkov');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Vrsta oblike uporabljenega datuma ()?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Izberite Da, če želite, da bo izhodna oblika datuma v skladu z obliko () (Glejte <a href="http://www.php.net/manual/en/function.date.php">Tukaj</a>). Izberite Ne, če želite uporabiti obliko strftime()(Glejte <a href="http://www.php.net/manual/en/function.strftime.php">Tukaj</a> npr. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Kliknite za objavo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Kliknite za odstranitev objave');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Prosimo, izpolnite naslednja polja: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Hvala.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Uporabi splošne vrste sob');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Izberite Da, če želite za vse objekte uporabiti izključno vrste sob, kot jih nastavi spletni skrbnik. Če želite uporabljati iskanje na podlagi vrste sobe, morate za to možnost izbrati nastavitev Da.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Če želite vrsti sobe določiti sliko, morate najprej slike naložiti v mapo /images/stories/jomres/rmtypes/. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Napačen vnos barve obrobe');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Napačen vnos barve ozadja');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Privzeta država v rezervacijskem obrazcu');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Uporaba pomoči spletne strani?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Izberite Da, če želite, da je nad iskalno vrstico prikazano besedilo pomoči Jomres.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Tukaj uredeite besedilo pomoči za razervacije.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Elementi, označeni z rdečo zvezdico, so obvezni.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Uporabniki lahko registrirajo svoje objekte?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Izberite Da, če želite uporabnikom dovoliti samostojno registracijo objektov brez posredovanja upravitelja.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Vnesite državo in regijo objekta.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Izpolnite podrobnosti o objektu.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Elementi, označeni z rdečo zvezdico, so obvezni.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Objekt ustvarjen');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Žal na tem sistemu ne morete ustvariti objekta. Morate biti registriran uporabnik, objekt pa ne sme še biti ustvarjen.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Ustvarjen objekt: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Za uporabnika: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Cena na dan?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Na dan');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Prikaz koledarja od začetka leta?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Koledar razpoložljivosti se začne z letošnjim letom.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Prikaz podrobnosti o sobi?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Če izberete Ne, sistem Jomres ob rezervaciji ne bo pokazal vseh podatkov, temveč le razpoložljivost.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Število prostih sob');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Izberite število in vrsto sob, ki jih potrebujete.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Potrebno število');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Nazaj na podrobnosti objekta');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Vrste sob');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Uporaba metapodatkov Jomres?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Če izberete Da, bo Jomres iz ponavljanj v besedilih opisa objekta in strani seznama objektov ustvaril metapodatke. Besede ločujte s presledki.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Nezaželjene besede');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"To so nezaželjene besede, npr. besede, za katere <i>ne</i> želite, da bi bile prikazane v metapodatkih.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Drugi elementi za odstranitev');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','To so elementi, ki bodo odstranjeni iz metapodatkov. Na primer nekateri simboli, navednice ipd.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Pogostost');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Najmanjše število ponovitevbesede, da je lahko vključena v metapodatke.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Omejitev naključnega iskanja');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Prikaz povezave Google za preračunavanje valut na seznamu tarif?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Tarifo pretvori v :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Ali lahko uporabniki uporabljajo html urejevalnike?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','V tem obrazcu izpolnite rezervacijo. Če želite več podatkov o stolpcu, miškin kazalec premaknite na ikono "i". Spremenite podrobnosti rezervacije, kot so datum prihoda in odhoda ali število gostov, nato pa s seznama razpoložljivih sob izberite sobe, ki jih potrebujete. Kliknite na sobo, ki jo želite dodati rezervaciji. Ko zaključite, lahko izberete dodatne zahteve in izpolnete osebne podatke. Ko vnesete vse potrebne podatke, se bo pojavil gumb za potrditev rezervacije.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','V tem obrazcu izpolnite rezervacijo. Če želite več podatkov o stolpcu, miškin kazalec premaknite na ikono "i". Spremenite podrobnosti rezervacije, kot so datum prihoda in odhoda ali število gostov. When done, you can add any optional extras you may require and provide your address details. Ko zaključite, lahko izberete dodatne zahteve in izpolnete osebne podatke. Ko vnesete vse potrebne podatke, se bo pojavil gumb za potrditev rezervacije.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Podrobnosti rezervacije');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Izberite podrobne zahteve vaše rezervacije');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Razpoložljivost ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Izberite sobe, ki jih potrebujete');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Tukaj preverite, če je soba trenutno prosta.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Dodatne možnosti');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Izberite dodatne možnosti, ki jih želite vključiti v rezervacijo');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Na noč');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','vaš naslov');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Prosimo, da vnesete svoje podatke. Obvezna so vsa polja razen številke mobilnega telefona.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Proste sobe');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Izbrane sobe');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Najzgodnejši možni datum prihoda je: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Na noč:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Skupaj:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Dodatki:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Davek:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Popust:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Končni znesek:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gostov');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknite, če želite sobo dodati izboru');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknite, če želite sobo odstraniti iz izbora');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Vrste gostov');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Vrsta');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Vrsta gosta, npr. otroci 5-10 let ali študenti. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Opomba');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Morebitne opombe glede vrste gosta');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Največ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Največje število posameznikov te vrste gosta, ki ga lahko izberete v rezervacijskem obrazcu');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Je odstotek');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Število se izračuna, kot delež vseh gostov v sobi. Če izberete Ne, bo število preprosto vsota ali razlika osnovnega in izbranega števila gostov v sobi.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Prištevanje odstopanja?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Število je vsota ali razlika osnovnega in izbranega števila gostov v sobi. Izberite Ne, če želite izbrano število odšteti od osnovnega števila. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Spremenljivka');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Vrednost odstopanja');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Vrsta gosta spremenjena');
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
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Vrsta gosta ustvarjena');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Vrsta gosta osvežena');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Vrsta gosta osvežena');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Prikaz seznama sob na strani s podrobnostmi objekta?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Prikaz povezave seznama sob na strani s podrobnostmi objekta?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Prikaz <b>izključno</b> koledarja razpoložljivosti sob?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Če izberete Da, ne bodo prikazane glava objekta in podrobnosti, tako da bo na strani podrobnosti objekta prikazan le koledar razpoložljivosti sob. Uporaben predvsem, če oddajate objekte, ki so prikazani z eno samo sobo(npr. apartmaje ali koče).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS slog strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Najmanjši interval med prihodom in odhodom');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Najmanjši interval med prihodom in odhodom, ki je na voljo na rezervacijskem obrazcu.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Prikaz številke sobe na seznamu sob rezervacijskega obrazca');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Prikaz imena sobe na seznamu sob rezervacijskega obrazca');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Prikaz številke tarife na seznamu sob rezervacijskega obrazca');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Prikaz naziva v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Prikaz opisa v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Prikaz cene/tarife v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Prikaz začetka obdobja v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Prikaz konca obdobja v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Prikaz najmanjšega št. dni v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Prikaz največjega št. dni v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Prikaz najmanjšega št. oseb v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Prikaz največjega št. oseb v pojavnem oknu na rezervacijski strani');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Prikaz št. sobe v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Prikaz imena sobe v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Prikaz vrste sobe v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Prikaz možnosti za kadilce v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Prikaz dostopa za invalide v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Prikaz nadstropja sobe v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Prikaz največjega št. oseb v pojavnem oknu na rezervacijski strani');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Prikaz lastnosti sobe v pojavnem oknu na rezervacijski strani');

/**
* @ignore
*/
define('_JOMRES_ORDER','Naročilo');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','V sistemu Jomres se objekt nastavili kot enosoben (npr. apartma, kočo, vilo), a ste ustvarili več kot eno sobo. Zaradi tega pri uporabi sistema Jomres lahko pride do napak. Če želite za upravljanje enosobnega objekta uporabljati Jomres, morate vse obvečne sobe. Spremenite nastavitve, da bo nastavitev Enosoben objekt = Ne, nato odprite upravitelja objekta in odstranite odvečne sobe, da bo za objekt ostala le ena soba.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Zahtevano');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dni pred prihodom');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Najmanjšte število dni med današnjim dnem in dnem prihoda.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Na noč:');

/**
* @ignore
*/
define('_JOMRES_DTV','Variacije vsrte datuma');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Dan v tednu');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Razpon datuma');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Dni bivanja');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Zadnja minuta');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Dni v tednu');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Dan v tednu');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Izbira razredne komponente tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Ta seznam omogoča izbiro uporabniško določenih tarifnih razredov, ki jih lahko ustvarite, prenesete ali namestite kot ločene sestavne dele v sistemu Joomla. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Privzeta vrsta gosta');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Privzeto število prve vrste gosta. Če uporabljate vrste gostov, je to število, ki bo na rezervacijskem obrazcu prikazano kot prva vrsta gosta.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Spletne rezervacije le za registrirane uporabnike?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Žal morate biti za spletno rezervacijo registriran uporabnik. Tukaj kliknite za registracijo na strani. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Barva pisave povezave trenutnih rezervacij');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Obrobe konca tedna');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Kateri vtičnik delovno table želite uporabljati');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Če ste namestili več delovnih tabel Jomres, lahko tukaj izberete, katero želite uporabljati.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Soba je rezervirana');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Potrjena rezervacija');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrožanje pologa na najbližje celo število?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Zaračunavanje pologa?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Shranjevanje obračunanih tarif kot tedenskih vrednosti?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Obračunane tarife lahko shranjujete kot dnevne ali tedenske vrednosti. Če jih želite shranjevati tedensko, morate izbrati Da.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cena na teden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Število določenih datumov prihoda: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Če so izbrani določeni datumi prihoda, je to število datumov, ki so prikazani na seznamu.');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Možnost za kadilce ni veljavna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Datum prihoda ni veljaven');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Datum odhoda ni veljaven');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Obdobje rezervacije je prekratko. Med prihodom in odhodom mora biti najmanj naslednje število dni:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Interval je');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Vrsta gosta ni veljavna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Izberite število/vrsto gostov');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Glede na tarife, ki so na vojo, ste izbrali preveliko število gostov.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Izbrali ste več sob, kot gostov. Odstranite odvečne sobe.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Število gostov je večje od števila postelj.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Izbrati morate več sob.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Izberite sobo.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Ime je obvezno');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Priimek je obvezen');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Hišna številka je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Ulica je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Kraj je obvezen');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Regija je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Poštna številka je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Država je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Telefonska št. je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Številka mobilnega telefona je obvezna');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','E-naslov je obvezen');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','E-naslov ni veljaven');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Potrditev e-naslova ni bila mogoča');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Imamo proste sobe!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Sobe še niso izbrane.');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Rezervačija št.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ozadje okenca za možnost rezervacije');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Odstranjevanje spremenljivk predlog?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Izberite Da, če želite ustvariti DHTML odložišče spremenljivk datoteke predloge uporabniške strani FRONTEND za odprto stran. Uporabno, če želite preveriti, ali je določen element predloge na voljo.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Število je odstotna vrednost');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Izberite Da, če želite, da je izračun po osebi odstotna vrednost. V nasprotnem primeru bo vrednost navadno število.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Omejitev razpoložljivih sob/tarif');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','S to možnostjo omejite število prostih sob in razpoložljivih tarif na rezervacijskem obrazcu. Če izberete nič, ni omejitve. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Trenutno nimamo prostih sob!');


// Translate from here


// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Margin');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Profit margin, in percent.');

// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Show Jomres admin options as icons?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Set this to no if you want all the admin links shown as text.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Book it now: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
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

