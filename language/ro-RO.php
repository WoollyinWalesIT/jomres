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
define('_JOMRES_COM_MR_MRARRIVEDESC','Arata sosirile de azi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Arata plecarile de azi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Arata cererile de rezervare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Arata alte cereri');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Rezervare rapida');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Arata rezervarile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Arata profilurile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Limbi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Configurare generala');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Configurare reduceri');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Configurare camere/unitate cazare');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Configurare unitate cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Configurare tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Inapoi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Inapoi la listare rezervari');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Configurare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Incarca inregistrarile demonstrative');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Da');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Nu');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Nou');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Camera noua');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Facilitate camera noua');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Tip camera nou');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Unitate cazare noua');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Facilitate noua unitate cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Client nou');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Salveaza');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Sosire');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Plecare');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Atribuie functii de admin userului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Utilizator');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Autorizari curente');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Proprietate de baza');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Modifica');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Nivel de acces');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Utilizator modificat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Schimba proprietate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Schimba nivel de acces');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Receptie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Manager proprietati');

// Edit bookings 
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Toate rezervarile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Rezervari noi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editeaza rezervarile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Sos/Ple');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Oaspete');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Plata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Prenume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Acest client trebuie sa soseasca azi. Apasa acest buton daca clientul a sosit.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Memo');  
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Cerinte speciale');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Luati la cunostinta ca cerintele speciale pot implica tarife suplimentare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Adulti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Copii');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Anuleaza rezervarea');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Nume utilizator');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Numarul la care locuiti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Strada');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Oras');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Cod postal');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Tel fix');
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
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Optiuni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Numar inmatriculare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Client anulat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Hotel anulat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Selecteaza motivul anularii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Zile pana la sosire');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Penalizari pentru anulare</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Nu puteti anula aceasta rezervare deoarece oaspetele este deja cazat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Avans platit, nu exista datorii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Avans neplatit, exista datorii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Avans platit, datorie 50% din valoarea contractului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Avans neplatit, datorie 50% din valoarea contractului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Avans platit, datorie 100% din valoarea contractului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Avans neplatit, datorie 100% din valoarea contractului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Datorie curenta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Avans neplatit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Confirma anularea');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervare anulata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Zile pana la sosire');
    	
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Tip rezervare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Black');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Receptie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Nume camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etaj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Acces persoane cu handicap?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Nr. maxim de persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Tip camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Descriere tip camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista facilitati camera');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&euro;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','€');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Reguli tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Avans platit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Introduceti avansul');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total de plata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Nr. avans');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Nr. plata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Rezervare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Avans');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Avans salvat');

// Edit Language 
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Atentie...</FONT></h1><BR><B>Trebuie sa schimbati permisiunile fisierului de limba in 766 pentru ca acesta sa poata fi editat</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Selecteaza tip camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Checkbox');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Numarul de adulti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Numarul de copii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Necesita pat pentru copil?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternativ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Introduceti fie numarul de nopti, fie data plecarii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Numarul de nopti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Va rugam selectati tipul camerei, data sosirii clientului si fie numarul de nopti, fie data plecarii. In final, introduceti numarul de adulti si de copii.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Camere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Numar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Etaj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Acces persoane cu handicap?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Nr. maxim de pers.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Detalii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Unitate cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Tip camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Ne pare rau, dar nu putem oferi caazare pentru acest numar de persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Ne pare rau, proprietatea nu poate oferi cazare in aceasta perioada. Reveniti la calendare si vedeti datele disponibile.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Va rugam selectati din lista');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Selectati acest client');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Descriere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Lista clienti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">ERROR: Exista o eroare in datele alese de dvs.<br>Apasati butonul Back si reintroduceti datele.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">ERROR: Aveti nevoie de cel putin un oaspete pentru a face o rezervare.<br>Apasati butonul Back si reintroduceti datele.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">ERROR: Datele selectate sunt incorecte.<br>Apasati butonul Back si reintroduceti datele.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">ERROR: Nu ati selectat nici un tip de camera.<br>Apasati butonul Back si reintroduceti datele.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">ERROR: Data rezervarii este in trecut sau astazi.<br>Apasati butonul Back si reintroduceti datele.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Introduceti detaliile clientului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Confirma detaliile clientului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Editeaza detaliile clientului');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Prenume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Strada');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Oras');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Cod postal');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon fix');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefon mobil');
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
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Numar de inmatriculare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Numar card credit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Card issued');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Card expires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Issue number');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Name on card');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Alegeti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Selecteaza');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Descriere tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Nr. minim de zile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Nr. maxim de zile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Nr. minim de persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Nr. maxim de persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','nopti');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Tarif pe zi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Numar de persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Avans');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Cel putin una din zilele selectate pica intr-o sarbatoare legala.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Ne pare rau, nu au fost gasite tarife care sa se potriveasca criteriilor specificate. Va rugam reincercati, modificand numarul zilelor de sedere, sau sunati la hotel si faceti o rezervare prin telefon.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Vezi panou configurare camere si unitati cazare');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Camere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Facilitati camere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Tipuri camere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Unitate cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Facilitati unitate cazare');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Tip');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Unitate cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Tip');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Numar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etaj');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Acces persoane cu handicap?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Nr. maxim de persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Facilitati');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Camera adaugata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Camera actualizata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Click pe uid-ul camerei pentru editare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Editeaza');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Facilitati camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Descriere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Click pe Facilitati camera pentru editare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Facilitate camera adaugata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Facilitate camera actualizata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Editeaza');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Tip camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Prescurate facilitate camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Descriere Facilitate camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Click pe uid-ul camerei pentru editare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Tip camera adugat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Tip camera actualizat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Editeaza');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Unitate cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Strada');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Oras');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Judet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Tara');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Cod postal');
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
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Facilitati');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Click pe uid-ul unitatii de cazare pentru editare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Unitate de cazare adaugata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Unitate de cazare actualizata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Editeaza');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Facilitati Unitate de cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Prescurtare Facilitate Unitate de cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Descriere Facilitate Unitate de cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Click pe uid-ul unitatii de cazare pentru editare facilitate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Facilitate unitate de cazare adaugata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Facilitate unitate de cazare actualizata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Editeaza');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Nume tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Descriere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Activ de la');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Activ pana la');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Tarif pe noapte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minim zile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maxim zile');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minim persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maxim persoane');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Tip camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignora PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Permite sarbatori legale');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Permite weekenduri');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Click pe linkul Editare pentru editare tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarif adaugat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarif actualizat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Editeaza');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Cloneaza item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Sterge tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarif sters');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Editeaza tarif');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Sarbatori legale');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','The end date of the public holiday period should be the last night that you intend to bill the guests at public holiday rates.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Editeaza sarbatoare legala');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Descriere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Inceput');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Sfarsit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Sarbatoare egala noua');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Click pe Editare text pentru a edita sarbatoarea');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Sarbatoare legala adaugata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Sarbatoare legala actualizata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Editeaza');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Cloneaza');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Sterge sarbatoare legala');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Sarbatoare legala stearsa');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervare salvata');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Va rugam asigurati-va ca formularul este completat corect.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Doar utilizatorii inregistrati pot face rezervari online.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Va rugam inregistrati-va.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Rezervari offline');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Detaliile mele');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Rezervarile mele');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Administrare');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Rezervare');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Incepe cazare oaspete');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Termina cazare oaspete');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Listeaza rezervarile');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Rezervari noi');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Administrare clienti');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Administrare unitati cazare');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Administrare tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Administrare reduceri');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Administrare sarbatori legale');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Va rugam selectati tipul de camera dorit, data sosirii si numarul de nopti. In final, introduceti numarul de adulti si de copii.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Va rugam introduceti detaliile dvs. Trebuie sa faceti asta o singura data, iar sistemul va va memora pentru vizitele urmatoare.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Va rugam selectati tipul de camera dorit.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Va rugam introduceti detaliile dvs. Note that all fields are required.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Verifica disponibilitatea');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Doresc aceasta camera');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Selecteaza client');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirmati detaliile dvs.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Alege oferta mea');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Selecteaza tipurile camerei');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Prenume');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nume');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Strada');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Oras');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Cod postal');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon fix');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon mobil');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="4">Nu exista camere disponibile care sa intruneasca cerintele dvs.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Introduceti detaliile dvs');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Confirmati detaliile dvs');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Va multumim pentru rezervarea facuta si va dorim sedere placuta.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezervare facuta pentru proprietatea: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezervare facuta pentru camera: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Numar de adulti: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Numar de copii: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Sosire: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Plecare: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Nopti de cazare: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Uid client: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nume: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon fix: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefon mobil: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Tarif: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Valoarea contractului este: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Avans obligatoriu: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Ne pare rau, dar trebuie sa va actulizati detaliile inainte de a proceasa rezervarea. Dati click pe linkul "Detaliile mele" si completati detaliile dvs. Va multumim.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Va multumim, detaliile dvs au fost salvate.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Bine ai venit. Inainte sa poti face o rezervare, trebuie sa iti actualizezi detaliile folosind link-ul "Detaliile mele".');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Bine ati revenit ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Incepe cazare client ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Selecteaza client ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Client cazat ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Nici un client nu este asteptat sa soseasca azi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Termina cazare client ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Cazare client terminata ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Confirma terminare cazare client');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Nici un client nu este asteptat sa plece azi');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Clienti care sosesc azi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Clienti care pleaca azi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Camere ocupate');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Rezervari noi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Vezi formular folosire camere:');

// Config panel 
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Tarife suplimentare');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tarife & Monede');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Reduceri');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Politica de anulare.  NU ESTE IMPLEMENTATA');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload fisiere');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Setari curente');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Explicatie');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Jomres');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Rezervari offline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Acceptati rezervari offline daca nu doriti sa acceptati rezervarile online.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Grila reduceri disponibila?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','The discount scheme is for those who wish to offer people discounts depending on the number of guests in a party. Because it operates on the numbers in a party, it is not recommended that you use it if you do not charge on a per-person-per-night basis.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Level 1 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Level 2 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Level 3 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Level 4 threshold');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Level 1 valoare discount');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Level 2 valoare discount');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Level 3 valoare discount');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Level 4 valoare discount');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Tarife suplimentare pentru o singura persoana');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Asigurati-va ca este setat Da daca doriti sa percepeti tarife suplimentare pentru o singura peroana');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Tarif suplimentar pentru o singura persoana');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Tarif suplimentar patut pentru copii.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Asigurati-va ca este setat Da daca doriti sa percepeti tarif suplimentar pentru a pune la dispozitie un patut pentru copii');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Tarif suplimentar patut pentru copii');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Avansul cerut este procent?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Avansul cerut este un procent din valoarea totala a rezervarii? Daca NU, avansul cerut va fi o suma fixa');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Valoare avans cerut');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Pe persoana, pe noapte');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Selectati Da daca doriti sa taxati pe-persoana-pe-noapte. Daca nu, costul va fi calculat pe-camera-pe-noapte');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Valoarea rezervarilor anulate poate fi rambursata?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Seteaza Da daca banii ramasi dupa anularea rezervarii pot fi folositi de client pe viitor. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Fisierul exista');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Tipuri fisier');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Specificati aici ce tipuri de fisiere sunt permise la upload. Faceti o lista de extensii cu litere mici despartite prin virgula. Exemplu: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Marimea fisierului');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Marimea maxima a imaginii in Kilobytes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Click pentru statistica saptamanala a folosirii camerelor incepand de azi');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Click pe o camera rezervata pentru a vedea rezervarea');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','sau selectati data de care sunteti interesat.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Rezervat');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Liber');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Camerele pe fond alabastru sunt rezervate, totusi<br> daca o camera are text rosu, atunci nu a fost platit nici un avans.<br> Cand o camera are o stea langa "Rezervat" atunci oaspetele este asteptat sa soseasca azi.<br> Daca o camera are text galben, inseamna ca oaspetele inca mai este cazat in camera.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Scrisoare de confirmare');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Domnule/Doamna ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cost pe noapte - pe camera ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detaliile rezervarii');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Va multumim pentru rezervarea facuta pentru ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Mai jos aveti detaliile rezervarii. Va rugam verificati daca detaliile dvs sunt corecte si contactati-ne daca exista vreo eroare.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Camera dvs va fi retinuta pana la sosire, cazarea fiind dupa ora 2PM.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Suntem nerebdatori sa va intampinam pe data de ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Va dorim sedere placuta.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Totusi, trebuie sa va aducem la cunostinta cateva detalii.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Va reamintim ca aceasta rezervare este un contract legal, asa ca daca din orice motiv va anulati sau scurtati rezervarea, trebuie sa platiti valoarea integrala a contractului.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Nu exista rambursari pentru mesele neservite sau pentru camerele neocupate pe perioada rezervarii. Luand aceasta in considerare, va recomandam sa va faceti o asigurare de vacanta.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Anularea rezervarii si taxele de anulare. </i> Daca doriti sa anulati rezervarea, trebuie sa confirmati in scris. Taxele de anulare sunt urmatoarele:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Inainte cu 30 de zile sau mai mult pana la data sosirii: ');     
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Doar avansul platit.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','Intre 15 si 30 de zile inainte de data sosirii: ');        
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% din valoarea contractului.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Inainte cu mai putin de 14 zile pana la sosire: ');            
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% din valoarea contractului.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','TVA-ul de 19% este inclus in toate tarifele. Orice schimbare sau modificare va fi taxata.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Tipareste scrisoarea de confirmare');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Tipareste chitanta');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Domnule/Doamana ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Cost pe noapte - pe camera ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Numar de nopti: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contractul stabilit: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cost pe noapte: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Detalii chitanta');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Va multumim. Echipa ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Speram sa mai treceti pe la noi.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','TVA-ul de 19% este inclus in toate tarifele. Orice modificare va fi taxata.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Tipareste chitanta');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Adauga serviciu la factura');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Descrierea serviciului');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Valoarea serviciului');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Adauga la factura');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Alte servicii facturate');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Alte servicii facturate, valoare totala: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item adaugat la factura');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Default hotel not found</h1><br>Cannot continue. Contact your site administrator.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Selecteaza imaginea pentru atasare');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Upload imagine');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Upload');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Upload fisier');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Fisierul poate fi de tipul - marime max.');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Trimiteti un nou fisier pentru Upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Sunt permise doar upload-urile fisierelor de tipul:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Va rugam selectati un fisier inainte de upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Fisierul trebuie sa contina caractere alfanumerice si sa nu contina spatii.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Marimea fisierului depaseste marimea maxima setata de Administrator.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Un fisier cu acest nume exista deja. Va rugam redenumiti fisierul inainte de upload.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Fisierele dvs au fost incarcate.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Fisierele NU au fost incarcate.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Fisierul dvs a fost incarcat.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Opt into jomres network?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','If you choose to opt this property into the jomres network, then it will be listed at jomres.net. Please note, it will be assumed that this is a live hotel. Jomres.net cannot be held responsible for your property. You must ensure that your details are correct.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Calendar fisier limba');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Alegeti fisierul de limba care va fi folosit de calendarul Javascript. Unele calendare pot avea erori, vizitati http://sourceforge.net/tracker/?group_id=75569&atid=544287 pentru mai multe informatii');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS Calendar CSS file');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Alege fisierul CSS pentru calendar');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Verifica pentru sarbatori legale?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','If you set this option to Yes, then you must ensure that you have seperate tariffs/rates for public holidays and normal dates. Set it to No if you charge the same rates for public holidays and normal dates.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Misc.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','Arata erorile');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Seteaza Da pentru a vedea erorile');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Sterge aceasta imagine');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Fisier sters');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Arata campul Plecare');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Set this to Yes if you want to show the departure field. It has been noted that there may be some browsers that fail to handle the javascript calendar properly. Personally I leave it switched off because I think having the field there is ugly');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Alegeti unitatea de cazare pentru care doriti sa vizionati informatiile de disponibilitate');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Orice');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Camera');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Unitate cazare');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Arata sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Set this to on to see the SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Arata rezultatele sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Set this to on to see the SQL data returned and var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Choose your template pack');
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
define('_JOMRES_COM_A_CSS','Templates');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Sterge');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Aceasta camera nu poate fi stearsa pentru ca exista rezervari. Anulati rezervarile si incercati din nou.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Camera stearsa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Sterge facilitate camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Aceasta facilitate nu poate fi stearsa deoarece este atribuita unor camere. Stergeti aceasta facilitate de la camerele respective si incercati din nou.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Facilitate camera stearsa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Sterge facilitate proprietate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Aceasta facilitate nu poate fi stearsa pentru ca este atribuita undei proprietati. Stergeti aceasta facilitate de la proprietatea respectiva si incercati din nou.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Facilitate proprietate stearsa');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Sterge tip camera');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Acest tip de camera nu poate fi sters pentru ca este asociat undei camere. Incercati sa atribuiti camerei alt tip de camera si incercati din nou.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Acest tip de camera nu poate fi sters pentru ca este asociat unui tarif. Incercati sa atribuiti tarifului alt tip de camera si incercati din nou.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Tip camera sters');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Sterge proprietate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Aceasta proprietate nu poate fi stearsa, contine date in tabelul: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Proprietate stearsa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nu aveti dreptul sa stergeti aceasta proprietate.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Alege aceasta proprietate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Carei proprietati va fi asociata aceasta camera?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Selectati o prorpietate');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Trebuie sa selectati o proprietate');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Tiny thumbnail image width');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Medium thumbnail image width');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Fullsize image width');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Harta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Descrierea proprietatii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Ora de cazare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Descrierea zonei');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Alte informatii/servicii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Meta title');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Optiuni transport');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Termeni si conditii');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Your Jomres.net property key');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','When you are ready to put your website up on the web, visit <a href="http://www.jomres.net" target="_blank">Jomres.net</a> for your property key. With that jomres can register your property on the Jomres Network, ensuring that your reach the widest possible audience for your business.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Proprietatile noastre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Vizitatorii pot face rezervari online');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Seteati Da pentru a va asigura ca vizitatorii pot face rezervari online.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervarile sunt pentru o perioada fixa?');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Daca setati Da, atunci rezervarile vor fi pentru o perioada fixa. Daca setati Nu, asigurati-va ca nu este setat Da pentru "Zi sosire predefinita"(doar daca nu doriti sa fortati oamenii sa soseasca doar intr-o anumita zi) altfel nu veti avea foarte multe linkuri din calendrul de disponibilitate.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Perioada de rezervare: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Rezervare camere');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Booking table border');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Change the colour of the booking table border');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Booking table background');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Change the colour of the booking table background');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Booking table width');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximum periods, eg 3x 7 booking periods = 21 days');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Numarul de oaspeti este obligatoriu?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Seteaza Da pentru a arata campurile cu numrul de oaspeti pe formularul de rezervare.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Aceasta este o proprietate ca un apartment?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','EX se ofera spre inchiriere toata unitatea de cazare, nu doar camere din acea unitate. Daca acesta este si cazul dvs, atunci va rugam sa va asigurati ca veti o singura camera inregistrata pentru aceasta unitate de cazare.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Nr. maxim de adulti');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Numarul maxim de adulti pe formularul de rezervare');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Nr. maxim de copii');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Numarul maxim de copii pe formularul de rezervare. Daca este setat zero acest camp nu va mai aparea pe formularul de rezervare');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Continua');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Revizuieste rezervarea');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirma rezervarea');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Reduceri');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Atentie...</FONT></h1><BR><B>Trebuie sa modificati permisiunile fisierului site_config.php in 777 pentru a face posibila modificarea configuratiei.</B></center><BR><BR>');
 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Luni'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Marti'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Miercuri'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Joi'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Vineri'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sambata'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Duminica');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','L'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Ma'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Mi'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','J'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','V'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','S'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','D');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Calendarul disponibilitatii.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Tip font'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Marime font'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Cell height'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Cell width'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Culoare ziua curenta '); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Culoarea zilelor din luna '); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Font colour for days not in the display month'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cell bgcolour for days when property/room is available'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cell bgcolour for days not in display month'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cell bgcolour for occupied days'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cell bgcolour for provisionally booked rooms (bookings for which a deposit has not been taken)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cell bgcolour for dates in the past');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Colour key:'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Ocupat/Indisponibil'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Disponibil pentru rezervare'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Rezervari provizorii'); 


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Data de sosire predefinita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Doar pentru unitatile de czare care ofera rezervari pe perioada fixa. Alege ziua in care trebuie sa fie sosirile.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Data sosire predefinita');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Perioada de sedere (zile)'); 
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Arata calendarul disponibilitatilor?'); 
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Seteaza Da pentru a arata calendarul disponibilitatii.'); 
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Confirma selectzia');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Disponibilitate');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Ce trebuie sa faceti: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Verificati datele alese ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Verificati nr. de oaspeti ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Furnizati detaliile persoanle');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Faceti alegerile');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Verificati camera aleasa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Verificati comanda. Cand sunteti multumit, confirmati rezervarea');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Click pe o data libera pentru a vedea formularul de rezervare.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Black bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','No black bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','New Black booking');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Black book these rooms');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Sterge oaspete');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Oaspete sters');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Acest client nu poate fi sters deoarece are rezervari. Stergeti rezervarile acestui client si incercati din nou.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Admin panel shows tape view');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Set this to Yes if you want to use the weekly tape view, as opposed to the monthly calendar view for availability.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Costul camerei: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Email invalid ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Aveti un email de la ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Buna ziua');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Va multumim pentru rezervarea facuta pentru ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Detaliile rezervarii sunt urmatoarele: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Daca aveti intrebari legate de aceasta rezervare sau orice alte servicii, nu ezitati sa ne contactati.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Telefonul nostru este ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Ne puteti contacta si prin email la ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Fumat');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Orice");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Calendar output format');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','This allows the user to change the output format of dates within Jomres');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Calendar input format');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','This allows the user to change the input format of dates within Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Perioadele fixe de rezervare permit pauze ');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Lungimea pauzelor');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publicat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Setari');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Foloseste Paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Use the Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Requires a PayPal Developer Account');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Your paypal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Note: To use paypal you must goto your paypal account & enable Autoreturn. (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Error, the paypal email hasn not been set');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit trail');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','No audit trail');


/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Data');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Ora');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','User (username)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operation');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Property rights');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Vezi detalii');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Orice</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtru data');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtru username');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtru operatiune');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Urmeaza sa soseasca');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Sosesc azi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Ocupant actual');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Pleaca azi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Data de plecare depasita');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Nu a sosit');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filtru');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Utilizator necunoscut');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Camera creata');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Camera actualizata');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Camera stearsa');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Created rm feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Updated rm feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Deleted rm feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Inserted rm type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Updated rm type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Deleted rm type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Created property');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Updated property');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Deleted property');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Created prop. feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Updated prop. feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Deleted prop. feature');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Edited prop. settings');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Published prop.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Created tariff');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Updated tariff');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Deleted tariff');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Created pub. hol.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Updated pub. hol.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Deleted pub. hol.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Added svc. charge');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Cancelled booking');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Booked guest in');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Booked guest out');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Updated cc details');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Entered deposit');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Created guest');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Updated guest');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Deleted guest');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Uploaded new prop image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Uploaded diff. prop image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Deleted image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Uploaded new rm image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Uploaded diff rm image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Uploaded new rsrc image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Uploaded diff. rsrc image');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Booked a room');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Created an extra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Updated an extra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Deleted an extra');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Published extra.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Entered black booking.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Deleted black booking.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Extraoptiuni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Editeaza extraoptiuni');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Descriere');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Nume');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Detalii costuri');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Extraoptiune noua');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Click pe Editeaza pentru a modifica/edita extraoptiunea');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Extraoptiune adaugata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extraoptiune actualizata');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Editeaza item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Cloneaza item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Sterge extraoptiune');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Extraoptiune stearsa');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Management extraoptiuni');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Arata extraoptiuni pe formularul de rezervare?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Selecteaza Da pentru a arata extraoptiunile pe care doriti sa le oferiti clientului');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optionale');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Selecteaza aceasta proprietate');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Inverseaza selectia/selecteaza tot');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Black booking start date');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Service resumes date');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Black bookings');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','One or more of the rooms checked are already booked. If you wish to Black Book these rooms you first need to cancel the bookings against them.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','There was an error attempting to book these rooms, one or more of the rooms you selected is not free.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Rooms included in black booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Delete black booking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','View blackbooking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','No black bookings to list');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Numar de stele');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Arata optiunile legate de fumat?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Seteaza Da adaca doresti sa afisezi optiunile legate de fumat.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Reseteaza');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Your payment status from paypal is set to Pending. Once the hotel can confirm receipt of payment then the booking will be changed to confirmed.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervare anulata');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Cauta:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Cauta ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Show paypal debugging info?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Arata numele camerelor?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Seteaza Da pentru a arat numele camerelor');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Arata tipurile camerelor?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Seteaza Da pentru a arat tipul camerelor');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Arata optiunile legate de fumat?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Be aware: If your default option is Yes and all your rooms are No smoking, then no rooms will show up in the bookings page listing.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Simbolul monedei');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Eg &amp;pound&#59; Please note that you should use the HTML entities code for the required symbol. For a list of these entities please visit <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Cod moneda');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Eg GBP. This is used in the email to the customer confirming their booking.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Detalii');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Warning...You are logged in as a manager with privileges for all properties. Be aware that this may cause problems when performing some functions within Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limiteaza rezervarile in avans?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Days advanced bookings limited to:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTE: It is not recommended that you set both of the following options to Yes, you should use only one of the two tax calculations available to you. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Taxa de cazare');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Taxa de cazare');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Designed for the American market. These are the room tax amounts that will be charged to the guest. You can charge a combination and/or of fixed and percentage figures. Note that these taxes are only applied to the cost of the room.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Taxa fixa');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Procent taxa');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','TVA');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','For any market that applies a blanket rate, eg. Value Added Tax in the UK. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Procent TVA');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Arhiveaza toate inregistrarile');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' inregistrari arhivate');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer archived audit records');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Tarifele noastre');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Nume tarif');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Descriere tarif');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Tip camera');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Valabil de la');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Valabil pana la');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Pe persoana pe noapte');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Pe noapte');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Nu include weekend-uri');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minim de zile');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maxim de zile');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Minim de persoane');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maxim de persoane');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Previzualizare');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Mod de editare activ?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Text curent');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Text nou');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Updated custom text.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Editeaza limba');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','N. de inregistrari arhivate: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','There are more than 200 records in the active audit trail, therefore it is not possible to display the SQL activities performed. If you wish to view the SQL, you will need to analyse the audit table directly. If you want to check the SQL regularly, it is recommended that you archive regularly');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Tip proprietate');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Listeaza tipurile proprietatii');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Editeaza tipurile proprietatii');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Tip proprietate');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Descriere tip proprietate');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Tip proprietate salvat');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Acest tip de proprietate nu poate fi sters. Property type is assigned to one or more properties, please re-assign them before trying to delete');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Tipuri proprietate sterse.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Eroare, proprietatea nu are camere.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Eroare, proprietatea nu are tarife.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Eroare, proprietatea nu are tipuri camere.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Schimba proprietatea');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Rest de plata');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Tranzactia Paypal a fost incheiata, iar o chitanta v-a fost trimisa prin email. Va puteti loga in contul dvs. pe www.paypal.com pentru a vedea detaliile tranzactiei. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Nu exista servicii suplimentare de adaugat la factura');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Avans');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Suma completa');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Suma facturata in momentul rezervarii');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Folositi aceasta optiune pentru a alege daca veti sa platiti la momentul rezervarii. Alegeti Avans daca doriti sa platiti avansul, sau Suma completa daca doriti sa platiti suma completa.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Cal months to show');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','In the room availability, How many months of the calendar should be shown?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Semnat in numele ');

// V1.4 
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Anuleaza');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Please choose the room(s) you wish to take out of service, and the relevant dates. <br>If a room does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/> When you have selected the appropriate dates, click the blue "apply" button to re-check room availability. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>It looks like Joomla has logged you out for inactivity</b> Please log in and try again.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Motiv');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Use payment gateways?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Set this to yes if you want to use online payment gateways. <b>Note:</b>This does not switch off the deposit calculation showed during the booking process. To disable this you can edit the templates that show rooms and wrap the elements that refer to deposits inside a class whos font and bg colour are the same.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Selectati metoda de plata.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway enabled?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modified plugin setting');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Inserted plugin setting');  	
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
define('_JOMRES_COM_ENCRYPTION','Encryption');
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
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Vezi cartea de credit');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Actualizeaza cartea de credit');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Editeaza cartea de credit');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Edit icon size');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Measured in pixels square.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch property image upload');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Imagini care se afla deja in director');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Show link to slideshows?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Show slideshow inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Set this to yes if you want to show the slideshow inline with the property details.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Slideshow full height');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail target height');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Ne pare rau, nu exista imagini disponibile pentru aceasta proprietate. Va rugam faceti upload la niste imagini daca doriti sa folositi aceasta opriune.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Popup window width');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Popup window height');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Locatia imaginii');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Only change this if you have a particular need for the jomres images to be elsewhere. Default if unset is \'/images/stories/jomres/\' in relation to the joomla root.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Arata link catre tarife?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Popups allowed?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','If set to no, then links that normally would have opened in a pop will open inline instead. EXPERIMENTAL! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload slideshow images');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Use this form to upload multiple images of this property.<br/><b>Note</b> that any images with the same name will be overwritten. Also note that this form does not upload room specific images or the property header image, you will need to upload them from the Property Admin section.<br/><b>Note</b> Images uploaded here will be written to the /images/stories/jomres/*property_uid* folder. If this folder does not exist, it will be created, unless of course an alternative directory has been specified in the configuration.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Misc');
/**
* @ignore
*/
define('_JOMRES_A','Configurare site');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Use global property features');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Set this to Yes if you want to force all properties to use only the property features defined by the webmaster.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','To assign an image to this feature you first need to upload your property feature images to the /images/stories/jomres/pfeatures/ folder. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Icon');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Select the search plugin that you want to use.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Momentan nu exista oferte de cazare.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Sunteti sigur ca vreti sa faceti asta?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezervare');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezervare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Security number');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Arata tarife inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresa');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Informatii detaliate');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Click pntru camere si disponibilitate');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Arata info tarife');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Show Address information below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Show detailed property info below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Show rooms and availability below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Show tariff information below this link');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Tarife fixe');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Tarife aproximative');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Celectati modelul de tarif pe care doriti sa-l folositi');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"You have two choices of tariff calculation methods. The first, the 'flat rate' method allows you to offer a number of different tariffs to the guest and the rate for the stay is the same for the entire time. This is useful if you want to offer several different tariffs for the same date, eg Bed and Breakfast tariff and B&B and Evening meal tariff. Choose the 'averages' tariff if you want to adjust your prices dependant on the date in question. Jomres will find all of the tariffs for each day in the booking, add them together then return the average rate across the period");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Folosteste portalul Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Set this to Yes if Jomres is going to be used in conjunction with the Jomres portal software');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Show departure date input?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the depareture date in bookings will always be set to the day after the arrival date.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Description limit');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"This limits the number of characters shown in the property listing when drawing from the property description.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Daily rate multiplier');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"This allows the user to append a multiplier to the daily rate that is returned to booking form during the booking process (useful if you want to show a properties rate by the week for example)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Slideshow popup width');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Slideshow popup height');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Update');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Click pe butonul Update pentru a verifica disponibilitatea');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Used date() format style?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Click pentru publicare');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Click pentru nepublicare');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Va rugam completati urmatoarele campuri: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Va multumim.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Use global room types');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Set this to Yes if you want to force all properties to use only the room types defined by the webmaster. You need to set this to Yes if you intend to allow searching via room types.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','To assign an image to this room type you first need to upload your room type images to the /images/stories/jomres/rmtypes/ folder. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Input error border colour');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input error background colour');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Default country in booking form');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Use site help?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Set this to Yes if you want Jomres to show the site help text above the search bar.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Edit your sitehelp booking text here.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Campurile marcate cu steluta rosie sunt obligatorii.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Utilizatorii isi pot inregistra proprietatile?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Set this to Yes if you want users to be able to register their own properties without admin intervention.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Va rugam furnizati tara si regiunea proprietatii dvs.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Va rugam completati detaliile unitatii de cazare.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Campurile marcate cu steluta rosie sunt obligatorii.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Proprietate creata');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Trebuie sa fiti autentificat pentru a putea inscrie unitatea de cazare. Daca inca nu aveti un cont pe acest site, va rugam sa va inregistrati.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Proprietate creata: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Pentru utilizatorul: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Taxare pe zi?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' pe zi');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Arata calendarul de la inceputul anului?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','The availability calendar shows from the beginning of the current year.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Arata info detaliate despre camera?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','If you set this to No, then Jomres will not attempt to show all the during bookings, instead it will simply advise that availability exists.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Numar disponibil de camere');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Va rugam selectati nr. de camere dorit, de tipul dorit.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Numar dorit');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Inapoi la detaliile proprietatii');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Tipuri camere/Tip unitate');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Use Jomres metadata?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','If you set this to Yes, then Jomres will use text that is repeated from property description & Property Listings pages to generate Metadata. Seperate words with a space.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stop words');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"These are stop words, IE words that you <i>don't</i> want to appear in the meta data.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Other elements to remove');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','The are elements that should be stripped from the meta data. An example could be less than symbols, quotatin marks etc.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Frequency');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','The number of times a word must be repeated before it can be included in the meta data.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Random search limit');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Show google currency conversion links in tariff listing?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Curs valutar');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Allow users to edit using html editors?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','<p>Folositi acest formular pentru a face rezervarea. Miscati mouse-ul deasupra butoanelor marcate cu "i" pentru mai multe informatii despre acea coloana. Alegeti data sosirii, data plecarii si numarul de persoane, apoi selectati camera dorita din lista celor disponibile. Dati click pe carema dorita pentru a o adauga la rezervare. Apoi, puteti alege serviciile suplimentare dorite si furnizati adresa dvs. Cand formularul va fi completat se va activa butonul Revizuieste Rezervarea, pentru ca dumneavoastra sa puteti revizui si confirma rezervarea.</p><br />');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','<p>Folositi acest formular pentru a face rezervarea. Miscati mouse-ul deasupra butoanelor marcate cu "i" pentru mai multe informatii despre acea coloana. Alegeti data sosirii, data plecarii si numarul de persoane. Apoi, puteti alege serviciile suplimentare dorite si furnizati adresa dvs. Cand formularul va fi completat se va activa butonul Revizuieste Rezervarea, pentru ca dumneavoastra sa puteti revizui si confirma rezervarea.</p><br />');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Particularitatile rezervarii ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Selectati datele cererii de rezervare');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Disponibilitate ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Selectati camerele dorite');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Uitati-va aici pentru a vedea daca proprietatea este disponibila intre datele alese de dvs.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Servicii suplimentare ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Selectati serviciile suplimentare pe care doriti sa le includeti in cererea de rezervare');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Pe noapte');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Adresa dumneavoastra ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Va rugam introduceti detaliile dvs. Toate campurile sunt obligatorii');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Camere disponibile');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Camere alese');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Cea mai recenta data de sosire posibila este: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Pe noapte:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Servicii suplimentare:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','TVA:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Reducere:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Total:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Oaspeti');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Click pentru a selecta aceasta camera in vederea rezervarii');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Click pentru a sterge aceasta camera din lista celor selectate de dvs.');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Tipuri oaspeti');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Tip');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Tip oaspete, ex Copil intre 5-10 ani, sau Student ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Note');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Note cu privire la tipul oaspetelui');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maxim');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Nr. maxim de oaspeti de acest tip care poate fi selectat in formularul de rezervare');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Este procent');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','The figure calculated is a percentage of the Base figure calculated for the room. If this is set to no then the figure you specify is simply added or subtracted from the base room value.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Add variance?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','The figure calculated is added to or removed from the Base figure calculated for the room. Set this to No if you want this to be a discount from the base figure. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Variance');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','The amount of the variance');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modified customer type order');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Published customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Deleted customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Created customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Updated customer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Tip oaspete actualizat');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Show rooms list in property details page?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Show link to rooms list in property details page?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Show <b>only</b> Availability calendar/Rooms list?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Switch this to Yes to disable display of the property header and details, so that only the rooms list/availability calendar is viewable in the property details section. Only really intended for users renting out single room properties (eg apartments, cottages etc).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS Style to use on site');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Dep minimum interval');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','The mimimum interval in the booking form between the arrival date and the departure date.');

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
define('_JOMRES_ORDER','Sorteaza dupa');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','You have configured Jomres as a single room property (eg an apartment, cottage, villa) however you have more than one room created. This may result in errors when using Jomres, so if you are going to continue using Jomres to manage a single room property you need to remove all but one of the rooms. Please modify your configuration so that Single Room Property = No, then go to Property Admin and remove all rooms except one, so that you only have one room against this property.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Camp obligatoriu');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Zile inainte de sosire');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','The minimum number of days that must elapse, from "today", before the arrival date.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Pe noapte: ');

/**
* @ignore
*/
define('_JOMRES_DTV','Date type variations');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Zi a saptamanii');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Interval zile');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Zile de sedere');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Ultima clipa');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Zi a saptamanii');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Ziua saptamanii');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Selectie clasa tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','This dropdown allows you to choose a custom tariff class object that you may have created/downloaded and installed as a seperate component in Joomla. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Guest type default');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Default number of first the first Guest type. If you use guest types, then this is the default number that the first guest type in the booking form will be set to.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Doar utilizatorii inregistrati pot face rezervari?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Ne pare rau, trebuie sa fiti inregistrat pentru a face rezervari. Click aici pentru a va inregistra pe acest site. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Font colour for links to current bookings'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend borders');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Which dashboard plugin to use'); 
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','If you have installed any Jomres dashboard plugins you can choose an alternative to the default dashboard here.'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Camera este rezervata'); 
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Black booking'); 
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Rotunjeste avansul pana la cel mai apropiat intreg?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Taxeaza avans?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tariff charges stored as weekly figures?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','You have the option of storing tariff charges in either daily or weekly values. If storing them as weekly, you MUST set this option to Yes.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Tarif pe saptamana');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fixed arrival dates recurr: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Optiune Fumator invalida');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Data de sosire incorecta');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Data de plecare incorecta');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Rezervarea este prea surta. Numarul minim de zile care trebuie sa existe intre data sosirii si data plecarii:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Intervalul dvs este ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Varianta tip oaspete incorecta');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Selectati numarul/tipul oaspetilor');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','You have too many in the party for the available tariffs');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Ati selectat mai multe camere decat oaspeti, click pe o camera pentru a o sterge din selectia dvs.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Prea multi oaspeti pentru numarul de paturi');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Trebuie sa alegeti mai multe camere');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Alegeti o camera');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Introduceti prenumele');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Introduceti numele');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Introduceti numarul casei/blocului');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Introduceti strada');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Introduceti orasul');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Introduceti regiunea/judetul');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Introduceti codul postal');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Introduceti tara');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Introduceti telefonul fix');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Introduceti telefonul mobil');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Introduceti adresa de email');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Adresa de email nu este valida');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Nu s-a putut face validarea domeniului adresei de email');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Avem disponibilitati!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Nici o camera nu a fost selectata inca');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Nr. rezervare.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok to book, message box background');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump template vars?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Figure is percentage');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Set this to Yes if the single person calculation figure is a percentage. If no then it will be applied as a flat sum.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Camere disponibile/limita tarif');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Use this input to limit the number of available rooms & tariffs that are listed in the booking form. Set it to zero if you do not want limiting enabled. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Nu avem nimic disponibil in aceasta perioada!');

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
define('_JOMRES_BOOKITNOW','Rezerva acum: ');
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
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Use global currency?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Set this to yes to force all properties to use the same currency (e.g. & # 8 3 6 4 ;)');
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
define('_JOMRES_COM_WEEKENDONLY','Numai in weekend-uri');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tariful este valabil doar daca perioada sederii include o zi din weekend (vineri sau sambata) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Zilele weekend-ului');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Selectati tara inainte de a introduce informatiile despre proprietate.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your property changes before uploading a property image');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Preturi incepand cu - ');
/** 
* @ignore 
*/ 
define('_JOMRES_SEARCH_ALL','Toate');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Regiune');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Facilitati');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Descriere');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Disponibilitate');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Tip');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Cauta dupa tara');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Cauta dupa regiune');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Oras');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Cauta facilitati.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Cauta');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Introduceti un cuvant de cautat si apasati butonul');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Cauta cuvintele: ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Va rugam introduceti data sosirii si data plecarii si apasati butonul pentru a gasi spatii de cazare disponibile in perioada aleasa.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','Cazare la');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','Camere/Paturi');

/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Normal');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Nume proprietate');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Regiune proprietate');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Oras proprietate');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Stele');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Oferte cazare');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Detalii - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Formular rezervare');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Actualizati detaliile de contact');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-verificare disponibilitate camera<br/>(Camera selectata va fi stearsa)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-verificare disponibilitate');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modificare optiuni extra');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Schimbare camera selectata');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Update detalii de contact');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Ne pare rau, unul sau mai multe campuri din detaliiile de contact sunt incorecte.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Imagine camera');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Format suma');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Arata optiunile manageruluui ca imagini');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Cauta optiuni');
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
define('JOMRES_COM_A_MESSAGE','Mesaj');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Avansat');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanagement');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Mod configurare tarif');
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
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Arata lista de camere in pagina cu detalii a unitatii de cazare?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Tip unitate de cazare');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','doar SRP');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Nr. maxim de persoane in camera');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Nr. maxim de persoane in rezervare');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Adauga memo');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Editeaza memo');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Sterge memo');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','Vezi memo-uri');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Memo nou adaugat');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Memo editat');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Memo sters');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','Optiunile mele');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','Nu sunteti autentificat. Daca va utentificati/inregistrti pe acest site, veti putea vizualiza informatii referitoare la rezervarile dvs.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Arata rezervari');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','Rezervarile mele');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','Arata rezervri pentru care nu s-a platit avans');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','Vezi rezervare');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Vezi unitati de cazare favorite');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Nu ati adaugat unitati de cazare favorite!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Adauga la favorite');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Tip unitate cazare');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Unitati de cazare in zona');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Activ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Acest plugin va permite configurarea de preturi dinamice pentru camere.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room/property type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threshold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied. Note however, if multiple rooms are booked then the current level of discount will be applied to all rooms and will not reduce as more rooms are selected.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Interval (Numarul de zile minim de azi pana la rezervare)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Grad de ocupare al camerelor de 10% sau mai putin');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Grad de ocupare al camerelor de 25% sau mai putin');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Grad de ocupare al camerelor de 50% sau mai putin');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Grad de ocupare al camerelor de 75% sau mai putin');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Tip camera/unitate cazare ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' a fost redus de la ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' la ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Pretul camerei nu include discount ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Cheie API Google');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Foloseste SSL in formularul de rezervare?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','Trebuie sa aveti un certificat SSL vlid pentru ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Nr. maxim de persoane care se pot caza in aceasta unitate');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Ultimul moment');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Activ?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Seteaza Da daca vrei sa oferi oefrte de ultim moment.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Interval');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Daca o rezervare este facuta cu doar N zile inainte de data sosirii, atunci va fi aplicat un discount');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In procente');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Un discount a fost aplicat acestei rezervari!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Costul sederii a fost redus cu ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',' ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID','% discount daca sosirea este inainte de ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Fa o rezervare acum pentru a profita de aceasta oferta!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE',' ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID','% discount daca sosirea este inainte de ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE','% sau mai mult discount daca data sosirii este inainte de ');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Informatii detaliate trife?');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Seteaz Da ca sa arati informatii detaliate despre tarife');
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
define('_JOMCOMP_AMEND','Modifica rezervarea - Selectare unitate cazare');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Selecteaza unitate cazare');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Valoare initiala contract:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Avans platit');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Avans neplatit');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Modifica total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Modifica avans');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Anulare');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configurare');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Comision');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','Arata comisioanele');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Comisioane');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Titlu');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Tip');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Valoare comision');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Cod moneda');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Arata unitati cazare');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Nume unitate cazare');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Adresa');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Prooprietatile de pe fond rosu nu au nici un comision asociat');
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
define('_JRPORTAL_STATS_PATETITLE','Statistici');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistici pentru: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Perioada: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Unitati cazare - Vizualizari');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','Ianuarie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','Februarie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','Martie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','Aprilie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','Mai');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','Iunie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','Iulie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','August');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','Septembrie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','Octombrie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','Noiembrie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','Decembrie');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Numar de rezervari');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Valoarea rezervarilor');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Folosire camera');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Comision estimativ');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Comision');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Arata rezervarile');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','ID Unitate cazare');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','ID Client');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','ID Asociat');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Factura nr.');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Total rezervare');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','ID Contract');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Nr. contract');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Cod Moneda');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Creat');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Arhivat');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date arhivate');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Adauga unitte de cazare');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Sursa : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Este o proprietate cu mai multe camere care vor fi inchiriate separat?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Aceasta unitate de cazare este ca un hotel/vila/pensiune? Daca da, tunci selecteaza Da. Daca este o unitate de cazare care se inchiriaza toata, gen apartament/garsoniera selecteaza Nu.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Adauga item la nBill');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager la factura');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Unitate de cazare asociata (daca este cazul)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Valoare');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Descriere');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Item-ul a fost adaugat cu succes la ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Vezi comenzi");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Item-ul NU a fost adaugat cu succes la ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Eroare, nu ati selectat valoarea facturii");
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
define('_JOMRES_COM_ISTHISANMRP',"Aceasta unitate de cazare este ca un hotel/vila/pensiune? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Optiunile de configurare difera in functie de modul de inchiriere, si anume camere in unitatea de cazare sau unitatea de cazare cu totul. Selectati MRP daca oferiti spre inchiriere camere, sau SRP daca oferiti spre inchirere intreaga unitate de cazare. ");

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
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Total cazare");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"nopti la");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"pe camera ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Total optiuni extra ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Pret ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Va rugm cititi si acceptati ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"Mai jos aveti detaliile rezervarii.<br /> Pentru a face modificari, apasati pe butonul Modifica Rezervare. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Daca doriti sa modificati informatiile de mai sus, va rugam dati click aici");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Modifica Rezervarea");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Va rugam introduceti cerintele speciale in casuta de mai jos.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Confirm ca informatiile de mai sus sunt corecte si sunt de acord cu ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Miscati mouse-ul deasupra unei imagini pentru vizualizare");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Arata slideshow deasupra sau sub detaliile unitatii de cazare.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Sus");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Jos");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Amandoua");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"pe persoana pe noapte ");
// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Fisier limba implicit");
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
	define('_PN_PAGE','Pagina');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','din');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Precedent');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Urmator');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','Sfarsit');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Afiseaza #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Rezultate');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Acesta nu este un formular de rezervare. Prin acest formular puteti trimite un mesaj proprietarului unitatii de cazare.<br/>Va rugam introduceti mesajul pe care doriti sa-l trimiteti proprietarului unitatii ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Cerere de informatii ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Mesajul dumneavoastra a fost trimis pe adresa de email a proprietarului unitatii de cazare. O copie a mesajului a fost trimisa si pe adresa dvs. de email. Veti primi raspuns in cel mai scurt timp posibil.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' in legatura cu ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Introduceti caracterele din imagine');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Nu pot citi caracterele din imagine. Genereaza o ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Trimite');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','imagine noua');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Mesaj');
/**
* @ignore
*/
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
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');/**
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
?>